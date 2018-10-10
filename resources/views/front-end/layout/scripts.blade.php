<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="scripts/rangeSlider.js"></script>
<script type="text/javascript" src="scripts/sticky-kit.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/masonry.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
  window.addEventListener("load", function() {
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#237afc"
        },
        "button": {
          "background": "#fff",
          "text": "#237afc"
        }
      },
      "position": "top",
      "content": {
        "href": "www.holiday4change/cookies"
      }
    })
  });
</script>


<!-- COMMON SCRIPTS -->
  <script src="js3/jquery-2.2.4.min.js"></script>
  <script src="js3/common_scripts.min.js"></script>
<script src="js3/menu.js"></script>
<script src="js3/main.js"></script>
<script src="js3/wizard_func_multiple_branch.js"></script>

<!-- STRIPE SCRIPTS -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">

    Stripe.setPublishableKey("{{ config('services.stripe.key') }}");

    $(function() {
        var $form = $('#payment-form');
        $form.submit(function(event) {
            // Disable the submit button to prevent repeated clicks:
            $form.find('.submit').prop('disabled', true);

            // Request a token from Stripe:
            Stripe.card.createToken($form, stripeResponseHandler);

            // Prevent the form from being submitted:
            return false;
        });
    });

    function stripeResponseHandler(status, response) {
        // Grab the form:
        var $form = $('#payment-form');

        if (response.error) { // Problem!

            // Show the errors on the form:
            $form.find('.payment-errors').text(response.error.message);
            $form.find('.submit').prop('disabled', false); // Re-enable submission

        } else { // Token was created!

            // Get the token ID:
            var token = response.id;

            // Insert the token ID into the form so it gets submitted to the server:
            $form.append($('<input type="hidden" name="stripeToken">').val(token));

            // Submit the form:
            $form.get(0).submit();
        }
    };
</script>
