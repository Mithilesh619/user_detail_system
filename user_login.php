<!doctype html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>User - Login Page</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
	  <style>
		.container{margin-top:100px;}
	  </style>
   </head>
   <body>
      
      <div class="container">
         <div class="card">
            <div class="card-header"><i class="fa fa-fw fa-user"></i> <strong>User Login</strong> </div>
            <div class="card-body">
               <div class="col-sm-6">
                  <form method="post" action="user_login_action.php">
                     <div class="form-group">
                        <label>Username <span class="text-danger">*</span></label>
                        <input type="text" name="email" id="username" class="form-control" placeholder="Enter Username" required>
                     </div>
                     <div class="form-group">
                        <label>Password<span class="text-danger">*</span></label>
                        <input type="password" name="password" id="pass" class="form-control" placeholder="Enter Password" required>
                     </div>
                     <div class="form-group">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"> Login </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
   </body>
</html>