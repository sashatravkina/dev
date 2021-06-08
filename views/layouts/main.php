<?php
    /* @var $this \yii\web\View */
    /* @var $content string */
    use yii\helpers\Url;
    use yii\helpers\Html;
    \humhub\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= strip_tags($this->pageTitle); ?></title>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php $this->head() ?>
        <?= $this->render('head'); ?>
    </head>
    <body>
        <?php $this->beginBody(); ?>

        <div class="hidden-from-desktop">
            <div class="nav-toggle menu-icon-open">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"> <rect x="2.23022" y="0.707107" width="52.3979" height="2.1527" rx="1.07635" transform="rotate(45.0205 2.23022 0.707107)" fill="#045269" stroke="#045269"/> <rect x="0.000253171" y="0.707107" width="52.3979" height="2.1527" rx="1.07635" transform="matrix(-0.706854 0.70736 0.70736 0.706854 37.2454 0.207107)" fill="#045269" stroke="#045269"/> </svg>
                </div>
            </div>
        </div>

        <div class="sidebar mobile-navigation">
            <div class="topbar" id="topbar-first">
                <div class="hidden-from-desktop nav-toggle mobile-icon">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none"><rect x="2.11133" width="48.7919" height="2.88076" rx="1.44038" transform="rotate(45.0205 2.11133 0)" fill="#B2B1B1"/><rect width="48.7919" height="2.88076" rx="1.44038" transform="matrix(-0.706854 0.70736 0.70736 0.706854 34.5625 0)" fill="#B2B1B1"/></svg></div>
                </div>
                <div class="container">
                    <div class="item">
                        <a href="<?= Url::to(['/dashboard/dashboard']); ?>">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none"> <path d="M20.4286 40C31.1587 40 39.8571 31.3015 39.8571 20.5714C39.8571 9.84129 31.1587 1.14282 20.4286 1.14282C9.69847 1.14282 1 9.84129 1 20.5714C1 31.3015 9.69847 40 20.4286 40Z" stroke="#045269" stroke-width="2" stroke-miterlimit="10" style="fill: transparent !important"/> <path d="M33.5711 3.71429C33.5711 5.80357 31.8881 7.42857 29.8569 7.42857C27.7676 7.42857 26.1426 5.74554 26.1426 3.71429C26.1426 1.625 27.8256 0 29.8569 0C31.8881 0 33.5711 1.68303 33.5711 3.71429Z" fill="#045269"/> </svg></div>
                            <span class="name"><?= Yii::t('base', 'Лента'); ?></span>
                        </a>
                    </div>
                    <?= \humhub\widgets\NotificationArea::widget(); ?>
                    <?= \humhub\modules\space\widgets\Chooser::widget(); ?>
                    <div class="item">
                        <a href="<?= Url::to(['/search/search']); ?>">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none"> <path d="M16.9877 0C7.63519 0 0.0263672 7.60882 0.0263672 16.9613C0.0263672 26.3138 7.63519 33.9227 16.9877 33.9227C26.3402 33.9227 33.949 26.3138 33.949 16.9613C33.949 7.60882 26.3401 0 16.9877 0ZM16.9877 30.9556C9.27104 30.9556 2.9934 24.678 2.9934 16.9613C2.9934 9.24468 9.27104 2.96703 16.9877 2.96703C24.7039 2.96703 30.982 9.24468 30.982 16.9613C30.982 24.678 24.7044 30.9556 16.9877 30.9556Z" fill="#045269"/> <path d="M39.7461 37.621L28.966 26.8409C28.3864 26.2614 27.4478 26.2614 26.8683 26.8409C26.2887 27.42 26.2887 28.3595 26.8683 28.9386L37.6484 39.7187C37.9382 40.0085 38.3174 40.1533 38.6973 40.1533C39.0771 40.1533 39.4563 40.0085 39.7461 39.7187C40.3256 39.1396 40.3256 38.2001 39.7461 37.621Z" fill="#045269"/> </svg><b class="caret"></b></div>
                            <span class="name"><?= Yii::t('base', 'Поиск'); ?></span>
                        </a>
                    </div>
                </div>
                <div class="account">
                    <?= \humhub\modules\user\widgets\AccountTopMenu::widget(); ?>
                </div>
            </div>
        </div>

        

        <!-- Start content -->
        <?= $content; ?>
        <!-- End content -->

        <?php $this->endBody(); ?>

        <!-- start: js Mods -->
        <script src="<?= $this->theme->getBaseUrl(); ?>/js/CtrlEnterMod.js"></script>
        <!-- end: js Mods -->

    </body>
</html>
<?php $this->endPage() ?>
