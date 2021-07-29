@extends('layouts/main')
@section('MainContent')
    <form method="post" enctype="multipart/form-data" action="{{URL('book/update/'.$book->id)}}" id="updateform">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">@lang('dashboard.book.name') : </label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                       value="{{$book->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">@lang('dashboard.book.description') : </label>
            <div class="col-sm-10">
         <textarea name="description" id="description" rows="5" class="form-control"
                   placeholder="Description">{{$book->description}}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="Language" class="col-sm-2 col-form-label">@lang('dashboard.book.Language') : </label>
            <div class="col-sm-10">
                <input type="text" name="Language" class="form-control" id="Language"
                       placeholder="Language" value="{{$book->Language}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="release_year" class="col-sm-2 col-form-label">@lang('dashboard.book.release_year') : </label>
            <div class="col-sm-10">
                <input type="number" name="release_year" class="form-control" id="release_year"
                       placeholder="Release Year" value="{{$book->release_year}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="edition_number" class="col-sm-2 col-form-label">@lang('dashboard.book.edition_number')
                : </label>
            <div class="col-sm-10">
                <input type="number" name="edition_number" class="form-control" id="edition_number"
                       placeholder="Edition Number" value="{{$book->edition_number}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="author" class="col-sm-2 col-form-label">@lang('dashboard.book.author') : </label>
            <div class="col-sm-10">
                <select name="author[]" multiple id="author" class="form-select form-control selectpicker show-tick"
                        data-live-search="true" title="Choose one or more of the following...">
                    @foreach($authors as $aauthor)
                        <option value="{{$aauthor->id}}"
                                @foreach ($book->book_authors as $author)
                                @if (!empty($author->Author))
                                @if ($aauthor->id == $author->Author->id) selected @endif
                            @endif
                            @endforeach
                        >{{$aauthor->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="publisher" class="col-sm-2 col-form-label">@lang('dashboard.book.publisher') : </label>
            <div class="col-sm-10">
                <select name="publisher[]" multiple id="publisher"
                        class="form-select form-control selectpicker show-tick" data-live-search="true"
                        title="Choose one or more of the following...">
                    @foreach($publishers as $ppublisher)
                        <option value="{{$ppublisher->id}}"
                                @foreach ($book->book_publishers as $publisher)
                                @if (!empty($publisher->Publisher))
                                @if ($ppublisher->id == $publisher->Publisher->id) selected @endif
                            @endif
                            @endforeach
                        >{{$ppublisher->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">@lang('dashboard.book.category') : </label>
            <div class="col-sm-10">
                <select name="category[]" multiple id="category" class="form-select form-control selectpicker show-tick"
                        data-live-search="true" title="Choose one or more of the following...">
                    @foreach($categories as $ccategory)
                        <option value="{{$ccategory->id}}"
                                @foreach ($book->book_categorys as $category)
                                @if (!empty($category->Category))
                                @if ($ccategory->id == $category->Category->id) selected @endif
                            @endif
                            @endforeach
                        >{{$ccategory->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        {{--        <div class="form-group row">--}}
        {{--            <label for="image" class="col-sm-2 col-form-label">@lang('dashboard.book.image') : </label>--}}
        {{--            <div class="col-sm-10">--}}
        {{--                <input type="file" name="image" class="form-control" id="image">--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="form-group row">--}}
        {{--            <label for="pdf" class="col-sm-2 col-form-label">@lang('dashboard.book.pdf') : </label>--}}
        {{--            <div class="col-sm-10">--}}
        {{--                <input type="file" name="pdf" class="form-control" id="pdf">--}}

        {{--            </div>--}}
        {{--        </div>--}}
        <div class="form-group row">
            <label for="pages" class="col-sm-2 col-form-label">@lang('dashboard.book.pages') : </label>
            <div class="col-sm-10">
                <input type="number" name="pages" class="form-control" id="pages" placeholder="Pages"
                       value="{{$book->pages}}">
            </div>
        </div>
        <div>
            <button class="btn btn-primary" type="button" id="updatebutton">@lang('dashboard.book.edit')
                </button>
            </div>
    </form>
@stop
{{--@extends('control_panel.book.create')--}}

{{--@section('form')--}}
{{--    id="updateform"--}}
{{--@stop--}}
{{--@section('action')--}}
{{--    action="{{URL('book/update/'.$book->id)}}"--}}
{{--@stop--}}
{{--@section('Name')--}}
{{--    value="{{$book->name}}"--}}
{{--@stop--}}
{{--@section('Description')--}}
{{--    {{$book->description}}--}}
{{--@stop--}}
{{--@section('Language')--}}
{{--    value="{{$book->Language}}"--}}
{{--@stop--}}
{{--@section('Release Year')--}}
{{--    value="{{$book->release_year}}"--}}
{{--@stop--}}
{{--@section('Edition Number')--}}
{{--    value="{{$book->edition_number}}"--}}
{{--@stop--}}
{{--@section('Author')--}}
{{--    @foreach($authors as $aauthor)--}}
{{--        <option value="{{$aauthor->id}}"--}}
{{--                @foreach ($book->book_authors as $author)--}}
{{--                @if (!empty($author->Author))--}}
{{--                @if ($aauthor->id == $author->Author->id) selected @endif--}}
{{--            @endif--}}
{{--            @endforeach--}}
{{--        >{{$aauthor->name}}</option>--}}
{{--    @endforeach--}}
{{--@stop--}}
{{--@section('Publisher')--}}
{{--    @foreach($publishers as $ppublisher)--}}
{{--        <option value="{{$ppublisher->id}}"--}}
{{--                @foreach ($book->book_publishers as $publisher)--}}
{{--                @if (!empty($publisher->Publisher))--}}
{{--                @if ($ppublisher->id == $publisher->Publisher->id) selected @endif--}}
{{--            @endif--}}
{{--            @endforeach--}}
{{--        >{{$ppublisher->name}}</option>--}}
{{--    @endforeach--}}
{{--@stop--}}
{{--@section('Category')--}}
{{--    @foreach($categories as $ccategory)--}}
{{--        <option value="{{$ccategory->id}}"--}}
{{--                @foreach ($book->book_categorys as $category)--}}
{{--                @if (!empty($category->Category))--}}
{{--                @if ($ccategory->id == $category->Category->id) selected @endif--}}
{{--            @endif--}}
{{--            @endforeach--}}
{{--        >{{$ccategory->name}}</option>--}}
{{--    @endforeach--}}
{{--@stop--}}
{{--@section('Pages')--}}
{{--    value="{{$book->pages}}"--}}
{{--@stop--}}
{{--@section('ButtonID')--}}
{{--    id="updatebutton"--}}
{{--@stop--}}
{{--@section('ButtonName')--}}
{{-- @lang('dashboard.book.edit')   --}}
{{--@stop--}}
