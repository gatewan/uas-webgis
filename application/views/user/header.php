<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">
	 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	 <link href="<?=base_url()?>assets/css/bootstrap-markdown.min.css" rel="stylesheet">
	 <link rel="icon" href="<?=base_url()?>/favicon-image.png" type="image/png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	 <script src="<?=base_url()?>assets/js/bootstrap-markdown.js"></script>
	 <script src="http://www.codingdrama.com/bootstrap-markdown/js/to-markdown.js"></script>
	 <script src="http://www.codingdrama.com/bootstrap-markdown/js/markdown.js"></script>
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	 <script src="//rawgit.com/jeresig/jquery.hotkeys/master/jquery.hotkeys.js"></script>	
  </head>
  <body>
 <!--Navbar-->
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container"> <!-- /.Membungkus navbar dengan Container agar tidak terlalu mepet pinggir -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>">
		<img alt="Brand" src="https://2.bp.blogspot.com/-PmUO7dv-KmM/WOjB1sTbDTI/AAAAAAAAPbE/ZhOyrRo-F7MyIeZBskkXwEu0ftbr0nkmgCLcB/s1600/logo.png">
	  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?=base_url()?>">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filter By:<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>Cmap/kuda">Kuda</a></li>
			<li role="separator" class="divider"></li>
            <li><a href="<?=base_url()?>Cmap/sapi">Sapi</a></li>
            <li><a href="<?=base_url()?>Cmap/sapi_perah">Sapi Perah</a></li>
			<li role="separator" class="divider"></li>
            <li><a href="<?=base_url()?>Cmap/kerbau">Kerbau</a></li>
			<li><a href="<?=base_url()?>Cmap/kambing">Kambing</a></li>
			<li><a href="<?=base_url()?>Cmap/domba">Domba</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		<li><a href="<?=base_url()?>auth/login">Are you an admin? <span class="glyphicon glyphicon-hand-right"></span> Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!-- /navbar end -->