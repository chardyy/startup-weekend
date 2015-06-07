$(document).ready(function(){
	get_promos($('#promos-container').attr('data-get-url'));


	$('#sidebar-search').keyup(function(){
		if($(this).val() != '')
		{
			search_by_name($('#promos-container').attr('data-get-url'), $(this).val());
		} else {
			get_promos($('#promos-container').attr('data-get-url'));
		}
	});
})

function get_promos(s_url) {
	$.ajax({
		url: s_url,
		dataType: 'json',
		method: 'GET',
		async:false,
		 success: function(o_response, s_status, o_xhr) {
		 	promo_data = o_response.data;
		 },


	});

	var obj_clone = [];
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
			obj_clone.push(clone);
			$('#promos-container').append(clone);
		}
	}

}

function search_by_name(s_url, s_name )
{
	$('#promos-container').empty();
	get_promos(s_url+'?name=' + s_name);
}