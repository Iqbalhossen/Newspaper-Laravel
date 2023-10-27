@extends('backend.guest.guest_master')
@section('guest')

<div class="main-content-inner">
            <div class="row">
                <!-- data table -->         
                <!-- data table -->
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Add News</h4>
                                <form action="{{route('guest.update.news')}}" method="post"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$news->id}}">
                                    <input type="hidden" name="oldImageThum"  value="{{$news->imageThum}}"  >
		                            <input type="hidden" name="oldImage"  value="{{$news->image}}"  >
                                   <div class="row">                                 
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Select Category</small>
                                        <select name="categoryId"  class="form-control form-control-sm">
                                             <option selected="" disabled="">select category</option>
                                    @foreach($category as $item)
                                             <option value="{{$item->id}}" {{ $item->id == $news->categoryId ? 'selected' : '' }}> {{$item->categoryName}}</option>
                                    @endforeach
                                        </select>
                                        @error('categoryId')
                                                <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Select Sub-Category <span style="font-size:12px !important;">(Optional)</span></small>
                                        <select name="subCategoryId"  class="form-control form-control-sm">
                                             <option selected="" disabled="">select sub category</option>
                                             @foreach($subCategory as $item)
                                             <option value="{{$item->id}}" {{ $item->id == $news->subCategoryId ? 'selected' : '' }}>{{$item->subCategoryName}}</option>
                                    @endforeach                          
                                             
                                        </select>                                       
                                    </div>
                                    </div>
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Select Division <span style="font-size:12px !important;">(Optional)</span></small>
                                        <select name="divisionId"  class="form-control form-control-sm">
                                             <option selected="" disabled="">select division</option>
                                             
                                             @foreach($division as $item)
                                                 <option value="{{$item->id}}" {{ $item->id == $news->divisionId ? 'selected' : '' }}> {{$item->divisionName}}</option>
                                            @endforeach
                                    
                                        </select>                                       
                                    </div>
                                    </div>
                                   </div>
                                    
                                   <div class="row">
                              
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Select District <span style="font-size:12px !important;">(Optional)</span></small>
                                        <select name="districtId"  class="form-control form-control-sm">
                                             <option selected="" disabled="">select district</option>
                                    
                                             @foreach($district as $item)
                                             <option value="{{$item->id}}" {{ $item->id == $news->districtId ? 'selected' : '' }}> {{$item->districtName}}</option>
                                            @endforeach  

                                        </select>
                                        
                                    </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <small for="exampleInputEmail1" style="font-size:15px;">News Title</small>
                                            <input type="text" name="title" value="{{$news->title}}" class="form-control"  placeholder="News Title">
                                            @error('title')
                                                    <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <small for="exampleInputEmail1" style="font-size:15px;">Image Thumbnail <span style="font-size:12px !important;">(584*444)</span></small>
                                        <input type="file" name="imageThum"  class="form-control"  placeholder="Image Thumbnail" onChange="imageThumUrl(this)">
                                        @error('imageThum')
                                                <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                        @enderror
                                    </div>
                                    </div>
                                   </div>

                            <div class="row">                    
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <small for="exampleInputEmail1" style="font-size:15px;">Image <span style="font-size:12px !important;">(728*399)</span></small>
                                  <input type="file" name="image" class="form-control"  placeholder="Image" onChange="imageUrl(this)">
                                  @error('image')
                                          <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                <img src="" id="image" >
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                <img src="" id="imageThum" >
                                </div>
                              </div>
                             </div>

                                   <div class="row">                             
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                    <small for="exampleInputEmail1" style="font-size:15px;">News Details</small>
                                    <textarea name="newsDetailsOne" id="editor1">{!! $news->newsDetailsOne !!}</textarea>
                                        @error('newsDetailsOne')
                                                <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                    <small for="exampleInputEmail1" style="font-size:15px;">News Details <span style="font-size:12px !important;">(Optional)</span></small>
                                    <textarea name="newsDetailsTwo" id="editor2">{!! $news->newsDetailsTwo !!}</textarea>
                                       
                                    </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                    <small for="exampleInputEmail1" style="font-size:15px;">News Details <span style="font-size:12px !important;">(Optional)</span></small>
                                    <textarea name="newsDetailsThree" id="editor3">{!! $news->newsDetailsThree !!}</textarea>
                                      
                                    </div>
                                   </div>
                                </div>

<hr>
    <!-- 1st -->
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="silerMain" value="1"  type="checkbox" class="custom-control-input" id="customCheck1" {{ $news->silerMain == 1 ? 'checked' :'' }} >
                                        <label class="custom-control-label text-muted" for="customCheck1">Main Slide</label>
                                     </div>
                                </div>
                             </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="silderLeft" value="1" type="checkbox" class="custom-control-input" id="customCheck2" {{ $news->silderLeft == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck2">Slide Left</label>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                      <input name="silderRight" value="1" type="checkbox" class="custom-control-input" id="customCheck3" {{ $news->silderRight == 1 ? 'checked' :'' }}>
                                      <label class="custom-control-label text-muted" for="customCheck3">Slide Right</label>
                                    </div>
                                </div>    
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="political" value="1" type="checkbox" class="custom-control-input" id="customCheck4" {{ $news->political == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck4">রাজনৈতিক</label>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="category" value="1" type="checkbox" class="custom-control-input" id="customCheck5" {{ $news->category == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck5">Feaured</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="jobs" value="1" type="checkbox" class="custom-control-input" id="customCheck6" {{ $news->jobs == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck6">চাকরি</label>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
<!-- 2nd -->
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="wholeCountry" value="1" type="checkbox" class="custom-control-input" id="customCheck7" {{ $news->wholeCountry == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck7">সারাদেশ</label>
                                     </div>
                                </div>
                             </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="world" value="1" type="checkbox" class="custom-control-input" id="customCheck8" {{ $news->world == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck8">বিশ্ব</label>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                      <input name="education" value="1" type="checkbox" class="custom-control-input" id="customCheck9" {{ $news->education == 1 ? 'checked' :'' }}>
                                      <label class="custom-control-label text-muted" for="customCheck9">শিক্ষা</label>
                                    </div>
                                </div>    
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="medical" value="1" type="checkbox" class="custom-control-input" id="customCheck10" {{ $news->medical == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck10">মেডিকেল</label>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="fashion" value="1" type="checkbox" class="custom-control-input" id="customCheck11" {{ $news->fashion == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck11">ফ্যাশন</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="Story" value="1" type="checkbox" class="custom-control-input" id="customCheck12" {{ $news->Story == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck12">Story</label>
                                    </div>
                                </div>
                            </div>


                        </div>
<!-- 3rd -->
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="travel" value="1" type="checkbox" class="custom-control-input" id="customCheck13" {{ $news->travel == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck13">ভ্রমণ</label>
                                     </div>
                                </div>
                             </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="sports" value="1" type="checkbox" class="custom-control-input" id="customCheck14" {{ $news->sports == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck14">খেলাধুলা</label>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                      <input name="commerce" value="1" type="checkbox" class="custom-control-input" id="customCheck15" {{ $news->commerce == 1 ? 'checked' :'' }}>
                                      <label class="custom-control-label text-muted" for="customCheck15">বানিজ্য</label>
                                    </div>
                                </div>    
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="entertainment" value="1" type="checkbox" class="custom-control-input" id="customCheck16" {{ $news->entertainment == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck16">বিনোদন</label>
                                    </div>
                                </div>    
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox primary-checkbox custom-control-inline">
                                        <input name="lifestyle" value="1" type="checkbox" class="custom-control-input" id="customCheck17" {{ $news->lifestyle == 1 ? 'checked' :'' }}>
                                        <label class="custom-control-label text-muted" for="customCheck17">জীবনযাপন</label>
                                    </div>
                                </div>    
                            </div>
                         
                        </div>

                        <!-- End  -->
    <hr>

    <!-- Seo Setting -->

                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Seo Settings <span style="font-size:12px;">(Optional)</span></small></h5>
                        </div>
                    </div>
                     <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <small for="exampleInputEmail1" style="font-size:15px;">Meta Title</small>
                                    <input type="text" name="metaTitle" value="{{ $news->metaTitle }}"  class="form-control"  placeholder="Meta Title">
                                     
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                <small for="exampleInputEmail1" style="font-size:15px;">Meta Keyword</small>
                                    <input type="text" name="metaKeyword" value="{{ $news->metaTitle }}" class="form-control"  placeholder="Meta Keyword">     
                                </div>
                             </div>

                        </div>

                     <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <small for="exampleInputEmail1" style="font-size:15px;">Meta Author</small>
                                    <input type="text" name="metaAuthor" value="{{ $news->metaAuthor }}" class="form-control"  placeholder="Meta Author">
                                     
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                <small for="exampleInputEmail1" style="font-size:15px;">Google Analyties</small>
                                    <input type="text" name="googleAnalytics"  value="{{ $news->googleAnalytics }}" class="form-control"  placeholder="Google Analyties">     
                                </div>
                             </div>

                        </div>
                     <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <small for="exampleInputEmail1" style="font-size:15px;">Meta Title Pagination</small>
                                    <input type="text" name="titlePagination" value="{{ $news->titlePagination }}"  class="form-control"  placeholder="Meta Title Pagination">
                                     
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                <small for="exampleInputEmail1" style="font-size:15px;">Meta Description Pagination</small>
                                    <input type="text" name="metaDescriptionPagination" value="{{ $news->metaDescriptionPagination }}"  class="form-control"  placeholder="Meta Description Pagination">     
                                </div>
                             </div>

                        </div>
                     <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <small for="exampleInputEmail1" style="font-size:15px;">Meta Description</small>
                                    <textarea name="metaDescription" class="form-control" id="exampleFormControlTextarea1" rows="3">{!! $news->metaDescription !!}</textarea>
                                </div>
                            </div>
                            
                        </div>
                                 
                    <button type="submit" class="btn btn-primary">Add News</button>
                                 
                                   
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        
        
        </div>



        <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="categoryId"]').on('change', function(){
            var categoryId = $(this).val();
            if(categoryId) {
                $.ajax({
                    url: "{{  url('/admin/subcategory/ajax') }}/"+categoryId,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
						$('select[name="subCategoryId"]').html('');
                       var d =$('select[name="subCategoryId"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subCategoryId"]').append('<option value="'+ value.id +'">' + value.subCategoryName + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });


		$('select[name="divisionId"]').on('change', function(){
            var divisionId = $(this).val();
            if(divisionId) {
                $.ajax({
                    url: "{{  url('/admin/district/ajax') }}/"+divisionId,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="districtId"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="districtId"]').append('<option value="'+ value.id +'">' + value.districtName + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });





    });
    </script>


	<!-- Main Image One section -->


		<script type="text/javascript">
			function imageThumUrl(input){
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e){
						$('#imageThum').attr('src',e.target.result).width(80).height(80);
					};
					reader.readAsDataURL(input.files[0]);
				}
			}	
		</script>
        
		<script type="text/javascript">
			function imageUrl(input){
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e){
						$('#image').attr('src',e.target.result).width(80).height(80);
					};
					reader.readAsDataURL(input.files[0]);
				}
			}	
		</script>


@endsection