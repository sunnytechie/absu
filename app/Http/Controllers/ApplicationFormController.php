<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicationForm;
use Illuminate\Support\Facades\Validator;
use Unicodeveloper\Paystack\Facades\Paystack;

class ApplicationFormController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function store(Request $request) {

        try {

        $fileFields = [
            'o_level_1',
            'o_level_2',
            'jamb_result',
            'fslc',
            'others',
            'passport'
        ];
        $tr_ref = Paystack::genTranxRef();
        $form = new ApplicationForm();
        $form->fullname = $request->fullname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->gender = $request->gender;
        $form->dob = $request->dob;
        $form->state = $request->state;
        $form->lga = $request->lga;
        $form->address = $request->address;
        $form->nok = $request->nok;
        $form->r_nok = $request->r_nok;
        $form->a_nok = $request->a_nok;
        $form->phone_nok = $request->phone_nok;
        $form->prev_exam_no = $request->prev_exam_no;
        $form->prev_type_exam = $request->prev_type_exam;
        $form->prev_exam_year = $request->prev_exam_year;
        $form->progamme_type = $request->progamme_type;
        $form->progamme_category = $request->progamme_category;
        $form->course = $request->course;
        $form->center = $request->center;
        $form->tr_ref = $tr_ref;
        foreach ($fileFields as $fileField) {
            if ($request->hasFile($fileField)) {
                $file = $request->file($fileField);

                // Get the original file name with extension
                $fileName = $file->getClientOriginalName();
                $attachmentName = uniqid() . '_' . $fileName;
                $file->storeAs('public/attachments', $attachmentName);

                // Save the file path or name to the model attribute
                $form->$fileField = $attachmentName;
            }
        }
        $form->save();


        //return to paystack payment

        $data = array(
            "amount" => 5000 * 100,
            "reference" => $tr_ref,
            "email" => $request->email,
            "currency" => "NGN",
            "callback_url" => route('callback.payment.application', $form->id)
        );

        return Paystack::getAuthorizationUrl($data)->redirectNow();

        } catch (\Throwable $th) {
            return back()->with('failed', "Failed to make payment");
        }

    }

    public function payment(Request $request) {

    }

    public function handleGatewayCallback(Request $request, $id) {
        try {
        $paymentDetails = Paystack::getPaymentData();
        $amount = $paymentDetails['data']['amount'];
        $status = $paymentDetails['data']['status'];
        $reference = $paymentDetails['data']['reference'];
        $email = $paymentDetails['data']['customer']['email']; //Email of Auth user
        $order_id = $paymentDetails['data']['order_id'];
        $currency = $paymentDetails['data']['currency'];

        if ($status != "success") {
            return redirect()->route('home')->with('failed', "Your transaction was cancelled or failed.");
        }

        $form = ApplicationForm::where('id', $id)->where('tr_ref', $reference)->first();
        $form->payment_status = "completed";
        $form->save();

        return redirect()->route('home')->with('success', "Your application is successfull, thank you.");
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('home')->with('failed', "Transaction registeration failed.");
        }
    }
}
