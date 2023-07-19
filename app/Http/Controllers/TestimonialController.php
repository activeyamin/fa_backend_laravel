<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.testimonial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.testimonial.create', [
            'testimonials' => Testimonial::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->testimonial_submit_btn;

        $request->validate([
            'testimonial_title_one' => "required|max:100|min:5",
            'testimonial_short_title_one' => "required|max:70|min:3",
            'testimonial_title_tow' => "required|max:100|min:5",
            'testimonial_short_title_tow' => "required|max:70|min:3",
            'testimonial_title_three' => "required|max:100|min:5",
            'testimonial_short_title_three' => "required|max:70|min:3",
        ]);
        Testimonial::insert([
            'testimonial_title_one' => $request->testimonial_title_one,
            'testimonial_short_title_one' => $request->testimonial_short_title_one,
            'testimonial_title_tow' => $request->testimonial_title_tow,
            'testimonial_short_title_tow' => $request->testimonial_short_title_tow,
            'testimonial_title_three' => $request->testimonial_title_three,
            'testimonial_short_title_three' => $request->testimonial_short_title_three,
            'created_at' => Carbon::now(),
        ]);
        // return back()->with('testi_success', 'Testimonial Title add has been Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.testimonial.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.testimonial.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
