// Execute JavaScript on page load
// $(function() {
    // Initialize phone number text input plugin
    // $('#userPhone, #salesPhone').intlTelInput({
    //     responsiveDropdown: true,
    //     autoFormat: true,
    //     utilsScript: '/vendor/intl-phone/libphonenumber/build/utils.js'
    // });

    var callStatus = $("#call-status");

    /* Helper function to update the call status bar */
    function updateCallStatus(status) {
        callStatus.text(status);
    }

    // Intercept form submission and submit the form with ajax
    function callUser(phoneNumber) {
        // Prevent submit event from bubbling and automatically submitting the
        // form
         updateCallStatus("Calling " + phoneNumber + "...");

        // Call our ajax endpoint on the server to initialize the phone call
        $.ajax({
            url: '/adminLTE/public/call',
            method: 'POST',
            dataType: 'json',
            data: {
                userPhone: phoneNumber,
                salesPhone:'(651) 555-7889'

            }
        }).done(function(data) {
            // The JSON sent back from the server will contain a success message
            alert(data.message);
        }).fail(function(error) {
            alert(JSON.stringify(error));
        });
    }
// });
