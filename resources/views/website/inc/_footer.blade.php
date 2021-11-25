

<!-- FOOTER COURSE BOOKING -->
<section>
    <div class="full-bot-book">
        <div class="container">
            <div class="row">
                <div class="bot-book">
                    <div class="col-md-2 bb-img">
                        <img src="{{asset('website')}}/images/3.png" alt="">
                    </div>
                    <div class="col-md-7 bb-text">
                        <h4>التسجيل فى الاكاديمية الوطنية للعلوم الشاملة</h4>
                        <p>يمكنك الآن التسجيل فى الاكاديمية الوطنية للعلوم الشاملة نرجو أن نكون دائما عند حسن ظنكم وأن نوفر لكم كل ماتحتاجوه ونتمنى الدعم وان تكونوا دائما على تواصل معنا</p>
                    </div>
                    <div class="col-md-3 bb-link">
                        <a href="{{ url('register-with-academy') }}">سجل الان</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- FOOTER -->
<section class="wed-hom-footer">
    <div class="container">
        <div class="row wed-foot-link">
            <div class="col-md-4 foot-tc-mar-t-o">
                <h4>كن دائما على تواصل معنا</h4>
                <p>العنوان : <span>{{ setting() ? setting()->address1 : '#' }}</span></p>
                <p>رقم الهاتف: <a href="#!">{{ setting() ? setting()->phone1 : '#' }}</a></p>
                <p>البريد الالكترونى: <a href="#!"> {{ setting() ? setting()->email1 : '#' }}</a></p>
                <h4>وسائل التواصل</h4>
                <ul class="social-media">
                    <li><a href="{{ setting() ? setting()->facebook : '#' }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="{{ setting() ? setting()->twitter : '#' }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="{{ setting() ? setting()->youtube : '#' }}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="{{ setting() ? setting()->whatsapp : '#' }}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 foot-tc-mar-t-o">
                <h4>أشهر الكورسات</h4>

                <ul>
                    @foreach(\App\Models\OpenCourse::orderby('id','desc')->get()->take(12) as $key => $course)
                         <li>
                             <i class="fa fa-circle-o" aria-hidden="true"></i>
                             <a href="{{ url('course_details').'/'.$course->id }}">{{ $course->title }}</a>
                         </li>
                    @endforeach
                </ul>

            </div>
            <div class="col-md-4">
               {{-- <h4>الدعم والمساعدة</h4>
                <ul>
                    <li>خدمة 24 ساعة</li>
                    <li>آراء الناس</li>
                    <li><a href="{{ url('contact_us') }}">تواصل معنا</a></li>
                </ul>--}}

                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%D8%A7%D9%84%D8%A7%D9%83%D8%A7%D8%AF%D9%8A%D9%85%D9%8A%D9%87-%D8%A7%D9%84%D9%88%D8%B7%D9%86%D9%8A%D9%87-%D9%84%D9%84%D8%B9%D9%84%D9%88%D9%85-%D8%A7%D9%84%D8%B4%D8%A7%D9%85%D9%84%D9%87-100762815407990%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=176325927120219" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
    </div>
</section>

     <!-- COPY RIGHTS -->
<section class="wed-rights">
    <div class="container">
        <div class="row">
            <div class="copy-right">
                <a target="_blank" href="http://directsolutionstech.com/">جميع الحقوق محفوظة Direct Solutionstech </a>
            </div>
        </div>
    </div>
</section>

