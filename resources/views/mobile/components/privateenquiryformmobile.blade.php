<div class="modal-body p-3">
    <p class="text-center font-24 SofiaPro-Medium private-modal-enquiry-title">Enquire now for <span
            class="hospital-title">this hospital</span></p>
    <p class="text-center private-modal-enquiry-description col-grey">
        Complete this form and we'll pass your enquiry onto this hospital immediately.<br>You can normally expect a
        response within three to four days.
    </p>
    <div class="form-wrap d-flex flex-wrap">
        <form id="enquiry_form" class="w-100">
            {{--            <input type="hidden" name="specialty_id" value="3">--}}
            <input type="hidden" name="hospital_id" value="1">
            <p class="your-details mb-2 SofiaPro-Medium">Step 1: Enter your details</p>
            <div class="form-group ">
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
            <div class="form-group">
                {{-- First name --}}
                <input required name="first_name" type="text" class="form-control" id="firstName"
                       placeholder="First Name*" value="{{ !empty($firstName) ? $firstName : '' }}"/>
            </div>
            <div class="form-group">
                {{-- Last name --}}
                <input required name="last_name" type="text" class="form-control" id="lastName"
                       placeholder="Last Name*" value="{{ !empty($lastName) ? $lastName : '' }}">
            </div> {{-- end row --}}
            <div class="form-group">
                <input required name="phone_number" type="text" class="form-control" id="phoneNumber"
                       placeholder="Phone Number*" value="{{ !empty($phone) ? $phone : '' }}"/>
            </div>
            {{-- Email address --}}
            <div class="form-group">
                <input required name="email" type="email" class="form-control" id="email"
                       placeholder="Email Address*" value="{{ !empty($email) ? $email : '' }}"/>
            </div>
            <div class="form-group">
                <input required name="confirm_email" type="email" class="form-control" id="confirmEmail"
                       placeholder="Confirm Email Address*" value="{{ !empty($email) ? $email : '' }}"/>
            </div>
            <div class="form-group">
                <input required name="postcode" type="text" class="form-control" id="postcode"
                       placeholder="Postcode*" value="{{ !empty($postcode) ? $postcode : '' }}"/>
            </div>
            <p class="your-details mt-3 mb-2 SofiaPro-Medium">Step 2: Select a treatment</p>
            <div class="form-group">
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
            <div class="form-group">
                <div id="col_additional_information">
                    <textarea
                        class="form-control"
                        name="additional_information"
                        placeholder="Additional Comments"
                        id="additional_information"
                        rows="5"
                    ></textarea>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="checkbox">
                    <input required name="gdpr" type="checkbox"
                           id="gdpr" {{ !empty($gdpr) && ($gdpr) ? 'checked' : '' }} />
                    <label class="small-print SofiaPro-Medium" for="gdpr">Please accept the Terms & Conditions before submitting the
                        form.</label>
                </div>
            </div>
            <div class="form-group btn-area text-right">
                @include('components.basic.button', [
                    'buttonText'            => 'Make an enquiry',
                    'id'                => 'btn_submit',
                    'classTitle'        => 'btn btn-icon btn-brand-secondary-3 btn-squared btn-enquire-private-hospital',
                    'svg'               => 'circle-check'])
            </div>
        </form>
    </div>
</div>

