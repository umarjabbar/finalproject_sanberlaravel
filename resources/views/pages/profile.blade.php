@extends('layouts.master')

@section('title', 'User Profile')

@section('content')
<h2>Profile</h2>
<div class="card">
  <div class="card-body">
    <div class="container">
      <div class="row">
        <div class="col-3 profile-photo" style="background-image: url('images/profiles/umar.jpg')"></div> 
        <div class="col-9">
          <h3>Umar Abdul Jabbar</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut explicabo debitis placeat voluptas eaque culpa beatae optio accusamus porro. Minus modi libero tempora tempore blanditiis odio officiis omnis voluptate totam.</p>
          <span class="btn btn-info">Email</span>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer">
    <div class="row">
      <div class="col-md-4">
        <div class="card profile-info bg-danger text-white">
          <div class="card-body">
            <div class="row">
              <div class="col-8">
                <p>Reputasi</p>
                <h2>99</h2>  
              </div>
              <div class="col-4 my-auto"><i class="fas fa-heart"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card profile-info bg-info text-white">
          <div class="card-body">
            <div class="row">
              <div class="col-8">
                <p>Pertanyaan</p>
                <h2>99</h2>  
              </div>
              <div class="col-4 my-auto"><i class="fas fa-question"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card profile-info bg-warning text-white">
          <div class="card-body">
            <div class="row">
              <div class="col-8">
                <p>Solved</p>
                <h2>99</h2>  
              </div>
              <div class="col-4 my-auto"><i class="fas fa-check"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card mt-4">
  <div class="card-body">
    <div class="avatar-icon" style="background-image: url('images/profiles/umar.jpg')"></div>
    <div class="row">

      <div class="post-info col">
        <a href="#" class="text-dark">Umar Abdul Jabbar</a>
        <p>dibuat pada: </p>
      </div>
      
      <!-- Post Dropdown -->
      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        <a href="#" class="text-danger" id="downVote">
          <i class="fas fa-chevron-circle-down"></i> Downvote
        </a>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="avatar-icon" style="background-image: url('images/profiles/umar.jpg')"></div>
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
</div>
@endsection