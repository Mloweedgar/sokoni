@include('includes.layouts.head')
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12" style="padding:0;margin-top: 100px;">
				<div class="outer-layer">
					<div class="layer1">
						<div class="inner-box"></div>
						<div class="top-box1">
							<div class="top-box-header-left">Shop</div>
							<div class="top-box-body"></div>
						</div>
					</div>
					<div class="layer2">
						<div class="inner-box"></div>
						<div class="top-box2">
							<div class="top-box-header-center">Shop</div>
							<div class="top-box-body"></div>
						</div>
					</div>
					<div class="layer3">
						<div class="inner-box"></div>
						<div class="top-box3">
							<div class="top-box-header-center">Shop</div>
							<div class="top-box-body"></div>
						</div>
					</div>
					<div class="layer4">
						<div class="inner-box"></div>
						<div class="top-box4">
							<div class="top-box-header-right">Shop</div>
							<div class="top-box-body"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
@include('includes.layouts.jslinks')
<script type="text/javascript">
	$(document).ready(function() {
		$('.top-box1').mouseenter(function() {
			//$('.top-box2').off('mouseenter');
			$('.top-box1').css({"border-right-style": "solid", "border-color": "#DDDDDD", "border-width" : "1px"});
			$('.top-box1').animate({width: "40%"});
			$('.layer1').animate({width: "31%"});
			$('.layer2').animate({left: "31%", width: "23%"});
			$('.layer3').animate({left: "54%", width: "23%"});
			$('.layer4').animate({left: "77%", width: "23%"});

		});

		$('.top-box2').mouseenter(function() {
			$('.top-box2').css({"border-right-style": "solid", "border-color": "#DDDDDD", "border-width" : "1px"});
			$('.top-box2').animate({width: "40%"});
			$('.layer1').animate({width: "23%"});
			$('.layer2').animate({left: "23%", width: "31%"});
			$('.layer3').animate({left: "54%", width: "23%"});
			$('.layer4').animate({left: "77%", width: "23%"});

		});

		$('.top-box3').mouseenter(function() {
			$('.top-box3').css({"border-left-style": "solid", "border-color": "#DDDDDD", "border-width" : "1px"});
			$('.top-box3').animate({left: "60%", width: "40%"});
			$('.layer1').animate({width: "23%"});
			$('.layer2').animate({left: "23%", width: "23%"});
			$('.layer3').animate({left: "46%", width: "31%"});
			$('.layer4').animate({left: "77%", width: "23%"});

		});

		$('.top-box4').mouseenter(function() {
			$('.top-box4').css({"border-left-style": "solid", "border-color": "#DDDDDD", "border-width" : "1px"});
			$('.top-box4').animate({left: "60%", width: "40%"});
			$('.layer1').animate({width: "23%"});
			$('.layer2').animate({left: "23%", width: "23%"});
			$('.layer3').animate({left: "46%", width: "23%"});
			$('.layer4').animate({left: "69%", width: "31%"});


		});

		$('.inner-box').mouseleave(function() {

				$('.top-box1').animate({width: "100%"});
				$('.top-box2').animate({width: "100%"});
				$('.top-box3').animate({left: "0%", width: "100%"});
				$('.top-box4').animate({left: "0%", width: "100%"});
				$('.layer1').animate({width: "25%"});
				$('.layer2').animate({left: "25%", width: "25%"});
				$('.layer3').animate({left: "50%", width: "25%"});
				$('.layer4').animate({left: "75%", width: "25%"});
				$('.top-box1').css("border-right-style", "none");
				$('.top-box2').css("border-right-style", "none");
				$('.top-box3').css("border-left-style", "none");
				$('.top-box4').css("border-left-style", "none");

		});
	});
</script>
</html>