<?php
  require_once __DIR__ . './../login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="Logo.css">
    <title>BOOKSFORME</title>
</head>

<body> 
    <nav>
        <div class="logo">
            <h4>BOOKSFORME</h4>
        </div>
        <ul class="nav">
            <li>
                <a href="home.php">HOME</a>
            </li>
            <li>
                <a href="booklist.php">ALLBOOKS</a>
            </li>
              <li>
                <a href="readlater.php">MY BOOKLISTS</a>
            </li>
            <li>
                  <a href="logout.php">Log Out</a>
                  
            <li>

               <div class="search-container">
                <form action="searching.php" method="POST">
                  <input type="text" name="query"/>
                  <button><input type="submit" name="searchbutton" value="Search" /></button>
               </form>
              </div>
            </li>

        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    
   <div class="galleryContainer">
    <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
           
            <img src="1.jpg">
            <p class="captionText">HARRY POTTER</p>
        </div>
        <div class="imageHolder">
            <img src="2.jpg">
            <p class="captionText">FANTASTIC BEASTS</p>
        </div>
        <div class="imageHolder">
            <img src="3.jpg">
            <p class="captionText">THE LORD OF THE RING</p>
        </div>
        <div class="imageHolder">
            <img src="4.jpg">
            <p class="captionText">THE HOBBIT</p>
        </div>
        <div class="imageHolder">
            <img src="5.jpg">
            <p class="captionText">THE CRONICLES OF NARNIA</p>
        </div>
    </div>
    <div id="dotsContainer"></div>
</div>


<div class="parent">
    <div class="grid1">
        <div class="tabContainer">
    <div class="buttonContainer">
    <font color="#e2e2e2"> <h2><p >SUGGESTIONS</p></h2> </font>
        <button onclick="showPanel(0,'#1e2129')">Recommended</button>
        <button onclick="showPanel(1,'#1e2129')">Medical Books</button>
        <button onclick="showPanel(2,'#1e2129')">History</button>
        <button onclick="showPanel(3,'#1e2129')">Children</button>
    </div>
<div class="tabPanel">
<div class="responsive">
<?php
        include_once "recommended.php";
  include_once "recommendedfetch.php";
 include_once "recofetch.php";
  ?> 
</div>
</div>
      

    <div class="tabPanel">

  <div class="responsive">
 <?php
        include_once "medicine.php";
  include_once "medicinefetch.php";
  include_once "medfetch.php";
   /* include_once "mbbsfetch.php";*/

  ?>
</div>



    </div>
    <div class="tabPanel">
       <div class="responsive">
            <?php
        include "historybook.php";
         include "hisbookfetch.php";
       include "hisfetch.php";

  ?> 
</div>
    </div>
    <div class="tabPanel">
      <div class="responsive">
      <?php
  include "childrenbook.php";
  include "childrenbookfetch.php";
    include "childfetch.php";
  /*  include "children.php";*/

  ?>
    
    </div>
  </div>

</div>
</div>


        <div class="grid2">
       <font color="#e2e2e2"> <h2>GENRE</h2><br></font>
        <br>
<div class="row">
  <div class="column">
    <h3><a href="Arts & Photography.php">Arts & Photography</a></h3><br>
      <h3><a href="Business & Money.php">Business & Money</a></h3><br>
      <h3><a href="Children's Books.php">Children's Books</a></h3><br>
      <h3><a href="Computers & Technology.php">Computers & Technology</a></h3><br>
      <h3><a href="Crafts, Hobbies & Home.php">Crafts, Hobbies & Home</a></h3><br>
      <h3><a href="Engineering & Transportation.php">Engineering & Transportation</a></h3><br>
      <h3><a href="History.php">History</a></h3><br>
      <h3><a href="Law.php">Law</a></h3><br>
      <h3><a href="Medical Books.php">Medical Books</a></h3><br>
      <h3><a href="Parenting & Relationships.php">Parenting & Relationships</a></h3><br>
      <h3><a href="Reference.php">Reference</a></h3><br>
      <h3><a href="Romance.php">Romance</a></h3><br>
      <h3><a href="Science Fiction & Fantasy.php">Science Fiction & Fantasy</a></h3><br>
      <h3><a href="Sports & Outdoors.php">Sports & Outdoors</a></h3><br>
      <h3><a href="Test Preparation.php">Test Preparation</a></h3><br>
      
  </div>
  <div class="column">
    <h3><a href="Biographies & Memoirs.php">Biographies & Memories</a></h3><br>
    <h3><a href="Calendars.php">Calendars</a></h3><br>
    <h3><a href="Comics & Graphic Novels.php">Comics & Graphic Novels</a></h3><br>
    <h3><a href="Cookbooks, Food & Wine.php">Cookbooks, Food & Wine</a></h3><br>
    <h3><a href="Christian Books & Bibles.php">Christian Books & Bibles</a></h3><br>
    <h3><a href="Health, Fitness & Dieting.php">Health, Fitness & Dieting</a></h3><br>
      <h3><a href="Humor & Entertainment.php">Humor & Entertainment</a></h3><br>
      <h3><a href="Literature & Fiction.php">Literature & Fiction</a></h3><br>
      <h3><a href="Mystery, Thriller & Suspense.php">Mystery, Thriller & Suspense</a></h3><br>
      <h3><a href="Politics & Social Sciences.php">Politics & Social Sciences</a></h3><br>
      <h3><a href="Religion & Spirituality.php">Religion & Spirituality</a></h3><br>
      <h3><a href="Science & Math.php">Science & Math</a></h3><br>
      <h3><a href="Self-Help.php">Self-Help</a></h3><br>
      <h3><a href="Teen & Young Adult.php">Teen & Young Adult</a></h3><br>
      <h3><a href="Travel.php">Travel</a></h3><br>
  
  
  </div>
</div>
  </div>
</div>



<div class="relatives">
  
<div class="container">
<font color="#e2e2e2"> <h2>LATEST</h2></font>

</div>

<div class="bar ">
  <button class="bar-item " onclick="openGenre('Action')">Law</button>
  <button class="bar-item " onclick="openGenre('Adventure')">Self-Help</button>
  <button class="bar-item " onclick="openGenre('Romance')">Travel</button>
</div>
<br>
<div id="Action" class="container genre">



<div class="responsive">
 <?php
   include 'lawbook.php';
   include 'lawbookfetch.php';

   ?> 
</div>

</div>




<div id="Adventure" class="container genre" style="display:none">
 
<div class="responsive">
   <?php
   include 'selfhelpbook.php';
   include 'selfhelpbookfetch.php';

   ?>
</div>

</div>

<div id="Romance" class="container genre" style="display:none">



<div class="responsive">
   <?php
   include 'travelbook.php';
   include 'travelbookfetch.php';

   ?>
<!-- output -->
</div>


</div>
</div><!--relative end-->



<div class="children">
<div class="grid4"> 
  <div class="logo2">
<font color="#e2e2e2"><p>BOOKSFORME<br></font></div>
<font color= "#a1a1a1">booksforme-Free ebooks online, here you can <i>read ebooks online</i> for free without annoying of advertising, just come and enjoy your ebooks online.<br></font>
<a href="https://twitter.com/home"><font color="#e2e2e2"><img src="twitter.jpg">Connect us on twitter</font></a>

</p>

</div>
<div class="grid5">

<div class="rows">
  <div class="columns" >
   <font color="#e2e2e2"> <h3>Books</h3><br></font>
    <p><a href="Arts & Photography.php">Arts & Photography</a><br><br>
      <a href="Comics & Graphic Novels.php">Comics & Graphic Novels</a><br><br>
      <a href="Literature & Fiction.php">Literature & Fiction</a><br><br>
      <a href="Science Fiction & Fantasy.php">Sci-fi</a><br><br>
      <a href="Medical Books.php">Medical Books</a><br><br>
 </p>


  </div>
  <div class="columns">
   <font color="#e2e2e2"> <h3>BUY BOOKS</h3><br></font>
    <p>
       <a href="https://wordery.com/">Wordery</a><br><br>
      <a href="https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155">Amazon</a><br><br>
      <a href="https://www.barnesandnoble.com/">Barnes & Noble</a><br><br>
      <a href="https://www.booksamillion.com/">Books-A-Millon</a><br><br>
       <a href="https://www.hpb.com/home#product-panel-home">HALF PRICE BOOKS</a><br><br>
      <a href="https://www.powells.com/">Powell's Books</a><br><br>
      <a href="https://www.abebooks.com/">AbeBooks</a><br><br>
      <a href="https://www.betterworldbooks.com/">BetterWorldBOOKS</a><br><br>

    </p>
  </div>
  <div class="columns" >
   <font color="#e2e2e2"> <h3>HELP</h3><br></font>
    <p>
       <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:0px; margin-top:0px; margin-left:0px; margin-bottom: 0px;">
Request</button>

<div id="modal-wrapper" class="modal">
 <form action="request.php" method="post" name="form" class="form-box">
  
    <div class="requestcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close Request">&times;</span>
      <h1 style="text-align:center">Request Books</h1><br><br>
    </div>
    <form class="modal-content animate" action="/action_page.php">
    <div class="container">
      <label for="name">Name</label><br>
      <input type="text" name="name" class="inp" placeholder="Enter Book Name" required><br><br>
      <label for="email">Email ID</label><br>
      <input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br><br>
      <label for="message">Message</label><br>
      <textarea name="msg" class="msg-box" placeholder="Describe about your book eg-Release date" required></textarea><br><br>
      <input type="submit" name="submit" value="Send" class="sub-btn">
    </div>
    </form>
</form>
</div>
<br><br>
      <a href="#">Policy</a><br><br><br>
      <a href="contactus.html">Contact us</a><br><br><br>
      <a href="Aboutus.html">About us</a><br><br>

    </p>
  </div>
</div>




 </div>
</div>



       <script src="app.js"></script>
</body>

</html>
