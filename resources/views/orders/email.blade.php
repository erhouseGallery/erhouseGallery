<h3>Ada pesanan Baru</h3>


<p>Nama Pemesan: {{ $orderData['user_id'] }}</p>
<p>Nama Pesanan: {{ $orderData['order_name'] }}</p>
<p>Kategori: {{ $orderData['category_id'] }}</p>
<p>Description: {{ $orderData['description'] }}</p>
<a href="http://127.0.0.1:8000/admin/orders/{{ $orderData['id'] }}/edit">cek pesannan</a>
