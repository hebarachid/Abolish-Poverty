<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Heba Rachid">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ARTICLE-91852568.jpg" sizes="16x16" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
   <?php include '/ind.php';?>
    <title>Humanity is calling </title>
  </head>
  <body>

  <header style="background: linear-gradient(rgba(20, 24, 27, 0.4), rgba(0,0,0,.5)), url(images/bg_1.jpg) no-repeat center center/cover">
<nav class="navbar navbar-expand-lg fixed-top nav-menu">
  <img src="images/—Pngtree—bird logo vector design free_3557165.png" style="width: 100px; height: 100px;" alt="LOGo" class="navbar-brand text-light  ">
    <a href="#" class="navbar-brand text-light text-uppercase "><span
 class="h2 font weight-bold">Abolish</span ><span
 class="h1"> Poverty</span></a>
 <button class="navbar-toggler nav-button" type="button"
 data-toggle="collapse" data-target="#myNavbar">
<div class="bg-light line1"></div>
<div class="bg-light line2"></div>
<div class="bg-light line3"></div>

</button>
<div class="collapse navbar-collapse justify-content-end text-uppercase font-weight-bold" id="myNavbar">
   <ul class="navbar-nav">
       <li class="nav-item">
           <a href="index.php" class="nav-link m-2 menu-item nav-active"> Home</a>
       </li>
       <li class="nav-item">
        <a href="gallery.php" class="nav-link m-2 menu-item"> Gallery</a>
    </li>
    <li class="nav-item">
        <a href="donate.php" class="nav-link m-2 menu-item"> Donate</a>
    </li>
    <li class="nav-item">
        <a href="mission.php" class="nav-link m-2 menu-item"> Our mission</a>
    </li> <li class="nav-item">
        <a href="Volunteer.php" class="nav-link m-2 menu-item"> Volunteer</a>
    </li>
    <li class="nav-item">
        <a href="Description-Blog.php" class="nav-link m-2 menu-item"> Blog</a>
    </li>
    <li class="nav-item">
        <a href="contact.php" class="nav-link m-2 menu-item"> Contact</a>
    </li>
    <li class="nav-item">
      <a href="/admin.php" class="nav-link m-2 menu-item"> Admin</a>
  </li>
  <li class="nav-item">
    <a href="/dowi/login/login.php" class="nav-link m-2 menu-item"> Log in</a>
</li>
<li class="nav-item">
  <a href="/dowi/login/signup.php" class="nav-link m-2 menu-item"> Sign up</a>
</li>
   </ul>
</div>
</nav>
<div class="text-light text-md-right text-center banner">

  <h1 class="display-4 banner-heading"> Volunteer<span class="text-uppercase center "></span><span class="display-3 text-danger"></span></h1>
  <p class="lead banner-par">We need your aid to help as many people as possible</p>
</div>
  </header>
  <section class="tt">
    <div class="tab" style="overflow-x:auto;">
    <table >
      <tr>
        <th> Event date</th>
        <th> average price</th>
        <th> average hours</th>
        <th> place </th>
        <th> band</th>
        <th>Volunteer</th>
       
      </tr>
      <?php
      include "../connection.php";
        $query = "SELECT * FROM event";
        $results = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_array($results)){
      ?>
      <tr>
        <td><?php echo $row['date'] ?></td>
        <td> <?php echo $row['price'] ?></td>
        <td> <?php  echo $row['hours'] ?></td>
        <td> <?php echo $row['place'] ?></td>
        <td> <?php echo $row['band'] ?></td>
        <td><?php echo $row['volunteer'] ?></td>
      </tr>
      <!-- <tr>
        <td>Event November 15</td>
        <td> free</td>
        <td> whole day</td>
        <td> central park</td>
        <td> no band</td>
        <td>available</td>
      </tr>
      <tr>
        <td>Event December 15</td>
        <td> 15$</td>
        <td> from 8pm to 12 am </td>
        <td> City Center</td>
        <td> Noel band</td>
        <td> Not available</td>
      </tr>
      <tr>
        <td>Event December 15</td>
        <td> 15$</td>
        <td> from 8pm to 12 am </td>
        <td> City Center</td>
        <td> Noel band</td>
        <td>Not available</td>
      </tr>
      <tr>
        <td>Event December 29</td>
        <td> 100$</td>
        <td> from 8pm to 12 am </td>
        <td> Marina beach </td>
        <td> Suprise</td>
        <td> Available </td>
      </tr> -->
        <?php } ?>
    </table>
  </div>
  </section>
  <section style=" background: -webkit-linear-gradient(left, #047591, #023f35); ">
    <div class="container register" >
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Welcome</h3>
                <p>You are 30 seconds away from saving hundreds of unfortunate souls</p>
                <input type="submit" name="" value="Login"/><br/>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a VOLUNTEER</h3>
                        <?php 
                        if(isset($_POST['submit'])){
                          $errors = array();
                          if (empty($_POST["first_name"])) {  
                            $errors[] = "First Name is required";  
                          } 
                          if (empty($_POST["last_name"])) {  
                            $errors[] = "Last Name is required";  
                          } 
                          if (empty($_POST["email"])) {  
                            $errors[] = "email is required";  
                          } 
                          if (empty($_POST["phone"])) {  
                            $errors[] = "Phone is required";  
                          } 
                          if(count($errors) == 0){
                            $first = $_POST['first_name'];
                            $last = $_POST["last_name"];
                            $phone = $_POST["phone"];
                            $email = $_POST['email'];
                            $query = "INSERT INTO volunteer (email, first_name, last_name, phone) 
                            VALUES('$email', '$first', '$last', '$phone')";
                            mysqli_query($conn, $query);
                          }

                        }
                        ?>
                        <div class="row register-form">
                        <form action="" method="post">
                            <div class="col-md-6">
                            
                                <div class="form-group">
                                    <input name="first_name" type="text" class="" placeholder="First Name *"  />
                                </div>
                                <div class="form-group">
                                    <input name="last_name" type="text" class="" placeholder="Last Name *"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email"  name="email" class="" placeholder="Your Email *"  />
                                </div>
                                <div class="form-group">
                                    <input name="phone" type="text" minlength="10" maxlength="10"  class="" placeholder="Your Phone *"  />
                                </div>
                                <button name='submit' type="submit" class="btnRegister">Register</button>
                               
                            </div>
                            </form>
                            <div style="background-color :black; margin-bottom: 3em;">
                            <?php

                            foreach($errors as $error){
                              echo $error . "<br>";
                            }
                            ?>
                            </div>
                          </div>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading">Apply as a Hirer</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *"  />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *"  />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *"  />
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                </div>
    
    
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                </div>
                                <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
      </div>
    </section>
    
  <div class="container-fluid">
        
    <div class="row text-muted text-center">
        <div class="col m-4">
    <h1 class="display-4 mb-4">Meet our beautiful and productive volunteers of Octobor month from each department's sector </h1>
    <div class="underline-dark mb-4"></div>
    <p class="lead">We ow these people a shared-sense of humanity and equity. <br>Want to joing them? Contact us </p>
    
        </div>
        
    </div>
  <!-- CARDSSSS -->
<section class="we" style=" background: -webkit-linear-gradient(left, #047591, #023f35); ">

    <div class="box" style=" background: -webkit-linear-gradient(left, #047591, #023f35); ">
        <div id="car-container">
          <div id="car">
            <div class="front face">
              <img src="images/admin.jpeg"/>
            </div>
            <div class="back face">
              <h1>Marry dopling</h1>
              <p class="artist">Marry dopling</p>
              <p class="date"> Organize weekly events</p>
            </div>
          </div>
        </div>
        <div id="car-container">
          <div id="car2">
            <div class="front face">
              <img src="images/cust1.jpeg"/>
            </div>
            <div class="back face">
              <h1>Youssef almazi</h1>
              <p class="artist">Youssef almazi</p>
              <p class="date">Organize Monthly events</p>
            </div>
          </div>
        </div>
        <div id="car-container">
          <div id="car3">
            <div class="front face">
              <img src="images/cust2.jpeg"/>
            </div>
            <div class="back face">
              <h1>Louis banfaloti</h1>
              <p class="artist">Louis banfaloti</p>
              <p class="date">Deliver and Recieves Services</p>
            </div>
          </div>
        </div>
      </div>
      <div class="box">
        <div id="car-container">
          <div id="car">
            <div class="front face">
              <img src="images/cust3.jpeg"/>
            </div>
            <div class="back face">
              <h1>Maria Zahabi</h1>
              <p class="artist">Mark Zahabi </p>
              <p class="date"> Map children with donation's entities</p>
            </div>
          </div>
        </div>
        <div id="car-container">
          <div id="car2">
            <div class="front face">
              <img src="images/cust5.jpeg"/>
            </div>
            <div class="back face">
              <h1>Maria Zolaykha</h1>
              <p class="artist"> Maria Zolaykha</p>
              <p class="date"> Reception</p>
            </div>
          </div>
        </div>
        <div id="car-container">
          <div id="car3">
            <div class="front face">
              <img src="images/cust6.jpeg"/>
            </div>
            <div class="back face">
              <h1>Antonio Banderas</h1>
              <p class="artist">Antonio Banderas</p>
              <p class="date"> Provide the needed functionalities for the Services </p>
            </div>
          </div>
        </div>
      </div>
    </div>
      </section>
      
</section>

</body>
</html>