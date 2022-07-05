<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="register.php" method="POST" class="form-group" autocomplete="of">
        <div class="justify-content-center align-items-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="" class="form-grooup">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Your Username">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="" class="form-group">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="" class="form-group">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>