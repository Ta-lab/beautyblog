<?php

namespace App\Http\Controllers;

use DB;
use App\Models\ManageCategory;
use Illuminate\Http\Request;

class ManageCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::select('select * from categories');
        return view('manage_category.index',['categories'=>$categories]);
        
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
     * @param  \App\Models\ManageCategory  $manageCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ManageCategory $manageCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageCategory  $manageCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageCategory $manageCategory)
    {
        //return view('manage_category.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageCategory  $manageCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageCategory $manageCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageCategory  $manageCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageCategory $manageCategory)
    {
        //
    }
}
