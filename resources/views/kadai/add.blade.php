

@extends('layouts.app')

@section('title', 'Person.Add')

@section('menubar')
   @parent
   新規作成ページ
@endsection

@section('content')
   @if (count($errors) > 0)
   <div>
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
   @endif
   <form action="add" method="post">
   <table>
       @csrf
       <tr>
            <th>image</th>
            <td>
                <input type="text" name="image"value="{{old('image')}}">
            </td>
        </tr>
       <tr>
            <th>name</th>
            <td>
                <input type="text" name="name"value="{{old('name')}}">
            </td>
        </tr>
       <tr>
            <th>price</th>
            <td>
                <input type="number" name="price"value="{{old('price')}}">
            </td>
        </tr>
        <tr>
            <th>メーカー</th>
            <td>
                <select  name='company_id' value="{{old('company_id')}}" >
                        <option value="1">PEPSI</option>
                        <option value="2">サントリー</option>
                        <option value="3">コカ・コーラ</option>
                        <option value="4">アサヒ</option>
                        <option value="5">伊藤園</option>
                        <option value="6">その他</option>
                </select>
            </td>
        </tr>
           <tr><th>在庫</th><td><input type="number" name="stock"
           value="{{old('stock')}}"></td></tr>
           <tr><th>コメント</th><td><input type="textarea" name="comment"
           value="{{old('comment')}}"></td></tr>
       <tr><th>→</th><td><input type="submit" 
           value="登録"></td></tr>
   </table>
   <div class='return'>
        <a href="{{route('index')}}">戻る</a>
   </div>
   </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
