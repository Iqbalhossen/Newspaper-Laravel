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
                                        <th>Category Name</th>
                                        <th>Sub Category Name</th>                                                                            
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($SubCategory as $items)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $items['category']['categoryName'] }}</td> 
                                        <td>{{$items->subCategoryName }}</td>                                       
                                        <td width="25%">
                                        <a href="{{url('admin/sub-categories/edit',$items->id.'/'.$items->slug)}}"  title="Edit"><i class="fas fa-edit mr-1 btn btn-success" ></i></a>
                                        <a href="{{url('admin/sub-categories/delete',$items->id.'/'.$items->slug)}}" id="delete"  title="Delete"><i class="fas fa-trash-alt btn btn-danger" ></i></a>
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
                            <h4 class="card_title">Sub Category Add</h4>
                                <form action="{{route('store.subcategory')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Category Name</small>
                                        <select name="categoryId"  class="form-control form-control-sm">
                                             <option selected="" disabled="">select category</option>
                                    @foreach($category as $item)
                                             <option value="{{ $item->id }}">{{$item->categoryName}}</option>
                                    @endforeach
                                        </select>
                                        @error('categoryId')
                                                <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Sub Category Name</small>
                                        <input type="name" name="subCategoryName" class="form-control"  placeholder="Enter Sub Category name">
                                        @error('subCategoryName')
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


      
@endsection