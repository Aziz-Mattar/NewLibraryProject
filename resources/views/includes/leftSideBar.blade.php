<div style="position: relative; overflow: visible; box-sizing: border-box; min-height: 2360.8px;"
     class="col-md-3 side-col sidebar">
    <div class=" theiaStickySidebar"
         style="padding-top: 0px; padding-bottom: 1px; position: fixed; transform: translateY(-1531.2px); width: 262.5px; left: 1067.1px; top: 0px;">
        <div class="sidenav">
            <h3 class="u-line head_side"><a href="{{URL('categories')}}" class="black-color">Book
                    Categories</a><span class="pull-left"
                                        style="display:inline-block;cursor:pointer;"><span
                        data-toggle="modal" data-target="#seachModal" title="Search for Category"><i
                            class="fa fa-search"></i></span></span>
            </h3>
            <div class="side_results">
                @foreach($categories as $category)
                    <a href="{{URL('books_categories').'/'.$category->name}}"><i
                            class="fa fa-book"></i>{{$category->name}}</a>
                @endforeach
                <a class="more_categories" href="{{URL('categories')}}">More
                    of Book
                    Categories</a>
            </div>
        </div>
        <div class="sidenav m-t-30 m-b-10">
            <h3 class="u-line head_side"><a href="{{URL('authors')}}" class="black-color">Authors of
                    books</a><span class="pull-left" style="display:inline-block;cursor:pointer;"><span
                        data-toggle="modal" data-target="#seachModal" title="Search for Author"><i
                            class="fa fa-search"></i></span></span>
            </h3>
            <div class="side_results">
                @foreach($authors as $author)
                    <a href="{{URL('books_authors').'/'.$author->name}}"><i
                            class="fa fa-book"></i>{{$author->name}}</a>
                @endforeach
                <a class="more_categories" href="{{URL('authors')}}">More
                    of Authors of books</a>
            </div>
        </div>
        <div class="sidenav m-t-30 m-b-10">
            <h3 class="u-line head_side"><a href="{{URL('publishers')}}" class="black-color">Publishers of
                    books</a><span class="pull-left" style="display:inline-block;cursor:pointer;"><span
                        data-toggle="modal" data-target="#seachModal" title="Search for Publishers"><i
                            class="fa fa-search"></i></span></span>
            </h3>
            <div class="side_results">
                @foreach($publishers as $publisher)
                    <a href="{{URL('books_publishers').'/'.$publisher->name}}"><i
                            class="fa fa-book"></i>{{$publisher->name}}</a>
                @endforeach
                <a class="more_categories" href="{{URL('publishers')}}">More
                    of publishers of books</a>
            </div>
        </div>
        <div class="resize-sensor"
             style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
            <div class="resize-sensor-expand"
                 style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                <div
                    style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 272px; height: 2276px;"></div>
            </div>
            <div class="resize-sensor-shrink"
                 style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                <div
                    style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
            </div>
        </div>
    </div>
</div>
