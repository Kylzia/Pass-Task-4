<!DOCTYPE html>
<html class="theme-cyan cdc-page-type-content cdc-2020" lang="en-us">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="home_files/bootstrap.css">
    <link rel="stylesheet" href="home_files/app.css">
       
    <title>Vaccine Registration Form | COVID-19 Info Center</title>
    <meta name="description" content="">
    <meta name="keywords" content="">    
</head>

<body>
 
    <div class="container-fluid site-title">
    <!-- <div class=""> -->
        <div class="container">
            <div class="row">
                <h3>L1-team06</h3>
            </div>
        </div>
    </div>
  
    <div id="cdc-meganav-wrapper">
        
        <div class="container" id="cdc-meganav-bar">
            
            <nav class="navbar navbar-expand-xl yamm">
            
                <ul class="nav navbar-nav nav-justified w-100">
                  
                    <li class="nav-item" id="menu-home">
                        <a class="nav-link" href="home.html">
                            Home                        
                        </a>
                    </li>

                    <li class="nav-item" id="menu1">
                        <a class="nav-link" href="page1.html">
                            Pfizer-BioNTech Vaccine        
                        </a>
                    </li>

                    <li class="nav-item" id="menu2">
                        <a class="nav-link" href="page2.html">
                            Johnson and Johnson Vaccine                        
                        </a>
                    </li>

                    <li class="nav-item" id="menu3">
                        <a class="nav-link" href="page3.html">
                            ZF2001 Vaccine                        
                        </a>
                    </li>

                    <li class="nav-item" id="menu4">
                        <a class="nav-link" href="page4.html">
                            Sinovac Vaccine                        
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
           
    <!-- Page Content Wrap -->
    <div class="container d-flex flex-wrap body-wrapper bg-white">
    
        <!-- Content -->
        <main class="col-xl-9 order-xl-2">

            <div class="row">
             
                <div class="col content">
                
                    <div class="row">
                        <h2 id="content" class="open d-lg-block">Please fill in this form and send us.</h2>
                        <br>
                        <br>
                        <br>
                        
                    </div>
                    
                 
                </div>
            </div>
            <br>            
            <form action="registration_form1.php" method="post">
                <label for="inputName">Name:<sup>*</sup></label>
                <input type="text" name="name" id="inputName">
            
                <br>
                <br>
                <label for="NRIC">Identification Number:<sup>*</sup></label>
                <input type="text" name="nric" id="nric">
            
                <br>
                <br>
                <label for="inputEmail">Email:<sup>*</sup></label>
                <input type="text" name="email" id="inputEmail">
            
                <br>
                <br>
                <label for="inputSubject">Contact Number:</label>
                <input type="text" name="subject" id="inputSubject">
                
                <br>
                <br>
                <label for="inputSubject">Gender:</label>
                <input type="radio" name="gender" id="inputEmail"<?php if(isset($gender) && $gender == "female") echo"checked";?> value="female"> Female
                <input type="radio" name="gender" id="inputEmail"<?php if(isset($gender) && $gender == "male") echo"checked";?> value="male"> Male
                <input type="radio" name="gender" id="inputEmail"<?php if(isset($gender) && $gender == "other") echo"checked";?> value="other"> Other
                
                <br>
                <br>
                <input type="submit" name="submit_btn" value="Submit">
                <input type="reset" value="Reset">
            </form>
                
            <?php
                if(isset($_POST['submit_btn'])) {
                    $name = $_POST['name'];
                    $nric = $_POST['nric'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $gender = $_POST['gender'];
                    $text = $name . "," . $nric . "," . $email . "," . $subject . "," . $gender .  "\n";
                    file_put_contents($_POST['nric'] . '.txt', $text);    
					
					echo("<script>location.href = 'thankyou_page.html?msg=$msg';</script>");
                }
            ?>
            <br>
     
        </main>
                            
    </div> 
            
    <div class="container-fluid">
        <div class="container">
        
            <div class="card-body bg-quaternary">
                    
                <h5>Disclaimer</h5>
                <p style="font-size:14px;">This website is created mainly for educational and non-commercial use only. It is a 
                partial fulfillment for completion of unit SWE20001 - Development Project 1 offered in 
                Swinburne University of Technology, Sarawak Campus. The web-master and author(s) do not 
                represent the business entity. The content of the pages of this website might be out-dated 
                or inaccurate, thus, the author(s) and web-master does not take any responsibility for 
                incorrect information disseminated or cited from this website.</p>
             
            </div>
            <br/>
        </div>
    </div>
    
</body>
</html>