<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ourteam;
use App\Faq;
use App\Service;
use App\Contact;
use App\ContentPage;
use App\Newsletter;
use App\Amenity;
use App\Blog;
use App\MailingAdvantage;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Str;
use App\Jobs\ContactJob;


class FrontendController extends Controller
{
    private function AmenitiesGet()
    {
        return Amenity::where('status', 1)->get();
    }
    private function ContentPagesGet() 
    {
        return ContentPage::where('status', 1)->get();
    }
    private function OurTeamsGet() 
    {
        return Ourteam::where('status', 1)->get();
    }
    public function index()
    {
        $view = 'frontend.index';
        $blogs = Blog::get();
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        $Servicesget = Service::where('status', 1)->get();
        $firstService = $Servicesget->first();
        return view($view,compact('contentpagesget','amenitiesget','blogs','Servicesget','firstService'));
    }
    public function aboutus()
    {
        $view = 'frontend.aboutus';
        $ourteams = $this->OurTeamsGet();
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        return view($view, compact('ourteams','contentpagesget','amenitiesget'));
    }
    public function ourteam()
    {
        $view = 'frontend.our-team';
        $ourteams = $this->OurTeamsGet();
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        return view($view,compact('ourteams','contentpagesget','amenitiesget'));
        
    }
    public function blog()
    {
        $view = 'frontend.blog';
        $blogs = Blog::get();
        $ourteams = $this->OurTeamsGet();
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        return view($view,compact('ourteams','contentpagesget','amenitiesget','blogs'));
        
    }
    public function blogdetails($slug)
    {
        $view = 'frontend.blog-details';
        $blogdetails = Blog::where('slug', $slug)->first();
        $popularblogs = Blog::where('id' , '!=' , $blogdetails->id)->inRandomOrder()->take(3)->get();
        $ourteams = $this->OurTeamsGet();
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        return view($view,compact('ourteams','contentpagesget','amenitiesget','blogdetails','popularblogs'));
        
    }
    public function faqs()
    {
        $view = 'frontend.faqs';
        $dynamicFaqs = Faq::where('status', 1)->get();
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        return view($view,compact('contentpagesget','dynamicFaqs','amenitiesget'));
    }
    public function calendly()
    {
        $view = 'frontend.calendly';
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        return view($view,compact('contentpagesget', 'amenitiesget'));
    }
    

    public function contactus()
    {
        $view = 'frontend.contactus';
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        return view($view,compact('contentpagesget','amenitiesget'));

    }
    public function threesixty()
    {
        $view = 'frontend.360-view';
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        return view($view,compact('contentpagesget','amenitiesget'));

    }
    public function threesixty_detail()
    {
        $view = 'frontend.second-floor-detail';
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        return view($view,compact('contentpagesget','amenitiesget'));

    }
    
    // public function services($slug = null)
    // {
    //     $view = 'frontend.services';
    //     $contentpagesget = $this->ContentPagesGet();
    //     $amenitiesget = $this->AmenitiesGet();
    //     $Servicesget = Service::where('status', 1)->get();

    //     if ($slug) {
    //         // Agar slug diya hai to us service ka detail lao
    //         $Servicesdetail = Service::with('headings.cardContent.cardPoints')->where('slug', $slug)->firstOrFail();
    //     } else {
    //         if ($Servicesget->isNotEmpty()) {
    //             $Servicesdetail = $Servicesget->first();
    //             // Redirect /services → /services/{first-slug}
    //             return redirect()->route('services', $Servicesdetail->slug);
    //         } else {
    //             return redirect()->route('index');
    //         }
    //     }

    //     return view($view, compact('contentpagesget', 'Servicesget', 'Servicesdetail','amenitiesget'));
    // }
    public function services($slug = null)
    {
        $view = 'frontend.services';
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        $Servicesget = Service::where('status', 1)->get();
        $firstService = $Servicesget->first();
        if ($slug) {
            // slug se service lao
            $Servicesdetail = Service::with('headings.cardContent.cardPoints')
                ->where('slug', $slug)
                ->firstOrFail();
        } else {
            if ($Servicesget->isNotEmpty()) {
                $Servicesdetail = $Servicesget->first();
            } else {
                return redirect()->route('index');
            }
        }

        return view($view, compact(
            'contentpagesget',
            'Servicesget',
            'Servicesdetail',
            'amenitiesget',
            'firstService'
        ));
    }





    public function getServiceDetail($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return response()->json($service);
    }
    public function contactSubmit(Request $request)
    {   
        $refkey = Str::random(10);

        $Data = new Contact();
        $Data->name = $request->name;
        $Data->email = $request->email;
        $Data->phone = $request->phone;
        $Data->selected_service = $request->service;
        $Data->message = $request->message;
        $Data->save();

        dispatch(new ContactJob($Data->id, $Data->email, "contactuser"));
        $NOTIFICATION_EMAIL = explode(',' , setting('site.Notification_Email'));
        foreach($NOTIFICATION_EMAIL as $NE)
        {
            dispatch(new ContactJob($Data->id, $NE, "admin"));
        }
        
        return response()->json([
            "status"=> "success",
            "message"=> "Thank you for Contacting us",
            "redirect"=> route('thankyouPage', $refkey) 
        ]);
    }
    public function thankyouPage($refkey) 
    {
        $view = 'frontend.contact-thankyou';
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        return view($view, compact('contentpagesget','amenitiesget'));
    }

    public function newsletterSubmit(Request $request)
    {
        $newsletter = new Newsletter();
        $newsletter->newsemail = $request->newsemail;
        $newsletter->save();

        return response()->json([
             "status"=> "success",
            "message"=> "Thank you for Newsletter",
            "redirect"=> "/"
        ]);
    }
    // public function mailingadvantageSubmit(Request $request)
    // {
    //     $mailingAdvantage = new MailingAdvantage();
    //     $mailingAdvantage->service_name          = $request->service_name;
    //     $mailingAdvantage->company_or_name       = $request->full_name;
    //     $mailingAdvantage->email                 = $request->email;
    //     $mailingAdvantage->phone                 = $request->phone;
    //     $mailingAdvantage->company_registration  = $request->company_number;
    //     $mailingAdvantage->company_address       = $request->company_address;
    //     $mailingAdvantage->company_message       = $request->director_details;
    //     $mailingAdvantage->scanning_option       = $request->scanning_option;
    //     if ($request->hasFile('proof_id')) {
    //         $mailingAdvantage->upload_passport =
    //             $request->file('proof_id')->store('mailing-advantage', 'public');
    //     }
    //     if ($request->hasFile('proof_address')) {
    //         $mailingAdvantage->upload_utility_bill =
    //             $request->file('proof_address')->store('mailing-advantage', 'public');
    //     }
    //     $mailingAdvantage->save();

    //     return response()->json([
    //         "status"   => "success",
    //         "message"  => "Thank you for Mailing Advantage",
    //         "redirect" => "/"
    //     ]);
    // }
    // public function mailingadvantageSubmit(Request $request)
    // {
    //     $mailingAdvantage = new MailingAdvantage();
    //     $mailingAdvantage->service_name          = $request->service_name;
    //     $mailingAdvantage->company_or_name       = $request->full_name;
    //     $mailingAdvantage->email                 = $request->email;
    //     $mailingAdvantage->phone                 = $request->phone;
    //     $mailingAdvantage->company_registration  = $request->company_number;
    //     $mailingAdvantage->company_address       = $request->company_address;
    //     $mailingAdvantage->company_message       = $request->director_details;
    //     $mailingAdvantage->scanning_option       = $request->scanning_option;

    //     if ($request->hasFile('proof_id')) {
    //         $mailingAdvantage->upload_passport =
    //             $request->file('proof_id')->store('mailing-advantage', 'public');
    //     }
    //     if ($request->hasFile('proof_address')) {
    //         $mailingAdvantage->upload_utility_bill =
    //             $request->file('proof_address')->store('mailing-advantage', 'public');
    //     }

    //     $mailingAdvantage->save();

    //     Stripe::setApiKey(config('services.stripe.secret'));

    //     $price = $request->service_price; 
    //     $selectedPlan = $request->service_price;
    //     $session = Session::create([
    //         'payment_method_types' => ['card'],
    //         'customer_email' => $request->email,
    //         'line_items' => [[
    //             'price_data' => [
    //                 'currency' => 'gbp',
    //                 'product_data' => ['name' => $selectedPlan],
    //                 'unit_amount' => $price * 100,
    //             ],
    //             'quantity' => 1,
    //         ]],
    //         'mode' => 'payment',
    //         'success_url' => url('/success'),
    //         'cancel_url' => url('/cancel'),
    //         'metadata' => [
    //             'full_name' => $request->full_name,
    //             'phone' => $request->phone,
    //         ],
    //     ]);

    //     // 3. Send Stripe URL in JSON response
    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Thank you for the Mailing Advantage Please Wait you redirecting the stripe page',
    //         'stripe_url' => $session->url
    //     ]);
    // }

    public function mailingadvantageSubmit(Request $request)
    {
        $mailingAdvantage = new MailingAdvantage();
        $mailingAdvantage->service_name          = $request->service_name; 
        $mailingAdvantage->company_or_name       = $request->full_name;
        $mailingAdvantage->email                 = $request->email;
        $mailingAdvantage->phone                 = $request->phone;
        $mailingAdvantage->company_registration  = $request->company_number;
        $mailingAdvantage->company_address       = $request->company_address;
        $mailingAdvantage->company_message       = $request->director_details;
        $mailingAdvantage->scanning_option       = $request->scanning_option;
        $mailingAdvantage->payment_status        = 'unpaid';

        if ($request->hasFile('proof_id')) {
            $mailingAdvantage->upload_passport =
                $request->file('proof_id')->store('mailing-advantage', 'public');
        }

        if ($request->hasFile('proof_address')) {
            $mailingAdvantage->upload_utility_bill =
                $request->file('proof_address')->store('mailing-advantage', 'public');
        }

        $mailingAdvantage->save(); // FIRST SAVE

        Stripe::setApiKey(config('services.stripe.secret'));

        $price = $request->service_price;

        $session = Session::create([
            'payment_method_types' => ['card'],
            'customer_email' => $request->email,
            'line_items' => [[
                'price_data' => [
                    'currency' => 'gbp',
                    'product_data' => ['name' => 'Mailing Advantage Plan'],
                    'unit_amount' => $price * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => url('/success?session_id={CHECKOUT_SESSION_ID}'),
            'cancel_url' => url('/cancel'),
            'metadata' => [
                'mailing_advantage_id' => $mailingAdvantage->id,
            ],
        ]);

        $mailingAdvantage->payment_id = $session->id;
        $mailingAdvantage->payment_response = json_encode($session);
        $mailingAdvantage->price     = $request->service_price; 
        $mailingAdvantage->save();

        return response()->json([
            'status' => 'success',
            'stripe_url' => $session->url
        ]);
    }
    public function success(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $session = \Stripe\Checkout\Session::retrieve($request->session_id);
        $mailingAdvantage = MailingAdvantage::where('payment_id', $session->id)->first();

        if ($mailingAdvantage && $session->payment_status == 'paid') {
            $mailingAdvantage->payment_status = 'paid';
            $mailingAdvantage->payment_response = json_encode($session);
            $mailingAdvantage->save();
            $contentpagesget = $this->ContentPagesGet();
            return view('frontend.success', compact('contentpagesget','mailingAdvantage'));
        }

        // Agar session expire ho chuki hai
        if ($session->status == 'expired' && $mailingAdvantage) {
            $newSession = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'customer_email' => $mailingAdvantage->email,
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'gbp',
                        'product_data' => ['name' => 'Mailing Advantage Plan'],
                        'unit_amount' => $mailingAdvantage->price * 100,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => url('/success?session_id={CHECKOUT_SESSION_ID}'),
                'cancel_url' => url('/cancel'),
                'metadata' => [
                    'mailing_advantage_id' => $mailingAdvantage->id,
                ],
            ]);

            $mailingAdvantage->payment_id = $newSession->id;
            $mailingAdvantage->save();
            return redirect($newSession->url);
        }
        return redirect('/cancel')->with('error','Payment not completed.');
    }

    // public function success(Request $request)
    // {
    //     Stripe::setApiKey(config('services.stripe.secret'));

    //     $session = \Stripe\Checkout\Session::retrieve($request->session_id);

    //     $mailingAdvantage = MailingAdvantage::where('payment_id', $session->id)->first();

    //     if ($mailingAdvantage && $session->payment_status == 'paid') {
    //         $mailingAdvantage->payment_status = 'paid';
    //         $mailingAdvantage->payment_response = json_encode($session);
    //         $mailingAdvantage->save();

    //         return view('frontend.success', compact('mailingAdvantage'));
    //     }

    //     if ($session->status == 'expired') {
    //         $newSession = \Stripe\Checkout\Session::create([
    //             'payment_method_types' => ['card'],
    //             'customer_email' => $mailingAdvantage->email,
    //             'line_items' => [[
    //                 'price_data' => [
    //                     'currency' => 'gbp',
    //                     'product_data' => ['name' => 'Mailing Advantage Plan'],
    //                     'unit_amount' => $mailingAdvantage->price * 100,
    //                 ],
    //                 'quantity' => 1,
    //             ]],
    //             'mode' => 'payment',
    //             'success_url' => url('/success?session_id={CHECKOUT_SESSION_ID}'),
    //             'cancel_url' => url('/cancel'),
    //             'metadata' => [
    //                 'mailing_advantage_id' => $mailingAdvantage->id,
    //             ],
    //         ]);

    //         // update new session id
    //         $mailingAdvantage->payment_id = $newSession->id;
    //         $mailingAdvantage->save();

    //         // redirect again to stripe
    //         return redirect($newSession->url);
    //     }

    //     return redirect('/cancel')->with('error','Payment not completed.');
    // }

    // public function success(Request $request)
    // {

    //     Stripe::setApiKey(config('services.stripe.secret'));
    //     $session = \Stripe\Checkout\Session::retrieve($request->session_id);
    //     $mailingAdvantage = MailingAdvantage::where('payment_id', $session->id)->first();

    //     if ($mailingAdvantage && $session->payment_status == 'paid') {
    //         $mailingAdvantage->payment_status = 'paid';
    //         $mailingAdvantage->payment_response = json_encode($session);
    //         $mailingAdvantage->save();
    //     }

    //     $contentpagesget = $this->ContentPagesGet();
    //     return view('frontend.success', compact('contentpagesget','mailingAdvantage'));
    // }


    public function booknow()
    {
        $view = 'frontend.booknow';
        $contentpagesget = $this->ContentPagesGet();
        return view($view,compact('contentpagesget'));
    }
    public function membership()
    {
        $view = 'frontend.membership';
        $contentpagesget = $this->ContentPagesGet();
        return view($view,compact('contentpagesget'));
    }
    public function contentpages($slug)
    {
        $view = 'frontend.contentpages';
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        $contentPages = ContentPage::where('slug',$slug)->first();
        return view($view,compact('contentPages','contentpagesget','amenitiesget'));
    }
    


    //Stripe Code Start
    private function createToken()
    {
        $token = null;
        try {
            $token = $this->stripe->tokens->create([
                'card' => [
                    'number' => $cardData['cardno'],
                    'exp_month' => $cardData['expirymonth'],
                    'exp_year' => $cardData['expiryyear'],
                    'cvc' => $cardData['cvv']
                ]
            ]);
        } catch (CardException $e) {
            $token['error'] = $e->getError()->message;
        } catch (Exception $e) {
            $token['error'] = $e->getMessage();
        }
        return $token;
    }

    private function createCharge($tokenId, $amount, $orderid)
    {
        $charge = null;
        try {
            $datetime = date('d-m-Y H:i:s');
            $charge = $this->stripe->charges->create([
                'amount' => $amount,
                'currency' => 'gbp',
                'source' => $tokenId,
                'description' => 'Payment against Order# ' . $orderid . ' on ' . $datetime,
            ]);
        } catch (Exception $e) {
            $charge['error'] = $e->getMessage();
        }
        return $charge;
    }
    //Stripe Code End
}
