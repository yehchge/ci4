<?php
/* Smarty version 4.5.5, created on 2025-04-28 06:04:28
  from '/data/sites/ci4/app/Views/template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_680f1a6c2e5919_73067244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '508de13c57d6a28cef0bd9257dc130acd5bd41fb' => 
    array (
      0 => '/data/sites/ci4/app/Views/template.tpl',
      1 => 1745813805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680f1a6c2e5919_73067244 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Hello World Smarty!</h1>

<b><font color="red">Hi, <?php echo (($tmp = $_smarty_tpl->tpl_vars['username']->value ?? null)===null||$tmp==='' ? 'Guys' ?? null : $tmp);?>
.</font></b>

<p>date: <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</p>
<?php }
}
