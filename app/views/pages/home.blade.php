@extends('layouts.default')

@section('content')
    <div class="col-md-10 col-md-offset-1 jumbotron home-jumbo">
        <div class="row">
            <div class="col-md-2 col-md-offset-1">
                <img src="//www.placehold.it/600x600" alt="" class="img-responsive img-circle img-gravatar" />
            </div>
            <div class="col-md-9">
                <h1><strong>Hey there! I'm Tony.</strong></h1>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusantium aperiam atque,
                    consequatur corporis, cupiditate eaque esse <a href="#">excepturi</a> facilis hic magnam molestiae mollitia
                    nesciunt non odio quas, <a href="#">reprehenderit</a> velit.
                </p>
            </div>
        </div>
        <hr/>

        @include('pages._recent_projects')
    </div>
@stop