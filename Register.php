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
</head>
<body>
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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
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
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
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
    <div class="well well-lg">
      <form action="/collegereview/resources/php/Login.php" method="post">
        Use this are to login to your user account and post reviews!<br><br>
        <div class="row">
          <div class="col-lg-6"><div class="row"><div class="col-lg-6">Email Address: </div><div class="col-lg-6"><input type="textbox"></div></div></div>
          <div class="col-lg-6"><div class="row"><div class="col-lg-6">Password: </div><div class="col-lg-6"><input type="textbox"></div></div></div>
        </div>
        <div class="row">
          <br><div style="text-align:center"><button type="submit" class="centre">Login</button></div>
        </div>
      </form>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="well well-lg">
      <form action="/collegereview/resources/php/RegisterUser.php" method="post">
        Use this simple form to create a user account!<br><br>
        <div class="row">
          <div class="col-lg-6"><div class="row"><div class="col-lg-6">First Name: </div><div class="col-lg-6"><input type="textbox" name="txtFirst"></div></div></div>
          <div class="col-lg-6"><div class="row"><div class="col-lg-6">Last Name: </div><div class="col-lg-6"><input type="textbox" name="txtLast"></div></div></div>
        </div>
        <div class="row">
          <div class="col-lg-6"><div class="row"><div class="col-lg-6">Username: </div><div class="col-lg-6"><input type="textbox" name="txtUsername"></div></div></div>
          <div class="col-lg-6"><div class="row"><div class="col-lg-6">Email Address: </div><div class="col-lg-6"><input type="textbox" name="txtEmail"></div></div></div>
        </div>
        <div class="row">
          <div class="col-lg-6"><div class="row"><div class="col-lg-6">Password: </div><div class="col-lg-6"><input type="textbox" name="txtPassword"></div></div></div>
          <div class="col-lg-6"><div class="row"><div class="col-lg-6">Confirm Password: </div><div class="col-lg-6"><input type="textbox" name="txtConfirmPassword"></div></div></div>
        </div>
        <div class="row">
          <br><div style="text-align:center"><button type="submit" class="centre">Register</button></div>
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
