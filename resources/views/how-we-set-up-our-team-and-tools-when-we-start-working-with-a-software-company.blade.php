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
                        <div class="post-meta">
                            <div class="category-holder "><a class="category" href="{{config('global-variables.DIGITAL')}}" rel="category tag"> Digital</a></div> <span class="post-meta-estimate"> 20 min read </span>
                        </div>
                        <h1 class="clb-title">How We Set Up Our Team And Tools When We Start Working With A Software Company</h1>
                        <div class="clb-post-meta">
                            <ul class="clb-post-holder">
                                <li class="clb-post-meta-item"> <img alt='aresync' src='{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}' class='avatar avatar-50 photo author-avatar' height='50' width='50' loading='lazy' /> </li>
                                <li class="clb-post-meta-item">
                                    <div class="prefix">Author</div> <span class="author">aresync</span>
                                </li>
                                <li class="clb-post-meta-item">
                                    <div class="prefix">Published</div> July 6, 2022
                                </li>
                                <li class="clb-post-meta-item">
                                    <div class="prefix"> 0 comments </div> <a href="#comments"> <span class="date">Join the Conversation</span> </a>
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
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{config('global-variables.OUR_BLOG')}}"><span itemprop="name">Home</span></a><i class="ion ion-ios-arrow-forward"></i>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{config('global-variables.DIGITAL')}}"><span itemprop="name">Digital</span></a><i class="ion ion-ios-arrow-forward"></i>
                                <meta itemprop="position" content="2" />
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name" class="active">How We Set Up Our Team And Tools When We Start Working With A Software Company</span>
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
                            <article id="post-31555" class="post-31555 post type-post status-publish format-standard has-post-thumbnail hentry category-digital">
                                <div class="entry-content">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p class="p1" style="text-align: left;">The purpose of this article is to share how Aresync collaborates with software companies, as an outsourced mobile development company.</p>
                                                            <p class="p1" style="text-align: left;">Especially when your development team is being outsourced, starting a new project is stressful. There are a lot of questions to answer and problems to solve, which adds even more pressure to the project.</p>
                                                            <p class="p1">There are certain processes and practices you can follow that can make starting a project easier, and reduce stress on both sides. Even though it&#8217;s never easy, some of them can help.</p>
                                                            <p class="p1">Let&#8217;s find out more about our team and tools in this blog. We will show you which tools, processes, and practices we use here at Aresync.</p>
                                                            <blockquote>
                                                                <p class="p2"><span class="s1">Table of Contents</span></p>
                                                            </blockquote>
                                                            <p class="p1">• Assembling the Team</p>
                                                            <p class="p1">• Our Techstack</p>
                                                            <p class="p1">• Communication within the team and with client</p>
                                                            <p class="p1">• Development methodology</p>
                                                            <p class="p1">• Development process and code quality</p>
                                                            <p class="p1">• Code repository</p>
                                                            <p class="p1">• Analytics and Reporting</p>
                                                            <p class="p1">• Our tools at a glance</p>
                                                            <p class="p1">• Conclusion</p>
                                                            <ul>
                                                                <li class="p4"><b>Assembling the Team</b></li>
                                                            </ul>
                                                            <p class="p1" style="text-align: left;">Aresync usually assembles a team of different developers in accordance with the project requirements. Depending on the project&#8217;s requirements, the team may include a mix of developers.</p>
                                                            <p class="p1">The team lead will be one of the senior developers if there is more than one developer on the team.</p>
                                                            <p class="p1">In addition to taking responsibility as a developer and developing new features, the team leader must coordinate events and meetings, communicate with the client and with their team, as well as act as the primary contact for the client.</p>
                                                            <p class="p1">As a result, we usually assign one or more full-time quality assurance engineers, since no one wants bugs in their app.</p>
                                                            <p class="p1">Our team can be divided into smaller pods based on platforms if necessary when working on larger projects. Consequently, we have two teams, two pods and two team leads, one for iOS and one for Android. We have quality assurance engineers for both teams.</p>
                                                            <p class="p1">Our philosophy is to assign developers to one project at a time so they will work exclusively on it. This reduces the risk of them switching context on a daily basis. You can be certain that our team will work tirelessly for your business.</p>
                                                            <ul>
                                                                <li class="p4"><b>Our Techstack</b></li>
                                                            </ul>
                                                            <p class="p4">Aresync prefers to work with cutting-edge technologies. Although we won&#8217;t be scared off by older technologies or legacy projects that need updating. Swift developers like Swift, and Objective-C developers love Objective-C, but all Android developers started with Java.</p>
                                                            <p class="p4">Our cross-platform development team works with both React Native and Flutter. A summary of our native and hybrid frameworks, libraries, and patterns can be found below.</p>
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
                                                    <div class="wpb_single_image wpb_content_element vc_align_left   fullimg">
                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="3200" height="1666" src="{{ asset('asset-3/uploads/2022/03/award-winning.jpg') }}" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="Frameworks"  sizes="(max-width: 3200px) 100vw, 3200px" /></div>
                                                        </figure>
                                                    </div>
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <ul>
                                                                <li><b>Communication within the team and with the client</b></li>
                                                            </ul>
                                                            <p class="p2">Slack is the primary communication tool within our organization. Every project gets its own private channel from the beginning, which is accessible to only team members.</p>
                                                            <p class="p2">The company uses Slack for all video calls, presentations, and daily syncs.</p>
                                                            <p class="p2">Google Hangout is usually our preferred video-conferencing tool. Google Drive is usually our preferred method of sharing documents and files.</p>
                                                            <p class="p2">Do not misunderstand, we are flexible as well. The client can decide to use any of these communication tools to communicate with us within the company regarding the project if, for whatever reason, it is not suitable for them.</p>
                                                            <p class="p4">We can also send out guest invites to join our Slack channel if a client does not have any tool that can be used to communicate with us.</p>
                                                            <p class="p4">We encourage our clients to check in with us frequently and keep us informed about the progress we are making.</p>
                                                            <p class="p2">In order to build trust with our clients, we openly communicate with them and are not afraid of discussing project issues. Open communication makes it easier for us to accept and provide feedback, and it aids us in improving our processes and processes.</p>
                                                            <ul>
                                                                <li class="p1"><b>Development methodology</b></li>
                                                            </ul>
                                                            <p class="p7">We have adopted SCRUM methodology for all our teams, and encourage our clients to do likewise.</p>
                                                            <p class="p1">As a result, we typically have 2 week-long sprints, which have proven to be the optimal period for us to deliver the most effective results, as well as providing flexibility for the project and its needs.</p>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_single_image wpb_content_element vc_align_left   fullimg">
                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="3200" height="1666" src="{{ asset('asset-3/uploads/2022/03/award-winning.jpg') }}" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="angi_method"  sizes="(max-width: 3200px) 100vw, 3200px" /></div>
                                                        </figure>
                                                    </div>
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p class="p1">The process begins with the planning of the next sprint before the current one ends. All features, user stories, feature requests, or bug reports are recorded in Jira, or any other tool a client prefers, like Microsoft Azure or Asana.</p>
                                                            <p class="p1">Once during the sprint, we hold an App Demo where the developer who worked on the new features presents what&#8217;s new in the application. As long as there is a way to track tasks, features, bugs, and also the time, we will be happy. If the client wants, we will also hold some events outside of the sprint.</p>
                                                            <p class="p1">We send the app to the client once each sprint has been completed (usually on the last day of the sprint) so that they can test it and view it for themselves.</p>
                                                            <p class="p1">In accordance with SCRUM methodology, we hold daily stand-up meetings where team members communicate with each other so that everyone knows where the project is at all times. Everything is openly discussed, including who is doing what, what has been completed, what should still be done, and what problems someone may be facing.</p>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_single_image wpb_content_element vc_align_left   fullimg">
                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1600" height="888" src="{{ asset('asset-3/uploads/2022/03/award-winning.jpg') }}" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="scrum-meetings"  sizes="(max-width: 1600px) 100vw, 1600px" /></div>
                                                        </figure>
                                                    </div>
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p class="p1">All parties involved with the project are invited to attend these meetings if they are interested. They are not limited to our team only.</p>
                                                            <p class="p1">It is our goal to keep our clients in constant communication with the team, and to involve them in the development process continuously. Consequently, we can quickly adjust the development process if necessary, while also anticipating and addressing any problems that may arise.</p>
                                                            <ul>
                                                                <li class="p2"><b>Code quality and the development process</b></li>
                                                            </ul>
                                                            <p class="p3">Whenever possible, we use CI/CD. Continuous integration lets us run unit tests on every pull request, along with static code analysis.</p>
                                                            <p class="p3">A pull request can be approved after all unit tests and static code analysis pass, and after another developer working on the same project reviews and approves the code, and the feature branch is merged into the develop branch.</p>
                                                            <p class="p3">In addition to maintaining code quality, pull requests are useful to other developers who haven&#8217;t worked on that specific feature. That way, they can be kept informed about changes in the code made by other developers in the same project.</p>
                                                            <p class="p3">It is important for every developer to participate in code review. Junior developers can learn from senior developers, and senior developers will get an overview of what has changed.</p>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_single_image wpb_content_element vc_align_left   fullimg">
                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1718" height="732" src="{{ asset('asset-3/uploads/2022/03/award-winning.jpg') }}" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="quality_assurance"  sizes="(max-width: 1718px) 100vw, 1718px" /></div>
                                                        </figure>
                                                    </div>
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p class="p1">When a feature is merged into the develop branch, the CI/CD pipeline can generate a new build that contains the new feature and make it available to QA engineers for testing. This is also a good time to generate code documentation.</p>
                                                            <p class="p1">We also have QA engineers that write automated UI tests that can run automatically every time a new feature is added, or once a week, for example. We can also integrate <a href="#">Aresync</a> for better bug reporting on all projects we work on.</p>
                                                            <p class="p1">Even though setting up the right CI/CD process and pipelines sometimes takes a while, it often pays off later in the development process, since most tasks are automated and don&#8217;t require the developers&#8217; full attention.</p>
                                                            <p class="p1">When a team member is added, it is also easier to maintain the same code style and code quality.</p>
                                                            <ul>
                                                                <li class="p1"><b>The code repository</b></li>
                                                            </ul>
                                                            <p class="p1">Clients have access to the code written by our team at all times. We usually use BitBucket as source control, but if that doesn&#8217;t suit their needs, we&#8217;re open to using another source control system like GitHub, GitLab, or Azure Git.</p>
                                                            <ul>
                                                                <li class="p1"><b>Analyses and reporting</b></li>
                                                            </ul>
                                                            <p class="p1">Aresync has been working on a custom bug reporting tool, the previously mentioned Shake.</p>
                                                            <p class="p1">In beta development, Shake is usually integrated into the application. If you encounter a problem while testing, you simply shake your phone and Shake is automatically triggered. With this application, one can take a screenshot of the current screen, and mark a problem with their finger.</p>
                                                            <p class="p1">In addition, you can add notes, repro steps, or any other information that might help our developers resolve the issue. All of this is translated into our task management tool so our developers can see it immediately.</p>
                                                            <p class="p1">The shake app can be integrated into any native Android or iOS application with just a few lines of code, as well as cross-platform applications written in React Native or Flutter.</p>
                                                            <p class="p1">We&#8217;re experienced with other analytic tools as well, like Google Analytics or Mixpanel. When you read our blog post about analytic tools, you&#8217;ll learn more.</p>
                                                            <ul>
                                                                <li class="p1"><b>An overview of our tools</b></li>
                                                            </ul>
                                                            <p class="p1">Integrated Development Environments</p>
                                                            <p class="p1">IDEs used are:</p>
                                                            <ul class="ul1">
                                                                <li class="li1">Android Studio</li>
                                                                <li class="li1">XCode (iOS)</li>
                                                                <li class="li1">Microsoft Visual Studio Code (React Native)</li>
                                                                <li class="li1">Eclipse</li>
                                                            </ul>
                                                            <p class="p1"><b>Collaboration and Productivity</b></p>
                                                            <p class="p1">aresync uses the following tools to track and collaborate on everyday work, both internally and with customers:</p>
                                                            <p class="p1">JIRA -Project documentation and all tasks are stored in JIRA, and the client has access to our JIRA project. Thus, the client is able to keep track of our progress at all times.</p>
                                                            <p class="p1"><span class="s2">Slack </span>-Slack is the application we use for all of our informal communication. It is simple and effective.</p>
                                                            <p class="p1"><span class="s2">Confluence </span>-It is our trusted companion to use Atlassian&#8217;s collaboration platform</p>
                                                            <p class="p1"><span class="s2">MS DevOps / Teams-</span> Microsoft&#8217;s collaboration platforms for development</p>
                                                            <p class="p1"><span class="s2">Trello </span>-Using it simplifies the task tracking process</p>
                                                            <p class="p1"><span class="s2">G-Suite </span>-It is a powerful platform that supports our documentation, e-mails, and much more</p>
                                                            <p class="p1"><span class="s2">Float </span>-Resource planning and project management</p>
                                                            <p class="p2"><b>Software Control (Software Configuration Management)</b></p>
                                                            <p class="p1"><span class="s2">Git </span>-From day one, we adopted git and have used it ever since</p>
                                                            <p class="p1">We use BitBucket primarily to host our git repositories. This is also shared with our clients so they can have real-time insights into our work GitHub is our secondary source code repository GitLab is our secondary source code repository</p>
                                                            <ul>
                                                                <li class="p3"><b>DevOps</b></li>
                                                            </ul>
                                                            <p class="p4"><span class="s3">Using </span>Jenkins<span class="s3">,</span> we <span class="s3">can</span> <span class="s3">accelerate</span> <span class="s3">the</span> <span class="s3">deployment</span> process (<span class="s3">by</span> delivering a new version of the application to the client and to the application store) BitBucket Pipeline <span class="s3">&#8211;</span> <span class="s3">we</span> <span class="s3">leverage</span> <span class="s3">BitBucket</span> <span class="s3">Pipeline</span> <span class="s3">to</span> <span class="s3">automate</span> <span class="s3">our </span>deployment <span class="s3">process.</span></p>
                                                            <p class="p1">The Fabric/Firebase enables us to share alpha/beta versions of the application with our clients. The MS AppCenter enables us to share our applications.</p>
                                                            <ul>
                                                                <li class="p3"><b>Documentation</b></li>
                                                            </ul>
                                                            <p class="p5"><span class="s3">Jazzy &#8211; A tool for in-code documentation </span>MkDocs <span class="s3">&#8211;</span> a framework for creating modern software documentation <span class="s3">JavaDocs</span> &#8211; <span class="s3">a</span> standard for documenting Java code</p>
                                                            <ul>
                                                                <li class="p6"><b>Testing</b></li>
                                                            </ul>
                                                            <p class="p1">Selenium/Appium &#8211; performs automated UI tests XCTest &#8211; performs unit, performance, and UI tests on iOS Espresso and Robotium &#8211; for instrumentation (UI) tests on Android Mockito, Hamcrest, Robolectric &#8211; for running unit tests on Android</p>
                                                            <p class="p1">Testing the robustness of Android&#8217;s UI with Android Monkey</p>
                                                            <ul>
                                                                <li class="p1"><b>Reporting and Analytics</b></li>
                                                            </ul>
                                                            <p class="p1">Each of these services tracks how users use the app, whether it&#8217;s Google, Mixpanel, Flurry, or Firebase.</p>
                                                            <p class="p8">They should be able to tell what parts of the process they visit more frequently, whether they get stuck at some point, and whether they have triggered some kind of event, such as calling for help, as well as when it occurred. Our service provides us with the information we need so that we can make the app even better with updates, and fix any potential UX problems that may arise once we have users using the app</p>
                                                            <p class="p8">Crashlytics: It is an analytics tool that finds any technical problems or crashes in the app within 3 weeks of launching it. Any problems it finds within 3 weeks will be repaired free of charge.</p>
                                                            <p class="p9">Crashlytics:</p>
                                                            <p class="p9">ShakeToReport: this is a custom tool that is integrated into the app during the beta period. You shake your phone when you run into a problem while testing the app.</p>
                                                            <p class="p9">Crashlytics:</p>
                                                            <p class="p9">ShakeToReport:</p>
                                                            <p class="p9">In the next step, the module takes a screenshot of the screen, and you can circle the problem, add comments, and then submit it. This information is then turned into a task in our task management tool, so out developers can fix it right away. All the problems you report this way also qualify for free bug fixes for three weeks</p>
                                                            <ul>
                                                                <li class="p8"><b>Design of User Interfaces / UX</b></li>
                                                            </ul>
                                                            <p class="p8">Zeplin – it&#8217;s impossible to get pixel-perfect UI resources without Zeplin Figma – a modern and easy-to-use design tool</p>
                                                            <blockquote>
                                                                <p class="p2"><b>Conclusion</b></p>
                                                            </blockquote>
                                                            <p class="p12">A developed mobile app for iOS or Android. But we are more than that. We are people who are passionate about technological advances, and who can solve sophisticated problems.</p>
                                                            <p class="p12">Using Scrum and Kanban methodologies, we use an agile development process.</p>
                                                            <p class="p12">As part of our QA processes, we conduct regular code reviews, participate in unit testing, and employ test-driven development. Our software has extensive documentation.</p>
                                                            <p class="p12">The importance of transparency is high on our list of priorities. And as we said, it goes both ways.</p>
                                                            <p class="p12">Please feel free to send us any questions you may have at info@aresync.com. I hope this guide helps you better understand how we work and set up our team and tools.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-footer">
                                    <div class="entry-footer-tags"></div>
                                </div>
                            </article>
                            <div class="widget widget_ohio_widget_about_author"><img src="{{ asset('asset-3/uploads/2022/04/aresync-small-logo.png') }}" class="author-avatar" alt="Author avatar" />
                                <div class="content">
                                    <div class="content-details">
                                        <h6>aresync</h6><span class="site">https://www.aresync.com</span>
                                    </div>
                                    <div class="socialbar outline small"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="post-share" data-ohio-content-scroll="#scroll-content">
            <div class="clb-share-bar" data-blog-share="true">
                <div class="socialbar small flat"> <a href="{{config('global-variables.FB.link')}}" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="{{config('global-variables.INSTAGRAM')}}" class="instagram"><i class="fab fa-instagram"></i></a><a href="{{config('global-variables.LINKEDIN.link')}}" class="linkedin"><i class="fab fa-linkedin"></i></a> </div>
            </div>
        </div>
    </div>
    <div class="sticky-nav">
        <div class="sticky-nav-image" style="background-image: url('../wp-content/uploads/2022/03/ionic_image-1-768x445.png');"> </div>
        <div class="sticky-nav-holder">
            <div class="sticky-nav_item">
                <h6 class="heading-sm"> Next Post </h6>
                <div class="nav-holder"> <a href="{{config('global-variables.EFFECTIVE_TIPS')}}" class="btn-round btn-round-small btn-round-light dark-mode-reset"> <i class="ion"><svg class="arrow-icon arrow-icon-back" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                            </svg></i> </a> <a href="{{config('global-variables.THINGS')}}" class="btn-round btn-round-small btn-round-light dark-mode-reset"> <i class="ion"><svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2" stroke-linejoin="round" />
                            </svg></i> </a> </div>
            </div> <a href="{{config('global-variables.THINGS')}}">
                <h5 class="sticky-nav_heading "> 4 THINGS TO CONSIDER BEFORE ADOPTING A DESIGN TREND  </h5>
            </a>
        </div>
    </div>
    <div class="related-posts">
        <div class="page-container">
            <div class="vc_row">
                <div class="vc_col-md-12">
                    <h4 class="heading-md related-post-heading"> Recent Posts </h4>
                </div>
                <div class=" vc_col-lg-4 vc_col-md-6 vc_col-xs-12 grid-item masonry-block">
                    <div class="blog-grid blog-grid-type-1 boxed metro-style hover-scale-img">
                        <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.IMPACT-MOBILE')}}">
                                <div class="blog-metro-image parallax" data-ohio-bg-image="{{ asset('asset-3/uploads/2022/03/mobile-application.svg') }}"></div>
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
                <div class=" vc_col-lg-4 vc_col-md-6 vc_col-xs-12 grid-item masonry-block">
                    <div class="blog-grid blog-grid-type-1 boxed metro-style hover-scale-img">
                        <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.TIPS')}}">
                                <div class="blog-metro-image parallax" data-ohio-bg-image="{{ asset('asset-3/uploads/2022/03/award-winning.jpg') }}"></div>
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
                <div class=" vc_col-lg-4 vc_col-md-6 vc_col-xs-12 grid-item masonry-block">
                    <div class="blog-grid blog-grid-type-1 boxed metro-style hover-scale-img">
                        <figure class="blog-grid-image"> <a data-cursor-class="cursor-link" class="" href="{{config('global-variables.EFFECTIVE_TIPS')}}">
                                <div class="blog-metro-image parallax" data-ohio-bg-image="{{ asset('asset-3/uploads/2022/03/award-winning.jpg') }}"></div>
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
        </div>
    </div>
    <div class="comments-container">
        <div class="page-container">
            <div class="vc_row">
                <div class="vc_col-lg-12">
                    <div id="comments" class="comments-area  no-comments">
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title"><span class="heading-md title text-left">Post a comment</span> <small><a rel="nofollow" id="cancel-comment-reply-link" href="how-we-set-up-our-team-and-tools-when-we-start-working-with-a-software-company.html#respond" style="display:none;">Click here to cancel reply</a></small></h3>
                            <form action="https://www.aresync.com/" method="post" id="commentform" class="comment-form" novalidate>
                                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> <span class="required-field-message" aria-hidden="true">Required fields are marked <span class="required" aria-hidden="true">*</span></span></p>
                                <div class="input-group">
                                    <div class="input-wrap">
                                        <div class="col-4 input-block"><label for="author" class="field-label">Your Name</label><input id="author" name="author" type="text" value="" aria-required='true' /></div>
                                        <div class="col-4 input-block"><label for="email" class="field-label">Your Email</label><input id="email" name="email" type="text" value="" aria-required='true' /></div>
                                        <div class="col-4 input-block"><label for="url" class="field-label">Your Website</label><input id="url" name="url" type="text" value="" /></div>
                                    </div>
                                </div>
                                <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p> <label for="comment" class="field-label">Leave a Reply</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                <p class="form-submit"><button name="submit" type="submit" id="submit" class="btn submit-comment btn-loading-disabled submit" value="Post Comment">Post Comment</button> <input type='hidden' name='comment_post_ID' value='31555' id='comment_post_ID' /> <input type='hidden' name='comment_parent' id='comment_parent' value='0' /> </p>
                            </form>
                        </div><!-- #respond -->
                    </div>
                </div>
            </div>
        </div>
    </div>
		<div class="vc_row-full-width vc_clearfix"></div>
        {{--Project-count--}}
        @include('components.project-count')
        {{--end--}}
</div> 
@endsection