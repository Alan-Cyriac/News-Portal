<?php
$id= $_GET['id'];
if($id!=""){ ?>
<form action="update.php?id=<?=$id?>">
	<input id='uname' name='uname' value="<?=$row['uname']?>">
</form>	

<?php
} ?>