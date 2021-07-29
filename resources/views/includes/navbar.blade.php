<nav class="navbar navbar-default affix" data-spy="affix" data-offset-top="183">
    <div class="container">

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{URL('library')}}"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                <li class=""><a href="{{URL('categories')}}"><i class="fa fa-sitemap"></i>&nbsp;
                        Categories</a>
                </li>
                <li class=""><a href="{{URL('authors')}}"><i class="fa fa-users"></i>&nbsp;Authors
                        </a>
                </li>
                <li class=""><a href="{{URL('browse/books/by/authors')}}"><i class="fa fa-users"></i>&nbsp;Browse Books By Authors
                        </a>
                </li>
                <li class=""><a href="{{URL('browse/books/by/categories')}}"><i class="fa fa-sitemap"></i>&nbsp;Browse Books By Categories
                        </a>
                </li>
                <li class=""><a href="{{URL('browse/books/by/publishers')}}"><i class="fa fa-book"></i>&nbsp;Browse Books By Publishers
                        </a>
                </li>
                <li class="search-li hidden-sm"><a  data-toggle="modal"
                                                   data-target="#seachModal"><i
                            class="fa fa-search"></i>&nbsp;Search</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="the_main" style="transform: none;">

    <div class="search-container">
        <div id="seachModal" class="modal fade login-modal" role="dialog">
            <div class="modal-dialog">
                <form action="{{URL('search')}}" method="get">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-remove"></i>
                            </button>
                            <h4 class="modal-title">Search for a book</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-bottom:0!important">
                                        <input autofocus=""
                                               data-modalfocus=""
                                               style="height:55px;"
                                               placeholder="Search for Book, Author or Category"
                                               type="text"
                                               class="form-control input-lg search_for"
                                               name="search_for"
                                               id="search_for"
                                               required=""
                                               autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button stop_loader="true" type="submit"
                                    class="btn btn-default noor-btn noor-btn-b pull-right btn-lg btn-block"><i
                                    class="fa fa-search"></i> Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

