<style>
  .contact-container {
    max-width: 1200px;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    margin: 0 auto;
  }

  .left-panel {
    flex: 1;
    padding: 20px;
    border-radius: 8px;
    margin-right: 20px;
  }

  .right-panel {
    flex: 1;
    padding: 20px;
    border-radius: 8px;
    margin-left: 20px;
  }

  .contact-info {
    font-size: 16px;
  }

  .highlight {
    color: #545754;
    font-size: 1.5rem;
  }

  .contact-form {
    width: 100%;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    font-size: 14px;
    margin-bottom: 5px;
  }

  input,
  textarea {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
  }

  .form-button {
    background-color: #fff;
    color: #000;
    padding: 10px;
    border: 1px solid #000;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s, color 0.3s;
  }

  .form-button:hover {
    background-color: #000;
    color: #fff;
  }

  .contact-title {
    color: #b39f98;
  }

  @media (max-width: 768px) {
    .contact-container {
      flex-direction: column;
    }

    .left-panel,
    .right-panel {
      margin: 0;
    }
  }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="contact-container">
  <div class="left-panel">
    <div class="contact-info">
      <p class="contact-title">Questions? Call us!</p>
      <p class="highlight">+880 16 23023 469</p>
      <p>Monday to Friday from 10am to 6pm.</p>
      <p class="contact-title">Customer support</p>
      <p class="highlight">info@avantvista.com</p>
    </div>
  </div>

  <div class="right-panel">
    <div class="contact-form">
      <h2 class="form-title">ASK US. WE'LL HELP YOU.</h2>
      <form id="askForm">
        <div class="form-group">
          <label for="clientName">Name</label>
          <input type="text" id="clientName" name="clientName" class="form-input" value="Md. Aminul Islam" required>
        </div>

        <div class="form-group">
          <label for="clientEmail">Email</label>
          <input type="email" id="clientEmail" name="clientEmail" class="form-input" value="kaiidenaadhil@gmail.com" required>
        </div>

        <div class="form-group">
          <label for="whatsapp">WhatsApp</label>
          <input type="text" id="whatsapp" name="whatsapp" class="form-input" value="+8801521257123" required>
        </div>

        <div class="form-group">
          <label for="clientMessage">Message</label>
          <textarea id="clientMessage" name="clientMessage" rows="4" class="form-input" required>Contact Form desc</textarea>
        </div>
        <!-- Hidden input to store reCAPTCHA token -->
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
        <button type="submit" class="form-button">Submit</button>
      </form>
      <div id="responseMessage" style="margin-top: 10px; font-size: 14px;"></div>
    </div>
  </div>
</div>
<!-- Add the reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js?render=6LeX55YqAAAAABXGVr8Oy3gWkDVovIxhqw-04V8a"></script>
<script>
$(document).ready(function () {
  $('#askForm').on('submit', function (e) {
    e.preventDefault(); // Prevent default form submission

    grecaptcha.ready(function () {
      grecaptcha.execute('6LeX55YqAAAAABXGVr8Oy3gWkDVovIxhqw-04V8a', { action: 'submit' }).then(function (token) {
        // Add the token to the hidden input
        $('#g-recaptcha-response').val(token);

        // Serialize the form data, including the reCAPTCHA token
        const formData = $('#askForm').serialize();

        // Submit the form via AJAX
        $.ajax({
          url: '<?=ROOT?>/contact-us', // Replace with your AJAX handler
          type: 'POST',
          data: formData,
          dataType: 'json',
          success: function (response) {
            const messageDiv = $('#responseMessage');
            if (response.status === 'success') {
              messageDiv.css('color', 'green').text(response.message);
              $('#askForm')[0].reset(); // Reset form on success
            } else {
              messageDiv.css('color', 'red').text(response.message);
            }
          },
          error: function () {
            $('#responseMessage')
              .css('color', 'red')
              .text('An error occurred. Please try again.');
          },
        });
      });
    });
  });
});

</script>
