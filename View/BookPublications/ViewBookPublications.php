<h1 > Register a Book Publication </h1>

<?php 
if(!empty($errors)) {
	foreach($errors as $message) {
		echo "<span class='error'>".$message[0]."</span><br/>"; 
	}
}
if (!empty($result)) {
	if($result == 1) {
		echo "<span class='success'> Successfully Register! </span> <a href='".$GLOBALS['ep_dynamic_url']."dashboard'> Go Back </a>";
	}
}

?>

		<form  class="form-horizontal" action="<?php echo $GLOBALS['ep_dynamic_url']; ?>ViewBookPublications" method="post"  >

		    <div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="bookid">Book ID</label><br>
			  <input id="bookid" name="bookid" type="number" class="validate" value="<?php if(isset($_POST['bookid'])) { echo $post['bookid']; } ?>">
			</div></div>

		      <div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="authorid">Publication ID</label><br>
			  <input id="publicationid" name="publicationid" type="number" class="validate" value="<?php if(isset($_POST['publicationid'])) { echo $post['publicationid']; } ?>">
			</div></div>

			<div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="price">Price</label><br>
			  <input id="price" name="price" type="number" class="validate" value="<?php if(isset($_POST['price'])) { echo $post['price']; } ?>">
			</div></div>

			<div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="releaseDate">Release Date</label><br>
			  <input id="releaseDate" name="releaseDate type="Date" class="validate" value="<?php if(isset($_POST['releaseDate'])) { echo $post['releaseDate']; } ?>">
			</div></div>

			<div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="stock">Stock</label><br>
			  <input id="stock" name="stock" type="number" class="validate" value="<?php if(isset($_POST['stock'])) { echo $post['stock']; } ?>">
			</div></div>

