@extends('layout.layout')

@section('content')
    <div class="hero">
        <h1 class="center">
            Contact Us
        </h1>
    </div>
    <div class="form-wrapper">
        <form id="contact-form">
            <div class="row">
                <label for="firstname" class="first-name-label half-width">
                    <span class="label semi-bold sm-line-height">First Name</span>
                    <input type="text" id="firstname" name="firstname" aria-label="First Name">
                    <span class="error-msg red semi-bold label">
                        This is required.
                    </span>
                </label>
                <label for="lastname" class="last-name-label half-width">
                    <span class="label semi-bold sm-line-height">Last Name</span>
                    <input type="text" id="lastname" name="lastname" aria-label="Last Name">
                    <span class="error-msg red semi-bold label">
                        This is required.
                    </span>
                </label>
            </div>
            <div class="row">
                <label for="address" class="address-label full-width">
                    <span class="semi-bold label sm-line-height">Address</span>
                    <input type="text" id="address" name="address" aria-label="Street Address">
                    <span class="error-msg red semi-bold label">
                        This is required.
                    </span>
                </label>
            </div>
            <div class="row">
                <label for="city" class="city-label half-width">
                    <span class="label semi-bold sm-line-height">City</span>
                    <input type="text" id="city" name="city" aria-label="City">
                    <span class="error-msg red semi-bold label">
                        This is required.
                    </span>
                </label>
                <label for="state" class="state-label fourth-width">
                    <span class="label semi-bold sm-line-height">State</span>
                    <select id="state" name="state" aria-label="State">
                        <option value="select">Select</option>
                        @foreach($states as $state)
                            <option value="{{$state['val']}}">{{$state['state']}}</option>
                        @endforeach
                    </select>
                    <span class="error-msg red semi-bold label">
                        This is required.
                    </span>
                </label>
                <label for="zip" class="zip-label fourth-width">
                    <span class="label semi-bold sm-line-height">Zip Code</span>
                    <input type="text" placeholder="00000" maxlength="5" aria-label="Zip Code" pattern="[0-9]*" id="zip" name="zip">
                    <span class="error-msg red semi-bold label">
                        This is required.
                    </span>
                    <span class="error-invalid red semi-bold label">
                        Please enter a valid zip code.
                    </span>
                </label>
            </div>
            <div class="row">
                <label for="email" class="email-label">
                    <span class="label semi-bold sm-line-height">Email</span>
                    <input type="text" id="email" name="email" aria-label="Email Address" placeholder="johnsmith@mail.com">
                    <span class="error-msg red semi-bold label">
                        This is required.
                    </span>
                    <span class="error-invalid red semi-bold label">
                        Please enter a valid email address.
                    </span>
                </label>
                <label for="phone" class="phone-label fourth-width">
                    <span class="label semi-bold sm-line-height">Phone Number</span>
                    <input type="text" id="phone" name="phone" placeholder="000-000-0000" aria-label="Phone Number" maxlength="12">
                    <span class="error-msg red semi-bold label">
                        This is required.
                    </span>
                    <span class="error-invalid red semi-bold label">
                        Please enter a valid phone number.
                    </span>
                </label>
            </div>
            <div class="row wrapped-row">
                <p class="label semi-bold sm-line-height">
                    Preferred method of contact
                </p>
                <label class="checkbox-wrapper">
                    <input class="checks" type="checkbox" name="email1" id="email1" data-check-id="1" data-check-name="email" aria-label="Preferred
                     Method of Contact: Email">
                    Email
                </label>
                <label class="checkbox-wrapper">
                    <input class="checks" type="checkbox" name="phone1" id="phone1" data-check-id="2" data-check-name="phone" aria-label="Preferred
                     Method of Contact: Phone">
                    Phone
                </label>
            </div>
            <div class="row">
                <label for="message" class="message-label full-width">
                    <span class="label semi-bold sm-line-height">Message</span>
                    <textarea name="message" id="message" aria-label="Message"></textarea>
                </label>
            </div>
            <div class="row">
                <label for="referral" class="referral-label half-width">
                    <span class="label semi-bold sm-line-height">Referred By</span>
                    <input type="text" name="referral" id="referral" aria-label="Referred By">
                </label>
            </div>
            
            @csrf
            
            <div class="btn-wrapper">
                <a id="form_submit" aria-label="Submit Button">
                    Submit
                </a>
            </div>

        </form>
    </div>
    <div class="thank-you-wrapper">
        <p>
            Your message has been received.  We will contact you via your preferred method of contact at our earliest convenience.
        </p>
    </div>
@endsection
