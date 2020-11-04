<html lang="en-US">
	<head>
		<title>Sinhala Recipes</title>
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
    background-image: url("<?php echo base_url("image/20.jpg") ?>");
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
  height: 200px;
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
            Sinhala Foods
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
    <img src="<?php echo base_url("image/im1.jpg") ?>" alt="Helapa" width="400" height="400">
  </a>
  <div class="desc">Helapa</div>
</div>
        
 
<div class="gallery" onclick="openTab('b2');">
  <a target="_blank">
    <img src="<?php echo base_url("image/im2.jpg") ?>" alt="Pani Walalu" width="400" height="400">
  </a>
  <div class="desc">Pani Walalu</div>
</div>
        
 

<div class="gallery" onclick="openTab('b3');">
  <a target="_blank" >
    <img src="<?php echo base_url("image/im3.jpg") ?>" alt="Pittu" width="400" height="400">
  </a>
  <div class="desc">Pittu</div>
</div>

<div class="gallery" onclick="openTab('b4')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/im4.jpg") ?>" alt="Milk Rice" width="400" height="400">
  </a>
  <div class="desc">Milk Rice</div>
</div>
        
<div class="gallery" onclick="openTab('b5')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/im5.jpg") ?>" alt="Polos" width="400" height="400">
  </a>
  <div class="desc">Polos</div>
</div>
        
<div class="gallery" onclick="openTab('b6')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/im6.jpg") ?>" alt="Lunu Dehi" width="400" height="400">
  </a>
  <div class="desc">Lunu Dehi</div>
</div>

<div class="gallery" onclick="openTab('b7')">
  <a target="_blank">
    <img src="<?php echo base_url("image/im7.jpg") ?>" alt="Kalu Pol Maluwa" width="400" height="400">
  </a>
  <div class="desc">Kalu Pol Maluwa</div>
</div>
        
<div class="gallery" onclick="openTab('b8')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/im8.jpg") ?>" alt="Hath Maluwa" width="400" height="400">
  </a>
  <div class="desc">Hath Maluwa</div>
</div>
        
<div class="gallery" onclick="openTab('b9')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/im9.jpg") ?>" alt="Nelum Ala" width="400" height="400">
  </a>
  <div class="desc">Nelum Ala</div>
</div>
        
<div class="gallery" onclick="openTab('b10')">
  <a target="_blank">
    <img src="<?php echo base_url("image/im11.jpg") ?>" alt="Semolina" width="400" height="400">
  </a>
  <div class="desc">Semolina</div>
</div>
        
<div class="gallery" onclick="openTab('b11')">
  <a target="_blank">
    <img src="<?php echo base_url("image/19.jpg") ?>" alt="Semolina" width="400" height="400">
  </a>
  <div class="desc">Coconut Rotti</div>
</div>
        
<div class="gallery" onclick="openTab('b12')">
  <a target="_blank">
    <img src="<?php echo base_url("image/im15.jpg") ?>" alt="Semolina" width="400" height="400">
  </a>
  <div class="desc">Kokis</div>
</div>
        
<div class="clearfix"></div> 
        
<div id="b1" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Helapa</h2>
  <b> Ingredients</b><br>
     
	<ul>
		<li>Coconut Treacle 1 cup</li>
		<li>Sugar 1/2 cup</li>
		<li>Desiccated Coconut 2 cups</li>
        <li>Water 1/2 cup</li>
        <li>Kurakkan Flour 500g</li>
        <li>Salt 1/2 tsp</li>
        <li>About 15 kenda leaves</li>
	</ul>
    <b>Method</b>
    <p>
Add Coconut treacle, sugar, coconut and water to a pan and cook for 8-10 minutes to make pani pol.<br>
Remove from heat when it is wet (don’t cook until its sticky).<br>
Add kurakkan flour and salt.<br> Mix well and make a paste.<br>
Take washed kenda leaf and spread kurakkan paste on the leaf, cover the paste from the other half of the leaf and steam for 5 minutes.<br>
        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000554</p>
        <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/UvsDANQM9m8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    
      
</div>

<div id="b2" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Pani Walalu</h2>
  <b> Ingredients</b><br>
     
	<ul>
		<li>2 cups Urad Dal (Undu) washed and black skin removed</li>
		<li>1 cup rice flour</li>
		<li>2.5 cups coconut milk</li>
        <li>1 teaspoon salt</li>
        <li>3 -4 cups good quality Kithul treacle</li>
        <li>1 cup water</li>
	</ul>
    <b>Method</b>
    <p>
Cut a 1/2cm diameter circular hole in a clean muslin cloth and sew the margins of the hole.<br>
Soak urad dhaal in water overnight and drain the water. Grind it to a thick paste using a blender.<br>
Mix the paste with rice flour and add 1 cup of thick coconut milk. Add water/flour until the batter is not too thick or too watery. It should have the consistency of a well mashed potato. Add a salt to taste.<br>
Heat the oil in a large frying pan in medium heat. Using the hole in the cloth as a nozzle squeeze the batter to the oil in circular motions to make a coiled pattern. Fry until golden brown.<br>
Meanwhile heat the treacle until small bubbles can be seen erupting out of the liquid. Do not overheat the treacle. Dip the coils in hot treacle after draining the oil and allow it to soak for a few minutes.<br>
Take out the pani walalu coils and store in a pot filled with treacle for up to a week.<br>
    </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">777@gmail.com</a>
        <p>Tel.: 0777000854</p>
    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/KLuIFYTB2Oc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    
</div>

<div id="b3" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Pittu</h2>
  <b> Ingredients</b><br>
     
	<ul>
        <li>2 cups rice flour (red or white)</li>
        <li>2 cups flour</li>
        <li>2 cups shredded coconut (or 1 1/2 cups desiccated coconut soaked in 3/4 cup of water)</li>
        <li>Salt to taste</li>
		
	</ul>
    <b>Method</b>
    <p>
Steam the wheat flour (I now do this in the microwave. 
Just put the flour in a microwave safe bowl and heat for a minute. <br>
Check to see if the flour has clumped together, if not put in for another minute, continue till it has clumped (Take care not to burn it).<br>
Next mix all ingredients in a large bowl and roll with the thumb to make small granules. 
Add water little by little.<br>
Or<br>
Put the ingredients into a food processor and pulse adding water little by little to achieve the same consistency.
Take care not to make it too wet. If so add a little bit of rice flour.<br>
Fill the pipe of the Pittu maker and steam till the steam comes out of the lid for 3-5 minutes. Un-mold and serve hot with Lunu miris and salted and heated coconut milk.
    </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">abc@gmail.com</a>
        <p>Tel.: 0712000111</p>
    
</div>
        
<div id="b4" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Milk Rice</h2>
  <b> Ingredients</b><br>
     
	<ul>
        <li>4 cups of white rice</li>
        <li>Cream of 1 coconut (or one 13 oz can)</li>
        <li>salt to taste</li>
	</ul>
    <b>Method</b>
    <p>
Clean and wash the rice. Put the rice in a pan, stick in the index finger on surface of rice and fill water up to slightly above the 2nd joint of the index finger.<br> Cover and cook the rice under low heat.<br>
When the rice is almost done, mix the salt with the coconut milk and add to the rice stir and cook for a few more minutes.<br>
Serve the hot rice on to a platter and flatten it using flat spoon or spatula. Cut it into squares and serve with Seeni sambol, cutta sambol or juggery.
    </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">xyz@gmail.com</a>
        <p>Tel.: 0712148965</p>
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Mb8rFSF__A4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
        
</div>
        
<div id="b5" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Polos</h2>
  <b> Ingredients</b><br>
     
<ul>
<li>3 cans of Young Green Jack fruit</li>                         
<li>2 tsp garlic, 2 tsp ginger,1 onion, chopped</li>
<li>1 sprig of curry leaves (optional)</li>
<li>1-2 tsp chillie powder, 1 tsp turmeric powder, 2-3 tsp curry powder </li>
<li>3-4 cardamoms,3-4 cloves, 1 inch piece of cinnamo, 2-3 pieces of goraka,1-2 green chillies</li>
<li>1 can of coconut milk</li>
<li>salt to taste</li>
    </ul>   
	
    <b>Method</b>
    <p>
Fry the onions, green chillies, ginger, garlic and curry leaves in about 1 tbsp of oil, till golden brown. Next add all the spices, fry for a minute for so till fragrant.
Now add the rest of ingredients, except coconut milk, stir to coat. Add salt.<br>
Transfer the mixture to a slow cooker, add coconut milk. Stir and cook on low heat for at least 6 hours. The curry would turn a dark brown color when done. (I usually let it cook over night)
Serve hot.<br>
You can cook this also in a pressure cooker. Cook for about 20-25 minutes at steady pressure (Since cooking times, vary depending on the type of cooker you have, use your judgment here)<br>
If you want to cook on the stove, cook under low heat in a heavy bottom pan.

    </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">asd@gmail.com</a>
        <p>Tel.: 0712666854</p>  
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/81UX4-tsNcE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
</div>
        
<div id="b6" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Lunu Dehi</h2>
  <b> Ingredients</b><br>
     
	<ul>
<li>15 limes (yellow/ripe), 2 teaspoons mild pepper powder, 1 teaspoon ground kochchi miris (spicy red pepper)</li>
<li>6 white peppercorns , crushed</li>
<li>4 whole cloves (optional)</li>
<li>4 pods cardamom , crushed (optional)</li>
<li>1 teaspoon sugar, White vinegar, 3 quarts water, Kosher salt</li>
	</ul>
    <b>Method</b>
    <p>
Choose non-stained, round and yellow limes. In a large pot, boil 3 quarts of water.
Immerse 10 limes in this boiling water for 30 seconds (no more) and drain. Using a cloth, wipe the limes thoroughly to dry them completely.
Make two crossed cuts on one end of each of the 10 limes. Open these limes delicately by hand and stuff them with a large amount of kosher salt. Press gently to close them as much as possible.
Place the limes stuffed with salt in a shallow dish. Do not put them on top of each other but flat on the whole surface of the dish.
Squeeze the juice from the remaining 5 limes and pour into a deep dish. Add two pinches of kosher salt.
Place both dishes under the sun or near a source of heat to dry.
The juice of the limes only requires a small drying cycle (about 48 hours). After that, pour it into an airtight jar and keep it in a cool, dry place.
The salted limes are dried when the skins become light brown. The longer the drying time, the better.
Gently remove the damaged salt around the dried limes. Quarter them. Place the cut limes in a large glass jar.
Add ground mild pepper, ground kochchi miris (pepper), white peppercorns and sugar. Add cloves and cardamom (optional).
Stir the reserved dried lime juice well and pour over the dried limes.<br>
Pour vinegar into the jar until all the limes are submerged. Shake the jar lightly until all the ingredients are well mixed.
Close the jar tightly and place it in a cool, dry place for several weeks. The more it matures, the better.

    </p> <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p>
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/0HP2UD4-Qes" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
        
        
 <div id="b7" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Kalu Pol Maluwa </h2>
  <b> Ingredients</b><br>
     
	<ul>
<li>Jack beans (Kos Ata) - 50</li> 
<li>Scraped Coconut - 2 tablespoon</li>
<li>Raw rice, Maldive Fish - 1 tablespoon</li>
<li>Thick Coconut milk - 2 cups</li>
<li>Light Coconut Milk - 1 cup</li>
<li>Roasted curry powder - 1.5 tablespoon</li>
<li>Roasted chilies powder - 1 teaspoon</li> 
<li>Pepper Powder, Kaha- 1/2 teaspoon</li>
<li>Red Onions - 10</li> 
<li>Garlics - 5</li> 
<li>Cinnamon, Rampe, Curry leaves</li>
<li>Green Chilies - 4</li> 
<li>Tomato - 1/2</li> 
<li>Salt</li>

	</ul>
    <b>Method</b>
    <p>
Wash the Jack seeds and boil without removing the skin, then cut them in half without separating.<br>  
Fry the Coconut and raw rice till gets brown in colour and grind.<br>
Mix all other ingredients and put 1 cup of light coconut milk and cook.<br>
Add the 2 cups of thick coconut milk in between and cook.<br>
Taste will be good if you cook in a clay pot.

    </p>  <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p>
     <div class="video">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/70OgcUsSEF0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>
</div>
        
<div id="b8" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Hath Maluwa</h2>
  <b> Ingredients</b><br>
     
	<ul>
<li>Potatoes</li>
<li>Leek</li>
<li>Carrots</li>
<li>Chickpeas</li>
<li>Green Beans</li>
<li>Cashews</li>
<li>Eggplant</li>
<li>Ginger, Garlic, Onion</li>
<li>Curry Leaves, Cinnamon, Green Chilies</li>
<li>Fenugreek Seeds</li>
<li>Curry Powder, Pepper, Chili Powder, Turmeric Powder</li>
<li>Salt</li>
<li>Oil for tempering</li>
<li>Cumin and Mustard seeds</li>

	</ul>
    <b>Method</b>
    <p>
Soak or add boiling water to cashews.
Soak the chick peas overnight or use canned chick peas.
In to a pot add the cashews and potatoes. (If you are using soaked chick peas add cashew and chick peas first and later potatoes)<br>
Add spices and onion, garlic ginger, curry leaves ,cinnamon leaving half of the onions ,garlic ginger, and curry leaves.
Add enough water and cook on low heat until its half cooked.
Then add carrots and cook several minutes.<br>
Add green beans and egg plants.
Then add leeks and chick peas next.
After a minute add coconut milk and cook until it boils and thicken the gravy.<br>
Then in another pot add 1 tbsp oil and add cumin and mustard seeds.
When they star spluttering add onion, garlic,, ginger ,and curry leaves.
Brown them and add the curry in to it.
The curry is ready to serve.

    </p> <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p>
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/EAVElALxK7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
        
<div id="b9" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Nelum Ala</h2>
  <b> Ingredients</b><br>
     
	<ul>
        <li>Nelum Ala 250 g</li>
        <li>Onion (small) 1</li>
        <li>Green chilli 1</li>
        <li>Small red onions 3</li>
        <li>Garlic 2 cloves</li>
        <li>Salt 1/3 tsp</li>
        <li>Chilli powder 1/2 tsp</li>
        <li>Curry powder 1 tsp</li>
        <li>Turmeric powder 1/4 tsp</li>
        <li>Maldive fish 1 tsp</li>
        <li>Mustard seeds 1/4 tsp</li>
        <li>Coconut milk 2 cups</li>
        <li>Curry leaves and rampa</li>
        <li>Oil 2 tsp</li>

	</ul>
    <b>Method</b>
    <p>
Clean and cut nelum ala into thin slices.<br>
Place nelum ala in a clay pot and add onion, curry leaves and rampa (save half for when tempering), green chilli, curry powder, chilli powder, turmeric powder and salt. Mix coconut milk and cook until nelum ala is tender.<br>
When nelum ala is cooked well, heat a pan or remove nelum ala from the clay pot and use that, add oil, red onions, curry leaves and rampa, garlic, maldive fish and mustard seeds.<br>
When onions are golden brown, add cooked nelum ala, mix well and take it off the heat.

    </p> <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p> 
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/ujU99hML3Mk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
        
        
        
<div id="b10" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Semolina</h2>
  <b> Ingredients</b><br>
     
	<ul>
        <li>1 lb Semolina (Wheatlets)</li> 
        <li>2 lbs Sugar</li>
        <li>1/2 tsp powdered Cardamom</li>
        <li>1/4 tsp powdered Cloves</li>
        <li>50 Raw Cashews, chopped</li>

	</ul>
    <b>Method</b>
    <p>
Roast the Semolina and set aside.  Prepare a cutting board by 
sprinkling some roasted semolina and have it ready.<br>  
In a soucepan, add 1 cup of water to the sugar, and heat it.<br>  
When the syrup thickens and starts to form a crust like layer on the sides of the soucepan, add the semolina and the spices.<br> 
Mix it thoroughly.<br>  
Add the chopped cashews and mix thoroughly.  
Remove from heat before the mix thickens and transfer onto the cutting board.<br>  
Flatten and form into a block (about 1-1/2" thick).  Cut into pieces.

    </p>   </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">xyz@gmail.com</a>
        <p>Tel.: 0712148965</p>
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/e0js7pOWt3U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
        
<div id="b11" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Coconut Rotti</h2>
  <b> Ingredients</b><br>
     
	<ul>
        <li>Whole wheat flour – 1 cup, All purpose flour / maida – 1 cup</li> 
        <li>Coconut – 3/4 cup (grated)</li>
        <li>Green chilies – 5</li>
        <li>Onion – 1 medium (finely chopped)</li>
        <li>Butter – 2 TBSP</li>
        <li>Salt – to taste</li>
        <li>Coconut oil – to cook the flatbread</li>
        <li>Water – as needed to make a dough</li>

	</ul>
    <b>Method</b>
    <p>
In a small mixer, grind the grated coconut and the green chilies until the chilies are well ground. If using frozen coconut, thaw the coconut before using.
I used my food processor to make the dough. you could also knead the dough using your hands.<br>
Place both the flours, ground coconut / green chilies mixture, salt to taste and butter in the food processor bowl.
Run the food processor to combine all the ingredients. Now add the chopped onion and combine. Slowly add just enough water to make a stiff dough. Be careful when adding water as the coconut and onion has enough moisture.
Rest the dough for at least 30 minutes.<br>
Heat a tawa / griddle in medium low heat.
Divide the dough into 12 equal pieces. Dust the dough with flour and then roll it into slightly thick circles.
Cook the roti in the hot pan. Use some coconut oil to brush the rotis and cook until the rotis are golden brown on both sides.
Remove and keep it warm until ready to serve.
    </p>  </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">xyz@gmail.com</a>
        <p>Tel.: 0712148965</p> 
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/n-hnf6mNSN4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div> 
        
<div id="b12" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Kokis</h2>
  <b> Ingredients</b><br>
     
	<ul>
        <li>1 Egg</li> 
        <li>250 g Rice flour</li>
        <li>1/2 ts Turmeric</li>
        <li>1 Litre oil</li>
        <li>1/4 ts Salt</li>
        
	</ul>
    <b>Method</b>
    <p>
Beat the egg. Sieve flour into a bowl and add the egg, turmeric, salt and sufficient coconut milk to make a thick batter. Heat the oil and when bubbling hold the kokis mould in the oil until the mould is hot. Carefully dip the mould into the batter, taking care not to submerge it completely.

Remove from the batter and place in the hot oil where the batter should separate from the mould but still retain its
shape as it deep fries.

If the batter sticks it may need to be eased from the mould with a wooden toothpick. Repeat the process until all the batter is used.
    </p> </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">xyz@gmail.com</a>
        <p>Tel.: 0712148965</p>  
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/d8VVglTvbSw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
        

<div class="container" id="container">
  <h2 style="color: #fff;">Reviews</h2>
  <hr>
  <?php if ($this->session->flashdata('msg')) {
      echo "<h3>".$this->session->flashdata('msg')."<h3>";
    }
    ?>
  <?php echo validation_errors(); ?>
  <?php echo form_open('Blog/InsertComment'); ?>
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
      
        if ($viewComment->num_rows()>0) {
          foreach ($viewComment->result() as $row) {
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