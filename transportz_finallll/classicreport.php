<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Transportz</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 50%;
    }
    thead{
      background-color: #a9a9a9;
    }
    td, th {
      border: 1px solid #a9a9a9;
      text-align: left;
      padding: 4px;
    }
    tr:nth-child(even) {
      background-color: #ddd;
    }
    </style>
</head>

<body>
<?php include('order-advertisment.php');?> 
  <div class="hero_area">
    <!-- header section strats -->
    <section class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container d-lg-none">
          <a class="navbar-brand" href="#">
            <div class="logo-box">
              <img src="images/logo.png" alt="">
              <span>
                Transportz
              </span>
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="previewAdmin.php">Home <span class="sr-only">(current)</span></a>
              </li>
            
            </ul>
          </div>
        </nav>
        <div class="header_container ">
          <div class="logo-box">
            <img src="images/logo.png" alt="">
            <span>
              Transportz
            </span>
          </div>
          <div>
            <div class="header_top">
              <div class="header_top-contact">

                <a href="" class="ml-4">
                  <div>
                    <img src="images/phone.png" alt="" />
                  </div>
                  <span>
                    (+71) 258964785
                  </span>
                </a>
                <a href="" class="ml-4">
                  <div>
                    <img src="images/mail.png" alt="" />
                  </div>
                  <span>
                    NRNTYF@gmail.com
                  </span>
                </a>
              </div>
              <div class="header_top-social">
                <div>
                  <a href="">
                    <img src="images/fb.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/twitter.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/g-plus.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/linkedin.png" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="header_btm">
              <nav class="navbar navbar-expand-lg custom_nav-container pt-3">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link" href="previewAdmin.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                 
                    </ul>

                  </div>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", { packages: ["table"] });
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn("number", "user_id");
        data.addColumn("string", "first name");
        data.addColumn("string", "email");
        data.addColumn("string", "phone number");
        data.addColumn("int", "active");
        var table = new google.visualization.Table(
          document.getElementById("table_div")
        );
        table.draw(data, {
         // showRowNumber: true,
         sort: 'disable',
          width: "100%",
          height: "100%",
        });
      }
    </script>
    
    <div id="table_div"></div>
    <p>Description : show customers</p>

 <center>
    <table>
      <thead>
       <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Active</th>
        </tr>
      </thead> 
  <tr>
<?php
        include 'connection.php';
        $count =0;
        //feedback inner goin user;id=userid;select email 
        $sql ="SELECT user_id,firstName,email,phone_Number,active FROM customers order by user_id";
        $result =  mysqli_query($con,$sql) or die("Bad Query:$sql");
       if($result &&  mysqli_num_rows($result)>0){
         $item=0;
         while($customers=mysqli_fetch_assoc($result)){
           ?>
              <tr> 
              <td><?php echo $customers['user_id']; ?></td> 
              <td><?php echo $customers['firstName']; ?></td> 
              <td><?php echo $customers['email']; ?></td> 
              <td><?php echo $customers['phone_Number']; ?></td> 
              <td><?php echo $customers['active']; ?></td> 
              <?php
       }
       ?>
       </tr>
       </table> 
      </center>
       <?php
            $count =$item;   
       }
          for($i=0 ; $i< $count ; $i++){
          echo $print[$i];
          }
        ?>
  </body>
</html>
