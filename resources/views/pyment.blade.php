<h1>This order！</h1>
<tbody>
    <?php $total = 0 ?>
    @if(session('cart'))
        @foreach(session('cart') as $id => $details)
        <?php $total += $details['price'] * $details['quantity'] ?>
        @endforeach
    @endif
    <td class="hidden-xs text-center"><h1><strong>Total ${{ $total }}</strong></h1></td>
</tbody>