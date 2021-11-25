<!-- POPULAR counters -->
<section class="home-counter">
    <div class="overlay"></div>
    <div class="container com-sp pad-bot-70">
        <div class="row">


            <div class="col-md-3 col-xs-6">
                <!--                    <i class=""></i>-->
                <div class="count-box" id="num1">{{ setting() ? setting()->counter_course : '#' }}</div>
                <p>البرامج التعليمية </p>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="count-box" id="num3">{{ setting() ? setting()->counter_open_course : '#' }}</div>
                <p>كورسات المفتوحة</p>
            </div>


            <div class="col-md-3 col-xs-6">
                <div class="count-box" id="num2">{{ setting() ? setting()->counter_student : '#' }}</div>
                <p>طلاب الاكاديمية </p>
            </div>



            <div class="col-md-3 col-xs-6">
                <div class="count-box" id="num4">{{ setting() ? setting()->counter_teacher : '#' }}</div>
                <p>أعضاء هيئة التدريس</p>
            </div>


        </div>
    </div>

</section>

