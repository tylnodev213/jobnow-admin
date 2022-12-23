<?php

namespace App\Admin\Controllers;

use App\Models\File;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FileController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'File';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new File());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('post_id', __('Post id'));
        $grid->column('link', __('Link'));
        $grid->column('type', __('Type'));
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
        $show = new Show(File::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('post_id', __('Post id'));
        $show->field('link', __('Link'));
        $show->field('type', __('Type'));
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
        $form = new Form(new File());

        $form->number('user_id', __('User id'));
        $form->number('post_id', __('Post id'));
        $form->url('link', __('Link'));
        $form->number('type', __('Type'));

        return $form;
    }
}
