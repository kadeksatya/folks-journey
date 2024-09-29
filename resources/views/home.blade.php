@extends("layouts.main")

@section("title", "Home")

@section("container")
<section class="home">
        <h1 class="home-title">
          Vacation isn't supposed to be <br />
          frustrating.
        </h1>
        <div class="form-container">
          <p class="home-subtitle">
            Let's start our journey! <br />
            <span class="subtitle-sub">Subscribe Now!</span>
          </p>
          <div class="form-wrapper">
            <form class="home-form" action="input">Enter email here.</form>
            <button class="home-submit-btn">submit.</button>
          </div>
        </div>
      </section>
@endsection

@section('stylesheet')
<link rel="stylesheet" href="/assets/styles/home.css">
@endsection