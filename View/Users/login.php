<?php require_once "header.php";

?>
<div class="form-group" > 

		<form action="<?php echo $GLOBALS['ep_dynamic_url']; ?>login" method="post" class="form-inline" align="center">

		  
          <div class="form-group" > 
		  <div class="col-xs-3">
		  	<label for="email">Email</label>
			  <input id="email" name="email" type="text" class="validate" value="<?php if(isset($_POST['email'])) { echo $post['email']; } ?>" autocomplete="off">
			</div></div>

			<div class="form-group" > 
			<div class="col-xs-3">
				<label for="username">Password</label>
			  <input  id="username" name="password" type="password" class="validate" value="" autocomplete="off">
			</div></div>

			<div class="form-group" > 
			<div class="col-xs-3">
				<button class="btn btn-primary" type="submit" value="submit" ">Login
				</button>
			</div></div>
		
			<div class="form-group" > 
			<div class="col-xs-6">
			   <a href='<?php echo $GLOBALS['ep_dynamic_url']; ?>login/forgot'> Forgot Password </a>
			</div></div>

		  
		  <input id="remember2" type="hidden" name="remember"/>
		</form>
	
	

</div>

<script type="text/javascript">
    function validate() {
        if (document.getElementById('remember').checked) {
            $('#remember2').attr('name', '');
        } else {
             $('#remember2').attr('name', 'remember');
        }
    }
</script>
