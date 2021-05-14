

 !<!doctype html>
<html>
    <head>
        <title>Covid Stats</title>
        <?php include 'link/links.php'; ?>
        <?php include 'css/style.php'; ?>
    </head>
    <body onload="fetch()">
        <nav class="navbar navbar-expand-lg  nav_style p-3">
            <a class="navbar-brand pl-5" href="#">COVID-19</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto pr-5 pt-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                     
                    <li class="nav-item">
                        <a class="nav-link" href="inidacoronalive.php">India Corona Live</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="indiadaywise.php">India Corona Daywise</a>
                    </li>

                    
                </ul>
            </div>
        </nav>


        <!--        Corona Latest Update-->
        <section class="corona_update container-fluid">
            <div class="mb-3 mt-5">
                <h3 class="text-uppercase text-center mb-5">covid-19 live updates of the india day wise</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    
                    <?php
 
 $data= file_get_contents('https://api.covid19india.org/data.json');
 $daywise= json_decode($data,true);
 
 
 
  $totalcount= count($daywise ['cases_time_series']);
 
 
 $i=0;
 while($i < $totalcount ){
     
     ?>
                    
                    <tr>
                        <th class="text-left" >
                            Date & Month
                        </th>
                         
                    </tr>
                    <tr>
                        <td colspan="6" class="text-left"> <?php echo $daywise['cases_time_series'][$i]['date']."<br>";
                            ?>
                        </td>
                    </tr>
     
                    <tr class="text-capitalize text-white">
                        <th style="color:#fff;background:#2196f3;">
                            total confirmed
                        </th>
                        <th style="color:#fff;background:#ffc107;">
                             daily confirmed
                        </th>
                        <th style="color:#fff;background:#008C76FF;">
                            daily recovered
                        </th>
                        <th style="color:#fff;background:#e91e7f;">
                             daily deceased
                        </th>
                        <th style="color:#fff;background:#4caf50;">
                            total  recovered
                        </th>
                        <th style="color:#fff;background:#EE2737FF;">
                            total  deceased
                        </th>
                    </tr>
                    
                    <tr class="mb-5">
                        <td style="background:#bed2f3;"><?php echo $daywise['cases_time_series'][$i]['totalconfirmed']."<br>";
                            ?>
                        </td> 
                        <td style="background:#ffe493;"><?php echo $daywise['cases_time_series'][$i]['dailyconfirmed']."<br>";
                            ?>
                        </td> 
                        <td style="background:#9ED9CCFF;"><?php echo $daywise['cases_time_series'][$i]['dailyrecovered']."<br>";
                            ?>
                        </td> 
                        
                        <td style="background:#fc95c6;"><?php echo $daywise['cases_time_series'][$i]['dailydeceased']."<br>";
                            ?>
                        </td> 
                        <td style="background:#88d28b;"><?php echo $daywise['cases_time_series'][$i]['totalrecovered']."<br>";
                            ?>
                        </td> 
                        <td style="background:#fbb9a1;"><?php echo $daywise['cases_time_series'][$i]['totaldeceased']."<br>";
                            ?>
                        </td> 
                    </tr>
 
     
     <?php
     $i++;
 }
 
 
 ?>
                        
                </table>
            </div>
        </div>
    </section>


    <div class="container scrolltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topfunction()" id="myBtn">

        </i>
    </div>
    <!--        Footer Section-->
    <<footer class="mt-5">
        <div class="footer_style text-white text-center container-fluid">
            <p>Copyright by Hardik Sanghi</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript">



            mybutton = document.getElementById("myBtn");
            window.onscroll = function () {
                scrollFunction()
            };
            function scrollFunction() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    mybutton.style.display = "block";

                } else {
                    mybutton.style.display = "none";
                }
            }
            function topfunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }


    </script>

</body>
</html>

