<h1 > Leased Books </h1>

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

		<form  class="form-horizontal" action="<?php echo $GLOBALS['ep_dynamic_url']; ?>ViewLeases" method="post"  >

		    <div class="form-group" > 

		     <div class="form-group" > 
			<div class="col-xs-6">
			  <label for="studentId"> Student ID:</label><br>
			  <input  id="studentId" name="studentId" type="number" class="validate" value="<?php if(isset($_POST['studentId'])) { echo $post['studentId']; } ?>">
		    </div>
		    </div>


		    <div class="col-xs-6">
		  	  <label for="leasedLibId">Leased Librarian ID:</label><br>
			  <input id="leasedLibId" name="leasedLibId" type="number" class="validate" value="<?php if(isset($_POST['leasedLibId'])) { echo $post['leasedLibId']; } ?>">
			</div></div>

		      <div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="receivedLibId">Received Librarian ID:</label><br>
			  <input id="receivedLibId" name="receivedLibId" type="number" class="validate" value="<?php if(isset($_POST['receivedLibId'])) { echo $post['receivedLibId']; } ?>">
			</div></div>

			 <div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="bookid">Book ID:</label><br>
			  <input id="bookid" name="bookid" type="number" class="validate" value="<?php if(isset($_POST['bookid'])) { echo $post['bookid']; } ?>">
			</div></div>

			<div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="leaseDate">Lease Date:</label><br>
			  <input id="leaseDate" name="leaseDate" type = "datetime" class="validate" value="<?php if(isset($_POST['leaseDate'])) { echo $post['leaseDate']; } ?>">
			</div></div>

			<div class="form-group" > 
		    <div class="col-xs-6">
		  	  <label for="returnDate">Return Date:</label><br>
			  <input id="returnDate" name="returnDate" type = "datetime" class="validate" value="<?php if(isset($_POST['returnDate'])) { echo $post['returnDate']; } ?>">
			</div></div>