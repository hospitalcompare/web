{{-- Corporate content area --}}
<div class="corporate-content w-100" id="corporate_content_hospital_{{$id}}">
    <div class="container">
        <div class="corporate-content-inner d-flex">
            <div class="corporate-content-section-1"></div>
            <div class="corporate-content-section-2 position-relative w-100">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="nav-tabs_{{ $id }}" role="tablist">
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a class="nav-link" id="stats-tab_{{ $id }}" data-toggle="tab"--}}
                    {{--                           href="#stats_{{ $id }}"--}}
                    {{--                           role="tab" aria-controls="stats" aria-selected="false">Stats</a>--}}
                    {{--                    </li>--}}
                    @if($d['location_id'] === 'RJR05' || $d['location_id'] === '1-115574737')
                        <li class="nav-item">
                            <a class="nav-link active" id="consultants-tab_{{ $id }}" data-toggle="tab"
                               href="#consultants_{{ $id }}"
                               role="tab" aria-controls="stats" aria-selected="false">Consultants</a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link"
                           id="map-tab_{{ $id }}"
                           data-toggle="tab"
                           data-map-target="#gmap_{{ $id }}"
                           href="#map_{{ $id }}"
                           role="tab"
                           aria-controls="home"
                           aria-selected="true">Map</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="">
                    <div class="tab-content">

                        {{--                    <div class="tab-pane active col-12" id="profile_{{ $id }}" role="tabpanel"--}}
                        {{--                         aria-labelledby="profile-tab">--}}

                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-12 col-md-6">--}}
                        {{--                                <div class="profile-intro">--}}
                        {{--                                    <p class="">Situated in London, this hospital provides private--}}
                        {{--                                        patients with outstanding medical--}}
                        {{--                                        services. Both self paying and private medically insured patients will be treated using--}}
                        {{--                                        the latest techniques in a modern and calming hospital. With a team of expert--}}
                        {{--                                        specialists patients can get treatment for a range of hip, knee, spinal and foot and--}}
                        {{--                                        ankle conditions.</p>--}}
                        {{--                                    <p class="">Our hospitals are equipped with state of the art facilities and are--}}
                        {{--                                        focused on providing--}}
                        {{--                                        high quality healthcare. Each hospital boasts of having the latest equipment, available--}}
                        {{--                                        facilities include:</p>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-12 col-md-6">--}}
                        {{--                                        <p class=" SofiaPro-SemiBold">First list</p>--}}
                        {{--                                        <ul class="blue-dot blue-dot_small">--}}
                        {{--                                            <li>First thing</li>--}}
                        {{--                                            <li>Second thing</li>--}}
                        {{--                                            <li>Third thing</li>--}}
                        {{--                                            <li>Fourth thing</li>--}}
                        {{--                                            <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth--}}
                        {{--                                                thing--}}
                        {{--                                                Fifth thing--}}
                        {{--                                            </li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col-12 col-md-6">--}}
                        {{--                                        <p class=" SofiaPro-SemiBold">Second list</p>--}}
                        {{--                                        <ul class="blue-dot blue-dot_small">--}}
                        {{--                                            <li>First thing</li>--}}
                        {{--                                            <li>Second thing</li>--}}
                        {{--                                            <li>Third thing</li>--}}
                        {{--                                            <li>Fourth thing</li>--}}
                        {{--                                            <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth--}}
                        {{--                                                thing--}}
                        {{--                                            </li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-6">--}}
                        {{--                                <div class="carousel-wrapper position-relative pl-md-5">--}}
                        {{--                                    <div id="carousel-thumb_{{ $id }}"--}}
                        {{--                                         class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel"--}}
                        {{--                                         data-interval="false">--}}
                        {{--                                        <!--Slides-->--}}
                        {{--                                        <div class="carousel-inner" role="listbox">--}}
                        {{--                                            <div class="carousel-item active" style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">--}}
                        {{--                                                --}}{{--                                                <img class="d-block h-100 content"--}}
                        {{--                                                --}}{{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                --}}{{--                                                     alt="First slide">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="carousel-item" style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">--}}
                        {{--                                                --}}{{--                                                <img class="d-block h-100 content"--}}
                        {{--                                                --}}{{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                --}}{{--                                                     alt="First slide">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="carousel-item" style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">--}}
                        {{--                                                --}}{{--                                                <img class="d-block h-100 content"--}}
                        {{--                                                --}}{{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                --}}{{--                                                     alt="First slide">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="carousel-item" style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">--}}
                        {{--                                                --}}{{--                                                <img class="d-block h-100 content"--}}
                        {{--                                                --}}{{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                --}}{{--                                                     alt="First slide">--}}
                        {{--                                            </div>--}}

                        {{--                                        </div>--}}
                        {{--                                        <!--/.Slides-->--}}
                        {{--                                        <!--Controls-->--}}
                        {{--                                        <a class="carousel-control-prev" href="#carousel-thumb_{{ $id }}" role="button"--}}
                        {{--                                           data-slide="prev">--}}
                        {{--                                            <span class="carousel-control-prev-icon" aria-hidden="true">@svg('chevron-left')</span>--}}
                        {{--                                            <span class="sr-only">Previous</span>--}}
                        {{--                                        </a>--}}
                        {{--                                        <a class="carousel-control-next" href="#carousel-thumb_{{ $id }}" role="button"--}}
                        {{--                                           data-slide="next">--}}
                        {{--                                            <span class="carousel-control-next-icon" aria-hidden="true">@svg('chevron-right')</span>--}}
                        {{--                                            <span class="sr-only">Next</span>--}}
                        {{--                                        </a>--}}

                        {{--                                    </div><!--/.Carousel Wrapper-->--}}
                        {{--                                    <!--/.Controls-->--}}
                        {{--                                    <ol class="_carousel-indicators indicators row">--}}
                        {{--                                        <li data-target="#carousel-thumb" data-slide-to="0" class="active col-3">--}}
                        {{--                                            <div class="col-inner">--}}
                        {{--                                                <img class="d-block h-100"--}}
                        {{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                     alt="Thumbnail image for first slide">--}}
                        {{--                                            </div>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li data-target="#carousel-thumb" data-slide-to="1" class="col-3">--}}
                        {{--                                            <div class="col-inner">--}}
                        {{--                                                <img class="d-block h-100"--}}
                        {{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                     alt="Thumbnail image for seconf slide">--}}
                        {{--                                            </div>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li data-target="#carousel-thumb" data-slide-to="2" class="col-3">--}}
                        {{--                                            <div class="col-inner">--}}
                        {{--                                                <img class="d-block h-100"--}}
                        {{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                     alt="Thumbnail image for third slide">--}}
                        {{--                                            </div>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li data-target="#carousel-thumb" data-slide-to="3" class="col-3">--}}
                        {{--                                            <div class="col-inner">--}}
                        {{--                                                <img class="d-block h-100"--}}
                        {{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                     alt="Thumbnail image for fourth slide">--}}
                        {{--                                            </div>--}}
                        {{--                                        </li>--}}
                        {{--                                    </ol>--}}
                        {{--                                    @include('components.basic.modalbutton', [--}}
                        {{--                                        'classTitle'        => 'stretched-link',--}}
                        {{--                                        'id'                => 'modal_trigger_' . $id,--}}
                        {{--                                        'modalTarget'       => '#hc_modal_carousel_'. $id,--}}
                        {{--                                        'buttonText'        => '',--}}
                        {{--                                        ])--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        <div class="tab-pane active" id="consultants_{{ $id }}" role="tabpanel"
                             aria-labelledby="consultants-tab">
                            <div class="">
                                <div class="">
                                    <div id="table-scroll_{{$id}}" class="table-scroll">
                                        {{--                                        Countess of Chester--}}
                                        @if($d['location_id'] === 'RJR05')
                                            <table id="main-table" class="main-table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col" class="text-center">Gender</th>
                                                    <th scope="col" class="text-center">GMC Code</th>
                                                    <th scope="col" class="text-center">Licensed</th>
                                                    <th scope="col" class="text-center">Years Registered</th>
                                                    <th scope="col">Procedures Performed</th>
                                                    <th scope="col" width="300">Specialisms</th>
                                                    <th scope="col">Also Practicing At</th>
                                                    {{--                                                    <th scope="col">History</th>--}}
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>Edward Wood</th>
                                                    <td class="text-center">M</td>
                                                    <td class="text-center">4342931</td>
                                                    <td class="text-center">Valid</td>
                                                    <td class="text-center">23 years</td>
                                                    <td>100 Procedures</td>
                                                    <td>Foot & Ankle Surgery</td>
                                                    <td>Nuffield The Grosvenor Hospital</td>
                                                    {{--                                                <td>Trauma & Orthopaedics</td>--}}
                                                </tr>
                                                <tr>
                                                    <th>Mark Webb</th>
                                                    <td class="text-center">M</td>
                                                    <td class="text-center">4055310</td>
                                                    <td class="text-center">Valid</td>
                                                    <td class="text-center">28 years</td>
                                                    <td>75 Procedures</td>
                                                    <td>Total Elbow Replacement<br/>
                                                        Total Shoulder Replacement
                                                    </td>
                                                    <td>Nuffield The Grosvenor Hospital</td>
                                                    {{--                                                <td>Trauma & Orthopaedics</td>--}}
                                                </tr>
                                                <tr>
                                                    <th>Raghuram Thonse</th>
                                                    <td class="text-center">M</td>
                                                    <td class="text-center">4732589</td>
                                                    <td class="text-center">Valid</td>
                                                    <td class="text-center">20 years</td>
                                                    <td>257 Procedures</td>
                                                    <td>Total Knee Replacement<br/>
                                                        Total Hip Replacement<br/>
                                                        Total Shoulder Replacement
                                                    </td>
                                                    <td>Nuffield The Grosvenor Hospital</td>
                                                    {{--                                                <td></td>--}}
                                                </tr>
                                                <tr>
                                                    <th>Janardhan Rao</th>
                                                    <td class="text-center">M</td>
                                                    <td class="text-center">3555187</td>
                                                    <td class="text-center">Valid</td>
                                                    <td class="text-center">29 Years</td>
                                                    <td>319 Procedures</td>
                                                    <td>Total Hip Replacement<br/>
                                                        Total Knee Replacement<br/>
                                                        Unicondylar Knee Replacement
                                                    </td>
                                                    <td>Nuffield The Grosvenor Hospital</td>
                                                    {{--                                                <td></td>--}}
                                                </tr>
                                                <tr>
                                                    <th>Ronan Banim</th>
                                                    <td class="text-center">M</td>
                                                    <td class="text-center">4031824</td>
                                                    <td class="text-center">Valid</td>
                                                    <td class="text-center">27 Years</td>
                                                    <td>623 Procedures</td>
                                                    <td>Total Hip Replacement<br/>
                                                        Patello-Femoral Replacement<br/>
                                                        Total knee replacement<br/>
                                                        Unicondylar Knee Replacement
                                                    </td>
                                                    <td>Nuffield The Grosvenor Hospital</td>
                                                    {{--                                                <td></td>--}}
                                                </tr>
                                                {{--                                            @foreach(range(1, 100) as $i)--}}
                                                {{--                                                <tr>--}}
                                                {{--                                                    <th>Edward Wood</th>--}}
                                                {{--                                                    <td class="text-center">M</td>--}}
                                                {{--                                                    <td class="text-center">6080734</td>--}}
                                                {{--                                                    <td class="text-center">Valid</td>--}}
                                                {{--                                                    <td class="text-center">10 years</td>--}}
                                                {{--                                                    <td>Trauma & Orthopaedics</td>--}}
                                                {{--                                                    <td>St Helens Hospital</td>--}}
                                                {{--                                                    <td>Trauma & Orthopaedics</td>--}}
                                                {{--                                                </tr>--}}
                                                {{--                                                @endforeach--}}

                                                </tbody>
                                            </table>
                                            {{--                                            Grosvenor Nuffield --}}
                                        @elseif($d['location_id'] === '1-115574737')
                                            <table id="main-table" class="main-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Name</th>
                                                        <th scope="col" class="text-center">Gender</th>
                                                        <th scope="col" class="text-center">GMC Code</th>
                                                        <th scope="col" class="text-center">Licensed</th>
                                                        <th scope="col" class="text-center">Years Registered</th>
                                                        <th scope="col">Procedures Performed</th>
                                                        <th scope="col" width="300">Specialisms</th>
                                                        <th scope="col">Also Practicing At</th>
                                                        {{--                                                    <th scope="col">History</th>--}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Asad Syed</th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center">5202732</td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center">19	Years</td>{{-- Years Registered --}}
                                                        <td>5 Procedures</td>{{-- Procedures Performed --}}
                                                        <td>Total Knee Replacement
                                                            Total Hip Replacement</td>{{-- Specialisms --}}
                                                        <td>-</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>
                                                    <tr>
                                                        <th>Paramasivam Sathyamoorthy</th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center">4481515</td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center">22	Years</td>{{-- Years Registered --}}
                                                        <td>37 Procedures</td>{{-- Procedures Performed --}}
                                                        <td>Total Hip Replacement
                                                            Total Shoulder Replacement</td>{{-- Specialisms --}}
                                                        <td>-</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>

                                                    <tr>
                                                        <th>Narendra Kumar Rath</th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center">6076738</td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center">19	Years</td>{{-- Years Registered --}}
                                                        <td>319 Procedures</td>{{-- Procedures Performed --}}
                                                        <td>Spinal Surgery</td>{{-- Specialisms --}}
                                                        <td>The Walton Centre</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>
                                                    <tr>
                                                        <th>Ibrahim Malek</th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center">5207226</td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center"></td>{{-- Years Registered --}}
                                                        <td>202 Procedures</td>{{-- Procedures Performed --}}
                                                        <td>Total Hip Replacement<br/>
                                                            Total Knee Replacement</td>{{-- Specialisms --}}
                                                        <td>-</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>
                                                    <tr>
                                                        <th>David Machin</th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center">6053053</td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center">16	Years</td>{{-- Years Registered --}}
                                                        <td>0 Procedures</td>{{-- Procedures Performed --}}
                                                        <td>Total Hip Replacement<br/>
                                                            Total Knee Replacement</td>{{-- Specialisms --}}
                                                        <td>Whiston Hospital</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>
                                                    <tr>
                                                        <th>Stephen Lipscombe</th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center">6053053</td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center">17	Years</td>{{-- Years Registered --}}
                                                        <td>5 Procedures</td>{{-- Procedures Performed --}}
                                                        <td>Total Hip Replacement<br/>
                                                            Total Knee Replacement</td>{{-- Specialisms --}}
                                                        <td>-</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>
                                                    <tr>
                                                        <th>Tamas Kustos</th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center">6096591</td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center">16	Years</td>{{-- Years Registered --}}
                                                        <td>176 Procedures</td>{{-- Procedures Performed --}}
                                                        <td>Total Hip Replacement<br/>
                                                            Total Knee Replacement</td>{{-- Specialisms --}}
                                                        <td>-</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>
                                                    <tr>
                                                        <th>Hussain Anthony Kazi</th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center">6053270</td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center">18	Years</td>{{-- Years Registered --}}
                                                        <td>18 Years</td>{{-- Procedures Performed --}}
                                                        <td>Total Hip Replacement<br/>
                                                            Total Knee Replacement</td>{{-- Specialisms --}}
                                                        <td>Victoria Infirmary</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>
                                                    <tr>
                                                        <th>Mayur Chawda</th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center">4578972</td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center">22	Years</td>{{-- Years Registered --}}
                                                        <td>662 Procedures</td>{{-- Procedures Performed --}}
                                                        <td>Total Hip Replacement<br/>
                                                            Total Knee Replacement<br/>
                                                            Unicondylar Knee Replacement</td>{{-- Specialisms --}}
                                                        <td>-</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>
                                                    <tr>
                                                        <th>Adrian Fintan Carroll</th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center">4200172</td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center">24	Years</td>{{-- Years Registered --}}
                                                        <td>708 Procedures</td>{{-- Procedures Performed --}}
                                                        <td>Total Hip Replacement<br/>
                                                            Total Knee Replacement<br/>
                                                            Unicondylar Knee Replacement<br/>
                                                            Total Shoulder Replacement</td>{{-- Specialisms --}}
                                                        <td>Arrowe Park Hospital</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>
                                                    <tr>
                                                        <th>Vladimir Bobic</th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center">3636149</td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center">28	Years</td>{{-- Years Registered --}}
                                                        <td>23 Procedures</td>{{-- Procedures Performed --}}
                                                        <td>Total Knee Replacement</td>{{-- Specialisms --}}
                                                        <td>-</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>
                                                    <tr>
                                                        <th>Nick Boyce-Cam</th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center">4716730</td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center">19	Years</td>{{-- Years Registered --}}
                                                        <td>389 Procedures</td>{{-- Procedures Performed --}}
                                                        <td>Total Hip Replacement<br/>
                                                            Total Knee Replacement<br/>
                                                            Unicondylar Knee Replacement</td>{{-- Specialisms --}}
                                                        <td>Leighton Hospital</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>
                                                    <tr>
                                                        <th></th>{{-- Name --}}
                                                        <td class="text-center">M</td>{{-- Gender --}}
                                                        <td class="text-center"></td>{{-- GMC code --}}
                                                        <td class="text-center">Valid</td>{{-- Licensed --}}
                                                        <td class="text-center"></td>{{-- Years Registered --}}
                                                        <td></td>{{-- Procedures Performed --}}
                                                        <td></td>{{-- Specialisms --}}
                                                        <td>-</td>{{-- Also Practicing At --}}
                                                        {{--                                                    <td></td>--}}{{-- --}}
                                                    </tr>
{{--                                                    <tr>--}}
{{--                                                        <th></th>--}}{{-- Name --}}
{{--                                                        <td class="text-center">M</td>--}}{{-- Gender --}}
{{--                                                        <td class="text-center"></td>--}}{{-- GMC code --}}
{{--                                                        <td class="text-center">Valid</td>--}}{{-- Licensed --}}
{{--                                                        <td class="text-center"></td>--}}{{-- Years Registered --}}
{{--                                                        <td></td>--}}{{-- Procedures Performed --}}
{{--                                                        <td></td>--}}{{-- Specialisms --}}
{{--                                                        <td>-</td>--}}{{-- Also Practicing At --}}
{{--                                                        --}}{{--                                                    <td></td>--}}{{----}}{{-- --}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <th></th>--}}{{-- Name --}}
{{--                                                        <td class="text-center">M</td>--}}{{-- Gender --}}
{{--                                                        <td class="text-center"></td>--}}{{-- GMC code --}}
{{--                                                        <td class="text-center">Valid</td>--}}{{-- Licensed --}}
{{--                                                        <td class="text-center"></td>--}}{{-- Years Registered --}}
{{--                                                        <td></td>--}}{{-- Procedures Performed --}}
{{--                                                        <td></td>--}}{{-- Specialisms --}}
{{--                                                        <td>-</td>--}}{{-- Also Practicing At --}}
{{--                                                        --}}{{--                                                    <td></td>--}}{{----}}{{-- --}}
{{--                                                    </tr>--}}
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane"
                             id="map_{{ $id }}"
                             role="tabpanel"
                             aria-labelledby="map-tab">
                            <div class="row">
                                <div class="corporate-content-details d-flex col col-12 col-md-2 mb-3">
                                    <div class="address">
                                        {!! $address !!}
                                    </div>
                                </div>
                                <div class="col col-12 col-md-10">
                                    <div
                                        id="gmap_{{ $id }}"
                                        class="map-container"
                                        style="height: 400px"
                                        data-longitude="{{ $longitude }}"
                                        data-latitude="{{ $latitude }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                    <div class="tab-pane col-6 d-none" id="treatments_{{ $id }}" role="tabpanel"--}}
                        {{--                         aria-labelledby="treatments-tab">--}}
                        {{--                        <p class=" SofiaPro-SemiBold">Our hospitals are equipped with state of the art--}}
                        {{--                            facilities and are focused on providing--}}
                        {{--                            high quality healthcare. Each hospital boasts of having the latest equipment, available--}}
                        {{--                            facilities include:</p>--}}
                        {{--                        <form action="" class="mb-3">--}}
                        {{--                            <div class="bg-turq rounded p-4">--}}
                        {{--                                <div class="form-child full-left d-flex">--}}
                        {{--                                    @include('components.basic.select', [--}}
                        {{--                                        'showLabel'             => true,--}}
                        {{--                                        'selectClass'           => 'distance-dropdown',--}}
                        {{--                                        'options'               => $procedures,--}}
                        {{--                                        'labelClass'            => 'text-white font-18 pr-3 SofiaPro-Medium',--}}
                        {{--                                        'selectParentClass'       => 'd-md-flex select_half-width w-100',--}}
                        {{--                                        'placeholder'           => 'Check to see if your treatment is available at this hospital',--}}
                        {{--                                        'name'                  =>'radius'])--}}
                        {{--                                    --}}{{--                                <a tabindex="0" data-offset="30px 40px"--}}
                        {{--                                    --}}{{--                                   class="help-link"--}}
                        {{--                                    --}}{{--                                    @include('components.basic.popover', [--}}
                        {{--                                    --}}{{--                                    'dismissible'   => true,--}}
                        {{--                                    --}}{{--                                    'placement'      => 'top',--}}
                        {{--                                    --}}{{--                                    'size'           => 'large',--}}
                        {{--                                    --}}{{--                                    'html'           => 'true',--}}
                        {{--                                    --}}{{--                                    'trigger'        => 'focus',--}}
                        {{--                                    --}}{{--                                    'content'        => '<p class="bold mb-0">--}}
                        {{--                                    --}}{{--                                                     Distance--}}
                        {{--                                    --}}{{--                                                 </p>--}}
                        {{--                                    --}}{{--                                                 <p>--}}
                        {{--                                    --}}{{--                                                     Select how far you would be willing to travel for your treatment.--}}
                        {{--                                    --}}{{--                                                 </p>--}}
                        {{--                                    --}}{{--                                                 <p>--}}
                        {{--                                    --}}{{--                                                     <a  class="btn btn-close btn-close__small btn-brand-primary-1 btn-icon" >Close</a>--}}
                        {{--                                    --}}{{--                                                 </p>'])--}}
                        {{--                                    --}}{{--                                >' . file_get_contents(asset('/images/icons/question.svg')) . '</a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </form>--}}
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-12">--}}
                        {{--                                <p class=" SofiaPro-SemiBold">Intro text for column area</p>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-6">--}}
                        {{--                                <ul class="blue-dot blue-dot_small">--}}
                        {{--                                    <li>First thing</li>--}}
                        {{--                                    <li>Second thing</li>--}}
                        {{--                                    <li>Third thing</li>--}}
                        {{--                                    <li>Fourth thing</li>--}}
                        {{--                                    <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth--}}
                        {{--                                        thing--}}
                        {{--                                        Fifth thing--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-6">--}}
                        {{--                                <ul class="blue-dot blue-dot_small">--}}
                        {{--                                    <li>First thing</li>--}}
                        {{--                                    <li>Second thing</li>--}}
                        {{--                                    <li>Third thing</li>--}}
                        {{--                                    <li>Fourth thing</li>--}}
                        {{--                                    <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth--}}
                        {{--                                        thing--}}
                        {{--                                        Fifth thing--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="media-pane col-6 d-none">--}}
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-5">--}}
                        {{--                            <!--Carousel Wrapper-->--}}
                        {{--                                <div class="carousel-wrapper position-relative">--}}
                        {{--                                    <div id="carousel-thumb_{{ $id }}"--}}
                        {{--                                         class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel"--}}
                        {{--                                         data-interval="false">--}}
                        {{--                                        <!--Slides-->--}}
                        {{--                                        <div class="carousel-inner" role="listbox">--}}
                        {{--                                            <div class="carousel-item active" style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">--}}
                        {{--                                                <img class="d-block h-100 content"--}}
                        {{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                     alt="First slide">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="carousel-item" style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">--}}
                        {{--                                                <img class="d-block h-100 content"--}}
                        {{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                     alt="First slide">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="carousel-item" style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">--}}
                        {{--                                                <img class="d-block h-100 content"--}}
                        {{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                     alt="First slide">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="carousel-item" style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">--}}
                        {{--                                                <img class="d-block h-100 content"--}}
                        {{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                     alt="First slide">--}}
                        {{--                                            </div>--}}

                        {{--                                        </div>--}}
                        {{--                                        <!--/.Slides-->--}}
                        {{--                                        <!--Controls-->--}}
                        {{--                                        <a class="carousel-control-prev" href="#carousel-thumb_{{ $id }}" role="button"--}}
                        {{--                                           data-slide="prev">--}}
                        {{--                                            <span class="carousel-control-prev-icon" aria-hidden="true">@svg('chevron-left')</span>--}}
                        {{--                                            <span class="sr-only">Previous</span>--}}
                        {{--                                        </a>--}}
                        {{--                                        <a class="carousel-control-next" href="#carousel-thumb_{{ $id }}" role="button"--}}
                        {{--                                           data-slide="next">--}}
                        {{--                                            <span class="carousel-control-next-icon" aria-hidden="true">@svg('chevron-right')</span>--}}
                        {{--                                            <span class="sr-only">Next</span>--}}
                        {{--                                        </a>--}}

                        {{--                                    </div><!--/.Carousel Wrapper-->--}}
                        {{--                                    <!--/.Controls-->--}}
                        {{--                                    <ol class="_carousel-indicators indicators row">--}}
                        {{--                                        <li data-target="#carousel-thumb" data-slide-to="0" class="active col-3">--}}
                        {{--                                            <div class="col-inner">--}}
                        {{--                                                <img class="d-block h-100"--}}
                        {{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                     alt="Thumbnail image for first slide">--}}
                        {{--                                            </div>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li data-target="#carousel-thumb" data-slide-to="1" class="col-3">--}}
                        {{--                                            <div class="col-inner">--}}
                        {{--                                                <img class="d-block h-100"--}}
                        {{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                     alt="Thumbnail image for seconf slide">--}}
                        {{--                                            </div>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li data-target="#carousel-thumb" data-slide-to="2" class="col-3">--}}
                        {{--                                            <div class="col-inner">--}}
                        {{--                                                <img class="d-block h-100"--}}
                        {{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                     alt="Thumbnail image for third slide">--}}
                        {{--                                            </div>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li data-target="#carousel-thumb" data-slide-to="3" class="col-3">--}}
                        {{--                                            <div class="col-inner">--}}
                        {{--                                                <img class="d-block h-100"--}}
                        {{--                                                     src="/images/alder-1.jpg"--}}
                        {{--                                                     alt="Thumbnail image for fourth slide">--}}
                        {{--                                            </div>--}}
                        {{--                                        </li>--}}
                        {{--                                    </ol>--}}
                        {{--                                    @include('components.basic.modalbutton', [--}}
                        {{--                                        'classTitle'        => 'stretched-link',--}}
                        {{--                                        'id'                => 'modal_trigger_' . $id,--}}
                        {{--                                        'modalTarget'       => '#hc_modal_carousel_'. $id,--}}
                        {{--                                        'buttonText'        => '',--}}
                        {{--                                        ])--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            @if(!empty($specialOffers))--}}
                        {{--                                <div class="col-7">--}}
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

                        {{--                                    <div class="special-offers-tab bg-blue-grad rounded d-flex flex-column">--}}
                        {{--                                        <p class="special-offer-title text-white font-22 SofiaPro-SemiBold">Special--}}
                        {{--                                            Offer</p>--}}
                        {{--                                        <ul class="bullets">--}}
                        {{--                                            @foreach($bulletPoints as $bulletPoint)--}}
                        {{--                                                @if(!empty($bulletPoint))--}}
                        {{--                                                    <li class="text-white">{{ $bulletPoint }}</li>--}}
                        {{--                                                @endif--}}
                        {{--                                            @endforeach--}}
                        {{--                                        </ul>--}}
                        {{--                                        <div class="btn-area w-100 text-right">--}}
                        {{--                                            @include('components.basic.modalbutton', [--}}
                        {{--                                               'hospitalType'      => $NHSClass,--}}
                        {{--                                               'hrefValue'         => $url,--}}
                        {{--                                               'hospitalTitle'     => $title,--}}
                        {{--                                               'modalTarget'       => '#hc_modal_enquire_private',--}}
                        {{--                                               'classTitle'        => 'btn btn-icon btn-enquire-now enquiry mt-auto ml-auto',--}}
                        {{--                                               'target'            => 'blank',--}}
                        {{--                                               'buttonText'        => 'Enquire now',--}}
                        {{--                                               'hospitalIds'       => $id,--}}
                        {{--                                               'id'                => 'enquire_special_'.$id])--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            @endif--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>{{-- End of container --}}
</div>{{-- End of corporate content area  --}}
{{--@include('components.modals.modalCarousel', [--}}
{{--    'id' => $id,--}}
{{--    'carouselContent'   => '        <div class="carousel-wrapper position-relative">--}}
{{--                                        <div id="carousel-thumb_modal_' . $id .'"--}}
{{--                                             class="carousel slide carousel-slide carousel-thumbnails" data-ride="carousel" data-interval="false">--}}
{{--                                            <!--Slides-->--}}
{{--                                            <div class="carousel-inner" role="listbox">--}}
{{--                                                <div class="carousel-item active" style="background-image: url(\'/images/alder-1.jpg\')"></div>--}}
{{--                                                <div class="carousel-item" style="background-image: url(\'/images/alder-1.jpg\')"></div>--}}
{{--                                                <div class="carousel-item" style="background-image: url(\'/images/alder-1.jpg\')"></div>--}}
{{--                                                <div class="carousel-item" style="background-image: url(\'/images/alder-1.jpg\')"></div>--}}
{{--                                            </div>--}}
{{--                                            <!--/.Slides-->--}}
{{--                                            <!--Controls-->--}}
{{--                                            <a class="carousel-control-prev carousel-control" href="#carousel-thumb_modal_'. $id .'" role="button"--}}
{{--                                               data-slide="prev">--}}
{{--                                                <span class="carousel-control-prev-icon" aria-hidden="true">' . file_get_contents(asset('/images/icons/carousel-left.svg')) . '</span>--}}
{{--                                            </a>--}}
{{--                                            <a class="carousel-control-next carousel-control" href="#carousel-thumb_modal_'. $id .'" role="button"--}}
{{--                                               data-slide="next">--}}
{{--                                                <span class="carousel-control-next-icon" aria-hidden="true">' . file_get_contents(asset('/images/icons/carousel-right.svg')) . ' </span>--}}
{{--                                                <span class="sr-only">Next</span>--}}
{{--                                            </a>--}}

{{--                                        </div>--}}
{{--                                        <!--/.Controls-->--}}
{{--                                        <ol class="_carousel-indicators indicators row mb-0">--}}
{{--                                            <li data-target="#carousel-thumb_modal_'. $id .'" data-slide-to="0" class="active col-3">--}}
{{--                                                <div class="col-inner" style="background-image: url(\'/images/alder-1.jpg\')">--}}
{{--                                                    <img class="d-block h-100"--}}
{{--                                                         src="/images/alder-1.jpg"--}}
{{--                                                         alt="Thumbnail image for first slide">--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li data-target="#carousel-thumb_modal_'. $id .'" data-slide-to="1" class="col-3">--}}
{{--                                                <div class="col-inner" style="background-image: url(\'/images/alder-1.jpg\')">--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li data-target="#carousel-thumb_modal_'. $id .'" data-slide-to="2" class="col-3">--}}
{{--                                                <div class="col-inner" style="background-image: url(\'/images/alder-1.jpg\')">--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li data-target="#carousel-thumb_modal_'. $id .'" data-slide-to="3" class="col-3">--}}
{{--                                                <div class="col-inner" style="background-image: url(\'/images/alder-1.jpg\')">--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ol>--}}
{{--                                    </div><!--/.Carousel Wrapper-->--}}
{{--                                    '])--}}
