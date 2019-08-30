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
            <div class="form-group row">
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
                <div class="col col-12"><p class="text-white">What is the nature of your enquiry?</p></div>
                <div class="col col-12 checkbox">
                    <input required name="prices" type="checkbox" id="prices">
                    <label for="prices">I want to make an enquiry about pricing.</label>
                </div>
                <div class="col col-12 checkbox">
                    <input required name="waiting_times" type="checkbox" id="waiting_times">
                    <label for="waiting_times">I want to make an enquiry about current waiting times.</label>
                </div>
                <div class="col col-12 checkbox">
                    <input required name="other" type="checkbox" id="other">
                    <label for="other">Something else</label>
                </div>

                <div class="col col-12">
{{--                    <label for="additional_information">Additional information</label>--}}
                    <textarea
                        class="form-control"
                        name="additional_information"
                        placeholder="Additional information"
                        id="additional_information"
                    ></textarea>
                </div>
                <div class="col col-6">
                    @include('components.basic.select', [
                        'options' => $procedures,
                        'chevronFAClassName' => 'fa-chevron-down black-chevron',
                        'selectClass' => 'form-control',
                        'placeholder' => 'Surgery Type',
                        'name'=>'procedure_id',
                        'resultsLabel' => 'resultsLabel'])
                </div>
                <div class="col col-6 checkbox">
                    <input required name="gdpr" type="checkbox" id="gdpr">
                    <label class="small-print" for="gdpr">Please accept the Terms & Conditions before submitting the form.</label>
                </div>
                <div class="col-12 btn-area text-center">
                    <a id="btn-submit" class="btn btn-icon btn-enquire">Make an enquiry</a>
                </div>
            </div>
        </form>
    </div>
</div>

