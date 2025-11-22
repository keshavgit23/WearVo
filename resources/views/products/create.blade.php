<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Add New Product</h1>

    <form action="/products" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Product name" required><br>
        <input type="text" name="slug" placeholder="Slug" required><br>
        <input type="number" name="price" placeholder="Price" required><br>
        <textarea name="description" placeholder="Description"></textarea><br>
        <button type="submit">Save Product</button>
    </form>
</x-app-layout>