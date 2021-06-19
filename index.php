<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
        form
        {
            margin: 150px;
            padding: 20px;
            width: 70%;
            background-color:darkgoldenrod;
            border: black 2px solid;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        label
        {
            color: white;
        }
    </style>
    </head>
    <body>

        <div class="container">
            <form action="Profile.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="text" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="form-control" type="password" id="password" name="password">
                </div>

                <div class="form-group">
                    <label for="cpassword">Confirm Password:</label>
                    <input class="form-control" type="password" id="cpassword" name="cpassword">
                </div>

                <div class="form-group">
                    <label for="room">RoomNo.</label>
                    <select class="form-control" id="room">
                        <option value="1">Application 1</option>
                        <option value="2">Application 2</option>
                        <option value="3">Cloud</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ext">Ext:</label>
                    <input class="form-control" type="text" id="ext" name="ext">
                </div>


                <div class="form-group">
                    <label for="code">Profile Picture:</label>
                    <input class="form-control" type="file" id="img" name="img">
                </div>


                <div class="form-group">
                    <input class="btn btn-info" type="reset" value="Cancel">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
        </div>    
    </body>
</html>