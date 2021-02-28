@extends('admin.layouts.master')

@section('content')
    <div class="content">
      <div class="container">
        <div class="row justify-content-center">
          <section class="panel">
            <header class="panel-heading">لیست دسته بندی ها
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th><i class="icon-bullhorn"></i> عنوان </th>
                        <th><i class="icon-bullhorn"></i> والد </th>
                        <th><i class="icon-bullhorn"></i> ویرایش </th>
                        <th><i class="icon-bullhorn"></i> حذف </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $cat)
                        <tr>
                            <td>{{$cat->title}}</td>    
                            <td>{{optional($cat->parent)->title}}</td>   
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{route('category.edit',$cat->id)}}">ویرایش</a>
                            </td>
                            <td>
                                <form action="{{route('category.destroy',$cat->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-xs" type="submit">حذف</button>
                                </form>
                            </td>
                        </tr>
                      @endforeach
                </tbody>
            </table>
            {{$categories->links()}}
        </section>    
        </div>  
      </div>
    </div>
@endsection