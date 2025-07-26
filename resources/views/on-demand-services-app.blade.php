@extends('layouts.basic-layout')
@section('basic-content')
        <div id="content" class="site-content" data-mobile-menu-resolution="768">
            <div class="clb-page-headline without-cap text-left subheader_included">
                <div class="bg-image"></div>
                <div class="clb-page-headline-holder">
                    <div class="page-container">
                        <div class="clb-back-link vc_hidden-md vc_hidden-sm vc_hidden-xs"> <a href="{{config('global-variables.DIGITAL')}}" class="btn-round btn-round-light"> <i class="ion-left ion"><svg class="arrow-icon arrow-icon-back" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                                    </svg></i> </a> <span class="clb-back-link-caption"> Back </span> </div>
                        <div class="vc_row">
                            <div class="vc_col-lg-12 animated-holder">
                                <div class="post-meta">
                                    <div class="category-holder no-divider"><a class="category" href="{{config('global-variables.DIGITAL')}}" rel="category tag"> Digital</a></div>
                                </div>
                                <h1 class="clb-title">On Demand Services App</h1>
                                <div class="clb-post-meta">Tag</div>
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
                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name" class="active">Tag: On Demand Services App</span>
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
                                            <div class="result"> Showing 1-1 of 1 results </div>
                                            <div class="select-inline"> <select autocomplete="off">
                                                    <option value="" data-select-href="{{config('global-variables.INDEX')}}">Categories</option>
                                                    <option value="digital" data-select-href="{{config('global-variables.DIGITAL')}}">Digital</option>
                                                    <option value="marketing" data-select-href="{{config('global-variables.DIGITAL-MARKETING')}}">Marketing</option>
                                                    <option value="uncategorized" data-select-href="{{config('global-variables.UNCATEGORIZED')}}">Uncategorized</option>
                                                </select> </div>
                                            <div class="select-inline"> <select autocomplete="off">
                                                    <option value="" data-select-href="{{config('global-variables.INDEX')}}">Tags</option>
                                                    <option value="mobile-app-development-company" data-select-href="{{config('global-variables.MOBILE_APP')}}">Mobile App Development Company</option>
                                                    <option value="on-demand-services-app" data-select-href="{{config('global-variables.ON_DEMAND')}}" selected>On Demand Services App</option>
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
                                    <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.EFFECTIVE_TIPS')}}">
                                            <div class="blog-metro-image parallax" data-ohio-bg-image="{{ asset('asset-3/uploads/2022/03/mobile-application.svg') }}"></div>
                                        </a>
                                        <div class="blog-grid-meta">
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}' class='avatar avatar-50 photo author-avatar' height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">July 11, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> </div> <span class="post-meta-estimate"> 11 min read </span>
                                        </div>
                                        <h3 class="blog-grid-headline"> <a class="underline" href="{{config('global-variables.EFFECTIVE_TIPS')}}"> Effective Tips for an On-Demand Service’s App Development! </a> </h3>
                                        <p>Taking&nbsp;over&nbsp;the&nbsp;reins&nbsp;and&nbsp;developing&nbsp;a&nbsp;service&nbsp;app&nbsp;that&nbsp;caters&nbsp;to&nbsp;everyone&#8217;s&nbsp;needs&nbsp;is&nbsp;at&nbsp;hand&nbsp;as&nbsp;on-demand&nbsp;service apps&nbsp;are&nbsp;revolutionizing&nbsp;major&nbsp;business&nbsp;sectors. On-demand&nbsp;service&nbsp;solutions&nbsp;have&nbsp;made&nbsp;it&nbsp;easier&nbsp;for&nbsp;people&nbsp;to&nbsp;access&nbsp;&#8220;mobile&#8221;&nbsp;quick fixes&nbsp;online&nbsp;since&nbsp;the&nbsp;advent&nbsp;of mobile apps. Traditional businesses and older enterprises aiming...</p> <a href="{{config('global-variables.EFFECTIVE_TIPS')}}" class="btn btn-link brand-color-hover"> Read More <i class="ion-right ion"><svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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