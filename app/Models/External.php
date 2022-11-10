<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class External extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'external_source'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

}
