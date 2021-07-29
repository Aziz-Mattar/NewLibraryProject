@extends('layouts/main')
@section('MainContent')
    <form method="post" enctype="multipart/form-data" @if($ac) action="{{URL('book/store')}}"
          id="addform" @else @yield('action') @yield('form') @endif>
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">@lang('dashboard.book.name') : </label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" @yield('Name')>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">@lang('dashboard.book.description') : </label>
            <div class="col-sm-10">
         <textarea name="description" id="description" rows="5" class="form-control"
                   placeholder="Description">@yield('Description')</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="Language" class="col-sm-2 col-form-label">@lang('dashboard.book.Language') : </label>
            <div class="col-sm-10">
                <input type="text" name="Language" class="form-control" id="Language"
                       placeholder="Language" @yield('Language')>
            </div>
        </div>
        <div class="form-group row">
            <label for="release_year" class="col-sm-2 col-form-label">@lang('dashboard.book.release_year') : </label>
            <div class="col-sm-10">
                <input type="number" name="release_year" class="form-control" id="release_year"
                       placeholder="Release Year" @yield('Release Year')>
            </div>
        </div>
        <div class="form-group row">
            <label for="edition_number" class="col-sm-2 col-form-label">@lang('dashboard.book.edition_number') : </label>
            <div class="col-sm-10">
                <input type="number" name="edition_number" class="form-control" id="edition_number"
                       placeholder="Edition Number" @yield('Edition Number')>
            </div>
        </div>
        <div class="form-group row">
            <label for="author" class="col-sm-2 col-form-label">@lang('dashboard.book.author') : </label>
            <div class="col-sm-10">
                <select name="author[]" multiple id="author" class="form-select form-control selectpicker show-tick"
                        data-live-search="true" title="Choose one or more of the following...">
                    @if($ac)
                        @foreach($authors as $author)
                            <option value="{{$author->id}}">{{$author->name}}</option>
                        @endforeach
                    @else
                        @yield('Author')
                    @endif
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="publisher" class="col-sm-2 col-form-label">@lang('dashboard.book.publisher') : </label>
            <div class="col-sm-10">
                <select name="publisher[]" multiple id="publisher"
                        class="form-select form-control selectpicker show-tick" data-live-search="true"
                        title="Choose one or more of the following...">
                    @if($ac)
                        @foreach($publishers as $publisher)
                            <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                        @endforeach
                    @else
                        @yield('Publisher')
                    @endif
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">@lang('dashboard.book.category') : </label>
            <div class="col-sm-10">
                <select name="category[]" multiple id="category" class="form-select form-control selectpicker show-tick"
                        data-live-search="true" title="Choose one or more of the following...">
                    @if($ac)
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    @else
                        @yield('Category')
                    @endif
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">@lang('dashboard.book.image') : </label>
            <div class="col-sm-10">
                <input type="file" name="image" class="form-control" id="image">
            </div>
        </div>
        <div class="form-group row">
            <label for="pdf" class="col-sm-2 col-form-label">@lang('dashboard.book.pdf') : </label>
            <div class="col-sm-10">
                <input type="file" name="pdf" class="form-control" id="pdf">

            </div>
        </div>
        <div class="form-group row">
            <label for="pages" class="col-sm-2 col-form-label">@lang('dashboard.book.pages') : </label>
            <div class="col-sm-10">
                <input type="number" name="pages" class="form-control" id="pages" placeholder="Pages" @yield('Pages')>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" type="button" @if($ac) id="addbutton">@lang('dashboard.book.add')
                @else @yield('ButtonID') > @yield('ButtonName') @endif</button>
        </div>
    </form>
@stop
