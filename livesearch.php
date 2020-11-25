<?php include 'inc/header.php'; ?>
<h2>Ajax:- Live Data Search</h2>
<div class="content">
	
	<form action="" method="post">
	    <table>
	        <tr>
	            <td>Type Keyword</td>
	            <td>:</td>
	            <td>
	                <input type="text" name="livedata" id="livedata" placeholder="Type your keyword">
	            </td>
	        </tr>
	    </table>
	    <!-- Show data/message -->
	    <div id="livesearchdata"></div>
	</form>
	
</div>
<?php include 'inc/footer.php'; ?>