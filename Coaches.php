<html>

<head>
    <title>coaches</title>
    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="project_style.css">

</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="logo-color.png"><img src="logo-color.png" alt="logo"
              style="width:42px;height:42px;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Coaches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about-us.html">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact-us.html">Contact us</a>
              </li>
              <div class="dropdown">
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" >
                  +
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="Nutrition.html">Nutrition</a></li>

                  <li><a class="dropdown-item" href="gyms.html">Gym</a></li>
                  <li><a class="dropdown-item" href="Booking.html">Booking</a></li>
                  <li><a class="dropdown-item" href="Experience.html">Experience</a></li>
                  <li><a class="dropdown-item" href="funpage.html">Funpage</a></li>
				  <li><a class="dropdown-item" href="Questionnaire.html">Questionnaire</a></li> 
                  <li><a class="dropdown-item" href="calculate2.html">calculate</a></li> 
                </ul>
              </div>
            </ul>
            <form class="d-flex" method="get" action="searchBar.php">
              <input class="form-control me-2" type="text" placeholder="Search" name="page">
              <input class="btn btn-primary" type="submit" value="Search">
              
            </form>
          </div>
        </div>
      </nav>
    <h1>Coaches</h1>
    <hr>
    <div>
        <img src="coach1.jpg" alt="Leslie Fischer healthy lifestyle experience" style="width:30% ;margin-left: 2%;" align="left" >
        <h2>Why you should have a coach?</h2>
        <p style="text-align: center;">Your coaches will show you how to face opposition and draw positive lessons from<br />
            it to develop your character and abilities. Adults can apply the lessons learned
            on the<br />field, such as "don't give up," "let someone else take the lead this time,
            " and "work <br />together to score a goal."</p>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <hr>
    <h2>Our best coaches:</h2>
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="female icon.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Alice</h4>
                        <p class="card-text">Sport and Fitness coach</p>
                        <p class="card-text">Speaks English and Arabic</p>
                        <p>She is a fully qualified fitness coach who can help with weight loss, body toning, pre and post natal training and strength building.
                            All of her personal coaching programs are customised to her client needs and ongoing monitoring of your progress is included.               
                            Whether you want to lose fat, improve your physical appearance of just get fit in general Alice can help.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="female icon.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Amira Al Abri</h4>
                        <p class="card-text">Sport and Fitness coach</p>
                        <p class="card-text">Speaks English and Arabic</p>
                        <p>Amira is an online personal fitness coach who can work with ladies and children throughout Oman and beyond.
                            Having a fully equipped gym at home means Amira can create professional and successful personal training plans that can be done online at home in Muscat.                            
                            Amira treats all her female clients as individuals because no two clients have the same needs and goals. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="card" style="width:400px">
            <img class="card-img-top" src="male2.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Aly</h4>
                <p class="card-text">Sport and Fitness coach</p>
                <p class="card-text">Speaks English and Arabic</p>
                        <p>Online coaching for fitness in Muscat with Aly will provide you with the results you are looking for.
                            Aly can work with clients of all ages and fitness abilities. Whether you want to build muscle, tone up with fat loss, manage your weight or improve your cardio fitness he can help. 
                            Through regular online monitoring and fitness evaluations Aly will ensure you meet and exceed all of your health, fitness and lifestyle goals in Muscat in the comfort and privacy of your own home.                            
                            All of Aly's personal training programs are customised to suit his clients needs. He will listen to your likes and dislikes when it comes to exercise and ensure that you stay motivated during every session.                           
                            Aly has an impressive 20 years of the health and fitness industry knowledge to pass on to his personal training clients and is suited to all client types and ages.
                        </p>
            </div>
        </div>
    </div>
    <hr>
    <h3>Coaches table</h3>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

    <?php
// SQL query to fetch data from the database
$sql = "SELECT * FROM coaches";

// Execute the query
$result = $conn->query($sql);
?>
<?php
// Check if any rows are returned
if ($result->num_rows > 0) {
    echo "<table border=2>";
    echo "<tr><th>Name</th><th>Gender</th><th>Number</th></tr>";
    
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["number"]."</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "No results found";
}
?>
<?php
// Close the connection
$conn->close();
?>




    <hr>
    <h3>Delete a coaches</h3>
    <form method="POST" action="delete.php">
  <label for="name">Coach Name:</label>
  <input type="text" name="name" id="name">
  <input type="submit" value="Delete">
</form>


  
    <hr>
    <p>To Book A Sport and fitness coach click this button:</p>
    <a href="Booking.html#bookCoach" class="btn btn-light">Coach</a>
    </br>
    <hr>
    <h1>Find with us free and online coaches:</h1>     
        <a href="https://www.youtube.com/@self?app=desktop" class="btn btn-light">SELF</a>
        <a href="https://www.youtube.com/@cultfitOfficial?app=desktop" class="btn btn-light">cultfitOfficial</a>

    <hr>
    <footer>
        <ul>
            <li>
                <p><a href="registration.html">join the build wellness family </a></p>
            </li>
            <li>
                <p><a href="about-us.html">about us  </a></p>
            </li>
            <li>
                <p><a href="contact-us.html">contact us </a></p>
            </li>
           
        </ul>
      </footer>

    
</body>

</html>
