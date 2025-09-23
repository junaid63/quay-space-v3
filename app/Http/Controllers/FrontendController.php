<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Ourteam;
use App\ContentPage;

class FrontendController extends Controller
{
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
        return view($view,compact('contentpagesget'));
    }
    public function aboutus()
    {
        $view = 'frontend.aboutus';
        $ourteams = $this->OurTeamsGet();
        $contentpagesget = $this->ContentPagesGet();
        return view($view, compact('ourteams','contentpagesget'));
    }
    public function ourteam()
    {
        $view = 'frontend.our-team';
        $ourteams = $this->OurTeamsGet();
        $contentpagesget = $this->ContentPagesGet();
        return view($view,compact('ourteams','contentpagesget'));
        
    }
    public function faqs()
    {
        $view = 'frontend.faqs';
        $contentpagesget = $this->ContentPagesGet();
        return view($view,compact('contentpagesget'));
    }
    public function contactus()
    {
        $view = 'frontend.contactus';
        $contentpagesget = $this->ContentPagesGet();
        return view($view,compact('contentpagesget'));

    }
    public function services()
    {
        $view = 'frontend.services';
        $contentpagesget = $this->ContentPagesGet();
        return view($view,compact('contentpagesget'));
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
        $contentPages = ContentPage::where('slug',$slug)->first();
        return view($view,compact('contentPages','contentpagesget'));
    }
    
}
