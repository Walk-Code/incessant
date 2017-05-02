@extends('layouts.app')

@section('content')
    <style>
        .list-group-item:hover{
            background-color: #f5f5f5;
        }
        .list-group-item{
            height: 45px;
        }
        .badge{
            float: right;
        }
        .avatar{
            width: 30px;
            height: 30px;
        }

    </style>

    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-xs-12 col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading">前台首页</div>
                    <div class="jscroll">
                        <div class="panel-body  remove-padding-horizontal">
                            <ui class="list-group row topic-list">
                                @foreach($pages as $page)
                                    <li class="list-group-item">
                                      <a href="#">
                                          <img class="avatar" src="http://olt4twnay.bkt.clouddn.com/%E5%BE%AE%E4%BF%A1%E5%9B%BE%E7%89%87_20170421142836.jpg">
                                      </a>

                                      <a href="{{url('pages',$page->id)}}">
                                            {{$page->title}}
                                          <span class="badge">8</span>
                                      </a>
                                    </li>
                                @endforeach
                            </ui>
                        </div>
                        <div class="panel-footer clearfix">
                            <div class="pull-right">
                               {{$pages}}
                            </div>
                        </div>
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
                                            <img class="media-object" src="https://ooo.0o0.ooo/2017/04/24/58fd98732228e.jpg" style="max-width: 24px;max-height: 24px">
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
                                            <img class="media-object" src="https://ooo.0o0.ooo/2017/04/24/58fd98732228e.jpg" style="max-width: 24px;max-height: 24px">
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

                {{-- 其他模塊--}}
                <div class="panel panel-default corner-radius" style="color:#a5a5a5">
                    <div class="panel-body text-center">
                        <a href="http://estgroupe.com/" style="color:#a5a5a5">
                            <img src="https://ooo.0o0.ooo/2017/04/24/58fd98732228e.jpg" style="width: 20px;margin-right: 4px;margin-top: -4px;">
                            <span style="margin-top: 7px;display: inline-block;">
                              其他板塊
                           </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection