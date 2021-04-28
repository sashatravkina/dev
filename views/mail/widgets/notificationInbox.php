<?php

use humhub\modules\mail\assets\MailMessengerAsset;
use humhub\modules\mail\assets\MailNotificationAsset;
use humhub\modules\mail\permissions\StartConversation;
use humhub\modules\mail\widgets\NewMessageButton;
use humhub\modules\mail\helpers\Url;

/* @var $this \humhub\modules\ui\view\components\View */

MailNotificationAsset::register($this);

$canStartConversation = Yii::$app->user->can(StartConversation::class);
?>

<div class="item">
    <a id="icon-messages" href="#" class="dropdown-toggle" data-toggle="dropdown">
        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="40" viewBox="0 0 46 40" fill="none"><g id="Group 4271"><g id="Group"><path id="Vector" d="M13.5097 23.5385V23.4356L13.4137 23.3986L1.71059 18.8786C1.26782 18.7077 0.976233 18.2816 0.977151 17.8069C0.978068 17.3324 1.27133 16.9074 1.71471 16.7381L43.3748 0.83464C43.3749 0.834637 43.3749 0.834634 43.3749 0.834631C44.2238 0.510724 45.0948 1.25932 44.904 2.14754C44.9033 2.15053 44.9035 2.15069 44.9037 2.15084C44.906 2.15249 44.907 2.15325 43.7498 5.94843C43.1558 7.89623 42.257 10.8429 40.8968 15.302C39.3673 20.3164 37.2544 27.2433 34.3357 36.8129C34.1045 37.5707 33.1911 37.8706 32.5558 37.3991L20.7437 28.6329L20.6005 28.5267L20.5203 28.6859L15.6801 38.2909C15.4395 38.7681 14.9043 39.0124 14.391 38.8903C13.8743 38.7675 13.5097 38.306 13.5097 37.775V23.5385ZM34.8539 6.85774L34.7134 6.59543L5.68687 17.6761L5.32191 17.8154L5.68633 17.9561L14.4184 21.3285L14.4937 21.3576L14.5594 21.3108L34.8539 6.85774ZM15.8656 23.1955L15.8026 23.2404V23.3177V32.3213L16.0866 32.3888C16.8815 30.8114 17.4737 29.6351 17.9159 28.7568C18.4107 27.7741 18.7177 27.1643 18.9109 26.7827C19.0943 26.4203 19.1736 26.2665 19.2131 26.1948C19.2329 26.159 19.2397 26.1493 19.2421 26.1461C19.2435 26.1441 19.2445 26.143 19.2495 26.137C19.2545 26.1309 19.2611 26.1229 19.2696 26.1114L19.2697 26.1114C19.2723 26.1078 19.2727 26.1067 19.273 26.1056C19.2762 26.0962 19.2778 26.0915 20.8214 24.4623C21.6571 23.5803 22.944 22.2229 24.9275 20.1307C27.008 17.9362 29.8549 14.9333 33.7513 10.8228L33.5555 10.5975L15.8656 23.1955ZM32.4459 34.4622L32.6167 34.5889L32.6788 34.3855L41.0812 6.83637L40.8289 6.68941L22.029 26.5222L21.9126 26.645L22.0485 26.7459L32.4459 34.4622Z" fill="#B2B1B1" stroke="#F4F4F4" stroke-width="0.3"/></g></g></svg><b class="caret"></b></div>
        <span class="name"><?= Yii::t('base', 'Сообщения'); ?></span>
        <span class="label label-danger label-notification" id="badge-messages" style="display:none;"></span>
    </a>

    <ul class="dropdown-menu" id="dropdown-messages">
        <li class="dropdown-header">
            <div class="arrow"></div>
            <?= Yii::t('MailModule.base', 'Conversations') ?>
            <?= ($canStartConversation)
                ? NewMessageButton::widget([ 'id' => 'create-message-button'])
                : '' ?>
        </li>
        <ul class="media-list">
            <li id="loader_messages"></li>
        </ul>
        <li>
            <div class="dropdown-footer">
                <a class="btn btn-default col-md-12" href="<?= Url::toMessenger() ?>">
                    <?= Yii::t('MailModule.widgets_views_mailNotification', 'Show all messages') ?>
                </a>
            </div>
        </li>
    </ul>
</div>

