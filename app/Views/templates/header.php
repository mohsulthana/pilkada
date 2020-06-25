<!DOCTYPE html>
<html>
<head>
  <title>Testing Charts</title>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script>
    function countUnique(iterable) {
      return new Set(iterable).size;
    }
    function onlyUnique(value, index, self) { 
      return self.indexOf(value) === index;
    }

    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var nama_calon    = ['calon1','calon2','calon3','calon4','calon5','calon6','calon7'];
      var jumlah_vote   = [23,22,21,19,50,70,90];
      var nama_wilayah  = ['Betung','Betung',
        'Betung Barat','Betung Barat',
        'Betung Selatan','Betung Selatan','Betung Selatan'];

      var nama_wilayah_unik = nama_wilayah.filter(onlyUnique);
      var jumlah_wilayah    = countUnique(nama_wilayah); 
      for (var i = 0; i < jumlah_wilayah; i++) {
        // BUAT CHART SEBANYAK JUMLAH WILAYAH
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nama');
        data.addColumn('number', 'Vote');
        // LOOP NAMA CALON DAN JUMLAH VOTE SESUAI WILAYAH
        for (var j = 0; j < nama_wilayah.length; j++) {
          // JIKA LOOP WILAYAH SAMA DENGAN LOOP UNIK WILAYAH, MAKA AMBIL DATANYA
          if(nama_wilayah[j] == nama_wilayah_unik[i]){
            data.addRows([
              [nama_calon[j], jumlah_vote[j]]
            ]);
          }
        }
        

        var piechart_options = {title:nama_wilayah_unik[i],
                       width:400,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('chart_'+i));
        piechart.draw(data, piechart_options);
      }
      // var data = new google.visualization.DataTable();
      //   data.addColumn('string', 'Topping');
      //   data.addColumn('number', 'Slices');
      //   data.addRows([
      //     ['Mushrooms', 3],
      //     ['Onions', 1],
      //     ['Olives', 1],
      //     ['Zucchini', 1],
      //     ['Pepperoni', 2]
      //   ]);

      //   var piechart_options = {title:'Pie Chart: How Much Pizza I Ate Last Night',
      //                  width:400,
      //                  height:300};
      //   var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
      //   piechart.draw(data, piechart_options);

      //   var barchart_options = {title:'Barchart: How Much Pizza I Ate Last Night',
      //                  width:400,
      //                  height:300,
      //                  legend: 'none'};
      //   var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
      //   barchart.draw(data, barchart_options);
    }
  </script>

</head>
<body>
  <h1><?= esc($title) ?></h1>
