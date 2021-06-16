<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $options [] */

?>
<?= Html::beginTag('div class="item mobile-close"', $options) ?>
    <a id="icon-notifications" href="<?= Url::to(['/notification/overview']); ?>">
        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"> <path d="M39.4102 28.586C34.7055 23.88 33.9975 21.5187 33.9975 14C33.9975 6.26797 27.7309 0 20.0002 0C12.2695 0 6.00281 6.26805 6.00281 14C6.00281 18.054 5.89484 19.5673 5.33679 21.4253C4.64281 23.74 3.21812 25.956 0.58945 28.586C-0.669847 29.846 0.222184 32 2.00351 32H13.1015L13.0008 33C13.0008 36.866 16.1341 40 19.9994 40C23.8648 40 26.9981 36.866 26.9981 33L26.8974 32H37.9961C39.7781 32 40.6702 29.846 39.4102 28.586ZM20.0008 38C17.2401 38 15.0015 35.7607 15.0015 33L15.1022 32H24.8982L25.0002 33C25.0002 35.7607 22.7615 38 20.0008 38ZM2.00414 30C8.00281 24 8.00281 20 8.00281 14C8.00281 7.37336 13.3741 2 20.0002 2C26.6262 2 31.9975 7.37336 31.9981 14C31.9981 20 31.9981 24 37.9968 30H2.00414Z" fill="#045269"/> </svg></div>
        <span class="name"><?= Yii::t('base', 'Уведомления'); ?></span>
        <span class="label label-danger label-notifications" id="badge-notifications" style="display:none;"></span>
    </a>
<?= Html::endTag('div') ?>