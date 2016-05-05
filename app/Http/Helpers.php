<?php

 function rating($rating) {

 	if($rating >= 4.8 && $rating <= 5.0) {

	echo '<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
			<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
			<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
			<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
			<i class="fa fa-star" aria-hidden="true"></i>';

	} elseif($rating >= 4.3 && $rating <= 4.7) {

	echo '<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-half-o" aria-hidden="true"></i>';

	} elseif($rating >= 3.8 && $rating <= 4.2) {

	echo '<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>';

	} elseif($rating >= 3.3 && $rating <= 3.7) {

	echo '<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-half-o" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>';

	} elseif($rating >= 2.8 && $rating <= 3.2) {

	echo '<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>';

	} elseif($rating >= 2.3 && $rating <= 2.7) {

	echo '<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-half-o" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>';

	} elseif($rating >= 1.8 && $rating <= 2.2) {
	
	echo '<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>';

	} elseif($rating >= 1.3 && $rating <= 1.7) {
	
	echo '<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-half-o" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>';

	} elseif($rating >= 0.8 && $rating <= 1.2) {

	echo '<i class="fa fa-star" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
		<i class="fa fa-star-o" aria-hidden="true"></i>';

	} elseif($rating >= 0.5 && $rating <= 0.7) {

		echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>&nbsp;
			<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
			<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
			<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;
			<i class="fa fa-star-o" aria-hidden="true"></i>';

	}

 }