<?php

use Caronae\Models\Neighborhood;
use Caronae\Models\Zone;
use Illuminate\Database\Seeder;

class NeighborhoodSeeder extends Seeder
{
    public function run()
    {
        DatabaseSeeder::emptyTable('neighborhoods');
        DatabaseSeeder::emptyTable('zones');

        $centro = Zone::create(['name' => 'Centro'])->id;
        $zonaSul = Zone::create(['name' => 'Zona Sul'])->id;
        $zonaOeste = Zone::create(['name' => 'Zona Oeste'])->id;
        $zonaNorte = Zone::create(['name' => 'Zona Norte'])->id;
        $zonaleste = Zone::create(['name' => 'Zona Leste'])->id;
        $fazendinha = Zone::create(['name' => 'Fazendinha'])->id;

        collect([
            ['zone_id' => $centro, 'name' => 'Central', 'distance' => 8.6],
            ['zone_id' => $centro, 'name' => 'Beirol', 'distance' => 6.1],
            ['zone_id' => $centro, 'name' => 'Jesus de Nazaré', 'distance' => 9.8],
            ['zone_id' => $centro, 'name' => 'Laguinho', 'distance' => 10.5],
            ['zone_id' => $centro, 'name' => 'Santa Rita', 'distance' => 8.2],
            ['zone_id' => $centro, 'name' => 'Trem', 'distance' => 8.0],

            ['zone_id' => $zonaNorte, 'name' => 'Boné Azul', 'distance' => 16.2],
            ['zone_id' => $zonaNorte, 'name' => 'Brasil Novo', 'distance' => 18.7],
            ['zone_id' => $zonaNorte, 'name' => 'Infraero I', 'distance' => 15.9],
            ['zone_id' => $zonaNorte, 'name' => 'Infraero II', 'distance' => 16.9],
            ['zone_id' => $zonaNorte, 'name' => 'Jardim Felicidade I', 'distance' => 15.3],
            ['zone_id' => $zonaNorte, 'name' => 'Jardim Felicidade II', 'distance' => 16.4],
            ['zone_id' => $zonaNorte, 'name' => 'Morada das Palmeiras', 'distance' => 18.5],
            ['zone_id' => $zonaNorte, 'name' => 'Novo Horizonte', 'distance' => 17.1],
            ['zone_id' => $zonaNorte, 'name' => 'Pacoval', 'distance' => 11.5],
            ['zone_id' => $zonaNorte, 'name' => 'Renascer I', 'distance' => 14.3],
            ['zone_id' => $zonaNorte, 'name' => 'Renascer II', 'distance' => 15.0],
            ['zone_id' => $zonaNorte, 'name' => 'São Lázaro', 'distance' => 13.7],

            ['zone_id' => $zonaSul, 'name' => 'Araxá', 'distance' => 5.4],
            ['zone_id' => $zonaSul, 'name' => 'Buritizal', 'distance' => 6.6],
            ['zone_id' => $zonaSul, 'name' => 'Congós', 'distance' => 3.4],
            ['zone_id' => $zonaSul, 'name' => 'Conjunto Açucena', 'distance' => 8.1],
            ['zone_id' => $zonaSul, 'name' => 'Jardim Equatorial', 'distance' => 4.8],
            ['zone_id' => $zonaSul, 'name' => 'Jardim Marco Zero', 'distance' => 3.4],
            ['zone_id' => $zonaSul, 'name' => 'Muca', 'distance' => 4.8],
            ['zone_id' => $zonaSul, 'name' => 'Novo Buritizal', 'distance' => 4.6],
            ['zone_id' => $zonaSul, 'name' => 'Pedrinhas', 'distance' => 5.0],
            ['zone_id' => $zonaSul, 'name' => 'Santa Inês', 'distance' => 7.0],
            ['zone_id' => $zonaSul, 'name' => 'Universidade', 'distance' => 1.3],
            ['zone_id' => $zonaSul, 'name' => 'Zerão', 'distance' => 2.3],

            ['zone_id' => $zonaOeste, 'name' => 'Alvorada', 'distance' => 8.3],
            ['zone_id' => $zonaOeste, 'name' => 'Cabralzinho', 'distance' => 11.4],
            ['zone_id' => $zonaOeste, 'name' => 'Marabaixo I', 'distance' => 15.3],
            ['zone_id' => $zonaOeste, 'name' => 'Marabaixo II', 'distance' => 15.9],
            ['zone_id' => $zonaOeste, 'name' => 'Marabaixo III', 'distance' => 17.0],
            ['zone_id' => $zonaOeste, 'name' => 'Nova Esperança', 'distance' => 8.3],

            ['zone_id' => $zonaleste, 'name' => 'Cidade Nova', 'distance' => 11.9],
            ['zone_id' => $zonaleste, 'name' => 'Perpértuo Socorro', 'distance' => 11.3],

            ['zone_id' => $fazendinha, 'name' => 'Fazendinha', 'distance' => 10.3],
            ['zone_id' => $fazendinha, 'name' => 'Chefe Clodoaldo', 'distance' => 6.1],
            ['zone_id' => $fazendinha, 'name' => 'Vale Verde', 'distance' => 8.1],
            ['zone_id' => $fazendinha, 'name' => 'Murici', 'distance' => 8.3],


            

            // ['zone_id' => $centro, 'name' => 'Benfica', 'distance' => 6.8],
            // ['zone_id' => $centro, 'name' => 'Caju', 'distance' => 6.3],
            // ['zone_id' => $centro, 'name' => 'Catumbi', 'distance' => 12.6],
            // ['zone_id' => $centro, 'name' => 'Centro (Bairro)', 'distance' => 11.6],
            // ['zone_id' => $centro, 'name' => 'Cidade Nova', 'distance' => 9.8],
            // ['zone_id' => $centro, 'name' => 'Estácio', 'distance' => 9.6],
            // ['zone_id' => $centro, 'name' => 'Gamboa', 'distance' => 8.9],
            // ['zone_id' => $centro, 'name' => 'Glória', 'distance' => 13.3],
            // ['zone_id' => $centro, 'name' => 'Lapa', 'distance' => 11.6],
            // ['zone_id' => $centro, 'name' => 'Mangueira', 'distance' => 9.2],
            // ['zone_id' => $centro, 'name' => 'Rio Comprido', 'distance' => 10.2],
            // ['zone_id' => $centro, 'name' => 'Santa Teresa', 'distance' => 11.8],
            // ['zone_id' => $centro, 'name' => 'Santo Cristo', 'distance' => 8.0],
            // ['zone_id' => $centro, 'name' => 'Saúde', 'distance' => 10.3],
            // ['zone_id' => $centro, 'name' => 'Vasco da Gama', 'distance' => 6.7],
            // ['zone_id' => $zonaSul, 'name' => 'Botafogo', 'distance' => 16.4],
            // ['zone_id' => $zonaSul, 'name' => 'Catete', 'distance' => 14.4],
            // ['zone_id' => $zonaSul, 'name' => 'Copacabana', 'distance' => 18.1],
            // ['zone_id' => $zonaSul, 'name' => 'Cosme Velho', 'distance' => 16.0],
            // ['zone_id' => $zonaSul, 'name' => 'Flamengo', 'distance' => 14.4],
            // ['zone_id' => $zonaSul, 'name' => 'Gávea', 'distance' => 18.2],
            // ['zone_id' => $zonaSul, 'name' => 'Humaitá', 'distance' => 14.5],
            // ['zone_id' => $zonaSul, 'name' => 'Ipanema', 'distance' => 18.1],
            // ['zone_id' => $zonaSul, 'name' => 'Jardim Botânico', 'distance' => 16.2],
            // ['zone_id' => $zonaSul, 'name' => 'Lagoa', 'distance' => 15.2],
            // ['zone_id' => $zonaSul, 'name' => 'Laranjeiras', 'distance' => 14.4],
            // ['zone_id' => $zonaSul, 'name' => 'Leblon', 'distance' => 17.8],
            // ['zone_id' => $zonaSul, 'name' => 'Leme', 'distance' => 18.4],
            // ['zone_id' => $zonaSul, 'name' => 'Rocinha', 'distance' => 22.2],
            // ['zone_id' => $zonaSul, 'name' => 'São Conrado', 'distance' => 23.3],
            // ['zone_id' => $zonaSul, 'name' => 'Urca', 'distance' => 16.7],
            // ['zone_id' => $zonaSul, 'name' => 'Vidigal', 'distance' => 20.1],
            // ['zone_id' => $zonaOeste, 'name' => 'Anil', 'distance' => 21.8],
            // ['zone_id' => $zonaOeste, 'name' => 'Barra da Tijuca', 'distance' => 26.7],
            // ['zone_id' => $zonaOeste, 'name' => 'Camorim', 'distance' => 31.5],
            // ['zone_id' => $zonaOeste, 'name' => 'Cidade de Deus', 'distance' => 21.7],
            // ['zone_id' => $zonaOeste, 'name' => 'Curicica', 'distance' => 22.5],
            // ['zone_id' => $zonaOeste, 'name' => 'Freguesia de Jacarepaguá', 'distance' => 17.1],
            // ['zone_id' => $zonaOeste, 'name' => 'Gardênia Azul', 'distance' => 20.6],
            // ['zone_id' => $zonaOeste, 'name' => 'Grumari', 'distance' => 44.9],
            // ['zone_id' => $zonaOeste, 'name' => 'Itanhangá', 'distance' => 31.9],
            // ['zone_id' => $zonaOeste, 'name' => 'Jacarepaguá', 'distance' => 25.2],
            // ['zone_id' => $zonaOeste, 'name' => 'Joá', 'distance' => 26.0],
            // ['zone_id' => $zonaOeste, 'name' => 'Praça Seca', 'distance' => 18.0],
            // ['zone_id' => $zonaOeste, 'name' => 'Pechincha', 'distance' => 17.3],
            // ['zone_id' => $zonaOeste, 'name' => 'Recreio dos Bandeirantes', 'distance' => 35.6],
            // ['zone_id' => $zonaOeste, 'name' => 'Tanque', 'distance' => 19.0],
            // ['zone_id' => $zonaOeste, 'name' => 'Taquara', 'distance' => 19.7],
            // ['zone_id' => $zonaOeste, 'name' => 'Vargem Grande', 'distance' => 39.0],
            // ['zone_id' => $zonaOeste, 'name' => 'Vargem Pequena', 'distance' => 34.3],
            // ['zone_id' => $zonaOeste, 'name' => 'Vila Valqueire', 'distance' => 18.8],
            // ['zone_id' => $zonaOeste, 'name' => 'Bangu', 'distance' => 30.5],
            // ['zone_id' => $zonaOeste, 'name' => 'Deodoro', 'distance' => 20.9],
            // ['zone_id' => $zonaOeste, 'name' => 'Gericinó', 'distance' => 32.7],
            // ['zone_id' => $zonaOeste, 'name' => 'Jardim Sulacap', 'distance' => 21.7],
            // ['zone_id' => $zonaOeste, 'name' => 'Magalhães Bastos', 'distance' => 25.5],
            // ['zone_id' => $zonaOeste, 'name' => 'Padre Miguel', 'distance' => 27.9],
            // ['zone_id' => $zonaOeste, 'name' => 'Realengo', 'distance' => 26.3],
            // ['zone_id' => $zonaOeste, 'name' => 'Santíssimo', 'distance' => 37.1],
            // ['zone_id' => $zonaOeste, 'name' => 'Senador Camará', 'distance' => 33.6],
            // ['zone_id' => $zonaOeste, 'name' => 'Vila Militar', 'distance' => 22.5],
            // ['zone_id' => $zonaOeste, 'name' => 'Barra de Guaratiba', 'distance' => 48.9],
            // ['zone_id' => $zonaOeste, 'name' => 'Campo Grande', 'distance' => 42.9],
            // ['zone_id' => $zonaOeste, 'name' => 'Cosmos', 'distance' => 51.5],
            // ['zone_id' => $zonaOeste, 'name' => 'Guaratiba', 'distance' => 49.5],
            // ['zone_id' => $zonaOeste, 'name' => 'Inhoaíba', 'distance' => 53.7],
            // ['zone_id' => $zonaOeste, 'name' => 'Paciência', 'distance' => 53.5],
            // ['zone_id' => $zonaOeste, 'name' => 'Pedra de Guaratiba', 'distance' => 54.0],
            // ['zone_id' => $zonaOeste, 'name' => 'Santa Cruz', 'distance' => 56.0],
            // ['zone_id' => $zonaOeste, 'name' => 'Senador Vasconcelos', 'distance' => 40.5],
            // ['zone_id' => $zonaOeste, 'name' => 'Sepetiba', 'distance' => 61.7],
            // ['zone_id' => $zonaNorte, 'name' => 'Alto da Boa Vista', 'distance' => 21.9],
            // ['zone_id' => $zonaNorte, 'name' => 'Andaraí', 'distance' => 11.9],
            // ['zone_id' => $zonaNorte, 'name' => 'Grajaú', 'distance' => 12.6],
            // ['zone_id' => $zonaNorte, 'name' => 'Maracanã', 'distance' => 10.1],
            // ['zone_id' => $zonaNorte, 'name' => 'Praça da Bandeira', 'distance' => 8.3],
            // ['zone_id' => $zonaNorte, 'name' => 'Tijuca', 'distance' => 12.9],
            // ['zone_id' => $zonaNorte, 'name' => 'Vila Isabel', 'distance' => 11.1],
            // ['zone_id' => $zonaNorte, 'name' => 'Abolição', 'distance' => 11.1],
            // ['zone_id' => $zonaNorte, 'name' => 'Água Santa', 'distance' => 12.6],
            // ['zone_id' => $zonaNorte, 'name' => 'Cachambi', 'distance' => 8.6],
            // ['zone_id' => $zonaNorte, 'name' => 'Del Castilho', 'distance' => 6.7],
            // ['zone_id' => $zonaNorte, 'name' => 'Encantado', 'distance' => 11.1],
            // ['zone_id' => $zonaNorte, 'name' => 'Engenho de Dentro', 'distance' => 11.6],
            // ['zone_id' => $zonaNorte, 'name' => 'Engenho Novo', 'distance' => 10.5],
            // ['zone_id' => $zonaNorte, 'name' => 'Inhaúma', 'distance' => 7.5],
            // ['zone_id' => $zonaNorte, 'name' => 'Jacaré', 'distance' => 7.9],
            // ['zone_id' => $zonaNorte, 'name' => 'Jacarezinho', 'distance' => 8.2],
            // ['zone_id' => $zonaNorte, 'name' => 'Lins de Vasconcelos', 'distance' => 12.4],
            // ['zone_id' => $zonaNorte, 'name' => 'Maria da Graça', 'distance' => 7.5],
            // ['zone_id' => $zonaNorte, 'name' => 'Méier', 'distance' => 11.8],
            // ['zone_id' => $zonaNorte, 'name' => 'Piedade', 'distance' => 12.8],
            // ['zone_id' => $zonaNorte, 'name' => 'Pilares', 'distance' => 10.7],
            // ['zone_id' => $zonaNorte, 'name' => 'Riachuelo', 'distance' => 8.2],
            // ['zone_id' => $zonaNorte, 'name' => 'Rocha', 'distance' => 9.8],
            // ['zone_id' => $zonaNorte, 'name' => 'Sampaio', 'distance' => 8.6],
            // ['zone_id' => $zonaNorte, 'name' => 'São Francisco Xavier', 'distance' => 10.2],
            // ['zone_id' => $zonaNorte, 'name' => 'Todos os Santos', 'distance' => 11.5],
            // ['zone_id' => $zonaNorte, 'name' => 'Bancários', 'distance' => 11.7],
            // ['zone_id' => $zonaNorte, 'name' => 'Cacuia', 'distance' => 11.4],
            // ['zone_id' => $zonaNorte, 'name' => 'Cidade Universitária', 'distance' => 0.0],
            // ['zone_id' => $zonaNorte, 'name' => 'Cocotá', 'distance' => 11.9],
            // ['zone_id' => $zonaNorte, 'name' => 'Freguesia (Ilha do Governador)', 'distance' => 13.1],
            // ['zone_id' => $zonaNorte, 'name' => 'Galeão', 'distance' => 6.7],
            // ['zone_id' => $zonaNorte, 'name' => 'Jardim Carioca', 'distance' => 10.0],
            // ['zone_id' => $zonaNorte, 'name' => 'Jardim Guanabara', 'distance' => 8.4],
            // ['zone_id' => $zonaNorte, 'name' => 'Maré', 'distance' => 3.7],
            // ['zone_id' => $zonaNorte, 'name' => 'Monero', 'distance' => 10.2],
            // ['zone_id' => $zonaNorte, 'name' => 'Pitangueiras', 'distance' => 12.0],
            // ['zone_id' => $zonaNorte, 'name' => 'Portuguesa', 'distance' => 10.0],
            // ['zone_id' => $zonaNorte, 'name' => 'Praia da Bandeira', 'distance' => 12.2],
            // ['zone_id' => $zonaNorte, 'name' => 'Ribeira', 'distance' => 13.6],
            // ['zone_id' => $zonaNorte, 'name' => 'Tauá', 'distance' => 10.7],
            // ['zone_id' => $zonaNorte, 'name' => 'Zumbi', 'distance' => 12.5],
            // ['zone_id' => $zonaNorte, 'name' => 'Acari', 'distance' => 15.7],
            // ['zone_id' => $zonaNorte, 'name' => 'Anchieta', 'distance' => 22.8],
            // ['zone_id' => $zonaNorte, 'name' => 'Barros Filho', 'distance' => 17.3],
            // ['zone_id' => $zonaNorte, 'name' => 'Bento Ribeiro', 'distance' => 19.1],
            // ['zone_id' => $zonaNorte, 'name' => 'Brás de Pina', 'distance' => 14.6],
            // ['zone_id' => $zonaNorte, 'name' => 'Bonsucesso', 'distance' => 4.8],
            // ['zone_id' => $zonaNorte, 'name' => 'Campinho', 'distance' => 17.0],
            // ['zone_id' => $zonaNorte, 'name' => 'Cavalcanti', 'distance' => 11.4],
            // ['zone_id' => $zonaNorte, 'name' => 'Cascadura', 'distance' => 14.1],
            // ['zone_id' => $zonaNorte, 'name' => 'Coelho Neto', 'distance' => 15.6],
            // ['zone_id' => $zonaNorte, 'name' => 'Colégio', 'distance' => 14.6],
            // ['zone_id' => $zonaNorte, 'name' => 'Complexo do Alemão', 'distance' => 7.3],
            // ['zone_id' => $zonaNorte, 'name' => 'Cordovil', 'distance' => 10.0],
            // ['zone_id' => $zonaNorte, 'name' => 'Costa Barros', 'distance' => 19.2],
            // ['zone_id' => $zonaNorte, 'name' => 'Engenheiro Leal', 'distance' => 13.0],
            // ['zone_id' => $zonaNorte, 'name' => 'Engenho da Rainha', 'distance' => 10.3],
            // ['zone_id' => $zonaNorte, 'name' => 'Guadalupe', 'distance' => 21.6],
            // ['zone_id' => $zonaNorte, 'name' => 'Higienópolis', 'distance' => 6.1],
            // ['zone_id' => $zonaNorte, 'name' => 'Honório Gurgel', 'distance' => 18.2],
            // ['zone_id' => $zonaNorte, 'name' => 'Irajá', 'distance' => 14.5],
            // ['zone_id' => $zonaNorte, 'name' => 'Jardim América', 'distance' => 15.0],
            // ['zone_id' => $zonaNorte, 'name' => 'Madureira', 'distance' => 15.3],
            // ['zone_id' => $zonaNorte, 'name' => 'Marechal Hermes', 'distance' => 18.8],
            // ['zone_id' => $zonaNorte, 'name' => 'Manguinhos', 'distance' => 5.7],
            // ['zone_id' => $zonaNorte, 'name' => 'Oswaldo Cruz', 'distance' => 17.6],
            // ['zone_id' => $zonaNorte, 'name' => 'Olaria', 'distance' => 6.3],
            // ['zone_id' => $zonaNorte, 'name' => 'Parada de Lucas', 'distance' => 12.3],
            // ['zone_id' => $zonaNorte, 'name' => 'Parque Colúmbia', 'distance' => 15.6],
            // ['zone_id' => $zonaNorte, 'name' => 'Pavuna', 'distance' => 19.3],
            // ['zone_id' => $zonaNorte, 'name' => 'Penha', 'distance' => 6.4],
            // ['zone_id' => $zonaNorte, 'name' => 'Penha Circular', 'distance' => 8.8],
            // ['zone_id' => $zonaNorte, 'name' => 'Quintino Bocaiuva', 'distance' => 13.2],
            // ['zone_id' => $zonaNorte, 'name' => 'Ramos', 'distance' => 4.4],
            // ['zone_id' => $zonaNorte, 'name' => 'Ricardo de Albuquerque', 'distance' => 22.7],
            // ['zone_id' => $zonaNorte, 'name' => 'Rocha Miranda', 'distance' => 16.2],
            // ['zone_id' => $zonaNorte, 'name' => 'Tomás Coelho', 'distance' => 10.5],
            // ['zone_id' => $zonaNorte, 'name' => 'Turiaçu', 'distance' => 16.4],
            // ['zone_id' => $zonaNorte, 'name' => 'Vaz Lobo', 'distance' => 14.5],
            // ['zone_id' => $zonaNorte, 'name' => 'Vicente de Carvalho', 'distance' => 12.3],
            // ['zone_id' => $zonaNorte, 'name' => 'Vigário Geral', 'distance' => 14.1],
            // ['zone_id' => $zonaNorte, 'name' => 'Vila da Penha', 'distance' => 11.7],
            // ['zone_id' => $zonaNorte, 'name' => 'Vila Kosmos', 'distance' => 12.6],
            // ['zone_id' => $zonaNorte, 'name' => 'Vista Alegre', 'distance' => 13.3],
            // ['zone_id' => $baixada, 'name' => 'Belford Roxo', 'distance' => 25.5],
            // ['zone_id' => $baixada, 'name' => 'Duque de Caxias', 'distance' => 13.5],
            // ['zone_id' => $baixada, 'name' => 'Guapimirim', 'distance' => 66.1],
            // ['zone_id' => $baixada, 'name' => 'Itaguai', 'distance' => 63.3],
            // ['zone_id' => $baixada, 'name' => 'Japeri', 'distance' => 68.2],
            // ['zone_id' => $baixada, 'name' => 'Magé', 'distance' => 52.7],
            // ['zone_id' => $baixada, 'name' => 'Mesquita', 'distance' => 28.2],
            // ['zone_id' => $baixada, 'name' => 'Nilópolis', 'distance' => 27.1],
            // ['zone_id' => $baixada, 'name' => 'Nova Iguaçu', 'distance' => 31.0],
            // ['zone_id' => $baixada, 'name' => 'Paracambi', 'distance' => 74.6],
            // ['zone_id' => $baixada, 'name' => 'Queimados', 'distance' => 45.1],
            // ['zone_id' => $baixada, 'name' => 'São João de Meriti', 'distance' => 19.5],
            // ['zone_id' => $baixada, 'name' => 'Seropédica', 'distance' => 61.4],
            // ['zone_id' => $niteroi, 'name' => 'Região Oceânica (Niterói)', 'distance' => 32.5],
            // ['zone_id' => $niteroi, 'name' => 'Centro (Niterói)', 'distance' => 20.9],
            // ['zone_id' => $niteroi, 'name' => 'São Gonçalo', 'distance' => 29.2],
            // ['zone_id' => $niteroi, 'name' => 'Maricá', 'distance' => 61.3],
            // ['zone_id' => $niteroi, 'name' => 'Itaboraí', 'distance' => 51.9],
            // ['zone_id' => $niteroi, 'name' => 'Tanguá', 'distance' => 66.9],
            // ['zone_id' => $niteroi, 'name' => 'Rio Bonito', 'distance' => 77.9],
        ])->each(function ($data) {
            Neighborhood::create($data);
        });
    }
}
