@extends('layouts.frontend')


@section('content')

    <div style="background-image:url(app/images/head/about.jpg)" class="wrap-slider my-wrap-slider">
        <div class="container page-container">
            <div class="page-content">
                <div class="page-title">
                    <h1 class="tshadow">{{$category->name}}</h1>

                </div><!-- page-title -->
            </div>
        </div><!-- container -->
    </div><!-- wrap-slider -->

    <div class="container">
        <div class="row medium-padding120">
            <main class="main">

                <div class="row">
                    <div class="case-item-wrap">
                        @foreach($category->posts as $post)

                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                        <img src="{{ $post->featured }}" alt="our case">
                                    </div>
                                    <a href="{{ route('post.single', ['slug' => $post->slug ]) }}"><h6 class="case-item__title">{{ $post->title }}</h6></a>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>

            </main>
        </div>
    </div>




@endsection

