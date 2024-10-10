@extends("layouts.main")

@section("title", "About")


@section('stylesheet')
<link rel="stylesheet" href="/assets/styles/about.css">
@endsection

@section("container")
<section class="about">
    <p class="about-text">
      Hello ! <br />
      <br />
      Welcome to Folks Journey Indonesia, a dynamic travel startup founded by a
      group of friends who shared a love for <br />
      travel and storytelling, our company was born from those inspiring café
      talks about the world’s hidden gems and <br />
      unforgettable experiences. <br />
      <br />
      At Folks Journey Indonesia, we believe that the best travels are those
      that are thoughtfully curated and personally <br />
      tailored. Our small, dedicated team specializes in crafting unique travel
      experiences that reflect the rich <br />
      conversations and connections we first shared over coffee. Whether you're
      seeking a serene escape to nature, a <br />
      vibrant city adventure, or an off-the-beaten-path journey, we are here to
      turn your travel dreams into reality. <br />
      <br />
      Join us in exploring the world with the same enthusiasm and personalized
      touch that sparked our inception. Let <br />
      <span class="about-title-bold">Folks Journey Indonesia</span> be your
      guide to extraordinary destinations and unforgettable moments.
    </p>
    <nav class="about-list-container">
      <ul class="about-list">
        <li class="list-box">
          <img src="" alt="" class="icon-bali" />
          <p>Honeymoon & Family Packages</p>
        </li>
        <li class="list-box">
          <img src="" alt="" class="icon-mountain" />
          <p>Outdoor & Sport Packages</p>
        </li>
        <li class="list-box">
          <img src="" alt="" class="icon-car" />
          <p>Transportation & Accomodation Support</p>
        </li>
        <li class="list-box">
          <img src="" alt="" class="icon-bed" />
          <p>Bed & Breakfast Only</p>
        </li>
        <li class="list-box">
          <img src="" alt="" class="icon-temple" />
          <p>Amusements & Attractions</p>
        </li>
      </ul>
    </nav>
  </section>
@endsection

