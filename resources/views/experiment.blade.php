<?php
$base_url = 'https://maps.googleapis.com/maps/api/geocode/json?';
$key = '&key=AIzaSyDOJPXbUf0Eval8u0A3cYgzT-28I4ASvBY';
?>

<style>
    li { list-style-type: none;}
</style>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>lat</th>
            <th>lng</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($salons as $s) {
            if ($s->id != 346) {
                # code...
            if ($s->id > 300 && $s->id <= 397) {

                $query = ['address' => $s->address,'key' => 'AIzaSyDOJPXbUf0Eval8u0A3cYgzT-28I4ASvBY'];
                $response = file_get_contents($base_url . http_build_query($query));
                $result = json_decode($response, true);
                echo "<tr><td>".$s->id.'</td>';
                echo "<td>".$result['results'][0]['geometry']['location']['lat']."</td>";
                echo "<td>" . $result['results'][0]['geometry']['location']['lng']."</td></tr>";
        }}
    }
        ?>
    </tbody>
</table>
