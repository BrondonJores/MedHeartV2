
<form action="/recuperation" method="post" class="form_login" @style(['width:100% !important', 'margin: 0 !important'])>'+

    '@csrf {{-- Token de sécurité --}}'+

    '<div class="image_container">'+
        '<img src="{{ asset('storage/images/logo.png') }}" alt="">'+

    '</div>'+
    '<div class="form_container">'+

        '<fieldset class="logo_title_fieldset_info">'+
            '<fieldset>'+
                '<legend> Nom et prenom</legend>'+
                '<i class="fas fa-user"></i>'+
                '<input type="text" name="nom_prenom">'+
                @error('nom_prenom')
                @php AlertHelper::imageToast("Nom et prenom", $message); @endphp
                @enderror

            '</fieldset>'+
            '<fieldset>'+
                '<legend > Matricule</legend>'+
                '<i class="fas fa-lock"></i>'+
                '<input type="text" name="matricule">'+
                @error('matricule')
                @php AlertHelper::imageToast("Matricule", $message); @endphp
                @enderror

            '</fieldset>'+
        '</fieldset>'+


        '<a href="/">Se connecter ici</a>'+
        '<div class="login_button">'+
            '<input required type="submit" value="Récupérer">'+
        '</div>'+
    '</div>'+
'</form>'

