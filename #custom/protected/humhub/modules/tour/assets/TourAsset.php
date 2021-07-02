<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\tour\assets;

use Yii;
use yii\helpers\Url;
use yii\web\AssetBundle;
use humhub\modules\ui\view\components\View;

/**
 * Stream related assets.
 *
 * @since 1.2
 * @author buddha
 */
class TourAsset extends AssetBundle
{

    /**
     * @inheritdoc
     */
    public $sourcePath = '@tour/resources';

    /**
     * @inheritdoc
     */
    public $publishOptions = ['forceCopy' => false];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/bootstrap-tourist.min.js',
        'js/humhub.tour.js'
    ];

    public $css = [
        'css/bootstrap-tourist.min.css'
    ];

    /**
     * @param View $view
     * @return AssetBundle
     */
    public static function register($view)
    {
        $view->registerJsConfig('tour', [
            'dashboardUrl' => Url::to(['/dashboard/dashboard']),
            'completedUrl' => Url::to(['/tour/tour/tour-completed']),
            'template' => '
                <div class="popover tour" role="tooltip">
                    <button aria-hidden="true" data-role="end" class="close" type="button"></button>

                    <h3 class="popover-title"></h3>
                    <div class="popover-content"></div>
                    <div class="popover-navigation">
                        <div class="btn-group">
                            <button class="btn btn-sm btn-default btn-prev" data-role="prev">'.Yii::t('custom', 'Назад').'</button>
                            <button class="btn btn-sm btn-default btn-next" data-role="next">'.Yii::t('custom', 'Вперед').'</button>
                        </div>
                    </div>
                </div>'
        ]);
        return parent::register($view);
    }
}

