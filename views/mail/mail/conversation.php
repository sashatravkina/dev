<?php

use humhub\libs\Html;
use humhub\modules\content\widgets\richtext\RichTextField;
use humhub\modules\mail\models\forms\ReplyForm;
use humhub\modules\mail\widgets\ConversationHeader;
use humhub\modules\mail\widgets\ConversationTags;
use humhub\modules\mail\widgets\MailRichtextEditor;
use humhub\modules\mail\widgets\Messages;
use humhub\modules\ui\view\components\View;
use humhub\modules\ui\form\widgets\ActiveForm;
use humhub\widgets\Button;

/* @var $this View */
/* @var $replyForm ReplyForm */
/* @var $messageCount integer */

?>
<div class="panel panel-default">

    <?php if ($message === null) : ?>

        <div class="panel-body">
            <?= Yii::t('MailModule.views_mail_show', 'There are no messages yet.'); ?>
        </div>

    <?php  else :?>

        <div id="mail-conversation-header" class="panel-heading" style="background-color:<?= $this->theme->variable('background-color-secondary')?>">
             <?= ConversationHeader::widget(['message' => $message]) ?>
        </div>

        <?= ConversationTags::widget(['message' => $message])?>

        <div class="panel-body">

            <div class="media-list conversation-entry-list">
                <?= Messages::widget(['message' => $message])?>
            </div>

        </div>

        <div class="mail-message-form">
            <?php $form = ActiveForm::begin(['enableClientValidation' => false]); ?>

            <?= $form->field($replyForm, 'message')->widget(MailRichtextEditor::class, ['id' => 'reply-'.time()])->label(false) ?>

            <div class="clearfix">
                <?= Button::defaultType(Yii::t('CommentModule.base', '<svg xmlns="http://www.w3.org/2000/svg" width="37" height="32" viewBox="0 0 37 32" fill="none"> <path d="M36.7361 1.31217C36.9137 0.489933 36.1032 -0.203368 35.3125 0.0966826L1.01575 13.1178C0.60298 13.2745 0.329957 13.668 0.329104 14.1074C0.32825 14.5468 0.599707 14.9414 1.01191 15.0997L10.6465 18.8004V30.4566C10.6465 30.9483 10.986 31.3756 11.467 31.4893C11.9448 31.6023 12.4431 31.3762 12.6671 30.9343L16.6518 23.0701L26.3762 30.2475C26.9677 30.6841 27.8179 30.4064 28.0332 29.7048C37.1125 0.0990189 36.72 1.38655 36.7361 1.31217ZM28.27 5.04285L11.5626 16.8764L4.37392 14.1152L28.27 5.04285ZM12.7812 18.6196L27.3444 8.30485C14.813 21.4526 15.4674 20.7606 15.4128 20.8337C15.3316 20.9424 15.554 20.519 12.7812 25.9914V18.6196ZM26.4329 27.6456L17.8732 21.3278L33.3502 5.08956L26.4329 27.6456Z" fill="white"/></svg>'))->cssClass('reply-button')->submit()->action('reply', $replyForm->getUrl())->right()->sm() ?>
            </div>


            <?php ActiveForm::end(); ?>
        </div>
    <?php endif; ?>

    <script <?= Html::nonce() ?>>
        humhub.modules.mail.notification.setMailMessageCount(<?= $messageCount ?>);
    </script>
</div>
