@extends('layouts.basic-layout') 
@section('basic-content') 
        <div id="content" class="site-content" data-mobile-menu-resolution="768">
            <div class="clb-page-headline without-cap text-left subheader_included">
                <div class="bg-image"></div>
                <div class="clb-page-headline-holder">
                    <div class="page-container">
                        <div class="clb-back-link vc_hidden-md vc_hidden-sm vc_hidden-xs"> <a href="{{config('global-variables.UI_UX_DESIGN')}}" class="btn-round btn-round-light"> <i class="ion-left ion"><svg class="arrow-icon arrow-icon-back" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                                    </svg></i> </a> <span class="clb-back-link-caption"> Back </span> </div>
                        <div class="vc_row">
                            <div class="vc_col-lg-12 animated-holder">
                                <div class="post-meta"> </div>
                                <h1 class="clb-title">Digital</h1>
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
                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name" class="active">Digital</span>
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
                                            <div class="result"> Showing 1-10 of 10 results </div>
                                            <div class="select-inline"> <select autocomplete="off">
                                                    <option value="" data-select-href="{{config('global-variables.INDEX')}}">Categories</option>
                                                    <option value="digital" data-select-href="{{config('global-variables.DIGITAL')}}" selected>Digital</option>
                                                    <option value="marketing" data-select-href="{{config('global-variables.DIGITAL-MARKETING')}}">Marketing</option>
                                                    <option value="uncategorized" data-select-href="{{config('global-variables.UNCATEGORIZED')}}">Uncategorized</option>
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
                                    <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.IMPACT-MOBILE')}}">
                                            <div class="blog-metro-image parallax" data-ohio-bg-image="{{ asset('asset-3/uploads/2022/03/frontend-development.svg') }}"></div>
                                        </a>
                                        <div class="blog-grid-meta">
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}' class='avatar avatar-50 photo author-avatar' height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">August 17, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> </div> <span class="post-meta-estimate"> 6 min read </span>
                                        </div>
                                        <h3 class="blog-grid-headline"> <a class="underline" href="{{config('global-variables.IMPACT-MOBILE')}}"> Impact of the Mobile application on the Travel and Tourism Industry </a> </h3>
                                        <p>When planning a trip, people used guidebooks and periodicals or magazines. Booking...</p> <a href="{{config('global-variables.IMPACT-MOBILE')}}" class="btn btn-link brand-color-hover"> Read More <i class="ion-right ion"><svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                                                </svg></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class=" vc_col-lg-6 vc_col-md-6 vc_col-xs-12 grid-item" data-lazy-item="" data-lazy-scope="posts">
                                <div class="blog-grid blog-grid-type-1 boxed metro-style hover-scale-img">
                                    <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.TIPS')}}">
                                            <div class="blog-metro-image parallax" data-ohio-bg-image="{{ asset('asset-3/uploads/2022/03/developer-2.svg') }}"></div>
                                        </a>
                                        <div class="blog-grid-meta">
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}' class='avatar avatar-50 photo author-avatar' height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">August 1, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> </div> <span class="post-meta-estimate"> 13 min read </span>
                                        </div>
                                        <h3 class="blog-grid-headline"> <a class="underline" href="{{config('global-variables.TIPS')}}"> Tips For Building Ecommerce Websites With Node.js </a> </h3>
                                        <p>There are many benefits to using Node.js, including its simplicity and free...</p> <a href="{{config('global-variables.TIPS')}}" class="btn btn-link brand-color-hover"> Read More <i class="ion-right ion"><svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                                                </svg></i> </a>
                                    </div>
                                </div>
                            </div>
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
                            <div class=" vc_col-lg-6 vc_col-md-6 vc_col-xs-12 grid-item" data-lazy-item="" data-lazy-scope="posts">
                                <div class="blog-grid blog-grid-type-1 boxed metro-style hover-scale-img">
                                    <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.SET_UP')}}">
                                            <div class="blog-metro-image parallax" data-ohio-bg-image="{{ asset('asset-3/uploads/2022/03/award-winning.jpg') }}"></div>
                                        </a>
                                        <div class="blog-grid-meta">
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}' class='avatar avatar-50 photo author-avatar' height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">July 6, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> </div> <span class="post-meta-estimate"> 20 min read </span>
                                        </div>
                                        <h3 class="blog-grid-headline"> <a class="underline" href="{{config('global-variables.SET_UP')}}"> How We Set Up Our Team And Tools When We Start Working With A Software Company </a> </h3>
                                        <p>The purpose of this article is to share how IT Services India collaborates with software companies, as...</p> <a href="{{config('global-variables.SET_UP')}}" class="btn btn-link brand-color-hover"> Read More <i class="ion-right ion"><svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                                                </svg></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class=" vc_col-lg-6 vc_col-md-6 vc_col-xs-12 grid-item" data-lazy-item="" data-lazy-scope="posts">
                                <div class="blog-grid blog-grid-type-1 boxed metro-style hover-scale-img">
                                    <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.THINGS')}}">
                                            <div class="blog-metro-image parallax" data-ohio-bg-image="{{asset('asset-3/uploads/2022/02/innovation.jpg')}}"></div>
                                        </a>
                                        <div class="blog-grid-meta">
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}' class='avatar avatar-50 photo author-avatar' height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">May 5, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> <a class="category" href="{{config('global-variables.DIGITAL-MARKETING')}}">Marketing</a> <a class="category" href="{{config('global-variables.UNCATEGORIZED')}}">Uncategorized</a> </div> <span class="post-meta-estimate"> 7 min read </span>
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
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}' class='avatar avatar-50 photo author-avatar' height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">April 18, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> <a class="category" href="{{config('global-variables.DIGITAL-MARKETING')}}">Marketing</a> <a class="category" href="{{config('global-variables.UNCATEGORIZED')}}">Uncategorized</a> </div> <span class="post-meta-estimate"> 5 min read </span>
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
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}' class='avatar avatar-50 photo author-avatar' height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">April 18, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> <a class="category" href="{{config('global-variables.DIGITAL-MARKETING')}}">Marketing</a> <a class="category" href="{{config('global-variables.UNCATEGORIZED')}}">Uncategorized</a> </div> <span class="post-meta-estimate"> 5 min read </span>
                                        </div>
                                        <h3 class="blog-grid-headline"> <a class="underline" href="{{config('global-variables.GAIN')}}"> Gain The Competitive Advantage Using Drupal Development System: </a> </h3>
                                        <p>Content Management System helps the website owners to change, add, modify and...</p> <a href="{{config('global-variables.GAIN')}}" class="btn btn-link brand-color-hover"> Read More <i class="ion-right ion"><svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                                                </svg></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class=" vc_col-lg-6 vc_col-md-6 vc_col-xs-12 grid-item" data-lazy-item="" data-lazy-scope="posts">
                                <div class="blog-grid blog-grid-type-1 boxed metro-style hover-scale-img">
                                    <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.BEST')}}">
                                            <div class="blog-metro-image parallax" data-ohio-bg-image="{{ asset('asset-3/uploads/2022/03/apple-watch.jpg') }}"></div> 
                                        </a>
                                        <div class="blog-grid-meta">
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}' class='avatar avatar-50 photo author-avatar' height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">April 4, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> </div> <span class="post-meta-estimate"> 14 min read </span>
                                        </div>
                                        <h3 class="blog-grid-headline"> <a class="underline" href="{{config('global-variables.BEST')}}"> What is the Best Trends of Apple Smart Watch in Modern Health Care? </a> </h3>
                                        <p>We are living in the 21st century where science and technology are...</p> <a href="{{config('global-variables.BEST')}}" class="btn btn-link brand-color-hover"> Read More <i class="ion-right ion"><svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                                                </svg></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class=" vc_col-lg-6 vc_col-md-6 vc_col-xs-12 grid-item" data-lazy-item="" data-lazy-scope="posts">
                                <div class="blog-grid blog-grid-type-1 boxed metro-style hover-scale-img">
                                    <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.MONEY')}}">
                                            <div class="blog-metro-image parallax" data-ohio-bg-image="{{ asset('asset-3/uploads/2022/03/money-2.jpg') }}"></div>
                                        </a>
                                        <div class="blog-grid-meta">
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}' class='avatar avatar-50 photo author-avatar' height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">March 24, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> </div> <span class="post-meta-estimate"> 5 min read </span>
                                        </div>
                                        <h3 class="blog-grid-headline"> <a class="underline" href="{{config('global-variables.MONEY')}}"> How to Make Money Online ? </a> </h3>
                                        <p>Today, everyone wants to find out how to earn money online by...</p> <a href="{{config('global-variables.MONEY')}}" class="btn btn-link brand-color-hover"> Read More <i class="ion-right ion"><svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                                                </svg></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class=" vc_col-lg-6 vc_col-md-6 vc_col-xs-12 grid-item" data-lazy-item="" data-lazy-scope="posts">
                                <div class="blog-grid blog-grid-type-1 boxed metro-style hover-scale-img">
                                    <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.IMPORTANCE_MOBILE')}}">
                                            <div class="blog-metro-image parallax" data-ohio-bg-image="{{ asset('asset-3/uploads/2022/03/goals.jpg') }}"></div>
                                        </a>
                                        <div class="blog-grid-meta">
                                            <div class="meta-holder"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}' class='avatar avatar-50 photo author-avatar' height='50' width='50' loading='lazy' />
                                                <div class="author-attributes">
                                                    <div class="author">Posted by <b>aresync</b></div> <span class="date">March 24, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="blog-grid-content text-left">
                                        <div class="post-details">
                                            <div class="category-holder"> <a class="category" href="{{config('global-variables.DIGITAL')}}">Digital</a> </div> <span class="post-meta-estimate"> 6 min read </span>
                                        </div>
                                        <h3 class="blog-grid-headline"> <a class="underline" href="{{config('global-variables.IMPORTANCE_MOBILE')}}"> Mobile Applications Are Important to Everyday Life! </a> </h3>
                                        <p>In today's world, most people have a smartphone in their pocket. No...</p> <a href="{{config('global-variables.IMPORTANCE_MOBILE')}}" class="btn btn-link brand-color-hover"> Read More <i class="ion-right ion"><svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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