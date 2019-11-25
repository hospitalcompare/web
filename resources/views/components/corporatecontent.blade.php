{{-- Corporate content area --}}
<div class="corporate-content w-100" id="corporate_content_hospital_{{$id}}">
    <div class="container">
        <div class="d-flex">
            <div class="corporate-content-section-1"></div>
            <div class="corporate-content-section-2 position-relative">
                @include('components.basic.button', [
                    'buttonText'        => 'Close Info',
                    'classTitle'        => 'btn btn-cc-close position-absolute',
                    'svg'               => 'times',
                    'dataTarget'        => '#corporate_content_hospital_' . $id,
                    'style'             => 'right: 0; top: 9px',
                    'id'                => 'close_cc_' . $id])
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="nav-tabs_{{ $id }}" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active " id="profile-tab_{{ $id }}" data-toggle="tab"
                           href="#profile_{{ $id }}"
                           role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link map-tab"
                           id="map-tab_{{ $id }}"
                           data-toggle="tab"
                           data-longitude="{{ $longitude }}"
                           data-latitude="{{ $latitude }}"
                           data-map-target="#gmap_{{ $id }}"
                           href="#map_{{ $id }}"
                           role="tab"
                           aria-controls="home"
                           aria-selected="true">Map</a>
                    </li>
                    <li class="nav-item d-none">
                        <a class="nav-link" id="treatments-tab_{{ $id }}" data-toggle="tab"
                           href="#treatments_{{ $id }}" role="tab" aria-controls="home"
                           aria-selected="true">Treatments</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content row">
                    <div class="tab-pane active col-6" id="profile_{{ $id }}" role="tabpanel"
                         aria-labelledby="profile-tab">
                        <div class="profile-intro mb-5">
                            <p class="SofiaPro-SemiBold ">Situated in London, this hospital provides private
                                patients with outstanding medical
                                services. Both self paying and private medically insured patients will be treated using
                                the latest techniques in a modern and calming hospital. With a team of expert
                                specialists patients can get treatment for a range of hip, knee, spinal and foot and
                                ankle conditions.</p>
                            <p class="">Our hospitals are equipped with state of the art facilities and are
                                focused on providing
                                high quality healthcare. Each hospital boasts of having the latest equipment, available
                                facilities include:</p>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class=" SofiaPro-SemiBold">First list</p>
                                <ul class="blue-dot blue-dot_small">
                                    <li>First thing</li>
                                    <li>Second thing</li>
                                    <li>Third thing</li>
                                    <li>Fourth thing</li>
                                    <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth
                                        thing
                                        Fifth thing
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <p class=" SofiaPro-SemiBold">Second list</p>
                                <ul class="blue-dot blue-dot_small">
                                    <li>First thing</li>
                                    <li>Second thing</li>
                                    <li>Third thing</li>
                                    <li>Fourth thing</li>
                                    <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth
                                        thing
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane col-6"
                         id="map_{{ $id }}"
                         role="tabpanel"
                         aria-labelledby="map-tab">
                        <div id="gmap_{{ $id }}" class="map-container" style="height: 200px">
                        </div>
                        <div class="corporate-content-details d-flex mb-3" style="padding-top: 25px">
                            <div class="img-wrap mr-4">
                                <img class="image" width="173" height="158"
                                     src="images/alder-1.jpg"
                                     alt="Image of {{ $hospitalTitle }}">
                            </div>
                            <div class="address">
                                {!! $address !!}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane col-6 d-none" id="treatments_{{ $id }}" role="tabpanel"
                         aria-labelledby="treatments-tab">
                        <p class=" SofiaPro-SemiBold">Our hospitals are equipped with state of the art
                            facilities and are focused on providing
                            high quality healthcare. Each hospital boasts of having the latest equipment, available
                            facilities include:</p>
                        <form action="" class="mb-3">
                            <div class="bg-teal rounded p-4">
                                <div class="form-child full-left d-flex">
                                    @include('components.basic.select', [
                                        'showLabel'             => true,
                                        'selectClass'           => 'distance-dropdown',
                                        'options'               => $procedures,
                                        'labelClass'            => 'text-white font-18 pr-3 SofiaPro-Medium',
                                        'selectClassName'       => 'd-md-flex select_half-width w-100',
                                        'placeholder'           => 'Check to see if your treatment is available at this hospital',
                                        'name'                  =>'radius'])
                                    {{--                                <a tabindex="0" data-offset="30px, 40px"--}}
                                    {{--                                   class="help-link"--}}
                                    {{--                                    @include('components.basic.popover', [--}}
                                    {{--                                    'dismissible'   => true,--}}
                                    {{--                                    'placement'      => 'top',--}}
                                    {{--                                    'size'           => 'large',--}}
                                    {{--                                    'html'           => 'true',--}}
                                    {{--                                    'trigger'        => 'focus',--}}
                                    {{--                                    'content'        => '<p class="bold mb-0">--}}
                                    {{--                                                     Distance--}}
                                    {{--                                                 </p>--}}
                                    {{--                                                 <p>--}}
                                    {{--                                                     Select how far you would be willing to travel for your treatment.--}}
                                    {{--                                                 </p>--}}
                                    {{--                                                 <p>--}}
                                    {{--                                                     <a  class="btn btn-close btn-close__small btn-turq btn-icon" >Close</a>--}}
                                    {{--                                                 </p>'])--}}
                                    {{--                                >' . file_get_contents(asset('/images/icons/question.svg')) . '</a>--}}
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <p class=" SofiaPro-SemiBold">Intro text for column area</p>
                            </div>
                            <div class="col-6">
                                <ul class="blue-dot blue-dot_small">
                                    <li>First thing</li>
                                    <li>Second thing</li>
                                    <li>Third thing</li>
                                    <li>Fourth thing</li>
                                    <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth
                                        thing
                                        Fifth thing
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="blue-dot blue-dot_small">
                                    <li>First thing</li>
                                    <li>Second thing</li>
                                    <li>Third thing</li>
                                    <li>Fourth thing</li>
                                    <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth
                                        thing
                                        Fifth thing
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="media-pane col-6">
                        <div class="row">
                            <div class="col-5">
                            <!--Carousel Wrapper-->
                                <div class="carousel-wrapper position-relative">
                                    <div id="carousel-thumb_{{ $id }}"
                                         class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel"
                                         data-interval="false">
                                        <!--Slides-->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active" style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">
{{--                                                <img class="d-block h-100 content"--}}
{{--                                                     src="/images/alder-1.jpg"--}}
{{--                                                     alt="First slide">--}}
                                            </div>
                                            <div class="carousel-item" style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">
{{--                                                <img class="d-block h-100 content"--}}
{{--                                                     src="/images/alder-1.jpg"--}}
{{--                                                     alt="First slide">--}}
                                            </div>
                                            <div class="carousel-item" style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">
{{--                                                <img class="d-block h-100 content"--}}
{{--                                                     src="/images/alder-1.jpg"--}}
{{--                                                     alt="First slide">--}}
                                            </div>
                                            <div class="carousel-item" style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">
{{--                                                <img class="d-block h-100 content"--}}
{{--                                                     src="/images/alder-1.jpg"--}}
{{--                                                     alt="First slide">--}}
                                            </div>

                                        </div>
                                        <!--/.Slides-->
                                        <!--Controls-->
                                        <a class="carousel-control-prev" href="#carousel-thumb_{{ $id }}" role="button"
                                           data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true">{!! file_get_contents(asset('/images/icons/carousel-left.svg')) !!}</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumb_{{ $id }}" role="button"
                                           data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true">{!! file_get_contents(asset('/images/icons/carousel-right.svg')) !!}</span>
                                            <span class="sr-only">Next</span>
                                        </a>

                                    </div><!--/.Carousel Wrapper-->
                                    <!--/.Controls-->
                                    <ol class="_carousel-indicators indicators row">
                                        <li data-target="#carousel-thumb" data-slide-to="0" class="active col-3">
                                            <div class="col-inner">
                                                <img class="d-block h-100"
                                                     src="/images/alder-1.jpg"
                                                     alt="Thumbnail image for first slide">
                                            </div>
                                        </li>
                                        <li data-target="#carousel-thumb" data-slide-to="1" class="col-3">
                                            <div class="col-inner">
                                                <img class="d-block h-100"
                                                     src="/images/alder-1.jpg"
                                                     alt="Thumbnail image for seconf slide">
                                            </div>
                                        </li>
                                        <li data-target="#carousel-thumb" data-slide-to="2" class="col-3">
                                            <div class="col-inner">
                                                <img class="d-block h-100"
                                                     src="/images/alder-1.jpg"
                                                     alt="Thumbnail image for third slide">
                                            </div>
                                        </li>
                                        <li data-target="#carousel-thumb" data-slide-to="3" class="col-3">
                                            <div class="col-inner">
                                                <img class="d-block h-100"
                                                     src="/images/alder-1.jpg"
                                                     alt="Thumbnail image for fourth slide">
                                            </div>
                                        </li>
                                    </ol>
                                    @include('components.basic.modalbutton', [
                                        'classTitle'        => 'stretched-link',
                                        'id'                => 'modal_trigger_' . $id,
                                        'modalTarget'       => '#hc_modal_carousel_'. $id,
                                        'buttonText'        => '',
                                        ])
                                </div>
                            </div>
                            @if(!empty($specialOffers))
                                <div class="col-7">
{{--                                    <div class="col-5">--}}
{{--                                        <div class="video-wrapper position-relative">--}}
{{--                                            <video class="content w-100" poster="{{ url('images/video_placeholder.jpg') }}">--}}
{{--                                                <source src="{{ asset('/video/For_Wes.mp4') }}" type="video/mp4">--}}
{{--                                                <source src="movie.ogg" type="video/ogg">--}}
{{--                                                Your browser does not support the video tag.--}}
{{--                                            </video>--}}
{{--                                            <div class="player-button toggle">{!! file_get_contents(asset('/images/icons/youtube.svg')) !!}</div>--}}
{{--                                            @include('components.basic.modalbutton', [--}}
{{--                                               'videoUrl'          => '/video/For_Wes.mp4',--}}
{{--                                               'modalTarget'       => '#hc_modal_video',--}}
{{--                                               'classTitle'        => 'stretched-link',--}}
{{--                                               'target'            => 'blank',--}}
{{--                                               'buttonText'            => '',--}}
{{--                                               'id'                => 'enquire_'.$id])--}}
{{--                                        </div>--}}
{{--                                        <div class="video-caption  font-14">Video title here</div>--}}
{{--                                    </div>--}}

                                    <div class="special-offers-tab bg-blue-grad rounded d-flex flex-column">
                                        <p class="special-offer-title text-white font-22 SofiaPro-SemiBold">Special
                                            Offer</p>
                                        <ul class="bullets">
                                            @foreach($bulletPoints as $bulletPoint)
                                                @if(!empty($bulletPoint))
                                                    <li class="text-white">{{ $bulletPoint }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <div class="btn-area w-100 text-right">
                                            @include('components.basic.modalbutton', [
                                               'hospitalType'      => $NHSClass,
                                               'hrefValue'         => $url,
                                               'hospitalTitle'     => $title,
                                               'modalTarget'       => '#hc_modal_enquire_private',
                                               'classTitle'        => 'btn btn-icon btn-enquire-now enquiry mt-auto ml-auto',
                                               'target'            => 'blank',
                                               'buttonText'        => 'Enquire now',
                                               'id'                => 'enquire_special_'.$id])
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
{{--                @include('components.basic.button', [--}}
{{--                    'classTitle'        => 'btn btn-xs btn-icon btn-more-info btn-darkgreen position-absolute',--}}
{{--                    'style'             => 'width: 90px',--}}
{{--                    'icon'              => 'fa fa-caret-up fa-sm',--}}
{{--                    'buttonText'            => 'Close',--}}
{{--                    'dataTarget'        => '#corporate_content_hospital_' . $id--}}
{{--                 ])--}}
            </div>
{{--            <div class="corporate-content-section-3"></div>--}}
        </div>
    </div>{{-- End of container --}}
</div>{{-- End of corporate content area  --}}
@include('components.modals.modalCarousel', [
    'id' => $id,
    'carouselContent'   => '        <div class="carousel-wrapper position-relative">
                                        <div id="carousel-thumb_modal_' . $id .'"
                                             class="carousel slide carousel-slide carousel-thumbnails" data-ride="carousel" data-interval="false">
                                            <!--Slides-->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active" style="background-image: url(\'/images/alder-1.jpg\')"></div>
                                                <div class="carousel-item" style="background-image: url(\'/images/alder-1.jpg\')"></div>
                                                <div class="carousel-item" style="background-image: url(\'/images/alder-1.jpg\')"></div>
                                                <div class="carousel-item" style="background-image: url(\'/images/alder-1.jpg\')"></div>
                                            </div>
                                            <!--/.Slides-->
                                            <!--Controls-->
                                            <a class="carousel-control-prev carousel-control" href="#carousel-thumb_modal_'. $id .'" role="button"
                                               data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true">' . file_get_contents(asset('/images/icons/carousel-left.svg')) . '</span>
                                            </a>
                                            <a class="carousel-control-next carousel-control" href="#carousel-thumb_modal_'. $id .'" role="button"
                                               data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true">' . file_get_contents(asset('/images/icons/carousel-right.svg')) . ' </span>
                                                <span class="sr-only">Next</span>
                                            </a>

                                        </div>
                                        <!--/.Controls-->
                                        <ol class="_carousel-indicators indicators row mb-0">
                                            <li data-target="#carousel-thumb_modal_'. $id .'" data-slide-to="0" class="active col-3">
                                                <div class="col-inner" style="background-image: url(\'/images/alder-1.jpg\')">
                                                    <img class="d-block h-100"
                                                         src="/images/alder-1.jpg"
                                                         alt="Thumbnail image for first slide">
                                                </div>
                                            </li>
                                            <li data-target="#carousel-thumb_modal_'. $id .'" data-slide-to="1" class="col-3">
                                                <div class="col-inner" style="background-image: url(\'/images/alder-1.jpg\')">
                                                </div>
                                            </li>
                                            <li data-target="#carousel-thumb_modal_'. $id .'" data-slide-to="2" class="col-3">
                                                <div class="col-inner" style="background-image: url(\'/images/alder-1.jpg\')">
                                                </div>
                                            </li>
                                            <li data-target="#carousel-thumb_modal_'. $id .'" data-slide-to="3" class="col-3">
                                                <div class="col-inner" style="background-image: url(\'/images/alder-1.jpg\')">
                                                </div>
                                            </li>
                                        </ol>
                                    </div><!--/.Carousel Wrapper-->
                                    '])
