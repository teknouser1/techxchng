<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Industry;
class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('browse-industry');
        $industries = Industry::latest()->get();
        return view('admin.industry.index',compact('industries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('add-industry');
        return view('admin.industry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('add-industry');
        $rules=[
            'name' => 'required|string|unique:industries'
        ];
        $request->validate($rules);
        $industry = new Industry;
        $industry->name = $request->get('name');
        if($industry->save()){
            flash('Industry Created!')->success();
            return redirect(route('admin.industries.index'));
        }else{
             flash("Industry not Created!")->error();
            return redirect()->back()->withInput($request->all());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('edit-industry');
        $industry = Industry::findOrFail($id);
        return view('admin.industry.edit',compact('industry'));

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
        $this->authorize('edit-industry');
        $rules=[
            'name' =>"required|string|unique:industries,name,$id,id"
        ];
        $request->validate($rules);
        $industry = Industry::findOrFail($id);
        $industry->name = $request->get('name');
        if($industry->save()){
            flash('Industry Updated!')->success();
            return redirect(route('admin.industries.index'));
        }else{
             flash("Industry not Updated!")->error();
            return redirect()->back()->withInput($request->all());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete-industry');
        $industry = Industry::findOrFail($id);
        if($industry->delete()){
            falsh('Industry Deleted!')->success();
        }else{
            falsh('Industry not Deleted!')->error();
        }
        return redirect(route('admin.industries.index'));
    }
}
