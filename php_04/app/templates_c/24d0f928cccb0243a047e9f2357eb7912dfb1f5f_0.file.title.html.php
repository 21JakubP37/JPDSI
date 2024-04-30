<?php
/* Smarty version 4.5.1, created on 2024-04-30 15:16:34
  from 'C:\xampp\htdocs\php_03\app\title.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6630ef3234a407_49839091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24d0f928cccb0243a047e9f2357eb7912dfb1f5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03\\app\\title.html',
      1 => 1714482993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6630ef3234a407_49839091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13787938886630ef32347072_45883278', 'footer');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16816018176630ef32347ef8_34007402', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_13787938886630ef32347072_45883278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_13787938886630ef32347072_45883278',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer id="footer">
							<div class="inner align-center">
							<h3>Niedziałające linki do nieistniejących social mediów:</h3>
								<ul class="icons">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
								</ul>
								
							</div>
						</footer><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_16816018176630ef32347ef8_34007402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16816018176630ef32347ef8_34007402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Banner -->

<section id="banner" class="major align-center">
	<div class="inner">
		<header class="major row > .off-1">
			<h1>Witamy w świecie kalkulatorów</h1>
		</header>
		<div class="content row > .off-1">
			<p>
				
			</p>
			<ul class="actions">
				<li><a href="#one" class="button next scrolly">Get Started</a></li>
			</ul>
		</div>
	</div>
</section>

<!-- Main -->
<div id="main">

	<!--  One -->
	<section id="one" class="tiles">
		<article>
			<span class="image"> <img src="images/pic01.jpg" alt="" />
			</span>
			<header class="major">
				<h3>
					<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/kalkulatorZwykly.php" class="link">Kalkulator
						Zwykły</a>
				</h3>
				<p>Dobry, jeśli nie potrafisz liczyć</p>
			</header>
		</article>
		<article>
			<span class="image"> <img src="images/pic02.jpg" alt="" />
			</span>
			<header class="major">
				<h3>
					<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/kalkulatorKredytowy.php" class="link">Kalkulator
						Kredytowy</a>
				</h3>
				<p>I tak go nie spłacisz</p>
			</header>
		</article>

	</section>

	<!-- 						Two -->
	<section id="two">
		<div class="inner">
			<header class="major">
				<h2>Dlaczego powinieneś wybrać nas?</h2>
			</header>
			<p>A czemu by nie?</p>

		</div>
	</section>

</div>


<?php
}
}
/* {/block 'content'} */
}
