<?php
use App\Models\GalleryVideo;
$gallery_videos = GalleryVideo::all();
?>

@extends('website.parent')

@section('title','معرض الأعمال')


@section('styles')
<link rel="stylesheet" href="{{ asset('website/assets/css/gallery/fresco.css') }}"/>
		<link rel="stylesheet" href="{{ asset('website/assets/css/gallery/gallery.css') }}"/>
@endsection

@section('content')

    <div class="hero hero-inner">
      <div class="container">
        <div class="overlay"></div>
        <div class="row align-items-center">
          <div class="col-lg-6 mx-auto text-center">
            <div class="intro-wrap mx-auto">
              <h1 class="mb-0 animate__animated animate__fadeInUp">معرض الأعمال</h1>
              @foreach ($galleries as $gallery )
              <p class="text-white">{{$gallery->title}}</p>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

   <!-- >>>>>>>>>>>> gallery Page start >>>>>>>>>>>> -->
	<div class="gallery__page">
		<div class="gallery__warp">
			<div class="row">
                @foreach ($gallery_videos as $gallery_video)


				<div class="col-lg-3 col-md-4 col-sm-6 gallery">
					<a class="gallery__item fresco" href="{{ $gallery_video->link }}" data-fresco-group="gallery">
						<img src="{{ asset('storage/images/gallery_video/'.$gallery_video->image) }}" alt="gallery-image">
                        <i class="bi bi-play-fill play"></i>

					</a>
				</div>
                @endforeach
			</div>
		</div>
	</div>
	<!-- >>>>>>>>>>>> gallery Page end >>>>>>>>>>>> -->

    @endsection

@section('scripts')
<script src="{{ asset('website/assets/js/gallery/fs.js') }}"></script>
@endsection

