<h1 > Place Book in Shelf</h1>

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

		<form  class="form-horizontal" action="<?php echo $GLOBALS['ep_dynamic_url']; ?>ViewBookShelves" method="post"  >

		    <div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="bookid">Book ID</label><br>
			  <input id="bookid" name="bookid" type="number" class="validate" value="<?php if(isset($_POST['bookid'])) { echo $post['bookid']; } ?>">
			</div></div>

		      <div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="shelfid">Shelf ID</label><br>
			  <input id="shelfid" name="shelfid" type="number" class="validate" value="<?php if(isset($_POST['shelfid'])) { echo $post['shelfid']; } ?>">
			</div></div>