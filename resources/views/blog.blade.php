@extends('layouts.basic-layout')
@section('title')
{{config('global-variables.OUR_BLOG_PAGE')}}
@endsection
@section('basic-content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div id="content" class="site-content" data-mobile-menu-resolution="768">
    <div class="page-container">
        <div id="primary" class="content-area">
            <div class="page-content ">
                <main id="main" class="site-main">
                    <article id="post-24789" class="post-24789 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-bottom vc_row-flex">
                                <div
                                    class="clb__padding_reset clb__margin_reset wpb_column vc_column_container vc_col-sm-8 vc_col-has-fill">
                                    <div class="vc_column-inner vc_custom_1570010082727">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space" style="height: 20vh"><span
                                                    class="vc_empty_space_inner"></span></div>
                                            <div class="ohio-heading-sc heading clb__heading text-left"
                                                id="ohio-custom-62fcede3c70d1">
                                                <p class="subtitle"> <strong>Some queries</strong> from the journal.
                                                </p>
                                                <h1 class="title subtitle-top"> How to Overcome <br
                                                        class="vc_hidden-xs vc_hidden-sm"> with a Writing <br
                                                        class="vc_hidden-xs vc_hidden-sm"> Stagnation </h1>
                                            </div>
                                            <div class="vc_empty_space  clb__spacer" style="height: 50px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner vc_custom_1570009907015">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space  vc_hidden-md vc_hidden-lg" style="height: 20px">
                                                <span class="vc_empty_space_inner"></span>
                                            </div>
                                            <div class="ohio-text-sc " id="ohio-custom-62fcede3c7229">
                                                <p style="margin-top: 150px;">Sign up for Medium’s Daily Digest and get
                                                    the best of Medium,
                                                    tailored for you.</p>
                                            </div>
                                            <div class="vc_empty_space  clb__sapcer" style="height: 30px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                            <div class="ohio-contact-from-sc contact-form  text-left"
                                                id="ohio-custom-62fcede3c7274">
                                                <div class="container">
                                                    <form action="mailto:info@aresync.com" method="POST">
                                                        <label for="">Your Email</label>
                                                        <input type="text" name="email">
                                                        <div class="ohio-button-sc btn-wrap text-left"
                                                            id="ohio-custom-62fcede3d54ca"> <a
                                                                href="mailto:{{config('global-variables.EMAIL_AT_INFO')}}"
                                                                class="btn "> <span class="text"> Subscribe</span> <i
                                                                    class="ion-right ion ion-md-arrow-forward"></i> </a>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="hidden" data-contact-btn="true"> <button class="btn "> <span
                                                            class="btn-load"></span> <span class="text"></span>
                                                    </button> </div>
                                            </div>
                                            <div class="vc_empty_space  clb__spacer" style="height: 50px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                            <div
                                                class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text">
                                                <span class="vc_sep_holder vc_sep_holder_l"><span
                                                        style="border-color:rgb(136,136,136);border-color:rgba(136,136,136,0.8);"
                                                        class="vc_sep_line"></span></span><span
                                                    class="vc_sep_holder vc_sep_holder_r"><span
                                                        style="border-color:rgb(136,136,136);border-color:rgba(136,136,136,0.8);"
                                                        class="vc_sep_line"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space  clb__spacer" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="ohio-recent-posts-sc vc_row blog-posts-masonry blog-inner "
                                                id="ohio-custom-62fcede3cbffa" data-asymmetric-parallax-grid=true
                                                data-grid-number=3-2-1 data-asymmetric-parallax-speed=20
                                                data-lazy-container="posts">
                                                @foreach($posts as $post)
                                                <div class=" vc_col-lg-4 vc_col-md-6 vc_col-xs-12 blog-post-masonry masonry-block post-offset ohio-card-wrapper grid-item"
                                                    data-lazy-item="" data-lazy-scope="posts">
                                                    <div data-aos-once="true" data-aos="fade-up" data-aos-delay="0">
                                                        <div
                                                            class="blog-grid blog-grid-type-2 metro-style hover-scale-img">
                                                            <figure class="blog-grid-image"> <a
                                                                    data-cursor-class="cursor-link" class="" href="#">
                                                                    <div class="blog-metro-image parallax"
                                                                        data-ohio-bg-image="http://asdialer-admin-template.test/{{$post->image_path }}">
                                                                    </div>
                                                                </a>
                                                                <div class="blog-grid-meta">
                                                                    <div class="meta-holder"> <img alt='aresync'
                                                                            src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}'
                                                                            class='avatar avatar-50 photo author-avatar'
                                                                            height='50' width='50' loading='lazy' />
                                                                        <div class="author-attributes">
                                                                            <div class="author">
                                                                                Posted by
                                                                                <b>{{$post->author}}</b>
                                                                            </div> <span
                                                                                class=" date">{{$post->date}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div class="blog-grid-content text-left">
                                                                <div class="post-details">
                                                                    <div class="category-holder"> <a class="category"
                                                                            href="#">Digital</a>
                                                                    </div> <span class="post-meta-estimate"> 20 min read
                                                                    </span>
                                                                </div>
                                                                <h3 style="" class="blog-grid-headline"> <a href="#">
                                                                        {{$post->title}} </a> </h3>
                                                                <p id="text-with-dots">
                                                                    @php
                                                                    echo
                                                                    Str::limit(htmlspecialchars_decode ($post->content),
                                                                    130, '...');
                                                                    @endphp
                                                                </p> <a
                                                                    href="{{config('global-variables.SINGLE')}}/{{$post->id}}"
                                                                    class=" btn btn-link brand-color-hover"> Read More
                                                                    <i class="ion-right ion"><svg class="arrow-icon"
                                                                            width="16" height="16" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5"
                                                                                stroke-width="2"
                                                                                stroke-linejoin="round" />
                                                                        </svg></i> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="ohio-recent-posts-sc vc_row blog-posts-masonry blog-inner ">
                                                <div class="card-body inheritedProps">
                                                    {{$posts->links('pagination::tailwind')}}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space  clb__section_spacer" style="height: 90px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="vc_row wpb_row vc_row-fluid clb__padding_reset clb_custom_subscribe_section transferbg vc_custom_1647064175513 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space  clb__section_spacer" style="height: 90px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div
                                                    class="clb__padding_reset wpb_column vc_column_container vc_col-sm-6">
                                                    <div class="vc_column-inner vc_custom_1580393130984">
                                                        <div class="wpb_wrapper">
                                                            <div class="ohio-heading-sc heading text-left"
                                                                id="ohio-custom-62fcede3d5449">
                                                                <p class="subtitle"> <strong>Some queries </strong>from
                                                                    the journal. </p>
                                                                <h2 class="title subtitle-top"> The Miracle Of Get
                                                                    Started With Mobile App <br
                                                                        class="vc_hidden-xs vc_hidden-sm"> </h2>
                                                            </div>
                                                            <div class="vc_empty_space" style="height: 20px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                            <div class="ohio-button-sc btn-wrap text-left"
                                                                id="ohio-custom-62fcede3d54ca"> <a href="#"
                                                                    class="btn "> <span class="text"> Download </span>
                                                                    <i class="ion-right ion ion-md-arrow-forward"></i>
                                                                </a> </div>
                                                            <div class="vc_empty_space  vc_hidden-sm vc_hidden-md vc_hidden-lg"
                                                                style="height: 20px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-md-3">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="ohio-text-sc " id="ohio-custom-62fcede3d55e6">
                                                                <p>When our team provides design and digital marketing.
                                                                    Applied arts can include <strong>industrial design,
                                                                        graphic design, and fashion design.</strong></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="wpb_column vc_column_container vc_col-sm-3 vc_hidden-sm vc_hidden-xs">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_empty_space  clb__section_spacer" style="height: 90px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space  clb__section_spacer" style="height: 90px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_row-full-width vc_clearfix"></div>
                            {{--Project-count--}}
                            @include('components.project-count')
                            {{--end--}}
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection