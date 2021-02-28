@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card card-primary col-md-8">
                <div class="card-header">
                    <h3 class="card-title"> افزودن  محصول جدید </h3>
                </div>
                <div class="card-body">
                    <form role="form" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="عنوان محصول  را وارد کنید">
                        </div>

                        <div class="form-group">
                            <select name="category_id[]" class="form-control m-bot15"  multiple>
                                <option value="" disabled selected> دسته بندی محصول را انتخاب کنید </option>
                                @foreach ($cats as $cat)
                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                            </select>
                        </div>
            
                        <div class="form-group">
                            <select name="brand_id" class="form-control">
                                <option value="" disable selected>برند محصول را انتخاب کنید ..</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->title}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="count" placeholder="تعداد محصول  را وارد کنید">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="price" placeholder="قیمت محصول  را وارد کنید">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="discount" placeholder=" تخفیف  را وارد کنید">
                        </div>
                        <div class="checkbox ">
                            <label>
                                <input type="checkbox" name="status" value="1" checked>
                                فعال
                            </label>
                        </div>

                        <div class="form-group">
                            <textarea name="description" id="" cols="50" rows="10" class="form-control"></textarea>
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