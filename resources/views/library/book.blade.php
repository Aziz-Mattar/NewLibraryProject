<!DOCTYPE html>
<html lang="en" dir="ltr" style="transform: none;">
<head>
    <title>Book Detail</title>
    @include('includes.LibraryStyle') @include('includes.LibraryJS')
</head>
<body style="transform: none;">
<div style="display: none;" id="bar" class="bar">
    <div></div>
</div>
<div class="top_bar"></div>
@include('includes.navbar')
<div class="container" style="transform: none;">
    <div itemscope="" itemtype="http://schema.org/Book" class="book_results" style="transform: none;">
        <div class="row wrapper" style="transform: none;">
            <div class="col-md-9 content"
                 style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="theiaStickySidebar"
                     style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                    <div style="overflow:visible;" class="the-box desk-book-view p-0">
                        <div class="p-30">
                            <div class="media">
                                <div class="media-left">
                                    <div class="book_page_img_container_parent">
                                        <div style="background:rgba(253,121,168,.4)"
                                             class="book_page_img_container">
                                            <picture style="align-self:center;">
                                                <img itemprop="image" class="media-object" loading="eager"
                                                     title="{{$book1->name}}" alt="{{$book1->name}}"
                                                     src="{{$book1->image}}">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h1 itemprop="name" class="under_img_title media-heading">
                                        {{ $book1->name }}
                                    </h1>
                                    <div class="naskh-r f-s-20">
                                        <table class="book_data_table">
                                            <tbody>
                                            <tr>
                                                <td><span>Author<span class="pull-left">:</span></span>
                                                </td>
                                                <td itemprop="author" itemscope=""
                                                    itemtype="http://schema.org/Person"><span itemprop="name"
                                                                                              id="book-writer">
                                                @foreach ($book1->book_authors as $author)
                                                            @if (!empty($author->Author))
                                                                {{ $author->Author->name }}
                                                                @if(!$loop->last)
                                                                    {{'+'}}
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span>Publisher<span class="pull-left">:</span></span>
                                                </td>
                                                <td>
                                                <span id="book-category">
                                                @foreach ($book1->book_publishers as $publisher)
                                                        @if (!empty($publisher->Publisher))
                                                            {{ $publisher->Publisher->name }}
                                                            @if(!$loop->last)
                                                                {{'+'}}
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span>Language<span class="pull-left">:</span></span>
                                                </td>
                                                <td><span itemprop="inLanguage"
                                                          id="book-category">{{$book1->Language}}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span>Category<span class="pull-left">:</span></span>
                                                </td>
                                                <td><span id="book-publisher">
                                                @foreach ($book1->book_categorys as $category)
                                                            @if (!empty($category->Category))
                                                                {{ $category->Category->name }}
                                                                @if(!$loop->last)
                                                                    {{'+'}}
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span>Release Date<span class="pull-left">:</span></span>
                                                </td>
                                                <td><span id="book-publisher">{{$book1->created_at}}</span></td>
                                            </tr>
                                            <tr>
                                                <td><span>Pages<span class="pull-left">:</span></span>
                                                </td>
                                                <td itemprop="numberOfPages">{{$book1->pages}}</td>
                                            </tr>
                                            <tr>
                                                <td><span>View<span class="pull-left">:</span></span>
                                                </td>
                                                <td><a href="{{url('/view',$book1->id)}}" target="_blank">Click Here</a></td>
                                            </tr>
                                            <tr>
                                                <td><span>Download<span class="pull-left">:</span></span>
                                                </td>
                                                <td><a href="{{url('/download',$book1->pdf)}}">Download</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="remove_edge">
                        <div style="" class="the-box single_user_view_box">
                            <div itemprop="author" itemscope="" itemtype="http://schema.org/Person"
                                 class="media chat_style">
                                <div class="media-body">
                                    <h4 itemprop="name" class="media-heading"> About The Book </h4>
                                    <div class="media_content">
                                        <p class="naskh-r m-b-0 f-s-18">
                                       <span itemprop="description">
                                       <span class="more" style="display: inline;">
                                       {{$book1->description}}
                                       </span>
                                       </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($book1->book_authors as $author) @if (!empty($author->Author))
                        <div class="remove_edge">
                            <div style="" class="the-box single_user_view_box">
                                <div itemprop="author" itemscope="" itemtype="http://schema.org/Person"
                                     class="media chat_style">
                                    <div class="media-left media-top the_upload_book">
                                        <img itemprop="image" alt="{{ $author->Author->name }}" loading="eager"
                                             style="width:70px;height:70px;"
                                             src="{{ \Illuminate\Support\Facades\Storage::URL($author->Author->image) }}"
                                             class="media-object avatar_uploader_book_view">
                                    </div>
                                    <div class="media-body">
                                        <h4 itemprop="name" class="media-heading"> About The Author </h4>
                                        <div class="media_content">
                                            <p class="naskh-r m-b-0 f-s-18">
                                       <span itemprop="description">
                                       <span class="more" style="display: inline;">
                                       {{$author->Author->description}}
                                       </span>
                                       </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class=" f-s-22 black-color m-b-10 m-t-20">Other
                            books for {{$author->Author->name}}
                        </h2>
                        <div class="row">
                            @for($i = 0; $i < 4; $i++)
                                <div itemscope="" itemtype="https://schema.org/Collection"
                                     class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                    <div class="book-restult" itemscope="" itemtype="http://schema.org/Book">
                                        <a class="img-a">
                                            <div class="book_photo_container_results"
                                                 style="background:rgba(127,140,141,.4)">
                                                <div class="f_p_p">
                                                    <picture>

                                                        <img itemprop="image" loading="lazy" title="Book Name"
                                                             alt="Book Name"
                                                             src="{{$book1->image}}">
                                                    </picture>
                                                </div>
                                            </div>
                                        </a>
                                        <h3 itemprop="name"> Book Name</h3>
                                        <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                 <p itemprop="name"> Author Name</p>
                              </span>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    @endif
                    @endforeach
                    @foreach($book1->book_categorys as $category)
                        <h2 class="f-s-22 black-color m-b-10 m-t-20">Other books
                            in {{ $category->Category->name }}
                        </h2>
                        <div class="row">
                            @for($i = 0; $i < 4; $i++)
                                <div itemscope="" itemtype="https://schema.org/Collection"
                                     class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                    <div class="book-restult" itemscope="" itemtype="http://schema.org/Book">
                                        <a class="img-a">
                                            <div class="book_photo_container_results"
                                                 style="background:rgba(127,140,141,.4)">
                                                <div class="f_p_p">
                                                    <picture>

                                                        <img itemprop="image" loading="lazy" title="Book Name"
                                                             alt="Book Name"
                                                             src="{{$book1->image}}">
                                                    </picture>
                                                </div>
                                            </div>
                                        </a>
                                        <h3 itemprop="name"> Book Name</h3>
                                        <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                 <p itemprop="name"> Author Name</p>
                              </span>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    @endforeach
                </div>
            </div>
            <div style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;"
                 class="col-md-3 side-col sidebar">
                <div class=" theiaStickySidebar"
                     style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 1067.1px;">
                    <div class="sidenav">
                        <h3 class="u-line head_side"><a href="{{URL('categories')}}"
                                                        class="black-color">Book
                                Categories</a><span class="pull-left"
                                                    style="display:inline-block;cursor:pointer;"><span
                                    data-toggle="modal" data-target="#seachModal" title="Search for Category"><i
                                        class="fa fa-search"></i></span></span>
                        </h3>
                        <div class="side_results">
                            @foreach($categories as $category)
                                <a href="{{URL('books_categories').'/'.$category->name}}"><i
                                        class="fa fa-book"></i>{{$category->name}}</a> @endforeach
                            <a class="more_categories" href="{{URL('categories')}}">More of
                                Book
                                Categories</a>
                        </div>
                    </div>
                    <div class="sidenav m-t-30 m-b-10">
                        <h3 class="u-line head_side"><a href="{{URL('authors')}}" class="black-color">Authors of
                                books</a><span class="pull-left" style="display:inline-block;cursor:pointer;"><span
                                    data-toggle="modal" data-target="#seachModal" title="Search for Author"><i
                                        class="fa fa-search"></i></span></span>
                        </h3>
                        <div class="side_results">
                            @foreach($authors as $author)
                                <a href="{{URL('books_authors').'/'.$author->name}}"><i
                                        class="fa fa-book"></i>{{$author->name}}</a> @endforeach
                            <a class="more_categories" href="{{URL('authors')}}">More
                                of Authors of books</a>
                        </div>
                    </div>
                    <div class="resize-sensor"
                         style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                        <div class="resize-sensor-expand"
                             style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div
                                style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 303px; height: 2276px;"></div>
                        </div>
                        <div class="resize-sensor-shrink"
                             style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div
                                style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('includes.end')
