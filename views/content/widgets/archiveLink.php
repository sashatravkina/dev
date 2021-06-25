<?php
/* @var $this humhub\modules\ui\view\components\View */

use yii\helpers\Url;

$archiveLink = Url::to(['/content/content/archive', 'id' => $id]);
$unarchiveLink = Url::to(['/content/content/unarchive', 'id' => $id]);

?>
<li>
    <?php if ($object->content->isArchived()): ?>
        <a href="#" data-action-click="unarchive" data-action-url="<?= $unarchiveLink ?>">
            <div class="item"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" viewBox="0 0 20 30" fill="none"><path d="M19.1461 0H0.853888C0.382314 0 0 0.382314 0 0.853888V28.2922C0 28.6375 0.208064 28.9489 0.527134 29.081C0.632788 29.1248 0.743737 29.1461 0.853718 29.1461C1.07596 29.1461 1.29432 29.0594 1.4577 28.8959L10.0002 20.3536L18.5423 28.8959C18.7865 29.1401 19.1538 29.2132 19.4729 29.081C19.7919 28.9489 20 28.6375 20 28.2922V0.853888C20 0.382314 19.6177 0 19.1461 0ZM10.0001 18.2921C9.77366 18.2921 9.55649 18.3821 9.39636 18.5422L1.70778 26.2307V1.70778H18.2922V26.2306L10.6039 18.5422C10.4438 18.3821 10.2266 18.2921 10.0001 18.2921Z" fill="#045269"/></svg></div> <?= Yii::t('ContentModule.base', 'Unarchive'); ?></div>
        </a>
    <?php else: ?>
        <a href="#" data-action-click="archive" data-action-url="<?= $archiveLink ?>">
            <div class="item"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" viewBox="0 0 20 30" fill="none"><path d="M19.1461 0H0.853888C0.382314 0 0 0.382314 0 0.853888V28.2922C0 28.6375 0.208064 28.9489 0.527134 29.081C0.632788 29.1248 0.743737 29.1461 0.853718 29.1461C1.07596 29.1461 1.29432 29.0594 1.4577 28.8959L10.0002 20.3536L18.5423 28.8959C18.7865 29.1401 19.1538 29.2132 19.4729 29.081C19.7919 28.9489 20 28.6375 20 28.2922V0.853888C20 0.382314 19.6177 0 19.1461 0ZM10.0001 18.2921C9.77366 18.2921 9.55649 18.3821 9.39636 18.5422L1.70778 26.2307V1.70778H18.2922V26.2306L10.6039 18.5422C10.4438 18.3821 10.2266 18.2921 10.0001 18.2921Z" fill="#045269"/></svg></div> <?= Yii::t('ContentModule.base', 'Move to archive'); ?></div>
        </a>
    <?php endif; ?>
</li>
