<?php

namespace App\Http\Controllers;

use App\Helpers\AlertHelper;
use App\Http\Requests\RecuperationcompteRequest;
use App\Models\patients;
use App\Models\User;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use App\Helpers\generator;
use Illuminate\Support\Facades\View;
use RealRashid\SweetAlert\Facades\Alert;


class Recuperation_compte_controller extends Controller
{
    public function index() : \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('recuperation_compte');
    }

    public function notification(string $title, string $message, string $redirect, string $redirect_link): \Illuminate\Http\RedirectResponse | View
    {
        AlertHelper::imageToast($title, $message, $redirect_link );
        return redirect()->route($redirect);
    }
    public function store(RecuperationcompteRequest $request) : \Illuminate\Http\RedirectResponse | View
    {
        if(($request->input("nom_prenom") != NULL) && ($request->input("matricule") != NULL) && ($request->input("role") != NULL)) {
            $role = $request->input("role");
            $matricule = $request->input("matricule");
            switch ($role) {
                case 'patient':
                    $patient = Patients::where('matricule', $matricule)->first();
                    if ($patient != NULL) {
                        $id = $patient->id;
                        $user = User::find($patient->email, 'email');
                        if ($user != NULL) {
                            $nom = $request->input("nom_prenom");
                            $titre = "Compte déjà récupéré";
                            $date_creation = $request->input("created_at");
                            $message = "Mr " . $nom. " !, ce compte a déjà été récupéré le " .$date_creation. " si ça ne provient pas de vous veillez vous rapprocher de l'administrateur. Merci pour votre comprehension.";
                            $link = "Récuperation de compte";
                            $link_redirect = "/recuperation";
                            $this->notification($titre, $message, $link, $link_redirect);
                        } else {
                            $nom = ucwords(strtolower($patient->nom));
                            $prenom = ucwords(strtolower($patient->prenom));
                            $tempnom = explode(" ", $nom);
                            $nomvalide = "";
                            $tempprenom = explode(" ", $prenom);
                            $prenomvalide = "";
                            $login = "";
                            for ($i = 0; $i < count($tempprenom); $i++) {
                                $prenomvalide .= $tempprenom[$i];
                                $login .= $tempprenom[$i];
                            }
                            $login .= "_";
                            for ($i = 0; $i < count($tempnom); $i++) {
                                $nomvalide .= $tempnom[$i];
                                $login .= $tempnom[$i];
                            }
                            $login .= "@medHeart.com";
                            $user_actif = User::where('name', $login)->get();


                            if (1 >= $user_actif->count()) {

                                $login = Generator::genererLogin($nomvalide, $prenomvalide);
                                $password = Generator::genererPassword();
                                $hashpassword = password_hash($password, PASSWORD_BCRYPT);
                                $sql4 = "INSERT INTO users(email, password, id_proprietaire, id_role) VALUES('$login', '$hashpassword', $id, " . $row3["id_role"] . ")";

                                try {
                                    if ($statement4->execute()) {
                                        display_message_recuperation($login, $password, $row3["nom_role"]);
                                    }
                                } catch (exception $ex) {
                                    $titre = "Compte inexistant";
                                    $message = $ex->getMessage();
                                    $link = "Récuperation de compte";
                                    $link_redirect = "/recuperation";
                                    $this->notification($titre, $message, $link, $link_redirect);
                                }


                            } else {
                                $password = genererPassword();
                                $hashpassword = password_hash($password, PASSWORD_DEFAULT);
                                $sql4 = "INSERT INTO users(email, password, id_proprietaire, id_role) VALUES('$login', '$hashpassword', $id, " . $row3["id_role"] . ")";

                                try {
                                    if ($statement4->execute()) {
                                        display_message_recuperation($login, $password, $row3["nom_role"]);
                                    }
                                } catch (exception $ex) {
                                    $titre = "Compte inexistant";
                                    $message = $ex->getMessage();
                                    $link = "Récuperation de compte";
                                    $link_redirect = "/recuperation";
                                    return $this->notification($titre, $message, $link, $link_redirect);
                                }

                            }
                        }


                    } else {
                        $titre = "Compte inexistant";
                        $message = "Mr " . $request->input("nom_prenom"). " !, ce compte n'est pas enregistré dans le système si vous êtes le propriétaire de ce compte veillez vous rapprocher de l'administrateur. Merci pour votre comprehension ";
                        $link = "Récuperation de compte";
                        $link_redirect = "/recuperation";
                        return $this->notification($titre, $message, $link, $link_redirect);
                    }
                    break;
                default :
                        $titre = "Profil innexistant";
                        $message = "Profil inexistant";
                        $link = "Récuperation de compte";
                        $link_redirect = "/recuperation";
                        return $this->notification($titre, $message, $link, $link_redirect);
                break;
            }
        }
    }
}
