<h1 > Register a Book </h1>

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

		<form  class="form-horizontal" action="<?php echo $GLOBALS['ep_dynamic_url']; ?>ViewBookAuthors" method="post"  >

		    <div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="bookid">Book ID</label><br>
			  <input id="bookid" name="bookid" type="number" class="validate" value="<?php if(isset($_POST['bookid'])) { echo $post['bookid']; } ?>">
			</div></div>

		      <div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="authorid">Author ID</label><br>
			  <input id="authorid" name="authorid" type="number" class="validate" value="<?php if(isset($_POST['authorid'])) { echo $post['authorid']; } ?>">
			</div></div>