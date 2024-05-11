<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMC REPAIR BOOK</title>

    <link rel="stylesheet" href="cus.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
</head>

<body>






    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html" id="logo"><span>S</span>MC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="main.html">Home</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Sewing Machines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Spare Parts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <div class="main-name">INQUIRY</div>



    <!-- Section Book Start -->
    <section class="book" id="book">
        <div class="container">
        <?php
$servername = "localhost";  
$username = "root";  
$password = "";  
$database = "customer";  

 
$conn = new mysqli($servername, $username, $password, $database);

 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
if(isset($_POST['submit'])){
     
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $sno = $_POST['sno'];
    $inq_des = $_POST['inq_des'];
    
    
     
    if (empty($firstName) || empty($lastName) || empty($address) || empty($email) || empty($sno) || empty($inq_des)) {
        echo "<div class= 'alert alert-danger'> All fields are required</div>";
    }
     
    else if (strlen($sno) < 5) {
        echo "<div class= 'alert alert-danger'> machine serial number must be at least 5 characters long</div>";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class= 'alert alert-danger'> Invalid email format</div>";
    }
     
     else {
         
        $sql = "INSERT INTO inq (firstName, lastName, address, sno, inq_des) VALUES ('$firstName', '$lastName', '$address', '$sno','$inq_des')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<div class= 'alert alert-danger'>Thank you soo much we received your complain we weill defenitly take action about it and we will inform you. <br> Thank You.</div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
            <div class="main-text">
                <h1><span>C</span>oustomer Inquaries</h1>
            </div>

            <div class="row">

                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                        <img src="abc.png">
                    </div>
                </div>

                <div class="col-md-6 py-3 py-md-0">
                    <form action="customer_inq.php" method="post">

                        <input type="text" class="form-control" placeholder="firstName" name="firstName" required><br>
                        <input type="text" class="form-control" placeholder="lastName" name="lastName" required><br>
                        <input type="text" class="form-control" placeholder="address" name="address" required><br>
                        <input type="text" class="form-control" placeholder="email" name="email" required><br>
                        <input type="text" class="form-control" placeholder="machine serial number" name="sno" required><br>

                        <textarea class="form-control" rows="5"  name="inq_des" placeholder="Description about your inquiry" required></textarea>
                        
                            
                            <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
                        
                        

                    </form>
                </div>

            </div>
        </div>
    </section>


    <!-- Footer Start -->
    <footer id="footer">
        <h1><span>SITHILA</span> MACHINE CENTER</h1>
        <p>Suppliers of all kinds of Spare Parts, Needles, Folders Accessories, Machinery for Garment Industry and Machines for Rent.</p>
        <div class="social-links">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-pinterest-p"></i>
        </div>
        <div class="credit">
            <p>Designed By <a href="#">Misfit</a></p>
        </div>
        <div class="copyright">
            <p>&copy;Copyright Misfit. All Rights Reserved</p>
        </div>
    </footer>
    <!-- Footer End -->


   <script src="script.js"></script>
    <body>