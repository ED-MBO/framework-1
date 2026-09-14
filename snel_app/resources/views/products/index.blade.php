<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <style>
        body { font-family: Georgia, serif; margin: 2rem; background: #f7f4ef; color: #1a1a1a; }
        h1 { margin-bottom: 1rem; }
        a { color: #0b5fff; }
        article { margin-bottom: 1.25rem; padding-bottom: 1rem; border-bottom: 1px solid #ddd; }
        .meta { color: #555; font-size: 0.95rem; }
    </style>
</head>
<body>
    <p><a href="{{ route('home') }}">← Home</a></p>
    <h1>Products</h1>
    @forelse ($products as $product)
        <article>
            <strong>{{ $product['name'] }}</strong>
            <div class="meta">Categorie: {{ $product['category']['name'] ?? 'Onbekend' }}</div>
            <p>{{ $product['description'] }}</p>
        </article>
    @empty
        <p>Geen products gevonden.</p>
    @endforelse
</body>
</html>
