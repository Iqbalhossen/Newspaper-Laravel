@extends('admin.admin_master')
@section('admin')

<div class="main-content-inner">
            <div class="row">
                <!-- data table -->         
                <!-- data table -->
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Site Setting Upadte</h4>
                                <form action="{{route('update.setting')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="old_id" value="{{$setting->id}}">
                                    <input type="hidden" name="oldFavicon"  value="{{$setting->favicon}}"  >
		                            <input type="hidden" name="oldLogo"  value="{{$setting->logo}}"  >

                                    <div class="row">

                                            <div class="col-6">
                                                <div class="form-group">
                                                <small for="exampleInputEmail1" style="font-size:15px;">Site Title</small>
                                                <input type="name" name="title" value="{{$setting->title}}" class="form-control"  placeholder="Enter title name">
                                                @error('title')
                                                        <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                                @enderror
                                                 </div>

                                             </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <small for="exampleInputEmail1" style="font-size:15px;">Site Favicon</small>
                                                <input type="file" name="favicon" class="form-control"  placeholder="Image" onChange="imageUrl(this)">
                                                @error('favicon')
                                                        <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                                @enderror
                                                 </div>

                                             </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <small for="exampleInputEmail1" style="font-size:15px;">Site Logo</small>
                                                <input type="file" name="logo" class="form-control"  placeholder="Image" onChange="imageUrl(this)">
                                                @error('image')
                                                        <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                                @enderror
                                                 </div>

                                             </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <small for="exampleInputEmail1" style="font-size:15px;">address</small>
                                                <input type="name" name="address" value="{{$setting->address}}" class="form-control"  placeholder="Enter address name">
                                                @error('address')
                                                        <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                                @enderror
                                                 </div>

                                             </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <small for="exampleInputEmail1" style="font-size:15px;">phone</small>
                                                <input type="name" name="phone" value="{{$setting->phone}}" class="form-control"  placeholder="Enter phone Number">
                                                @error('phone')
                                                        <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                                @enderror
                                                 </div>

                                             </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <small for="exampleInputEmail1" style="font-size:15px;">E-mail</small>
                                                <input type="email" name="email" value="{{$setting->email}}" class="form-control"  placeholder="Enter E-mail address">
                                                @error('email')
                                                        <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                                @enderror
                                                 </div>

                                             </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <small for="exampleInputEmail1" style="font-size:15px;">Facebook</small>
                                                <input type="name" name="facebook" value="{{$setting->facebook}}" class="form-control"  placeholder="Enter facebook link">
                                                @error('facebook')
                                                        <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                                @enderror
                                                 </div>

                                             </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <small for="exampleInputEmail1" style="font-size:15px;">Youtube</small>
                                                <input type="name" name="youtube" value="{{$setting->youtube}}" class="form-control"  placeholder="Enter youtube link">
                                                @error('youtube')
                                                        <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                                @enderror
                                                 </div>

                                             </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <small for="exampleInputEmail1" style="font-size:15px;">Twitter</small>
                                                <input type="name" name="twitter" value="{{$setting->twitter}}" class="form-control"  placeholder="Enter twitter link">
                                                @error('twitter')
                                                        <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                                @enderror
                                                 </div>

                                             </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <small for="exampleInputEmail1" style="font-size:15px;">pinterest</small>
                                                <input type="name" name="pinterest" value="{{$setting->pinterest}}" class="form-control"  placeholder="Enter pinterest link">
                                                @error('pinterest')
                                                        <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                                @enderror
                                                 </div>

                                             </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                <small for="exampleInputEmail1" style="font-size:15px;">About</small>
                                                <textarea name="about" id="editor1">{!! $setting->about !!}</textarea>
                                        @error('about')
                                                <span class="text-danger"style="font-size:12px;">{{ $message }} </span>
                                        @enderror
                                                 </div>

                                             </div>
                                    </div>

                                   


                                    <button type="submit" class="btn btn-primary">update</button>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        
        
        </div>


      
@endsection