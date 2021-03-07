<!DOCTYPE html>
<html>
    <head>
        <title>Crime Management System</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="<?php echo base_url() ?>css/stylehome.css">
    </head>
<body>
  <header>
    <nav>
      <div class="container-fluid top">
        <div class="row">
            <div class="col-7">
              <a href="#" class="text-decoration-none text-white"></a>
              </div>
              <div class="col-5 text-white text-end">
                  <i class="fab fa-facebook"></i>
                  <i class="fab fa-youtube"></i>
                  <i class="fab fa-twiter"></i>
                  <i class="fab fa-instagram"></i>
                </div>
        </div>
      </nav>
    </header>
          <!--Menu section-->
      <nav class="navbar navbar-expand-lg top1 log">
          <div class="container">
              <a href="#" class="text-decoration-none navbar-brand"><img src="../img/Kerala_Police_Logo.png" width="70px"><img src="../img/india.gif" width="70px"></a>
          </div>
          <div class="collapse navbar-collapse menubar">
              <ul class="navbar-nav top-nav">
                <li class="nav-item"><a href="<?php echo base_url() ?>CrimeC/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>



                  <!---Dropdown link-->

                   <!--- <div class="dropdown show">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register
                      </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>--->
              
                      <li><a href="#" class="nav-link">Register</a>
                      <div class="submenu">
                        <ul>
                          <li><a href="<?php echo base_url();?>CrimeC/viewP">Public</a></li>
                          <li><a href="<?php echo base_url();?>CrimeC/viewPolice">Police</a></li>
                          <li><a href="<?php echo base_url();?>CrimeC/viewCourt">Court</a></li>
                        </ul>
                      <!---------<li><a href="<?php echo base_url();?>CrimeC/public_home">logout</a></li>----------->
                </div></li>

               <!-- <li class="nav-item"><a href="<?php echo base_url()?>CrimeC/viewlogin" class="nav-link">Login</a></li>--> 
                <li class="nav-item"><a href="#" class="nav-link">Our Services</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
              </ul>
            </div>
      </nav>
      <!--Section1--->
        <div class="banner">
          <div class="container-fluid slide">
            <div class="row vh-100 align-items-center">
              <div class="col text-center text-white">
                <h1>CRIME MANAGEMENT SYSTEM</h1>
                <p>The Crime Record Management System is a web based application that provides facility for reporting online crimes. The proposed system specifically looks into the subject of Crime Records Management. User can register their complaints online. The system at any point of time can provide the details of existing charge sheets and their statuses. People can check missing persons details online using this system. The aim of Online Crime Reporting System will be to create a web based program using which people are able to report crime online.The system at any point of time can provide the details of the police station and the employees.</p>
              </div>
            </div>
            </div>
          </div>
      <!--Section1 end-->
      <!--section2-->
    <section class="top1 py-5">
      <div class="container">
          <div class="row text-white">
              <div class="col-3 text-center">
                <div class="back-icon p-3">
                    <i class="fas fa-user-tie fa-5x"></i>
                    <div class="py-5 text">
                      <h3>Admin</h3>
                    </div>
                    <a href="<?php echo base_url()?>CrimeC/viewlogin"class="btn btn-outline-primary">Login</a>
                </div>
             </div>
               
              <div class="col-3 text-center">
                <div  class="back-icon p-3">
                  <i class="fas fa-users fa-5x"></i>
                  <div class="py-5 text">
                    <h3>Public</h3>
                  </div>
                  <a href="<?php echo base_url()?>CrimeC/viewlogin"  class="btn btn-outline-primary">Login</a>
              </div>
            </div>

            <div class="col-3 text-center">
              <div  class="back-icon p-3">

              <a href="https://icon-library.net/icon/police-icon-9.html" title="Police Icon #300141"><img src="https://icon-library.net//images/police-icon/police-icon-9.jpg" width="60" /></a>
               
                <div class="py-5 text">
                  <h3>Police</h3>
                </div>
                <a href="<?php echo base_url()?>CrimeC/viewlogin" class="btn btn-outline-primary">Login</a>
            </div>
            </div>

            <div class="col-3 text-center">
              <div  class="back-icon p-3">
                <i class="fas fa-balance-scale fa-5x"></i>
                <div class="py-5 text">
                  <h3>Court</h3>
                </div>
                <a href="<?php echo base_url()?>CrimeC/viewlogin" class="btn btn-outline-primary">Login</a>
            </div>
          </div>

        </div>
    </div>
    <div class="container text py-5">
      <div class="row text-white top py-3">
          <div class="col-8">
          <h3>REPORT A CRIME!!</h3>
            </div>
          <div class="col-4 text-end">
          <button class="btn btn-danger btn-lg btn-block w-75"><a href="#">Click here</a><i class="fas fa-hand-pointer"></i>
            </button>
      </div>
  </div>
</div>
      <div class="container">
          <div class="row text-white top py-5" >
              <div class= "text-center">
              <h3>Our Services</h3>
              <p><marquee> Crime Prevention, Detection and Conviction of criminals depend on a highly responsive backbone of Information Management. The efficiency of the police function and the effectiveness with which it tackles crime depend on what quality of information it can derive from its existing records and how fast it can have access to it</marquee></p>
              </div>
             <div class="col-3">
                <div class="card">
                  <div class="card-body">
                    <div class="text-center">
                     </div>
                    <img class="img-fluid" src="../img/break_chain.png">
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                     </div>
                     <div class="text-center">
                        <img src="../img/Covid helpline.jpg" style="width:250px; height:250px">
                        <img src="../img/high_court1.jpg" style="width:250px; height:250px"> 
                        <img src="../img/complaints.png" style="width:250px; height:250px">
                        <img src="../img/crime3.jpg" style="width:250px; height:250px">

                        </div>
          
                  <div class="text-center p-3">
                  <h3>Emergency Call</h3>
                  <p><a href="#"><i class="fas fa-female"></i>  Womens portal:9480100100</p>
                  <p><a href="#"><i class="fas fa-child"></i>   Students portal:9581100100</p>
                  <p><a href="#"><i class="fas fa-baby"></i>   Child line:9685100100</p>
                  </div>

          
                   </div>
                  </div>
              </div>
             
            








             <!-- <div class="col-3">
                <div class="card">
                  <div class="card-body">
                    <h3>Covid Helpline</h3>
                  <img src="img/Covid helpline.jpg" width="250px" height="auto">
                  <a href="#"class="btn btn-secondary text-center">Sign Up</a>
                  </div>
                </div>
              </div>-->
                
              <div class="card top">
                <div class="card-body">
                <h3>Police Control Room</h3>
                <div class="col-8 police">
                <a href="#"><i class="fas fa-phone"></i>04842-100100</a></br>
                <a href="#"><i class="fas fa-phone"></i>8592 900 900</a></br>
               <a href="#"> <i class="fas fa-envelope-open-text"></i>  kp.kerala@gmail.com</a></br>
               <a href="#"> <i class="fab fa-whatsapp">9496035821</i></a>
                <a href="#"><i class="fab fa-whatsapp"> 9496076782</i></a></div>
                
               
                     <img src="../img/cyber1.jpg" style="width:300px; height: 300px" class="cyber1">
                
              </div>
              </div>
          </div>
      </div>
</div>      
</section>
<!--section2 end-->
<!--section3 start-->
<section>
  <div class="container">
  <h3>e-services</h3>
  <marquee>
    <div class="row" >
      <div class="col-3">
          <div class= "text-center">
            <img class="img-fluid" src="../img/ecourt-logo.jpg">
          </div>
        </div>
        <div class="col-3">
          <div class= "text-center">
            <img class="img-fluid" src="../img/pink-police.jpg" height="100%">
          </div>
        </div>
        <div class="col-3">
            <div class="text-center">
            <img class="img-fluid" src="../img/tele_logo.jpg" height="100%">
            </div>
        </div>
        <div class="col-3">
          <div class="text-center">
          <img class="img-fluid" src="../img/childlogo.jpg">
        </div>
      </div>
      </div>
      </div>
      
    </div>
  </div></marquee>
</div>
</section>
<!--section3 end-->
<!--section4 start-->
<section class="log">
  <div class="container">
    <div class="row  py-4 text-white">
      <div class="col-4">
        <div class="text-start">
          <h3>Crime Statistics</h3>
          <img class="img-fluid" src="../img/statistics.png">
        </div>
      </div>
  
        <div class="col-4">
          <div class="text-start">
            <h3>Our Links</h3>
            <ul class="list-unstyled">
              <li><a href="#"><img class="img-fluid" src="../img/logo-1.png"></a></li></br>
              <li><a href="#"><img class="img-fluid " src="../img/logo-5.png"></a></li></br>
              <li><a href="#"><img class="img-fluid" src="../img/logo-2.png"></a></li></br>
              <!--<li><a href="#"><img class="img-fluid inline" src="img/logo-8.png"></a></li></br>-->
            </ul>
          </div>
        </div>

  
        <div class="col-4">

          <div class="row">
            <div class="col-12">
           

           <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google maps in wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:400px;}</style></div></div>



            </div>

           <!-- <div class="col-4">
              <img src="img/team2.jpg" class="img-fluid">
            </div>

            <div class="col-4">
              <img src="img/team3.jpg" class="img-fluid">
            </div>-->
          </div>
        </div>
  </div>
</section>
<!--section4 end-->
<!--footer section-->
<footer>
  <div class="bg-dark text-center text-white">
  Crime Management System &copy 2021-2022
  </div>
  
  </footer>
<!--footer section end-->
</body>

<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js"> </script>

</body>		
</html>