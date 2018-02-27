@extends('template.master')

@section('content')

<style type="text/css">
	
</style>

<div id="content">

<nav>
    <div class="nav-wrapper" style="background-color: grey;">
      <div class="col s12">
        <a href="#!" class="breadcrumb" style="background-color: transparent;">Beranda</a>
      </div>
    </div>
  </nav>

<div class="row">
	
  <div class="col s12 m3">
    <h5 class="header center">Gaji Seluruh Instansi</h5>
    <div class="card horizontal light-blue darken-1 white-text">
      <div class="card-stacked">
        <div id="count-up1" class="card-content center" data-count="55000400" style="font-size: 25pt;">
          <h5>0</h5>
        </div>
      </div>
    </div>
  </div>

   <div class="col s12 m3">
    <h5 class="header center">Gaji Seluruh Instansi</h5>
    <div class="card horizontal orange lighten-1 white-text">
      <div class="card-stacked">
        <div id="count-up2" class="card-content center" data-count="33000400" style="font-size: 25pt;">
          <h5>0</h5>
        </div>
      </div>
    </div>
  </div>

    <div class="col s12 m3">
    <h5 class="header center">Gaji Seluruh Instansi</h5>
    <div class="card horizontal grey-text">
      <div class="card-stacked">
        <div id="count-up3" class="card-content center" data-count="11000400" style="font-size: 25pt;">
          <h5>0</h5>
        </div>
      </div>
    </div>
  </div>

    <div class="col s12 m3">
    <h5 class="header center">Gaji Seluruh Instansi</h5>
    <div class="card horizontal light-green accent-2">
      <div class="card-stacked">
        <div id="count-up4" class="card-content center" data-count="55000400" style="font-size: 25pt;">
          <h5>0</h5>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="row">
	<div class="col s12">
		<div id="main-chart" class="center"></div>
	</div>
</div>

</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script type="text/javascript">

	var countTo1 = $('#count-up1').attr('data-count');
		countTo2 = $('#count-up2').attr('data-count');
		countTo3 = $('#count-up3').attr('data-count');
		countTo4 = $('#count-up4').attr('data-count');
	    option = {
	        useEasing : true,
	        useGrouping : true,
	        separator : ',',
	        decimal : '.',
	        prefix : '',
	        suffix : ''
	      };

	var startCount1 = new CountUp("count-up1", 0 , countTo1, 0, 2.5, option);
	startCount1.start();

	var startCount2 = new CountUp("count-up2", 0 , countTo2, 0, 2.5, option);
	startCount2.start();

	var startCount3 = new CountUp("count-up3", 0 , countTo3, 0, 2.5, option);
	startCount3.start();

	var startCount4 = new CountUp("count-up4", 0 , countTo4, 0, 2.5, option);
	startCount4.start();
</script>
<script type="text/javascript">

	Highcharts.chart('main-chart', {
    chart: {
        type: 'column',
        reflow: true
    },
    title: {
        text: 'Data Gaji dan Potongan'
    },
    subtitle: {
        text: 'perinstansi'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rupiah (Rp)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Gaji',
        data: [44000400, 44000400, 44000400, 44000400, 44000400, 44000400, 44000400, 44000400, 44000400, 44000400, 44000400, 44000400]

    }, {
        name: 'Potongan',
        data: [44000400, 44000400, 44000400, 44000400, 44000400,44000400, 44000400, 44000400, 44000400, 44000400, 44000400, 44000400]

    }],
    colors: ['#1de9b6', '#ff6d00']
});
</script>
<script type="text/javascript">
	$('text.highcharts-credits').attr('display', 'none');
</script>


@endsection