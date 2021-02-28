@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card card-primary col-md-8">
                <div class="card-header">
                    <h3 class="card-title"> افزودن  نقش جدید </h3>
                </div>
                <div class="card-body">
                    <form role="form" action="{{route('role.store')}}" method="POST" >
                        @csrf
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="عنوان نقش  را وارد کنید">
                        </div>

                        <div class="form-group">
                            <select name="permission_id[]" class="form-control" multiple>
                                <option value="" disabled selected>مجوز ها را انتخاب کنید </option>
                                @foreach ($permissions as $permission)
                                    <option value="{{$permission->id}}">{{$permission->title}} </option>
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