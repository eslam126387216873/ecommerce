@extends('users.layouts.master')

@section('title')
    Category
@endsection

@section('content')
    
	<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right">
				<!-- breadcrumbs --> 
				<ol class="breadcrumb breadcrumb1">
					<li><a href="{{route('index')}}">@lang('site.home')</a></li>
					<li class="active">@lang('site.product')</li>
				</ol> 
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
					<h4>@lang('site.product')</h4>
					<ul> 
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('site.Filter')<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="{{route('low_price',$categories->id)}}">@lang('site.Low_price')</a></li> 
								<li><a href="{{route('high_price',$categories->id)}}">@lang('site.High_price')</a></li> 
							</ul> 
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('site.brand')<span class="caret"></span></a>
							<ul class="dropdown-menu">
								@foreach ($brands as $brand)
                                <li><a href="{{route('brands',$brand->id)}}">{{$brand->name}}</a></li> 
                                @endforeach
                            </ul> 
						</li>
					</ul> 
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
                    
                    @foreach ($products as $product)
                    <div class="col-md-3 product-grids"> 
						<div style="max-height: 251px;" class="agile-products">
							<div class="new-tag"><h6>{{$product->descount}}%</h6></div>            
                            @if($image = $product->images->first())
                             <a href="{{route('details_prodcut',$product->slug)}}" style="height: 92%">                                       
                                <a href="{{route('details_prodcut',$product->slug)}}"><img src="{{asset('image_product/'.$image->image)}}" class="" height="160px;" alt="img"></a>
                             </a>
                             @endif
                            <div class="agile-product-text">              
                                <h5><a href="single.html">{{$product->name}}</a></h5> 
                                 @php
                                   $total_price = $product->price - $product->descount/100;
                                 @endphp
								<h6><del>${{$product->price}}</del> ${{$total_price}}</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
									<input type="hidden" name="amount" value="100.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_to_card')</button>
								</form> 
							</div>
						</div> 
					</div> 
                    @endforeach

					<div class="clearfix"> </div>
				</div>
				<!-- add-products --> 

				<!-- //add-products -->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//products-->   
@endsection