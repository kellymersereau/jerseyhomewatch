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
                <label for="firstname">
                    First Name:
                    <input type="text" id="firstname" name="firstname">
                </label>
                <label for="lastname">
                    Last Name:
                    <input type="text" id="lastname" name="lastname">
                </label>
            </div>
            <div class="row">
                <label for="address">
                    Address:
                    <input type="text" id="address" name="address">
                </label>
            </div>
            <div class="row">
                <label for="city">
                    City:
                    <input type="text" id="city" name="city">
                </label>
                <label for="state">
                    State:
                    <select id="state" name="state">
                        <option>NJ</option>
                    </select>
                </label>
                <label for="zip">
                    Zip Code:
                    <input type="number" maxlength="5" id="zip" name="zip">
                </label>
            </div>
            <div class="row">
                <label for="email">
                    Email:
                    <input type="email" id="email" name="email">
                </label>
                <label for="phone">
                    Phone Number:
                    <input type="tel" id="phone" name="phone">
                </label>
            </div>
            <div class="row">
                <p>
                    Preferred method of contact:
                </p>
                <input type="checkbox" value="email" id="email_checkbox" name="email_check">
                <label for="email_check">
                    Email
                </label>
                <input type="checkbox" value="phone" id="phone_checkbox" name="phone_check">
                <label for="phone_check">
                    Phone
                </label>
            </div>
            <div class="row">
                <label for="message">
                    Message:
                    <textarea name="message" id="message"></textarea>
                </label>
            </div>
            <div class="row">
                <label for="referral">
                    Referred By:
                    <input type="text" name="referral" id="referral">
                </label>
            </div>
            
            <div class="button-wrapper">
                <a id="form_submit">
                    Submit
                </a>
            </div>

        </form>
    </div>
@endsection
