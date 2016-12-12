<body class="login-layout blur-login">
		<div class="main-container">
			<div class="main-content">


<div class="col-md-12 atas">

<div class="col-md-4"></div>
<div class="col-md-4">
	
	<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">TM Smarty Box</h3>
  </div>
  <div class="panel-body">
    <label for="inputEmail" class="sr-only">User ID</label>
        <input type="text" id="id" class="form-control" placeholder="User ID" value="01546010268" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <br />
        <input type="password" id="pass" class="form-control" placeholder="Password" value="Caas12345" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="logmasuk" type="button">Sign in</button>
  </div>
</div>
	
</div>
<div class="col-md-4"></div>
		
</div>			

			</div>
		</div>
<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="asset/assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="asset/assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='asset/assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->
<script>
	
	$("#logmasuk").click(function(){
	
		var mydat = { version : 'v1.0',
			//username : '%2B601546010268',
			//pass : 'Caas12345',
			
			username : '%2B6'+$("#id").val(),
			pass : $("#pass").val()
			
		  }
	   
		 
		$.post('/index.php/tmapi/login',mydat,function(data){
			
			//alert(data);
			var token = jQuery.parseJSON(data);
			
			if(token.resultcode == 0){
			
			$.post('/index.php/panel/setlogin',{id:$("#id").val() ,access_token : token.access_token},function(kip){
				
				//$("#papar").html('<pre>'+kip+'</pre>');
				
				window.location.assign('index.php/panel');
			});
			}
			else {
				alert('Wrong ID or password');
			}
			

			
		});

			
	});
	
</script>