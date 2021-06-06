<?php
/* @var $this \yii\web\View */
/* @var $keyword string */
/* @var $spaces humhub\modules\space\models\Space[] */

/* @var $pagination yii\data\Pagination */

use humhub\libs\Helpers;
use humhub\libs\Html;
use humhub\modules\directory\widgets\SpaceTagList;
use humhub\modules\space\widgets\FollowButton;
use humhub\modules\space\widgets\MembershipButton;
use humhub\modules\space\widgets\Image;
use humhub\widgets\LinkPager;
use yii\helpers\Url;

?>
<div class="panel panel-default section-spaces">

    <div class="panel-heading">
        <?= Yii::t('DirectoryModule.base', '<strong>Список</strong> групп'); ?>
    </div>

    <div class="panel-body">
        <?= Html::beginForm(Url::to(['/directory/directory/spaces']), 'get', ['class' => 'form-search']); ?>
            <div class="form-group form-group-search">
                <?= Html::textInput('keyword', $keyword, ['class' => 'form-control form-search', 'placeholder' => Yii::t('DirectoryModule.base', 'Поиск')]); ?>
                <?= Html::submitButton(Yii::t('DirectoryModule.base', '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23" fill="none"><path d="M22.7615 19.2878L17.387 13.7355C17.0016 13.3371 16.5199 13.1777 16.3112 13.3813C16.1018 13.5835 15.6198 13.4244 15.2344 13.0261L15.1575 12.9464C17.563 9.78271 17.3295 5.25302 14.4409 2.36445C11.2884 -0.788149 6.1768 -0.788149 3.0246 2.36445C-0.127993 5.51704 -0.127993 10.6279 3.0246 13.7805C5.96238 16.7186 10.5991 16.9154 13.7693 14.3778L13.803 14.413C14.1877 14.8113 14.331 15.298 14.1209 15.5006C13.9118 15.7032 14.0541 16.1902 14.4399 16.5878L19.8115 22.1423C20.1969 22.5396 20.8319 22.5514 21.2307 22.1656L22.7382 20.707C23.1354 20.3222 23.1462 19.6876 22.7615 19.2878ZM12.667 12.0063C10.4975 14.1762 6.96708 14.1762 4.79792 12.0071C2.62844 9.83758 2.62877 6.30679 4.79792 4.1377C6.96708 1.96822 10.4975 1.96855 12.6662 4.13803C14.8361 6.30719 14.8361 9.83725 12.667 12.0063Z" fill="white"/></svg>'), ['class' => 'btn btn-default btn-sm form-button-search']); ?>
            </div>
        <?= Html::endForm(); ?>

        <?php if (count($spaces) == 0): ?>
            <p><?= Yii::t('DirectoryModule.base', 'No spaces found!'); ?></p>
        <?php endif; ?>
    </div>

    <ul class="media-list">
        <?php foreach ($spaces as $space) : ?>
            <li>
                <div class="media">
                    <?= Image::widget([
                        'space' => $space,
                        'width' => 48,
                        'htmlOptions' => [
                            'class' => 'media-object',
                            'data-contentcontainer-id' => $space->contentcontainer_id
                        ],
                        'linkOptions' => ['class' => 'media-avatar'],
                        'link' => true,
                    ]); ?>

                    <div class="media-body">
                        <h4 class="media-heading">
                            <?= Html::containerLink($space); ?>
                        </h4>
                    </div>

                    <div class="media-actions">
                        <?= MembershipButton::widget(['space' => $space]); ?>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<div class="pagination-container">
    <?= LinkPager::widget(['pagination' => $pagination]); ?>
</div>
