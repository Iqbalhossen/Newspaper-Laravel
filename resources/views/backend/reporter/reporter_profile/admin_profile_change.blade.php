@extends('admin.admin_master')
@section('admin')

<div class="main-content-inner">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">District Add</h4>
                                <form action="{{route('store.district')}}" method="post">
                                    @csrf
                                    <div class="row"> 
                                         <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Photo </small>
                                        <input type="file" name="district_name" id="validationCustom03" class="form-control"  placeholder="Enter Division name" required="">
                                        <div class="invalid-feedback">
                                            Please Input District Name.
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                   <div class="row">
                                   <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Admin Name</small>
                                        <input type="name" name="district_name" id="validationCustom03" class="form-control"  placeholder="Enter Division name" required="">
                                        <div class="invalid-feedback">
                                            Please Input District Name.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;"> Email</small>
                                        <input type="name" name="district_name" id="validationCustom03" class="form-control"  placeholder="Enter Division name" required="">
                                        <div class="invalid-feedback">
                                            Please Input District Name.
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Address </small>
                                        <input type="name" name="district_name" id="validationCustom03" class="form-control"  placeholder="Enter Division name" required="">
                                        <div class="invalid-feedback">
                                            Please Input District Name.
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Mobile Number</small>
                                        <input type="name" name="district_name" id="validationCustom03" class="form-control"  placeholder="Enter Division name" required="">
                                        <div class="invalid-feedback">
                                            Please Input District Name.
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Description </small>
                                        <input type="name" name="district_name" id="validationCustom03" class="form-control"  placeholder="Enter Division name" required="">
                                        <div class="invalid-feedback">
                                            Please Input District Name.
                                        </div>
                                    </div>
                                    </div>
</div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
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