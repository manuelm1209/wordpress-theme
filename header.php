<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endeavor Desarrollador Web">
    <meta name="author" content="https://www.linkedin.com/in/manuel-montoya-col/">


    <?php
      wp_head();
    ?>
</head>

<body>

    <header class="header text-center">
	    <br>

	    <nav class="navbar navbar-expand-lg navbar-dark" >

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<img src="/endeavor/wp-content/themes/endeavor/images/logo.png" alt="logo" width="180" >
        <hr>

        <!-- menu de navigacion left sidebar -->
        <?php
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
            )
          );
        ?>


				<hr>
        <!-- Barra lateral sidebar-endeavor -->
        <?php
          dynamic_sidebar('sidebar-endeavor');
        ?>

			</div>

		</nav>




    </header>

    <div class="main-wrapper">
      <header class="page-title theme-bg-light text-center gradient py-5">
      <h1 class="heading"><?php the_title()?></h1>
      </header>
