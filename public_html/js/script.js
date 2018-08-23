$('.carousel').carousel({
	interval: 2000
});

$(document).click(function (event) {
	var clickover = $(event.target);
	var $navbar = $(".navbar-collapse");
	var _opened = $navbar.hasClass("in");
	if (_opened === true && !clickover.hasClass("navbar-toggle")) {
		$navbar.remove('is-opened');
	}
});