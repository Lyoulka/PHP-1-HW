<!doctype html>
		<html lang="en">
		  <head>
		    <!-- Required meta tags -->
		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		    <link href="css/style.css" rel="stylesheet">
		    <!-- Bootstrap CSS -->
		    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
             <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
             <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
            <script>
                 $('#myModalsearch').on('shown.bs.modal', function () {$('#myInput').trigger('focus')})
            </script>
	    	<title>Shop</title>
		  </head>
		 <body>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   			 <?php if ($_SESSION['auth']):?>
   				 <span class="navbar-brand">Вы авторизованы как <strong><?=$_SESSION['user_name']?></strong></span>

    			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    			    <ul class="navbar-nav mr-auto mt-2 ml-5 mt-lg-0">
    			        <li class="nav-item active">
    			            <a href="../engine/session_destroy.php" class="btn btn-danger btn-md" role="button" aria-pressed="true">Выйти из профиля</a>
    			        </li>
                        <li class="nav-item active">
                            <a href="catalogue.php" class="btn btn-success btn-md ml-3" role="button" aria-pressed="true">Каталог</a>
                     </li>
                     <li class="nav-item active">
                            <a href="basket.php" class="btn btn-success btn-md ml-3" role="button" aria-pressed="true">Корзина</a>
                     </li>
                      <li class="nav-item active">
                            <a href="personal.php" class="btn btn-success btn-md ml-3" role="button" aria-pressed="true">Личный кабинет</a>
                     </li>
    			    </ul>

        			<form class="form-inline my-2 my-lg-0" method="get">
        			    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="<?= $search ?>">
        			    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        			</form>
    		<?else:?>
    		    <span class="navbar-brand">Здравствуй, гость</span>
    		    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    		        <ul class="navbar-nav mr-auto mt-2 ml-5 mt-lg-0">
    		            <li class="nav-item active">
    		                <a href="login.php" class="btn btn-success btn-md" role="button" aria-pressed="true">Авторизация</a>
   		             </li>
                     <li class="nav-item active">
                            <a href="catalogue.php" class="btn btn-success btn-md ml-3" role="button" aria-pressed="true">Каталог</a>
                     </li>
                     <li class="nav-item active">
                            <a href="basket.php" class="btn btn-success btn-md ml-3" role="button" aria-pressed="true">Корзина</a>
                     </li>
                    
    		        </ul>
     		       <?endif;?>
   				 </div>
			</nav>