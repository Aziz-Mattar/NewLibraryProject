<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Publishers</title>
    @include('includes.LibraryStyle')
    @include('includes.LibraryJS')
</head>
<body>
<div style="display: none;" id="bar" class="bar">
    <div></div>
</div>
<div class="top_bar"></div>
@include('includes.navbar')
<style>.main_and_sec_categories h2 {
        margin: 0;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 10px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        line-height: 2.2
    }
    .main_and_sec_categories h3 {
        margin: 0;
        font-size: 15px;
        font-family: 'Noto Naskh Arabic', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        line-height: 2.2
    }
    .main_and_sec_categories h3:hover {
        background: #f1f1f1;
        border-radius: 29px;
        font-weight: bold
    }
</style>
<div class="container main_and_sec_categories">
    <center>
        <h1 style="line-height:1.3" class="f-s-25">Book Publishers</h1>
    </center>
    <div class="m-b-30">
        <div class="form-group search_form_group">
            <form action="{{URL('books_publishers')}}" method="get">
                <input style="height:55px;"
                       placeholder="Search for publisher"
                       type="text"
                       class="form-control input-lg "
                       name="search"
                       required=""
                       autocomplete="off"
                       value="">
                <div class="btn-div">
                    <button class="btn btn-md btn-default"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="the-box">
        <h2><i class="fa fa-book"></i> Book Publishers
        </h2>
        <div class="row">
            @foreach($publishers as $publisher)
                <a href="{{URL('books_publishers').'/'.$publisher->name}}">
                    <h3 class="col-lg-3 col-md-4 col-xs-6">{{$publisher->name}}</h3>
                </a>
            @endforeach
        </div>
    </div>
</div>
</div>
@include('includes.end')
