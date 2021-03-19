<?php
  	session_start();
  	/*
	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}
    */
	
    if(isset($_SESSION['voter'])){
      header('location: index.php');
    }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box" id = "addnew">
  	<div class="login-logo">
  		<b>IITB Gymkhana Voting</b>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign in to vote</p>

         <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="votersid" class="col-sm-3 control-label">Voter's ID</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="votersid" name="votersid" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
				<div class="row">
    			    <div class="col-xs-4">
          			  <button type="submit" class="btn btn-primary btn-block btn-flat" name="add"><i class="fa fa-sign-in"></i> Register</button>
        		    </div>
			     	<div class="col-xs-4">
          	     	  <a href='login.php'> Registered? Login </a>
        		    </div>
      		    </div>
 
        <!--
    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
				<div class="col-xs-4">
          			<a href='register.php'> Register </a>
        		</div>
      		</div>
    	</form>
		-->
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>