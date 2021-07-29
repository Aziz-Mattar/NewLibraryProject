<!DOCTYPE html>
<html lang="en" dir="ltr" style="transform: none;">
<head>
    <title>Maktaba Library</title>
    @include('includes.LibraryStyle')
    @include('includes.LibraryJS')
</head>
<body style="transform: none;">
<div style="display: none;" id="bar" class="bar"></div>
@include('includes.navbar')
<style>
    .home-search-section {
        background: url(https://www.nourbook.com/publice/images/covers/2.svg)
    }
</style>
<div style="background:#45b09e;">
    <div class="home-search-section">
        <div class="child-home-search-section">
            <div class="container">
                <div class="content-home-search-section">
                    <div class="home_titles">
                        <h1>Maktaba Library</h1>
                    </div>
                    <form action="{{URL('search')}}" method="get">
                        <div class="form-group" style="position:relative;">
                            @csrf
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
                    @if($page == 'author')
                    @foreach ($books as $book)
                        @if (!empty($book->book_authors))
                            @foreach ($book->book_authors as $book_author)
                                @if (!empty($book_author->author))
                                    @include('includes.card')
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    @elseif($page == 'category')
                        @foreach ($books as $book)
                            @if (!empty($book->book_categorys))
                                @foreach ($book->book_categorys as $book_category)
                                    @if (!empty($book_category->category))
                                        @include('includes.card')
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    @elseif($page == 'publisher')
                        @foreach ($books as $book)
                            @if (!empty($book->book_publishers))
                                @foreach ($book->book_publishers as $book_publisher)
                                    @if (!empty($book_publisher->publisher))
                                        @include('includes.card')
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    @elseif($page == 'book')
                        @foreach ($books as $book)
                            @if (!empty($book->book_authors))

                            @include('includes.card')
                            @endif
                        @endforeach
                    @elseif($page == 'authors')
                        @foreach($authorss as $author_s)
                            <div class="row">
                                <div class="clearfix"></div>
                                <h4>{{$author_s}}</h4>
                                <div class="clearfix"></div>
                            </div>
                            @foreach ($books as $book)
                                @if (!empty($book->book_authors))
                                    @foreach ($book->book_authors as $book_author)
                                        @if (!empty($book_author->author))
                                            @if($book_author->author->name == $author_s)

                                                @include('includes.card')
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach
                    @elseif($page == 'categories')
                        @foreach($categoriess as $categories_s)
                            <div class="row">
                                <div class="clearfix"></div>
                                <h4>{{$categories_s}}</h4>
                                <div class="clearfix"></div>
                            </div>
                            @foreach ($books as $book)
                                @if (!empty($book->book_categorys))
                                    @foreach ($book->book_categorys as $book_category_s)
                                        @if (!empty($book_category_s->category))
                                            @if($book_category_s->category->name == $categories_s)
                                                @include('includes.card')
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach
                    @elseif($page == 'publishers')
                        @foreach($publisherss as $publishers_s)
                            <div class="row">
                                <div class="clearfix"></div>
                                <h4>{{$publishers_s}}</h4>
                                <div class="clearfix"></div>
                            </div>
                            @foreach ($books as $book)
                                @if (!empty($book->book_publishers))
                                    @foreach ($book->book_publishers as $book_publisher_s)
                                        @if (!empty($book_publisher_s->publisher))
                                            @if($book_publisher_s->publisher->name == $publishers_s)
                                                @include('includes.card')
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach
                    @endif
                </div>
                <div class="clearfix"></div>
            </div>
            @if($page == 'book')
                @include('includes.leftSideBar')
            @endif
        </div>
    </div>
    <div>
        @if($page == 'book')
            {{$books->links()}}
        @endif
    </div>
</div>
</div>
@include('includes.end')
