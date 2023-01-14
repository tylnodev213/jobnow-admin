<?php

namespace App\Admin\Grid\Displayers\Actions;

use Encore\Admin\Admin;
use Encore\Admin\Grid\Displayers\Actions;

class CustomActions extends Actions
{
    protected function renderView()
    {
        $text = __('admin.view');
        return <<<EOT
<a href="{$this->getResource()}/{$this->getRouteKey()}" class="btn btn-xs btn-default" style="margin-right: 10px">
    <i class="fa fa-eye"></i> {$text}
</a>
EOT;
    }

    protected function renderEdit()
    {
        $text = __('admin.edit');
        return <<<EOT
<a href="{$this->getResource()}/{$this->getRouteKey()}/edit" class="btn btn-xs btn-info" style="margin-right: 10px;">
    <i class="fa fa-edit"></i> {$text}
</a>
EOT;
    }

    protected function renderDelete()
    {
        parent::renderDelete();
        $text = __('admin.delete');
        return <<<EOT
<a href="javascript:void(0);" data-id="{$this->getKey()}" class="grid-row-delete btn btn-xs btn-danger">
    <i class="fa fa-trash"></i> {$text}g
</a>
EOT;
    }
}
