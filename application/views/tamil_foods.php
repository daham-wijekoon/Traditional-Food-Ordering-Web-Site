<html lang="en-US">
	<head>
		<title>Tamil Recipes</title>
		<meta charset="utf-8">
		
		<script src="js/html5shiv.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
  <style type="text/css">
    html{
  background-color: white;
}

body{
  background-color: black;
  
  width: 100%;
  font-family: arial, helvetica, sans-serif;
}



a{
  text-decoration:none;
  color: white;
}


#google_translate_element{
    position: relative;
    left: 5px;
    border-radius: 10px;     
}

/* content */
.bgimage{
    filter: blur(8px);
}

.main {
    background-image: url("<?php echo base_url("image/32.jpg") ?>");
    background-size: cover;
    height: 600px;
    width: 100%;
    position: relative;
}


.introduction{
  color: white;
  text-shadow: 2px 2px black;
  padding: 51px;
  margin-top: 40px;
  position:relative;
  width: 100%;
  text-align: center;
  font-size: 20px;
  background: rgba(0,0,0,0.6);
  
}


.clearfix:after {
  content: "";
  display: table;
  clear: both;
}



div.gallery {
  margin: 8.9px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
 
}

div.desc {
  padding-top: 20px;
  color: white;
  padding: 15px;
  text-align: center;
}
  
.containerTab {
  padding: 20px;
  height: 1000px;
  color: white;
}


/* Closable button inside the container tab */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}


 #searchbar{ 
     margin-top: 5%;
     margin-left: 35%; 
     position: relative;
     left: 0.5px;
     padding:16px; 
     border-radius: 10px;
      
   } 
 
   input[type=text] { 
      width: 30%; 
      *-webkit-transition: width 0.15s ease-in-out; 
      transition: width 0.15s ease-in-out;
   } 
 
.video{
    position: absolute;
    left: 300px;

}
.topic{
  position: relative;
  margin-bottom: 20px;
  padding-bottom: 20px;
  text-align: center;
  color: white;
  text-shadow: 2px 2px black;
  font-size: 40px;
  background: rgba(0,0,0,0.6);
    
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
            <li><a href="<?php echo base_url('index.php/Blog/muslim') ?>">Muslim</a></li>
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
		
		
        <div class="main">
            
            <!-- language-->
            <div id="google_translate_element"></div>

            <script>
                    function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'en'},
                        'google_translate_element');
                    }
            </script>
            
            <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
            </script>
            
         		
            <div class="introduction">
            
                Sri Lanka has a lot of secrets to be discovered and Sri Lankan food is one of them.<br> The tastes and the smells of Sri Lankan food is a truly satisfying experience and the unique blend of local spices and coconut milk<br> used in traditional culinary sets Sri Lankan cuisine apart from other traditional Asian cuisine.
            </div>

               <div class="topic">
            Tamil Foods
            </div>

            
            <!-- input tag -->
    <input id="searchbar" onkeyup="search_food()" type="text"
        name="search" placeholder="Search food.."> 
            
    
            
            <script>
                function search_food() { 
    let input = document.getElementById('searchbar').value 
    input=input.toLowerCase(); 
    let x = document.getElementsByClassName('gallery'); 
      
    for (i = 0; i < x.length; i++) {  
        if (!x[i].innerHTML.toLowerCase().includes(input)) { 
            x[i].style.display="none"; 
        } 
        else { 
            x[i].style.display="list-item";                  
        } 
    } 
                } </script>
            
        
        </div>
		
		
<div class="gallery" onclick="openTab('b1');">
  <a target="_blank" >
    <img src="<?php echo base_url("image/f1.jpg") ?>" alt="Mixed Veggie Idli" width="400" height="200">
  </a>
  <div class="desc">Mixed Veggie Idli</div>
</div>
        
 
<div class="gallery" onclick="openTab('b2');">
  <a target="_blank">
    <img src="<?php echo base_url("image/f2.jpg") ?>" alt="Kundu Thosai" width="400" height="200">
  </a>
  <div class="desc">Kundu Thosai</div>
</div>
        
 

<div class="gallery" onclick="openTab('b3');">
  <a target="_blank" >
    <img src="<?php echo base_url("image/f3.jpg") ?>" alt="Kanji" width="400" height="200">
  </a>
  <div class="desc">Kanji</div>
</div>

<div class="gallery" onclick="openTab('b4')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/f5.jpg") ?>" alt="Kesari" width="400" height="200">
  </a>
  <div class="desc">Kesari</div>
</div>
        
<div class="gallery" onclick="openTab('b5')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/f4.jpg") ?>" alt="Paani Panaattu" width="400" height="200">
  </a>
  <div class="desc">Paani Panaattu</div>
</div>
        
<div class="gallery" onclick="openTab('b6')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/f6.jpg") ?>" alt="Coconut paayaasam" width="400" height="200">
  </a>
  <div class="desc">Coconut paayaasam</div>
</div>

<div class="gallery" onclick="openTab('b7')">
  <a target="_blank">
    <img src="<?php echo base_url("image/B1.jpg") ?>" alt="Coconut Laddoos" width="400" height="200">
  </a>
  <div class="desc">Coconut Laddoos</div>
</div>
        
<div class="gallery" onclick="openTab('b8')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/B2.jpg") ?>" alt="A Syrupy Malpua" width="400" height="200">
  </a>
  <div class="desc">A Syrupy Malpua</div>
</div>
        
<div class="gallery" onclick="openTab('b9')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/A1.jpg") ?>" alt="Arachuvitta Sambar(Pumpkin Sambar)" width="400" height="160">
  </a>
  <div class="desc">Arachuvitta Sambar(Pumpkin Sambar)</div>
</div>
        
<div class="gallery" onclick="openTab('b10')">
  <a target="_blank">
    <img src="<?php echo base_url("image/A2.jpg") ?>" alt="Vengaya Vatha Kozhambu(Onion Sambar)" width="400" height="160">
  </a>
  <div class="desc">Vengaya Vatha Kozhambu(Onion Sambar)</div>
</div>
        
<div class="gallery" onclick="openTab('b11')">
  <a target="_blank">
    <img src="<?php echo base_url("image/B3.jpg") ?>" alt="The Signature Puranpoli" width="400" height="180">
  </a>
  <div class="desc">The Signature Puranpoli</div>
</div>
        
<div class="gallery" onclick="openTab('b12')">
  <a target="_blank">
    <img src="<?php echo base_url("image/A3.jpg") ?>" alt="Adai Dosai" width="400" height="200">
  </a>
  <div class="desc">Adai Dosai</div>
</div>

<div class="gallery" onclick="openTab('b13');">
  <a target="_blank" >
    <img src="<?php echo base_url("image/A4.jpg") ?>" alt="Thengai Sadam" width="400" height="200">
  </a>
  <div class="desc">Thengai Sadam</div>
</div>
        
 
<div class="gallery" onclick="openTab('b14');">
  <a target="_blank">
    <img src="<?php echo base_url("image/A5.jpg") ?>" alt="Uppu Kozhakattai" width="400" height="200">
  </a>
  <div class="desc">Uppu Kozhakattai</div>
</div>
        
<div class="gallery" onclick="openTab('b15');">
  <a target="_blank" >
    <img src="<?php echo base_url("image/A6.jpg") ?>" alt="Paruppu Poli" width="400" height="200">
  </a>
  <div class="desc">Paruppu Poli</div>
</div>

<div class="gallery" onclick="openTab('b16')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/B4.jpg") ?>" alt="The Delectable Rasmalai" width="400" height="180">
  </a>
  <div class="desc">The Delectable Rasmalai</div>
</div>
        
<div class="gallery" onclick="openTab('b17')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/A7.jpg") ?>" alt="Senai Masiyal (Elephant Yam Stew)" width="400" height="180">
  </a>
  <div class="desc">Senai Masiyal (Elephant Yam Stew)</div>
</div>
        
<div class="gallery" onclick="openTab('b18')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/A8.jpg") ?>" alt="Manga Pachadi" width="400" height="200">
  </a>
  <div class="desc">Manga Pachadi</div>
</div>

<div class="gallery" onclick="openTab('b19')">
  <a target="_blank">
    <img src="<?php echo base_url("image/A9.jpg") ?>" alt="Paruppu Usili" width="400" height="200">
  </a>
  <div class="desc">Paruppu Usili</div>
</div>

<div class="clearfix"></div>
        
<div id="b1" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <h2>Mixed Veggie Idli</h2>
  <b> Ingredients</b><br>
     
  <ul>
    <li>Urad dal (Black gram) – ½ cup</li>
<li>Basmathi or samba rice – ½ cup</li>
<li>White raw rice – ¼ cup</li>
<li>Carrot – ¼ cup, grated</li>
<li>Leeks – ¼ cup, grated</li>
<li>Onion – ¼ cup, grated</li>
<li>Green chillies – 2, finely chopped</li>
<li>Fennel seeds – ½ tsp</li>
<li>Curry leaves, finely chopped</li>
<li>Coriander leaves, finely chopped</li>
<li>Baking powder – 1 tsp (optional)</li>
<li>Salt, to taste</li>
<li>Oil</li>

  </ul>
    <b>Method</b>
    <p>
Soak the urad dal, samba or basmathi and white raw rice separately for a minimum of 6 hours.  Overnight soaking is better.<br>
Grind the dal and rice together with a little water to a thick batter consistency, much thicker than pancake batter.<br>
Cover and keep for 6 hours.<br>
After six hours, heat a little oil in a pan and lightly sauté the fennel seeds, chopped onions, curry leaves for a few seconds before adding the carrots, leeks and chillies and fry lightly. Remove from heat and cool.<br>
Stir in the sautéed vegetable mixture and the chopped coriander leaves into the batter mix. Add salt, to taste, baking powder (optional) and a little water so that the batter is easy to pick with a scooping spoon.<br>
Pour the batter onto the idli molds on an idli steamer and steam for about 10 mins.<br>
This batter mix makes 16 idlis.<br>
Serve hot with sambal.
        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0712369854</p>
        <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/WuT8C-KvpmQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    
      
</div>

<div id="b2" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Kundu Thosai</h2>
  <b> Ingredients</b><br>
     
  <ul>
    <li>Black gram/ Urad dal/ Ulunthu – ½ cup</li>
   <li> Raw rice – 1 cup</li>
   <li>Fenugreek seeds – ¼ tsp</li> 
    <li>Pepper – ¼ tsp</li>
    <li>Cumin seeds – ¼ tsp</li>
   <li>Turmeric powder – ¼ tsp</li> 
    <li>Wheat flour – 2 tbsp</li>
    <li>Oil, as required</li>
  </ul>
    <b>Method</b>
    <p>
Soak ulunthu and rice for about 3 to 4 hours.<br>
Grind the soaked ulunthu and rice together with the fenugreek seeds, pepper, cumin seeds and turmeric powder.<br>
Mix the wheat flour in the blended mixture. The batter should be thick.<br>
Let the batter rest for about 3 to 4 hours.<br>
Place the special ‘kundu thosai’ pan on the stove on low heat.<br>
Pour a little oil in each of the 8 holes of the pan. Then, pour a tablespoon of batter in each.<br>
Cook the thosai for about 1 ½ to 2 mins each side. Flip to the other side so that both sides are browned.<br>
Serve hot with the coconut-tamarind sambal.<br>


    </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0712369854</p>
    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/EqBUtNPZPXo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    
</div>

<div id="b3" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Kanji</h2>
  <b> Ingredients</b><br>
     
  <ul>
   <li> Red raw rice – 2 tbsp</li>
    <li>Milk (Coconut or non-fat)  – 1 cup</li>
   <li> Water – 1 cup</li>
    <li>Salt, to taste</li>
    <li>Pepper – ¼ tsp (optional)</li>
   <li>Garlic – 2 or 3 cloves, chopped (optional)</li> 
   <li>Sugar – 1 tsp (optional)</li> 
    
  </ul>
    <b>Method</b>
    <p>
Cook 2 tbsp of red raw rice in 1 cup of water for about 10 – 15 mins.<br>
Once the water dries up, add the milk to the cooked rice along with a pinch of salt. The optional ingredients such as pepper and garlic can be added now, if required. Cook for about 5 mins.<br>
Transfer to the serving bowls. Add a dash of sugar, if you like. Serve warm.
</p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkow@gmail.com</a>
        <p>Tel.: 0712369854</p>

<div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/qWyUhMFeUeA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
</div>
        
<div id="b4" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Kesari</h2>
  <b> Ingredients</b><br>
     
  <ul>
       <li>Semolina – ½ cup, lightly roasted</li>
        <li>Water – 1 cup</li>
        <li>Sugar – ¼ cup</li>
        <li>Kesari powder – pinch</li>
        <li>Rose essence – drop or Vanilla essence – 1 tsp and pinch of crushed cardamom</li>
        <li>Vegetable margarine – 1 ½ tbsp</li>
  </ul>
    <b>Method</b>
    <p>
In a saucepan, boil a cup of water and the sugar.<br>
When the water starts boiling, add the kesari powder and either the vanilla essence and pinch of crushed cardamom or drop of rose essence.<br>
Stir continuously, while adding the semolina.<br>
When the mixture starts to thicken, add the margarine while continuing to stir.<br>
Remove the pan from the stove and transfer the kesari to a plate.<br>
Level the kesari on the plate and allow it to cool for at least 10 mins before slicing and serving.
    </p> <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">food@gmail.com</a>
        <p>Tel.: 0712369854</p>
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/ywa9K37EzRw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
        
</div>
        
<div id="b5" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Paani Panaattu</h2>
  <b> Ingredients</b><br>
     
<ul>  
<li>Paani – ½ cup</li>
<li>Panaattu – 1 cup</li>
<li>Coconut chips – 2 tbsp, roasted</li>
<li>Roasted rice – 1 tbsp</li>
<li>Crushed chillies – 1 tsp</li>
<li>Cumin powder – ½ tsp</li>
    </ul>       
  
    <b>Method</b>
    <p>
Chop up the panaattu into small pieces.<br>
Heat the paani in a saucepan over low heat for about 3 mins.<br>
Add the crushed chillies and cumin powder and stir well for about 2 mins.<br>
Add the coconut chips and roasted rice to the saucepan for about 1 min.<br>
Then, add the panaattu pieces and stir for about 2 mins.<br>
Stir well until it thickens and remove from stove, to allow the ‘paani panaattu’ to cool before serving.<br> When making in larger quantities, transfer to an earthen pot or air-tight jar.

    </p>  <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowioon@gmail.com</a>
        <p>Tel.: 0715569854</p>
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/81UX4-tsNcE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
</div>
        
<div id="b6" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Coconut paayaasam</h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Pearl sago/ Savvarasi – ¼ cup</li>
<li>Cardamom – 2, crushed</li>
<li>Chickpea – 1 tbsp, fried and split</li>
<li>Cashewnuts – 2 or 3, chopped</li>
<li>milk – ½ cup</li> 
<li>Sugar – 1 tbsp or adjust per taste</li>
<li>Raisins – 1 tbsp</li>
<li>Kesari powder – pinch</li>
  </ul>
    <b>Method</b>
    <p>
Heat 1 cup of water in a pan, adding 2 crushed cardamoms, for about 5 mins.<br>
Add the pearl sago and let the boiling continue for a couple of minutes.<br>
When the sago is half-cooked, add the split, fried chickpea and cashewnuts and continue cooking for another couple of minutes.<br>
Once the sago is well cooked and the mixture thickens, add the coconut milk and the kesari powder.<br>
In a few minutes, add the sugar and mix well and let the ‘paayaasam’ simmer for another couple of minutes.<br>
Add the raisins just before removing the pan from the stove.<br>
Stir and serve either hot or chilled.
    </p>  <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0772369854</p>
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Q9slneJy-OE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
        
 <div id="b7" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Coconut Laddoos</h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Dry fruits, mixed</li>
<li>Green cardamom powder, 1 tsp</li>
<li>Ghee, 2 tsp</li>
<li>Milk, 1.5 cups</li>
<li>Coconut, grated, 3 cups</li>
  </ul>
  
    <b>Method</b>    
    <p>
Start by taking a pan and adding some ghee to it.<br>
Heat it up and follow that with some milk and grated coconut.<br>
Mix this together properly and allow it to heat well.<br>
Finally, add the cardamom powder and keep mixing and stirring it once in a while and let it cook on low heat.<br>
As the combination starts to thicken, keep stirring it constantly.<br>
This will separate the fat from the mix on the sides.<br>
Once this happens, turn off the stove and pour the mixture into a bowl and allow it to cool down.<br>
Later, begin rolling laddoos from that mixture as small or large as desired.<br>
Spread the dry fruits and more grated coconut in a plate, and roll these laddoos in it.<br>
These can then be stored in a refrigerator for later consumption, too.
        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">53swijekoon@gmail.com</a>
        <p>Tel.: 0712367774</p>      
     <div class="video">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/wHNXSzKIe2Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>
</div>
        
<div id="b8" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>A Syrupy Malpua</h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Pistachios, 2 tbsp<li>
<li>Kesar</li>
<li>Sugar, 250g</li>
<li>Baking powder, ½ tsp</li>
<li>Milk, 0.5L</li>
<li>Rava, 100g<li>
<li>Khoya, 50g</li>
<li>Water, 0.5L</li>
<li>Ghee, 1 cup</li>
<li>Green cardamom powder, 1 tsp</li>
<li>Fennel seeds, 1 tsp</li>
<li>Maida, 200g</li>
  </ul>

    <b>Method</b>    
    <p>
Start by preparing the sugar syrup first..<br>
Take a pan with some water and heat it.<br>
Follow up with sugar and stir it to dissolve completely.<br>
Add a few teaspoons of milk and stir again.<br>
A thick layer will rise on top which should be scooped off with a spoon and turn off the stove once the syrup thickens<br>
In another bowl, prepare the batter by mixting together milk, cardamom powder, fennel seeds, baking powder, khoya, rava and maida.<br>
Make sure the batter is liquid enough to be poured easily. Allow it to sit for a while.<br>
Now add some ghee to the pan and heat it on a low flame.<br>
Pour a large spoonful of the mixture on the pan and spread it circularly.<br>
Let it cook until it gets a brownish shade.<br>
Once cooked, take it out and place it in the sugar syrup for 5-8 minutes, allowing it to soak it well.<br>
Make more malpuas with the remaining batter and soak them in the syrup one after the other.<br>
At the end, sprinkle chopped pista over it and gorge heartily.
        </p> <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">123@gmail.com</a>
        <p>Tel.: 0712125854</p>    
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/nU8UekQ8QP8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
        
<div id="b9" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Arachuvitta Sambar (Pumpkin Sambar) </h2>
  <b> Ingredients</b><br>
     
  <ul><b>Masala: </b> 
<li>A teaspoon of coconut oil</li>
<li>Dried red chillies- 4</li>
<li>Chana dal- 1 tablespoon</li>
<li>Fenugreek seeds- ¼ tablespoon</li>
<li>Coriander seeds- ½ tablespoon</li>
<li>Desiccated coconut- ¼ cup</li>
<li>Asafoetida– a pinch</li>
  </ul>
  <ul><b>Tempering: </b>
<li>Cooking oil- 1 tablespoon</li>
<li>Mustard- ½ spoon</li>
<li>Curry leaves– 6-10</li>
<li>Red chilli- 1</li>
<li>Asafoetida- a pinch</li>
  </ul> 
    <b>Method</b>                
    <p>
Extract tamarind pulp using hot water.<br>
Pressure cook the toor dal for 5 whistles.<br>
Heat oil in a pan and roast the ingredients for the masala until they give out a strong aroma.<br>
Grind into a fine paste and set aside.<br>
Stir fry the ash gourd for 2 minutes. Add the tamarind pulp and bring to a boil along with salt.<br>
Now add the masala paste and bring to a boil once again.<br>
Simmer until the ash gourd softens.<br>
Next, mash the cooked toor dal and add it. Check for consistency and add water if required.<br>
Simmer until the sambar bubbles up.<br>
Prepare the tempering now.<br>
Pour this over the sambar, and it is ready to eat with some hot rice and ghee.
        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0712369854</p>      
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/kxR1e4UDfy4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
        
        
        
<div id="b10" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2> Vengaya Vatha Kozhambu (Onion Sambar) </h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Onion- 1 (sliced)</li>
<li>Sesame oil- 1 teaspoon</li>
<li>Mustard seeds-  1 teaspoon</li>
<li>Fenugreek seeds- 1 teaspoon</li>
<li>Toor dal- 2 teaspoon</li>
<li>Curry leaves- a few</li>
<li>Sambar powder- 3 tablespoon</li>
<li>Asafoetida- a pinch</li>
<li>Salt to taste</li>
<li>Tamarind pieces- a few</li>
<li>Jaggery- a small piece</li>
  </ul>           
  
    <b>Method</b>  
    <p>
Extract tamarind pulp using tamarind and hot water.<br>
Heat oil and add mustard, fenugreek, toor dal, and curry leaves. When the mustard splutters, add the asafoetida and cook till there’s a strong aroma.<br>
Now add the onion and fry until it is soft.<br>
Now add the tamarind extract and sambar powder and allow it to boil. The oil should separate and float on top.<br>
Now add jaggery to this mix and stir.<br>
Simmer for a few minutes and switch off the flame.<br>
Serve with hot rice and ghee.
        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0712369854</p>      
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/R16qzc77XZQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
        
<div id="b11" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The Signature Puranpoli</h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Jaiphal powder, ½ tsp</li>
<li>Oil</li>
<li>Water, ½ cup</li>
<li>Ghee, ½ cup</li>
<li>Chana dal, 1.5 cups</li>
<li>Rice flour, 2 tsp</li>
<li>Milk, 4 tbsp</li>
<li>Salt</li>
<li>Sugar, 1.5 cups</li>
<li>Flour, 1 cup</li>
<li>Green cardamoms, 3</li>
  </ul>

    <b>Method</b>    
    <p>

Take a bowl and add water and flour to it, mixing it well to form a dough.<br>
Allow it to sit for an hour.<br>
Cook the chana dal with some water in a cooker on full flame.<br>
When done, strain away the water.<br>
Place this dal in a separate bowl and let it cool down.<br>
Add the dal to a pan and cook it on medium heat with some ghee and sugar.<br>
Stir it constantly until it turns into a sticky soft mixture.<br>
Keep this mixture aside.<br>
Take the dough and knead it again with oil, water and salt one by one.<br>
Separately, run the mixer with the chana dal mix, jaiphal powder and crunched cardamoms.<br>
Add milk if needed.<br>
Once both mixtures are ready, take a little dough and a larger portion of the chana dal mix together.<br>
Roll two rotis from the dough and cover one of them with the dal mix with some gap around the edge.<br>
Place the other roti on top and press the edges to seal it up.<br>
Roll it again to spread it consistently.<br>
Repeat the same with the remaining dough and dal mix.<br>
Finally, take a pan and heat ghee on it.<br>
Place the puranpoli on it and press it while it is being cooked.<br>
Feel free to add more ghee so that it turns an even brown colour without sticking to the pan.<br>
Serve hot.

        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p>     
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/fnVCkGkyjcA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div> 
        
<div id="b12" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
 <h2>Adai Dosai (Lentils Dosa) </h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Rice- 1 cup</li>
<li>Toor dal– ½ cup</li>
<li>Chana dal– ½ cup</li>
<li>Moong dal– 2 tablespoons</li>
<li>Chana dal, 1.5 cups</li>
<li>Urad dal– 2 tablespoons</li>
<li>Salt as required</li>
<li>Dried red chillies- 2 numbers</li>
<li>Asafoetida- a pinch</li>
<li>Curry leaves- a few</li>
<li>Oil- for cooking</li>
  </ul>

    <b>Method</b>    
    <p>

Wash the lentils and rice twice and soak in water just covering the entire mass.<br>
Add the red chillies while soaking too.<br>
After an hour, put the lentils and rice along with water into a blender.<br>
Add salt and asafoetida. Blend into a coarse and thick paste.<br>
Add water to get the consistency of a thick batter.<br>
Heat a flat tawa and temper it well.<br>
Add a spoonful of batter and spread in concentric circular movements.<br>
Add a few drops of oil and allow it to cook.<br>Turn over and cook the other side.<br>
If you prefer crispy adai, then leave it to simmer for a little longer.<br>
Serve with chutney or ghee.

        </p> <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0712369854</p>
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/TURbxKNg6Hg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>  

<div id="b13" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Thengai Sadam (Coconut Rice)</h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Rice- 2 cups</li>
<li>cooked Salt as required</li>
<li>Coconut oil- 1 tablespoon</li>
<li>Mustard seeds- ½ spoon</li>
<li>Red chilli- 2</li>
<li>Urad dal– ½ spoon</li>
<li>Cashew or peanuts- 2 tablespoons (Broken)</li>
<li>Curry leaves- a few</li>
<li>Green chilli- 2, slit</li>
<li>Asafoetida- a pinch</li>
<li>Freshly grated coconut- ½ cup</li>
  </ul>

    <b>Method</b>  
    <p>

Pressure cook the rice with salt and set aside.<br>
In a kadhai, heat coconut oil and add mustard.<br>
Once they splutter, add red chillies and stir.<br>
Now add the cashews and urad dal and wait till it becomes slightly brown.<br>
Add green chillies, curry leaves, and asafoetida.<br>
Add the grated coconut and stir once.<br>
Mix in the cooked rice and check if it requires more salt.<br>
Serve hot with tomato chutney or curry and papad. 

        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0712369854</p>    
        <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/B3Yc5Hgi5oY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    
      
</div>

<div id="b14" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Uppu Kozhakattai (Salty Flour Dumpling)</h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Rice flour- 1 cup</li>
<li>Water- 2 cups</li>
<li>Freshly grated coconut- 3 tablespoons</li>
<li>Green chillies- 2 chopped</li>
<li>Mustard seeds- 1 teaspoon</li>
<li>Curry leaves- a few</li>
<li>Urad dal– 1 tablespoon</li>
<li>Bengal gram- 1 teaspoon</li>
<li>Salt to taste</li>
  </ul>
         
    <b>Method</b>    
    <p>

In a kadhai, heat oil and add the dal and mustard seeds.<br>
Once the dal turns aromatic, add curry leaves and green chillies and stir.<br>
Add water and salt to this and bring the water to a boil.<br>
Add grated coconut and rice flour and stir to remove any lumps.<br>
Let the mixture cool down once it is well cooked.<br>
After it cools, grease your palms and take a small ball of the mix and shape it into an oblong puff.<br>
Steam for 7 minutes using an idli plate or steamer.<br>
Allow it to sit for an hour.

        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0712369854</p>    
    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/_nLTlYaH__w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    
</div>       

<div id="b15" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Paruppu Poli (Sweet Flour Pancake)</h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Refined Flour- 2 cups</li>
<li>Turmeric– 1 teaspoon</li>
<li>Salt- a pinch</li>
<li>Oil- 1 teaspoon</li>
<li>Ghee- 1 tablespoon</li>

  </ul>
<ul><b>Stuffing :</b>
<li>Chana dal– 1 cup</li>
<li>Jaggery- ¼ cup</li>
<li>Cardamom- 2 pounded</li>
<li>Ghee- 1 teaspoon </li>
   
    <b>Method</b>    
    <p>

Take the flour, turmeric, and salt in a mixing bowl; add water and knead into a soft dough.<br>
Add oil as required to make it soft and smooth.<br>
Cover the dough and let it rest for 1-2 hours.<br>
Now dry roast the dal and soak for about one hour.<br>
Pressure cook for a few whistles until it is well done.<br> 
Cool and mash thoroughly.<br>
Heat ghee in a kadhai and add the dal, cardamom and jaggery.<br>
Cook on a slow flame until the jaggery melts and blends with the dal.<br>
Roll the dough with stuffing like you would make a paratha.<br>
Use a cling film or butter paper to roll on to avoid the poli sticking to the surface.<br>
Put the rolled poli on a tawa and cook both sides until slightly brown.<br>
Use ghee while cooking.<br>
Serve warm.<br>
Note: Kneading and letting the dough rest well is key to making the poli soft. 

        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0712369854</p>   
    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/0TvJj2gfDfI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div> 
    
</div>
        
<div id="b16" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>The Delectable Rasmalai</h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Maida, 1 tsp</li>
<li>Pista, ½ tsp</li>
<li>Kesar</li>
<li>Paneer, 50g</li>
<li>Water</li>
<li>Black cardamom powder, ¼ tsp</li>
<li>Almonds, ½ tsp</li>
<li>Sugar, 6 tbsp</li>
<li>Milk, 0.5L</li>
   
    <b>Method</b>    
    <p>

Begin by crumbling the paneer in a bowl and mixing it with the maida.<br>
Knead this together to form a dough and roll balls from it, patting them flat at the end.<br>
In a pan, add some water and heat it on full flame.<br>
Follow up with sugar and allow the water to boil until it completely dissolves.<br>
Turn off the stove and add the paneer balls to it.<br>
Cover the pan and let it sit aside for a couple of hours.<br>
Boil milk in a separate large pan until it reduces the volume by half.<br>
Add some sugar until it dissolves and turn off the flame.<br>
Put in the kesar and cardamom powder and mix it all together.<br>
With both the items ready, pick out the paneer balls and squeeze gently to drain excessive syrup.<br>
Put them in the milk mix and sprinkle with pista and almonds.<br>
Place this entire setup in the refrigerator and consume when it has chilled down properly.


        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0712369854</p>   
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/JrcHdKPsqK4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
        
</div>
        
<div id="b17" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <h2>Senai Masiyal (Elephant Yam Stew)</h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Senai (Elephant yam)- 250 grams</Li>
<li>Toor dal– 3 tablespoons</li>
<i>Tamarind- a small piece</li>
<li>Oil for seasoning</li>
<li>Mustard seeds for tempering</li>
<li>Asafoetida- a pinch</li>
<li>Green chilli- 1</li>
<li>Ginger- ½ inch piece</li>
<li>Curry leaves- a few</li>
<li>Tamarind pulp </li>
  </ul>
         
    <b>Method</b>    
    <p>

Peel and rinse the yam properly.<br> 
Chop into small cubes.<br>
Use a layer of oil on your hands before you begin because yam can cause skin irritation.<br>
Soak the tamarind in hot water and extract the pulp.<br>
Pressure cook the toor dal for 3-5 whistles.<br>
Mash it well once done.<br>
Pressure cook the yam too either in the same cooker or separately.<br>
Mash the yam.<br>
Heat oil in a kadhai and let the mustard splutter.<br>
Add the asafoetida, chillies, ginger, and curry leaves and sauté for a minute.<br>
Add the mashed dal and yam and stir.<br>
Now add the tamarind extract and bring to a boil.<br>
Check for salt and adjust consistency of water as required.<br>
Once cooked, serve with rice. 

        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0712369854</p>   
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/4TeqylTcmDM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
</div>
        
<div id="b18" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2> Manga Pachadi (Raw Mango Stew) </h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Raw mango- 2</li>
<li>Tamarind water- ¼ cup</li>
<li>Jaggery- 1 tablespoon</li>
<li>Turmeric powder- ¼ spoon</li>
<li>Sambar powder- ½ spoon</li>
<li>Salt- ½ spoon</li>
</ul>
<ul><b>Tempering:</b>  
<li>Mustard- ½ teaspoon</li>
<li>Asafoetida- a pinch</li>
<li>Curry leaves- a few</li>
<li>Dried red Chilli- 2</li>
<li>Oil for cooking</li>
  </ul>
         
    <b>Method</b>    
    <p>

Boil mango cubes in tamarind water and jaggery.<br>
Add turmeric and let it simmer till the mango softens.<br>
Add salt and sambar powder and stir well.<br>
Once the fluid thickens, turn off the flame and let it rest.<br>
Prepare the tempering using the ingredients listed and pour over the cooked pachadi.<br>
Serve as a side dish.<br> 

        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0712369854</p>      
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/3TG-5H6wcAM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div> 

 <div id="b19" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Beans Paruppu Usili (Beans and Dal Curry)</h2>
  <b> Ingredients</b><br>
     
  <ul>
<li>Green beans- 2 cups, chopped</li>
<li>Turmeric- ½ teaspoon</li>
<li>Salt to taste</li>
<li>Toor dal– ¼ cup, soaked for an hour</li>
<li>Red chillies- 2</li>
<li>Asafoetida- a pinch</li>
<li>Mustard for tempering Curry leaves</li>
  </ul>
         
    <b>Method</b>    
    <p>

Cook beans by boiling in water with salt and turmeric.<br>
Grind the soaked dal with red chillies, salt, and asafoetida and steam the paste.<br>
Crumble once cooled. Heat oil and make the tempering with mustard and curry leaves.<br>
Add the crumbled dal and beans together and stir over a low flame.<br>
Serve as a side dish for rice with rasam or sambar.

        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">rkowijekoon@gmail.com</a>
        <p>Tel.: 0712369854</p>        
     <div class="video">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/TYdpvuTOofU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>
</div>

        
 
        

    
<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>
        
<div class="container" style="margin-top: 80px;">
  <h2 style="color: #fff;">Reviews</h2>
  <hr>
  <?php if ($this->session->flashdata('msg')) {
      echo "<h3>".$this->session->flashdata('msg')."<h3>";
    }
    ?>
  <?php echo validation_errors(); ?>
  <?php echo form_open('Blog/InsertCommentTamil'); ?>
    <div class="form-group">
      <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
      <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5" ></textarea>
    </div>
    <div class="form-group">
      <input type="hidden" name="comment_id" id="comment_id" value="0">
      <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>

    <hr>
      
      <?php 
      
        if ($viewCommentTamil->num_rows()>0) {
          foreach ($viewCommentTamil->result() as $row) {
            ?>
              <div class="panel panel-default">
                <div class="panel panel-heading" style="font-size: 15px;">By <b><?php echo $row->comment_sender_name; ?></b> on <i><?php echo $row->date; ?></i></div>
                <div class="panel-body" style="font-size: 15px;">
                  <?php echo $row->comment; ?>
                </div>
                
              </div>
            
            <?php
          }
        }
      ?>
      
    
  <?php echo form_close(); ?>
  <span id="comment_message"></span>
  <br/>
  
</div>
       

        

		
	</body>
  <script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>

<script type="text/javascript">
  $(document).on('click','.reply',function(){
    var comment_id=$(this).attr("id");
    $('#comment_id').val(comment_id);
    $('#comment_name').focus();
  });
</script>