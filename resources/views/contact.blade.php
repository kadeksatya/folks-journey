@extends("layouts.main")

@section("title", "Contact us")


@section('stylesheet')
<link rel="stylesheet" href="/assets/styles/contact.css">
@endsection

@section("container")
<section class="contact">
    <div class="contact-container">
      <form action="submit.php" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required />
        </div>

        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" id="phone" name="phone" required />
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        </div>

        <div class="below-form-content">
          <div class="captcha-box">
            <input type="checkbox" id="captcha" name="captcha" />
            <label for="captcha">I am not robot!</label>
          </div>

          <button type="submit" class="submit-btn">submit</button>
        </div>
      </form>

      <div class="contact-info">
        <p><img src="/img/gmail.png" alt="email" /> info@folksjourney.com</p>
        <p>
          <img src="/img/whatsapp.png" alt="whatsapp" /> +62 8 7777 4 888 92
        </p>
        <p>
          <img src="/img/mark-location.png" alt="location" />Jl. Raya Payangan, Br.
          Bayad, Kecamatan Payangan, Gianyar, Bali INA
        </p>
      </div>
    </div>
  </section>
@endsection