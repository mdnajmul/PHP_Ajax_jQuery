<?php include 'inc/header.php'; ?>
<h2>Ajax:- Auto fetch data from database</h2>
<div class="content">
	<style>
        .skill{background: #fba991; margin-left: 53px; padding: 6px 30px; width: 190px;}
        .skill ul{margin: 0; padding: 0; list-style: none;}
        .skill ul li{cursor: pointer;}
    </style>
	<form action="" method="post">
	    <table>
	        <tr>
	            <td>Skill</td>
	            <td>:</td>
	            <td>
	                <input type="text" name="skill" id="skill" placeholder="Enter your skill">
	            </td>
	        </tr>
	    </table>
	    <!-- Show message -->
	    <div id="skillstatus"></div>
	</form>
	
</div>
<?php include 'inc/footer.php'; ?>