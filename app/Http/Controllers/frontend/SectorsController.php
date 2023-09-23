<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectorsController extends Controller
{
    function fundRaising(){

        $data['tags'] = config('global.meta_tags')['fund_raising'];
        return view('frontend/sectors/fund_raising', $data);
    }

    function ipoConsulting(){

        $data['tags'] = config('global.meta_tags')['ipo_consulting'];
        return view('frontend/sectors/ipo_consulting', $data);
    }

    function corporateTreasur(){

        $data['tags'] = config('global.meta_tags')['corporate_treasury'];
        return view('frontend/sectors/corporate_treasur', $data);
    }

    function fundInvestment(){

        $data['tags'] = config('global.meta_tags')['fund_investment'];
        return view('frontend/sectors/fund_investments', $data);
    }

    function legalConsulting(){

        $data['tags'] = config('global.meta_tags')['legal_consulting'];
        return view('frontend/sectors/legal_consulting', $data);
    }

    function technologySystem(){
        
        $data['tags'] = config('global.meta_tags')['technology_system'];
        return view('frontend/sectors/technology_system', $data);
    }
}
