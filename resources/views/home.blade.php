@extends('layouts.site')

@section('page-title', 'Главная')

<!-- Rubrics -->
@section('rubrics')
    @include('includes.rubrics')
@endsection

<!-- Simple Search -->
@section('simple-search')
    @include('includes.search.simple-search')
@endsection

@section('main-container')
    <section class="posts-wrapper">
        <div class="container">
            <div class="posts">
                <!-- V.I.P. -->
                <div class="posts_header">
                    <h4 class="posts_title posts_title-vip">
                        <span>V.I.P.</span> Публикации
                    </h4>
                    <a href="#">Все V.I.P. публикации</a>
                </div>

                <div class="posts_cont">
                    {{-- <a href="#" class="posts_cont-item">
                        <img src="/img/jewellery/4.jpg">

                        <div class="featured">
                            <p class="featured-price">
                                <span>
                                    300
                                </span>
                                AZN
                            </p>
                            <svg class="featured-fav">
                                <use xlink:href="sprite.svg#fav"></use>
                            </svg>
                            <svg class="featured-vip">
                                <use xlink:href="sprite.svg#vip"></use>
                            </svg>
                            <svg class="featured-zoom">
                                <use xlink:href="sprite.svg#zoom"></use>
                            </svg>
                        </div>

                        <div class="item_desc">
                            <h6>
                                Scrabba-babba-doo
                            </h6>
                            <p>
                                Lorem ipsum dolor sit amet.
                            </p>
                            <span>
                                Baki, 11.23.2020 15:12
                            </span>
                        </div>
                    </a> --}}

                    @foreach ($posts as $post)
                        <a href="post/{{$post->id}}" class="posts_cont-item">
                            <!-- img -->
                            <img src="{{ asset('/storage/post_images/' . $post->user->id . '/' . $post->post_img) }}">

                            <!-- featured -->
                            <div class="featured">
                                <p class="featured-price">
                                    <span>
                                        {{ $post->post_price }}
                                    </span>
                                    AZN
                                </p>
                                <svg class="featured-fav">
                                    <use xlink:href="sprite.svg#fav"></use>
                                </svg>
                                <svg class="featured-vip">
                                    <use xlink:href="sprite.svg#vip"></use>
                                </svg>
                                <svg class="featured-zoom">
                                    <use xlink:href="sprite.svg#zoom"></use>
                                </svg>
                            </div>

                            <!-- desc -->
                            <div class="item_desc">
                                <h6>
                                    {{ $post->post_title }}
                                </h6>
                                <p>
                                    {{ $post->post_desc }}
                                </p>
                                <span>
                                    Baki, {{ $post->created_at }}
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
