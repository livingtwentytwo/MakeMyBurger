@extends('layout')

@section('content')
<div>
    
        <form method="post">
          @csrf
            <h2 class="text-center">For Delivery</h2>
            <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name"><input class="form-control" type="text" name="contact" placeholder="Contact Number"></div>
            <div class="mb-3"></div>
            <div class="mb-3"><textarea class="form-control" name="address" placeholder="Delivery Address" rows="14"></textarea></div>
            <div class="mb-3"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#success">Complete</button></div>
        </form>
  
</div>

<div id="success" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
@endsection