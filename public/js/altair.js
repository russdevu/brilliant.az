let cl = console.log,
    click = "click";
$(document).ready(function () {
    $(window).on("load", function (e) {
        $("#preloader").delay(150).fadeOut("slow"), $("body").css("overflow", "auto").delay(150)
    }), $(document).on("scroll", function () {
        let e = 100 * $(document).scrollTop() / ($(document).height() - $(window).height());
        $("#scroll-bar").css("width", e + "%")
    }), $(function (e) {
        let t = window.location.href;
        e(".fill a").each(function () {
            this.href === t && e(this).closest("a").addClass("active")
        })
    }), window.addEventListener("scroll", function () {
        let e = document.querySelector(".nav");
        window.pageYOffset > 0 ? e.classList.add("is-sticky") : e.classList.remove("is-sticky")
    });
    let e, t = 0,
        n = 5,
        s = $(".nav").outerHeight();
    $(window).scroll(function (t) {
        e = !0
    }), setInterval(function () {
        e && (! function () {
            let e = $(this).scrollTop();
            if (Math.abs(t - e) <= n) return;
            e > t && e > s ? $(".nav").removeClass("show") : e + $(window).height() < $(document).height() && $(".nav").addClass("show");
            t = e
        }(), e = !1)
    }, 250);
    const o = $("#ulka .nav-dropdown"),
        c = $("#menu"),
        a = $(".menu");

    function i(e, t) {
        $(e).click(function () {
            $(".modal-wrap").css("display", "flex"), $(t).css("display", "flex"), $(window).scroll(function (e) {})
        }), $(document).click(function (e) {
            0 !== $(e.target).closest(".modal-wrap").length && 0 === $(e.target).closest(".action-form").length && ($(".modal-wrap").css("display", "none"), $("body").find(t).css("display", "none"))
        })
    }
    let l;

    function r(e, t) {
        var n = t;
        return e && (n = [e]).push(t), n
    }

    function d(e) {
        for (var t = e.elements, n = {}, s = null, o = 0; o < t.length; o += 1) switch ((s = t[o]).type) {
            case "submit":
                break;
            case "radio":
                s.checked && (n[s.name] = s.value);
                break;
            case "checkbox":
                s.checked && (n[s.name] = r(n[s.name], s.value));
                break;
            default:
                n[s.name] = r(n[s.name], s.value)
        }
        return n
    }
    c.on("click", function () {
        c.toggleClass("is-active"), a.toggleClass("active"), $(".header").removeClass("is-sticky"), $(".hamburger.is-active").css("z-index", "10000")
    }), o.on("click", function () {
        o.not(this).removeClass("active"), $(this).toggleClass("active")
    }), $(".nav-cont").click(function (e) {
        e.preventDefault();
        var t = $($(this).attr("href"));
        if (t.length) {
            var n = t.offset().top;
            $("body, html").animate({
                scrollTop: n + "px"
            }, 800)
        }
    }), i(".btn-login", "#login-form"), i(".btn-register", "#register-form"), i(".forgot-password", "#recovery-form"), i(".trigger-feedback_modal", "#feedback-form"), i("#deposit-trigger", "#deposit-container"), $(".btn-deposit").click(function () {
        $(".modal-wrap").css("display", "flex"), $("#deposit-container").css("display", "none"), $("#deposit").css("display", "flex"), $("body").css("overflow", "hidden")
    }), $(document).click(function (e) {
        0 !== $(e.target).closest(".modal-wrap").length && 0 === $(e.target).closest(".action-form").length && ($(".modal-wrap").css("display", "none"), $("body").css("overflow", "auto").find("#deposit").css("display", "none"))
    }), $(".btn-gain").click(function () {
        $(".modal-wrap").css("display", "flex"), $("#deposit-container").css("display", "none"), $("#gain").css("display", "flex"), $("body").css("overflow", "hidden")
    }), $(document).click(function (e) {
        0 !== $(e.target).closest(".modal-wrap").length && 0 === $(e.target).closest(".action-form").length && ($(".modal-wrap").css("display", "none"), $("body").css("overflow", "auto").find("#gain").css("display", "none"))
    }), $(".primary-item").click(function () {
        $(this).hasClass("active") ? $(this).removeClass("active").find(".secondary-list").slideUp("fast", function () {}) : ($(".primary-item").removeClass("active"), $(".secondary-list").slideUp("fast", function () {}), $(this).addClass("active").find(".secondary-list").slideDown("fast", function () {}))
    }), $(".forgot-password").click(function () {
        $(".modal-wrap").css("display", "flex"), $("#login-form").css("display", "none"), $("#recovery-form").css("display", "flex")
    }), $("#deposit .btn-copy").click(function () {
        const e = document.getElementById("wallet");
        var t = document.createRange();
        t.selectNode(e), window.getSelection().removeAllRanges(), window.getSelection().addRange(t), document.execCommand("copy"), window.getSelection().removeAllRanges(), $("#deposit").html("<h2>Скопировано!</h2>")
    }), $(document).click(function (e) {
        0 !== $(e.target).closest(".modal-wrap").length && 0 === $(e.target).closest(".action-form").length && ($(".modal-wrap").css("display", "none"), $("body").find("#recovery-form").css("display", "none"))
    }), $("#get-agreement").click(function () {
        $(".modal-wrap").css("display", "flex"), $("#register-form").css("display", "none"), $("#license-en").css("display", "flex"), $(".to-register").hide()
    }), $(document).click(function (e) {
        0 !== $(e.target).closest(".modal-wrap").length && 0 === $(e.target).closest(".action-form").length && ($(".modal-wrap").css("display", "none"), $("body").find("#license-en").css("display", "none"), $(".to-register").show())
    }), $(".go-rus").click(function () {
        $(".modal-wrap").css("display", "flex"), $("#license-en").css("display", "none"), $("#license-ru").css("display", "flex")
    }), $(document).click(function (e) {
        0 !== $(e.target).closest(".modal-wrap").length && 0 === $(e.target).closest(".action-form").length && ($(".modal-wrap").css("display", "none"), $("body").find("#license-ru").css("display", "none"))
    }), $(".to-register").click(function () {
        $(".modal-wrap").css("display", "flex"), $("#license-en").css("display", "none"), $("#license-ru").css("display", "none"), $("#register-form").css("display", "flex")
    }), $(document).click(function (e) {
        0 !== $(e.target).closest(".modal-wrap").length && 0 === $(e.target).closest(".action-form").length && ($(".modal-wrap").css("display", "none"), $("body").find("#register-form").css("display", "none"))
    }), $(".license-open").click(function () {
        $(".modal-wrap").css("display", "flex"), $("#register-form").css("display", "none"), $("#license-en").css("display", "flex"), $("body").scroll(e => (e.preventDefault(), !1))
    }), $(document).click(function (e) {
        0 !== $(e.target).closest(".modal-wrap").length && 0 === $(e.target).closest(".action-form").length && ($(".modal-wrap").css("display", "none"), $("body").find("#license-ru").css("display", "none"))
    }), $(".diplomas-container img").click(e => (l = `<div class="img-preview"><img src="${e.target.getAttribute("src")}"/></div>`, $("body").append(l), $(".img-preview").click(() => {
        $(".img-preview").remove()
    }), l)), $("#feedback-success-alert button").click(function () {
        $(".modal-wrap").css("display", "none"), $("body").find("#feedback-success-alert").css("display", "none")
    }), $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    }), $(".btn-logout").on("click", function () {
        document.getElementById("logout-form").submit()
    }), $("#login-form").submit(function (e) {
        e.preventDefault();
        var t = d(this),
            n = $(this);
        $.ajax({
            type: "POST",
            url: "/login",
            dataType: "JSON",
            data: t,
            success: function (e) {
                window.location.href = e.redirect
            },
            error: function (e) {
                var t = $.parseJSON(e.responseText).errors;
                n.find("span").hide(), $.each(t, function (e, t) {
                    t && $("#login_" + e + "_error").html(t).show()
                })
            }
        })
    }), $("#register-form").submit(function (e) {
        e.preventDefault();
        var t = d(this),
            n = $(this);
        $.ajax({
            type: "POST",
            url: "/register",
            dataType: "JSON",
            data: t,
            success: function (e) {
                window.location.href = e.redirect
            },
            error: function (e) {
                var t = $.parseJSON(e.responseText).errors;
                n.find("span").hide(), $.each(t, function (e, t) {
                    t && $("#register_" + e + "_error").html(t).show()
                })
            }
        })
    }), $("#feedback-form").submit(function (e) {
        e.preventDefault();
        var t = d(this),
            n = $(this);
        $.ajax({
            type: "POST",
            url: "/feedback/create",
            dataType: "JSON",
            data: t,
            success: function (e) {
                $(".modal-wrap").css("display", "flex"), n.css("display", "none"), $("#feedback-success-alert").css("display", "flex"), $("#feedback-success-message").html(e.message), $("body").css("overflow", "hidden")
            },
            error: function (e) {
                var t = $.parseJSON(e.responseText).errors;
                n.find("span").hide(), $.each(t, function (e, t) {
                    t && $("#feedback_" + e + "_error").html(t).show()
                })
            }
        })
    }), $(document).ajaxSend(function () {
        $("#preloader").fadeIn()
    }), $(document).on("ajaxSuccess ajaxError", function () {
        $("#preloader").fadeOut("slow")
    }), $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        })
    }), $("#site-feedback-form").on("submit", function (e) {
        e.preventDefault();
        var t = $(this).attr("action"),
            n = d(this);
        $.ajax({
            type: "POST",
            dataType: "json",
            data: n,
            url: t
        })
    }), $("#submit-form").click(() => {
        localStorage.setItem("hasFeedback", "1"), setTimeout(() => {
            $("#site-feedback-form").remove(), $(".container.feedback-form__container").html("<h2>Спасибо, Ваш отзыв важен для нас</h2>")
        })
    }), localStorage.getItem("hasFeedback") && $(".container.feedback-form__container").remove();
    const f = document.querySelectorAll(".animate");
    if (f.length > 0) {
        function u() {
            for (let e = 0; e < f.length; e++) {
                const t = f[e],
                    n = t.offsetHeight,
                    s = m(t).top,
                    o = 4;
                let c = window.innerHeight - n / o;
                n > window.innerHeight && (c = window.innerHeight - window.innerHeight / o), pageYOffset > s - c && pageYOffset < s + n ? t.classList.add("_active") : t.classList.contains("anim-stop") || t.classList.remove("_active")
            }
        }

        function m(e) {
            const t = e.getBoundingClientRect(),
                n = window.pageXOffset || document.documentElement.scrollLeft,
                s = window.pageYOffset || document.documentElement.scrollTop;
            return {
                top: t.top + s,
                left: t.left + n
            }
        }
        window.addEventListener("scroll", u), setTimeout(() => {
            u()
        }, 300)
    }
    $("li.q").on(click, function () {
        $(this).next().slideToggle("1000").siblings("li.a").slideUp()
    }), $("#backToTop").on(click, function (e) {
        e.preventDefault(), $("html, body").animate({
            scrollTop: 0
        }, "500")
    }), $(document).on("click", "a", function (e) {
        "#" == $(this).attr("href") && e.preventDefault()
    })
});