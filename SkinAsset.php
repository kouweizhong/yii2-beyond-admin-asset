<?php
/**
 * 特殊的 skin.js 需要在头部加载
 */

namespace kriss\beyond;

use yii\web\AssetBundle;
use yii\web\View;

class SkinAsset extends AssetBundle{
    public $sourcePath = '@vendor/kriss/yii2-beyond-admin-asset/assets';

    public $jsOptions = [
        'position' => View::POS_HEAD
    ];

    public $js = [
        'js/skins.min.js'
    ];
}