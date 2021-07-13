<!-- wlecome title -->

<div class="container-fluid">

    <div class="row intro py-1">
        <div class="col-sm-12 col-md">
            <div class="heading text-center my-5">
                <h3>Welcome to</h3>
                <br>
                <h1>THE SPARK BANK</h1>
            </div>
        </div>
        <div class="col-sm-12 col-md img text-center">
            <img class="im" src="img/bank_img.jpg" class="img-fluid pt-2">
        </div>
    </div>

    <!-- CSS -->

    <style>
        .container-fluid {
            padding: 10px 0px;
            background-color: #6e393966;
            border: 1px solid black;
        }

        h3 {
            font-family: 'Righteous', cursive;
        }

        h1 {
            color: brown;
            font-weight: bold;
            transition: 0.5s;
            text-align: center;
            font-family: 'Righteous', cursive;
        }

        button:hover,
        h1:hover {
            transform: scale(1.1);
            text-shadow: 5px 4px 5px black;
        }

        /* Risponsive */

        @media only screen and (max-width: 640px) {
           h1{
               margin-right: 15px;
           }
        }
    </style>