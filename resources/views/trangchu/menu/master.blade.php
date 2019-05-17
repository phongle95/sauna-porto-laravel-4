<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @yield('meta')

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="sauna/assets/images/logovinass.png">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="sauna/assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="sauna/assets/css/style.min.css">
    <link rel="stylesheet" href="css/phone.css">
    @toastr_css
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Việt Nam",
                "addressRegion": "TP Đà Nẵng",
                "streetAddress": "121 Cù Chính Lan, Thành Phố Đà Nẵng"
            },
            "description": "Sauna Đà nẵng là một trong những công ty hàng đầu trong lĩnh vực thiết kế, lắp đặt , sửa chữa , bảo hành, cung ứng phòng , máy xông hơi tại Việt Nam.
            Với đội ngũ nhân viên ngày càng đông đảo có trình độ chuyên môn cao, tay nghề vững vàng nên doanh nghiệp ngày càng được sự tín nhiệm của khách hàng.",
            "name": "Mayxonghoi24h",
            "telephone": "0328811678"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Mayxonghoi24h",
            "url": "https://mayxonghoi24h.com",
            "sameAs": ["https://www.facebook.com/mayxonghoitaidanang/"]
        }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140299237-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-140299237-1');
    </script>
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
                <div class="header-top">
                        <div class="container">
                            <div class="header-left header-dropdowns">
                                <div class="header-dropdown">
                                    <a href="#">VND</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div><!-- End .header-dropown -->

                                <div class="header-dropdown">
                                    <a href="#"><img src="sauna/assets/images/flags/vn.jpg" alt="England flag">VIETNAM</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#"><img src="sauna/assets/images/flags/en.png" alt="England flag">ENGLISH</a></li>
                                            <li><a href="#"><img src="sauna/assets/images/flags/fr.png" alt="France flag">FRENCH</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div><!-- End .header-dropown -->


                            </div><!-- End .header-left -->

                            <div class="header-right">

                                <div class="header-dropdown dropdown-expanded">
                                    <a href="#">Links</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="{{ route('trangchu.pages.trangchu') }}">Trang Chủ</a></li>
                                            <li><a href="{{ route('trangchu.pages.gioithieu') }}">giới thiệu</a></li>
                                            <li><a href="{{ route('trangchu.pages.sanpham') }}">sản phẩm</a></li>
                                            <li><a href="{{ route('trangchu.pages.congtrinh') }}">công trình</a></li>
                                            <li><a href="{{ route('trangchu.pages.tuyendung') }}">tuyển dụng</a></li>
                                            <li><a href="{{ route('trangchu.pages.tintuc') }}">tin tức</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div><!-- End .header-dropown -->
                            </div><!-- End .header-right -->
                        </div><!-- End .container -->
                    </div><!-- End .header-top -->
            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <a href="{{ route('trangchu.pages.trangchu') }}" class="logo">
                            <img src="sauna/assets/images/logovinass.png" alt="Porto Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="{{ route('trangchu.timkiem.product') }}" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="tukhoa" id="q" placeholder="Bạn cần tìm gì ?" required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">Tất Cả Danh Mục</option>
                                            <option value="4">Máy Xông Hơi Ướt - Steam</option>
                                            <option value="12">Máy Xông Hơi Ướt - Sauna</option>
                                            <option value="13">Phòng Xông Hơi Hồng Ngoại</option>
                                            <option value="66">Phòng Xông Hơi Đá Muối Hymalaya</option>
                                            <option value="67">Bồn Tắm - Bồn Massage</option>
                                            <option value="5">Thiết Bị Phụ Kiện Xông Hơi</option>
                                            <option value="21">Hệ Thống Sửi Sàn</option>

                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->
                    </div>
                    <!-- End .headeer-center -->

                    <div class="header-right">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>

                        <div class="header-contact">
                            <span style="color:#fff;font-weight: 600;">Gọi Ngay</span>
                            <a href="tel:#"><strong>032 8811 678</strong></a>
                        </div>
                        <!-- End .header-contact -->

                        <div class="dropdown cart-dropdown">

                            <a id="result" href="{{ route('trangchu.pages.cart') }}" class="dropdown-toggle">
                                    <span id="count" class="cart-count">
                                    <script>
                                        function refreshCart(){
                                            var decodedCookie = decodeURIComponent(document.cookie);
                                            var soLuong = 0;
                                            var ca = decodedCookie.split(";");
                                            for(var i = 0; i < ca.length; i++) {
                                                if(ca[i].indexOf('soLuong')>0){
                                                    soLuong ++ ;
                                                }
                                            }
                                            document.getElementById("count").innerHTML = soLuong;
                                        }

                                            // var decodedCookie = decodeURIComponent(document.cookie);
                                            // var soLuong = 0;
                                            // var ca = decodedCookie.split(";");
                                            // for(var i = 0; i < ca.length; i++) {
                                            //     if(ca[i].indexOf('soLuong')>0){
                                            //         soLuong ++ ;
                                            //     }
                                            // }

                                            // var data = document.getElementById("count").innerHTML;
                                            // if(soLuong!==data){
                                            //     document.getElementById("count").innerHTML = soLuong;
                                            // }


                                        refreshCart();


                                    </script>
                                    </span>
                            </a>


                        </div>
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="{{ request()->is(' ') ? 'active' : '' }}"><a href="{{ route('trangchu.pages.trangchu') }}">Trang Chủ</a></li>
                            <li>
                                <a href="#" class="sf-with-ul">Danh Mục Sản Phẩm</a>

                                <ul>
                                    @foreach ($loaisanpham as $item)

                                    <li><a href="{{ route('trangchu.pages.listproduct',['slug'=>str_slug($item->tenLoaiSanPham),'id'=>$item->id]) }}">{{ $item->tenLoaiSanPham }}</a>

                                        <ul>
                                            @foreach ($mathang as $mh) @if ($item->id == $mh->maLoaiSanPham)
                                            <li><a href="{{ route('trangchu.pages.mathang',['name'=>str_slug($mh->tenMatHang),'id'=>$mh->id]) }}">{{ $mh->tenMatHang }}</a></li>

                                            @endif @endforeach

                                        </ul>

                                    </li>
                                    @endforeach
                                    <li><a href="{{ route('trangchu.pages.listproduct',['slug'=>str_slug('Phòng Xông Hơi Đá Muối Hymalaya'),'id'=>50]) }}">Phòng Xông Hơi Đá Muối Hymalaya</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('gioi-thieu') ? 'active' : '' }}">
                                <a href="{{ route('trangchu.pages.gioithieu') }}">giới thiệu</a>
                            </li>
                            <li class="{{ request()->is('san-pham') ? 'active' : '' }}">
                                <a href="{{ route('trangchu.pages.sanpham') }}">sản phẩm</a>
                            </li>
                            <li class="{{ request()->is('cong-trinh') ? 'active' : '' }}">
                                    <a href="{{ route('trangchu.pages.congtrinh') }}">công trình</a>
                                </li>

                                <li class="{{ request()->is('tuyen-dung') ? 'active' : '' }}">
                                    <a href="{{ route('trangchu.pages.tuyendung') }}">tuyển dụng</a>
                                </li>

                            <li class="float-right {{ request()->is('lien-he') ? 'active' : '' }}"><a href="{{ route('trangchu.pages.lienhe') }}">liên hệ</a></li>
                            <li class="float-right {{ request()->is('tin-tuc') ? 'active' : '' }}"><a href="{{ route('trangchu.pages.tintuc') }}">tin tức</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End .header-bottom -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->
        @yield('noidung')
        <div class='quick-call-button'></div>
        <div class='call-now-button'>
        <div><p class='call-text'></p>
        <a href='tel:0328811678' title='Gọi ngay' >
        <div class='quick-alo-ph-circle active'></div>
        <div class='quick-alo-ph-circle-fill active'></div>
        <div class='quick-alo-ph-img-circle shake'></div>
        </a>
        </div>
        </div>
        {{--  <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=453100318560380&autoLogAppEvents=1"></script>  --}}

        <footer class="footer">
            <div class="footer-middle">
                <div class="container">
                    <div class="footer-ribbon">
                        Sauna
                    </div><!-- End .footer-ribbon -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Liên Hệ</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Địa Chỉ :</span>121 Cù Chính Lan, TP.Đà Nẵng
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Phone:</span>Toll Free <a href="tel:0328811788">032 8811 678</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">lehongphongcntt@gmail.com</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Giờ Làm Việc:</span>
                                        Mon - Sun / 7:00AM - 6:00PM
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                                    <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" target="_blank"><i class="icon-linkedin"></i></a>
                                </div><!-- End .social-icons -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-9">
                            <div class="widget widget-newsletter">
                                <h4 class="widget-title">Đăng Ký</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Đăng ký ngay để chúng tôi cập nhập tin khuyến mãi mới nhất từ Mayxonghoi24h cho bạn !</p>
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-6">
                                        <form action="#">
                                            <input type="email" class="form-control" placeholder="Nhập địa chỉ email" required>

                                            <input type="submit" class="btn" value="Đăng Ký">
                                        </form>
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget -->

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="widget">
                                        <h4 class="widget-title">Menu</h4>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-5">
                                                <ul class="links">
                                                    <li><a href="{{ route('trangchu.pages.trangchu') }}">Trang Chủ</a></li>
                                                    <li><a href="{{ route('trangchu.pages.gioithieu') }}">Giới Thiệu</a></li>
                                                    <li><a href="{{ route('trangchu.pages.sanpham') }}">Sản Phẩm</a></li>

                                                </ul>
                                            </div><!-- End .col-sm-6 -->

                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-5 -->

                                <div class="col-md-7">
                                    <div class="widget">
                                        <h4 class="widget-title">Thông Tin</h4>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="{{ route('trangchu.pages.tuyendung') }}">Tuyển Dụng</a></li>
                                                    <li><a href="{{ route('trangchu.pages.tintuc') }}">Tin Tức</a></li>
                                                    <li><a href="{{ route('trangchu.pages.lienhe') }}">Liên Hệ</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->

                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-7 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom">
                    <p class="footer-copyright">Vinass eCommerce. &copy;  2019.  All Rights Reserved</p>

                    <img src="sauna/assets/images/payments.png" alt="payment methods" class="footer-payments">
                </div><!-- End .footer-bottom -->
            </div><!-- End .container -->
        </footer><!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="{{ route('trangchu.pages.trangchu') }}">Trang Chủ</a></li>
                    <li>
                        <a href="">Danh Mục Sản Phẩm</a>
                        <ul>
                            @foreach ($loaisanpham as $item)

                            <li><a href="{{ route('trangchu.pages.listproduct',['slug'=>str_slug($item->tenLoaiSanPham),'id'=>$item->id]) }}">{{ $item->tenLoaiSanPham }}</a>

                                <ul>
                                    @foreach ($mathang as $mh) @if ($item->id == $mh->maLoaiSanPham)
                                    <li><a href="">{{ $mh->tenMatHang }}</a></li>

                                    @endif @endforeach

                                </ul>

                            </li>
                            @endforeach
                            <li><a href="{{ route('trangchu.pages.listproduct',['slug'=>str_slug('Phòng Xông Hơi Đá Muối Hymalaya'),'id'=>20]) }}">Phòng Xông Hơi Đá Muối Hymalaya</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('trangchu.pages.gioithieu') }}">giới thiệu</a>
                    </li>
                    <li>
                        <a href="{{ route('trangchu.pages.sanpham') }}">sản phẩm</a>
                    </li>
                    <li>
                            <a href="{{ route('trangchu.pages.congtrinh') }}">công trình</a>
                        </li>

                        <li>
                            <a href="{{ route('trangchu.pages.tuyendung') }}">tuyển dụng</a>
                        </li>
                    <li><a href="{{ route('trangchu.pages.tintuc') }}">Tin Tức</a></li>
                    <li><a href="{{ route('trangchu.pages.lienhe') }}">Liên Hệ</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div>
            <!-- End .social-icons -->
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->



    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="sauna/assets/js/jquery.min.js"></script>
    <script src="sauna/assets/js/bootstrap.bundle.min.js"></script>
    <script src="sauna/assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="sauna/assets/js/main.min.js"></script>
    <!-- Google Map-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>
    <script src="sauna/assets/js/map.js"></script>

    @jquery
    @toastr_js
    @toastr_render
</body>

</html>
