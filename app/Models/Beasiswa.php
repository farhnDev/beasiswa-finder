<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Spatie\Permission\Traits\HasRoles;

class Beasiswa extends Model
{
    use HasFactory;


    protected $table = 'beasiswa';

    protected $fillable = [
        'title',
        'description_short',
        'description_long',
        'image',
        'waktu',
        'tempat',
        'kuota',
        'sasaran',
        'persyaratan',
        'berkas_pendaftaran',
        'mekanisme_pendaftaran',
        'seleksi_berkas',
        'jadwal_beasiswa',
        'kontak',
        'jenis_pendidikan',
        'bookmark'
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

// Beasiswa.php

public function bookmarkedBy()
{
    return $this->belongsToMany(User::class, 'bookmarks', 'beasiswa_id', 'user_id')->withTimestamps();
}
}
