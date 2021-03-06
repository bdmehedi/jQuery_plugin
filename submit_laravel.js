$.fn.formSubmit = function() {
	$(this).on('submit', function(){
		$('#show_error').html('');
		var that = $(this),
			url = that.attr('action'),
			type = that.attr('method'),
			data = {};

		that.find('[name]').each(function(index, value){
			var that = $(this),
				name = that.attr('name'),
				value = that.val();
				that.parent().removeClass('has-error');
			data[name] = value;
		});

		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response) {
				//console.log(response.name);
				var error_div = $('#show_error');
				error_div.fadeIn(2000);
				error_div.css({"padding": "10px", "position": "fixed", "right": "0", "bottom": "60px"});

				if (response.status === true) {
					that.find('[name]').each(function(index, value){
						var that = $(this);
						error_div.removeClass('alert-danger');
						error_div.addClass('alert-success');
						error_div.html(response.message);
						that.val('');
						error_div.fadeOut(7000);
					});

					return false;
				}

				if (response !== undefined) {
					error_div.removeClass('alert-success');
					error_div.addClass('alert-danger');
                    $.each(response, function(key, value){
                        if (value !== '') {
                            var show_error = that.find('[name='+ key +']');
                            show_error.parent().addClass('has-error');
                            show_error.val('');
                            value = '<p>'+ value +'</p>';
                            error_div.append(value);
                        }
                    });

					error_div.children().css({"padding": "5px", "margin": "0px"});
					error_div.fadeOut(7000);
				}
			},
			error: function (errors) {
			    //console.log(errors);
			},
		});

		return false;
	});
};
