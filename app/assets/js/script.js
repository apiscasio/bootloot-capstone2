$('#brandSelect').change(function() {
    if($(this).val() == 99999)
        $('#newBrand').show();
    else
        $('#newBrand').hide();
});

$('#sizeSelect').change(function() {

	for (var i = 6; i <= 13; i += 0.5) {
		if ($(this).val() >= 6 || $(this).val <= 13)
	        $('#qtyInput').show();
	    else
	        $('#qtyInput').hide();
	}
});


$("#addStock-alert").click(function () {
    toastr["info"]("I was launched via jQuery!")
});




