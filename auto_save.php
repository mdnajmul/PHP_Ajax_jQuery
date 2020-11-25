<?php include 'inc/header.php'; ?>
<h2>Ajax:- Auto Save & Update Data inside database</h2>
<div class="content">
	
	<form action="" method="post">
	    <table>
	        <tr>
	            <td>Type Content</td>
	            <td>:</td>
	            <td>
	                <textarea name="content" id="content"></textarea>
	            </td>
	        </tr>
	        
	        <tr>
	            <td></td>
	            <td></td>
	            <td>
	                <input type="hidden" name="contentid" id="contentid">
	            </td>
	        </tr>
	    </table>
	    <!-- Show message -->
	    <div id="contentsave" style="color:blue"></div>
	</form>
	
</div>
<?php include 'inc/footer.php'; ?>