<?php

namespace App\Http\Controllers;

use DB;
use App\Models\MBlog;
use Illuminate\Http\Request;

class MBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = DB::select('select * from blogs');
        //return view('stud_view',['users'=>$users]);
        //return view('blogs.create');
        return view('manage.index',['blogs'=>$blogs]);
        //$blogs = MBlog::latest()->paginate(5);

       // return view('manage.index',compact('blogs'))
        //    ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MBlog  $mBlog
     * @return \Illuminate\Http\Response
     */
    public function show(MBlog $mBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MBlog  $mBlog
     * @return \Illuminate\Http\Response
     */
    public function edit(MBlog $mBlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MBlog  $mBlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MBlog $mBlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MBlog  $mBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(MBlog $mBlog)
    {
        //
    }
}
