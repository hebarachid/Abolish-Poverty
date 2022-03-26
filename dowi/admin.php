<?php 
session_start();
if($_SESSION['is_admin'] != 1){
header("location: /dowi/login/login.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <?php include '/ind.php';?>
<style>
  .bbody{
    font-family: 'Montserrat',sans-serif;
    background-color: #eee;
}

/*Nav bar  */


.ssidebar{
    height:100vh ;
    background: linear-gradient(rgba(0,0,0,.7),rgba(0,0,0, .9)), 
    url(images/img1.jpeg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: 5px,7px,25px,#999;
}

.bbottom-border{
    border-bottom: 1px groove #eee ;
}

.ssidebar{
    transition: all .4s;
}
.ssidebar-link:hover{
    background-color: #444;
    border-radius: 5px;
    color: red;

}
.ccurrent   {
    background-color: #f44336;
    border-radius: 7px;
    box-shadow: 2px 5px 10px #111;
    transition: all 3s;
}
.ccurrent:hover{
    background-color: #f66436;
    border-radius: 7px;
    box-shadow: 2px 5px 20px #111;
    transform: translateY(-1px);
}
.ssearch-input{
    background:  transparent;
    border: 0;
    border-radius: 0;
    border-bottom: 2px solid #999;
    transition: All .4s;
}
.ssearch-input:focus {
    background: transparent;
    box-shadow: none;
    border-bottom: 2px solid #dc3545;

}
.ssearch-button{
    border-radius: 50%;
    padding: 10px 16px;
    transition: all .4s ;
    background-color: #eee;
}

.ssearch-button:hover{
    background-color: #eee;
    transform: translateY(-1px)
}
.iicon-parent{
    position: relative;
}
.iicon-bullet::after{
    content: "";
    position: absolute;
    top: 7px;
    left: 15px;
    height: 12px;
    width: 12px;
    background-color: #f44336;
    border-radius: 50%;
}
@media(max-width: 768px){
    .ssidebar{
        position: static;
        height: auto;

    }
    .top-navbar{
        position: static;
    }
}

/*End of Nav bar  */
/* cards */
.cccard-common{
    box-shadow: 1px 2px 5px #999;
    transition: all .4s;
}

.cccard-common:hover{
    box-shadow: 2px 3px 15px #999;
    transform: translateY(-1px);
}
/* end of cards */

/* start of tasks */
.task-border{
    border-left: 3px solid #f66436;
}
/* End of tasks */


</style>


    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Admin Panel</title>
  </head>
  <section class="bbody">

        <!-- Navbar -->

       <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button"
         data-toggle="collapse" data-target="#myNavbar">
      <span class="navbar-toggler-iicon"></span>
      </button>
      <div class="collapse navbar-collapse " id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- SideBar -->
            <div class="col-xl-2 col-md-4 col-lg-3 ssidebar fixed-top">
              <a href="" class="navbar-brand text-white d-block  mx-auto text-center
              py-3 mb-4 bbottom-border" >Current Admin</a>
               
              <div class="bbottom-border pb-3">
                <img src="images/admin.jpeg" width="50" class="rounded-circle  mr-3">
                <a href="" class="text-white">Welcome </a>
              </div>
              <ul class="navbar-nav  flex-column mt-4" >
                <li class="nav-item">
                  <a href="#" class="nav-link text-white p-3 mb-2 ccurrent">
                    <i class="fas fa-home text-light fa-lg mr-3 "> </i>
                  Dashboard</a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link text-white p-3 mb-2 ssidebar-link">
                    <i class="fas fa-user text-light fa-lg mr-3 "> </i>
                  profile</a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link text-white p-3 mb-2 ssidebar-link">
                    <i class="fas fa-envelope text-light fa-lg mr-3 "> </i>
                  inbox</a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link text-white p-3 mb-2 ssidebar-link">
                    <i class="fas fa-shopping-cart text-light fa-lg mr-3 "> </i>
                  donations</a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link text-white p-3 mb-2 ssidebar-link">
                    <i class="fas fa-chart-line text-light fa-lg mr-3 "> </i>
                  Volunteers</a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link text-white p-3 mb-2 ssidebar-link">
                    <i class="fas fa-chart-bar text-light fa-lg mr-3 "> </i>
                  Charts</a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link text-white p-3 mb-2 ssidebar-link">
                    <i class="fas fa-table text-light fa-lg mr-3 "> </i>
                  Tables
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link text-white p-3 mb-2 ssidebar-link">
                    <i class="fas fa-wrench text-light fa-lg mr-3 "> </i>
                  settings</a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link text-white p-3 mb-2 ssidebar-link">
                    <i class="fas fa-file-alt text-light fa-lg mr-3 "> </i>
                  Documentation</a>
                </li>

              </ul>
            </div>

            <!--End Of SideBar -->
           
            <!-- Top Nav bar -->
            <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                </div>

                <div class="col-md-5">
                  <form >
                    <div class="input-group">
                      <input type="text" class="form-control ssearch-input "
                       placeholder="ssearch">
                      <button type="button" class="btn btn-white ssearch-button">
                        <i class="fas fa-ssearch text-danger"></i>
                      </button>
                    </div>
                  </form>
                </div>

                <div class="col-md-3">
                  <ul class="navbar-nav">
                    <li class="nav-item iicon-parent ">
                      <a href="#" class="nav-link iicon-bullet">
                        <i class="fas fa-comments text-muted fa-lg "></i>
                      </a>
                    </li>

                    <li class="nav-item iicon-parent ">
                      <a href="#" class="nav-link iicon-bullet">
                        <i class="fas fa-bell text-muted fa-lg "></i>
                      </a>
                    </li>

                    <li class="nav-item ml-md-auto">
                      <a href="#" class="nav-link  "
                      data-toggle="modal" data-target="#sign-out">
                        <i class="fas fa-sign-out-alt text-danger fa-lg "></i>
                      </a>
                    </li>


                  </ul>
                </div>
              </div>
            </div>
            <!-- eND of Top Nav bar -->

          </div>
        </div>
      </div>
       </nav>
        <!--End OF  Navbar -->

        <!-- Modal -->
        <div class="modal fade" id="sign-out">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title ">want to leave ?</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                press logout to leave
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success " data-dismiss="modal">stay here</button>
                <a href="logout.php" class="btn btn-danger ">Log Out</button>
                <ul class="navbar-nav">
                  <li class="nav-item">
                      <a href="Phase1/index.php" class="nav-link m-2 menu-item nav-active"> Home</a>
                  </li>
                  <li class="nav-item">
                   <a href="Phase1/gallery.php" class="nav-link m-2 menu-item"> Gallery</a>
               </li>
               <li class="nav-item">
                   <a href="Phase1/donate.php" class="nav-link m-2 menu-item"> Donate</a>
               </li>
               <li class="nav-item">
                   <a href="Phase1/mission.php" class="nav-link m-2 menu-item"> Our mission</a>
               </li> <li class="nav-item">
                   <a href="Phase1/Volunteer.php" class="nav-link m-2 menu-item"> Volunteer</a>
               </li>
               <li class="nav-item">
                   <a href="Phase1/Description-Blog.php" class="nav-link m-2 menu-item"> Blog</a>
               </li>
               <li class="nav-item">
                   <a href="Phase1/contact.php" class="nav-link m-2 menu-item"> Contact</a>
               </li>
               <li class="nav-item">
                <a href="/login/login.php" class="nav-link m-2 menu-item"> Sign up</a>
            </li>
            <li class="nav-item">
              <a href="/login/signup.php" class="nav-link m-2 menu-item"> Log in</a>
            </li>
              </ul>

              </div>
            </div>
          </div>
        </div>
        <!-- End of modal  -->

        <!-- cards -->
       <section>
         <div class="container-fluid">
           <div class="row mb-5">
             <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
               <div class="row pt-md-5 mt-md-3 mb-5 mb-xl-0 align-items-center">
                 
                <div class="col-xl-3 col-sm-6 p-2">
                  <div class=" cccard cccard-common">
                    <div class="cccard-body">
                      <div class="d-flex justify-content-between">
                        <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                        <div class="text-right text-secondary">
                          <h5>Donations</h5>
                          <h3>$135000</h3>
                        </div>
                      </div>
                    </div>
                    <div class="cccard-footer text-secondary">
                      <i class="fas fa-sync mr-3"></i>
                      <span>Update Now</span>
                    </div>
                  </div>
                  
                 </div>
                 
                 <div class="col-xl-3 col-sm-6 p-2">
                  <div class=" cccard cccard-common">
                    <div class="cccard-body">
                      <div class="d-flex justify-content-between">
                        <i class="fas fa-money-bill-alt  fa-3x text-success"></i>
                        <div class="text-right text-secondary">
                          <h5>expenses</h5>
                          <h3>$39000</h3>
                        </div>
                      </div>
                    </div>
                    <div class="cccard-footer text-secondary">
                      <i class="fas fa-sync mr-3"></i>
                      <span>Update Now</span>
                    </div>
                  </div>
                 </div>
                 
                 <div class="col-xl-3 col-sm-6 p-2">
                  <div class=" cccard cccard-common">
                    <div class="cccard-body">
                      <div class="d-flex justify-content-between">
                        <i class="fas fa-users fa-3x text-info"></i>
                        <div class="text-right text-secondary ">
                          <h5>users</h5>
                          <h3>$15000</h3>
                        </div>
                      </div>
                    </div>
                    <div class="cccard-footer text-secondary">
                      <i class="fas fa-sync mr-3"></i>
                      <span>Update Now</span>
                    </div>
                  </div>
                 </div>

                 <div class="col-xl-3 col-sm-6 p-2">
                  <div class=" cccard cccard-common">
                    <div class="cccard-body">
                      <div class="d-flex justify-content-between">
                        <i class="fas fa-chart-line fa-3x text-danger"></i>
                        <div class="text-right text-secondary">
                          <h5>Volunteers</h5>
                          <h3>1500</h3>
                        </div>
                      </div>
                    </div>
                    <div class="cccard-footer text-secondary">
                      <i class="fas fa-sync mr-3"></i>
                      <span>Update Now</span>
                    </div>
                  </div>

                 </div>
                 
               </div>
             </div>
           </div>
         </div>
       </section>
        <!--End of cards -->


        <!-- table -->
        <section>
          <div class="container-fluid">
            <div class="row mb-5">
              <div class="col-xl-10 col-lg-9 col-md-8 ml-auto ">
                <div class="row">
                  <div class="col-xl-6 col-12 mb-4">
                    <h3 class="text-muted text-center mb-3">Workers</h3>
                    <table class="table bg-light text-center table-striped">
                      <thead>
                        <tr class="text-muted">
                          <th>#</th>
                          <th>Name</th>
                          <th>Salary</th>
                          <th>Date</th>
                          <th>Content</th>
                        </tr>
                      </thead>
                      <tbody>
                    
                    </table>

                    <!-- pagination -->
                    <nav>

                      <ul class="pagination justify-content-center">
                        <li class="page-item ">
                          <a href="#" class="page-link py-2 px-3">
                            <span>&laquo;</span>
                          </a>
                        </li>

                      
                        <li class="page-item active">
                          <a href="#" class="page-link py-2 px-3">
                            1
                          </a>
                        </li>

                        
                          <li class="page-item">
                            <a href="#" class="page-link py-2 px-3">
                             2
                            </a>
                          </li>

                        
                            <li class="page-item">
                              <a href="#" class="page-link py-2 px-3">
                                3
                              </a>
                            </li>

                            

                        <li class="page-item">
                          <a href="#" class="page-link py-2 px-3">
                            <span>&raquo;</span>
                          </a>
                        </li>

                      </ul>
                    </nav>
                    <!-- End of  pagination -->
                    
                  </div>
                  <div class="col-xl-6 col-12 ">
                  <h3 class="text-muted text-center mb-3">  Event</h3>
                  <a class="text-center btn-sm btn-success" href="add-event.php">add event</a>
                  <table class="table table-dark table-hover text-center">

                    <thead>
                      <tr class="text-muted">
                        <th>DATE</th>
                        <th>Price</th>
                        <th>HOURS</th>
                        <th>PLACE</th>
                        <th>BAND</th>
                        <th>VOLUNTEER</th>
                      </tr>
                    </thead>
                    <?php
                      include "connection.php";
                      $query = "SELECT * FROM event";
                      $results = mysqli_query($conn, $query);
                      
                      while($row = mysqli_fetch_array($results)){
                    ?>
                    <tr>
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>
                        <td><?php echo $row["hours"]; ?></td>
                        <td><?php echo $row["place"]; ?></td>
                        <td><?php echo $row["band"]; ?></td>
                        <td><?php echo $row["volunteer"]; ?></td>
                        <form method="post" action="delete-event.php">
                        <input name="id" type="hidden" value='<?php echo $row['id'] ?>' >
                        <td><?php echo "<button name='delete_event' type='submit'>del</button>" ?></td>
                        </form>
                        <td><?php echo "<a class='btn-danger text-light btn-sm' href='edit-event.php?id=".$row['id']."' type='submit'>edit</a>" ?></td>
                    </tr>
                      <?php } ?>

                    

                  </table>
                
                   <!-- pagination -->
                   <nav>
                  
                    <ul class="pagination justify-content-center">
                      <li class="page-item ">
                        <a href="#" class="page-link py-2 px-3">
                          <span>Previous</span>
                        </a>
                      </li>

                    
                      <li class="page-item active">
                        <a href="#" class="page-link py-2 px-3">
                          1
                        </a>
                      </li>

                      
                        <li class="page-item">
                          <a href="#" class="page-link py-2 px-3">
                           2
                          </a>
                        </li>

                      
                          <li class="page-item">
                            <a href="#" class="page-link py-2 px-3">
                              3
                            </a>
                          </li>

                          

                      <li class="page-item">
                        <a href="#" class="page-link py-2 px-3">
                          <span>Next</span>
                        </a>
                      </li>

                    </ul>
                  </nav>
                </div>
                  <!-- End of  pagination -->
                </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end of table -->
        <section>
          <div class="container-fluid">
            <div class="row mb-5">
              <div class="col-xl-10 col-lg-9 col-md-8 ml-auto ">
                <div class="row">
                  <div class="col-xl-6 col-12 mb-4">
                    <h3 class="text-muted text-center mb-3">Donations</h3>
                    <table class="table bg-light text-center table-striped">
                      <thead>
                        <tr class="text-muted">
                          <th>#</th>
                          <th>Name</th>
                          <th>Salary</th>
                          <th>Date</th>
                          <th>Content</th>
                        </tr>
                      </thead>
                      <tbody>
                    
                    </table>

                    <!-- pagination -->
                    <nav>

                      <ul class="pagination justify-content-center">
                        <li class="page-item ">
                          <a href="#" class="page-link py-2 px-3">
                            <span>&laquo;</span>
                          </a>
                        </li>

                      
                        <li class="page-item active">
                          <a href="#" class="page-link py-2 px-3">
                            1
                          </a>
                        </li>

                        
                          <li class="page-item">
                            <a href="#" class="page-link py-2 px-3">
                             2
                            </a>
                          </li>

                        
                            <li class="page-item">
                              <a href="#" class="page-link py-2 px-3">
                                3
                              </a>
                            </li>

                            

                        <li class="page-item">
                          <a href="#" class="page-link py-2 px-3">
                            <span>&raquo;</span>
                          </a>
                        </li>

                      </ul>
                    </nav>
                    <!-- End of  pagination -->
                    
                  </div>
                  <div class="col-xl-6 col-12 ">
                  <h3 class="text-muted text-center mb-3">Volunteers</h3>
                  <table class="table table-dark table-hover text-center">

                    <thead>
                      <tr class="text-muted">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                      </tr>
                    </thead>
                    <?php
                      $query = "SELECT * FROM volunteer";
                      $results = mysqli_query($conn, $query);
                      
                      while($row = mysqli_fetch_array($results)){
                    ?>
                    <tr>
                        <td><?php echo $row["first_name"]; ?></td>
                        <td><?php echo $row["last_name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                    
                    </tr>
                      <?php } ?>

                    

                  </table>
                
                   <!-- pagination -->
                   <nav>
                  
                    <ul class="pagination justify-content-center">
                      <li class="page-item ">
                        <a href="#" class="page-link py-2 px-3">
                          <span>Previous</span>
                        </a>
                      </li>

                    
                      <li class="page-item active">
                        <a href="#" class="page-link py-2 px-3">
                          1
                        </a>
                      </li>

                      
                        <li class="page-item">
                          <a href="#" class="page-link py-2 px-3">
                           2
                          </a>
                        </li>

                      
                          <li class="page-item">
                            <a href="#" class="page-link py-2 px-3">
                              3
                            </a>
                          </li>

                          

                      <li class="page-item">
                        <a href="#" class="page-link py-2 px-3">
                          <span>Next</span>
                        </a>
                      </li>

                    </ul>
                  </nav>
                </div>
                  <!-- End of  pagination -->
                </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Progress\ task list -->
         
        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row mb-4 align-items-center">
                  <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                    <div class="bg-dark text-white p-4 rounded">
                      
                      
                      <h4 class="mb-5"> Interest Rate</h4>
                      <h6 class="mb-3">Event1</h6>
                      <div class="progress mb-4" style="height: 20px">
                        <div class="progress-bar font-weight-bold progress-bar-striped"
                         style="width:91%">
                          91%
                        </div>
                      </div>

                      
                      <h6 class="mb-3">Event2</h6>
                      <div class="progress mb-4" style="height: 20px">
                        <div class="bg-success progress-bar font-weight-bold progress-bar-striped"
                         style="width:82%">
                          82%
                        </div>
                      </div>

                      
                      <h6 class="mb-3">Event3</h6>
                      <div class="progress mb-4" style="height: 20px">
                        <div class=" bg-danger progress-bar font-weight-bold progress-bar-striped"
                         style="width:67%">
                          67%
                        </div>
                      </div>

                    
                      <h6 class="mb-3">Event3</h6>
                      <div class="progress mb-4" style="height: 20px">
                        <div class=" bg-info progress-bar font-weight-bold progress-bar-striped"
                         style="width:10%">
                          10%
                        </div>
                      </div>



                    </div>
                  </div>
                  <div class="col-xl-6 col-12">
                  <!-- start of task list -->

                  <h4 class="text-muted p-3 mb-3 ">Tasks</h4>

                  <div class="container-fluid bg-white">
                    <div class="row py-3 mb-4 task-border align-items-center">
                      <div class="col-1">
                        <input type="checkbox" checked>
                      </div>
                      <div class="col-sm-9 col-8">
                        Recruit more volunteers
                      </div>
                      <div class="col-1">
                        <a href="#" data-toggle="tooltip" title="<h6> edit </h6>  " data-html="true"
                           data-placement="Top">
                          <i class="fas fa-edit fa-lg text-success mr-2"></i>
                        </a>
                      </div>
                      <div class="col-1">
                        <a href="#" data-toggle="tooltip" title="<h6> Delete </h6>  " data-html="true"
                           data-placement="Top">
                          <i class="fas fa-trash-alt fa-lg text-danger "></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="container-fluid bg-white">
                    <div class="row py-3 mb-4 task-border align-items-center">
                      <div class="col-1">
                        <input type="checkbox" checked>
                      </div>
                      <div class="col-sm-9 col-8">
                       Gather donation
                      </div>
                      <div class="col-1">
                        <a href="#" data-toggle="tooltip" title="<h6> edit </h6>  " data-html="true"
                           data-placement="Top">
                          <i class="fas fa-edit fa-lg text-success mr-2"></i>
                        </a>
                      </div>
                      <div class="col-1">
                        <a href="#" data-toggle="tooltip" title="<h6> Delete </h6>  " data-html="true"
                           data-placement="Top">
                          <i class="fas fa-trash-alt fa-lg text-danger "></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="container-fluid bg-white">
                    <div class="row py-3 mb-4 task-border align-items-center">
                      <div class="col-1">
                        <input type="checkbox" checked>
                      </div>
                      <div class="col-sm-9 col-8">
                        Recruit more workers
                      </div>
                      <div class="col-1">
                        <a href="#" data-toggle="tooltip" title="<h6> edit </h6>  " data-html="true"
                           data-placement="Top">
                          <i class="fas fa-edit fa-lg text-success mr-2"></i>
                        </a>
                      </div>
                      <div class="col-1">
                        <a href="#" data-toggle="tooltip" title="<h6> Delete </h6>  " data-html="true"
                           data-placement="Top">
                          <i class="fas fa-trash-alt fa-lg text-danger "></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="container-fluid bg-white">
                    <div class="row py-3 mb-4 task-border align-items-center">
                      <div class="col-1">
                        <input type="checkbox" checked>
                      </div>
                      <div class="col-sm-9 col-8">
                       Organize events
                      </div>
                      <div class="col-1">
                        <a href="#" data-toggle="tooltip" title="<h6> edit </h6>  " data-html="true"
                           data-placement="Top">
                          <i class="fas fa-edit fa-lg text-success mr-2"></i>
                        </a>
                      </div>
                      <div class="col-1">
                        <a href="#" data-toggle="tooltip" title="<h6> Delete </h6>  " data-html="true"
                           data-placement="Top">
                          <i class="fas fa-trash-alt fa-lg text-danger "></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="container-fluid bg-white">
                    <div class="row py-3 mb-4 task-border align-items-center">
                      <div class="col-1">
                        <input type="checkbox" checked>
                      </div>
                      <div class="col-sm-9 col-8">
                        Estimate poor people in Gana
                      </div>
                      <div class="col-1">
                        <a href="#" data-toggle="tooltip" title="<h6> edit </h6>  " data-html="true"
                           data-placement="Top">
                          <i class="fas fa-edit fa-lg text-success mr-2"></i>
                        </a>
                      </div>
                      <div class="col-1">
                        <a href="#" data-toggle="tooltip" title="<h6> Delete </h6>  " data-html="true"
                           data-placement="Top">
                          <i class="fas fa-trash-alt fa-lg text-danger "></i>
                        </a>
                      </div>
                    </div>
                  </div>



                </div>
                </div>
              </div>
            </div>
          </div>
        </section>
          
        

        <!--End of  Progress\ task list -->
        <style> 
/* general styling */


.bbbody {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  align-items: center;
  height: 100%;
  margin: 0;
  display: flex;
  font-family: -apple-system, 
    BlinkMacSystemFont, 
    "Segoe UI", 
    Roboto, 
    Oxygen-Sans, 
    Ubuntu, 
    Cantarell, 
    "Helvetica Neue", 
    sans-serif;
}

.bbbody .con{
  margin: 0 auto;
  text-align: center;
}

.bbbody h1 {
  font-weight: normal;
  letter-spacing: .125rem;
  text-transform: uppercase;
}

.bbbody li {
  display: inline-block;
  font-size: 1.5em;
  list-style-type: none;
  padding: 1em;
  text-transform: uppercase;
}

.bbbody li span {
  display: block;
  font-size: 4.5rem;
}

.bbbody .mes {
  font-size: 4rem;
}

.bbbody #con {
  display: none;
  padding: 1rem;
}

.bbbody .emoji {
  padding: 0 .25rem;
}

@media all and (max-width: 768px) {
  .bbbody h1 {
    font-size: 1.5rem;
  }
  
  .bbbody li {
    font-size: 1.125rem;
    padding: .75rem;
  }
  
 .bbbody li span {
    font-size: 3.375rem;
  }
}
        </style>
       <script>(function () {
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  let birthday = "Feb 2, 2021 00:00:00",
      countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        let now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          let headline = document.getElementById("headline"),
              countdown = document.getElementById("countdown"),
              content = document.getElementById("content");

          headline.innerText = "It's the first event";
          countdown.style.display = "none";
          content.style.display = "block";

          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
       </script>
        <!-- Activities /quick post-->
        <section class="bbbody">
        <div class="con">
  <h1 id="headline">Countdown to the first event:</h1>
  <div id="countdown">
    <ul>
      <li><span id="days"></span>days</li>
      <li><span id="hours"></span>Hours</li>
      <li><span id="minutes"></span>Minutes</li>
      <li><span id="seconds"></span>Seconds</li>
    </ul>
  </div>
  <div class="mes">
    <div id="con">
      <span class="emoji">🥳</span>
      <span class="emoji">🎉</span>
      <span class="emoji">🎂</span>
    </div>
  </div>
</div>
</section>
        <!-- Footer -->
        <Footer>
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row border-top pt-3">
                  <div class="col-lg-6 text-center ">
                    <ul class="list-inline">
                      <li class="list-inline-item mr-2">
                        <a href="#" class="text-dark ">AdminPannel</a>
                      </li>
                      <li class="list-inline-item mr-2">
                        <a href="#" class="text-dark ">About</a>
                      </li>

                      <li class="list-inline-item mr-2">
                        <a href="#" class="text-dark ">Support</a>
                      </li>

                      <li class="list-inline-item mr-2">
                        <a href="#" class="text-dark ">Blog</a>
                      </li>

                    </ul>
                  </div>
                  <div class="col-lg-6 text-center ">
                    <p>&copy;2020 Copyright.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </Footer>
        <!--End of Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e6491a4ae6.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="store.js"></script>
  
  </section>
</html>