@extends('frontend.master_home')    
    @section('home')
  
    <!-- Hero Section Start -->
    <div class="hero-section section mt-30 mb-30">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row row-1">

                        <div class="order-lg-2 col-lg-6 col-12">
                            
                            <!-- Hero Post Slider Start -->
                            <div class="post-carousel-1">
                            @foreach($mainslider as $items)
                                <!-- Overlay Post Start -->
                                <div class="post post-large post-overlay hero-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <div class="image"><img src="{{ asset($items->imageThum) }}" alt="post"></div>

                                        <!-- Category -->
                                        <a href="{{url('/details',$items->id.'/'.$items->slug)}}" class="category politic">
                                        {{ $items['categoryShow']['categoryName'] }}
                                        </a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h2 class="title"><a href="{{url('/details',$items->id.'/'.$items->slug)}}">{{ $items->title }}</a></h2>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div><!-- Overlay Post End -->
                                @endforeach
                                
                            </div><!-- Hero Post Slider End -->
                            
                        </div>

                        <div class="order-lg-1 col-lg-3 col-12">
                            <div class="row row-1">
                        @foreach($silderLeft as $items)
                                <!-- Overlay Post Start -->
                                <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <div class="image"><img src="{{ asset($items->imageThum) }}" alt="post"></div>

                                        <!-- Category -->
                                        <a href="#" class="category travel">{{ $items['categoryShow']['categoryName'] }}</a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">{{$items->title}}</a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Overlay Post End -->

                           @endforeach 

                            </div>
                        </div>

                        <div class="order-lg-3 col-lg-3 col-12">
                            <div class="row row-1">
                    @foreach($silderRight as $items)
                                <!-- Overlay Post Start -->
                                <div class="post post-overlay gradient-overlay-1 hero-post col-lg-12 col-md-6 col-12">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <div class="image"><img src="{{ asset($items->imageThum) }}" alt="post"></div>

                                        <!-- Category -->
                                        <a href="#" class="category sports">{{ $items['categoryShow']['categoryName'] }}</a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">{{$items->title}}</a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Overlay Post End -->
                    @endforeach

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- Hero Section End -->
    
    <!-- Popular Section Start -->
    <div class="popular-section section pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <!-- Popular Post Slider Start -->
                    <div class="popular-post-slider">
                        @foreach($political as $items)    
                        <!-- Post Start -->
                        <div class="post post-small post-list post-dark popular-post">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="post-details.html"><img src="{{ asset($items->imageThum) }}" alt="post"></a>

                                <!-- Content -->
                                <div class="content fix">

                                    <!-- Title -->
                                    <h5 class="title"><a href="post-details.html">{{$items->title}}</a></h5>

                                    <!-- Description -->
                                    <p>{{ Str::limit($items->title, 22 )  }}</p>

                                    <!-- Read More -->
                                    <a href="post-details.html" class="read-more">continue reading</a>

                                </div>
                                
                            </div>
                        </div><!-- Post Start -->

                      @endforeach

                        
                    </div><!-- Popular Post Slider End -->
                    
                </div>
            </div>
        </div>
    </div><!-- Popular Section End -->
    
    <!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head feature-head">
                            
                            <!-- Title -->
                            <h4 class="title">Featured News</h4>
                            
                            <!-- Tab List Start -->
                            <!-- <ul class="post-block-tab-list feature-post-tab-list nav d-none d-md-block">
                                <li><a class="active" data-toggle="tab" href="#feature-cat-1">Fashion</a></li>

                                </li>
                            </ul> -->
                            <!-- Tab List End -->
                            
                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list feature-post-tab-list nav d-sm-block d-md-none">
                                <!-- <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category</a>
                                        
                                    
                                </li> -->
                            </ul><!-- Tab List End -->
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body pb-0">
                            
                            <!-- Tab Content Start-->
                            <div class="tab-content">
                               
                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="feature-cat-1">
                                   
                                    <div class="row">

                                        <!-- Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                        <?php 
                                                $i=0;
                                                $firstId;
                                                $secondId;
                                            ?>
                                            @foreach($featured as $items)
                                            <?php
                                                if($i==0){
                                                   $firstId = $items->id;
                                                //    print_r($firstId);
                                                }
                                                if($i== 1){
                                                    $secondId = $items->id;
                                                    // print_r($secondId);
                                                 }
                                                 
                                                 
                                                $i++;
                                            ?>

                                            <!-- Post Start -->
                                            <div class="post feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="{{ asset($items->imageThum) }}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html">{{$items->title}}</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                            <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>
                                                        </div>

                                                        <!-- Description -->
                                                        <p>{!! Str::limit($items->newsDetailsOne, 80 )  !!}</p>

                                                    </div>
                                                    
                                                </div>
                                            </div><!-- Post End -->

                                          @endforeach

                                        </div><!-- Post Wrapper End -->

                                        @php 

                                $feature = DB::table('news')->where('category',1)->latest()->limit(8)->get();
                       

                               @endphp

                                        <!-- Small Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">
                                                 @foreach($feature as $items)

                                                 @if($firstId==$items->id || $secondId==$items->id)

                                           @else

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="{{ asset($items->imageThum) }}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">{{$items->title}}</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
                                            </div><!-- Post Small End -->
                                                 @endif
                                       @endforeach
                                        </div><!-- Small Post Wrapper End -->

                                    </div>
                                    
                                </div><!-- Tab Pane End-->
                               
                          
                            </div><!-- Tab Content End-->
                            
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">
                       
                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head feature-head">

                                    <!-- Title -->
                                    <h4 class="title">Follow Us</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <div class="sidebar-social-follow">
                                        <div>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                                <h3>40,583</h3>
                                                <span>Fans</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="google-plus">
                                                <i class="fa fa-google-plus"></i>
                                                <h3>36,857</h3>
                                                <span>Followers</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                                <h3>50,883</h3>
                                                <span>Followers</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="dribbble">
                                                <i class="fa fa-dribbble"></i>
                                                <h3>4,743</h3>
                                                <span>Followers</span>
                                            </a>
                                        </div>
                                    </div>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="img/banner/sidebar-banner-1.jpg" alt="Sidebar Banner"></a>

                        </div>
                        
                    </div>
                </div><!-- Sidebar End -->
                
            </div><!-- Feature Post Row End -->
            
            <!-- Life Style Post Row Start -->
            <div class="row ">
                
                <div class="col-lg-8 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head life-style-head">
                            
                            <!-- Title -->
                            <h4 class="title">সারাদেশ</h4>
                            
                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list life-style-post-tab-list nav d-none d-md-block">
                    @foreach($division as $items)
                                <li><a class="" data-toggle="tab" href="#life-style-cat-{{$items->id}}">{{$items->divisionName}}</a></li>
                    @endforeach
                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">More</a>
                                   
                                    <!-- Dropdown -->
                                    <!-- <ul class="dropdown-menu">
                                        <li><a data-toggle="tab" href="#life-style-cat-1">Technology</a></li>
                                        <li><a data-toggle="tab" href="#life-style-cat-2">Food</a></li>
                                    </ul> -->
                                    
                                </li>
                            </ul><!-- Tab List End -->
                            
                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list life-style-post-tab-list nav d-sm-block d-md-none">
                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category</a>
                                   
                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a class="active" data-toggle="tab" href="#life-style-cat-1">Fashion</a></li>
                                        <li><a data-toggle="tab" href="#life-style-cat-2">Health</a></li>
                                        <li><a data-toggle="tab" href="#life-style-cat-1">Beauty</a></li>
                                        <li><a data-toggle="tab" href="#life-style-cat-2">Sports</a></li>
                                        <li><a data-toggle="tab" href="#life-style-cat-1">Technology</a></li>
                                        <li><a data-toggle="tab" href="#life-style-cat-2">Food</a></li>
                                    </ul>
                                    
                                </li>
                            </ul><!-- Tab List End -->
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body pb-0">
                            
                            <!-- Tab Content Start-->
                            <div class="tab-content">
                               @foreach($division as $item)
                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show " id="life-style-cat-{{$item->id}}" >
                            
                                    <div class="row">
                               @php 

                                $news = DB::table('news')->where('divisionId',$item->id)->latest()->limit(2)->get();
                               
                               
                                $new = DB::table('news')->where('divisionId',$item->id)->latest()->limit(4)->get();



                               @endphp
                                        <!-- Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">
                                            <?php 
                                                $i=0;
                                                $firstId;
                                                $secondId;
                                            ?>
                                            @foreach($news as $items)
                                            <?php
                                                if($i==0){
                                                   $firstId = $items->id;
                                                //    print_r($firstId);
                                                }
                                                if($i== 1){
                                                    $secondId = $items->id;
                                                    // print_r($secondId);
                                                 }
                                                 
                                                 
                                                $i++;
                                            ?>
                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="{{ asset($items->imageThum) }}" alt="post"></div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html">{{$items->title}}</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div><!-- Overlay Post End -->                                  

                                        @endforeach
    
                                        </div><!-- Post Wrapper End -->

                                        <!-- Small Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                        @foreach($new as $items)
                                           @if($firstId==$items->id || $secondId==$items->id)

                                           @else
                                                 <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border">
                                                
                                                <div class="post-wrap">
                                                
                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="{{ asset($items->imageThum) }}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">{{$items->title}}</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                           @endif
                                            
                                          @endforeach

                                        </div><!-- Small Post Wrapper End -->
                                
                                    </div>
                                    
                                </div><!-- Tab Pane End-->
                               @endforeach
                               
                                
                            </div><!-- Tab Content End-->
                            
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">
                       
                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head life-style-head">

                                    <!-- Title -->
                                    <h4 class="title">বিশ্ব</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                        <!-- Sidebar Post Slider Start -->
                                        <div class="sidebar-post-carousel post-block-carousel life-style-post-carousel">

                                        @foreach($world as $items)
                                            <!-- Post Start -->
                                            <div class="post life-style-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="{{ asset($items->imageThum) }}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html">{{$items->title}}</a></h4>

                                                        <!-- Read More Button -->
                                                        <a href="#" class="read-more">continue reading</a>

                                                    </div>

                                                </div>
                                            </div><!-- Post End -->
                                        @endforeach
                                            
                                        </div><!-- Sidebar Post Slider End -->

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('frontend/img/banner/sidebar-banner-2.jpg')}}" alt="Sidebar Banner"></a>

                        </div>
                        
                    </div>
                </div><!-- Sidebar End -->
                
            </div><!-- Life Style Post Row End -->
            
            <!-- Education & Madical Post Row Start -->
            <div class="row">
                
                <div class="col-lg-4 col-md-6 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head education-head">
                            
                            <!-- Title -->
                            <h4 class="title">শিক্ষা</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <!-- Sidebar Post Slider Start -->
                            <div class="four-row-post-carousel row-post-carousel post-block-carousel education-post-carousel">

                            @foreach($education as $items)
                            <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img style="width:124px;height:94px;" src="{{ asset($items->imageThum) }}" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">{{$items->title}}</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                            @endforeach

                            </div><!-- Sidebar Post Slider End -->
                        
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <div class="col-lg-4 col-md-6 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head madical-head">
                            
                            <!-- Title -->
                            <h4 class="title">মেডিকেল</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <!-- Sidebar Post Slider Start -->
                            <div class="two-row-post-carousel row-post-carousel post-block-carousel madical-post-carousel">
                                     
                            @foreach($medical as $items)
                                <!-- Post Start -->
                                <div class="post madical-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img style="width:328px;height:198px" src="{{ asset($items->imageThum) }}" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">{{$items->title}}</a></h4>

                                        </div>
                                    
                                    </div>
                                </div><!-- Post End -->
                                
                            @endforeach
                                

                            </div><!-- Sidebar Post Slider End -->
                        
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <!-- Sidebar Start -->
                <div class="col-lg-4 col-md-6 col-12 mb-50">
                    
                    <!-- Single Sidebar -->
                    <div class="single-sidebar">
                        
                        <!-- Sidebar Block Wrapper -->
                        <div class="sidebar-block-wrapper">
                        
                            <!-- Sidebar Block Head Start -->
                            <div class="head education-head">

                                <!-- Tab List -->
                                <div class="sidebar-tab-list education-sidebar-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#latest-news">ফ্যাশন</a>
                                    <a data-toggle="tab" href="#popular-news">ভ্রমণ</a>
                                </div>

                            </div><!-- Sidebar Block Head End -->
                            
                            <!-- Sidebar Block Body Start -->
                            <div class="body">
                            
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="latest-news">

                                    @foreach($fashion as $items)
                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="{{ asset($items->imageThum) }}" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">{{$items->title}}</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div><!-- Small Post End -->

                                    @endforeach

                                 

                                       
                                   
                                    </div>
                                    <div class="tab-pane fade" id="popular-news">

                                    @foreach($travel as $items)
                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="{{ asset($items->imageThum) }}" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">{{$items->title}}</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div><!-- Small Post End -->
                                    @endforeach
                                   
                                    </div>
                                </div>
                                
                            </div><!-- Sidebar Block Body End -->

                        </div>
                        
                    </div>
                    
                </div><!-- Sidebar End -->
                
            </div><!-- Education & Madical Post Row End -->
            
            <!-- Sports Post Row Start -->
            <div class="row mb-50">
                
                <div class="col-12">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head sports-head">
                            
                            <!-- Title -->
                            <h4 class="title">খেলাধুলা</h4>
                            
                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list sports-post-tab-list nav d-none d-md-block">
                            
                                <li><h4 class="title">বানিজ্য</h4></li>
                                <!-- <li><a data-toggle="tab" href="#sports-cat-2">Health</a></li>
                                <li><a data-toggle="tab" href="#sports-cat-1">Beauty</a></li>
                                <li><a data-toggle="tab" href="#sports-cat-2">Sports</a></li>
                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">More</a> -->
                                   
                                    <!-- Dropdown -->
                                    <!-- <ul class="dropdown-menu">
                                        <li><a data-toggle="tab" href="#sports-cat-1">Technology</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-2">Food</a></li>
                                    </ul> -->
                                    
                                </li>
                            </ul><!-- Tab List End -->
                            
                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list sports-post-tab-list nav d-sm-block d-md-none">
                                
                            </ul><!-- Tab List End -->
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body pb-0">
                            
                            <!-- Tab Content Start-->
                            <div class="tab-content">
                               
                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="sports-cat-1">
                                   
                                    <div class="row">

                                        <!-- Overlay Post Wrapper Start -->
                                        <div class="col-lg-8 col-12">

                                            <div class="row">

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay post-large sports-post col-12 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="{{asset('frontend/assets/img/post/post-37.jpg')}}" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h2 class="title"><a href="post-details.html">Mohammedan 05 - Arambagh 04</a></h2>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                
                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="{{asset('frontend/assets/img/post/post-38.jpg')}}" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h4 class="title"><a href="post-details.html">Sreekail 2 - 3 Comilla.</a></h4>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                
                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                                            <img src="img/post/post-39.jpg" alt="post">
                                                            <!-- Video Popup -->
                                                            <span class="video-btn"><i class="fa fa-play"></i></span>
                                                        </a>

                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                
                                            </div>

                                        </div><!-- Overlay Post Wrapper End -->

                                        <!-- Post Wrapper Start -->
                                        <div class="col-lg-4 col-12">
                                           <div class="row">
                                               
                                               <div class="col-lg-12 col-md-6 col-12 mb-20">
                                                   @foreach($commerce as $items)
                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="{{ asset($items->imageThum) }}" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">{{$items->title}}</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->
                                                    @endforeach
                                                  
                                                </div>

                                            
                                            
                                            </div>
                                        </div><!-- Post Wrapper End -->

                                    </div>
                                    
                                </div><!-- Tab Pane End-->
                               
                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade" id="sports-cat-2">
                                   
                                    <div class="row">

                                        <!-- Overlay Post Wrapper Start -->
                                        <div class="col-lg-8 col-12">

                                            <div class="row">

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay post-large sports-post col-12 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="img/post/post-37.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h2 class="title"><a href="post-details.html">Mohammedan 05 - Arambagh 04</a></h2>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                
                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="img/post/post-38.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h4 class="title"><a href="post-details.html">Sreekail 2 - 3 Comilla.</a></h4>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                
                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                                            <img src="img/post/post-39.jpg" alt="post">
                                                            <!-- Video Popup -->
                                                            <span class="video-btn"><i class="fa fa-play"></i></span>
                                                        </a>

                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                
                                            </div>

                                        </div><!-- Overlay Post Wrapper End -->

                                        <!-- Post Wrapper Start -->
                                        <div class="col-lg-4 col-12">
                                           <div class="row">

                                               <div class="col-lg-12 col-md-6 col-12 mb-20">
                                                   
                                                    <!-- Post Start -->
                                                    <div class="post sports-post">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="img/post/post-42.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h4 class="title"><a href="post-details.html">Winning T20 Farewell To Safari.</a></h4>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <a href="#" class="meta-item date"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                                </div>

                                                                <!-- Description s-->
                                                                <p>Lorem ipsum dolor sit amet, consectet adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. </p>

                                                            </div>
                                                        </div>
                                                    </div><!-- Post End -->
                                                    
                                               </div>
                                               
                                               <div class="col-lg-12 col-md-6 col-12 mb-20">
                                                   
                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="img/post/post-40.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->

                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="img/post/post-41.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->
                                                
                                                </div>
                                            
                                            </div>
                                        </div><!-- Post Wrapper End -->

                                    </div>
                                    
                                </div><!-- Tab Pane End-->
                                
                            </div><!-- Tab Content End-->
                            
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
            </div><!-- Sports Post Row End -->
            
            <!-- Banner Row Start -->
            <div class="row mb-50">
                
                <div class="col-12">
                    
                    <a href="#" class="post-middle-banner"><img src="img/banner/post-middle-1.jpg" alt="Banner"></a>
                    
                </div>
                
            </div><!-- Banner Row End -->
            
            <!-- Youtube Video Row Start -->
            <div class="row">
                
                <!-- Video Play List Start-->
                <div class="col-lg-8 col-12 mb-50">
                    
                    <div class="youtube-video-playlist">
                        <!-- Selector by Id -->
                        <div id="unix" data-ycp_title="Khobor HTML Template" data-ycp_channel="PL6XRrncXkMaWYv31tSdLGUKHDMQ2QtHTx"></div>
                        <!-- By ChannelId -->
                    </div>
                    
                </div>
                <!-- Video Play List End-->
                
                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">
                    
                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head video-head">

                                    <!-- Title -->
                                    <h4 class="title">Division</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <ul class="sidebar-category video-category">
                                        @foreach($division as $items)
                                        <li><a href="{{url('division',$items->id.'/'.$items->slug)}}">{{$items->divisionName}}</a></li>
                                        @endforeach
                                    </ul>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <div class="sidebar-subscribe">
                                <h4>Subscribe To <br>Our <span>Update</span> News</h4>
                                <p>Adipiscing elit. Fusce sed mauris arcu. Praesent ut augue imperdiet, semper lorem id.</p>
                                <!-- Newsletter Form -->
                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <label for="mce-EMAIL" class="d-none">Subscribe to our mailing list</label>
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    
                    </div>
                </div><!-- Sidebar End -->
                
            </div><!-- Youtube Video Banner Row End -->
            
            <!-- Technology, Fashion & Other Post Row Start -->
            <div class="row">
                
                <div class="col-lg-4 col-md-6 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head gadgets-head">
                            
                            <!-- Title -->
                            <h4 class="title">বিনোদন</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel gadgets-post-carousel">

                                <!-- Post Start -->
                                <div class="post gadgets-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="img/post/post-43.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Sony Reveals The Xperia Z4, Its Latest Flagship Smartphone.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post gadgets-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="img/post/post-43.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Sony Reveals The Xperia Z4, Its Latest Flagship Smartphone.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->
                        
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <div class="col-lg-4 col-md-6 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head fashion-head">
                            
                            <!-- Title -->
                            <h4 class="title">জীবনযাপন</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel fashion-post-carousel">

                                <!-- Post Start -->
                                <div class="post fashion-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="img/post/post-44.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">The scientific method of finding love on the beauty.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post fashion-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="img/post/post-44.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">The scientific method of finding love on the beauty.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->
                        
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <div class="col-lg-4 col-md-6 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head">
                            
                            <!-- Title -->
                            <h4 class="title">চাকরি</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel">

                                <!-- Post Start -->
                                <div class="post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="img/post/post-45.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Tell me how to Achive your goal by creating a design.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="img/post/post-45.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Tell me how to Achive your goal by creating a design.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->
                        
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
            </div><!-- Technology, Fashion & Other Post Row End -->
            
        </div>
    </div><!-- Post Section End -->
    
    <!-- Instagram Section Start -->
    <div class="instagram-section section">
        <div class="container-fluid">
            <div class="row">
                
                <!-- Full Width Instagram Carousel Start -->
                <div class="fullwidth-instagram-carousel instagram-carousel col pl-0 pr-0">
                    
                    <a href="#" class="instagram-item"><img src="{{asset('frontend/assets/img/instagram/1.jpg')}}" alt="instagram"></a>
                    <a href="#" class="instagram-item"><img src="{{asset('frontend/assets/img/instagram/2.jpg')}}" alt="instagram"></a>
                    <a href="#" class="instagram-item"><img src="{{asset('frontend/assets/img/instagram/3.jpg')}}" alt="instagram"></a>
                    <a href="#" class="instagram-item"><img src="{{asset('frontend/assets/img/instagram/4.jpg')}}" alt="instagram"></a>
                    <a href="#" class="instagram-item"><img src="{{asset('frontend/assets/img/instagram/5.jpg')}}" alt="instagram"></a>
                    <a href="#" class="instagram-item"><img src="{{asset('frontend/assets/img/instagram/6.jpg')}}" alt="instagram"></a>
                    
                </div><!-- Full Width Instagram Carousel End -->
                
            </div>
        </div>
    </div><!-- Instagram Section End -->


     @endsection