<?php

    include_once ('include/funciones.php');
    session_start();

    echo '<!-- Navbar -->
    
        <nav class="navbar has-background-transparent" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <!-- navbar items, navbar burger... -->
                <a class="navbar-item" href="https://bulma.io">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-snowflake">
                        <line x1="2" x2="22" y1="12" y2="12" />
                        <line x1="12" x2="12" y1="2" y2="22" />
                        <path d="m20 16-4-4 4-4" />
                        <path d="m4 8 4 4-4 4" />
                        <path d="m16 4-4 4-4-4" />
                        <path d="m8 20 4-4 4 4" />
                    </svg>
    
                </a>
                <!-- Mobile version this changes the navbar to a side bar-->
                <a class="navbar-burger is-0-desktop" id="burger">
                    <span></span>
                    <span></span>
                    <span></span>
    
                </a>
            </div>
            <div class="navbar-menu" id="nav-links">
    
                <div class="navbar-end">';

                if (isLogin() === true)
                  {
                      echo '<a href="index.php" class="navbar-item">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-snowflake">
                                        <line x1="2" x2="22" y1="12" y2="12" />
                                        <line x1="12" x2="12" y1="2" y2="22" />
                                        <path d="m20 16-4-4 4-4" />
                                        <path d="m4 8 4 4-4 4" />
                                        <path d="m16 4-4 4-4-4" />
                                        <path d="m8 20 4-4 4 4" />
                                    </svg>
                                </span>Home
                            </a>';
                  }else{
                        echo '<a href="login.php" class="navbar-item">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-snowflake">
                                        <line x1="2" x2="22" y1="12" y2="12" />
                                        <line x1="12" x2="12" y1="2" y2="22" />
                                        <path d="m20 16-4-4 4-4" />
                                        <path d="m4 8 4 4-4 4" />
                                        <path d="m16 4-4 4-4-4" />
                                        <path d="m8 20 4-4 4 4" />
                                    </svg>
                                </span>Home
                            </a>';
                  }

                   echo' 
    
                    <a class="navbar-item">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-snowflake">
                                <line x1="2" x2="22" y1="12" y2="12" />
                                <line x1="12" x2="12" y1="2" y2="22" />
                                <path d="m20 16-4-4 4-4" />
                                <path d="m4 8 4 4-4 4" />
                                <path d="m16 4-4 4-4-4" />
                                <path d="m8 20 4-4 4 4" />
                            </svg>
                        </span>
    Filler
                    </a>
                    <!-- Other navbar items -->
    
    
                    <a href="MenuItem.html" class="navbar-item">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-snowflake">
                                <line x1="2" x2="22" y1="12" y2="12" />
                                <line x1="12" x2="12" y1="2" y2="22" />
                                <path d="m20 16-4-4 4-4" />
                                <path d="m4 8 4 4-4 4" />
                                <path d="m16 4-4 4-4-4" />
                                <path d="m8 20 4-4 4 4" />
                            </svg>
                        </span>
    Menu
    
                    </a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-snowflake">
                                    <line x1="2" x2="22" y1="12" y2="12" />
                                    <line x1="12" x2="12" y1="2" y2="22" />
                                    <path d="m20 16-4-4 4-4" />
                                    <path d="m4 8 4 4-4 4" />
                                    <path d="m16 4-4 4-4-4" />
                                    <path d="m8 20 4-4 4 4" />
                                </svg>
                            </span>
    Orders
                        </a>
    
    
                        <div class="navbar-dropdown">
                            <!-- Other navbar items -->
                            <a href="" class="navbar-item">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-snowflake">
                                        <line x1="2" x2="22" y1="12" y2="12" />
                                        <line x1="12" x2="12" y1="2" y2="22" />
                                        <path d="m20 16-4-4 4-4" />
                                        <path d="m4 8 4 4-4 4" />
                                        <path d="m16 4-4 4-4-4" />
                                        <path d="m8 20 4-4 4 4" />
                                    </svg>
                                </span>
    Make Order
    </a>
                            <a href="" class="navbar-item">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-snowflake">
                                        <line x1="2" x2="22" y1="12" y2="12" />
                                        <line x1="12" x2="12" y1="2" y2="22" />
                                        <path d="m20 16-4-4 4-4" />
                                        <path d="m4 8 4 4-4 4" />
                                        <path d="m16 4-4 4-4-4" />
                                        <path d="m8 20 4-4 4 4" />
                                    </svg>
                                </span>
    Pay Order
    </a>
                            <a href="" class="navbar-item">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-snowflake">
                                        <line x1="2" x2="22" y1="12" y2="12" />
                                        <line x1="12" x2="12" y1="2" y2="22" />
                                        <path d="m20 16-4-4 4-4" />
                                        <path d="m4 8 4 4-4 4" />
                                        <path d="m16 4-4 4-4-4" />
                                        <path d="m8 20 4-4 4 4" />
                                    </svg>
                                </span>
    Claim Order
    </a>
                            <a href="" class="navbar-item">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-snowflake">
                                        <line x1="2" x2="22" y1="12" y2="12" />
                                        <line x1="12" x2="12" y1="2" y2="22" />
                                        <path d="m20 16-4-4 4-4" />
                                        <path d="m4 8 4 4-4 4" />
                                        <path d="m16 4-4 4-4-4" />
                                        <path d="m8 20 4-4 4 4" />
                                    </svg>
                                </span>
    Filler
                            </a>
                            <a href="" class="navbar-item">
                                <span>
    
                                </span>
    Filler
                            </a>
                        </div>
                    </div>
    
                    <a href="login.php" class="navbar-item">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-snowflake">
                                <line x1="2" x2="22" y1="12" y2="12" />
                                <line x1="12" x2="12" y1="2" y2="22" />
                                <path d="m20 16-4-4 4-4" />
                                <path d="m4 8 4 4-4 4" />
                                <path d="m16 4-4 4-4-4" />
                                <path d="m8 20 4-4 4 4" />
                            </svg>
                        </span>
    Login
                    </a>';


                    if (isLogin() === true) {
                        echo '<a href="clients_register.php" class="navbar-item">Register</a>
                                  <a href="" class="navbar-item">My Account</a>
                                  <a class="navbar-item" onclick="confirmAction()">Sign Out</a>';

                        //--------------------
                        echo '<a href="clients_register.php" class="navbar-item">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-snowflake">
                                <line x1="2" x2="22" y1="12" y2="12" />
                                <line x1="12" x2="12" y1="2" y2="22" />
                                <path d="m20 16-4-4 4-4" />
                                <path d="m4 8 4 4-4 4" />
                                <path d="m16 4-4 4-4-4" />
                                <path d="m8 20 4-4 4 4" />
                            </svg>
                        </span>
    Register
                    </a>
                    <a href="" class="navbar-item">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-snowflake">
                                <line x1="2" x2="22" y1="12" y2="12" />
                                <line x1="12" x2="12" y1="2" y2="22" />
                                <path d="m20 16-4-4 4-4" />
                                <path d="m4 8 4 4-4 4" />
                                <path d="m16 4-4 4-4-4" />
                                <path d="m8 20 4-4 4 4" />
                            </svg>
                        </span>
    My Account
    </a>
                    <a class="navbar-item" onclick="confirmAction()" >
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-snowflake">
                                <line x1="2" x2="22" y1="12" y2="12" />
                                <line x1="12" x2="12" y1="2" y2="22" />
                                <path d="m20 16-4-4 4-4" />
                                <path d="m4 8 4 4-4 4" />
                                <path d="m16 4-4 4-4-4" />
                                <path d="m8 20 4-4 4 4" />
                            </svg>
                        </span>
    Sign Out
    
    </a>';

                    } else {
                        echo '<a href="login.php" class="navbar-item">Login</a>
                                  <a href="clients_register.php" class="navbar-item">Register</a>
                                  <a href="login.php" class="navbar-item">My Account</a>';

                        //--------------
                    }
echo '<a href="login.php" class="navbar-item">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-snowflake">
                                <line x1="2" x2="22" y1="12" y2="12" />
                                <line x1="12" x2="12" y1="2" y2="22" />
                                <path d="m20 16-4-4 4-4" />
                                <path d="m4 8 4 4-4 4" />
                                <path d="m16 4-4 4-4-4" />
                                <path d="m8 20 4-4 4 4" />
                            </svg>
                        </span>
    Login
                    </a>

<a href="clients_register.php" class="navbar-item">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-snowflake">
                                <line x1="2" x2="22" y1="12" y2="12" />
                                <line x1="12" x2="12" y1="2" y2="22" />
                                <path d="m20 16-4-4 4-4" />
                                <path d="m4 8 4 4-4 4" />
                                <path d="m16 4-4 4-4-4" />
                                <path d="m8 20 4-4 4 4" />
                            </svg>
                        </span>
    Register
                    </a>
                    <a href="login.php" class="navbar-item">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-snowflake">
                                <line x1="2" x2="22" y1="12" y2="12" />
                                <line x1="12" x2="12" y1="2" y2="22" />
                                <path d="m20 16-4-4 4-4" />
                                <path d="m4 8 4 4-4 4" />
                                <path d="m16 4-4 4-4-4" />
                                <path d="m8 20 4-4 4 4" />
                            </svg>
                        </span>
    My Account
                    </a>';

    //----------------
      echo'</div>
            </div>
            </div>
            </div>
        </nav>';
?>
