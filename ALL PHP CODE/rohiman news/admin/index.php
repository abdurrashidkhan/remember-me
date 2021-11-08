<?php include "config.php" ?>
<!doctype html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>ADMIN | Login</title>
   <link rel="stylesheet" href="../css/bootstrap.min.css" />
   <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
   <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   <div id="wrapper-admin" class="body-content">
         <div class="container">
            <div class="row">
               <div class="col-md-offset-4 col-md-4">
                     <img class="logo" src="images/news.jpg">
                     <h3 class="heading">Admin</h3>
                     <!-- Form Start -->
                     <form  action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method ="POST">
                        <div class="form-group">
                           <label>Username</label>
                           <input type="email" name="logemail" class="form-control" placeholder="Enter E-mail" required>
                        </div>
                        <div class="form-group">
                           <label>Password</label>
                           <input type="password" name="password" class="form-control" placeholder="password" required>
                        </div>
                        <input type="submit" name="login" class="btn btn-primary" value="login" />
                     </form>
                     
                     <!-- /Form  End -->
               </div>
            </div>
         </div>
   </div>
</body>
</html>
