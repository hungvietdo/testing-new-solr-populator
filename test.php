<?php
    namespace TraderInteractive\SolrPopulator;
    include  __DIR__ . '/vendor/autoload.php';
    
    $aa = new MariaDataFileLoader(['5000025560.data']);
    print_r($aa->getMappedAdRecords());
?>