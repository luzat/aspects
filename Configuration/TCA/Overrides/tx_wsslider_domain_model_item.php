<?php

if (isset($GLOBALS['TCA']['tx_wsslider_domain_model_item'])) {
    $cropVariants = &$GLOBALS['TCA']['tx_wsslider_domain_model_item']['columns']['foreground_media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['default'];
    $cropVariants['allowedAspectRatios']['NaN'] = [
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
        'value' => 0.0
    ];
    $cropVariants['selectedRatio'] = 'NaN';
}
