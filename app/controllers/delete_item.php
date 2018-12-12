<?php

	require_once("connect.php");

	if(isset($_POST['delete'])) {

		$id = $_GET['id'];
	 		
		$sql = "DELETE FROM items WHERE id= '$id'";

		mysqli_query($conn, $sql) or die(mysqli_error($conn));

		echo "Item Deleted Successfully!";

		// <!-- Modal -->

		// echo "<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		//   <div class="modal-dialog" role="document">
		//     <div class="modal-content">
		//       <div class="modal-header">
		//         <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		//         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		//           <span aria-hidden="true">&times;</span>
		//         </button>
		//       </div>
		//       <div class="modal-body">
		//         ...
		//       </div>
		//       <div class="modal-footer">
		//         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		//         <button type="button" class="btn btn-primary">Save changes</button>
		//       </div>
		//     </div>
		//   </div>
		// </div>";


	} else {
		echo "You don't have permission to access this page.";
	}

	header("Location: ../views/items.php");
?>