@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card card-primary col-md-8">
                <div class="card-header">
                    <h3 class="card-title"> افزودن  مجوز جدید </h3>
                </div>
                <div class="card-body">
                    <form role="form" action="{{route('permission.store')}}" method="POST" >
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="عنوان مجوز  را وارد کنید">
                        </div>
                        <button type="submit" class="btn btn-primary">ثبت</button>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</section>
@endsection