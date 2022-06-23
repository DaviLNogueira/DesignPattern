<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;

class OrcamentoZip
{
    public function exportar(Orcamento $orcamento)
    {
        $caminhoAquivo = sys_get_temp_dir().DIRECTORY_SEPARATOR.'orcamento.zip'; // criar o caminho para o arquivo
        $zip = new \ZipArchive(); // cria um arquivo zip
        $zip -> open($caminhoAquivo,\ZipArchive::CREATE); // coloca um caminho e se não tiver o arquivo e ele cria
        $zip -> addFromString('orcamento.calopsita',serialize($orcamento)); //transforma em uma string o objeto
        $zip -> close();
    }
}