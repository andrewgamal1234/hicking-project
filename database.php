<?php
 $conn = mysql_connect('localhost','root','');
 if(!$conn){
  die('Mysql connection error '.mysql_error());
 }
 
 $db = mysql_select_db('population',$conn);
 if(!$db){
  die('Database selection failed '.mysql_error());
 }
 
 $sql = 'SELECT *FROM pop_district';
 
 $result = mysql_query($sql,$conn);
 
 
 $data = array();
 while($row = mysql_fetch_array($result)){
  $row_data = array(
   'name' => $row['name'],
   'pop_male' => $row['pop_male'],
    'pop_female' => $row['pop_female'],
    'pop_total' => $row['pop_total']
   );
  array_push($data, $row_data);
 }
 
 echo json_encode($data);
?>