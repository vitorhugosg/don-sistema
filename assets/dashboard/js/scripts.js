$( document ).ready(function() {
	$(function() {
		$('.min-chart#chart-sales').easyPieChart({
			barColor: "#4caf50",
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
	});

	$(".button-collapse").sideNav();

	// Data Picker Initialization
	$('.datepicker').pickadate();


	// Material Select Initialization
	$(document).ready(function() {
		$('.mdb-select').material_select();
	});


	// Tooltips Initialization
	$(function() {
		$('[data-toggle="tooltip"]').tooltip()
	})
	// Sidenav Initialization
	

	// Tooltips Initialization
	$(function() {
		$('[data-toggle="tooltip"]').tooltip();
	});

	// TinyMCE Initialization
	tinymce.init({ selector:'#post_content', menubar: false, height : "270" });

});
$(".button-collapse").sideNav();
var el = document.querySelector('.custom-scrollbar');
Ps.initialize(el);
