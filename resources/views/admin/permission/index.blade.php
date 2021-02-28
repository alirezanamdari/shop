@extends('admin.layouts.master')

@section('content')
    <div class="content">
      <div class="container">
        <div class="row justify-content-center">
          <section class="panel">
            <header class="panel-heading">لیست مجوزها
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
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{$permission->title}}</td>    
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{route('permission.edit',$permission->id)}}">ویرایش</a>
                            </td>
                            <td>
                                <form action="{{route('permission.destroy',$permission->id)}}" method="POST">
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