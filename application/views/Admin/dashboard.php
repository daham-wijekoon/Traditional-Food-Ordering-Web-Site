<!DOCTYPE html>
<html>
<head>
	<title>Admin Portal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style type="text/css">
html{
  scroll-behavior: smooth;
}

body{
  background-image: url("<?php echo base_url("image/22.jpg"); ?>");
  background-size: cover;
  color: #fff;
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
	left: 1200px;
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
        <li><a href="<?php echo base_url("index.php/Home/register") ?>">Sign in</a></li>
        <li><a href="#main-footer">About us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('fname'). " " .$this->session->userdata('lname'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('index.php/Login/LogoutUser') ?>">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <h2>Orders</h2>
  <hr>
  <div class="table-responsive" style="padding: 10px; height: 700px; background: rgba(0,0,0,0.6);">
     <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Customer Email</th>
        <th>Food Name</th>
        <th>Description</th>
        <th>Date</th>

      </tr>
    <?php 
      if ($viewOrder->num_rows()>0) {

        foreach ($viewOrder->result() as $row) {
          ?>
            <tr>
              <td><?php echo $row->ID; ?></td>
              <td><?php echo $row->name; ?></td>
              <td><?php echo $row->food_name; ?></td>
              <td><?php echo $row->description; ?></td>
              <td><?php echo $row->email; ?></td>
              <td><?php echo $row->date; ?></td>
            </tr>
          
          <?php
        }
      }else{
        echo "string";
      }
    ?>
    </table>
  </div>
   
</div>
	
	<?php 
	if (!($this->session->userdata('loggedin'))) {
		redirect('Home/Login'); 
	}

	if ($this->session->flashdata('welcome')) {
		echo "<h3>".$this->session->flashdata('welcome')."</h3>";
	}

	
?>

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



