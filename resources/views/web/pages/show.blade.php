@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title">{{ $page->title }}</h1>
            {{--<p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>--}}
            <div id="date" style="text-align: right;">
                {{ $page->updated_at }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 blog-main">
                <p>
                    {{ $page->body }}
                </p>
            </div>

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>About</h4>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
                <div class="sidebar-module">
                    <h4>Archives</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>



        <div id="comments" style="margin-bottom: 100px;">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="conmments" style="margin-top: 100px";>
                @foreach ($page->hasManyComments as $comment)

                    <div class="one" style="border-top: solid 2px #efefef; padding: 5px 5px;">
                        <div class="nickname" data="{{ $comment->nickname }}" style="margin-left: 50px;margin-right: 50px">
                            @if ($comment->website)
                                <a href="{{ $comment->website }}">
                                    <h3>{{ $comment->nickname }}</h3>
                                </a>
                            @else
                                <h3>{{ $comment->nickname }}</h3>
                            @endif
                            <h6>{{ $comment->created_at }}</h6>
                        </div>
                        <div class="content">
                            <p style="padding: 20px;">
                                {{ $comment->content }}
                            </p>
                        </div>
                        <div class="reply" style="text-align: right; padding: 5px;">
                            <a href="#new" onclick="reply(this);">回复</a>
                        </div>
                    </div>

                @endforeach
            </div>
            <div id="new" style="padding: 50px">
                <form action="{{ url('comment/store') }}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="page_id" value="{{ $page->id }}">
                    <div class="form-group">
                        <label>Nickname</label>
                        <input type="text" name="nickname" class="form-control" style="width: 300px;" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" style="width: 300px;">
                    </div>
                    <div class="form-group">
                        <label>Home page</label>
                        <input type="text" name="website" class="form-control" style="width: 300px;">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success col-lg-12">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function reply(a) {
            var nickname = a.parentNode.parentNode.firstChild.nextSibling.getAttribute('data');
            var textArea = document.getElementById('newFormContent');
            textArea.innerHTML = '@'+nickname+' ';
        }
    </script>
@endsection