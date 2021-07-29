@extends('layouts.main') @section('MainContent')
    <form method="post" enctype="multipart/form-data" @if($ac) action="{{URL('publisher/store')}}"
          id="addform" @else @yield('action') @yield('form') @endif>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">@lang('dashboard.publisher.name') : </label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                       required @yield('Name')>
            </div>
        </div>
        <div class="form-group row">
            <label for="country" class="col-sm-2 col-form-label">@lang('dashboard.publisher.country') : </label>
            <div class="col-sm-10">
                <select name="country" id="country" class="form-select form-control selectpicker show-tick"
                        data-live-search="true" title="Country" required>
                    @if($ac)
                        @foreach($countries as $country)
                            <option value="{{$country}}">{{$country}}</option>
                        @endforeach
                    @else
                        @yield('Country')
                    @endif
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">@lang('dashboard.publisher.email') : </label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                       required @yield('Email')>
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">@lang('dashboard.publisher.phone') : </label>
            <div class="col-sm-10">
                <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone"
                       required @yield('Phone')>
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-primary" @if($ac) id="addbutton"> @lang('dashboard.publisher.add') @else @yield('ButtonID')
                > @yield('ButtonName')@endif </button>
        </div>
    </form>
@stop
