(function ($) {
 "use strict";

	 $('#data_1 .input-group.date').datepicker({
 		startView: 2,
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		calendarWeeks: true,
		autoclose: true,
		format: "yyyy/mm/dd",
    defaultDate: ""
	});

	$('#data_2 .input-group.date').datepicker({
		startView: 1,
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true,
		format: "dd/mm/yyyy"
	});

	$('#data_3 .input-group.date').datepicker({
		startView: 2,
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true,
		format: "dd/mm/yyyy"
	});

	$('#data_4 .input-group.date').datepicker({
		minViewMode: 1,
		keyboardNavigation: false,
		forceParse: false,
		forceParse: false,
		autoclose: true,
		todayHighlight: true,
		format: "dd/mm/yyyy"
	});

	$('#data_5 .input-daterange').datepicker({
		startView: 3,
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true,
		todayBtn: "linked",
        todayHighlight: false,
		format: "dd-mm-yyyy"
	});

})(jQuery);
