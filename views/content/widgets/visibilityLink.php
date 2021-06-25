<?php

/* @var $this humhub\modules\ui\view\components\View */
/* @var content humhub\modules\content\models\Content */
/* @var $toggleLink string */

?>
<li>
    <?php if($content->isPrivate()) :?>
        <a href="#"  class="makePublicLink" data-action-click="toggleVisibility" data-action-url="<?= $toggleLink ?>">
            <div class="item"><div class="icon"></div> <?= Yii::t('ContentModule.base', 'Change to "Public"') ?></div>
        </a>
    <?php else: ?>
        <a href="#" class="makePriavteLink" data-action-click="toggleVisibility" data-action-url="<?= $toggleLink ?>">
            <div class="item"><div class="icon"></div> <?= Yii::t('ContentModule.base', 'Change to "Private"') ?></div>
        </a>
    <?php endif; ?>
</li>
