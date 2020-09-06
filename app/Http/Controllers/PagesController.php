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
        $full_width = true;
        
        return view('pages.home', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl,
            'home_active'=>$home_active,
            'full_width'=>$full_width
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
        $full_width = true;
        
        return view('pages.services', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl,
            'services_active'=>$services_active,
            'full_width'=>$full_width
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
        $body_class = "contact";
        $canonicalUrl = "https://www.jerseyhomewatch.co/contact";
        $contact_active = true;
        $states = [
            ['state'=>'Alabama', 'val'=>'AL'],
            ['state'=>'Alaska', 'val'=>'AK'],
            ['state'=>'Arizona', 'val'=>'AZ'],
            ['state'=>'Arkansas', 'val'=>'AR'],
            ['state'=>'California', 'val'=>'CA'],
            ['state'=>'Colorado', 'val'=>'CO'],
            ['state'=>'Connecticut', 'val'=>'CT'],
            ['state'=>'Delaware', 'val'=>'DE'],
            ['state'=>'District of Columbia', 'val'=>'DC'],
            ['state'=>'Florida', 'val'=>'FL'],
            ['state'=>'Georgia', 'val'=>'GA'],
            ['state'=>'Hawaii', 'val'=>'HI'],
            ['state'=>'Idaho', 'val'=>'ID'],
            ['state'=>'Illinois', 'val'=>'IL'],
            ['state'=>'Indiana', 'val'=>'IN'],
            ['state'=>'Iowa', 'val'=>'IA'],
            ['state'=>'Kansas', 'val'=>'KS'],
            ['state'=>'Kentucky', 'val'=>'KY'],
            ['state'=>'Louisiana', 'val'=>'LA'],
            ['state'=>'Maine', 'val'=>'ME'],
            ['state'=>'Maryland', 'val'=>'MD'],
            ['state'=>'Massachusetts', 'val'=>'MA'],
            ['state'=>'Michigan', 'val'=>'MI'],
            ['state'=>'Minnesota', 'val'=>'MN'],
            ['state'=>'Mississippi', 'val'=>'MS'],
            ['state'=>'Missouri', 'val'=>'MO'],
            ['state'=>'Montana', 'val'=>'MT'],
            ['state'=>'Nebraska', 'val'=>'NE'],
            ['state'=>'Nevada', 'val'=>'NV'],
            ['state'=>'New Hampshire', 'val'=>'NH'],
            ['state'=>'New Jersey', 'val'=>'NJ'],
            ['state'=>'New Mexico', 'val'=>'NM'],
            ['state'=>'New York', 'val'=>'NY'],
            ['state'=>'North Carolina', 'val'=>'NC'],
            ['state'=>'North Dakota', 'val'=>'ND'],
            ['state'=>'Ohio', 'val'=>'OH'],
            ['state'=>'Oklahoma', 'val'=>'OK'],
            ['state'=>'Oregon', 'val'=>'OR'],
            ['state'=>'Pennsylvania', 'val'=>'PA'],
            ['state'=>'Rhode Island', 'val'=>'RI'],
            ['state'=>'South Carolina', 'val'=>'SC'],
            ['state'=>'South Dakota', 'val'=>'SD'],
            ['state'=>'Tennessee', 'val'=>'TN'],
            ['state'=>'Texas', 'val'=>'TX'],
            ['state'=>'Utah', 'val'=>'UT'],
            ['state'=>'Vermont', 'val'=>'VT'],
            ['state'=>'Virginia', 'val'=>'VA'],
            ['state'=>'Washington', 'val'=>'WA'],
            ['state'=>'West Virginia', 'val'=>'WV'],
            ['state'=>'Wisconsin', 'val'=>'WI'],
            ['state'=>'Wyoming', 'val'=>'WY']
        ];
        
        return view('pages.contact', [
            'title'=>$title,
            'seo_description'=>$seo_description,
            'seo_keywords'=>$seo_keywords,
            'body_class'=>$body_class,
            'canonicalUrl'=>$canonicalUrl,
            'contact_active'=>$contact_active,
            'states'=>$states
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
    
}
