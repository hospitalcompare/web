{{-- Corporate content area --}}
<div class="corporate-content w-100" id="corporate_content_hospital_{{$id}}">
    <div class="container">
        <div class="d-flex">
            <div class="corporate-content-section-1"></div>
            <div class="corporate-content-section-2 position-relative">
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
                    <div class="tab-pane active col-7" id="profile_{{ $id }}" role="tabpanel"
                         aria-labelledby="profile-tab">
                        <p class="SofiaPro-SemiBold col-greydarkest">Situated in London, this hospital provides private
                            patients with outstanding medical
                            services. Both self paying and private medically insured patients will be treated using
                            the latest techniques in a modern and calming hospital. With a team of expert
                            specialists patients can get treatment for a range of hip, knee, spinal and foot and
                            ankle conditions.</p>
                        <p class="col-greydarkest">Our hospitals are equipped with state of the art facilities and are
                            focused on providing
                            high quality healthcare. Each hospital boasts of having the latest equipment, available
                            facilities include:</p>
                        <div class="row">
                            <div class="col-6">
                                <p class="col-greydarkest SofiaPro-SemiBold">First list</p>
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
                                <p class="col-greydarkest SofiaPro-SemiBold">Second list</p>
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
                    <div class="tab-pane col-7"
                         id="map_{{ $id }}"
                         role="tabpanel"
                         aria-labelledby="map-tab">
                        <div id="gmap_{{ $id }}" class="map-container" style="height: 200px">
                        </div>
                        <div id="details" class="d-flex" style="padding-top: 25px">
                            <div class="img-wrap mr-4">
                                <img class="image" width="173" height="158" src="images/alder-1.png">
                            </div>
                            <div class="address">
                                {!! $address !!}

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane col-7 d-none" id="treatments_{{ $id }}" role="tabpanel"
                         aria-labelledby="treatments-tab">
                        <p class="col-greydarkest SofiaPro-SemiBold">Our hospitals are equipped with state of the art
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
                                        'chevronFAClassName'    => '',
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
                                    {{--                                                     <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>--}}
                                    {{--                                                 </p>'])--}}
                                    {{--                                >?</a>--}}
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <p class="col-greydarkest SofiaPro-SemiBold">Intro text for column area</p>
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
                    <div class="media-pane col-5">
                        <div class="row mb-5">
                            <div class="col-6">
                                {{ !empty($d['corporate_content']) ?? '' }}
                                <!--Carousel Wrapper-->
                                    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel" data-interval="false">
                                        <!--Slides-->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block h-100 content" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg"
                                                     alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block h-100 content" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg"
                                                     alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block h-100 content" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg"
                                                     alt="Third slide">
                                            </div>
                                        </div>
                                        <!--/.Slides-->
                                        <!--Controls-->
                                        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        <!--/.Controls-->
                                        <ol class="_carousel-indicators indicators row">
                                            <li data-target="#carousel-thumb" data-slide-to="0" class="active col-3">
                                                <div class="col-inner">
                                                    <img class="d-block h-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg" class="img-fluid">
                                                </div>
                                            </li>
                                            <li data-target="#carousel-thumb" data-slide-to="1" class="col-3">
                                                <div class="col-inner">
                                                    <img class="d-block h-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg" class="img-fluid">
                                                </div>
                                            </li>
                                            <li data-target="#carousel-thumb" data-slide-to="2" class="col-3">
                                                <div class="col-inner">
                                                    <img class="d-block h-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg" class="img-fluid">
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <!--/.Carousel Wrapper-->

                            </div>
                            <div class="col-6">
                                <div class="video-wrapper position-relative">
                                    <video class="content w-100" poster="{{ url('images/video_placeholder.png') }}">
                                        <source src="{{ asset('/video/For_Wes.mp4') }}" type="video/mp4">
                                        <source src="movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div
                                        class="player-button toggle">{!! file_get_contents(asset('/images/icons/youtube.svg')) !!}</div>
                                    @include('components.basic.modalbutton', [
                                       'videoUrl'          => '/video/For_Wes.mp4',
                                       'modalTarget'       => '#hc_modal_video',
                                       'classTitle'        => 'stretched-link',
                                       'target'            => 'blank',
                                       'button'            => '',
                                       'id'                => 'enquire_'.$id])
                                </div>
                                <div class="video-caption col-greydarkest font-14">Video title here</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                @if(!empty($specialOffers))
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
                                        @include('components.basic.modalbutton', [
                                           'hospitalType'      => $NHSClass,
                                           'hrefValue'         => $url,
                                           'hospitalTitle'     => $title,
                                           'modalTarget'       => '#hc_modal_enquire_private',
                                           'classTitle'        => 'btn btn-icon btn-enquire-now enquiry mt-auto ml-auto',
                                           'target'            => 'blank',
                                           'button'            => 'Enquire now',
                                           'id'                => 'enquire_'.$id])
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @include('components.basic.button', [
                    'classTitle'        => 'btn btn-xs btn-icon btn-more-info btn-darkgreen position-absolute',
                    'icon'              => 'fa fa-caret-up fa-sm',
                    'button'            => 'Close',
                    'dataTarget'        => '#corporate_content_hospital_' . $id
                 ])
            </div>
            <div class="corporate-content-section-3"></div>
        </div>
    </div>{{-- End of container --}}
</div>{{-- End of corporate content area  --}}
