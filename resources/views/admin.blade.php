@include('layouts.admin.header')
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                        <a href="https://www.bootstrapdash.com/product/star-admin-pro/?utm_source=organic&amp;utm_medium=banner&amp;utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white me-0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            </div>
            <div>
                <a class="navbar-brand brand-logo" href="index.html">
                    <img src="{{asset('admin/images/logo.svg')}}" alt="logo">
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html">
                    <img src="{{asset('admin/images/logo-mini.svg')}}" alt="logo">
                </a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                    <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">{{Auth::user()->toArray()['name']}}</span></h1>
                    <h3 class="welcome-sub-text">Your performance summary this week </h3>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">Select category</p>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
                                <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
                                <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
                                <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
                                <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
                        <input type="text" class="form-control">
                    </div>
                </li>
                <li class="nav-item">
                    <form class="search-form" action="#">
                        <i class="icon-search"></i>
                        <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                    </form>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                        <i class="icon-mail icon-lg"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item py-3 border-bottom">
                            <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-alert m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                                <p class="fw-light small-text mb-0"> Just now </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-settings m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                                <p class="fw-light small-text mb-0"> Private message </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-airballoon m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                                <p class="fw-light small-text mb-0"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="icon-bell"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{asset('admin/images/faces/face10.jpg')}}" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{asset('admin/images/faces/face12.jpg')}}" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{asset('admin/images/faces/face1.jpg')}}" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="{{asset('admin/images/faces/face8.jpg')}}" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="{{asset('admin/images/faces/face8.jpg')}}" alt="Profile image">
                            <p class="mb-1 mt-3 font-weight-semibold">{{Auth::user()->toArray()['name']}}</p>
                            <p class="fw-light text-muted mb-0">{{Auth::user()->toArray()['email']}}</p>
                        </div>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">

                                <span class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>{{ __('Sign Out') }}</span>
                            </x-dropdown-link>
                        </form>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked="">
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked="">
                                        Project review
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary me-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                        <p class="text-gray mb-0">The total number of sessions</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary me-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="{{asset('admin/images/faces/face1.jpg')}}" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="{{asset('admin/images/faces/face2.jpg')}}" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="{{asset('admin/images/faces/face3.jpg')}}" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="{{asset('admin/images/faces/face4.jpg')}}" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="{{asset('admin/images/faces/face5.jpg')}}" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="{{asset('admin/images/faces/face6.jpg')}}" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-tab">
                            <div class = "container navbarContent border border-2">
                                <div class = "row">
                                    <div class = "col-lg-6 border border-2">
                                        <h3>Navbar menu</h3>
                                    </div>
                                    <div class = "col-lg-6 border border-2"></div>
                                </div>
                                <div class = "row mt-2 border border-2">
                                    <div class = "col-lg-6">
                                        <form>
                                            @csrf
                                            <!-- Home -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Home</span>
                                                        <input type="text" class="Home form-control" placeholder="Home">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger HomeError"></div>
                                            <!-- -->

                                            <!-- Logout -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Logout</span>
                                                        <input type="text" class="Logout form-control" placeholder="Logout">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger LogoutError"></div>
                                            <!-- -->

                                            <!-- NotificationsModalTitle -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">NotificationsModalTitle</span>
                                                        <input type="text" class="UsersByNotifications form-control" placeholder="Title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger UsersByNotificationsError"></div>
                                            <!-- -->

                                            <!-- NotificationsModalAcceptButton -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">NotificationsModalAcceptButton</span>
                                                        <input type="text" class="Accept form-control" placeholder="Button">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger AcceptError"></div>
                                            <!-- -->

                                            <!-- NotificationsModalDestroyButton -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">NotificationsModalDestroyButton</span>
                                                        <input type="text" class="Destroy form-control" placeholder="Button">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger DestroyError"></div>
                                            <!-- -->

                                            <div style = "height:22px" class = "text-info updateNavbarPartSuccess"></div>
                                            <button type="button" style = "margin-bottom:unset;padding:8px 28px" class="UpdateNavbarPartSend btn btn-success d-flex justify-content-center">Update</button>
                                        </form>
                                    </div>
                                    <div class = "col-lg-6">
                                        <form>
                                            @csrf
                                            <!-- AddGroup -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">AddGroup</span>
                                                        <input type="text" class="AddGroup form-control" placeholder="AddGroup">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger AddGroupError"></div>
                                            <!-- -->

                                            <!-- Group -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Group</span>
                                                        <input type="text" class="Group form-control" placeholder="Title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger GroupError"></div>
                                            <!-- -->

                                            <!-- Name -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Name</span>
                                                        <input type="text" class="Name form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger NameError"></div>
                                            <!-- -->

                                            <!-- Add -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Adding</span>
                                                        <input type="text" class="Adding form-control" placeholder="Button">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger AddingError"></div>
                                            <!-- -->

                                            <!-- MyGroups -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">MyGroups</span>
                                                        <input type="text" class="MyGroups form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger MyGroupsError"></div>
                                            <!-- -->

                                            <!-- IdContent -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">IdContent</span>
                                                        <input type="text" class="IdContent form-control" placeholder="Number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger IdContentError"></div>
                                            <!--  -->


                                            <!-- MembersList -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">MembersList</span>
                                                        <input type="text" class="MembersList form-control" placeholder="Button">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger MembersListError"></div>
                                            <!-- -->

                                            <!-- Groups -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Groups</span>
                                                        <input type="text" class="Groups form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger GroupsError"></div>
                                            <!-- -->

                                            <!-- Users -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Users</span>
                                                        <input type="text" class="Users form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger UsersError"></div>
                                            <!-- -->


                                            <!-- Email -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Email</span>
                                                        <input type="text" class="Email form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger EmailError"></div>
                                            <!-- -->

                                            <!-- Expectation -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Expectation</span>
                                                        <input type="text" class="Expectation form-control" placeholder="Content">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger ExpectationError"></div>
                                            <!-- -->

                                            <!-- Accepted -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Accepted</span>
                                                        <input type="text" class="Accepted form-control" placeholder="Content">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger AcceptedError"></div>
                                            <!-- -->

                                            <!-- InviteToGroup -->
                                            <div class = "row">
                                                <div class = "col-lg-9 border border-2 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">InviteToGroup</span>
                                                        <input type="text" class="InviteToGroup form-control" placeholder="Content">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style = "height: 22px" class = "text-danger InviteToGroupError"></div>
                                            <!-- -->

                                            <div style = "height:22px" class = "text-info updateGroupPartSuccess"></div>
                                            <button type="button" style = "margin-bottom:unset;padding:8px 28px" class="UpdateGroupPartSend btn btn-success d-flex justify-content-center">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@include('layouts.admin.footer')



