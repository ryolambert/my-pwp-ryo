$('.carousel.carousel-multi .carousel-item').each(function () {
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));

	if (next.next().length > 0) {
		next.next().children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));
	}
	else {
		$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
	}
});