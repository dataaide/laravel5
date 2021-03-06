@extends('front/default', ['title' => 'Home'])

<!-- MAIN -->
@section('content')

<main>

    <div class="container  padding-100 padding-50">

        <div class="row justify-content-center">

                <div class="col-md-4">
                    
                    <div class="card" style="width: 18rem;">

                        <img class="card-img-top" src="http://lorempicsum.com/up/300/200/1" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>

              <div class="col-md-4">

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://lorempicsum.com/up/300/200/2" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                    
              </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://lorempicsum.com/up/300/200/3" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>

@endsection