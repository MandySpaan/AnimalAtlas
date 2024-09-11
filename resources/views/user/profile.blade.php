<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>

    <div>
        <strong>Name:</strong> {{ $user->name }}<br>
        <strong>Email:</strong> {{ $user->email }}<br>
        <strong>Joined:</strong> {{ $user->created_at->format('F j, Y') }}<br>

        <!-- Additional user details can be added here -->
    </div>

    <h2>Liked Animals</h2>
    <ul>
        @forelse ($user->likedAnimals as $animal)
            <li>
                <strong>{{ $animal->name }}</strong><br>
                Scientific Name: {{ $animal->scientific_name }}<br>
                Description: {{ $animal->description }}<br>
                Category: {{ $animal->category }}<br>
                Type: {{ $animal->type }}<br>
                Diet: {{ $animal->diet }}<br>
                Habitat: {{ $animal->habitat }}<br>
            </li>
        @empty
            <li>No liked animals found.</li>
        @endforelse
    </ul>
</body>
</html>
