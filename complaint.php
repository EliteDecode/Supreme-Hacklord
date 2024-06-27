<?php include('includes/header.php') ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="flex flex-col justify-center items-center">
            <h1 class="font-black">Comprehensive Claim Form</h1>
            <h6 class="text-blue-600">Supreme Hacklord</h6>
        </div>
    </div>
</section>
<!-- End Hero -->
<div id="main">
    <div class="container mb-5 mt-5">
        <div class="bg-white p-4 shadow-lg rounded-lg">
            <h2 class="text-2xl font-semibold mb-4">Claim Form Download</h2>
            <p class="mb-4">
                It is of utmost importance to provide correct contact details such
                as phone number and email because the updates regarding the claim
                will be sent periodically to the mail and mobile number provided in
                the claim form.
            </p>
            <a href="assets/img/How-to-correctly-fill-out-the-Detailed-Reclaim-Form.pdf" download
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block">
                Download Claim Form
            </a>
        </div>
    </div>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>Comprehensive Claim Form</p>
            </header>
            <p>
                <span class="text-red-500 font-bold text-sm text-gray-100">(*)</span>
                Please carefully review the guidelines for accurately completing the
                Comprehensive Claim Form. Failure to provide evidence of fraudulent
                activity may result in Investigation Partners being unwilling to
                pursue your case. Please be aware that each scam or hack should be
                submitted as an individual request. Do not share your private key or
                login credentials with us.
            </p>

            <div class="row gy-4 mt-5 items-center" style="display: grid; place-items: center">
                <div class="col-lg-10">
                    <form onsubmit="return false" class="php-email-form shadow-lg" id="post_form"
                        enctype="multipart/form-data">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="firstname" id="firstname" class="form-control"
                                    placeholder="Firstname" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lastname" id="lastname" class="form-control"
                                    placeholder="Lastname" />
                            </div>

                            <div class="col-md-6">
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Your Email" />
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="phone" id="phone"
                                    placeholder="Phone Number" />
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="type" id="type"
                                    placeholder="Cryptocurrency Type" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="amount" id="amount"
                                    placeholder="Amount Deposited(USD)" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="blockchain_type" id="blockchain_type"
                                    placeholder="Blockchain Type" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="wallet" id="wallet"
                                    placeholder="Wallet Address" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="website" id="website"
                                    placeholder="Website Url" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="description" id="description"
                                    placeholder="Description" />
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" id="message" rows="6"
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
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var website = $("#website").val();
    var message = $("#message").val();
    var description = $("#description").val();
    var wallet = $("#wallet").val();
    var amount = $("#amount").val();
    var type = $("#type").val();
    var blockchain_type = $("#blockchain_type").val();

    if (firstname == "") {
        $("#firstname")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#firstname")
            .removeClass("form-control is-invalid")
            .addClass("form-control");
    }

    if (lastname == "") {
        $("#lastname")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#lastname")
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
    if (phone == "") {
        $("#phone")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#phone")
            .removeClass("form-control is-invalid")
            .addClass("form-control");
    }
    if (type == "") {
        $("#type")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#type")
            .removeClass("form-control is-invalid")
            .addClass("form-control");
    }
    if (blockchain_type == "") {
        $("#blockchain_type")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#blockchain_type")
            .removeClass("form-control is-invalid")
            .addClass("form-control");
    }

    if (website == "") {
        $("#website")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#website")
            .removeClass("form-control is-invalid")
            .addClass("form-control");
    }

    if (wallet == "") {
        $("#wallet")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#wallet")
            .removeClass("form-control is-invalid")
            .addClass("form-control");
    }

    if (amount == "") {
        $("#amount")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#amount")
            .removeClass("form-control is-invalid")
            .addClass("form-control");
    }
    if (description == "") {
        $("#description")
            .removeClass("form-control")
            .addClass("form-control is-invalid");
    } else {
        $("#description")
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

    if (
        firstname != "" &&
        lastname != "" &&
        email != "" &&
        phone != "" &&
        amount != "" &&
        website != "" &&
        wallet != "" &&
        message != "" &&
        description != "" &&
        type != "" &&
        blockchain_type != ""
    ) {
        $("#send_btn").html("Please Wait....");
        var formData = new FormData(document.getElementById("post_form"));
        fetch("admin/ajax_controls/sendComplaint.php", {
                method: "POST",
                body: formData,
            })
            .then(function(response) {
                return response.text();
            })
            .then(function(text) {
                $("#add_btn").html("Send");
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
                            window.location = "complaint.php";
                        },
                    });
                }
            });
    }
}
</script>