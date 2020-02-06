@extends('layouts.master')

@section('content')

<!-- start banner Area -->
<section class="banner-area relative" id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row fullscreen d-flex justify-content-center align-items-center">
      <div class="banner-content col-lg-10 col-md-12 justify-content-center">
        <h6 class="text-uppercase">Halal food for everyone </h6>
        <h1>
           STATISTIC USER
        </h1>
        <p class="text-white mx-auto">

          <head>
            <style>
            table {
            font-family: "Helvetica Neue", Helvetica, sans-serif
          }

          caption {
            text-align: left;
            color: silver;
            font-weight: bold;
            text-transform: uppercase;
            padding: 5px;
          }

          thead {
            background: SteelBlue;
            color: white;
          }

          th,
          td {
            padding: 5px 10px;
          }

          tbody  {
            background: white;
          }

          tbody tr td:nth-child(2) {
            text-align:center;
          }

          tbody tr td:nth-child(3),
          tbody tr td:nth-child(4) {
            text-align: right;
            font-family: monospace;
          }

          tfoot {
            background: SeaGreen;
            color: white;
            text-align: right;
          }

          tfoot tr th:last-child {
            font-family: monospace;
          }

            </style>
          </head>

          @foreach($tabel as $table )
            <li>{{$table->no}} </li>
          @endforeach

          <table>
            <caption>Camping Costs</caption>
            <thead>
              <tr>
                <th>No</th>
                <th>Bulan</th>
                <th>Pengunjung</th>
                <th>Pembeli</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Ok</td>
                <td>$279.00</td>
                <td>$279.00</td>
              </tr>

              <tr>
                <td>Sleeping Bags</td>
                <td>2</td>
                <td>$159.95</td>
                <td>$319.90</td>
              </tr>

              <tr>
                <td>Camp Chairs</td>
                <td>2</td>
                <td>$39.50</td>
                <td>$79.00</td>
              </tr>
            </tbody>

            <tfoot>
              <tr>
                <th colspan="3">Grand Total</th>
                <th>$667.90</th>
              </tr>
            </tfoot>
          </table>


        </p>
        <a href="menu" class="primary-btn squire text-uppercase mt-10">Check Our Menu</a>
      </div>
    </div>
  </div>
</section>

@endsection
