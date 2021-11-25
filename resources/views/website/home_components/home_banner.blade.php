


<!-- SLIDER -->
<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel">
            <div class="item">

                <img src="{{$banner->where('key_word',"home_bannar")->first() ? GetImg($banner->where('key_word',"home_bannar")->first()->background):asset('website').'images/slider/2.jpg'}}" alt="">
                <div class="carousel-caption slider-con">
                    <h2 style="color: {{$banner->where('key_word',"home_bannar")->first()->color_title ? $banner->where('key_word',"home_bannar")->first()->color_title:"white"}}">  أهلا بك فى الأكاديمية الوطنية للعلوم الشاملة </h2>

                    <p style="color: {{$banner->where('key_word',"home_bannar")->first()->color_contents ? $banner->where('key_word',"home_bannar")->first()->color_contents:"white"}}">
                        {{ $banner->where('key_word',"home_bannar")->first() ?  $banner->where('key_word',"home_bannar")->first()->contents : 'بتسجيلك فى برنامج الأكاديمية الوطنية للعلوم الشاملة تتجاوز العقبات وتتعلم العلم بكل يسر وسهولة من خلال الوسائل المتقدمة المعتمدة فى برنامج الأكاديمية' }}
                    </p>

                    <a href="{{ url('register-with-academy') }}" class="bann-btn-1"> سجل الآن </a>

                </div>
            </div>

        </div>
    </div>
</section>




<!-- QUICK LINKS -->
<section>
    <div class="container">
        <div class="row">
            <div class="wed-hom-ser">
                <ul>
                    <li>
                        <a href="{{ url('contact_us') }}" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('website')}}/images/icon/h-ic3.png" alt=""> تواصل معتا </a>
                    </li>
                    <li>
                        <a href="{{ url('news') }}" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('website')}}/images/icon/h-ic4.png" alt=""> اخبارنا</a>
                    </li>
                    <li>
                        <a href="{{ url('team_work') }}" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('website')}}/images/icon/h-ic2.png" alt=""> هيئه التدريس </a>
                    </li>
                    <li>
                        <a href="{{ url('courses') }}" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('website')}}/images/icon/h-ic1.png" alt=""> كورسات</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
