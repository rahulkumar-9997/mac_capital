<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail; 
use Exception;
use Auth;
use Session;
use DB;
use Hash;
class FrontHomeController extends Controller
{
    public function home(){
        return view('frontend.index');
    }

    public function aboutUs(){
	    return view('frontend.pages.about-us');
    }

    public function financialServices(){
	    return view('frontend.pages.financial-services.index');
    }

    public function multiFacetedStyle(){
	    return view('frontend.pages.financial-services.multi-facetedstyle');
    }

    public function capitalRaising(){
	    return view('frontend.pages.financial-services.capital-raising');
    }

    public function privateEquityPlacement(){
	    return view('frontend.pages.financial-services.private-equity-placement');
    }

    public function internationalDebtSolution(){
	    return view('frontend.pages.financial-services.internationaldebt-solutions');
    }

    public function internationalStructuredSolutions(){
	    return view('frontend.pages.financial-services.international-structured');
    }

    public function internationalMAandSservices(){
	    return view('frontend.pages.financial-services.international-m-and-sservices');
    }

    public function corporateAdvisory(){
	    return view('frontend.pages.corporate-advisory.index');
    }

    public function mergersAquisitions(){
	    return view('frontend.pages.corporate-advisory.mergers-and-aquisitions');
    }

    public function divestitures(){
	    return view('frontend.pages.corporate-advisory.divestitures');
    }

    public function capitalStructuring(){
	    return view('frontend.pages.corporate-advisory.capital-structuring-advisory');
    }

    public function indicationOfValue(){
	    return view('frontend.pages.corporate-advisory.indications-of-value');
    }

    public function projectStrFinance(){
	    return view('frontend.pages.corporate-advisory.project-structured-finance');
    }

    public function transactionSupport(){
	    return view('frontend.pages.corporate-advisory.transaction-support-services');
    }

    public function partnerships(){
	    return view('frontend.pages.partnerships');
    }

    public function contactUs(){
	    return view('frontend.pages.contact-us');
    }

    public function contactUsSubmit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
                        
        ]);
        try {
            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ];
            
            Mail::to('rahulkumarmaurya464@gmail.com') // Replace with your recipient email address
                ->send(new ContactFormMail($data));
            Log::info('Contact Us Enquiry Form Email sent successfully to rahulkumarmaurya464@gmail.com');
            return redirect()->back()->with('success', 'Your message has been sent successfully. Our team will contact you shortly!')->withFragment('#contact-form');
        } catch (Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error sending your message. Please try again later.')->withInput()->withFragment('#contact-form');
        }
        
    }

}
