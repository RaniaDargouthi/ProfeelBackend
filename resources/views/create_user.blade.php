<!-- resources/views/create_user.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Créer un nouvel utilisateur</h2>

    <!-- Afficher les erreurs de validation -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulaire de création d'utilisateur -->
    <form action="{{ route('user.create') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nom complet</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="firstname" class="form-label">Prénom</label>
            <input type="text" name="firstname" id="firstname" class="form-control" value="{{ old('firstname') }}" required>
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Nom de famille</label>
            <input type="text" name="lastname" id="lastname" class="form-control" value="{{ old('lastname') }}" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Genre</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Homme</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Femme</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="birthdate" class="form-label">Date de naissance</label>
            <input type="date" name="birthdate" id="birthdate" class="form-control" value="{{ old('birthdate') }}" required>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Numéro de téléphone</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number') }}" required>
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Pays</label>
            <input type="text" name="country" id="country" class="form-control" value="{{ old('country') }}" required>
        </div>

        <div class="mb-3">
            <label for="speciality" class="form-label">Spécialité</label>
            <input type="text" name="speciality" id="speciality" class="form-control" value="{{ old('speciality') }}" required>
        </div>

        <div class="mb-3">
            <label for="cin" class="form-label">CIN</label>
            <input type="text" name="cin" id="cin" class="form-control" value="{{ old('cin') }}" required>
        </div>

        <div class="mb-3">
            <label for="cv" class="form-label">CV</label>
            <input type="file" name="cv" id="cv" class="form-control" accept=".pdf,.doc,.docx">
        </div>

        <div class="mb-3">
            <label for="profil_picture" class="form-label">Photo de profil</label>
            <input type="file" name="profil_picture" id="profil_picture" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="is_valid" class="form-label">Utilisateur validé</label>
            <input type="checkbox" name="is_valid" id="is_valid" value="1" {{ old('is_valid') ? 'checked' : '' }}>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Rôle</label>
            <input type="text" name="role" id="role" class="form-control" value="{{ old('role') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Créer un utilisateur</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
