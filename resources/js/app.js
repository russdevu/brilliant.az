require('./bootstrap');

let cl = console.log,
    click = "click";

// Sign-up / Sign-In Modals...
$(function() {
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

  let navDropUl = $('li.auth ul');

  $('li.auth a').on(click, (e) => {
    e.stopPropagation();
    navDropUl.toggleClass('active');

    $(document).on(click, (e) => {
      if (navDropUl.hasClass('active') && e.target != navDropUl) {
        navDropUl.removeClass('active');
      }
    })
  });

  