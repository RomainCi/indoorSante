<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Formulaire
 *
 * @property int $id
 * @property int $users_id
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Formulaire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Formulaire newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Formulaire query()
 * @method static \Illuminate\Database\Eloquent\Builder|Formulaire whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formulaire whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formulaire whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formulaire whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formulaire whereUsersId($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\FormulaireFactory factory(...$parameters)
 */
class Formulaire extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
}
