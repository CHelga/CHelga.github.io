
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link  rel="stylesheet" type="text/css" href="style/custom.css">
    <!-- Custom styles for this template -->
    <script src="JS/proba.js"></script>



    <title>Pricing example for Bootstrap</title>
  </head>
  <body>
   <!--  <div class="jumbotron" style="margin-bottom: 0px;">
        <h1> Clever Techie</h1>
        <p> Let`s learn web development</p>
      </div> -->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="collapse_target">
        <!-- adding logo to the navbar -->
        <!-- <a class="navbar-brand"><img src="clevergear.png"></a> -->
        <span class="navbar-text">Clever</span>


        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="#" data-target="home"> Home</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#" data-target="project"> Project</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#" data-target="about"> About</a>
          </li>
        </ul>
    </div>
    </nav>
    <!-- <div id="header"></div> -->
    <div id="content" class="jumbotron">
        <?php include 'home.php';?>
    </div>
    <!-- <img src="css/bootstrap-4-navbar-cheat-sheet.png" class="img-fulid"> -->
    <div id="footer" class="page-footer font-small blue pt-4 mt-4" ></div>
  </body>
  <script  src="JS/settings.js"></script>
</html>
