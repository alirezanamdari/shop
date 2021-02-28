@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card card-primary col-md-8">
                <div class="card-header">
                    <h3 class="card-title">   ویرایش محصول   </h3>
                </div>
                <div class="card-body">
                    <form role="form" action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{$product->name}}">
                        </div>

                        <div class="form-group">
                            <select name="category_id[]" class="form-control m-bot15"  multiple>
                                @foreach ($cats as $cat)
                                    <option value="{{$cat->id}}" {{in_array($cat->id,$product->categories()->pluck('id')->toArray()) ? 'selected' : ''}}>{{$cat->title}}</option>
                                @endforeach
                            </select>
                        </div>
            
                        <div class="form-group">
                            <select name="brand_id" class="form-control">
                                @foreach ($brands as $brand)
                                    <option value="{{$brand->id}}" {{in_array($brand->id,$product->brand()->pluck('id')->toArray()) ? 'selected' : ''}} >{{$brand->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="count" value="{{$product->count}}">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="price" value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="discount" value="{{$product->discount}}">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="status" value="1" checked>
                                فعال
                            </label>
                        </div>

                        <div class="form-group">
                            <textarea name="description" id="" cols="50" rows="10" class="form-control">{{$product->description}}"</textarea>
                        </div>

                        <div class="form-group">
                            <input type="file" name="image"  class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">ثبت</button>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</section>
@endsection