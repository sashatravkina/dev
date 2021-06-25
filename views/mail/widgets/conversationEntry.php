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
$userModel = Yii::$app->user->identity;
?>

<?= Html::beginTag('div', $options) ?>

<div class="media">
    <?php if(!$isOwnMessage) : ?>
        <div class="author-image pull-left hidden-xs">
            <?= Image::widget(['user' => $entry->user, 'width' => 40]) ?>
        </div>
    <?php endif; ?>

    <?php if($isOwnMessage) : ?>
        <div class="author-image pull-right hidden-xs">
            <?= Image::widget(['user' => $userModel, 'link'  => false, 'width' => 40, 'htmlOptions' => ['id' => 'user-account-image',]])?>
        </div>
    <?php endif; ?>

    <div class="media-content">
        <div class="<?= $contentClass ?> <?php if(!$isOwnMessage) : ?>conversation-entry-reply<?php endif; ?>" style="<?= $isOwnMessage ? 'float:right' : ''?>">
            <?= RichText::output($entry->content) ?>
        </div>

        <?= $this->render('_conversationEntryMenu', ['entry' => $entry, 'badge' => false]) ?>
    </div>
</div>

<?= Html::endTag('div') ?>


