@extends('admin.master')
@section('title', 'Product Detail')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Detail</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Product detail information</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                   <table class="table table-bordered table-hover">
                       <tr>
                           <th>Product Id</th>
                           <th>{{$product->id}}</th>
                       </tr>
                       <tr>
                           <th>Product Name</th>
                           <th>{{$product->name}}</th>
                       </tr>
                       <tr>
                           <th>Product Code</th>
                           <th>{{$product->code}}</th>
                       </tr>
                       <tr>
                           <th>Product Category</th>
                           <th>{{$product->category->name}}</th>
                       </tr>
                       <tr>
                           <th>Product Sub-category</th>
                           <th>{{$product->subCategory->name}}</th>
                       </tr>
                       <tr>
                           <th>Product Brand</th>
                           <th>{{$product->brand->name}}</th>
                       </tr>
                       <tr>
                           <th>Product Unit</th>
                           <th>{{$product->unit->name}}</th>
                       </tr>
                       <tr>
                           <th>Product short description</th>
                           <th>{{$product->short_description}}</th>
                       </tr>
                       <tr>
                           <th>Product long Description</th>
                           <th>{!! isset($product->long_description) ? $product->long_description : '' !!}</th>
                       </tr>
                       <tr>
                           <th>Product meta title</th>
                           <th>{{$product->meta_title}}</th>
                       </tr>
                       <tr>
                           <th>Product meta description</th>
                           <th>{{$product->meta_description}}</th>
                       </tr>
                       <tr>
                           <th>Product regular price</th>
                           <th>{{$product->regular_price}}</th>
                       </tr>
                       <tr>
                           <th>Product selling price</th>
                           <th>{{$product->selling_price}}</th>
                       </tr>
                       <tr>
                           <th>Product Stock amount</th>
                           <th>{{$product->stock_amount}}</th>
                       </tr>
                       <tr>
                           <th>Product Image</th>
                           <th><img src="{{asset($product->image)}}" alt="" height="200" width="200" /> </th>
                       </tr>
                       <tr>
                           <th>Product Other Image</th>
                           <td>
                               @foreach($product->otherImages as $otherImage)
                               <img src="{{asset($otherImage->image)}}" alt="" height="100" width="100" />
                               @endforeach
                       </td>
                       </tr>
                       <tr>
                           <th>Product status</th>
                           <th>{{$product->status}}</th>
                       </tr>
                       <tr>
                           <th>Product feature status</th>
                           <th>{{$product->featured_status}}</th>
                       </tr>
                       <tr>
                           <th>Product Trending status</th>
                           <th>{{$product->trending_status}}</th>
                       </tr>
                       <tr>
                           <th>Total Sales</th>
                           <th>{{$product->sales_count}}</th>
                       </tr>
                       <tr>
                           <th>Total view</th>
                           <th>{{$product->hit_count}}</th>
                       </tr>
                       <tr>
                           <th>Publication status</th>
                           <th>{{$product->publication_status}}</th>
                       </tr>
                   </table>
                </div>
            </div>
        </div>
    </div>
@endsection
