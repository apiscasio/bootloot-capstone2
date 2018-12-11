$(document).ready( function() {

	$(".delete-item").on("click", function(){

		$.ajax({

			"url": "../controllers/delete_item.php",
			"type":"POST",
			"data": {},
			"success": function () {
				$(".delete-item").text("Item has been deleted!");
			}
		});
});