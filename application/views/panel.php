	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							SMARTY BOX ADMINISTRATOR
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

							
						<!-- ruang message masuk --> 
						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="/index.php/panel/logout">
								<i class="ace-icon fa fa-key"></i>
								Logout
							</a>

						
						</li>
						<!-- info ruang message tamat -->
						
				
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>


		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>
				
				<center><img src="/asset/assets/images/smarty.jpg" width="188" height="80" /></center>	
				<ul class="nav nav-list" id="menu">
					<li class="active">
						<a href="/index.php/panel/utama">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					
					

					

					<li class="active" id="pakage">
						<a href="/index.php/panel/task">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text"> Task scheduler </span>
						</a>

						<b class="arrow"></b>
					</li>

					

					<li class="active">
						<a href="/index.php/panel/order">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text">Client Order </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="active">
						<a href="/index.php/panel/sms">
							<i class="menu-icon fa fa-comment"></i>
							<span class="menu-text">Marketing SMS </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="active">
						<a href="/index.php/panel/call">
							<i class="menu-icon fa fa-phone"></i>
							<span class="menu-text"> Client Directory  </span>
						</a>

						<b class="arrow"></b>
					</li>
					
				</ul><!-- /.nav-list -->

			

			
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						

						<div id="paparx"></div>

		
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<script src="/asset/assets/js/jquery.2.1.1.min.js"></script>

<script>
	$(document).ready(function() {

				var page_url = '/index.php/panel/utama';
				$('#paparx').text('Looding  ...').show();
				$('#paparx').load(page_url).show();

	});	
	
	$('#menu li a').on('click', function(e){
        		
	        	
	        		e.preventDefault();
			       	var page_url=$(this).prop('href');
			        $('#paparx').text('Looding  ...').show();
			       // $('#dimana').text('Deshboard').show();
			        $('#paparx').load(page_url).show();
			
	});
				

</script>

			