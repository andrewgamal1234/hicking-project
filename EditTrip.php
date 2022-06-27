<?php
$eddata=$_GET["ID"];
$host = "localhost";
 $user = "root";
 $password = "";
 $database = "trips";
 $query="SELECT * from tripdetails WHERE id = '$eddata'";

 
 
 try{
 $conn = mysqli_connect($host, $user, $password, $database);
 }catch(Exception $ex){
     print "error";
 }
 $dataconn=mysqli_query($conn,$query);

 $data = mysqli_fetch_array($dataconn); // fetch data
echo $data['tripName'];

 if(isset($_POST['update'])) // when click on Update button
{
    $tripname = $_POST['tripName'];
    $tripDate = $_POST['tripDate'];
    $tripPrice=$_POST['tripPrice'];
    

    $Query = "update tripdetails set tripname='$tripname', tripDate='$tripDate',tripPrice='$tripPrice'
      where id='$eddata'";
	echo $Query;
    $edit = mysqli_query($conn, $Query);
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:trip.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($conn);
    }    	
}
 

?>
<form method="POST">
  <input type="text" name="tripName" value="<?php echo $data['tripName'] ?>" placeholder="Enter Trip Name" Required>
  <input type="text" name="tripDate" value="<?php echo $data['tripDate'] ?>" placeholder="Enter date" Required>
  <input type="text" name="tripPrice" value="<?php echo $data['tripPrice'] ?>" placeholder="Trip Price">
	
  <input type="submit" name="update" value="Update">
</form>
<style >
  *{
    background-color:orange; 
  }
  
</style>

