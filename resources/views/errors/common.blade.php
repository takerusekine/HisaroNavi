@extends('app')
@section('content')
    <?php
$status_code = $exception->getStatusCode();
$message = $exception->getMessage();

if (! $message) {
    switch ($exception->getStatusCode()) {
        case 400:
            $message = 'Bad Request';
            break;
        case 401:
            $message = '認証に失敗しました';
            break;
        case 403:
            $message = 'アクセス権がありません';
            break;
        case 404:
            $message = '存在しないページです';
            break;
        case 408:
            $message = 'タイムアウトです';
            break;
        case 414:
            $message = 'リクエストURIが長すぎます';
            break;
        case 500:
            $message = 'Internal Server Error';
            break;
        case 503:
            $message = 'Service Unavailable';
            break;
        default:
            $message = 'エラー';
            break;
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">

            <h2 class="text-danger" style="margin-top:1rem">{{ $status_code }} {{ $message }}</h2>
            <p>
                ご不便をおかけいたしますが、{!! link_to_action('HomeController@index', 'トップページ') !!}へ戻るか、
                下のリンクをご利用ください。
            </p>
        </div>
    </div>
</div>
@include('layouts.recommendarticle')

@endsection
