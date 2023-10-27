@extends('admin.admin_master')
@section('admin')

<div class="main-content-inner">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">District Update</h4>
                                <form action="{{route('update.district')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="oldId" value="{{$district->id}}" >
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Division Name</small>
                                        <select name="divisionId"  class="form-control form-control-sm">
                                             <option selected="" disabled="">select Division</option>
                                    @foreach($division as $items)
                                             <option value="{{ $items->id }}"{{ $items->id == $district->divisionId ? 'selected':'' }}>{{$items->divisionName}}</option>
                                    @endforeach
                                        </select>
                                        @error('divisionId')
                                                <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">District Name</small>
                                        <input type="name" name="districtName" value="{{$district->districtName}}" id="validationCustom03" class="form-control"  placeholder="Enter Division name" required="">
                                        @error('districtName')
                                                <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                        @enderror
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