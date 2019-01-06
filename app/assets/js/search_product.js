
import { displayCardItems, listCardItems } from "../js/function_templates.js";

$(document).ready(function() {

	const searchForm = $("#search-form");

	console.log(searchForm);

	searchForm.keypress( function(e) {
		// 13 is keycode for enter key
		if(e.which == 13) {
			$.ajax({
				"url": "../../controllers/search_product.php",
				"type": "GET",
				"data": {
					"search": searchForm.val()
				},
				"success": getResults
			});
		}
	});

	function getResults(jsondata) {
		console.log(jsondata);
		if(jsondata !== "") {
			const result = JSON.parse(jsondata);

			let cardColumns = ``;
			
			listCardItems.template = ``;

			result.forEach(displayCardItems);

			cardColumns = `
				<div class="card-columns">
					${listCardItems.template}
				</div>	
			`;

				$("#products-container").html(cardColumns);
		} else {
			$("#products-container").html(`
				<h1> No Product Found. </h1>
			`);
		}
	}
	
});