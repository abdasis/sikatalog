/* Template Name: Ubold - Bootstrap 5 Landing Page Tamplat
   Author: CoderThemes
   File Description: Main JS file of the template
*/

// Sticky Navbar

function windowScroll() {
    const navbar = document.getElementById("sticky");
    if (navbar) {
        if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
            navbar.classList.add("nav-sticky");
        } else {
            navbar.classList.remove("nav-sticky");
        }
    }
}

window.addEventListener("scroll", (ev) => {
    ev.preventDefault();
    windowScroll();
});



// back-to-top

var mybutton = document.getElementById("back-to-top-btn");

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        console.log(document.body.scrollTop);
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}



// Contact form

function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    var comments = document.forms["myForm"]["comments"].value;
    document.getElementById("error-msg").style.opacity = 0;
    document.getElementById("error-msg").innerHTML = "";
    if (name == "" || name == null) {
        document.getElementById("error-msg").innerHTML = "<div class='alert alert-danger error_message text-center'>Please enter a Name</div>";
        fadeIn();
        return false;
    }
    if (email == "" || email == null) {
        document.getElementById("error-msg").innerHTML = "<div class='alert alert-danger error_message text-center'>Please enter a Email</div>";
        fadeIn();
        return false;
    }
    if (subject == "" || subject == null) {
        document.getElementById("error-msg").innerHTML = "<div class='alert alert-danger error_message text-center'>Please enter a Subject</div>";
        fadeIn();
        return false;
    }
    if (comments == "" || comments == null) {
        document.getElementById("error-msg").innerHTML = "<div class='alert alert-danger error_message text-center'>Please enter a Comments</div>";
        fadeIn();
        return false;
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("simple-msg").innerHTML = this.responseText;
            document.forms["myForm"]["name"].value = "";
            document.forms["myForm"]["email"].value = "";
            document.forms["myForm"]["subject"].value = "";
            document.forms["myForm"]["comments"].value = "";
        }
    };
    xhttp.open("POST", "php/contact.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name=" + name + "&email=" + email + "&comments=" + comments);
    return false;
}

function fadeIn() {
    var fade = document.getElementById("error-msg");
    var opacity = 0;
    var intervalID = setInterval(function () {
        if (opacity < 1) {
            opacity = opacity + 0.5;
            fade.style.opacity = opacity;
        } else {
            clearInterval(intervalID);
        }
    }, 200);
}
