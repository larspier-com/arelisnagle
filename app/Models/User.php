<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Relative;
use App\Models\SupportFiles;
use App\Models\HealthCondition;
use App\Models\PersonalReference;
use Laravel\Sanctum\HasApiTokens;
use App\Models\YellowDragonFraction;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name',
        'email',
        'whatsapp',
        'telegram',
        'mobile',
        'mobile_2',
        'passport',
        'passport_authority',
        'passport_dateofexpiry',
        'passport_nationality',
        'IDdocument',
        'profession',
        'gender',
        'birthdate',
        'marital_status',
        'blood_type',
        'country',
        'state',
        'city',
        'postal_code',
        'address',
        'neighborhood',
        'coordinator',
        'emergency_contact_name',
        'emergency_contact_phone',
        'emergency_contact_email',
        'photo',
        'documentid_file',
        'passport_file',
        'proof-of-address_file',
        'judicial-record_file',
        'rut_file',
        'bank_name',
        'bank_account_number',
        'type-of-bank-account',
        'pic_security_contact_name',
        'pic_security_contact_phone',
        'pic_security_contact_email',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function healthcondition(): HasOne
    {
        return $this->hasOne(HealthCondition::class);
    }

    /**
     * Get the comments for the blog post.
     */
    public function personalreferences(): HasMany
    {
        return $this->hasMany(PersonalReference::class);
    }

    /**
     * Get the comments for the blog post.
     */
    public function relatives(): HasMany
    {
        return $this->hasMany(Relative::class);
    }

    /**
     * Get the comments for the blog post.
     */
    public function yellowdragonfraction(): HasMany
    {
        return $this->hasMany(YellowDragonFraction::class);
    }

    /**
     * Get the comments for the blog post.
     */
    public function supportfiles(): HasMany
    {
        return $this->hasMany(SupportFiles::class);
    }
}
