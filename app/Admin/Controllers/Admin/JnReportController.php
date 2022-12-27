<?php

namespace App\Admin\Controllers\Admin;

use App\Models\JnReport;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JnReportController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'JnReport';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new JnReport());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('reported_id', __('Reported id'));
        $grid->column('type', __('Type'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(JnReport::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('reported_id', __('Reported id'));
        $show->field('type', __('Type'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new JnReport());

        $form->number('user_id', __('User id'));
        $form->number('reported_id', __('Reported id'));
        $form->number('type', __('Type'));
        $form->number('status', __('Status'));

        return $form;
    }
}
