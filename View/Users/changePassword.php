<h1 > Change Password </h1>

<?php 
if(!empty($errors)) {
	foreach($errors as $message) {
		echo "<span class='error'>".$message[0]."</span><br/>"; 
	}
}
if($result) {
	echo "<span class='success'> Succesfully Updated! </span> <a href='".$GLOBALS['ep_dynamic_url']."dashboard'> Go Back </a>";
}
?>

		<form action="<?php echo $GLOBALS['ep_dynamic_url']; ?>login/passwordreset/secret/<?php echo $tempid; ?>" method="post" class="col s12">
		  
            <div class="form-group" > 
			<div class="col-xs-3">
			  <label for="username">Password</label>
			  <input  id="username" name="password" type="password" class="validate" value="">
			</div></div><br>

            <div class="form-group" > 
			<div class="col-xs-3">
			  <label for="username">Password Again</label>
			  <input  id="username" name="passwordverify" type="password" class="validate" value="">
			</div></div><br>

            <div class="form-group" > 
			<div class="col-xs-3">
				<button class="btn btn-success" type="submit" style="margin-top: 20px;">Submit</button>
			</div></div><br>

		</form>
<a href='<?php echo $GLOBALS['ep_dynamic_url']; ?> 	'> Go Back </a>