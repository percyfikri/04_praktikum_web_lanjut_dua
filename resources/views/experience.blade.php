@extends('master')

@section('title', 'Experience')

@section('pages')

@section('page', 'Experience')

@section('konten_experience')
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">{{ $exp }}</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                    Sejak berkuliah di POLINEMA dengan memilih Jurusan Teknik Informasi Prodi D4 Teknik Informatika, Saya sangat senang sekali dikarenakan tugas yang diberikan oleh para dosen sangatlah mudah dan pemberian deadlinenya juga panjang. Oleh karena itu, saya sangat termotivasi untuk selalu rajin mengikuti perkuliahan dan mengerjakan tugas tepat waktu
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
@endsection