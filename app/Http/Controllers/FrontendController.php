<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Testimonial;

class FrontendController extends Controller
{
    function fahome(){
       $testimonials = Testimonial::all();
       return view("index", compact('testimonials'));
    }
    function event(){
       return view("event");
    }
    function officelocation(){
       return view("officelocation");
    }
    function findusautralia(){
       return view("findusautralia");
    }
    function finduscanada(){
       return view("finduscanada");
    }
    function findusindia(){
       return view("findusindia");
    }
    function studyaboard(){
       return view("studyaboard");
    }
    function explorecountries(){
       return view("explorecountries");
    }
    function findcourse(){
       return view("findcourse");
    }
    function whatwedo(){
       return view("whatwedo");
    }
    function studentessential(){
       return view("studentessential");
    }
    function fafastlane(){
       return view("fafastlane");
    }
    function signupfree(){
       return view("signupfree");
    }
    function computingit(){
       return view("computingit");
    }
    function comeandsee(){
       return view("comeandsee");
    }
    function whyfa(){
       return view("whyfa");
    }
    function getpersonaladvice(){
       return view("getpersonaladvice");
    }
    function studentbenefitcard(){
       return view("studentbenefitcard");
    }
    function studenthealthcover(){
       return view("studenthealthcover");
    }
    function studentsafety(){
       return view("studentsafety");
    }
    function commonhealthcare(){
       return view("commonhealthcare");
    }
    function studyaustralia(){
       return view("studyaustralia");
    }
    function univercityranking(){
       return view("univercityranking");
    }
    function upcomingbangla(){
       return view("upcomingbangla");
    }
    function healthmedicine(){
       return view("healthmedicine");
    }
    function business(){
       return view("business");
    }
    function alliedhealth(){
       return view("alliedhealth");
    }
    function legalstudy(){
       return view("legalstudy");
    }
    function biologicalscience(){
       return view("biologicalscience");
    }
    function studynewzealand(){
       return view("studynewzealand");
    }
    function studyusa(){
       return view("studyusa");
    }
    function studycanada(){
       return view("studycanada");
    }
    function freevirtualconsul(){
       return view("freevirtualconsul");
    }
    function moreinfo(){
       return view("moreinfo");
    }
    function viewallcourse(){
       return view("viewallcourse");
    }
    function viewallcoursebiological(){
       return view("viewallcoursebiological");
    }
    function viewallcoursebuilding(){
       return view("viewallcoursebuilding");
    }
    function viewallcoursechemistry(){
       return view("viewallcoursechemistry");
    }
    function viewallcourseaccounting(){
       return view("viewallcourseaccounting");
    }
    function viewallcourseecconomice(){
       return view("viewallcourseecconomice");
    }
    function viewallcourselawlegal(){
       return view("viewallcourselawlegal");
    }
    function viewallcourseagricalture(){
       return view("viewallcourseagricalture");
    }

}
