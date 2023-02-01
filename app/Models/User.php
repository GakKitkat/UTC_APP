<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\softDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pre_name', //คำนำหน้าชื่อ
        'frist_name', //ชื่อ
        'last_name', //นามสกุล
        'email', //อีเมล์ผู้ใช้งาน
        'password', // รหัสผ่าน
        'ID_card_code', //รหัสบัตรประจำตัวประชาชน
        'address', //ที่อยู่นักเรียน
        'type', //ประเภท  เช่น นักเรียน ครู แอดมิน
        'status', //สถานะการใช้งาน
    ];

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
}
