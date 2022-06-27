<style>
body
{
  background-image:url("final.jpg");
  background-repeat: no-repeat; 
  background-size: cover;
}
</style>
<?php

//fetch_user.php

include('database_connection.php');

session_start();

$query = "
SELECT * FROM login 
WHERE user_id != '".$_SESSION['user_id']."' 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table style="background-color:black; color:orange" class="table table-bordered ">
 <tr>
  <td><b>Username</b></td>
  <td><b>Status</b></td>
  <td><b>Action</b></td>
 </tr>
';

foreach($result as $row)
{
 $status = '';
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($row['user_id'], $connect);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span style="color:black; background-color:white" class="label">Online</span>';
 }
 else
 {
  $status = '<span style="color:black" class="label label-warning">Offline</span>';
 }
 $output .= '
 <tr>
  <td>'.$row['username'].'</td>
  <td>'.$status.'</td>
  <td><button type="button" style="color:black" class="btn btn-warning btn-xs start_chat" data-touserid="'.$row['user_id'].'" data-tousername="'.$row['username'].'">Start Chat</button></td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>
