@extends('admin.layouts.master')

@section('content')
    <div class="content">
      <div class="container">
        <div class="row justify-content-center">
          <section class="panel">
            <header class="panel-heading">لیست برندها
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th><i class="icon-bullhorn"></i> عنوان </th>
                        <th><i class="icon-bullhorn"></i> تصویر </th>
                        <th><i class="icon-bullhorn"></i> ویرایش </th>
                        <th><i class="icon-bullhorn"></i> حذف </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <td>{{$brand->title}}</td>    
                            <td><img src="storage/app/{{$brand->src}}" height="30px" width="30px"></td>   
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{route('brand.edit',$brand->id)}}">ویرایش</a>
                            </td>
                            <td>
                                <form action="{{route('brand.destroy',$brand->id)}}" method="POST">
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