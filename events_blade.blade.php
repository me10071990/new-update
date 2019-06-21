@extends('layouts.frontend')
@section('content')
    <div style="background-image:url(/app/images/head/event.jpg)"class="wrap-slider my-wrap-slider ">
        <div class="container page-container">
            <div class="page-content">
                <div class="page-title">
                    <h1 class="tshadow"></h1>
                </div>
            </div>
        </div>
    </div>
    <section class="flat-row pd-blog bg-theme blog-list3 blog-list3-style2">
        <div class="container">

            <div class="wrap-post">

                New post

                    <tr class="alert alert-success">
                <div class="row">


                    @foreach($new_post as $post )

                             <div class="col-md-12 wrap-grid">
                        <article class="entry">
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <div class="entry-post">
                                        <div class="entry-meta">
                                            <span>{{ \Carbon\Carbon::parse($post->date_time)->format('F j, Y')  }}</span>


                                        </div>
                                        <h3 class="entry-title">{{ $post->title }}</h3>

                                        <div class="entry-content">
                                            <a  target="_blank" href="{{ asset("$post->file") }}"><p style="font-size: 18px;color: #468b10;">   {{ $post->content }}</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="feature-post">
                                        @if ($post->featured)

                                      <img src="{{ $post->featured }}" alt="image"></a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </article>
                    </div>

                    @endforeach
                </div>

                       Old post
                <div class="row">

                    @forelse($old_post  as $post)


                        <div class="col-md-12 wrap-grid">
                            <article class="entry">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <div class="entry-post">
                                            <div class="entry-meta">
                                                <span>{{ \Carbon\Carbon::parse($post->date_time)->format('F j, Y')  }}</span>

                                            </div>
                                            <h3 class="entry-title">{{ $post->title }}</h3>

                                            <div class="entry-content">
                                                <a  target="_blank" href="{{ asset("$post->file") }}"><p style="font-size: 18px;color: #468b10;">   {{ $post->content }}</p></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature-post">
                                            @if ($post->featured)

                                                <img src="{{ $post->featured }}" alt="image"></a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </article>
                        </div>
                        @empty


                    @endforelse
                </div>
            </div>
        </div>
    </section>

@endsection

