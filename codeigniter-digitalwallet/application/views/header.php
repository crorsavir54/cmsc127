<!DOCTYPE html>
<html lang="">
<head>
<link rel="icon" href="<?php echo base_url();?>images/demo/up.png">
<!--title>AutoUPMin</title-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo base_url();?>layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- Background Image Wrapper -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left"/>
      <img src="<?php echo base_url();?> images/demo/upmindanao.png"  max-width="50%" height="" />
        <h1><a>Auto-UPMin</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="<?php echo base_url('page/main');?>">Home</a></li>
          <li><a class="drop" href="#">Services</a>
            <ul>
              <li><a href="#purchase_wifikiosk">WifiKiosk</a></li>
              <li><a href="pages/full-width.html">Printing</a></li>
              <li><a href="pages/sidebar-left.html">Ikot Card</a></li>
            </ul>
          </li>
          <!--li><a class="drop" href="<?php echo base_url('page/profile');?>">User Profile</a-->
          <li><a href="<?php echo base_url('page/profile');?>">User Profile</a>
            <!--ul>
              <li><a href="<?php echo base_url('page/transactions');?>">Transaction History</a></li>
              <li><a class="drop" href="#">Balance</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Time Left</a></li>
            </ul-->
          </li>
          <li><a href="<?php echo base_url('Authorization/logout'); ?>">Logout</a></li>
        </ul>
      </nav>
    </header>
    <!-- ################################################################################################ -->
  </div>
</body>
</html>