@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">商品詳細</div>

<div class="panel-body">
商品名<br>
{{ $item[0]->name }}<br>
商品説明<br>
{{ $item[0]->descrip }}<br>
価格<br>
{{ $item[0]->price }}円<br>
在庫の有無<br>
@if ($item[0]->stock == 0)
	在庫なし
@else ($item[0]->stock >= 1)
	在庫あり
@endif
<br>
<a href="{{ route('item.index') }}">商品一覧へ</a>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
