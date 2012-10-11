<?php
/**
 * @copyright contao4you 2012 <http://www.contao4you.de>
 * @author Oliver Lohoff <info@contao4you.de>
 */

    define('TL_MODE', 'BE');
    require_once '../../initialize.php';
    $current = $_SESSION['BE_DATA']['referer']['current'];
    preg_match('/id=[0-9]+/', $current, $treffer);
    $id = substr($treffer[0], 3);
    preg_match('/table=.*id/', $current, $treffer);
    $table = substr($treffer[0], 6, -3);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="../../../plugins/tinyMCE/tiny_mce_popup.js"></script>
    <script src='../../../plugins/mootools/core/<?php echo MOOTOOLS ?>/mootools-core.js'></script>
    <script src="../../../plugins/mootools/core/<?php echo MOOTOOLS ?>/mootools-more.js"></script>
    <style type="text/css">
        iframe body { margin:0; padding: 0; }
        #footer input { float:right; display: block; margin: 5px; }
        h1 { margin: 0 0 10px 0; color: #404040; font-size: 18px; font-weight: bold; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; line-height: 26px;}
    </style>
</head>
<body>

<script>
    var win = tinyMCEPopup.getWindowArg("window");
    /*var URL = "";
    win.document.getElementById(tinyMCEPopup.getWindowArg("input")).value = URL;*/

    function radioWert() {
        //$$('input.tl_tree_radio').each(function(e){
       frames["simple-iframe"].$$('input.tl_tree_radio').each(function(e){
           if (e.checked) {
               win.document.getElementById(tinyMCEPopup.getWindowArg("input")).value = e.getParent(".tl_file").getElement(".tl_left label").title;
           }
       })
    }
</script>

<h1>Dateiverwaltung</h1>

<iframe style="border:none;" name="simple-iframe" width="100%" height="500" src="/contao/file.php?do=article&table=<?php echo $table; ?>&field=singleSRC&act=show&id=<?php echo $id; ?>&rt=<?php echo $_SESSION["REQUEST_TOKEN"]; ?>">kein iframe</iframe>

<div id="footer">

    <form action="#" onsubmit="tinyMCEPopup.close();">
        <input type="submit" onclick="radioWert();" value="Übernehmen">
    </form>

    <form action="#" onsubmit="tinyMCEPopup.close();">
        <input type="submit" value="Abbrechen">
    </form>

</div>

<div class="clear"></div>

</body>
</html>