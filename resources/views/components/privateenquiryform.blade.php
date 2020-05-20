<div class="modal-inner pb-5 px-3 px-lg-5">
    <p class="text-center font-24 SofiaPro-Medium  private-modal-enquiry-title">Enquire now for <span
            class="hospital-title">this hospital</span></p>
    <p class=" text-center private-modal-enquiry-description">
        Complete this form and we'll pass your enquiry onto this hospital immediately.<br>You can normally expect a
        response within three to four days.
    </p>
    <div class="form-wrap d-flex flex-wrap">
        <script>
            function recaptchaCallback() {
                $('#hiddenRecaptcha').valid();
            }
        </script>
        <form id="enquiry_form" class=" w-100">
            <input type="hidden" name="hospital_id" value="1">
            <span class="hidden-with-pos">
                <label for="spam_test">Please leave blank</label>
                <input type="text" id="spam_test" name="spam_test" value="" placeholder="leave blank">
            </span>
            <p class="your-details ">Your Details</p>
            <div class="form-group row align-items-end">
                <div class="col-12 col-md-6 mb-1 mb-md-0">
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
                        'svg'           =>  'chevron-down',
                        'selectClass'   =>  'form-control select-picker',
                        'placeholder'   =>  'Title*',
                        'name'          =>  'title',
                        'labelClass'    =>  'labelClass'])
                </div>
                <div class="col-12 col-md-6">
                    {{-- First name --}}
                    <div class="input-wrapper">
                        <input required name="first_name" type="text" class="form-control" id="firstName"
                               placeholder="First Name*" value="{{ !empty($firstName) ? $firstName : '' }}"/>
                    </div>
                </div>

            </div>
            <div class="form-group row align-items-end">
                {{-- Last name --}}
                <div class="col-12 col-md-6 mb-1 mb-md-0">
                    <div class="input-wrapper">
                        <input required name="last_name" type="text" class="form-control" id="lastName"
                               placeholder="Last Name*" value="{{ !empty($lastName) ? $lastName : '' }}">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-wrapper">
                        <input required name="phone_number" type="text" class="form-control" id="phoneNumber"
                               placeholder="Phone Number*" value="{{ !empty($phone) ? $phone : '' }}"/>
                    </div>
                </div>
            </div> {{-- end row --}}
            {{-- Email address --}}
            <div class="form-group row align-items-end">
                <div class="col-12 col-md-6 mb-1 mb-md-0">
                    <div class="input-wrapper">
                        <input required name="email" type="email" class="form-control" id="email"
                               placeholder="Email Address*" value="{{ !empty($email) ? $email : '' }}"/>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-wrapper">
                        <input required name="confirm_email" type="email" class="form-control" id="confirmEmail"
                               placeholder="Confirm Email Address*" value="{{ !empty($email) ? $email : '' }}"/>
                    </div>
                </div>
            </div>
            <div class="form-group row align-items-end">
                <div class="col-12 col-md-6">
                    <div class="input-wrapper">
                        <input required name="postcode" type="text" class="form-control" id="postcode"
                               placeholder="Postcode*" value="{{ !empty($postcode) ? $postcode : '' }}"/>
                    </div>
                </div>
            </div>
            <p class="your-details mt-3">Your Treatment</p>
            <div class="form-group row align-items-end">
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
                        'labelClass'            => 'labelClass',
                        'required'              => false
                        ])
                </div>
            </div>
            <div class="form-group row align-items-end">
                <div class="col-12 mb-2" id="col_additional_information">
                    <textarea
                        class="form-control"
                        name="additional_information"
                        placeholder="Additional Comments"
                        id="additional_information"
                        rows="5"
                    ></textarea>
                </div>
                <div class="col-12 mb-3">
                    <div class="input-wrapper checkbox">
                        <input required name="gdpr" type="checkbox"
                               id="gdpr" {{ !empty($gdpr) && ($gdpr) ? 'checked' : '' }} />
                        <label class="small-print" for="gdpr">Please accept the&nbsp;<a href="/terms-of-use">Terms of
                                Use</a>&nbsp;before submitting the form.</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="g-recaptcha" data-sitekey="6LdSxNsUAAAAABneqKEBr9c_yD5Org-9MHY3b5Fb"
                         data-callback="recaptchaCallback"></div>
                                        <span class="hidden-with-pos">
                                            <label for="hiddenRecaptcha">Leave empty</label>
                                        </span>
                    <div class="input-wrapper">
                        <input
                            type="hidden"
                            class="hiddenRecaptcha"
                            required
                            name="hiddenRecaptcha"
                            id="hiddenRecaptcha">
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="btn-wrapper text-right">
                        @include('components.basic.button', [
                            'buttonText'        => 'Make an enquiry',
                            'id'                => 'btn_submit',
                            'classTitle'        => 'btn btn-icon btn-brand-secondary-3 btn-squared btn-enquire-private-hospital pl-5',
                            'svg'               => 'circle-check'])
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

