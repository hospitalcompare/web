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
                    <input required name="first_name" value="Tom" type="text" class="form-control" id="firstName"
                           placeholder="First Name*">
                </div>
                {{-- Last name --}}
                <div class="col col-6">
                    <input required name="last_name" type="text" value="Eagle" class="form-control" id="lastName"
                           placeholder="Last Name*">
                </div>

                {{-- DOB --}}
                <div class="col col-6">
                    <input required name="date_of_birth" type="text" value="1979/08/13" class="form-control" id="dateOfBirth" placeholder="DOB* (YYYY/MM/DD)">
                </div>
                {{-- Email address --}}
                <div class="col col-6">
                    <input required name="email" type="email" class="form-control" value="tomeagle79@gmail.com" id="email" placeholder="Email Address*">
                </div>
                <div class="col col-6">
                    <input required name="confirm_email" type="email" value="tomeagle79@gmail.com" class="form-control" id="confirmEmail"
                           placeholder="Confirm Email Address*">
                </div>
                <div class="col col-6">
                    <input required name="phone_number" type="text" value="07941939374" class="form-control" id="phoneNumber"
                           placeholder="Phone Number*">
                </div>
                <div class="col col-6">
                    <input required name="postcode" type="text" class="form-control" id="postcode" value="ch23ae" placeholder="Postcode*">
                </div>
                <div class="col col-6">
                    @include('components.basic.select', [
                        'options' => $procedures,
                        'chevronFAClassName' => 'fa-chevron-down black-chevron',
                        'selectClass' => 'selectpicker',
{{--                        'placeholder' => 'Surgery Type',--}}
                        'name'=>'procedure_id',
                        'selectPicker' => 'true',
                        'resultsLabel' => 'resultsLabel'])
                </div>
                <div class="col col-12"><p class="text-white m-0">Please confirm:</p></div>
                <div class="col col-12 checkbox">
                    <input name="waiting_time" type="checkbox" id="waiting_times">
                    <label for="waiting_times">the likely waiting time for an NHS funded referral, should treatment be necessary.</label>
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
                        class="form-control"
                        name="additional_information"
                        placeholder="Additional information"
                        id="additional_information"
                    ></textarea>
                </div>

                <div class="col col-6 checkbox">
                    <input required name="gdpr" type="checkbox" id="gdpr">
                    <label class="small-print" for="gdpr">Please accept the Terms & Conditions before submitting the form.</label>
                </div>
                <div class="col-12 btn-area text-center">
                    <input type="submit" id="btn_submit" class="btn btn-icon btn-blue btn-enquire" value="Make an enquiry" />
                </div>
            </div>
        </form>
    </div>
</div>

