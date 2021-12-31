<?php
if (@$_REQUEST['action'] == 'exportData') {
    $export = $_REQUEST['action'];
    $exoprtExcel = mysqli_query($conn, "SELECT employee_id,name, email,phone,address,role_id FROM employee_table") or die("databse error:" . mysqli_error($conn));
    $excelRecord = array();
    while ($rowExcel = mysqli_fetch_assoc($exoprtExcel)) {
        $excelRecord[] = $rowExcel;
    }
    if (isset($_POST["exportExcel"])) {
        $fileName = "data_export_" . date('Ymd') . ".xls";
        header("Content-Type: application/vnd.md-excel");
        header("Content-Disposition: attachement; filename=\'$fileName'");
        $showColumn = false;
        if (!empty($excelRecord)) {
            foreach ($excelRecord as $record) {
                if (!$showColumn) {
                    echo implode("\t", array_keys($record)) . "\n";
                    $showColumn = true;
                }
                echo implode("\t", array_values($record)) . "\n";
            }
        }
        exit;
    }

}