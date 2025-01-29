$(document).ready(function() {
    var loaderInner = $('.loader-inner');
    var loadSection = $('.load');
    var loginSection = $('.login');
    
    if (loaderInner.length) {
        loaderInner.css({
            width: '5%',
            height: '4px',
            backgroundColor: 'white',
            top: '0',
            left: '0',
            borderRadius: '10px',
            border: '2px solid white',
            display: 'none'
        });

        loaderInner.fadeIn(300);

        var width = 0;
        var interval = setInterval(function() {
            if (width >= 100) {
                clearInterval(interval);
                loaderInner.fadeOut(300, function() {
                    loadSection.hide();
                    loginSection.css('z-index', '1').css('display', 'flex').fadeIn(300);
                });
            } else {
                width += 5;
                loaderInner.css('width', width + '%');
            }
        }, 100);
    }
});

function rejoindre() {
    event.preventDefault();
    $('#login').hide();
    $('.rejoindre').css('display', 'flex').show();
}

function accueil() {
    event.preventDefault();
    $('#rejoindre, #connexion', '#rejoindre-success').hide();
    $('#rejoindre form, #connexion form').each(function() {
        this.reset();
    });
    $('#login').css('display', 'flex').show();
    $('.step-circle').removeClass('active');
    $('.step-circle').first().addClass('active');
}

function validateStep(step) {
    let valid = true;
    document.querySelectorAll('#step' + step + ' input').forEach(input => {
    if (!input.value) {
        valid = false;
        toastr.error('Veuillez remplir tous les champs.');
    }
    });
    return valid;
}

function nextStep(step) {
    if (validateStep(step - 1)) {
    $('#step' + (step - 1)).fadeOut(400, function() {
        $('#step' + step).fadeIn(400);
    });
    document.querySelectorAll('.step-circle')[step - 1].classList.add('active');
    }
}

function prevStep(step) {
    $('#step' + (step + 1)).fadeOut(400, function() {
    $('#step' + step).fadeIn(400);
    });
}

document.querySelectorAll('input').forEach((input, index) => {
    input.addEventListener('input', () => {
    const step = Math.floor(index / 2) + 1;
    const miniCircles = document.querySelectorAll('#step' + step + ' .step-minicircle');
    if (input.value) {
        miniCircles[index % 2].classList.add('active');
    } else {
        miniCircles[index % 2].classList.remove('active');
    }
    });
});

function submitForm() {
    var formData = $('#registerForm').serialize();
    $('#submitForm').prop('disabled', true);
    $.ajax({
        type: 'POST',
        url: 'register/php',
        data: formData,
        success: function(response) {
            var jsonResponse = JSON.parse(response);
            if (jsonResponse.status === 'success') {
                $('#rejoindre').hide();
                $('#rejoindre-success').show();
            } else {
                toastr.error(jsonResponse.message);
            }
        },
        error: function() {
            toastr.error('Une erreur est survenue. Veuillez réessayer.');
        },
        complete: function() {
            $('#submitForm').prop('disabled', false);
        }
    });
}

$('#email').on('blur', function() {
    var email = $(this).val();
    if (email) {
        $.ajax({
            type: 'POST',
            url: 'checkEmail/php',
            data: { email: email },
            success: function(response) {
                var jsonResponse = JSON.parse(response);
                if (!jsonResponse.available) {
                    toastr.error('Cet email est déjà utilisé.');
                    $('#email').addClass('error');
                    $('#emailnextbutton').prop('disabled', true);
                } else {
                    $('#email').removeClass('error');
                    $('#emailnextbutton').prop('disabled', false);
                }
            },
            error: function() {
                toastr.error('Une erreur est survenue lors de la vérification de l\'email.');
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    function checkScreenSize() {
        const overlay = document.getElementById('screen-size-overlay');
        console.log('Checking screen size:', window.innerWidth);
        if (window.innerWidth > 768) {
            console.log('Screen width is greater than 768px');
            if (!overlay) {
                console.log('Overlay does not exist, creating one');
                const div = document.createElement('div');
                div.id = 'screen-size-overlay';
                div.style.position = 'fixed';
                div.style.top = '0';
                div.style.left = '0';
                div.style.width = '100%';
                div.style.height = '100%';
                div.style.backgroundColor = 'white';
                div.style.zIndex = '9999';
                div.style.display = 'flex';
                div.style.justifyContent = 'center';
                div.style.alignItems = 'center';
                div.innerHTML = '<p>Merci de mettre le format en version téléphone</p>';
                document.body.appendChild(div);
            } else {
                console.log('Overlay already exists');
            }
        } else {
            console.log('Screen width is less than or equal to 768px');
            if (overlay) {
                console.log('Removing overlay');
                overlay.remove();
            } else {
                console.log('No overlay to remove');
            }
        }
    }

    checkScreenSize();
    window.addEventListener('resize', checkScreenSize);
});
