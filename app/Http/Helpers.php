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

 function titleCentered($title) {

   echo '<div class="col-sm-12">
            <div class="row">
              <div class="col-sm-5">
                <div class="app-header-line-left"></div>
              </div>
              <div class="col-sm-2"><h5 class="text-center">'.$title. '</h5></div>
              <div class="col-sm-5">
                <div class="app-header-line-right"></div>
              </div>
            </div>
          </div>';
 }

 function carouselNav($itemId) {

   echo '<a class="carousel-control left app-carousel-control" href="#'.$itemId.'" data-slide="prev">
          &lsaquo;
          </a>
         <a class="carousel-control right app-carousel-control" href="#'.$itemId.'" data-slide="next">
         &rsaquo;
         </a>';
 }

function alert($alertType, $message) {

  echo '<div class="alert alert-'.$alertType. '">
          <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>';

  if($alertType == 'success') {
    echo '<strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;</strong>';

  } elseif($alertType == 'info') {
    echo '<strong><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;</strong>';

  } elseif ($alertType == 'warning') {
    echo '<strong><i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp;</strong>';
  }

  echo $message.'</div>';
}

/*function checkboxList($list_class, $data) {
  $i = 1;
  echo '<div class="panel-body'.$list_class.'">';

      foreach($data as $list) {
        echo '<div class="checkbox"><label><input type="checkbox" class="';
        $i ==1? 'cat-active': '' ;
        echo '" id="cat-'.$list->id.'" value="" ';
        $i ==1 ? 'checked': ''}}>;
        echo '&nbsp;'.$list->name.'</label></div>';

        $i++;
      }

  echo '</div>';
}*/
