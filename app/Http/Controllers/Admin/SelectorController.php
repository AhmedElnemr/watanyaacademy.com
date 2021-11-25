<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Stage;
use App\Models\Class_;
use App\Models\Department;
use App\User;

class SelectorController extends Controller {


// =====================================================
    public function get_classes_teachers($stage_id) {



        if ($stage_id == '') {
            $html   = '<option value=""> اختر المرحلة اولا </option>';
        } else {

            $status_class   = 0;
            $status_teacher = 0;

            $html = [];

            $teachers = '';
            $classes  = '';

            $teachers_ = User::where([ ['stage_id' , '=', $stage_id],['user_type' , '=', 'teacher'] ])->get();
            $classess_ = Class_::where(['stage_id' => $stage_id])->get();



            if ($teachers_->count() > 0)
            {
                $status_teacher = 1;
            }
            foreach ($teachers_ as $teacher) {
                $teachers .= '<option value="'.$teacher->id.'">'.$teacher->name .'</option>';
            }


            if ($classess_->count() > 0)
            {
                $status_class = 1;
            }
            foreach ($classess_ as $class) {
                $classes .= '<option value="'.$class->id.'">'.$class->title.'</option>';
            }


            $html   = [ 'teachers' => $teachers , 'classes' => $classes];
            $status = [ 'status_teacher' => $status_teacher , 'status_class' => $status_class];

        }



        return response()->json( ['html' => $html, 'status'=> $status] );
    }
// =====================================================



// =====================================================
    public function Get_departments($class_id) {



        if ($class_id == '') {
            $html   = '<option value=""> اختر الصف اولا </option>';
        } else {

            $status_departments   = 0;

            $html = [];

            $departments = '';

            $departments_ = Department::where(['class_id' => $class_id])->get();

            if ($departments_->count() > 0)
            {
                $status_departments = 1;
            }

            foreach ($departments_ as $department) {
                $departments .= '<option value="'.$department->id.'">'.$department->title .'</option>';
            }


            $html   = [ 'departments' => $departments];
            $status = [ 'status_departments' => $status_departments];

        }



        return response()->json( ['html' => $html, 'status'=> $status] );
    }
// =====================================================


// =====================================================
    public function Get_subjects_by_class_or_department() {

        $stage_id       = request()->get('stage_id');
        $class_id       = request()->get('class_id');
        $department_id  = request()->get('department_id');

//        return response()->json( ['html' => [$stage_id, $class_id, $department_id] ] );

        if ($stage_id && $class_id) {


            $status_subjects   = 0;

            $html = [];

            $subjects = '';

            $get_arr = [ ['stage_id' , '=', $stage_id], ['class_id' , '=', $class_id], ['department_id' , '=', null] ];

            if( $department_id )
            {
                $get_arr = [ ['stage_id' , '=', $stage_id], ['class_id' , '=', $class_id], ['department_id' , '=', $department_id] ];
            }

            $subjects_ = Subject::where( $get_arr )->get();

            if ($subjects_->count() > 0)
            {
                $status_subjects = 1;
            }

            foreach ($subjects_ as $subject) {
                $subjects .= '<option value="'.$subject->id.'">'.$subject->title .'</option>';
            }


            $html   = [ 'subjects' => $subjects];
            $status = [ 'status_subjects' => $status_subjects];

        } else {

            $html   = '<option value=""> اختر الصف او القسم اولا </option>';

        }



        return response()->json( ['html' => $html, 'status'=> $status] );
    }
// =====================================================


}
