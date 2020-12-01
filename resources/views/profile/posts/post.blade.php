@extends('layouts.site')

@section('page-title', $post->post_title)

@section('main-container')
  <div class="single-post_container">
    <div class="post">
        <div class="post_header">
            <!-- title -->
            <h1 class="post_header-title">
                  {{$post->post_title}}
            </h1>
            <!-- price -->
            <h4 class="post_header-price">
                  {{$post->post_price}} AZN
            </h4>
            <!-- makevip -->
            <a href="#" class="post_header-makevip">
                  <svg class="post_header--svgs">
                        <use xlink:href="/sprite.svg#royal"></use>
                  </svg>
                  Сделать VIP
            </a>
            <br>
            <!-- tags -->
            <div class="post_header-tags">
                  <a href="#" class="post_header-tags--item">
                        Вид изделия: <span>Серьги</span>
                  </a>
                  <a href="#" class="post_header-tags--item">
                        Объявление от: <span>Частное лицо</span>
                  </a>
                  <a href="#" class="post_header-tags--item">
                        Состояние: <span>Б/у</span>
                  </a>
            </div>
            <hr>
            <!-- desc -->
            <div class="post_header-desc">
                  <h4 class="post_header-desc--title">
                        Описание
                  </h4>
                  <p class="post_header-desc--desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eius nulla quis illum libero ipsam placeat optio aut voluptate deleniti! Incidunt voluptatum omnis, explicabo, quam esse architecto expedita aperiam optio iure similique reprehenderit possimus quasi non corporis amet eius ipsum impedit blanditiis commodi. Veniam ullam eligendi accusantium quo doloremque voluptates?
                  </p>
            </div>
            <hr>
            <!-- footer -->
            <div class="post_header-footer">
                  <p class="post_header-footer--item">
                        Добавлено: <span>{{ $post->created_at }}</span>
                  </p>
                  <p class="post_header-footer--item">
                        Просмотров: <span>152</span>
                  </p>
                  <p class="post_header-footer--item">
                        Номер объявления: <span>213172837</span>
                  </p>
            </div>
            <!-- buttons -->
            <div class="post_header-buttons">
                  <a href="#" id="addToFavBtn">
                      <svg class="post_header--svgs">
                          <use xlink:href="/sprite.svg#empty_heart"></use>
                      </svg>
                  </a>
                  <a href="#" id="shareBtn">
                      <svg class="post_header--svgs">
                          <use xlink:href="/sprite.svg#share"></use>
                      </svg>
                  </a>
            </div>
        </div>
        <div class="post_slots">
          {{-- <img class="post_slots-img post_slots-img--main"
                src="{{ asset('/storage/post_images/' . $post->user->id . '/' . $post->post_img) }}"
                alt="{{$post->post_title}}"> --}}
          {{-- <img class="post_slots-img"
                src="{{ asset('/storage/post_images/' . $post->user->id . '/' . $post->post_img) }}"
                alt="{{$post->post_title}}">
          <img class="post_slots-img"
                src="{{ asset('/storage/post_images/' . $post->user->id . '/' . $post->post_img) }}"
                alt="{{$post->post_title}}">
          <img class="post_slots-img"
                src="{{ asset('/storage/post_images/' . $post->user->id . '/' . $post->post_img) }}"
                alt="{{$post->post_title}}">
          <img class="post_slots-img"
                src="{{ asset('/storage/post_images/' . $post->user->id . '/' . $post->post_img) }}"
                alt="{{$post->post_title}}">
          <img class="post_slots-img"
                src="{{ asset('/storage/post_images/' . $post->user->id . '/' . $post->post_img) }}"
                alt="{{$post->post_title}}">
          <img class="post_slots-img"
                src="{{ asset('/storage/post_images/' . $post->user->id . '/' . $post->post_img) }}"
                alt="{{$post->post_title}}"> --}}
        </div>
    </div>
    <div class="sp_ad-container">

    </div>
  </div>
@endsection
