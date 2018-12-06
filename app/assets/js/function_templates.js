
const listCardItems = {
	template: ``
};


function displayCardItems (item) {
	listCardItems.template += `
		<div class="card col-md-3">
			<figure>
				<img class="card-img-top" id="img-main" src="../images/items/${item.image}" alt="card img top">
			</figure>
		</div>
		<div class="card-body col-md-9 py-3 px-5">
			<div class="container px-1">
				<h3 class="card-title"> <a href="product.php?id=${item.id}">${item.name} </a> </h3>
				<p> ${item.description} </p>
				<p> &#8369; <?php echo number_format(${item.price}, 2) ?> </p>
				<button class="btn btn-outline-primary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
			</div>
		</div>
	`;

}

export { displayCardItems, listCardItems};
