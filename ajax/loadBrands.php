<?php

//sleep(1);

require_once '../app/Config.inc.php';
$brandController = new BrandController();
//$helper = new Helper();

switch ($_POST['acao']):

   case 'ler':
        $offset = $_POST['offset'];
        $limit = $_POST['limit'];
        
        $Query = "SELECT * FROM brands ORDER BY brand_name ASC LIMIT {$offset}, {$limit}";
        $Fields = array();
        $lstBrands = $brandController->Full($Query, $Fields);

        if(!empty($lstBrands)):
            foreach($lstBrands as $key => $value):
            ($key %2 == 0) ? $cor = 'even' : $cor = 'odd';
        ?>
        <li class="<?= $cor; ?>"><a href="<?= HOME ?>/marca/<?= $value->brand_url ?>" title="<?= $value->brand_name ?>"><?= $value->brand_name ?> </a> </li>       
        <?php
            endforeach;
        else:
            echo '3';
        endif; 

        break;

    default :
        echo '2';
endswitch;