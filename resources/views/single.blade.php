@extends('layouts.basic-layout')
@section('basic-content')
<div id="content" class="site-content" data-mobile-menu-resolution="768">
    <div class="clb-page-headline without-cap text-left subheader_included">
        <div class="bg-image"></div>
        <div class="clb-page-headline-holder">
            <div class="page-container">
                <div class="clb-back-link vc_hidden-md vc_hidden-sm vc_hidden-xs"> <a href="#"
                        class="btn-round btn-round-light"> <i class="ion-left ion"><svg
                                class="arrow-icon arrow-icon-back" width="16" height="16" viewBox="0 0 16 16"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                            </svg></i> </a> <span class="clb-back-link-caption"> Back </span> </div>
                <div class="vc_row">
                    <div class="vc_col-lg-12 animated-holder">
                        <div class="post-meta">
                            <div class="category-holder "><a class="category" href="#" rel="category tag"> Digital</a>
                            </div>
                            <span class="post-meta-estimate"> 6 min read </span>
                        </div>
                        <h1 class="clb-title">{{$blogPost['blog']['title']}}</h1>
                        <div class="clb-post-meta">
                            <ul class="clb-post-holder">
                                <li class="clb-post-meta-item"> <img alt='aresync'
                                        src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png')}}'
                                        class='avatar avatar-50 photo author-avatar' height='50' width='50'
                                        loading='lazy' /> </li>
                                <li class="clb-post-meta-item">
                                    <div class="prefix">{{$blogPost['blog']['author']}}</div> <span
                                        class="author">aresync</span>
                                </li>
                                <li class="clb-post-meta-item">
                                    <div class="prefix">Published</div>{{$blogPost['blog']['date']}}
                                </li>
                                <li class="clb-post-meta-item">
                                    <div class="prefix"> {{$blogPost['commentsCount']}} comments </div> <a
                                        href="#comments"> <span class="date">Join
                                            the Conversation</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="page-container">
            <div class="vc_row">
                <!-- Breadcrumbs -->
                <div class="breadcrumbs-holder">
                    <div class="vc_col-md-12">
                        <ol class="breadcrumbs-slug" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item" href="#"><span itemprop="name">Home</span></a><i
                                    class="ion ion-ios-arrow-forward"></i>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                                    itemprop="name" class="active">{{$blogPost['blog']['title']}}</span>
                                <meta itemprop="position" content="3" />
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-container post-page-container " id='scroll-content'>
        <div class="page-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main page-offset-bottom">
                    <div class="vc_row">
                        <div class="vc_col-lg-12">
                            <!-- <div class="vc_col-lg-8 vc_col-lg-push-2"> -->
                            <article id="post-31685"
                                class="post-31685 post type-post status-publish format-standard has-post-thumbnail hentry category-digital">
                                <div class="entry-content">
                                    <p>@php
                                        echo
                                        htmlspecialchars_decode ($blogPost['blog']['content'])
                                        @endphp
                                    </p>

                                    <!--    <figure class="wp-block-image size-large"><img width="1024" height="625"
                                            src="{{ asset('asset-3/uploads/2022/03/frontend-development.svg') }}"
                                            alt="app and web development" class=""
                                            sizes="(max-width: 1024px) 100vw, 1024px" /></figure> -->

                                    <p></p>
                                    <p></p>
                                    <p></p>
                                </div>
                                <div class="entry-footer">
                                    <div class="entry-footer-tags"></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="post-share" data-ohio-content-scroll="#scroll-content">
            <div class="clb-share-bar" data-blog-share="true">
                <div class="socialbar small flat"> <a href="{{config('global-variables.FB.link')}}" class="facebook"><i
                            class="fab fa-facebook-f"></i></a><a href="{{config('global-variables.INSTAGRAM')}}"
                        class="instagram"><i class="fab fa-instagram"></i></a><a
                        href="{{config('global-variables.LINKEDIN.link')}}" class="linkedin"><i
                            class="fab fa-linkedin"></i></a> </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="page-container post-page-container " id='scroll-content'>
        <div class="page-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main page-offset-bottom">
                    <div class="vc_row">
                        <div class="vc_col-lg-12">

                            <h4 class="text-center">Comments (@php echo ($blogPost['commentsCount']) @endphp)</h4>
                            @foreach($blogPost['comments'] as $comment)

                            <br />
                            <div>
                                <div style=" padding: 10px;">

                                    <div class="d-flex">
                                        <p class="card-text inline-flex" style="color:#cc2222;"><img
                                                style="padding-top: 6px;"
                                                src='{{asset('asset-3/uploads/2022/02/user.png')}}' height='30'
                                                width='30'><span>{{$comment['name']}}<a
                                                    style="color: black; margin-left: 8px;" class="p-5"
                                                    href="#">{{$comment['date']}}</a></span>

                                        </p>
                                    </div>
                                    <p class="card-text">
                                        {{$comment['comment']}}
                                    </p>


                                </div>

                            </div>
                            @endforeach

                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <!-- new -->


    <hr>
    <!-- new -->

    <div class="comments-container">
        <div class="page-container">
            <div class="vc_row">
                <div class="vc_col-lg-12">
                    <div id="comments" class="comments-area  no-comments">
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title"><span
                                    class="heading-md title text-left">Post a
                                    comment</span> <small><a rel="nofollow" id="cancel-comment-reply-link"
                                        href="{{config('global-variables.IMPACT-MOBILE')}}" style="display:none;">Click
                                        here to cancel reply</a></small></h3>
                            <form action="{{url('store')}}" method="post" id="commentform" class="comment-form"
                                novalidate>
                                @csrf

                                <p class="comment-notes"><span id="email-notes">Your email address will not be
                                        published.</span> <span class="required-field-message"
                                        aria-hidden="true">Required
                                        fields are marked <span class="required" aria-hidden="true">*</span></span></p>
                                <input type="hidden" name="blogid"
                                    value="@php echo ($blogPost['blog']['id']) @endphp" />
                                <div class="input-group">
                                    <div class="input-wrap">
                                        <div class="col-4 input-block"><label for="author" class="field-label">Your
                                                Name</label><input id="author" name="name" type="text" value=""
                                                aria-required='true' /></div>

                                    </div>
                                </div> <label for="comment" class="field-label">Leave a Comment</label><textarea
                                    id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                <p class="form-submit"><button name="submit" type="submit" id="submit"
                                        class="btn submit-comment btn-loading-disabled submit" value="Post Comment">Post
                                        Comment</button> <input type='hidden' name='comment_post_ID' value='31685'
                                        id='comment_post_ID' /> <input type='hidden' name='comment_parent'
                                        id='comment_parent' value='0' /> </p>
                            </form>
                        </div><!-- #respond -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>

</div>
@endsection