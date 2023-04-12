<?php
//use \koolreport\widgets\koolphp\Table;
//use \koolreport\inputs\Select2;
use \koolreport\datagrid\DataTables;
use \koolreport\core\Utility as Util;

?>
<style>
    body{
        background-color: #fff !important;
    }
    .dataTables_paginate.paging_input {
        padding: 0 !important;
    }
    .dataTables_info,
    .dataTables_paginate.paging_input span,
    .dataTables_length label,
    .dataTables_filter label {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }
    .dataTables_length label,
    .dataTables_filter label {
        margin: 0 20px !important;
    }
    .dt-buttons{
        float: right;
    }
    
    .dataTables_wrapper{
        margin-top: 30px;
    }
    .clear{
        clear:both;
    }
</style>
<html>
    <body>
    <?php 
        //echo  $logoSrc = url('/')."/koolreport_assets/3186757410/KoolReport.js";
    ?>

        <div class="text-center">
            <h1>List of PROGRAM</h1>
        </div>
        <div class="clear"></div>
<?php
$data = $this->dataStore('RECORDPROGRAM');
$newArray = array();
foreach($data as $row)
{

        $newArray[] =  array(
        'PROGRAM TITLE' => '<a target="_parent" href="'.config('app.koolreport_server_front_address').'/cpd-record-report-detail/'.$row['PROGRAM_ID'].'">'.$row['PROG_TITLE'].'</a>',
        );
    
}
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";
    DataTables::create([
            "dataSource"=>$newArray,
            //"themeBase" => "bs4",
            "plugins" => ["Buttons"],
            "options"=>array(
               // "dom" => 'Blfrtip',
                "paging"=>true,
                "pageLength" => 15,
                "searching"=>true,
               // "fixedHeader"=>true,
                "colReorder"=>true,
                "complexHeaders" => true,
                "headerSeparator" => "-",
                "showFooter"=>true,
               // "showFooter"=>true,
                "buttons" => [
                  "csv", "excel", "pdf", "print"
                    
                ],
                "order"=>array(
                    array(0,"asc"), //Sort by first column desc
                ),
            ),
            "searchOnEnter" => true,
            "searchMode" => "or",
            "themeBase"=>"bs4",
           // "columns"=>$columns,
            "cssClass"=>array(
                "table"=>"table table-bordered table-striped",
               
            )
        ]);
        ?>
    </body>
</html>

