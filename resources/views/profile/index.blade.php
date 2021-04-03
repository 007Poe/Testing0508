@extends('layouts.master')

@section('style')
<style type="text/css">
.card {
	padding-top: 20px;
	margin: 10px 0 20px 0;
	background-color: rgba(214, 224, 226, 0.2);
	border-top-width: 0;
	border-bottom-width: 2px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.card .card-heading {
	padding: 0 20px;
	margin: 0;
}

.card .card-heading.simple {
	font-size: 20px;
	font-weight: 300;
	color: #777;
	border-bottom: 1px solid #e5e5e5;
}

.card .card-heading.image img {
	display: inline-block;
	width: 46px;
	height: 46px;
	margin-right: 15px;
	vertical-align: top;
	border: 0;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
	display: inline-block;
	vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
	margin: 0;
	font-size: 14px;
	line-height: 16px;
	color: #262626;
}

.card .card-heading.image .card-heading-header span {
	font-size: 12px;
	color: #999999;
}

.card .card-body {
	padding: 0 20px;
	margin-top: 20px;
}

.card .card-media {
	padding: 0 20px;
	margin: 0 -14px;
}

.card .card-media img {
	max-width: 100%;
	max-height: 100%;
}

.card .card-actions {
	min-height: 30px;
	padding: 0 20px 20px 20px;
	margin: 20px 0 0 0;
}

.card .card-comments {
	padding: 20px;
	margin: 0;
	background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
	padding: 0;
	margin: 0 20px 12px 20px;
}

.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
	padding-right: 5px;
	overflow: hidden;
	font-size: 12px;
	color: #999;
	text-overflow: ellipsis;
	white-space: nowrap;
}

.card-comments .media-heading {
	font-size: 13px;
	font-weight: bold;
}

.card.people {
	position: relative;
	display: inline-block;
	width: 170px;
	height: 300px;
	padding-top: 0;
	margin-left: 20px;
	overflow: hidden;
	vertical-align: top;
}

.card.people:first-child {
	margin-left: 0;
}

.card.people .card-top {
	position: absolute;
	top: 0;
	left: 0;
	display: inline-block;
	width: 170px;
	height: 150px;
	background-color: #ffffff;
}

.card.people .card-top.green {
	background-color: #53a93f;
}

.card.people .card-top.blue {
	background-color: #427fed;
}

.card.people .card-info {
	position: absolute;
	top: 150px;
	display: inline-block;
	width: 100%;
	height: 101px;
	overflow: hidden;
	background: #ffffff;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.card.people .card-info .title {
	display: block;
	margin: 8px 14px 0 14px;
	overflow: hidden;
	font-size: 16px;
	font-weight: bold;
	line-height: 18px;
	color: #404040;
}

.card.people .card-info .desc {
	display: block;
	margin: 8px 14px 0 14px;
	overflow: hidden;
	font-size: 12px;
	line-height: 16px;
	color: #737373;
	text-overflow: ellipsis;
}

.card.people .card-bottom {
	position: absolute;
	bottom: 0;
	left: 0;
	display: inline-block;
	width: 100%;
	padding: 10px 20px;
	line-height: 29px;
	text-align: center;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.card.hovercard {
	position: relative;
	padding-top: 0;
	margin-top: -1px;
	overflow: hidden;
	text-align: center;
	background-color: rgba(214, 224, 226, 0.2);
}

.card.hovercard .cardheader {
	background: url("/images/banner/pic3.jpg");
	background-size: cover;
	height: 220px;
}

.card.hovercard .avatar {
	position: relative;
	top: -100px;
	margin-bottom: -100px;
}

.card.hovercard .avatar img {
	width: 200px;
	height: 200px;
	max-width: 200px;
	max-height: 200px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	border: 5px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
	padding: 4px 8px 10px;
}

.card.hovercard .info .title {
	margin-bottom: 4px;
	font-size: 24px;
	line-height: 1;
	color: #262626;
	vertical-align: middle;
}

.card.hovercard .info .desc {
	overflow: hidden;
	font-size: 12px;
	line-height: 20px;
	color: #737373;
	text-overflow: ellipsis;
}

.card.hovercard .bottom {
	padding: 0 20px;
	margin-bottom: 17px;
}

</style>
@endsection

@section('content')

<!-- Page Main -->
<div role="main" class="main">
	<!-- <div class="page-default"> -->
		<!-- Container -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">

					<div class="card hovercard">
						<div class="cardheader">

						</div>
						<div class="avatar">
							<img alt="" src="/img/staff_images/{{$staff->image}}">
						</div>
						<div class="info">
							<div class="title">
								<a href="#">{{$staff->name}}AAAA</a>
								<span><h5>({{ $staff->position['name']}})</h5></span>
							</div>
							<div class="desc pad-top-5">
								<ul class="social-icons color">
									<li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
									<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
									<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		<!-- Container -->
	<!-- Section -->
	<section class="pad-top-none">
		<div class="container">
			<div class="row">
				@foreach($staff->skillstaff as $skill)
				<div class="col-md-6">
					@switch ($skill->percent)
						@case ($skill->percent <= 20)
						@php $color = '#FF0000' @endphp
						@break
						@case ($skill->percent > 20 && $skill->percent <= 40)
						@php $color = '#FFC400' @endphp
						@break
						@case ($skill->percent > 40 && $skill->percent <= 60)
						@php $color = '#2196F3' @endphp
						@break
						@case ($skill->percent > 60 && $skill->percent <= 80)
						@php $color = '#1ABC9C' @endphp
						@break
						@case ($skill->percent > 80)
						@php $color = '#56BA5C' @endphp
						@break
					@endswitch
					<!-- Progress Bar -->
					<h5 class="progress-tille">{{$skill->skill->name}}</h5>
					<div class="progress" data-height="10">
						<div data-percentage="{{$skill->percent}}" aria-valuemax="100" aria-valuemin="0" aria-valuenow="{{$skill->percent}}" role="progressbar" data-bg="{{ $color }}" class="progress-bar">
							<span class="progress-label">{{$skill->percent}}%</span>
						</div>
					</div><!-- Progress Bar -->
				</div>
				@endforeach
				<!-- <div class="col-md-6"> -->
					<!-- Progress Bar -->
					<!-- <h5 class="progress-tille">Laravel</h5>
					<div class="progress" data-height="20">
						<div data-percentage="90" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" data-bg="#FFC400"  class="progress-bar">
							<span class="progress-label">90%</span>
						</div> -->
					<!-- </div> --><!-- Progress Bar -->
				<!-- </div> -->
				<!-- <div class="col-md-6"> -->
					<!-- Progress Bar -->
					<!-- <h5 class="progress-tille">Javascript</h5>
					<div class="progress" data-height="20">
						<div data-percentage="75" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" data-bg="#1ABC9C"  class="progress-bar">
							<span class="progress-label">75%</span>
						</div> -->
					<!-- </div> --><!-- Progress Bar -->
				<!-- </div>				
				<div class="col-md-6"> -->
					<!-- Progress Bar -->
					<!-- <h5 class="progress-tille">Python</h5>
					<div class="progress" data-height="20">
						<div data-percentage="45" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" data-bg="#FF0000"  class="progress-bar">
							<span class="progress-label">45%</span>
						</div>
					</div> --><!-- Progress Bar -->
				<!-- </div> --><!-- Column -->
			</div><!-- Row -->
			<div class="row pad-top-5">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Experience</h3>
						</div>
						<div class="panel-body">
							<p>{{$staff->experience}}</p>
						</div>
					</div>
			    </div>
			</div>
		</div><!-- Container -->
	</section><!-- Section -->
	<!-- </div> --><!-- Page Default -->
</div><!-- Page Main -->

@endsection