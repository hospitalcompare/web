<div class="modal-inner">

    <h3 class="text-center text-white">Enquire now for <span class="hospital-title">this hospital</span></h3>
    <p class="text-white text-center"></p>
    <div class="form-wrap d-flex">
        <div class="img-wrap mr-4">
            <img width="173" height="158" src="images/alder-1.png">
        </div>
        <form id="enquiry_form">
            {{--            <input type="hidden" name="specialty_id" value="3">--}}
            <input type="hidden" name="hospital_id" value="1">
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
                        'chevronFAClassName' => 'fa-chevron-down black-chevron',
                        'selectClass' => 'form-control',
                        'placeholder' => 'Title*',
                        'name'=>'title',
                        'resultsLabel' => 'resultsLabel'])
                </div>
            </div>
            <div class="form-group row align-items-end mb-0">
                {{-- First name --}}
                <div class="col col-6">
                    <input required name="first_name" type="text" class="form-control" id="firstName"
                           placeholder="First Name*" value="{{ !empty($firstName) ? $firstName : '' }}">
                </div>
                {{-- Last name --}}
                <div class="col col-6">
                    <input required name="last_name" type="text" class="form-control" id="lastName"
                           placeholder="Last Name*" value="{{ !empty($lastName) ? $lastName : '' }}">
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
                           placeholder="Email Address*" value="{{ !empty($email) ? $email : '' }}">
                </div>
                <div class="col col-6">
                    <input required name="confirm_email" type="email" class="form-control" id="confirmEmail"
                           placeholder="Confirm Email Address*" value="{{ !empty($email) ? $email : '' }}">
                </div>
            </div>
            <div class="form-group row align-items-end mb-0">
                <div class="col col-6">
                    <input required name="phone_number" type="text" class="form-control" id="phoneNumber"
                           placeholder="Phone Number*" value="{{ !empty($phone) ? $phone : '' }}">
                </div>
                <div class="col col-6">
                    <input required name="postcode" type="text" class="form-control" id="postcode"
                           placeholder="Postcode*" value="{{ !empty($postcode) ? $postcode : '' }}">
                </div>
            </div>
            <div class="form-group row align-items-end mb-0">
                <div class="col col-12">
                    @include('components.basic.select', [
                        'options'               => $procedures,
                        'chevronFAClassName'    => 'fa-chevron-down black-chevron',
                        'selectClass'           => 'select-picker',
                        'placeholder'           => 'Surgery Type',
                        'group'                 => true,
                        'groupName'             => 'procedures',
                        'suboptionClass'        => 'subprocedures',
                        'name'                  =>'procedure_id',
                        'selectPicker'          => 'true',
                        'resultsLabel'          => 'resultsLabel',
                        'required'              => true])
                </div>
            </div>
            <div class="form-group row align-items-end">
                <div class="col col-12">
{{--                    Reason for contact --}}
                    @include('components.basic.select', [
                            'options'               => [
                                ['id'=>'waiting_time_nhs_funded', 'name'=>'Likely waiting time for NHS funded treatment'],
                                ['id'=>'price_range', 'name'=>'Likely price range for treatment'],
                                ['id'=>'waiting_time_self_pay', 'name'=>'Likely waiting time for self-pay'],
                                ['id'=>'consultants', 'name'=>'My choice of consultants for self-pay']
                            ],
                            'selectId'              => 'reason_for_contact',
                            'chevronFAClassName'    => 'fa-chevron-down black-chevron',
                            'selectClass'           => 'form-control',
                            'placeholder'           => 'Reason for contact',
                            'name'                  =>'reason_for_contact',
                            'selectPicker'          => 'true',
                            'required'              => true])

                </div>
                <div class="col col-12" id="col_additional_information">
                    <textarea
                        class=""
                        name="additional_information"
                        placeholder="Additional information"
                        id="additional_information"
                        rows="5"
                    ></textarea>
                </div>

                <div class="col col-12 checkbox">
                    <input required name="gdpr" type="checkbox"
                           id="gdpr" {{ !empty($gdpr) && ($gdpr) ? 'checked' : '' }}>
                    <label class="small-print" for="gdpr">Please accept the Terms & Conditions before submitting the
                        form.</label>
                </div>
                <div class="col-12 btn-area text-center">
                    <a id="btn_submit" class="btn btn-icon btn-blue btn-enquire">Make an enquiry</a>
                    {{--                    <input type="submit" id="btn_submit" class="btn btn-icon btn-blue btn-enquire" value="Make an enquiry" />--}}
                </div>
            </div>
        </form>
    </div>
</div>

