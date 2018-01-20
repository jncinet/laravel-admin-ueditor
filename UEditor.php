<?php

namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class UEditor extends Field
{
    public static $js = [
        '/vendor/ueditor1_4_3_3-utf8/ueditor.config.js',
        '/vendor/ueditor1_4_3_3-utf8/ueditor.all.min.js',
        '/vendor/ueditor1_4_3_3-utf8/lang/zh-cn/zh-cn.js',
    ];

    protected $view = 'admin.ueditor';

    public function render()
    {
        $this->script = <<<EOT
        UE.delEditor('$this->id');
        var ue_$this->id = UE.getEditor('$this->id');
        ue_$this->id.ready(function () {
            ue_$this->id.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });
EOT;
        return parent::render();
    }
}
