<?php

namespace App\Helpers;

use Random\RandomException;

class Generator
{
    /**
     * @throws RandomException
     */
    public static function genererMatricule($role) : string{
        $test = strtolower($role);
        $lettre="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $chiffre="0123456789";
        $year= date('Y');
        $val = $year[2]."".$year[3];
        $maxlettre = strlen($lettre) - 1;
        $maxchiffre = strlen($chiffre) - 1;

        switch ($test) {
            case 'patient':
                $matricule = $val."PA";
                break;

            case 'laborantin':
                $matricule = $val."LA";
                break;

            case 'medecin':
                $matricule = $val."ME";
                break;

            case 'infirmier':
                $matricule = $val."IN";
                break;

            case 'receptionniste':
                $matricule = $val."RE";
                break;

            default:
                exit(1);
                break;
        }

        for ($i=0; $i < 2; $i++)
            $matricule .= $chiffre[random_int(0,$maxchiffre)];

        $matricule .= $lettre[random_int(0,$maxlettre)];
        $matricule .= $chiffre[random_int(0,$maxchiffre)];

        for ($i=0; $i < 2; $i++)
            $matricule .= $lettre[random_int(0,$maxlettre)];

        return $matricule;

    }

    /**
     * @throws RandomException
     */
    public static function genererOccurence() : string{
        $lettre="0123456789";
        $maxlettre = strlen($lettre)-1;

        $occurence = "";

        for ($i=0; $i < 6  ; $i++) {
            $occurence.=$lettre[random_int(0, $maxlettre)];
        }

        return $occurence;
    }

    public static function genererPassword() : string{
        $lettre="abcdefghijklmnopqrstuvwxyz#_-@$&*^ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $maxlettre = strlen($lettre)-1;

        $password = "";

        for ($i=0; $i < 10 ; $i++) {

                $password .= $lettre[random_int(0, $maxlettre)];

        }

        return $password;
    }

    /**
     * @throws RandomException
     */
    public static function genererLogin($nom, $prenom) : string{
        $occurence = self::genererOccurence();
        return $prenom."_".$nom."".$occurence."@medHeart.com";
    }
}
