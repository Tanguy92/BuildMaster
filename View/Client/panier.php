<form action="index.php?page=panier" method="POST">
    <?php
    echo "<img src=",$donnees2["photo"]," width=65 height=65 >",$donnees2["nom"]," prix à la journée ",$donnees2["prix"],"€ <button name=supprimerPanier type=submit value=", $donnees2["idProduit"], ">Supprimer du panier</button>";
    ?>
</form>
<form action="index.php?page=panier" method="POST">
    Date de votre location : de <input type="date" name="dateDebut" min=<?php echo $donnees2["dateDebut"];?> max=<?php echo $donnees2["dateFin"];?> required>  à <input type="date" name="dateFin" min=<?php echo $donnees2["dateDebut"];?> max=<?php echo $donnees2["dateFin"];?> required> <br>
    <?php
    echo "<button name=commander type=submit value=", $donnees2["idProduit"], ">Commander</button>";
    ?>
</form>

<script
              src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
              integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
              crossorigin="anonymous"></script>
<div class="form-container">
  <div class="bg-illustration">
    <svg width="801" height="570" viewBox="0 0 801 570" xmlns="http://www.w3.org/2000/svg"><path fill="#FFF" fill-rule="evenodd"/></svg>

  </div>

  <header>
    <h1>Payment Method</h1>
    <link rel="stylesheet" href="View/Css/carte.css">
  </header>

  <form id="my-sample-form" class="scale-down">
    <div class="cardinfo-card-number">
      <label class="cardinfo-label" for="card-number">Card Number</label>
      <div class='input-wrapper' id="card-number"></div>
      <div id="card-image"></div>
    </div>

    <div class="cardinfo-wrapper">
      <div class="cardinfo-exp-date">
        <label class="cardinfo-label" for="expiration-date">Valid Thru</label>
        <div class='input-wrapper' id="expiration-date"></div>
      </div>

      <div class="cardinfo-cvv">
        <label class="cardinfo-label" for="cvv">CVV</label>
        <div class='input-wrapper' id="cvv"></div>
      </div>
    </div>
  </form>

  <input id="button-pay" type="submit" value="Continue"/>
</div>

<!-- Load the required client component. -->
<script src="https://js.braintreegateway.com/web/3.45.0/js/client.min.js"></script>

<!-- Load Hosted Fields component. -->
<script src="https://js.braintreegateway.com/web/3.45.0/js/hosted-fields.min.js"></script>

<script>
var form = document.querySelector('#my-sample-form');
var submit = document.querySelector('input[type="submit"]');

braintree.client.create({
  authorization: 'sandbox_g42y39zw_348pk9cgf3bgyw2b'
}, function (err, clientInstance) {
  if (err) {
    console.error(err);
    return;
  }

  // Create input fields and add text styles
  braintree.hostedFields.create({
    client: clientInstance,
    styles: {
      'input': {
        'color': '#282c37',
        'font-size': '16px',
        'transition': 'color 0.1s',
        'line-height': '3'
      },
      // Style the text of an invalid input
      'input.invalid': {
        'color': '#E53A40'
      },
      // placeholder styles need to be individually adjusted
      '::-webkit-input-placeholder': {
        'color': 'rgba(0,0,0,0.6)'
      },
      ':-moz-placeholder': {
        'color': 'rgba(0,0,0,0.6)'
      },
      '::-moz-placeholder': {
        'color': 'rgba(0,0,0,0.6)'
      },
      ':-ms-input-placeholder': {
        'color': 'rgba(0,0,0,0.6)'
      }

    },

    // Add information for individual fields
    fields: {
      number: {
        selector: '#card-number',
        placeholder: '1111 1111 1111 1111'
      },
      cvv: {
        selector: '#cvv',
        placeholder: '123'
      },
      expirationDate: {
        selector: '#expiration-date',
        placeholder: '10 / 2019'
      }
    }
  }, function (err, hostedFieldsInstance) {
    if (err) {
      console.error(err);
      return;
    }

    hostedFieldsInstance.on('validityChange', function (event) {
      // Check if all fields are valid, then show submit button
      var formValid = Object.keys(event.fields).every(function (key) {
        return event.fields[key].isValid;
      });

      if (formValid) {
        $('#button-pay').addClass('show-button');
      } else {
        $('#button-pay').removeClass('show-button');
      }
    });

    hostedFieldsInstance.on('empty', function (event) {
      $('header').removeClass('header-slide');
      $('#card-image').removeClass();
      $(form).removeClass();
    });

    hostedFieldsInstance.on('cardTypeChange', function (event) {
      // Change card bg depending on card type
      if (event.cards.length === 1) {
        $(form).removeClass().addClass(event.cards[0].type);
        $('#card-image').removeClass().addClass(event.cards[0].type);
        $('header').addClass('header-slide');

        // Change the CVV length for AmericanExpress cards
        if (event.cards[0].code.size === 4) {
          hostedFieldsInstance.setAttribute({
            field: 'cvv',
            attribute: 'placeholder',
            value: '1234'
          });
        } 
      } else {
        hostedFieldsInstance.setAttribute({
          field: 'cvv',
          attribute: 'placeholder',
          value: '123'
        });
      }
    });

    submit.addEventListener('click', function (event) {
      event.preventDefault();

      hostedFieldsInstance.tokenize(function (err, payload) {
        if (err) {
          console.error(err);
          return;
        }

        // This is where you would submit payload.nonce to your server
        alert('Submit your nonce to your server here!');
      });
    }, false);
  });
});

</script>