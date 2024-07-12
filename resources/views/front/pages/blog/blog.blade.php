@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <section id="breadcrumbs">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <a href="/" class="link-grey">Home</a>
                            <img src="https://assets.website-files.com/5badda2935e11303a89a461e/5baf79eb570913b9781a96f2_arrow-right-mini-icon.svg" alt="" class="breadcrumbs-arrow">
                        <div>
                            Blogs
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end here  -->

    <!-- Blog Page area start here  -->
    <div class="blog-area blog-page-area section">
        <div class="container">
            <div class="row">
                <!-- Blog Item Start -->
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-grid-blog">
                        <div class="blog-thumbnail">
                            <a href="{{route('blog.details',$blog->id)}}"><img class="thumbnail-image" src="{{asset(BlogImage().$blog->Small_Image)}}" alt="blog" /></a>
                        </div>
                        <div class="blog-info">
                            <ul class="blog-category">
                                @foreach($blog->tags as $Item)
                                    @foreach($Item->Tag as $n)
                                        <li class="single-category"><a class="category-text" href="{{route('blog.details',$blog->id)}}">{{$n}}</a></li>
                                    @endforeach
                                @endforeach
                            </ul>
                            <h3 class="blog-title"><a class="blog-link" href="{{route('blog.details',$blog->id)}}">{{langConverter($blog->en_Title,$blog->fr_Title)}}</a></h3>
                            <p class="blog-content">{!! Str::limit(clean(langConverter($blog->en_Description_Two,$blog->fr_Description_Two)),205) !!}</p>
                            <a class="blog-btn" href="{{route('blog.details',$blog->id)}}">{{__('See Details')}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="pagination-area mt-30">
                    <ul class="paginations text-center">
                        {{ $blogs->links('vendor.pagination.custom') }}
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Blog Page area end here  -->
@endsection
