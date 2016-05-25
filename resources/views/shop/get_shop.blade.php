@extends('layouts.app')
@section('content')
	<div class="container" style="margin-top: 20px;">
		@include('shop.header')
		<hr>
		<div class="row" style="margin-top: 10px;">
			@include('shop.shop_sidebar')
			@include('shop.shop_content')
		</div>
	</div>
@endsection
