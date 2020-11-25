<?php include 'inc/header.php'; ?>
<h2>Ajax:- Create A Show/Hide Password Button</h2>
<div class="content">
	
	<form action="" method="post">
	    <table>
	        <tr>
	            <td>Username</td>
	            <td>:</td>
	            <td>
	                <input type="text" placeholder="Enter username">
	            </td>
	        </tr>
	        
	        <tr>
	            <td>Password</td>
	            <td>:</td>
	            <td>
	                <input type="password" id="password" placeholder="Enter Password">
	            </td>
	        </tr>
	        
	        <tr>
	            <td></td>
	            <td></td>
	            <td>
                    <button type="submit" name="showpassword" id="showpassword">Show Password</button>
	            </td>
	        </tr>
	        
	    </table>
	</form>
	
</div>
<?php include 'inc/footer.php'; ?>