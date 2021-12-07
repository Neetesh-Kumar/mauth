<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reg_img', 'user_id', 'reg_password', 'reg_fname','reg_lname','reg_sonof','reg_grandchild','reg_education','reg_address','reg_work','reg_work_address','reg_nic','reg_datebirth','reg_number','reg_landline','reg_wife','reg_daughter','reg_grand_daughter','reg_childerns','reg_child1_name','reg_child1_age','reg_child1_education','reg_child1_nic','reg_child1_marital','reg_child2_name','reg_child2_age','reg_child2_education','reg_child2_nic','reg_child2_marital','reg_child3_name','reg_child3_age','reg_child3_education','reg_child3_nic','reg_child3_marital','reg_child4_name','reg_child4_age','reg_child4_education','reg_child4_nic','reg_child4_marital','reg_child5_name','reg_child5_age','reg_child5_education','reg_child5_nic','reg_child5_marital','reg_child6_name','reg_child6_age','reg_child6_education','reg_child6_nic','reg_child6_marital','reg_child7_name','reg_child7_age','reg_child7_education','reg_child7_nic','reg_child7_marital'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'reg_password',
        
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
    ];
}
