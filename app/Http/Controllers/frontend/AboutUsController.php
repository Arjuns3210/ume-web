<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    function aboutUs()
    {
        $data['tags'] = config('global.meta_tags')['about_us'];
        return view("frontend/about_us/about_us", $data);
    }

    function ourHistory()
    {
        $data['tags'] = config('global.meta_tags')['our_history'];
        return view("frontend/about_us/our_history", $data);
    }

    function awardsAndRecognition()
    {
        $data['tags'] = config('global.meta_tags')['awards'];
        return view("frontend/about_us/awards", $data);
    }
	
	function csrOfCompany(){
        $data['tags'] = config('global.meta_tags')['csr'];
        return view("frontend/about_us/csr_of_company", $data);
    }
}
