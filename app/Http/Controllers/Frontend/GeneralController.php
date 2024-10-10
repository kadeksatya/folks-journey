<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\FAQ;
use Illuminate\Http\Request;

class GeneralController extends Controller
{

    protected $sliders, $faqs;

    function __construct(Banner $banner, FAQ $faq)
    {
        $this->sliders = $banner;
        $this->faqs = $faq;
    }

    function index() {
        return view('frontend.pages.home', [
            'slider' => $this->sliders->get(),
            'page_title' => 'Home'
        ]);
    }
    function pagefaq() {
        return view('frontend.pages.faq', [
            'faq' => $this->faqs->orderBy('sort_number', 'ASC')->get(),
            'page_title' => 'FAQ'
        ]);
    }
    function pagecontact()
    {
        return view('frontend.pages.contact', [
            'page_title' => 'Contact'
        ]);
    }
    function pageabout()
    {
        return view('frontend.pages.about', [
            'page_title' => 'About'
        ]);
    }
}
