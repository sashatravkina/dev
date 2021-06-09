<?php

use humhub\modules\mail\helpers\Url;
use humhub\modules\user\widgets\Image;
use humhub\widgets\ModalButton;
use humhub\modules\content\widgets\richtext\RichText;
use humhub\modules\mail\widgets\TimeAgo;
use humhub\libs\Html;

/* @var $this \humhub\modules\ui\view\components\View */
/* @var $entry \humhub\modules\mail\models\MessageEntry */
/* @var $options array */
/* @var $contentClass string */
/* @var $showUserInfo boolean */
/* @var $isOwnMessage boolean */

$isOwnMessage = $entry->user->is(Yii::$app->user->getIdentity());

?>

<?= Html::beginTag('div', $options) ?>

<div class="media">

    <?php if(!$isOwnMessage) : ?>

    <?php endif; ?>

    <?php if(!$isOwnMessage) : ?>

    <?php endif; ?>

    <div class="<?= $contentClass ?> <?php if(!$isOwnMessage) : ?>conversation-entry-reply<?php endif; ?>" style="<?= $isOwnMessage ? 'float:right' : ''?>">
        <?= RichText::output($entry->content) ?>
    </div>
</div>

<div>
    <?= $this->render('_conversationEntryMenu', ['entry' => $entry, 'badge' => false]) ?>
</div>

<?= Html::endTag('div') ?>


