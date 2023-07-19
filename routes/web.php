<?php

use App\Http\Controllers\{BrandController, FrontendController, FrontendMegaMenuController, HomeController, ProfileController, StudentController, TestimonialController};
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// frontend controller start
Route::get('/', [FrontendController::class, 'fahome']);
Route::get('/event-us', [FrontendController::class, 'event'])->name('event');
Route::get('/office/location', [FrontendController::class, 'officelocation'])->name('officelocation');
Route::get('/find/us/autralia', [FrontendController::class, 'findusautralia'])->name('findusautralia');
Route::get('/find/us/canada', [FrontendController::class, 'finduscanada'])->name('finduscanada');
Route::get('/find/us/india', [FrontendController::class, 'findusindia'])->name('findusindia');
Route::get('/study/aboard', [FrontendController::class, 'studyaboard'])->name('studyaboard');
Route::get('/explore/countries', [FrontendController::class, 'explorecountries'])->name('explorecountries');
Route::get('/find/course', [FrontendController::class, 'findcourse'])->name('findcourse');
Route::get('/what/we/do', [FrontendController::class, 'whatwedo'])->name('whatwedo');
Route::get('/student/heatlh/cover', [FrontendController::class, 'studenthealthcover'])->name('studenthealthcover');
Route::get('/student/safety', [FrontendController::class, 'studentsafety'])->name('studentsafety');
Route::get('/fa/fastlane', [FrontendController::class, 'fafastlane'])->name('fafastlane');
Route::get('/sign-up/free', [FrontendController::class, 'signupfree'])->name('signupfree');
Route::get('/computing/it', [FrontendController::class, 'computingit'])->name('computingit');
Route::get('/come/and/see', [FrontendController::class, 'comeandsee'])->name('comeandsee');
Route::get('/why/fa', [FrontendController::class, 'whyfa'])->name('whyfa');
Route::get('/get/personal/advice', [FrontendController::class, 'getpersonaladvice'])->name('getpersonaladvice');
Route::get('/student/benefit/card', [FrontendController::class, 'studentbenefitcard'])->name('studentbenefitcard');
Route::get('/student/health/cover', [FrontendController::class, 'studenthealthcover'])->name('studenthealthcover');
Route::get('/study/australia', [FrontendController::class, 'studyaustralia'])->name('studyaustralia');
Route::get('/univercity/ranking', [FrontendController::class, 'univercityranking'])->name('univercityranking');
Route::get('/health/medicine', [FrontendController::class, 'healthmedicine'])->name('healthmedicine');
Route::get('/business', [FrontendController::class, 'business'])->name('business');
Route::get('/upcoming/bangladesh', [FrontendController::class, 'upcomingbangla'])->name('upcomingbangla');
Route::get('/allied/health', [FrontendController::class, 'alliedhealth'])->name('alliedhealth');
Route::get('/legal/study', [FrontendController::class, 'legalstudy'])->name('legalstudy');
Route::get('/biological/science', [FrontendController::class, 'biologicalscience'])->name('biologicalscience');
Route::get('/study/newzealand', [FrontendController::class, 'studynewzealand'])->name('studynewzealand');
Route::get('/study/usa', [FrontendController::class, 'studyusa'])->name('studyusa');
Route::get('/study/canada', [FrontendController::class, 'studycanada'])->name('studycanada');
Route::get('/common/health/care', [FrontendController::class, 'commonhealthcare'])->name('commonhealthcare');
Route::get('/free/virtual/consulting', [FrontendController::class, 'freevirtualconsul'])->name('freevirtualconsul');
Route::get('/more/info', [FrontendController::class, 'moreinfo'])->name('moreinfo');
Route::get('/view/all/course', [FrontendController::class, 'viewallcourse'])->name('viewallcourse');
Route::get('/view/all/course/biological', [FrontendController::class, 'viewallcoursebiological'])->name('viewallcoursebiological');
Route::get('/view/all/course/building', [FrontendController::class, 'viewallcoursebuilding'])->name('viewallcoursebuilding');
Route::get('/view/all/course/chemistry', [FrontendController::class, 'viewallcoursechemistry'])->name('viewallcoursechemistry');
Route::get('/view/all/course/accounting', [FrontendController::class, 'viewallcourseaccounting'])->name('viewallcourseaccounting');
Route::get('/view/all/course/ecconomice', [FrontendController::class, 'viewallcourseecconomice'])->name('viewallcourseecconomice');
Route::get('/view/all/course/lawlegal', [FrontendController::class, 'viewallcourselawlegal'])->name('viewallcourselawlegal');
Route::get('/view/all/course/agricalture', [FrontendController::class, 'viewallcourseagricalture'])->name('viewallcourseagricalture');
Route::get('/view/all/course/political', [FrontendController::class, 'viewallcoursepolitical'])->name('viewallcoursepolitical');
// frontend controller end
// ===frontend mega menu controller start==
Route::get('why/study/abroad', [FrontendMegaMenuController::class, 'whystudyabroad'])->name('whystudyabroad');
Route::get('fa/study/guide', [FrontendMegaMenuController::class, 'fastudyguide'])->name('fastudyguide');
Route::get('/enquiry/form', [FrontendMegaMenuController::class, 'enquiryform'])->name('enquiryform');
Route::get('/ready/study/abroad', [FrontendMegaMenuController::class, 'readystudyabroad'])->name('readystudyabroad');
Route::get('/study/abroad/faq', [FrontendMegaMenuController::class, 'studyabroadfaq'])->name('studyabroadfaq');
Route::get('/chooise/course', [FrontendMegaMenuController::class, 'chooisecourse'])->name('chooisecourse');
Route::get('/our/students', [FrontendMegaMenuController::class, 'ourstudents'])->name('ourstudents');
Route::get('/about/us/fa', [FrontendMegaMenuController::class, 'aboutusfa'])->name('aboutusfa');
Route::get('/course/advice', [FrontendMegaMenuController::class, 'courseadvice'])->name('courseadvice');
Route::get('/visa/application/asstence', [FrontendMegaMenuController::class, 'visaapplicationass'])->name('visaapplicationass');
Route::get('/study/abroad/intaks', [FrontendMegaMenuController::class, 'studyabroadintaks'])->name('studyabroadintaks');
Route::get('/accomendation', [FrontendMegaMenuController::class, 'accomendation'])->name('accomendation');
Route::get('/student/banking', [FrontendMegaMenuController::class, 'studentbanking'])->name('studentbanking');
Route::get('/money/transfar', [FrontendMegaMenuController::class, 'moneytransfar'])->name('moneytransfar');
// ===frontend mega menu controller end==
// StudentRegister controller start
// Route::post('/student/register', [RegisterController::class, 'register'])->name('register');
// Route::resource('/student', StudentController::class);
// StudentRegister controller end
// brand controller start
// Route::resource('/brand', BrandController::class);
// brand controller end
// profile controller start
Route::resource('profile', ProfileController::class);
// profile controller end
// profile testimonial start
Route::resource('testimonial', TestimonialController::class);
// profile testimonial end

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/users', [HomeController::class, 'users']);
