<h1 > Register a Department </h1>

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

		<form  class="form-horizontal" action="<?php echo $GLOBALS['ep_dynamic_url']; ?>ViewDepartments" method="post"  >

		    <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="departmentName">Department Name</label><br>
			  <input  id="departmentName" name="departmentName" type="text" class="validate" value="<?php if(isset($_POST['departmentName'])) { echo $post['departmentName']; } ?>">
		    </div>
		    </div>

		     <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="status">Status</label><br>
			  <input  id="status" name="status" type="text" class="validate" value="<?php if(isset($_POST['status'])) { echo $post['status']; } ?>">
		    </div>
		    </div>