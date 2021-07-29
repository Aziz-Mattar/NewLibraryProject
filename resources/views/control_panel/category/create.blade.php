@extends('layouts.main') @section('MainContent')
    <form method="post" enctype="multipart/form-data" @if($ac) action="{{URL('category/store')}}" id="addform" @else @yield('action') @yield('form') @endif>
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">@lang('dashboard.category.name') : </label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required @yield('Name')>
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-primary" @if($ac) id="addbutton" > @lang('dashboard.category.add')
            @else @yield('ButtonID') > @yield('ButtonName') @endif </button>
        </div>
    </form>
@stop
