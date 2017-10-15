<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>  </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <style>
        body, html{
          background-color: black;
        }
        .header{
            background-color: red;
        }

        .belowMenu{
          margin-top: 55px;
          background-color: #e9ebee;
        }

        .slider{
          #background-color: red;
        }

        .content{
          background-color: #e9ebee;
        }
        .subContent{
          background-color: blue;
        }


        .aboveFooter{
          margin-bottom: 15px;
          background-color: #e9ebee;
        }
        .footer{
          background-color: black;
          position: fixed;
          bottom: 0;
          width:100%;
        }
        /* Large desktop */
        /*@media (min-width: 1200px) { ... }*/

        /* Portrait tablet to landscape and desktop */
        @media (min-width: 768px) and (max-width: 979px) {
          .belowMenu{
            padding-top: 55px;
          }
        }

        /* Landscape phone to portrait tablet */
        /*@media (max-width: 767px) { ... }*/

        /* Landscape phones and down */
        /*@media (max-width: 480px) { ... }*/
      </style>

  </head>
  <body>

  <div class="container-fluid" >
    <div class="row">
    <!-- Fixed navbar -->
   <nav class="navbar navbar-default navbar-fixed-top" style="background: url('http://najibasaddok.com/wp-content/themes/aplikasiniaga/images/background-round-black.jpg');">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
       </div>
       <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
           <li><a href="index.php">HOME</a></li>
           <li><a href="event.php">EVENTS</a></li>
           <li><a href="about.php">ABOUT US</a></li>
           <li><a href="news.php">NEWS</a></li>
           <li><a href="services.php">SERVICES</a></li>
           <li><a href="portfolio.php">PORTFOLIO</a></li>
           <li><a href="member/index.php">MEMBERSHIP</a></li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="#">Action</a></li>
               <li><a href="#">Another action</a></li>
               <li><a href="#">Something else here</a></li>
               <li role="separator" class="divider"></li>
               <li class="dropdown-header">Nav header</li>
               <li><a href="#">Separated link</a></li>
               <li><a href="#">One more separated link</a></li>
             </ul>
           </li>
         </ul>

       </div><!--/.nav-collapse -->
     </div>
   </nav>

 </div>
</div>

    <div class="container-fluid belowMenu slider">
      <div class="row">
        <div class="">
              slider
        </div>
      </div>
    </div>


    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 content">
          committee
        </div>
      </div>
    </div>


    <div class="container-fluid aboveFooter">
      <div class="row">

        <div class="col-sm-4 subContent">
            <p>Sub 1</p>
        </div>

        <div class="col-sm-4 subContent">
            <p>Sub 2</p>
        </div>

        <div class="col-sm-4 subContent">
            <p>Sub 3</p>
        </div>

      </div>
      <div class="row">
        <div class="col-sm-12 content">
          <p>Sub 4</p>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 footer">
            Footer
        </div>
      </div>
    </div>

    <!-- JavaScript Function -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>

  </body>
</html>
