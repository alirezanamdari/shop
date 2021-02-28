@extends('admin.layouts.master')

@section('content')
    <div class="content">
      <div class="container">
        <div class="row justify-content-center">
          <section class="panel">
            <header class="panel-heading">لیست نقش ها
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th><i class="icon-bullhorn"></i> عنوان </th>
                        <th><i class="icon-bullhorn"></i> ویرایش </th>
                        <th><i class="icon-bullhorn"></i> حذف </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->title}}</td>    
                            <td>
                                @foreach ($role->permissions()->get() as $permission)
                                    <label class="badge badge-info">{{$permission->title}}</label>&nbsp;
                                @endforeach
                            </td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{route('role.edit',$role->id)}}">ویرایش</a>
                            </td>
                            <td>
                                <form action="{{route('role.destroy',$role->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-xs" type="submit">حذف</button>
                                </form>
                            </td>
                        </tr>
                      @endforeach
                </tbody>
            </table>
        </section>    
        </div>  
      </div>
    </div>
@endsection