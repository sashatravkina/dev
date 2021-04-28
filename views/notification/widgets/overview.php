<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $options [] */

?>
<?= Html::beginTag('div class="item"', $options) ?>
    <a id="icon-notifications" href="#" data-action-click='toggle' aria-label="<?= Yii::t('NotificationModule.base', 'Open the notification dropdown menu') ?>" data-toggle="dropdown">
        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="51" viewBox="0 0 45 51" fill="none"><g id="Group"><path id="Vector" d="M26.619 7.28174V7.39293L26.7254 7.42526C32.7673 9.26182 37.1767 14.8849 37.1767 21.5183V26.1121C37.1767 32.0373 39.4354 37.6563 43.5364 41.9331C43.894 42.306 43.9945 42.8564 43.7918 43.3317C43.5891 43.807 43.1223 44.1154 42.6055 44.1154H29.5035H29.381L29.3565 44.2354C28.7016 47.4488 25.8535 49.8741 22.4499 49.8741C19.0465 49.8741 16.1981 47.4488 15.5433 44.2354L15.5188 44.1154H15.3963H2.29429C1.77755 44.1154 1.31068 43.807 1.10794 43.3317C0.905206 42.8564 1.00571 42.3061 1.36339 41.9331L1.25513 41.8293L1.36339 41.9331C5.46439 37.6563 7.72315 32.0374 7.72315 26.1121V21.5183C7.72315 14.8848 12.1324 9.26182 18.1745 7.42526L18.2809 7.39293V7.28174V5.20188C18.2809 2.90319 20.1512 1.03281 22.4499 1.03281C24.7486 1.03281 26.619 2.90319 26.619 5.20188V7.28174ZM23.8752 6.86074L24.0396 6.87659V6.71144V5.20188C24.0396 4.32519 23.3266 3.61219 22.4499 3.61219C21.5732 3.61219 20.8602 4.32519 20.8602 5.20188V6.71144V6.87659L21.0246 6.86074C21.4939 6.8155 21.9692 6.79156 22.4499 6.79156C22.9306 6.79156 23.406 6.8155 23.8752 6.86074ZM18.3785 44.1154H18.1661L18.2371 44.3155C18.8519 46.049 20.5074 47.2948 22.4499 47.2948C24.3925 47.2948 26.0479 46.049 26.6627 44.3155L26.7337 44.1154H26.5214H18.3785ZM5.27707 41.2963L5.09826 41.536H5.3973H39.5026H39.8017L39.6229 41.2963C36.3634 36.9272 34.5973 31.6399 34.5973 26.1121V21.5183C34.5973 14.8201 29.1481 9.37094 22.4499 9.37094C15.7517 9.37094 10.3025 14.8201 10.3025 21.5183V26.1121C10.3025 31.6399 8.53647 36.9272 5.27707 41.2963Z" fill="#B2B1B1" stroke="#F4F4F4" stroke-width="0.3"/><path id="Vector_2" d="M42.6058 22.8078C41.8936 22.8078 41.3161 22.2304 41.3161 21.5181C41.3161 16.4791 39.3536 11.7409 35.7904 8.17776C35.2868 7.67409 35.2868 6.85755 35.7904 6.35389C36.2941 5.85023 37.1107 5.85031 37.6143 6.35389C41.665 10.4046 43.8955 15.7895 43.8955 21.5181C43.8955 22.2304 43.3181 22.8078 42.6058 22.8078Z" fill="#B2B1B1" stroke="#F4F4F4" stroke-width="0.3"/><path id="Vector_3" d="M9.10955 6.35391L9.10956 6.35392C9.61322 6.85759 9.61322 7.67413 9.10956 8.1778L9.21562 8.28386L9.10956 8.1778C5.54651 11.7409 3.58387 16.4791 3.58387 21.518C3.58387 22.2303 3.00643 22.8077 2.29418 22.8077C1.58193 22.8077 1.00449 22.2303 1.00449 21.518C1.00449 15.7895 3.23499 10.4046 7.28568 6.35392C7.78935 5.85025 8.60598 5.85026 9.10955 6.35391Z" fill="#B2B1B1" stroke="#F4F4F4" stroke-width="0.3"/></g></svg><b class="caret"></b></div>
        <span class="name"><?= Yii::t('base', 'Уведомления'); ?></span>
        <span class="label label-danger label-notifications" id="badge-notifications" style="display:none;"></span>
    </a>

    <ul class="dropdown-menu" id="dropdown-notifications">
        <li class="dropdown-header">
            <div class="arrow"></div><?= Yii::t('NotificationModule.base', 'Notifications'); ?>
            <div class="dropdown-header-link">
                <a id="mark-seen-link" data-action-click='markAsSeen'
                data-action-url="<?= Url::to(['/notification/list/mark-as-seen']); ?>">
                    <?= Yii::t('NotificationModule.base', 'Mark all as seen'); ?>
                </a>
            </div>
        </li>
        <li>
            <ul class="media-list"></ul>
        </li>
        <li id="loader_notifications">
            <?= \humhub\widgets\LoaderWidget::widget(); ?>
        </li>
        <li>
            <div class="dropdown-footer">
                <a class="btn btn-default col-md-12" href="<?= Url::to(['/notification/overview']); ?>">
                    <?= Yii::t('NotificationModule.base', 'Show all notifications'); ?>
                </a>
            </div>
        </li>
    </ul>
<?= Html::endTag('div') ?>