@extends('welcome')
@section('konten')
    
<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Atricles</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Articles</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>How to write your journey</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Write your mind</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>I love me, you should too</td>
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