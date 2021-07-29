@extends('layouts.main') @section('MainContent')
    <div class="card-body">
        <h1 class="text-center">@yield('ViewName')</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                @yield('tableHeader')
                </thead>
                <tbody>
                @yield('tableBody')
                </tbody>
            </table>
        </div>
    </div>
    <div>
        @yield('links')
    </div>
@stop
