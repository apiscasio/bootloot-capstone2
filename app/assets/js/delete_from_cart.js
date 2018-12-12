$(document).ready(function() {
	$(document).on("click", ".item-remove", function(e) {
		e.stopPropagation();

		let item_id = $(e.target).data('id');
		
		$.ajax({
			"url": "../controllers/update_cart.php",
			"type": "POST",
			"data": {
				"item_id": item_id,
				'item_quantity': 0,
				'ifFromCatalogPage':0
			},
			"success": function(dataFromController){

				$(e.target).parents("tr").remove();
				//removes the parent of the target element, so.. the entire row would be deleted.
			
				$("#cart-count").text(dataFromController);
				//get all the .item_subtotal's values and add them all up.

				let total = 0;
				$(".item_subtotal").each(function(e) {
					total += parseFloat($(this).text());
				});

				$("#total_price").text(total);
			}
		});
		
	});
});