<div class="modal-inner">

    <h3 class="text-center text-white">Enquire now for <span class="hospital-title">this hospital</span></h3>
    <p class="text-white text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
    <div class="form-wrap d-flex">
        <div class="img-wrap mr-4">
            <img width="173" height="158" src="images/alder-1.png">
        </div>
        <form id="enquiry_form">
{{--            <input type="hidden" name="specialty_id" value="3">--}}
            <input type="hidden" name="hospital_id" value="1">
            <div class="form-group row">
                <div class="col col-6">
                    @include('components.basic.selectbox', [
                        'options' => [
                            ['id'=>'Mr', 'name'=>'Mr'],
                            ['id'=>'Mrs', 'name'=>'Mrs'],
                            ['id'=>'Miss', 'name'=>'Miss'],
                            ['id'=>'Ms', 'name'=>'Ms'],
                            ['id'=>'Dr', 'name'=>'Dr'],
                            ['id'=>'Prof.', 'name'=>'Prof.'],
                            ['id'=>'Rev.', 'name'=>'Rev.']
                        ],
                        'chevronFAClassName' => 'fa-chevron-down blackChevron',
                        'selectClass' => 'form-control',
                        'placeholder' => 'Title*',
                        'name'=>'title',
                        'resultsLabel' => 'resultsLabel'])
                </div>
                {{-- First name --}}
                <div class="col col-6">
                    <input required name="first_name" type="text" class="form-control" id="firstName"
                           placeholder="First Name">
                </div>
                {{-- Last name --}}
                <div class="col col-6">
                    <input required name="last_name" type="text" class="form-control" id="lastName"
                           placeholder="Last Name*">
                </div>

                {{-- DOB --}}
                <div class="col col-6">
                    <input required name="date_of_birth" type="text" class="form-control" id="dateOfBirth" placeholder="DOB* (YYYY/MM/DD)">
                </div>
                {{-- Email address --}}
                <div class="col col-6">
                    <input required name="email" type="email" class="form-control" id="email" placeholder="Email Address*">
                </div>
                <div class="col col-6">
                    <input required name="confirm_email" type="email" class="form-control" id="confirmEmail"
                           placeholder="Confirm Email Address*">
                </div>
                <div class="col col-6">
                    <input required name="phone_number" type="text" class="form-control" id="phoneNumber"
                           placeholder="Phone Number*">
                </div>
                <div class="col col-6">
                    <input required name="postcode" type="text" class="form-control" id="postcode" placeholder="Postcode*">
                </div>
                <div class="col col-6">
                    @include('components.basic.selectbox', [
                        'options' => $procedures,
                        'chevronFAClassName' => 'fa-chevron-down blackChevron',
                        'selectClass' => 'form-control',
                        'placeholder' => 'Surgery Type',
                        'name'=>'procedure_id',
                        'resultsLabel' => 'resultsLabel'])
                </div>
                <div class="col col-6 checkbox">
                    <input name="gdpr" type="checkbox" id="gdpr">
                    <label for="gdpr">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</label>
                </div>
                <div class="col col-6">
                    <input required name="additional_information" type="hidden" class="form-control" id="additional_information" placeholder="Additional information">
                </div>
            </div>
        </form>
    </div>
    <div class="btn-area text-center">
        <a id="btnSubmit" class="btn btn-icon btn-enquire">Make an enquiry</a>
    </div>
</div>

