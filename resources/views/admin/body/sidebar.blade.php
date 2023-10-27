<div class="sidebar_menu">
        <div class="menu-inner">
            <div id="sidebar-menu">
                <!--=========================*
                           Main Menu
                *===========================-->
                <ul class="metismenu" id="sidebar_menu">
                    <li class="menu-title">Main</li>
                    <li>
                        <a href="{{url('admin/dashboard')}}">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>               

                    <li class="menu-title">Components</li>
                    <!--=========================*
                              UI Features
                    *===========================-->
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                            <span>Category</span>
                            <span class="float-right arrow"><i class="ion ion-chevron-down"></i></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('categore.manage')}}"><i class="ti-alert"></i><span>Category</span></a></li>
                            <li><a href="{{route('subcategore.manage')}}"><i class="ti-layout-accordion-separated"></i><span>Sub Category</span></a></li>                           
                        </ul>
                    </li>
                    <!--=========================*
                              Advance Kit
                    *===========================-->
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                            <span>Division</span>
                            <span class="float-right arrow"><i class="ion ion-chevron-down"></i></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('manage.division')}}"><i class="ti-layout-cta-left"></i> <span>Division</span></a></li>
                            <li><a href="{{route('manage.district')}}"><i class="ti-layout-media-overlay-alt-2"></i> <span>District</span></a></li>
                        
                        </ul>
                    </li>
                    <!--=========================*
                              Icons
                    *===========================-->
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                            <span>News</span>
                            <span class="float-right arrow"><i class="ion ion-chevron-down"></i></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('add.news')}}"><i class="ti-flag-alt"></i> <span>Add News</span></a></li>
                            <li><a href="themify.html"><i class="ti-themify-favicon"></i><span>Pending News</span></a></li>
                            <li><a href="{{route('manage.news')}}"><i class="ion-ionic"></i><span>All News</span></a></li>
                            
                        </ul>
                    </li>
                    <!--=========================*
                                  Maps
                    *===========================-->
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                            <span>Pending News</span>
                            <span class="float-right arrow"><i class="ion ion-chevron-down"></i></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('reporter.pendding.news')}}"><i class="icon-map"></i><span>Reporter News</span></a></li>
                            <li><a href="{{route('guest.pendding.news')}}"><i class="icon-map-pin"></i><span>Guest News</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.unapprove')}}" aria-expanded="true">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                            <span>UnApproved News</span>
                           
                        </a>                  
                    </li>
                    <li>
                        <a href="#" aria-expanded="true">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                            <span>Facebook Post</span>
                           
                        </a>                  
                    </li>
                    <li>
                        <a href="#" aria-expanded="true">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                            <span>G-mail Send</span>
                           
                        </a>                  
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                            <span>Ads</span>
                            <span class="float-right arrow"><i class="ion ion-chevron-down"></i></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="#"><i class="icon-map"></i><span>Home Page</span></a></li>
                            <li><a href="#"><i class="icon-map-pin"></i><span>News Details Page</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                            <span>Settings</span>
                            <span class="float-right arrow"><i class="ion ion-chevron-down"></i></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('site.setting')}}"><i class="icon-map"></i><span>Site Settings</span></a></li>
                            <li><a href="#"><i class="icon-map-pin"></i><span>Admin Settings</span></a></li>
                        </ul>
                    </li>
              
                </ul>
                <!--=========================*
                          End Main Menu
                *===========================-->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>