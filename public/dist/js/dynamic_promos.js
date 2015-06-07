$(document).ready(function(){

	$.ajax({
		url:$('#promos-container').attr('data-get-url'),
		dataType: 'json',
		method: 'GET',
		async:false,
		 success: function(o_response, s_status, o_xhr) {
		 	promo_data = o_response.data;
		 },


	});


	if(typeof promo_data != 'undefined')
	{
		for (var i in promo_data)
		{
			clone = $('#promo-content').clone();
			clone.find('[data-content]').each(function(){
				attribute = $(this).attr('data-content');
				element = promo_data[i][attribute];
				if(typeof  element != 'undefined')
				{
					if(attribute == 'image')
					{
						$(this).find('img').attr('src', element);
					}
					else
					{
						$(this).text(element);
					}
				}
			});
			clone.removeClass('hide');
			$('#promos-container').append(clone);
		}
	}
})