<html>
<head>
	<title>AUTO-ITO</title>
	<link type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url(); ?>home">Auto-ITO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('User/view_main'); ?>">My Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>load_account">Load Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>services">All Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('User/view_transactions');?>">Transactions</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="<?php echo base_url(); ?>#">user_name</a>
      </li>
    </ul>
  </div>

  
</nav>

<body>