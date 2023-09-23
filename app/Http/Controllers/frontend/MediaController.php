<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    function gallery()
    {
        $data['tags'] = config('global.meta_tags')['gallery'];
        return view("frontend/media/gallery", $data);
    }
     
    function event()
    {
        $data['tags'] = config('global.meta_tags')['events'];
        return view("frontend/media/events", $data);
    }

    function blog()
    {
        $data['tags'] = config('global.meta_tags')['blogs'];
        return view("frontend/media/blogs", $data);
    }
    
}
