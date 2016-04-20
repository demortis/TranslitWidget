<?php
/**
 * @author: Eugene
 * @date: 19.04.16
 * @time: 13:15
 */
digitalmonk\widgets\TranslitWidget\assets\TranslitWidgetAssets::register($this);
?>

<?=\yii\helpers\Html::$input('text', $param_one, $param_two, $options)?>


<?php
    $this->registerJs('
        $(".'.$options['class'].'").translit({
            "targetClass" : "'.$translitTargetClass.'"
        });
    ');