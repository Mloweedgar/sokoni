<div class="col-sm-3">
	<ul class="nav nav-tabs shop-tabs">
		<?php $i = 1; ?>
		@foreach($category_list as $list)
		<li class="{{$i == 1 ? ' active': ''}}"><a href="#{{$i}}" data-toggle="tab">{{$list->category_name}}</a></li>
		<?php $i++;?>
		@endforeach
	</ul>
</div>
