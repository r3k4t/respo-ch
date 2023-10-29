<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dhum Dham Event Planner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <link rel="shortcut icon" href="favicon/favicon-1.jpg" >


  
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    /* Remove the jumbotron's default bottom margin */
    .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      /* background-color: #f2f2f2; */
      padding: 25px;
      background-color:#222222 ;
      color:white;
    }

    .fa {
      padding: 20px;
      font-size: 50px;
      width: 50px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
      /* border-radius: 50%; */
    }








    .fa:hover {
      opacity: 0.7;
    }

    .fa-facebook {
      background: #3B5998;
      color: white;
    }

    .fa-twitter {
      background: #55ACEE;
      color: white;
    }

    .fa-youtube-play{
      background: #bb0000;
      color: white;
    }

    .fa-instagram {
      background: #125688;
      color: white;
    }



img{
  display:flex;
  flex-wrap: wrap;
  width:calc(100% - 0px - 0px - 0px - 0px);
  height:400px;

}



@media (max-width:952px){
  img{
  display:flex;
  flex-wrap: wrap;
  width:calc(100% - 0px - 0px - 0px - 0px);
  height:180px;
  /* height:1024px;
  width:3024px */
}

}



  </style>
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- External style css  -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- <div class="jumbotron">
    <div class="container text-center">
      <h1>Online Store</h1>
      <p>Mission, Vission & Values</p>
    </div>
  </div> -->






  <img   src="banner-image/banner.jpg" alt=""  > 

  


  






  <nav class="navbar navbar-inverse" >
    <!-- <div class="container-fluid"> -->

    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="#">Logo</a> -->
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <!-- navbar center ===>style.css  -->
        <ul class="nav navbar-nav navbar-center">
          <li class=""><a href="/navbar/index.php">HOME</a></li>
          <li><a href="/navbar/about.php">ABOUT </a></li>

          <!-- Wedding ropdown -->


          <!-- <li class="dropdown"><a class="data-toggle" href="#">WEDDING</a></li> -->

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">WEDDING <span
                class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/navbar/holud-stage.php">HOLUD DECOR & IDEAS</a></li>
              <li class="divider"></li>
              <li><a href="/navbar/holud-stage.php">LIGHTING & IDEAS</a></li>
              <li class="divider"></li>
              <li><a href="/navbar/wedding-stage.php">WEDDING STAGE</a></li>
              <li class="divider"></li>
              <li><a href="/navbar/wedding-kunjo.php">WEDDING KUNJO</a></li>
              <!-- <li class="divider"></li>
              <li><a href="#">ROYAL THEME WEDDING <br> STAGE DESIGN</a></li> -->
              <li class="divider"></li>
              <li><a href="/navbar/wedding-photography.php">WEDDING PHOTOGRAPY</a></li>
            </ul>
          </li>


          <!-- Birthday dropdown menu  -->

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">BIRTHDAY <span
                class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/navbar/birthday-decor-theme.php">BIRTHDAY DECOR THEME</a></li>
              <li class="divider"></li>
              <li><a href="/navbar/birthday-photography.php">BIRTHDAY PHOTOGRAPY</a></li>
              <!-- <li class="divider"></li>
              <li><a href="#">BIRTHDAY GAMES & <br> ACTIVITIES</a></li> -->
            </ul>
          </li>

          <!-- Rental Equipment dropdown menu -->

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SOUND & DJ <span
                class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="/navbar/sound-system.php">SOUND SYSTEM</a></li>
            <li class="divider"></li>
            <li><a href="/navbar/dj.php">DJ (DISC JOCKEY)</a></li>

            </ul>
          </li>

          <!-- Price & Package Dropdown Menu -->

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PRICE & PACKAGE <span
                class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">WEDDING PHOTOGRAPHY <br> PRICE</a></li>
              <li class="divider"></li>
              <li><a href="#">EVENT PHOTOGRAPHY <br> PRICE</a></li>
              <li class="divider"></li>
              <li><a href="#">HD VIDEO PRICE</a></li>
            </ul>
          </li>

          <!-- Other Site  -->

          <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">OTHER SITE <span
                class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">WEDDING PLANNER  <br> BANGLADESH </a></li>
              <li class="divider"></li>
              <li><a href="#">BIRTHDAY PARTY <br> PLANNER DHAKA,BD</a></li>
              <li class="divider"></li>
              <li><a href="#">EVENT MANAGEMENT <br> BANGLADESH </a></li>
            </ul>
          </li> -->

           <!-- videos -->

           <li class=""><a href="/navbar/tiktok-video.php">VIDEOS</a></li>
     
          <!-- contact page  -->


          <li><a href="/navbar/contact.php">CONTACT </a></li>
        </ul>

      </div>
    </div>
  </nav>

  <!-- about us -->

 

  <div class="container mt-40 pt-40  ">

<h4 class="text-center"><strong>ABOUT</strong></h4>

  <div class="panel panel-default">
 
    <div class="panel-body">

    
    <p class="text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, ea eveniet tempora unde nemo voluptatibus
      excepturi dolores ipsam veniam repellendus alias exercitationem pariatur ad? Laudantium aliquid dolores tempora
      eaque nobis corporis sapiente amet dolorem, doloribus, eveniet reiciendis ipsum corrupti adipisci voluptas? Odio
      asperiores deleniti, voluptas facere eum consequatur quis explicabo recusandae at sapiente enim voluptates aliquid
      odit saepe repellat in vero culpa cum quo sequi sint, maxime quisquam fugit aspernatur. Consequuntur adipisci
      dolorem hic nostrum nobis rerum mollitia blanditiis ab! Sunt rerum quasi debitis commodi ipsum nostrum, voluptas
      nemo nam temporibus. Eaque, ullam deserunt tempore rerum obcaecati ex sint animi nemo, totam, labore minus.
      Laudantium deserunt velit, possimus expedita iusto fuga? Officiis, voluptatum ipsa tenetur reiciendis vitae sed
      dicta ipsum nihil illo atque beatae a odit adipisci amet ab vel dolorem? Sequi unde odit corrupti quisquam,
      consectetur, pariatur, dolores nobis minima tempore ab placeat sapiente ducimus. Harum, voluptatibus. Ipsum earum
      architecto similique facere temporibus, quam alias consequuntur quidem culpa libero, quod magni asperiores
      voluptates est maxime molestiae! Temporibus perspiciatis similique beatae. Ex animi autem necessitatibus obcaecati
      hic dicta? Accusamus ab dicta voluptatibus esse architecto. Et inventore consectetur quis natus molestias vitae
      dolorum aut labore provident nam, saepe maiores totam facere incidunt, quae nemo laboriosam a eaque quidem
      aspernatur distinctio omnis sint. In neque iure impedit nostrum rerum nisi rem deleniti temporibus tempora vel
      voluptates ipsam a, iste quam asperiores doloremque tempore vero blanditiis molestiae facilis magnam facere.
      Repudiandae ullam dignissimos aut eum eligendi libero quaerat fugiat nam ad maxime. Eum explicabo consectetur
      vitae nam, pariatur architecto sapiente assumenda deserunt, totam repellat provident itaque? Numquam, vitae
      ratione ipsum rem, voluptates odio molestias dignissimos, autem ullam id exercitationem totam nihil aperiam
      commodi deleniti facilis blanditiis maiores tempora accusantium itaque ea perferendis quis! Repellat sapiente quam
      architecto debitis. Rem reiciendis corporis nulla officia dicta! Nemo fugit magnam adipisci quasi similique hic
      necessitatibus iusto numquam nam vel doloribus, a explicabo dicta blanditiis iure aspernatur temporibus
      consectetur illum ratione ipsam est itaque! Voluptate vitae inventore, ex veniam asperiores autem eaque sequi
      rerum doloremque est, ut aliquam, quo quos quaerat ipsum ea consequuntur quia. Voluptatibus sequi impedit ab error
      excepturi velit officia. Perspiciatis, dolorum harum. Quibusdam impedit temporibus placeat incidunt. Beatae rem
      tempore architecto atque placeat eaque corrupti nostrum consequuntur sit mollitia similique neque consequatur,
      quos aliquid deleniti obcaecati! Itaque, nisi laudantium quibusdam rem ab, perspiciatis sed aliquam tempora
      officia at harum saepe impedit pariatur aut quod dignissimos consectetur iusto illo amet vitae autem, soluta iste
      neque accusantium! Adipisci consectetur eveniet, temporibus quod iusto non provident possimus quos repudiandae!
      Quidem itaque eos cum dicta officiis? Dolore, sequi, saepe vitae quae similique ipsum corrupti molestias,
      voluptate accusamus in tempore aliquid! Dolorem placeat officiis, explicabo nostrum quos fuga eligendi vel esse
      blanditiis magni, pariatur dolore distinctio, itaque rem facere at quam porro fugit voluptatem! Fuga optio id
      placeat. Error voluptatibus similique illum quas libero vero cum nulla rem voluptatem sapiente iusto obcaecati,
      dolorum explicabo hic sequi expedita, molestias nisi, earum placeat voluptatum. Saepe debitis nemo odit ullam
      necessitatibus.</p>
    

   
  </div>
  </div>

 
    

    
      <br>


  </div>



  <br>








  <!-- footer -->
  <footer class="container-fluid">

    <!-- <p class="text-left" >Call Number: <b>01867384440</b></p> -->




    <p class="text-center">
      <br>
      <br>

      <b><a href="#" class="fa fa-facebook"></a></b>
      <b><a href="#" class="fa fa-twitter"></a></b>
      <b><a href="#" class="fa fa-youtube-play"></a></b>
      <b><a href="#" class="fa fa-instagram"></a></b>
    </p>
    <br>
    <p class="text-center">All Copyright Reserved 2023</p>
    <br>
    <br>
    <p class="text-right">Made with <a href="https://github.com/r3k4t" target="_blank">
        <span class="love-symbol"> &#10084</span> <span class="rahatkhantusar">Rahat Khan Tusar</span> <span
          class="love-symbol"> &#10084</span></a> </p>






</body>

</html>
