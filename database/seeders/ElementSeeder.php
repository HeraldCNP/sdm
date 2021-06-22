<?php

namespace Database\Seeders;

use App\Models\Element;
use Illuminate\Database\Seeder;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $element = new Element();
        $element->name = 'Zinc';
        $element->symbol = '% Zn';
        $element->price = 40;
        $element->save();

        $element = new Element;
        $element->name = 'Plata';
        $element->symbol = 'D.M.Ag';
        $element->price = 40;
        $element->save();

        $element = new Element;
        $element->name = 'Plomo';
        $element->symbol = '% Pb';
        $element->price = 40;
        $element->save();

        $element = new Element;
        $element->name = 'Estaño';
        $element->symbol = '% Sn';
        $element->price = 40;
        $element->save();

        $element = new Element;
        $element->name = 'Antimonio';
        $element->symbol = '% Sb';
        $element->price = 80;
        $element->save();

        $element = new Element;
        $element->name = 'Cobre';
        $element->symbol = '% Cu';
        $element->price = 80;
        $element->save();

        $element = new Element;
        $element->name = 'Oro';
        $element->symbol = '% Au';
        $element->price = 120;
        $element->save();
    }
}
