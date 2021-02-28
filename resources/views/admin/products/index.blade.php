@extends('admin.layouts.master')

@section('content')
    <div class="content">
      <div class="container">
        <div class="row justify-content-center">
          <section class="panel">
            <header class="panel-heading"> لیست محصولات 
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th><i class="icon-bullhorn"></i> عنوان محصول </th>
                        <th><i class="icon-bullhorn"></i> برند </th>
                        <th><i class="icon-bullhorn"></i> دسته بندی </th>
                        <th><i class="icon-bullhorn"></i> قیمت </th>
                        <th><i class="icon-bullhorn"></i> تعداد موجودی </th>
                        <th><i class="icon-bullhorn"></i> تخفیف </th>
                        <th><i class="icon-bullhorn"></i> تصویر </th>
                        <th><i class="icon-bullhorn"></i> ویرایش </th>
                        <th><i class="icon-bullhorn"></i> حذف </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>    
                            <td>
                                @foreach ($product->brand()->get() as $item)
                                    <label> {{$item->title}} </label>
                                @endforeach
                            </td>    
                            <td>
                                @foreach ($product->categories()->get() as $item)
                                    <label >{{$item->title}}</label>
                                @endforeach
                            </td>    
                            <td>{{number_format($product->price).'$'}}</td>    
                            <td>{{$product->count}}</td>    
                            <td>{{$product->discount}}</td>    

                            <td><img src="/{{$product->image}}" height="30px" width="30px"></td>   
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{route('product.edit',$product->id)}}">ویرایش</a>
                            </td>
                            <td>
                                <form action="{{route('product.destroy',$product->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-xs" type="submit">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </section>    
        </div>  
      </div>
    </div>
@endsection