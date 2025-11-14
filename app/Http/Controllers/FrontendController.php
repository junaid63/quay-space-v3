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
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        return view($view,compact('contentpagesget','amenitiesget'));
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
    
    public function services($slug = null)
    {
        $view = 'frontend.services';
        $contentpagesget = $this->ContentPagesGet();
        $amenitiesget = $this->AmenitiesGet();
        $Servicesget = Service::where('status', 1)->get();

        if ($slug) {
            // Agar slug diya hai to us service ka detail lao
            $Servicesdetail = Service::with('headings.cardContent.cardPoints')->where('slug', $slug)->firstOrFail();
        } else {
            // Agar slug nahi diya (sirf /services open hua)
            if ($Servicesget->isNotEmpty()) {
                $Servicesdetail = $Servicesget->first();
                // Redirect /services → /services/{first-slug}
                return redirect()->route('services', $Servicesdetail->slug);
            } else {
                // Agar koi service hi nahi hai → home redirect
                return redirect()->route('index');
            }
        }

        return view($view, compact('contentpagesget', 'Servicesget', 'Servicesdetail','amenitiesget'));
    }




    public function getServiceDetail($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return response()->json($service);
    }
    public function contactSubmit(Request $request)
    {   
        $Data = new Contact();
        $Data->name = $request->name;
        $Data->email = $request->email;
        $Data->phone = $request->phone;
        $Data->message = $request->message;
        $Data->save();
        
        return response()->json([
            "status"=> "success",
            "message"=> "Thank you for Contacting us",
            "redirect"=> "/"
        ]);
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
    
}
