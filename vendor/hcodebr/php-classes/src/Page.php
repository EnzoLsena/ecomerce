<?php

namespace Hcode;

use \Rain\Tpl;

class Page
{
    private $tpl;
    private $options = [];
    private $default = [
        "header" => true,
        "footer" => true,
        "data" => []
    ];

    public function __construct($opts = array(), $tpl_dir = "/ecomerce/views/")
    {
        $this->options = array_merge($this->default, $opts);
        $templateDir = $_SERVER["DOCUMENT_ROOT"] . $tpl_dir;

        // Configuração do diretório de cache
        $cacheDir = $_SERVER["DOCUMENT_ROOT"] . "/ecomerce/views-cache/";
        if (!is_dir($cacheDir)) {
            mkdir($cacheDir, 0755, true);
        }

        $config = array(
            "base_url"      => null,
            "tpl_dir"       => $templateDir,
            "cache_dir"     => $cacheDir,
            "debug"         => true
        );

        Tpl::configure($config);
        $this->tpl = new Tpl();
        $this->setData($this->options['data']);

        // Verifica se o arquivo header existe antes de desenhar
        if ($this->options["header"] === true) {
            if (file_exists($templateDir . "header.html")) {
                $this->tpl->draw("header");
            } else {
                echo "Template header não encontrado.";
            }
        }
    }

    public function setData($data = array())
    {
        foreach ($data as $key => $value) {
            $this->tpl->assign($key, $value);
        }
    }

    public function setTpl($name, $data = array(), $returnHTMl = false)
    {
        $this->setData($data);
        return $this->tpl->draw($name, $returnHTMl);
    }

    public function __destruct()
    {
        //if ($this->options["footer"] === true) {
            //if (file_exists($templateDir. "footer.html")) {
                $this->tpl->draw("footer");
           // } else {
            //    echo "Template footer não encontrado.";
           // }
        //}
    }
}