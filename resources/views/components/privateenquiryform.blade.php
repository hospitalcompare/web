<form id="enquiry_form">
    <input type="hidden" name="specialty_id" value="3">
    <input type="hidden" name="hospital_id" value="1">
    <div class="form-group row">
        {{-- Title --}}
{{--        <label for="title">Title *</label>--}}
    </div>
    <div class="form-group row">
        {{-- First name --}}
        {{--        <label for="firstName" class="col-sm-2 col-form-label">First Name</label>--}}
        <div class="col">
            <select  name="title" class="form-control" id="title" >
                <option>Title</option>
                <option>Mr</option>
                <option>Mrs</option>
                <option>Miss</option>
            </select>
        </div>
        <div class="col">
            <input  name="first_name" type="text"  class="form-control-plaintext" id="firstName" placeholder="First Name">
        </div>
        {{-- Last name --}}
{{--        <label for="lastName" class="col-sm-2 col-form-label">Email</label>--}}
        <div class="col">
            <input  name="last_name" type="text"  class="form-control-plaintext" id="lastName" placeholder="Last Name">
        </div>
    </div>
    <div class="form-group row">
        {{-- Email address --}}
{{--        <label for="email">Email address</label>--}}
        <div class="col-6">
            <input  name="email" type="email" class="form-control" id="email" placeholder="Email Address">
        </div>
        <div class="col-6">
            <input  name="confirm_email" type="email" class="form-control" id="confirmEmail" placeholder="Confirm Email Address">
        </div>
        <div class="col-6">
            <input  name="phone_number" type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
        </div>
        <div class="col-6">
            <input  name="postcode" type="text" class="form-control" id="postcode" placeholder="post code">
        </div>
    </div>
    <div class="form-group row">
        {{-- Email address --}}
{{--        <label for="email">Email address</label>--}}
        <div class="col-6">
            <input  name="date_of_birth" type="text" class="form-control" id="dateOfBirth" placeholder="Date of birth">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-12">
            <textarea name="additional_information" type="text" class="form-control" id="dateOfBirth" placeholder="Date of birth">

            </textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-12">
            <input class="btn btn-teal submit-enquiry" type="submit" value="Submit">
        </div>
    </div>

</form>

