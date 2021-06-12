<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\space\widgets;

use humhub\modules\content\components\ContentContainerController;
use humhub\modules\content\helpers\ContentContainerHelper;
use humhub\modules\space\models\Space;
use humhub\modules\space\Module;
use humhub\modules\ui\menu\MenuLink;
use humhub\modules\ui\menu\widgets\LeftNavigation;
use Yii;
use yii\base\Exception;

/**
 * The Main Navigation for a space. It includes the Modules the Stream
 *
 * @author Luke
 * @since 0.5
 */
class Menu extends LeftNavigation
{

    /** @var Space */
    public $space;

    /** @var Space */
    public $id = 'space-main-menu';

    /**
     * @inheritdoc
     */
    public function init()
    {
        if (!$this->space) {
            $this->space = ContentContainerHelper::getCurrent(Space::class);
        }

        if (!$this->space) {
            throw new Exception('Could not instance space menu without space!');
        }

        $this->panelTitle = Yii::t('SpaceModule.base', '<strong>Space</strong> menu');

        parent::init();

        // For private Spaces without membership, show only the About Page in the menu.
        // This is necessary for the invitation process otherwise there is no access in this case anyway.
        if (!$this->space->isMember() && $this->space->visibility == Space::VISIBILITY_NONE) {
            $this->entries = [];
            $this->addAboutPage();
            return;
        }

        $this->addEntry(new MenuLink([
            'label' => Yii::t('custom', '<div class="item"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none"> <path d="M17.3882 4.92229C17.3335 4.83256 17.2435 4.76709 17.1379 4.74029L14.0452 3.95521C14.087 3.84072 14.1179 3.72185 14.1375 3.60001C14.6043 3.46181 14.9936 3.16728 15.2396 2.76356C15.4993 2.33743 15.5683 1.84098 15.4339 1.36566C15.1564 0.384446 14.0879 -0.199893 13.0524 0.06296C12.3866 0.231985 11.8945 0.710855 11.7012 1.29187C11.6232 1.30312 11.5458 1.31769 11.4696 1.33707C10.9177 1.47715 10.4565 1.81246 10.1708 2.28122C10.0503 2.47907 9.96752 2.69079 9.92275 2.90864L4.21311 1.45918C4.10739 1.4323 3.99492 1.44641 3.90025 1.4982C3.80555 1.55 3.73644 1.63531 3.70816 1.73539L0.0140596 14.7971C-0.0142655 14.8972 0.000577363 15.0038 0.0552486 15.0935C0.10992 15.1833 0.199967 15.2487 0.305598 15.2755L2.96404 15.9504V19.6094C2.96404 19.8251 3.14863 20 3.37634 20H16.7571C16.9848 20 17.1694 19.8251 17.1694 19.6094V6.13827L17.4294 5.2187C17.4577 5.11866 17.4429 5.01201 17.3882 4.92229ZM13.2659 0.817613C13.8624 0.66644 14.4776 1.00277 14.6374 1.56785C14.7148 1.8416 14.6751 2.12754 14.5255 2.37294C14.376 2.61837 14.1344 2.79391 13.8455 2.86727C13.5566 2.94056 13.2548 2.90298 12.9958 2.7613C12.7367 2.61958 12.5514 2.39083 12.474 2.11707C12.3142 1.55199 12.6694 0.96906 13.2659 0.817613ZM10.8849 2.67188C11.0515 2.39852 11.3153 2.1993 11.6316 2.10606C11.6425 2.17711 11.6574 2.24829 11.6775 2.31926C11.8119 2.79458 12.1336 3.19185 12.5835 3.4379C12.8008 3.55681 13.0356 3.6329 13.2768 3.66607C13.1446 4.06447 12.8057 4.3849 12.3633 4.49721C11.6633 4.67483 10.9412 4.2799 10.7536 3.61673C10.6628 3.29548 10.7094 2.95993 10.8849 2.67188ZM4.39794 2.31489L9.93186 3.71978C9.9394 3.75291 9.94781 3.78595 9.95713 3.81892C10.0198 4.04056 10.1194 4.24369 10.2476 4.4242L9.81546 4.83358C9.65446 4.98612 9.65446 5.23346 9.81546 5.38604C9.89599 5.46229 10.0015 5.50045 10.107 5.50045C10.2125 5.50045 10.3181 5.46229 10.3985 5.38604L10.8316 4.97576C11.1792 5.19659 11.5932 5.32112 12.0236 5.32112C12.2063 5.32112 12.392 5.29874 12.5767 5.25186C12.9847 5.14827 13.3392 4.93592 13.6089 4.65326L16.5262 5.39381L13.7382 15.2518L11.5515 14.6967C11.3315 14.6408 11.1054 14.7645 11.0465 14.9729L10.4606 17.0446L0.917289 14.622L4.39794 2.31489ZM12.9616 15.8635L11.4081 16.7133L11.7364 15.5524L12.9616 15.8635ZM16.3448 19.2187H3.78864V16.1597L10.6454 17.9004C10.6806 17.9094 10.7164 17.9137 10.7521 17.9137C10.8239 17.9137 10.8951 17.896 10.9583 17.8614L14.2359 16.0686C14.3306 16.0168 14.3997 15.9315 14.428 15.8314L16.3447 9.05395V19.2187H16.3448Z" fill="#045269"/> <path d="M5.10306 7.36875L13.2486 9.43666C13.2844 9.44572 13.3203 9.45009 13.3556 9.45009C13.5376 9.45009 13.7043 9.33498 13.7536 9.16044C13.8126 8.95208 13.682 8.7379 13.4621 8.68204L5.31651 6.61414C5.09647 6.55824 4.87048 6.68195 4.81152 6.89035C4.75256 7.09871 4.8831 7.31293 5.10306 7.36875Z" fill="#045269"/> <path d="M4.67385 8.88487L12.8194 10.9528C12.8552 10.9618 12.8911 10.9662 12.9264 10.9662C13.1084 10.9662 13.275 10.8511 13.3244 10.6766C13.3834 10.4682 13.2528 10.254 13.0329 10.1982L4.8873 8.13025C4.66737 8.07435 4.44123 8.19806 4.38231 8.40647C4.32339 8.61483 4.45392 8.82901 4.67385 8.88487Z" fill="#045269"/> <path d="M6.73926 10.2251L4.45908 9.64624C4.23912 9.59034 4.01302 9.71405 3.9541 9.92245C3.89514 10.1308 4.02568 10.345 4.24564 10.4008L6.52581 10.9797C6.56156 10.9887 6.59747 10.9931 6.6328 10.9931C6.81483 10.9931 6.98144 10.878 7.0308 10.7035C7.08975 10.4951 6.95922 10.2809 6.73926 10.2251Z" fill="#045269"/> <path d="M8.42463 10.6669H8.42434C8.19663 10.6669 8.01221 10.8419 8.01221 11.0576C8.01221 11.2733 8.19691 11.4482 8.42463 11.4482C8.65234 11.4482 8.83692 11.2733 8.83692 11.0576C8.83692 10.8419 8.65234 10.6669 8.42463 10.6669Z" fill="#045269"/> </svg></div> Записи</div>'),
            'url' => $this->space->createUrl('/space/space/home'),
            'icon' => false,
            'sortOrder' => 100,
            'isActive' => MenuLink::isActiveState('space', 'space', ['index', 'home']),
        ]));

        /** @var Module $module */
        $module = Yii::$app->getModule('space');

        if (!$module->hideAboutPage) {
            $this->addAboutPage();
        }
    }

    private function addAboutPage()
    {
        $this->addEntry(new MenuLink([
            'label' => Yii::t('SpaceModule.base', '<div class="item"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none"> <path d="M11.621 6.75291C12.4979 6.75291 13.2112 6.09075 13.2112 5.27692C13.2112 4.46309 12.4978 3.8009 11.621 3.8009C10.7441 3.8009 10.0308 4.46305 10.0308 5.27692C10.0308 6.09075 10.7442 6.75291 11.621 6.75291ZM11.621 4.3868C12.1498 4.3868 12.5799 4.7861 12.5799 5.27688C12.5799 5.76767 12.1497 6.16697 11.621 6.16697C11.0922 6.16697 10.662 5.76767 10.662 5.27688C10.662 4.7861 11.0922 4.3868 11.621 4.3868Z" fill="#045269" stroke="#045269" stroke-width="0.2"/> <path d="M5.62724 17.9539C4.40709 17.1197 3.39687 16.0196 2.70578 14.7725C1.99192 13.4844 1.62043 12.0365 1.6315 10.5854C1.6498 8.17787 2.67375 5.91716 4.51479 4.21966C6.35667 2.52133 8.80096 1.58602 11.3973 1.58594C12.929 1.5859 14.4 1.91305 15.7694 2.55821C15.9249 2.63145 16.1149 2.57387 16.1937 2.42957C16.2726 2.28532 16.2106 2.10895 16.0551 2.03574C14.5964 1.34844 13.0292 0.999961 11.3973 1C8.63312 1.00008 6.03084 1.99586 4.06986 3.80395C2.10989 5.61114 1.01974 8.01802 1.00025 10.5813C0.988512 12.1267 1.38416 13.6687 2.1444 15.0406C2.87984 16.3676 3.95471 17.5382 5.2528 18.4257C5.30915 18.4643 5.37472 18.4829 5.43975 18.4829C5.53663 18.4829 5.63225 18.4416 5.69411 18.3636C5.79756 18.2333 5.76759 18.0499 5.62724 17.9539Z" fill="#045269" stroke="#045269" stroke-width="0.2"/> <path d="M19.4049 16.8072C20.9376 15.0916 21.7866 12.9179 21.7953 10.6864C21.8074 7.58297 20.171 4.63628 17.4178 2.80409C17.2763 2.70987 17.079 2.73994 16.9774 2.87147C16.8758 3.00295 16.9083 3.186 17.05 3.28026C19.6374 5.00218 21.1754 7.77005 21.164 10.6842C21.1558 12.7802 20.3585 14.8219 18.919 16.4331C18.5293 16.8692 18.266 17.3829 18.1577 17.9187C18.0718 18.3436 17.9836 18.9839 18.2085 19.6361C18.2823 19.85 18.2254 20.074 18.0565 20.2353C17.8919 20.3924 17.6591 20.4501 17.4338 20.3896C16.785 20.2153 16.1232 19.9516 15.5198 19.6268C15.0204 19.358 14.4343 19.2853 13.8691 19.4222C13.033 19.6248 12.1666 19.7231 11.2954 19.715C9.73978 19.7002 8.25424 19.3527 6.8801 18.6822C6.7256 18.6068 6.53491 18.662 6.45381 18.8051C6.37267 18.9483 6.43201 19.1255 6.5863 19.2008C8.04995 19.915 9.63212 20.2851 11.2889 20.3009C12.2172 20.3093 13.1383 20.2049 14.0286 19.9892C14.4315 19.8915 14.8486 19.9429 15.2031 20.1337C15.8502 20.482 16.5609 20.7651 17.2582 20.9525C17.377 20.9844 17.4968 21 17.6148 21C17.9471 20.9999 18.2656 20.8762 18.5091 20.6437C18.8384 20.3293 18.9537 19.8748 18.8097 19.4575C18.6698 19.0519 18.6601 18.6106 18.7781 18.0269C18.8668 17.5886 19.0835 17.1669 19.4049 16.8072Z" fill="#045269" stroke="#045269" stroke-width="0.2"/> <path d="M8.35942 15.1296V15.4237C8.35942 15.9835 8.85009 16.4389 9.45318 16.4389H13.7898C14.393 16.4389 14.8836 15.9834 14.8836 15.4237V15.1296C14.8836 14.5698 14.3929 14.1144 13.7898 14.1144H13.2117V8.48738C13.2117 8.15089 13.0311 7.83937 12.7286 7.65397C12.4261 7.46862 12.0465 7.4369 11.7132 7.56917C11.1903 7.77659 10.6374 7.89499 10.0695 7.92116L9.07458 7.96698C8.67354 7.98546 8.35938 8.29191 8.35938 8.6646V9.24222C8.35938 9.62738 8.69694 9.9407 9.11191 9.9407H9.98489C10.0105 9.9407 10.0313 9.96004 10.0313 9.98379V14.1144H9.45318V14.1144C8.85009 14.1144 8.35942 14.5698 8.35942 15.1296ZM10.3469 14.7003C10.5213 14.7003 10.6626 14.5691 10.6626 14.4073V9.98371C10.6626 9.63687 10.3586 9.35472 9.98489 9.35472H9.11191C9.04503 9.35472 8.99066 9.30426 8.99066 9.24218V8.66457C8.99066 8.60449 9.04129 8.55511 9.10589 8.55214L10.1008 8.50632C10.7434 8.47671 11.3694 8.34269 11.9612 8.10792C12.101 8.05245 12.2539 8.06523 12.3808 8.14296C12.5077 8.2207 12.5804 8.3462 12.5804 8.48734V14.4073C12.5804 14.5691 12.7218 14.7003 12.8961 14.7003H13.7898C14.0449 14.7003 14.2524 14.8928 14.2524 15.1296V15.4237C14.2524 15.6604 14.0449 15.853 13.7898 15.853H9.45318C9.19818 15.853 8.99066 15.6604 8.99066 15.4237V15.1296C8.99066 14.8928 9.19818 14.7003 9.45318 14.7003H10.3469Z" fill="#045269" stroke="#045269" stroke-width="0.2"/> </svg></div> О группе</div>'),
            'url' => $this->space->createUrl('/space/space/about'),
            'icon' => false,
            'sortOrder' => 200,
            'isActive' => MenuLink::isActiveState('space', 'space', ['about']),
        ]));

    }


    /**
     * Searches for urls of modules which are activated for the current space
     * and offer an own site over the space menu.
     * The urls are associated with a module label.
     *
     * Returns an array of urls with associated module labes for modules
     */
    public static function getAvailablePages()
    {
        //Initialize the space Menu to check which active modules have an own page
        $entries = (new static())->getEntries(MenuLink::class);
        $result = [];
        foreach ($entries as $entry) {
            /* @var $entry MenuLink */
            $result[$entry->getUrl()] = $entry->getLabel();
        }

        return $result;
    }

    /**
     * Returns space default / homepage
     *
     * @param Space $space
     * @return string|null the url to redirect or null for default home
     */
    public static function getDefaultPageUrl($space)
    {
        $settings = Yii::$app->getModule('space')->settings;

        $indexUrl = $settings->contentContainer($space)->get('indexUrl');
        if ($indexUrl !== null) {
            $pages = static::getAvailablePages();
            if (isset($pages[$indexUrl])) {
                return $indexUrl;
            }

            //Either the module was deactivated or url changed
            $settings->contentContainer($space)->delete('indexUrl');
        }

        return null;
    }

    /**
     * Returns space default / homepage
     *
     * @param $space Space
     * @return string|null the url to redirect or null for default home
     */
    public static function getGuestsDefaultPageUrl($space)
    {
        $settings = Yii::$app->getModule('space')->settings;

        $indexUrl = $settings->contentContainer($space)->get('indexGuestUrl');
        if ($indexUrl !== null) {
            $pages = static::getAvailablePages();
            if (isset($pages[$indexUrl])) {
                return $indexUrl;
            }

            //Either the module was deactivated or url changed
            $settings->contentContainer($space)->delete('indexGuestUrl');
        }

        return null;
    }

}
