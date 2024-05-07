<?php
/* Smarty version 4.5.1, created on 2024-05-06 18:00:58
  from 'C:\xampp\htdocs\php_05\app\Kalkulator\kalkulatorZwykly.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6638feba617375_92327792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d5f75021a773a7321fa7a50608454a75f9d6748' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05\\app\\Kalkulator\\kalkulatorZwykly.html',
      1 => 1714753264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638feba617375_92327792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12484732426638feba6065c3_37330120', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'content'} */
class Block_12484732426638feba6065c3_37330120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12484732426638feba6065c3_37330120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Main -->
<div id="main" class="alt">

	<!-- One -->
	<section id="one">
		<div class="inner">
			<header class="major">
				<h1>Kalkulator</h1>
			</header>

			<!-- Elements -->
			<h2 id="elements">Wprowadź dane:</h2>
			<div class="row gtr-200">
				<div class="col-6 col-12-medium">

					<!-- Form -->

					<div class="col-6 col-12-small">


						<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
kalkulatorZwykly" method="post">
							<div class="row gtr-uniform">
								<div class="col-6 col-12-xsmall">
									<label for="x">Pierwsza liczba</label> <input id="x"
										type="text" placeholder="Podaj liczbę" name="x"
										value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
								</div>
								<div class="col-6 col-12-xsmall">
									<label for="y">Druga liczba</label> <input id="y" type="text"
										placeholder="Podaj liczbę" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">
								</div>
								<!-- Break -->
								<div class="col-12">
									<select id="op" name="op"> <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->op_name))) {?>
										<option value="" disabled="true">---</option> <?php }?>
										<option value="">- Działanie -</option>
										<option value="plus">+</option>
										<option value="minus">-</option>
										<option value="times">*</option>
										<option value="div">/</option>
									</select>
								</div>


								<!-- Break -->
								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" value="Oblicz" class="primary" /></li>

									</ul>
								</div>
							</div>
						</form>


						<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

							 <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
							<h4>Wystąpiły błędy:</h4>
							<ol class="err">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?> <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ol>
							<?php }?>  <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
							<h4>Informacje:</h4>
							<ol class="inf">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?> <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ol>
							<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
							<h4>Wynik</h4>
							<p class="res"><?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
</p>
							<?php }?>

						</div>

						<?php
}
}
/* {/block 'content'} */
}
