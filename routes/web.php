<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Spatie\SlackAlerts\Facades\SlackAlert;
use App\Models\Contact;
use App\Http\Controllers\Controller;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    $data = array(
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('landing-page')->with('data', $data);;
});

Route::get('/careers', function () {
    $jobs = [
        "Sales Development" => ['title' => ['Sales Development Representative', 'Business Development Manager'], 'positions' => 2],        //        "Engineering" => ['title' => ['IOS Developer', 'React Native Developer', 'Node JS API Developer', 'PHP Laravel Developer'], 'positions' => 6],
    ];
    return view('careers', compact('jobs'));
});

Route::get('/how-its-works', function () {
    return view('how-its-works');
});

Route::get('/contact-us', function () {
    // SlackAlert::message("Testing Laravel Aresync!");
    return view('contact-us');
});

Route::post('/contact', ['as' => 'contact', function (Request $request) {

    // dd($request->all());

    if ($request->hasFile('SelectorDropyourfilehere')) {
        // dd('File Received Successfully');
        $image = $request->SelectorDropyourfilehere;
        $fileExt   = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $fileExt;
        // dd($imageName);
        // $request->image->move(public_path('images'), $imageName);
        $request->file('SelectorDropyourfilehere')->storeAs('public/docs', $imageName);

        $data['file'] = $imageName;
    }

    // dd($request->all());

    // $data = Validator::make($request->all(), [

    $data['Name'] = $request->Name;
    $data['Company'] = $request->Company;
    $data['Email'] = $request->Email;
    $data['Phone'] = $request->Phone;
    $data['Interestedservices'] = $request->Interestedservices;
    $data['InterestedQs'] = $request->InterestedQs;
    $data['ChooseaBudgetUSD'] = $request->ChooseaBudgetUSD;
    $data['ProjectDetail'] = $request->ProjectDetail;
    // $data['file'] = $request->SelectorDropyourfilehere;
    $data['checkbox'] = $request->checkbox;
    $data['needNDA'] = $request->needNDA;

    // $data = Validator::make(collect($data)->toArray(), [
    //     'Name' => 'required',
    //     'Company' => 'required',
    //     'Email' => 'required',
    //     'Phone' => 'required',
    //     'Interestedservices' => 'required',
    //     'InterestedQs' => 'required',
    //     'ChooseaBudgetUSD' => 'required',
    //     'ProjectDetail' => 'required',
    //     'file' => 'nullable',
    //     'checkbox'> 'nullable',
    //     'needNDA' => 'nullable',
    // ]);

    // $data = Validator::make($request->all(), [
    // 'Name' => 'required',
    // 'Company' => 'required',
    // 'Email' => 'required',
    // 'Phone' => 'required',
    // 'Interestedservices' => 'required',
    // 'InterestedQs' => 'required',
    // 'ChooseaBudgetUSD' => 'required',
    // 'ProjectDetail' => 'required',
    // ]);

    // $data = Validator::make($request->all(), [
    //     'Name' => 'required',
    //     'Company' => 'required',
    //     'Email' => 'required',
    //     'Phone' => 'required',
    //     'Interestedservices' => 'required',
    //     'InterestedQs' => 'required',
    //     'ChooseaBudgetUSD' => 'required',
    //     'ProjectDetail' => 'required',
    //     'SelectorDropyourfilehere' => 'nullable',
    //     'checkbox'> 'nullable',
    //     'needNDA' => 'nullable',
    // ]);
    // dd($data);
    // Contact::create($data);
    // return redirect()->back();
    if (!empty($data['Name']) && !empty($data['Company']) && !empty($data['Email']) && !empty($data['Phone']) && !empty($data['Interestedservices']) && !empty($data['InterestedQs']) && !empty($data['ChooseaBudgetUSD']) && !empty($data['ProjectDetail'])) {
        // dd($data);
        // var_dump($data);
        $sd = Contact::create($data);

        if (!empty($sd)) {
            // dd($sd->id);
            SlackAlert::message("Message Received in Contact US id: {$sd->id}");
            return redirect()->back()->with('success', 'MESSAGE IS SUCCESSFULLY SENT');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    } else {
        return redirect()->back()->with('error', 'Please fill the required fields');
    }
}]);

Route::post('/contact-test', ['as' => 'contact-test', function (Request $request) {
    // dd($request->all());
    if ($request->hasfile('SelectorDropyourfilehere')) {
        dd('File Received Successfully');
        $image = $request->hasfile('SelectorDropyourfilehere');
        $fileExt = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $fileExt;
        // $request->image->move(public_path('images'), $imageName);
        $request->file->storeAs('public/docs', $imageName);

        $data['docs'] = $imageName;
    }
    $data['name'] = $request->Name;

    dd($data);
}]);

Route::get('/test', function () {
    return view('test');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/our-culture', function () {
    return view('our-culture');
});

Route::get('/blog', function () {
    $posts = \App\Models\Post::where('web_id',1)->paginate(10);
    return view('blog',compact('posts'));
});

Route::get('/our-infrastructure', function () {
    return view('our-infrastructure');
});

Route::get('/web-application', function () {
    return view('web-application-development-company');
});

Route::get('/mobile-app', function () {
    return view('mobile-app-development-services');
});

Route::get('/back-end', function () {
    return view('back-end-development');
});

Route::get('/front-end', function () {
    return view('front-end-development-company');
});

Route::get('/ui-ux', function () {
    return view('ui-ux-design-company');
});

Route::get('/hire-mern', function () {
    return view('hire-mern-stack-developers-consultants');
});

Route::get('/hire-mean', function () {
    return view('hire-mean-stack-developers-consultants');
});


Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/wordpress', function () {
    return view('wordpress-development-company');
});

Route::get('/vue', function () {
    return view('vuejs-development-company-in-usa');
});

Route::get('/swift', function () {
    return view('swift-app-development-company');
});

Route::get('/shopify', function () {
    return view('shopify-development');
});

Route::get('/react-native', function () {
    return view('react-native-app-development-company');
});

Route::get('/react', function () {
    return view('react-js-development-company');
});

Route::get('/php', function () {
    return view('php-development-company-services');
});

Route::get('/magento', function () {
    return view('magento-development-company');
});

Route::get('/laravel', function () {
    return view('laravel-development-company');
});

Route::get('/ios', function () {
    return view('ios-app-development-company');
});

Route::get('/drupal', function () {
    return view('drupal');
});

Route::get('/digital-marketing', function () {
    return view('digital-marketing');
});

Route::get('/codeigniter', function () {
    return view('codeigniter-development-company');
});

Route::get('/android', function () {
    return view('android-app-development-services');
});

Route::get('/angular', function () {
    return view('angular-js-development-company');
});

Route::get('/kotlin', function () {
    return view('develop-android-apps-with-kotlin');
});

Route::get('/asp-net', function () {
    return view('top-asp-net-development-company');
});

Route::get('/svelte-js', function () {
    return view('svelte-js-development-company');
});

Route::get('/c-sharp', function () {
    return view('hire-c-sharp-developers');
});

Route::get('/cross-platform', function () {
    return view('cross-platform-app-development-company');
});
Route::get('/impact', function () {
    return view('impact-of-the-mobile-application-on-the-travel-and-tourism-industry');
});

Route::get('/tips', function () {
    return view('tips-for-building-e-commerce-websites-with-node-js');
});

Route::get('/effective-tips', function () {
    return view('effective-tips-for-an-on-demand-services-app-development');
});

Route::get('/set-up-team', function () {
    return view('how-we-set-up-our-team-and-tools-when-we-start-working-with-a-software-company');
});

Route::get('/things-to-consider', function () {
    return view('4-things-to-consider-before-adopting-a-design-trend');
});

Route::get('/what-a-cms', function () {
    return view('what-a-cms-can-do-to-your-online-business');
});

Route::get('/gain-the-competitive', function () {
    return view('gain-the-competitive-advantage-using-drupal-development-system');
});

Route::get('/what-is-the-best', function () {
    return view('what-is-the-best-trends-of-apple-smart-watch-in-modern-health-care');
});

Route::get('/how-to-make-money', function () {
    return view('how-to-make-money-online-right-now');
});

Route::get('/importance-of-mobile', function () {
    return view('the-importance-of-mobile-applications-in-everyday-lifecations-in-everyday-life');
});

Route::get('/digital', function () {
    return view('digital');
});

Route::get('/uncategorized', function () {
    return view('uncategorized');
});

Route::get('/on-demand', function () {
    return view('on-demand-services-app');
});

Route::post('/comments', function () {
    return view('comments');
});

Route::get('single/{id}', function ($id) {
    $posts = \App\Models\Post::where('id',$id)->with(['comments'=> function($q) {
        $q->where('status', '=', '1');
    }])->get()->toArray();
    $blogPost = ['blog'=>$posts[0],'comments'=>$posts[0]['comments'],'commentsCount'=>count($posts[0]['comments'])];
    return view('single',compact('blogPost'));
});

Route::post('store', [Controller::class, 'store']);

Route::get('show', [Controller::class, 'show']);




// Route::get('/marketing', function () {
//     return view('marketing');
// });



Route::get('/seo', function () {
    $data = array(
        'head' => "Search Engine Optimization",
        'title' => "global-variables.SEARCH_ENGINE_OPTIMIZATION",
        'id' => "read-more-img",
        'id1' => "read-more-img-style",
        'detail' => "SEO increases the visibility of your website by ranking it on the first page of search engines such as Google on specific keywords. As search engines change, it's necessary for modern businesses to take steps for better customer experience and more exposure online. High quality content with indexed keywords, backlinks and your website design matters to searching customers.  Aresync web development administrations and marketing communities coordinate to analyze and find opportunities. We plan and make strategies to achieve your marketing goals.  Aresync delivers 360 degree search engine optimization services to build brands online. In order to rank and build authority among your competitors, contact us for consultation and digital marketing services.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Marketing",
                'link' => "global-variables.SEM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Marketing",
                'link' => "global-variables.SMM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Optimization",
                'link' => "global-variables.SMO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Web Analysis",
                'link' => "global-variables.WA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "E-Commerce Marketing",
                'link' => "global-variables.E_COMMERCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Adsense & Blogging",
                'link' => "global-variables.AD_B",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Video Marketing",
                'link' => "global-variables.VM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Display Ads",
                'link' => "global-variables.DA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Email Marketing",
                'link' => "global-variables.EM",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});


Route::get('/sem', function () {
    $data = array(
        'head' => "Search Engine Marketing",
        'title' => "global-variables.SEARCH_ENGINE_MARKETING",
        'id' => "read-more-img-1",
        'id1' => "read-more-img-style-1",
        'detail' => "SEM is the best strategy for businesses that want to enhance their traffic quickly. PPC increases visibility and brand awareness. As it is paid advertising, it has a higher CTR and higher conversions, resulting in consistent sales. The top digital marketing specialists recommend using SEM to gather more customer and competitor data.
Aresync digital marketing team makes an audit after analyzing and building strategies to get amazing results. Aresync offers all kinds of advertising to make your business successful. To get faster ROI (return on investment),there is no better tool than SEM. Get in touch for free consultation and better strategies.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Optimization",
                'link' => "global-variables.SEO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Marketing",
                'link' => "global-variables.SMM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Optimization",
                'link' => "global-variables.SMO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Web Analysis",
                'link' => "global-variables.WA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "E-Commerce Marketing",
                'link' => "global-variables.E_COMMERCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Adsense & Blogging",
                'link' => "global-variables.AD_B",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Video Marketing",
                'link' => "global-variables.VM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Display Ads",
                'link' => "global-variables.DA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Email Marketing",
                'link' => "global-variables.EM",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/smm', function () {
    $data = array(
        'head' => "Social Media Marketing",
        'title' => "global-variables.SOCIAL_MEDIA_MARKETING",
        'id' => "read-more-img-2",
        'id1' => "read-more-img-style",
        'detail' => "More than half of the world's population interacts and communicates via social media sites, 
        and your customers are much the same. Through engagement and ads, digital networks drive traffic to websites and generate leads. 
        SMM is a powerful tool for increasing brand awareness and customer trust. SMM is useful when it has objectives and strategies to achieve. 
        The most important factor is great content in the right context. Aresync helps firms with the right strategies and meaningful results to 
        increase engagement and drive sales. Get in touch with the marketing team for a free consultation.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Optimization",
                'link' => "global-variables.SEO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Marketing",
                'link' => "global-variables.SEM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Optimization",
                'link' => "global-variables.SMO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Web Analysis",
                'link' => "global-variables.WA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "E-Commerce Marketing",
                'link' => "global-variables.E_COMMERCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Adsense & Blogging",
                'link' => "global-variables.AD_B",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Video Marketing",
                'link' => "global-variables.VM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Display Ads",
                'link' => "global-variables.DA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Email Marketing",
                'link' => "global-variables.EM",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/smo', function () {
    $data = array(
        'head' => "Social Media Optimization",
        'title' => "global-variables.SOCIAL_MEDIA_OPTIMIZATION",
        'id' => "read-more-img-3",
        'id1' => "read-more-img-style-2",
        'detail' => "Social media optimization is a direct approach to improving your social media marketing strategy.
         For more accessibility, traffic, and brand awareness, every business needs to develop strategies according to 
         social users' behaviors, competitor research, and performance analysis. 74% of social media users make buying 
         decisions using social platforms. Aresync's digital marketing team is passionate about bringing more engagement, 
         followers, leads, and improving overall performance through optimizing your social media pages. Get in touch for 
         more information and a free consultation for better marketing results.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Optimization",
                'link' => "global-variables.SEO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Marketing",
                'link' => "global-variables.SEM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Marketing",
                'link' => "global-variables.SMM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Web Analysis",
                'link' => "global-variables.WA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "E-Commerce Marketing",
                'link' => "global-variables.E_COMMERCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Adsense & Blogging",
                'link' => "global-variables.AD_B",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Video Marketing",
                'link' => "global-variables.VM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Display Ads",
                'link' => "global-variables.DA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Email Marketing",
                'link' => "global-variables.EM",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/web-analysis', function () {
    $data = array(
        'head' => "Web Analysis",
        'title' => "global-variables.WEB_ANALYSIS",
        'id' => "read-more-img-4",
        'id1' => "read-more-img-style-2",
        'detail' => "The investigation of all metrics and foundations of online business is known as web analysis. 
        Web analysts collect and report on website data in order to set goals and identify key performance indicators in 
        order to improve strategy. For effective performance, they analyze, track, and review visitor behavior and web 
        activity. Aresync assists entrepreneurs in growing their businesses through web analysis. Aresync uses website 
        insights to drive company and user goals to improve user experience through advanced and development strategy. 
        Get in touch with the marketing team for all website solutions.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Optimization",
                'link' => "global-variables.SEO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Marketing",
                'link' => "global-variables.SEM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Marketing",
                'link' => "global-variables.SMM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Optimization",
                'link' => "global-variables.SMO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "E-Commerce Marketing",
                'link' => "global-variables.E_COMMERCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Adsense & Blogging",
                'link' => "global-variables.AD_B",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Video Marketing",
                'link' => "global-variables.VM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Display Ads",
                'link' => "global-variables.DA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Email Marketing",
                'link' => "global-variables.EM",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/e-commerce', function () {
    $data = array(
        'head' => "E-Commerce Marketing",
        'title' => "global-variables.E_COMMERCE_MARKETING",
        'id' => "read-more-img-5",
        'id1' => "read-more-img-style",
        'detail' => "Today online purchasing is preferred by customers, while customers are focusing on easiness to get their essentials. Ecommerce marketing is used to drive traffic to your online store through promotional tools and channels. It offers companies assistance in lead generation to brand awareness, customer loyalty and growth in business. Your site needs to be an easily accessible, user oriented and reliable. A well-developed site with marketing goals helps companies to boost growth and revenue.

Aresync helps online businesses to gain brand awareness, more traffic and establish customer loyalty. With proven strategies and most effective promotional plan Aresync help you to find customers online and convert them into buying clients.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Optimization",
                'link' => "global-variables.SEO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Marketing",
                'link' => "global-variables.SEM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Marketing",
                'link' => "global-variables.SMM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Optimization",
                'link' => "global-variables.SMO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Web Analysis",
                'link' => "global-variables.WA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Adsense & Blogging",
                'link' => "global-variables.AD_B",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Video Marketing",
                'link' => "global-variables.VM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Display Ads",
                'link' => "global-variables.DA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Email Marketing",
                'link' => "global-variables.EM",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});
Route::get('/blogging', function () {
    $data = array(
        'head' => "Adsense & Blogging",
        'title' => "global-variables.ADSENSE_BLOGGING",
        'id' => "read-more-img-6",
        'id1' => "read-more-img-style",
        'detail' => "AdSense is a Google program that pays you for showing ads next to your online content. AdSense provides automatic ads and you can choose relevant and engaging ads, for which you can get money by impression rate and clicks on ads. Creating engaging content and publishing on your sites takes a lot of effort to reach the level you get paid. Aresync has developed a community to help you earn through blogging as we write and publish your content. Take analytics and SEO tactics to make it recognized and engaged by the audience. No matter which niche you want to write and when you want to advertise Aresync is here for your message. Get in touch to avail services and expertise of experienced team.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Optimization",
                'link' => "global-variables.SEO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Marketing",
                'link' => "global-variables.SEM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Marketing",
                'link' => "global-variables.SMM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Optimization",
                'link' => "global-variables.SMO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Web Analysis",
                'link' => "global-variables.WA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "E-Commerce Marketing",
                'link' => "global-variables.E_COMMERCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Video Marketing",
                'link' => "global-variables.VM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Display Ads",
                'link' => "global-variables.DA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Email Marketing",
                'link' => "global-variables.EM",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/video-marketing', function () {
    $data = array(
        'head' => "Video Marketing",
        'title' => "global-variables.VIDEO_MARKETING",
        'id' => "read-more-img-7",
        'id1' => "read-more-img-style",
        'detail' => "Video is going to be the future of showcasing any product or service. Content strategists prefer video marketing to effectively deliver their brand message, guide and convey to the customers. As it’s one of most demanding content form by all social platforms, video marketing is helping the companies to reach their potential customer, to educate them and lead to more sales. It can explain even complex messages into simple and compelling video.
Aresync helps businesses to convey their note through video marketing. We plan and execute a strategic approach to video marketing for ads, social platforms, and blog embedded video or for any other marketing tactics. Ensuring quality and mean Aresync also assists in SEO, more traffic , generate leads and grow ROI through video.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Optimization",
                'link' => "global-variables.SEO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Marketing",
                'link' => "global-variables.SEM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Marketing",
                'link' => "global-variables.SMM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Optimization",
                'link' => "global-variables.SMO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Web Analysis",
                'link' => "global-variables.WA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "E-Commerce Marketing",
                'link' => "global-variables.E_COMMERCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Adsense & Blogging",
                'link' => "global-variables.AD_B",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Display Ads",
                'link' => "global-variables.DA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Email Marketing",
                'link' => "global-variables.EM",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/display-ads', function () {
    $data = array(
        'head' => "Display Ads",
        'title' => "global-variables.DISPLAY_ADS",
        'id' => "read-more-img-8",
        'id1' => "read-more-img-style",
        'detail' => "Capturing attention with banners and ads is far more different and useful than displaying in newspapers and magazines. Your customers are browsing on the internet in mails, apps, websites and social platforms. Showcasing your product to them through display ads can help you to reach the right people at the right time that leads to generate more sales, brand awareness, leads generation and product promotion. Taking insights into customer’s interest and your stability for the future, Aresync will run Display ads for your business. We help organizations and visions to be built and get realized through ads. Aresync has an expert experienced team collaborating and creating leading ads for major brands. For more insights and problem solving services, get in touch with Aresync.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Optimization",
                'link' => "global-variables.SEO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Marketing",
                'link' => "global-variables.SEM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Marketing",
                'link' => "global-variables.SMM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Optimization",
                'link' => "global-variables.SMO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Web Analysis",
                'link' => "global-variables.WA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "E-Commerce Marketing",
                'link' => "global-variables.E_COMMERCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Adsense & Blogging",
                'link' => "global-variables.AD_B",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Video Marketing",
                'link' => "global-variables.VM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Email Marketing",
                'link' => "global-variables.EM",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/email-marketing', function () {
    $data = array(
        'head' => "Email Marketing",
        'title' => "global-variables.EMAIL_MARKETING",
        'id' => "read-more-img-9",
        'id1' => "read-more-img-style",
        'detail' => "As online marketing has demand all over the world, email marketing is the most reliable and accessible way to reach your target audience. Getting on to one email to every customer and tired off spam emails, Email promotion is an ahead step then stressing down. It can give you the results and value as you have purpose. Email marketing can give access to share every new product and discounts offers with your customers. For this you need expertise to work and get you desired customers. Aresync has that mastery. Our team ensures you to bring maximum ROI by designing, building and optimizing your email marketing. Get in touch to avail our services and build your business.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Optimization",
                'link' => "global-variables.SEO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Search Engine Marketing",
                'link' => "global-variables.SEM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Marketing",
                'link' => "global-variables.SMM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Social Media Optimization",
                'link' => "global-variables.SMO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Web Analysis",
                'link' => "global-variables.WA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "E-Commerce Marketing",
                'link' => "global-variables.E_COMMERCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Adsense & Blogging",
                'link' => "global-variables.AD_B",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Video Marketing",
                'link' => "global-variables.VM",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Display Ads",
                'link' => "global-variables.DA",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/ui-ux-1', function () {
    $data = array(
        'head' => "UI/UX Design",
        'title' => "global-variables.UI_UX_DESIGN_TITLE",
        'id' => "read-more-img-10",
        'id1' => "read-more-img-style",
        'detail' => "In today’s digital age, improving consumers' experience, impression and engagement using UI/UX design is pretty easy. UX design focused on achieving business goals, user acquisition, user activation and retention. UI design includes visual elements and typography which build brands, enhance trust and lead sales. 
Aresync ensures better user experience along with building brand and meaningful user interface with expertise of our engineers and developers. We develop websites for each platform and browsers. We review your requirements and provide better web solutions for your business. Hire a skillful experienced team for the growth of your business.
",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/web-dev', function () {
    $data = array(
        'head' => "Custom Web Apps Development",
        'title' => "global-variables.CUSTOM_WEB_APPS_DEVELOPMENT",
        'id' => "read-more-img-11",
        'id1' => "read-more-img-style",
        'detail' => "Custom web development is constructing a flexible performing website using programming code. While using template sites hinder the growth of your online business. Aresync puts your specification and business requirements in developing a website that can leverage and add values with time. We build unique featured sites with ideal loading time and improved website security. Aresync engineers design for better scalability and improved business automated features. Work with an expert and collaborative team to take your business to the next level. Message for free consultation.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/api-dev', function () {
    $data = array(
        'head' => "REST API Development",
        'title' => "global-variables.REST_API_DEVELOPMENT",
        'id' => "read-more-img-12",
        'id1' => "read-more-img-style",
        'detail' => "Rest API developments define how devices are connected to each other for the purpose of communicating...",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/opensource-expert', function () {
    $data = array(
        'head' => "Opensource Framework Experts",
        'title' => "global-variables.OPENSOURCE_FRAMEWORK_EXPERTS",
        'id' => "read-more-img-13",
        'id1' => "read-more-img-style",
        'detail' => "
Modify your existing website within data security using open source framework for website. It allows developing a website that can be upgraded in future and with more accessibility.
Aresync helps businesses in development of websites with open source frameworks to have more accountability and better software quality. We build stability in operations and modifications. For building cost effective and sustainable online business, get in touch for free consultation...",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/web-expert', function () {
    $data = array(
        'head' => "Hire Web Experts",
        'title' => "global-variables.HIRE_WEB_EXPERTS",
        'id' => "read-more-img-14",
        'id1' => "read-more-img-style-4",
        'detail' => "Aresync is determined in helping online businesses for stabling growth and better ROI. Transforming local businesses into digital for more potential customers move you ahead of competitors. Convert your ideas into digital business with our experts. We design and build websites as per customer requirements. Provide free consultation and make appealing sites with cut to edge technology so that you can scale in future. Hire professionals for creating all types of software and better user experience.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/progressive-app', function () {
    $data = array(
        'head' => "Progressive Web Apps",
        'title' => "global-variables.PROGRESSIVE_WEB_APPS",
        'id' => "read-more-img-15",
        'id1' => "read-more-img-style",
        'detail' => "A progressive web app works both as a web and an app. It is capable and developed using modern technologies gives better user experience containing features of apps but no need to visit play store. Your customer can push notifications, install and subscribe to the newsletter. Aresync expert developers making businesses to deliver better web experience to your customers. We create impactful, efficient and user-oriented web apps through latest architectures. Aresync is a company you can trust for timely projects, quality, support and maintenance for your business growth. Get in touch for your next project.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/graphic-designing', function () {
    $data = array(
        'head' => "Graphic Designing Services",
        'title' => "global-variables.GRAPHIC_DESIGNING_SERVICES",
        'id' => "read-more-img-16",
        'id1' => "read-more-img-style-3",
        'detail' => "Aresync has a strong command on providing successful App Store Optimization (ASO) services. We provide the best ASO to optimize application for Google Play Store, iOS, and other application stores. ASO is a modern profession in the world of digital marketing to rank applications because it is an effective marketing tactic to improve the ranking of your application in app store. The organic or essential social media marketing (SMM) promotions are included in App Store Optimization Services. Remember, App optimization gives your band a face by combining an engaging icon with other design elements that is strengthened with a catchy text and keywords that are related to the application. An App optimized with an engaging description and title will increase its sales with assistance of the App store optimization. ARESYNC utilize these digital marketing tactics to rank your application and improve the visibility of the business, increase your installation numbers and make sure to take your business to new heights. Let our expert handles your app and boosts your app rankings. Feel free to contact us anytime to discuss how we can help your App get to the top of all App stores. We offer ASO Services to our clients across the globe.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/customize-e-commerece', function () {
    $data = array(
        'head' => "Customized E-Commerce Solution",
        'title' => "global-variables.CUSTOMIZED_E_COMMERCE_SOLUTION",
        'id' => "read-more-img-17",
        'id1' => "read-more-img-style",
        'detail' => "Unlike regular websites which help to promote products and build brand awareness, Ecommerce sites offer a further step of buying products and business transactions. Just throwing online store is not enough, its maintenance, optimization and better user experience is vital. Custom ecommerce solutions help to add these important tools and business specifications to your sites. 
Aresync offers solutions for ecommerce stores according to your requirements and business goals. We lead expert custom developers and security professionals to grow your digital brand. Get in touch for free consultation. ",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/responsive-design', function () {
    $data = array(
        'head' => "Responsive Designs",
        'title' => "global-variables.RESPONSIVE_DESIGNS",
        'id' => "read-more-img-18",
        'id1' => "read-more-img-style",
        'detail' => "A responsive design ensures dynamic changes on the site which allows adjustments according to user screen, orientation and platform. Access to content or products is more user readable and user friendly. Aresync provides good responsive web design developments for better user experience. For building a websites that can drives conversion, increase traffic through each platform and help your business in growth, get in touch for free consultation.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/landing-sales', function () {
    $data = array(
        'head' => "Landing & Sales Page Design",
        'title' => "global-variables.LANDING_SALES_PAGE_DESIGN",
        'id' => "read-more-img-19",
        'id1' => "read-more-img-style",
        'detail' => "Landing pages help to capture information of customers while sales pages draw conversions. According to your business requirements Aresync design landing and sales pages for audience retention and transformation into loyal customers.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});


Route::get('/retina-design', function () {
    $data = array(
        'head' => "HTML5, CSS3 and Retina Ready Designs",
        'title' => "global-variables.HTML5_CSS3_RETINA_READY_DESIGNS",
        'id' => "read-more-img-20",
        'id1' => "read-more-img-style",
        'detail' => "While adding interactive elements to your sites, Retina ready design works effectively. Eye catching designs with quality for your websites are built at Aresync that are ahead of your competitors. Aresync prioritizes your company demand and customer desire. Get in touch for free consultation.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/customize-wordpress', function () {
    $data = array(
        'head' => "Custom WordPress / Magento /Joomla theme",
        'title' => "global-variables.CUSTOM_WORDPRESS_MAGENTO_JOOMLA_THEME",
        'id' => "read-more-img-21",
        'id1' => "read-more-img-style",
        'detail' => "Aresync takes premium custom themes which are ready for use. All our templates are customized to your needs, great quality and easy to use.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/clean-modern', function () {
    $data = array(
        'head' => "Clean Modern Minimalistic Design",
        'title' => "global-variables.CLEAN_MODERN_MINIMALISTIC_DESIGN",
        'id' => "read-more-img-22",
        'id1' => "read-more-img-style-4",
        'detail' => "Aresync has clean and modern designs that have a remarkable feature set, functionality and structure. Every design is meaningful that is built with a purpose. All designs are handy, engaging and easy to build a new website.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/codefor-next-gen', function () {
    $data = array(
        'head' => "Code for Next Generation Development",
        'title' => "global-variables.CODE_NEXT_GENERATION_DEVELOPMENT",
        'id' => "read-more-img-23",
        'id1' => "read-more-img-style-4",
        'detail' => "Aresync developers ensure the quality and website of your desire. We take measures in defining functionalities and technique implementations.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Content Management System",
                'link' => "global-variables.CONTENT_MANAGEMENT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/content-management', function () {
    $data = array(
        'head' => "Content Management System",
        'title' => "global-variables.CONTENT_MANAGEMENT_SYSTEM",
        'id' => "read-more-img-24",
        'id1' => "read-more-img-style-4",
        'detail' => "Aresync provides a content management system within the website and a panel where users can easily do a task. It helps you to take control of your content. You can add several content managers to your site without any security issue.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Web Apps Development",
                'link' => "global-variables.WEB_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "REST API Development",
                'link' => "global-variables.API_DEV",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Opensource Framework Experts",
                'link' => "global-variables.OPENSOURCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Graphic Designing Services",
                'link' => "global-variables.GRAPHIC_DESIGNING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Customized E-Commerce Solution",
                'link' => "global-variables.CUSTOMIZE_E_COMMERECE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Designs",
                'link' => "global-variables.RESPONSIVE_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Landing & Sales Page Design",
                'link' => "global-variables.LANIDING_SALES",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5, CSS3 and Retina Ready Designs",
                'link' => "global-variables.RETIAN_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress / Magento /Joomla theme",
                'link' => "global-variables.CUSTOMIZE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Clean Modern Minimalistic Design",
                'link' => "global-variables.CLEAN_MODERN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Code for Next Generation Development",
                'link' => "global-variables.CODE_NEXTGEN",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/front-end-1', function () {
    $data = array(
        'head' => "FRONT END ARCHITECTURE AND DESIGN",
        'title' => "global-variables.FRONT_ARCHITECTURE_DESIGN",
        'id' => "read-more-img-39",
        'id1' => "read-more-img-style-4",
        'detail' => "Front-end architecture is aimed to create a navigational 
            experience for users and sustainable workflow improving the quality of code. 
            It implies the use of better tools and practices to upgrade productivity and scalability.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "SPA APPLICATION AND DEVELOPMENT",
                'link' => "global-variables.SPA_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX APPLICATION",
                'link' => "global-variables.UI_UX_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "PROGRESSIVE APPLICATION",
                'link' => "global-variables.PROGRESSIVE_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "RE-ENGINEERING AND MAINTENANCE",
                'link' => "global-variables.RE_ENGEENRING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5/CSS Development",
                'link' => "global-variables.HTML_5",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/spa-application', function () {
    $data = array(
        'head' => "SPA APPLICATION AND DEVELOPMENT",
        'title' => "global-variables.SPA_APPLICATION_DEVELOPMENT",
        'id' => "read-more-img-39",
        'id1' => "read-more-img-style-4",
        'detail' => "Single page applications development services with the powerful front end, JavaScript-based frameworks for quick scalability.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "FRONT END ARCHITECTURE AND DESIGN",
                'link' => "global-variables.FRONT_END_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX APPLICATION",
                'link' => "global-variables.UI_UX_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "PROGRESSIVE APPLICATION",
                'link' => "global-variables.PROGRESSIVE_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "RE-ENGINEERING AND MAINTENANCE",
                'link' => "global-variables.RE_ENGEENRING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5/CSS Development",
                'link' => "global-variables.HTML_5",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/ui-ux-application', function () {
    $data = array(
        'head' => "UI/UX APPLICATION",
        'title' => "global-variables.UI_UX_APPLICATION_TITLE",
        'id' => "read-more-img-39",
        'id1' => "read-more-img-style-4",
        'detail' => "Developing aesthetic user interfaces with modern tech stacks for better visual design and engagement. Improving advanced technical implementation to better user experience.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "FRONT END ARCHITECTURE AND DESIGN",
                'link' => "global-variables.FRONT_END_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "SPA APPLICATION AND DEVELOPMENT",
                'link' => "global-variables.SPA_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "PROGRESSIVE APPLICATION",
                'link' => "global-variables.PROGRESSIVE_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "RE-ENGINEERING AND MAINTENANCE",
                'link' => "global-variables.RE_ENGEENRING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5/CSS Development",
                'link' => "global-variables.HTML_5",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/progressive-application', function () {
    $data = array(
        'head' => "PROGRESSIVE APPLICATION",
        'title' => "global-variables.PROGRESSIVE_APPLICATION_TITLE",
        'id' => "read-more-img-33",
        'id1' => "read-more-img-style-4",
        'detail' => "Progressive web application development provides the vibes of both an app and a website. 
        It's installable, more responsive, linkable, and secure. Aresync helps businesses in engaging and give better 
        value to their customers.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "FRONT END ARCHITECTURE AND DESIGN",
                'link' => "global-variables.FRONT_END_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "SPA APPLICATION AND DEVELOPMENT",
                'link' => "global-variables.SPA_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX APPLICATION",
                'link' => "global-variables.UI_UX_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "RE-ENGINEERING AND MAINTENANCE",
                'link' => "global-variables.RE_ENGEENRING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5/CSS Development",
                'link' => "global-variables.HTML_5",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/re-engineering', function () {
    $data = array(
        'head' => "RE-ENGINEERING AND MAINTENANCE",
        'title' => "global-variables.RE_ENGINEERING_MAINTENANCE",
        'id' => "read-more-img-34",
        'id1' => "read-more-img-style-4",
        'detail' => "Aresync benefits companies in remodeling their front-end development and enhancing your apps or site's versatility.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "FRONT END ARCHITECTURE AND DESIGN",
                'link' => "global-variables.FRONT_END_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "SPA APPLICATION AND DEVELOPMENT",
                'link' => "global-variables.SPA_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX APPLICATION",
                'link' => "global-variables.UI_UX_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "PROGRESSIVE APPLICATION",
                'link' => "global-variables.PROGRESSIVE_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "HTML5/CSS Development",
                'link' => "global-variables.HTML_5",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/html5', function () {
    $data = array(
        'head' => "HTML5/CSS Development",
        'title' => "global-variables.HTML5_CSS_Development",
        'id' => "read-more-img-39",
        'id1' => "read-more-img-style-4",
        'detail' => "Aresync designs and codes websites for your business both for startups and growing ones. We provide support and maintenance expanding to the next level.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "FRONT END ARCHITECTURE AND DESIGN",
                'link' => "global-variables.FRONT_END_DESIGN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "SPA APPLICATION AND DEVELOPMENT",
                'link' => "global-variables.SPA_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX APPLICATION",
                'link' => "global-variables.UI_UX_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "PROGRESSIVE APPLICATION",
                'link' => "global-variables.PROGRESSIVE_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "RE-ENGINEERING AND MAINTENANCE",
                'link' => "global-variables.RE_ENGEENRING",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/custom-wordpress', function () {
    $data = array(
        'head' => "Custom Wordpress Development",
        'title' => "global-variables.CUSTOM_WORDPRESS_DEVELOPMENT",
        'id' => "read-more-img-35",
        'id1' => "read-more-img-style-4",
        'detail' => "Best WordPress development solutions to build business websites, blogs, E-Commerce sites,forums, and enterprise portals.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Wordpress Technology Consulting",
                'link' => "global-variables.WORDPRESS_TECHNOLOGY",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Wordpress API Integration",
                'link' => "global-variables.WORDPRESS_API",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Plugin Development",
                'link' => "global-variables.WORDPRESS_PLUGIN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Wordpress Website Design",
                'link' => "global-variables.RESPONSIVE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Wordpress Support and maintenance",
                'link' => "global-variables.WORDPRESS_SUPPORT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/wordpress-technology', function () {
    $data = array(
        'head' => "Wordpress Technology Consulting",
        'title' => "global-variables.WORDPRESS_TECHNOLOGY_CONSULTING",
        'id' => "read-more-img-35",
        'id1' => "read-more-img-style-4",
        'detail' => "Our expert WordPress programmers help with architecture, development workflow, best practices, and security.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Development",
                'link' => "global-variables.CUSTOM_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Wordpress API Integration",
                'link' => "global-variables.WORDPRESS_API",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Plugin Development",
                'link' => "global-variables.WORDPRESS_PLUGIN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Wordpress Website Design",
                'link' => "global-variables.RESPONSIVE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Wordpress Support and maintenance",
                'link' => "global-variables.WORDPRESS_SUPPORT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/wordpress-api', function () {
    $data = array(
        'head' => "WordPress API Integration",
        'title' => "global-variables.WORDPRESS_API_INTEGRATION",
        'id' => "read-more-img-35",
        'id1' => "read-more-img-style-4",
        'detail' => "Seamless WordPress API integration with Google, Salesforce, MailChimp, and more to streamline workflow for the company.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Development",
                'link' => "global-variables.CUSTOM_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Wordpress Technology Consulting",
                'link' => "global-variables.WORDPRESS_TECHNOLOGY",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Plugin Development",
                'link' => "global-variables.WORDPRESS_PLUGIN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Wordpress Website Design",
                'link' => "global-variables.RESPONSIVE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Wordpress Support and maintenance",
                'link' => "global-variables.WORDPRESS_SUPPORT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/wordpress-plugin', function () {
    $data = array(
        'head' => "Custom WordPress Plugin Development",
        'title' => "global-variables.CUSTOM_WORDPRESS_PLUGIN_DEVELOPMENT",
        'id' => "read-more-img-35",
        'id1' => "read-more-img-style-4",
        'detail' => "We provide WordPress plugin development services to solve business problems that add real value to your business.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Development",
                'link' => "global-variables.CUSTOM_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Wordpress Technology Consulting",
                'link' => "global-variables.WORDPRESS_TECHNOLOGY",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "WordPress API Integration",
                'link' => "global-variables.WORDPRESS_API",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Wordpress Website Design",
                'link' => "global-variables.RESPONSIVE_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Wordpress Support and maintenance",
                'link' => "global-variables.WORDPRESS_SUPPORT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/responsive-wordpress', function () {
    $data = array(
        'head' => "Responsive WordPress Website Design",
        'title' => "global-variables.RESPONSIVE_WORDPRESS_WEBSITE_DESIGN",
        'id' => "read-more-img-35",
        'id1' => "read-more-img-style-4",
        'detail' => "Combine the beautiful design with WordPress CMS to provide the best WordPress development solutions, including responsive design.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Development",
                'link' => "global-variables.CUSTOM_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Wordpress Technology Consulting",
                'link' => "global-variables.WORDPRESS_TECHNOLOGY",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "WordPress API Integration",
                'link' => "global-variables.WORDPRESS_API",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress Plugin Development",
                'link' => "global-variables.WORDPRESS_PLUGIN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Wordpress Support and maintenance",
                'link' => "global-variables.WORDPRESS_SUPPORT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/wordpress-support', function () {
    $data = array(
        'head' => "WordPress Support Maintenance",
        'title' => "global-variables.WORDPRESS_SUPPORT_MAINTENANCE",
        'id' => "read-more-img-35",
        'id1' => "read-more-img-style-4",
        'detail' => "We provide all services for support and maintenance of a WordPress website including
                 hosting, installation, and moving your existing sites or incorporating modules.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Development",
                'link' => "global-variables.CUSTOM_WORDPRESS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Wordpress Technology Consulting",
                'link' => "global-variables.WORDPRESS_TECHNOLOGY",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "WordPress API Integration",
                'link' => "global-variables.WORDPRESS_API",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom WordPress Plugin Development",
                'link' => "global-variables.WORDPRESS_PLUGIN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive WordPress Website Design",
                'link' => "global-variables.RESPONSIVE_WORDPRESS",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/magento-consulting', function () {
    $data = array(
        'head' => "Magento Consulting",
        'title' => "global-variables.MAGENTO_CONSULTING_TITLE",
        'id' => "read-more-img-36",
        'id1' => "read-more-img-style-4",
        'detail' => "Our Magento consulting services aim to identify your problems and provide advanced
                eCommerce solutions to minimize the risk.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Consulting Services",
                'link' => "global-variables.CONSULTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Magento Development",
                'link' => "global-variables.CUSTOM_MAGENTO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Third Party Integration",
                'link' => "global-variables.THIRD_PARTY_INTEGRATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Support & Maintenance",
                'link' => "global-variables.MAGENTO_SUPPORT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Themes",
                'link' => "global-variables.RE_ENGEENRING",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/consulting', function () {
    $data = array(
        'head' => "Consulting Services",
        'title' => "global-variables.CONSULTING_SERVICES",
        'id' => "read-more-img-36",
        'id1' => "read-more-img-style-4",
        'detail' => "Our team offers upgrade services to ensure compliance with the latest versions functions of Magento.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Consulting",
                'link' => "global-variables.MAGENTO_CONSULTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Magento Development",
                'link' => "global-variables.CUSTOM_MAGENTO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Third Party Integration",
                'link' => "global-variables.THIRD_PARTY_INTEGRATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Support & Maintenance",
                'link' => "global-variables.MAGENTO_SUPPORT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Themes",
                'link' => "global-variables.RE_ENGEENRING",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/custom-magento', function () {
    $data = array(
        'head' => "Custom Magento Development",
        'title' => "global-variables.CUSTOM_MAGENTO_DEVELOPMENT",
        'id' => "read-more-img-36",
        'id1' => "read-more-img-style-4",
        'detail' => "Custom Magento eCommerce development services with features and extensions, integrations,implementations, and migration based on
               business requirements.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Consulting",
                'link' => "global-variables.MAGENTO_CONSULTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Consulting Services",
                'link' => "global-variables.CONSULTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Third Party Integration",
                'link' => "global-variables.THIRD_PARTY_INTEGRATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Support & Maintenance",
                'link' => "global-variables.MAGENTO_SUPPORT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Themes",
                'link' => "global-variables.RE_ENGEENRING",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/third-party', function () {
    $data = array(
        'head' => "Third Party Integration",
        'title' => "global-variables.THIRD_PARTY_INTEGRATION_TITLE",
        'id' => "read-more-img-36",
        'id1' => "read-more-img-style-4",
        'detail' => "Custom and third-party integration with systems and APIs to continually improve customer experience and engagement levels.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Consulting",
                'link' => "global-variables.MAGENTO_CONSULTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Consulting Services",
                'link' => "global-variables.CONSULTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Magento Development",
                'link' => "global-variables.CUSTOM_MAGENTO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Support & Maintenance",
                'link' => "global-variables.MAGENTO_SUPPORT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Themes",
                'link' => "global-variables.RE_ENGEENRING",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/magento-support', function () {
    $data = array(
        'head' => "Magento Support & Maintenance",
        'title' => "global-variables.Magento_Support_Maintenance",
        'id' => "read-more-img-36",
        'id1' => "read-more-img-style-4",
        'detail' => "Our team can conduct site audits, performance optimization and post-development installations, configurations and more",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Consulting",
                'link' => "global-variables.MAGENTO_CONSULTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Consulting Services",
                'link' => "global-variables.CONSULTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Magento Development",
                'link' => "global-variables.CUSTOM_MAGENTO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Third Party Integration",
                'link' => "global-variables.THIRD_PARTY_INTEGRATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Themes",
                'link' => "global-variables.RE_ENGEENRING",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/magento-themes', function () {
    $data = array(
        'head' => "Magento Themes",
        'title' => "global-variables.MAGENTO_THEMES_TITLE",
        'id' => "read-more-img-36",
        'id1' => "read-more-img-style-4",
        'detail' => "Our UI/UX design team strives to create themes to customize the appearance of your Magento store with a theme and template
                 design.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Consulting",
                'link' => "global-variables.MAGENTO_CONSULTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Consulting Services",
                'link' => "global-variables.CONSULTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Magento Development",
                'link' => "global-variables.CUSTOM_MAGENTO",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Third Party Integration",
                'link' => "global-variables.THIRD_PARTY_INTEGRATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Magento Support & Maintenance",
                'link' => "global-variables.MAGENTO_SUPPORT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/native-android', function () {
    $data = array(
        'head' => "Native Android App Development",
        'title' => "global-variables.NATIVE_ANDROID_APP_DEVELOPMENT",
        'id' => "read-more-img-37",
        'id1' => "read-more-img-style-4",
        'detail' => "With the current technologies, our remote Android app developers develop apps using Android Studio, C, C++, HTML, CSS, Google
                Material, Java.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Upgrade",
                'link' => "global-variables.ANDROID_APP_UPGRADE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Maintenance Services",
                'link' => "global-variables.ANDROID_APP_MAINTENANCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Plugin Development",
                'link' => "global-variables.WORDPRESS_PLUGIN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Testing",
                'link' => "global-variables.ANDROID_APP_TESTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Design",
                'link' => "global-variables.ANDROID_APP_DESIGN",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/android-upgrade', function () {
    $data = array(
        'head' => "Android App Upgrade",
        'title' => "global-variables.ANDROID_APP_UPGRADE_TITLE",
        'id' => "read-more-img-37",
        'id1' => "read-more-img-style-4",
        'detail' => "The application upgrade services offered by offshore Android app developers cover a wide
                 selection of operating systems and screen resolutions.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Native Android App Development",
                'link' => "global-variables.NATIVE_ANDROID",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Maintenance Services",
                'link' => "global-variables.ANDROID_APP_MAINTENANCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Plugin Development",
                'link' => "global-variables.WORDPRESS_PLUGIN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Testing",
                'link' => "global-variables.ANDROID_APP_TESTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Design",
                'link' => "global-variables.ANDROID_APP_DESIGN",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/android-maintenance', function () {
    $data = array(
        'head' => "Android App Maintenance Services",
        'title' => "global-variables.ANDROID_APP_MAINTENANCE_SERVICES",
        'id' => "read-more-img-37",
        'id1' => "read-more-img-style-4",
        'detail' => "A dedicated team of Android app developers offers maintenance services including incorporating the latest features,
                  troubleshooting, and more.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Native Android App Development",
                'link' => "global-variables.NATIVE_ANDROID",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Upgrade",
                'link' => "global-variables.ANDROID_APP_UPGRADE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Plugin Development",
                'link' => "global-variables.WORDPRESS_PLUGIN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Testing",
                'link' => "global-variables.ANDROID_APP_TESTING",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Design",
                'link' => "global-variables.ANDROID_APP_DESIGN",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/android-testing', function () {
    $data = array(
        'head' => "Android App Testing",
        'title' => "global-variables.ANDROID_APP_TESTING_TITLE",
        'id' => "read-more-img-37",
        'id1' => "read-more-img-style-4",
        'detail' => "We offer high-performance and reliable testing of Android apps by our offshore Android app developers.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Native Android App Development",
                'link' => "global-variables.NATIVE_ANDROID",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Upgrade",
                'link' => "global-variables.ANDROID_APP_UPGRADE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Plugin Development",
                'link' => "global-variables.WORDPRESS_PLUGIN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Maintenance Services",
                'link' => "global-variables.ANDROID_APP_MAINTENANCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Design",
                'link' => "global-variables.ANDROID_APP_DESIGN",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/android-design', function () {
    $data = array(
        'head' => "Android App Design",
        'title' => "global-variables.Android_App_Design",
        'id' => "read-more-img-37",
        'id1' => "read-more-img-style-4",
        'detail' => "You can hire experienced Android app developers &amp;amp; designers to add interactivity, aesthetics, and creativity to
                 your User Experience (UX) Design Testing.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Native Android App Development",
                'link' => "global-variables.NATIVE_ANDROID",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Upgrade",
                'link' => "global-variables.ANDROID_APP_UPGRADE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Plugin Development",
                'link' => "global-variables.WORDPRESS_PLUGIN",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Maintenance Services",
                'link' => "global-variables.ANDROID_APP_MAINTENANCE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Android App Testing",
                'link' => "global-variables.ANDROID_APP_TESTING",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/react-js-app', function () {
    $data = array(
        'head' => "React.JS Application Development",
        'title' => "global-variables.REACT_APPLICATION_DEVELOPMENT",
        'id' => "read-more-img-38",
        'id1' => "read-more-img-style-4",
        'detail' => "Our React.js developers provide a comprehensive range of services all under one platform and they even develop a mobile
                 app that works without any problem on cross-platform with dynamic features.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Support and Maintenance",
                'link' => "global-variables.REACT_JS_SUPPORT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS UI Development",
                'link' => "global-variables.REACT_JS_UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Components and API Integration",
                'link' => "global-variables.REACT_JS_COMPONENTS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS and SQA Testing",
                'link' => "global-variables.REACT_JS_QA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Migration Services",
                'link' => "global-variables.REACT_JS_MIGRATION",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/react-js-support', function () {
    $data = array(
        'head' => "React.JS Support and Maintenance",
        'title' => "global-variables.REACT_SUPPORT_MAINTENANCE",
        'id' => "read-more-img-38",
        'id1' => "read-more-img-style-4",
        'detail' => "If you are concerned about any problems post-development, don’t worry  we can help with that. We are just a phone call
                away, and we offer support and security for web or mobile applications as required.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Application Development",
                'link' => "global-variables.REACT_JS_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS UI Development",
                'link' => "global-variables.REACT_JS_UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Components and API Integration",
                'link' => "global-variables.REACT_JS_COMPONENTS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS and SQA Testing",
                'link' => "global-variables.REACT_JS_QA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Migration Services",
                'link' => "global-variables.REACT_JS_MIGRATION",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/react-js-ui', function () {
    $data = array(
        'head' => "React.JS UI Development",
        'title' => "global-variables.React_UI_Development",
        'id' => "read-more-img-38",
        'id1' => "read-more-img-style-4",
        'detail' => "The React JavaScript library is fully leveraged by our developers to create alluring and interactive user interfaces.
                They create impeccable applications that lead to better interaction with your customers.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Application Development",
                'link' => "global-variables.REACT_JS_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Support and Maintenance",
                'link' => "global-variables.REACT_JS_SUPPORT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Components and API Integration",
                'link' => "global-variables.REACT_JS_COMPONENTS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS and SQA Testing",
                'link' => "global-variables.REACT_JS_QA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Migration Services",
                'link' => "global-variables.REACT_JS_MIGRATION",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/react-js-components', function () {
    $data = array(
        'head' => "React.JS Components and API Integration",
        'title' => "global-variables.React_Components_API_Integration",
        'id' => "read-more-img-38",
        'id1' => "read-more-img-style-4",
        'detail' => "We have the best Reactjs developers that understand the entire ecosystem of ReactJS
                and can create highly customized plugins from scratch.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Application Development",
                'link' => "global-variables.REACT_JS_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Support and Maintenance",
                'link' => "global-variables.REACT_JS_SUPPORT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS UI Development",
                'link' => "global-variables.REACT_JS_UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS and SQA Testing",
                'link' => "global-variables.REACT_JS_QA",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Migration Services",
                'link' => "global-variables.REACT_JS_MIGRATION",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/react-js-qa', function () {
    $data = array(
        'head' => "React.JS and SQA Testing",
        'title' => "global-variables.React_SQA_Testing",
        'id' => "read-more-img-38",
        'id1' => "read-more-img-style-4",
        'detail' => "We have a skilled QA team that tests our web applications. They will discover any bugs
                that you may have missed, ensuring that you always enjoy error-free and seamless functionality.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Application Development",
                'link' => "global-variables.REACT_JS_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Support and Maintenance",
                'link' => "global-variables.REACT_JS_SUPPORT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS UI Development",
                'link' => "global-variables.REACT_JS_UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Components and API Integration",
                'link' => "global-variables.REACT_JS_COMPONENTS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Migration Services",
                'link' => "global-variables.REACT_JS_MIGRATION",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/react-js-migration', function () {
    $data = array(
        'head' => "React.JS Migration Services",
        'title' => "global-variables.REACT_MIGRATION_SERVICES",
        'id' => "read-more-img-38",
        'id1' => "read-more-img-style-4",
        'detail' => "Is your outdated project ready to be migrated to React JavaScript?Our React.js developers will ensure a smooth migration, as well as
                 data security, as well as superior user experience for visitors",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Application Development",
                'link' => "global-variables.REACT_JS_APPLICATION",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Support and Maintenance",
                'link' => "global-variables.REACT_JS_SUPPORT",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS UI Development",
                'link' => "global-variables.REACT_JS_UI",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS Components and API Integration",
                'link' => "global-variables.REACT_JS_COMPONENTS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "React.JS and SQA Testing",
                'link' => "global-variables.REACT_JS_QA",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/naps', function () {
    $data = array(
        'head' => "Native App Development Services",
        'title' => "global-variables.NATIVE_APP_DEVELOPMENT_SERVICES",
        'id' => "read-more-img-25",
        'id1' => "read-more-img-style-4",
        'detail' => "With native mobile apps, you can exploit the inherent power of iOS and Android platforms with secure and performant apps.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hybrid Cross-platform App Development Services",
                'link' => "global-variables.HYBRID",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Business Analysis & Consulting Services",
                'link' => "global-variables.BUSS_ANALYSIS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Business Apps and API Integration Services",
                'link' => "global-variables.BUSS_API",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Enterprise Mobile Apps Customize mobile solution",
                'link' => "global-variables.ENTP_APPS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Apps for Internet of Things",
                'link' => "global-variables.IOT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/hybrid', function () {
    $data = array(
        'head' => "Hybrid Cross-platform App Development Services",
        'title' => "global-variables.HYBRID_CROSS_PLATFORM_APP_DEVELOPMENT_SERVICES",
        'id' => "read-more-img-26",
        'id1' => "read-more-img-style-4",
        'detail' => "Using React Native, Flutter, and Xamarin, you can develop apps that work on multiple platforms while sharing a single code base.Using React Native, Flutter, and Xamarin, you can develop apps that work on multiple platforms while sharing a single code base.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Native App Development Services",
                'link' => "global-variables.NAPS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Business Analysis & Consulting Services",
                'link' => "global-variables.BUSS_ANALYSIS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Business Apps and API Integration Services",
                'link' => "global-variables.BUSS_API",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Enterprise Mobile Apps Customize mobile solution",
                'link' => "global-variables.ENTP_APPS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Apps for Internet of Things",
                'link' => "global-variables.IOT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/buss-analysis', function () {
    $data = array(
        'head' => "Business Analysis &amp; Consulting Services",
        'title' => "global-variables.BUSINESS_ANALYSIS_CONSULTING_SERVICES",
        'id' => "read-more-img-27",
        'id1' => "read-more-img-style-4",
        'detail' => "Whether you want to develop business applications or customer-facing apps, our consultants can help you define...",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Native App Development Services",
                'link' => "global-variables.NAPS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hybrid Cross-platform App Development Services",
                'link' => "global-variables.HYBRID",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Business Apps and API Integration Services",
                'link' => "global-variables.BUSS_API",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Enterprise Mobile Apps Customize mobile solution",
                'link' => "global-variables.ENTP_APPS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Apps for Internet of Things",
                'link' => "global-variables.IOT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/buss-api', function () {
    $data = array(
        'head' => "Business Apps and API Integration Services",
        'title' => "global-variables.BUSINESS_APPS_API_INTEGRATION_SERVICES",
        'id' => "read-more-img-28",
        'id1' => "read-more-img-style-4",
        'detail' => "Your mobile app(s) should integrate with the services you are already using and be extended to meet your employees’ and users’ needs.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Native App Development Services",
                'link' => "global-variables.NAPS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hybrid Cross-platform App Development Services",
                'link' => "global-variables.HYBRID",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Business Analysis &amp; Consulting Services",
                'link' => "global-variables.BUSS_ANALYSIS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Enterprise Mobile Apps Customize mobile solution",
                'link' => "global-variables.ENTP_APPS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Apps for Internet of Things",
                'link' => "global-variables.IOT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/entp-apps', function () {
    $data = array(
        'head' => "Enterprise Mobile Apps Customize mobile solution",
        'title' => "global-variables.ENTERPRISE_MOBILE_APPS_CUSTOMIZE_MOBILE_SOLUTION",
        'id' => "read-more-img-29",
        'id1' => "read-more-img-style-4",
        'detail' => "Personalized mobile solutions to help you drive your business. For instance, creating a content management system to publish ...",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Native App Development Services",
                'link' => "global-variables.NAPS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hybrid Cross-platform App Development Services",
                'link' => "global-variables.HYBRID",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Business Analysis &amp; Consulting Services",
                'link' => "global-variables.BUSS_ANALYSIS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Business Apps and API Integration Services",
                'link' => "global-variables.BUSS_API",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Apps for Internet of Things",
                'link' => "global-variables.IOT",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/iot', function () {
    $data = array(
        'head' => "Apps for Internet of Things",
        'title' => "global-variables.APPS_INTERNET_THINGS",
        'id' => "read-more-img-30",
        'id1' => "read-more-img-style-4",
        'detail' => "Connect Wi-Fi, Bluetooth, NFC, and more to high-functioning mobile apps that interact with hardware/wearables/IoT.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Native App Development Services",
                'link' => "global-variables.NAPS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hybrid Cross-platform App Development Services",
                'link' => "global-variables.HYBRID",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Business Analysis &amp; Consulting Services",
                'link' => "global-variables.BUSS_ANALYSIS",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Business Apps and API Integration Services",
                'link' => "global-variables.BUSS_API",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Enterprise Mobile Apps Customize mobile solution",
                'link' => "global-variables.ENTP_APPS",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/dynamic-angular', function () {
    $data = array(
        'head' => "Dynamic Web Application Development Services",
        'title' => "global-variables.DYNAMIC_WEB_APPLICATION_DEVELOPMENT_SERVICES",
        'id' => "read-more-img-31",
        'id1' => "read-more-img-style-4",
        'detail' => "With native mobile apps, you can exploit the inherent power of iOS and Android platforms with secure and performant apps.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Angular.JS Development Services",
                'link' => "global-variables.CUSTOM_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS App Support and Maintenance Services",
                'link' => "global-variables.APP_SPT_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS Version Upgrade Services",
                'link' => "global-variables.UPGRADE_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS Application Migration Services",
                'link' => "global-variables.MIG_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Widgets Development Services",
                'link' => "global-variables.WIDG_ANG",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/custom-angular', function () {
    $data = array(
        'head' => "Custom Angular.JS Development Services",
        'title' => "global-variables.CUSTOM_ANGULAR_DEVELOPMENT_SERVICES",
        'id' => "read-more-img-31",
        'id1' => "read-more-img-style-4",
        'detail' => "Using React Native, Flutter, and Xamarin, you can develop apps that work on multiple platforms while sharing a single code base.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Dynamic Web Application Development Services",
                'link' => "global-variables.DYNAM_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS App Support and Maintenance Services",
                'link' => "global-variables.APP_SPT_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS Version Upgrade Services",
                'link' => "global-variables.UPGRADE_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS Application Migration Services",
                'link' => "global-variables.MIG_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Widgets Development Services",
                'link' => "global-variables.WIDG_ANG",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/app-spt-angular', function () {
    $data = array(
        'head' => "Angular.JS App Support and Maintenance Services",
        'title' => "global-variables.ANGULAR_APP_SUPPORT_MAINTENANCE_SERVICES",
        'id' => "read-more-img-31",
        'id1' => "read-more-img-style-4",
        'detail' => "Whether you want to develop business applications or customer-facing apps, our consultants can help you define a sound technology strategy.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Dynamic Web Application Development Services",
                'link' => "global-variables.DYNAM_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Angular.JS Development Services",
                'link' => "global-variables.CUSTOM_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS Version Upgrade Services",
                'link' => "global-variables.UPGRADE_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS Application Migration Services",
                'link' => "global-variables.MIG_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Widgets Development Services",
                'link' => "global-variables.WIDG_ANG",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/upgrade-angular', function () {
    $data = array(
        'head' => "Angular.JS Version Upgrade Services",
        'title' => "global-variables.ANGULAR_VERSION_UPGRADE_SERVICES",
        'id' => "read-more-img-31",
        'id1' => "read-more-img-style-4",
        'detail' => "Our Angular.JS version upgrade services are designed to increase the speed of your app development process and increase the functionality of your app.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Dynamic Web Application Development Services",
                'link' => "global-variables.DYNAM_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Angular.JS Development Services",
                'link' => "global-variables.CUSTOM_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS App Support and Maintenance Services",
                'link' => "global-variables.APP_SPT_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS Application Migration Services",
                'link' => "global-variables.MIG_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Widgets Development Services",
                'link' => "global-variables.WIDG_ANG",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/migration-angular', function () {
    $data = array(
        'head' => "Angular.JS Application Migration Services",
        'title' => "global-variables.ANGULAR_APPLICATION_MIGRATION_SERVICES",
        'id' => "read-more-img-31",
        'id1' => "read-more-img-style-4",
        'detail' => "Our migration services ensure Angular.JS applications stay updated with modern and the latest web development trends.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Dynamic Web Application Development Services",
                'link' => "global-variables.DYNAM_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Angular.JS Development Services",
                'link' => "global-variables.CUSTOM_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS App Support and Maintenance Services",
                'link' => "global-variables.APP_SPT_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS Version Upgrade Services",
                'link' => "global-variables.UPGRADE_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Widgets Development Services",
                'link' => "global-variables.WIDG_ANG",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/widget-angular', function () {
    $data = array(
        'head' => "Custom Widgets Development Services",
        'title' => "global-variables.CUSTOM_WIDGETS_DEVELOPMENT_SERVICES",
        'id' => "read-more-img-31",
        'id1' => "read-more-img-style-4",
        'detail' => "With Angular.JS widgets development services, we streamline the performance of your app and make it more functional.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Dynamic Web Application Development Services",
                'link' => "global-variables.DYNAM_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Angular.JS Development Services",
                'link' => "global-variables.CUSTOM_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS App Support and Maintenance Services",
                'link' => "global-variables.APP_SPT_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS Version Upgrade Services",
                'link' => "global-variables.UPGRADE_ANG",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Angular.JS Application Migration Services",
                'link' => "global-variables.MIG_ANG",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/single-vue', function () {
    $data = array(
        'head' => "Vue.Js Single Page Apps",
        'title' => "global-variables.VUE_SINGLE_PAGE_APPS",
        'id' => "read-more-img-32",
        'id1' => "read-more-img-style-4",
        'detail' => "Hire Vue.Js consultants with expertise in delivering scalable applications that are robust, maintainable, and adaptive to additional features.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Custom Application",
                'link' => "global-variables.CUSTOM_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Support & Maintenance",
                'link' => "global-variables.SPT_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Plugin Development",
                'link' => "global-variables.MIG_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Consultation",
                'link' => "global-variables.CONSULT_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Storefront ",
                'link' => "global-variables.STORE_VUE",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/custom-vue', function () {
    $data = array(
        'head' => "Vue.Js Custom Applications",
        'title' => "global-variables.VUE_CUSTOM_APPLICATIONS",
        'id' => "read-more-img-32",
        'id1' => "read-more-img-style-4",
        'detail' => "Experienced Vue.Js developers offer end-to-end services right from consulting, development, upgrade, and migration to maintenance.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Single Page Apps",
                'link' => "global-variables.SNL_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Support & Maintenance",
                'link' => "global-variables.SPT_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Plugin Development",
                'link' => "global-variables.MIG_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Consultation",
                'link' => "global-variables.CONSULT_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Storefront ",
                'link' => "global-variables.STORE_VUE",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/support-vue', function () {
    $data = array(
        'head' => "Vue.JS Support Maintenance",
        'title' => "global-variables.VUE_SUPPORT_MAINTENANCE",
        'id' => "read-more-img-32",
        'id1' => "read-more-img-style-4",
        'detail' => "Expertise to assist enterprises looking to gain maximum advantage from framework right from design to architecture capabilities.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Single Page Apps",
                'link' => "global-variables.SNL_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Custom Application",
                'link' => "global-variables.CUSTOM_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Custom Wordpress Plugin Development",
                'link' => "global-variables.MIG_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Consultation",
                'link' => "global-variables.CONSULT_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Storefront ",
                'link' => "global-variables.STORE_VUE",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/migration-vue', function () {
    $data = array(
        'head' => "Vue.Js Migration",
        'title' => "global-variables.VUE_MIGRATION",
        'id' => "read-more-img-32",
        'id1' => "read-more-img-style-4",
        'detail' => "Skilled Vue.Js specialist for hire to develop full-featured, scalable business applications.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Single Page Apps",
                'link' => "global-variables.SNL_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Custom Application",
                'link' => "global-variables.CUSTOM_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Vue.JS Support Maintenance",
                'link' => "global-variables.SPT_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Consultation",
                'link' => "global-variables.CONSULT_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Storefront ",
                'link' => "global-variables.STORE_VUE",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/consult-vue', function () {
    $data = array(
        'head' => "Vue.Js Consultation",
        'title' => "global-variables.VUE_CONSULTATION",
        'id' => "read-more-img-32",
        'id1' => "read-more-img-style-4",
        'detail' => "Provide Vue.Js development services to help clients develop rich internet applications that meet specific business needs.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Single Page Apps",
                'link' => "global-variables.SNL_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Custom Application",
                'link' => "global-variables.CUSTOM_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Vue.JS Support Maintenance",
                'link' => "global-variables.SPT_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Migration",
                'link' => "global-variables.MIG_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Storefront ",
                'link' => "global-variables.STORE_VUE",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/store-vue', function () {
    $data = array(
        'head' => "Vue.Js Storefront",
        'title' => "global-variables.VUE_STOREFRONT",
        'id' => "read-more-img-32",
        'id1' => "read-more-img-style-4",
        'detail' => "Our team specializes in developing built-in reusable widgets with custom Vue.Js components for streamlined performance and functionality.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Single Page Apps",
                'link' => "global-variables.SNL_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Custom Application",
                'link' => "global-variables.CUSTOM_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Vue.JS Support Maintenance",
                'link' => "global-variables.SPT_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Migration",
                'link' => "global-variables.MIG_VUE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "VUE.js Consultation",
                'link' => "global-variables.CONSULT_VUE",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/web-app', function () {
    $data = array(
        'head' => "Responsive Web App",
        'title' => "global-variables.RESPONSIVE_WEB_APP",
        'id' => "read-more-img-40",
        'id1' => "read-more-img-style-4",
        'detail' => "Create a multiplatform web app using HTML5 with integrated elements of native and web applications to support cross-platform functionality.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hybrid Apps Development",
                'link' => "global-variables.HYBRID_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Upgrade & Maintenance",
                'link' => "global-variables.UPGRADE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI_2",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERTS_H",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP_W",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/hybrid-app', function () {
    $data = array(
        'head' => "Hybrid Apps Development",
        'title' => "global-variables.HYBRID_APPS_DEVELOPMENT",
        'id' => "read-more-img-40",
        'id1' => "read-more-img-style-4",
        'detail' => "Simple implementation of dynamic components and animations for your business website to make them look futuristic.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Web App",
                'link' => "global-variables.WEB_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Upgrade & Maintenance",
                'link' => "global-variables.UPGRADE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI_2",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERTS_H",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP_W",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/upgrade', function () {
    $data = array(
        'head' => "Upgrade & Maintenance",
        'title' => "global-variables.UPGRADE_MAINTENANCE",
        'id' => "read-more-img-40",
        'id1' => "read-more-img-style-4",
        'detail' => "Extend the functionality of your site as per your business requirements with custom HTML5 plugins and modules installed.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Web App",
                'link' => "global-variables.WEB_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hybrid Apps Development",
                'link' => "global-variables.HYBRID_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI_2",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERTS_H",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP_W",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/ui-ux-2', function () {
    $data = array(
        'head' => "UI/UX Design",
        'title' => "global-variables.UI_UX_Design_TITLE_2",
        'id' => "read-more-img-40",
        'id1' => "read-more-img-style-4",
        'detail' => "Switch your existing website without compromising your data and security using our HTML5 migration and consultation services.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Web App",
                'link' => "global-variables.WEB_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hybrid Apps Development",
                'link' => "global-variables.HYBRID_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Upgrade & Maintenance",
                'link' => "global-variables.UPGRADE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERTS_H",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP_W",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/web-experts-h', function () {
    $data = array(
        'head' => "Hire Web Experts",
        'title' => "global-variables.HIRE_WEB_EXPERTS_2",
        'id' => "read-more-img-40",
        'id1' => "read-more-img-style-4",
        'detail' => "Convert your PSD files into HTML5 web pages with attractive and appealing themes and web design.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Web App",
                'link' => "global-variables.WEB_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hybrid Apps Development",
                'link' => "global-variables.HYBRID_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Upgrade & Maintenance",
                'link' => "global-variables.UPGRADE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI_2",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Progressive Web Apps",
                'link' => "global-variables.PROGRESSIVE_APP_W",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});

Route::get('/progressive-app-w', function () {
    $data = array(
        'head' => "Progressive Web Apps",
        'title' => "global-variables.RESPONSIVE_WEB_APP",
        'id' => "read-more-img-40",
        'id1' => "read-more-img-style-4",
        'detail' => "Extended support and maintenance along with upgradation of your HTML5 website, wherever and whenever you want it.",
        'service' => [
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Responsive Web App",
                'link' => "global-variables.WEB_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hybrid Apps Development",
                'link' => "global-variables.HYBRID_APP",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Upgrade & Maintenance",
                'link' => "global-variables.UPGRADE",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "UI/UX Design",
                'link' => "global-variables.UI_2",
            ],
            [
                'img' => "asset-3/uploads/2022/03/arrow.svg",
                'head' => "Hire Web Experts",
                'link' => "global-variables.WEB_EXPERTS_H",
            ],
        ],
        'price-title-1' => "MONTHLY",
        'price-1' => "23",
        'price-subtitle-1' => "We’ll Provide A Fully Signed NDA For Your Project’s Confidentiality<br />",
        'price-title-2' => "MONTHLY",
        'price-2' => "2,960",
        'price-subtitle-2' => "5+ Years of Exp. React Native Developer 160 Hours Per Month<br />",
        'price-title-3' => "MONTHLY (5 developer)",
        'price-3' => "14,500",
        'price-subtitle-3' => "Build A SCRUM<br />Team Of 5 Developers<br />",
    );
    return view('read-more')->with('data', $data);
});



Route::get('/lets-talk', function () {
    return view('lets-talk');
});

Route::get('/flutter', function () {
    return view('flutter-app-development-company');
});

Route::get('/xamarin', function () {
    return view('xamarin-mobile-app-development-company');
});

Route::get('/knockout', function () {
    return view('knockoutjs-development-company');
});

Route::get('/node', function () {
    return view('node-js-development-company');
});

Route::get('/python', function () {
    return view('python-web-development-services');
});

Route::get('/ecommerce', function () {
    return view('custom-ecommerce-development');
});

Route::get('/cross-platform', function () {
    return view('cross-platform-app-development-company');
});

Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from Aresync.com',
        'body' => 'This is for testing email using smtp'
    ];

    \Mail::to('khalid.hussan@aresync.com')->send(new \App\Mail\ContactMail($details));

    dd("Email is Sent.");
});