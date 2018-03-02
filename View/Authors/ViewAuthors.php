<h1 > Register an Author </h1>

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

		<form  class="form-horizontal" action="<?php echo $GLOBALS['ep_dynamic_url']; ?>ViewAuthors" method="post"  >

		    <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="Name">Name</label><br>
			  <input  id="Name" name="Name" type="text" class="validate" value="<?php if(isset($_POST['name'])) { echo $post['name']; } ?>">
		    </div>
		    </div>

		     <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="status">Status</label><br>
			  <input  id="status" name="status" type="text" class="validate" value="<?php if(isset($_POST['status'])) { echo $post['status']; } ?>">
		    </div>
		    </div>