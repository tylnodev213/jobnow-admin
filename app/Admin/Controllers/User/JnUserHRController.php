<?php

namespace App\Admin\Controllers\User;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JnUserHRController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->model()
            ->where('role', 2)
            ->where('status', 1);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('avatar', __('Avatar'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('gender', __('Gender'));
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('avatar', __('Avatar'));
        $show->field('email', __('Email'));
        $show->field('password', __('Password'));
        $show->field('phone', __('Phone'));
        $show->field('link', __('Link'));
        $show->field('role', __('Role'));
        $show->field('bio', __('Bio'));
        $show->field('position', __('Position'));
        $show->field('gender', __('Gender'));
        $show->field('city', __('City'));
        $show->field('company_id', __('Company id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));
        $show->field('remember_token', __('Remember token'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->image('avatar', __('Avatar'));
        $form->email('email', __('Email'));
        $form->password('password', __('Password'));
        $form->mobile('phone', __('Phone'));
        $form->url('link', __('Link'));
        $form->number('role', __('Role'));
        $form->textarea('bio', __('Bio'));
        $form->text('position', __('Position'));
        $form->switch('gender', __('Gender'));
        $form->text('city', __('City'));
        $form->number('company_id', __('Company id'));
        $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
