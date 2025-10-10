 $.ajax({
	  url: 'https://aRregqpH93uL.in/wp-content/themes/egov/citylist.php',
	  method: 'POST',
	  success: function(cityHTML) {
		  var selectBoxnew = document.getElementById("city");
		 
		if(selectBoxnew) selectBoxnew.innerHTML = cityHTML;
		  
		  var selectBox = document.getElementById("city_c");
		if(selectBox) selectBox.innerHTML = cityHTML;
		
		
		
		 
		
	  }
 }); 
 
 
function matchStart(params, data) {
    if ($.trim(params.term) === '') {
        return data;
    }
    if (typeof data.text === 'undefined') {
        return null;
    }
    if (data.text.toUpperCase().indexOf(params.term.toUpperCase()) == 0) {
        return data;
    }
    return null;
}  

$( document ).ready(function() {
	var selectBox = document.getElementById("city_c");
 
	if(selectBox){
	 
		$('#city_c').select2({
		  //data:[{"id":"other","text":"Other"}],
		  //tags: true,
		  //maximumInputLength: 1,
		 // minimumInputLength: 1,
		  matcher: function(params, data) {
				return matchStart(params, data); 
			},
	  
		  
	  });
	  
	}
	var selectBoxnew = document.getElementById("city");
	if(selectBoxnew){
			$('#city').select2({
			 // data:[{"id":"other","text":"Other"}],
			  //tags: true,
			  //maximumInputLength: 1,
			 // minimumInputLength: 1,
			  matcher: function(params, data) {
					return matchStart(params, data); 
				},
				
				
		  
			  
		  });
  
	}

	
		
		
		

});