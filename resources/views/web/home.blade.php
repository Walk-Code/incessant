@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">前台首页</div>

                    <div class="panel-body">

                        @foreach ($pages as $page)
                            <hr>
                            <div class="page">
                                <h4>{{ $page->title }}</h4>
                                <div class="content">
                                    <p>
                                        {{ $page->body }}
                                    </p>
                                </div>
                            </div>
                            <a href="{{ url('/pages/'.$page->id) }}" class="btn btn-success">进入</a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection