$(document).ready(function() {

	$.ajax({
		"url": "../controllers/show_categories.php",
		"type": "POST",
		"data": {},
		"success": showCategories
	});


	function showCategories(jsondata) {
		if(jsondata !== "") {
			const categories = JSON.parse(jsondata);			

			let listItems = ``;

			categories.forEach(function(category) {
				listItems += `
					<li class="list-group-item" id="${category.id}"> ${category.name} </li>
				`;
			});

			$("#category-container").html(listItems);
		}
	}

});
