<?php

namespace App\Admin\Controllers\Admin;

use App\Models\JnNew;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JnNewController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'JnNew';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new JnNew());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('from_user_type', __('From user type'));
        $grid->column('from_user_id', __('From user id'));
        $grid->column('to_user_type', __('To user type'));
        $grid->column('status', __('Status'));
        $grid->column('public_from', __('Public from'));
        $grid->column('public_to', __('Public to'));
        $grid->column('type', __('Type'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(JnNew::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('from_user_type', __('From user type'));
        $show->field('from_user_id', __('From user id'));
        $show->field('to_user_type', __('To user type'));
        $show->field('status', __('Status'));
        $show->field('public_from', __('Public from'));
        $show->field('public_to', __('Public to'));
        $show->field('type', __('Type'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new JnNew());

        $form->text('title', __('Title'));
        $form->textarea('description', __('Description'));
        $form->number('from_user_type', __('From user type'));
        $form->number('from_user_id', __('From user id'));
        $form->number('to_user_type', __('To user type'));
        $form->number('status', __('Status'));
        $form->datetime('public_from', __('Public from'))->default(date('Y-m-d H:i:s'));
        $form->datetime('public_to', __('Public to'))->default(date('Y-m-d H:i:s'));
        $form->number('type', __('Type'));

        return $form;
    }
}
