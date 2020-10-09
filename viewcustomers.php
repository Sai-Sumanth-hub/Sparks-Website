<?php 
require_once "connect_db.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark Transfer</title>

    <link rel="stylesheet" href="common-style.css">
    <link rel="stylesheet" href="trans-style.css">

    <style>
        .customers {
            width: 28%;
        }
    </style>
    
</head>
<body>

    <a href="home-page.html"><img src="Logo-PixTeller2.png" alt="logo" class="logo"></a>

    <h1 id="heading">
        Customer Details
    </h1>

    <div class="tables-container">
        <?php

        /* Quering the Database */
            $sql = "SELECT cust_name,acc_number,email_id,acc_balance FROM customers";

            $result = $conn->query($sql);
            
            if (($result->num_rows) > 0) {
                $i = 1;
                while ($data = $result->fetch_assoc()) {
                    
                    echo '<div class="customers" style="background:rgba(68, 78, 156 ,0.7)">
                    <table>
                        <tr id = "c'.$i.'">
                            <th colspan="3" class="ttt">Customer '.$i.' </th>
                        </tr>
                        <tr>
                            <td>Account No.</td>
                            <td>:</td>
                            <td>'.$data["acc_number"].'</td>
                        </tr>
                        <tr>
                            <td>Name </td>
                            <td>:</td>
                            <td>'.$data["cust_name"].'</td>
                        </tr>
                        <tr>
                            <td>Email-ID</td>
                            <td>:</td>
                            <td>'.$data["email_id"].'</td>
                        </tr>
                        <tr>
                            <th>Balance</th>
                            <td>:</td>
                            <th>'.$data['acc_balance'].'</th>
                        </tr>
                    </table>
                </div>';
                $i++;
                }
            }
        ?>
    </div>

    <p class="tbtn"><a href="start-transaction.php"><button>Transfer Money</button></a></p>

</body>
</html>