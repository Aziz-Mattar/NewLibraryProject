<div itemscope="" itemtype="https://schema.org/Collection" class="col-lg-3 col-md-4 col-sm-4 col-xs-5">
    <div class="book-restult" itemscope="" itemtype="http://schema.org/Book">
        <a class="img-a" title="{{$book->name}}" href="{{URL('books/').'/'.$book->id}}">
            <div class="book_photo_container_results" style="background:rgba(85,239,196,.4)">
                <div class="f_p_p">
                    <picture>
                        <img src="{{ $book->image }}">
                    </picture>
                </div>
            </div>
        </a>
        <a href="{{URL('books/').'/'.$book->id}}">
            <h3 itemprop="name">{{$book->name}}</h3>
        </a>
        <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
         <p itemprop="name">
            @foreach ($book->book_authors as $author)
                 @if (!empty($author->Author))
                     {{ $author->Author->name }}
                     @if(!$loop->last)
                         {{'+'}}
                     @endif
                 @endif
             @endforeach
         </p>
      </span>
    </div>
</div>
