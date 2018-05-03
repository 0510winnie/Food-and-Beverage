@extends('layouts.manage')



@section('content')
<main class="column m-t-40 m-r-35">
  <nav class="breadcrumb is-small" aria-label="breadcrumbs">
    <ul>
      <li><a href=" {{ route('home') }} ">Home</a></li>
      <li class="is-active"><a href=" {{ route('manage.dashboard') }} " aria-current="page">Dashboard</a></li>
    </ul>
  </nav>

  <div class="level m-r-25">
    <div class="level-left">
      <div class="level-item">
        <div class="title has-text-primary"><i class="fa fa-tachometer"></i> Dashboard</div>
      </div>
    </div>
    <div class="level-right">
      <div class="level-item">
        <button type="button" class="button is-small">
          March 8, 2017 - April 6, 2017
        </button>
      </div>
    </div>
  </div>

  <div class="columns is-multiline m-r-20">
    <div class="column">
      <div class="box notification is-primary">
        <div class="heading">Top Seller Total</div>
        <div class="title">56,950</div>
        <div class="level">
          <div class="level-item">
            <div class="">
              <div class="heading">Sales $</div>
              <div class="title is-5">250K</div>
            </div>
          </div>
          <div class="level-item">
            <div class="">
              <div class="heading">Overall $</div>
              <div class="title is-5">750K</div>
            </div>
          </div>
          <div class="level-item">
            <div class="">
              <div class="heading">Sales %</div>
              <div class="title is-5">25%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="box notification is-warning">
        <div class="heading">Revenue / Expenses</div>
        <div class="title">55% / 45%</div>
        <div class="level">
          <div class="level-item">
            <div class="">
              <div class="heading">Rev Prod $</div>
              <div class="title is-5">30%</div>
            </div>
          </div>
          <div class="level-item">
            <div class="">
              <div class="heading">Rev Serv $</div>
              <div class="title is-5">25%</div>
            </div>
          </div>
          <div class="level-item">
            <div class="">
              <div class="heading">Exp %</div>
              <div class="title is-5">45%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="box notification is-info">
        <div class="heading">Feedback Activity</div>
        <div class="title">78% &uarr;</div>
        <div class="level">
          <div class="level-item">
            <div class="">
              <div class="heading">Pos</div>
              <div class="title is-5">1560</div>
            </div>
          </div>
          <div class="level-item">
            <div class="">
              <div class="heading">Neg</div>
              <div class="title is-5">368</div>
            </div>
          </div>
          <div class="level-item">
            <div class="">
              <div class="heading">Pos/Neg %</div>
              <div class="title is-5">77% / 23%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  <div class="columns is-multiline">
    <div class="column is-6">
      <div class="panel">
        <p class="panel-heading">
          Chart - Doughnut Style (Chart.js)
        </p>
        <div class="panel-block">
          <canvas id="chartDoughnut" width="400" height="400"></canvas>
        </div>
      </div>
    </div>
    <div class="column is-6">
      <div class="panel">
        <p class="panel-heading">
          Chart - Bar Style (Chart.js)
        </p>
        <div class="panel-block">
          <canvas id="chartBar" width="400" height="400"></canvas>
        </div>
      </div>
    </div>
    <div class="column is-6">
      <div class="panel">
        <p class="panel-heading">
          Chart - Line Style (Chart.js)
        </p>
        <div class="panel-block">
          <canvas id="chartLine" width="400" height="400"></canvas>
        </div>
      </div>
    </div>
    <div class="column is-6">
      <div class="panel">
        <p class="panel-heading">
          Chart - Scatter Style (Chart.js)
        </p>
        <div class="panel-block">
          <canvas id="chartScatter" width="400" height="400"></canvas>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection