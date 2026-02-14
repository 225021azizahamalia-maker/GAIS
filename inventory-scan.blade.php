<!DOCTYPE html>
<html>
<head>
    <title>Scan Barcode</title>
</head>
<body>

<h2>Scan Barcode Item</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ route('inventory.scan.store') }}" method="POST">
    @csrf

    <input type="text" 
           name="barcode" 
           placeholder="Scan barcode di sini..."
           autofocus
           required>

    <button type="submit">Submit</button>
</form>

</body>
</html>
