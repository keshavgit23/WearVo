<x-app-layout>
    <h1 class="text-2xl font-bold">{{ $product->name }}</h1>
    <p>₹{{ $product->price }}</p>
    <p>{{ $product->description }}</p>
</x-app-layout>