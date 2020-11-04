<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">

html{
	scroll-behavior: smooth;
}

body{
	background: url("<?php echo base_url('image/21.jpg'); ?>");
	background-size: cover;
	background-repeat: no-repeat;
}
	.container{
    
    background-repeat: no-repeat;
    background-size: cover;
    width: 70%;
    height: 700px;
    left: 40%;

  }

.form-group input{
	width: 50%;
	
}

.form-group label{
	color: #FF0000;
	
}

.footer{
	position: absolute;
	width: 100%;
	top: 700px;
	background:#333;
	color: #fff;
	text-align: center;
	padding: 20px;
	margin-top: 40px;
	font-size: 20px;
}

#main-footer h2{
	color: #fff;
}

.social-list i{
	color: white;
}

.social-list{
	position: absolute;
	top: 20px;
}

.social-list p{
	padding: 0px;
	margin: 0px;
}

#left{
	text-align: left;
}

#right{
	position: absolute;
	top: 5px;
	left: 530%;
	text-align: right;

}
.container button:hover{
	background-color: #FFD996;
}


</style>
</head>
<body>
	<nav class="navbar navbar-inverse" style="margin-bottom: 0;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url("index.php/Blog/index") ?>">Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url("index.php/Home/index") ?>">Home <span class="sr-only">(current)</span></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="<?php echo base_url("index.php/Home/register") ?>">Sign in</a></li>
        <li><a href="<?php echo base_url("index.php/Home/index") ?>#login">Login</a></li>
        <li><a href="#main-footer">About us</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">
		<h2 style="color: #FFD996 "><b>Sign in</b></h2>
		<hr>
		<?php if ($this->session->flashdata('msg')) {
			echo "<h3>".$this->session->flashdata('msg')."<h3>";
		}
		?>
		<?php echo validation_errors(); ?>
		<?php echo form_open('Register/RegisterUser'); ?>
			<div class="form-group">
		    <label for="exampleInputEmail1">First Name:</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" name="fname">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Last Name:</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name" name="lname">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Age:</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Age" name="age">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Contact No.:</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Contact Info." name="contact_no">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address:</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password:</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="pword">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Confirm Password:</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password Again" name="cword">
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Check me out
		    </label>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		<?php echo form_close(); ?>
	</div>


	<div class="footer">
	<footer id="main-footer">
		<h2>අපේ බොජුන්</h2>
		<p>Wayamba Universty of Srilanka,Kuliyapitiya</p>

		 <div class="social-list">
		 	<div id="left">
		 	<p>Follow us on:
              <a href="#"><a href="#" class="fa fa-twitter"></a>
              
            <br>
            Contact us:0777348520</p></div>
            <div id="right">
            <p>Email:apebojun@gmail.com<br>
            Fax:0372224503</p>
        </div>
        
        </div>
		<p>Copyright &copy; 2019 Ape Bojun</p>
	</footer>
</div>

</body>
<script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>