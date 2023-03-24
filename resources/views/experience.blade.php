@extends('master')

@section('title', 'Experience')

@section('pages')

@section('page', 'Experience')

@section('konten_experience')
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              @foreach ($data as $item)

              <!-- Default box -->
              <div class="card">
                  <div class="card-header">

                      <h2 class="card-title">{{ $item->title }}</h2>
                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                  <i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                  <i class="fas fa-times"></i>
                              </button>
                          </div>
                      </div>

                      <div class="card-body">
                          {{ $item->content }}
                      </div>
                      <!-- /.card-body -->
                      <!-- /.card-footer-->

                  </div>
                  <!-- /.card -->

              @endforeach

            </div>
          </div>
        </div>
@endsection