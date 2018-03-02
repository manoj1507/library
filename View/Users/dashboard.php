
<br/>

<table class="details bordered" align="center" style="width: 400px; margin: 0 auto; text-align: center">

	<tr>
		<td colspan="2"> <h5> Your Details - </h5> </td>
	</tr>

	<tr>
		<td> ID: </td>
		<td> <?php echo $userdata['id']; ?> </td>
	</tr>

<tr>
		<td>Department ID: </td>
		<td> <?php echo $userdata['department_id']; ?> </td>
	</tr>

	<tr>
		<td> Name: </td>
		<td> <?php echo $userdata['first_name']; ?> </td>
		<td> <?php echo $userdata['last_name']; ?> </td>
	</tr>

	<tr>
		<td> Email: </td>
		<td> <?php echo $userdata['email']; ?> </td>
	</tr>

<tr>
		<td> Phone Number: </td>
		<td> <?php echo $userdata['phone_number']; ?> </td>
	</tr>
	<tr>
		<td> Category: </td>
		<td> <?php echo $userdata['role']; ?> </td>
	</tr>
	
	<tr>
		<td> Gender: </td>
		<td> <?php echo $userdata['gender']; ?> </td>
	</tr>
	
</table>

</center>