<?php

namespace App\Planet\Form\Fields;

use App\Planet\Form\Item;

class ID extends Item
{
    public  $display;

    function __construct() {
        $this->componentName = 'id';
        $this->display = 'none';
    }

    static function make($labelName,$name)
    {
        $self = new self();

        $self->labelName = $labelName;
        $self->name = $name;

        $self->placeholder = '请输入'.$labelName;

        // 删除空属性
        $self->unsetNullProperty();
        return $self;
    }

    public function display($display)
    {
        $this->display = $display;
        return $this;
    }
}
