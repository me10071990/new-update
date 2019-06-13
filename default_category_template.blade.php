@extends('layouts.frontend')


@section('content')

<div style="background-image:url(app/images/head/about.jpg)" class="wrap-slider my-wrap-slider">
    <div class="container page-container">
        <div class="page-content">
            <div class="page-title">
                <h1 class="tshadow">default{{$category->name}}</h1>

            </div><!-- page-title -->
        </div>
    </div><!-- container -->
</div><!-- wrap-slider -->

<div class="container">
    <div class="row medium-padding120">
        <main class="main">

           @include('layouts.categories.partials.posts')

        </main>
    </div>
</div>




@endsection

