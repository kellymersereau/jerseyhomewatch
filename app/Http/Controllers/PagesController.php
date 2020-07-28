<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(Request $request)
    {
        $title = "Jersey Home Watch";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "home";
        $canonicalUrl = "https://www.jerseyhomewatch.co";
        
        return view('pages.home', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl
        ]);
    }
    
    public function services(Request $request)
    {
        $title = "Services";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "services";
        $canonicalUrl = "https://www.jerseyhomewatch.co/services";
        
        return view('pages.services', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl
        ]);
    }
    
    public function testimonials(Request $request)
    {
        $title = "Testimonials";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "testimonials";
        $canonicalUrl = "https://www.jerseyhomewatch.co/testimonials";
        
        return view('pages.testimonials', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl
        ]);
    }
    
    public function faq(Request $request)
    {
        $title = "Frequently Asked Questions";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "faq";
        $canonicalUrl = "https://www.jerseyhomewatch.co/faq";
        
        return view('pages.faq', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl
        ]);
    }
    
    public function about(Request $request)
    {
        $title = "About";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "about";
        $canonicalUrl = "https://www.jerseyhomewatch.co/about";
        
        return view('pages.about', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl
        ]);
    }
    
    public function contact(Request $request)
    {
        $title = "Contact Us";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "home";
        $canonicalUrl = "https://www.jerseyhomewatch.co/contact";
        
        return view('pages.contact', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl
        ]);
    }
    
    public function privacy(Request $request)
    {
        $title = "Privacy Policy";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "home";
        $canonicalUrl = "https://www.jerseyhomewatch.co/privacy-policy";
        
        return view('pages.privacy', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl
        ]);
    }
    
    public function terms(Request $request)
    {
        $title = "Terms of Use";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "home";
        $canonicalUrl = "https://www.jerseyhomewatch.co/terms-of-use";
        
        return view('pages.terms', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl
        ]);
    }
}
