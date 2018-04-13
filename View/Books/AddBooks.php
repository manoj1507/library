
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

		<form  class="form-horizontal" action="<?php echo $GLOBALS['ep_dynamic_url']; ?>register" method="post"  >

		    <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="isbn">ISBN:</label><br>
			  <input  id="isbn" name="isbn" type="number" class="validate" value="<?php if(isset($_POST['isbn'])) { echo $post['isbn']; } ?>">
		    </div>
		    </div>

		     <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="tname">Name:</label><br>
			  <input  id="name" name="name" type="text" class="validate" value="<?php if(isset($_POST['name'])) { echo $post['name']; } ?>">
		    </div>
		    </div>


            <div class="form-group" > 
			<div class="col-xs-6">
				<label for="edition">Edition:</label> <br>
			    <input  id="edition" name="edition" type="edition" class="validate" value="<?php if(isset($_POST['edition'])) { echo $post['edition']; } ?>">
			</div>
            </div>


            <div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="is_downloadable">Is_Downloabable(1 for true/0 for false)</label><br>
		  	  <select>
		  	  	<option>0</option>
		  	  	<option>1</option>
		  	  </select>
			</div></div>

			
			<div class="form-group" > 
			<div class="col-xs-6">
				<button class="btn btn-info" type="submit" >Register</button>
			</div></div>
 
		</form>
</div>
<a href='<?php echo $GLOBALS['ep_dynamic_url']; ?>'> Go Back </a>
