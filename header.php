<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="C:\xampp\htdocs\internphp\style3.css">-->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
	<link rel="stylesheet" href="foot.css">
	<link rel="stylesheet" href="stark.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<title>STARK Industries</title>
</head>
<body style="background-color: #FCCD12;">
<nav class="navbar navbar-expand-sm navbar-dark navstyle fixed-top" id="rcorners2">
		<a class="navbar-brand" href="#">
		    <img src="jarvis2.png" width="50" height="50" class="d-inline-block align-top" alt="">
		 </a>
		 <h3 class="page"><u>STARK INDUSTRIES</u></h3>
		 <div class="container" style="width:75%;padding-left: auto;">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					<a class="nav-link menu" href="starkindus.php" style="margin-left: 1rem;" target="_blank">HOME <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link menu" href="#">ABOUT US</a>
				  </li>
				  <li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  SCHOLARSHIPS
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#">Upcoming Scholarships</a>
					  <a class="dropdown-item" href="empform.php" target='_blank'>Apply Scholarship</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item log" href="#">Show applied candidates</a>
					</div>
				  </li>
                  <?php 
                    if (isset($_SESSION['name'])) { ?>
                    <li class="nav-item active" >
                        <a class="nav-link menu" href="logout.php" id="logout">LOG OUT</a>
                    </li>
                    <li class="nav-item active" >
                        <a class="nav-link menu" href="#" id="fac">ADD FACILITY</a>
                    </li>
                  <?php }
                  else { ?>
                    <li class="nav-item active">
					<a class="nav-link menu" href="login.html" id='login'>ADMIN LOG-IN</a>
				    </li><?php } ?> 
				</ul>
		   </div>  
	   </div>
		   <form class="form-inline my-2 my-lg-0" style="width:30%">
			 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			 <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="font-family: Marvel;">SEARCH</button>
		   </form>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			  <span class="navbar-toggler-icon"></span>
		  </button>
	</nav>
