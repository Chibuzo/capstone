<?php
require_once "config.php";

if (isset($_POST['submit'])) {
	extract($_POST);
	$sql = "INSERT INTO users (name, email, password) VALUES ('{$name}', '{$email}', '{$password}')";
	$result = $con->query($sql);
	if (!$result) {
		echo("Error description: " . $con -> error);
	}
	header('Location: http://localhost/proj');	
}

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Title</title>
    <!-- Bootstrap core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#7952b3">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
		.form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
	</style>
</head>

<body>
	<main class="form-signin text-center">
		<form method="post" action="">
			<h1 class="h3 mb-3 fw-normal">Register</h1>
			<div class="form-floating mb-3"><input class="form-control" id="floatingInput" type="text" name="name"
					placeholder="fullname" required><label for="floatingInput">Name</label></div>
			<div class="form-floating mb-3"><input class="form-control" id="floatingInput" type="email" name="email"
					placeholder="name@example.com" required><label for="floatingInput">Email address</label></div>
			
			<div class="form-floating"><input class="form-control" id="floatingPassword" type="password" name="password"
					placeholder="Password" required><label for="floatingPassword">Password</label></div>
			<div class="checkbox mb-3"><label><input type="checkbox" value="remember-me"> Remember me</label></div><input
				class="w-100 btn btn-lg btn-secondary" name="submit" type="submit" value="Register" />
			<p class="mt-5 mb-3 text-muted">&copy;
				<script>
					document.write(new Date().getFullYear());
				</script>
			</p>
		</form>
	</main>
</body>
</html>	
