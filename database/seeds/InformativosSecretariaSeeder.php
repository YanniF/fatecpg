<?php

use Illuminate\Database\Seeder;

class InformativosSecretariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$horario = "A secretaria acadêmica da FATEC de Praia Grande atende no seguinte horário: <br>
		<strong>PERÍODO VESPERTINO: </strong> 	 Das 10h30min. às 17h <br>
		<strong>PERÍODO NOTURNO: </strong> 	     Das 18h30min. às 21h";

		$prazos = "<strong>Declarações: </strong>                          05 dias úteis <br>
				   <strong>Atestado de Frequência </strong>                10 dias úteis <br>
				   <strong>Histórico Escolar </strong>                     10 dias úteis <br>
				   <strong>2ª via da Carteirinha de Estudante </strong>    15 dias úteis <br>
				   <strong>Conteúdo Programático de disciplinas </strong>  15 dias úteis <br>";

        DB::table('informativos_secretaria')->insert(
        	['informacao' => $horario, 
        	'informacao_sobre' => 'Horário']);
        DB::table('informativos_secretaria')->insert(
        	['informacao' => $prazos, 
        	'informacao_sobre' => 'Prazos']);
    }
}
