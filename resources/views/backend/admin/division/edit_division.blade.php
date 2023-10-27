@extends('admin.admin_master')
@section('admin')

<div class="main-content-inner">
            <div class="row">
      
              
                <div class="col-lg-4 ">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Division Update</h4>
                                <form action="{{route('update.division')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="old_id" value="{{$division->id}}" >
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Division Name</small>
                                        <input type="name" name="divisionName" value="{{$division->divisionName}}" id="validationCustom03" class="form-control"  placeholder="Enter Division name" required="">
                                        <div class="invalid-feedback">
                                            Please Input Division Name.
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">update</button>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        
        
        </div>

        <script>
    //  Form Validation
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
    }, false);
</script>
      
@endsection