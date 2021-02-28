<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats=Category::all();
        $brands=Brand::all();
        $products=Product::query()->paginate(20);
        return view('admin.products.index',compact('products','cats','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats=Category::all();
        $brands=Brand::all();
        return view('admin.products.create',compact('cats','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request['image'];
        // dd($file);
        $img=$this->fileuploader($file,'products');
        $product=Product::query()->create([
            'name'=>$request->get('name'),
            'count'=>$request->get('count'),
            'discount'=>$request->get('discount'),
            'price'=>$request->get('price'),
            'brand_id'=>$request->get('brand_id'),
            'image'=>$img,
            'status'=>$request->get('status'),
            'description'=>$request->get('description'),
        ]);

        $product->categories()->sync($request->input('category_id'));
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $cats=Category::all();
        $brands=Brand::all();
        return view('admin.products.edit',compact('product','cats','brands'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if($request['image']){
            $file=$request['image'];
            $img=$this->fileuploader($file,'products');    
            if(file_exists($product->image)){
                unlink($product->image);
            }
    
        }
        else{
            $img=$product->image;
        }
        // $data=$request->all();
        // $data['image']=$img;
        $product->update([
            'name'=>$request->get('name'),
            'brand_id'=>$request->get('brand_id'),
            'count'=>$request->get('count'),
            'price'=>$request->get('price'),
            'discount'=>$request->get('discount'),
            'description'=>$request->get('description'),
            'image'=>$img,
            'status'=>$request->get('status'),
        ]);
        $product->categories()->sync($request->get('category_id'));
        return redirect(route('product.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if(file_exists($product->image)){
            unlink($product->image);
        }

        $product->delete();
        $product->categories()->detach();
        return redirect(route('product.index'));
    }
}
