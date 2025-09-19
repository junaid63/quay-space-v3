<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Ourteam;

class FrontendController extends Controller
{
    private function OurTeamsGet() 
    {
        return Ourteam::where('status', 1)->get();
    }
    public function index()
    {
        $view = 'frontend.index';
        return view($view);
    }
    public function aboutus()
    {
        $view = 'frontend.aboutus';
        $ourteams = $this->OurTeamsGet();
        return view($view, compact('ourteams'));
    }
    public function ourteam()
    {
        $view = 'frontend.our-team';
        $ourteams = $this->OurTeamsGet();
        return view($view,compact('ourteams'));
    }
    public function faqs()
    {
        $view = 'frontend.faqs';
        return view($view);
    }
    public function contactus()
    {
        $view = 'frontend.contactus';
        return view($view);
    }
    public function services()
    {
        $view = 'frontend.services';
        return view($view);
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
    public function booknow()
    {
        $view = 'frontend.booknow';
        return view($view);
    }
    public function membership()
    {
        $view = 'frontend.membership';
        return view($view);
    }
    
}
