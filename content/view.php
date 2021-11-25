<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F❤️Z Character</title>
    <link rel="icon" href="../assets/images/Icon.png" type="image/x-icon">
    <!-- bootstrap & css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/viewv2.css">

</head>

<?php
    $id = $_GET['FRIENDS'];
    // Connect to server and select database.
    include("../config/config.php");//login
    $sql="SELECT * FROM reservation WHERE Friends=\"$id\" ORDER BY Date ASC";
    $objQuery = mysqli_query($objCon,$sql);
?>

<body>
    <div class="container-fluid">
        <div class="container" align=center>
            <div class="row pt-2">
                <div class="col-sm">
                    <p class="h1"><?php echo $id ?></p>
                </div>
            </div>
            <?php $x=1; ?>
            <table class="table table-striped Ctable">
                <thead>
                    <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Request</th>
                    </tr>
                </thead>
                <tbody>
                    <?php                 
                        while($rows=mysqli_fetch_array($objQuery))
                    {
                    ?>

                    <tr>
                        <th scope="row"><?php echo $x?></th>
                        <td><?php echo $rows['Name']?></td>
                        <td><?php echo $rows['Date']?></td>
                        <td><?php echo $rows['Time']?></td>
                        <td><?php echo $rows['Request']?></td>
                    </tr>
                   
                    <?php 
                    $x++;
                    }
                    ?>
                </tbody>
            </table>
            

                    
        </div>
    </div>
    <div class="Back">
        <div id="bt" class="container btimg" style="display: block;">
            <a href="ChooseFriend.php"><img class="imgbtn "
                    src="../assets/images/Back.png" alt=""></a>
        </div>
    </div>
</body>

</html>