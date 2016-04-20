<?php
/**
 * @author: Eugene
 * @date: 19.04.16
 * @time: 13:17
 */

namespace digitalmonk\widgets\TranslitWidget\assets;


use yii\web\AssetBundle;

class TranslitWidgetAssets extends AssetBundle
{
    public $sourcePath = '@digitalmonk/widgets/TranslitWidget/assets/assets';

    public $js = [
        'js/translit.js'
    ];

    public $depends = [
        '\yii\web\YiiAsset'
    ];

    public $publishOptions = [
        'forceCopy' => YII_DEBUG
    ];

}