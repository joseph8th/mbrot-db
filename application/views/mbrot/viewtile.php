<h2><?= $title ?></h2>

<script type="text/javascript">
 function draw(){
   
   var canvas = document.getElementById('tile');
   if (canvas.getContext){
     var ctx = canvas.getContext('2d');
   }
 } 
</script>

<table class="table">

  <tr>
    <th>Tile (Id)</th>
    <th>Tile (X,Y)</th>
    <th>Depth</th>
    <th>Size</th>
    <th>Max Depth</th>
  </tr>
   
  <?php 
  // Uncompress and decode JSON data
  $data_ary = ($tile['data'] == null) ? array() :
              json_decode(zlib_decode($tile['data']));

  // Unpack (X,Y) 32-bit tile coordinates from 64-bit Id
  $id_x = ($tile['id'] & 0xFFFFFFFF00000000) >> 32;
  $id_y = ($tile['id'] & 0xFFFFFFFF);

  echo "<tr>";
  echo "<td>" . $tile['id'] . "</td>";
  echo "<td>(" . $id_x . "," . $id_y . ")</td>";
  echo "<td>" . $tile['depth'] . "</td>";
  echo "<td>" . sizeof($data_ary) . "</td>";
  echo "<td>" . $tile['maxdepth'] . "</td>";
  echo "</tr>";
  ?>

</table>

<hr>

<img src="/custom/tileimage.php" style="border: 1px solid black;">

<!-- <canvas id="tile" width="256" height="256"></canvas>
<button type="button" onclick="draw()">Draw Tile</button> -->
