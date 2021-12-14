<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@100;200;300;400;500&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,100;1,200;1,300;1,400;1,700&display=swap">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="stylesheet" href="sign.css">
    <link rel="icon" href="foto/icon.svg">
    <title>Nyari Dana</title>
</head>

<body>
	<div class="container">
		<div class="img">
			<img src="foto/icon.svg">
		</div>
		<div class="daftar">
			<form action="home.php">
				<h2 class="title">Daftar</h2>

                <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <input type="text" class="input" placeholder="nama">
                    </div>
                 </div>

           		<div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
           		   <div class="div">
           		   		<input type="text" class="input" placeholder="username">
           		   </div>
           		</div>

                <div class="input-div pass">
                    <div class="i"> 
                         <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                         <input type="email" class="input" placeholder="email">
                    </div>
                 </div>

           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" class="input" placeholder="password">
            	   </div>
            	</div>

                <div class="input-div pass">
                    <div class="i"> 
                         <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                         <input type="password" class="input" placeholder="konfirmasi password">
                 </div>
                </div>

            	<input type="submit" class="btn" value="Daftar"></a>
                <p>Sudah punya akun?<span><a href="login.html">Login di sini!</a></span></p>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>