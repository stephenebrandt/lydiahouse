function myPopup(n, e, a, s) {
    var t = (screen.width - a) / 2,
        o = (screen.height - s) / 4;
    window.open(
        n,
        e,
        "toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=" +
            a +
            ", height=" +
            s +
            ", top=" +
            o +
            ", left=" +
            t
    );
}
function _(n) {
    return document.getElementById(n);
}
function submitForm() {
    _("send").disabled = !0;
    var n = new FormData();
    n.append("name", _("name").value),
        n.append("email", _("email").value),
        n.append("phone", _("phone").value),
        n.append("organization", _("organization").value),
        n.append("message", _("message").value);
    var e = new XMLHttpRequest();
    e.open("POST", "send.php"),
        (e.onreadystatechange = function() {
            4 == e.readyState &&
                200 == e.status &&
                ("success" == e.responseText
                    ? (_("contact-thanks").innerHTML =
                          '<span id="thankyou"><h3>Thank you!</h3><p>Your message has been sent.</p>')
                    : (_("send").disabled = !1));
        }),
        e.send(n);
}

function myFunction() {
    var x = document.getElementById("nav");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

$(document).ready(function() {
    $("i").click(function() {
        $("i").toggleClass("fa-times");
    });
});

$(function() {
    var n = $(".half-banner");
    $(window).on("scroll", function() {
        var e = $(document).scrollTop();
        n.css({ "background-position": "50%" + (0.05 * e + 50) + "%" });
    });
});
