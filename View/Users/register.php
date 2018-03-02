<h1 > Register </h1>

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

		<form  class="form-horizontal" action="<?php echo $GLOBALS['ep_dynamic_url']; ?>register" method="post"  >

		    <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="firstname">Firstname</label><br>
			  <input  id="firstname" name="firstname" type="text" class="validate" value="<?php if(isset($_POST['firstname'])) { echo $post['firstname']; } ?>">
		    </div>
		    </div>

		     <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="lastname">Lastname</label><br>
			  <input  id="lastname" name="lastname" type="text" class="validate" value="<?php if(isset($_POST['lastname'])) { echo $post['lastname']; } ?>">
		    </div>
		    </div>


            <div class="form-group" > 
			<div class="col-xs-6">
				<label for="password">Password</label> <br>
			    <input  id="password" name="password" type="password" class="validate" value="">
			</div>
            </div>

            <div class="form-group" > 
			<div class="col-xs-6">
				<label for="password">Re-enter Password </label><br>
			    <input  id="password" name="passwordverify" type="password" class="validate" value="">
			</div>
		    </div>


            <div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="email">Email</label><br>
			  <input id="email" name="email" type="text" class="validate" value="<?php if(isset($_POST['email'])) { echo $post['email']; } ?>">
			</div></div>

			 <div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="departmentid">Department ID</label><br>
			  <input id="departmentid" name="departmentid" type="number" class="validate" value="<?php if(isset($_POST['departmentid'])) { echo $post['departmentid']; } ?>">
			</div></div>

			<div class="form-group" > 
			<div class="col-xs-6">
			  <label for="role">Role</label><br>
			  <input id="role" name="role" type="text" class="validate" value="<?php if(isset($_POST['role'])) { echo $post['role']; } ?>">
			</div>
            </div>
            

			<div class="form-group" > 
			<div class="col-xs-6">
				<button class="btn btn-info" type="submit" >Register</button>
			</div></div>
 
		</form>
</div>
<a href='<?php echo $GLOBALS['ep_dynamic_url']; ?>'> Go Back </a>
