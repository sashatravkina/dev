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
                    <svg xmlns="http://www.w3.org/2000/svg" width="89" height="89" viewBox="0 0 89 89" fill="none"> <g opacity="0.8" filter="url(#filter0_d)"> <rect x="4" width="81" height="81" fill="#F4F4F4"/> </g> <rect x="24.5693" y="22.9911" width="38.7443" height="2.86995" rx="1.43498" fill="#B2B1B1"/> <rect x="24.5693" y="37.3409" width="38.7443" height="2.86995" rx="1.43498" fill="#B2B1B1"/> <rect x="24.5693" y="53.1256" width="38.7443" height="2.86995" rx="1.43498" fill="#B2B1B1"/> <defs> <filter id="filter0_d" x="0" y="0" width="89" height="89" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dy="4"/> <feGaussianBlur stdDeviation="2"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
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
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none"><g id="Group 4008"><path id="Vector" d="M31.9268 62.6294C48.7272 62.6294 62.3467 49.0099 62.3467 32.2095C62.3467 15.409 48.7272 1.78955 31.9268 1.78955C15.1263 1.78955 1.50684 15.409 1.50684 32.2095C1.50684 49.0099 15.1263 62.6294 31.9268 62.6294Z" stroke="#B2B1B1" stroke-width="2" stroke-miterlimit="10" style="fill: transparent !important;"/><path id="Vector_2" d="M52.5052 5.81558C52.5052 9.08684 49.87 11.6312 46.6896 11.6312C43.4183 11.6312 40.874 8.99597 40.874 5.81558C40.874 2.54431 43.5092 0 46.6896 0C49.87 0 52.5052 2.63518 52.5052 5.81558Z" fill="#B2B1B1"/></g></svg><b class="caret"></b></div>
                            <span class="name"><?= Yii::t('base', 'Лента'); ?></span>
                        </a>
                    </div>
                    <?= \humhub\widgets\NotificationArea::widget(); ?>
                    <div class="item">
                        <a href="<?= Url::to(['/directory/directory']); ?>">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none"><g id="Group 4318"><g id="Group"><g id="Group_2"><path id="Vector" d="M18.1451 0H3.71163C1.66464 0 0 1.66491 0 3.7111V18.1459C0 20.1924 1.66491 21.857 3.71163 21.857H18.1451C20.1921 21.857 21.8568 20.1921 21.8568 18.1454V3.71083C21.8568 1.66491 20.1921 0 18.1451 0ZM18.1451 20.0355H3.7111C2.66866 20.0355 1.821 19.1881 1.821 18.1457V3.7111C1.821 2.66866 2.66893 1.82126 3.7111 1.82126H18.1446C19.187 1.82126 20.0347 2.66866 20.0347 3.7111V18.1457H20.035C20.035 19.1881 19.1873 20.0355 18.1451 20.0355Z" fill="#B2B1B1"/></g></g><g id="Group_3"><g id="Group_4"><path id="Vector_2" d="M47.2887 0H32.8552C30.8082 0 29.1436 1.66491 29.1436 3.7111V18.1459C29.1436 20.1924 30.8085 21.857 32.8552 21.857H47.2887C49.3354 21.857 51.0003 20.1921 51.0003 18.1454V3.71083C51.0003 1.66491 49.3354 0 47.2887 0ZM49.1782 18.1457C49.1782 19.1881 48.3303 20.0355 47.2881 20.0355H32.8547C31.8122 20.0355 30.9646 19.1881 30.9646 18.1457V3.7111C30.9646 2.66866 31.8125 1.82126 32.8547 1.82126H47.2881C48.3306 1.82126 49.1782 2.66866 49.1782 3.7111V18.1457Z" fill="#B2B1B1"/></g></g><g id="Group_5"><g id="Group_6"><path id="Vector_3" d="M18.1451 29.1431H3.71163C1.66518 29.1431 0 30.808 0 32.8542V47.289C0 49.3355 1.66491 51.0001 3.71163 51.0001H18.1451C20.1921 51.0001 21.8568 49.3352 21.8568 47.2885V32.8539C21.8568 30.8077 20.1921 29.1431 18.1451 29.1431ZM18.1451 49.1786H3.7111C2.66866 49.1786 1.821 48.3312 1.821 47.2887V32.8542C1.821 31.8117 2.66893 30.9643 3.7111 30.9643H18.1446C19.187 30.9643 20.0347 31.8117 20.0347 32.8542V47.2887H20.035C20.035 48.3312 19.1873 49.1786 18.1451 49.1786Z" fill="#B2B1B1"/></g></g><g id="Group_7"><g id="Group_8"><path id="Vector_4" d="M47.2887 29.1431H32.8552C30.8082 29.1431 29.1436 30.808 29.1436 32.8542V47.289C29.1436 49.3355 30.8085 51.0001 32.8552 51.0001H47.2887C49.3354 51.0001 51.0003 49.3352 51.0003 47.2885V32.8539C51.0003 30.8077 49.3354 29.1431 47.2887 29.1431ZM49.1782 47.2887C49.1782 48.3312 48.3303 49.1786 47.2881 49.1786H32.8547C31.8122 49.1786 30.9646 48.3312 30.9646 47.2887V32.8542C30.9646 31.8117 31.8125 30.9643 32.8547 30.9643H47.2881C48.3306 30.9643 49.1782 31.8117 49.1782 32.8542V47.2887Z" fill="#B2B1B1"/></g></g></g></svg></div>
                            <span class="name"><?= Yii::t('base', 'Разделы'); ?></span>
                        </a>
                    </div>
                    <?= \humhub\modules\space\widgets\Chooser::widget(); ?>
                    <div class="item">
                        <a href="<?= Url::to(['/search/search']); ?>">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none"><path d="M23.0078 14.1016C22.5981 14.1016 22.2656 14.4341 22.2656 14.8438C22.2656 15.2534 22.5981 15.5859 23.0078 15.5859C23.4175 15.5859 23.75 15.2534 23.75 14.8438C23.75 14.4341 23.4175 14.1016 23.0078 14.1016Z" fill="#B2B1B1"/><path d="M37.1302 32.9323L27.2235 23.0256C28.8374 20.5946 29.6875 17.7795 29.6875 14.8438C29.6875 6.65891 23.0286 0 14.8438 0C6.65891 0 0 6.65891 0 14.8438C0 23.0286 6.65891 29.6875 14.8438 29.6875C17.7795 29.6875 20.5947 28.8373 23.0256 27.2236L25.7639 29.9619C25.7642 29.9623 25.7646 29.9626 25.765 29.9631L32.9322 37.1302C33.4931 37.6911 34.2385 38 35.0312 38C35.824 38 36.5694 37.6911 37.13 37.1305C37.691 36.5699 38 35.8244 38 35.0312C38 34.2381 37.691 33.4926 37.1302 32.9323ZM22.6765 25.6594C22.6765 25.6595 22.6764 25.6595 22.6764 25.6596C20.3854 27.3236 17.6771 28.2031 14.8438 28.2031C7.47739 28.2031 1.48438 22.2101 1.48438 14.8438C1.48438 7.47739 7.47739 1.48438 14.8438 1.48438C22.2101 1.48438 28.2031 7.47739 28.2031 14.8438C28.2031 17.6771 27.3236 20.3854 25.6595 22.6764C24.827 23.8233 23.8234 24.827 22.6765 25.6594ZM24.2336 26.3323C25.0018 25.7039 25.704 25.0017 26.3323 24.2336L28.438 26.3393C27.7976 27.095 27.095 27.7977 26.3393 28.438L24.2336 26.3323ZM36.0806 36.0806C35.8001 36.3612 35.4274 36.5156 35.0312 36.5156C34.6351 36.5156 34.2624 36.3612 33.9819 36.0806L27.3916 29.4904C28.1432 28.8453 28.8453 28.1433 29.4903 27.3917L36.0808 33.9822C36.3612 34.2623 36.5156 34.6348 36.5156 35.0312C36.5156 35.4277 36.3612 35.8002 36.0806 36.0806Z" fill="#B2B1B1"/><path d="M14.8438 2.96875C8.2958 2.96875 2.96875 8.2958 2.96875 14.8438C2.96875 21.3917 8.2958 26.7188 14.8438 26.7188C21.3917 26.7188 26.7188 21.3917 26.7188 14.8438C26.7188 8.2958 21.3917 2.96875 14.8438 2.96875ZM14.8438 25.2344C9.11436 25.2344 4.45312 20.5731 4.45312 14.8438C4.45312 9.11436 9.11436 4.45312 14.8438 4.45312C20.5731 4.45312 25.2344 9.11436 25.2344 14.8438C25.2344 20.5731 20.5731 25.2344 14.8438 25.2344Z" fill="#B2B1B1"/><path d="M23.1611 11.6578C22.522 9.99437 21.4092 8.57219 19.943 7.54508C18.4418 6.4934 16.6785 5.9375 14.8438 5.9375C14.4339 5.9375 14.1016 6.26985 14.1016 6.67969C14.1016 7.08952 14.4339 7.42187 14.8438 7.42187C17.8941 7.42187 20.6797 9.33805 21.7755 12.1902C21.8889 12.4853 22.1701 12.6664 22.4685 12.6664C22.5569 12.6664 22.647 12.6504 22.7345 12.6168C23.1171 12.4698 23.3081 12.0404 23.1611 11.6578Z" fill="#B2B1B1"/></svg><b class="caret"></b></div>
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
