<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FormulaireVerifications
 *
 * @property int $id
 * @property string $token
 * @property string $content
 * @property string $firstname
 * @property string $lastname
 * @property string $phone
 * @property string $email
 * @property string|null $occupation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications whereOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormulaireVerifications whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FormulaireVerifications extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
}
