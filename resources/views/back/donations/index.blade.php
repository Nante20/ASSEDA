<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des dons</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">

        <h1>Liste des dons</h1>
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
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour à gérer les pages</a>
</body>
</html>
