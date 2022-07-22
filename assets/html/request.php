<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Stylish&family=Zen+Antique&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">

    <title>Request</title>

    <style>
        .head {
            height: 60px !important;
        }

        hr {
            position: relative;
            left: 25%;
        }
    </style>
</head>


<body>

    <nav id="#navbar" class="navbar navbar-expand-lg bg-white py-0 fixed-top">
        <div class="container">
            <a href="../../index.html" class="navbar-brand text-dark logo">
                Charity
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About us</a>
                    </li>
                    <li class="nav-item hov">
                        <a href="donateEdu.html" class="nav-link">Donate</a>
                        <div class="">
                            <ul class="hidden">
                                <li>
                                    <a href="donateEdu.html">Education</a>
                                </li>
                                <li>
                                    <a href="donateHealth.html">Health</a>
                                </li>
                                <li>
                                    <a href="donateConst.html">Construction</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Request Donation</a>
                    </li>

                    <li class="nav-item">
                        <a href="view.php" class="nav-link">View Donations</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mt-5 back-2">
        <div class="text-center"></div>

    </div>


    <section class="head mt-5 d-flex">
        <div class="container-fluid ">
            <div class="row">
                <div class="col align-items-center">
                    <h4 class="text-center text-dark ">Donation requests</h4>
                    <hr style="width:750px;background:rgb(44, 135, 119)">
                </div>
            </div>
        </div>
    </section>

    <section class="mt-3">
        <div class="container">
            <form method="POST" action="../php/requestion.php">
                <div class="form-group row">
                    <div class="form-group row">
                        <label for="">
                            First name
                            <input id="fname" type="text" class="form-control form-control-lg" name="fname">

                        </label>
                    </div>
                    <div class="form-group row">
                        <label for="">
                            Last name
                            <input id="lname" class="form-control form-control-lg" type="text" name="lname">

                        </label>
                    </div>
                    <label for="">
                        Request type
                        <select name="type" id="type" class="form-control form-control-lg">
                            <?php
                            $con = mysqli_connect('localhost', 'root', '', 'charity');
                            $query = 'SELECT * from type_charity';
                            $result = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <option value <?php echo '=' . $row['description'] . '' ?>><?php echo $row['description'] ?></option>

                            <?php
                            }
                            ?>
                        </select>
                    </label>
                </div>

                <div class="form-group row">
                    <label for="">
                        Description
                        <textarea class="form-control form-control-lg" name="desc" id="description" cols="30" rows="5"></textarea>
                    </label>
                </div>

                <button id="submit" class="btn btn-danger mt-2" type="submit">Submit form</button>
            </form>


        </div>
        </div>
    </section>

    <!-- <section id="added-elements">
        <h3 class="text-center">Requests </h3>
        <div class="container div">

        </div>
    </section> -->






    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <h5>Contact us</h5>
                    <hr>
                    <p>Phone number: +971 78947084</p>
                    <p>Email: charityforeveryone@gmail.com</p>
                </div>
                <div class="col-lg-6" style="border-left: 1px solid grey;">
                    <h5>Social media</h5>
                    <div class="social mt-5">
                        <a href="https://www.facebook.com" target="_blank"><i class="fa-brand fa-facebook"></i></a>
                        <a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="../js/script.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


</body>

</html>
</body>

</html>