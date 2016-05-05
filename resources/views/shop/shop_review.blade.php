@extends('layouts.app')
@section('content')
	<div class="container" style="margin-top: 20px;">
		@include('shop.shop_header')

		<div class="row">
			<div class="col-sm-12">
				<h3 class="page-header app-page-header text-center"><strong>Reviews</strong></h3>
			</div>
		</div>

		<div class="row" style="margin-bottom: 20px;">
			@foreach($shop_review as $review)
			<div class="col-sm-3" style="margin-top: 15px;">
				<div class="row">
					<div class="col-sm-12">
						<div class="app-review-body">
							<p class="text-justify">{{$review->review}}</p>
							<small>-&nbsp;{{$review->written_on}}</small>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-sm-3" style="">
						<div class="app-thumbnail">
							<img src="{{$review->user->avatar}}" width="50" height="50" class="img-circle">
						</div>
					</div>
					<div class="col-sm-9" style="">
						<div style="padding-top: 20px;"><strong>{{$review->user->name}}</strong></div>
					</div>
				</div>
			</div>
			@endforeach
		</div>

		<div class="row" style="margin-bottom: 20px;">
			<div class="col-sm-12">
				<div class="text-center">{!!$shop_review->render()!!}</div>
			</div>
		</div>
	</div>
@endsection