$( document ).ready(function() {
	$(function() {
	  	console.log("hi");
			$(".dropdown").on("click", function() {
				$('.dropdown-content').toggle();
			});
	});
});

