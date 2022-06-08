@extends('layout')
@section('layout_content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="/login" method="POST">
							@csrf
							<input type="email" name="inputemail" placeholder="Email" />
							<input type="password" name="inputpw" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						{{-- <form action="/login/signin" method="POST">
							@csrf
							<input type="text" name="inputname" placeholder="Name"/>
							<input type="email" name="inputemail" placeholder="Email Address"/>
							<input type="text" name="inputphone" placeholder="Phone"/>
							<input type="password"  name="inputpassword" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
							
						</form> --}}
						<form action="/add-customer" method="POST">
							@csrf
							<input type="text" name="customer_name" placeholder="Name"/>
							<input type="email" name="customer_email" placeholder="Email Address"/>
							<input type="text" name="customer_phone" placeholder="Phone"/>
							<input type="password"  name="customer_password" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection
	
	
