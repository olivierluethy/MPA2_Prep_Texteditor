<?php
require_once('config/db_connect.php');
$sql = "SELECT * FROM blog ORDER BY id DESC;";
$execute = mysqli_query($con, $sql);
$postdata = mysqli_num_rows($execute);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <?php
        if($postdata > 0){
            while($row = mysqli_fetch_array($execute)){
                $timestamp = $row['Date_published'];
                $date = date('dS M Y', strtotime($timestamp));
                $time = date('h:i A', strtotime($timestamp));
                ?>
        <h1><a href="details.php?id=<?php echo $row['id'];?>"><?php echo $row['Article_title'];?>
            </a></h1>
        <span>Published on: <?php echo $date; ?> At: <?php echo $time;?></span>
        <?php
            }
        }
            ?>

            <br><a href="dashboard.php">Post</a>
    </div>
</body>

</html>