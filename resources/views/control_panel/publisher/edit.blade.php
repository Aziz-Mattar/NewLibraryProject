@extends('layouts.main') @section('MainContent')
{{--                             @dd($publisher)--}}
    <form method="post" enctype="multipart/form-data" action="{{URL('publisher/update/'.$publisher->id)}}" id="updateform">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">@lang('dashboard.publisher.name') : </label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                       required value="{{$publisher->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="country" class="col-sm-2 col-form-label">@lang('dashboard.publisher.country') : </label>
            <div class="col-sm-10">
                <select name="country" id="country" class="form-select form-control selectpicker show-tick"
                        data-live-search="true" title="Country" required>
                    @foreach($countries as $country)
                        <option value="{{$country}}"
                                @if($country == $publisher->country) selected @endif>{{$country}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">@lang('dashboard.publisher.email') : </label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                       required value="{{$publisher->email}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">@lang('dashboard.publisher.phone') : </label>
            <div class="col-sm-10">
                <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone"
                       required value="{{$publisher->phone}}">
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-primary" id="updatebutton" >@lang('dashboard.publisher.edit')</button>
        </div>
    </form>
@stop


{{--@extends('control_panel.publisher.create')--}}
{{--@section('form')--}}
{{--    id="updateform"--}}
{{--@stop--}}
{{--@section('action')--}}
{{--    action="{{URL('publisher/update/'.$publisher->id)}}"--}}
{{--@stop--}}
{{--@section('Name')--}}
{{--    value="{{$publisher->name}}"--}}
{{--@stop--}}
{{--@section('Country')--}}
{{--    @foreach($countries as $country)--}}
{{--        <option value="{{$country}}"--}}
{{--                @if($country == $publisher->country) selected @endif>{{$country}}</option>--}}
{{--    @endforeach--}}
{{--@stop--}}
{{--@section('Email')--}}
{{--    value="{{$publisher->email}}"--}}
{{--@stop--}}
{{--@section('Phone')--}}
{{--    value="{{$publisher->phone}}"--}}
{{--@stop--}}
{{--@section('ButtonName')--}}
{{--    @lang('dashboard.publisher.edit')--}}
{{--@stop--}}
{{--@section('ButtonID')--}}
{{--    id="updatebutton"--}}
{{--@stop--}}

