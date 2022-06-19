<?php
$con = mysqli_connect('localhost','id19129898_id_20121231root','buDFS(t~0+5v&HiQ','id19129898_id_20121231');
$id = $_GET['id'];
$sql = 'SELECT * FROM customers WHERE id = '.$id;
$result = $con->query($sql);
$row = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<img src="ori.png" align="left"  width=200 height=150>
<body align='center' style="background-image: url('rup.jpg');  background-repeat: no-repeat; background-size: auto;font-size:20px; ">
    
    <h2 align='center' class='display-5' style="color:black; padding-top:30px;">Selected User Details:</h2><br><br>
    <form class='form-inline' action="http://localhost/banking/ps.php" method='get'>
        <input type="hidden" name="senderID" value="<?php echo $row['id'] ?>" >
    <div class="col-auto my-1">
        <table class='table '  align='center' border=1 >
        <thead align='center'>
            
            <tr style="color:black" >
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>BALANCE</th>
            </tr>
        </thead>
        <tbody align='center'>
                <tr style="color:blue; font-size:20px;">
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['Customer_name']; ?></td>
                    <td><?php echo $row['Email_id']; ?></td>
                    <td><?php echo $row['Balance']; ?></td>
                </tr>
        </tbody>
    </table>
    </div>
<br><br><br>
    <label  class="mr-sm-2" ><h6><b style="color:black">Transfer To:</b></h6></label>
    <?php 
        $sql = "SELECT Id,Customer_name from customers";
        $result = $con->query($sql);
    ?>
    <select class="form-control" style='background-color:#e6e6e6' name="reciverID" required >
        <option value="" disabled selected >Choose</option>
        <?php while($res = $result->fetch_assoc()){ ?>
        <option value="<?php echo $res['Id']; ?>"><?php echo $res['Customer_name']; ?></option>
        <?php } ?>
    </select>
<br><br><br>
    <label  class="mr-sm-2"><h6><b style="color:black" >Amount:</b></h6></label>
    <input class='form-control' type="number" name="amount" style='background-color:#e6e6e6' required > 
    <br>
    <div class='text-center'>
        <input align='center' class='btn btn-warning my-1 mt-3' type="submit" value="Transfer Money" action="http://localhost/banking/ps.php">
    </div>
    
    </form>
</body>
</html>