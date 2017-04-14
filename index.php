<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <head>
        <?php
            //logic goes here
            $date = time();
            ?>
        <meta charset="utf-8">
        <!--<link href="https://gavinscodetest.tk/css/style.css?<?php echo $date ?>" rel="stylesheet" type="text/css">-->
        </link>
        <script src="https://gavinscodetest.tk/js/1jquery.js"></script>
        <script src="https://gavinscodetest.tk/js/sprinkler.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title></title>
    </head>
    <body class="w3-blue-grey">
        <center>         
            <div class="w3-container w3-hide-medium w3-hide-small w3-row"  style="width: 75%;margin-top:75px;">   
                <div class="w3-container w3-rest w3-light-grey w3-padding-16 ">
                <!--    <span onclick="this.parentElement.style.display='none'" class="w3-button w3-light-grey w3-large w3-display-topright">
                        &times;
                    </span> -->
                    <span class="w3-center ">
                        Welcome to your PiMation Control Panel!
                    </span>
                    
                </div>
                <div class="w3-bar w3-cyan">      
                    <div class="w3-dropdown-hover w3-left">
                        <button class="w3-button w3-indigo">Modules</button>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4">
                            <center>
                                <?php include ('modules/index.php'); ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="w3-container w3-white">
                
                    <hr>
                    <span class="w3-left ">
                        You currently have <?php echo $a ?> modules installed.
                    </span>
                    <br>
                    <hr>
                    <span class="w3-left">
                        It is currently:  
                        <span id="time">
                            loading...
                        </span>
                    </span>
                    <br>
                    <hr>
                </div>
                <div class="w3-container w3-cyan w3-padding-16">
                    Copyright (c) 2017 Undefined Industries | <a href="LICENSE" style="text-decoration:none;">License</a>
                </div>
            </div>
            <div class="w3-hide-large">
                <div class="w3-container w3-rest w3-light-grey w3-padding-16 ">
                <!--    <span onclick="this.parentElement.style.display='none'" class="w3-button w3-light-grey w3-large w3-display-topright">
                        &times;
                    </span> -->
                    <span class="w3-center ">
                        Welcome to your PiMation Control Panel!
                    </span>
                    
                </div>
                <div class=" w3-cyan w3-bar">
                    <div class="w3-dropdown-click w3-left w3-card-4">
                        <i class="w3-button w3-indigo fa fa-bars w3-xlarge" onclick="myFunction();" ></i>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4" id="drop">
                            <center>
                                <?php include ('modules/index.php'); ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="w3-container w3-white">
                    <hr>
                    <span class="w3-left ">
                        You currently have <?php echo $a ?> modules installed.
                    </span>
                    <br>
                    <hr>
                    <span class="w3-left">
                        It is currently:  
                            <span id="time">
                                loading....
                            </span>
                    </span>
                    <br>
                    <hr>
                </div>
                <div class="w3-container w3-cyan w3-padding-16">
                    Copyright (c) 2017 Undefined Industries
                </div>
            </div>
            
        </center>
            <script>
                function myFunction() {
                    var x = document.getElementById("drop");
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                    } else { 
                        x.className = x.className.replace(" w3-show", "");
                    }
                }
                setInterval(function(){ 
                    var d = new Date();
                    document.getElementById("time").innerHTML = d.toUTCString();
                }, 1000);
        </script>
    </body>
</html>