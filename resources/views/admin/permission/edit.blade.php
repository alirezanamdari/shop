@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card card-primary col-md-8">
                <div class="card-header">
                    <h3 class="card-title"> ویرایش مجوز {{$permission->title}} </h3>
                </div>
                <div class="card-body">
                    <form role="form" action="{{route('permission.update',$permission->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{$permission->title}}" >
                        </div>
                        <button type="submit" class="btn btn-primary">بروزرسانی</button>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</section>
@endsection