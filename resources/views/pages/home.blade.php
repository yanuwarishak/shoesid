@extends('layouts.app')

@section('content')

<div class="page-wrapper">
<!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Static Slider 10  -->
            <div class="banner-innerpage" style="background-image:url(../assets/images/innerpage/banner-bg.jpg)">
            </div>
            <!-- End Static Slider 10  -->
        </div>
<!-- End Container fluid  -->
        <!-- Container -->
        <div class="container">
          <!-- Best Seller -->
          <!-- Row -->

            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="title">Best Seller</h2>
                </div>
            </div>
          <!-- Row -->
          <div class="row m-t-30">
              <!-- column  -->
              <div class="col-lg-12">
                  <div class="row shop-listing">
                      <!-- column  -->
                      <div class="col-lg-3">
                          <div class="card shop-hover">
                              <img src="{{ asset("image-assets/wakai-keds1.jpg") }}" alt="wrapkit" class="img-fluid" />
                              <div class="card-img-overlay align-items-center">
                                <a class="btn btn-md btn-info-gradiant" href="shop-detail.html"> Beli </a>
                              </div>
                              <!-- <span class="label label-rounded label-success">Sale</span> -->
                          </div>
                          <div class="card">
                              <h6><a href="shop-detail.html" class="link">Gyou Burst - Shamrock Women </a></h6>
                              <h6 class="subtitle">by WAKAI</h6>
                              <h5 class="font-medium m-b-30">Rp. 729.000</h5>
                          </div>
                      </div>
                      <!-- column  -->
                      <!-- column  -->
                      <div class="col-lg-3">
                          <div class="card shop-hover">
                              <img src="{{ asset("image-assets/wakai-keds1.jpg") }}" alt="wrapkit" class="img-fluid" />
                              <div class="card-img-overlay align-items-center">
                                  <button class="btn btn-md btn-info-gradiant" href="shop-detail.html">Beli</button>
                              </div>
                              <span class="label label-rounded label-success">Sale</span>
                          </div>
                          <div class="card">
                              <h6><a href="shop-detail.html" class="link">Signore Parang Jati Oxblood </a></h6>
                              <h6 class="subtitle">by Brodo</h6>
                              <h5 class="font-medium m-b-30">Rp. 729.000 / <del class="text-muted line-through">Rp. 829.000</del></h5>
                          </div>
                      </div>
                      <!-- column  -->
                      <!-- column  -->
                      <div class="col-lg-3">
                          <div class="card shop-hover">
                              <img src="{{ asset("image-assets/wakai-keds1.jpg") }}" alt="wrapkit" class="img-fluid" />
                              <div class="card-img-overlay align-items-center">
                                  <button class="btn btn-md btn-info-gradiant" href="shop-detail.html">Beli</button>
                              </div>
                          </div>
                          <div class="card">
                              <h6><a href="shop-detail.html" class="link">IVY-Navy Women </a></h6>
                              <h6 class="subtitle">by WAKAI</h6>
                              <h5 class="font-medium m-b-30">Rp. 549.000</del></h5>
                          </div>
                      </div>
                      <!-- column  -->
                      <!-- column  -->
                      <div class="col-lg-3">
                          <div class="card shop-hover">
                              <img src="{{ asset("image-assets/wakai-keds1.jpg") }}" alt="wrapkit" class="img-fluid" />
                              <div class="card-img-overlay align-items-center">
                                  <button class="btn btn-md btn-info-gradiant" href="shop-detail.html">Beli</button>
                              </div>
                          </div>
                          <div class="card">
                              <h6><a href="shop-detail.html" class="link">Yongki Komaladi </a></h6>
                              <h6 class="subtitle">by Yongki Komaladi</h6>
                              <h5 class="font-medium m-b-30">Rp. 259.000</del></h5>
                          </div>
                      </div>
                      <!-- column  -->
                      <div class="col-lg-12">
                          <nav class="">
                              <ul class="pagination justify-content-center">
                                  <li class="page-item disabled">
                                      <a class="page-link" href="#" tabindex="-1">Previous</a>
                                  </li>
                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item ">
                                      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                      <a class="page-link" href="#">Next</a>
                                  </li>
                              </ul>
                          </nav>
                      </div>
                  </div>
              </div>
              <!-- column  -->
          </div>        
          <!-- End Best Seller -->
          <!-- Top Brand -->
          <div class="spacer feature24">
              <div class="container">
                  <!-- Row -->
                  <div class="row justify-content-center">
                      <div class="col-md-7 text-center">
                          <h2 class="title">Top Brand</h2>
                      </div>
                  </div>
                  <!-- Row -->
                  <div class="row wrap-feature-24">
                      <!-- Column -->
                      <div class="col-lg-3 col-md-6">
                          <div class="card card-shadow">
                              <a href="javascript:void(0)" class="service-24"> <img src="../assetsq/logo-sepatu/wakai.png"></i>
                                  <h6 class="ser-title">WAKAI</h6>
                              </a>
                          </div>
                      </div>
                      <!-- Column -->
                      <!-- Column -->
                      <div class="col-lg-3 col-md-6">
                          <div class="card card-shadow">
                              <a href="javascript:void(0)" class="service-24"> <img src="../assetsq/logo-sepatu/ardiles.png"></i>
                                  <h6 class="ser-title">Ardiles</h6>
                              </a>
                          </div>
                      </div>
                      <!-- Column -->
                      <!-- Column -->
                      <div class="col-lg-3 col-md-6">
                          <div class="card card-shadow">
                              <a href="javascript:void(0)" class="service-24"> <img src="../assetsq/logo-sepatu/carvil.png"></i>
                                  <h6 class="ser-title">Carvil</h6>
                              </a>
                          </div>
                      </div>
                      <!-- Column -->
                      <!-- Column -->
                      <div class="col-lg-3 col-md-6">
                          <div class="card card-shadow">
                              <a href="javascript:void(0)" class="service-24"> <img src="../assetsq/logo-sepatu/eagle.png"></i>
                                  <h6 class="ser-title">Eagle</h6>
                              </a>
                          </div>
                      </div>
                      <!-- Column -->
                      <!-- Column -->
                      <div class="col-lg-3 col-md-6">
                          <div class="card card-shadow">
                              <a href="javascript:void(0)" class="service-24"> <img src="../assetsq/logo-sepatu/brodo.png"></i>
                                  <h6 class="ser-title">Bro.do</h6>
                              </a>
                          </div>
                      </div>
                      <!-- Column -->
                      <!-- Column -->
                      <div class="col-lg-3 col-md-6">
                          <div class="card card-shadow">
                              <a href="javascript:void(0)" class="service-24"> <img src="../assetsq/logo-sepatu/kasogi.png"></i>
                                  <h6 class="ser-title">Kasogi</h6>
                              </a>
                          </div>
                      </div>
                      <!-- Column -->
                      <!-- Column -->
                      <div class="col-lg-3 col-md-6">
                          <div class="card card-shadow">
                              <a href="javascript:void(0)" class="service-24"> <img src="../assetsq/logo-sepatu/yongki-komaladi.png"></i>
                                  <h6 class="ser-title">Yongki Komaladi</h6>
                              </a>
                          </div>
                      </div>
                      <!-- Column -->
                      <!-- Column -->
                      <div class="col-lg-3 col-md-6">
                          <div class="card card-shadow">
                              <a href="javascript:void(0)" class="service-24"> <img src="../assetsq/logo-sepatu/tomkins.png"></i>
                                  <h6 class="ser-title">Tomkins</h6>
                              </a>
                          </div>
                      </div>
                      <!-- Column -->
                  </div>
              </div>
          </div>
          <!-- End Top Brand -->
        </div>
        <!-- End Container -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Back to top -->
        <!-- ============================================================== -->
        <a class="bt-top btn btn-circle btn-lg btn-info" href="#top"><i class="ti-arrow-up"></i></a> </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer 1  -->
    <!-- ============================================================== -->

@endsection