<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public function contacts(){
        return $this->hasMany(Contact::class);
    }

    protected $table = 'categories';

    public function getData(){
        $categories = Category::table($this->table)->get();
        return $categories;
    }

    public function getLists()
    {
        $categories = Category::pluck('content', 'id');

        return $categories;
}
}