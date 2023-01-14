<?php

namespace App\Admin\Controllers\Admin;

use App\Models\JnCompany;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JnCompanyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Company';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new JnCompany());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('country', __('Country'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));

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
        $show = new Show(JnCompany::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('address', __('Address'));
        $show->field('country', __('Country'));
        $show->field('zipcode', __('Zipcode'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('logo', __('Logo'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new JnCompany());

        $form->footer(function ($footer) {
            $footer->disableReset();
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();

        });

        $form->text('name', __('Name'));
        $form->text('address', __('Address'));
        $form->text('country', __('Country'));
        $form->text('zipcode', __('Zipcode'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));
        $form->file('logo', __('Logo'));

        return $form;
    }
}
