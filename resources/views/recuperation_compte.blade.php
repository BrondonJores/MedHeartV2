@php use App\Helpers\AlertHelper; @endphp
<x-page_layout_connection>
    <div class="GlassEffect">
        <form action="/recuperation" method="post" class="form_login">

            @csrf {{-- Token de sécurité --}}

            <div class="image_container">
                <img src="{{ asset('storage/images/logo.png') }}" alt="">

            </div>
            <div class="form_container">

                <fieldset class="logo_title_fieldset_info">
                    <fieldset>
                        <legend> Nom et prenom</legend>
                        <i class="fas fa-user"></i>
                        <input type="text" name="nom_prenom">
                        @error('nom_prenom')
                            @php AlertHelper::imageToast("Nom et prenom", $message); @endphp
                        @enderror

                    </fieldset>
                    <fieldset>
                        <legend > Matricule</legend>
                        <i class="fas fa-lock"></i>
                        <input type="text" name="matricule">

                        @error('matricule')
                            @php AlertHelper::imageToast("Matricule", $message); @endphp
                        @enderror

                    </fieldset>
                </fieldset>

                <h4>Je suis ...</h4>

                <div class="role-select-wrapper">
                    <label class="role-card">
                        <input type="radio" name="role" value="receptionniste" />
                        <div class="content">
                        <i class="fas fa-user-tie"></i>
                        <span>Réceptionniste</span>
                        </div>
                    </label>

                    <label class="role-card">
                        <input type="radio" name="role" value="medecin" />
                        <div class="content">
                        <i class="fas fa-user-md"></i>
                        <span>Médecin</span>
                        </div>
                    </label>

                    <label class="role-card">
                        <input type="radio" name="role" value="infirmier" />
                        <div class="content">
                        <i class="fas fa-user-nurse"></i>
                        <span>Infirmier</span>
                        </div>
                    </label>

                    <label class="role-card">
                        <input type="radio" name="role" value="patient" />
                        <div class="content">
                        <i class="fas fa-heartbeat"></i>
                        <span>Patient</span>
                        </div>
                    </label>

                    <label class="role-card">
                        <input type="radio" name="role" value="laborantin" />
                        <div class="content">
                        <i class="fas fa-vial"></i>
                        <span>Laborantin</span>
                        </div>
                    </label>
                    @error('role')
                        @php AlertHelper::imageToast("Role", $message); @endphp
                    @enderror
                </div>
                <a href="/">Se connecter ici</a>
                <div class="login_button">
                    <input required type="submit" value="Récupérer">
                </div>
            </div>
        </form>
    </div>

</x-page_layout_connection>
