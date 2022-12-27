<?php

namespace App\Admin\Controllers\Admin;

use App\Models\JnPost;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JnPostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'JnPost';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new JnPost());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('company_id', __('JnCompany id'));
        $grid->column('job_title', __('Job title'));
        $grid->column('levels', __('Levels'));
        $grid->column('district', __('District'));
        $grid->column('city', __('City'));
        $grid->column('remotable', __('Remotable'));
        $grid->column('can_parttime', __('Can parttime'));
        $grid->column('min_salary', __('Min salary'));
        $grid->column('max_salary', __('Max salary'));
        $grid->column('currency_salary', __('Currency salary'));
        $grid->column('requirement', __('Requirement'));
        $grid->column('start_date', __('Start date'));
        $grid->column('end_date', __('End date'));
        $grid->column('number_applicants', __('Number applicants'));
        $grid->column('status', __('Status'));
        $grid->column('is_pinned', __('Is pinned'));
        $grid->column('slug', __('Slug'));
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
        $show = new Show(JnPost::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('company_id', __('JnCompany id'));
        $show->field('job_title', __('Job title'));
        $show->field('levels', __('Levels'));
        $show->field('district', __('District'));
        $show->field('city', __('City'));
        $show->field('remotable', __('Remotable'));
        $show->field('can_parttime', __('Can parttime'));
        $show->field('min_salary', __('Min salary'));
        $show->field('max_salary', __('Max salary'));
        $show->field('currency_salary', __('Currency salary'));
        $show->field('requirement', __('Requirement'));
        $show->field('start_date', __('Start date'));
        $show->field('end_date', __('End date'));
        $show->field('number_applicants', __('Number applicants'));
        $show->field('status', __('Status'));
        $show->field('is_pinned', __('Is pinned'));
        $show->field('slug', __('Slug'));
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
        $form = new Form(new JnPost());

        $form->number('user_id', __('User id'));
        $form->number('company_id', __('JnCompany id'));
        $form->text('job_title', __('Job title'));
        $form->text('levels', __('Levels'));
        $form->text('district', __('District'));
        $form->text('city', __('City'));
        $form->number('remotable', __('Remotable'));
        $form->switch('can_parttime', __('Can parttime'));
        $form->decimal('min_salary', __('Min salary'));
        $form->decimal('max_salary', __('Max salary'));
        $form->number('currency_salary', __('Currency salary'))->default(1);
        $form->textarea('requirement', __('Requirement'));
        $form->date('start_date', __('Start date'))->default(date('Y-m-d'));
        $form->date('end_date', __('End date'))->default(date('Y-m-d'));
        $form->number('number_applicants', __('Number applicants'));
        $form->number('status', __('Status'));
        $form->switch('is_pinned', __('Is pinned'));
        $form->text('slug', __('Slug'));

        return $form;
    }
}