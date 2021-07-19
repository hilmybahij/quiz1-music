<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class played extends Model
{
    use HasFactory;
    protected$table="tb_played";
    protected$primaryKey='played';
    protected$fillable=['artist_id','album_id','track_id'];
}
