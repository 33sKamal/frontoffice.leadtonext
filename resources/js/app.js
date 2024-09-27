


document.addEventListener('DOMContentLoaded', () => {

    let sendMessageButton = document.querySelector('.send-contact-message-button')
    sendMessageButton.addEventListener('click',() => {
        sendMessage()
    })
})

let sendMessage = () => {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let formData = {
        name: $('#name').val(),
        email: $('#email').val(),
        message: $('#message').val(),
        phone: $('#phone').val(),
    };

    $.ajax({
        url: '/contact',
        type: 'POST',
        data: formData,
        success: function(response) {
            console.log(response)
            $('.success-message').show(); // Show success message
            $('.error-message').hide();   // Hide error message
            $('#contact-form')[0].reset(); // Reset the form
        },
        error: function(xhr, status, error) {
            $('.error-message').show();  // Show error message
            $('.success-message').hide(); // Hide success message
            $('#contact-form').hide()

        }
    });
    
}