@extends('admin.admin_master')
@section('admin')

<div class="main-content-inner">
            <div class="row">
                <!-- data table -->         
                <!-- data table -->
                <div class="col-lg-4 ">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Category Upadte</h4>
                                <form action="{{route('update.category')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="old_id" value="{{$category->id}}">
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Category Name</small>
                                        <input type="name" name="categoryName" value="{{$category->categoryName}}" class="form-control"  placeholder="Enter Category name">
                                        @error('category_name')
                                                <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">update</button>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        
        
        </div>


      
@endsection