

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
</head>
<body>
    <form action="{{url('/')}}/register" method="POST">
        @csrf
        <center><h1>
                    <i>
                    <font color="#008000">
                        <u>Registration</u>
                    </font>
                    </i>
                </h1> 
                     <label for=""> Name :</label> 
                     <input type="text" name="name"> <br> <br>
                     <label for="">Email :</label> 
                     <input type="email" name="email"> <br> <br>
                     <label for="">Password :</label>
                     <input type="password" name="password"> <br> <br>
                     <input type="submit" name="next" value="SUBMIT">
        </center>
    </form>
</body>
</html>