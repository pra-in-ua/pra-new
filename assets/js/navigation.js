$(function() {

	var selector = $('#mainNavWrapper');

	// Додавання та видалення класу непрозорості
	if(selector.length && selector.hasClass('js-transparent-default'))
	{
		if($(window).scrollTop() > 50)
		{
			// Встановлення класу при завантаженні сторінки
			selector.addClass('no-transparent');
		}

		$(window).on('scroll', function() {
			if($(window).scrollTop() > 50)
			{
				selector.addClass('no-transparent');
			}
			else
			{
				selector.removeClass('no-transparent');
			}
		});
	}
});
