<?php
use yii\helpers\Html;
use humhub\widgets\Link;
use humhub\modules\ui\icon\widgets\Icon;

/* @var $id string */

?>

<ul data-ui-widget="ui.panel.PanelMenu" data-ui-init class="nav nav-pills preferences">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-label="<?= Yii::t('base', 'Toggle panel menu'); ?>" aria-haspopup="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none"> <path d="M1 1L7.5 8L14 1" stroke="#045269" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <ul class="dropdown-menu pull-right">
            <li>
                <?= Link::instance()->action('toggle')->cssClass('panel-collapse')?>
            </li>
            <?= $this->context->extraMenus; ?>
        </ul>
    </li>
</ul>
