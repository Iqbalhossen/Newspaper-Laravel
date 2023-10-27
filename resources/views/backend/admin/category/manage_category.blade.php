@extends('admin.admin_master')
@section('admin')

<div class="main-content-inner">
            <div class="row">
                <!-- data table -->
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Table</h4>
                            <div class="table-responsive">
                                <table id="dataTable" class="text-center">
                                    <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>                                                                           
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($category as $item)
                                    <tr>
                                        <td>1</td>
                                        <td>{{$item->categoryName }}</td>                                        
                                        <td width="25%">
                                        <a href="{{ url('admin/category/edit',$item->id.'/'.$item->slug) }}"  title="Edit"><i class="fas fa-edit mr-1 btn btn-success" ></i></a>
                                        <a href="{{ url('admin/category/delete',$item->id.'/'.$item->slug) }}" id="delete"  title="Delete"><i class="fas fa-trash-alt btn btn-danger" ></i></a>
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
                            <h4 class="card_title">Category Add</h4>
                                <form action="{{route('store.category')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Category Name</small>
                                        <input type="name" name="categoryName" id="validationCustom03" class="form-control"  placeholder="Enter Category name" required="">
                                        <div class="invalid-feedback">
                                            Please Input Category Name.
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