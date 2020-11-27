@extends('layouts.site')

@section('page-title', $post->post_title)

@section('main-container')
  <div class="single-post_container">
    <div class="post">
        <div class="post_header">
            <h1>
                Заголовок >>>> {{$post->post_title}}
            </h1>
        </div>
        <div class="post_slots">
          <img class="post_slots-img post_slots-img--main"
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
                alt="{{$post->post_title}}">
          <img class="post_slots-img"
                src="{{ asset('/storage/post_images/' . $post->user->id . '/' . $post->post_img) }}"
                alt="{{$post->post_title}}">
        </div>
        <div class="post_main">
            <p>
                цена: {{$post->post_price}}
            </p>
            <p>
                описание: {{$post->post_desc}}
            </p>
        </div>
    </div>
    <div class="sp_ad-container">

    </div>
  </div>

@endsection
