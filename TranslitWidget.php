<?php
/**
 * @author: Eugene
 * @date: 19.04.16
 * @time: 13:12
 */

namespace digitalmonk\widgets\TranslitWidget;

use yii\widgets\InputWidget;

class TranslitWidget extends InputWidget
{
    /**
     * @var string
     */
    public $class = 'form-control';

    /**
     * @var string
     */
    public $name = 'translit-input';

    /**
     * @var string
     */
    public $translitTargetClass = 'translit-input';

    /**
     * @var string
     */
    private $input = 'input';

    /**
     * @var array
     */
    private $params = [];

    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();

        $this->input = $this->hasModel() ? 'activeInput' : $this->input;

        $param_one = $this->hasModel() ? $this->model : $this->name;
        $param_two = $this->hasModel() ? $this->attribute : $this->value;

        $defaultOptions = [
            'class' => $this->class,
        ];
        $this->options = array_merge($this->options, $defaultOptions);

        $this->params = [
            'input' => $this->input,
            'param_one' => $param_one,  // модель или имя, зависит от наличия модели
            'param_two' => $param_two,  // атрибут или параметр value, зависит от наличия модели
            'translitTargetClass' => $this->translitTargetClass,
            'options' => $this->options
        ];
    }

    /**
     * @return string
     */
    public function run()
    {
        return $this->render('index', $this->params);
    }
}