@extends('layout')
@section('layout_content')
<section id="advertisement">
	<div class="container">
		<img src="../images/shop/advertisement.jpg" alt="" />
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Category</h2>
					<div class="panel-group category-products" id="accordian">
						@foreach($category as $key => $c)
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a href="/category-list/{{$c->category_id}}">{{$c->category_name}}</a></h4>
							</div>
						</div>
						@endforeach
					</div><!--/category-products-->
					
					<div class="brands_products">
						<h2>Brands</h2>
						<div class="brands-name">
							<ul class="nav nav-pills nav-stacked">
								@foreach($brand as $key => $b)
								<li><a href="/brand-list/{{$b->brand_id}}"> <span class="pull-right">(50)</span>{{$b->brand_name}}</a></li>
								@endforeach
							</ul>
						</div>
					</div><!--/brands_products-->
			
					<div class="price-range">
						<h2>Price Range</h2>
						<div class="well">
							 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
							 <b>$ 0</b> <b class="pull-right">$ 600</b>
						</div>
					</div><!--/price-range-->
					
					<div class="shipping text-center">
						<img src="../images/home/shipping.jpg" alt="" />
					</div><!--/shipping-->
				
				</div>
			</div>
			
			<div class="col-sm-9 padding-right">
				<div class="features_items">
					<h2 class="title text-center">Features Items</h2>
					@foreach($all_product as $key => $ap)
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<a href="/product-details/{{$ap->product_id}}">
									<img src="upload/product/{{$ap->product_image}}" height="200" style="object-fit: contain;" alt="" />
									<h2>{{number_format($ap->product_price,0,',','.')}} VND</h2>
									<p>{{$ap->product_name}}</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
									</a>
								</div>
								{{-- <div class="product-overlay">
									<div class="overlay-content">
										<h2>{{number_format($ap->product_price)}} VND</h2>
										<p>{{$ap->product_name}}</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
									</div>
								</div> --}}
								<img src="images/home/new.png" class="new" alt="" />
							</div>
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
									<li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
					{{-- <div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="images/home/product5.jpg" alt="" />
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
								<div class="product-overlay">
									<div class="overlay-content">
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
								</div>
								<img src="images/home/sale.png" class="new" alt="" />
							</div>
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="images/home/product6.jpg" alt="" />
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
								<div class="product-overlay">
									<div class="overlay-content">
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
								</div>
							</div>
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
								</ul>
							</div>
						</div>
					</div> --}}
				</div><!--features_items-->
				<div class="category-tab">
					<div class="col-sm-12">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tshirt" data-toggle="tab">Apple</a></li>
							<li><a href="#blazers" data-toggle="tab">Asus</a></li>
							<li><a href="#sunglass" data-toggle="tab">SamSung</a></li>
							<li><a href="#kids" data-toggle="tab">Dell</a></li>
							<li><a href="#poloshirt" data-toggle="tab">Acer</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade active in" id="tshirt" >
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iphone-13-pro-max.jpg" alt="" />
												<h2>$1000</h2>
												<p>Iphone 13 Pro Max 256GB</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iphone-13-pro-max.jpg" alt="" />
												<h2>$1000</h2>
												<p>Iphone 13 Pro Max 256GB</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iphone-13-pro-max.jpg" alt="" />
												<h2>$1000</h2>
												<p>Iphone 13 Pro Max 256GB</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iphone-13-pro-max.jpg" alt="" />
												<h2>$1000</h2>
												<p>Iphone 13 Pro Max 256GB</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						
						<div class="tab-pane fade" id="blazers" >
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/samsung-galaxy-s21.jpg" alt="" />
											<h2>$999</h2>
											<p>SamSung Galaxy S21</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/samsung-galaxy-s21.jpg" alt="" />
											<h2>$999</h2>
											<p>SamSung Galaxy S21</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/samsung-galaxy-s21.jpg" alt="" />
											<h2>$999</h2>
											<p>SamSung Galaxy S21</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/samsung-galaxy-s21.jpg" alt="" />
											<h2>$999</h2>
											<p>SamSung Galaxy S21</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						
						<div class="tab-pane fade" id="sunglass" >
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iiphone_12_pro_max_gold_ha120.jpg" alt="" />
											<h2>$1000</h2>
											<p>Iphone 12 Pro Max Gold</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iiphone_12_pro_max_gold_ha120.jpg" alt="" />
											<h2>$1000</h2>
											<p>Iphone 12 Pro Max Gold</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iiphone_12_pro_max_gold_ha120.jpg" alt="" />
											<h2>$1000</h2>
											<p>Iphone 12 Pro Max Gold</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iiphone_12_pro_max_gold_ha120.jpg" alt="" />
											<h2>$1000</h2>
											<p>Iphone 12 Pro Max Gold</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						
						<div class="tab-pane fade" id="kids" >
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iphone-12-violet-1-600x60026.jpg" alt="" />
											<h2>$1000</h2>
											<p>Iphone 12 Pro Max Violet</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iphone-12-violet-1-600x60026.jpg" alt="" />
											<h2>$1000</h2>
											<p>Iphone 12 Pro Max Violet</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iphone-12-violet-1-600x60026.jpg" alt="" />
											<h2>$1000</h2>
											<p>Iphone 12 Pro Max Violet</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iphone-12-violet-1-600x60026.jpg" alt="" />
											<h2>$1000</h2>
											<p>Iphone 12 Pro Max Violet</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						
						<div class="tab-pane fade" id="poloshirt" >
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iphone-12-violet-1-600x60026.jpg" alt="" />
											<h2>$1000</h2>
											<p>Iphone 12 Pro Max Violet</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iphone-12-violet-1-600x60026.jpg" alt="" />
											<h2>$1000</h2>
											<p>Iphone 12 Pro Max Violet</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iphone-12-violet-1-600x60026.jpg" alt="" />
											<h2>$1000</h2>
											<p>Iphone 12 Pro Max Violet</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/iphone-12-violet-1-600x60026.jpg" alt="" />
											<h2>$1000</h2>
											<p>Iphone 12 Pro Max Violet</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="recommended_items">
					<h2 class="title text-center">recommended items</h2>
					
					<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active">	
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone-13-pro-max.jpg" alt="" />
												<h2>$1000</h2>
												<p>Iphone 13 Pro Max 256GB</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone-13-pro-max.jpg" alt="" />
												<h2>$1000</h2>
												<p>Iphone 13 Pro Max 256GB</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone-13-pro-max.jpg" alt="" />
												<h2>$1000</h2>
												<p>Iphone 13 Pro Max 256GB</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<div class="item">	
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone-13-pro-max.jpg" alt="" />
												<h2>$1000</h2>
												<p>Iphone 13 Pro Max 256GB</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone-13-pro-max.jpg" alt="" />
												<h2>$1000</h2>
												<p>Iphone 13 Pro Max 256GB</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="../images/home/iphone-13-pro-max.jpg" alt="" />
												<h2>$1000</h2>
												<p>Iphone 13 Pro Max 256GB</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						  </a>
						  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						  </a>			
					</div>
				</div>
			</div>
		</div>
</section>
@endsection