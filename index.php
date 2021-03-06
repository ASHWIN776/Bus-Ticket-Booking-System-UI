<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Ticket Bookings</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Font-awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- External CSS -->
    <?php   require 'assets/css/styles.php';  ?>

</head>
<body>
    <header>
        <nav>
            <div>
                    <a href="#" class="nav-item nav-logo">Logo</a>
                    <a href="#" class="nav-item">Gallery</a>
            </div>
                
            <ul>
                <li><a href="#" class="nav-item">Home</a></li>
                <li><a href="#" class="nav-item">About</a></li>
                <li><a href="#" class="nav-item">Contact</a></li>
            </ul>
            <div>
                <a href="#" class="login nav-item"><i class="fas fa-sign-in-alt" style="margin-right: 0.4rem;"></i>Login</a>
                <a href="#" class="pnr nav-item">PNR Enquiry</a>
            </div>
        </nav>
    </header>
    <section id="home">
        <div id="route-search-form">
            <h1>Find Routes</h1>
            <form action="">
                <div>
                    <label for="source">Source</label><br>
                    <input type="text" id="source" name="source">
                </div>
                <div>
                    <label for="destination">Destination</label><br>
                    <input type="text" id="destination" name="destination">
                </div>
                <div>
                    <label for="departure">Date of Departure</label><br>
                    <input type="date" id="departure" name="departure">
                </div>
                <div>
                    <button type="button" name="search">Search</button>
                </div>
            </form>
        </div>
    </section>
    <div id="block">
        <section id="info-num">
            <figure>
                <img src="assets/img/route.svg" alt="Bus Route Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num">10000</span>
                    <span class="icon-name">routes</span>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/img/bus.svg" alt="Bus Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num">20000</span>
                    <span class="icon-name">bus</span>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/img/customer.svg" alt="Happy Customer Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num">30000</span>
                    <span class="icon-name">happy customers</span>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/img/ticket.svg" alt="Instant Ticket Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num">20 SEC</span>
                    <span class="icon-name">Instant Tickets</span>
                </figcaption>
            </figure>
        </section>
        <section id="pnr-enquiry">
            <div id="pnr-form">
                <h1>PNR Enquiry</h1>
                <form action="">
                    <div>
                        <label for="pnr">PNR Number : </label>
                        <input type="text" name="pnr" id="pnr">
                    </div>
                    <div>
                        <button type="button" name="pnr-search">submit</button>
                    </div>
                </form>
            </div>
        </section>
        <footer>

        </footer>
    </div>
    
</body>
</html>