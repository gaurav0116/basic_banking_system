<div class="action">
    <ul class="take-action">
        <li id="transfer-money" class="btn">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/transfer_money.png" alt="transfer-money-img">
</div> <br>
                <a href="transfermoney.php"  style="text-decoration:none;"> <button> View All Customer to transfer</button></a>
        </li>

        <li id="history " class="btn">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/history_img.jpg" alt="history-img">
</div> <br>
                <a href="transactionhistory.php"  style="text-decoration:none;"> <button> Transfer History </button></a>
        </li>
    </ul>
</div>

<style>
    .action{
        background-color: antiquewhite;
        margin-bottom: 10px;
    }
    .card:hover {
        transition: 0.5s;
        transform: translateY(5px);
        box-shadow: 2px 2px 26px 0px rgba(0, 0, 0, 0.3);
    }

    .action {
        margin-top: 20px;
        border: 1px solid black;
    }

    .take-action {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .btn {
        padding: 100px;
    }

    .action-img {
        width: 350px;
        height: 300px;
    }

    button,
    .btn-primary {
        font-family: 'Righteous', cursive;
        border: none;
        border-radius: 8px;
        padding: 10px;
        background: brown;
        color: white;
        letter-spacing: 1.5px;
        font-size: 15px;
        transition: 0.5s;
    }

    button:hover {
        background-color: #4C4B4B;
    }

    /* Responsive */

    @media only screen and (max-width: 640px) {

        .take-action {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 0;
        margin: 25px;
    }

    .btn {
        padding: 0px;
        margin-top: 20px;
    }

    button{
        margin-right: 50px;
    }
}
 

</style>