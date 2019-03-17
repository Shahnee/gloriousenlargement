<!doctype html>
<html lang="en" class="no-js">

    <?php include 'includes/top.php'; ?>

    <body>
        <!-- start header -->
        <div class="header">
            <div class="container">
                <img src="<?= asset('assets/images/logo-blue.png') ?>">
                <div class="float-right">
                    <div class="steps">
                        <div class="step-inner row">
                            <div class="step active col-4">
                                <span class="num">1</span>
                                <span class="step-status">add to cart</span>
                            </div>

                            <div class="step active col-4">
                                <span class="num">2</span>
                                <span class="step-status">finish order</span>
                            </div>
                            <div class="step col-4">
                                <span class="num"><i class="fa fa-check"></i></span>
                                <span class="step-status">instant access</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start section product detail -->
        <section class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <div class="left-side"> <?php include 'includes/error_messages.php';?>
                            <div class="user-viewed">
                               
                                <p>
                                    <img src="<?= asset('assets/images/eye-icon.png') ?>"> 13 others are viewing this offer right now <span class="stopWatch">00:00</span>
                                </p>
                            </div>
                            <div class="stock">
                                <p>
                                    <span class="green">Great Choice!</span> You're taking your first step towards enhanced
                                    sexual health.
                                </p>
                                <hr/>
                            </div>
                            <div class="details">
                                <div class="row">
                                    <div class="col-sm-4 col-12">
                                        <a href="#"><img src="<?= asset('assets/images/book1.jpg') ?>"></a>
                                    </div>
                                    <div class="col-sm-8 col-12">
                                        <div class="product-name">Glorious enlargement program</div>
                                        <p>
                                            Male Enhancement Formula

                                            30 Day Supply - 60 capsules
                                        </p>
                                        <div class="product-price">
                                            <div class="sub-price">price <span class="green">$67.00</span></div>
                                            <div>
                                                memberships: <span class="right">$2.95</span>
                                            </div>
                                            <div class="total-price text-right">total: <span>$69.95</span></div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="test-points">
                                    <li><span>Enhances</span> Sex Drive &amp; Libido </li>
                                    <li><span>Achieve</span> Bigger &amp; Harder Erections </li>
                                    <li><span>Longer</span> Sexual Staying Power</li>
                                    <li><span>Increased</span> Penis Length &amp; Girth</li>
                                </ul>
                            </div>
                            <div class="more-info">
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
                    <div class="col-md-4 col-12 right-side">
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
                                            <input name="full_name" required="" type="text" class="form-control" id="full-name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Postcode" class="col-4 col-form-label">Postcode:</label>
                                        <div class="col-8">
                                            <input name="post_code" required="" type="text" class="form-control" id="Postcode">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Country" class="col-4 col-form-label">Country:</label>
                                        <div class="col-8">
                                            <input name="country" required="" type="text" class="form-control" id="Country">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for=" Email" class="col-4 col-form-label"> Email:</label>
                                        <div class="col-8">
                                            <input name="email" required="" type="email" class="form-control" id=" Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="credit" class="col-4 col-form-label">Credit Card #:</label>
                                        <div class="col-8">
                                            <input data-stripe="number" value="" size="16" pattern="/^-?\d+\.?\d*$/" type="number" onKeyPress="if (this.value.length == 16) return false;" name="" type="text" class="form-control" id="credit">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="date" class="col-4 col-form-label">Exp Date: #:</label>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col-6">
                                                    <select data-stripe="exp-month"  class="form-control" name="fields_expmonth">
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
                                                <div class="col-6">
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
                                                    <input data-stripe="cvc"  type="text" class="form-control" id="credit" size="4"  type="number" name="" placeholder="CVC" onKeyPress="if (this.value.length == 3)
                                                                            return false;">
                                                </div>
                                                <label for="credit" class="col-6 col-form-label note">whats that?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success">complete checkout</button>
                                    </div>
                                </form>
                                <div class="securty text-center"><img src="<?= asset('assets/images/securty.png') ?>"></div>
                            </div>
                            <div class="right-footer">
                                <i class="fa fa-lock"></i> 
                                Secure 256 Bit Encrypted Connection
                            </div>
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
    </body>

</html>