@extends('users.layouts.master')

@section('title')
    All Products
@endsection

@section('content')
    
	<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-12 product-w3ls-right">
				<!-- breadcrumbs --> 
				<ol class="breadcrumb breadcrumb1">
					<li><a href="{{route('index')}}">@lang('site.home_page')</a></li>
					<li class="active">@lang('site.products')</li>
				</ol> 
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
					<h4>@lang('site.products')</h4>
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag"><h6>@lang('site.new')</h6></div>
							<a href="single.html"><img src="{{asset('user_page/images/e1.png')}}" class="img-responsive" alt="@lang('site.Audio_Speaker')"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">@lang('site.Audio_Speaker')</a></h5> 
								<h6><del>$200</del> $100</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
									<input type="hidden" name="amount" value="100.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form> 
							</div>
						</div> 
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>@lang('site.new')</h6></div>
							<a href="single.html"><img src="{{asset('user_page/images/e2.png')}}" class="img-responsive" alt="@lang('site.Refrigerator')"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">@lang('site.Refrigerator')</a></h5> 
								<h6><del>$700</del> $300</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Refrigerator" /> 
									<input type="hidden" name="amount" value="300.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag"><h6>@lang('site.new')</h6></div>
							<a href="single.html"><img src="{{asset('user_page/images/e3.png')}}" class="img-responsive" alt="@lang('site.Smart_Phone')"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">@lang('site.Smart_Phone')</a></h5> 
								<h6><del>$100</del> $70</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Smart Phone"/> 
									<input type="hidden" name="amount" value="70.00"/> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>
						</div>  
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>@lang('site.new')</h6></div>
							<a href="single.html"><img src="{{asset('user_page/images/e4.png')}}" class="img-responsive" alt="@lang('site.Digital_Camera')"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">@lang('site.Digital_Camera')</a></h5> 
								<h6><del>$100</del> $80</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Digital Camera"/> 
									<input type="hidden" name="amount" value="80.00"/> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>
						</div>
					</div> 
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>@lang('site.new')</h6></div>
							<a href="single.html"><img src="{{asset('user_page/images/e4.png')}}" class="img-responsive" alt="@lang('site.Digital_Camera')"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">@lang('site.Digital_Camera')</a></h5> 
								<h6><del>$100</del> $80</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Digital Camera"/> 
									<input type="hidden" name="amount" value="80.00"/> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag"><h6>@lang('site.new')</h6></div>
							<a href="single.html"><img src="{{asset('user_page/images/e3.png')}}" class="img-responsive" alt="@lang('site.Smart_Phone')"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">@lang('site.Smart_Phone')</a></h5> 
								<h6><del>$100</del> $70</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Smart Phone"/> 
									<input type="hidden" name="amount" value="70.00"/> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>
						</div>  
					</div> 
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag"><h6>@lang('site.new')</h6></div>
							<a href="single.html"><img src="{{asset('user_page/images/e1.png')}}" class="img-responsive" alt="@lang('site.Audio_speaker')"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">@lang('site.Audio_speaker')</a></h5> 
								<h6><del>$200</del> $100</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
									<input type="hidden" name="amount" value="100.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form> 
							</div>
						</div> 
					</div> 
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>@lang('site.new')</h6></div>
							<a href="single.html"><img src="{{asset('user_page/images/e2.png')}}" class="img-responsive" alt="@lang('site.Refrigerator')"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">@lang('site.Refrigerator')</a></h5> 
								<h6><del>$700</del> $300</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Refrigerator" /> 
									<input type="hidden" name="amount" value="300.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>
						</div>
					</div> 
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag"><h6>@lang('site.new')</h6></div>
							<a href="single.html"><img src="{{asset('user_page/images/e1.png')}}" class="img-responsive" alt="@lang('site.Audio_speaker')"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">@lang('site.Audio_speaker')</a></h5> 
								<h6><del>$200</del> $100</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
									<input type="hidden" name="amount" value="100.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form> 
							</div>
						</div> 
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>@lang('site.new')</h6></div>
							<a href="single.html"><img src="{{asset('user_page/images/e2.png')}}" class="img-responsive" alt="@lang('site.Refrigerator')"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">@lang('site.Refrigerator')</a></h5> 
								<h6><del>$700</del> $300</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Refrigerator" /> 
									<input type="hidden" name="amount" value="300.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag"><h6>@lang('site.new')</h6></div>
							<a href="single.html"><img src="{{asset('user_page/images/e3.png')}}" class="img-responsive" alt="@lang('site.Smart_Phone')"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">@lang('site.Smart_Phone')</a></h5> 
								<h6><del>$100</del> $70</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Smart Phone"/> 
									<input type="hidden" name="amount" value="70.00"/> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>
						</div>  
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>@lang('site.new')</h6></div>
							<a href="single.html"><img src="{{asset('user_page/images/e4.png')}}" class="img-responsive" alt="@lang('site.Digital_Camera')"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">@lang('site.Digital_Camera')</a></h5> 
								<h6><del>$100</del> $80</h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Digital Camera"/> 
									<input type="hidden" name="amount" value="80.00"/> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>
						</div>
					</div> 
					<div class="clearfix"> </div>
				</div>
			</div>
	
			<div class="clearfix"> </div>
            <!-- recommendations carosel -->
			<br>
			<br>
			<h3 class="w3ls-title" style="text-align: center">@lang('site.featured_products')</h3> 

			<div class="recommend">
                <script>
					$(document).ready(function() { 
						$("#owl-demo5").owlCarousel({
					 
						  autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true
					 
						});
						
					}); 
				</script>

				<div id="owl-demo5" class="owl-carousel">

					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<a href="products.html"><img src="{{asset('user_page/images/e4.png')}}" alt="منتج"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products.html">منتج</a></h4>
								<p>منتج حاله جيده وبسعر رخيص</p>
								<h5>$80</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Digital Camera"/> 
									<input type="hidden" name="amount" value="100.00" /> 
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>         
						</div>  
					</div>  
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<div class="new-tag"><h6>180%</h6></div>
							<a href="products4.html"><img src="{{asset('user_page/images/s1.png')}}" alt="منتج"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products4.html">منتج</a></h4>
								<p>منتج حاله جيده وبسعر رخيص</p>
								<h5>$180</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Roller Skates"/> 
									<input type="hidden" name="amount" value="180.00" /> 
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>         
						</div>  
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<a href="products1.html"><img src="{{asset('user_page/images/e4.png')}}" alt="منتج"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products1.html">منتج</a></h4>
								<p>منتج حاله جيده وبسعر رخيص</p>
								<h5>$10</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="T Shirt" /> 
									<input type="hidden" name="amount" value="10.00" /> 
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>        
						</div>    
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<div class="new-tag"><h6>14%</h6></div>
							<a href="products6.html"><img src="{{asset('user_page/images/e3.png')}}" alt="منتج"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products6.html">منتج</a></h4>
								<p>منتج حاله جيده وبسعر رخيص</p>
								<h5>$14</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Coffee Mug" /> 
									<input type="hidden" name="amount" value="14.00" /> 
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>         
						</div>  
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<div class="new-tag"><h6>20%</h6></div>
							<a href="products6.html"><img src="{{asset('user_page/images/e2.png')}}" alt="منتج"></a>
							<div class="view-caption agileits-w3layouts">              
								<h4><a href="products6.html">منتج</a></h4>
								<p>منتج حاله جيده وبسعر رخيص</p>
								<h5>$20</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Teddy bear" /> 
									<input type="hidden" name="amount" value="20.00" /> 
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>        
						</div> 
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<a href="products4.html"><img src="{{asset('user_page/images/e1.png')}}" alt="منتج"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products4.html">منتج</a></h4>
								<p>منتج حاله جيده وبسعر رخيص</p>
								<h5>$70</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Football"/> 
									<input type="hidden" name="amount" value="70.00"/>
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>        
						</div> 
					</div> 
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<div class="new-tag"><h6>80%</h6></div>
							<a href="products3.html"><img src="{{asset('user_page/images/e4.png')}}" alt="منتج"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products3.html">منتج</a></h4>
								<p>منتج حاله جيده وبسعر رخيص</p>
								<h5>$80</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Wall Clock" /> 
									<input type="hidden" name="amount" value="80.00" /> 
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('site.add_cart')</button>
								</form>
							</div>         
						</div>  
					</div> 
				</div>    
			</div>
			<!-- //recommendations -->
		</div>
	</div>
	<!--//products--> 

@endsection