@extends('admins.layouts.master')

@section('title')
    Products
@endsection


@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    @lang('site.details_product')
                </h2>
            </div>

            <!-- Start Card Code -->
            <div class="card show">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">

                            <div class="preview-pic tab-content">
                                @foreach($products->images as $k=>$image)
                                    @if($k==0)
                                        <div class="tab-pane active" id="pic-{{$k}}"><img src="{{asset('image_product/'.$image->image)}}" /></div>
                                    @else
                                        <div class="tab-pane" id="pic-{{$k}}"><img src="{{asset('image_product/'.$image->image)}}" style="max-height: 399px" /></div>
                                    @endif
                                @endforeach
                            </div>
                            <ul class="preview-thumbnail nav nav-tabs">
                                @foreach($products->images as $k=>$image)
                                    @if($k==0)
                                        <li class="active"><a data-target="#pic-{{$k}}" data-toggle="tab"><img src="{{asset('image_product/'.$image->image)}}" height='45px' width="80px"/></a></li>
                                    @else
                                        <li><a data-target="#pic-{{$k}}" data-toggle="tab"><img src="{{asset('image_product/'.$image->image)}}" height='45px' width="80px"/></a></li>
                                    @endif
                                @endforeach

                            </ul>

                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">{{$products->name}}</h3>
                            <h4 class="price">@lang('site.content'):</h4>
                            <p class="product-description">{{$products->content}}</p>
                            <h4 class="price">@lang('site.price'): <span>{{$products->price}}</span></h4>

                            <h4 style="color:green">@lang('site.descount'): 
                                @if($products->descount == null)
                                 <span>null</span> 
                                @else
                                 <span>{{$products->descount}}$</span>
                                @endif
                            </h4>
                            @php
                            $total_price = $products->price * $products->descount/100;
                            @endphp
                            <h4 class="price">@lang('site.total_price'): 
                                <span>{{$total_price}}</span>
                            </h4>
                            <h4 class="price">@lang('site.category'): 
                                <span>{{$products->category->name}}</span>
                            </h4>
                            <h4 class="price">@lang('site.size'):  
                                @if($products->sizes->count() == 0)
                                    <span>null</span>
                                @else
                                 @foreach ($products->sizes as $size)
                                     <span>{{$size->size}}</span> /
                                 @endforeach
                                @endif
                            </h4>

                            <h4 class="price">@lang('site.color'):  
                                @if($products->colors->count() == 0)
                                <span>null</span>
                                @else
                                 @foreach ($products->colors as $color)
                                 <span>{{$color->color}}</span> /
                                 @endforeach
                                @endif
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // End Card Code -->

        </div>
    </section>
@endsection
