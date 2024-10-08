<?php
namespace Hcode;

use Rain\Tpl;

class Page
{
        private $tpl;
        private $options = [];
        private $default = [
            "header" => true,
            "footer" => true,
            "data" => []
        ];
    public function __construct($opts = array())
    {
        $this->options = array_merge($this->default, $opts);

        $config = array(
            "base_url"      => null,
            "tpl_dir"       =>"C:/xampp/htdocs/ecomerce/views/",
            "cache_dir"     => "C:/xampp/htdocs/ecomerce/views-cache",
            "debug"         => false
        );

        Tpl::configure($config);

        // Inicializa o objeto Tpl
        $this->tpl = new Tpl();

        // Configura os dados antes de desenhar o header
        $this->setData($this->options['data']);

        if ($this->options["header"] === true) {
            $this->tpl->draw("header");
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
        if ($this->options["footer"] === true) {
            $this->tpl->draw("footer");
        }
    }

    }
    
    ?>