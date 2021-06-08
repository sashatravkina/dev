<?php
/* @var $this \yii\web\View */
/* @var $keyword string */
/* @var $group humhub\modules\user\models\Group */
/* @var $users humhub\modules\user\models\User[] */

/* @var $pagination yii\data\Pagination */

use humhub\libs\Html;
use humhub\modules\directory\widgets\MemberActionsButton;
use humhub\modules\directory\widgets\UserGroupList;
use humhub\modules\directory\widgets\UserTagList;
use humhub\modules\user\widgets\Image;

?>
<div class="panel panel-default section-members">

    <div class="panel-heading">
        <?php if ($group === null) : ?>
            <?= Yii::t('DirectoryModule.base', '<strong>Member</strong> directory'); ?>
        <?php else: ?>
            <?= Yii::t('DirectoryModule.base', '<strong>Group</strong> members - {group}', ['{group}' => Html::encode($group->name)]); ?>
        <?php endif; ?>
    </div>

    <div class="panel-body">
        <?= Html::beginForm('', 'get', ['class' => 'form-search']); ?>
            <div class="form-group form-group-search">
                <?= Html::hiddenInput('page', '1'); ?>
                <?= Html::textInput("keyword", $keyword, ['class' => 'form-control form-search', 'placeholder' => Yii::t('DirectoryModule.base', 'Поиск')]); ?>
                <?= Html::submitButton(Yii::t('DirectoryModule.base', '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none"> <path d="M11.2205 0C5.39751 0 0.660156 4.73736 0.660156 10.5604C0.660156 16.3834 5.39751 21.1207 11.2205 21.1207C17.0435 21.1207 21.7809 16.3834 21.7809 10.5604C21.7809 4.73736 17.0435 0 11.2205 0ZM11.2205 19.2734C6.41602 19.2734 2.50747 15.3649 2.50747 10.5604C2.50747 5.75586 6.41602 1.84732 11.2205 1.84732C16.0247 1.84732 19.9336 5.75586 19.9336 10.5604C19.9336 15.3649 16.025 19.2734 11.2205 19.2734Z" fill="white"/> <path d="M25.3901 23.4234L18.6782 16.7115C18.3174 16.3507 17.733 16.3507 17.3722 16.7115C17.0114 17.0721 17.0114 17.6571 17.3722 18.0176L24.0841 24.7294C24.2645 24.9098 24.5006 25 24.7371 25C24.9736 25 25.2097 24.9098 25.3901 24.7294C25.7509 24.3689 25.7509 23.7839 25.3901 23.4234Z" fill="white"/> </svg>'), ['class' => 'btn btn-default btn-sm form-button-search']); ?>
            </div>
        <?= Html::endForm(); ?>

        <?php if (count($users) == 0): ?>
            <p><?= Yii::t('DirectoryModule.base', 'No members found!'); ?></p>
        <?php endif; ?>
    </div>

    <ul class="media-list">
        <?php foreach ($users as $user) : ?>
            <li>
                <div class="media">
                    <?= Image::widget([
                        'user' => $user,
                        'width' => 48,
                        'htmlOptions' => ['class' => 'media-avatar'],
                        'linkOptions' => ['data-contentcontainer-id' => $user->contentcontainer_id]
                    ]); ?>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <?= Html::containerLink($user); ?>
                            <?= UserGroupList::widget(['user' => $user]); ?>
                        </h4>
                    </div>
                    <div class="media-actions memberActions">
                        <?= MemberActionsButton::widget(['user' => $user]); ?>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

</div>

<div class="pagination-container">
    <?= \humhub\widgets\LinkPager::widget(['pagination' => $pagination]); ?>
</div>
