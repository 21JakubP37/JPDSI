<?php
/* Smarty version 4.5.1, created on 2024-05-06 18:01:02
  from 'C:\xampp\htdocs\php_05\app\Kalkulator\kalkulatorKredytowy.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6638febea8fa69_55418622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4df6ad9b297776978990ca492b29a67cb5e7ce66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05\\app\\Kalkulator\\kalkulatorKredytowy.html',
      1 => 1714482670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638febea8fa69_55418622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17701185016638febea81438_75922848', 'content');
?>


	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'content'} */
class Block_17701185016638febea81438_75922848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17701185016638febea81438_75922848',
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
										<h2 id="elements">Kredytowy</h2>
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">

												
												

												
												<!-- Form -->

													<div class="col-6 col-12-small">

													

													<form method="post" action="#">
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
															<label for="wysokosc">Wysokość Kredytu</label>
																<input type="text" name="wysokosc" id="wysokosc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->wysokosc;?>
" placeholder="Wysokość Kredytu" />
															</div>
															<div class="col-6 col-12-xsmall">
															<label for="oprocentowanie">Oprocentowanie</label>
																<input type="text" name="oprocentowanie" id="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" placeholder="Oprocentowanie" />
															</div>
															<div class="col-6 col-12-xsmall">
															<label for="dlugosc">Długość Kredytu</label>
																<input type="text" name="dlugosc" id="dlugosc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dlugosc;?>
" placeholder="Długość (lata)" />															
															</div>
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" value="Oblicz" class="primary" /></li>
																	
																</ul>
															</div>
														</div>
													</form>
												</div>
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
														</div>
												
													
				<?php
}
}
/* {/block 'content'} */
}
