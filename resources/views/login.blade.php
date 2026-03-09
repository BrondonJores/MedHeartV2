<x-page_layout_connection>

    <div class="GlassEffect">
        <form action="/controllers/loginController.php" method="post" class="form_login">
            <div class="image_container">
                <img src="{{ asset('storage/images/logo.png') }}" alt="">
                           
            </div>
            <div class="form_container">
                
                <fieldset class="logo_title_fieldset_info">
                    <fieldset>
                        <legend> Email</legend>
                        <i class="fas fa-user"></i>
                        <input required type="text" name="email" >
                        
                    </fieldset> 
                    <fieldset>
                        <legend > Password</legend>
                        <i class="fas fa-lock"></i>
                        <input required type="password" name="password">
                        
                    </fieldset> 
                </fieldset>
                     
                <h4>Je suis ...</h4>
                
                <div class="role-select-wrapper">
                    <label class="role-card">
                        <input required type="radio" name="role" value="receptionniste" />
                        <div class="content">
                        <i class="fas fa-user-tie"></i>
                        <span>Réceptionniste</span>
                        </div>
                    </label>
                    
                    <label class="role-card">
                        <input required type="radio" name="role" value="medecin" />
                        <div class="content">
                        <i class="fas fa-user-md"></i>
                        <span>Médecin</span>
                        </div>
                    </label>

                    <label class="role-card">
                        <input required type="radio" name="role" value="infirmier" />
                        <div class="content">
                        <i class="fas fa-user-nurse"></i>
                        <span>Infirmier</span>
                        </div>
                    </label>

                    <label class="role-card">
                        <input required type="radio" name="role" value="patient" />
                        <div class="content">
                        <i class="fas fa-heartbeat"></i>
                        <span>Patient</span>
                        </div>
                    </label>

                    <label class="role-card">
                        <input required type="radio" name="role" value="laborantin" />
                        <div class="content">
                        <i class="fas fa-vial"></i>
                        <span>Laborantin</span>
                        </div>
                    </label>
                </div>
                <a href="/recuperation">Récupérer vos identifiants ici</a>
                <div class="login_button">
                    <input required type="submit" value="Connecter">
                </div>
            </div>
        </form>
    </div>

</x-page_layout_connection>
