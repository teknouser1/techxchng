<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Category;
class BuyerController extends Controller
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
                $q->where('name', 'buyer');
            });
            return datatables()->of($sellers)
            ->addColumn('action', function($seller) {
                $html='<div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu9"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">';
                            $html.='<a href="'.route('admin.buyers.edit',$seller->id).'" class="dropdown-item" title="Edit"><i class="icon-pencil7"></i> Edit</a>';
                            $html.='<a href="javascript:void(0);" class="dropdown-item delete-record"><i class="icon-trash text-danger"></i>Delete</a>
                            <form action ="'.route('admin.buyers.destroy',$seller->id).'" method="post" class="delete-form" onsubmit="return confirm(\'Are you sure delete this user and his data?\')"><input type="hidden" name="_method" value="delete" >'.csrf_field().'</form>';
                $html.='</div></div></div>';
                return $html;
                
            })->toJson();    
        }   
        $this->authorize('browse-buyer');
        return view('admin.buyer.index');
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
        //
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
