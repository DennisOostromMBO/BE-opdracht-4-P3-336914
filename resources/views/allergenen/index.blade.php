<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergenen Overzicht</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Allergenen Overzicht</h1>
        
        <!-- Filter Formulier -->
        <form action="{{ route('allergenen.index') }}" method="GET" class="mb-4">
            <div class="flex items-center">
                <label for="allergeen" class="mr-2">Selecteer Allergeen:</label>
                <select name="allergeen" id="allergeen" class="border border-gray-300 rounded p-2">
                    <option value="">Alle Allergenen</option>
                    @foreach($allergenen as $allergeen)
                        <option value="{{ $allergeen }}" {{ $allergeen == request('allergeen') ? 'selected' : '' }}>
                            {{ $allergeen }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="ml-2 bg-blue-500 text-white px-4 py-2 rounded">maak selectie</button>
            </div>
        </form>

        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm text-left">Product Naam</th>
                    <th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm text-left">Allergeen Naam</th>
                    <th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm text-left">Allergeen Omschrijving</th>
                    <th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm text-left">Aantal Aanwezig</th>
                    <th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm text-left">Info</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($data as $item)
                    <tr class="border-b">
                        <td class="w-1/5 py-3 px-4 text-left">{{ $item->ProductNaam }}</td>
                        <td class="w-1/5 py-3 px-4 text-left">{{ $item->AllergeenNaam }}</td>
                        <td class="w-1/5 py-3 px-4 text-left">{{ $item->AllergeenOmschrijving }}</td>
                        <td class="w-1/5 py-3 px-4 text-left">{{ $item->AantalAanwezig }}</td>
                        <td class="w-1/5 py-3 px-4 text-left">
                            <a href="{{ route('allergenen.show', $item->Id) }}" class="text-blue-500">?</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>