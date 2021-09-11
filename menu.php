<?php
 include('include/config.php');
?>
  

<!DOCTYPE html>
</html>
<head>
<title> menu</title>
<link rel="stylesheet" type="text/css" href="web/css/table-style.css" />
<style>.btn{
text-decoration: none;
padding: 6px 20px;
border: 2px solid white;
background-color: #4daea1;
color: white;
margin: 17px;
font-size: 1rem;
cursor: pointer;
}</style>
</head>
<body class="dashboard-page">
<?php
 




$view=mysqli_query($connect,"select * from  menuform order by id desc");
/*$total_records=mysqli_num_rows($view);
$session["sessionID"] = mysqli_insert_id($connect)
include('include/config.php');
mysqli_close($connect);*/
?>

	
				
				<div class="table-heading">
               <center> <h2 class="text-center">Food Menu</h2></center>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					 
					    <table id="table" method="post">
						
						  <tr>
						  <th>Srno</th>
							<th>name</th>
							<th>photo</th>
							<th>price</th>
							<th>Order</th>
							
							
						  </tr>
						
						  </div>
								</div>
							</div>
							<?php
	
	$counter = 0;

	   
 
   

while ($rows = mysqli_fetch_array($view)) {
   extract($rows);

?> <tr>
<td><?php echo $rows['id'];?></td>
<td><?php echo $rows['name'];?></td>
<td><img src="images/<?php echo $rows['photo'];?>"height="100px" width="100px"></td>
<td><?php echo $rows['price'];?></td>

   
   
    
<td>
 
<button class="btn"><a  onclick="return confirm('Are u sure');"href="order.php?id=<?php echo $id;?>" title="add ">  Order Now</a></button>

</a></td></tr>										
								

<?php
}
?>
     		</table>              
						
		</section>
	
		
</body>
</html>
<?php
	//include('include/config.php');

if (isset($_GET['id']))
{$delete = mysqli_query($connect,"DELETE from menuform where
	id='".$_GET['id']."'");
	

while ($fetch=mysqli_fetch_array($delete))
 {
 $img=$fetch["Photo"];
 }
 $isrc="images/".$img;
 unlink($isrc);

 $sel=mysqli_query($connect,"select * from  menuform where
id='".$_GET['id']."' ");

if ($delete)
{
echo "<script>;";

echo "alert('Registration record delete....!');";
echo 'window.location.href = "demoview.php";';
echo "</script>;";
}
else
{
echo "<script>;";
echo "alert('registration data error....!');";
echo 'window.location.href = "registration_view.php";';
echo "</script>;";
}
}
?>


