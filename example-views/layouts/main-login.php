<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

\kriss\beyond\BeyondAsset::register($this);
\app\assets\AppAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/kriss/yii2-beyond-admin-asset/assets');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="login-container animated fadeIn">
    <?= $content ?>
</div>
<footer class="footer">
    <div class="container">
        <p class="text-align-center">
            版权所有：XXXXXXXXX@2016 | <a href="http://www.miitbeian.gov.cn">苏ICP备XXXXXX-2号</a>
        </p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
