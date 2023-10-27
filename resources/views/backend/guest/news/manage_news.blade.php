@extends('backend.guest.guest_master')
@section('guest')
<div class="main-content-inner">
            <div class="row">
                <!-- data table -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Data Table</h4>
                            <div class="table-responsive">
                                <table id="dataTable" class="text-center">
                                    <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>Id</th>
                                        <th>News Title</th>  
                                        <th>User Name</th>                                                                          
                                        <th>News Details</th>  
                                        <th>created_at</th>                                                                          
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($news as $key => $items)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$items->title}}</td> 
                                        <td>{{$items['user']['name']}} <small>({{$items['user']['role']}}) </small></td>                                        
                                        <td>{!! Str::limit($items->newsDetailsOne, 22 )  !!}</td>                                        
                                        <td>{{ \Carbon\Carbon::parse($items->created_at)->diffForHumans() }}</td>                                                                               
                                        <td width="25%">
                                        <a href="{{url('guest/news/edit',$items->id.'/'.$items->slug)}}"  title="Edit" class="btn btn-success"><i class="fas fa-edit mr-1" ></i></a>
                                        <a href=""  title="Show" class="btn btn-info"><i class="fas fa-eye mr-1" ></i></a>                                       
                                        <a href="{{url('guest/news/delete',$items->id.'/'.$items->slug)}}" id="delete"  title="Delete" class="btn btn-danger"><i class="fas fa-trash-alt" ></i></a>
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