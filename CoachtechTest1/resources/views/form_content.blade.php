@extends('layout.form_layout')



@section('title' , '問い合わせフォーム')

@section('main')
<h1>問い合わせ</h1>
<form action="/form/confirm" method="POST">
  @csrf
  <div>
    <label>お名前<span class="color--red">※</span>
      <input type="text" name="name__family" value="{{ old('name__family') }}">
      <input type="text" name="name__last" value="{{ old('name__last') }}">
    </label>
    <p><span class=" sample">例）山田</span>
      @error('name__family')<span class="error">{{ $errors->first('name__family') }}</span> @enderror
      <span class="sample">例）太郎</span>
      @error('name__last')<span class="error">{{ $errors->first('name__last') }}</span> @enderror
    </p>
  </div>
  <div>
    <label>性別<span class="color--red">※</span>
      <input type="radio" name="gendar" value="1" {{ old('gendar','1') == '1' ? 'checked' : '' }}>男性
      <input type="radio" name="gendar" value="2" {{ old('gendar') == '2' ? 'checked' : '' }}>女性
    </label>
  </div>
  <div>
    <label>メールアドレス<span class="color--red">※</span>
      <input type="text" name="email" value="{{ old('email') }}">
      <p><span class="sample">例）</span>
        @error('email'))<span class="error">{{ $errors->first('email') }}</span> @enderror
      </p>
    </label>
  </div>
  <div>
    <label>郵便番号<span class="color--red">※</span>
    〒<input type="text" name="postcode" onKeyUp="AjaxZip3.zip2addr('postcode', '', 'address', 'address');" value="{{ old('postcode') }}">
  </label>
  <p><span class="sample">例）</span>
  @error('postcode')<span class="error">{{ $errors->first('postcode') }}</span> @enderror
</p>
</div>
<div>
  <label>住所<span class="color--red">※</span>
  <input type="text" name="address" value="{{ old('address') }}">
</label>
<p><span class="sample">例）</span>
@error('address')<span class="error">{{ $errors->first('address') }}</span> @enderror
</p>
</div>
<div>
  <label>建物名
    <input type="text" name="building_name" value="{{ old('building_name') }}">
  </label>
  <p><span class="sample">例）</span>
</p>
</div>
<div>
  <label>ご意見<span class="color--red">※</span>
  <input type="text" name="opinion" value="{{ old('opinion') }}">
</label>
<p>@error('opinion')<span class="error">{{ $errors->first('opinion') }}</span> @enderror</p>
</div>
<input type="submit" value="確認">
</form>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
@endsection