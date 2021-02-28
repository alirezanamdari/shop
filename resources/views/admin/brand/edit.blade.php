@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card card-primary col-md-8">
                <div class="card-header">
                    <h3 class="card-title"> ویرایش برند {{$brand->title}} </h3>
                </div>
                <div class="card-body">
                    <form role="form" action="{{route('brand.update',$brand->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="عنوان برند  را وارد کنید">
                        </div>
                        <div class="form-group">
                            <input type="file" name="src"  class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="description"  cols="80" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">بروزرسانی</button>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</section>
@endsection