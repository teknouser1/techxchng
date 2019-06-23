<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('browse-service');
        $services = Service::latest()->get();
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('add-service');
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('add-service');
        $rules =[
            'name' => 'required|string|unique:services',
            'price' => 'required|numeric'
        ];
        $request->validate($rules);
        $service = new Service;
        $service->name=$request->get('name');
        $service->price=$request->get('price');
        if($service->save()){
            flash("Service Created!")->success();
            return redirect(route('admin.services.index'));
        }else{
            flash("Service not Created!")->error();
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('edit-service');
        $service = Service::findOrFail($id);
        return view('admin.service.edit',compact('service'));
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
        $this->authorize('edit-service');
        $rules =[
            'name' => "required|string|unique:services,name,$id,id",
            'price' => 'required|numeric'
        ];
        $request->validate($rules);
        $service = Service::findOrFail($id);
        $service->name=$request->get('name');
        $service->price=$request->get('price');
        if($service->save()){
            flash("Service Updated!")->success();
            return redirect(route('admin.services.index'));
        }else{
            flash("Service not Updated!")->error();
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
        $this->authorize('delete-service');
        $service = Service::findOrFail($id);
        if($service->delete()){
            flash("Service deleted!")->success();
             return redirect(route('admin.services.index'));
        }else{
            flash("Service not deleted!")->error();
            return redirect()->back();
        }
    }
}
