<?php

/**
 * Implement Prestashop Nova Template on Yii2
 * @since v.0.0.1
 * @author sheillendra <suryana869@gmail.com>
 */

namespace sheillendra\nova\assets;

use yii\web\AssetBundle;

class NovaAsset extends AssetBundle {
    public $sourcePath = '@sheillendra/nova/assets/template';
    public $css = [
        'themes/vinova_base/assets/cache/theme-4b96fe.css'
    ];
    public $js = [
        'themes/vinova_base/assets/cache/bottom-42b03d.js'
    ];
    public $depends = [
        //'yii\web\JqueryAsset',
        //'sheillendra\jeasyui\assets\FontAwesomeAsset'
    ];
}
