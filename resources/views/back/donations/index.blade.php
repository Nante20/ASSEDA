<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des dons</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="text-center mb-4">
    <h1>Liste des dons</h1>
    </div>
    <div class="container mt-5">


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Montant (€)</th>
                    <th>ID Stripe</th>
                    <th>Statut</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                    <tr>
                        <td>{{ $donation->id }}</td>
                        <td>{{ $donation->email }}</td>
                        <td>{{ $donation->amount }}</td>
                        <td>{{ $donation->payment_intent_id }}</td>
                        <td>{{ $donation->status }}</td>
                        <td>{{ $donation->created_at }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Retour au Dashboard</a>
</body>
</html>
