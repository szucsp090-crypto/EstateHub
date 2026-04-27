<script src="https://kit.fontawesome.com/782e557ec2.js" crossorigin="anonymous"></script>

<a class="menu-center" href="index.php">EstateHub</a>

<nav>
    <ul>
        <li>
            <a class="menu-left" style="cursor:pointer;" onclick="openNav()"><i class="fa-solid fa-magnifying-glass">
            </i> Search for a property</a>
        </li>
        <li><a class="menu-right" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
        <li><a class="menu-right" href="favorite.php"><i class="fa-regular fa-heart"></i></a></li>
        <li><a class="menu-right" href="profile.php"><i class="fa-solid fa-user-tie"></i></a></li>
    </ul>
</nav>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<br><br>
<hr>

<!-- Dropdown menu -->

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Buy
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Sell
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Rent
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Invest
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Market Guide
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Property Management
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
    </div>
</div>

<!-- Footer -->

<footer>
  <div class="footer-content">
    <h3>EstateHub</h3>
    <p>Your trusted partner in real estate. We connect buyers, sellers, and renters with the best properties and services. Whether you're looking to buy, sell, rent, or invest, EstateHub is here to help you every step of the way.</p>
    <ul class="socials">
      <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li>
    </ul>
  </div>
  <div class="footer-bottom">
    <p>Copyright &copy; 2026 EstateHub. All rights reserved. Designed by <span>SzP & TFF CO.</span></p>
  </div>
</footer>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
