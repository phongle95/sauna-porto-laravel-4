@extends('trangchu.menu.master') @section('noidung')

        <main class="main">
            <div class="home-top-container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="home-slider owl-carousel owl-carousel-lazy">
                                <div class="home-slide">
                                    <div class="owl-lazy slide-bg" data-src="sauna/assets/images/anh1.jpg"></div>

                                </div><!-- End .home-slide -->

                                <div class="home-slide">
                                    <div class="owl-lazy slide-bg" data-src="sauna/assets/images/anh2.jpg"></div>

                                </div><!-- End .home-slide -->

                                <div class="home-slide">
                                    <div class="owl-lazy slide-bg" data-src="sauna/assets/images/anh3.jpg"></div>

                                </div><!-- End .home-slide -->
                            </div><!-- End .home-slider -->
                        </div><!-- End .col-lg-9 -->

                        <div class="col-lg-3 order-lg-first">
                            <div class="side-custom-menu">
                                <h2 style="text-align:center;">DANH MỤC SẢN PHẨM</h2>

                                <div class="side-menu-body">
                                    <ul>
                                        @foreach ($loaisanpham as $item)
                                        <li><a href="{{ route('trangchu.pages.listproduct',['slug'=>str_slug($item->tenLoaiSanPham),'id'=>$item->id]) }}"><i class="icon-cat-gift"></i>{{ $item->tenLoaiSanPham }}</a></li>

                                        @endforeach
                                    </ul>

                                    <a href="{{ route('trangchu.pages.trangchu') }}" class="btn btn-block btn-primary">SẢN PHẨM</a>
                                </div><!-- End .side-menu-body -->
                            </div><!-- End .side-custom-menu -->
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .home-top-container -->

            <div class="info-boxes-container">
                <div class="container">
                    <div class="info-box">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content">
                            <h4>BẢO HÀNH 24H</h4>
                            <p>Giao hành an toàn nhanh chóng</p>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-us-dollar"></i>

                        <div class="info-box-content">
                            <h4>ĐÚNG GIÁ TRÊN THỊ TRƯỜNG</h4>
                            <p>100% Hàng chính hãng</p>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4>HỔ TRỢ 24/7</h4>
                            <p>Phục vụ tận tình chu đáo</p>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .info-boxes-container -->

            <div class="banners-group">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="sauna/assets/images/banners/km2.jpg" alt="máy xông hơi">
                                </a>
                            </div>
                            <!-- End .banner -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="sauna/assets/images/banners/km1.jpg" alt="máy xông hơi">
                                </a>
                            </div>
                            <!-- End .banner -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="sauna/assets/images/banners/km3.jpg" alt="máy xông hơi">
                                </a>
                            </div>
                            <!-- End .banner -->
                        </div>
                        <!-- End .col-md-4 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .banneers-group -->

            <div class="featured-products-section carousel-section">
                <div class="container">
                    <h2  class="h3 title mb-4 text-center">Máy Xông Hơi Ướt</h2>

                    <div class="featured-products owl-carousel owl-theme">
                        @foreach ($sanpham as $item)

                        <div class="product">
                            <figure class="product-image-container">

                                <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image1">
                                    <img src="upload/{{ $item->img }}" alt="máy xông hơi ướt">
                                </a>
                                {{--  <span class="product-label label-sale">-20%</span>  --}}
                                <span class="product-label label-hot">New</span>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}">{{ $item->tenSP }}</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">Giá : <strong style="color:red">{{ number_format($item->gia) }}</strong> vnđ</span>
                                </div>
                                <!-- End .price-box -->

                                <div class="product-action">
                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-wishlist" title="chi tiết sản phẩm">
                                        <span>Chi tiết</span>
                                    </a>

                                    <a  onclick="addCart({{ $item }})" href="" class="paction add-cart" title="Thêm vào giỏ">
                                        <span>Thêm Vào Giỏ</span>
                                    </a>

                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-compare" title="chi tiết sản phẩm">
                                        <span>Chi tiết</span>
                                    </a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <!-- End .product -->


                        @endforeach



                    </div>
                    <!-- End .featured-proucts -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .featured-proucts-section -->

            <div class="mb-5"></div>
            <!-- margin -->
            <div class="featured-products-section carousel-section">
                <div class="container">
                    <h2  class="h3 title mb-4 text-center">MÁY XÔNG HƠI KHÔ</h2>

                    <div class="featured-products owl-carousel owl-theme">
                        @foreach ($sanpham1 as $item)

                        <div class="product">
                            <figure class="product-image-container">

                                <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image1">
                                    <img src="upload/{{ $item->img }}" alt="máy xông hơi ướt">
                                </a>
                                {{--  <span class="product-label label-sale">-20%</span>  --}}
                                <span class="product-label label-hot">New</span>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}">{{ $item->tenSP }}</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">Giá : <strong style="color:red">{{ number_format($item->gia) }}</strong> vnđ</span>
                                </div>
                                <!-- End .price-box -->

                                <div class="product-action">
                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-wishlist" title="chi tiết sản phẩm">
                                        <span>Chi tiết</span>
                                    </a>

                                    <a  onclick="addCart({{ $item }})" href="" class="paction add-cart" title="Thêm vào giỏ">
                                        <span>Thêm Vào Giỏ</span>
                                    </a>

                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-compare" title="chi tiết sản phẩm">
                                        <span>Chi tiết</span>
                                    </a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <!-- End .product -->


                        @endforeach



                    </div>
                    <!-- End .featured-proucts -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .featured-proucts-section -->

            <div class="mb-5"></div>
            <!-- margin -->
            <div class="featured-products-section carousel-section">
                <div class="container">
                    <h2  class="h3 title mb-4 text-center">PHÒNG XÔNG HƠI KHÔ SAUNA</h2>

                    <div class="featured-products owl-carousel owl-theme">
                        @foreach ($sanpham2 as $item)

                        <div class="product">
                            <figure class="product-image-container">

                                <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image1">
                                    <img src="upload/{{ $item->img }}" alt="máy xông hơi ướt">
                                </a>
                                <span class="product-label label-sale">-20%</span>
                                {{--  <span class="product-label label-hot">New</span>  --}}
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}">{{ $item->tenSP }}</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">Giá : <strong style="color:red">{{ number_format($item->gia) }}</strong> vnđ</span>
                                </div>
                                <!-- End .price-box -->

                                <div class="product-action">
                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-wishlist" title="chi tiết sản phẩm">
                                        <span>Chi tiết</span>
                                    </a>

                                    <a  onclick="addCart({{ $item }})" href="" class="paction add-cart" title="Thêm vào giỏ">
                                        <span>Thêm Vào Giỏ</span>
                                    </a>

                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-compare" title="chi tiết sản phẩm">
                                        <span>Chi tiết</span>
                                    </a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <!-- End .product -->


                        @endforeach



                    </div>
                    <!-- End .featured-proucts -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .featured-proucts-section -->

            <div class="mb-5"></div>
            <!-- margin -->
            <div class="featured-products-section carousel-section">
                <div class="container">
                    <h2  class="h3 title mb-4 text-center">PHÒNG XÔNG HƠI HỒNG NGOẠI</h2>

                    <div class="featured-products owl-carousel owl-theme">
                        @foreach ($sanpham3 as $item)

                        <div class="product">
                            <figure class="product-image-container">

                                <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image1">
                                    <img src="upload/{{ $item->img }}" alt="máy xông hơi ướt">
                                </a>
                                {{--  <span class="product-label label-sale">-20%</span>  --}}
                                <span class="product-label label-hot">New</span>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}">{{ $item->tenSP }}</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">Giá : <strong style="color:red">{{ number_format($item->gia) }}</strong> vnđ</span>
                                </div>
                                <!-- End .price-box -->

                                <div class="product-action">
                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-wishlist" title="chi tiết sản phẩm">
                                        <span>Chi tiết</span>
                                    </a>

                                    <a  onclick="addCart({{ $item }})" href="" class="paction add-cart" title="Thêm vào giỏ">
                                        <span>Thêm Vào Giỏ</span>
                                    </a>

                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-compare" title="chi tiết sản phẩm">
                                        <span>Chi tiết</span>
                                    </a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <!-- End .product -->


                        @endforeach



                    </div>
                    <!-- End .featured-proucts -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .featured-proucts-section -->

            <div class="mb-5"></div>
            <!-- margin -->
            <div class="featured-products-section carousel-section">
                <div class="container">
                    <h2  class="h3 title mb-4 text-center">PHÒNG XÔNG HƠI ĐÁ MUỐI</h2>

                    <div class="featured-products owl-carousel owl-theme">
                        @foreach ($sanpham4 as $item)

                        <div class="product">
                            <figure class="product-image-container">

                                <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image1">
                                    <img src="upload/{{ $item->img }}" alt="máy xông hơi ướt">
                                </a>
                                <span class="product-label label-sale">-10%</span>
                                {{--  <span class="product-label label-hot">New</span>  --}}
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}">{{ $item->tenSP }}</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">Giá : <strong style="color:red">{{ number_format($item->gia) }}</strong> vnđ</span>
                                </div>
                                <!-- End .price-box -->

                                <div class="product-action">
                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-wishlist" title="chi tiết sản phẩm">
                                        <span>Chi tiết</span>
                                    </a>

                                    <a  onclick="addCart({{ $item }})" href="" class="paction add-cart" title="Thêm vào giỏ">
                                        <span>Thêm Vào Giỏ</span>
                                    </a>

                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-compare" title="chi tiết sản phẩm">
                                        <span>Chi tiết</span>
                                    </a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <!-- End .product -->


                        @endforeach



                    </div>
                    <!-- End .featured-proucts -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .featured-proucts-section -->

            <div class="mb-5"></div>
            <!-- margin -->


        </main>
        <!-- End .main -->

@endsection @section('meta')
<title>Sauna Đà Nẵng - Phòng Xông Hơi</title>
<meta name="keywords" content="máy xông hơi,sauna , máy xông hơi đà nẵng , phòng xông hơi " />
<meta name="description" content='Sauna Đà nẵng là một trong những công ty hàng đầu trong lĩnh vực thiết kế, lắp đặt , sửa chữa , bảo hành, cung ứng phòng , máy xông hơi tại Việt Nam.
Với đội ngũ nhân viên ngày càng đông đảo có trình độ chuyên môn cao, tay nghề vững vàng nên doanh nghiệp ngày càng được sự tín nhiệm của khách hàng.' />
<!--meta facebook-->
<meta property="og:title" content="Sauna Đà Nẵng - Phòng Xông Hơi" />
<meta property="og:description" content="Sauna Đà nẵng là một trong những công ty hàng đầu trong lĩnh vực thiết kế, lắp đặt , sửa chữa , bảo hành, cung ứng phòng , máy xông hơi tại Việt Nam.
Với đội ngũ nhân viên ngày càng đông đảo có trình độ chuyên môn cao, tay nghề vững vàng nên doanh nghiệp ngày càng được sự tín nhiệm của khách hàng." />
<meta property="og:image" content="sauna/assets/images/dt.png" />
<!--meta google-->
<meta itemprop="name" content="Sauna Đà nẵng là một trong những công ty hàng đầu trong lĩnh vực thiết kế, lắp đặt , sửa chữa , bảo hành, cung ứng phòng , máy xông hơi tại Việt Nam.
Với đội ngũ nhân viên ngày càng đông đảo có trình độ chuyên môn cao, tay nghề vững vàng nên doanh nghiệp ngày càng được sự tín nhiệm của khách hàng." />
<meta itemprop="description" content="Sauna Đà nẵng là một trong những công ty hàng đầu trong lĩnh vực thiết kế, lắp đặt , sửa chữa , bảo hành, cung ứng phòng , máy xông hơi tại Việt Nam.
Với đội ngũ nhân viên ngày càng đông đảo có trình độ chuyên môn cao, tay nghề vững vàng nên doanh nghiệp ngày càng được sự tín nhiệm của khách hàng." />
<meta itemprop="image" content="sauna/assets/images/dt.jpg" />
<meta name="og:url" content="{{ route('trangchu.pages.trangchu') }}" />
 @endsection


<script>
    function getDataCart(){
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            if(ca[i].indexOf('soLuong')>0){
                var item = JSON.parse(ca[i].substring(ca[i].indexOf('=')+1));
                console.log('item',item);
            }
        }
    }

    function addCart(data){
        var item = {
            id: data.id,
            img: data.img,
            tenSP: data.tenSP,
            gia: data.gia,
            soLuong: data.soLuong
        };

        // kiem tra so luong co chua
        if(item.soLuong === undefined || item.soLuong === null){
            item.soLuong = 1;
        }

        var value = JSON.stringify(item);
        console.log('truoc',value,item.id)
        console.log('co chua',getCookie(item.id));
        if(getCookie(item.id)===""){
            console.log('phong');
            // chua ton tai thi them vao gio hang
            setCookie(item.id, value, 1);

        } else {
            // cap nhat so luong
            console.log('cap nhap',getCookie(item.id));

            var oldItem = JSON.parse(getCookie(item.id));
            item.soLuong += oldItem.soLuong;

            // xoa thang cu
            deleteCookie(item.id);

            // them thang moi
            value = JSON.stringify(item);
            setCookie(item.id, value, 1);
        }
        console.log('sau',getCookie(item.id));
    }

    function deleteCookie(cname) {
        document.cookie = cname + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }

    function setCookie(cname,cvalue,exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays*24*60*60*1000));
      var expires = "expires=" + d.toGMTString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      console.log('decodedCookie',decodedCookie);

      var ca = decodedCookie.split(";");
      for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    function checkCookie() {
      var user=getCookie("username");
      if (user != "") {
        alert("Welcome again " + user);
      } else {
         user = prompt("Please enter your name:","");
         if (user != "" && user != null) {
           setCookie("username", user, 30);
         }
      }
    }
</script>
