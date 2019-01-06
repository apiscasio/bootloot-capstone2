
import { displayCardItems, listCardItems } from "./function_templates.js";

$(document).ready(function() {

	const listItems = $(".cat-item");
	const brandItems = $(".brand-item");
	
	$("#showAll").click(function(){
		$.ajax({
				"url": "../controllers/show_products.php",
				"type": "POST",
				"data": {},
				"success": filterByCatId
			});
	});

	listItems.each(function() {
		$(this).click(function() {

			let obj = {
				"catId": $(this).attr("id")
			};

			$.ajax({
				"url": "../controllers/show_by_category.php",
				"type": "POST",
				"data": obj,
				"success": filterByCatId
			});
		});
	});

	function filterByCatId(jsondata) {

		if(jsondata !== "") {

			const filteredItems = JSON.parse(jsondata);
			listCardItems.template = ``;

			filteredItems.forEach(displayCardItems);

			let cardColumns = `
				<div class="card-columns">
					${listCardItems.template}
				</div>
			`;

		$("#products-container").html(cardColumns);
		} else {
			$("#products-container").html("No items in this category");
			
		}

	}

	brandItems.each(function() {
		$(this).click(function() {

			let obj = {
				"brandId": $(this).attr("id")
			};

			$.ajax({
				"url": "../controllers/show_by_brand.php",
				"type": "POST",
				"data": obj,
				"success": filterByBrandId
			});
		});
	});

	function filterByBrandId(jsondata) {

		if(jsondata !== "") {

			const filteredItems = JSON.parse(jsondata);
			listCardItems.template = ``;

			filteredItems.forEach(displayCardItems);

			let cardColumns = `
				<div class="card-columns">
					${listCardItems.template}
				</div>
			`;

		$("#products-container").html(cardColumns);
		} else {
			$("#products-container").html("No items in this category");
			
		}

	}


});

