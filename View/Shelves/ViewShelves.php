<h1 > Book Shelves </h1>

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

		     <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="shelfName"> Shelf Name:</label><br>
			  <input  id="shelfName" name="shelfName" type="text" class="validate" value="<?php if(isset($_POST['shelfName'])) { echo $post['shelfName']; } ?>">
		    </div>
		    </div>


		    <div class="col-xs-6">
		  	  <label for="rowNumber">Row Number:</label><br>
			  <input id="rowNumber" name="rowNumber" type="number" class="validate" value="<?php if(isset($_POST['rowNumber'])) { echo $post['rowNumber']; } ?>">
			</div></div>

		      <div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="columnNumber">Column Number:</label><br>
			  <input id="columnNumber" name="columnNumber" type="number" class="validate" value="<?php if(isset($_POST['columnNumber'])) { echo $post['columnNumber']; } ?>">
			</div></div>