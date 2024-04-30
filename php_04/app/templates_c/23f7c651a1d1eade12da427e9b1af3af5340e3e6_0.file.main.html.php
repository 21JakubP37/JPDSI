<?php
/* Smarty version 4.5.1, created on 2024-04-30 15:17:05
  from 'C:\xampp\htdocs\php_03\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6630ef512a4840_42742279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23f7c651a1d1eade12da427e9b1af3af5340e3e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03\\templates\\main.html',
      1 => 1714483023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6630ef512a4840_42742279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>

		
	</head>
	<body class="is-preload">

		
				<!-- Header -->
				<div class="header">
					<header id="header" class="alt">
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/title.php" class="logo"><strong>Świat</strong> <span>Kalkulatorów</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/title.php">Home</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/kalkulatorKredytowy.php">Kalkulator Kredytowy</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/kalkulatorZwykly.php">Kalkulator</a></li>
						</ul>
						
					</nav>
				</div>
				
			<div class="content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12701133896630ef512a1952_79426417', 'content');
?>

			</div>
			<!-- content -->
				

				<!-- Footer -->
				<div class="footer">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15745034986630ef512a2291_85512505', 'footer');
?>

				</div>
		
		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>


	</body>
</html><?php }
/* {block 'content'} */
class Block_12701133896630ef512a1952_79426417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12701133896630ef512a1952_79426417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_15745034986630ef512a2291_85512505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15745034986630ef512a2291_85512505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<footer id="footer">
							<div class="inner">
								<ul class="icons">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
								</ul>
								
							</div>
						</footer>
					<?php
}
}
/* {/block 'footer'} */
}
