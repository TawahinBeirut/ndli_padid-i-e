<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="/register">
                    @csrf
                        <h2 class="form-title">Créer votre compte </h2>
                        <div class="form-group name">
                            <input type="text" class="form-input" name="username" id="username" placeholder="username" value="{{ old('username') }}"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="skin" id="skin" placeholder="skin" value="{{ old('skin') }}"/>
                        </div>
                        <div class="form-group name">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Mot de Passe"/>
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeter votre Mot de Passe"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Valider"/>
                        </div>
                    </form>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <p class="loginhere">
                        Vous avez déjà un compte ? <a href="/login" class="loginhere-link">Connectez-vous</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
    