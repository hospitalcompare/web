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
                {{-- First name --}}
                <div class="col col-6">
                    <input required name="first_name" type="text" class="form-control" id="firstName"
                           placeholder="First Name*" value="{{ !empty($firstName) ? $firstName : '' }}">
                </div>

            </div>
            <div class="form-group row align-items-end mb-0">
                {{-- Last name --}}
                <div class="col col-6">
                    <input required name="last_name" type="text" class="form-control" id="lastName"
                           placeholder="Last Name*" value="{{ !empty($lastName) ? $lastName : '' }}">
                </div>
                {{-- DOB - the field to select dob--}}
                <div class="col col-6">
                    <input readonly="readonly" required name="dob" class="form-control" id="dateOfBirth"
                           placeholder="DOB* (DD/MM/YYYY)" >
                    {{-- DOB- hidden field to submit different format for backend validation --}}
                    <input type="hidden" id="actualDate" name="date_of_birth">
                </div>
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
            <div class="form-group row align-items-end">
                <div class="col col-6">
                    @include('components.basic.select', [
                        'options'               => $procedures,
                        'chevronFAClassName'    => 'fa-chevron-down black-chevron',
                        'selectClass'           => 'selectpicker',
                        'placeholder'           => 'Surgery Type',
                        'name'                  =>'procedure_id',
                        'selectPicker'          => 'true',
                        'resultsLabel'          => 'resultsLabel',
                        'required'              => true])
                </div>
            </div>
            <div class="form-group row align-items-end">
                <div class="col col-12"><p class="text-white m-0">Please confirm:</p></div>
                <div class="col col-12 checkbox">
                    <input name="waiting_time" type="checkbox" id="waiting_times">
                    <label for="waiting_times">the likely waiting time for an NHS funded referral, should treatment be
                        necessary.</label>
                </div>
                <div class="col col-12 checkbox">
                    <input name="price" type="checkbox" id="prices">
                    <label for="prices">the likely price range for treatment (if self pay).</label>
                </div>
                <div class="col col-12 checkbox">
                    <input name="waiting_time_self" type="checkbox" id="waiting_times_self">
                    <label for="waiting_times_self">the likely waiting time for self-pay.</label>
                </div>
                <div class="col col-12 checkbox">
                    <input name="consultants" type="checkbox" id="consultants">
                    <label for="consultants">my choice of consultants for self-pay.</label>
                </div>
                {{--                <div class="col col-12 checkbox">--}}
                {{--                    <input required name="other" type="checkbox" id="other">--}}
                {{--                    <label for="other">Something else</label>--}}
                {{--                </div>--}}
                <div class="col col-12" id="col_additional_information">
                    <textarea
                        class=""
                        name="additional_information"
                        placeholder="Additional information"
                        id="additional_information"
                        rows="5"
                    ></textarea>
                </div>

                <div class="col col-6 checkbox">
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

