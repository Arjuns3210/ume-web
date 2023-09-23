<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;

class HomeController extends Controller
{
    function index()
    {
        $data['tags'] = config('global.meta_tags')['home'];
        return view("frontend/home/index", $data);
    }

    function terms()
    {
        $data['tags'] = config('global.meta_tags')['tnc'];
        return view("frontend/others_page/terms_and_condition", $data);
    }

    function policy()
    {
        $data['tags'] = config('global.meta_tags')['privacy_policy'];
        return view("frontend/others_page/privacy_policy", $data);
    }

    function sitemap()
    {
        $data['tags'] = config('global.meta_tags')['sitemap'];
        return view("frontend/others_page/sitemap", $data);
    }

    function disclaimer()
    {
        $data['tags'] = config('global.meta_tags')['desclaimer'];
        return view("frontend/others_page/disclaimer", $data);
    }

    function scam()
    {
        $data['tags'] = config('global.meta_tags')['scam_notice'];
        return view("frontend/others_page/scam_notice", $data);
    }

    function subscribe(Request $request)
    {
        $msg_data = array();

        $validationErrors = $this->validateSubscribeRequest($request);
        if (count($validationErrors)) {
            errorMessage(implode("\n", $validationErrors->all()), $msg_data);
        }

        $subscribe = new Subscriber();
        $subscribe->email = $request->subscriber_email;
        $subscribe->save();

        successMessage('Subscribe Successfully', $msg_data);

    }

    private function validateSubscribeRequest(Request $request)
    {
        return \Validator::make($request->all(), [
            'subscriber_email' => 'string|email|unique:subscribers,email,',
        ])->errors();
    }
}
