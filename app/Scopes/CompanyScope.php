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

class CompanyScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $table = $model->getTable();
        $user = auth()->user();
        $compID = $user->theCompany->pluck('id')->toArray();

        $table = $model->getTable();

        //dd($compID);
        $columns = $model
            ->getConnection()
            ->getSchemaBuilder()
            ->getColumnListing($table);
        $builder
            ->orderBy($table . '.created_at', 'desc')
            ->whereIn('company_id', $compID);


    }


    /**
     * Extend the query builder with the needed functions.
     *
     * @param Builder $builder
     */
    public function extend(Builder $builder)
    {
        $builder->macro('allCompanies', function (Builder $builder) {
            return $builder->withoutGlobalScope($this);
        });
    }
}
