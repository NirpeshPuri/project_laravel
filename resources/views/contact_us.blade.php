@if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
@extends('layouts.frontend_master')
@section('title','Dashboard')
@section('content')

<section class="innercontent-block">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 contactform">
			<h2 class="h2">Contact Us<div class="title_underline"></div></h2>
			 			<p>We would love to hear from you! Please fill out the form below so we may
assist you. Do send us feedbacks if you have any!
			</p>
			<form class="form-inline row contactform" method="post" action="{{url('contact_us')}}">
				@csrf
			  	<div class="form-group col-md-6">
			     	<input type="text" class="form-control" id="name" name="name"  data-parsley-minlength="2" data-parsley-required="true" placeholder="Full Name*">
			  	</div>
			  	<div class="form-group col-md-6">
			    	<input type="email" class="form-control" id="email" name="email" data-parsley-type="email"	  data-parsley-required="true" placeholder="Email*">
			  	</div>
				  <div class="form-group col-md-6">
			     	<input type="text" class="form-control" id="phone" name="phone"  data-parsley-minlength="2" data-parsley-required="true" placeholder="Enter Phone*">
			  	</div>
			  	<div class="form-group col-md-12">
			  		<input type="text" class="form-control" name="subject" id="subject" data-parsley-required="true" placeholder="Subject">
			  	</div>
			  	<div class="form-group col-md-12">
			  	<textarea class="form-control" rows="8" data-parsley-minlength="6" name="message"  id="message" placeholder="*Your Message"  data-parsley-required="true"></textarea>
			  	</div>
		  		<div class="form-group col-md-3">
			 	<button type="submit" class="form-control btn send-btn">Send</button>
			 	</div>
			</form>
			</div>
			<div class="col-md-6 col-sm-6 tp57p">
				
			</div>
		</div>
	</div>
</section>
@endsection