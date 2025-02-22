@extends('backend.master')

@section('content')
<section>
  <br><br>
  <div class="row mt-3 justify-content-center">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h5>รายการสินค้า</h5>
        </div>
        <div class="card-body">
          <div class="entry-content">
            <div class="row">
              <div class="col-md-12 col-12">
                <div class="table-responsive">
                  <table id="example1" class="table">
                    <thead>
                      <tr class="text-center">
                        <th>ลำดับ</th>
                        <th>ชื่อสินค้า</th>
                        <th>#</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $i => $product)
                      <tr>
                         <td>{{$i+1}}</td>
                         <td>{{$product->name}}</td>
                         <td class="text-center">
                           <a href="edit/product/{{$product->id}}"><button type="button" class="btn btn-warning">เเก้ไข</button></a>
                         </td>
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
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

<!-- excel -->
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>

<script>
  $(function() {
    $('#example1').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": false,
      dom: 'Bfrtip',
      pageLength: 100,
      buttons: [{
        extend: 'excel',
        filename: '',
        title: ''
      }, ]
    });
  });
</script>
@endsection