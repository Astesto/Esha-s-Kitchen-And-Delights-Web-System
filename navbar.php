<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><b>Food Ordering System</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Menu</a></li>
        <li><a href="order.php">Order</a></li>
		<li>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sales <span class="caret"></span></a>
          <ul class="dropdown-menu">
		  <li><a href="sales.php">Sales</a></li>
            <li role="separator" class="divider"></li>
		   <li><a href="product.php">Products</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="category.php">Category</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="dly_reports.php">Reports</a></li>
			</li>
          </ul>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Maintenace <span class="caret"></span></a>
          <ul class="dropdown-menu">
			<li><a href="calendar.php">Calendar</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="search.php">Search</a>
			<li role="separator" class="divider"></li>
			<li><a href="filter.php">DateFilter</a>
			</li>
          </ul>
        </li> <!-- logged in user information -->
   <li> <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<!--<p> <a href="../login.php?logout='1'" style="color: red;">logout</a> </p>-->
		<a href="<? php header ("Location: login.php")?>" style="color: red;">logout</a> </p>
   <?php endif ?></li>
	<li><a href="../login.php">Logout</a></li>
	
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>