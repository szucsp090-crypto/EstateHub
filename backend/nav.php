<script src="https://kit.fontawesome.com/782e557ec2.js" crossorigin="anonymous"></script>

<a class="menu-center" href="index.php">EstateHub</a>
<!-- <img class ="menu-center" style='max-width: 150px;' src='estatelogo.png' alt="EstateHub"> -->

<nav>
    <ul>
        <li>
            <a class="menu-left" style="cursor:pointer;" onclick="openNav()"><i class="fa-solid fa-magnifying-glass">
            </i> Search for a property</a>
        </li>
        <?php if(isset($_COOKIE['id'])){ ?>
          <li><a class="menu-right" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
        <?php } ?>
        <li><a class="menu-right" href="profile.php"><i class="fa-regular fa-heart"><span id="favnum"></span></i></a></li>
        <li><a class="menu-right" href="profile.php"><i class="fa-solid fa-user-tie"></i></a></li>
    </ul>
</nav>



<!-- SIDENAV -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- tabs -->
    <div class="sn-tabs">
        <button class="sn-tab active" onclick="switchTab(this, 'props')">PROPERTIES</button>
        <button class="sn-tab" onclick="switchTab(this, 'pass')">PASSIONS</button>
    </div>

    <!-- Porperties tab -->
    <div id="tab-props" class="sn-tab-content">
        <div class="sn-radio-group">
            <label class="sn-radio"><input type="radio" name="category" value="buy" checked> <span>Buy</span></label>
            <label class="sn-radio"><input type="radio" name="category" value="rent"> <span>Rent</span></label>
            <label class="sn-radio"><input type="radio" name="category" value="seasonal"> <span>Seasonal Rental, holidays</span></label>
            <label class="sn-radio"><input type="radio" name="category" value="new"> <span>New developments</span></label>
            <label class="sn-radio"><input type="radio" name="category" value="life"> <span>Life annuities</span></label>
        </div>

        <!-- more szűrő -->
        <p class="sn-filter-title">Set your search filters</p>

        <select name="country" class="sn-select">
            <option value="">All countries</option>
            <option value="fr">France</option>
            <option value="hu">Hungary</option>
            <option value="es">Spain</option>
            <option value="it">Italy</option>
            <option value="pt">Portugal</option>
        </select>

        <div class="sn-filter-list"></div>
          <div class="sn-filter-wrapper">
            <div class="sn-filter-item" onclick="openSubFilter(this)">
                <span>Property type</span><span class="sn-arrow">&#8250;</span>
            </div>
            <div class="sn-sub-filter">
                <label><input type="checkbox">Apartment</label>
                <label><input type="checkbox">House</label>
                <label><input type="checkbox">Land</label>
            </div>
          </div>

          <div class="sn-filter-wrapper">
            <div class="sn-filter-item" onclick="openSubFilter(this)">
                <span>Room Preferences</span><span class="sn-arrow">&#8250;</span>
            </div>
            <div class="sn-sub-filter">
                <label><input type="checkbox">+1</label>
                <label><input type="checkbox">+2</label>
                <label><input type="checkbox">+3</label>
                <label><input type="checkbox">+4</label>
            </div>
          </div>

          <div class="sn-filter-wrapper">
            <div class="sn-filter-item" onclick="openSubFilter(this)">
                <span>Surface</span><span class="sn-arrow">&#8250;</span>
            </div>
            <div class="sn-sub-filter">
            <div class="sn-surface-inputs">
              <input type="number" placeholder="Min m²">
              <input type="number" placeholder="Max m²">
            </div>
            <input type="range" min="0" max="500">
            <div class="sn-surface-tags">
                <button>50+</button>
                <button>100+</button>
                <button>150+</button>
                <button>200+</button>
            </div>
          </div>
          </div>
          <div class="sn-filter-wrapper">
            <div class="sn-filter-item" onclick="openSubFilter(this)">
                <span>+ Criteria</span><span class="sn-arrow">&#8250;</span>
            </div>
            <div class="sn-sub-filter">

              <label><input type="checkbox"> Furnished</label>
              <label><input type="checkbox"> Balcony</label>
              <label><input type="checkbox"> Parking</label>
              <label><input type="checkbox"> Elevator</label>
              <label><input type="checkbox"> Garden</label>
              <label><input type="checkbox"> Pet friendly</label>
              <label><input type="checkbox"> Air conditioning</label>

          </div>
        </div>  

        <div class="sn-reference">
            <input type="text" name="reference" placeholder="Define your needs…">
            <button type="button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
            <button class="sn-search-btn" type="button">Search</button>
 </div>

    <!-- Passions tab -->
    <div id="tab-pass" class="sn-tab-content" style="display:none;">
        <div class="sn-radio-group">
          <p class="sn-filter-title">What fits you best?</p>
            <label class="sn-radio"><input type="radio" name="passion" value="discreet"> <span>Discreet</span></label>
            <label class="sn-radio"><input type="radio" name="passion" value="open"> <span>Open</span></label>
            <label class="sn-radio"><input type="radio" name="passion" value="exclusive_taste"> <span>Exclusive Taste</span></label>
            <label class="sn-radio"><input type="radio" name="passion" value="nature_access"> <span>Nature Access</span></label>
        </div>
    </div>
</div>

<!-- Overlay -->
<div id="sn-overlay" class="sn-overlay" onclick="closeNav()"></div>


<br><br>
<hr>

<!-- Dropdown menu -->

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Buy
    </button>
    <div class="dropdown-content">
      <a href="#">Properties for sale</a>
      <a href="#">Castles</a>
      <a href="#">Special Access Properties</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Sell
    </button>
    <div class="dropdown-content">
      <a href="#">Get my property valued</a>
      <a href="#">Find an agency</a>
      <a href="#">Submit for Entry</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Rent
    </button>
    <div class="dropdown-content">
      <a href="#">Long-term rentals</a>
      <a href="#">Seasonal rentals</a>
      <a href="#">Hotels & residences</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Invest
    </button>
    <div class="dropdown-content">
      <a href="#">Residential Properties</a>
      <a href="#">Commercial Properties</a>
      <a href="#">Land & Development</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Market Guide
    </button>
    <div class="dropdown-content">
      <a href="#">Market Trends</a>
      <a href="#">Investment Insights</a>
      <a href="#">Access Strategies</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Property Management
    </button>
    <div class="dropdown-content">
      <a href="#">Property Maintenance</a>
      <a href="#">Tenant Management</a>
      <a href="#">Access Management</a>
    </div>
    </div>
</div>


<script>
  
// Favorite count

$("#favnum").load("loadfav.php");

	setInterval(
		function(){
		
			$("#favnum").load("loadfav.php");
		
	}, 1000);


  // Sidenav functions
function openNav() {
    document.getElementById("mySidenav").style.width = "320px";
    document.getElementById("sn-overlay").style.display = "block";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("sn-overlay").style.display = "none";
}

// Tab switching
function switchTab(el, tab) {
    document.querySelectorAll('.sn-tab').forEach(t => t.classList.remove('active'));
    el.classList.add('active');
    document.getElementById('tab-props').style.display = tab === 'props' ? '' : 'none';
    document.getElementById('tab-pass').style.display = tab === 'pass' ? '' : 'none';
}

function openSubFilter(element) {

    const wrapper = element.parentElement;

    wrapper.classList.toggle('active');

}

</script>
