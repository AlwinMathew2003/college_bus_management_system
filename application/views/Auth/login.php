<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            height: 100vh;
            background: url("https://images.shiksha.com/mediadata/images/1500011166phpiuET42.jpeg") 50% fixed;
            background-size: cover;
        }

        @keyframes spinner {
            0% { transform: rotateZ(0deg); }
            100% { transform: rotateZ(359deg); }
        }

        * {
            box-sizing: border-box;
        }

        .wrapper {
            display: flex;
            align-items: center;
            flex-direction: column; 
            justify-content: center;
            width: 100%;
            min-height: 100%;
            padding: 20px;
        }

        .login {
            border-radius: 2px 2px 5px 5px;
            padding: 10px 20px 20px 20px;
            width: 90%;
            max-width: 320px;
            background: #ffffff;
            position: relative;
            padding-bottom: 80px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
        }

        .login.loading button {
            max-height: 100%;
            padding-top: 50px;
        }

        .login.ok button {
            background-color: #8bc34a;
            border-radius: 0;
            border-top-color: transparent;
            border-right-color: transparent;
            height: 20px;
            animation: none;
            transform: rotateZ(-45deg);
        }

        .login input {
            display: block;
            padding: 15px 10px;
            margin-bottom: 10px;
            width: 100%;
            border: 1px solid #ddd;
            transition: border-width 0.2s ease;
            border-radius: 25px; /* Oval shape */
            color: #ccc;
        }

        .login input + i.fa {
            color: #fff;
            font-size: 1em;
            position: absolute;
            margin-top: -47px;
            opacity: 0;
            left: 0;
            transition: all 0.1s ease-in;
        }

        .login input:focus + i.fa {
            opacity: 1;
            left: 30px;
            transition: all 0.25s ease-out;
        }

        .login input:focus {
            outline: none;
            color: #444;
            border-color: #2196F3;
            border-left-width: 35px;
        }

        .login a {
            font-size: 0.8em;   
            color: #2196F3;
            text-decoration: none;
        }

        .login .title {
            color: #444;
            font-size: 1.2em;
            font-weight: bold;
            margin: 10px 0 30px 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }

        .login button {
            width: 100%;
            height: 100%;
            padding: 10px 10px;
            background: #2196F3;
            color: #fff;
            display: block;
            border: none;
            margin-top: 20px;
            position: absolute;
            left: 0;
            bottom: 0;
            max-height: 60px;
            border: 0px solid rgba(0, 0, 0, 0.1);
            border-radius: 0 0 2px 2px;
            transform: rotateZ(0deg);
            transition: all 0.1s ease-out;
            border-bottom-width: 7px;
        }

        .login:not(.loading) button:hover {
            box-shadow: 0px 1px 3px #2196F3;
        }

        .login:not(.loading) button:focus {
            border-bottom-width: 4px;
        }

        footer {
            display: block;
            padding-top: 50px;
            text-align: center;
            color: #ddd;
            font-weight: normal;
            text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
            font-size: 0.8em;
        }

        footer a, footer a:link {
            color: #fff;
            text-decoration: none;
        }
    </style>   
<body>
<div class="wrapper">
  <form class="login" action="<?= base_url('ProcessController/processLogin') ?>" method="post">
    <p class="title">Log in</p>
    <input type="text" placeholder="Username" autofocus name="username" required/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Password" name="password" required/>
    <i class="fa fa-key"></i>
   <div>
    <button type="submit">
      <i class="spinner"></i>
      <span class="state"><b>Login</b></span>
    </button>
    <div class="social_login">
            <div class="">
                <a href="<?= base_url('Welcome/form') ?>" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Register now</span>
                </a>
            </div>
        </div>
    </form>
</div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Bootstrap 5 Login Page</title>
	<link rel="stylesheet" href="<?php echo site_url();?>assets/all.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/toast/toast.min.css">
	<script src="<?php echo site_url();?>assets/toast/jqm.js"></script>
	<script src="<?php echo site_url();?>assets/toast/toast.js"></script>
	<style>
		body {
			font-family: "Open Sans", sans-serif;
			height: 90vh;
			background: url("https://images.shiksha.com/mediadata/images/1500011166phpiuET42.jpeg") 50% fixed;
			background-size: cover;
			display: flex;
			justify-content: center;
			align-items: center;
			
		}
		.card-footer{
			background: rgb(38, 107, 181);
			
		}
		
		.container {
			background: white;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			width: 500px;
			border-radius:10px;
			
		}
		.button-container {
			margin-top: auto; 
			display: flex;
			justify-content: center;
			
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="card-body p-5">
				<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
				<?php echo form_open('Auth/login_form'); ?>
				<div class="mb-3">
					<label class="mb-2 text-muted" for="email"><b>Email</b></label>
					<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
				</div>

				<div class="mb-3">
					<label class="mb-2 text-muted" for="password"><b>Password</b></label>
					<input id="password" type="password" class="form-control" name="password" required>
				</div>

				<div class="button-container">
					<button type="submit" class="btn btn-primary">
						Login
					</button>
				</div>
				<?php echo form_close(); ?>
			</div>
			<div class="card-footer py-3 border-0">
				<div class="text-center text-white">
					Don't have an account? <a href="<?= base_url('welcome/form') ?>" class="text-white">Create One</a>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		<?php if($this->session->flashdata('suc')){ ?>
		toastr.success("<?php echo $this->session->flashdata('suc'); ?>");
		<?php }else if($this->session->flashdata('worng')){  ?>
		toastr.error("<?php echo $this->session->flashdata('worng'); ?>");
		<?php }else if($this->session->flashdata('warning')){  ?>
		toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
		<?php }else if($this->session->flashdata('info')){  ?>
		toastr.info("<?php echo $this->session->flashdata('info'); ?>");
		<?php } ?>
		<?php
		$this->session->unset_userdata ( 'suc' ); ?>

		<?php
		$this->session->unset_userdata ( 'worng' ); ?>
	</script>
</body>
</html>