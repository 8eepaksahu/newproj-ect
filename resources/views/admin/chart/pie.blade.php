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
    'Red',
    'blue',
    'green'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 95, 144)',
      'rgb(54, 185, 233)',
      'rgb(255, 80, 60)'
    ],
    hoverOffset: 4
  }]
};
// </block:setup>

// <block:config:0>
const config = {
  type: 'pie',
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