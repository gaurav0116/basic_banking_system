<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->

    <!-- google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <!-- CSS  -->

    <style type="text/css">
        body {
            font-family: 'Righteous', cursive;
            background-color: #6e393966;
        }

        button {
            font-family: 'Righteous', cursive;
            border: none;
            border-radius: 8px;
            padding: 10px;
            background: brown;
            color: white;
            letter-spacing: 1.5px;
            font-size: 15px;

        }

        button:hover {
            background-color: #616C6F;
            color: white;
            transition: 0.5s;

        }

        tr,
        td {
            text-align: center;
            background-color: rgb(187, 187, 187);
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid black;
        }

        @media only screen and (orientation: portrait) {
            * {
                letter-spacing: 1px;
            }
        }
    </style>
</head>

<body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

    <?php
  include 'components/navbar.php';
?>

    <div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                            <tr>
                                <td class="py-2">
                                    <?php echo $rows['id'] ?>
                                </td>
                                <td class="py-2">
                                    <?php echo $rows['name']?>
                                </td>
                                <td class="py-2">
                                    <?php echo $rows['email']?>
                                </td>
                                <td class="py-2">
                                    <?php echo $rows['balance']?>
                                </td>
                                <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button
                                            type="button" class="btn">Show Details/Transfer</button></a></td>
                            </tr>
                            <?php
                    }
                ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html>