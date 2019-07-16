<div class="whyChooseParent">
    <div class="whyChooseContent">
       <h1 class="pageTitle">{{$title}}</h1>
        <section class="whyChoose">
            <div class="chooseText">
                <p>
                    {{$description}}
                </p>
            </div>
            <div class="chooseVideo">
                <div class="videoParent">
                    <video  poster="{{ asset($videoPoster) }}">
                        <source src="movie.mp4" type="video/mp4">--}}
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                     </video>
                    <div class="playerButton"></div>
                </div>
            </div>
        </section>

    </div>
</div>