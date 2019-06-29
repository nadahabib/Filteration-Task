<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;


class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::where('id', auth()->user()->id)->get();
        
        return view('index',compact('courses'));
    }

    public function select()
    {
        $courses = Course::all();
        return view('select',compact('courses'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = Course::find($id);
        $courses->delete();

        return redirect('/home')->with('success', 'Course has been Dropped!');
    }
}
