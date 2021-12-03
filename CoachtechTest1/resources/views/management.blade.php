<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理システム</title>
</head>

<body>
  <style>
    svg.w-5.h-5 {
      /*paginateメソッドの矢印の大きさ調整のために追加*/
      width: 30px;
      height: 30px;
    }

    .overflow {
      width: 200px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
  </style>

  <div class="search_form">
    <form action="/management/{serach}" method="GET">
      @csrf
      <label>お名前<input type="text" name="keyword_name" value="{{$nameKeyword}}"></label>
      <input type="radio" name="input_gendar" value="" {{ old('input_gendar') == '' ? 'checked' : '' }}>全て
      <input type="radio" name="input_gendar" value="1" {{ old('input_gendar') == '1' ? 'checked' : '' }}>男性
      <input type="radio" name="input_gendar" value="2" {{ old('input_gendar') == '2' ? 'checked' : '' }}>女性
      <label>メールアドレス<input type="text" name="keyword_email" value="{{$emailKeyword}}"></label>
      <label>登録日
        <input type="date" name="created_up" value="{{$upCreated}}"><span>〜</span>
        <input type="date" name="created_low" value="{{$lowCreated}}">
      </label>
      <input type="submit" name="search" value="検索する">
      <input type="submit" name="reset" value="リセット">
    </form>
  </div>

  <table>
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
    </tr>
    @if (@isset($items))
    @foreach($items as $item)
    <tr>
      <td>{{$item->getId()}}</td>
      <td>{{$item->getFullname()}}</td>
      <td>
        @if($item->getGendar() == 1)
        男性
        @else
        女性
        @endif
      </td>
      <td>{{$item->getEmail()}}</td>
      <td>
        <p class="overflow">{{$item->getOpinion()}}</p>
      </td>
      <td>
        <form action="/management/{serach}" method="GET">
          @csrf
          <input type="hidden" name="id" value="{{$item->getId()}}">
          <input type="submit" name="delete" value="削除">
        </form>
      </td>
    </tr>
    @endforeach
    <p>{{ $items->appends(request()->query())->links() }}</p>
    @endif

  </table>



</body>

</html>