@extends('layouts.master')

@section('title', 'Pertanyaan')

@section('foto', 'images/profiles/umar.jpg')

@section('content')

<!-- Detail Pertanyaan -->
<h2>Judul Pertanyaan</h2>
<div class="card">
  <div class="card-body">
    <div class="avatar-icon" style="background-image: url(@yield('foto'))"></div>
    <div class="row">

      <div class="post-info col">
        <a href="#" class="text-dark">Umar Abdul Jabbar</a>
        <p>dibuat pada: </p>
      </div>
      
      <!-- Post Dropdown -->
      <a class="nav-link" href="#" id="postDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="postDropdown">
        <a class="dropdown-item" href="#">Edit</a>
        <a class="dropdown-item" href="#">Solved</a>
        <a class="dropdown-item" href="#">Hide</a>
        <a class="dropdown-item" href="#">Delete</a>
      </div>

    </div>
    <div class="clear"></div>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, porro sed? Mollitia, velit natus illo distinctio sapiente ea quos minima nisi nulla veritatis aspernatur possimus repellat, labore officia pariatur sequi?
    </div>
    <div class="card-footer">
      <div class="row text-center">  
        <div class="col-4 vote-btn">
          <a href="#" class="text-primary">
            <i class="fas fa-chevron-circle-up"></i> Upvote
          </a>
        </div>
        <div class="col-4"><h4>99</h4></div>
        <div class="col-4 vote-btn">
          <a href="#" class="text-danger">
            <i class="fas fa-chevron-circle-down"></i> Downvote
          </a>
        </div>
      </div>
    </div>

    <div class="card-body"> 
      <div class="avatar-icon" style="background-image: url(@yield('foto'))"></div>
      <div class="row">
        <div class="col-md-12 mt-2">
        <div class="input-group">
          <input type="text" class="form-control" name="komentar" placeholder="Tulis komentar anda disini . . ">
          <div class="input-group-append">
            <button class="btn btn-dark" type="button">Komentar</button>
          </div>
        </div>
        </div>
      </div>
    </div>

    <div class="card-body">
      <div class="container">
        <div class="container-fluid">
          <h5>Jawaban: </h5>

          <!-- Jawaban -->
          <div class="card mt-3">
            <div class="card-body bg-success">
              <div class="avatar-icon" style="background-image: url(@yield('foto'))"></div>
              <div class="row">
                <div class="post-info col">
                  <a href="#">User</a>
                  <p>dibuat pada:</p>
                </div>
                <div class="best-answer">
                  <span class="mr-2">Best Answer</span><i class="fas fa-medal"></i>
                </div>
                <a class="nav-link" href="#" id="commentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="commentDropdown">
                  <a class="dropdown-item" href="#">Edit</a>
                  <a class="dropdown-item" href="#">Solved</a>
                  <a class="dropdown-item" href="#">Hide</a>
                  <a class="dropdown-item" href="#">Delete</a>
                </div>

                <div class="col-12 jawaban">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, aliquid. Distinctio nobis odio exercitationem ducimus consequatur similique! Nam neque error repudiandae ratione blanditiis dicta consequatur ut nulla sunt distinctio. Esse.
                  <!-- Post Dropdown --><br>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="row text-center">  
                <div class="col-4 vote-btn">
                  <a href="#" class="text-primary">
                    <i class="fas fa-chevron-circle-up"></i> Upvote
                  </a>
                </div>
                <div class="col-4"><h4>99</h4></div>
                <div class="col-4 vote-btn">
                  <a href="#" class="text-danger">
                    <i class="fas fa-chevron-circle-down"></i> Downvote
                  </a>
                </div>
              </div>
            </div>

            <div class="container">
              <div class="container-fluid">
                <div class="card-footer mt-2 outline-info">
                  <div class="avatar-icon" style="background-image: url(@yield('foto'))"></div>
                  <div class="row">
                    <div class="post-info col">
                      <a href="#">User</a>
                      <p>dibuat pada:</p>
                    </div>

                    <a class="nav-link" href="#" id="commentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="commentDropdown">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Solved</a>
                      <a class="dropdown-item" href="#">Hide</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>

                    <div class="col-12 jawaban">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, aliquid. Distinctio nobis odio exercitationem ducimus consequatur similique! Nam neque error repudiandae ratione blanditiis dicta consequatur ut nulla sunt distinctio. Esse.
                      <!-- Post Dropdown --><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="card-body"> 
              <div class="avatar-icon" style="background-image: url(@yield('foto'))"></div>
              <div class="row">
                <div class="col-md-12 mt-2">
                <div class="input-group">
                  <input type="text" class="form-control" name="komentar" placeholder="Beri komentar untuk jawaban diatas . . ">
                  <div class="input-group-append">
                    <button class="btn btn-dark" type="button">Komentar</button>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Jawaban -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Akhir detail -->

@endsection