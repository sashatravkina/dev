<?php
    use yii\helpers\Url;

?>
<li>
    <?php
    $offLinkId = 'notification_off_' . $content->id;
    $onLinkId = 'notification_on_' . $content->id;

    echo \humhub\widgets\AjaxButton::widget([
        'tag' => 'a',
        'label' => '<div class="item"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"><path d="M24.6313 17.8663C21.6909 14.925 21.2484 13.4492 21.2484 8.75C21.2484 3.91748 17.3318 0 12.5001 0C7.66841 0 3.75176 3.91753 3.75176 8.75C3.75176 11.2837 3.68427 12.2296 3.3355 13.3908C2.90176 14.8375 2.01133 16.2225 0.368406 17.8663C-0.418654 18.6538 0.138865 20 1.2522 20H8.18843L8.12549 20.625C8.12549 23.0413 10.0838 25 12.4997 25C14.9155 25 16.8738 23.0413 16.8738 20.625L16.8109 20H23.7476C24.8613 20 25.4188 18.6538 24.6313 17.8663ZM12.5005 23.75C10.775 23.75 9.37593 22.3504 9.37593 20.625L9.43886 20H15.5614L15.6251 20.625C15.6251 22.3504 14.2259 23.75 12.5005 23.75ZM1.25259 18.75C5.00176 15 5.00176 12.5 5.00176 8.75C5.00176 4.60835 8.35884 1.25 12.5001 1.25C16.6414 1.25 19.9984 4.60835 19.9988 8.75C19.9988 12.5 19.9988 15 23.748 18.75H1.25259Z" fill="#045269"/></svg></div>' . Yii::t('ContentModule.base', 'Turn off notifications') . '</div>',
        'ajaxOptions' => [
            'type' => 'POST',
            'success' => "function(res){ if (res.success) { $('#" . $offLinkId . "').hide(); $('#" . $onLinkId . "').show(); } }",
            'url' => Url::to(['/content/content/notification-switch', 'id' => $content->id, 'switch' => 0]),
        ],
        'htmlOptions' => [
            'class' => 'turnOffNotifications',
            'style' => 'display: ' . ($state ? 'block' : 'none'),
            'href' => '#',
            'id' => $offLinkId
        ]
    ]);

    echo \humhub\widgets\AjaxButton::widget([
        'tag' => 'a',
        'label' => '<div class="item"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"><path d="M24.6313 17.8663C21.6909 14.925 21.2484 13.4492 21.2484 8.75C21.2484 3.91748 17.3318 0 12.5001 0C7.66841 0 3.75176 3.91753 3.75176 8.75C3.75176 11.2837 3.68427 12.2296 3.3355 13.3908C2.90176 14.8375 2.01133 16.2225 0.368406 17.8663C-0.418654 18.6538 0.138865 20 1.2522 20H8.18843L8.12549 20.625C8.12549 23.0413 10.0838 25 12.4997 25C14.9155 25 16.8738 23.0413 16.8738 20.625L16.8109 20H23.7476C24.8613 20 25.4188 18.6538 24.6313 17.8663ZM12.5005 23.75C10.775 23.75 9.37593 22.3504 9.37593 20.625L9.43886 20H15.5614L15.6251 20.625C15.6251 22.3504 14.2259 23.75 12.5005 23.75ZM1.25259 18.75C5.00176 15 5.00176 12.5 5.00176 8.75C5.00176 4.60835 8.35884 1.25 12.5001 1.25C16.6414 1.25 19.9984 4.60835 19.9988 8.75C19.9988 12.5 19.9988 15 23.748 18.75H1.25259Z" fill="#045269"/></svg></div> ' . Yii::t('ContentModule.base', 'Turn on notifications') . '</div>',
        'ajaxOptions' => [
            'type' => 'POST',
            'success' => "function(res){ if (res.success) { $('#" . $onLinkId . "').hide(); $('#" . $offLinkId . "').show(); } }",
            'url' => Url::to(['/content/content/notification-switch', 'id' => $content->id, 'switch' => 1]),
        ],
        'htmlOptions' => [
            'class' => 'turnOnNotifications',
            'style' => 'display: ' . ($state ? 'none' : 'block'),
            'href' => '#',
            'id' => $onLinkId
        ]
    ]);
    ?>
</li>
