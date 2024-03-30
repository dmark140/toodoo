<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Title;

class Titles extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['Title','uuid'];
    protected $primaryKey= 'uuid';
    protected $keyType= 'string';
    public $incrementing = false;
}
