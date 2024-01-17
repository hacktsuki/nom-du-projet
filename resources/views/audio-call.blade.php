<!-- resources/views/audio-call.blade.php -->

<!-- ... (autres parties du code) ... -->

<body>

    <h1>Appel Audio avec Twilio</h1>

    <!-- Afficher le token généré dans la variable $token -->
    <script>
        var accessToken = "{{ $token }}";
        var userId = "{{ $userId }}";
    </script>

    <!-- Ajouter le code JavaScript pour configurer le client Twilio -->
    <script>
        // ... (code JavaScript précédent) ...

        // Ajouter l'identifiant utilisateur lors de la connexion
        Twilio.Device.setup(accessToken, { debug: true, fakeLocalDTMF: true });

        // ... (autres parties du code JavaScript) ...
    </script>

    <!-- ... (autres parties du code) ... -->

</body>
</html>
