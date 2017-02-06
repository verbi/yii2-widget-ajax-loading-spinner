<?php
namespace verbi\yii2AjaxLoadingSpinner\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the ajax js files.
 * 
 * @author Philip Verbist <philip.verbist@gmail.com>
 * @link https://github.com/verbi/Yii2-Helpers/
 * @license https://opensource.org/licenses/GPL-3.0
 */
class AjaxLoadingSpinnerAsset extends AssetBundle
{
    public $depends = [
        'verbi\yii2Helpers\widgets\assets\Oauth2Asset',
    ];
    public $sourcePath = '@vendor/verbi/yii2-helpers/src/widgets/assets/ajaxAssets';
    public $js = [
        'js/ajax.js',
    ];
}
