<html>
<head>
<title>College Review Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Refrences -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Site specific stylesheet for overrides -->
    <link rel="stylesheet" href="resources/css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body style="background-image: url(resources/images/noise4.png)">
<!-- Bootstrap Default Nav -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">College Reviews</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="../Homepage.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="../About.php">About </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Colleges <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="College/Georgian.php">Georgian College</a></li>
            <li><a href="College/Loyalist.php">Loyalist College</a></li>
            <li><a href="College/Fleming.php">Fleming College</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="College/StLawrence.php">St. Lawrence College</a></li>
            <li><a href="College/Algonquin.php">Algonquin College</a></li>
            <li><a href="College/LaCite.php">La Cité Collégiale</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="College/Mohawk.php">Mohawk College</a></li>
            <li><a href="College/Sheridan.php">Sheridan College</a></li>
            <li><a href="College/Durham.php">Durham College</a></li>
            <li><a href="College/Centennial.php">Centennial College</a></li>
            <li><a href="College/GeorgeBrown.php">George Brown College</a></li>
            <li><a href="College/Humber.php">Humber College</a></li>
            <li><a href="College/Seneca.php">Seneca College</a></li>
            <li><a href="College/Niagara.php">Niagara College</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="College/Conestoga.php">Conestoga College</a></li>
            <li><a href="College/Fanshawe.php">Fanshawe College</a></li>
            <li><a href="College/Lambton.php">Lambton College</a></li>
            <li><a href="College/StClair.php">St. Clair College</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="College/Candore.php">Candore College</a></li>
            <li><a href="College/Sault.php">Sault College</a></li>
            <li><a href="College/Cambrian.php">Cambrian College</a></li>
            <li><a href="College/Confederation.php">Confederation College</a></li>
            <li><a href="College/Boreal.php">Collège Boréal</a></li>
            <li><a href="College/Northern.php">Northern College</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Universities <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Algoma University</a></li>
            <li><a href="#">Lakehead University</a></li>
            <li><a href="#">Algoma University</a></li>
            <li><a href="#">Laurentian University</a></li>
            <li><a href="#">Nipissing University</a></li>
            <li><a href="#">University of Hearst</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Brock University</a></li>
            <li><a href="#">McMaster University</a></li>
            <li><a href="#">OCAD University</a></li>
            <li><a href="#">University of Guelph</a></li>
            <li><a href="#">Univsersity of Ontario</a></li>
            <li><a href="#">University of Toronto</a></li>
            <li><a href="#">University of Waterloo</a></li>
            <li><a href="#">Western University</a></li>
            <li><a href="#">Wilfred Laurier University</a></li>
            <li><a href="#">York University</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Carleton University</a></li>
            <li><a href="#">Queen's University</a></li>
            <li><a href="#">Royal Military College</a></li>
            <li><a href="#">Trent University</a></li>
            <li><a href="#">University of Ottawa</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">University of Windsor</a></li>
          </ul>
        </li>
      </ul>
      <!--<form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Sign Up</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--<div class="row">
    <img id="top-header" class="img-responsive" src="resources/images/Cambridge.jpg">
</div>
<form id="searchbox" action="" method="get" >
  Input <input type="text" />
</form>-->

<div class="image">
  <img src="resources\images\Hampshire.jpg" alt="" class="img-responsive" />
    <div class="search">
      <form>
        <input id="searchbox" type="text" class="form-control"></input><br>
        <button id="searchbutton" type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
</div>

<!-- Jumbotron Greeting -->
<div class="container">
  <div class="jumbotron" style="box-shadow: 5px 5px 5px #888;">
    <h1>Welcome!</h1>
    <p>This is a site I made for fun.  It is designed (almost entirely in bootstrap wells!) and coded by myself, Connor Mackay.</p>
    <p>Originally the site had user login and registration but since I want people to actually use the site I decided against incorporating it.
      No one wants to sign up to a site, to more than likely just make one review.  I may add the login/register back to the site if I decide on aditional
      functionality to add at a later time.</p>
    <p>The site is a pretty simple concept, but one that I think is missing for Ontario schools.  Each school has a page.  Users can review the schools on
      these pages.  Hopefully these reviews offer some sort of insight to how students feel about that school given school.  The system has its flaws and I am
      always looking for ways to improve it.  Thanks.</p>
  </div>
</div>

<br>

<!-- Stat Boxes -->
<!--div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-4">
    <div class="well well-lg" style="box-shadow: 5px 5px 5px #888;">Look More Wells!</div>
  </div>
  <div class="col-lg-4">
    <div class="well well-lg" style="box-shadow: 5px 5px 5px #888;">Look More Wells!</div>
  </div>
  <div class="col-lg-2"></div>
</div-->

<!-- Footer -->
<div class="navbar navbar-default navbar-bottom">
  <div class="container">
    <p class="navbar-text pull-left">© 2017 - Site Built By Connor Mackay</p>
  </div>
</div>
</body>
</html>
