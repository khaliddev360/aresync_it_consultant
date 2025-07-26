@extends('layouts.basic-layout')
@section('title')
    {{config($data['title'])}}
@endsection
@section('basic-content')
<div id="content" class="site-content" data-mobile-menu-resolution="768">
    <div class="page-container">
        <div id="primary" class="content-area">
            <div class="page-content ">
                <main id="main" class="site-main">
                    <article id="post-25162" class="post-25162 page type-page status-publish hentry">
                        <div class="entry-content">
                            <section data-vc-full-width="true" data-vc-full-width-init="false" id="{{ $data['id1'] }}"
                                class="vc_section bg-xsc-1 {{ $data['id'] }} vc_section-has-fill">
                                <div
                                    class="vc_row wpb_row vc_row-fluid vc_row-o-full-height vc_row-o-columns-middle vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                    <div class="vc-bg-lines page-container dark">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space  height100" style="height: 0px"><span
                                                        class="vc_empty_space_inner"></span></div>
                                                <div class="vc_empty_space  height100" style="height: 0px"><span
                                                        class="vc_empty_space_inner"></span></div>
                                                <div class="ohio-heading-sc heading text-left"
                                                    id="ohio-custom-62fcedc9538e6">
                                                    <h1 id="head-read-more" class="title">{{$data['head']}}</h1>
                                                </div>
                                                <div class="vc_empty_space  none" style="height: 50px"><span
                                                        class="vc_empty_space_inner"></span></div>
                                                <div class="ohio-button-sc btn-wrap text-left"
                                                    id="ohio-custom-62fcedc95396f">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space  height40" style="height: 700px"><span
                                                        class="vc_empty_space_inner"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false"
                                data-vc-stretch-content="true"
                                class="vc_row wpb_row vc_row-fluid tabpls vc_row-no-padding vc_row-o-equal-height vc_row-flex">
                                <div class="space40 wpb_column vc_column_container vc_col-sm-9 vc_col-has-fill">
                                    <div id="read-more-text-sec-lg" class="vc_column-inner vc_custom_1648724904470">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space" style="height: 50px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                            <div class="vc_empty_space  tab-none" style="height: 50px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                            <div class="ohio-heading-sc heading fight text-left"
                                                id="ohio-custom-62fcedd9317ec">
                                                <h3 class="title">
                                                    <b> {{ $data['head'] }} </b>
                                                </h3>
                                                <p>{{ $data['detail'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space40 wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
                                    <div id="read-more-img-sec-small" class="vc_column-inner vc_custom_1648724904470">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space" style="height: 50px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                            <div id="disp-none" class="vc_empty_space  tab-none" style="height: 50px">
                                                <span class="vc_empty_space_inner"></span>
                                            </div>
                                            <div class="ohio-heading-sc heading fight text-left"
                                                id="ohio-custom-62fcedd9317ec">
                                                <h3 id="white-color-services" class="title">
                                                    Relative Service</h3>
                                                @foreach ( $data['service'] as $services )
                                                <div id="mt-64">
                                                    <a href="{{config($services['link'])}}">
                                                        <div id="mt-20" class="vc_col-sm-4 vc_col-xs-6">
                                                            <img draggable="false" width="150" height="150" id="icon-width-100-read"
                                                                src="{{asset($services['img'])}}"
                                                                class="vc_single_image-img attachment-thumbnail" alt="thumbnail"
                                                                loading="lazy" title="01_PHP web development">
                                                        </div>
                                                        <div id="mt-29" class="vc_col-sm-8 vc_col-xs-6">

                                                            <h5 id="white-color-services-head">{{ $services['head'] }}</h5>
                                                            {{-- <p id="white-color">{{ $services['para'] }}</p> --}}
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear-flx"></div>
                            {{--Satrt-hire-developer-price--}}
                            @include('components.hire-developer-price')
                            {{--End-Services-Slider--}}

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