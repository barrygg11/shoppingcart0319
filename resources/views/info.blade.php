@foreach($Infos as $Info)
<div class="border-t border-gray-300 my-1 p-2">
<h2 class="font-bold text-lg">購買人：{{ $Info->name }}</h2>
<h2 class="font-bold text-lg">電子郵件：{{ $Info->email }}</h2>
<h2 class="font-bold text-lg">地址：{{ $Info->address }}</h2>
<h2 class="font-bold text-lg">金額：{{ $Info->money }}</h2>

<p>
{{ $board->created_at }}