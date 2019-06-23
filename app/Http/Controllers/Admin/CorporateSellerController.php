<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Category;
use App\Models\Industry;
class CorporateSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $sellers = User::whereHas('roles', function($q){
                $q->where('name', 'corporate-seller');
            });
            return datatables()->of($sellers)
            ->addColumn('action', function($seller) {
                $html='<div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu9"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">';
                            $html.='<a href="'.route('admin.corporate-sellers.edit',$seller->id).'" class="dropdown-item" title="Edit"><i class="icon-pencil7"></i> Edit</a>';
                            $html.='<a href="javascript:void(0);" class="dropdown-item delete-record"><i class="icon-trash text-danger"></i>Delete</a>
                            <form action ="'.route('admin.corporate-sellers.destroy',$seller->id).'" method="post" class="delete-form" onsubmit="return confirm(\'Are you sure delete this user and his data?\')"><input type="hidden" name="_method" value="delete" >'.csrf_field().'</form>';
                $html.='</div></div></div>';
                return $html;
                
            })->toJson();    
        }   
        $this->authorize('browse-corporate-seller');
        return view('admin.corporate.seller.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('add-corporate-seller');
        $categories = Category::latest()->get();
        $industries = Industry::latest()->get();
        return view('admin.corporate.seller.create',compact('categories','industries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('add-corporate-seller');
        $rules=[
            'name' => 'required|string',
            'designation' => 'required',
            'company_name' => 'required',
            'categories' => 'required',
            'email' => 'required|email|unique:users',
            'professional_email' => 'nullable|email',
            'contact_number' => 'required',
            'breif_intro' => 'required|string',
            'password' => 'required|string|confirmed',
            'industry' => 'required',
        ];
        $request->validate($rules);

        $user = new User();
        $user->name = $request->get('name');
        $user->designation = $request->get('designation');
        $user->company_name = $request->get('company_name');
        $user->email = $request->get('email');
        $user->professional_email = $request->get('professional_email');
        $user->contact_number = $request->get('contact_number');
        $user->breif_intro = $request->get('breif_intro');
        $user->password = bcrypt($request->get('password'));
        $user->industry = $request->get('industry');
        if($user->save()){

            $role = Role::where('id',4)->first();
            $user->assignRole($role);
            $user->categories()->sync($request->get('categories'));
            flash("Corporate Seller Created!")->success();
            return redirect(route('admin.corporate-sellers.index'));
        }else{
            flash("Corporate Seller not Created!")->error();
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
        $this->authorize('edit-corporate-seller');
        $seller = User::findOrFail($id);
        if(!$seller->hasRole('corporate-seller')){
            return redirect()->back();
        }
        $categories = Category::latest()->get();
        $selected_ids = $seller->categories()->pluck('id')->toArray();
        $industries = Industry::latest()->get();
        return view('admin.corporate.seller.edit',compact('categories','seller','selected_ids','industries'));
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
        $this->authorize('edit-corporate-seller');
        $rules=[
            'name' => 'required|string',
            'designation' => 'required',
            'company_name' => 'required',
            'categories' => 'required',
            'email' => "required|email|unique:users,email,$id,id",
            'professional_email' => 'nullable|email',
            'contact_number' => 'required',
            'breif_intro' => 'required|string',
            'password' => 'nullable|string|confirmed',
            'industry' => 'required'
        ];
        $request->validate($rules);

        $user =User::findOrFail($id);
        $user->name = $request->get('name');
        $user->designation = $request->get('designation');
        $user->company_name = $request->get('company_name');
        $user->email = $request->get('email');
        $user->professional_email = $request->get('professional_email');
        $user->contact_number = $request->get('contact_number');
        $user->breif_intro = $request->get('breif_intro');
        $user->industry = $request->get('industry');
        if($request->has('password') && !empty($request->get('password'))){
            $user->password = bcrypt($request->get('password'));    
        }
        
        if($user->save()){

            $user->categories()->sync($request->get('categories'));
            flash("Corporate Seller Updated!")->success();
            return redirect(route('admin.corporate-sellers.index'));
        }else{
            flash("Corporate Seller not Update!")->error();
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
        $this->authorize('delete-corporate-seller');
        $seller = User::findOrFail($id);
        if($seller->delete()){
            flash("Corporate Seller deleted!")->success();
             return redirect(route('admin.corporate-sellers.index'));
        }else{
            flash("Corporate Seller not deleted!")->error();
            return redirect()->back();
        }
    }
}
