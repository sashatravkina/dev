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
                    <div class="item">
                        <a href="<?= Url::to(['/directory/directory']); ?>">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none"><g id="Group 4318"><g id="Group"><g id="Group_2"><path id="Vector" d="M18.1451 0H3.71163C1.66464 0 0 1.66491 0 3.7111V18.1459C0 20.1924 1.66491 21.857 3.71163 21.857H18.1451C20.1921 21.857 21.8568 20.1921 21.8568 18.1454V3.71083C21.8568 1.66491 20.1921 0 18.1451 0ZM18.1451 20.0355H3.7111C2.66866 20.0355 1.821 19.1881 1.821 18.1457V3.7111C1.821 2.66866 2.66893 1.82126 3.7111 1.82126H18.1446C19.187 1.82126 20.0347 2.66866 20.0347 3.7111V18.1457H20.035C20.035 19.1881 19.1873 20.0355 18.1451 20.0355Z" fill="#B2B1B1"/></g></g><g id="Group_3"><g id="Group_4"><path id="Vector_2" d="M47.2887 0H32.8552C30.8082 0 29.1436 1.66491 29.1436 3.7111V18.1459C29.1436 20.1924 30.8085 21.857 32.8552 21.857H47.2887C49.3354 21.857 51.0003 20.1921 51.0003 18.1454V3.71083C51.0003 1.66491 49.3354 0 47.2887 0ZM49.1782 18.1457C49.1782 19.1881 48.3303 20.0355 47.2881 20.0355H32.8547C31.8122 20.0355 30.9646 19.1881 30.9646 18.1457V3.7111C30.9646 2.66866 31.8125 1.82126 32.8547 1.82126H47.2881C48.3306 1.82126 49.1782 2.66866 49.1782 3.7111V18.1457Z" fill="#B2B1B1"/></g></g><g id="Group_5"><g id="Group_6"><path id="Vector_3" d="M18.1451 29.1431H3.71163C1.66518 29.1431 0 30.808 0 32.8542V47.289C0 49.3355 1.66491 51.0001 3.71163 51.0001H18.1451C20.1921 51.0001 21.8568 49.3352 21.8568 47.2885V32.8539C21.8568 30.8077 20.1921 29.1431 18.1451 29.1431ZM18.1451 49.1786H3.7111C2.66866 49.1786 1.821 48.3312 1.821 47.2887V32.8542C1.821 31.8117 2.66893 30.9643 3.7111 30.9643H18.1446C19.187 30.9643 20.0347 31.8117 20.0347 32.8542V47.2887H20.035C20.035 48.3312 19.1873 49.1786 18.1451 49.1786Z" fill="#B2B1B1"/></g></g><g id="Group_7"><g id="Group_8"><path id="Vector_4" d="M47.2887 29.1431H32.8552C30.8082 29.1431 29.1436 30.808 29.1436 32.8542V47.289C29.1436 49.3355 30.8085 51.0001 32.8552 51.0001H47.2887C49.3354 51.0001 51.0003 49.3352 51.0003 47.2885V32.8539C51.0003 30.8077 49.3354 29.1431 47.2887 29.1431ZM49.1782 47.2887C49.1782 48.3312 48.3303 49.1786 47.2881 49.1786H32.8547C31.8122 49.1786 30.9646 48.3312 30.9646 47.2887V32.8542C30.9646 31.8117 31.8125 30.9643 32.8547 30.9643H47.2881C48.3306 30.9643 49.1782 31.8117 49.1782 32.8542V47.2887Z" fill="#B2B1B1"/></g></g></g></svg></div>
                            <span class="name"><?= Yii::t('base', 'Участники'); ?></span>
                        </a>
                    </div>
                    <?= \humhub\modules\space\widgets\Chooser::widget(); ?>
                    <div class="item">
                        <a href="<?= Url::to(['/search/search']); ?>">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none"> <path d="M16.9877 0C7.63519 0 0.0263672 7.60882 0.0263672 16.9613C0.0263672 26.3138 7.63519 33.9227 16.9877 33.9227C26.3402 33.9227 33.949 26.3138 33.949 16.9613C33.949 7.60882 26.3401 0 16.9877 0ZM16.9877 30.9556C9.27104 30.9556 2.9934 24.678 2.9934 16.9613C2.9934 9.24468 9.27104 2.96703 16.9877 2.96703C24.7039 2.96703 30.982 9.24468 30.982 16.9613C30.982 24.678 24.7044 30.9556 16.9877 30.9556Z" fill="#045269"/> <path d="M39.7461 37.621L28.966 26.8409C28.3864 26.2614 27.4478 26.2614 26.8683 26.8409C26.2887 27.42 26.2887 28.3595 26.8683 28.9386L37.6484 39.7187C37.9382 40.0085 38.3174 40.1533 38.6973 40.1533C39.0771 40.1533 39.4563 40.0085 39.7461 39.7187C40.3256 39.1396 40.3256 38.2001 39.7461 37.621Z" fill="#045269"/> </svg><b class="caret"></b></div>
                            <span class="name"><?= Yii::t('base', 'Поиск'); ?></span>
                        </a>
                    </div>
                </div>
                <div class="account">
                    <?= humhub\modules\passport\AccountTopMenuKeycloak::widget(); ?>
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
