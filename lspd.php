<?php
    include './includes/connect.php';

    // CONFIG
    $base = 'http://192.168.0.11/';

?>

<!DOCTYPE php>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/939366313439154207/977728577816629308/sasrp34312.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SASRP - Duty Logs</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav class="nav">
            <a href="index.php" style="float: right;">Created By: Michael.#1294 & TenCreator#2627</a>
            <a href="index.php"><span class="nav-item-name">Home</span></a>
            <a href="https://discord.com/invite/sasrp"><span class="nav-item-name">Discord</span></a>
            <a href="https://discord.com/invite/sasrp"><span class="nav-item-name">Website</span></a>
        </nav>
    </header>


    <main>
        <div class="flex flex-row mobile-column">
            <table>
                <thead>
                    <tr>
                        <th class="no-mobile">Name</th>
                        <th>Discord ID</th>
                        <th>Department</th>
                        <th>Time</th>
                        <th class="no-mobile">Last Clocked In</th>
                    </tr>
                </thead>
                <?php 
                
                foreach($LSPD as $row){ // Website php name example: sasp.php
                    // while($row = mysqli_fetch_array($result)){
                    //     echo "<tr>";
                    //         echo "<td>" . $row['name'] . "</td>";
                    //         echo "<td>" . $row['id'] . "</td>";
                    //         echo "<td>" . $row['dept'] . "</td>";
                    //         echo "<td>" . $row['time'] . "</td>";
                    //         echo "<td>" . $row['lastclockin'] . "</td>";
                    //     echo "</tr>";
                    // }
                    ?>

                    <tr>
                        <td class="no-mobile"><?php echo $row['name'] ?></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['dept'] ?></td>
                        <td><?php echo TimeCalc($row['time'])['d'], TimeCalc($row['time'])['h'], TimeCalc($row['time'])['m'] ?></td>
                        <td class="no-mobile"><?php echo $row['lastclockin'] ?></td>
                    </tr>


                    <?php

                }
                ?>
            </table>
        </div>
    </main>
</body>
</html>