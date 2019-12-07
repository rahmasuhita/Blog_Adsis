@extends('welcome')
@section('konten')
    
<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Categories</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Categories</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Midnight Tea</td>
                    <td>Romance</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Mau Jadi Apa Kita Kelak</td>
                    <td>Phycology</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Mr.Ipi</td>
                    <td>Comedy</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
<!-- /.container-fluid -->
@endsection