@extends('layouts.app')

@section('content')
    <style>
        .panel {
            border-radius: 0;
            box-shadow: none;
            border: 1px solid #dde2e8;
            margin-bottom: 20px;
        }
    </style>


    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-xs-12 col-sm-9">
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

            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                {{--每日一图--}}
                <div class="panel panel-default corner-radius" style="text-align: center;background-color: transparent;border: none;">
                    <a href="https://laravel-china.org/topics/3383" rel="nofollow" title="" style="">
                        <img src="http://olt4twnay.bkt.clouddn.com/SimpleDesktops_Mario-2880x1800.png" style="width: 100%;border-radius: 0;box-shadow: none;border: 1px solid #FFFFFF;">
                    </a>
                </div>
                {{--推荐版本--}}
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h4 class="panel-title">推荐模块</h4>
                    </div>
                    <div class="panel-body">
                        <ul class="list list-group">
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="http://d.laravel-china.org/" class="no-pjax" title="Laravel 中文文档">
                                            <img class="media-object inline-block " src="https://ooo.0o0.ooo/2017/04/24/58fd98732228e.jpg" style="max-width: 24px;max-height: 24px">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        test
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="http://d.laravel-china.org/" class="no-pjax" title="Laravel 中文文档">
                                            <img class="media-object inline-block " src="https://ooo.0o0.ooo/2017/04/24/58fd98732228e.jpg" style="max-width: 24px;max-height: 24px">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        test2
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

                {{--最热话题--}}

                <div class="panel corner-radius">
                    <div class="panel-heading text-center">
                        <h5 class="panel-title">最热</h5>
                    </div>
                    <div class="panel-body">
                        <ul class="list">
                            <li>
                                <a href="https://laravel-china.org/topics/4484/composer-mirror-use-help" title="Composer 中文镜像 / Packagist 中国全量镜像正式发布！">
                                    0.test.....
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection