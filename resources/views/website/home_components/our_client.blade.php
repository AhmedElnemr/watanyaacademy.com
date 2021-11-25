
<section class="home-partentes">
    <div class="container pad-bot-40">
        <div class="row">
            <div class="con-title">
                <h2>تعرف على <span> عملاؤنا </span></h2>
                <p>يوجد بالأكاديمية العديد من العملاء المفيدين معنا والتى يمكنك الاستفادة منها وسوف نتكلم عنها </p>
            </div>
        </div>

        <div class="owl-carousel owl-theme">

            @foreach(\App\Models\Client::all() as $client)
                    <div class="item">
                        <img src="{{ GetImg( $client->image ) }}">
                    </div>
            @endforeach

        </div>


    </div>
</section>


