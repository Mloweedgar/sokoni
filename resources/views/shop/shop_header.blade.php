<div class="row">
			<div class="col-sm-1 center-block">
				<div class="text-center shop-logo">
					<i class="fa fa-bicycle fa-5x" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-sm-11">
				<div class="row">
					<div class="col-sm-3">
						<h4><strong>{{$shop->shop_name}}</strong></h4>
					</div>
					<div class="col-sm-9">
						<ul class="nav nav-pills pull-right">
							<li>
								<a href="" title="chat">
									<i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;
								</a>
							</li>
							<li>
								<a href="" title="report">
									<i class="fa fa-bug" aria-hidden="true"></i>&nbsp;
								</a>
							</li>
							<li class="dropdown">
								<a href="" title="share" data-toggle="dropdown">
									<i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;
								</a>
								<ul class="dropdown-menu dropdown-share">
									<li>
										<a href="#">
											<i class="fa fa-facebook-square" aria-hidden="true" style="color: #286090;"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-google-plus-square" aria-hidden="true" style="color: #D34836;"></i>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div style="border: solid 1px #ddd;"></div>
					</div>
				</div>
				
				<div class="row" style="margin-top: 10px;">
					<div class="col-sm-3" style="">
						<div style="margin-bottom: 20px;">Dar es Salaam, Tanzania</div>
						
					</div>
					<div class="col-sm-9">
						<ul class="list-inline pull-right">
							<li>
								@include('shop.shop_rating')
							</li>
							<li>
								<span class="badge">22</span>
								reviews
							</li>
							<li>
								<span class="badge">22</span>
								<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
							</li>
							<li>
								<span class="badge">22</span>
								<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>