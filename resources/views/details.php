<!doctype html>
<html lang="en" class="no-js">
<?php include 'includes/top.php'; ?>
<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>


<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NN7PSJQ"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- start header -->
<div class="header">
    <div class="container">
        <img src="<?= asset('assets/images/LOGO.jpg') ?>" class="logo">
        <div class="float-right">
            <img src="<?= asset('assets/images/steps.png') ?>">
        </div>
    </div>
</div>
<!-- end header -->
<!-- start section product detail -->
<section class="product-detail">
    <div class="container">
        <div class="left-block">
            <div class="left-side"> <?php include 'includes/error_messages.php';?>
                <div class="user-viewed">

                    <p>
                        <img src="<?= asset('assets/images/eye-icon.png') ?>"> 13 others are viewing this offer right now <span id="stopWatch" class="stopWatch"></span>
                    </p>
                </div>
                <div class="stock">
                    <p>
                        <span class="green">Great Choice!</span> You're taking your first step towards a larger and thicker penis.
                    </p>
                    <hr/>
                </div>
                <div class="details">
                    <div class="row">
                        <div class="col-sm-4 col-4">
                            <a href="#"><img src="<?= asset('public/images/books_new.PNG') ?>"></a>
                        </div>
                        <div class="col-sm-8 col-8">
                            <div class="product-name" >Glorious Enlargement Program</div>
                            <p>
                                A Scientific System to Add <br/> 2-4 Inches in Length and Girth
                            </p>
                            <div class="product-price" >
                                <div class="sub-price">price <span class="green">$7.00</span></div>
                                <div>
                                    Tax: <span class="right">$0.00</span>
                                </div>
                                <div class="total-price text-right">total: <span>$7.00</span></div>

                            </div>
                        </div>
                    </div>
                    <img src="<?= asset('assets/images/ck-arrow2.png') ?>" class="baner">
                    <ul class="test-points">
                        <li><span>Enhances</span> Sex Drive &amp; Libido </li>
                        <li><span>Achieve</span> Bigger &amp; Harder Erections </li>
                        <li><span>Longer</span> Sexual Staying Power</li>
                        <li><span>Increased</span> Penis Length &amp; Girth</li>
                    </ul>
                </div>
                <div class="more-info hide-sm">
                    <p>
                        <small>
                            Your purchase will show a charge from ctrlbill.com on your credit card statement. With this purchase you're also getting a free trial membership to diamondbabeshd.com, which contains thousands of DVDs and some of the hottest pornstars in the world. Your free trial membership will allow you to access diamondbabeshd.com free for three (3) days. If you decide to continue being a member after three (3) days, do nothing and we'll charge your credit card one (1) easy payment at just ninety nine dollars ninety four cents ($99.94) for three (3) months of membership. If for any reason, you are not happy and you are within the three (3) days period, simply send an email to support@ctrlbill.com to cancel your membership. We know that you are going to love your membership, and will want to continue using it. Unless you request to cancel your credit card will be billed ninety nine dollars ninety four cents ($99.94) every three (3) months. Remember you can cancel your membership at any time.

                        </small>
                    </p>
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="payment-head">

            </div>
            <div class="payment-body">
                <div class="payment-methods">
                    we accept: <img src="<?= asset('assets/images/visa.png') ?>">
                    <img src="<?= asset('assets/images/mastar-card.png') ?>">
                    <img src="<?= asset('assets/images/visa-el.png') ?>">
                </div>
                <div class="payment-form">
                    <form method="post" action="<?= asset('/') ?>" id="payment-form">
                        <?= csrf_field() ?>

                        <div class="form-group row">
                            <p  class="alert alert-danger payment-errors-annully"  style="display: none"></p>
                            <label for="full-name" class="col-4 col-form-label">full name:</label>
                            <div class="col-8">
                                <input name="full_name" required="" type="text" class="form-control" id="full-name" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Postcode" class="col-4 col-form-label">Zip/Postal Code:</label>
                            <div class="col-8">
                                <input name="post_code" required="" type="text" class="form-control" id="Postcode" placeholder="Zip/Postal Code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Country" class="col-4 col-form-label">Country:</label>
                            <div class="col-8">

                                <select name="country" required="" type="text" class="form-control" id="Country" placeholder="Country">
                                    <option value="">Select Country</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">France, Metropolitan</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                    <option value="Moldova">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Yugoslavia">Yugoslavia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=" Email" class="col-4 col-form-label"> Email:</label>
                            <div class="col-8">
                                <input name="email" required="" type="email" class="form-control" id=" Email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="credit" class="col-4 col-form-label">Credit Card #:</label>
                            <div class="col-8">
                                <input data-stripe="number" value="" size="16" pattern="/^-?\d+\.?\d*$/" type="number" onKeyPress="if (this.value.length == 16) return false;" name="" type="text" class="form-control" id="credit" placeholder="********">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-4 col-form-label">Exp Date: #:</label>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-6 no-right-padding">
                                        <select data-stripe="exp-month"  class="form-control " name="fields_expmonth">
                                            <option value="" selected="">Month</option>
                                            <option value="01">(01) January</option>
                                            <option value="02">(02) February</option>
                                            <option value="03">(03) March</option>
                                            <option value="04">(04) April</option>
                                            <option value="05">(05) May</option>
                                            <option value="06">(06) June</option>
                                            <option value="07">(07) July</option>
                                            <option value="08">(08) August</option>
                                            <option value="09">(09) September</option>
                                            <option value="10">(10) October</option>
                                            <option value="11">(11) November</option>
                                            <option value="12">(12) December</option>
                                        </select>
                                    </div>
                                    <div class="col-6 no-left-padding">
                                        <select data-stripe="exp-year"  class="form-control">
                                            <option value="" selected="">Year</option>
                                            <option value="19">2019</option>
                                            <option value="20">2020</option>
                                            <option value="21">2021</option>
                                            <option value="22">2022</option>
                                            <option value="23">2023</option>
                                            <option value="24">2024</option>
                                            <option value="25">2025</option>
                                            <option value="26">2026</option>
                                            <option value="27">2027</option>
                                            <option value="28">2028</option>
                                            <option value="29">2029</option>
                                            <option value="30">2030</option>
                                            <option value="31">2031</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="credit" class="col-4 col-form-label">CVV:</label>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-6">
                                        <input data-stripe="cvc"  type="text" class="form-control" id="credit" size="4"  type="number" name="" placeholder="CVV" onKeyPress="if (this.value.length == 3)
                                                                            return false;" placeholder="CVV">
                                    </div>
                                    <label for="credit" class="col-6 col-form-label note">whats this?</label>
                                </div>
                            </div>
                            <div class="note-block text-center">
                                <img src="<?= asset('assets/images/cvv.png') ?>" class="img-fluid">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" id="com_checkout" class="btn btn-success">complete checkout</button>
                        </div>
                    </form>
                    <div class="securty text-center"><img src="<?= asset('assets/images/securty.png') ?>"></div>
                </div>
                <div class="right-footer">
                    <i class="fa fa-lock"></i>
                    Secure 256 Bit Encrypted Connection
                </div>
                <div class="more-info show-sm">
                    <p>
                        <small>
                            Your package will contain one bottle of Andro Testo Pro If you decide to continue using
                            Andro Testo Pro 14 days after your order date, do nothing and we'll charge your credit
                            card 1 easy payment for the 1 bottle at just £59.99. If for any reason, you are not
                            satisfied and you are within the 14 days of date of order, simply call Tel: +44
                            2038085456 (Monday-Friday: 8AM-5PM, SAT: 9AM-1PM, GMT) and request a return
                            authorization number and instructions to return the product. We know that you are going
                            to love this amazing product, and will want to continue taking Andro Testo Pro. And as
                            a member of Andro Testo Pro's Lifestyle's Program, we provide you convenience by
                            ensuring that you do not run out of Andro Testo Pro and continue with your health
                            benefits. You'll receive a new supply every 30 days, starting in 45 days from the date
                            of your original order. Your credit card will be automatically billed a discounted per
                            bottle price of just £59.99 (plus £4.93 p&p) every 30 days. Remember that at any time
                            you can modify your shipment or if you are not completely satisfied, just call us to
                            cancel.
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    Stripe.setPublishableKey('<?= env('STRIPE_KEY') ?>');
    jQuery(function ($) {
        $('#payment-form').submit(function (event) {
            var $form = $(this);
            $("#com_checkout").html("Please wait..");
            $("#com_checkout").prop('disabled', true);

            // Disable the submit button to prevent repeated clicks
            $form.find('button').prop('disabled', true);

            Stripe.card.createToken($form, stripeResponseHandler);

            // Prevent the form from submitting with the default action
            return false;
        });
    });

    function stripeResponseHandler(status, response) {
        var $form = $('#payment-form');

        if (response.error) {
            // Show the errors on the form
            $("#com_checkout").html("Complete Checkout");
            $("#com_checkout").prop('disabled', false);
            $form.find('.payment-errors-annully').show().text(response.error.message);
            $form.find('button').prop('disabled', false);

        } else {
            // response contains id and card, which contains additional card details
            var token = response.id;
            // Insert the token into the form so it gets submitted to the server
            $form.append($('<input type="hidden" name="stripeToken" />').val(token));

            // and submit+
            $form.get(0).submit();
        }
    }
</script>
<script>
    $(".note").hover(function(){
        $(".note-block").slideDown();
    },function(){
        $(".note-block").slideUp();
    })
</script>
<script>
    document.getElementById("stopWatch").innerHTML = "";
    //localStorage.clear();
    window.onload = function () {

        if (typeof localStorage.getItem("min") !== 'undefined' && typeof localStorage.getItem("sec") !==
            'undefined' && localStorage.getItem("min") != null && localStorage.getItem("sec") != null) {
            var min = localStorage.getItem("min");
            var sec = localStorage.getItem("sec");
        } else {
            console.log("c2");
            var min = "0" + 5;
            var sec = "0" + 0;
        }
        var time;

        setInterval(function () {

            localStorage.setItem("min", min);
            localStorage.setItem("sec", sec);
            time = min + " : " + sec;
            document.getElementById("stopWatch").innerHTML = time;
            if (sec == 00) {
                if (min != 0) {
                    min--;
                    sec = 59;
                    if (min < 10) {
                        min = "0" + min;
                    }
                }
            } else {
                sec--;
                if (sec < 10) {
                    sec = "0" + sec;
                }
            }
            if (min == 00) {
                if (sec == 00) {
                    document.getElementById("stopWatch").innerHTML = "00:00";
                }
            }
        }, 1000);
    }
</script>
</body>

</html>