@extends('front_end.master')

@section('head')
    <title>Trang chủ</title>
@endsection

@section('blog')
    <div class="row mt-5">
        <div class="col-md-12">
            {{ $listPost->render() }}
        </div>
    </div>
    <div class="row mt-3">
        @foreach($listPost as $post)
            <div class="col-md-6 entries">
                <article class="entry" style="border-radius: 32px;">

                    <div class="entry-img" style="border-radius: 32px;">
                        <img src="{{ asset($post->thumbnail) }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="blog-single.html">{{ $post->title }}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                            <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <div>
                           {!! mb_strimwidth($post->title, 0, 50, "...") !!}
                        </div>
                        <div class="read-more">
                            <a href="blog-single.html">Đọc thêm</a>
                        </div>
                    </div>

                </article>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12">
            {{ $listPost->render() }}
        </div>
    </div>
@endsection
