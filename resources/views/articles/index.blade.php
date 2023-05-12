@extends('layouts.main')

@section('content')
<main id="main" data-aos="fade" data-aos-delay="500" class="container">

    <!-- ======= Artikel ======= -->
    <div class="page-header article">
        <div class="row">
            <h4>Artikel Terbaru</h4>
        </div>

        <div class="row">
            @foreach($articles as $article)
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card rounded-2">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <a href="/articles/show/{{$article->id}}"><img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid rounded-2" /></a>
                    </div>
                    <div class="card-body">
                        <a href="/articles/show/{{$article->id}}">
                            <h5 class="card-title font-weight-bold">{{$article->title}}</h5>
                        </a>
                        <p class="card-text text-black-50">
                            {{$article->description}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Artikel -->

</main>

@include('components.footer')
@endsection