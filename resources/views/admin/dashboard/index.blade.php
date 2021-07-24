@extends('includes.home')
@section('subjudul','Dashboard')
@section('chart1')
<script src="https://code.highcharts.com/highcharts.js"></script>
@endsection

@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif
<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jenis Barang</h4>
                  </div>
                  <div class="card-body">
                    {{$products}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Supplier</h4>
                  </div>
                  <div class="card-body">
                    {{$suppliers}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Stok Barang</h4>
                  </div>
                  <div class="card-body">
                    {{$allproducts}}
                  </div>
                </div>
              </div>
            </div>

            <div id="container" class="col-10"></div>

            <div class="col-lg-6 col-md-6 col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Barang Terakhir Masuk</h4>
                  
                </div>
                <div class="card-body">
                  <div class="summary">
                    <div class="summary-item">
                      <h6>Barang Terakhir<span class="text-muted">(3 Items)</span></h6>
                    @foreach($lastitems as $lastitem)
                      <ul class="list-unstyled list-unstyled-border">
                        <li class="media">
                          
                          <div class="media-body">
                            <div class="media-right">{{$lastitem->stok}}</div>
                            <div class="media-title"><a href="#">{{$lastitem->nama_barang}}</a></div>
                            
                          </div>
                        </li>
                    @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>

@endsection
@section('chart2')

<script>
  Highcharts.chart('container', {

  title: {
    text: 'Grafik Total Stok Barang'
  },

  xAxis: {
    tickInterval: 1,
    type: 'logarithmic',
    accessibility: {
      rangeDescription: 'Range: 1 to 10'
    }
  },

  yAxis: {
    type: 'logarithmic',
    minorTickInterval: 0.1,
    accessibility: {
      rangeDescription: 'Range: 0.1 to 1000'
    }
  },

  tooltip: {
    headerFormat: '<b>{series.name}</b><br />',
    pointFormat: 'x = {point.x}, y = {point.y}'
  },

  series: [{
    data: {!!json_encode($datas)!!},
    pointStart: 1
  }]
});
</script>
@endsection