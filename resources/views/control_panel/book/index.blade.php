@extends('layouts.index')
@section('ViewName')
    @lang('dashboard.book.title')
@stop
@section('tableHeader')
    <tr>
        <th>@lang('dashboard.book.id') :</th>
        <th>@lang('dashboard.book.name') :</th>
        <th>@lang('dashboard.book.add') :</th>
        <th>@lang('dashboard.book.release_year')  :</th>
        <th>@lang('dashboard.book.edition_number')  :</th>
        <th>@lang('dashboard.book.author')  :</th>
        <th>@lang('dashboard.book.publisher')  :</th>
        <th>@lang('dashboard.book.category')  :</th>
        <th>@lang('dashboard.book.pages')  :</th>
        <th>@lang('dashboard.book.description')  :</th>
        <th>@lang('dashboard.book.edit')  :</th>
        <th>@lang('dashboard.book.delete')  :</th>
    </tr>
@stop
@section('tableBody')
    @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->name}}</td>
            <td>{{$book->Language}}</td>
            <td>{{$book->release_year}}</td>
            <td>{{$book->edition_number}}</td>
            <td>
                @foreach ($book->book_authors as $author)
                    @if (!empty($author->Author))
                        <li>{{ $author->Author->name }}</li>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach ($book->book_publishers as $publisher)
                    @if (!empty($publisher->Publisher))
                        <li>{{ $publisher->Publisher->name }}</li>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach ($book->book_categorys as $category)
                    @if (!empty($category->Category))
                        <li>{{ $category->Category->name }}</li>
                    @endif
                @endforeach
            </td>
            <td>{{$book->pages}}</td>
            <td>
                <p style="text-overflow: ellipsis;width: 200px;  overflow: hidden;">
                    {{$book->description}}
                </p>
            </td>
            <td><a href=" {{ route('book.edit', ['language' => app()->getLocale(), 'id' => $book->id]) }}">@lang('dashboard.book.edit')</a></td>
{{--            <td><a href=" {{ route('book.edit', ['id' => $book->id]) }}">@lang('dashboard.book.edit')</a></td>--}}
            <td>
                <form action=" {{URL('book/delete/'.$book->id)}}" method="post" id="form{{$book->id}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="button" id="button{{$book->id}}" class="btn btn-danger" onclick="
                        swal({
                        title: 'Are you sure?',
                        text: 'Once deleted, you will not be able to recover your data!',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                        })
                        .then((willDelete) => {
                        if (willDelete) {
                        $('#form{{$book->id}}').submit();
                        swal('Poof! The Deletion Was Successful!', {
                        icon: 'success',
                        });
                        } else {
                        swal('Nothing Has Changed!');
                        }
                        });
                        ">@lang('dashboard.book.delete')</button>
                </form>
            </td>
        </tr>
    @endforeach
@stop
@section('links')
    {{ $books->links() }}
@stop
