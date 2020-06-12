<?php
    class Render {
        private $_html;

        public function __construct($av) {
            if (!isset($av['html']) || !isset($av['param']) || !file_exists($av['html'])) {
                return;
            }
            $fd = fopen($av['html'], "r");
            while (!feof($fd)) {
                $str = fgets($fd);
                $str = preg_replace_callback('/\%\%(.*?)\%\%/si', function($data) use ($av) {
                    echo $av['param'][$data[1]];
                    return ($av['param'][$data[1]]);
                }, $str);
                $this->_html .= $str;
            }
            fclose($fd);
        }
        function __destruct() {
            
        }
        public function getHtml() {
            return $this->_html;
        }
        public function doc()
        {
            return file_get_contents("Render.doc.txt");
        }
    }
    // $rend = new Render(array("html" => "index.html", "param" => array('title' => "hello world")));
    // echo ($rend->getHtml());
?>
