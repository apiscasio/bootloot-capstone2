$(document).ready(function() {

	$.ajax({
		"url": "../controllers/show_products.php",
		"type": "POST",
		"data": {},
		"success": showProducts
	});


	function showProducts(jsondata) {
		if(jsondata !== "") {
			const products = JSON.parse(jsondata);

			/*
				[
					{id: 1, name: "Category 1"},
					{id: 2, name: "Category 2"}
				]
			*/

			let listItems = ``;

			products.forEach(function(product) {
				listItems += `
					<li class="list-group-item" id="${product.id}"> ${product.name} | ${product.price} | ${product.description} | ${product.category_id} | <img src="../assets/images/${product.image}">  </li>
				`;
			});

			$("#products-container").html(listItems);
		}
	}

});