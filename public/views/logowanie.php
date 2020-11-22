<!DOCTYPE html>

<head>
	<link rel="stylesheet" type="text/css" href="public/css/style.css" >
	<title>Logowanie</title>
</head>

<body>
	<div class="logowanie_tlo">
	
		<div class="logowanie_logo">
			<img src="public/png/logo.png">
		</div>

		<div class="logowanie_login">
			<form action="login" method="POST">
                <div class="message">
                    <?php
                        if(isset($messages))
                        {
                            foreach ($messages as $message)
                            {
                                echo $message;
                            }
                        }
                    ?>
                </div>

				<input name="email" type="text" placeholder="login/e-mail">
				<input name="password" type="password" placeholder="haslo">

				<button type="submit">
					Logowanie
				</button>
			</form>
		</div>
		
	</div>
</body>
