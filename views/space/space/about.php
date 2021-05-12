<?php

use humhub\modules\space\models\Space;
use humhub\modules\space\widgets\AboutPageSidebar;
use humhub\modules\content\widgets\richtext\RichText;
use humhub\modules\user\widgets\Image;

/**
 * @var Space $space
 * @var array $userGroups
 */
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <?= Yii::t('SpaceModule.base', '<strong>About</strong> the Space') ?>
    </div>
    <div class="panel-body">
        <?php if ($space->about || $space->description): ?>
            <div>
                <div data-ui-markdown data-ui-show-more data-collapse-at="600">
                    <?= RichText::output(empty($space->about) ? $space->description : $space->about) ?>
                </div>
            </div>
            <br>
        <?php endif; ?>
    </div>
</div>

<?php $this->beginBlock('sidebar');
echo AboutPageSidebar::widget(['space' => $space]);
$this->endBlock(); ?>
