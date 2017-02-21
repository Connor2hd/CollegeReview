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
        <li><a href="About.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="">About </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Colleges <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Georgian College</a></li>
            <li><a href="#">Loyalist College</a></li>
            <li><a href="#">Fleming College</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">St. Lawrence College</a></li>
            <li><a href="#">Algonquin College</a></li>
            <li><a href="#">La Cité Collégiale</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Mohawk College</a></li>
            <li><a href="#">Sheridan College</a></li>
            <li><a href="#">Durham College</a></li>
            <li><a href="#">Centennial College</a></li>
            <li><a href="#">George Brown College</a></li>
            <li><a href="#">Humber College</a></li>
            <li><a href="#">Seneca College</a></li>
            <li><a href="#">Niagara College</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Conestoga College</a></li>
            <li><a href="#">Fanshawe College</a></li>
            <li><a href="#">Lambton College</a></li>
            <li><a href="#">St. Clair College</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Candore College</a></li>
            <li><a href="#">Sault College</a></li>
            <li><a href="#">Cambrian College</a></li>
            <li><a href="#">Confederation College</a></li>
            <li><a href="#">Collège Boréal</a></li>
            <li><a href="#">Northern College</a></li>
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
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Login/Register</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Some sort of cool looking image div thing -->
<div class="row">
    <div class="col-lg-12">
        <img class="topImage" src="resources/images/Classroom.jpg">
    </div>
</div>

<div class="row">
  <div class="col-lg-1"></div>
  <div class="col-lg-5">
    <div class="well well-lg" style="box-shadow: 5px 5px 5px #888;">
      <h2>Registration Information</h2><br />
      <p>
        This website requires users to signup for an account before posting reviews on school pages.
        We do this in an attempt to halt spammers and other unwanted content being posted on our site.
      </p>
      <p>
        To sign up for an account you will need to provide an email where a confirmation message will be sent in order to verify your account.
        Once your account has been activated we will never email you again unless you request it, in the instance of a missing password for example.
        Thank you for understanding.
      </p>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="well well-lg" style="box-shadow: 5px 5px 5px #888;">
      <form action="/collegereview/resources/php/RegisterUser.php" method="post">
        Use this simple form to create a user account!<br><br>
        <div class="row">
          <div class="col-lg-6"><label for="txtFirst">First Name: </label></div><div class="col-lg-6"><input type="textbox" name="txtFirst" class="form-control" id="txtFirst"></div>
          <div class="col-lg-6"><label for="txtLast">Last Name: </label></div><div class="col-lg-6"><input type="textbox" name="txtLast" class="form-control" id="txtLast"></div>
        </div>
        <div class="row">
          <div class="col-lg-6"><label for="txtUsername">Username: </label></div><div class="col-lg-6"><input type="textbox" name="txtUsername" class="form-control" id="txtUsername"></div>
          <div class="col-lg-6"><label for="txtEmailR">Email Address: </label></div><div class="col-lg-6"><input type="textbox" name="txtEmail" class="form-control" id="txtEmailR"></div>
        </div>
        <div class="row">
          <div class="col-lg-6"><label for="txtPasswordR">Password: </label></div><div class="col-lg-6"><input type="textbox" name="txtPassword" class="form-control" id="txtPasswordR"></div>
          <div class="col-lg-6"><label for="txtConfirmPasswordR">Confirm Password: </label></div><div class="col-lg-6"><input type="textbox" name="txtConfirmPassword" class="form-control" id="txtConfirmPasswordR"></div>
        </div>
        <div class="row">
          <br><div style="text-align:center"><button type="submit" class="centre btn btn-primary">Register</button></div>
        </div>
      </form>
    </div>
  </div>
  <div class="col-lg-1"></div>
</div>

<!-- Footer -->
<div class="navbar navbar-default navbar-bottom">
  <div class="container">
    <p class="navbar-text pull-left">© 2017 - Site Built By Connor Mackay</p>
  </div>
</div>
</body>
</html>
