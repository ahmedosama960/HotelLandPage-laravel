@extends('layouts.app')

@section('content')
<div class="jumbotron" style="position: relative">
        <div
        style=
        "
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        "
        >
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
</div>

<div class="section1">
    <div class="container">
        <h1>Welcome to our luxury villa</h1>
        <h3>Welcome to our luxury villa Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
    </div>
</div>

<div style="background-color: #121f38" class=>
    <div class="container">
        <h3 style="text-align: center" class="mb-4 pt-4 text-light">Our rooms</h3>
        <div class="row ">
            <div class="col-sm-6 mb-4">
                <div class="card" style="width:90%" >
                    <img src="/img/hotel5.jpg" class="card-img-top" alt="...">
                    <div class="text-dark p-1" style="text-align: center">
                        <b>Traditional Rooms</b>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="card" style="width: 90%;" >
                    <img src="/img/hotel6.jpg" class="card-img-top" alt="...">
                    <div class="text-dark p-1" style="text-align: center">
                        <b>Modern Rooms</b>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 mb-4">
                <div class="card" style="width: 90%;" >
                    <img src="/img/hotel7.jpg" class="card-img-top" alt="...">
                    <div class="text-dark p-1" style="text-align: center">
                        <b>Modern polls</b>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 mb-4">
                <div class="card" style="width: 90%;" >
                    <img src="/img/hotel10.jpg" class="card-img-top" alt="...">
                    <div class="text-dark p-1" style="text-align: center">
                        <b>Modern design</b>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="section1">
    <div class="container">
        <h1>Welcome to our villa Gallery</h1>
        <h3>Welcome to our luxury villa Lorem ipsum, dolor</h3>
    </div>
</div>


<div class="gallery">
<div class="container">
    <div class="row">
        <div class="col-sm col-md-4 mb-4">
            <div class="card" style="width: 90%;" >
                <img src="/img/hotel8.jpg" class="card-img-top" alt="...">
                <div class="text-dark p-1" style="text-align: center">
                    <b>Modern</b>
                </div>
            </div>
        </div>

        <div class="col-sm col-md-4 mb-4">
            <div class="card" style="width: 90%;" >
                <img src="/img/hotel7.jpg" class="card-img-top" alt="...">
                <div class="text-dark p-1" style="text-align: center">
                    <b> design</b>
                </div>
            </div>
        </div>

        <div class="col-sm col-md-4 mb-4">
            <div class="card" style="width: 90%;" >
                <img src="/img/hotel6.jpg" class="card-img-top" alt="...">
                <div class="text-dark p-1" style="text-align: center">
                    <b>In our</b>
                </div>
            </div>
        </div>

        <div class="col-sm col-md-4 mb-4">
            <div class="card" style="width: 90%;" >
                <img src="/img/hotel4.jpg" class="card-img-top" alt="...">
                <div class="text-dark p-1" style="text-align: center">
                    <b>luxury</b>
                </div>
            </div>
        </div>

        <div class="col-sm col-md-4 mb-4">
            <div class="card" style="width: 90%;" >
                <img src="/img/hotel5.jpg" class="card-img-top" alt="...">
                <div class="text-dark p-1" style="text-align: center">
                    <b>Villa</b>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

@endsection
