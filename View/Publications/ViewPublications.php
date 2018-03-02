<h1 > Register a Publication Enterprise </h1>

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
			  <label for="addressLine1">Address Line 1:</label><br>
			  <input  id="addressLine1" name="addressLine1" type="text" class="validate" value="<?php if(isset($_POST['addressLine1'])) { echo $post['addressLine1']; } ?>">
		    </div>
		    </div>

		    <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="addressLine2">Address Line 2:</label><br>
			  <input  id="addressLine2" name="addressLine2" type="text" class="validate" value="<?php if(isset($_POST['addressLine2'])) { echo $post['addressLine2']; } ?>">
		    </div>
		    </div>

            <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="city">City</label><br>
			  <input  id="city" name="city" type="text" class="validate" value="<?php if(isset($_POST['city'])) { echo $post['city']; } ?>">
		    </div>
		    </div>

		    <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="state">State</label><br>
			  <input  id="state" name="state" type="text" class="validate" value="<?php if(isset($_POST['state'])) { echo $post['state']; } ?>">
		    </div>
		    </div>

		    <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="country">Country</label><br>
			  <input  id="country" name="country" type="text" class="validate" value="<?php if(isset($_POST['country'])) { echo $post['country']; } ?>">
		    </div>
		    </div>

		    <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="pincode">Pincode:</label><br>
			  <input  id="pincode" name="pincode" type="text" class="validate" value="<?php if(isset($_POST['pincode'])) { echo $post['pincode']; } ?>">
		    </div>
		    </div>

		     <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="status">Status</label><br>
			  <input  id="status" name="status" type="text" class="validate" value="<?php if(isset($_POST['status'])) { echo $post['status']; } ?>">
		    </div>
		    </div>