<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{ asset('img/sidebar-1.jpg') }}">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="http://www.horizonwebhost.com" class="simple-text logo-mini">
            HI
        </a>
        <a href="http://www.horizonwebhost.com" class="simple-text logo-normal">
            Horizon International
        </a>
    </div>
    <div class="sidebar-wrapper">
        @if(!Auth::guest())
        <div class="user">
            <div class="photo">
                <img src="{{ asset('img/default-avatar.png') }}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        {{ auth()->user()->name }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" style="text-decoration:none;">
                                    <span class="sidebar-mini">L</span>
                                    <span class="sidebar-normal">Log out</span>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                </a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
        @endif
        @if (!Auth::guest())
        <ul class="nav">
            <li class="{{ Request::url() == url('/admin/dashboard') ? 'active' : '' }}">
                <a href="/admin/dashboard">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::url() == url('/admin/update-site-info') ? 'active' : '' }}">
                <a href="/admin/update-site-info">
                    <i class="material-icons">widgets</i>
                    <p>Update Site Info</p>
                </a>
            </li>

            <li>
                    <a data-toggle="collapse" href="#news">
                        <i class="material-icons">apps</i>
                        <p>Manage News
                            <b class="caret"></b>
                        </p>
                    </a>
                  
                    <div class="collapse" id="news">
                            <ul class="nav">
                                <li class="{{ Request::url() == url('/admin/add-news') ? 'active' : '' }}">
                                    <a href="/admin/add-news">
                                        <span class="sidebar-mini">AN</span>
                                        <span class="sidebar-normal">Add New News</span>
                                    </a>
                                </li>
                                <li class="{{ Request::url() == url('/admin/all-news') ? 'active' : '' }}">
                                    <a href="/admin/all-news">
                                        <span class="sidebar-mini">N</span>
                                        <span class="sidebar-normal">All News</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
    
                </li>

                <li>
                        <a data-toggle="collapse" href="#jobs">
                            <i class="material-icons">place</i>
                            <p>Manage Projects
                                <b class="caret"></b>
                            </p>
                        </a>
                      
                        <div class="collapse" id="jobs">
                                <ul class="nav">
                                    <li>
                                        <a href="/admin/add-project">
                                            <span class="sidebar-mini">AP</span>
                                            <span class="sidebar-normal">Add New Project</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/all-project">
                                            <span class="sidebar-mini">P</span>
                                            <span class="sidebar-normal">All Projects</span>
                                        </a>
                                    </li>
                                </ul>             
                            </div>
        
                </li>
              
               
                <li class="{{ Request::url() == url('/admin/user-message') ? 'active' : '' }}">
                        <a data-toggle="collapse" href="#message">
                            <i class="material-icons">message</i>
                            <p>Messages
                                <b class="caret"></b>
                            </p>
                        </a>
                      
                        <div class="collapse" id="message">
                                <ul class="nav">
                                    <li class="{{ Request::url() == url('/admin/user-message') ? 'active' : '' }}">
                                        <a href="/admin/user-message">
                                            <span class="sidebar-mini">AM</span>
                                            <span class="sidebar-normal">See All Messages</span>
                                        </a>
                                    </li>
                                </ul>             
                            </div>
        
                </li>
        </ul>
        @endif
    </div>
</div>