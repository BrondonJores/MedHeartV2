<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $role
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $matricule
 * @property string $nom
 * @property string $prenom
 * @property string $age
 * @property string $sexe
 * @property string $adresse
 * @property string $telephone
 * @property string $email
 * @property int $id_specialite
 * @property int $id_service
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins whereIdService($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins whereIdSpecialite($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins whereMatricule($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins whereSexe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|medecins whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelpermedecins {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $matricule
 * @property string $nom
 * @property string $prenom
 * @property string $age
 * @property string $sexe
 * @property string $adresse
 * @property string $telephone
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients whereMatricule($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients whereSexe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|patients whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperpatients {}
}

