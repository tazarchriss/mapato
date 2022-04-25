<nav class="navbar navbar-expand bg-navy navbar-light">
        <!-- Left navbar links -->
        <h3 class="text-light"><a href="home.php" class="text-light"><b><i>Mapato.</i></b></a></h3>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3 mr-2" id="navbarCollapse">
        <!-- Left navbar links -->
        <a href="earnings.php" class="nav-link text-light">Earnings</a>
        <a href="savings.php" class="nav-link text-light">Savings</a>
        <a href="expenses.php" class="nav-link text-light">Expenses</a>
        <a href="debts.php" class="nav-link text-light">Debts</a>
      

    
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          <a href="profile.php" class="nav-link text-light"><i class="text-success fa fa-cicle"></i><?php echo $_SESSION['fname'].' '.$_SESSION['sname']; ?></a>
       
        </li>
        <li class="nav-item">
         
          <a class="nav-link text-light"  href="config/logout.php" role="button">
            <i class="fas fa-power-off"> Log out</i>
          </a>
        </li>
      </ul>
    </div>

</nav>    