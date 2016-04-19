<?php
/**
 * @author: Eugene
 * @date: 19.04.16
 * @time: 13:12
 */

namespace app\digitalmonk\widgets\TranslitWidget;

use yii\widgets\InputWidget;

class TranslitWidget extends InputWidget
{
    public $class = 'translit-input';

    public $name = 'translit-input';

    public $translitTargetClass = 'translit-input';

    private $input = 'input';

    private $params = [];

    public function init()
    {
        parent::init();

        $this->input = $this->hasModel() ? 'activeInput' : $this->input;

        $param_one = $this->hasModel() ? $this->model : $this->name;
        $param_two = $this->hasModel() ? $this->attribute : $this->value;

        $defaultOptions = [
            'id' => $this->id,
            'class' => $this->class,
        ];

        $this->options = array_merge($this->options, $defaultOptions);

        $this->params = [
            'id' => $this->id,
            'input' => $this->input,
            'param_one' => $param_one,  // модель или имя, зависит от наличия модели
            'param_two' => $param_two,  // атрибут или параметр value, зависит от наличия модели
            'translitTargetClass' => $this->translitTargetClass,
            'options' => $this->options
        ];
    }

    public function run()
    {
        return $this->render('index', $this->params);
    }
}