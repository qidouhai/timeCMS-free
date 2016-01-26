@extends($theme.'.layouts.app')
@section('content')
    <div class="container-fluid jumbotron">
        <div class="container">
            <h1>obday {{ config('system.title') }}</h1>

            <p>这里是timeCMS官方站点</p>

            <p>网站建设中...</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    @foreach($types as $type)
                        <div class="panel panel-primary">
                            <div class="panel-heading">{{ $type->title }}<span class="pull-right"><a href="{{ url('category',$type->id) }}">更多>></a></span></div>
                            <div class="panel-body">
                                @if($articles = $type->articles->sortByDesc('id')->take(9))
                                    <div class="list-group">
                                        @foreach($articles as $article)
                                            <a href="{{ url('article',$article->id) }}" class="list-group-item">{{ $article->title }}<span class="pull-right">{{ $article->updated_at->format('Y-m-d') }}</span></a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-sm-3">
                    @include($theme.'.category.right')
                </div>
            </div>
        </div>
    </div>
@endsection