
const listCardItems = {
	template: ``
};


function displayCardItems (item) {
	listCardItems.template += `
		<div class="card">
			<img class="card-img-top item-img-main" src="../assets/images/items/${item.image}" alt="card image cap">
                <div class="card-body">
				
					<h5 class="card-title"> <a href="product.php?id=${item.id}"> ${item.name} </a></h5>
                    <p class="card-text"> &#8369; ${item.price} </p>
                    <input type="number" class="form-control" value=1>
                    <button data-id="${item.id}" class="add-cart btn btn-sm btn-blue-grey"> Add to Cart </button>

                </div>
        </div>
	`;

}

export { displayCardItems, listCardItems};
