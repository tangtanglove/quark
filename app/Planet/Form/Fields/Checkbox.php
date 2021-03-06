<?php

namespace App\Planet\Form\Fields;

use App\Planet\Form\Item;

class Checkbox extends Item
{
    public  $list;

    function __construct() {
        $this->componentName = 'checkbox';
    }

    static function make($labelName,$name)
    {
        $self = new self();

        $self->labelName = $labelName;
        $self->name = $name;

        // 删除空属性
        $self->unsetNullProperty();
        return $self;
    }

    public function options($options)
    {
        $this->options = $options;
        return $this;
    }
}
