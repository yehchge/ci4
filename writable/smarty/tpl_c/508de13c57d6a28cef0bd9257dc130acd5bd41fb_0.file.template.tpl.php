<?php
/* Smarty version 4.3.0, created on 2023-02-07 02:13:20
  from '/data/sites/ci4/app/Views/template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e1b3c022a938_55701330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '508de13c57d6a28cef0bd9257dc130acd5bd41fb' => 
    array (
      0 => '/data/sites/ci4/app/Views/template.tpl',
      1 => 1675679115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e1b3c022a938_55701330 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Hello World Smarty!</h1>

<b><font color="red">Hi, <?php echo (($tmp = $_smarty_tpl->tpl_vars['username']->value ?? null)===null||$tmp==='' ? 'Guys' ?? null : $tmp);?>
.</font></b>

<p>date: <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</p>
<?php }
}
