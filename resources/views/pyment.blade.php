<html>
    <head>
        <meta charset= "UTF-8">
        <title>結帳畫面</title>
    </head>
    <h1>～～～～請填入購買人資料～～～～<h1>
    <form method="post" action="{{ route('pyment.home') }}">
        @csrf
        <div class="field my-2">
            <label for="">購買人:</label>
            <input type="text" value="{{ old('name') }}" name="name" class="border border-gray-300 p-2">
        </div>
<p>
        <div class="field my-2">
            <label for="">電子郵件:</label>
            <input type="text" value="{{ old('email') }}" name="email" class="border border-gray-300 p-2">
        </div>
<p>
        <div class="field my-2">
            <label for="">地址:</label>
            <textarea name="address" cols="30" rows="2.5" class="border border-gray-300 p-2">{{ old('address') }}</textarea>
        </div>
<p>
    <div class="field my-2">
        <label for="">金額:</label>
        <input type="text" value="{{ old('money') }}" name="money" class="border border-gray-300 p-2">
    </div>
<p>
    <div class="actions">
        <button type="submit" style="width:120px;height:40px;">送  出</button>
    </div>
<p>
<tbody>
    <?php $total = 0 ?>
    @if(session('cart'))
        @foreach(session('cart') as $id => $details)
        <?php $total += $details['price'] * $details['quantity'] ?>
        @endforeach
    @endif
    <td class="hidden-xs text-center"><h1><strong>您的金額 ${{ $total }}</strong></h1></td>
    <td><a href="{{ url('/cart') }}" class="btn btn-warning">更改購買商品</a></td>
</tbody>