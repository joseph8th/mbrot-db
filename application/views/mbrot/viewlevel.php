<h2><?= $title ?></h2>

<table class="table">

  <tr>
    <th>Tile (Id)</th>
    <th>Tile (X,Y)</th>
    <th>Depth</th>
    <th>Size</th>
    <th>Max Depth</th>
    <th></th>
  </tr>

  <?php 
  foreach ($tiles as $tile) {

    // Uncompress and decode JSON data
    $data_ary = ($tile['data'] == null) ? array() :
                json_decode(zlib_decode($tile['data']));
        
    // Unpack (X,Y) 32-bit tile coordinates from 64-bit Id
    $id_x = ($tile['id'] & 0xFFFFFFFF00000000) >> 32;
    $id_y = ($tile['id'] & 0xFFFFFFFF);

    $segment = array('mbrot', $level, $tile['id']); 

    echo "<tr>";
    echo "<td>" . $tile['id'] . "</td>";
    echo "<td>(" . $id_x . "," . $id_y . ")</td>";
    echo "<td>" . $tile['depth'] . "</td>";
    echo "<td>" . sizeof($data_ary) . "</td>";
    echo "<td>" . $tile['maxdepth'] . "</td>";
    echo "<td><a href='".site_url($segment)."'>View</a></td>"; 
    echo "</tr>";
  }
  ?>

</table>
