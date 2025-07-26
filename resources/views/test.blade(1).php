@extends('layouts.basic-layout')
@section('basic-content')
    <div id="content" class="site-content" data-mobile-menu-resolution="768">




        <div class="page-container">
            <div id="primary" class="content-area">


                <div class="page-content ">
                    <main id="main" class="site-main">
                        <article id="post-26719" class="post-26719 page type-page status-publish hentry">
                            <div class="entry-content">
                                <br><br><br><br>
                                @if (!empty($name))
                                    {{ $name }}
                                @endif


                                <form action="{{ url('contact') }}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <label> <b>Name <span class="pink-txt">*</span></b><input type="text" name="Name">
                                        <label> <b>Company <span class="pink-txt">*</span></b><input type="text"
                                                name="Company">
                                            <label> <b>Email <span class="pink-txt">*</span></b><input type="email"
                                                    name="Email">
                                                <label> <b>Phone <span class="pink-txt">*</span></b><input type="tel"
                                                        name="Phone">
                                                    <label> <b>Interested services <span
                                                                class="pink-txt">*</span></b><select
                                                            name="Interestedservices">
                                                            <option value="Website Development">Website Development</option>
                                                            <option value="Mobile App Development">Mobile App Development
                                                            </option>
                                                            <option value="Prototype Development">Prototype Development
                                                            </option>
                                                            <option value="UX/UI Development">UX/UI Development</option>
                                                            <option value="Hire Dedicated Resources">Hire Dedicated
                                                                Resources</option>
                                                            <option value="Discovery and Requirement Analysis">Discovery and
                                                                Requirement Analysis</option>
                                                            <option value="QA Services">QA Services</option>
                                                            <option value="Design &amp; Brand Identity">Design &amp; Brand
                                                                Identity</option>
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
                                                                    <option value="$75K - $200K">$75K - $200K</option>
                                                                    <option value="$200K - $500K">$200K - $500K</option>
                                                                    <option value="$500K and above">$500K and above</option>
                                                                </select>
                                                                <label> <b>Project Detail <span
                                                                            class="pink-txt">*</span></b>
                                                                    <textarea name="ProjectDetail" cols="40" rows="10"></textarea>
                                                                    <div class="file-upload-wrapper"
                                                                        data-text="Select or Drop your file here"><span
                                                                            class="wpcf7-form-control-wrap SelectorDropyourfilehere"><a
                                                                                id="file-upload-label-1">Select or Drop your
                                                                                file here</a><input type="file"
                                                                                name="SelectorDropyourfilehere"
                                                                                size="40" id="file-upload" /></span>
                                                                    </div>
                                                                    <p>
                                                                </label><br />
                                                                <small class="p">Only Document, Image or ZIP file. Max
                                                                    size 2MB</small></p>
                                                                <p id="mt-70"><label id="uploadLabel"></label><br />
                                                                    <br><br />
                                                                    <label class="custom_checkbox"><span
                                                                            class="wpcf7-form-control-wrap checkbox"><span
                                                                                class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required wpcf7-exclusive-checkbox"><span
                                                                                    class="wpcf7-list-item first last"><input
                                                                                        type="checkbox" name="checkbox-538"
                                                                                        value="I would like to receive information about Aresync Pakistan news and events. By submitting this form, you agree to our privacy policy." /><span
                                                                                        class="wpcf7-list-item-label">I
                                                                                        would like to receive information
                                                                                        about Aresync Pakistan news and
                                                                                        events. By submitting this form, you
                                                                                        agree to our privacy
                                                                                        policy.</span></span></span></span></label><br />
                                                                    <label class="custom_checkbox"><span
                                                                            class="wpcf7-form-control-wrap needNDA"><span
                                                                                class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required wpcf7-exclusive-checkbox"><span
                                                                                    class="wpcf7-list-item first last"><input
                                                                                        type="checkbox" name="needNDA"
                                                                                        value="I want a copy of NDA" /><span
                                                                                        class="wpcf7-list-item-label">I want
                                                                                        a copy of
                                                                                        NDA</span></span></span></span></label>
                                                                </p>
                            </div>

                            <button type="submit"
                                class="wpcf7-form-control has-spinner wpcf7-submit">Submit</button></form>
                </div>
                </article>
                </main>
            </div>

        </div>
    </div>

    </div>
@endsection
