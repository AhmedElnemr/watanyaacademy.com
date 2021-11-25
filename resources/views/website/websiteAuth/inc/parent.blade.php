<div class="tab-pane fade" id="father-md" role="tabpanel" aria-labelledby="father-tab-md">


    <form action="{{url('parents-register')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-md-12">
                <input  class="form-control" name="name" type="text" placeholder=" اسم ولى الامر " required>
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




            <div class="col-md-12">
                <input class="form-control" name="address" type="text" placeholder="العنوان" required>
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
