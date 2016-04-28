@extends('layouts.app')
@section('content')
	<div class="container" style="margin-top: 20px;">
		@include('shop.shop_header')
		<div class="row">
			<div class="col-sm-12">
				<div class="app-space"></div>
			</div>
		</div>
		<div class="row" style="margin-top: 40px;">
			@include('shop.shop_sidebar')
			@include('shop.shop_content')
		</div>
	</div>
@endsection