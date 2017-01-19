<?php
/* Smarty version 3.1.30, created on 2017-01-18 12:25:54
  from "D:\wamp64\www\tshirtshop\presentation\templates\store_front.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587f5ed271b0f5_48203780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0b983bb316d29c8e7735829064f7bdcb159ddb9' => 
    array (
      0 => 'D:\\wamp64\\www\\tshirtshop\\presentation\\templates\\store_front.tpl',
      1 => 1484742322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:departments_list.tpl' => 1,
  ),
),false)) {
function content_587f5ed271b0f5_48203780 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_load_presentation_object')) require_once 'D:\\wamp64\\www\\tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php';
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "site.conf", null, 0);
?>

<?php smarty_function_load_presentation_object(array('filename'=>"store_front",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'site_title');?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
styles/tshirtshop.css" />
    </head>
<body>
<div id="doc" class="yui-t2">
    <div id="bd">
        <div id="yui-main">
            <div class="yui-b">
                <div id="header" class="yui-g">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
images/tshirtshop.png" alt="tshirtshop logo" />
                    </a>
                </div>
                <div id="contents" class="yui-g">
                    Coração
                    44 CHAPTER 3 ■ STARTING THE TSHIRTSHOP PROJECT
                    www.it-ebooks.infoPlace contents here
                </div>
            </div>
        </div>
        <div class="yui-b">
            <?php $_smarty_tpl->_subTemplateRender("file:departments_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
    </div>
</div>
</body>
</html><?php }
}
