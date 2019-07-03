<?php
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['occupation']) && isset($_POST['institute']) && isset($_POST['email']){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$occupation = $_POST['occupation'];
$institute = $_POST['institute'];
$email = $_POST['email'];

$to = 'imaginginpsychiatry@gmail.com';
$subject = "New registration";
$body = '<html>
		<body>
			<h2>Registration</h2>
			<hr>
			<p>First name<br>'.$fname.'</p>
			<p>Last name<br>'.$lname.'</p>
			<p>Occupation<br>'.$occupation.'</p>
			<p>Institute<br>'.$institute.'</p>
			<p>Email<br>'.$email.'</p>
		</body>
	</html>';

$headers = "From: <".$email.">\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset-utf-8";

$send = mail($to, $subject, $body, $headers);
if($send){
	echo '<br>';
	echo 'Registration completed!'
} else {
	echo 'error';
}
}
?>





<!doctype html>
<html lang="en"><head>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<meta charset="utf-8">
	</head>
  <body>
	  
 
    <div class="container">
      <div class="col-xs-12 col-md-8">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="form-signin-heading">Please register here </h2>

<div class="col-xs-10  col-sm-8 col-xs-offset-2">

<style>
.radios input[type=radio] {
	width: 16px;
	height: 16px;
	cursor: pointer;
}

.check-label {
  max-width: 100%;
  margin-bottom: 10px;
  font-weight: bold;
  cursor: pointer;
}

.checkbox {
	margin-left:5px;
	width: 16px;
	height: 16px;
	cursor: pointer;
	display:inline !important;
}


.form-group .parsley-errors-list {
	font-weight:bold;
	color:red;
	margin-left:40px;
}

</style>
	
	
	</div>


<div style="margin-top: 35px;/* margin-left: 0px; */margin-bottom: 20px; ">
		<p>
				This symposium is free of charge. Fields with * are required.
		</p>
	</div>
	




<div class="form-group">
<label class="control-label" for="fname" style=";
">
	First Name 
        	<span style="font-size:1.2em; color:red; font-weight:bold;">*</span>
</label>
<div>
            <input class="form-control" type="text" name="fname" id="fname" size="30" maxlength="1000" value="" required="required" data-parsley-error-message="This is required." style="width:70%;" data-parsley-id="9749"><ul class="parsley-errors-list" id="parsley-id-9749"></ul>
</div>
</div>

<div class="form-group">
<label class="control-label" for="lname">
	Last Name
        	<span style="font-size:1.2em; color:red; font-weight:bold;">*</span>
</label>
<div>
            <input class="form-control" type="text" name="lname" id="lname" size="30" maxlength="1000" value="" required="required" data-parsley-error-message="This is required." style="width:70%;" data-parsley-id="6958"><ul class="parsley-errors-list" id="parsley-id-6958"></ul>
</div>
</div> 

<div class="form-group">
<label class="control-label" for="occupation">
	Occupation
        	<span style="font-size:1.2em; color:red; font-weight:bold;">*</span>
</label>
<div>
<select name="occupation" class="form-control" id="occupation" required="required" data-parsley-error-message="This is required." style="width:70%;" data-parsley-id="3329">
    <option value=""></option>
            <option value="Student">Student</option>
            <option value="PhD student">PhD student</option>
            <option value="Post doc">Post doc</option>
            <option value="Other">Other</option>
</select><ul class="parsley-errors-list" id="parsley-id-3329"></ul>
</div>
</div>

<div class="form-group">
<label class="control-label" for="institute">
	Institute 
		<span style="font-size:1.2em; color:red; font-weight:bold;">*</span>
</label>
<div>
            <input class="form-control" type="text" name="institute" id="institute" size="30" maxlength="1000" value="" required="required" data-parsley-error-message="This is required." style="width:70%;" data-parsley-id="3699"><ul class="parsley-errors-list" id="parsley-id-3699"></ul>
</div>
</div> 

<div class="form-group">
<label class="control-label" for="email">
	Email 
        	<span style="font-size:1.2em; color:red; font-weight:bold;">*</span>
</label>
<div>
            <input class="form-control" type="email" name="email" id="email" size="30" maxlength="1000" value="" required="required" data-parsley-error-message="This is required." style="width:70%;" data-parsley-id="3702"><ul class="parsley-errors-list" id="parsley-id-3702"></ul>
</div>
</div> 

<div class="container" style="
    margin-left: -12px;
">
  <p style="font-weight: 700;">Choose one of the options below: <span style="font-size:1.2em; color:red; font-weight:bold;">*</span></p>
  
    <div class="radio">
      <label><input type="radio" name="optradio" checked="">I want to give a (short) presentation</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">I want to give a poster presentation (including an abstract)</label>
    </div>
    <div class="radio disabled">
      <label><input type="radio" name="optradio">None of the above</label>
    </div>
  
</div>		

<div class="form-group" style="
    margin-top: 8px;
    margin-bottom: 25px;
">
<label class="control-label" for="dietary">
	Dietary restrictions? (in case yes, please specify)		
</label>
<div>
            <input class="form-control" type="text" name="dietary" id="dietary" size="30" maxlength="1000" value="" style="width:70%;" data-parsley-id="3699"><ul class="parsley-errors-list" id="parsley-id-3699"></ul>
</div>
</div> 		
		
    <left>
            <input type="submit" name="pageMainFormSubmit" id="pageMainFormSubmit" class="btn btn-primary" value="Submit" style="
    width: 70%;
">
    </left>

          
          
                    
          
          
        </form>
      </div>
    </div>
  



</body></html>