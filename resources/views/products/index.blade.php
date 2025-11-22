<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">All Products</h1>

    @foreach ($products as $product)
        <div class="border p-2 mb-2">
            <h2>{{ $product->name }}</h2>
            <p>₹{{ $product->price }}</p>
            <a href="/products/{{ $product->slug }}">View</a>
        </div>
    @endforeach
</x-app-layout>