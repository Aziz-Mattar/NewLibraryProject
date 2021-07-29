@extends('layouts.index')
@section('ViewName')
    @lang('dashboard.author.title')
@stop
@section('tableHeader')
    <tr>
        <th> @lang('dashboard.author.id') :</th>
        <th> @lang('dashboard.author.name') :</th>
        <th> @lang('dashboard.author.Description') :</th>
        <th> @lang('dashboard.author.nationality') :</th>
        <th> @lang('dashboard.author.Date of Date') :</th>
        <th> @lang('dashboard.author.edit') :</th>
        <th> @lang('dashboard.author.delete') :</th>
    </tr>
@stop
@section('tableBody')
    @foreach($Authors as $author)
        <tr>
            <td>{{$author->id}}</td>
            <td>{{$author->name}}</td>
            <td><p style=" white-space: nowrap;
                  width: 200px;
                  overflow: hidden;
                  text-overflow: ellipsis;">
                    {{$author->description}}</p></td>
            <td>{{$author->nationality}}</td>
            <td>{{$author->date_of_birth}}</td>
{{--            <td><a href=" {{ route('book.edit', ['language' => app()->getLocale(), 'id' => $book->id]) }}">@lang('dashboard.book.edit')</a></td>--}}
            <td><a href="{{route('author.edit',['language' => app()->getLocale(), 'id' => $author->id])}}">@lang('dashboard.author.edit')</a></td>
            <td>
                <form action="{{URL('author/delete/'.$author->id)}}" method="post" id="form{{$author->id}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="button" id="button{{$author->id}}" class="btn btn-danger" onclick="
                        swal({
                        title: 'Are you sure?',
                        text: 'Once deleted, you will not be able to recover your data!',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                        })
                        .then((willDelete) => {
                        if (willDelete) {
                        $('#form{{$author->id}}').submit();
                        swal('Poof! The Deletion Was Successful!', {
                        icon: 'success',
                        });
                        } else {
                        swal('Nothing Has Changed!');
                        }
                        });
                        ">@lang('dashboard.author.delete')
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@stop
@section('links')
    {{$Authors->links()}}
@stop
