@extends("layouts.master")

@section("content")

<div class="card author-box card-primary">
    <div class="card-body">
      <div class="author-box-left">
        <img alt="image" src="{{asset ("img/users/user-1.png") }}" class="rounded-circle author-box-picture">
        <div class="clearfix"></div>
      </div>
      <div class="author-box-details">
        <div class="author-box-name">
          <a href="#">Bienvenu, {{ nomComplet() }}</a>
        </div>
        <div class="author-box-job">
            {{ getNomRole() }}
        </div>
        <div class="author-box-description">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
        </div>
      </div>
    </div>
  </div>

@endsection
