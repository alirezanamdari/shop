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
                    <form action="{{route('userpanel.update')}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="exampleFormControlInput1">نام کاربری</label>
                            <input type="username" name="username" class="form-control" id="exampleFormControlInput1" value="{{$userpanel->username}}">
                          </div>
  
                        <div class="form-group">
                          <label for="exampleFormControlInput1">ایمیل</label>
                          <input type="email" name="email" class="form-control" id="exampleFormControlInput1"  value="{{$userpanel->email}}">
                        </div>

                        <div class="form-group">
                          <label for="exampleFormControlInput1">موبایل</label>
                          <input type="mobile" name="mobile" class="form-control" id="exampleFormControlInput1" value="{{$userpanel->mobile}}">
                        </div>

                        <div class="form-group">
                          <label for="exampleFormControlSelect2">نقش کاربر</label>
                          <select name="role_id[]" multiple class="form-control" id="exampleFormControlSelect2">
                              @foreach ($roles as $role)
                                <option value="{{$role->id}}" {{in_array($role->id,$userpanel->roles()->pluck('id')->toArray()) ? 'selected' : ''}}> {{$role->title}} </option>
                              @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">رمز عبور</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">تکرار رمز عبور </label>
                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" > 
                        </div>
                    </form>                
                </div>
            </div>    
        </div>
    </div>
</section>
@endsection