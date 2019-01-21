<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!-->

<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<?php wp_head(); ?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e('Поиск'); ?>" />

</form>
	
<?php if (!(current_user_can('level_0'))){ ?>



<form action="<?php echo get_option('home'); ?>/wp-login.php" method="post">

<input type="text" name="log" id="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" size="20"  />

<input type="password" name="pwd" id="pwd" size="20" />

<input type="submit" name="submit" id="submit" value="Войти" class="button" />
 
<input type="button" name="reg" value="Регистрация" onclick="javascript:window.location='http://crimeatest/crimeatest/%D1%80%D0%B5%D0%B3%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%86%D0%B8%D1%8F/'"/>     
    <p>

       <label for="rememberme"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> Запомнить меня</label>

       <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
       

    </p>
</form>
 

<?php } 
    else { ?>
<div style="position: absolute; margin-left: 1080px; top: 30px">

<a href="http://crimeatest/wp-admin/">Панель инструментов</a>
<a href="<?php echo wp_logout_url('http://crimeatest/'); ?>">Выйти</a>
</div>


<?php } ?>

	
</head>

<body <?php body_class(); ?> itemtype="http://schema.org/WebPage" itemscope="itemscope">


	
	
<div class="xf__site hfeed">
	<div class="content-area">
	

