<div class="tab-pane fade" id="teacher-md" role="tabpanel" aria-labelledby="teacher-tab-md">

    <form action="{{url('teacher-register')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-md-12">
                <input  class="form-control" name="name" type="text" placeholder=" اسم المدرس " required>
            </div>


            <div class="col-md-4">
                <select name="phone_code" class="form-control" required style="margin-top: 10px;">
                    <option value="" disabled selected>اختر </option>
                    @foreach( App\Models\PhoneCode::all() as $PhoneCode )
                        <option value="{{ $PhoneCode->phone_code }}" {{ $PhoneCode->phone_code == '0020' ? 'selected' : '' }}> {{ $PhoneCode->phone_code }} </option>
                    @endforeach
                </select>
            </div>


            <div class="col-md-8">
                <input  class="form-control" name="phone" type="number" placeholder="رقم الهاتف" required >
            </div>

{{--            <div class="col-md-12">--}}
{{--                <input  class="form-control" name="parent_phone" type="number" placeholder="رقم ولى الامر" required >--}}
{{--            </div>--}}


            <div class="col-md-12">
                <select style="width:100%;margin: 8px 0px;" name="stage_id" class="form-control  Get-class-and-teachers" data-live-search="true"  aria-required="true" required placeholder="اختر">
                    <option value="" disabled selected>اختر المرحلة </option>
                    @foreach( App\Models\Stage::all() as $stage )
                        <option value="{{ $stage->id }}"> {{ $stage->title }} </option>
                    @endforeach
                </select>

            </div>


{{--            <div class="col-md-12">--}}
{{--                <select style="width:100%;margin: 8px 0px;" name="class_id" class="form-control ajax_classes_data Get-departments class_ajax_id  Get-subjects-by-class-or-department" required data-val-type="class" data-live-search="true"  placeholder="اختر">--}}
{{--                    <option value="" disabled selected>اختر المرحلة اولا </option>--}}
{{--                </select>--}}
{{--            </div>--}}


{{--            <div class="col-md-12">--}}
{{--                <select style="width:100%;margin: 8px 0px;" name="department_id" class="form-control ajax_departments_data add_attr Get-subjects-by-class-or-department" data-val-type="department" placeholder="اختر">--}}
{{--                    <option value="" disabled selected>اختر الصف اولا </option>--}}
{{--                </select>--}}
{{--            </div>--}}


            <div class="col-md-12">
                <input class="form-control" name="school_name" type="text" placeholder="اسم المدرسة" required>
            </div>


            <div class="col-md-12">
                <input class="form-control" name="address" type="text" placeholder="العنوان" required>
            </div>

            <div class="col-md-12">
                <input class="form-control" name="teacher_degree" type="text" placeholder="درجة المدرس" required>
            </div>


            <div class="col-md-12">
                <input class="form-control" name="email" type="email" placeholder="الايميل" required>
            </div>


            <div class="col-md-12">
                <input class="form-control" name="password" type="password" placeholder="كلمة المرور" required>
            </div>

            <br>

            <button  class=" btn BG1" type="submit"> إنشاء </button>
            <br>
            <p class="signUp"> لديك حساب بالفعل ؟ <a href="#" onclick="toggleForm();"> تسجيل الدخول </a></p>



        </div>
    </form>

</div>
