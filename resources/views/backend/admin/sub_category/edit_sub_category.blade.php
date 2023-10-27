@extends('admin.admin_master')
@section('admin')

<div class="main-content-inner">
            <div class="row">
                <!-- data table -->
          
                <!-- data table -->
                <div class="col-lg-4 ">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Sub Category Add</h4>
                                <form action="{{ route('update.subcategory') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ $SubCategory->id }}" name="old_id" >
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Category Name</small>
                                        <select name="categoryId"  class="form-control form-control-sm">
                                             <option selected="" disabled="">select category</option>
                                    @foreach($category as $items)
                                             <option value="{{ $items->id }}" {{ $items->id == $SubCategory->categoryId ? 'selected':'' }}>{{$items->categoryName}}</option>
                                    @endforeach
                                        </select>
                                        @error('categoryId')
                                                <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Sub Category Name</small>
                                        <input type="name" value="{{ $SubCategory->subCategoryName }}" name="subCategoryName" class="form-control"  placeholder="Enter Sub Category name">
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