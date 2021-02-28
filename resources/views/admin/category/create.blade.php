@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card card-primary col-md-8">
                <div class="card-header">
                    <h3 class="card-title"> افزودن دسته بندی جدید </h3>
                </div>
                <div class="card-body">
                    <form role="form" action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="عنوان دسته بندی را وارد کنید">
                        </div>
                        <div class="form-group">
                            <select name="category_id" class="form-control">
                                <option value="" disable selected>دسته بندی والد را انتخاب کنید ..</option>
                                    @foreach ($categories as $parent)
                                        <option value="{{$parent->id}}">{{$parent->title}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">ثبت</button>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</section>
@endsection