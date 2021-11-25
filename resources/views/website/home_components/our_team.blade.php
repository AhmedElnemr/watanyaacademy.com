

<!-- POPULAR teachers -->
<section>
    <div class="container com-sp pad-bot-70">

        <div class="row">
            <div class="con-title">
                <h2>أعضاء هيئة  <span> التدريس </span></h2>
                <p>يوجد بالأكاديمية العديد من المجالات المفيدة والتى يمكنك الاستفادة منها وسوف نتكلم عنها </p>
            </div>
        </div>

        @foreach($our_teams as  $our_team)
            <div class="col-md-3">
                <a href="{{ url('team-member').'/'.$our_team->id }}">
                    <figure class="snip1515">
                        <div class="profile-image"><img src="{{ GetImg($our_team->image) }}" alt="sample47" /></div>
                        <figcaption>
                            <h3>{{ $our_team->name }}</h3>
                            <h4>{{ $our_team->position }}</h4>
                            {{--   <p>{{ $our_team->contents }}</p>--}}
                            <div class="icons"><a target="_blank" href="{{ $our_team->face_book }}"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="{{ $our_team->twitter }}"> <i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="{{ $our_team->instagram }}"> <i class="fa fa-instagram"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </a>

            </div>
        @endforeach

    </div>
</section>
