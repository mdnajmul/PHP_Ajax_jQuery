<?php include 'inc/header.php'; ?>
<h2>Ajax:- Check Username Availability</h2>
<div class="content">
	
	<form action="" method="post">
	    <table>
	        <tr>
	            <td>Username</td>
	            <td>:</td>
	            <td>
	                <input type="text" name="username" id="username" placeholder="Enter username">
	            </td>
	        </tr>
	    </table>
	    <!-- Show message -->
	    <div id="userstatus"></div>
	</form>
	
</div>
<?php include 'inc/footer.php'; ?>