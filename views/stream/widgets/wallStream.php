<?php

use humhub\modules\stream\assets\StreamAsset;
use humhub\widgets\Button;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \humhub\modules\ui\view\components\View */
/* @var $filterNav string */
/* @var $contentContainer \humhub\modules\content\components\ContentContainerActiveRecord */

StreamAsset::register($this);

?>

<?php if ($contentContainer && $contentContainer->isArchived()) : ?>
    <span class="label label-warning pull-right" style="margin-top:10px;">
        <?= Yii::t('ContentModule.base', 'Archived'); ?>
    </span>
<?php endif; ?>

<!-- Stream filter section -->
<?= $filterNav ?>

<!-- Stream content -->
<?= Html::beginTag('div', $options) ?>

<!-- DIV for a normal wall stream -->
<div class="s2_stream">
    <div class="back_button_holder" style="display:none">
        <?= Button::primary(Yii::t('ContentModule.base', 'Back to stream'))->action('init')->loader(false)->sm(); ?>
    </div>
    <div class="s2_streamContent" data-stream-content></div>
    <div class="go-top" style="display: none;"><a href="#top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none"><path d="M8.74332 0.295076C8.354 -0.0966548 7.72084 -0.0986134 7.32911 0.290702L0.945495 6.63495C0.553764 7.02426 0.551805 7.65742 0.94112 8.04915C1.33043 8.44088 1.9636 8.44284 2.35533 8.05353L8.02965 2.4142L13.669 8.08852C14.0583 8.48025 14.6915 8.48221 15.0832 8.0929C15.4749 7.70358 15.4769 7.07042 15.0876 6.67869L8.74332 0.295076ZM9 12.003L9.03402 1.00309L7.03403 0.996899L7 11.9968L9 12.003Z" fill="white"/></svg> Наверх</a></div>
</div>

<?= Html::endTag('div') ?>

<!-- show "Load More" button on mobile devices -->
<div class="col-md-12 text-center visible-xs visible-sm">
    <?= Button::primary(Yii::t('ContentModule.base', 'Load more'))
        ->id('btn-load-more')
        ->action('loadMore', null, '#wallStream')
        ->lg() ?>
    <br/><br/>
</div>
