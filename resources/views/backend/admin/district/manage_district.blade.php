@extends('admin.admin_master')
@section('admin')

<div class="main-content-inner">
            <div class="row">
                <!-- data table -->
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Data Table</h4>
                            <div class="table-responsive">
                                <table id="dataTable" class="text-center">
                                    <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>Id</th>
                                        <th>Division Name</th>  
                                        <th>District Name</th>                                                                          
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($district as $items)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $items['division']['divisionName'] }}</td> 
                                        <td>{{$items->districtName }}</td>                                        
                                        <td width="25%">
                                        <a href="{{url('admin/district/edit',$items->id.'/'.$items->slug)}}"  title="Edit"><i class="fas fa-edit mr-1 btn btn-success" ></i></a>
                                        <a href="{{url('admin/district/delete',$items->id.'/'.$items->slug)}}" id="delete"  title="Delete"><i class="fas fa-trash-alt btn btn-danger" ></i></a>
                                        </td>
</tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- data table -->
                <div class="col-lg-4 ">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">District Add</h4>
                                <form action="{{route('store.district')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Division Name</small>
                                        <select name="divisionId"  class="form-control form-control-sm">
                                             <option selected="" disabled="">select Division</option>
                                    @foreach($division as $item)
                                             <option value="{{ $item->id }}">{{$item->divisionName}}</option>
                                    @endforeach
                                        </select>
                                        @error('divisionId')
                                                <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">District Name</small>
                                        <input type="name" name="districtName" id="validationCustom03" class="form-control"  placeholder="Enter Division name" required="">
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