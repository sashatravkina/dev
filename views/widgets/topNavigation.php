<?php

use yii\helpers\Url;
use humhub\assets\TopNavigationAsset;
use humhub\libs\Html;

/* @var $this \humhub\modules\ui\view\components\View */
/* @var $menu \humhub\widgets\TopMenu */
/* @var $entries \humhub\modules\ui\menu\MenuEntry[] */

TopNavigationAsset::register($this);

?>

<?php /* foreach ($entries as $entry) : ?>
    <div class="top-menu-item <?php if ($entry->getIsActive()): ?>active<?php endif; ?>">
        <?= Html::a($entry->getIcon() . '<br />' . $entry->getLabel(), $entry->getUrl(), $entry->getHtmlOptions()); ?>
    </div>
<?php endforeach; */ ?>

<div class="top-menu-item">
    <a href="<?= Url::to(['/directory/directory']); ?>" class="item">
        <div class="icon icon-dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none"><g id="Group 4318"><g id="Group"><g id="Group_2"><path id="Vector" d="M18.1451 0H3.71163C1.66464 0 0 1.66491 0 3.7111V18.1459C0 20.1924 1.66491 21.857 3.71163 21.857H18.1451C20.1921 21.857 21.8568 20.1921 21.8568 18.1454V3.71083C21.8568 1.66491 20.1921 0 18.1451 0ZM18.1451 20.0355H3.7111C2.66866 20.0355 1.821 19.1881 1.821 18.1457V3.7111C1.821 2.66866 2.66893 1.82126 3.7111 1.82126H18.1446C19.187 1.82126 20.0347 2.66866 20.0347 3.7111V18.1457H20.035C20.035 19.1881 19.1873 20.0355 18.1451 20.0355Z" fill="#B2B1B1"/></g></g><g id="Group_3"><g id="Group_4"><path id="Vector_2" d="M47.2887 0H32.8552C30.8082 0 29.1436 1.66491 29.1436 3.7111V18.1459C29.1436 20.1924 30.8085 21.857 32.8552 21.857H47.2887C49.3354 21.857 51.0003 20.1921 51.0003 18.1454V3.71083C51.0003 1.66491 49.3354 0 47.2887 0ZM49.1782 18.1457C49.1782 19.1881 48.3303 20.0355 47.2881 20.0355H32.8547C31.8122 20.0355 30.9646 19.1881 30.9646 18.1457V3.7111C30.9646 2.66866 31.8125 1.82126 32.8547 1.82126H47.2881C48.3306 1.82126 49.1782 2.66866 49.1782 3.7111V18.1457Z" fill="#B2B1B1"/></g></g><g id="Group_5"><g id="Group_6"><path id="Vector_3" d="M18.1451 29.1431H3.71163C1.66518 29.1431 0 30.808 0 32.8542V47.289C0 49.3355 1.66491 51.0001 3.71163 51.0001H18.1451C20.1921 51.0001 21.8568 49.3352 21.8568 47.2885V32.8539C21.8568 30.8077 20.1921 29.1431 18.1451 29.1431ZM18.1451 49.1786H3.7111C2.66866 49.1786 1.821 48.3312 1.821 47.2887V32.8542C1.821 31.8117 2.66893 30.9643 3.7111 30.9643H18.1446C19.187 30.9643 20.0347 31.8117 20.0347 32.8542V47.2887H20.035C20.035 48.3312 19.1873 49.1786 18.1451 49.1786Z" fill="#B2B1B1"/></g></g><g id="Group_7"><g id="Group_8"><path id="Vector_4" d="M47.2887 29.1431H32.8552C30.8082 29.1431 29.1436 30.808 29.1436 32.8542V47.289C29.1436 49.3355 30.8085 51.0001 32.8552 51.0001H47.2887C49.3354 51.0001 51.0003 49.3352 51.0003 47.2885V32.8539C51.0003 30.8077 49.3354 29.1431 47.2887 29.1431ZM49.1782 47.2887C49.1782 48.3312 48.3303 49.1786 47.2881 49.1786H32.8547C31.8122 49.1786 30.9646 48.3312 30.9646 47.2887V32.8542C30.9646 31.8117 31.8125 30.9643 32.8547 30.9643H47.2881C48.3306 30.9643 49.1782 31.8117 49.1782 32.8542V47.2887Z" fill="#B2B1B1"/></g></g></g></svg></div>
        <span class="name"><?= Yii::t('base', 'Разделы'); ?></span>
    </a>
</div>

<div id="top-menu-sub" class="dropdown" style="display:none;">
    <a href="#" id="top-dropdown-menu" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-align-justify"></i><br>
        <?= Yii::t('base', 'Menu'); ?>
        <b class="caret"></b>
    </a>
    <ul id="top-menu-sub-dropdown" class="dropdown-menu">

    </ul>
</div>