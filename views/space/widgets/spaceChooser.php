<?php

use humhub\modules\ui\icon\widgets\Icon;
use humhub\modules\ui\view\components\View;
use humhub\modules\directory\permissions\AccessDirectory;
use humhub\modules\space\assets\SpaceChooserAsset;
use humhub\modules\space\models\Membership;
use humhub\modules\space\models\Space;
use humhub\modules\space\widgets\SpaceChooserItem;
use humhub\modules\space\widgets\Image;
use yii\helpers\Url;


/* @var $this View */
/* @var $currentSpace Space */
/* @var $memberships Membership[] */
/* @var $followSpaces Space[] */
/* @var $canCreateSpace boolean */

SpaceChooserAsset::register($this);

    $noSpaceView = '';

    $this->registerJsConfig('space.chooser', [
        'noSpace' => $noSpaceView,
        'remoteSearchUrl' =>  Url::to(['/space/browse/search-json']),
        'text' => [
            'info.remoteAtLeastInput' => Yii::t('SpaceModule.chooser', 'To search for other spaces, type at least {count} characters.', ['count' => 2]),
            'info.emptyOwnResult' => Yii::t('SpaceModule.chooser', 'No member or following spaces found.'),
            'info.emptyResult' => Yii::t('SpaceModule.chooser', 'No result found for the given filter.'),
        ],
    ]);

    /* @var $directoryModule \humhub\modules\directory\Module */
    $directoryModule = Yii::$app->getModule('directory');
    $canAccessDirectory = $directoryModule->active && Yii::$app->user->can(AccessDirectory::class);

?>
<div id="space-menu-dropdown"></div>
<div class="item mobile-close">
    <a id="space-menu-custom" href="<?= Url::to(['/directory/directory/spaces']); ?>">
        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="63" height="40" viewBox="0 0 63 40" fill="none"> <path d="M54.4843 17.6005C56.3291 16.3041 57.5506 14.1477 57.5506 11.717C57.5506 7.74073 54.3347 4.52477 50.3584 4.52477C46.382 4.52477 43.1661 7.74073 43.1661 11.717C43.1661 14.1477 44.3752 16.3041 46.2325 17.6005C44.6494 18.149 43.2035 18.9966 41.9819 20.0935C40.2992 18.66 38.3172 17.5631 36.1483 16.9149C38.7784 15.3194 40.5485 12.4151 40.5485 9.11187C40.5485 4.07604 36.4724 0 31.4366 0C26.4007 0 22.3247 4.0885 22.3247 9.11187C22.3247 12.4151 24.0823 15.3194 26.7248 16.9149C24.5809 17.5631 22.6239 18.6476 20.9536 20.0561C19.732 18.9841 18.311 18.149 16.7529 17.613C18.5977 16.3166 19.8193 14.1602 19.8193 11.7295C19.8193 7.7532 16.6033 4.53724 12.627 4.53724C8.65067 4.53724 5.43471 7.7532 5.43471 11.7295C5.43471 14.1602 6.64381 16.3166 8.50109 17.613C3.55251 19.3207 0 24.0199 0 29.5419V30.3646C0 30.3895 0.0249299 30.4145 0.0498598 30.4145H15.2945C15.2072 31.1 15.1574 31.8105 15.1574 32.521V33.3687C15.1574 37.0333 18.124 40 21.7887 40H41.1094C44.7741 40 47.7407 37.0333 47.7407 33.3687V32.521C47.7407 31.8105 47.6909 31.1 47.6036 30.4145H62.948C62.9729 30.4145 62.9978 30.3895 62.9978 30.3646V29.5419C62.9729 24.0075 59.4328 19.3082 54.4843 17.6005ZM45.1605 11.7046C45.1605 8.83764 47.4914 6.5067 50.3584 6.5067C53.2253 6.5067 55.5562 8.83764 55.5562 11.7046C55.5562 14.5341 53.2752 16.8401 50.4581 16.9025C50.4207 16.9025 50.3958 16.9025 50.3584 16.9025C50.321 16.9025 50.296 16.9025 50.2586 16.9025C47.4291 16.8526 45.1605 14.5466 45.1605 11.7046ZM24.2942 9.11187C24.2942 5.18542 27.4852 1.99439 31.4117 1.99439C35.3381 1.99439 38.5291 5.18542 38.5291 9.11187C38.5291 12.9012 35.55 16.005 31.823 16.2169C31.6859 16.2169 31.5488 16.2169 31.4117 16.2169C31.2745 16.2169 31.1374 16.2169 31.0003 16.2169C27.2733 16.005 24.2942 12.9012 24.2942 9.11187ZM7.39171 11.7046C7.39171 8.83764 9.72265 6.5067 12.5896 6.5067C15.4565 6.5067 17.7875 8.83764 17.7875 11.7046C17.7875 14.5341 15.5064 16.8401 12.6893 16.9025C12.6519 16.9025 12.627 16.9025 12.5896 16.9025C12.5522 16.9025 12.5273 16.9025 12.4899 16.9025C9.67279 16.8526 7.39171 14.5466 7.39171 11.7046ZM15.6435 28.4076H2.01932C2.58024 23.0975 7.06762 18.9342 12.5148 18.8969C12.5397 18.8969 12.5647 18.8969 12.5896 18.8969C12.6145 18.8969 12.6395 18.8969 12.6644 18.8969C15.2571 18.9093 17.6254 19.8691 19.4578 21.4272C17.6628 23.3718 16.3291 25.765 15.6435 28.4076ZM45.7214 33.3687C45.7214 35.924 43.6398 38.0056 41.0844 38.0056H21.7638C19.2085 38.0056 17.1268 35.924 17.1268 33.3687V32.521C17.1268 24.7803 23.3094 18.4481 31.0003 18.2237C31.1374 18.2362 31.287 18.2362 31.4241 18.2362C31.5612 18.2362 31.7108 18.2362 31.8479 18.2237C39.5388 18.4481 45.7214 24.7803 45.7214 32.521V33.3687ZM47.2047 28.4076C46.5192 25.7775 45.2103 23.4216 43.4279 21.4771C45.2727 19.8816 47.6659 18.9218 50.2836 18.8969C50.3085 18.8969 50.3334 18.8969 50.3584 18.8969C50.3833 18.8969 50.4082 18.8969 50.4332 18.8969C55.8803 18.9342 60.3677 23.0975 60.9286 28.4076H47.2047Z" fill="#045269"/> </svg><b class="caret"></b></div>
        <span class="name"><?= Yii::t('SpaceModule.chooser', 'Группы'); ?></span>   
    </a>
</div>
