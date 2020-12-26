<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 21/05/2018
 * Time: 2:28 PM
 */


namespace App\Scopes;

use App\Models\Message;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class UserScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $table = $model->getTable();
        $user = auth()->user();
        $userID = $user->id;
        $table = $model->getTable();

        $columns = $model
            ->getConnection()
            ->getSchemaBuilder()
            ->getColumnListing($table);
        $builder
            ->orderBy($table . '.created_at', 'desc')
            ->where('user_id', $userID);


    }


    /**
     * Extend the query builder with the needed functions.
     *
     * @param Builder $builder
     */
    public function extend(Builder $builder)
    {
        $builder->macro('allUser', function (Builder $builder) {
            return $builder->withoutGlobalScope($this);
        });
    }
}
