$(document).ready(function() {
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
				$('#layer2').animate({left: "31%", width: "23%"});
				$('#layer3').animate({left: "54%", width: "23%"});
				$('#layer4').animate({left: "77%", width: "23%"});

			} else if(layer_id == '#layer2') {

				$('#col1-layer2').animate({left: "0%", width: "40%", "font-size": "12px", "padding-top": "10px"});
				setTimeout(function() {
					$('#col2-layer2').css("display", "block");
				}, 600);
				$('#layer1').animate({width: "23%"});
				$(layer_id).animate({left: "23%", width: "31%"});
				$('#layer3').animate({left: "54%", width: "23%"});
				$('#layer4').animate({left: "77%", width: "23%"});

			} else if(layer_id == '#layer3') {

				$('#col1-layer3').animate({left: "0%", width: "40%", "font-size": "12px", "padding-top": "10px"});
				setTimeout(function() {
					$('#col2-layer3').css("display", "block");
				}, 600);
				$('#layer1').animate({width: "23%"});
				$('#layer2').animate({left: "23%", width: "23%"});
				$(layer_id).animate({left: "46%", width: "31%"});
				$('#layer4').animate({left: "77%", width: "23%"});

			} else if(layer_id == '#layer4') {

				$('#col1-layer4').animate({left: "0%", width: "40%", "font-size": "12px", "padding-top": "10px"});
				setTimeout(function() {
					$('#col2-layer4').css("display", "block");
				}, 600);
				$('#layer1').animate({width: "23%"});
				$('#layer2').animate({left: "23%", width: "23%"});
				$('#layer3').animate({left: "46%", width: "23%"});
				$(layer_id).animate({left: "69%", width: "31%"});

			}
			
		});


		$('.layer').mouseleave(function() {

				$('.col1').animate({left: "0%", width: "100%", "font-size": "15px", "padding-top": "50px"});
				$('.col2').css("display", "none");
				$('.outer-layer').animate({height: "300px"});
				$('#layer1').animate({width: "25%"});
				$('#layer2').animate({left: "25%", width: "25%"});
				$('#layer3').animate({left: "50%", width: "25%"});
				$('#layer4').animate({left: "75%", width: "25%"});

		});
	});