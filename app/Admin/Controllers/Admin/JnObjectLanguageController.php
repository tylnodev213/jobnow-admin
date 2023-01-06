<?php

namespace App\Admin\Controllers\Admin;

use App\Models\JnObjectLanguage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JnObjectLanguageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'JnObjectLanguage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new JnObjectLanguage());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('address', __('Address'));
        $grid->column('country', __('Country'));
        $grid->column('zipcode', __('Zipcode'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('logo', __('Logo'));
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
        $show = new Show(JnObjectLanguage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('address', __('Address'));
        $show->field('country', __('Country'));
        $show->field('zipcode', __('Zipcode'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('logo', __('Logo'));
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
        $form = new Form(new JnObjectLanguage());

        $form->text('name', __('Name'));
        $form->text('address', __('Address'));
        $form->text('country', __('Country'));
        $form->text('zipcode', __('Zipcode'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));
        $form->text('logo', __('Logo'));

        return $form;
    }
}
