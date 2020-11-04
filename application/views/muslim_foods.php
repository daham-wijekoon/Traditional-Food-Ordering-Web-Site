<html lang="en-US">
  <head>
    <title>Muslim Recipes</title>
    <meta charset="utf-8">
    
    <script src="js/html5shiv.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
  <style type="text/css">


body{
  background-color: #000;
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
    filter: blur(5px);
}

.main {
    background-image: url("<?php echo base_url("image/29.jpg") ?>");
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
    position: relative;
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
.container{
  margin-top: 50px;
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
            Muslim Foods
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
    <img src="<?php echo base_url("image/im17.jpg") ?>" alt="Gulab Jamun" width="400" height="200">
  </a>
  <div class="desc">Gulab Jamun</div>
</div>
        
 
<div class="gallery" onclick="openTab('b2');">
  <a target="_blank">
    <img src="<?php echo base_url("image/im18.jpg") ?>" alt="Chicken Biriyani" width="400" height="200">
  </a>
  <div class="desc">Chicken Biriyani</div>
</div>
        
 

<div class="gallery" onclick="openTab('b3');">
  <a target="_blank" >
    <img src="<?php echo base_url("image/im19.jpg") ?>" alt="Watalappan" width="400" height="200">
  </a>
  <div class="desc">Watalappan</div>
</div>

<div class="gallery" onclick="openTab('b4')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/im20.jpg") ?>" alt="Boondi" width="400" height="200">
  </a>
  <div class="desc">Boondi</div>
</div>
        
<div class="gallery" onclick="openTab('b5')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/im21.jpg") ?>" alt="Dodol" width="400" height="200">
  </a>
  <div class="desc">Dodol</div>
</div>
        
<div class="gallery" onclick="openTab('b6')">
  <a target="_blank" >
    <img src="<?php echo base_url("image/im22.jpg") ?>" alt="Muscat" width="400" height="200">
  </a>
  <div class="desc">Muscat</div>
</div>

<div class="gallery" onclick="openTab('b7');">
  <a target="_blank">
    <img src="<?php echo base_url("image/im23.jpg") ?>" alt="Turkish Style Eggs" width="400" height="200">
  </a>
  <div class="desc">Turkish Style Eggs</div>
</div>



<div class="gallery" onclick="openTab('b8');">
  <a target="_blank">
    <img src="<?php echo base_url("image/im24.jpg") ?>" alt="Turkish Fish Stew" width="400" height="200">
  </a>
  <div class="desc">Turkish Fish Stew</div>
</div>

<div class="gallery" onclick="openTab('b9');">
  <a target="_blank">
    <img src="<?php echo base_url("image/im25.jpg") ?>" alt="Tandoori chicken biryani" width="400" height="180">
  </a>
  <div class="desc">Tandoori chicken biryani</div>
</div>

<div class="clearfix"></div> 

<div id="b1" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <h2>Gulab Jamun</h2>
  <b> Ingredients</b><br>
    
  <ul>
    <li>¾ cup (100 grams) milk powder, unsweetened &emsp;&emsp;&emsp;&emsp;&emsp;FOR SUGAR SYRUP:</li>
    <li>½ cup (60 grams) maida / plain flour&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2 cup sugar,2 cup water,2 cardamom</li>
    <li>½ tsp baking powder&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;¼ tsp saffron / kesar</li>
    <li>milk, for kneading&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1 tsp lemon juice</li>
    <li>kkan Flour 500goil&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1 tsp rose water</li>
    <li>ghee or oil, for frying</li>
  </ul>
  
  
    <b>Method</b>
    <p>
firstly, in a large bowl take ¾ cup milk powder, ½ cup maida and ½ tsp baking powder.
mix well, homemade gulab jamun mix is ready.
now add 2 tbsp ghee and mix well making the flour moist.
further, add milk as required start to combine.
combine well forming a soft dough. do not knead the dough.
cover and rest for 10 minutes.
meanwhile, prepare the sugar syrup by taking 2 cup sugar, 2 cup water, 2 cardamom and ¼ tsp saffron.
mix well and boil for 5 minutes or until the sugar syrup turns sticky. do not attain any string consistency.
turn off the flame and add 1 tsp lemon juice and 1 tsp rose water. lemon juice is added to prevent sugar syrup from crystallizing.
cover and keep the sugar syrup aside.
after 10 minutes or resting the dough, start to prepare small ball sized jamuns.
make sure there are no cracks in the jamun. if there are cracks then there are high chances for jamuns to break while frying.
deep fry in medium hot oil or ghee. frying in ghee gives good flavour to jamuns.
stir continuously and fry on low flame.
fry until the jamuns turn golden brown.
drain off and transfer the jamun into a hot sugar syrup.
cover and rest for 2 hours or until jamuns absorb the sugar syrup and doubles in size.
finally, enjoy gulab jamun with ice cream or as it is.
        </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p>
        <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/NH1yqSEpJLY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    
      
</div>

<div id="b2" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Chicken Biriyani</h2>
  <b> Ingredients</b><br>
     
  <ul>
    <li>300g basmati rice</li>
    <li>25g butter,85g raisins,850ml chicken stock</li>
    <li>1 large onion(finely sliced),1 bay leaf,3 cardamom pods,small cinnamon stick,1 tsp turmeric</li>
    <li>1 teaspoon salt,30g coriander, ½ chopped, ½ leaves picked and 2 tbsp toasted flaked almonds</li>
    <li>4 skinless chicken breasts, cut into large chunks</li>
    <li>4 tbsp curry paste (we used Patak's balti paste)</li>
  </ul>
    <b>Method</b>
    <p>
Soak 300g basmati rice in warm water, then wash in cold until the water runs clear.
Heat 25g butter in a saucepan and cook 1 finely sliced large onion with 1 bay leaf, 3 cardamom pods and 1 small cinnamon stick for 10 mins.<br>
Sprinkle in 1 tsp turmeric, then add 4 chicken breasts, cut into large chunks, and 4 tbsp curry paste. Cook until aromatic.
Stir the rice into the pan with 85g raisins, then pour over 850ml chicken stock.
Place a tight-fitting lid on the pan and bring to a hard boil, then lower the heat to a minimum and cook the rice for another 5 mins.<br>
Turn off the heat and leave for 10 mins. Stir well, mixing through 15g chopped coriander. To serve, scatter over the leaves of the remaining 15g coriander and 2 tbsp toasted almonds. 
    </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p>
    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/r8m5B4K6j8k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    
</div>
        
<div id="b3" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Watalappan</h2>
  <b> Ingredients</b><br>
     
  <ul>
        <li>400 ml kithul treacle</li>
        <li>1 tin of thick coconut milk (500 ml)</li>
        <li>5 eggs</li>
        <li>Grated Sadikka (nutmeg),Pinch of salt</li>
    
  </ul>
    <b>Method</b>
    <p>
First beat all the eggs and then add coconut milk, kithul treacle, grated sadikka and pinch of salt and beat well.<br> Prepare a pan with applying butter and pour the mixture to it.<br>
Cover the pan with aluminum foil and bake 45 minutes at 350 F.<br>
Take it from the oven and leave it for cool and serve.<br>
This quantity is good for serving 10 people.
    </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p>
    <div class="video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/12qJGtbswCY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
</div>
        
<div id="b4" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Boondi</h2>
  <b> Ingredients</b><br>
     1 1/2 cup gram flour (besan)

  <ul>
        <li>1 cup sugar</li>
        <li>2 pinches saffron</li>
        <li>1 1/2 cup water</li>
        <li>2 cup ghee</li>
  </ul>
    <b>Method</b>
    <p>
Combine the sugar and 1 1/2 cup of water in a broad non-stick pan, mix well and cook on a high flame for about 5-7 minutes or till the sugar syrup is of 1 thread consistency. Once sugar is dissolved completely and the syrup becomes a little sticky, put off the flame and keep aside.<br>
Sieve gram flour in a vessel and occasionally add water to it. Add saffron, soaked in 1 tablespoon of water. Make sure that the batter doesn't get too thin and no lumps are formed. Now heat ghee in a pan over medium flame, hold a perforated spoon a little above the hot ghee and pour some gram flour batter on the spoon. Allow small droplets to fall in the ghee by tapping the edge of the spoon lightly.
Stir and deep fry the boondis in the ghee gently and fry till crisp but not brown. Take out the boondi on a clean kitchen towel or paper towel to drain off the excess oil. Now put the boondi in the sugar syrup and keep it for 5 minutes before taking out from the syrup.
Chop the almonds using a knife and make a smooth powder of cardamom by grinding. Keep them aside in separate bowls. Take a wide plate and spread the boondis on it, garnish it by adding cardamom powder and chopped almonds and mix gently. (optional)
Allow to cool completely and loosen the boondi with finger till each droplet separates. Boondi can be eaten fresh, or can be stored in an airtight container to serve later.
    </p> <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p> 
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/vvxeDlnGbZo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div id="b5" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Dodol</h2>
  <b> Ingredients</b><br>

<ul>
<li>6 cardamom pods (seeds only)</li>                         
<li>2¼ cups thick full-fat coconut milk</li>
<li>9 oz. kithul jaggery , finely chopped</li>
<li>½ cup raw rice flour</li>
<li>1 oz cashews , roughly chopped </li>

    </ul>   
  
    <b>Method</b>
    <p>
Crush the cardamom seeds into a powder, and set aside.
Place the coconut milk, jaggery, and rice flour into a large, shallow pan (a kadai is ideal), and stir until the sugar has dissolved.<br>
Bring the mixture to the boil, over a medium heat, while continually stirring.
After 15 minutes or so, the mixture will be very thick. Stir in the cardamom and cashews.
Keep stirring, pushing the mixture away from the edges of the pan, toward the middle. After about 40-45 minutes, you’ll have a thick, glossy, jelly-like mixture, and the oil will start to separate, coating the pan. Start folding the edges in toward the middle.<br>
After 55 minutes or so, the oil will have separated enough for you to be able to remove it. This is where it’s useful to have another pair of hands, so they can remove the oil while you push the dodol out of the way.
Continue to keep folding and removing as much oil as possible for another 10-15 minutes, then turn out into a shallow baking tray, and set aside to cool.<br>
Once it’s cool, cut into squares, rectangles, or diamond shapes.
This kalu dodol will keep for a couple of weeks in an airtight container at room temperature.
    </p>   </p><p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">xyz@gmail.com</a>
        <p>Tel.: 0712148965</p>
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/3b16y-lpK_E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
    </div>
    
</div>
        
<div id="b6" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Muscat</h2>
  <b> Ingredients</b><br>
    
  <ul>
<li>8oz all purpose flour</li>
<li>4 cups water (for flour-water mixture)</li>
<li>1 can 'lite' coconut milk (13.5 oz size),1 can regular coconut milk (13.5 oz size)</li>
<li>4 oz liquid coconut oil (melt if using solid),3-5 tablespoons rose water</li>
<li>9 cups water (to thin down coconut milk),4 cups sugar,Food color,Ground cardamom Seeds</li>
  </ul>
    <b>Method</b>
    <p>
Mix about 1 cup out of the 4 cups water, with the flour to make a firm yet smooth ball of dough.For faster results, use slightly warm water.
Fully submerge the ball in what is left of the 4 cups water. Flatten the ball if needed. Let it remain undisturbed for 3-6 hours.
Rub the dough ball with the fingers in the same bowl of water to wash off the flour. The gluten will remain in a mass. Save the flour-water, and discard the rubbery gluten mass.
Strain the flour-water mixture using a fine-mesh strainer or muslin cloth. Discard any gluten residue in the strainer. Save the flour-water mixture.<br>
 Into a heavy-bottomed pan, add the flour-water mixture, sugar, all the coconut milk and the 9 cups water. 
Cook on medium-low heat stirring constantly. 
After 30 minutes add the oil. Keep Stirring.
Any time after 2 hours add the cashew nuts and ground cardamom seeds.
After cooking for almost 2 1/2 hours add the rose water, and food color 
Continue to cook while constantly stirring and scraping the bottom of the pan
The mass will become thick and hard to mix. It will come off the pan and feel like it is floating around as it follows the movement of the spoon when stiring.<br>
Pour into a deep cake pan, preferably 8" sqaure or a loaf pan that is not plastic. Leave undisturbed until set. 
It can be kept at room temperature for weeks, if indoor temperatures are regulated.
Store in the refrigerator to retain freshness if outside temperatures are extremely hot. 
    </p> <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p>
    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/uQeMOqimMUw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div id="b7" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Turkish Style Eggs</h2>
  <b> Ingredients</b><br>
    
  <ul>
    <li>3 cloves garlic</li>
    <li>peeled and minced</li>
    <li>1 ½ cups plain yogurt</li>
    <li>1 pinch salt</li>
    <li>1 ½ cups plain yogurt</li>
    <li>1 pinch salt</li>
  <li>1 quart water</li>
  <li>1 tablespoon vinegar</li>
  <li>1 teaspoon salt</li>
  <li>6 large eggs</li>
  <li>2 tablespoons butter</li>
  <li>1 teaspoon paprika</li>
  
  
  </ul>
  
  
    <b>Method</b>
    <p>
In a small bowl, combine the garlic, yogurt and pinch of salt; mix well.
In a large saucepan or stockpot, combine water, vinegar and 1 teaspoon salt; 
bring to a boil over high heat. When the water is boiling hard, reduce the heat and gently break the eggs into the water, spacing them well apart. 
Cook until the whites have set over the yolks, immediately remove the eggs with a slotted spoon and place on a serving dish.
Melt butter in a small skillet or saucepan. Stir in paprika. Pour yogurt sauce over eggs and top with paprika butter. 

        </p> <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p> 
        <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/watch?v=wpuLqnK8ywg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    
      
</div>





<div id="b8" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Turkish fish stew</h2>
  <b> Ingredients</b><br>
    
  <ul>
    <li>3 cups water</li>
    <li>1 ½ cups dry couscous</li>
    <li>2 tablespoons olive oil</li>
    <li>1 small white onion, chopped</li>
    <li>1 green bell pepper, chopped</li>
    <li>2 cloves garlic, minced</li>
  <li>1 cup marinated artichoke hearts, liquid reserved</li>
  <li>2 teaspoons capers, liquid reserved</li>
  <li>12 eaches small green olives</li>
  <li>1 (14.5 ounce) can chopped stewed tomatoes, drained</li>
  <li>2 tablespoons white wine</li>
  <li>1 tablespoon lemon juice</li>
  <li>1 cup water</li>
    <li>2 teaspoons sumac powder</li>
    <li>1 ½ teaspoons crushed red pepper flakes</li>
  <li>1 teaspoon dried basil</li>
   <li>1 teaspoon cumin</li>
    <li>1 teaspoon minced fresh ginger root</li>
    <li>1 pinch ground black pepper to taste</li>
  <li>1 pound tilapia fillets, cut into chunks</li>
  </ul>
  
  
    <b>Method</b>
    <p>

In a medium saucepan, bring 3 cups water to a boil, and stir in the couscous. Remove from heat, cover, and let sit 5 minutes.
Heat the olive oil in a skillet over medium heat, and saute the onion and green pepper about 5 minutes, until tender. Mix in the garlic,
 and continue to cook and stir about 2 minutes. Mix in the artichoke hearts with reserved liquid, capers with reserved liquid, and olives. Stir in the tomatoes, wine, lemon juice,
 and 1 cup water (or enough to attain desired thickness). Season with sumac powder, red pepper, basil, cumin, ginger, and pepper.
Bring the mixture to a boil, and mix in the fish chunks. Reduce heat, and simmer 10 minutes, or until the fish is easily flaked with a fork. Serve over couscous.

        </p> <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p> 
        <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/watch?v=UzgqO43UqNw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    
      
</div>





<div id="b9" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Tandoori chicken biryani</h2>
  <b> Ingredients</b><br>
    
  <ul>
  
  <li>Chicken - 1 kg to 1200 gms Marinate</li>
    <li>Curd - 3/4 cup</li>
     <li>Chilli powder - 2 tsp</li>
     <li>Turmeric powder - 1 tsp</li>
     <li>Tandoori masala - 6 to 7 tsp</li>
     <li>Ginger and garlic paste - 3 tbsp</li>
      <li>Mace and nutmeg powder (optional) - 1/2 tsp</li>
       <li>Saffron - a pinch</li>
      <li>Lemon juice - 3 tbsp</li>
      <li>Salt - as required Gravy</li>
      <li>Oil or ghee - 1/2 cup</li>
      <li>Bay leaf - 2</li>
      <li>Black cardamom - 2</li>
       <li>Cloves - 4</li>
       <li>Cinnamon sticks (1 inch size) - 3</li>
       <li>Black cumin seeds - 1 tsp</li>
       <li>Onion (sliced) - 5</li>
      <li>Ginger and garlic paste - 2 tbsp</li>
      <li>Tomatoes - 4</li>
      <li>Coriander leaves - 1 cup</li>
      <li>Mint - 1 cup</li>
       <li>Chilli powder - 2 tsp</li>
       <li>Turmeric powder - 1 tsp</li>
       <li>Green chillies (optional) - 5</li>
       <li>Curd - 1/2 cup</li>
       <li>Mace and nutmeg powder (optional) - a pinch</li>
       <li>Salt - as required Rice</li>
       <li>Basmati Rice - 3 cups</li>
        <li>Black cardamom - 1</li>
       <li>Black cumin seeds - 1/2 tsp</li>
       <li>Water - as required</li>
       <li>Salt - as required</li>
       <li>Green cardamom (optional) - 3</li>
       <li>Cloves (optional) - 3</li>
       <li>Layering</li>
       <li>Saffron or Colour - a pinch</li>
        <li>Mint - 1/2 cup</li>
       <li>Coriander leaves - 1/2 cup</li>
       <li>Mace and nutmeg powder - 2 pinches</li>
       <li>Fried onions - 1/4 cup</li>
       <li>Lemon juice - 3 tbsp</li>


  </ul>
  
  
    <b>Method</b>
    <p>

Marinate the chicken with curd, chilli powder, turmeric powder, tandoori masala and other ingredients. 
Use salt as per taste. Leave the chicken to marinate for about 4 hrs to overnight.
I have cooked tandoori chicken in 2 ways - one is in oven and other is in a grill pan (for those who do not have oven).
Preheat the oven to 220 degrees celcius. Cover the oven tray with aluminium foil and place the marinated chicken on the tray. Cook each side for about 10 mins or according to your oven and its temperature. Cook until the chicken is done.
If you need a good grill effect, you can grill it on a grill pan. Drizzle some oil on the grill pan and grill the chicken on both sides. You will get a char grilled effect. It will not take much time as the chicken is already cooked.
Place the chicken in a vessel and cook until all the moisture is absorbed. Cook the chicken without closing the lid.
When the chicken is cooked and all the moisture is absorbed, place the cooked chicken on a pre-heated grill pan with a few tsp of oil. Turn the chicken after a couple of minutes. Cook on a medium flame.
Drizzle a little oil half way through the cooking. Cook well on both sides until you get that glaze, shine and char grilled effect on the chicken.
Take a big utensil, add oil or ghee. When it gets hot, add onions and fry until it is soft and brown. It will take about 10 - 12 mins. You can close the lid and cook.
When the onions are cooked well, take 1/4 cup onions and keep it aside.
Now in the same vessel, add bay leaf and all the whole spices and stir for 1 min. Add ginger and garlic paste, tomatoes and stir well. Cook until the tomatoes are soft.
Add chilli powder and other remaining dry spices and stir for about 2 mins.
Add curd and mix well for 2 mins. Also add the remaining left over marinate and also some gravy, which is left from the tandoori chicken cooking.
Cook for a few minutes with the lid closed and until it gets to a gravy consistency and oil starts to leave on top.
Add mint, coriander leaves, salt and simmer for about 5 minutes.
Add the other ingredients with rice and water and boil. When it is 3/4th cooked, strain and keep it aside. If you can want you can rinse in cold water before keeping it aside to avoid the rice from becoming sticky. Do not stir the stir too much while boiling, otherwise the grains can break. Do not forget to add salt.
You need to cook the rice to 70 to 80 percent only.
Make sure there is enough rice to use with the gravy.
Put half the rice on the gravy. Spread it properly. Place tandoori chicken pieces. Put rice again and spread. Add fried onions, mint, coriander leaves, mace and javithri powder, saffron or colour, lemon juice and then at last all the tandoori chicken pieces.
Close the lid tightly and cook it on simmer for 20 to 25 mins or until the rice is fully cooked.
You will get a nice aroma from the biryani after it has cooked.
If the bottom of your vessel is thick, the rice will not burn. If your vessel has a thin bottom, you can avoid the burn by keeping a thick pan or tava below the vessel. After you switch the flame off, let it rest for sometime say 10 to 15 mins or can serve immediately.
You need to be careful while mixing. Mix slowly from one side only. Mix it from downwards, from sides, so that gravy and rice are mixed well. As soon as you open the lid you can see that the full flavour and aroma comes from the biryani.
This biryani is spicy and tastes good, It goes well with any raitha, brinjal curry or any curry you like.

        </p> <p><b>Contacts</b></p><label>Email: </label><a href="https://www.google.com/mail/">345@gmail.com</a>
        <p>Tel.: 0712000854</p> 
        <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/watch?v=q94pmAVO4ZQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    
      <div class="clearfix"></div>
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



<div class="container">
  <h2 style="color: #fff;">Reviews</h2>
  <hr>
  <?php if ($this->session->flashdata('msg')) {
      echo "<h3>".$this->session->flashdata('msg')."<h3>";
    }
    ?>
  <?php echo validation_errors(); ?>
  <?php echo form_open('Blog/InsertCommentMuslim'); ?>
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
      
        if ($viewCommentMuslim->num_rows()>0) {
          foreach ($viewCommentMuslim->result() as $row) {
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