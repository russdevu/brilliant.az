@extends('layouts.site')

@section('page-title', Auth::user()->name . ' | ' . ' Профиль')

<!-- Simple Search -->
@section('simple-search')
    <div class="ss-wrapper">
        <form class="ss" method="GET">
                <div class="ss_select ss_select--single ss-item">
                    <select>
                        <option value="all">Все изделия</option>
                        <option value="Бриллианты">Бриллианты</option>
                        <option value="Кольца">Кольца</option>
                        <option value="Серьги">Серьги</option>
                    </select>
                    <span></span>
                </div>

                <div class="ss_select ss_select--single ss-item">
                    <select>
                        <option value="all">Город</option>
                        <option value="Баку">Баку</option>
                        <option value="Гянджа">Гянджа</option>
                        <option value="Сумгаит">Сумгаит</option>
                    </select>
                    <span></span>
                </div>

                <div class="ss-item_price ss-item">
                    <label for="currency">
                        Цена,&nbsp;&nbsp;AZN
                    </label>
                    <input 	class="amount_input"
                            type="number"
                            name="amount">
                        <p>—</p>
                    <input  class="amount_input"
                            type="number"
                            name="amount">
                </div>

                <div class="ss_checkbox ss-item">
                    <label for="barter">Бартер</label>
                    <input id="barter" name="barter" type="checkbox">
                </div>

                <div class="single-input_wrapper">
                    <label>
                        <svg>
                            <use xlink:href="sprite.svg#search">
                            </use>
                        </svg>
                    </label>
                    <input class="single-input ss-item" type="text">
                </div>

                <div class="ss-item">
                    <button class="primary-btn searchBtn" type="submit">
                        Поиск
                    </button>
                </div>

        </form>
    </div>
@endsection

@section('main-container')
    <!-- Posts -->
    <section class="posts-wrapper b-b">
        <div class="container">
            <div class="posts">
                <!-- My posts -->
                <div class="posts_header">
                    <h4 class="posts_title posts_title-vip">
                        Мои публикации
                    </h4>
                    <a href="#">Показать все</a>
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

                    <!-- fetched -->
                    @if(!empty($posts))
                        @foreach ($posts as $post)
                            <a href="post/{{$post->id}}" class="posts_cont-item">
                                <!-- img -->
                                <img src="{{ asset('/storage/post_images/' . Auth::user()->id . '/' . $post->post_img) }}">

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
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection
