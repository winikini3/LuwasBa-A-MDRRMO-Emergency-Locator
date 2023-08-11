<?php
    include_once('connection.php');
     
require_once __DIR__ . '/vendor - kuya ellen/autoload.php';
$current_month = date('m');
$current_year = date('Y');
$sql = "SELECT WEEK(date) as week, COUNT(*) as count FROM tb_data WHERE status='Accepted' AND MONTH(date)=$current_month AND YEAR(date)=$current_year GROUP BY WEEK(date)";
$result = $conn->query($sql);

$yearly_sql = "SELECT YEAR(date) as year, COUNT(*) as count FROM tb_data WHERE status='Accepted' GROUP BY YEAR(date)";
$yearly_result = $conn->query($yearly_sql);

$daily_sql = "SELECT WEEK(date) as week, MIN(date) as start_date, MAX(date) as end_date, COUNT(*) as count FROM tb_data WHERE status='Accepted' AND MONTH(date)=$current_month AND YEAR(date)=$current_year GROUP BY WEEK(date)";
$daily_result = $conn->query($daily_sql);

$location_sql = "SELECT emer_loc, WEEK(date) as week, COUNT(*) as count FROM tb_data WHERE status='Accepted' AND MONTH(date)=$current_month AND YEAR(date)=$current_year GROUP BY emer_loc, WEEK(date) ORDER BY count DESC";
$location_result = $conn->query($location_sql);

$type_sql = "SELECT emer_type, WEEK(date) as week, COUNT(*) as count FROM tb_data WHERE status='Accepted' AND MONTH(date)=$current_month AND YEAR(date)=$current_year GROUP BY emer_type, WEEK(date) ORDER BY count DESC";
$type_result = $conn->query($type_sql);
// Create a new mpdf object
$mpdf = new \Mpdf\Mpdf();
$table =   '<head>
                            <style>
                                h1{font-size: 18px; font-weight: normal;}
                                h2{font-size: 21px; text-align: center;}
                                h5{font-size: 15px; text-align: center; font-style: Algerian;}
                                h3{text-align: right; text-decoration: underline; text-align: center;}
                                h4{font-size: 11px; font-weight: normal;}
                                 br {
                                        line-height: 2%;
                                     }
                                h6{
                                    font-size: 18px; font-weight: normal; margin: 0;
                                }
                                footer {
                                    position: fixed;
                                    bottom: 0;
                                    width: 100%;

                                    text-align: center;
                                }
                            </style>
                        </head>
                        <h5> MUNICIPALITY OF ARGAO <br> <p style="font-size: 21px; margin: 0 auto 0 auto;" >MDRRMO</p> </h5>
                        <h2> WEEKLY GENERATED REPORT </h2>
                       

                        <h3> WEEKLY EMERGENCY </h3>
                        <table border="1" cellspacing="0" cellpadding="5" width="90%" align="center">
                            <tr>
                                <th>Week</th>
            					<th>Count</th>
                            </tr>';
// Create the table header

// Loop through the query results and add them to the table
while ($row = $result->fetch_assoc()) {
    // Calculate start and end dates of the week
    $weekNum = $row['week'];
    $year = date('Y');
    $start_date = date('Y-m-d', strtotime($year."W".$weekNum));
    $end_date = date('Y-m-d', strtotime($year."W".$weekNum."7"));

    // Format the dates as "Month day - day"
    $start_day = date('j', strtotime($start_date));
    $end_day = date('j, Y', strtotime($end_date));
    $week_range = date('F', strtotime($start_date)).' '.$start_day.' - '.$end_day;

    // Add the week range and count to the table
    $table .= '<tr>
        <td>'.$week_range.'</td>
        <td>'.$row['count'].'</td>
    </tr>';
}



// Close the table
$table .= '</tbody></table>';
$yearly_table = '<h3> ANNUAL EMERGENCY </h3>
                        <table border="1" cellspacing="0" cellpadding="5" width="90%" align="center">
                            <tr>
                                <th>Yearly</th>
            					<th>Count</th>
                            </tr>';

while ($row = $yearly_result->fetch_assoc()) {
    $yearly_table .= '<tr>
        <td>'.$row['year'].'</td>
        <td>'.$row['count'].'</td>
    </tr>';
}

$yearly_table .= '</tbody></table>';

$daily_table = '<h3> DAILY EMERGENCY </h3>
<table border="1" cellspacing="0" cellpadding="5" width="90%" align="center">
<tr>
<th>Daily</th>
<th>Count</th>
</tr>';

while ($row = $daily_result->fetch_assoc()) {
    $start_date = date("F d", strtotime($row['start_date']));
    $end_date = date("Y", strtotime($row['end_date']));
    $daily_table .= '<tr>
        <td>'.$start_date.' , ' .$end_date.'</td>
        <td>'.$row['count'].'</td>
    </tr>';
}


$daily_table .= '</tbody></table><br>';

$location_table = '<h3> LOCATION EMERGENCY </h3>
                        <table border="1" cellspacing="0" cellpadding="5" width="90%" align="center">
                            <tr>
                                <th>Location</th>
                                <th>Count</th>
                            </tr>';
    while ($row = $location_result->fetch_assoc()) {
        $location_table .= '<tr>
            <td>'.$row['emer_loc'].'</td>
            <td>'.$row['count'].'</td>
        </tr>';
    }
    $location_table .= '</table>';

    $type_table = '<h3> TYPE EMERGENCY </h3>
                        <table border="1" cellspacing="0" cellpadding="5" width="90%" align="center">
                            <tr>
                                <th>Type</th>
                                <th>Count</th>
                            </tr>';
    while ($row = $type_result->fetch_assoc()) {
        $type_table .= '<tr>
            <td>'.$row['emer_type'].'</td>
            <td>'.$row['count'].'</td>
        </tr>';
    }
    $type_table .= '</table>';

// Write the table to the mpdf object
$mpdf->WriteHTML($table);
$mpdf->WriteHTML($daily_table);
$mpdf->WriteHTML($location_table);
$mpdf->WriteHTML($type_table);


// Output the pdf
$mpdf->Output();	