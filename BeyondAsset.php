<?php

namespace kriss\beyond;

use yii\base\Exception;
use yii\web\AssetBundle;

class BeyondAsset extends AssetBundle {

    public $sourcePath = '@vendor/kriss/yii2-beyond-admin-asset/assets';
    public $css = [
        'css/font-awesome.min.css',
        'css/beyond.min.css',
    ];
    public $js = [
        'js/beyond.min.js' // 该 js 已经做过修改，去除了 cookie 存储样式部分
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * 可选 skin-***
     * @var string
     */
    public $skin;

    /**
     * @inheritdoc
     */
    public function init() {
        // Append skin color file if specified
        if ($this->skin) {
            if ((strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid skin specified');
            }

            $this->css[] = sprintf('css/skins/%s.min.css', str_replace('skin-','',$this->skin));
        }

        parent::init();
    }
}