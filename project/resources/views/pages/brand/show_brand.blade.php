@extends('layout')
@section('layout_content')
<section id="advertisement">
	<div class="container">
		<img src="{{asset('images/shop/advertisement.jpg')}}" alt="" />
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
					@foreach($braName as $key => $name)
					<h2 class="title text-center">{{$name->brand_name}} Brand</h2>
					@endforeach

					@foreach($brandById as $key => $cid)
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<a href="/product-details/{{$cid->product_id}}">
									<img src="../upload/product/{{$cid->product_image}}" height="200" style="object-fit: contain;" alt="" />
									<h2>{{number_format($cid->product_price,0,',','.')}} VND</h2>
									<p>{{$cid->product_name}}</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
								</a>
								</div>
								{{-- <div class="product-overlay">
									<div class="overlay-content">
										<h2>{{number_format($cid->product_price)}} VND</h2>
										<p>{{$cid->product_name}}</p>
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
				</div>
			</div>
		</div>
</section>
@endsection