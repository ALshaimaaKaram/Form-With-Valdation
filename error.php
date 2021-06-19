<?php
    if(isset($_GET["errors"]))
    {
        $errors = unserialize($_GET["errors"]);
    }
?>
<style>
    div
        {
            margin: 50px;
            padding: 30px;
            width: 85%;
            font-size:20px;
            color: white;
            background-color:darkgoldenrod;
            border: black 2px solid;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
</style>
<div class="container">
        <p>
            <?= 
                (isset($errors["name"]))?$errors["name"]:""; 
            ?>
        </p>
        <p>
            <?= 
                (isset($errors["email"]))?$errors["email"]:""; 
            ?>
        </p>
        <p>
            <?= 
                (isset($errors["password"]))?$errors["password"]:""; 
            ?>
        </p>

        <p>
            <?= 
                (isset($errors["img"]))?$errors["img"]:""; 
            ?>
        </p>
</div>