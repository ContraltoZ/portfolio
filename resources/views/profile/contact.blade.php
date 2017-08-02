@extends('layouts.master')

@section('content')

<div class="container contact">
  <div class="small-header">
    <h2 class="featurette-heading">Contact Me</h2>
    <hr class="featurette-divider">
    <h5>Leave me a message on homepage !</h5>
  </div>

  <div class="container row">
  	<div class="col-lg-8">
	    <form method="POST" action="/">
	      
	    {{csrf_field() }}

	      <ul>
	        <li>
	        	<div class="row">
			        <p class="col-lg-6">
			         	<label for="name">NAME:<span class="req">*</span></label>
			            <input type="text" name="name" placeholder="John"/>
			        </p>
			        <p class="col-lg-6">
			            <label for="email">EMAIL:<span class="req">*</span>
			            <span class="small light"> for reply only</span></label>
			            <input type="email" name="email" placeholder="john.smith@gmail.com"/>
			        </p>
	          	</div>
	        </li>
	        
	        <li>
	          <label for="message">MESSAGE:<span class="req">*</span></label>
	          <textarea cols="46" rows="6" name="content" required=""></textarea>
	        </li>
	        
	        <li>
	          <button class="btn-send" type="submit">SEND</button>
	        </li>
	        
	      </ul>
	    </form>  
	    
	    @include ('layouts.errors')

	</div>

	<div class="col-lg-4 sidebar">
		<h6>Email:</h6>54z.yan@gmail.com</br>
		<h6>Mobile:</h6>+61 431739800</br>
		<h6>Address:</h6>30 lillimur road, Ormond, </br>Melbourne</br>
		<h6>Social:</h6><a href="https://www.facebook.com/dale.matthew.18?viewas=100000686899395&privacy_source=timeline_gear_menu"><img class="icon"  src="/img/facebook-icon.png"/></a></br>
  	</div>

  </div>
</div>

@endsection
