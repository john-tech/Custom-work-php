<?php
$connect = mysqli_connect("localhost", "root", "", "cforget");


$result = mysqli_query($connect, "SELECT * FROM `cf_users` ORDER BY RAND()");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <style>
        #filterTable {
            display: block;
        }

        .cant-user-table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .cant-user-table td,
        .cant-user-table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .cant-user-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .cant-user-table tr:hover {
            background-color: #ddd;
        }

        .cant-user-table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        .user_upd_button {
            padding: 10px 22px;
            color: #fff;
            background: orange;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }

        .us_pass,
        .us_count,
        .us_add_count {
            padding: 5px 5px !important;
            border: none !important;
            border-radius: 5px !important;
            margin: 5px;
            width: 100%;
            background-color: #fff !important;
        }

        .url_div input.url_input {
            width: 100%;
            max-width: 600px;
        }
    </style>

    <p>dynamic content ?</p><input type="text" id="rrrr" value="1000" style="width:50">
    <button id="rrrr">submit</button>
    <div id="here">
        <div class="cant-user-div" id="example">
            <table class="cant-user-table">
                <?php
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <thead>
                        <tr>
                            <th><input class="form-check-input" type="checkbox" value="" id="checkAll"></th>
                            <th>User Login</th>
                            <th>User Email</th>
                            <th>Display Name</th>
                            <th>Add Pages</th>
                            <th>Pages</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $upd_user_id = $row["ID"];
                    ?>
                        <tbody id="myTable">
                            <tr>
                                <form action="" method="POST">
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td><input type="text" name="pages" id="" class="us_count" value="<?php echo $row["user_email"]; ?>" readonly=""></td>
                                    <td><input type="text" name="pages" id="" class="us_count" value="<?php echo $row["user_login"]; ?>" readonly=""></td>
                                    <td><input type="text" name="pages" id="" class="us_count" value="<?php echo $row["display_name"]; ?>" readonly=""></td>
                                    <td><input type="text" name="add_count_page" class="us_add_count" value="<?php echo $row["upd_count"]; ?>"></td>
                                    <td><input type="text" name="add_count_page" class="us_add_count" value=""></td>
                                    <td><button type="submit" name="upd_usersubmit" id="hiddenInput" <?php echo $upd_user_id ?> class="user_upd_button hiddenInput">Update</button></td>
                                </form>
                            </tr>
                        <?php
                        $i++;
                    }
                        ?>
                        </tbody>
            </table>
        <?php
                } else {
                    echo "No result found";
                }
        ?>
        </div>
    </div>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">
        $(document).ready(function() {
            function runIt() {
                var time = 2000;
                $("#here").fadeIn(time).fadeOut(time);
            };
            setInterval(function() {
                runIt();
                $("#here").load(window.location.href + " #here");
            }, 4000);
        });
    </script>
</body>

</html>