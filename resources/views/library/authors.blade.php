<!DOCTYPE html>
<html lang="en" dir="ltr" style="transform: none;">
<head>
    <title>Authors</title>
    @include('includes.LibraryStyle')
    @include('includes.LibraryJS')
</head>
<body style="transform: none;">
<div style="display: none;" id="bar" class="bar">
    <div></div>
</div>
<div class="top_bar"></div>
@include('includes.navbar')
<div class="container" style="transform: none;">
    <h1 style="line-height:1.3" class="u-line f-s-25">Authors of
        books<br>
    </h1>
    <div class="book_results" style="transform: none;">
        <div class="row" style="transform: none;">
            <div class="col-md-9">
                <div class="m-b-30">
                    <div class="form-group search_form_group">
                        <form action="{{URL('books_authors')}}" method="GET">
                            <input
                                style="height:55px;" placeholder="Search for author" type="text"
                                class="form-control input-lg " name="search" required="" autocomplete="off"
                                value="">
                            <div class="btn-div">
                                <button class="btn btn-md btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row book_rows">
                    @foreach($authors as $author)
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                            <a class="writer-box"
                               title="{{$author->name}}"
                               href="{{URL('books_authors').'/'.$author->name}}">
                                <div class="book-restult">
                                    <div class="writer_avatar">
                                        <img loading="lazy" class="writer_avatar" title="{{$author->name}}"
                                             alt="{{$author->name}}" src="{{$author->image}}">
                                    </div>
                                    <h3>{{$author->name}}</h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            @include('includes.leftSideBar')
        </div>
    </div>
    <div>
        {{$authors->links()}}
    </div>
</div>
@include('includes.end')
