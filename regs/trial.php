<html>
<link rel="stylesheet" type="text/css" href="style.css">
    <form method="post" action="trial.php">
        
<div class="table-responsive"></div>

<table class="table table-bordered" id="datatable" width=80% cellspacing="0" top=10%>



<thead>

<tr>
    <td><h2><b>First Name</b></h2></td>
    <td><b><h2>Last Name</h2></b></td>
    <td><b><h2>Clearance</h2></b></td>
    </tr>
</thead>

<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname="regist";     

$conn = new mysqli($servername,$username,$password,$dbname);
$sql = 'select * from users';

if (mysqli_query($conn,$sql)){
    
    
    echo "";
    
}
else { echo "error:" . $sql . "<br>" . mysqli_error($conn);}
$count=1;
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){?>

<tbody>
    <tr>
        <td>
            <?php echo $row['firstname'];?>
        </td>
        <td>
            <?php echo $row['lastname'];?>
        </td>
        <td ><input type="radio" onclick="myFunction()">cleared
         <input type="radio" onclick="myFunction()" >not cleared   
            <input type="radio" onclick="myFunction()">processing</td>
        <p id="text" style="display:none">checked</p>
    </tr>
</tbody>
<?php
 $count++;                                              
}
}else {echo '0 results';}?>

</table>
    </form>
</html>   