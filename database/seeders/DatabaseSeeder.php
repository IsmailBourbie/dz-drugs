<?php

namespace Database\Seeders;

use App\Models\Dci;
use App\Models\Dosage;
use App\Models\Drug;
use App\Models\Form;
use App\Models\Laboratory;
use Illuminate\Database\Seeder;
use Illuminate\support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $laboratories = Laboratory::factory(5)->create();



        $dci = [];

        $dci[] = Dci::factory()->create([
            'name' => 'Paracetamol',
            'slug' => Str::slug('Paracetamol') . '-'  . rand(1000, 9999)
        ]);

        $dci[] = Dci::factory()->create([
            'name' => 'Diclofenac',
            'slug' => Str::slug('Diclofenac') . '-'  . rand(1000, 9999)
        ]);

        $dci[] = Dci::factory()->create([
            'name' => 'Omeprazole',
            'slug' => Str::slug('Omeprazole') . '-'  . rand(1000, 9999)
        ]);

        $dci[] = Dci::factory()->create([
            'name' => 'Lansoprazole',
            'slug' => Str::slug('Lansoprazole') . '-'  . rand(1000, 9999)
        ]);

        $dci[] = Dci::factory()->create([
            'name' => 'Metronidazol',
            'slug' => Str::slug('Metronidazol') . '-'  . rand(1000, 9999)
        ]);



        Form::factory()->create([
            'name' => 'Comprimé',
            'suffix' => 'comprime',
        ]);
        Form::factory()->create([
            'name' => 'Suspension buvable',
            'suffix' => 'suspension-buvable',
        ]);
        Form::factory()->create([
            'name' => 'Suppositoire',
            'suffix' => 'suppositoire',
        ]);

        Dosage::factory()->create([
            'name' => '150mg',
            'suffix' => '150mg'
        ]);
        Dosage::factory()->create([
            'name' => '500mg',
            'suffix' => '500mg'
        ]);
        Dosage::factory()->create([
            'name' => '125mg/ml',
            'suffix' => '125mg/ml'
        ]);
        Dosage::factory()->create([
            'name' => '1000mg',
            'suffix' => '1000mg'
        ]);
        Dosage::factory()->create([
            'name' => '250mg',
            'suffix' => '250mg'
        ]);
        Dosage::factory()->create([
            'name' => '75mg',
            'suffix' => '75mg'
        ]);
        Dosage::factory()->create([
            'name' => '20mg',
            'suffix' => '20mg'
        ]);
        Dosage::factory()->create([
            'name' => '30mg',
            'suffix' => '30mg'
        ]);
        Dosage::factory()->create([
            'name' => '2.4%',
            'suffix' => '2.4%'
        ]);


        Drug::factory()->create([
            'name' => 'Paralgan',
            'slug' => Str::slug('Paralgan') . '-' . rand(1000, 9999),
            'dci_id' => 1,
            'laboratory_id' => 1,
            'dosage_id' => 2,
            'form_id' => 1
        ]);

        Drug::factory()->create([
            'name' => 'Doliprane',
            'slug' => Str::slug('Doliprane') . '-' . rand(1000, 9999),
            'dci_id' => 1,
            'laboratory_id' => 2,
            'dosage_id' => 1,
            'form_id' => 3
        ]);

        Drug::factory()->create([
            'name' => 'Doliprane',
            'slug' => Str::slug('Doliprane') . '-' . rand(1000, 9999),
            'dci_id' => 1,
            'laboratory_id' => 2,
            'dosage_id' => 4,
            'form_id' => 1
        ]);

        Drug::factory()->create([
            'name' => 'Doliprane',
            'slug' => Str::slug('Doliprane') . '-' . rand(1000, 9999),
            'dci_id' => 1,
            'laboratory_id' => 2,
            'dosage_id' => 9,
            'form_id' => 2
        ]);

        Drug::factory()->create([
            'name' => 'Clofenal',
            'slug' => Str::slug('Clofenal') . '-' . rand(1000, 9999),
            'dci_id' => 2,
            'laboratory_id' => 1,
            'dosage_id' => 6,
            'form_id' => 1
        ]);
        Drug::factory()->create([
            'name' => 'Flagyl',
            'slug' => Str::slug('Flagyl') . '-' . rand(1000, 9999),
            'dci_id' => 5,
            'laboratory_id' => 3,
            'dosage_id' => 3,
            'form_id' => 2
        ]);
        Drug::factory()->create([
            'name' => 'Flagyl',
            'slug' => Str::slug('Flagyl') . '-' . rand(1000, 9999),
            'dci_id' => 5,
            'laboratory_id' => 3,
            'dosage_id' => 2,
            'form_id' => 1
        ]);
        Drug::factory()->create([
            'name' => 'Proton',
            'slug' => Str::slug('Proton') . '-' . rand(1000, 9999),
            'dci_id' => 3,
            'laboratory_id' => 1,
            'dosage_id' => 7,
            'form_id' => 1
        ]);
        Drug::factory()->create([
            'name' => 'Zopra',
            'slug' => Str::slug('Zopra') . '-' . rand(1000, 9999),
            'dci_id' => 4,
            'laboratory_id' => 1,
            'dosage_id' => 8,
            'form_id' => 1
        ]);
    }
}
