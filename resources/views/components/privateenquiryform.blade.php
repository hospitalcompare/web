<div class="modal-inner">
    <p class="text-center font-24 SofiaPro-Medium text-white private-modal-enquiry-title">Enquire now for <span class="hospital-title">this hospital</span></p>
    <p class="text-white text-center private-modal-enquiry-description">
        Complete this form and we'll pass your enquiry onto this hospital immediately.<br>You can normally expect a response within three to four days.
    </p>
    <div class="form-wrap d-flex flex-wrap">
        <div class="img-wrap">
            <img width="173" height="158" src="images/alder-1.jpg">
        </div>
        <form id="enquiry_form">
            {{--            <input type="hidden" name="specialty_id" value="3">--}}
            <input type="hidden" name="hospital_id" value="1">
            <p class="your-details text-white">Your Details</p>
            <div class="form-group row align-items-end mb-0">
                <div class="col col-6">
                    @include('components.basic.select', [
                        'options' => [
                            ['id'=>'Mr', 'name'=>'Mr'],
                            ['id'=>'Mrs', 'name'=>'Mrs'],
                            ['id'=>'Miss', 'name'=>'Miss'],
                            ['id'=>'Ms', 'name'=>'Ms'],
                            ['id'=>'Dr', 'name'=>'Dr'],
                            ['id'=>'Prof.', 'name'=>'Prof.'],
                            ['id'=>'Rev.', 'name'=>'Rev.']
                        ],
                        'svg'           => 'chevron-down',
                        'selectClass' => 'form-control',
                        'placeholder' => 'Title*',
                        'name'=>'title',
                        'labelClass' => 'labelClass'])
                </div>
                <div class="col col-6">
                    {{-- First name --}}
                    <input required name="first_name" type="text" class="form-control" id="firstName"
                           placeholder="First Name*" value="{{ !empty($firstName) ? $firstName : '' }}" />
                </div>

            </div>
            <div class="form-group row align-items-end mb-0">
                {{-- Last name --}}
                <div class="col col-6">
                    <input required name="last_name" type="text" class="form-control" id="lastName"
                           placeholder="Last Name*" value="{{ !empty($lastName) ? $lastName : '' }}">
                </div>
                <div class="col col-6">
                    <input required name="phone_number" type="text" class="form-control" id="phoneNumber"
                           placeholder="Phone Number*" value="{{ !empty($phone) ? $phone : '' }}" />
                </div>
                {{-- DOB - the field to select dob--}}
{{--                <div class="col col-6">--}}
{{--                    <input readonly="readonly" required name="dob" class="form-control" id="dateOfBirth"--}}
{{--                           placeholder="DOB* (DD/MM/YYYY)" >--}}
{{--                    --}}{{-- DOB- hidden field to submit different format for backend validation --}}
{{--                    <input type="hidden" id="actualDate" name="date_of_birth">--}}
{{--                </div>--}}
            </div> {{-- end row --}}
                {{-- Email address --}}
            <div class="form-group row align-items-end mb-0">
                <div class="col col-6">
                    <input required name="email" type="email" class="form-control" id="email"
                           placeholder="Email Address*" value="{{ !empty($email) ? $email : '' }}" />
                </div>
                <div class="col col-6">
                    <input required name="confirm_email" type="email" class="form-control" id="confirmEmail"
                           placeholder="Confirm Email Address*" value="{{ !empty($email) ? $email : '' }}" />
                </div>
            </div>
            <div class="form-group row align-items-end mb-0">
                <div class="col col-6">
                    <input required name="postcode" type="text" class="form-control" id="postcode"
                           placeholder="Postcode*" value="{{ !empty($postcode) ? $postcode : '' }}" />
                </div>
            </div>
            <p class="your-details text-white">Your Treatment</p>
            <div class="form-group row align-items-end mb-0">
                <div class="col col-12">
                    @include('components.basic.select', [
                        'options'               => $procedures,
                        'svg'                   => 'chevron-down',
                        'selectClass'           => 'select-picker',
                        'placeholder'           => 'Surgery Type',
                        'group'                 => true,
                        'groupName'             => 'procedures',
                        'suboptionClass'        => 'subprocedures',
                        'name'                  =>'procedure_id',
                        'selectPicker'          => 'true',
                        'labelClass'          => 'labelClass',
                        'required'              => true])
                </div>
            </div>
            <div class="form-group row align-items-end">
{{--                <div class="col col-12">--}}
{{--                    Reason for contact --}}
{{--                    @include('components.basic.select', [--}}
{{--                            'options'               => [--}}
{{--                                ['id'=>'waiting_time_nhs_funded', 'name'=>'Likely waiting time for NHS funded treatment'],--}}
{{--                                ['id'=>'price_range', 'name'=>'Likely price range for treatment'],--}}
{{--                                ['id'=>'waiting_time_self_pay', 'name'=>'Likely waiting time for self-pay'],--}}
{{--                                ['id'=>'consultants', 'name'=>'My choice of consultants for self-pay']--}}
{{--                            ],--}}
{{--                            'selectId'              => 'reason_for_contact',--}}
{{--                            'selectClass'           => 'form-control',--}}
{{--                            'svg'                   => 'chevron-down',--}}
{{--                            'placeholder'           => 'Reason for contact',--}}
{{--                            'name'                  =>'reason_for_contact',--}}
{{--                            'selectPicker'          => 'true',--}}
{{--                            'required'              => true])--}}

{{--                </div>--}}
                <div class="col col-12" id="col_additional_information">
                    <textarea
                        class=""
                        name="additional_information"
                        placeholder="Additional Comments"
                        id="additional_information"
                        rows="5"
                    ></textarea>
                </div>

                <div class="col col-12 checkbox">
                    <input required name="gdpr" type="checkbox"
                           id="gdpr" {{ !empty($gdpr) && ($gdpr) ? 'checked' : '' }} />
                    <label class="small-print" for="gdpr">Please accept the Terms & Conditions before submitting the
                        form.</label>
                </div>
                <div class="col col-12 btn-area text-right">
                    @include('components.basic.button', [
                        'buttonText'            => 'Make an enquiry',
                        'id'                => 'btn_submit',
                        'classTitle'        => 'btn btn-icon btn-blue btn-grad btn-enquire-private-hospital',
                        'svg'               => 'circle-check'])
                </div>
            </div>
        </form>
    </div>
</div>

