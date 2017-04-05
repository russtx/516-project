(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
                $('#myModal').on('shown.bs.modal', function () {
                    $('#myInput').focus()
                  })
                  
                  $('#myTabs a[href="#profile"]').tab('show') // Select tab by name
                    $('#myTabs a:first').tab('show') // Select first tab
                    $('#myTabs a:last').tab('show') // Select last tab
                    $('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
		
	});
	
})(jQuery, this);
