<!DOCTYPE html>
<html>
<head>
	<title>Taste the Sri Lankan Cuisine</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style type="text/css">

html{
	scroll-behavior: smooth;
}

body{
	background-color: #000;
	color: #fff;
	font-family:Arial, Helvetica,sans-serif;
	font-size: 18px;
	line-height: 1.6em;
	padding: 0;
	margin: 0;
}


#nav{
	font-size: 15px;
}
	
.container{
	width: 100%;
	height: 570px;
	
	position: relative;
	margin: auto;
	overflow: hidden;
}

.container h1{
	padding-top: 30px;
	padding-left: 430px;
	display: flex;
	position: absolute;
	width: 100%;
	height: 230px;
	background: rgba(0,0,0,0.6);
	left: 0%;
	top: 30%;
	color: #fff;
	font-size: 90px;
}

.container h3{
	padding-top: 30px;
	position: absolute;
	left: 31.5%;
	top: 50%;
	color: #fff;
	font-family: Edwardian Script ITC;
	font-size: 40px;
	letter-spacing: 6px;
}

#topic{
	
}

section{
	position: relative;
	width: 100%; 
	padding: 50px;
	color: #ddd;
}

section h1{
	font-family: Algerian;
	font-size: 50px;
	color: #ddd;
}

.circle{
	position: relative; 
	overflow: hidden; 
	width: 400px; 
	height: 400px;
	float: right;
	border-radius: 50%; 
	margin: 20px; 
	shape-outside: circle();
}

.circle img{
	position: absolute; 
	top: 0; 
	left: 0; 
	object-fit: contain;
}

.loginbox{
	width: 320px;
	height: 380px;
	background: #ccc;
	top: 1400px;
	left: 25%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	padding: 70px 30px;

}

h2{
	text-align: center;
	margin-top: 0px;
	font-family: Elephant;
	color:  #042B4D;;
	font-weight: 300;
	
}

.loginbox p{
	margin:0;
	padding: 0;
	font-weight: bold;
	color: #23237A;
}

.loginbox input{
	width: 100%;
	margin-bottom: 20px;

}

.loginbox input[type="email"],input[type="password"]{
	border:none;
	border-bottom: 1px solid #000;
	background:transparent;
	outline: none;
	height: 20px;
	color: #000;
	font-size: 16px;

}

.loginbox input[type="submit"]{
	border:none;
	outline: none;
	height: 40px;
	background:#183586;
	color: #000;
	font-size: 20px;
	border-radius: 18px;
	font-weight:bold;

	
}

.loginbox a{
	position: absolute;
	top: 255px;
	color: #648CF7;
}


.key{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}

.loginbox input[type="submit"]:hover{
	cursor: pointer;
	background:#042B4D;	
}

.loginbox a:hover{
	cursor: pointer;
	color:#183586;
	
}

.footer{
	position: absolute;
	width: 100%;
	top: 1600px;
	background:#ddd;
	color: #000;
	text-align: center;
	padding: 20px;
	margin-top: 40px;
	font-size: 17px;
}

#main-footer h2{
	color: #000;
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
	left: 640%;
	text-align: right;
	
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
        <li class="active"><a href="<?php echo base_url("index.php/Home/index") ?>">Home <span class="sr-only">(current)</span></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="#login">Login</a></li>
        <li><a href="#main-footer">About us</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	

	<div class="container">
		

		<div class="row">
			
				<div id="my-slider" class="carousel slide" data-ride="carousel">

					<ol class="carousel-indicators">
						<li data-target="#my-slider" data-slide-to="0" class="active"></li>
						<li data-target="#my-slider" data-slide-to="1"></li>
						<li data-target="#my-slider" data-slide-to="2"></li>
						<li data-target="#my-slider" data-slide-to="3"></li>
					</ol>

					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="<?php echo base_url('image/28.jpg'); ?>" alt="">
						</div>

						<div class="item">
							<img src="<?php echo base_url('image/9.jpg'); ?>" alt="">
						</div>

						<div class="item">
							<img src="<?php echo base_url('image/21.jpg'); ?>" alt="">
						</div>

						<div class="item">
							<img src="<?php echo base_url('image/31.jpg'); ?>" alt="">
						</div>

						<div class="item">
							<img src="<?php echo base_url('image/27.jpg'); ?>" alt="">
						</div>
					</div>

					<a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>

					<a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			
		</div>

		<div class="topic" id="topic">
			<h1>අපේ බොජුන්</h1>
			<h3>Taste the Sri Lankan Cousine</h3>
		</div>
		
	</div>

	<section>
		<div class="circle">
			<img src="<?php echo base_url('image/18.jpg'); ?>">
		</div>
		<div>
		<h1>Welcome</h1>
		<hr>
		<p>Sri Lankan cuisine has been shaped by many historical, cultural and other factors. As a tropical island with an abundance of vegetation, the cuisine is known for a its use of a vast array of herbs, spices, fish, vegetables, rices, and fruits. The cuisine is highly centered around many varieties of rice, as well as coconut which is an ubiquitous plant throughout the country. Seafood also plays a significant role in the cuisine, be it fresh fish or preserved fish. </p>

		<p>As a country that was a hub in the historic oceanic silk road, contact with foreign traders brought new food items and cultural influences in addition to the local traditions of the country's ethnic groups, all of which have helped shape Sri Lankan cuisine. Similarities can be seen to the cuisines of other South Asian neighbouring regions (particularly to the state of Kerala in Southern India), as well as to some South East Asian cuisines. Sri Lanka was historically famous for its cinnamon. The true cinnamon tree, or Cinnamomum verum used to be botanically named Cinnamomum zeylanicum to reflect its Sri Lankan origins.  </p>
		</div>
	</section>
	
	
	


	<div class ="loginbox" id="login">
		<img src = "<?php echo base_url('image/17.jpg'); ?>" class ="key">
		<h2>Log in here</h2>
		<?php echo validation_errors(); ?>
		<?php echo form_open('Login/LoginUser'); ?>
			<p>User Name</p>
			<input type="email" name="email" placeholder= "Enter Email">
			<p>Password</p>
			<input type="password" name="pword" placeholder= "Enter Password"><br><br>
			
			<input type="submit" name="submit" value="LOGIN">

		<?php form_close(); ?>
	</div>



	<div class="footer">
		<footer id="main-footer">
			<h2>අපේ බොජුන්</h2>
			<p>Wayamba Universty of Srilanka,Kuliyapitiya</p>

			 <div class="social-list">
			 	<div id="left">
			 	<p>Follow us on:
	              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
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