<?php

use humhub\modules\comment\widgets\Form;
use humhub\modules\comment\widgets\Comment;
use yii\helpers\Url;
use humhub\libs\Html;

/* @var $this \humhub\modules\ui\view\components\View */
/* @var $object \humhub\modules\content\components\ContentActiveRecord */
/* @var $comments \humhub\modules\comment\models\Comment[] */
/* @var $objectModel string */
/* @var $objectId int */
/* @var $id string unqiue object id */
/* @var $isLimited boolean */
/* @var $total int */

?>
<div class="well well-small comment-container" style="display:none;" id="comment_<?= $id; ?>">
    <div class="comment <?php if (Yii::$app->user->isGuest): ?>guest-mode<?php endif; ?>"
         id="comments_area_<?= $id; ?>">

        <?php if ($isLimited): ?>
            <a href="#" class="show show-all-link" data-ui-loader data-action-click="comment.showAll" data-action-url="<?= Url::to(['/comment/comment/show', 'objectModel' => $objectModel, 'objectId' => $objectId]) ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none"><path d="M8.70711 0.292893C8.31658 -0.0976315 7.68342 -0.0976315 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 12L9 1L7 1L7 12L9 12Z" fill="#045269"/></svg><span><?= Yii::t('CommentModule.base', 'Show all {total} comments', ['{total}' => $total]) ?></span>
            </a>
        <?php endif; ?>

        <?php foreach ($comments as $comment) : ?>
            <?= Comment::widget(['comment' => $comment]); ?>
        <?php endforeach; ?>
    </div>

    <?= Form::widget(['object' => $object]); ?>
</div>

<script <?= Html::nonce() ?>>
    <?php if (count($comments) != 0): ?>
    // make comments visible at this point to fixing autoresizing issue for textareas in Firefox
    $('#comment_<?= $id; ?>').show();
    <?php endif;  ?>
</script>
