@extends('layouts.basic-layout')
@section('basic-content')

<div id="content" class="site-content" data-mobile-menu-resolution="768">




	<div class="page-container">
		<div id="primary" class="content-area">


			<div class="page-content ">
				<main id="main" class="site-main">

					<article id="post-21005" class="post-21005 page type-page status-publish hentry">
						<div class="entry-content">

							<div class="vc_row wpb_row vc_row-fluid">
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="vc_empty_space  height20vh" style="height: 43vh"><span
													class="vc_empty_space_inner"></span></div>
											<div class="ohio-heading-sc heading text-left"
												id="ohio-custom-62fcede0e09fb">






											</div>
											<div id="disp-none-mob" class="vc_empty_space  height20vh"
												style="height: 32vh"><span class="vc_empty_space_inner"></span></div>
											<div class="ohio-heading-sc heading dp-none text-left"
												id="ohio-custom-62fcede0e0a5b">



												<h3 class="title">
													Work inquiries </h3>


												<p class="subtitle">
													Fill in this form or send us an e-mail with your inquiry. </p>

											</div>
											<div class="vc_empty_space" style="height: 12vh"><span
													class="vc_empty_space_inner"></span></div>
										</div>
									</div>
								</div>
							</div>
							<div id="disp-none-desktop" class="vc_row wpb_row vc_row-fluid form-up dp-none">
								<div id="disp-none-desktop"
									class="bx-shadow wpb_column vc_column_container vc_col-sm-7 vc_col-has-fill">
									<form action="{{ url('contact') }}" enctype="multipart/form-data"
										enctype="multipart/form-data" method="post">
										@csrf
										<div class="lets_talk_form">
											<label> <b>Name <span class="pink-txt">*</span></b><input type="text"
													name="Name">@if( $errors->has('Name') ) {{ $errors->first('Name') }}
												@endif
												<label> <b>Company <span class="pink-txt">*</span></b><input type="text"
														name="Company">@if( $errors->has('Company') ) {{
													$errors->first('Company') }} @endif
													<label> <b>Email <span class="pink-txt">*</span></b><input
															type="email" name="Email">@if( $errors->has('Email') ) {{
														$errors->first('Email') }} @endif
														<label> <b>Phone <span class="pink-txt">*</span></b><input
																type="tel" name="Phone">@if( $errors->has('Phone') ) {{
															$errors->first('Phone') }} @endif
															<label> <b>Interested services <span
																		class="pink-txt">*</span></b><select
																	name="Interestedservices">
																	<option value="Website Development">Website
																		Development</option>
																	<option value="Mobile App Development">Mobile App
																		Development</option>
																	<option value="Prototype Development">Prototype
																		Development</option>
																	<option value="UX/UI Development">UX/UI Development
																	</option>
																	<option value="Hire Dedicated Resources">Hire
																		Dedicated Resources</option>
																	<option value="Discovery and Requirement Analysis">
																		Discovery and Requirement Analysis</option>
																	<option value="QA Services">QA Services</option>
																	<option value="Design &amp; Brand Identity">Design
																		&amp; Brand Identity</option>
																	<option value="Others">Others</option>
																</select>@if( $errors->has('Interestedservices') ) {{
																"Select the Option" }} @endif
																<label> <b>How soon you want to start? <span
																			class="pink-txt">*</span></b><select
																		name="InterestedQs">
																		<option value="Right now">Right now</option>
																		<option value="In few Weeks">In few Weeks
																		</option>
																		<option value="In few Months">In few Months
																		</option>
																		<option value="Not sure">Not sure</option>
																	</select>@if( $errors->has('InterestedQs') ) {{
																	"Select the Option" }} @endif
																	<label> <b>Choose a Budget (<b>USD</b>) <span
																				class="pink-txt">*</span></b><select
																			name="ChooseaBudgetUSD">
																			<option value="Below $10K">Below $10K
																			</option>
																			<option value="$10K - $25K">$10K - $25K
																			</option>
																			<option value="$25K - $75K">$25K - $75K
																			</option>
																			<option value="$75K - $200K">$75K - $200K
																			</option>
																			<option value="$200K - $500K">$200K - $500K
																			</option>
																			<option value="$500K and above">$500K and
																				above</option>
																		</select>@if( $errors->has('ChooseaBudgetUSD') )
																		{{ "Select the Option" }} @endif
																		<label> <b>Project Detail <span
																					class="pink-txt">*</span></b><textarea
																				name="ProjectDetail" cols="40"
																				rows="10"></textarea>
																			<div class="file-upload-wrapper"
																				data-text="Select or Drop your file here">
																				<span
																					class="wpcf7-form-control-wrap SelectorDropyourfilehere"><label
																						class="contact-file-upload-label-1"
																						id="file-upload-label-100">Select
																						or Drop your file
																						here</label><input type="file"
																						name="SelectorDropyourfilehere"
																						size="40"
																						class="wpcf7-form-control wpcf7-file"
																						id="file-upload"
																						accept=".png,.jpg,.jpeg,.pdf,.doc"
																						aria-invalid="false" /></span>
																			</div>
																			<p>
																		</label><br />
																		<small class="p">Only Document, Image or ZIP
																			file. Max size 2MB</small></p>
																		<p id="mt-70"><label
																				id="uploadLabel"></label><br />
																			<br><br />
																			<label class="custom_checkbox"><span
																					class="wpcf7-form-control-wrap checkbox-538"><span
																						class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required wpcf7-exclusive-checkbox"><span
																							class="wpcf7-list-item first last"><input
																								type="checkbox"
																								name="checkbox"
																								value="I would like to receive information about Aresync Pakistan news and events. By submitting this form, you agree to our privacy policy." /><span
																								class="wpcf7-list-item-label">I
																								would like to receive
																								information about
																								Aresync Pakistan news
																								and events. By
																								submitting this form,
																								you agree to our privacy
																								policy.</span></span></span></span></label><br />
																			<!-- <label class="custom_checkbox"><span class="wpcf7-form-control-wrap needNDA"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required wpcf7-exclusive-checkbox"><span class="wpcf7-list-item first last"><input type="checkbox" name="needNDA" value="I want a copy of NDA" /><span class="wpcf7-list-item-label">I want a copy of NDA</span></span></span></span></label></p> -->
																			@if(session()->has('success'))

																		<div style="margin-top: -10px !important;">

																			<span style="color: green !important">{{
																				session()->get('success') }}</span>
																		</div>
																		@endif
																		@if(session()->has('error'))
																		<div style="margin-top: -10px !important;">

																			<span style="color: red !important">{{
																				session()->get('error') }}</span>
																		</div>
																		@endif
										</div>

										<button id="form-mob" type="submit"
											class="wpcf7-form-control has-spinner wpcf7-submit">Submit</button>
									</form>
								</div>
								<div class="vc_column-inner vc_custom_1645533768374">
									<div class="wpb_wrapper">
										<div class="ohio-contact-from-sc contact-form  text-left outline"
											id="ohio-custom-62fcede0e0c28">

											<div role="form" class="wpcf7" id="wpcf7-f21000-p21005-o1" lang="en-US"
												dir="ltr">
												<div class="screen-reader-response">
													<p role="status" aria-live="polite" aria-atomic="true"></p>
													<ul></ul>
												</div>
											</div>
											<div class="hidden" data-contact-btn="true">
												<button class="btn  btn-brand">
													<span class="btn-load"></span>
													<span class="text"></span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper"></div>
								</div>
							</div>
						</div>
						<div class="vc_row wpb_row vc_row-fluid vc_column-gap-25">
							<div class="wpb_column vc_column_container vc_col-sm-6">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="ohio-text-sc absolute" id="ohio-custom-62fcede0e1aee">



										</div>
										<div class="wpb_single_image wpb_content_element vc_align_left   fullimg">

											<figure class="wpb_wrapper vc_figure">
												<div class="vc_single_image-wrapper   vc_box_border_grey"></div>
											</figure>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="ohio-text-sc absolute" id="ohio-custom-62fcede0e2cda">


										</div>
										<div class="wpb_single_image wpb_content_element vc_align_left   fullimg">

											<figure class="wpb_wrapper vc_figure">
												<div class="vc_single_image-wrapper   vc_box_border_grey"><img draggable="false"
														id="lets-talk-img"
														src="{{ asset('asset-3/uploads/2022/03/get-in-touch.svg') }}"
														class="vc_single_image-img attachment-full" loading="lazy"
														title="2usa" sizes="(max-width: 678px) 100vw, 678px" alt="get in touch">
												</div>
											</figure>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div
							id="disp-none-desktop" class="vc_row wpb_row vc_row-fluid row-mobile-hide vc_custom_1653030661264 vc_column-gap-25 vc_row-o-equal-height vc_row-flex">
							<div class="wpb_column vc_column_container vc_col-sm-3">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e3325">

										</div>
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e333f">



										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-3">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e33ec">



										</div>
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e3425">



										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-3">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e38e6">


										</div>
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e3909">


										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-3">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e39b3">


										</div>
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e39e4">


										</div>
									</div>
								</div>
							</div>
						</div>
						<div
							id="disp-none-desktop" class="vc_row wpb_row vc_row-fluid vc_custom_1647061307643 vc_column-gap-25 vc_row-o-equal-height vc_row-flex">
							<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e3b5a">


										</div>
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e3b7b">


										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e3c2e">


										</div>
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e3c55">


										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e3d15">


										</div>
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e3d35">


										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e3dc6">


										</div>
										<div class="ohio-text-sc " id="ohio-custom-62fcede0e3de5">


										</div>
									</div>
								</div>
							</div>
						</div>
						<div
							id="disp-none-desktop" class="vc_row wpb_row vc_row-fluid vc_custom_1647058911029 vc_row-has-fill vc_row-o-equal-height vc_row-flex">
							<div class="wpb_column vc_column_container vc_col-sm-5 vc_hidden-xs">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="ohio-heading-sc heading NAN text-left"
											id="ohio-custom-62fcede0e3f44">



											<h3 class="title">
												Work inquiries </h3>


											<p class="subtitle">
												Fill in this form or send us an e-mail with your inquiry. </p>

										</div>
									</div>
								</div>
							</div>
							<div
								class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-4 vc_col-md-6 vc_hidden-xs">
								<div class="vc_column-inner vc_custom_1645879422742">
									<div class="wpb_wrapper">
										<div class="vc_empty_space" style="height: 133px"><span
												class="vc_empty_space_inner"></span></div>
									</div>
								</div>
							</div>
							<div class="z-0 wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_hidden-xs">
								<div class="vc_column-inner">
									<div class="wpb_wrapper"></div>
								</div>
							</div>
						</div>
						<section data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section bg-befor">
							<div class="vc_row wpb_row vc_row-fluid form-up">
								<div class="pb-10 wpb_column vc_column_container vc_col-sm-5">
									<div class="vc_column-inner vc_custom_1645878089777">
										<div class="wpb_wrapper">
											<div class="ohio-heading-sc heading none text-left"
												id="ohio-custom-62fcede0e4471">



												<h3 class="title">
													Work inquiries </h3>


												<p class="subtitle">
													Fill in this form or send us an e-mail with your inquiry. </p>

											</div>
											<div class="vc_empty_space  height40" style="height: 0px"><span
													class="vc_empty_space_inner"></span></div>
											<div
												class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey  none row-mobile-hide">
												<span class="vc_sep_holder vc_sep_holder_l"><span
														class="vc_sep_line"></span></span><span
													class="vc_sep_holder vc_sep_holder_r"><span
														class="vc_sep_line"></span></span>
											</div>
											<div class="vc_empty_space" style="height: 45px"><span
													class="vc_empty_space_inner"></span></div>
											<div class="ohio-text-sc " id="ohio-custom-62fcede0e470c">

												<p style="text-align: center;">Trusted by</p>

											</div>
											<div class="vc_empty_space" style="height: 45px"><span
													class="vc_empty_space_inner"></span></div>
											<div id="mg-rt-10"
												class="vc_row wpb_row vc_inner vc_row-fluid small-logo workwith vc_column-gap-20">
												<div id="mobile-center-2"
													class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="ohio-client-logo-sc client-logo text-center default"
																id="ohio-custom-62fcede0e581a">

																<a href="#" target="_blank">

																	<div id="single-brand"
																		class="client-logo-inner client-logo-default">
																		<div class="client-logo-img">
																			<img draggable="false" id="width165"
																				src="{{ asset('asset-3/uploads/2022/04/Artboard 1 (1).png') }}"
																				srcset=""
																				sizes="(max-width: 240px) 100vw, 240px"
																				alt="logo">
																		</div>
																	</div>



																</a>
															</div>
														</div>
													</div>
												</div>
												<div id="mobile-center-2"
													class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="ohio-client-logo-sc client-logo text-center default"
																id="ohio-custom-62fcede0e6a4e">

																<a href="#" target="_blank">

																	<div id="single-brand"
																		class="client-logo-inner client-logo-default">
																		<div class="client-logo-img">
																			<img draggable="false" id="width165"
																				src="{{ asset('asset-3/uploads/2022/04/Artboard 1 copy 2.png') }}"
																				srcset=""
																				sizes="(max-width: 240px) 100vw, 240px"
																				alt="logo">
																		</div>
																	</div>



																</a>
															</div>
														</div>
													</div>
												</div>
												<div id="mobile-center-2"
													class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="ohio-client-logo-sc client-logo text-center default"
																id="ohio-custom-62fcede0e8d1f">

																<a href="#" target="_blank">

																	<div id="single-brand"
																		class="client-logo-inner client-logo-default">
																		<div class="client-logo-img">
																			<img draggable="false" id="width165"
																				src="{{ asset('asset-3/uploads/2022/04/Artboard 1 copy 3.png') }}"
																				srcset=""
																				sizes="(max-width: 240px) 100vw, 240px"
																				alt="logo">
																		</div>
																	</div>



																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="vc_row wpb_row vc_inner vc_row-fluid">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="vc_empty_space" style="height: 32px"><span
																	class="vc_empty_space_inner"></span></div>
														</div>
													</div>
												</div>
											</div>
											<div id="mg-rt-10"
												class="vc_row wpb_row vc_inner vc_row-fluid small-logo workwith vc_column-gap-20">
												<div id="mobile-center-2"
													class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="ohio-client-logo-sc client-logo text-center default"
																id="ohio-custom-62fcede0e928b">

																<a href="#" target="_blank">

																	<div id="single-brand"
																		class="client-logo-inner client-logo-default">
																		<div class="client-logo-img">
																			<img draggable="false" id="width165"
																				src="{{ asset('asset-3/uploads/2022/04/Artboard 1 copy 5.png') }}"
																				srcset=""
																				sizes="(max-width: 240px) 100vw, 240px"
																				alt="logo">
																		</div>
																	</div>



																</a>
															</div>
														</div>
													</div>
												</div>
												<div id="mobile-center-2"
													class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="ohio-client-logo-sc client-logo text-center default"
																id="ohio-custom-62fcede0e95b3">

																<a href="#" target="_blank">

																	<div id="single-brand"
																		class="client-logo-inner client-logo-default">
																		<div class="client-logo-img">
																			<img draggable="false" id="width165"
																				src="{{ asset('asset-3/uploads/2022/04/Artboard 1 copy 6.png') }}"
																				srcset=""
																				sizes="(max-width: 240px) 100vw, 240px"
																				alt="logo">
																		</div>
																	</div>



																</a>
															</div>
														</div>
													</div>
												</div>
												<div id="mobile-center-2"
													class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="ohio-client-logo-sc client-logo text-center default"
																id="ohio-custom-62fcede0e98bf">

																<a href="#" target="_blank">

																	<div id="single-brand"
																		class="client-logo-inner client-logo-default">
																		<div class="client-logo-img">
																			<img draggable="false" id="width165"
																				src="{{ asset('asset-3/uploads/2022/04/Artboard 1 copy 7.png') }}"
																				srcset=""
																				sizes="(max-width: 240px) 100vw, 240px"
																				alt="logo">
																		</div>
																	</div>



																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="vc_row wpb_row vc_inner vc_row-fluid">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="vc_empty_space" style="height: 32px"><span
																	class="vc_empty_space_inner"></span></div>
														</div>
													</div>
												</div>
											</div>
											<div id="mg-rt-10"
												class="vc_row wpb_row vc_inner vc_row-fluid small-logo workwith vc_column-gap-35">
												<div id="mobile-center-2"
													class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="ohio-client-logo-sc client-logo text-center default"
																id="ohio-custom-62fcede0e9dac">

																<a href="#" target="_blank">

																	<div id="single-brand"
																		class="client-logo-inner client-logo-default">
																		<div class="client-logo-img">
																			<img draggable="false" id="width165"
																				src="{{ asset('asset-3/uploads/2022/04/Artboard 1 copy 8.png') }}"
																				srcset=""
																				sizes="(max-width: 240px) 100vw, 240px"
																				alt="logo">
																		</div>
																	</div>



																</a>
															</div>
														</div>
													</div>
												</div>
												<div id="mobile-center-2"
													class="wpb_column vc_column_container vc_col-sm-4 vc_col-xs-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">
															<div class="ohio-client-logo-sc client-logo text-center default"
																id="ohio-custom-62fcede0ea0cb">

																<a href="#" target="_blank">

																	<div id="single-brand"
																		class="client-logo-inner client-logo-default">
																		<div class="client-logo-img">
																			<img draggable="false" id="width165"
																				src="{{ asset('asset-3/uploads/2022/04/Artboard 1 copy.png') }}"
																				srcset=""
																				sizes="(max-width: 240px) 100vw, 240px"
																				alt="logo">
																		</div>
																	</div>



																</a>
															</div>
														</div>
													</div>
												</div>
												<div class="wpb_column vc_column_container vc_col-sm-4">
													<div class="vc_column-inner">
														<div class="wpb_wrapper"></div>
													</div>
												</div>
											</div>
											<div class="vc_empty_space" style="height: 32px"><span
													class="vc_empty_space_inner"></span></div>
											<div class="vc_empty_space  none" style="height: 61px"><span
													class="vc_empty_space_inner"></span></div>
											<div
												class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey  none">
												<span class="vc_sep_holder vc_sep_holder_l"><span
														class="vc_sep_line"></span></span><span
													class="vc_sep_holder vc_sep_holder_r"><span
														class="vc_sep_line"></span></span>
											</div>
											<div class="vc_empty_space" style="height: 61px"><span
													class="vc_empty_space_inner"></span></div>
											<div class="ohio-slider-sc slider-wrap">
												<div class="slider ohio-slider  full with-preloader none"
													id="ohio-custom-62fcede0ea300"
													data-ohio-slider='{"loop":true,"navBtn":true,"autoplay":true,"autoplayHoverPause":true,"autoHeight":true,"navContainerClass":"slider-nav","itemsDesktop":"1","itemsTablet":"1","itemsMobile":"1","autoplayTimeout":"8"}'>
													<div class="slider-wrap">

														<div class="ohio-text-sc " id="ohio-custom-62fcede0ea3d8">

															<p><strong>“</strong>Aresync is great. Very knowledgeable
																and responsive. This is the second project I’ve worked
																with them on and I am once again pleased with their work
																and professionalism. I would highly recommend them to
																anyone.<strong>”</strong></p>

														</div>
														<div
															class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_single_image wpb_content_element vc_align_left">

																			<figure class="wpb_wrapper vc_figure">
																				<div
																					class="vc_single_image-wrapper   vc_box_border_grey">
																					<img draggable="false" width="150" height="150"
																						id="mw-p71" src="{{ asset('images/OLIVER.svg')}}"
																						class="vc_single_image-img attachment-thumbnail"
																						alt="OLIVER" loading="lazy"
																						title="Mask Group 290"
																						sizes="(max-width: 150px) 100vw, 150px" />
																				</div>
																			</figure>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-6">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div class="ohio-text-sc "
																			id="ohio-custom-62fcede0ea852">

																			<p style="margin: 0;">Micah Rowan</p>

																		</div>
																		<div class="ohio-text-sc "
																			id="ohio-custom-62fcede0ea87f">


																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="slider-wrap">

														<div class="ohio-text-sc " id="ohio-custom-62fcede0ea93e">

															<p><strong>“</strong>I have been disappointed with my past
																designers that’s what originally brought me to them. The
																support that I received from them was
																wonderful.<strong>”</strong></p>

														</div>
														<div
															class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_single_image wpb_content_element vc_align_left">

																			<figure class="wpb_wrapper vc_figure">
																				<div
																					class="vc_single_image-wrapper   vc_box_border_grey">
																					<img draggable="false" width="150" height="150"
																						id="mw-p71" src="{{ asset('images/OLIVER.svg')}}"
																						class="vc_single_image-img attachment-thumbnail"
																						alt="OLIVER" loading="lazy"
																						title="Mask Group 289"
																						sizes="(max-width: 150px) 100vw, 150px" />
																				</div>
																			</figure>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-6">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div class="ohio-text-sc "
																			id="ohio-custom-62fcede0ec10d">

																			<p style="margin: 0;">Isla Beckett</p>

																		</div>
																		<div class="ohio-text-sc "
																			id="ohio-custom-62fcede0ec15f">


																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="slider-wrap">

														<div class="ohio-text-sc " id="ohio-custom-62fcede0ec20e">

															<p><strong>“</strong>Excellent Work!!! Working with Aresync
																was a real pleasure, they were so confident with their
																efforts in upgrading and redesigning my
																website.<strong>”</strong></p>

														</div>
														<div
															class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_single_image wpb_content_element vc_align_left">

																			<figure class="wpb_wrapper vc_figure">
																				<div
																					class="vc_single_image-wrapper   vc_box_border_grey">
																					<img draggable="false" width="150" height="150"
																						id="mw-p71" src="{{ asset('images/OLIVER.svg')}}"
																						class="vc_single_image-img attachment-thumbnail"
																						alt="OLIVER" loading="lazy"
																						title="Mask Group 288"
																						sizes="(max-width: 150px) 100vw, 150px" />
																				</div>
																			</figure>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-9">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div class="ohio-text-sc "
																			id="ohio-custom-62fcede0ec6a4">

																			<p style="margin: 0;">Zoey Hutton</p>

																		</div>
																		<div class="ohio-text-sc "
																			id="ohio-custom-62fcede0ec6d0">


																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="slider-wrap">

														<div class="ohio-text-sc " id="ohio-custom-62fcede0ec777">

															<p><strong>&#8220;</strong>Being introduced to Aresync was
																the best thing that happened to me when it came to
																building my website. Great quality, customer service and
																price range. I recommend anyone globally to hire them
																for all their online
																requirements.<strong>&#8220;</strong></p>

														</div>
														<div
															class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_single_image wpb_content_element vc_align_left">

																			<figure class="wpb_wrapper vc_figure">
																				<div
																					class="vc_single_image-wrapper   vc_box_border_grey">
																					<img draggable="false" width="150" height="150"
																						id="mw-p71" src="{{ asset('images/OLIVER.svg')}}"
																						class="vc_single_image-img attachment-thumbnail"
																						alt="OLIVER" loading="lazy"
																						title="Mask Group 287"
																						sizes="(max-width: 150px) 100vw, 150px" />
																				</div>
																			</figure>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-9">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div class="ohio-text-sc "
																			id="ohio-custom-62fcede0ecbb1">

																			<p style="margin: 0;">Gael Ryder</p>

																		</div>
																		<div class="ohio-text-sc "
																			id="ohio-custom-62fcede0ecbdd">


																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>


											</div>
										</div>
									</div>
								</div>
								<div id="w-712"
									class="bx-shadow none wpb_column vc_column_container vc_col-sm-7 vc_col-has-fill">
									<form action="{{ url('contact') }}" enctype="multipart/form-data" method="post">
										@csrf

										<label> <b>Name <span class="pink-txt">*</span></b><input type="text"
												name="Name">
											<label> <b>Company <span class="pink-txt">*</span></b><input type="text"
													name="Company">
												<label> <b>Email <span class="pink-txt">*</span></b><input type="email"
														name="Email">
													<label> <b>Phone <span class="pink-txt">*</span></b><input
															type="tel" name="Phone">
														<label> <b>Interested services <span
																	class="pink-txt">*</span></b><select
																name="Interestedservices">
																<option value="Website Development">Website Development
																</option>
																<option value="Mobile App Development">Mobile App
																	Development</option>
																<option value="Prototype Development">Prototype
																	Development</option>
																<option value="UX/UI Development">UX/UI Development
																</option>
																<option value="Hire Dedicated Resources">Hire Dedicated
																	Resources</option>
																<option value="Discovery and Requirement Analysis">
																	Discovery and Requirement Analysis</option>
																<option value="QA Services">QA Services</option>
																<option value="Design &amp; Brand Identity">Design &amp;
																	Brand Identity</option>
																<option value="Others">Others</option>
															</select>
															<label> <b>How soon you want to start? <span
																		class="pink-txt">*</span></b><select
																	name="InterestedQs">
																	<option value="Right now">Right now</option>
																	<option value="In few Weeks">In few Weeks</option>
																	<option value="In few Months">In few Months</option>
																	<option value="Not sure">Not sure</option>
																</select>
																<label> <b>Choose a Budget (<b>USD</b>) <span
																			class="pink-txt">*</span></b><select
																		name="ChooseaBudgetUSD">
																		<option value="Below $10K">Below $10K</option>
																		<option value="$10K - $25K">$10K - $25K</option>
																		<option value="$25K - $75K">$25K - $75K</option>
																		<option value="$75K - $200K">$75K - $200K
																		</option>
																		<option value="$200K - $500K">$200K - $500K
																		</option>
																		<option value="$500K and above">$500K and above
																		</option>
																	</select>
																	<label> <b>Project Detail <span
																				class="pink-txt">*</span></b><textarea
																			name="ProjectDetail" cols="40"
																			rows="10"></textarea>
																		<div class="file-upload-wrapper"
																			data-text="Select or Drop your file here">
																			<span
																				class="wpcf7-form-control-wrap SelectorDropyourfilehere"><label
																					id="file-upload-label-101"
																					class="contact-file-upload-label-1">Select
																					or Drop your file here</label><input
																					type="file" id="file-upload-101"
																					class="contact-file-upload"
																					name="SelectorDropyourfilehere" /></span>
																		</div>
																		<p>
																	</label><br />
																	<small class="p">Only Document, Image or ZIP file.
																		Max size 2MB</small></p>
																	<p id="mt-70"><label id="uploadLabel"></label><br />
																		<br><br />
																		<label class="custom_checkbox"><span
																				class="wpcf7-form-control-wrap checkbox"><span
																					class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required wpcf7-exclusive-checkbox"><span
																						class="wpcf7-list-item first last"><input
																							type="checkbox"
																							name="checkbox-538"
																							value="I would like to receive information about Aresync Pakistan news and events. By submitting this form, you agree to our privacy policy." /><span
																							class="wpcf7-list-item-label">I
																							would like to receive
																							information about Aresync
																							Pakistan news and events. By
																							submitting this form, you
																							agree to our privacy
																							policy.</span></span></span></span></label><br />
																		<!-- <label class="custom_checkbox"><span
																				class="wpcf7-form-control-wrap needNDA"><span
																					class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required wpcf7-exclusive-checkbox"><span
																						class="wpcf7-list-item first last"><input
																							type="checkbox"
																							name="needNDA"
																							value="I want a copy of NDA" /><span
																							class="wpcf7-list-item-label">I
																							want a copy of
																							NDA</span></span></span></span></label> -->
																	</p>
																	@if(session()->has('success'))

																	<div style="margin-top: -10px !important;">

																		<span style="color: green !important">{{
																			session()->get('success') }}</span>
																	</div>
																	@endif
																	@if(session()->has('error'))
																	<div style="margin-top: -10px !important;">

																		<span style="color: red !important">{{
																			session()->get('error') }}</span>
																	</div>
																	@endif
								</div>

								<button id="desktop-sub-form" type="submit"
									class="wpcf7-form-control has-spinner wpcf7-submit">Submit</button></form>
								<div id="mg-10" class="vc_column-inner vc_custom_1653041610693">
									<div class="wpb_wrapper">
										<div class="ohio-contact-from-sc contact-form  text-left outline"
											id="ohio-custom-62fcede0eced1">

											<div role="form" class="wpcf7" id="wpcf7-f21000-p21005-o2" lang="en-US"
												dir="ltr">
												<div class="screen-reader-response">
													<p role="status" aria-live="polite" aria-atomic="true"></p>
													<ul></ul>
												</div>
											</div>
											<div class="hidden" data-contact-btn="true">
												<button class="btn  btn-brand">
													<span class="btn-load"></span>
													<span class="text"></span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper"></div>
								</div>
							</div>
			</div>
			</section>
			<div class="vc_row-full-width vc_clearfix"></div>
			<div id="mg-100-lt"
				class="vc_row wpb_row vc_row-fluid pb-40 vc_custom_1647061916700 vc_column-gap-35 vc_row-o-equal-height vc_row-flex">
				<div class="wpb_column vc_column_container vc_col-sm-4">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-text-sc " id="ohio-custom-62fcede0edea2">


							</div>
							<div class="vc_empty_space" style="height: 5px"><span class="vc_empty_space_inner"></span>
							</div>
							<div id="disp-none"
								class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text">
								<span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#eba60b;"
										class="vc_sep_line"></span></span><span
									class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#eba60b;"
										class="vc_sep_line"></span></span>
							</div>
							<div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span>
							</div>
							<div class="ohio-text-sc " id="ohio-custom-62fcede0edfa7">


							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-4">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-text-sc " id="ohio-custom-62fcede0ee092">


							</div>
							<div class="vc_empty_space" style="height: 5px"><span class="vc_empty_space_inner"></span>
							</div>
							<div id="disp-none"
								class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text">
								<span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#2455b7;"
										class="vc_sep_line"></span></span><span
									class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#2455b7;"
										class="vc_sep_line"></span></span>
							</div>
							<div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span>
							</div>
							<div class="ohio-text-sc " id="ohio-custom-62fcede0ee18b">

							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-4">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-text-sc " id="ohio-custom-62fcede0ee28b">


							</div>
							<div class="vc_empty_space" style="height: 5px"><span class="vc_empty_space_inner"></span>
							</div>
							<div id="disp-none"
								class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text">
								<span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#35aa11;"
										class="vc_sep_line"></span></span><span
									class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#35aa11;"
										class="vc_sep_line"></span></span>
							</div>
							<div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span>
							</div>
							<div class="ohio-text-sc " id="ohio-custom-62fcede0ee39a">


							</div>
							<div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span>
							</div>
							<div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span>
							</div>
							<div class="ohio-slider-sc slider-wrap">
								<div class="slider ohio-slider  full with-preloader dp-none"
									id="ohio-custom-62fcede0ee43d"
									data-ohio-slider='{"loop":true,"navBtn":true,"autoplay":true,"autoplayHoverPause":true,"autoHeight":true,"navContainerClass":"slider-nav","itemsDesktop":"1","itemsTablet":"1","itemsMobile":"1","autoplayTimeout":"8"}'>
									<div class="slider-wrap">

										<div class="ohio-text-sc " id="ohio-custom-62fcede0ee4f3">

											<p><strong>“</strong>Aresync is great. Very knowledgeable and responsive.
												This is the second project I’ve worked with them on and I am once again
												pleased with their work and professionalism. I would highly recommend
												them to anyone.<strong>”</strong></p>

										</div>
										<div
											class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
											<div
												class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-xs-3">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="wpb_single_image wpb_content_element vc_align_left">

															<figure class="wpb_wrapper vc_figure">
																<div
																	class="vc_single_image-wrapper   vc_box_border_grey">
																	<img draggable="false" width="150" height="150"
																		id="mw-p71" src="{{ asset('images/OLIVER.svg')}}"
																		class="vc_single_image-img attachment-thumbnail"
																		alt="OLIVER" loading="lazy" title="Mask Group 290"
																		sizes="(max-width: 150px) 100vw, 150px" />
																</div>
															</figure>
														</div>
													</div>
												</div>
											</div>
											<div
												class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-6 vc_col-xs-9">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="ohio-text-sc " id="ohio-custom-62fcede0ee75c">

															<p style="margin: 0;">Micah Rowan</p>

														</div>
														<div class="ohio-text-sc " id="ohio-custom-62fcede0ee786">


														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="slider-wrap">

										<div class="ohio-text-sc " id="ohio-custom-62fcede0ee857">

											<p><strong>“</strong>I have been disappointed with my past designers that’s
												what originally brought me to them. The support that I received from
												them was wonderful.<strong>”</strong></p>

										</div>
										<div
											class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
											<div
												class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-xs-3">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="wpb_single_image wpb_content_element vc_align_left">

															<figure class="wpb_wrapper vc_figure">
																<div
																	class="vc_single_image-wrapper   vc_box_border_grey">
																	<img draggable="false" width="150" height="150"
																		id="mw-p71" src="{{ asset('images/OLIVER.svg')}}"
																		class="vc_single_image-img attachment-thumbnail"
																		alt="OLIVER" loading="lazy" title="Mask Group 289"
																		sizes="(max-width: 150px) 100vw, 150px" />
																</div>
															</figure>
														</div>
													</div>
												</div>
											</div>
											<div
												class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-6 vc_col-xs-9">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="ohio-text-sc " id="ohio-custom-62fcede0eeab4">

															<p style="margin: 0;">Isla Beckett</p>

														</div>
														<div class="ohio-text-sc " id="ohio-custom-62fcede0eeadf">


														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="slider-wrap">

										<div class="ohio-text-sc " id="ohio-custom-62fcede0eeb91">

											<p><strong>“</strong>Excellent Work!!! Working with Aresync was a real
												pleasure, they were so confident with their efforts in upgrading and
												redesigning my website.<strong>”</strong></p>

										</div>
										<div
											class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
											<div
												class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-xs-3">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="wpb_single_image wpb_content_element vc_align_left">

															<figure class="wpb_wrapper vc_figure">
																<div
																	class="vc_single_image-wrapper   vc_box_border_grey">
																	<img draggable="false" width="150" height="150"
																		id="mw-p71" src="{{ asset('images/OLIVER.svg')}}"
																		class="vc_single_image-img attachment-thumbnail"
																		alt="OLIVER" loading="lazy" title="Mask Group 288"
																		sizes="(max-width: 150px) 100vw, 150px" />
																</div>
															</figure>
														</div>
													</div>
												</div>
											</div>
											<div
												class="wpb_column vc_column_container vc_col-sm-9 vc_col-lg-9 vc_col-xs-9">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="ohio-text-sc " id="ohio-custom-62fcede0eee0a">

															<p style="margin: 0;">Zoey Hutton</p>

														</div>
														<div class="ohio-text-sc " id="ohio-custom-62fcede0eee35">


														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="slider-wrap">

										<div class="ohio-text-sc " id="ohio-custom-62fcede0eeee3">

											<p><strong>&#8220;</strong>Being introduced to Aresync was the best thing
												that happened to me when it came to building my website. Great quality,
												customer service and price range. I recommend anyone globally to hire
												them for all their online requirements.<strong>&#8220;</strong></p>

										</div>
										<div
											class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
											<div
												class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-xs-3">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="wpb_single_image wpb_content_element vc_align_left">

															<figure class="wpb_wrapper vc_figure">
																<div
																	class="vc_single_image-wrapper   vc_box_border_grey">
																	<img draggable="false" width="150" height="150"
																		id="mw-p71" src="{{ asset('images/OLIVER.svg')}}"
																		class="vc_single_image-img attachment-thumbnail"
																		alt="OLIVER" loading="lazy" title="Mask Group 287"
																		sizes="(max-width: 150px) 100vw, 150px" />
																</div>
															</figure>
														</div>
													</div>
												</div>
											</div>
											<div
												class="wpb_column vc_column_container vc_col-sm-9 vc_col-lg-6 vc_col-xs-9">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="ohio-text-sc " id="ohio-custom-62fcede0ef171">

															<p style="margin: 0;">Gael Ryder</p>

														</div>
														<div class="ohio-text-sc " id="ohio-custom-62fcede0ef19c">


														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
			<div
				class="vc_row wpb_row vc_row-fluid pb-40 vc_custom_1645878595933 vc_column-gap-35 vc_row-o-equal-height vc_row-flex">
				<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-icon-box-sc icon-box text-left icon-center with-full-icon"
								id="ohio-custom-631b4fd61af17"><b>

									<div class="icon-box-headline">
										<div class="icon-box-icon">
										</div>
									</div>

									<p class="icon-box-details">
									</p>


								</b></div>
							<div class="ohio-text-sc " id="ohio-custom-631b4fd61af7c"><b>


								</b></div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-icon-box-sc icon-box text-left icon-center with-full-icon"
								id="ohio-custom-631b4fd61b37a"><b>

									<div class="icon-box-headline">
										<div class="icon-box-icon">
										</div>
									</div>

									<p class="icon-box-details">
									</p>


								</b></div>
							<div class="ohio-text-sc " id="ohio-custom-631b4fd61b3bb"><b>


								</b></div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-icon-box-sc icon-box text-left icon-center with-full-icon"
								id="ohio-custom-631b4fd61b7b3"><b>

									<div class="icon-box-headline">
										<div class="icon-box-icon">
										</div>
									</div>



								</b></div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-icon-box-sc icon-box text-left icon-center with-full-icon"
								id="ohio-custom-631b4fd61bb9d"><b>

									<div class="icon-box-headline">
										<div class="icon-box-icon">
										</div>
									</div>

									<p class="icon-box-details">
									</p>


								</b></div>
							<div class="ohio-text-sc " id="ohio-custom-631b4fd61bbef"><b>


								</b></div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row-full-width vc_clearfix"></div>
			<div
				class="vc_row wpb_row vc_row-fluid pb-40 vc_custom_1645878419519 vc_column-gap-35 vc_row-o-equal-height vc_row-flex">
				<div class="wpb_column vc_column_container vc_col-sm-4">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-text-sc " id="ohio-custom-631b4fd61a68b"><b>

									<h4>Share Your<br>
										Requirement</h4>

								</b></div>
							<div class="vc_empty_space  vc_custom_1657533989050" style="height: 5px"><b><span
										class="vc_empty_space_inner"></span></b></div>
							<div class="vc_empty_space" style="height: 35px"><b><span
										class="vc_empty_space_inner"></span></b></div>
							<div class="ohio-text-sc " id="ohio-custom-631b4fd61a71b"><b>

									<p>We keenly analyze your<br>
										requirements from the beginning for<br>
										a seamless development process.</p>

								</b></div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-4">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-text-sc " id="ohio-custom-631b4fd61a7d5"><b>

									<h4>Non Disclosure<br>
										Agreement (NDA)</h4>

								</b></div>
							<div class="vc_empty_space  vc_custom_1657534013147" style="height: 5px"><b><span
										class="vc_empty_space_inner"></span></b></div>
							<div class="vc_empty_space" style="height: 35px"><b><span
										class="vc_empty_space_inner"></span></b></div>
							<div class="ohio-text-sc " id="ohio-custom-631b4fd61a87f"><b>

									<p>Your business ideas are always safe<br>
										with us. We assure you of complete<br>
										confidentiality with NDA.</p>

								</b></div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-4">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-text-sc " id="ohio-custom-631b4fd61a93e"><b>

									<h4>Understanding Your<br>
										Requirement</h4>

								</b></div>
							<div class="vc_empty_space  vc_custom_1657534044281" style="height: 5px"><b><span
										class="vc_empty_space_inner"></span></b></div>
							<div class="vc_empty_space" style="height: 35px"><b><span
										class="vc_empty_space_inner"></span></b></div>
							<div class="ohio-text-sc " id="ohio-custom-631b4fd61a9e2"><b>

									<p>Once we have your requirement,<br>
										will allocate our expert team<br>
										consultation to choose the<br>
										approach.</p>

								</b></div>
						</div>
					</div>
				</div>
			</div>
			<div
				class="vc_row wpb_row vc_row-fluid pb-40 vc_custom_1645878595933 vc_column-gap-35 vc_row-o-equal-height vc_row-flex">
				<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-icon-box-sc icon-box text-left icon-center with-full-icon"
								id="ohio-custom-631b4fd61af17"><b>

									<div class="icon-box-headline">
										<div class="icon-box-icon">
											<img draggable="false" src="{{ asset('asset-3/uploads/2022/03/mail.svg') }}" srcset=""
												sizes="(max-width: 640px) 100vw, 640px" alt="General inquiries">
										</div>
										<h5 class="icon-box-title heading-sm">General inquiries</h5>
									</div>

									<p class="icon-box-details">
									</p>


								</b></div>
							<div class="ohio-text-sc " id="ohio-custom-631b4fd61af7c"><b>

									<p><a id="ml-75"
											href="mailto:{{config('global-variables.EMAIL_AT_INFO')}}">{{config('global-variables.EMAIL_AT_INFO')}}</a>
									</p>

								</b></div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-icon-box-sc icon-box text-left icon-center with-full-icon"
								id="ohio-custom-631b4fd61b37a"><b>

									<div class="icon-box-headline">
										<div class="icon-box-icon">
											<img draggable="false" src="{{ asset('asset-3/uploads/2022/03/communications.svg') }}"
												srcset="" sizes="(max-width: 640px) 100vw, 640px" alt="Phone Number">
										</div>
										<h5 class="icon-box-title heading-sm">Phone Number</h5>
									</div>

									<p class="icon-box-details">
									</p>


								</b></div>
							<div class="ohio-text-sc " id="ohio-custom-631b4fd61b3bb"><b>

									<p><a id="ml-75"
											href="tel:{{config('global-variables.PHONE_NUMBER_DETAILS.USA.NUMBER')}}">{{config('global-variables.PHONE_NUMBER_DETAILS.USA.NUMBER')}}</a>
									</p>

								</b></div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-icon-box-sc icon-box text-left icon-center with-full-icon"
								id="ohio-custom-631b4fd61b7b3"><b>

									<div class="icon-box-headline">
										<div class="icon-box-icon">
                                            <img draggable="false" loading="lazy"
                                                 src="{{ asset('asset-3/uploads/2022/05/facebook.png') }}"
                                                 class="wp-image-25287" sizes="(max-width: 640px) 100vw, 640px" alt="facebook">
										</div>
										<h5 class="icon-box-title heading-sm">Facebook</h5>
									</div>

									<p class="icon-box-details">
                                        <a id="hover-color"
                                           href="{{config('global-variables.FB.link')}}" target="_blank">&nbsp{{config('global-variables.FB.name')}}</a> </p>


								</b></div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-icon-box-sc icon-box text-left icon-center with-full-icon"
								id="ohio-custom-631b4fd61bb9d"><b>

									<div class="icon-box-headline">
										<div class="icon-box-icon">
                                            <img draggable="false" loading="lazy"
                                                 src="{{asset('asset-3/uploads/2022/05/linkedin.png')}}"
                                                 alt="linkedin" class="wp-image-25287" width="26" height="16">
										</div>
										<h5 class="icon-box-title heading-sm">Linkedin</h5>
									</div>

									<p class="icon-box-details">
                                        <a id="hover-color"
                                           href="{{config('global-variables.LINKEDIN.link')}}" target="_blank">
                                            {{config('global-variables.LINKEDIN.name')}}</a>
									</p>


								</b></div>
						</div>
					</div>
				</div>
			</div>
			<div id="disp-none" data-vc-full-width="true" data-vc-full-width-init="true"
				class="vc_row wpb_row vc_row-fluid dark-bg vc_custom_1646110299328 vc_row-has-fill"
				style="position: relative; left: -91.5px; box-sizing: border-box; width: 1423px; padding-left: 91.5px; padding-right: 91.5px;">
				<div class="wpb_column vc_column_container vc_col-sm-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="ohio-heading-sc heading text-left" id="ohio-custom-631b4fd61be24"><b>

									<p class="subtitle">
										CLIENTS WE WORK FOR </p>


									<h3 class="title subtitle-top">
										Our clients. </h3>



								</b></div>
							<div class="vc_empty_space" style="height: 70px"><b><span
										class="vc_empty_space_inner"></span></b></div>
							<div class="vc_row wpb_row vc_inner vc_row-fluid spacer0 vc_custom_1645878669569">
								<div class="wpb_column vc_column_container vc_col-sm-3">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61bf56"><b>

													<p>JPMorgan Chase, 2019</p>

												</b></div>
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61bf82"><b>

													<p><a href="#">www.jpmorgan.com</a></p>

												</b></div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-3">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c035"><b>

													<p>Unilever, 2017</p>

												</b></div>
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c05f"><b>

													<p><a href="#">www.uniliver.com</a></p>

												</b></div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-3">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c102"><b>

													<p>Naspers, 2016</p>

												</b></div>
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c12d"><b>

													<p><a href="#">www.naspers.com</a></p>

												</b></div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-3">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c1c8"><b>

													<p>JPMorgan Chase, 2019</p>

												</b></div>
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c1f3"><b>

													<p><a href="#">www.jpmorgan.com</a></p>

												</b></div>
										</div>
									</div>
								</div>
							</div>
							<div class="vc_row wpb_row vc_inner vc_row-fluid spacer0 vc_custom_1645878680584">
								<div class="wpb_column vc_column_container vc_col-sm-3">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c339"><b>

													<p>Berkshire Hathaway, 2019</p>

												</b></div>
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c365"><b>

													<p><a href="#">www.bhathaway.com</a></p>

												</b></div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-3">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c40e"><b>

													<p>Novo Nordisk, 2016</p>

												</b></div>
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c438"><b>

													<p><a href="#">www.novonordisk.com</a></p>

												</b></div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-3">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c4d7"><b>

													<p>Merck &amp; Co., 2017</p>

												</b></div>
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c506"><b>

													<p><a href="#">www.merck.com</a></p>

												</b></div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-3">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c59f"><b>

													<p>Royal Dutch Shell, 2018</p>

												</b></div>
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c5c7"><b>

													<p><a href="#">www.shell.com</a></p>

												</b></div>
										</div>
									</div>
								</div>
							</div>
							<div class="vc_row wpb_row vc_inner vc_row-fluid spacer0 vc_custom_1645878694344">
								<div class="wpb_column vc_column_container vc_col-sm-3">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c702"><b>

													<p>Berkshire Hathaway, 2019</p>

												</b></div>
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c72b"><b>

													<p><a href="#">www.pg.com</a></p>

												</b></div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-3">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c7d5"><b>

													<p>Novo Nordisk, 2016</p>

												</b></div>
											<div class="ohio-text-sc " id="ohio-custom-631b4fd61c7ff"><b>

													<p><a href="#">www.allianz.com</a></p>

												</b></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_row-full-width vc_clearfix"></div>
			<div data-vc-full-width="true" data-vc-full-width-init="false"
				class="vc_row wpb_row vc_row-fluid vc_custom_1645505083436 vc_row-has-fill">
				<div class="wpb_column vc_column_container vc_col-sm-12">
					<div class="vc_column-inner vc_custom_1645617737623">
						<div class="wpb_wrapper">
							<div class="vc_row wpb_row vc_inner vc_row-fluid">
								<div class="wpb_column vc_column_container vc_col-sm-6">
									<div class="vc_column-inner">
										<div class="wpb_wrapper"></div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-6 vc_col-has-fill">
									<div class="vc_column-inner vc_custom_1645879146979">
										<div class="wpb_wrapper">
											<div class="ohio-counter-box-sc counter-box text-left "
												id="ohio-custom-62fcede0efc36">


												<div class="counter-box-count" data-counter="236">
													<i class="counter-box-icon left-icon ion ion-md-keypad"></i>
													<span class="count">0</span> <span class="plus-symbol"></span>
												</div>
												<h6 class="counter-box-headline heading-sm">Succeeded<br />
													Project</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-6 vc_col-has-fill">
									<div class="vc_column-inner vc_custom_1645879181690">
										<div class="wpb_wrapper">
											<div class="ohio-counter-box-sc counter-box text-left "
												id="ohio-custom-62fcede0efcf3">


												<div class="counter-box-count" data-counter="236">
													<i class="counter-box-icon left-icon ion ion-md-keypad"></i>
													<span class="count">0</span> <span class="plus-symbol"></span>
												</div>
												<h6 class="counter-box-headline heading-sm">Succeeded<br />
													Project</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
