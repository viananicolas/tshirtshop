{*smarty*}
{config_load file="site.conf"}
{load_presentation_object filename="store_front" assign="obj"}
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>{#site_title#}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/tshirtshop.css" />
    </head>
<body>
<div id="doc" class="yui-t2">
    <div id="bd">
        <div id="yui-main">
            <div class="yui-b">
                <div id="header" class="yui-g">
                    <a href="{$obj->mSiteUrl}">
                        <img src="{$obj->mSiteUrl}images/tshirtshop.png" alt="tshirtshop logo" />
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
            {include file="departments_list.tpl"}
        </div>
    </div>
</div>
</body>
</html>