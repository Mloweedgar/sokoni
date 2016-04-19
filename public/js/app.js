$.ajaxSetup({
   	headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});

$(document).ready(function() {

		$('#region').change(function() {
			var url = '/district/'+ $('#region').val();
			$.ajax({
				url: url,
				type: 'get',
				dataType: 'json',
				success: function(data) {
					//remove the previous search
					$('#district').empty().append('<option value="" selected="selected" disabled="disabled">--select--</option>');
					$.each(data, function(index, value) {
						$('#district').append('<option value="' + index + '">' + value + '</option>');
					});
				}
			});
			return false;
		});

		$('.modal').on('shown.bs.modal', function(e) {
			var id = $(this).attr('id');

			//javascript to monitor change in form select field
			//Get the id
			var editId = id.slice(8);
			
			$('#region-edit-'+ editId).change(function() {
				var url = '/district/'+ $('#region-edit-' + editId).val();
				var districtId = '#district-edit-'+ editId;
				$.ajax({
					url: url,
					type: 'get',
					dataType: 'json',
					success: function(data) {
						//remove the previous search
						$(districtId).empty().append('<option value="" selected="selected" disabled="disabled">--select--</option>');
						$.each(data, function(index, value) {
							$(districtId).append('<option value="' + index + '">' + value + '</option>');
						});
					}
				});
				return false;
			});

			//Script to monitor form submission for editing weighbridge details
			$('#edit-station-' + editId).submit(function(editevent) {
				$(this).unbind(editevent);
				editevent.preventDefault();
				var formData = {
					'_token': $('input[name=_token]').val(),
					'id': $('input[name=id]').val(),
					'name': $('input[name=station_name]').val(),
					'region': $('select[name=region_name]').val(),
					'district': $('select[name=district_name]').val(),
				};

				$.ajax({
					url: '/weighbridge/' + editId,
					type: 'put',
					dataType: 'json',
					data: formData,
					success: function(data) {
						if(data.success == false) {
							var error = data.errors;
							console.log(error);
							if(error['name']) {
								$('#nameErr-'+ editId).empty().append('<div class="alert alert-danger">'+error['name']+'</div>');
							} else {
								$('#nameErr-'+ editId).empty();
							}
							
							if(error['region']) {
								$('#regionErr-'+ editId).empty().append('<div class="alert alert-danger">'+error['region']+'</div>');
							} else {
								$('#regionErr-'+ editId).empty();
							}

							if(error['district']) {
								$('#districtErr-'+ editId).empty().append('<div class="alert alert-danger">'+error['district']+'</div>');
							} else {
								$('#districtErr-'+ editId).empty();
							}
							
						} else {
							$('#edit-station-'+ editId).trigger('reset');
							$('#station-'+editId).modal('hide');
							//$('#message').append('<div class="alert alert-info">'+ data.message+ '</div>').fadeOut(9000);
							alert(data.message);
						}
					}
				});

			});

			//javascript for charts
			var modal = $(this);
    		var canvas = modal.find('.modal-body canvas');

    		//get station id to collect data
    		dataId = id.charAt(7);

    		//get context
    		var ctx = canvas[0].getContext("2d");


			var data = {
		    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "November", "December"],
		    datasets: [
		        {
		            label: "Vehicle Weighed",
		            fillColor: "rgba(220,220,220,0.5)",
		            strokeColor: "rgba(220,220,220,0.8)",
		            highlightFill: "rgba(220,220,220,0.75)",
		            highlightStroke: "rgba(220,220,220,1)",
		            data: [65, 59, 80, 81, 56, 55, 40, 32, 45, 12, 45]
		        },
		        {
		            label: "Vehicle Overloaded",
		            fillColor: "rgba(151,187,205,0.5)",
		            strokeColor: "rgba(151,187,205,0.8)",
		            highlightFill: "rgba(151,187,205,0.75)",
		            highlightStroke: "rgba(151,187,205,1)",
		            data: [28, 48, 40, 19, 86, 27, 90, 35, 46, 21, 34]
		        }
		    ]
			};

			var options = {
		    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
		    scaleBeginAtZero : true,

		    //Boolean - Whether grid lines are shown across the chart
		    scaleShowGridLines : true,

		    //String - Colour of the grid lines
		    scaleGridLineColor : "rgba(0,0,0,.05)",

		    //Number - Width of the grid lines
		    scaleGridLineWidth : 1,

		    //Boolean - Whether to show horizontal lines (except X axis)
		    scaleShowHorizontalLines: true,

		    //Boolean - Whether to show vertical lines (except Y axis)
		    scaleShowVerticalLines: true,

		    //Boolean - If there is a stroke on each bar
		    barShowStroke : true,

		    //Number - Pixel width of the bar stroke
		    barStrokeWidth : 2,

		    //Number - Spacing between each of the X value sets
		    barValueSpacing : 5,

		    //Number - Spacing between data sets within X values
		    barDatasetSpacing : 1,

		    //String - A legend template
		    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

			};

			var stationBar = new Chart(ctx).Bar(data, options);
			
		});

		$('#create-company').submit(function(e) {
			e.preventDefault();
			var formData = {
				'_token': $('input[name=_token]').val(),
				'name': $('input[name=name]').val(),
				'box_number': $('input[name=box_number]').val(),
				'email': $('input[name=email]').val(),
				'region': $('select[name=region]').val(),
				'district': $('select[name=district]').val(),
				'phone_number': $('input[name=phone_number]').val()
			};
			$.ajax({
				url: '/company',
				type: 'post',
				dataType: 'json',
				data: formData,
				success: function(data) {
					if(data.success == false) {
						var error = data.errors;
						if(error['name']) {
							$('#nameErr').empty().append('<div class="alert alert-danger">'+error['name']+'</div>');
						} else {
							$('#nameErr').empty();
						}
						
						if(error['box_number']) {

							$('#boxErr').empty().append('<div class="alert alert-danger">'+error['box_number']+'</div>');
						} else {
							$('#boxErr').empty();
						}

						if(error['email']) {
							$('#emailErr').empty().append('<div class="alert alert-danger">'+error['email']+'</div>');
						} else {
							$('#emailErr').empty();
						}

						if(error['region']) {
							$('#regionErr').empty().append('<div class="alert alert-danger">'+error['region']+'</div>');
						} else {
							$('#regionErr').empty();
						}

						if(error['district']) {
							$('#districtErr').empty().append('<div class="alert alert-danger">'+error['district']+'</div>');
						} else {
							$('#districtErr').empty();
						}

						if(error['phone_number']) {
							$('#phoneErr').empty().append('<div class="alert alert-danger">'+error['phone_number']+'</div>');
						} else {
							$('#phoneErr').empty();
						}
						
					} else {
						$('#create-company').trigger('reset');
						$('#add-company').modal('hide');
						$('#message').append('<div class="alert alert-info">'+ data.message+ '</div>').fadeOut(9000);
					}
				}
			});
		});

		$('#create-station').submit(function(e) {
			e.preventDefault();
			var formData = {
				'_token': $('input[name=_token]').val(),
				'name': $('input[name=name]').val(),
				'region': $('select[name=region]').val(),
				'district': $('select[name=district]').val(),
			}
			$.ajax({
				url: '/weighbridge',
				type: 'post',
				dataType: 'json',
				data: formData,
				success: function(data) {
					if(data.success == false) {
						var error = data.errors;
						if(error['name']) {
							$('#nameErr').empty().append('<div class="alert alert-danger">'+error['name']+'</div>');
						} else {
							$('#nameErr').empty();
						}
						
						if(error['region']) {
							$('#regionErr').empty().append('<div class="alert alert-danger">'+error['region']+'</div>');
						} else {
							$('#regionErr').empty();
						}

						if(error['district']) {
							$('#districtErr').empty().append('<div class="alert alert-danger">'+error['district']+'</div>');
						} else {
							$('#districtErr').empty();
						}
						
					} else {
						$('#create-station').trigger('reset');
						$('#add-station').modal('hide');
						$('#message').append('<div class="alert alert-info">'+ data.message+ '</div>').fadeOut(9000);
					}
				}
			});
		});	

		$('#create-manager').submit(function(e) {
			e.preventDefault();
			var formData = {
				'_token': $('input[name=_token]').val(),
				'firstname': $('input[name=firstname]').val(),
				'lastname': $('input[name=lastname]').val(),
				'email': $('input[name=email]').val(),
				'phone_number': $('input[name=phone_number]').val(),
				'region': $('select[name=region]').val()	
			}

			$.ajax({
				url: '/manager',
				type: 'post',
				dataType: 'json',
				data: formData,
				success: function(data) {
					if(data.success == false) {
						var error = data.errors;
						if(error['firstname']) {
							$('#fnameErr').empty().append('<div class="alert alert-danger">'+error['firstname']+'</div>');
						} else {
							$('#fnameErr').empty();
						}
						
						if(error['lastname']) {

							$('#lnameErr').empty().append('<div class="alert alert-danger">'+error['lastname']+'</div>');
						} else {
							$('#lnameErr').empty();
						}

						if(error['email']) {
							$('#emailErr').empty().append('<div class="alert alert-danger">'+error['email']+'</div>');
						} else {
							$('#emailErr').empty();
						}

						if(error['phone_number']) {
							$('#phoneErr').empty().append('<div class="alert alert-danger">'+error['phone_number']+'</div>');
						} else {
							$('#phoneErr').empty();
						}

						if(error['region']) {
							$('#regionErr').empty().append('<div class="alert alert-danger">'+error['region']+'</div>');
						} else {
							$('#regionErr').empty();
						}
						
						
					} else {
						$('#create-manager').trigger('reset');
						$('#add-manager').modal('hide');
						$('#message').append('<div class="alert alert-info">'+ data.message+ '</div>').fadeOut(9000);
					}
				}
			});
		});

		$('dit-gvm').off('change').on('change', function(e) {
			e.preventDefault();

			if($(this).mouseout()) {
				var id = $(this).attr('id');

			var configId = id.slice(4);

			var messId = '#mess-gvm-' + configId;

				$(messId).empty().append('<i class="fa fa-spin fa-circle-o-notch text-success" aria-hidden="true"></i>');

				var gvmValue = {
					'id': configId,
					'gvm': $('input[name=gvm_' + configId + ']').val()
					};

				var url = '/configuration/' + configId;

				$.ajax({
					url: url,
					type: 'put',
					dataType: 'json',
					data: gvmValue,
					success: function(data) {
						if(data.success == true) {
							$(messId).empty().append('<div class="alert alert-success">' + data.message + '</div>');
						}
					}

				});
			}
			
	
		});

		$('.edit-gvm').off('click').on('click', function(e) {
			$('.edit-gvm').prop('disabled', true);
			var id = $(this).attr('id');
			$('input[type=number]').prop('disabled', false);
			var gvmId = id.slice(4);
			var viewMode = '#view-mode-' + gvmId;
			var editMode = '#edit-mode-' + gvmId;
			var messId = '#mess-gvm-' + gvmId;
			var closeId = 'close-' + gvmId;
			$(viewMode).removeClass('show-gvm').addClass('hide-gvm');
			$(editMode).removeClass('hide-gvm').addClass('show-gvm');

			$('.cancel-gvm').off('click').on('click', function() {
				$(viewMode).removeClass('hide-gvm').addClass('show-gvm');
				$(editMode).removeClass('show-gvm').addClass('hide-gvm');
				$('.edit-gvm').prop('disabled', false);
			});

			$('.save-gvm').off('click').on('click', function() {
				var gvmValue = {
					'id': gvmId,
					'gvm': $('input[name=gvm_' + gvmId + ']').val()
					};

				var url = '/configuration/' + gvmId;

				$.ajax({
					url: url,
					type: 'put',
					dataType: 'json',
					data: gvmValue,
					success: function(data) {
						if(data.success == true) {
							$(viewMode).removeClass('hide-gvm').addClass('show-gvm');
							$(editMode).removeClass('show-gvm').addClass('hide-gvm');
							$(messId).empty().append('<div class="alert alert-success app-config-alert"><i class="fa fa-check-circle"></i>&nbsp;' + data.message + '<button type="button" class="pull-right btn btn-sm gvm-close" id="'+closeId +'"><i class="fa fa-close"></i></button></div>');
							$('#gvm-wait').append('<i class="fa fa-spin fa-circle-o-notch"></i>');
							setTimeout(function() {
								$('#gvm-wait').empty();
								$('.edit-gvm').prop('disabled', false);
							}, 3000);
						}
					}
				});
			});
			
		});

		$('.gvm-close').off('click').on('click', function() {
			var id = $(this).attr('id');

			var gvmId = id.slice(6);

			var tagetId = '#close-' + gvmId;

			console.log(tagetId)

			$(tagetId).hide();

		});

			
});