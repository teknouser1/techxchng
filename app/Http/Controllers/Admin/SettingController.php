<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Category;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header_image = Setting::where('setting_name','header_image')->where('type','home')->first();
        return view('admin.setting.index',compact('header_image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules =[
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ];

        $request->validate($rules);
        if ($request->file('image') && $request->file('image')->isValid()) {
            $image=$request->file('image');
            $extension = $image->getClientOriginalExtension();
            $image_name = md5(time() . str_random(12)) . '.' . $extension;
            $image->storeAs('uploads/images',$image_name);
            $setting = Setting::firstOrNew(['setting_name'=>'header_image','type'=>'home']);
            $setting->setting_value=$image_name;
            $setting->save();
        }
        flash("Settings updated!")->success();
        return redirect(route('admin.settings.index'));
    }

}
