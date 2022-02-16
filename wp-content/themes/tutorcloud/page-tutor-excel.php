<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php

$is_admin = current_user_can('manage_options');  // all user they have mange option will get 

if (!$is_admin) {
    wp_redirect(get_site_url());
        exit;
}

?>
    <h1 class="text-start mt-5">tutorcloud tutor list export(only can be viewed by admin)</h1>

    <div class="text-start mt-5">
        <a href="javascript:void(0);" class="btn btn-info getfile">EXPORT</a>
    </div>

    <?php

// Get arguments for all posts
$args = array( 
	'post_type' => 'tutor',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);

$all_posts = array();
$table_th_arr= array();
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ):

	while ( $the_query->have_posts() ): $the_query->the_post();
		$fields = get_fields();
            foreach( $fields as $name => $value ){
                $field = get_field_object($name); 
                array_push($table_th_arr,$field['label']);
            }
array_push($all_posts, $fields);

endwhile;
wp_reset_postdata();

endif;
?>

    <?php
$table='<table class="excel-table mt-5" id="excel-table">
        <tr>';



        foreach($table_th_arr as $th)
        {
            $table.='<td class="fw-bold text-light bg-dark">'.$th.'</td>';
        }
    $table .='</tr>';  
    for($i=0;$i<count($all_posts);$i++)
    {
        $table .='<tr>';
        foreach($all_posts[$i] as $key => $value){
                
            // echo gettype($value);
            if(is_array($value))
            {
                  $table .='<td>'.implode(',', $value).'</td>';

            }
            else
            {
                $table .='<td>'.$value.'</td>';
            }
        }
        $table .='</tr>';
    }

    $table .='</table>';
    echo $table;
?>





    <style type="text/css">
    body {
        padding: 1rem;
    }

    table {
        width: max-content;
        border-spacing: 0;
        border-collapse: collapse;

    }

    table.excel-table th {
        padding: 1rem;
        border: 1px solid #000;
    }

    table.excel-table td {
        padding: 1rem;

        border: 1px solid #000;
    }
    </style>

    <script type="text/javascript">
    $(function() {
        $('.getfile').click(
            function() {
                exportTableToCSV.apply(this, [$('#excel-table'), 'filename.csv']);
            });

    })

    function exportTableToCSV($table, filename) {

        var $rows = $table.find('tr:has(td)'),

            // Temporary delimiter characters unlikely to be typed by keyboard
            // This is to avoid accidentally splitting the actual contents
            tmpColDelim = String.fromCharCode(11), // vertical tab character
            tmpRowDelim = String.fromCharCode(0), // null character

            // actual delimiter characters for CSV format
            colDelim = '","',
            rowDelim = '"\r\n"',

            // Grab text from table into CSV formatted string
            csv = '"' + $rows.map(function(i, row) {
                var $row = $(row),
                    $cols = $row.find('td');

                return $cols.map(function(j, col) {
                    var $col = $(col),
                        text = $col.text();

                    return text.replace('"', '""'); // escape double quotes

                }).get().join(tmpColDelim);

            }).get().join(tmpRowDelim)
            .split(tmpRowDelim).join(rowDelim)
            .split(tmpColDelim).join(colDelim) + '"',

            // Data URI
            csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

        $(this)
            .attr({
                'download': filename,
                'href': csvData,
                'target': '_blank'
            });
    }
    </script>

</body>

</html>