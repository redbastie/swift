<?php

namespace Redbastie\Swift\Traits;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

trait SwiftModel
{
    use HasFactory;

    public function getFillable()
    {
        return Schema::getColumnListing($this->getTable());
    }

    public function migration(Blueprint $table)
    {
        $table->id();
        $table->timestamps();
    }

    public function definition(Generator $faker)
    {
        return [];
    }
}
