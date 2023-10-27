@php

$category = DB::table('categories')->orderBy('categoryName','ASC')->get();


@endphp


<div class="menu-section section bg-dark" id="menu-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-section-wrap">


                        
                        <!-- Main Menu Start -->
                        <div class="main-menu float-left d-none d-md-block">
                            <nav>
                                <ul>

                                    <li class="active has-dropdown"><a href="index-2.html">Home</a>                                    
                                    </li>
                                   
                                    
                                   @foreach($category as $items)
                                    <li class="has-dropdown"><a href="{{url('category',$items->id.'/'.$items->slug)}}">{{$items->categoryName}}</a>
                                        @php 

                                        $subCategory = DB::table('sub_categories')->where('categoryId',$items->id)->orderBy('subCategoryName','ASC')->get();


                                        @endphp
                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            @foreach($subCategory as $item)
                                            <li><a href="blog.html">{{$item->subCategoryName}}</a></li>   
                                            @endforeach                                         
                                        </ul><!-- Submenu End -->
                                        
                                    </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div><!-- Main Menu Start -->





                        <div class="mobile-logo d-none d-block d-md-none" ><a href="index-2.html"><img src="img/logo-white.png" alt="Logo"></a></div>

                        <!-- Header Search -->
                        <div class="header-search float-right">

                            <!-- Search Toggle -->
                            <button class="header-search-toggle"><i class="fa fa-search"></i></button>

                            <!-- Header Search Form -->
                            <div class="header-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search Here">
                                </form>
                            </div>

                        </div>
                        
                        <!-- Mobile Menu Wrap -->
                        <div class="mobile-menu-wrap d-none" >
                            <nav>
                                <ul>

                                    <li class="active has-dropdown"><a href="index-2.html">Home</a>
                                        
                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li class="active"><a href="index-2.html">Home One</a></li>
                                            <li><a href="index-3.html">Home Two</a></li>
                                            <li><a href="index-4.html">Home Three</a></li>
                                            <li><a href="index-5.html">Home Four</a></li>
                                        </ul><!-- Submenu End -->
                                        
                                    </li>
                                    <li><a href="category-lifestyle.html">News</a></li>
                                    <li><a href="category-sports.html">Sports</a></li>
                                    <li><a href="category-lifestyle.html">Lifestyle</a>
                                           
                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li><a href="category-fashion.html">Beauty</a></li>
                                            <li><a href="category-lifestyle.html">travel</a></li>
                                            <li><a href="category-sports.html">Interior Design</a></li>
                                            <li><a href="category-lifestyle.html">Photography</a></li>
                                            <li><a href="category-fashion.html">fashion</a></li>
                                            <li><a href="category-sports.html">music</a></li>
                                        </ul><!-- Submenu End -->
                                        
                                    </li>
                                    <li><a href="category-fashion.html">Fashion</a></li>
                                    <li><a href="category-politic.html">politic</a></li>
                                    <li><a href="#">pages</a>
                                        
                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="contact-us.html">contact</a></li>
                                            <li><a href="post-details.html">post details</a></li>
                                        </ul><!-- Submenu End -->
                                        
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        
                        <!-- Mobile Menu -->
                        <div class="mobile-menu"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>