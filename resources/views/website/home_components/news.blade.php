
<section class="news">
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title">
                <h2>تعرف على <span> اخبارنا </span></h2>
                <p>يوجد بالأكاديمية العديد من العملاء المفيدين معنا والتى يمكنك الاستفادة منها وسوف نتكلم عنها </p>
            </div>
        </div>
        <div class="owl-carousel owl-theme news">

            @foreach($news as $new)
                <div class="item">
                    <figure class="snip1518">
                        <div class="image">
                            <img src="{{ GetImg( $new->image ) }}" alt="sample101" />
                        </div>
                        <figcaption>
                            <h3>{{ $new->title }}</h3>
                            <p>{{ $new->contents }}</p>

                            <footer>
                                <div class="date"><i class="fa fa-calendar"></i> {{  change_Date_into_arabic($new->created_at , 'full') }} </div>
{{--                                <div class="icons">--}}
{{--                                    <div class="views"><i class="fa fa-eye"></i>2,907</div>--}}
{{--                                    <div class="love"><i class="fa fa-heart"></i>623</div>--}}
{{--                                </div>--}}
                            </footer>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
            @endforeach

        </div>

    </div>

</section>
