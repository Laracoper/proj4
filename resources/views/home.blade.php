@extends('layout.header')

@section('content')
<div id="carouselExampleCaptions" class="mb-5 carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="wrap">
                <img src="img/3.jpg" class="d-block w-100" alt="img">
            </div>

            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="wrap">
                <img src="img/2.jpg" class="d-block w-100" alt="img">
            </div>

            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="wrap">
                <img src="img/1.jpg" class="d-block w-100" alt="img">
            </div>

            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container">


    <div class="col-md-12">
        <?

use PhpParser\Node\Stmt\Echo_;

 if (!empty($peoples)) { ?>
            <div class="cards d-flex flex-wrap gap-2 justify-content-between">
                <? foreach ($peoples as $people) { ?>
                    
                    <div class="card bg-light p-3">
                        <div class="foto">
                            <img src="img/<?= $people->foto ?>" alt="">
                        </div>
                        <h2 class="fw-normal"><?= $people->name ?></h2>
                        <p><?= $people->bio ?></p>
                        <!-- <p><a class="btn btn-secondary" href="/people?id=<?= $people->id ?>">подробнее -></a></p> -->
                        <p><a class="btn btn-secondary" href="{{route('people',[$people->id])}}">подробнее -></a></p>
                    </div>
                <? } ?>
            </div>

        <? } else { ?>
            <div class="alert alert-danger">
                no peoples
            </div>
        <? } ?>
    </div>

    <div class="blocks my-5">
        <hr>
        <div class="row">
            <div class="col-md-8">
                <h1>green</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus pariatur quisquam dolorem temporibus inventore molestias desr quisquam dolorem temporibus inventore molestias desr quisquam dolorem temporibus inventore molestias deserunt quaerat dolor expedita cumque.</p>
            </div>

            <div class="col-md-4">
                <div class="cub bg-success">

                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div class="cub bg-warning"></div>
            </div>
            <div class="col-md-8">
                <h1 class="h1">yellow</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus pariatur quisquam dolorem temporibus inventore molestias deserunt quaerat dolor expedita cumque.</p>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <h1>blue</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus pstias deserunt quaerat dolor expedita cumque.</p>
            </div>

            <div class="col-md-4">
                <div class="cub bg-primary">

                </div>
            </div>
        </div>
    </div>









</div>
@endsection