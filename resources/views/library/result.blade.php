<!DOCTYPE html>
<html lang="en" dir="ltr" style="transform: none;">
<head>
    <title>Result</title>
    @include('includes.LibraryStyle')
    @include('includes.LibraryJS')
</head>
<body style="transform: none;">
<div style="display: none;" id="bar" class="bar"></div>
@include('includes.navbar')
<div id="seachModal" class="modal fade login-modal" role="dialog">
    <div class="modal-dialog">
        <form action="{{URL('search')}}" method="get">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-remove"></i>
                    </button>
                    <h4 class="modal-title">Search for a book</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" style="margin-bottom:0!important">
                                <input autofocus=""
                                       data-modalfocus=""
                                       style="height:55px;"
                                       placeholder="Search for Book, Author or Category"
                                       type="text"
                                       class="form-control input-lg search_for"
                                       name="search_for"
                                       id="search_for"
                                       required=""
                                       autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button stop_loader="true" type="submit"
                            class="btn btn-default noor-btn noor-btn-b pull-right btn-lg btn-block"><i
                            class="fa fa-search"></i> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<style>
    .home-search-section {
        background: url(https://www.nourbook.com/publice/images/covers/2.svg)
    }
    .quiz {
        background: url(https://www.nourbook.com/publice/images/Shiny_Overlay.svg)
    }
</style>
<div style="background:#45b09e;">
    <div class="home-search-section">
        <div class="child-home-search-section">
            <div class="container">
                <div class="content-home-search-section">
                    <div class="home_titles">
                        <h1>Search Results For</h1>
                        <h2> {{$result}}</h2>
                    </div>
                    <form action="{{URL('search')}}" method="get">
                        <div class="form-group" style="position:relative;">
                            <input style="height:60px;"
                                   placeholder="Search for Book, Author or Category"
                                   type="text"
                                   class="form-control input-lg home_search_for"
                                   name="search_for" id="search_for"
                                   required="" autocomplete="off">
                            <button stop_loader="true" type="submit"
                                    class="btn btn-default noor-btn-b noor-btn home-search-submit-btn">&nbsp; Search
                                &nbsp;
                            </button>
                            <i class="fa fa-search home_search_for-i"></i>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="transform: none;">
    <div class="book_results" style="transform: none;">
        <div class="row"></div>
        <div class="row" style="transform: none;">
            <div class="col-md-9">
                <div class="row book_rows">
                    <div id="paid_books"></div>
                    <h4>Search Results in Books for {{$result}}</h4>
                    @foreach ($bookss as $book)
                        <div itemscope="" itemtype="https://schema.org/Collection"
                             class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                            <div class="book-restult" itemscope="" itemtype="http://schema.org/Book">
                                <a class="img-a" title="{{$book->name}}"
                                   href="{{URL('books/').'/'.$book->id}}">
                                    <div class="book_photo_container_results"
                                         style="background:rgba(85,239,196,.4)">
                                        <div class="f_p_p">
                                            <picture>
                                                <img src="{{ $book->image }}">
                                            </picture>
                                        </div>
                                    </div>
                                </a>
                                <a href="{{URL('library')}}">
                                    <h3 itemprop="name">{{$book->name}}</h3>
                                </a>
                                <span itemprop="author" itemscope=""
                                      itemtype="http://schema.org/Person">
                              <p
                                  itemprop="name">
                                 @foreach ($book->book_authors as $author)
                                      @if (!empty($author->Author))
                                          {{ $author->Author->name }}
                                          @if(!$loop->last)
                                              {{'+'}}
                                          @endif
                                      @endif
                                  @endforeach
                              </p>
                                    </a>
                           </span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row book_rows">
                    <div id="paid_books"></div>
                    <h4>Search Results in Authors for {{$result}}</h4>
                    @foreach ($books as $book)
                        @if (!empty($book->book_authors))
                            @foreach ($book->book_authors as $book_author)
                                @if (!empty($book_author->author))
                                    <div itemscope="" itemtype="https://schema.org/Collection"
                                         class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                        <div class="book-restult" itemscope="" itemtype="http://schema.org/Book">
                                            <a class="img-a" title="{{$book->name}}"
                                               href="{{URL('books/').'/'.$book->id}}">
                                                <div class="book_photo_container_results"
                                                     style="background:rgba(85,239,196,.4)">
                                                    <div class="f_p_p">
                                                        <picture>
                                                            <img src="{{ $book->image }}">
                                                        </picture>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{URL('library')}}">
                                                <h3 itemprop="name">{{$book->name}}</h3>
                                            </a>
                                            <span itemprop="author" itemscope=""
                                                  itemtype="http://schema.org/Person">
                              <p
                                  itemprop="name">
                                 @foreach ($book->book_authors as $author)
                                      @if (!empty($author->Author))
                                          {{ $author->Author->name }}
                                          @if(!$loop->last)
                                              {{'+'}}
                                          @endif
                                      @endif
                                  @endforeach
                              </p>
                                                </a>
                           </span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
                <div class="row book_rows">
                    <div id="paid_books"></div>
                    <h4>Search Results in Categories for {{$result}}</h4>
                    @foreach ($books as $book)
                        @if (!empty($book->book_categorys))
                            @foreach ($book->book_categorys as $book_category)
                                @if (!empty($book_category->category))
                                    <div itemscope="" itemtype="https://schema.org/Collection"
                                         class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                        <div class="book-restult" itemscope="" itemtype="http://schema.org/Book">
                                            <a class="img-a" title="{{$book->name}}"
                                               href="{{URL('books/').'/'.$book->id}}">
                                                <div class="book_photo_container_results"
                                                     style="background:rgba(85,239,196,.4)">
                                                    <div class="f_p_p">
                                                        <picture>
                                                            <img src="{{ $book->image }}">
                                                        </picture>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{URL('library')}}">
                                                <h3 itemprop="name">{{$book->name}}</h3>
                                            </a>
                                            <span itemprop="author" itemscope=""
                                                  itemtype="http://schema.org/Person">
                              <p
                                  itemprop="name">
                                 @foreach ($book->book_authors as $author)
                                      @if (!empty($author->Author))
                                          {{ $author->Author->name }}
                                          @if(!$loop->last)
                                              {{'+'}}
                                          @endif
                                      @endif
                                  @endforeach
                              </p>
                                                </a>
                           </span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
                <div class="row book_rows">
                    <div id="paid_books"></div>
                    <h4>Search Results in Publishers for {{$result}}</h4>
                    @foreach ($books as $book)
                        @if (!empty($book->book_publishers))
                            @foreach ($book->book_publishers as $book_publisher)
                                @if (!empty($book_publisher->publisher))
                                    <div itemscope="" itemtype="https://schema.org/Collection"
                                         class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                        <div class="book-restult" itemscope="" itemtype="http://schema.org/Book">
                                            <a class="img-a" title="{{$book->name}}"
                                               href="{{URL('books/').'/'.$book->id}}">
                                                <div class="book_photo_container_results"
                                                     style="background:rgba(85,239,196,.4)">
                                                    <div class="f_p_p">
                                                        <picture>
                                                            <img src="{{ $book->image }}">
                                                        </picture>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{URL('library')}}">
                                                <h3 itemprop="name">{{$book->name}}</h3>
                                            </a>
                                            <span itemprop="author" itemscope=""
                                                  itemtype="http://schema.org/Person">
                              <p
                                  itemprop="name">
                                 @foreach ($book->book_authors as $author)
                                      @if (!empty($author->Author))
                                          {{ $author->Author->name }}
                                          @if(!$loop->last)
                                              {{'+'}}
                                          @endif
                                      @endif
                                  @endforeach
                              </p>
                                                </a>
                           </span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
                <div class="clearfix"></div>
            </div>
            @include('includes.leftSideBar')
        </div>
    </div>
</div>
</div>
@include('includes.end')
