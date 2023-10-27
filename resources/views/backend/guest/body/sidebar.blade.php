<div class="sidebar_menu">
        <div class="menu-inner">
            <div id="sidebar-menu">
                <!--=========================*
                           Main Menu
                *===========================-->
                <ul class="metismenu" id="sidebar_menu">
                    <li class="menu-title">Main</li>
                    <li>
                        <a href="{{route('guest.dashboard')}}">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>               

                    <li class="menu-title">Components</li>
                    <li>
                        <a href="{{route('guest.add.news')}}" aria-expanded="true">
                            <i class="feather ft-gitlab"></i>
                            <span>Add News</span> 
                        </a> 
                    </li>
                    <li>
                        <a href="{{route('guest.manage.news')}}" aria-expanded="true">
                            <i class="feather ft-gitlab"></i>
                            <span>All News</span> 
                        </a> 
                    </li>
                    <li>
                        <a href="{{route('guest.pendding.Manage')}}" aria-expanded="true">
                            <i class="feather ft-gitlab"></i>
                            <span>Pendding News</span> 
                        </a> 
                    </li>
                    <li>
                        <a href="{{route('guest.unapproved.Manage')}}" aria-expanded="true">
                            <i class="feather ft-gitlab"></i>
                            <span>Unapproved News</span> 
                        </a> 
                    </li>
                </ul>
                <!--=========================*
                          End Main Menu
                *===========================-->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>