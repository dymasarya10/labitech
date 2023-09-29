@extends('front.layout.app')

@section('main_content')
<section class="appsec">
    <div class="container">
        <div class="row pt-2 pt-md-5">
            {{-- FOREACH --}}
            <div class="col-md-4 col-6 pt-md-5 mb-md-2 mb-3">
                <div class="card">
                    <img src="dist-front/img/keg1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="appsec-card card-title">Card title</h5>
                      <p class="appsec-card card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="appsec-card btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            {{-- ENDFOREACH --}}
        </div>
    </div>
</section>
@endsection