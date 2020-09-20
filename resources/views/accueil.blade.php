
    @extends('layouts.menu')
    @section('title', 'Accueil')
    @section('content')

      	<div class="page-container float-right">
      		<div class="row">
                @foreach($posts as $post)
      			<div class="col-md-12">
      			<div class="blog-entry ftco-animate">
                <a href="{{url('posts', $post)}}" class="blog-image">
                	<img src="/storage/images/posts/{{$post->image}}" class="img-fluid" alt="">
                </a>
                <div class="text py-4">
                  <div class="meta">
                    @auth
                    @if($post->user->id == Auth::user()->id)
                    <div>
                        <a href="{{route('posts.edit', $post)}}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    </div>
                    <div>
                        <form class="" action="{{route('posts.destroy', $post)}}" method="post">
                            @csrf
                            {{method_field('delete')}}
                            <button type="submit" name="button">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>

                    </div>
                    @endif
                    @endauth
                    <div><a href="#">{{$post->created_at}}</a></div>
                    <div><a href="#">{{$post->user->name}}</a></div>
                  </div>
                  <h3 class="heading"><a href="{{url('posts', $post)}}">{{$post->title}}</a></h3>
                  <p>
                      {{$post->chapo}}
                  </p>
                </div>
              </div>


      			</div>
                @endforeach


      		</div>
      		<div class="row mt-5">
	          <div class="col text-center">
	            <div class="block-27">
	              <ul>
	                <li><a href="#">&lt;</a></li>
	                <li class="active"><span>1</span></li>
	                <li><a href="#">2</a></li>
	                <li><a href="#">3</a></li>
	                <li><a href="#">4</a></li>
	                <li><a href="#">5</a></li>
	                <li><a href="#">&gt;</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
      	</div><!-- end: page-container-->

    @endsection
