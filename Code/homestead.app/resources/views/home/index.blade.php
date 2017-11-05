@extends('layouts.master')

@section('content')

<div class="row">
  <div class="col-md-12">
    <p><a href="#">Home / ITIS 6177 / Video Library</a></p>
          <div class="box">
            <div class="container-1">
                 <span class="icon"><i class="fa fa-search"></i></span>
                 <input type="search" id="search" placeholder="Search All Videos" />
            </div>
          </div>
    </div>
    </div>
        
        <div class="box-2">
           <div class="container-2">
                 <input type="select" id="dropdown_header" placeholder="Select a folder" />
                  
            </div>
         </div> 

         <div class="video_1">
         <a href="{{ route('current_videos.current') }}" />
             <input type="image" src="images/video1.png" alt="Submit" />
          
         </div>


@endsection('content')

