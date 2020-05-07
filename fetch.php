<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "foodsys");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM purchase
  WHERE Customer LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM purchase ORDER BY purchaseid desc
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Date</th>
	 <th>Customer</th>
	 <th>Total Sales</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["date_purchase"].'</td>
    <td>'.$row["customer"].'</td>
    <td>'.$row["total"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>