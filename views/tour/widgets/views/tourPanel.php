<?php

use humhub\libs\Html;
use yii\helpers\Url;

?>
<div class="panel panel-default panel-tour" id="getting-started-panel">
    <?php
    // Temporary workaround till panel widget rewrite in 0.10 verion
    $removeOptionHtml = "<li>" . \humhub\widgets\ModalConfirm::widget([
                'uniqueID' => 'hide-panel-button',
                'title' => Yii::t('TourModule.base', '<strong>Remove</strong> tour panel'),
                'message' => Yii::t('TourModule.base', 'This action will remove the tour panel from your dashboard. You can reactivate it at<br>Account settings <i class="fa fa-caret-right"></i> Settings.'),
                'buttonTrue' => Yii::t('TourModule.base', 'Ok'),
                'buttonFalse' => Yii::t('TourModule.base', 'Cancel'),
                'linkContent' => '<i class="fa fa-eye-slash"></i> ' . Yii::t('TourModule.base', ' Remove panel'),
                'linkHref' => Url::to(["/tour/tour/hide-panel", "ajax" => 1]),
                'confirmJS' => '$(".panel-tour").slideToggle("slow")'
                    ], true) . "</li>";
    ?>

    <!-- Display panel menu widget -->
    <?php echo \humhub\widgets\PanelMenu::widget(['id' => 'getting-started-panel', 'extraMenus' => $removeOptionHtml]); ?>

    <div class="panel-heading">
        <?php echo Yii::t('TourModule.base', '<strong>Getting</strong> Started'); ?>
    </div>
    <div class="panel-body">
        <p>
            <?php echo Yii::t('TourModule.base', 'Get to know your way around the site\'s most important features with the following guides:'); ?>
        </p>

        <ul class="tour-list">
            <!-- <li>
                <a href="https://docs.google.com/document/d/1piY4k263DEMAEnKBXehgIWN3Ri61U1n-5Zp-8batGIU" data-pjax-prevent>
                    <i class="fa fa-play-circle-o"></i><?= Yii::t('TourModule.base', '<strong>Клуб:</strong> свод правил'); ?>
                </a>
            </li> -->
            <li id="interface_entry" class="<?php if ($interface == 1) : ?>completed<?php endif; ?>">
                <a href="<?php echo Url::to(['/dashboard/dashboard', 'tour' => true]); ?>" data-pjax-prevent>
                    <i class="fa fa-play-circle-o"></i><?= Yii::t('TourModule.base', '<strong>Guide:</strong> Overview'); ?>
                </a>
            </li>
            </li>
            <li class="<?php if ($profile == 1) : ?>completed<?php endif; ?>">
                <a href="<?php echo Yii::$app->user->getIdentity()->createUrl('//user/profile/home', ['tour' => 'true']); ?>" data-pjax-prevent>
                    <i class="fa fa-play-circle-o"></i><?php echo Yii::t('TourModule.base', '<strong>Guide:</strong> User profile'); ?>
                </a>
            </li>
            <?php if (Yii::$app->user->isAdmin() == true) : ?>
                <li class="<?php if ($administration == 1) : ?>completed<?php endif; ?>">
                    <a href="<?php echo Url::to(['/marketplace/browse', 'tour' => 'true']); ?>" data-pjax-prevent>
                        <i class="fa fa-play-circle-o"></i><?php echo Yii::t('TourModule.base', '<strong>Guide:</strong> Administration (Modules)'); ?>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>

<?php if ($showWelcome) : ?>
    <script <?= Html::nonce() ?>>

        $(document).on('humhub:ready', function () {
            humhub.modules.ui.modal.global.load( "<?= Url::to(['/tour/tour/welcome']) ?>");
        });

    </script>
<?php endif; ?>
