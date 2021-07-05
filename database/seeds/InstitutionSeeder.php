<?php

use Caronae\Models\Campus;
use Caronae\Models\Hub;
use Caronae\Models\Institution;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    public function run()
    {
        DatabaseSeeder::emptyTable('institutions');
        DatabaseSeeder::emptyTable('hubs');

        $unifap = Institution::create([
            'name' => 'Unifap',
            'slug' => 'Unifap',
            'authentication_url' => 'https://sigaa.unifap.br/sigaa/verTelaLogin.do',
            'going_label' => 'Chegando na UNIFAP',
            'leaving_label' => 'Saindo da UNIFAP',
        ]);

        // $ufrj = Institution::create([
        //     'name' => 'UFRJ',
        //     'slug' => 'ufrj',
        //     'authentication_url' => 'http://cas.ufrj.br/example',
        //     'going_label' => 'Chegando na UFRJ',
        //     'leaving_label' => 'Saindo da UFRJ',
        // ]);

        $campus = Campus::create(['name' => 'Campus Macapá', 'institution_id' => $unifap->id]);
        collect([
            // ['center' => 'Letras', 'name' => 'Letras'],
            ['center' => 'Reitoria', 'name' => 'Reitoria'],
            ['center' => 'DCET', 'name' => 'DCET'],
            ['center' => 'DED', 'name' => 'DED'],
            ['center' => 'DEAD', 'name' => 'DEAD'],
            ['center' => 'DFCH', 'name' => 'DFCH'],
            ['center' => 'DEMAC', 'name' => 'DEMAD'],
            ['center' => 'DEPLA', 'name' => 'DEPLA'],
            ['center' => 'DCBS', 'name' => 'DCBS'],
        ])->each(function ($data) use ($campus) {
            $data['campus_id'] = $campus->id;
            Hub::create($data);
        });

        // $fundao = Campus::create(['name' => 'Cidade Universitária', 'institution_id' => $ufrj->id]);
        // collect([
        //     ['center' => 'CCMN', 'name' => 'CCMN: Frente'],
        //     ['center' => 'CCMN', 'name' => 'CCMN: Fundos'],
        //     ['center' => 'CCS', 'name' => 'CCS: Frente'],
        //     ['center' => 'CCS', 'name' => 'CCS: Fundos'],
        //     ['center' => 'CCS', 'name' => 'CCS: HUCFF'],
        //     ['center' => 'CT', 'name' => 'CT: Bloco A'],
        //     ['center' => 'CT', 'name' => 'CT: Bloco D'],
        //     ['center' => 'CT', 'name' => 'CT: Bloco H'],
        //     ['center' => 'Letras', 'name' => 'Letras'],
        //     ['center' => 'Reitoria', 'name' => 'Reitoria'],
        //     ['center' => 'EEFD', 'name' => 'EEFD'],
        // ])->each(function ($data) use ($fundao) {
        //     $data['campus_id'] = $fundao->id;
        //     Hub::create($data);
        // });

        // $pv = Campus::create(['name' => 'Praia Vermelha', 'institution_id' => $ufrj->id]);
        // collect([
        //     ['center' => 'PV', 'name' => 'Praia Vermelha: Psicologia'],
        //     ['center' => 'PV', 'name' => 'Praia Vermelha: Pinel-Fundos'],
        // ])->each(function ($data) use ($pv) {
        //     $data['campus_id'] = $pv->id;
        //     Hub::create($data);
        // });

        echo "Created institutions.\n";
    }
}
