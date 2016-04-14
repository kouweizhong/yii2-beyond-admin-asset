<?php

namespace kriss\beyond\helpers;

use yii\helpers\ArrayHelper;

class Html extends \yii\helpers\Html
{
    /**
     * 让radio样式符合模板风格
     * @param string $name
     * @param bool $checked
     * @param array $options
     * @return string
     */
    public static function radio($name, $checked = false, $options = []) {
        $label = ArrayHelper::remove($options, 'label');
        $options['label'] = self::tag('span', $label, ['class' => 'text']);
        return self::tag('div', parent::radio($name, $checked, $options), ['class' => 'radio']);
    }

    /**
     * 让checkbox样式符合模板风格
     * @param string $name
     * @param bool $checked
     * @param array $options
     * @return string
     */
    public static function checkbox($name, $checked = false, $options = []) {
        $label = ArrayHelper::remove($options, 'label');
        $options['label'] = self::tag('span', $label, ['class' => 'text']);
        return self::tag('div', parent::checkbox($name, $checked, $options), ['class' => 'checkbox']);
    }
}