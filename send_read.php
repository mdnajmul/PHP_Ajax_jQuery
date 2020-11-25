<?php include 'inc/header.php'; ?>
<h2>Ajax:- Send and Show Data from Database Without Page Refresh</h2>
<div class="content">
	<style>
        .data{background: #ddd; margin-left: 83px; padding: 6px 30px; width: 600px; margin-top: 20px;}
        .data ul{margin: 0; padding: 0; list-style: none;}
        .data ul li{cursor: pointer;}
    </style>
	<form action="" method="post">
	    <table>
	        <tr>
	            <td>Content</td>
	            <td>:</td>
	            <td>
	                <textarea name="content" id="content"></textarea>
	            </td>
	        </tr>
	        
	        <tr>
	            <td></td>
	            <td></td>
	            <td>
	                <input type="submit" name="autosubmit" id="autosubmit" value="Post">
	            </td>
	        </tr>
	    </table>
	    <!-- Show message -->
	    <div id="autostatus"></div>
	</form>
	
</div>
<?php include 'inc/footer.php'; ?>