@extends('layouts.frontend')


@section('content')

    <div style="background-image:url(app/images/head/about.jpg)" class="wrap-slider my-wrap-slider">
        <div class="container page-container">
            <div class="page-content">
                <div class="page-title">
                    <h1 class="tshadow"></h1>

                    {{ $post->title }}

                </div><!-- page-title -->
            </div>
        </div><!-- container -->
    </div><!-- wrap-slider -->

    <div class="container">


        @if ($post->featured)
            <img src="{{ $post->featured }}" />
        @endif

        {{ $post->content }}

    </div>




@endsection

