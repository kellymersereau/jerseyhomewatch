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
        $home_active = true;
        
        return view('pages.home', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl,
            'home_active'=>$home_active
        ]);
    }
    
    public function services(Request $request)
    {
        $title = "Services";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "services";
        $canonicalUrl = "https://www.jerseyhomewatch.co/services";
        $services_active = true;
        
        return view('pages.services', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl,
            'services_active'=>$services_active
        ]);
    }
    
    public function testimonials(Request $request)
    {
        $title = "Testimonials";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "testimonials";
        $canonicalUrl = "https://www.jerseyhomewatch.co/testimonials";
        $testimonials_active = true;
        
        return view('pages.testimonials', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl,
            'testimonials_active'=>$testimonials_active
        ]);
    }
    
    public function faq(Request $request)
    {
        $title = "Frequently Asked Questions";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "faq";
        $canonicalUrl = "https://www.jerseyhomewatch.co/faq";
        $faq_active = true;
        
        return view('pages.faq', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl,
            'faq_active'=>$faq_active
        ]);
    }
    
    public function about(Request $request)
    {
        $title = "About";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "about";
        $canonicalUrl = "https://www.jerseyhomewatch.co/about";
        $about_active = true;
        
        return view('pages.about', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl,
            'about_active'=>$about_active
        ]);
    }
    
    public function contact(Request $request)
    {
        $title = "Contact Us";
        $seo_description = "";
        $seo_keywords = "";
        $body_class = "home";
        $canonicalUrl = "https://www.jerseyhomewatch.co/contact";
        $contact_active = true;
        
        return view('pages.contact', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl,
            'contact_active'=>$contact_active
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
