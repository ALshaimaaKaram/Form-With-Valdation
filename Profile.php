<?php

//3 - Regular 
    $email = $_POST["email"];
    $rg ="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";


// 4 - Image
    
    if(isset($_FILES["img"]))
    {
        $imgName=$_FILES["img"]["name"];
        $path=$_FILES["img"]["tmp_name"];

        $explodName=explode(".",$imgName);
        $ext=end($explodName);

        $extarray=["jpg","JPG","png","PNG","jpeg","JPEG","gif","GIF"];

    }


    //6
    $password = $_POST["password"];
    // if(!empty($_POST["password"])) {
    //     // if (strlen($_POST["password"]) <= '8') {
    //     //     $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    //     // }
    //     if(preg_match("/\S{8,}/",$password)&&preg_match("/^[a-z0-9_]+$/",$password)) {
    //         // if(!preg_match("/[\W_]/",$password))
    //             echo "Your Password valid";
    //     }
    //     else
    //     echo "Not Valid";
    // }


    //7
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
        img
        {
            width:100px;
            height: 100px;
            border-radius:100%;
        }
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
</head>
<body>
<?php
    if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["password"]))
    {
        $name = $_POST["name"];

        (empty($name))?$errors["name"]="Please Enter Name":"";
        (empty($email))?$errors["email"]="Please Enter Email":"";
        (empty($password))?$errors["password"]="Please Enter Password":"";

        if(isset($errors)){
            $urlerror = urldecode(serialize($errors));
            header("Location: error.php?errors=".$urlerror);
        }
        else
        {
            if(!preg_match($rg,$email))
            {
                $errors["email"]="Please Enter Valid Email";
            }
            
            // if(!(preg_match("/\S{8}/",$password)&&preg_match("/^[a-z0-9_]+$/",$password))) {
            //     $errors["password"]="Please Enter Valid Password";
            // }
            if(!((strlen($password) == 8)&&preg_match("/^[a-z0-9_]+$/",$password))) {
                $errors["password"]="Please Enter Valid Password";
            }

            if(!in_array($ext,$extarray)){
                $errors["img"]= "File is not allowed to upload just use image";
            }

            if(isset($errors)){
                $urlerror = urldecode(serialize($errors));
                header("Location: error.php?errors=".$urlerror);
            }
            else
            {  
                ?>
                <div class="container" style="width:50%;">
                    <div>
                        <h2>Name:</h2>
                        <p><?=htmlspecialchars($_POST["name"])?></p>
                
                        <h2>Email:</h2>
                        <p><?=htmlspecialchars($_POST["email"])?></p>

                        <?php
                       
                            move_uploaded_file($path,"images/".$imgName);
                            echo "<img src='images/".$imgName."'/>";
    
                        ?>
                        
                    </div>
                </div>

                <?php
            }
            
        } 
    }
    ?>
</body>
</html>