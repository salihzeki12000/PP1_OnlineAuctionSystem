

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title >Online Auction System</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
   
    
   <script type="text/javascript">
    
    function validatePassword()
        {
           var password=document.getElementById("password").value;
            var password2=document.getElementById("repeatPassword").value;
            if(password==password2)
                {
                    return true;
                }else{
                    alert("Passwords don't match.")
                    return false;
                }
            
        }
    </script>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color:white">Auction System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

                  <ul class="nav nav-pills pull-right" style="margin-top: 5px;">

                      <li class="dropdown" id="menuLogin">
                          <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
                          <div class="dropdown-menu" style="padding:17px;">
	   												<form class="navbar-form navbar-right">
	                              <div class="form-group">
	                                  <input type="text" placeholder="Email" class="form-control" required autofocus>
	                              </div>
	                   
	                              <div class="form-group">
	                                  <input type="password" placeholder="Password" class="form-control" required autofocus>
	                                  
	                              </div>
	                              <button type="submit" style="margin-top:1em; margin-bottom:1em;" class="btn btn-success">Sign in</button>
	                              <br >
	                              <a style="margin-top:1em" href="forgot.php">Forgot Password?</a>
	                          </form>
                          </div>
                      </li>
                      <li>
                      	<a>New user?</a>
                      </li>

                  </ul>


        </div><!--/.navbar-collapse -->
    </div>
</nav>

    
    
        
<div class="container" style="margin-top:5em; margin-bottom:5em">
  <!-- page header -->  
<div class="page-header text-center">
      <h2>Edit User</h2>
  </div>
    
    
    
    
    
    <!-- Form Start -->
    

     <!--become a seller form-->
  <form class="form-horizontal col-sm-offset-3 col-sm-6" role="form" action="test.php" method="post" onsubmit="return validatePassword()">


        <!--username  input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	UserName
          </label>
          <div class="col-sm-9">
              <input type="text" name="username" placeholder="userName" class="form-control" autofocus required>
          </div>
      </div>

			<!--email input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	Email
          </label>
          <div class="col-sm-9">
              <input type="email" name="email" placeholder="Email" class="form-control" autofocus required>
          </div>
      </div>

			<!--password input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	Password
          </label>
          <div class="col-sm-9">
              <input type="password" name="password" placeholder="Password" class="form-control" id="password" autofocus required>
          </div>
      </div>

			<!--confirm password input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	Confirm password
          </label>
          <div class="col-sm-9">
              <input type="password" name="confirmPassword" placeholder="Confirm Password" class="form-control" id="repeatPassword" autofocus required>
          </div>
      </div>

	  <!--first name input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	First Name
          </label>
          <div class="col-sm-9">
              <input type="text" name="firstName" placeholder="First Name" class="form-control" autofocus required>
          </div>
      </div>

	  <!--last name input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	Last Name
          </label>
          <div class="col-sm-9">
              <input type="text" name="lastName" placeholder="Last Name" class="form-control" autofocus required>
          </div>
      </div>

      <!--gender input-->
      <div class="form-group">
          <label class="control-label col-sm-3">
          	Gender
          </label>
          <div class="col-sm-9">
              <div class="row">
                  <div class="col-sm-4">
                      <label class="radio-inline">
                          <input type="radio" name="gender"  value="Female">
                          Female
                      </label>
                  </div>
                  <div class="col-sm-4">
                      <label class="radio-inline">
                          <input type="radio" name="gender" value="Male" >
                          Male
                      </label>
                  </div>
                  <div class="col-sm-4">
                      <label class="radio-inline">
                          <input type="radio" name="gender" value="Other">
                          Other
                      </label>
                  </div>
              </div>
          </div>
      </div>

      <!-- date of Birth input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	Date of Birth
          </label>
          <div class="col-sm-9">
              <input type="date" name="birthDate" class="form-control" autofocus>
          </div>
      </div>

      <!--分割线-->

	    <!-- address-line 1 input-->
	    <div class="form-group">
	        <label class="col-sm-3 control-label">
	        	Address Line 1
	        </label>
	        <div class="col-sm-9">
	            <input type="text" name="address-line 1" placeholder="Address line 1" class="form-control" autofocus>
	            <p class="help-block">Street address, P.O. box, company name, c/o</p>
	        </div>
	    </div>

	    <!-- address-line 2 input-->
	    <div class="form-group">
	        <label class="col-sm-3 control-label">
	        	Address Line 2
	        </label>
	        <div class="col-sm-9">
	            <input type="text" name="address-line 2" placeholder="Address line 2" class="form-control" autofocus>
	            <p class="help-block">Apartment, suite , unit, building, floor, etc.</p>
	        </div>
	    </div>

	    <!-- city input-->
	    <div class="form-group">
	        <label class="col-sm-3 control-label">
	        	City
	        </label>
	        <div class="col-sm-9">
	            <input type="text" name="city" placeholder="City / Town" class="form-control" autofocus>
	        </div>
	    </div>

	    <!-- state input-->
	    <div class="form-group">
	        <label class="col-sm-3 control-label">
	        	State
	        </label>
	        <div class="col-sm-9">
	            <input type="text" name="region" placeholder="State / Province / Region" class="form-control" autofocus>
	        </div>
	    </div>

	    <!-- postal-code input-->
	    <div class="form-group">
	        <label class="col-sm-3 control-label">
	        	Zip / Postal Code
	        </label>
	        <div class="col-sm-9">
	            <input type="text" name="postal-code" placeholder="zip / postal code" class="form-control" autofocus>
	        </div>
	    </div>

	    <!-- country input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	Country
          </label>
          <div class="col-sm-9">
              <select name="country" class="form-control">
                  <option>Australia</option>
                  <option>Brazil</option>
                  <option>China</option>
                  <option>Denmark</option>
                  <option>Ethiopia</option>
                  <option>Fiji</option>
                  <option>Great Britain</option>
                  <option>Hungary</option>
              </select>
          </div>
      </div>



    
    
    	    <!-- submit-->
      <div class="form-group">
          <div class="col-sm-9 col-sm-offset-3">
              <button type="submit" class="btn btn-primary btn-block">Update</button>
          </div>
      </div>
      
      
    </form>
    
    

    
    

	</div>
    </body>
</html>