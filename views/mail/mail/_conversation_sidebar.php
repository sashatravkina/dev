<?php

use humhub\modules\mail\models\forms\InboxFilterForm;
use humhub\modules\mail\permissions\StartConversation;
use humhub\modules\mail\widgets\ConversationInbox;
use humhub\modules\mail\widgets\NewMessageButton;
use humhub\modules\mail\widgets\InboxFilter;
use humhub\modules\ui\icon\widgets\Icon;
use humhub\widgets\Button;
use yii\widgets\LinkPager;

$canStartConversation = Yii::$app->user->can(StartConversation::class);

$filterModel = new InboxFilterForm();

?>

<div id="mail-conversation-overview" class="panel panel-default">
    <div class="panel-heading">
        <div class="conversation-overview-heading">
            <a data-action-click="mail.inbox.toggleInbox">
                <strong><?= Yii::t('MailModule.views_mail_index', 'Диалоги') ?></strong>
            </a>
            <?php if($canStartConversation) : ?>
                <?= NewMessageButton::widget(['label' => Yii::t('MailModule.base', '<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none"> <rect x="1.26074" y="10.2542" width="20.5155" height="1.9987" rx="0.999352" transform="rotate(0.020514 1.26074 10.2542)" fill="white"/> <rect width="20.5155" height="1.9987" rx="0.999352" transform="matrix(0.000358037 1 1 -0.000358037 10.2539 1.26068)" fill="white"/> </svg>'), 'icon' => false])?>
            <?php endif; ?>
        </div>
        <div class="inbox-wrapper">
            <?= InboxFilter::widget(['model' => $filterModel]) ?>
        </div>
    </div>

    <div class="inbox-wrapper">
        <?= ConversationInbox::widget(['filter' => $filterModel]) ?>
    </div>
</div>
