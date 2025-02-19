<!-- filepath: /C:/Users/denni/Herd/be-opdracht-04/resources/views/allergenen/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergeen Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Allergeen Details</h1>
        <div class="bg-white shadow-md rounded-lg p-4">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm text-left">Attribuut</th>
                        <th class="w-4/5 py-3 px-4 uppercase font-semibold text-sm text-left">Waarde</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="border-b">
                        <td class="w-1/5 py-3 px-4 text-left"><strong>Leverancier Naam:</strong></td>
                        <td class="w-4/5 py-3 px-4 text-left">{{ $item->LeverancierNaam }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="w-1/5 py-3 px-4 text-left"><strong>Contact Persoon:</strong></td>
                        <td class="w-4/5 py-3 px-4 text-left">{{ $item->ContactPersoon }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="w-1/5 py-3 px-4 text-left"><strong>Straat Naam:</strong></td>
                        <td class="w-4/5 py-3 px-4 text-left">{{ $item->StraatNaam }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="w-1/5 py-3 px-4 text-left"><strong>Huis Nummer:</strong></td>
                        <td class="w-4/5 py-3 px-4 text-left">{{ $item->HuisNummer }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="w-1/5 py-3 px-4 text-left"><strong>Postcode:</strong></td>
                        <td class="w-4/5 py-3 px-4 text-left">{{ $item->Postcode }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="w-1/5 py-3 px-4 text-left"><strong>Stad:</strong></td>
                        <td class="w-4/5 py-3 px-4 text-left">{{ $item->Stad }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <a href="{{ route('allergenen.index') }}" class="text-blue-500">Terug naar overzicht</a>
        </div>
    </div>
</body>
</html>