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
    <script src="//code.jquery.com/jquery-1.11.1.min.js"> </script>
    
    
    
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <div class="container">
        <div class=" card">
            <form class="form-horizontal" role="form" onsubmit="return validateForm()">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                        <!-- <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span> -->
                    </div>
                </div>
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
                    <label for="bio" class="col-sm-3 control-label">Bio</label>
                    <div class="col-sm-9">
                        <textarea name="bio" id="" cols="49" rows="5"></textarea>
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>

<!-- /form -->
        </div> <!-- ./container -->
    </div> <!-- ./card -->
 <script src="registervalidation.js"> </script>
</body>

</html>