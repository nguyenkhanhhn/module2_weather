<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Regular Weather Report Flat Responsive Widget Template :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Regular Weather Report template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
    <link href='//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- //web font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
        }

        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #2196F3;
            color: white;
        }

        .topnav .search-container {
            float: right;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .topnav .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .search-container button:hover {
            background: #ccc;
        }

        @media screen and (max-width: 600px) {
            .topnav .search-container {
                float: none;
            }
            .topnav a, .topnav input[type=text], .topnav .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }
    </style>
    <!-- js -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items : 6,
                itemsDesktop : [640,5],
                itemsDesktopSmall : [414,4]

            });

        });
    </script>
    <!-- //js -->
</head>
<body onload="startTime()">
<div class="search-containe>
    <form action="/action_page.php">
        <input type="text" placeholder="Tìm kiếm.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
<!-- main -->
<div class="main">
    <h1>Regular Weather Report</h1>
    <div class="main-wthree-row">
        <div class="agileits-top">
            <div class="agileinfo-top-row">
                <div class="agileinfo-top-img">
                    <span> </span>
                </div>
                <h3>{{$data->main->temp-273}}<sup class="degree">°</sup><span>C</span></h3>
                <p>{{$data->name}}</p>
                <div class="agileinfo-top-time">
                    <div class="date-time">
                        <div class="dmy">
                            <div id="txt"></div>
                            <div class="date">
                                <!-- Date-JavaScript -->
                                <script type="text/javascript">
                                    var mydate=new Date()
                                    var year=mydate.getYear()
                                    if(year<1000)
                                        year+=1900
                                    var day=mydate.getDay()
                                    var month=mydate.getMonth()
                                    var daym=mydate.getDate()
                                    if(daym<10)
                                        daym="0"+daym
                                    var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
                                    var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
                                    document.write(""+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"")
                                </script>
                                <!-- //Date-JavaScript -->
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3ls-bottom">
            <h2>Today's Weather </h2>
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="biseller-column">
                        <p>10AM</p>
                        <a class="lightbox" href="#">
                            <img src="images/1.png" alt=""/>
                        </a>
                        <p>20<sup class="degree">°</sup></p>
                    </div>
                </div>
                <div class="item">
                    <div class="biseller-column">
                        <p>11AM</p>
                        <a class="lightbox" href="#">
                            <img src="images/1.png" alt=""/>
                        </a>
                        <p>22<sup class="degree">°</sup></p>
                    </div>
                </div>
                <div class="item">
                    <div class="biseller-column">
                        <p>12PM</p>
                        <a class="lightbox" href="#">
                            <img src="images/2.png" alt=""/>
                        </a>
                        <p>22<sup class="degree">°</sup></p>
                    </div>
                </div>
                <div class="item">
                    <div class="biseller-column">
                        <p>1PM</p>
                        <a class="lightbox" href="#">
                            <img src="images/3.png" alt=""/>
                        </a>
                        <p>24<sup class="degree">°</sup></p>
                    </div>
                </div>
                <div class="item">
                    <div class="biseller-column">
                        <p>2PM</p>
                        <a class="lightbox" href="#">
                            <img src="images/4.png" alt=""/>
                        </a>
                        <p>23<sup class="degree">°</sup></p>
                    </div>
                </div>
                <div class="item">
                    <div class="biseller-column">
                        <p> 3PM</p>
                        <a class="lightbox" href="#">
                            <img src="images/4.png" alt=""/>
                        </a>
                        <p>22<sup class="degree">°</sup></p>
                    </div>
                </div>
                <div class="item">
                    <div class="biseller-column">
                        <p>4PM</p>
                        <a class="lightbox" href="#">
                            <img src="images/2.png" alt=""/>
                        </a>
                        <p>20<sup class="degree">°</sup></p>
                    </div>
                </div>
                <div class="item">
                    <div class="biseller-column">
                        <p>5PM</p>
                        <a class="lightbox" href="#">
                            <img src="images/2.png" alt=""/>
                        </a>
                        <p>20<sup class="degree">°</sup></p>
                    </div>
                </div>
                <div class="item">
                    <div class="biseller-column">
                        <p>6PM</p>
                        <a class="lightbox" href="#">
                            <img src="images/1.png" alt=""/>
                        </a>
                        <p>20<sup class="degree">°</sup></p>
                    </div>
                </div>
                <div class="item">
                    <div class="biseller-column">
                        <p>7PM</p>
                        <a class="lightbox" href="#">
                            <img src="images/1.png" alt=""/>
                        </a>
                        <p>20<sup class="degree">°</sup></p>
                    </div>
                </div>
                <div class="item">
                    <div class="biseller-column">
                        <p>8PM</p>
                        <a class="lightbox" href="#">
                            <img src="images/1.png" alt=""/>
                        </a>
                        <p>20<sup class="degree">°</sup></p>
                    </div>
                </div>
                <div class="item">
                    <div class="biseller-column">
                        <p>9PM</p>
                        <a class="lightbox" href="#">
                            <img src="images/1.png" alt=""/>
                        </a>
                        <p>20<sup class="degree">°</sup></p>
                    </div>
                </div>
                <div class="item">
                    <div class="biseller-column">
                        <p>10PM</p>
                        <a class="lightbox" href="#">
                            <img src="images/1.png" alt=""/>
                        </a>
                        <p>20<sup class="degree">°</sup></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3ls-bottom2">
            <div class="ac-container">
                <input id="ac-1" name="accordion-1" type="checkbox" />
                <label for="ac-1" class="grid1"> Week</label>
                <article class="ac-small">
                    <div class="wthree-grids">
                        <div class="wthree-grids-row">
                            <ul class="top">
                                <li>Monday </li>
                                <li class="wthree-img"><img src="images/2.png" alt=""/> </li>
                                <li class="wthree-temp"> 25 <sup class="degree">°</sup></li>
                                <li class="wthree-temp"> 20 <sup class="degree">°</sup></li>
                            </ul>
                            <div class="clear"> </div>
                        </div>
                        <div class="wthree-grids-row">
                            <ul>
                                <li>Tuesday</li>
                                <li class="wthree-img"><img src="images/4.png" alt=""/> </li>
                                <li class="wthree-temp"> 27 <sup class="degree">°</sup></li>
                                <li class="wthree-temp"> 18 <sup class="degree">°</sup></li>
                            </ul>
                            <div class="clear"> </div>
                        </div>
                        <div class="wthree-grids-row">
                            <ul>
                                <li>Wednesday</li>
                                <li class="wthree-img"><img src="images/3.png" alt=""/> </li>
                                <li class="wthree-temp"> 30 <sup class="degree">°</sup></li>
                                <li class="wthree-temp"> 20 <sup class="degree">°</sup></li>
                            </ul>
                            <div class="clear"> </div>
                        </div>
                        <div class="wthree-grids-row">
                            <ul>
                                <li>Thursday </li>
                                <li class="wthree-img"><img src="images/3.png" alt=""/> </li>
                                <li class="wthree-temp"> 30 <sup class="degree">°</sup></li>
                                <li class="wthree-temp"> 18 <sup class="degree">°</sup></li>
                            </ul>
                            <div class="clear"> </div>
                        </div>
                        <div class="wthree-grids-row">
                            <ul>
                                <li>Friday</li>
                                <li class="wthree-img"><img src="images/4.png" alt=""/> </li>
                                <li class="wthree-temp"> 31 <sup class="degree">°</sup></li>
                                <li class="wthree-temp"> 19 <sup class="degree">°</sup></li>
                            </ul>
                            <div class="clear"> </div>
                        </div>
                        <div class="wthree-grids-row">
                            <ul>
                                <li>Saturday </li>
                                <li class="wthree-img"><img src="images/2.png" alt=""/> </li>
                                <li class="wthree-temp"> 30 <sup class="degree">°</sup></li>
                                <li class="wthree-temp"> 16 <sup class="degree">°</sup></li>
                            </ul>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<!-- //main -->
<!-- copyright -->
<div class="copyright">
    <p> © 2016 Regular Weather Report . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
</div>
<!-- //copyright -->
<!-- Time-JavaScript -->
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML =
            h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i}; // add zero in front of numbers < 10
        return i;
    }
</script>
<!-- //Time-JavaScript -->
</body>
</html>
