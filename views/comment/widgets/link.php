<?php

    use humhub\modules\comment\widgets\CommentLink;
    use humhub\widgets\Button;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use \humhub\modules\comment\models\Comment;

    /* @var $this \humhub\modules\ui\view\components\View */
    /* @var $objectModel string */
    /* @var $objectId integer */
    /* @var $id string unique object id */
    /* @var $commentCount integer */
    /* @var $mode string */
    /* @var $isNestedComment boolean */
    /* @var $comment \humhub\modules\comment\models\Comment */
    /* @var $module \humhub\modules\comment\Module */

    $hasComments = ($commentCount > 0);
    $commentCountSpan = Html::tag('span', '' . $commentCount . '', [
        'class' => 'comment-count',
        'data-count' => $commentCount,
        'style' => ($hasComments) ? null : 'display:none'
    ]);

    $label = ($isNestedComment) ? Yii::t('CommentModule.base', "Ответить") : Yii::t('CommentModule.base', "Comment");

?>
<span class="control-item">
    <?php if ($mode == CommentLink::MODE_POPUP): ?>
        <?php $url = Url::to(['/comment/comment/show', 'objectModel' => $objectModel, 'objectId' => $objectId, 'mode' => 'popup']); ?>
        <a href="#" data-action-click="ui.modal.load" data-action-url="<?= $url ?>">
            <?= '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none"><path d="M10.9006 0C4.88077 0 0 4.2703 0 9.53804C0 12.5487 1.59762 15.2288 4.08773 16.977V21.8012L8.86288 18.9037C9.52376 19.0128 10.2037 19.0761 10.9006 19.0761C16.9212 19.0761 21.8012 14.8058 21.8012 9.53804C21.8012 4.2703 16.9212 0 10.9006 0ZM10.9006 17.7135C10.1049 17.7135 9.33638 17.6209 8.59785 17.4635L5.39032 19.3915L5.43325 16.2317C2.97452 14.7526 1.36258 12.3082 1.36258 9.53804C1.36258 5.02316 5.63288 1.36258 10.9006 1.36258C16.1684 1.36258 20.4387 5.02316 20.4387 9.53804C20.4387 14.0529 16.1684 17.7135 10.9006 17.7135Z" fill="#B2B1B1"/></svg>' . '' . $commentCount . '' ?>
        </a>
    <?php elseif (Yii::$app->user->isGuest): ?>
        <?= Html::a('<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none"><path d="M10.9006 0C4.88077 0 0 4.2703 0 9.53804C0 12.5487 1.59762 15.2288 4.08773 16.977V21.8012L8.86288 18.9037C9.52376 19.0128 10.2037 19.0761 10.9006 19.0761C16.9212 19.0761 21.8012 14.8058 21.8012 9.53804C21.8012 4.2703 16.9212 0 10.9006 0ZM10.9006 17.7135C10.1049 17.7135 9.33638 17.6209 8.59785 17.4635L5.39032 19.3915L5.43325 16.2317C2.97452 14.7526 1.36258 12.3082 1.36258 9.53804C1.36258 5.02316 5.63288 1.36258 10.9006 1.36258C16.1684 1.36258 20.4387 5.02316 20.4387 9.53804C20.4387 14.0529 16.1684 17.7135 10.9006 17.7135Z" fill="#B2B1B1"/></svg>' . $commentCountSpan, Yii::$app->user->loginUrl, ['data-target' => '#globalModal']) ?>
    <?php else : ?>
        <?= Button::asLink('<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none"><path d="M10.9006 0C4.88077 0 0 4.2703 0 9.53804C0 12.5487 1.59762 15.2288 4.08773 16.977V21.8012L8.86288 18.9037C9.52376 19.0128 10.2037 19.0761 10.9006 19.0761C16.9212 19.0761 21.8012 14.8058 21.8012 9.53804C21.8012 4.2703 16.9212 0 10.9006 0ZM10.9006 17.7135C10.1049 17.7135 9.33638 17.6209 8.59785 17.4635L5.39032 19.3915L5.43325 16.2317C2.97452 14.7526 1.36258 12.3082 1.36258 9.53804C1.36258 5.02316 5.63288 1.36258 10.9006 1.36258C16.1684 1.36258 20.4387 5.02316 20.4387 9.53804C20.4387 14.0529 16.1684 17.7135 10.9006 17.7135Z" fill="#B2B1B1"/></svg>' . $commentCountSpan) ->action('comment.toggleComment', null, '#comment_' . $id) ?>
    <?php endif; ?>
</span>