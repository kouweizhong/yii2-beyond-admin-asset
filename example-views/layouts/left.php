<?php
/* @var $this \yii\web\View */
/* @var $directoryAsset string */

/** @var \app\models\User $user */
$user = Yii::$app->user->getIdentity();
?>

<div class="page-sidebar" id="sidebar">
    <div class="sidebar-header-wrapper">
        <i class="searchicon"></i>
        <div class="searchhelper"></div>
    </div>
    <?= kriss\beyond\widgets\Menu::widget([
        'options' => ['class' => 'nav sidebar-menu'],
        'items' => [
            ['label' => '首页', 'icon' => 'fa fa-home', 'url' => ['/home']],
            ['label' => '学生信息维护', 'icon' => 'fa fa-users', 'url' => ['/teacher/students/index'], 'visible' => $user->isTeacher()],
            ['label' => '资源查看', 'icon' => 'fa fa-bookmark', 'url' => ['/source']],
            ['label' => '单项突破', 'icon' => 'fa fa-pencil', 'url' => ['/practice/single/index']],
            ['label' => '真题演练', 'icon' => 'fa fa-list-alt', 'url' => ['/practice/set-paper/index']],
            ['label' => '模拟现场', 'icon' => 'fa fa-clock-o', 'url' => ['/practice/exam/index']],
            ['label' => '单词训练', 'icon' => 'fa fa-file-word-o', 'url' => ['/practice/words/index']],
            ['label' => '错题集锦', 'icon' => 'fa fa-file', 'url' => ['/record/wrong/index']],
            ['label' => '历史回顾', 'icon' => 'fa fa-calendar', 'url' => ['/record/history/index']],
            ['label' => '总评分析', 'icon' => 'fa fa-list-alt', 'url' => ['/analysis']],
            ['label' => '个人中心', 'icon' => 'fa fa-user', 'url' => ['/account']],
        ]
    ]) ?>
</div>
