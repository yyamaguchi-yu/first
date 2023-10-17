@extends('layouts.app')

@section('title', '全体ページ')



@section('content')
    <div>
        <form action="{{route('add.kadai')}}" class='new-sentent'>
                        <input type='submit' value='新規登録'>
        </form>
    </div>
    <table>
        <form action="{{route('index')}}" method='GET'>
                        @csrf

            <th>
                <input type='text' name='keyword' placeholder='商品名'>
            </th>
            <th>
            <div>
                    <div>
                        <select name="company_id" data-toggle="select">
                            <option value="">全て</option>
                            @foreach ($company_list as $company_item)
                                <option value="{{ $company_item->getCompany() }}" @if($company=='{{ $company_item->getCompany() }}') selected @endif>{{ $company_item->getCompany() }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </th> 
            <th>
                <div>
                    <input type='submit' value='検索'>
                </div>
            </th>       
        </form>
    <table>
   <table>
        <tr class='tableHeader'>
            <th>id</th>
            <th>画像</th>
            <th>商品名</th>
            <th>値段</th>
            <th>メーカー</th>
            <th>在庫</th>
            <th>詳細</th>
            <th>編集</th>
            <th>削除</th>
        </tr>
   @foreach ($items as $item)
        <tr>
            <td><?php echo $item->id; ?></td>
            <td><?php echo $item->image; ?></td>
            <td><?php echo $item->name; ?></td>
            <td><?php echo $item->price; ?></td>
            <td><?php echo $item->company_name; ?></td>
            <td><?php echo $item->stock; ?></td>
            <td>
                <form action="show/{{$item->id}}">
                    <input type='submit' value='詳細'>
                </form>
            </td>
            <td>
                <form action="edit/{{$item->id}}" method='get'>
                    <input type="submit" value="編集">
                </form>
            </td>
            <td>
                <form action="del/{{$item->id}}" method="post">
                @csrf
                    <input type="submit" value="削除">
                </form>
            </td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
yu yamaguchi
@endsection