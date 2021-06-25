<?php

use humhub\libs\Html;
use humhub\modules\content\widgets\LegacyWallEntryControlLink;
use humhub\modules\ui\icon\widgets\Icon;

/* @var $this \humhub\modules\ui\view\components\View */
/* @var $menu \humhub\modules\ui\menu\widgets\DropdownMenu */
/* @var $entries \humhub\modules\ui\menu\MenuEntry[] */
/* @var $options [] */
?>

<?= Html::beginTag('ul', $options)?>
    <li class="dropdown ">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-label="<?= Yii::t('base', 'Toggle stream entry menu'); ?>" aria-haspopup="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none"> <path d="M1 1L7.5 8L14 1" stroke="#045269" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>

        <ul class="dropdown-menu pull-right">
            <?php foreach ($entries as $entry) : ?>
                <?php if($entry instanceof LegacyWallEntryControlLink) : ?>
                    <?= $entry->render() ?>
                <?php else: ?>
                    <li>
                        <?= $entry->render() ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </li>
<?= Html::endTag('ul')?>
