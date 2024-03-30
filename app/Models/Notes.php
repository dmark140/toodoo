<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['note','completed','uuid','title_id'];

    protected $primaryKey = 'uuid';
    protected $keyType = 'string';
    public $incrementing = false;
}
