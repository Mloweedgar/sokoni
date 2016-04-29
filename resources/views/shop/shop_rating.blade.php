@if($shop->rating >= 4.8 && $shop->rating <= 5.0)

	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>

@elseif($shop->rating >= 4.3 && $shop->rating <= 4.7)

	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-half-o" aria-hidden="true"></i>

@elseif($shop->rating >= 3.8 && $shop->rating <= 4.2)

	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>

@elseif($shop->rating >= 3.3 && $shop->rating <= 3.7)

	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-half-o" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>

@elseif($shop->rating >= 2.8 && $shop->rating <= 3.2)

	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>

@elseif($shop->rating >= 2.3 && $shop->rating <= 2.7)

	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-half-o" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>

@elseif($shop->rating >= 1.8 && $shop->rating <= 2.2)
	
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>

@elseif($shop->rating >= 1.3 && $shop->rating <= 1.7)
	
	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-half-o" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>

@elseif($shop->rating >= 1 && $shop->rating <= 1.2)

	<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
	<i class="fa fa-star-o" aria-hidden="true"></i>

@endif



