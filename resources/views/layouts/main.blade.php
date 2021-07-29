<!doctype html>
@if(App::isLocale('ar'))
    <html dir="rtl" lang="ar">
    @elseif(App::isLocale('en'))
        <html dir="ltr" lang="en">
        @endif
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
            @include('includes/AppStyle')
        </head>
        <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper">
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item nav-profile">
                            <a href="#" class="nav-link">
                                <div class="nav-profile-image">
                                    <img src="{{asset('images/faces-clipart/pic-1.png')}}">
                                    <span class="login-status online"></span>
                                </div>
                                <div class="nav-profile-text d-flex flex-column">
                                    <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                                    <span class="text-secondary text-small">Website Manager</span>
                                </div>
                                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @lang('dashboard.sidebar.Logout') <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @lang('dashboard.book.Language') <span class="caret"></span>
                            </a>
                            @if(Route::currentRouteName()=='author.edit')
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"
                                       href="{{ route(Route::currentRouteName(), ['language' => 'ar', 'id' => $author->id]) }}">عربي</a>
                                    <a class="dropdown-item"
                                       href="{{ route(Route::currentRouteName(), ['language' => 'en', 'id' => $author->id]) }}">English</a>
                                </div>
                            @elseif(Route::currentRouteName()=='book.edit')
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"
                                       href="{{ route(Route::currentRouteName(), ['language' => 'ar', 'id' => $book->id]) }}">عربي</a>
                                    <a class="dropdown-item"
                                       href="{{ route(Route::currentRouteName(), ['language' => 'en', 'id' => $book->id]) }}">English</a>
                                </div>
                            @elseif(Route::currentRouteName()=='category.edit')
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"
                                       href="{{ route(Route::currentRouteName(), ['language' => 'ar', 'id' => $category->id]) }}">عربي</a>
                                    <a class="dropdown-item"
                                       href="{{ route(Route::currentRouteName(), ['language' => 'en', 'id' => $category->id]) }}">English</a>
                                </div>
                            @elseif(Route::currentRouteName()=='publisher.edit')
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"
                                       href="{{ route(Route::currentRouteName(), ['language' => 'ar', 'id' => $publisher->id]) }}">عربي</a>
                                    <a class="dropdown-item"
                                       href="{{ route(Route::currentRouteName(), ['language' => 'en', 'id' => $publisher->id]) }}">English</a>
                                </div>
                            @else
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"
                                       href="{{ route(Route::currentRouteName(), ['language' => 'ar']) }}">عربي</a>
                                    <a class="dropdown-item"
                                       href="{{ route(Route::currentRouteName(), ['language' => 'en']) }}">English</a>
                                </div>
                            @endif
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard',app()->getLocale())}}">
                                <span class="menu-title">@lang('dashboard.sidebar.dashboard')</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ManageBooks" aria-expanded="false"
                               aria-controls="ManageBooks">
                                <span class="menu-title">@lang('dashboard.sidebar.Manage Books')</span>
                                <i class="menu-arrow"></i>
                                <i class="mdi mdi-book-open-variant menu-icon"></i>
                            </a>
                            <div class="collapse" id="ManageBooks">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"><a class="nav-link" id="1"
                                                            href="{{route('book.create',app()->getLocale())}}">@lang('dashboard.sidebar.Add') </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                                            href="{{route('book.index',app()->getLocale())}}"> @lang('dashboard.sidebar.View') </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ManageAuthors" aria-expanded="false"
                               aria-controls="ManageAuthors">
                                <span class="menu-title">@lang('dashboard.sidebar.Manage Authors')</span>
                                <i class="menu-arrow"></i>
                                <i class="mdi mdi-account-circle menu-icon"></i>
                            </a>
                            <div class="collapse" id="ManageAuthors">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"><a class="nav-link" id="2"
                                                            href="{{route('author.create',app()->getLocale())}}">@lang('dashboard.sidebar.Add') </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                                            href="{{route('author.index',app()->getLocale())}}"> @lang('dashboard.sidebar.View') </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ManagePublishers" aria-expanded="false"
                               aria-controls="ManagePublishers">
                                <span class="menu-title">@lang('dashboard.sidebar.Manage Publishers')</span>
                                <i class="menu-arrow"></i>
                                <i class="mdi mdi-library menu-icon"></i>
                            </a>
                            <div class="collapse" id="ManagePublishers">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"><a class="nav-link" id="3"
                                                            href="{{route('publisher.create',app()->getLocale())}}">@lang('dashboard.sidebar.Add') </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                                            href="{{route('publisher.index',app()->getLocale())}}"> @lang('dashboard.sidebar.View') </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ManageCategories" aria-expanded="false"
                               aria-controls="ManageCategories">
                                <span class="menu-title">@lang('dashboard.sidebar.Manage Categories') </span>
                                <i class="menu-arrow"></i>
                                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                            </a>
                            <div class="collapse" id="ManageCategories">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"><a class="nav-link" id="4"
                                                            href="{{route('category.create',app()->getLocale())}}">@lang('dashboard.sidebar.Add') </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                                            href="{{route('category.index',app()->getLocale())}}"> @lang('dashboard.sidebar.View') </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="main-panel">
                    <div class="content-wrapper containerA">
                        <div class="card bg-gradient-warning">
                            <div class="card-body">
                                <div class="container">


                                    <div class="row">
                                        <div class="col-12">
                                            @if (session()->has('add_status'))
                                                @if (session('add_status'))
                                                    <div class="alert alert-success">Added Successfully</div>
                                                @else
                                                    <div class="alert alert-danger">Add Failed</div>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            @if (session()->has('update_status'))
                                                @if (session('update_status'))
                                                    <div class="alert alert-success">Edited Successfully</div>
                                                @else
                                                    <div class="alert alert-danger">Edit Failed</div>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            @if (session()->has('delete_status'))
                                                @if (session('delete_status'))
                                                    <div class="alert alert-success">Deleted Successfully</div>
                                                @else
                                                    <div class="alert alert-danger">Delete Failed</div>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            @foreach ($errors->all() as $message)
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @endforeach
                                        </div>
                                    </div>

                                    @yield('MainContent')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </body>
        @include('includes/AppJS')
        </html>
