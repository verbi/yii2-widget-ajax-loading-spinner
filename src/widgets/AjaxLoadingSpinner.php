<?php
namespace verbi\yii2AjaxLoadingSpinner\widgets;
/*
 * @author Philip Verbist <philip.verbist@gmail.com>
 * @link https://github.com/verbi/Yii2-Helpers/
 * @license https://opensource.org/licenses/GPL-3.0
*/
class AjaxLoadingSpinner extends \verbi\yii2BaseWidget\widgets\Widget {
    public $cssClass = 'loader loader-default is-active';
    
    public $text = null;
    
    public $js = 'var $loading = $(\'#{widget_id}\').hide();'
        . '$(document)'
            . '.ajaxStart(function () {'
                . '$loading.show();'
            . '})'
            . '.ajaxStop(function () {'
                . '$loading.hide();'
            . '});';
    public function run() {
        echo Html::div('',[
            'id' => $this->id,
            'class' => $this->cssClass,
            'data-text' => $this->text,
            ]);
        $js = str_replace('{widget_id}', $this->id, $this->js);
        $this->view->registerJs($js);
    }
}