@extends('layouts')
@section('content')
<!-- Form Modal -->
      <div class="modal fade modal-black" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center"></div>
            <div class="modal-body">
              <div class="text-center">
                <img width="250" src="{{url ('asset/assets/img/logo1.png')}}">
              </div>
              <div class="text-center text-muted mb-4 mt-3">
                <small>Login with your email corporate please! <a href="#">Don't have an access?</a></small>
              </div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-email-85"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-key-25"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="form-check mt-3">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" checked>
                    <span class="form-check-sign"></span>
                    Remember me!
                  </label>
                </div>
                <div align="right">
                  <button type="button" class="nav-link btn btn-default d-none d-lg-block">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!--  End Modal -->
      <body class="landing-page">

      <div class="wrapper">
      <div class="page-header">
      <img src="{{url ('asset/assets/img/blob.png')}}" class="path">
      <img src="{{url ('asset/assets/img/path2.png')}}" class="path2">
      <img src="{{url ('asset/assets/img/triunghiuri.png')}}" class="shapes triangle">
      <img src="{{url ('asset/assets/img/waves.png')}}" class="shapes wave">
      <img src="{{url ('asset/assets/img/patrat.png')}}" class="shapes squares">
      <img src="{{url ('asset/assets/img/cercuri.png')}}" class="shapes circle">
      <div class="content-center">
        <div class="row row-grid justify-content-between align-items-center text-left">
          <div class="col-lg-6 col-md-6">
            <h1 class="text-white">About</h1>
            <p class="text-white mb-3">On this page you can access the documentation about this web as a whole. Addressed to the user so as not to experience communication failures. But the web appearance has been made user friendly to facilitate use.</p>
            <div class="btn-wrapper mb-3">
              <p class="category text-success d-inline">i don't understand and wanna scroll down</p>
              <a href="" class="btn btn-success btn-link btn-sm"><i class="tim-icons icon-minimal-down"></i></a>
            </div>
            <div class="btn-wrapper">
              <div class="button-container">
                <button href="#" class="btn btn-icon btn-simple btn-round btn-neutral">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-icon btn-simple btn-round btn-neutral">
                  <i class="fab fa-dribbble"></i>
                </button>
                <button href="#" class="btn btn-icon btn-simple btn-round btn-neutral">
                  <i class="fab fa-facebook"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <img src="{{url ('asset/assets/img/etherum2.png')}}" alt="Circle image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <section class="section section-lg">
      <section class="section">
        <img src="{{url ('asset/assets/img/path4.png')}}" class="path">
        <div class="container">
          <div class="row row-grid justify-content-between">
            <div class="col-md-5 mt-lg-5">
              <div class="row">
                <div class="col-lg-6 col-sm-12 px-2 py-2">
                  <div class="card card-stats ">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-5 col-md-4">
                          <div class="icon-big text-center icon-warning">
                            <i class="tim-icons icon-trophy text-warning"></i>
                          </div>
                        </div>
                        <div class="col-7 col-md-8">
                          <div class="numbers">
                            <p class="card-title">3,237
                              <p>
                                <p class="card-category">Awards</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12 px-2 py-2">
                  <div class="card card-stats upper bg-default">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-5 col-md-4">
                          <div class="icon-big text-center icon-warning">
                            <i class="tim-icons icon-coins text-white"></i>
                          </div>
                        </div>
                        <div class="col-7 col-md-8">
                          <div class="numbers">
                            <p class="card-title">3,653
                              <p>
                                <p class="card-category">Commits</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-12 px-2 py-2">
                  <div class="card card-stats ">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-5 col-md-4">
                          <div class="icon-big text-center icon-warning">
                            <i class="tim-icons icon-gift-2 text-info"></i>
                          </div>
                        </div>
                        <div class="col-7 col-md-8">
                          <div class="numbers">
                            <p class="card-title">593
                              <p>
                                <p class="card-category">Presents</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12 px-2 py-2">
                  <div class="card card-stats ">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-5 col-md-4">
                          <div class="icon-big text-center icon-warning">
                            <i class="tim-icons icon-credit-card text-success"></i>
                          </div>
                        </div>
                        <div class="col-7 col-md-8">
                          <div class="numbers">
                            <p class="card-title">10,783
                              <p>
                                <p class="card-category">Forks</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="pl-md-5">
                <h1>Large
                  <br/>Achivements</h1>
                <p>I should be capable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. </p>
                <br/>
                <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray.</p>
                <br/>
                <a href="#" class="font-weight-bold text-info mt-5">Show all <i class="tim-icons icon-minimal-right text-info"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <section class="section section-lg">
      <img src="{{url ('asset/assets/img/path4.png')}}" class="path">
      <img src="{{url ('asset/assets/img/path5.png')}}" class="path2">
      <img src="{{url ('asset/assets/img/path2.png')}}" class="path3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <h1 class="text-center">Your best benefit</h1>
            <div class="row row-grid justify-content-center">
              <div class="col-lg-3">
                <div class="info">
                  <div class="icon icon-primary">
                    <i class="tim-icons icon-money-coins"></i>
                  </div>
                  <h4 class="info-title">Low Commission</h4>
                  <hr class="line-primary">
                  <p>Divide details about your work into parts. Write a few lines about each one. A paragraph describing a feature will.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="info">
                  <div class="icon icon-warning">
                    <i class="tim-icons icon-chart-pie-36"></i>
                  </div>
                  <h4 class="info-title">High Incomes</h4>
                  <hr class="line-warning">
                  <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing feature will be a feature. </p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="info">
                  <div class="icon icon-success">
                    <i class="tim-icons icon-single-02"></i>
                  </div>
                  <h4 class="info-title">Verified People</h4>
                  <hr class="line-success">
                  <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing be enough.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg section-safe">
      <img src="{{url ('asset/assets/img/path5.png')}}" class="path">
      <div class="container">
        <div class="row row-grid justify-content-between">
          <div class="col-md-5">
            <img src="{{url ('asset/assets/img/chester-wade.jpg')}}" class="img-fluid floating">
            <div class="card card-stats bg-danger">
              <div class="card-body">
                <div class="justify-content-center">
                  <div class="numbers">
                    <p class="card-title">100%</p>
                    <p class="card-category text-white">Safe</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-stats bg-info">
              <div class="card-body">
                <div class="justify-content-center">
                  <div class="numbers">
                    <p class="card-title">573 K</p>
                    <p class="card-category text-white">Satisfied customers</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-stats bg-default">
              <div class="card-body">
                <div class="justify-content-center">
                  <div class="numbers">
                    <p class="card-title">10 425</p>
                    <p class="card-category text-white">Business</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="px-md-5">
              <hr class="line-success">
              <h3>Awesome features</h3>
              <p>The design system comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <ul class="list-unstyled mt-5">
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-success mb-2">
                      <i class="tim-icons icon-vector"></i>
                    </div>
                    <div class="ml-3">
                      <h6>Carefully crafted components</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-success mb-2">
                      <i class="tim-icons icon-tap-02"></i>
                    </div>
                    <div class="ml-3">
                      <h6>Amazing page examples</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-success mb-2">
                      <i class="tim-icons icon-single-02"></i>
                    </div>
                    <div class="ml-3">
                      <h6>Super friendly support team</h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg">
      <img src="{{url ('asset/assets/img/path4.png')}}" class="path">
      <img src="{{url ('asset/assets/img/path2.png')}}" class="path2">
      <div class="col-md-12">
        <div class="card card-chart card-plain">
          <div class="card-header">
            <div class="row">
              <div class="col-sm-6 text-left">
                <hr class="line-primary">
                <h5 class="card-category">Total Investments</h5>
                <h2 class="card-title">Performance</h2>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="chartBig"></canvas>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg section-coins">
      <img src="{{url ('asset/assets/img/path3.png')}}" class="path">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <hr class="line-info">
            <h1>Choose the coin
              <span class="text-info">that fits your needs</span>
            </h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-coin card-plain">
              <div class="card-header">
                <img src="{{url ('asset/assets/img/bitcoin.png')}}" class="img-center img-fluid">
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h4 class="text-uppercase">Light Coin</h4>
                    <span>Plan</span>
                    <hr class="line-primary">
                  </div>
                </div>
                <div class="row">
                  <ul class="list-group">
                    <li class="list-group-item">50 messages</li>
                    <li class="list-group-item">100 emails</li>
                    <li class="list-group-item">24/7 Support</li>
                  </ul>
                </div>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary btn-simple">Get plan</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-coin card-plain">
              <div class="card-header">
                <img src="{{url ('asset/assets/img/etherum.png')}}" class="img-center img-fluid">
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h4 class="text-uppercase">Dark Coin</h4>
                    <span>Plan</span>
                    <hr class="line-success">
                  </div>
                </div>
                <div class="row">
                  <ul class="list-group">
                    <li class="list-group-item">150 messages</li>
                    <li class="list-group-item">1000 emails</li>
                    <li class="list-group-item">24/7 Support</li>
                  </ul>
                </div>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-success btn-simple">Get plan</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-coin card-plain">
              <div class="card-header">
                <img src="{{url ('asset/assets/img/ripp.png')}}" class="img-center img-fluid">
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h4 class="text-uppercase">Bright Coin</h4>
                    <span>Plan</span>
                    <hr class="line-info">
                  </div>
                </div>
                <div class="row">
                  <ul class="list-group">
                    <li class="list-group-item">350 messages</li>
                    <li class="list-group-item">10K emails</li>
                    <li class="list-group-item">24/7 Support</li>
                  </ul>
                </div>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-info btn-simple">Get plan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
 	</body>
    </section>
@endsection