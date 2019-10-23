{{-- Corporate content area --}}
<div class="corporate-content w-100" id="corporate_content_hospital_{{$id}}">
    <div class="d-flex">
        <div class="corporate-content-section-1"></div>
        <div class="corporate-content-section-2">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="nav-tabs_{{ $id }}" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="profile-tab_{{ $id }}" data-toggle="tab" href="#profile_{{ $id }}"
                       role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="treatments-tab_{{ $id }}" data-toggle="tab"
                       href="#treatments_{{ $id }}" role="tab" aria-controls="home" aria-selected="true">Treatments</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content row">
                <div class="tab-pane col-6 active" id="profile_{{ $id }}" role="tabpanel" aria-labelledby="profile-tab">
                    <p class="SofiaPro-SemiBold col-greydarkest">Situated in London, this hospital provides private patients with outstanding medical
                        services. Both self paying and private medically insured patients will be treated using
                        the latest techniques in a modern and calming hospital. With a team of expert
                        specialists patients can get treatment for a range of hip, knee, spinal and foot and
                        ankle conditions.</p>
                    <p class="col-greydarkest">Our hospitals are equipped with state of the art facilities and are focused on providing
                        high quality healthcare. Each hospital boasts of having the latest equipment, available
                        facilities include:</p>
                    <div class="row">
                        <div class="col-6">
                            <p class="col-greydarkest SofiaPro-SemiBold">First list</p>
                            <ul>
                                <li>First thing</li>
                                <li>Second thing</li>
                                <li>Third thing</li>
                                <li>Fourth thing</li>
                                <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing
                                    Fifth thing
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <p class="col-greydarkest SofiaPro-SemiBold">Second list</p>
                            <ul>
                                <li>First thing</li>
                                <li>Second thing</li>
                                <li>Third thing</li>
                                <li>Fourth thing</li>
                                <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane col-7" id="treatments_{{ $id }}" role="tabpanel"
                     aria-labelledby="treatments-tab">
                    <p>Our hospitals are equipped with state of the art facilities and are focused on providing
                        high quality healthcare. Each hospital boasts of having the latest equipment, available
                        facilities include:</p>
                    <div class="bg-teal rounded p-4">
                        <div class="form-child full-left d-flex">
                            @include('components.basic.select', [
                                'showLabel'             => true,
                                'selectClass'           => 'distance-dropdown',
                                'options'               => $procedures,
                                'labelClass'          => 'text-white font-18 pr-3 SofiaPro-Medium',
                                'selectClassName'       => 'd-md-flex select_half-width w-100',
                                'placeholder'           => 'Check to see if your treatment is available at this hospital',
                                'chevronFAClassName'    => '',
                                'name'=>'radius'])
                            <a tabindex="0" data-offset="30px, 40px"
                               class="help-link"
                                @include('components.basic.popover', [
                                'dismissible'   => true,
                                'placement'      => 'top',
                                'size'           => 'large',
                                'html'           => 'true',
                                'trigger'        => 'focus',
                                'content'        => '<p class="bold mb-0">
                                                 Distance
                                             </p>
                                             <p>
                                                 Select how far you would be willing to travel for your treatment.
                                             </p>
                                             <p>
                                                 <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                             </p>'])
                            >?</a>
                        </div>
                    </div>
                    <p>First list</p>
                    <ul>
                        <li>First thing</li>
                        <li>Second thing</li>
                        <li>Third thing</li>
                        <li>Fourth thing</li>
                        <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing
                            Fifth thing
                        </li>
                    </ul>
                    <ul>
                        <li>First thing</li>
                        <li>Second thing</li>
                        <li>Third thing</li>

                        <li>Fourth thing</li>
                        <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing
                            Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing
                            Fifth thing
                        </li>
                    </ul>
                </div>
                <div class="media-pane col-5">
                    Images and videos here
                </div>
            </div>
        </div>
        <div class="corporate-content-section-3"></div>
    </div>
</div>
{{-- End of corporate content area  --}}
