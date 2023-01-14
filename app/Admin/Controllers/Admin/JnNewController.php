<?php

namespace App\Admin\Controllers\Admin;

use App\Models\Administrator;
use App\Models\JnNew;
use App\Models\JnUser;
use App\Models\NpTenantUser;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;

class JnNewController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Thông báo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new JnNew());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Subject'));
        $grid->column('description', __('Content'));
        $grid->column('to_user_type', __('To'))->display(function () {
            if ($this->from_user_type == 1) {
                return 'All HR';
            }

            if ($this->from_user_type == 2) {
                return 'All Candidate';
            }

            return '';

        });
        $grid->column('status', __('Status'));
        $grid->column('public_from', __('Public from'));
        $grid->column('public_to', __('Public to'));

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

        $form->footer(function ($footer) {
            $footer->disableReset();
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();

        });

        $form->footer(function ($footer) {
            $footer->disableReset();
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();

        });
        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
            $tools->disableView();
        });

        $form->text('title', __('Title'));
        $form->textarea('description', __('Description'));
        $form->radio('to_user_type', __('To'))->options([
            2 => 'HR',
            3 => 'Candidate',
            6 => 'All',
        ])->when(3,function ($form) {
            $form->multipleSelect('to_user_candidate', __('Candidates'))->options(JnUser::where('role', 2)->pluck('email', 'id'));
        })->when(2,function ($form) {
            $form->multipleSelect('to_user_hr', __('HRs'))->options(JnUser::where('role', 3)->pluck('email', 'id'));
        });

        $form->radio('status', __('Status'))->options([
            1 => 'Public',
            2 => 'Private',
        ]);
        $form->datetime('public_from', __('Public from'))->default(date('Y-m-d H:i:s'));
        $form->datetime('public_to', __('Public to'))->default(date('Y-m-d H:i:s'));

        $form->saving(function (Form $form) {
            $form->input('from_user_type', 3);
            $form->input('from_user_id', Admin::user()->id);
        });

        return $form;
    }
}
