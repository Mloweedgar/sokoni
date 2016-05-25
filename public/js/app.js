$(document).ready(function() {
		//$.material.init()
		// Instantiate a slider
		//$("#ex2").slider({});
		var slider = new Slider('#ex2', {});


		$('.layer').mouseenter(function() {

			var id = $(this).attr('id');

			var layer_id = '#' + id;

			$('.outer-layer').animate({height: "350px"});


			if(layer_id == '#layer1') {

				$('#col1-layer1').animate({left: "0%", width: "40%", "font-size": "12px", "padding-top": "10px"});
				setTimeout(function() {
					$('#col2-layer1').css("display", "block");
				}, 600);
				$(layer_id).animate({width: "31%"});
				$('#layer2').animate({left: "31%", width: "22.2%"});
				$('#layer3').animate({left: "53.2%", width: "22.2%"});
				$('#layer4').animate({left: "75.4%", width: "22.2%"});

			} else if(layer_id == '#layer2') {

				$('#col1-layer2').animate({left: "0%", width: "40%", "font-size": "12px", "padding-top": "10px"});
				setTimeout(function() {
					$('#col2-layer2').css("display", "block");
				}, 600);
				$('#layer1').animate({width: "22.2%"});
				$(layer_id).animate({left: "22.2%", width: "31%"});
				$('#layer3').animate({left: "53.2%", width: "22.2%"});
				$('#layer4').animate({left: "75.4%", width: "22.2%"});

			} else if(layer_id == '#layer3') {

				$('#col1-layer3').animate({left: "0%", width: "40%", "font-size": "12px", "padding-top": "10px"});
				setTimeout(function() {
					$('#col2-layer3').css("display", "block");
				}, 600);
				$('#layer1').animate({width: "22.2%"});
				$('#layer2').animate({left: "22.2%", width: "22.2%"});
				$(layer_id).animate({left: "44.4%", width: "31%"});
				$('#layer4').animate({left: "75.4%", width: "22.2%"});

			} else if(layer_id == '#layer4') {

				$('#col1-layer4').animate({left: "0%", width: "40%", "font-size": "12px", "padding-top": "10px"});
				setTimeout(function() {
					$('#col2-layer4').css("display", "block");
				}, 600);
				$('#layer1').animate({width: "22.2%"});
				$('#layer2').animate({left: "22.2%", width: "22.2%"});
				$('#layer3').animate({left: "44.4%", width: "22.2%"});
				$(layer_id).animate({left: "66.6%", width: "31%"});

			}

		});


		$('.layer').mouseleave(function() {

				$('.col1').animate({left: "0%", width: "100%", "font-size": "15px", "padding-top": "50px"});
				$('.col2').css("display", "none");
				$('.outer-layer').animate({height: "300px"});
				$('#layer1').animate({width: "24.4%"});
				$('#layer2').animate({left: "24.4%", width: "24.4%"});
				$('#layer3').animate({left: "48.8%", width: "24.4%"});
				$('#layer4').animate({left: "73.2%", width: "24.4%"});

		});
	});
