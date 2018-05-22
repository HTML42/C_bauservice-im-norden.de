<?php
$navi = array(
    'index.html' => 'Willkommen',
    'glas-spiegel-bad.html' => 'Glas/Spiegel/Bad',
    'neubau.html' => 'Neubau',
    'sarnierung.html' => 'Sarnierung',
    'reparatur.html' => 'Reparatur',
);
?>
<div id="navi_toggler"></div>
<div id="navigation">
    <nav>
        <?php
        $navi_items = array();
        foreach ($navi as $href => $label) {
            array_push($navi_items, Html::link($href, $label));
        }
        echo Html::ul($navi_items);
        ?>
    </nav>
</div>