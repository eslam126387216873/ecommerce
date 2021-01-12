@extends('users.layouts.master')

@section('title')
    Category
@endsection

@section('content')
    
	<!-- breadcrumbs --> 
	<div class="container"> 
		<ol class="breadcrumb breadcrumb1">
			<li><a href="{{route('index')}}">@lang('site.home')</a></li>
			<li class="active">@lang('site.category')</li>
		</ol> 
		<div class="clearfix"> </div>
	</div>
	<!-- //breadcrumbs -->
	<!-- products -->
	<div class="products">	 
		<div class="container">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
                                @foreach ($products->images as $image)
                                <li data-thumb="{{asset('image_product/'.$image->image)}}">
									<div class="thumb-image detail_images"> <img src="{{asset('image_product/'.$image->image)}}" data-imagezoom="true" class="img-responsive" alt="{{$products->name}}"> </div>
								</li>
                                @endforeach
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name">{{$products->name}}</h3>
						<div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">20 @lang('site.reviews')</li>
								<li><a href="#">@lang('site.add_to_reviews')</a></li>
							</ul> 
						</div>
						<div class="single-price">
							<ul>
                                @php
                                  $total_price = $products->price - $products->descount/100;
                                @endphp
								<li>${{$total_price}}</li>  
								<li><del>${{$products->price}}</del></li> 
								<li><span class="w3off">{{$products->descount}}%</span></li> 
								<li>{{$products->created_at}}</li>
							</ul>	
						</div> 
						<p class="single-price-text">{{$products->content}} </p>
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" /> 
							<input type="hidden" name="w3ls_item" value="Snow Blower" /> 
							<input type="hidden" name="amount" value="540.00" /> 
							<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
						</form>
					</div>
				   <div class="clearfix"> </div>  
				</div>
				<div class="single-page-icons social-icons"> 
					<ul>
						<li><h4>@lang('site.share_on')</h4></li>
						<li><a href="http://www.facebook.com" class="fa fa-facebook icon facebook"> </a></li>
						<li><a href="http://www.twitter.com" class="fa fa-twitter icon twitter"> </a></li>
						<li><a href="http://www.googleplus.com" class="fa fa-google-plus icon googleplus"> </a></li>
						<li><a href="http://www.dribbble.com" class="fa fa-dribbble icon dribbble"> </a></li>
						<li><a href="http://www.rss.com" class="fa fa-rss icon rss"> </a></li> 
					</ul>
				</div>
			</div> 

            <div class="welcome"> 
                <div class="container"> 
                    <div class="welcome-info">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            
                            <div class="clearfix"> </div>
							<h3 class="w3ls-title">@lang('site.featured_products')</h3>
							<br>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                    <div class="tabcontent-grids">  
                                        <div id="owl-demo" class="owl-carousel"> 
            
                                            @foreach ($products2 as $product)
                                            <div class="item">
                                                <div style="height: 280px;" class="glry-w3agile-grids agileits"> 
                                                    @if($image = $product->images->first())
                                                    <a href="{{route('details_prodcut',$product->slug)}}" style="height: 92%">                                       
                                                      <img src="{{asset('image_product/'.$image->image)}}" width="100%" height= "82%" alt="">
                                                    </a>
                                                   @endif  
                                                     <div class="view-caption agileits-w3layouts">           
                                                        <h4><a href="products.html">{{$product->name}}</a></h4>
                                                        {{-- <p>Lorem ipsum dolor sit amet consectetur</p> --}}
                                                        <h5>${{$product->price}}</h5>
                                                        <form action="#" method="post">
                                                            <input type="hidden" name="cmd" value="_cart" />
                                                            <input type="hidden" name="add" value="1" /> 
                                                            <input type="hidden" name="w3ls_item" value="Digital Camera"/> 
                                                            <input type="hidden" name="amount" value="80.00"/> 
                                                            <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_to_card')</button>
                                                        </form>
                                                    </div>         
                                                </div>  
                                            </div>
                                            @endforeach
             
                                        </div> 
                                    </div>
                                </div>
                            </div>   
                        </div>  
                    </div>  	
                </div>  	
            </div> 
            
		</div>
	</div>
	<!--//products-->  

@endsection