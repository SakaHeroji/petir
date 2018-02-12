@extends('layouts.public.panel')

@section('content')
<!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Bounty Program List
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Bounty Program List</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

      	<div class="row">

			  <div class="col-sm-9">
			      <ul class="list-group list-group-flush">


					  <li class="list-group-item">
						  <div class="row" style="padding-left:20px;">
							  <div class="col-sm-3" >
								  <div class="row">
									  <img src="{{ URL::asset('panel/dist/img/testgbr.png')}}" style="width:100px;height:100px;"/>
								  </div>
								  <div class="row"  >
									  Credit Carma
								  </div>
								  <div class="row">
									  Finance Industry
								  </div>
							  </div>
							  <div class="col-sm-5" >
								  <div class="row">
									  <a href="#"><h3>E-Commerce System</h3></a>
								  </div>
								  <div class="row">
									  <span class="label label-primary">Network Security</span>
								  </div>
								  <div class="row">
									  <h4>Rewards: $100-$500</h4>
								  </div>
							  </div>
							  <div class="col-sm-4">
								  <div class="row" style="padding-top:20px;">
									  <button type="button" class="btn btn-default">See Detail</button>&#09;
									  <button type="button" class="btn btn-default">Submit Report</button>
								  </div>
								  <div class="row" style="padding-top:10px;">
									  Attempt: <small class="label bg-blue">50</small>
								  	  Accept: <small class="label bg-green">10</small>
								  	  Reject: <small class="label bg-red">40</small>
								  </div>
								  <div class="row">
									  <span class="label label-success">Open</span>
								  </div>

							  </div>
						  </div>
					  </li>
					  <li class="list-group-item">
						  <div class="row" style="padding-left:20px;">
							  <div class="col-sm-3" >
								  <div class="row">
									  <img src="{{ URL::asset('panel/dist/img/testgbr.png')}}" style="width:100px;height:100px;"/>
								  </div>
								  <div class="row"  >
									  Credit Carma
								  </div>
								  <div class="row">
									  Finance Industry
								  </div>
							  </div>
							  <div class="col-sm-5" >
								  <div class="row">
									  <a href="#"><h3>E-Commerce System</h3></a>
								  </div>
								  <div class="row">
									  <span class="label label-default">Server Security</span>
								  </div>
								  <div class="row">
									  <h4>Rewards: $100-$500</h4>
								  </div>
							  </div>
							  <div class="col-sm-4">
								  <div class="row" style="padding-top:20px;">

									  <button type="button" class="btn btn-default">See Detail</button>
									  <button type="button" class="btn btn-default">Submit Report</button>
								  </div>
								  <div class="row" style="padding-top:10px;">
									  Attempt: <small class="label bg-blue">50</small>
									  Accept: <small class="label bg-green">10</small>
									  Reject: <small class="label bg-red">40</small>
								  </div>
								  <div class="row">
									  <span class="label label-danger">Close</span>
								  </div>

							  </div>
						  </div>
					  </li>
				  </ul>
			  </div>
			  <div class="col-sm-3">
			  	<ul class="list-group list-group-flush">
					 <li class="list-group-item"><a href='#'>Server Security</a>
					 		<span class="pull-right-container">
					              <small class="label pull-right bg-red">16</small>
            				</span>
					 </li>
					  <li class="list-group-item"><a href='#'>Web Application Security</a>

						  <span class="pull-right-container">
						              <small class="label pull-right bg-green">3</small>
	            		  </span>

					  </li>
					  <li class="list-group-item"><a href='#'>Android Application Security</a>

						  <span class="pull-right-container">
						              <small class="label pull-right bg-blue">10</small>
	            		  </span>

					  </li>
					  <li class="list-group-item"><a href='#'>iOS Application Security</a>

						  <span class="pull-right-container">
						              <small class="label pull-right bg-yellow">9</small>
	            		  </span>

					  </li>
					  <li class="list-group-item"><a href='#'>Network Security</a>

						  <span class="pull-right-container">
						              <small class="label pull-right bg-black">8</small>
	            		  </span>

					  </li>

				  </ul>
			  </div>
  		</div>

   
      </section>

@endsection