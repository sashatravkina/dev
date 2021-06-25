<?php
 /* @var $this \yii\web\View */
 /* @var $isPinned boolean */
 /* @var $unpinUrl string */
 /* @var $pinUrl string */
?>
<li>
    <?php if ($isPinned): ?>
        <a href="#" data-action-click="unpin" data-action-url="<?= $unpinUrl ?>">
            <div class="item"><div class="icon"></div> <?php echo Yii::t('ContentModule.base', 'Unpin'); ?></div>
        </a>
       <?php else: ?>
        <a href="#" data-action-click="pin" data-action-url="<?= $pinUrl ?>">
            <div class="item"><div class="icon"></div> <?php echo Yii::t('ContentModule.base', 'Pin to top'); ?></div>
        </a>
    <?php endif; ?>
</li>
