@extends('layout')
@section('layout_content')
<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="/">Home</a></li>
			  <li class="active">Shopping Cart</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<?php
				$content = Cart::content();
			?>
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Item</td>
						<td class="description"></td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					@foreach($content as $v_content)
					<tr>
						<td class="cart_product">
							<a href=""><img src="../upload/product/{{$v_content->options->image}}" height="70" style="object-fit: contain; padding-right: 10px;" alt=""></a>
						</td>
						<td class="cart_description">
							<h4><a href="">{{$v_content->name}}</a></h4>
							<p>ID: {{$v_content->id}}</p>
						</td>
						<td class="cart_price">
							<p>{{number_format($v_content->price,0,',','.')}}</p>
						</td>

						<td class="cart_quantity">
							<div class="cart_quantity_button">
								<form action="/update-cart" method="POST">
									@csrf
									<input class="cart_quantity_input" type="number" min="1" name="quantity_cart" value="{{$v_content->qty}}" style="width: 50px;">
									<input class="form-control" type="hidden" name="rowId_cart" value="{{$v_content->rowId}}">
									<input class="btn btn-default btn-sm" type="submit" name="update_qty" value="Update">
								</from>
							</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">
								<?php
								$subtotal = number_format($v_content->price*$v_content->qty,0,',','.');
								echo($subtotal.' vnd');
								?>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href="/delete-cart/{{$v_content->rowId}}"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section> <!--/#cart_items-->
<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>What would you like to do next?</h3>
			<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="chose_area">
					<ul class="user_option">
						<li>
							<input type="checkbox">
							<label>Use Coupon Code</label>
						</li>
						<li>
							<input type="checkbox">
							<label>Use Gift Voucher</label>
						</li>
						<li>
							<input type="checkbox">
							<label>Estimate Shipping & Taxes</label>
						</li>
					</ul>
					<ul class="user_info">
						<li class="single_field">
							<label>Country:</label>
							<select>
								<option>United States</option>
								<option>Bangladesh</option>
								<option>UK</option>
								<option>India</option>
								<option>Pakistan</option>
								<option>Ucrane</option>
								<option>Canada</option>
								<option>Dubai</option>
							</select>
							
						</li>
						<li class="single_field">
							<label>Region / State:</label>
							<select>
								<option>Select</option>
								<option>Dhaka</option>
								<option>London</option>
								<option>Dillih</option>
								<option>Lahore</option>
								<option>Alaska</option>
								<option>Canada</option>
								<option>Dubai</option>
							</select>
						
						</li>
						<li class="single_field zip-field">
							<label>Zip Code:</label>
							<input type="text">
						</li>
					</ul>
					<a class="btn btn-default update" href="">Get Quotes</a>
					<a class="btn btn-default check_out" href="">Continue</a>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="total_area">
					<ul>
						<li>Cart Sub Total <span>{{Cart::priceTotal(0,',','.')}} vnd</span></li>
						<li>Eco Tax <span>{{Cart::tax(0,',','.')}} vnd</span></li>
						<li>Shipping Cost <span>Free</span></li>
						<li>Total <span>{{Cart::total(0,',','.')}} vnd</span></li>
					</ul>
						<a class="btn btn-default update" href="">Update</a>
						<a class="btn btn-default check_out" href="/login">Check Out</a>
				</div>
			</div>
		</div>
	</div>
</section><!--/#do_action-->
@endsection