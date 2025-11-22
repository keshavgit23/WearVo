<x-app-layout>
    <div class="max-w-7xl mx-auto p-6">

        <!-- Banner -->
        <div class="bg-blue-600 text-white p-6 rounded-lg mb-8">
            <h1 class="text-3xl font-bold">Welcome to My Store</h1>
            <p class="mt-2">Shop the latest products at best prices!</p>
        </div>

        <!-- Product List -->
        <h2 class="text-2xl font-semibold mb-4">Latest Products</h2>

        @if($products->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($products as $product)
                    <div class="p-4 border rounded-lg shadow">
                        <!-- IMAGE -->
                        <img src="{{ asset('storage/' . $product->image) }}"
                             class="w-full h-48 object-cover mb-3 rounded">

                        <!-- NAME -->
                        <h3 class="text-lg font-bold">{{ $product->name }}</h3>

                        <!-- PRICE -->
                        <p class="text-gray-600 mb-2">₹{{ $product->price }}</p>

                        <!-- BUTTON -->
                        <a href="/products/{{ $product->slug }}"
                           class="text-blue-600 font-semibold">
                           View Product →
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p>No products added yet.</p>
        @endif

    </div>
</x-app-layout>