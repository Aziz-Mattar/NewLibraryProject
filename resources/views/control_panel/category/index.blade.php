@extends('layouts.index')
@section('ViewName')
    @lang('dashboard.category.title')
@stop
@section('tableHeader')
    <tr>
        <th> @lang('dashboard.category.id') :</th>
        <th> @lang('dashboard.category.name') :</th>
        <th> @lang('dashboard.category.edit') :</th>
        <th> @lang('dashboard.category.delete') :</th>
    </tr>
@stop
@section('tableBody')
    @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><a href="{{route('category.edit',['language' => app()->getLocale(), 'id' => $category->id])}}">@lang('dashboard.category.edit')</a></td>
{{--            <td><a href="{{URL('category/edit/'.$category->id)}}">@lang('dashboard.category.edit')</a></td>--}}
            <td>
                <form action="{{URL('category/delete/'.$category->id)}}" method="post" id="form{{$category->id}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="button" id="button{{$category->id}}" class="btn btn-danger" onclick="
                        swal({
                        title: 'Are you sure?',
                        text: 'Once deleted, you will not be able to recover your data!',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                        })
                        .then((willDelete) => {
                        if (willDelete) {
                        $('#form{{$category->id}}').submit();
                        swal('Poof! The Deletion Was Successful!', {
                        icon: 'success',
                        });
                        } else {
                        swal('Nothing Has Changed!');
                        }
                        });
                        "> @lang('dashboard.category.delete')</button>
                </form>
            </td>
        </tr>
    @endforeach
@stop
@section('links')
    {{ $categories->links() }}
@stop
