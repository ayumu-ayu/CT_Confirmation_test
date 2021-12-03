@extends('layout.form_layout')

@section('title' , '確認ページ')

@section('main')
<h1>内容確認</h1>
<div>お名前
  <span>{{$familyname}}</span><span class="name__last">{{$lastname}}</span>
  
</div>
<div>性別
  @if($gendar == 1)
  <span>男性</span>
  @else
  <span>女性</span>
  @endif
</div>
<div>メールアドレス<span>{{$email}}</span>
</div>
<div>郵便番号
  <span>{{$postcode}}</span>
</div>
<div>住所
  <span>{{$address}}</span>
</div>
<div>建物名
  <span>{{$buildingname}}</span>
</div>
<div>ご意見
  <span>{{$opinion}}</span>
</div>


<form action="/form/thanks" method="POST">
@csrf
<input type="hidden" name="name__family" value="{{$familyname}}">
<input type="hidden" name="name__last" value="{{$lastname}}">
<input type="hidden" name="fullname" value="{{$familyname}}{{$lastname}}">
<input type="hidden" name="gendar" value="{{$gendar}}">
<input type="hidden" name="email" value="{{$email}}">
<input type="hidden" name="postcode" value="{{$postcode}}">
<input type="hidden" name="address" value="{{$address}}">
<input type="hidden" name="building_name" value="{{$buildingname}}">
  <input type="hidden" name="opinion" value="{{$opinion}}">

  <input name="submit" type="submit" value="送信">
  <input name="back" type="submit" value="修正する">
</form>
@endsection