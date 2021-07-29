@extends('layouts/main') @section('MainContent')
    <form method="post" enctype="multipart/form-data" action="{{URL('author/update/'.$author->id)}}" id="updateform">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">@lang('dashboard.author.name') : </label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="name"
                       value="{{$author->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">@lang('dashboard.author.Description') : </label>
            <div class="col-sm-10">
         <textarea name="description" id="description" rows="5" class="form-control"
                   placeholder="Description">{{$author->description}}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="date_of_birth" class="col-sm-2 col-form-label">@lang('dashboard.author.Date of Date') : </label>
            <div class="col-sm-10">
                <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                       placeholder="Date of Birth" value="{{$author->date_of_birth}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="nationality" class="col-sm-2 col-form-label">@lang('dashboard.author.nationality') : </label>
            <div class="col-sm-10">
                <select name="nationality" id="nationality" class="form-select form-control selectpicker show-tick"
                        data-live-search="true" title="Nationality">
                    @foreach($nationalites as $nationality)
                        <option value="{{strtolower($nationality)}}"
                                @if(strtolower($nationality) == strtolower($author->nationality)) selected @endif>{{strtolower($nationality)}}</option>
                    @endforeach
                </select>
            </div>
        </div>
{{--        <div class="form-group row">--}}
{{--            <label for="image" class="col-sm-2 col-form-label">@lang('dashboard.author.image') : </label>--}}
{{--            <div class="col-sm-10">--}}
{{--                <input type="file" name="image" class="form-control" id="image">--}}
{{--            </div>--}}
{{--        </div>--}}
        <div>
            <button type="button" class="btn btn-primary" id="updatebutton">
                @lang('dashboard.author.edit')
            </button>
        </div>
    </form>
@stop




{{--@extends('control_panel.author.create')--}}
{{--@section('form')--}}
{{--    id="updateform"--}}
{{--@stop--}}
{{--@section('action')--}}
{{--    action="{{URL('author/update/'.$author->id)}}"--}}
{{--@stop--}}
{{--@section('NameInput')--}}
{{--    value="{{$author->name}}"--}}
{{--@stop--}}
{{--@section('DescriptionTextArea')--}}
{{--    {{$author->description}}--}}
{{--@stop--}}
{{--@section('DateOfBirth')--}}
{{--    value="{{$author->date_of_birth}}"--}}
{{--@stop--}}
{{--@section('Nationality')--}}
{{--    @foreach($nationalites as $nationality)--}}
{{--        <option value="{{strtolower($nationality)}}"--}}
{{--                @if(strtolower($nationality) == strtolower($author->nationality)) selected @endif>{{strtolower($nationality)}}</option>--}}
{{--    @endforeach--}}
{{--@stop--}}
{{--@section('ButtonID')--}}
{{--    id="updatebutton"--}}
{{--@stop--}}
{{--@section('ButtonName')--}}
{{--    @lang('dashboard.author.edit')--}}
{{--@stop--}}
