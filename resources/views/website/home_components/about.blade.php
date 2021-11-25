<hr>
<section id="about">
    <div class="container com-sp pad-bot-70">
        <div class="section-content">
            <div class="row">


                <div class="col-md-8">


                    <div class="meet-doctors">
                        <h2 style="color: {{site_text("main_about")->color_title ? site_text("main_about")->color_title:"black"}}">أهلا بكم فى الاكاديمية </h2>
                        <h6 class=" line-bottom title ">الاكاديمية الوطنية للعلوم الشاملة</h6>
                         <p style="  font-weight: bold; color: {{site_text("main_about")->color_contents ? site_text("main_about")->color_contents:"#636363"}}">
                             {{ site_text("main_about")->contents ? site_text("main_about")->contents : 'الاكاديمية الوطنية للعلوم الشاملة تقدم العديد من الكورسات والبرامج التى تفيد المستخدم كما تقدم العديد من الانشطة والاحداث التى تفيدك ويقوم بتقديم الكورسات نخبة رائعة من الاساتذة والمحاضرين الرائعين فى كل مجال وعلى اعلى مستوى من العلم ومن الثقافة كما تقدم العديد من الندوات والبرامج والمناقشات والرسائل وتنقل لكم جميع المؤتمرات المهمة يمكنكمالان التسجيل داخل الاكاديمية' }}</p>
                    </div>


                    <div class="row mb-sm-30">
                        @foreach( \App\Models\Level::withCount("courses")->get() as $level)
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="icon-box p-0 mb-20">
                                <a class="icon icon-sm pull-right " href="{{ url('courses-by-level').'/'.$level->id }}">
                                   {{-- <img src="{{asset("website")}}/images/icon/awa/9.png" alt=""/>--}}
                                    <img src="{{ GetImg( $level->image) }}" width="100%" alt=""/>
                                </a>
                                <div class="icon-text">
                                    <h5 class="icon-box-title">{{ $level->title }} </h5>
                                    <p class="text-gray">  {{$level->courses_count}}  -  مواد دراسية  </p>
                               </div>

                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>


                <div class="col-md-4">
                    <div class="bg-theme-colored home-form">
                        <h3 class="title-pattern mt-0">
                            <span class="text-white">التسجيل <span class="text-theme-color-2">بالاكاديمية</span></span></h3>
                        <!-- Appilication Form Start-->


                        <form id="reservation_form" name="reservation_form" class="reservation-form" enctype='multipart/form-data' action="{{ url('register') }}" method="post">

                            @csrf

                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <input name="student_name"  placeholder="ادخل اسمك" type="text" id="reservation_name"  required="required" class="form-control" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <input name="email"  placeholder="البريد الالكترونى" type="email" id="reservation_name"  required="required" class="form-control" aria-required="true">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <input name="age"  placeholder="السن" type="text" id="reservation_email" name="reservation_email" class="form-control" required="required" aria-required="true">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <input name="phone"  placeholder="رقم الهاتف" type="text" id="reservation_phone" name="reservation_phone" required="required" class="form-control" required="" aria-required="true">
                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <input name="qualification"  placeholder="المؤهل الدراسى" type="text" id="reservation_name"  required="required" class="form-control" aria-required="true">
                                    </div>
                                </div>



                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <input name="address"  placeholder="العنوان" type="text" id="reservation_name"  required="required" class="form-control" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <label style="color: white">إيصال الدفع   </label>
                                        <input name="image"  type="file"
                                                required="required" class="form-control"
                                               aria-required="true">
                                        <span style="color: white">رقم الحساب داخل مصر</span> <br>
                                        <span style="color: white"> {{ setting() ? setting()->eg_account : '#' }}</span> <br>
                                        <span style="color: white">رقم الحساب خارج مصر</span> <br>
                                        <span style="color: white">{{ setting() ? setting()->out_account : '#' }}</span> <br>
                                        <span style="color: white">Swift code : B M I S E G C X X X X</span>
                                    </div>
                                </div>




                                <div class="col-sm-12">
                                    <div class="form-group mb-0 mt-10">
                                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button type="submit" class="btn btn-colored btn-theme-color-2 text-white btn-lg btn-block" data-loading-text="Please wait...">سجل الآن</button>
                                    </div>
                                </div>


                            </div>
                        </form>



                        <!-- Application Form End-->
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
