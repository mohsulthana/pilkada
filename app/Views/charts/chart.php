<!--Table and divs that hold the pie charts-->
<table class="columns">
  <tr>
    <?php 
    $count = 0;
    foreach (array_unique($nama_wilayah) as $key => $value): ?>
      <td><div id="chart_<?= $count ?>" style="border: 1px solid #ccc"></div></td>  

    <?php $count++;endforeach ?>
    <td><div id="piechart_div" style="border: 1px solid #ccc"></div></td>
    <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>
  </tr>
</table>
