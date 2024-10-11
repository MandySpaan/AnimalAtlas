<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal List</title>
</head>
<body>
    <h1>Animal List</h1>

    <ul>
        @forelse ($animals as $animal)
            <li>
                <strong>{{ $animal->name }}</strong><br>
                Scientific Name: {{ $animal->scientific_name }}<br>
                Description: {{ $animal->description }}<br>
                Category: {{ $animal->category }}<br>
                Type: {{ $animal->type }}<br>
                Diet: {{ $animal->diet }}<br>
                Habitat: {{ $animal->habitat }}<br>
            </li>
            <form action="{{ route('animals.like', $animal->id) }}" method="POST">
                    @csrf
                    <button type="submit">Like</button>
            </form>
        @empty
            <li>No animals found.</li>
        @endforelse
    </ul>

</body>
</html>
