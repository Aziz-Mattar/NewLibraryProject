@extends('layouts.main') @section('MainContent')
    <form method="post" enctype="multipart/form-data" action="{{URL('category/update/'.$category->id)}}" id="updateform">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">@lang('dashboard.category.name') : </label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required value="{{$category->name}}">
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-primary" id="updatebutton"> @lang('dashboard.category.edit') </button>
        </div>
    </form>
@stop


{{--@extends('control_panel.category.create')--}}
{{--@section('form')--}}
{{--    id="updateform"--}}
{{--@stop--}}
{{--@section('action')--}}
{{--    action="{{URL('category/update/'.$category->id)}}"--}}
{{--@stop--}}
{{--@section('Name')--}}
{{--    value="{{$category->name}}"--}}
{{--@stop--}}
{{--@section('ButtonName')--}}
{{--    @lang('dashboard.category.edit')--}}
{{--@stop--}}
{{--@section('ButtonID')--}}
{{--    id="updatebutton"--}}
{{--@stop--}}
