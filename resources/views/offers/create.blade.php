<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Tailwind CSS Product Form</title>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md w-96">

        <h2 class="text-2xl font-semibold mb-6">Product Information</h2>
            {{-- {{ Form::open([
                'action' => 'offers/store',
                'method' => 'POST',
                'enctype' => 'multipart/form-data'
            ])}} --}}

            <form action="{{ route('offers.store') }}" method="POST">
             @csrf

            <div class="mb-4">
                <label for="productName" class="block text-sm font-medium text-gray-600">Product Name</label>
                <input type="text" id="productName" name="productName" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="categoryName" class="block text-sm font-medium text-gray-600">Category Name</label>
                <input type="text" id="categoryName" name="categoryName" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="quantity" class="block text-sm font-medium text-gray-600">Quantity</label>
                <input type="number" id="quantity" name="quantity" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-600">Price</label>
                <input type="text" id="price" name="price" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Submit</button>

        {{-- {{ Form::close() }} --}}
            </form>

    </div>

</body>
</html>
