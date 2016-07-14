
  $(function() {
    $( ".column" ).sortable({
      connectWith: ".column",
      handle: ".portlet-header",
      cancel: ".portlet-toggle",
      placeholder: "portlet-placeholder ui-corner-all",
      update: function(event, ui) {
      		// GET THE DIV IDs SORTED
	        var newOrder1 = $('#col1').sortable('toArray').toString();
	        var newOrder2 = $('#col2').sortable('toArray').toString();
	        var newOrder3 = $('#col3').sortable('toArray').toString();
	        var newOrder4 = $('#col4').sortable('toArray').toString();
	        var newOrder5 = $('#col5').sortable('toArray').toString();

	        // ADD THEM TO A DATA OBJECT TO BE SENT
	        var data = { 
	        	'1': newOrder1 , 
	        	'2': newOrder2 , 
	        	'3': newOrder3 , 
	        	'4': newOrder4 , 
	        	'5': newOrder5 , 
	        };

	        console.log(data);
	        // SEND THEM TO A FILE USING AJAX
	        $.ajax({
				type: "POST",
				// url: "?r=leads/sort",
				url: "sort", // this is the controller. Works this way dont know how or why
				data: data,
				// success: success,
				// dataType: dataType
			}).done(function(resp) {
				console.log(resp);
			});
	        	
	    }
    });

 //    $("#sortable").sortable({
	//     items: ".portlet",
	//     handle: ".portlet-header",
	//     placeholder: "portlet-placeholder ui-corner-all",
	//     connectWith: ".column",
	//     update: function(event, ui) {
	//         var newOrder = $(this).sortable('toArray').toString();
	//         console.log(newOrder);
	//     }
	// }).disableSelection();

 
    $( ".portlet" )
      .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
      .find( ".portlet-header" )
        .addClass( "ui-widget-header ui-corner-all" )
        .prepend( "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");
 
    $( ".portlet-toggle" ).click(function() {
      var icon = $( this );
      icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
      icon.closest( ".portlet" ).find( ".portlet-content" ).toggle();
    });

	// $("#col1").children().each(function(n, i) {
	//   var id = this.id;
	//   console.log(id);
	// });


  });



	

