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
        <li class="dropdown active">
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
        <li><a href="#">Login/Register</a></li>
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

<!-- Some way of seperating the void -->

<!-- College Image and Info Row -->
<div class="row spaced">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-5">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive img-rounded" src="resources/images/college.jpg" style="box-shadow: 5px 5px 5px #888;">
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="well well-lg" style="box-shadow: 5px 5px 5px #888;">
          <div>
            <?php
            //Load in the excluded connection string
            require '/resources/php/Excluded.php';

            //The query to be executed to pull the static info for the college/university
            $query = "SELECT * FROM College_Info WHERE CollegeName = 'Niagara College'";

            //Connect to the sql server
            $conn = sqlsrv_connect($serverName, $connectionInfo);

            //If the connection fails throw an error
            if ($conn === false)
            {
              print_r( sqlsrv_errors());
            }

            //Get the results
            $stmt = sqlsrv_query($conn, $query);

            //Form them in an array
            $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

            //Echo the results back to the page
            echo "College Name: " . $row["CollegeName"]. "<br>";
            echo "College Location: " . $row["Province"]. "<br>";
            echo "Score One: " . $row["ScoreOne"]. "<br>";
            echo "Score Two: " . $row["ScoreTwo"]. "<br>";
            echo "Score Three: " . $row["ScoreThree"]. "<br>";

            //Close the connection
            sqlsrv_close($conn);
            ?>
          </div>
    </div>
    <div class="col-lg-1">
    </div>
</div>
</div>

<!-- Create New Review -->
<div class="row spaced">
  <div class="col-lg-1"></div>
  <div class="col-lg-10">
    <div class="well well-lg" style="box-shadow: 5px 5px 5px #888;">
      <form action="resources/php/AddReview.php" method="post">
        <input type="hidden" value=1 name="CollegeID">
        Your Name: <input type="text" name="txtAuthor" class="form-control" /><br />
        Program of Study: <input type="text" name="txtProgram" class="form-control" /><br />
        <div class="row">
        <div class="col-lg-4">
        Category 1 Score:
        <select name="ScoreOne" class="form-control">
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
          <option value=4>4</option>
          <option value=5>5</option>
          <option value=6>6</option>
          <option value=7>7</option>
          <option value=8>8</option>
          <option value=9>9</option>
          <option value=10>10</option>
        </select>
        </div>
        <div class="col-lg-4">
        Category 2 Score:
        <select name="ScoreTwo" class="form-control">
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
          <option value=4>4</option>
          <option value=5>5</option>
          <option value=6>6</option>
          <option value=7>7</option>
          <option value=8>8</option>
          <option value=9>9</option>
          <option value=10>10</option>
        </select>
        </div>
        <div class="col-lg-4">
        Category 3 Score:
        <select name="ScoreThree" class="form-control">
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
          <option value=4>4</option>
          <option value=5>5</option>
          <option value=6>6</option>
          <option value=7>7</option>
          <option value=8>8</option>
          <option value=9>9</option>
          <option value=10>10</option>
        </select>
        </div>
        </div>
        <br />
        <textarea rows="9" name="txtReview" class="form-control">Review Text Goes in Here</textarea><br />
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <div class="col-lg-1"></div>
</div>

<!-- Main Reviews Section -->
<div class="row spaced">
  <div class="col-lg-1"></div>
  <div class="col-lg-10">
      <?php
      //Load in the excluded connection string
      require '/resources/php/Excluded.php';

      //Assign the query that is being run to a variable
      $query = "SELECT * FROM Reviews WHERE CollegeID = 1";

      //Connect to the server
      $conn = sqlsrv_connect($serverName, $connectionInfo);

      //Execute the query and return it as a statement
      $stmt = sqlsrv_query($conn, $query);

      //If the connection is bad, throw an error
      if ($conn === false)
      {
        print_r( sqlsrv_errors());
      }

      //If the statement dies, throw an error
      if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
      }

      // Each row is a review, every row gets its own well
      while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo "<div class='well well-lg' style='box-shadow: 5px 5px 5px #888;'>";
        echo "Author: " . $row["Author"]. "<br>";
        echo "Main Review: " . $row["Main"]. "<br>";
        echo "Score One: " . $row["ScoreOne"]. "<br>";
        echo "Score Two: " . $row["ScoreTwo"]. "<br>";
        echo "Score Three: " . $row["ScoreThree"]. "<br>";
        echo "</div>";
      };

      //Free the statement
      sqlsrv_free_stmt( $stmt);

      //Close the connection
      sqlsrv_close($conn);
      ?>
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
