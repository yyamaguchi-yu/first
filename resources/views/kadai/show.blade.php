@extends('layouts.app')

@section('content')
@section('content')
   @if ($item != null) 
   <table>
      <tr>
         <th>id</th>
         <th>画像</th>
         <th>商品名</th>
         <th>値段</th>
         <th>メーカー</th>
         <th>在庫</th>
         <th></th>
      </tr>     
      <tr>
         <td>{{$item->id}}</td>
         <td>{{$item->image}}</td>
         <td>{{$item->name}}</td>
         <td>{{$item->price}}</td>
         <td>{{$item->companies->company_name}}</td>
         <td>{{$item->stock}}</td>
         <td>{{$item->comment}}</td>
         <td>
            <form action="edit/{{$item->id}}" method='GET'>
               <input type="submit" value="編集">
            </form>
         </td>
      </tr>
   </table>
       <div class='return'>
      <a href="{{route('index')}}">戻る</a>
   </div>
   @endif
@endsection
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
