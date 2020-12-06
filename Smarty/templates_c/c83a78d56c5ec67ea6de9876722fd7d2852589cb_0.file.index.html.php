<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-04 04:59:57
  from 'C:\xampp2\htdocs\SmartyCrud\Smarty\templates\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc9b43da8ae50_47163000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c83a78d56c5ec67ea6de9876722fd7d2852589cb' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\SmartyCrud\\Smarty\\templates\\users.tpl',
      1 => 1607054396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc9b43da8ae50_47163000 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<meta>
    <meta charset="utf-8"/>
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <link rel="stylesheet" href="./../assets/css/style.css">
</head>

<body>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria', false, NULL, 'categorias', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categorias']->value['iteration']++;
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categorias']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categorias']->value['iteration'] : null)%2 != 0) {?>
        <a class="impar" href="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
 </a></br>
    <?php } else { ?>
        <a class="par" href="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
 </a></br>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</body>



</html><?php }
}
