<?php

use yii\helpers\Url;

/* @var $this \humhub\modules\ui\view\components\View */
?>

<script <?= \humhub\libs\Html::nonce() ?>>
    $(document).one('humhub:ready', function () {
        humhub.require('tour').start(
            {
                name: 'interface',
                steps: [
                    {
                        orphan: true,
                        backdrop: true,
                        title: <?= json_encode(Yii::t('TourModule.interface', '<strong>Dashboard</strong>')); ?>,
                        content: <?= json_encode(Yii::t('TourModule.interface', "This is your dashboard.<br><br>Any new activities or posts that might interest you will be displayed here.")); ?>
                    },
                    {
                        element: "#icon-notifications",
                        title: <?= json_encode(Yii::t('TourModule.base', '<strong>Notifications</strong>')); ?>,
                        content: <?= json_encode(Yii::t('TourModule.base', 'Don\'t lose track of things!<br /><br />This icon will keep you informed of activities and posts that concern you directly.')); ?>,
                        placement: "bottom"
                    },
                    {
                        element: ".dropdown.account",
                        title: <?= json_encode(Yii::t('TourModule.base', '<strong>Account</strong> Menu')); ?>,
                        content: <?= json_encode(Yii::t('TourModule.base', 'The account menu gives you access to your private settings and allows you to manage your public profile.')); ?>,
                        placement: "bottom"
                    }
                ]
            }
        );
    });
</script>
