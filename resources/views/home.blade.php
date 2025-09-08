@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif 
                    {{ __('You are logged in!') }}

                    <div class="card">
                        <div class="card-header">{{ __('Video Player') }}</div>

                        <div class="card-body">

                            <iframe 
                                width="304"  
                                src="https://www.youtube.com/embed/MvOEXnvJ5ns" 
                                title="Promo Intro" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" 
                                allowfullscreen
                            ></iframe>

                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> 
                        </div>  
                    </div>  
                </div>
            </div>
        </div>
        <div>  
            <p>This is text inside the row now</p>
        </div> 
    </div>
    <div>  
        <p>This is text in the container</p>
    </div> 
</div>
<div>  
    <p>This is a new dom node outside of the container.</p>
</div>
@endsection
