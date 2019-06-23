<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Keyword;
class KeywordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('browse-keyword');
        $keywords = Keyword::latest()->get();
        return view('admin.keyword.index',compact('keywords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('add-keyword');
        return view('admin.keyword.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('add-keyword');
        $rules =[
            'keyword' => 'required|string|unique:keywords',
        ];
        $request->validate($rules);
        $keyword = new Keyword;
        $keyword->keyword=$request->get('keyword');
        if($keyword->save()){
            flash("Keyword Created!")->success();
            return redirect(route('admin.keywords.index'));
        }else{
            flash("Keyword not Created!")->error();
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
        $this->authorize('edit-keyword');
        $keyword = Keyword::findOrFail($id);
        return view('admin.keyword.edit',compact('keyword'));
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
        $this->authorize('edit-keyword');
        $rules =[
            'keyword' => "required|string|unique:keywords,keyword,$id,id",
        ];
        $request->validate($rules);
        $keyword = Keyword::findOrFail($id);
        $keyword->keyword=$request->get('keyword');
        if($keyword->save()){
            flash("Keyword Updated!")->success();
            return redirect(route('admin.keywords.index'));
        }else{
            flash("Keyword not Updated!")->error();
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
        $this->authorize('delete-keyword');
        $keyword = Keyword::findOrFail($id);
        if($keyword->delete()){
            flash("Keyword deleted!")->success();
             return redirect(route('admin.keywords.index'));
        }else{
            flash("Keyword not deleted!")->error();
            return redirect()->back();
        }
    }
}
