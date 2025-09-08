<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="icon"
      href="{{ asset('assets/images/logo.png') }}"
      type="image/x-icon"
    />
    <title>Connexion Admin - Masadigitale</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="card shadow-lg p-4" style="width: 400px; border-radius: 15px;">
        <div class="text-center mb-4">
            <a href="{{ route('home.index') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Masadigitale" width="80">
            </a>
           
            <h4 class="mt-3">Espace Administrateur</h4>
            <p class="text-muted">Connectez-vous pour continuer</p>
        </div>

        <!-- Formulaire de connexion -->
        <form action="{{ route('admin.login.store') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="email">Adresse e-mail</label>
                <input
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    id="email"
                    name="email"
                    placeholder="Entrez votre email"
                    
                >
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password">Mot de passe</label>
                <input
                    type="password"
                    class="form-control @error('password') is-invalid @enderror"
                    id="password"
                    name="password"
                    placeholder="Mot de passe"
                    required
                >
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Se souvenir de moi</label>
                </div>
                <!-- <a href="#" class="text-decoration-none">Mot de passe oublié ?</a> -->
            </div>

            <button type="submit" class="btn btn-success w-100">Se connecter</button>
        </form> 
    </div>

</body>
</html>
