<?php include('includes/header.php')  ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="flex flex-col justify-center items-center">
            <h1 class="font-black">Contact Us</h1>
            <h6 class="text-blue-600">Supreme Hacklord</h6>
        </div>
    </div>
</section>
<!-- End Hero -->
<div id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </header>

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>

                                <p>A Oswego street,<br /> Denver, CO 80239, USA</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>

                                <p>+3 3744 237544</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>cyberservices@supremehacklord.com<br />contact@supremehacklord.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday<br />9:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form onsubmit="return false" class="php-email-form" id="post_form" enctype="multipart/form-data">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" />
                            </div>

                            <div class="col-md-6">
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Your Email" />
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Subject" />
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" id="message" name="message" rows="6"
                                    placeholder="Message"></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" id="send_btn" onclick="sendMessageMod()">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
</div>

<?php include('includes/footer.php')  ?>

<script>
function sendMessageMod() {
    var name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();

    if (name == "") {
        $("#name")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#name")
            .removeClass("form-control is-invalid")
            .addClass("form-control");
    }

    if (subject == "") {
        $("#subject")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#subject")
            .removeClass("form-control is-invalid")
            .addClass("form-control");
    }
    if (message == "") {
        $("#message")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#message")
            .removeClass("form-control is-invalid")
            .addClass("form-control");
    }

    if (email == "") {
        $("#email")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#email")
            .removeClass("form-control is-invalid")
            .addClass("form-control");
    }

    if (name != "" && subject != "" && email != "" && message != "") {
        $("#send_btn").html("Please Wait....");
        var formData = new FormData(document.getElementById("post_form"));
        fetch("admin/ajax_controls/sendMessage.php", {
                method: "POST",
                body: formData,
            })
            .then(function(response) {
                return response.text();
            })
            .then(function(text) {
                $("#send_btn").html("Send Message");
                console.log(text);
                if (text == "invalid email format") {
                    $.toast({
                        heading: "Error",
                        text: "You have entered an incorrect email",
                        showHideTransition: "slide",
                        bgColor: "#0284c7",
                        textColor: "white",
                        icon: "error",
                    });
                } else {
                    $.toast({
                        heading: "Messaage sent successfully",
                        text: "Congratulations you have sent your message successfully",
                        showHideTransition: "slide",
                        bgColor: "#15803d",
                        textColor: "white",

                        afterHidden: function() {
                            window.location = "index.php";
                        },
                    });
                }
            });
    }
}
</script>