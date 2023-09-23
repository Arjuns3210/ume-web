<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactusController extends Controller
{
    function contact()
    {
        $data['tags'] = config('global.meta_tags')['contact_us'];
        return view("frontend/contact_us/index", $data);
    }

    public function saveContacts(Request $request)
    {

        $msg_data = array();

        $validationErrors = $this->validateContactUsRequest($request);
        if (count($validationErrors)) {
            errorMessage(implode("\n", $validationErrors->all()), $msg_data);
        }

        try{

            $contact=new Contact();
            $contact->name=$request['name'];
            $contact->email=$request['email'];
            $contact->phone=$request['phone'];
            $contact->services=$request['services'];
            $contact->subject=$request['subject'];
            $contact->message=$request['message'];
            $contact->ip_address = \Request::ip();
            $data = $contact->save();

            try{
                $this->contactMail($contact);
            }catch (\Exception $e) {  
                \Log::error("Contact Submit. Error: " . $e->getMessage());
            }

            successMessage('Contact Details Submited', $msg_data);

        }catch (\Exception $e) {

            \Log::error("Contact Us Submit. Error: " . $e->getMessage());
            errorMessage('Something Went Wrong', $msg_data);
        }


    }

    public function contactMail($data)
    {
        $name = $data->name;
        $phone = $data->phone;
        $email_id = $data->email;
        $subject = "Message from the contact us form of  website  by visitor ".$name;
        $msg = $data->message;
        $clientIP = \Request::ip();

        \Mail::send('frontend/email/contact_body',[ 'email_id' => $email_id, 'phone' => $phone ,'name' => $name,'subject' => $subject,'msg' => $msg,'ip_address'=> $clientIP ], function ($email) use ($subject) {
            $email->to(config('global.EMAIL_TO'));
            $email->from(config('global.EMAIL_FROM'), config('global.EMAIL_FROM_NAME'));
            $email->subject($subject);

        });
    }

    private function validateContactUsRequest(Request $request)
    {
        return \Validator::make($request->all(), [
            'email' => 'required|string|email',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ])->errors();
    }
}
