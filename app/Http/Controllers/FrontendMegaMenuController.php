<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendMegaMenuController extends Controller
{
    function whystudyabroad(){
        return view('whystudyabroad');
    }
    function fastudyguide(){
        return view('fastudyguide');
    }
    function enquiryform(){
        return view('enquiryform');
    }
    function readystudyabroad(){
        return view('readystudyabroad');
    }
    function studyabroadfaq(){
        return view('studyabroadfaq');
    }
    function chooisecourse(){
        return view('chooisecourse');
    }
    function ourstudents(){
        return view('ourstudents');
    }
    function aboutusfa(){
        return view('aboutusfa');
    }
    function courseadvice(){
        return view('courseadvice');
    }
    function visaapplicationass(){
        return view('visaapplicationass');
    }
    function studyabroadintaks(){
        return view('studyabroadintaks');
    }
    function accomendation(){
        return view('accomendation');
    }
    function studentbanking(){
        return view('studentbanking');
    }
    function moneytransfar(){
        return view('moneytransfar');
    }
}
