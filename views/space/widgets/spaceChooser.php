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

<div class="item">
    <a id="space-menu-custom" href="#" class="dropdown-toggle" data-toggle="dropdown">
        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none"><path d="M18.7814 30.188C18.5787 30.188 18.376 30.1104 18.2209 29.9568L8.04478 19.7808C7.74711 19.4831 7.73444 19.0065 8.01311 18.693L15.64 10.1493C20.9711 3.91259 29.6525 -0.123327 37.2224 0.00492276C37.6452 0.0144228 37.9856 0.354839 37.9951 0.777589C38.1709 8.35226 34.089 17.0289 27.8364 22.3711L19.307 29.9869C19.1582 30.1215 18.9682 30.188 18.7814 30.188ZM9.69303 19.1902L18.8114 28.3086L26.7962 21.1804C32.5057 16.3006 36.2978 8.52326 36.4149 1.58667C29.4784 1.70226 21.7026 5.49434 16.8323 11.1912L9.69303 19.1902Z" fill="#B2B1B1"/><path d="M21.8108 35.9819C21.7348 35.9819 21.6572 35.9708 21.5844 35.9471C21.2994 35.8521 21.0651 35.6336 21.0239 35.3359L19.9377 27.7565C19.876 27.3242 20.1768 26.9236 20.6091 26.8603C21.0413 26.7922 21.4419 27.0978 21.5052 27.5316L22.3539 33.4533C25.1279 30.1362 26.67 25.9309 26.67 21.6432C26.67 21.2062 27.0247 20.8516 27.4617 20.8516C27.8987 20.8516 28.2534 21.2062 28.2534 21.6432C28.2534 26.8888 26.1285 32.0236 22.4236 35.727C22.2652 35.8853 22.0341 35.9819 21.8108 35.9819V35.9819Z" fill="#B2B1B1"/><path d="M10.3591 18.0697C10.3227 18.0697 10.2847 18.0681 10.2467 18.0618L2.66727 16.9756C2.3696 16.9328 2.12102 16.7254 2.0276 16.4388C1.93419 16.1538 2.01019 15.8388 2.22394 15.6282C5.98119 11.8709 11.1144 9.74609 16.3599 9.74609C16.7969 9.74609 17.1516 10.1008 17.1516 10.5378C17.1516 10.9748 16.7969 11.3294 16.3599 11.3294C12.0517 11.3294 7.82419 12.8858 4.54194 15.644L10.4715 16.4943C10.9038 16.5576 11.2046 16.9566 11.1429 17.3904C11.0843 17.7847 10.7454 18.0697 10.3591 18.0697V18.0697Z" fill="#B2B1B1"/><path d="M27.1278 14.8299C26.1129 14.8299 25.0996 14.4436 24.3285 13.6725C22.7863 12.1287 22.7863 9.61758 24.3285 8.07383C25.8722 6.53008 28.3834 6.53008 29.9272 8.07383C31.4693 9.61758 31.4693 12.1287 29.9272 13.6725C29.1545 14.4452 28.1412 14.8299 27.1278 14.8299ZM27.1278 8.49975C26.5198 8.49975 25.9102 8.73091 25.4479 9.19325C24.5232 10.1195 24.5232 11.6268 25.4479 12.5531C26.3742 13.4777 27.8815 13.4762 28.8077 12.5531C29.7324 11.6268 29.7324 10.1195 28.8077 9.19325C28.3438 8.7325 27.7358 8.49975 27.1278 8.49975ZM29.3667 13.1136H29.3825H29.3667Z" fill="#B2B1B1"/><path d="M0.792008 37.9996C0.584591 37.9996 0.383508 37.9189 0.231508 37.7685C0.0256745 37.5626 -0.0503255 37.2602 0.0335912 36.9816C0.293258 36.1155 2.61917 28.4616 4.31334 26.7675C6.22126 24.8596 9.32617 24.858 11.2341 26.7675C13.142 28.6754 13.142 31.7803 11.2341 33.6882C9.53992 35.3824 1.88609 37.7083 1.02001 37.968C0.944008 37.9886 0.868008 37.9996 0.792008 37.9996V37.9996ZM7.77451 26.9179C6.92584 26.9179 6.07876 27.2409 5.43276 27.8853C4.51917 28.8005 2.99917 32.8871 1.99534 36.0046C5.11134 35.0008 9.19951 33.4808 10.1131 32.5672C11.4035 31.2768 11.4035 29.1757 10.1131 27.8853C9.46867 27.2409 8.62159 26.9179 7.77451 26.9179Z" fill="#B2B1B1"/></svg><b class="caret"></b></div>
        <span class="name"><?= Yii::t('SpaceModule.chooser', 'Группы'); ?></span>   
    </a>

    <ul class="dropdown-menu" id="space-menu-dropdown">
        <li>
            <form action="" class="dropdown-controls">
                <div <?php if($canAccessDirectory) : ?>class="input-group"<?php endif; ?>>
                    <input type="text" id="space-menu-search" class="form-control" autocomplete="off"
                           placeholder="<?= Yii::t('SpaceModule.chooser', 'Search') ?>"
                           title="<?= Yii::t('SpaceModule.chooser', 'Search for spaces') ?>">
                    <?php if($canAccessDirectory) : ?>
                        <span id="space-directory-link" class="input-group-addon" >
                            <a href="<?= Url::to(['/directory/directory/spaces']) ?>">
                                <?= Icon::get('directory')?>
                            </a>
                        </span>
                    <?php endif; ?>
                    <div class="search-reset" id="space-search-reset"><?= Icon::get('times-circle') ?></div>
                </div>
            </form>
        </li>

        <li class="divider"></li>
        <li>
            <ul class="media-list notLoaded" id="space-menu-spaces">
                <?php foreach ($memberships as $membership) : ?>
                    <?= SpaceChooserItem::widget([
                        'space' => $membership->space,
                        'updateCount' => $membership->countNewItems(),
                        'isMember' => true
                    ]);
                    ?>
                <?php endforeach; ?>
                <?php foreach ($followSpaces as $followSpace) : ?>
                    <?= SpaceChooserItem::widget([
                        'space' => $followSpace,
                        'isFollowing' => true
                    ]);
                    ?>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="remoteSearch">
            <ul id="space-menu-remote-search" class="media-list notLoaded"></ul>
        </li>

        <?php if ($canCreateSpace) : ?>
        <li>
            <div class="dropdown-footer">
                <a href="#" class="btn btn-info col-md-12" data-action-click="ui.modal.load" data-action-url="<?= Url::to(['/space/create/create']) ?>">
                    <?= Yii::t('SpaceModule.chooser', 'Create new space') ?>
                </a>
            </div>
        </li>
        <?php endif; ?>
    </ul>
</div>
