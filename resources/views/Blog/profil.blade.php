@extends("theme1.$theme5.layouts")

@section("titles")
{{$user->name}}
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
@section("otros")  {{--} ruta--}}

@endsection
@section("otros1") {{-- Nompre de la ruta--}}

@endsection
@section("otros2") {{--class par poner--}}

@endsection

@section("styles")

@endsection

@section('content')

 <!-- Main content -->
 <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Perfil personal</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">Numero de Post</span>
                        <span class="info-box-number text-center text-muted mb-0">2300</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">comentarios</span>
                        <span class="info-box-number text-center text-muted mb-0">2000</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">Usuario</span>
                        <span class="info-box-number text-center text-muted mb-0">oro <span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <h4>Recent Activity</h4>
                      <div class="post">
                        <div class="user-block">
                                @if($user->avatar == '')
                                <img src="{{ asset('fron/img/avatar/IDM.jpg')}}" class="img-circle elevation-2" alt="User Image">
                            @else
                          <img class="img-circle" src="{{$user->avatar}}" alt="User Image">
                            @endif
                          <span class="username">
                            <a href="#">{{$user->name}}</a>
                          </span>
                          <span class="description">Shared publicly - 7:45 PM today</span>
                        </div>
                        <!-- /.user-block -->
                        <br>
                        <br>
                        <br>
                        <p>
                          Lorem ipsum represents a long-held tradition for designers,
                          typographers and the like. Some people hate it and argue for
                          its demise, but others ignore.
                        </p>

                        <p>
                          <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                        </p>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur enim et sed necessitatibus eos,
                           est quam consequatur voluptate perferendis modi porro omnis, explicabo praesentium rerum vitae dolores
                            quisquam hic.</p>

                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                <h3 class="text-primary"><i class="fas fa-paint-brush"></i>Viografia</h3>
                <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                <br>
                <div class="text-muted">
                  <p class="text-sm">Client Company
                    <b class="d-block">Deveint Inc</b>
                  </p>
                  <p class="text-sm">Project Leader
                    <b class="d-block">Tony Chicken</b>
                  </p>
                </div>

                <h5 class="mt-5 text-muted">Project files</h5>
                <ul class="list-unstyled">
                  <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>{{ $user->profile->instagram }}</a>
                  </li>
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                  </li>
                  <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i>{{$user->email}}</a>
                  </li>
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                  </li>
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                  </li>
                </ul>
                <div class="text-center mt-5 mb-3">
                  <a href="#" class="btn btn-sm btn-primary">Add files</a>
                  <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->

@endsection

@section('scripts')

@endsection





