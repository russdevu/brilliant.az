let cl = console.log,
    click = "click";

// Sign-up / Sign-In Modals...
$(function () {
    let overlay = $('.overlay'),
        loginTrigger = $('.login-trigger'),
        loginModal = $('.popup-login'),
        forgotModal = $('.popup-forgot'),
        signIn = $('#sign-in'),
        register = $('#register'),
        formSignIn = $('.popup-form.sign-in'),
        formRegister = $('.popup-form.register');

    loginTrigger.on(click, () => {
        signIn.addClass('active');
        overlay.addClass('visible');
        loginModal.addClass('visible');
        formSignIn.addClass('active');
    });

    $('#forgotTrigger').on(click, () => {
        loginModal.removeClass('visible');
        forgotModal.addClass('visible');
    });

    $('.back_arr').on(click, () => {
        forgotModal.removeClass('visible');
        loginModal.addClass('visible');
    });

    register.on(click, () => {
        signIn.removeClass('active');
        register.addClass('active');
        formSignIn.removeClass('active');
        formRegister.addClass('active');
    });

    signIn.on(click, () => {
        signIn.addClass('active');
        register.removeClass('active');
        formSignIn.addClass('active');
        formRegister.removeClass('active');
    });

    overlay.on(click, () => {
        signIn.removeClass('active');
        overlay.removeClass('visible');
        register.removeClass('active');
        loginModal.removeClass('visible');
        forgotModal.removeClass('visible');
        formSignIn.removeClass('active');
        formRegister.removeClass('active');
    });
});

// navbar dropdown
$('li.auth a').on(click, (e) => {
    let navDropUl = $('li.auth ul');
    e.stopPropagation();
    navDropUl.toggleClass('active');

    $(document).on(click, (e) => {
        if (navDropUl.hasClass('active') && e.target != navDropUl) {
            navDropUl.removeClass('active');
        }
    });
});

// slots with images (upload images on /new-post)
// const slot = $('.slot'),
//       closestInput = slot.children('input');

// slot.on(click, (e) => {
//     const clickedSlot = e.currentTarget;
//     // cl(clickedSlot.getAttribute('data-target'));
//     cl(clickedSlot);
//     // alert($(this).children('input'));
//     // $(this).children('input').click();
// });

// Alert message
var AlertBox = function (id, option) {
    this.show = function (msg) {
        if (msg === '' || typeof msg === 'undefined' || msg === null) {
            throw '"msg parameter is empty"';
        }
        else {
            var alertArea = document.querySelector(id);
            var alertBox = document.createElement('DIV');
            var alertContent = document.createElement('DIV');
            var alertClose = document.createElement('A');
            var alertClass = this;
            alertContent.classList.add('alert-content');
            alertContent.innerText = msg;
            alertClose.classList.add('alert-close');
            alertClose.setAttribute('href', '#');
            alertBox.classList.add('alert-box');
            alertBox.appendChild(alertContent);
            if (!option.hideCloseButton || typeof option.hideCloseButton === 'undefined') {
                alertBox.appendChild(alertClose);
            }
            alertArea.appendChild(alertBox);
            alertClose.addEventListener('click', function (event) {
                event.preventDefault();
                alertClass.hide(alertBox);
            });
            if (!option.persistent) {
                var alertTimeout = setTimeout(function () {
                    alertClass.hide(alertBox);
                    clearTimeout(alertTimeout);
                }, option.closeTime);
            }
        }
    };

    this.hide = function (alertBox) {
        alertBox.classList.add('hide');
        var disperseTimeout = setTimeout(function () {
            alertBox.parentNode.removeChild(alertBox);
            clearTimeout(disperseTimeout);
        }, 500);
    };
};

var alertNoClose = new AlertBox('#alert-area', {
    closeTime: 3000,
    persistent: false,
    hideCloseButton: true
});

// show alert
// alertNoClose.show('message');