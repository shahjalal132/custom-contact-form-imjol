<?php
/**
 * Form Shortcode
 */

// imjol contact form shortcode
function imjol_contact_form_shortcode() {
    ob_start()?>

<body data-new-gr-c-s-check-loaded="8.907.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <div class="body-bg formify-quiz-layout-5">

        <section class="formify-form">

            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12  formify-form__acenter">
                        <!-- Welcome Banner -->
                        <div
                            class="formify-form__layout formify-form__100vh  formify-form__layout--quiz formify-form__layout--quiz--v5 p-0  formify-bg-none">

                            <div
                                class="formify-form__quiz-banner formify-form__quiz-banner--v5 formify-bg-cover formify-form__jcenter formify-form__ccolumn ">
                                <div class="formify-form__quiz-banner--content">
                                    <h2 class="formify-form__quiz-banner--title">Interested in working with us</h2>
                                    <p class="formify-form__quiz-banner--text">We are a Creative &amp; Digital Agency
                                        who creates enterprise solutions for your brand. The more information you can
                                        give us, the more accurate the quotation will be.</p>
                                </div>

                            </div>
                            <div
                                class="formify-form__layout--quiz-main formify-form__layout--quiz-main--v5 formify-bg-cover formify-form__ccolumn">
                                <!-- Form Area -->
                                <div class="formify-form__inner--quiz formify-form__inner--quiz--v5">
                                    <!-- End Quiz Timing -->
                                    <div class="formify-form__form-box formify-form__form-box--v5">

                                        <div class="list-group formify-form__nav" id="list-tab" role="tablist">
                                            <a class="list-group-item active" data-bs-toggle="list" href="#step1"
                                                role="tab">Step 1</a>
                                            <a class="list-group-item" data-bs-toggle="list" href="#step2"
                                                role="tab">Step 2</a>
                                            <a class="list-group-item" data-bs-toggle="list" href="#step3"
                                                role="tab">Step 3</a>
                                            <a class="list-group-item" data-bs-toggle="list" href="#step4"
                                                role="tab">Step 4</a>
                                            <a class="list-group-item" data-bs-toggle="list" href="#step5"
                                                role="tab">Step 5</a>
                                        </div>


                                        <!-- Form Area -->
                                        <form id="multiStepForm"
                                            class="formify-forms formify-forms__quiz imjol_form_submit formify-forms__quiz--v5 formify-forms--role-form"
                                            action="<?php echo $_SERVER['PHP_SELF']; ?> method="post">
                                            <div class="tab-content">
                                                <!-- Step 1: Personal Information -->
                                                <div class="tab-pane fade show active" id="step1">
                                                    <div class="formify-forms__quiz-single">
                                                        <h3 class="formify-forms__quiz-title--v5 m-0">Choose What you
                                                            need!</h3>
                                                        <p class="formify-forms__quiz-text--v5 m-0">👋 Select your
                                                            interest to get started.</p>
                                                        <div class="formify-forms__quiz-form formify-mg-top-40">
                                                            <div class="formify-forms__quiz-form">
                                                                <!-- Single Group for Multiple Selection (Website) -->
                                                                <div class="form-group formify-mg-top-15">
                                                                    <div
                                                                        class="formify-forms__input formify-forms__input--quiz">
                                                                        <input class="formify-forms__input d-none"
                                                                            type="checkbox" value="Website" id="q-1"
                                                                            name="website">
                                                                        <label
                                                                            class="formify-forms__input--quiz-label formify-forms__input--role"
                                                                            for="q-1">
                                                                            <div class="formify-forms__role">
                                                                                <img
                                                                                    src="<?php echo IMJOL_PLUGIN_URL ?>/assets/images/formify-role1.png">
                                                                                <div
                                                                                    class="formify-forms__role-content">
                                                                                    <h4
                                                                                        class="formify-forms__role-title">
                                                                                        Website</h4>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="formify-forms__quiz-check formify-forms__quiz-check--role">
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <!-- Single Group for Multiple Selection (Software) -->
                                                                <div class="form-group formify-mg-top-15">
                                                                    <div
                                                                        class="formify-forms__input formify-forms__input--quiz">
                                                                        <input class="formify-forms__input d-none"
                                                                            type="checkbox" value="Software" id="q-2"
                                                                            name="software">
                                                                        <label
                                                                            class="formify-forms__input--quiz-label formify-forms__input--role"
                                                                            for="q-2">
                                                                            <div class="formify-forms__role">
                                                                                <img
                                                                                    src="<?php echo IMJOL_PLUGIN_URL ?>/assets/images/formify-role2.png">
                                                                                <div
                                                                                    class="formify-forms__role-content">
                                                                                    <h4
                                                                                        class="formify-forms__role-title">
                                                                                        Software</h4>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="formify-forms__quiz-check formify-forms__quiz-check--role">
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <!-- Single Group for Multiple Selection (Mobile Application) -->
                                                                <div class="form-group formify-mg-top-15">
                                                                    <div
                                                                        class="formify-forms__input formify-forms__input--quiz">
                                                                        <input class="formify-forms__input d-none"
                                                                            type="checkbox" value="Mobile Application"
                                                                            id="q-5" name="mobile-app">
                                                                        <label
                                                                            class="formify-forms__input--quiz-label formify-forms__input--role"
                                                                            for="q-5">
                                                                            <div class="formify-forms__role">
                                                                                <img
                                                                                    src="<?php echo IMJOL_PLUGIN_URL ?>/assets/images/formify-role3.png">
                                                                                <div
                                                                                    class="formify-forms__role-content">
                                                                                    <h4
                                                                                        class="formify-forms__role-title">
                                                                                        Mobile Application</h4>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="formify-forms__quiz-check formify-forms__quiz-check--role">
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <!-- Form Group -->
                                                                <div class="form-group formify-mg-top-40">
                                                                    <div class="formify-forms__button">
                                                                        <button
                                                                            class="formify-btn next-step">Next</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Form Group -->
                                                </div>


                                                <!-- Step 2 -->
                                                <div class="tab-pane fade" id="step2">
                                                    <div class="formify-forms__quiz-single">
                                                        <h3 class="formify-forms__quiz-title--v5 m-0">Write Your
                                                            Requirement</h3>
                                                        <div class="formify-forms__quiz-form formify-mg-top-10">
                                                            <button class="required">Your Requirement</button>
                                                            <div id="fieldContainer">
                                                                <textarea
                                                                    placeholder="Write Your Requirement"
                                                                    id="requirement" name="requirement"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group formify-mg-top-40">
                                                        <div class="formify-forms__button">
                                                            <button class="formify-btn prev-step">Previous</button>
                                                            <button type="button" class="add_but"
                                                                id="addFieldButton">Add
                                                                Requirement</button>
                                                            <button class="formify-btn next-step">Next</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Step 3 -->
                                                <div class="tab-pane fade show active" id="step3">
                                                    <div class="formify-forms__quiz-single">
                                                        <h3 class="formify-forms__quiz-title--v5 m-0">Write Your Budget?
                                                        </h3>
                                                        <div class="formify-forms__quiz-form formify-mg-top-40">
                                                            <div class="formify-forms__quiz-form">
                                                                <!-- Single Group for Multiple Selection (Website) -->
                                                                <div class="budget-dropdown">
                                                                    <button class="budget-dropdown-button"><img
                                                                            src="<?php echo IMJOL_PLUGIN_URL ?>/assets/images/img.png"
                                                                            style="width: 4%;">Select
                                                                        Your Budget</button>
                                                                    <div class="budget-dropdown-content">
                                                                        <a href="#"
                                                                            onclick="selectBudget('20k - 30k')">20k -
                                                                            30k</a>
                                                                        <a href="#"
                                                                            onclick="selectBudget('30k - 40k')">30k -
                                                                            40k</a>
                                                                        <a href="#"
                                                                            onclick="selectBudget('40k - 50k')">40k -
                                                                            50k</a>
                                                                        <a href="#"
                                                                            onclick="selectBudget('Budget Planner')">Budget
                                                                            Planner</a>
                                                                    </div>
                                                                    <div class="custom-field-input">
                                                                        <textarea id="budget_planer_custom_field"
                                                                            placeholder="Write Your Budget"></textarea>
                                                                    </div>
                                                                </div>
                                                                <!-- Form Group -->
                                                                <div class="form-group formify-mg-top-40">
                                                                    <div class="formify-forms__button">
                                                                        <button
                                                                            class="formify-btn prev-step">Previous</button>
                                                                        <button
                                                                            class="formify-btn next-step">Next</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Form Group -->
                                                </div>

                                                <!-- Step 4 -->
                                                <div class="tab-pane fade show active" id="step4">
                                                    <div class="formify-forms__quiz-single">
                                                        <h3 class="formify-forms__quiz-title--v5 m-0">Write Your
                                                            Statement at timeline?</h3>
                                                        <div class="formify-forms__quiz-form formify-mg-top-40">
                                                            <div class="formify-forms__quiz-form">
                                                                <!-- Single Group for Multiple Selection (Website) -->
                                                                <div class="time-dropdown">
                                                                    <button class="time-dropdown-button"><img
                                                                            src="<?php echo IMJOL_PLUGIN_URL ?>/assets/images/img.png"
                                                                            style="width: 4%;">Your
                                                                        Project Deadline</button>
                                                                    <div class="time-dropdown-content">
                                                                        <a href="#" onclick="selectTime('1 Months')">1
                                                                            Months</a>
                                                                        <a href="#" onclick="selectTime('2 Months')">2
                                                                            Months</a>
                                                                        <a href="#" onclick="selectTime('3 Months')">3
                                                                            Months</a>
                                                                        <a href="#"
                                                                            onclick="selectTime('Preferred Project Duration')">Preferred
                                                                            Project Duration</a>
                                                                    </div>
                                                                    <div class="custom-field"
                                                                        style="display: none; margin-top: 10px;">
                                                                        <textarea id="project_deadline_custom_field"
                                                                            placeholder="Write Your Project Deadline"></textarea>
                                                                    </div>
                                                                </div>
                                                                <!-- Form Group -->
                                                                <div class="form-group formify-mg-top-40">
                                                                    <div class="formify-forms__button">
                                                                        <button
                                                                            class="formify-btn prev-step">Previous</button>
                                                                        <button
                                                                            class="formify-btn next-step">Next</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Form Group -->
                                                </div>
                                                <!-- Step 4 -->

                                                <!-- Step 5 -->
                                                <div class="tab-pane fade" id="step4">
                                                    <div class="formify-forms__quiz-single">
                                                        <h3 class="formify-forms__quiz-title--v5 m-0">How Can We Contact
                                                            You?</h3>
                                                        <p class="formify-forms__quiz-text--v5 m-0">Let’s start your
                                                            dream journey</p>
                                                        <div class="formify-forms__quiz-form formify-mg-top-10">
                                                            <div
                                                                class="formify-forms__quiz-form formify-forms__quiz-form--v5">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="formify-forms__input">
                                                                                <label>First Name <span>*</span></label>
                                                                                <input type="text" name="first-name"
                                                                                    placeholder="Enter name here"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="formify-forms__input">
                                                                                <label>Address <span>*</span></label>
                                                                                <input type="textarea" name="address"
                                                                                    placeholder="Enter your address"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="formify-forms__input">
                                                                                <label>Email <span>*</span></label>
                                                                                <input type="email" name="email"
                                                                                    placeholder="Type Email"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="formify-forms__input">
                                                                                <label>Phone Number
                                                                                    <span>*</span></label>
                                                                                <input type="text" name="number"
                                                                                    placeholder="Phone number"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div
                                                                                class="formify-forms__input formify-forms__textarea">
                                                                                <label>Whatsapp Number
                                                                                    <span>*</span></label>
                                                                                <input type="text" name="whats-app-number"
                                                                                    placeholder="Whatsapp Number"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <!-- Form Group -->
                                                                        <div class="form-group">
                                                                            <div class="formify-forms__spaceb">
                                                                                <div class="formify-forms__checkbox">
                                                                                    <label class="m-0" for="checkbox">By
                                                                                        continuing the next level, you
                                                                                        agree to <a href="#">Privacy
                                                                                            Policy</a> and <a
                                                                                            href="#">Terms of
                                                                                            use</a></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Form Group -->
                                                                <div class="form-group formify-mg-top-40">
                                                                    <div class="formify-forms__button">
                                                                        <button
                                                                            class="formify-btn prev-step">Previous</button>
                                                                            <p class="success-message">Thank you! form submitted successfully</p>
                                                                            <p class="error-message">Please fill up all required fields</p>
                                                                        <button
                                                                            class="formify-btn submit-button" type="submit" id="submit-btn" name="submit">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Form Group -->
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Form Area -->
                                    </div>
                                </div>
                                <!-- End Form Area -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Formify Scripts -->
    <script type="text/javascript" async=""
        src="https://www.gstatic.com/recaptcha/releases/vm_YDiq1BiI3a8zfbIPZjtF2/recaptcha__en.js"
        crossorigin="anonymous" integrity="sha384-jmuBB3ajBz67HkD9EOwlByuyyxCYut7RyJGCbt+luJzVIFeqE/GGKvIVjUTdjP4o">
    </script>

</body>

<?php return ob_get_clean();
}

add_shortcode( 'imjol-contact-form-shortcode', 'imjol_contact_form_shortcode' );

// Mail Functionality
if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['submit'] ) ) {
    // Form has been submitted, process and send email
    $name  = sanitize_text_field( $_POST['first-name'] );
    $email = sanitize_email( $_POST['email'] );

    // Send email
    my_send_email_function( $name, $email );
}

function my_send_email_function( $name, $email, $message = '' ) {
    $to      = 'ffshahjalal@gmail.com';
    $subject = 'New Form Submission';
    $headers = [ 'Content-Type: text/html; charset=UTF-8' ];

    $body = "Name: $name<br>";
    $body .= "Email: $email<br>";
    $body .= "Message: $message<br>";

    // Send email
    wp_mail( $to, $subject, $body, $headers );
}
