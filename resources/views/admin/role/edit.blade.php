@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card card-primary col-md-8">
                <div class="card-header">
                    <h3 class="card-title"> ویرایش نقش {{$role->title}} </h3>
                </div>
                <div class="card-body">
                    <form role="form" action="{{route('role.update',$role->id)}}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{$role->title}}" >
                        </div>

                        <div class="form-group">
                            <select name="permission_id[]" class="form-control" multiple>
                                @foreach ($permissions as $permission)
                                    <option value="{{$permission->id}}" {{in_array($permission->id,$role->permissions()->pluck('id')->toArray()) ? 'selected' : ''}}>{{$permission->title}} </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">بروزرسانی</button>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</section>
@endsection