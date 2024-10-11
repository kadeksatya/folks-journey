<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\FAQ;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class GeneralController extends Controller
{

    protected $sliders, $faqs, $settings;

    function __construct(Banner $banner, FAQ $faq, Settings $setting)
    {
        $this->sliders = $banner;
        $this->faqs = $faq;
        $this->settings = $setting->orderBy('created_at', 'DESC')->first();
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
    function sendEmail(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'messageBody' => $validated['message'],
        ];

        $email = $this->settings->email ?? 'info@folksjurney.com';

        Mail::send('frontend.components.email_tamplate', $data, function ($message) use ($data, $email) {
            $message->to($email)
                ->subject('Some customer contact');
        });

        DB::beginTransaction();

        try {
            Contact::create([
                'name' => $request->name,
                'message' => $request->message,
                'email' => $request->email,
            ]);
            DB::commit();

        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'Something went wrong'.' '.$th->getMessage());
        } catch (\Exception $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'Something went wrong' . ' ' . $th->getMessage());
        }

        return redirect()->back()->with('success', 'Thankyou for contact us, we will contact you soon!');
    }
}
