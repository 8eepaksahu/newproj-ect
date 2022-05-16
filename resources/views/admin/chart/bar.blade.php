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
  const data={ labels:[
    'January',
    'February',
    'March',
    'April'
    
  ],

  datasets: [{
    type: 'bar',
    label: 'Bar Dataset',
    data: [80, 40, 60, 90],
    borderColor: 'rgb(255, 99, 142)',
    backgroundColor: '#26B99A'
  }, {
    type: 'line',
    label: 'Line Dataset',
    data: [70, 40, 30, 60],
    fill: false,
    borderColor: 'rgb(56, 162, 235)'
    
  }]

  };
  
 
  
  const config = {
  type: 'bar',
  data: data,
  options: {
    scales: {
      Y: {
        beginAtZero: true
        
        
      }
    }
  }
  };

 
</script>



<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

</script>
@endpush


</div>
</div>
@endsection