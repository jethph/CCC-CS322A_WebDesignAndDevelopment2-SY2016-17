<?php
 include('db.php');
  $select=mysql_query("SELECT * FROM sample order by id desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  
  {
  $id=$userrow['id'];
  $username=$userrow['username'];
  $usermail=$userrow['emailid'];
  $usermobile=$userrow['mobileno'];
  $created=$userrow['created']
?>

<div class="display">
  <p> USER NAME : <span><?php echo $username; ?></span>
    <a href="delete.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
    		<span class="delete" title="Delete"> X </span></a>
  </p>
  <br />
  <p> EMAIL ID : <span><?php echo $usermail; ?></span>
    <a href="edit.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a>
  </p>
  <br />
  <p> Password : <span><?php echo $usermobile; ?></span>
  </p>
  <br />
  <p> CREATED ON : <span><?php echo $created; ?></span>
  </p>
  <br />
</div>
<?php } ?>
