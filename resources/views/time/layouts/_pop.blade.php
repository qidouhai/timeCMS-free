<div class="scrollspy">
    <div id="pop" data-spy="affix" class="text-center" data-toggle="modal" data-target="#pop-box">导航</div>
</div>
<div class="modal fade bs-example-modal-lg" id="pop-box" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">网站导航</h4>
            </div>
            <div class="modal-body clearfix">
                <div class="col-sm-6">
                    <div class="list-group">
                        <a class="list-group-item" href="{{ url('category',1) }}">技术漫谈</a>
                        <a class="list-group-item" href="{{ url('category',2) }}">说天道地</a>
                        <a class="list-group-item" href="#">荣誉殿堂</a>
                        <a class="list-group-item" href="#">作品展示</a>
                        <a class="list-group-item" href="#">静思堂</a>
                        <a class="list-group-item" href="#">通天塔</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="list-group">
                        @if (auth()->check())
                            <a class="list-group-item" href="{{ url('user') }}">个人管理</a>
                            @if (Auth::user()->is_admin)
                                <a class="list-group-item" href="{{ url("admin") }}">系统管理</a>
                            @endif
                            <a class="list-group-item" href="{{ url("auth/logout") }}">退出登录</a>
                        @else
                            <a class="list-group-item" href="{{ url('auth/register') }}">注册</a>
                            <a class="list-group-item" href="{{ url('auth/login') }}">登录</a>
                        @endif
                    </div>
                    <div class="list-group">
                        <a class="list-group-item" href="tencent://message/?uin={{ $system['qq'] }}&amp;Site=www.obday.com&amp;Menu=yes" target="_blank">官方QQ：{{ $system['qq'] }}</a>
                        <a class="list-group-item" href="http://weibo.com/{{ $system['weibo'] }}" target="_blank">官方微博：[点击打开]</a>
                        <a class="list-group-item" href="#">微信号：{{ $system['wechat'] }}</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<style>
    .affix {
        right: 30px;
        bottom: 30px;
        width: 50px;
        height: 50px;
        line-height: 50px;
        background: #fff;
        -moz-border-radius: 50px;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        -moz-box-shadow: 0 0 12px 6px rgba(0,0,0,.175);
        -webkit-box-shadow: 0 0 12px 6px rgba(0,0,0,.175);
        box-shadow: 0 0 12px 6px rgba(0,0,0,.175);
        cursor: pointer;
        font-weight: bold;
    }
    .affix:hover {
        animation: blinking 3s linear 1s infinite alternate;
        -moz-animation: blinking 3s linear 1s infinite alternate;
        -webkit-animation: blinking 3s linear 1s infinite alternate;
        -o-animation: blinking 3s linear 1s infinite alternate;
    }
    @keyframes blinking
    {
        0%   {background: #ffffff;}
        25%  {background: #FFCC99;}
        50%  {background: #FFFF99;}
        75%  {background: #99CC99;}
        100% {background: #ffffff;}
    }
</style>
<script>
    $('#pop').affix({
        offset: {
            right: $('#nav').offset().right,
            bottom: $('#nav').offset().bottom
        }
    });
</script>