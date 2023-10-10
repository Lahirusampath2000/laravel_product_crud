<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.0/components/abouts/about-1/assets/css/about-1.css" />

    <style>
        .neon-text {
            color: #fff; /* Set text color to white or another bright color */
            text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #0ff; /* Adjust the color and shadow size as needed */
        }

        .team-section h3 {
            margin-right: 20px;
        }

        .dt-container {
            color: #fff; 
            text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #0ff; 
            font-family: arial;
            font-weight: bold;
            border:1px solid #FFD700;
            width:340px;
            padding:10px;
            margin-left: auto;
            margin-right: 20px;
        }
    </style>
</head>
<body  style="background-image: url('aboutus-img/abus2.jpg'); background-size: cover; background-position: center;" onLoad="renderTime();">

    <script>
        function renderTime(){
            //date
            var mydate = new Date();
            var year =mydate.getYear();
                if(year <1000){
                    year +=1900
                }
            var day = mydate.getDay();
            var month =mydate.getMonth();
            var daym = mydate.getDate();
            var dayarray = new Array("Sunday,","Monday,","Tuesday,","Wednesday,","Thursday,","Friday,","Saturday,");
            var montharray= new Array("January","February","March","April","May","June","July","August","September","October","November","December");
            //date end

            //Time
            var currentTime= new Date();
            var h= currentTime.getHours();
            var m= currentTime.getMinutes();
            var s= currentTime.getSeconds();
                if(h==24){
                    h=0;
                }else if(h>12){
                    h=h-0;
                }

                if(h<10){
                    h="0"+h;
                }
                if(m<10){
                    m="0"+m;
                }
                if(s<10){
                    s="0"+s;
                }
                var myClock=document.getElementById("clockDisplay");
                myClock.textContent=""+dayarray[day]+" "+daym+" "+montharray[month]+" "+year+" | "+h+":"+m+":"+s;
                myClock.innerText=""+dayarray[day]+" "+daym+" "+montharray[month]+" "+year+" | "+h+":"+m+":"+s;

                setTimeout("renderTime()",1000);
        } 
        renderTime();      
    </script>
    <div id="clockDisplay" class="dt-container"></div>
    <section class="py-3 py-md-5 py-xl-8">
    
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-lg-6 col-xl-5">
             <!-- Team Section -->
             <div class="team-section">
                                <h3 class="h2 neon-text  mb-3"  style="text-align:center">Our Team</h3>
                                <br>
                                <div class="row team-images">
                                    <div class="col-6 col-md-6 mb-4">
                                        <img src="aboutus-img/avatar1.png" alt="Team Member 1" style="width: 100px; height: auto;">
                                    </div>
                                    <div class="col-6 col-md-6 mb-4">
                                        <img src="aboutus-img/avatar2.png" alt="Team Member 2" style="width: 100px; height: auto;">
                                    </div>
                                    
                                    <div class="col-6 col-md-6">
                                        <img src="aboutus-img/avatar3.png" alt="Team Member 3" style="width: 100px; height: auto;">
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <img src="aboutus-img/avatar4.png" alt="Team Member 4" style="width: 100px; height: auto;">
                                    </div>
                                </div>
                </div>
                            <!-- End Team Section -->
        </div>
        <div class="col-12 col-lg-6 col-xl-7">
            <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
                <h2 class="h1 mb-3 neon-text" >Who Are We?</h2>
                <p class="lead fs-4 text-secondary mb-3"  >At Family supermarket, we are more than just a place to shop – we're your community hub for fresh experiences and quality essentials. Rooted in a passion for providing families with wholesome choices, we strive to be the heartbeat of your neighborhood. From locally sourced produce to a diverse selection of international goods, our commitment is to offer a delightful shopping journey that nourishes both body and soul. Discover the difference at Family supermarket, where every aisle tells a story of quality, care, and the joy of bringing people together through exceptional products and personalized service."</p>
                
                
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</body>
</html>