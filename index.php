<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<?php
    // form isseting
    
    if ( isset($_POST["add"])){
         $name =$_POST['name'];
         $email =$_POST ['email'];
         $cell =$_POST['cell'];
         $uname =$_POST['uname'];
        
    }
    
//    Form Validation
    
    if (empty($name)||empty($email)||empty($cell)||empty($uname)) {
      
        $mesg = '<p class= "alert alert-danger">All fields are required!<button class="close" data-dismiss="alert">&times;</button></p>';  
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $mesg = '<p class= "alert alert-danger">Invaid Email Address!<button class="close" data-dismiss="alert">&times;</button></p>'; 
    }
    
    else{
       $mesg = '<p class= "alert alert-success">All Set</p>'; 
    }
    
    
    
    
    ?>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
				<?php
                 if (isset($mesg)){
                  echo $mesg;   
                 }
                
                ?>
				<form action="" method="POST" enctype="multipart/form-data" >
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="email">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Gender</label><br>
						<input name="gender" class="" type="radio" id="male"><label for="male">Male</label>
						<input name="gender" class="" type="radio" id="female"><label for="female">Female</label>
					</div>
					<div class="form-group">
						<label for="">Shift</label>
						<select class="form-control" name="" id="">
						    <option value=""> - Select - </option>
						    <option value="">Day shift</option>
                            <option value="">Evening Shift</option>
                            
                            
						</select>
					</div>
					
					<div class="form-group">
						<label for="">Location</label>
						<select class="form-control" name="" id="">
						    <option value=""> - Select - </option>
						    <option value="">Dhaka</option>
                            <option value="">Barisal</option>
                            <option value="">Khulna</option>
                            <option value="">Chittagong</option>
                            <option value="">Rajshahi</option>
                            <option value="">Rongpur</option>
                            <option value="">Sylhet</option>
                            <option value="">Mymenshing</option>
                            
						</select>
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo" class="form-control-file" type="file">
					</div>
					<div class="form-group">
						<input name="add" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>
    <br>
    <br>
    <br>
    <br>







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>