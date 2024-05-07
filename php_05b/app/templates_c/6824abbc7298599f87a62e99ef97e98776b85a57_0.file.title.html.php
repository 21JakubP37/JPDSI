<?php
/* Smarty version 4.5.1, created on 2024-05-03 18:30:38
  from 'C:\Programy\XAMPP\htdocs\php_04\app\title.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6635112edba015_61717136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6824abbc7298599f87a62e99ef97e98776b85a57' => 
    array (
      0 => 'C:\\Programy\\XAMPP\\htdocs\\php_04\\app\\title.html',
      1 => 1714753837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6635112edba015_61717136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21446998646635112edb6d14_21906285', 'footer');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12738287516635112edb78d4_37635798', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_21446998646635112edb6d14_21906285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_21446998646635112edb6d14_21906285',
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
class Block_12738287516635112edb78d4_37635798 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12738287516635112edb78d4_37635798',
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
					<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
kalkulatorZwykly" class="link">Kalkulator
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
					<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
kalkulatorKredytowy" class="link">Kalkulator
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
