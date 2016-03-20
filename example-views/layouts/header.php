<?php
/* @var $this \yii\web\View */
/* @var $directoryAsset string */

use yii\helpers\Html;
use yii\helpers\Url;

if(!Yii::$app->user->isGuest){
    /** @var \app\models\User $user */
    $user = Yii::$app->user->getIdentity();
    $nickname = $user->username;
}else{
    $nickname = '游客';
}

?>

<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <?=Html::img($directoryAsset.'/img/logo.png',['alt'=>Yii::$app->name])?>
                    </small>
                </a>
            </div>
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>

            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <div class="user-info">
                        <p>
                            <i class="fa fa-user"></i><?= $nickname ?> | <?=Html::a('<i class="fa fa-sign-out"></i>退出登录',['/site/logout'],['data-method'=>'post'])?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

