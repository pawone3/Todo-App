<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.3.1.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	
</head>
<body>

<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(); ?>/Users/register">Register</a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(); ?>/Projects/index">Projects</a>
	      </li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	    	<li class="nav-item">
				<?php		

						if($this->session->userdata('username')):
							echo form_open('users/logout')."</br>";

								$data=array(
									'class'=>'btn btn-default',
									'name'=>'submit',
									'value'=>'Logout'
								);

								echo form_submit($data);

							echo form_close();
						endif;
				?>
	      	</li>
	    </ul>
	  </div>
	</nav>
</div>


<div class="container">
	<div class="row">
		<div class="col-xs-3 col-md-3">
			
			<?php $this->load->view('users/login_view'); ?>

		</div>
		<!-- <div class="col-md-3"></div> -->

		<div class="col-xs-9 col-md-9">
			
			<?php $this->load->view($main_view); ?> 

		</div>
	</div>
		
</div>


</body>
</html>