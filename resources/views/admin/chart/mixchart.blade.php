@extends('layouts.master')
@section('title','crud')
@section('content')
<div class="container-fluid pt-4">
<div class="card">
<div class="conatiner" style="position: relative; height:40vh; width:80vw">
  <div class="chartbox">
  <canvas id="myChart"></canvas>

</div>
</div>
</div>



@push('js')


<script>
// <block:setup:1>
const data = {
  labels: [
    'January',
    'February',
    'March',
    'April'
  ],
  datasets: [{
    type: 'bar',
    label: 'Bar Dataset',
    data: [30, 40, 20, 50],
    borderColor: 'rgb(255, 99, 132)',
    backgroundColor: 'rgba(255, 99, 132, 0.2)'
  }, {
    type: 'line',
    label: 'Line Dataset',
    data: [30, 60, 40, 20],
    fill: false,
    borderColor: 'rgb(54, 162, 235)'
  }]
};
// </block:setup>

// <block:config:0>
const config = {
  type: 'line',
  data: data,
};
// </block:config>

module.exports = {
  actions: [],
  config: config,
};
</script>

 



<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>


@endpush


</div>
</div>
@endsection