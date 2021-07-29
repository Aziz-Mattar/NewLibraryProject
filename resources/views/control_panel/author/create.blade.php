@extends('layouts/main') @section('MainContent')
    <form method="post" enctype="multipart/form-data" @if($ac) action="{{URL('author/store')}}"
          id="addform" @else @yield('action') @yield('form') @endif>
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">@lang('dashboard.author.name') : </label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="name"
                    @yield('NameInput')>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">@lang('dashboard.author.Description') : </label>
            <div class="col-sm-10">
         <textarea name="description" id="description" rows="5" class="form-control"
                   placeholder="Description">@yield('DescriptionTextArea')</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="date_of_birth" class="col-sm-2 col-form-label">@lang('dashboard.author.Date of Date') : </label>
            <div class="col-sm-10">
                <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                       placeholder="Date of Birth" @yield('DateOfBirth')>
            </div>
        </div>
        <div class="form-group row">
            <label for="nationality" class="col-sm-2 col-form-label">@lang('dashboard.author.nationality') : </label>
            <div class="col-sm-10">
                <select name="nationality" id="nationality" class="form-select form-control selectpicker show-tick"
                        data-live-search="true" title="Nationality">
                    @if($ac)
                        @foreach($nationalites as $nationality)
                            <option value="{{ strtolower($nationality) }}">{{strtolower($nationality)}}</option>
                        @endforeach
                    @else @yield('Nationality')
                    @endif
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">@lang('dashboard.author.image') : </label>
            <div class="col-sm-10">
                <input type="file" name="image" class="form-control" id="image">
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-primary"
                    @if($ac) id="addbutton"> @lang('dashboard.author.save') @else @yield('ButtonID') > @yield('ButtonName') @endif
            </button>
        </div>
    </form>
@stop

