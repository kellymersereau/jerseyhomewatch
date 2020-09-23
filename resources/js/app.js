require('./bootstrap');

contactForm = {
    init: function () {
        console.log('contact=form');
    
        contactForm.cE();
    },
    cE: function cacheElements() {
        /*
         Cache elements that get reused
         */
        contactForm.submitButton = $('#form_submit');
        contactForm.form = $('#contact-form');
        contactForm.formFirstName = $(contactForm.form).find('input[name="firstname"]');
        contactForm.formLastName = $(contactForm.form).find('input[name="lastname"]');
        contactForm.formAddress = $(contactForm.form).find('input[name="address"]');
        contactForm.formCity = $(contactForm.form).find('input[name="city"]');
        contactForm.formState = document.getElementById('state');
        contactForm.formZip = $(contactForm.form).find('input[name="zip"]');
        contactForm.formEmail = $(contactForm.form).find('input[name="email"]');
        contactForm.formPhone = $(contactForm.form).find('input[name="phone"]');
        contactForm.formCheckbox = $(contactForm.form).find('input[type="checkbox"]');
        contactForm.formMessage = $(contactForm.form).find('textarea[name="message"]');
        contactForm.formReferral = $(contactForm.form).find('input[name="referral"]');
        
        contactForm.errors = null;
        
        contactForm.eL();
    },
    eL: function eventListeners() {
        /*
         FORM SUBMIT
         */
        $(contactForm.submitButton).on('click', function (e) {
            e.preventDefault();
    
            // REMOVE ALL ERROR CLASSES
            $('.show-invalid').removeClass('show-invalid');
            $('.blank-error').removeClass('blank-error');
            $('.show-error').removeClass('show-error');
            $('.checkbox-wrapper').removeClass('blank-error');
            
            if (contactForm.validateForm() && contactForm.errors === 0) {
                var serializedForm = $(contactForm.form).serialize();
                
                contactForm.submitForm(serializedForm);
            }
        });
        
        /*
         ON CHANGE EVENTS FOR FORM
         */
        // only allow user to type numbers on these form fields
        $(contactForm.formZip).on('keydown', function (e) {
            contactForm.onlyAllowNumbers(e);
        });
        $(contactForm.formPhone).on('keydown', function (e) {
            contactForm.onlyAllowNumbers(e);
            contactForm.checkAndAddSlashes(e);
        });
        
        // remove error messages when user enters information
        $('input[type="text"]').on('change', function () {
            // console.log('changing text');
            // console.log($(this).val() !== '');
            
            if ($(this).parents('label').hasClass('blank-error') && $(this).parents('.row').hasClass('show-error') && $(this).val() !== '') {
                
                switch ($(this).attr('id')) {
                    case 'phone':
                        if (contactForm.validatePhone(contactForm.formPhone)) {
                            contactForm.removeErrorClass(this, false);
                        }
                        break;
                    case 'zip':
                        if (contactForm.validateZip(contactForm.formZip)) {
                            contactForm.removeErrorClass(this, false);
                        }
                        break;
                    case 'email':
                        if (contactForm.validateEmail(contactForm.formEmail)) {
                            contactForm.removeErrorClass(this, false);
                        }
                        break;
                    default:
                        console.log('default');
                        contactForm.removeErrorClass(this, false);
                        break;
                }
                
            } else if ($(this).parents('label').hasClass('show-invalid') && $(this).parents('.row').hasClass('show-error') && $(this).val() !==
                       '') {
                
                switch ($(this).attr('id')) {
                    case 'phone':
                        if (contactForm.validatePhone(contactForm.formPhone)) {
                            contactForm.removeErrorClass(this, true);
                        }
                        break;
                    case 'zip':
                        if (contactForm.validateZip(contactForm.formZip)) {
                            contactForm.removeErrorClass(this, true);
                        }
                        break;
                    case 'email':
                        if (contactForm.validateEmail(contactForm.formEmail)) {
                            contactForm.removeErrorClass(this, false);
                        }
                        break;
                    default:
                        console.log('default');
                        contactForm.removeErrorClass(this, true);
                        break;
                }
            }
        });
        
        $(contactForm.formState).on('change', function () {
            
            if (contactForm.formState.options[contactForm.formState.selectedIndex].value !== 'select' && $(contactForm.formState).parents('.row').hasClass('show-error') && $(contactForm.formState).parents('label').hasClass('blank-error')){
                
                contactForm.removeErrorClass(contactForm.formState, false);
            }
            
        });
    },
    // FORM FUNCTIONS
    validateForm: function validateForm() {
        contactForm.errors = 0;
        
        // Validate state dropdown list
        contactForm.checkDropdown();
        
        // Validate first name, last name, address, city, specialty, license
        contactForm.checkForBlanks(contactForm.formFirstName);
        contactForm.checkForBlanks(contactForm.formLastName);
        contactForm.checkForBlanks(contactForm.formAddress);
        contactForm.checkForBlanks(contactForm.formCity);
        
        // Validate email
        contactForm.validateEmail(contactForm.formEmail);
        
        // Validate phone number
        contactForm.validatePhone(contactForm.formPhone);
        
        // Validate zip code
        contactForm.validateZip(contactForm.formZip);
        
        
        // If there are errors, call function to find and set the scrollTop so the page animates to the first error.
        var totalErrors = $('.blank-error').length + $('.show-invalid').length;
        if (totalErrors > 0) {
            return false;
        } else {
            return true;
        }
    },
    submitForm: function submitForm(data) {
        console.log('SUBMIT DATA ', data);
        
        $.ajax({
                   method: 'POST',
                   url: '/contact-submit',
                   data: data
               }).done(function ($data) {
            
            console.log($data);
            
            $('body').addClass('form-complete');
            
            contactForm.showFormSuccessCopy();
            
        }).fail(function ($data) {
            console.warn($data);
            console.log('error');
            // $('body').addClass('form-error');
            // $("html, body").animate({ scrollTop: '380px' }, "slow");
        });
    },
    checkForBlanks: function checkForBlanks(input){
        if ($(input).val() === ""){
            contactForm.addErrorClass(input, false);
            contactForm.errors++;
            return false;
        } else {
            return true;
        }
    },
    checkDropdown: function checkDropdown(){
        var selectedValue = contactForm.formState.options[contactForm.formState.selectedIndex].value;
        
        if (selectedValue === "select") {
            contactForm.addErrorClass(contactForm.formState, false);
            contactForm.errors++;
            return false;
        } else {
            return true;
        }
    },
    validatePhone: function validatePhone(phone) {
        var phoneRegEx = /^[\(]?([2-9]{1})([0-9]{2})[\)\-\.\ ]?[\ ]?([0-9]{3})[\-\.\ ]?([0-9]{4})$/,
            phoneVal = $(phone).val();
        
        // console.log('phoneVal  ', phoneVal);
        if(phoneVal.match(phoneRegEx)) {
            
            // Strip everything but digits from the phone number
            newval = phoneVal.replace(/[^\d]/g, '');
            
            $(phone).val(newval);
            
            return true;
        } else if (phoneVal === ''){
            contactForm.addErrorClass(phone, false);
            contactForm.errors++;
        } else {
            contactForm.addErrorClass(phone, true);
            contactForm.errors++;
        }
    },
    validateEmail: function validateEmail(email){
        var emailRegEx = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[ 0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
            emailVal = $(email).val();
    
        // console.log('phoneVal  ', phoneVal);
        if(emailVal.match(emailRegEx) && emailVal.length > 0) {
            return true;
        } else if (emailVal === ''){
            contactForm.addErrorClass(email, false);
            contactForm.errors++;
        } else {
            contactForm.addErrorClass(email, true);
            contactForm.errors++;
        }
    },
    validateZip: function validateZip(zip) {
        var zipRegEx = /^\d{5}$/,
            zipVal   = $(zip).val();
        
        if(zipVal.match(zipRegEx)) {
            
            // console.log('matches zip');
            return true;
        } else if (zipVal === ''){
            contactForm.addErrorClass(zip, false);
            contactForm.errors++;
        } else {
            contactForm.addErrorClass(zip, true);
            contactForm.errors++;
        }
    },
    onlyAllowNumbers: function(evt){
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(evt.key, ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "Backspace", "Delete", "Escape", "Enter", "ArrowRight", "ArrowLeft", "Tab"]) !== -1) {
            // let it happen, don't do anything
            return;
        } else {
            evt.preventDefault();
        }
    },
    checkAndAddSlashes: function checkAndAddSlashes(evt){
        
        var keyCodes = [8, 37, 38, 39, 40],
            str      = evt.target.value,
            strArr   = [];
        
        if ($.inArray(evt.keyCode, keyCodes) === -1) {
            switch (str.length){
                case 3:
                    $(evt.target).val(str + "-");
                    break;
                case 7:
                    $(evt.target).val(str + "-");
                    break;
                default:
                    break;
            }
            
        }
    },
    addErrorClass: function addErrorClass(element, invalid) {
        // if this is an INVALID error then add invalid error class, otherwise add regular error class
        if (invalid){
            
            $(element).parents('.row').addClass('show-error');
            $(element).parents('label').addClass('show-invalid');
            
            if ($(element).parents('label').hasClass('blank-error')) {
                $(element).parents('label').removeClass('blank-error');
            }
        } else {
            
            $(element).parents('.row').addClass('show-error');
            $(element).parents('label').addClass('blank-error');
            
            if ($(element).parents('label').hasClass('show-invalid')) {
                $(element).parents('label').removeClass('show-invalid');
            }
        }
    },
    removeErrorClass: function removeErrorClass(element, invalid) {
        // if this is an INVALID error then remove invalid error class, otherwise remove regular error class
        if (invalid){
            $(element).parents('label').removeClass('show-invalid');
            
            if (($(element).parents('.row').find('.blank-error').length + $(element).parents('.row').find('.show-invalid').length) === 0){
                
                $(element).parents('.row').removeClass('show-error');
                
            }
        } else {
            $(element).parents('label').removeClass('blank-error');
            
            if (($(element).parents('.row').find('.blank-error').length + $(element).parents('.row').find('.show-invalid').length) === 0){
                
                $(element).parents('.row').removeClass('show-error');
                
            }
        }
        
    },
    showFormSuccessCopy: function () {
        $('.thank-you-wrapper').addClass('show');
    }
}

$(document).ready(function () {
    // MOBILE NAV FUNCTIONALITY
    $('.mobile-menu-btn').on('click', function (e) {
        e.preventDefault();
        
        if ($('body').hasClass('mobile-nav-showing')) {
            $('body').removeClass('mobile-nav-showing');
        } else {
            $('body').addClass('mobile-nav-showing');
        }
    });
    
    if (document.body.classList.contains('contact')) {
        contactForm.init();
    }
});
