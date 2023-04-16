<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   
    <!------ Include the above in your HEAD tag ---------->
   
</head>

<body>
    <div class="container">
        <div class=" card">
            <form class="form-horizontal" role="form">
                <div style="margin-top:0em ; margin-left: 85px;">  <h2>Login</h2> </div>
               
                
                <div class="form-group">
                    <label for="uname" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input type="uname" id="uname" placeholder="Username" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                     
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
    </div> <!-- ./card -->
 <script src="loginvalidation.js"> </script>
</body>

</html>