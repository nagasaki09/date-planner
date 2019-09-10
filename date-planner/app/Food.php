<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    // カラムに代入を拒否しない
   protected $guarded = [];


   /**
     * タグでフィルタリング
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string|null $id
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTagFilter($query, ?string $id)
    {
        if (!is_null($id)) {
            return $query->where('id', $id);
        }
        return $query;
    }
}
