<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>page</title>
    <link rel="stylesheet" type="text/css" href="poll.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
    <?php
    require("config.php");
    $radio=0;
    $sql = "SELECT candidate.name FROM candidate,voter where voter.zone=candidate.zone;";
    $result =mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck >0)
    {
        ?>
        <form class='form'>
        <?php 
        while($row =mysqli_fetch_assoc($result))
        {
//            $radio++;
        ?>
            <div class='inputGroup'>
                <input id="<?php echo $radio;?>" name="<?php echo $radio;?>" type='radio' value="$row['name']" />
                <label for="<?php echo $radio;?>"><?php echo $row['name']; ?></label>
            </div>

        <?php
        }
        ?>
        </form>;
        <?php
    }
    else if($resultCheck==0)
    {
        echo "error";
    }
    ?>
