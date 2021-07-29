@extends('layouts.index')
@section('ViewName')
    @lang('dashboard.publisher.title')
@stop
@section('tableHeader')
    <tr>
        <th> @lang('dashboard.publisher.id') :</th>
        <th> @lang('dashboard.publisher.name') :</th>
        <th> @lang('dashboard.publisher.country') :</th>
        <th> @lang('dashboard.publisher.email') :</th>
        <th> @lang('dashboard.publisher.phone') :</th>
        <th> @lang('dashboard.publisher.edit') :</th>
        <th> @lang('dashboard.publisher.delete') :</th>
    </tr>
@stop
@section('tableBody')
    @foreach($publishers as $publisher)
        <tr>
            <td>{{$publisher->id}}</td>
            <td>{{$publisher->name}}</td>
            <td>{{$publisher->country}}</td>
            <td>{{$publisher->email}}</td>
            <td>{{$publisher->phone}}</td>
{{--            <td><a href=" {{ route('publisher.edit', ['id' => $publisher->id]) }}">@lang('dashboard.publisher.edit')</a></td>--}}
            <td><a href="{{route('publisher.edit',['language' => app()->getLocale(), 'id' => $publisher->id])}}">@lang('dashboard.publisher.edit')</a></td>
            <td>
                <form action="{{URL('publisher/delete/'.$publisher->id)}}" method="post" id="form{{$publisher->id}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="button" id="button{{$publisher->id}}" class="btn btn-danger" onclick="
                        swal({
                        title: 'Are you sure?',
                        text: 'Once deleted, you will not be able to recover your data!',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                        })
                        .then((willDelete) => {
                        if (willDelete) {
                        $('#form{{$publisher->id}}').submit();
                        swal('Poof! The Deletion Was Successful!', {
                        icon: 'success',
                        });
                        } else {
                        swal('Nothing Has Changed!');
                        }
                        });
                        "> @lang('dashboard.publisher.delete')</button>
                </form>
            </td>
        </tr>
    @endforeach
@stop
@section('links')
    {{  $publishers->links() }}
@stop
