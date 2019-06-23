<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
//use App\Models\Keyword;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('browse-category');
        $categories = Category::latest()->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('add-category');
        $categories = Category::where('parent_id',0)->get();
        //$keywords = Keyword::latest()->get();
        return view('admin.category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('add-category');
        $rules =[
            'name' => 'required|string|unique:categories',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            //'keywords'=>'required'    
        ];

        $request->validate($rules);
        $category = new Category;
        //$category->parent_id=$request->get('category');
        $category->name=$request->get('name');
        $category->description=$request->get('description');
        $category->slug = $this->generateSlug($request->get('name'));
        if ($request->file('image') && $request->file('image')->isValid()) {
            $image=$request->file('image');
            $extension = $image->getClientOriginalExtension();
            $image_name = md5(time() . str_random(12)) . '.' . $extension;
            $image->storeAs('uploads/category',$image_name);
            $category->image=$image_name;
        }
        if($category->save()){
            //$category->keywords()->sync($request->get('keywords'));
            flash("Category Created!")->success();
            return redirect(route('admin.category.index'));
        }else{
            flash("Category not Created!")->error();
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
        $this->authorize('edit-category');
        $cat = Category::findOrFail($id);
        $categories = Category::where('parent_id',0)->where('id','!=',$cat->id)->get();
        //$keywords = Keyword::latest()->get();
        $selected_ids = $cat->keywords->pluck('id')->toArray();
        return view('admin.category.edit',compact('categories','cat','selected_ids'));
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
        $this->authorize('edit-category');
        $rules =[
            'name' => "required|string|unique:categories,name,$id,id",
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'keywords'=>'required'       
        ];
        $request->validate($rules);
        $category = Category::findOrFail($id);
        //$category->parent_id=$request->get('category');
        $category->name=$request->get('name');
        $category->description=$request->get('description');
        $category->slug = $this->generateSlug($request->get('name'),$id);
        if ($request->file('image') && $request->file('image')->isValid()) {
            $image=$request->file('image');
            $extension = $image->getClientOriginalExtension();
            $image_name = md5(time() . str_random(12)) . '.' . $extension;
            $image->storeAs('uploads/category',$image_name);
            $category->image=$image_name;
        }
        if($category->save()){
            //$category->keywords()->sync($request->get('keywords'));
            flash("Category Updated!")->success();
            return redirect(route('admin.category.index'));
        }else{
            flash("Category not Updated!")->error();
            return redirect()->back();
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
        $this->authorize('delete-category');
        $cat = Category::findOrFail($id);
        if(!empty($cat->childs) && count($cat->childs->toArray())>0){
            flash("Category not deleted!,Please first delete child categories")->error();
            return redirect()->back();
        }
        if($cat->forceDelete()){
            flash("Category deleted!")->success();
             return redirect(route('admin.category.index'));
        }else{
            flash("Category not deleted!")->error();
            return redirect()->back();
        }
    }

    protected function generateSlug($name,$id=0){
        $slug  = str_slug($name);
        if($id>0){  
            $count = Category::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->where('id','!=',$id)->count();
        }else{
            $count = Category::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();    
        }
        // if other slugs exist that are the same, append the count to the slug
        return $count ? "{$slug}-{$count}" : $slug;
    }
}
