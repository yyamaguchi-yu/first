@extends('layouts.app')


@section('content')
   <form action="" method="post">
      @method('PUT')
      <div>
         <table> 
         <tr>
               <th>id: </th>
               <td>
                  {{$item->id}}
               </td>
            </tr>
            <tr>
               <th>画像: </th>
               <td>
                  <input type="text" name="image" value="{{$item->image}}">
               </td>
            </tr>
               <th>name: </th>
               <td>
                  <input type="text" name="name" value="{{$item->name}}">
               </td>
            </tr>
            <tr>
               <th>price: </th>
                  <td>
                     <input type="number" name="price" value="{{$item->price}}">
                  </td>
            </tr>
            <tr>
               <th>メーカー: </th>
               <td>
                  <!-- <input type="text" name="maker" value="{{$item->maker}}"> -->
                  <select  name='company_id' value="{{$item->company_id}}" >
                        <option value="1">PEPSI</option>
                        <option value="2">サントリー</option>
                        <option value="3">コカ・コーラ</option>
                        <option value="4">アサヒ</option>
                        <option value="5">伊藤園</option>
                        <option value="6">その他</option>
                </select>
               </td>
            </tr>
            <tr>
               <th>在庫: </th>
               <td>
                  <input type="number" name="stock" value="{{$item->stock}}">
               </td>
            </tr>
            <tr>
               <th>コメント: </th>
               <td>
                  <input type="text" name="comment" value="{{$item->comment}}">
               </td>
            </tr>
            <tr>
               <th></th>
                  <td>
                  @csrf
                  <input type="submit" name="send" value="更新">
                  </td>
            </tr>
         </table>
      </div>
   </form>
      <div class='return'>
         <a href="{{route('index')}}">戻る</a>
      </div>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection