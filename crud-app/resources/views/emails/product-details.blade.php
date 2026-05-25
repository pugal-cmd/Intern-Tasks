<h2>Hello {{ $user->name }} 👋</h2>

<p>Thank you for registering.</p>

<h3>Your Selected Product</h3>

<p><strong>Product:</strong> {{ $product->name }}</p>
<p><strong>MRP:</strong> ₹{{ $product->mrp }}</p>
<p><strong>Selling Price:</strong> ₹{{ $product->price }}</p>
<p><strong>Description:</strong> {{ $product->description }}</p>

<p>Thank you 🎉</p>