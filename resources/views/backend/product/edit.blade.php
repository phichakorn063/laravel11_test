@extends('backend.master')

@section('content')
<section>
  <br><br>
  <div class="row mt-3 justify-content-center">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h5>แก้ไข {{ $product->name }}</h5>
        </div>
        <div class="card-body">
          <div class="entry-content">
            <div class="row">
              <div class="col-md-3 col-12"></div>
              <div class="col-md-6 col-12">
                <form action="/update/product/{{$product->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group d-flex align-items-center">
                    <label for="name" class="mr-2">แก้ไขชื่อ</label>
                    <input class="form-control mr-2" type="text" name="name" style="flex: 1;">
                    <button type="submit" class="btn btn-success">บันทึก</button>
                  </div>
                </form>
              </div>
              <div class="col-md-3 col-12"></div>
              <div class="col-md-12 col-12 mt-4">
                <h5>ประวัติการแก้ไข</h5>
                <div class="table-responsive">
                  <table id="editHistoryTable" class="table table-bordered">
                    <thead>
                      <tr class="text-center">
                        <th>ลำดับ</th>
                        <th>ชื่อเดิม</th>
                        <th>ชื่อใหม่</th>
                        <th>ผู้เเก้ไข</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($productslogs as $i => $productslog)
                      <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$productslog->name}}</td>
                        <td>{{$productslog->name_old}}</td>
                        <td>{{$productslog->user->name}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection

@section('footer')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>

<script>
  $(document).ready(function() {
    $('#editHistoryTable').DataTable({
      paging: false,
      lengthChange: false,
      searching: true,
      ordering: true,
      info: false,
      autoWidth: false,
      responsive: true,
      dom: 'Bfrtip',
      pageLength: 100,
      buttons: [{
        extend: 'excel',
        filename: '',
        title: ''
      }]
    });
  });
</script>
@endsection