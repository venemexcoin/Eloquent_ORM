@extends("theme1.$theme5.layouts")

@section("titles")
Blog Perfil Usuario
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("layoutR")
{{ route('blog')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
Blog
@endsection

@section("styles")

@endsection
@section('content')
<section class="content ">

                <div class="row">
                  <div class="col-md-8 offset-md-2">
                  @foreach ($posts as $post)

                    <!-- Default box -->
                    <div class="card">
                    <!--card header -->
                    <div class="card-header blog-header">
                        {{$post->name}}
                    </div>
                    <!--/.card header -->
                    <!--card body -->
                      <div class="card-body">
                       @if($post->file)
                       <img src="{{ $post->file }}" class="img-fluid">
                       @endif

                       {{ $post->excerpt }}

                      <a href="{{ route('post', $post->slug ) }}" class="float-right">Lee más</a>
                      </div>
                    <!--/.card body -->
                    <!-- /.card-body -->
                      <div class="card-footer">
                            <p>Posted {{ $post->created_at->diffForHumans()}} by <b>{{$post->user->name }}</b></p>
                      </div><hr/>
                      <!-- /.card-footer-->
                      @endforeach

                      {{ $posts->render()}}
                  </div>
                </div>
              </div>

            </section>

@endsection


@section('scripts')


@endsection
