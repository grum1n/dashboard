<header>
    <ul class="header-grid">
        <li class="col-1"><a href="d-index.php">Junior<span>Dev</span></a></li>
        <li class="col-2">
            <div id="menu" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="d-index.php">Pages</a>
                <a href="d-pages.php?page=react-skills">React</a>
                </div>
                <div class="menu-button">
                <a href="javascript:void(0)" onclick="openNav()"><i class="fa fa-bars"></i></a>
            </div>
        </li>
        <li class="col-3">
            <button><i class="fas fa-search"></i></button>
            <input type="text" placeholder="Search text here..">
        </li>
        <li class="col-4">
            <div>Have questions? <a href="#">contact@info.com</a></div>
            <div>
                <a href="#" class="bell">
                    <i class="far fa-bell"></i>              
                    <span class="badge">5</span>
                </a>
            </div>
            <div>
                <a href="#" class="envelope">
                    <i class="far fa-envelope"></i>           
                    <span class="e-badge">7</span>
                </a>
            </div>
            <div class="dropdown">
                <img onclick="myFunction()" class="dropbtn" src="app/images/darbuotojas.jpg" alt="Darbuotojas">
                <div id="myDropdown" class="dropdown-content">
                <a href="d-pages.php?page=user-profile"><i class="fas fa-user"></i> Profile</a>
                <a href="#"><i class="fas fa-cog"></i> Settings</a>
                <a href="#"><i class="fas fa-sign-out-alt"></i> Sign out</a>
                </div>
            </div>
        </li>
    </ul>
</header>