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
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutid">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sympid">Symptoms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#preventid">Prevention</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inidacoronalive.php">India Corona Live</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="indiadaywise.php">India Corona  Day-Wise</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contactid">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main_header">
            <div class="row w-100 h-100">
                <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                    <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                        <img src="images/1.png" alt="img" width="300"height="300"/>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                    <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                        <h1>Let's Stay & Safe Fight Together Against Cor <span class="animation"><img src="images/3.jpg" alt="alt" width="60" height="60"/></span> na Virus</h1>
                    </div>
                </div>
            </div>
        </div>

        <!--        Corona Latest Update-->
        <section class="corona_update container-fluid">
            <div class="mb-3">
                <h3 class="text-uppercase text-center mb-5">covid-19 updates of the world</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center" id="tbval">
                    <tr>
                        <th>Country</th>
                        <th>TotalConfirmed</th>
                        <th>TotalRecovered</th>
                        <th>TotalDeaths</th> 
                        <th>NewConfirmed</th>
                        <th>NewRecovered</th>
                        <th>NewDeaths</th>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <!--About Section-->
    <section>
        <div class="container-fluid sub_section pt-5 pb-5"id="aboutid">
            <div class="section_header text-center mb-5 mt-4">
                <h1> About COVID-19</h1>
            </div>
            <div class="row pt-5">
                <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
                    <<img src="images/2.jpg"class="img-fluid" alt="alt"/>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mt-2">
                    <h2>
                        What is COVID-19(Corona-Virus) 
                    </h2>
                    <p>
                        COVID-19 is the infectious disease caused by the most 
                        recently discovered coronavirus.This new virus and disease were unknown 
                        before the outbreak began in Wuhan, China in December 2019.
                    </p>
                    <p>
                        Coronaviruses are a large family of viruses which may cause illness in animals or
                        humans.In humans several coronviruses are known to cause respiratory infections
                        ranging from the common cold to more severe diseases such as Middle East
                        Respiratory Syndrome(MERS)and severe Acute Respiratory Syndrome (SARS).The
                        most recently discovered coronavirus causes coronavirus disaease COVID-19.

                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--Corona Virus Symptoms-->

    <div class="container-fluid   pt-5 pb-5"id="sympid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Coronavirus Symptoms </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/4.jpg" alt="alt" class="img-fluid" width="120" height="120"/>
                        <figcaption class="mt-2">
                            Cough  
                        </figcaption>
                    </figure>

                </div> 
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/5.png" alt="alt" class="img-fluid" width="120" height="120"/>
                        <figcaption class="mt-2">
                            Runny Nose
                        </figcaption>
                    </figure>

                </div> 
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/6.jpg" alt="alt" class="img-fluid" width="150" height="150"/>
                        <figcaption class="mt-2">
                            Fever
                        </figcaption>
                    </figure>

                </div> 
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/7.jpg" alt="alt" class="img-fluid" width="140" height="140"/>
                        <figcaption class="mt-2">
                            Cold 
                        </figcaption>
                    </figure>

                </div> 
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/8.png" alt="alt" class="img-fluid" width="80" height="50"/>
                        <figcaption class="mt-2" >
                            Tiredness
                        </figcaption>
                    </figure>

                </div> 
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/9.jpg" alt="alt" class="img-fluid" width="140" height="140"/>
                        <figcaption class="mt-2">
                            Difficult Breathing  
                        </figcaption>
                    </figure>

                </div> 
            </div>
        </div>
    </div>
    <!--Prevention-->
    <div class="container-fluid sub_section  pt-5 pb-5"id="preventid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>6 Steps Prevention Against Coronavirus </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/10.jpg" alt="alt" class="img-fluid" width="80" height="80"/>

                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Wash your hands regularly for 20 seconds with soap and water or alcohol-based hand rub. </p> 
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/11.jpg" alt="alt" class="img-fluid" width="80" height="80"/>

                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze. </p> 
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/12.png" alt="alt" class="img-fluid" width="80" height="80"/>

                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Avoid close contact (1 meter or 3 meter) with people who are unwell. </p> 
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/13.jpg" alt="alt" class="img-fluid" width="80" height="80"/>

                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay home and self-isolate from others in the household if you feel unwell.</p> 
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/14.png" alt="alt" class="img-fluid" width="80" height="80"/>

                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p> Stay informed by watching the news & follow the recommended practice.  </p> 
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/15.png" alt="alt" class="img-fluid" width="80" height="80"/>

                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>If you have fever,cough and difficult breathing,seek medical care early.</p> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Us Section-->
    <div class="container-fluid    pt-5 pb-5"id="contactid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Contact Us ASAP </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <form action="" method="POST">

                        <div class="form-group">
                            <label  >username</label>
                            <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off"required>
                        </div>
                        <div class="form-group mt-4">
                            <label  ">Email</label>
                            <input type="email" class="form-control" name="email"  placeholder="name@example.com" autocomplete="off" required>
                        </div>

                        <div class="form-group mt-4">
                            <label  >mobile no</label>
                            <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
                        </div>

                        <div class="form-group mt-5">
                            <label>Select Symptoms</label> <br> 
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox1"
                                       name="coronasym[]" value="cold"> 
                                <label class="custom-control-label ch-style" for="customcheckbox1" >Cold</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox2"
                                       name="coronasym[]" value="fever"> 
                                <label class="custom-control-label ch-style" for="customcheckbox2">Fever</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox3"
                                       name="coronasym[]" value="breath"> 
                                <label class="custom-control-label ch-style" for="customcheckbox3">Difficulty in Breath</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox4"
                                       name="coronasym[]" value="tired"> 
                                <label class="custom-control-label ch-style" for="customcheckbox4">feeling weak</label>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label >Comments</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form> 
                </div>
            </div>
        </div>

    </div>

    <!--        Top Cursor-->
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
    <script type="text/javascript">

        $('.count').counterUp({
            delay: 10,
            time: 10000
        });


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

        function fetch() {
            $.get("https://api.covid19api.com/summary",
                    function (data) {
//                   console.log(data['Countries'].length);
                        var tbval = document.getElementById('tbval');

                        for (var i = 1; i < data['Countries'].length; i++) {
                            var x = tbval.insertRow();
                            x.insertCell(0);

                            tbval.rows[i].cells[0].innerHTML = data['Countries'][i - 1]['Country'];
                            tbval.rows[i].cells[0].style.background = '#7a4a91';
                            tbval.rows[i].cells[0].style.color = '#fff';

                            x.insertCell(1);
                            tbval.rows[i].cells[1].innerHTML = data['Countries'][i - 1]['TotalConfirmed'];
                            tbval.rows[i].cells[1].style.background = '#4bb7d8';

                            x.insertCell(2);
                            tbval.rows[i].cells[2].innerHTML = data['Countries'][i - 1]['TotalRecovered'];
                            tbval.rows[i].cells[2].style.background = '#4bb7d8';


                            x.insertCell(3);
                            tbval.rows[i].cells[3].innerHTML = data['Countries'][i - 1]['TotalDeaths'];
                            tbval.rows[i].cells[3].style.background = '#f36e23';

                            x.insertCell(4);
                            tbval.rows[i].cells[4].innerHTML = data['Countries'][i - 1]['NewConfirmed'];
                            tbval.rows[i].cells[4].style.background = '#4bb7d8';

                            x.insertCell(5);
                            tbval.rows[i].cells[5].innerHTML = data['Countries'][i - 1]['NewRecovered'];
                            tbval.rows[i].cells[5].style.background = '#9cc850';

                            x.insertCell(6);
                            tbval.rows[i].cells[6].innerHTML = data['Countries'][i - 1]['NewDeaths'];
                            tbval.rows[i].cells[6].style.background = '#f36e23';

                        }
                    })
        }
    </script>

</body>
</html>

<?php
include 'dbcon.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];

    $chk = "";
    foreach ($symp as $chk1) {
        $chk .= $chk1 . ",";
    }
    $insertquery = "INSERT INTO `coronacase`(`username`, `email`, `mobile`, `symp`, `message`) VALUES ('$username','$email','$mobile','$chk','$msg'  )";
    $query = mysqli_query($con, $insertquery);

    if ($query) {
        ?>
        <script type="text/javascript">

            alert(" Inserted Successful");
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">

            alert("Insertion Failed");
        </script>
        <?php
    }
}
?>

