
<?php
require_once 'init.php';
if(isset($_POST["id"]))
{

 $query = "DELETE from events WHERE id=:id";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>
