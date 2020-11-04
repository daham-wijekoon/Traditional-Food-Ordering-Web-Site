<html lang="en-US">
  <head>
    <title>Orders</title>
    <meta charset="utf-8">
    
    <script src="js/html5shiv.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        
  <style type="text/css">
 

body{  
  background-image: url("<?php echo base_url("image/26.jpg") ?>");
  background-size: cover;
  width: 100%;
  font-family: arial, helvetica, sans-serif;
  color: #fff;
}

a{
  text-decoration:none;
  color: white;
}


#google_translate_element{
    position: absolute;
    top: 45px;
    left: 5px;
    border-radius: 10px;     
}

#main {
    height: 300px;
    width: 1200px;
    opacity: 1;
}



.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

div.desc {
  padding-top: 20px;
  color: white;
  padding: 15px;
  text-align: center;
}


   input[type=text] { 

      width: 30%; 
      *-webkit-transition: width 0.15s ease-in-out; 
      transition: width 0.15s ease-in-out;
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
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/Blog/index") ?>">Sinhala</a></li>
            <li><a href="<?php echo base_url("index.php/Blog/tamil") ?>">Tamil</a></li>
            <li><a href="<?php echo base_url("index.php/Blog/muslim") ?>">Muslim</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('index.php/Order/index') ?>">ORDER</a></li>
            
          </ul>
        </li>
        <li><a href="<?php echo base_url("index.php/Home/index") ?>#login">Login</a></li>
        <li><a href="<?php echo base_url("index.php/Home/index") ?>#main-footer">About us</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <h2>Order Your Food</h2>
  <div id="flashdata">
   <?php if ($this->session->flashdata('msg')) {
      echo "<h6>".$this->session->flashdata('msg')."</h6>";
    }
  ?>
    
  </div>
  <hr>
  <?php echo validation_errors(); ?>
    <?php echo form_open('Order/InsertOrder'); ?>
   
 
  <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon">Name</div>
        <input name="name" type="text" class="form-control" id="exampleInputAmount" placeholder="Enter Your Name" style="width: 30%;">
       
      </div>

        <select name="food_name" class="form-control form-control-lg" id="food_name" style="margin-top: 30px; width: 30%;">
          <option value="" disabled selected>-Select Food-</option>
          <?php 
            require_once 'php/config.php';
            $sql="SELECT * FROM details ORDER BY food_name";
            $result=mysqli_query($conn,$sql);
            while ($row=mysqli_fetch_array($result)) {  
          ?>
          <option value="<?= $row['food_name']; ?>"><?= $row['food_name']; ?></option>
        <?php } ?>
        </select>
    <label id="description" style="margin-top: 20px;">Email:</label>
    <input type="text" name="email" type="text" class="form-control" id="exampleInputAmount" placeholder="Enter Email Address">

    <label id="description" style="margin-top: 20px;">Description:</label>
    <textarea name="description" class="form-control" placeholder="Remarks" rows="5" style="width: 30%;"></textarea>

    <input id="submit" class="btn btn-primary btn-lg active" type="submit" value="Order" style="margin-top: 30px;">
    <input id="reset" class="btn btn-primary btn-lg active" type="reset" value="Reset" style="margin-top: 30px; margin-left: 20px;">
    
    </div>
 
<?php echo form_close(); ?>
</div>

</body>

<script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>