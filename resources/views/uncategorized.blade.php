@extends('layouts.basic-layout')
@section('basic-content')
        <div id="content" class="site-content" data-mobile-menu-resolution="768">
            <div class="clb-page-headline without-cap text-left subheader_included">
                <div class="bg-image"></div>
                <div class="clb-page-headline-holder">
                    <div class="page-container">
                        <div class="clb-back-link vc_hidden-md vc_hidden-sm vc_hidden-xs"> <a href="{{config('global-variables.OUR_BLOG')}}" class="btn-round btn-round-light"> <i class="ion-left ion"><svg class="arrow-icon arrow-icon-back" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                                    </svg></i> </a> <span class="clb-back-link-caption"> Back </span> </div>
                        <div class="vc_row">
                            <div class="vc_col-lg-12 animated-holder">
                                <div class="post-meta"> </div>
                                <h1 class="clb-title">Uncategorized</h1>
                                <div class="clb-post-meta">Category</div>
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
                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{config('global-variables.OUR_BLOG')}}"><span itemprop="name">Home</span></a><i class="ion ion-ios-arrow-forward"></i>
                                        <meta itemprop="position" content="1" />
                                    </li>
                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name" class="active">Uncategorized</span>
                                        <meta itemprop="position" content="2" />
                                    </li>
                                </ol>
                            </div>
                        </div> <!-- Filter bar -->
                        <div class="filter-holder">
                            <div class="vc_col-md-12">
                                <div class="mbl-overlay">
                                    <div class="mbl-overlay-bg"></div>
                                    <div class="close-bar text-left">
                                        <div class="btn-round btn-round-light clb-close" tabindex="0"> <i class="ion ion-md-close"></i> </div>
                                    </div>
                                    <div class="mbl-overlay-container">
                                        <div class="filter">
                                            <div class="result"> Showing 1-3 of 3 results </div>
                                            <div class="select-inline"> <select autocomplete="off">
                                                    <option value="" data-select-href="{{config('global-variables.INDEX')}}">Categories</option>
                                                    <option value="digital" data-select-href="{{config('global-variables.DIGITAL')}}">Digital</option>
                                                    <option value="marketing" data-select-href="{{config('global-variables.DIGITAL-MARKETING')}}">Marketing</option>
                                                    <option value="uncategorized" data-select-href="{{config('global-variables.UNCATEGORIZED')}}" selected>Uncategorized</option>
                                                </select> </div>
                                            <div class="select-inline"> <select autocomplete="off">
                                                    <option value="" data-select-href="{{config('global-variables.INDEX')}}">Tags</option>
                                                    <option value="mobile-app-development-company" data-select-href="{{config('global-variables.MOBILE_APP')}}">Mobile App Development Company</option>
                                                    <option value="on-demand-services-app" data-select-href="{{config('global-variables.ON_DEMAND')}}">On Demand Services App</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-filter"> <a href="#" class="btn btn-small"> <i class="ion ion-left ion-md-funnel"></i> <span class="text">Filter</span> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-container bottom-offset">
                <div id="primary" class="page-content content-area">
                    <main id="main" class="site-main">
                        <div class="vc_row blog-posts-classic" data-lazy-container="posts">
                            <div class=" vc_col-lg-6 vc_col-md-6 vc_col-xs-12 grid-item" data-lazy-item="" data-lazy-scope="posts">
                                <div class="blog-grid blog-grid-type-1 boxed metro-style hover-scale-img">
                                    <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.THINGS')}}">
                                            <div class="blog-metro-image parallax" data-ohio-bg-image="{{asset('asset-3/uploads/2022/02/innovation.jpg')}}"></div>
                                        </a>
                                        <div class="blog-grid-meta">
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}'  height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">May 5, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> <a class="category" href="{{config('global-variables.DIGITAL_MARTKETING')}}">Marketing</a> <a class="category" href="{{config('global-variables.UNCATEGORIZED')}}">Uncategorized</a> </div> <span class="post-meta-estimate"> 7 min read </span>
                                        </div>
                                        <h3 class="blog-grid-headline"> <a class="underline" href="{{config('global-variables.THINGS')}}"> 4 THINGS TO CONSIDER BEFORE ADOPTING A DESIGN TREND  </a> </h3>
                                        <p>From the minute we’re mature enough to dress ourselves, we’re impacted by...</p> <a href="{{config('global-variables.THINGS')}}" class="btn btn-link brand-color-hover"> Read More <i class="ion-right ion"><svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                                                </svg></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class=" vc_col-lg-6 vc_col-md-6 vc_col-xs-12 grid-item" data-lazy-item="" data-lazy-scope="posts">
                                <div class="blog-grid blog-grid-type-1 boxed metro-style hover-scale-img">
                                    <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.CMS')}}">
                                            <div class="blog-metro-image parallax" data-ohio-bg-image="{{ asset('asset-3/uploads/2022/03/developer-3.svg') }}"></div>
                                        </a>
                                        <div class="blog-grid-meta">
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}'  height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">April 18, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> <a class="category" href="{{config('global-variables.DIGITAL_MARTKETING')}}">Marketing</a> <a class="category" href="{{config('global-variables.UNCATEGORIZED')}}">Uncategorized</a> </div> <span class="post-meta-estimate"> 5 min read </span>
                                        </div>
                                        <h3 class="blog-grid-headline"> <a class="underline" href="{{config('global-variables.CMS')}}"> What A CMS Can Do To Your Online Business? </a> </h3>
                                        <p>A web content management system has gained immense popularity in the past...</p> <a href="{{config('global-variables.CMS')}}" class="btn btn-link brand-color-hover"> Read More <i class="ion-right ion"><svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                                                </svg></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class=" vc_col-lg-6 vc_col-md-6 vc_col-xs-12 grid-item" data-lazy-item="" data-lazy-scope="posts">
                                <div class="blog-grid blog-grid-type-1 boxed metro-style hover-scale-img">
                                    <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.GAIN')}}">
                                            <div class="blog-metro-image parallax" data-ohio-bg-image="{{ asset('asset-3/uploads/2022/04/prototype.svg') }}"></div>
                                        </a>
                                        <div class="blog-grid-meta">
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}'  height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">April 18, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> <a class="category" href="{{config('global-variables.DIGITAL_MARTKETING')}}">Marketing</a> <a class="category" href="{{config('global-variables.UNCATEGORIZED')}}">Uncategorized</a> </div> <span class="post-meta-estimate"> 5 min read </span>
                                        </div>
                                        <h3 class="blog-grid-headline"> <a class="underline" href="{{config('global-variables.GAIN')}}"> Gain The Competitive Advantage Using Drupal Development System: </a> </h3>
                                        <p>Content Management System helps the website owners to change, add, modify and...</p> <a href="{{config('global-variables.GAIN')}}" class="btn btn-link brand-color-hover"> Read More <i class="ion-right ion"><svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                                                </svg></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
                {{--Project-count--}}
                @include('components.project-count')
                {{--end--}}
        </div>
@endsection