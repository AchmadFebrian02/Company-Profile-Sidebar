<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">



   <!-- MyStyle -->
   <link rel="stylesheet" href="css/style.css">

   <link rel="stylesheet" href="css/content.css">

   

   

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">


  

</head>
<body>
  <!-- Navbar Section -->
<nav class="navbar">
  <button class="navbar-menu-toggle">
      <i class="bi bi-list"></i>
  </button>
  <ul class="navbar-list">
      <li class="navbar-item"><a href="?view=home" class="navbar-link"><i class="bi bi-person-circle"></i> Profile</a></li>
      <li class="navbar-item"><a href="?view=visi-misi" class="navbar-link"><i class="bi bi-graph-up"></i> Visi dan Misi</a></li>
      <li class="navbar-item"><a href="?view=product" class="navbar-link"><i class="bi bi-box"></i> Produk</a></li>
      <li class="navbar-item"><a href="#contact-us" class="navbar-link"><i class="bi bi-envelope"></i> Contact</a></li>
      <li class="navbar-item"><a href="?view=about" class="navbar-link"><i class="bi bi-info-circle"></i> About Us</a></li>
    </ul>
</nav>
  <div class="container">
    <div class="sidebar">
        <div class="header">
           <div class="logo-container">
             <img src="img/logo.jpg" alt="Logo" class="logo">
           </div>
           <div class="main">
            <div class="list-item">
                <a href="?view=home">
                  <i class="bi bi-speedometer2 icon"></i> <!-- Dashboard Icon -->
                  <span class="description">Home</span>
                </a>
            </div>

            <div class="list-item">
                <a href="?view=artikel">
                  <i class="bi bi-journal-text icon"></i> <!-- Artikel Icon -->
                  <span class="description">Artikel</span>
                </a>
            </div>

            <div class="list-item">
                <a href="?view=event">
                  <i class="bi bi-calendar-event icon"></i> <!-- Event Icon -->
                  <span class="description">Event</span>
                </a>
            </div>

            <div class="list-item">
                <a href="?view=galeri">
                  <i class="bi bi-images icon"></i> <!-- Galeri Icon -->
                  <span class="description">Galeri</span>
                </a>
            </div>

            <div class="list-item">
                <a href="?view=client">
                  <i class="bi bi-people icon"></i> <!-- Customer Icon -->
                  <span class="description">Client</span>
                </a>
            </div>

            <!-- Login with Dropdown -->
            <div class="list-item dropdown">
                <a href="#" class="dropdown-toggle" id="login-button">
                  <i class="bi bi-person icon"></i> <!-- Login Icon -->
                  <span class="description">Login</span>
                  <i class="bi bi-caret-down-fill"></i>
                </a>
                <div class="dropdown-menu" id="dropdown-menu">
                  <a href="#">Sign in</a>
                  <a href="#">Sign up</a>
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="main-content">
      <!-- Sidebar Toggle Button Inside Main Content -->
      <button class="btn-toggle" id="toggle-button">
        <i class="bi bi-chevron-left"></i>
      </button>
      <?php 
        if(isset($_GET['view'])){
          $view = $_GET['view'];
          include_once "view/" . $view . ".php";
        }
      ?>
    </div>
  </div>

  <!-- Footer Section -->
<footer id="contact-us" class="footer">
  <div class="footer-container">
    <div class="footer-contact">
      <h3>Contact Us</h3>
      <p>Email: info@yourwebsite.com</p>
      <p>Phone: +1 234 567 890</p>
      <p>Address: 123 Your Street, Your City, Your Country</p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2024 Your Company Name. All rights reserved.</p>
  </div>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="sidebar.js"></script>
</body>
</html>
