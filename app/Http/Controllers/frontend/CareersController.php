<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;

class CareersController extends Controller
{
    function career()
    {
        $data['tags'] = config('global.meta_tags')['careers'];
        return view("frontend/career/index", $data);
    }

    public function addData(Request $request)
    {
        $msg_data = array();

        $validationErrors = $this->validateCareersRequest($request);
        if (count($validationErrors)) {
            errorMessage(implode("\n", $validationErrors->all()), $msg_data);
        }

        try{

        $image= $request->file('cv_path');
        $extension = $image->getClientOriginalExtension();
        $file_name = 'cv'.time().'.'.$extension;

        $path = $image->storeAs('/uploaded_cv', $file_name, 'public');

        $career = new Career();
        $career->firstname = $request['firstname'];
        $career->lastname = $request['lastname'];
        $career->email = $request['email'];
        $career->age = $request['age'];
        $career->city = $request['city'];
        $career->position = $request['position'];
        $career->expected_salary = $request['expected_salary'];
        $career->start_date = $request['start_date'];
        $career->website = $request['website'];
        $career->experience = $request['experience'];
        $career->application = $request['application'];
        $career->cv_path = $file_name;
        $career->ip_address = \Request::ip();
        $data = $career->save();

        try{
            $this->sendEmail($career);
        }catch (\Exception $e) {  
            \Log::error("Careers Submit. Error: " . $e->getMessage());
        }
        successMessage('Careers Details Submited', $msg_data);

        }catch (\Exception $e) {
            
            \Log::error("Careers Submit. Error: " . $e->getMessage());
            errorMessage('Something Went Wrong', $msg_data);
        }
    }

    public function sendEmail($data)
    {
        if (config('global.SEND_CUSTOM_EMAIL')) {
            $id = $data->id;
            $name = $data->firstname." ".$data->lastname;
            $email = $data->email;
            $position = $data->position;
            $city = $data->city;
            $experience = $data->experience;
            $application = $data->application;
            $clientIP = \Request::ip();
            $cvLink = asset('storage/uploaded_cv/' . $data->cv_path);
            
            $subject = "Candidate has applied for Position " . $position.' from the website careers page';
            \Mail::send('frontend/email/careers_email_body', ["name" => $name,"email" => $email,"city" => $city,"experience" => $experience,"application" => $application,"ip_address" => $clientIP,"cvLink" => $cvLink], function ($email) use ($subject, $data) {
                $email->to(config('global.EMAIL_TO'));
                $email->from(config('global.EMAIL_FROM'), config('global.EMAIL_FROM_NAME'));
                $email->subject($subject);
            });
        }
    }

    private function validateCareersRequest(Request $request)
    {
        return \Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required',
            'city' => 'required',
            'position' => 'required',
            'application' => 'required',
            'cv_path' => 'required',
            'email' => 'required|string|email',
        ])->errors();
    }
}
