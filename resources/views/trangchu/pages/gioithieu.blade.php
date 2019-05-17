@extends('trangchu.menu.master') @section('noidung')
<main class="main">
    <div class="page-header page-header-bg" style="background-image: url('sauna/assets/images/gt.jpg');">
        <div class="container">
            <h1 style="color:#fff"><span>LIÊN HỆ VỚI CHÚNG TÔI</span>
                MAYXONGHOI24H</h1>
            <a href="{{ route('trangchu.pages.lienhe') }}" class="btn btn-dark">LIÊN HỆ</a>
        </div>
        <!-- End .container -->
    </div>
    <!-- End .page-header -->

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb mt-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Giới Thiệu</li>
            </ol>
        </div>
        <!-- End .container -->
    </nav>

    <div class="about-section">
        <div class="container">


            <div class="row">
                <div class="col-lg-9">
                    <h2 class="subtitle text-center">GIỚI THIỆU VỀ CHÚNG TÔI</h2>
                    <p style="font-weight:470;color:#515459">1. Công Ty TNHH Thương Mại và Dịch Vụ Mayxonghoi24h Việt Nam là một trong những công ty hàng đầu trong lĩnh vực thiết kế, lắp đặt , sửa chữa , bảo hành, cung ứng phòng , máy xông hơi tại Việt Nam. Với đội ngũ nhân viên ngày càng đông đảo có trình độ chuyên môn cao, tay nghề vững vàng nên doanh nghiệp ngày càng được sự tín nhiệm của khách hàng. - Với mục tiêu làm phong phú sản phẩm, đáp ứng nhu cầu ngày càng đông đảo của Quý khách hàng. Ngoài việc nhập khẩu trực tiếp các mặt hàng máy xông hơi, thiết bị xông hơi massage từ nước ngoài…Sản xuất theo tiêu chuẩn Châu Âu. </p>
                    <img src="sauna/assets/images/gt2.jpg" alt="gioithieu">
                    <p style="font-weight:470;color:#515459"><br>2. Đến với công ty chúng tôi quý khách hàng sẽ an tâm và hài lòng về chất lượng sản phẩm cũng như chế độ bảo hành dài hạn trong 01 năm. Nhằm làm thỏa mãn nhu cầu của khách hàng. Chúng tôi đáp ứng bằng việc cung cấp đa dạng các sản phẩm cùng loại như: - Phòng xông hơi truyền thống (sauna) phòng xông hơi ướt (steam). - Các máy Xông hơi được nhiều người tin dùng như Amazon, Coast, Helo, Gunsan, Katano, Harvia.Các sản phẩm đều được kiểm tra theo tiêu chuẩn Châu Âu , với nhiều kiểu dáng sang trọng phù hợp cho các Spa, Resort, Khách sạn và Tư gia của quý khách hàng… </p>
                    <img src="sauna/assets/images/gt1.jpg" alt="gioithieu">
                    <p style="font-weight:470;color:#515459"><br>3. Cùng tham khảo các các công trình dự án mà chúng tôi đã thực hiện - Mọi đối tượng khách hàng, mọi vị trí, mọi kích thước dành cho Gia đình - Spa - Thẩm mỹ - Khách sạn - Massage - Resort...</p>
                </div>
                <div class="col-lg-3">
                    @include('trangchu.menu.sidebar')
                </div>
            </div>
        </div>
        <!-- End .container -->
    </div>
    <!-- End .about-section -->

    <div class="features-section">
        <div class="container">
            <h2 class="subtitle text-center">TẠI SAO CHỌN CHÚNG TÔI</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature-box">
                        <i class="icon-shipped"></i>

                        <div class="feature-box-content">
                            <h3>Vận Chuyển An Toàn</h3>
                            <p style="font-weight:600">Chúng tôi có đội ngũ nhân viên vận chuyển và lắp đặt nhanh chóng chuyên nghiệp bảo đảm an toàn</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-lg-4 -->

                <div class="col-lg-4">
                    <div class="feature-box">
                        <i class="icon-us-dollar"></i>

                        <div class="feature-box-content">
                            <h3>100% Giá Tốt Hơn Thị Trường</h3>
                            <p style="font-weight:600">Sản phẩm tại Mayxonghoi24h đều chính hãng nguồn gốc rõ ràng sản phẩm chất lượng tuyện đối</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-lg-4 -->

                <div class="col-lg-4">
                    <div class="feature-box">
                        <i class="icon-online-support"></i>

                        <div class="feature-box-content">
                            <h3>Hổ Trợ 24/7</h3>
                            <p style="font-weight:600">Nếu phát hiện hàng lỗi sẽ được nhân viên tiếp nhận bảo hành và đổi mới cho khách hàng</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-lg-4 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .features-section -->

    <div class="testimonials-section">
        <div class="container">
            <h2 class="subtitle text-center">KHÁCH HÀNG PHẢN HỒI</h2>

            <div class="testimonials-carousel owl-carousel owl-theme">
                <div class="testimonial">
                    <div class="testimonial-owner">
                        <figure>
                            <img style="height:60px;" src="sauna/assets/images/g1.jpg" alt="khách hàng">
                        </figure>

                        <div>
                            <h4 class="testimonial-title">Mỹ Linh</h4>
                            <span>Đà Nẵng</span>
                        </div>
                    </div>
                    <!-- End .testimonial-owner -->

                    <blockquote>
                        <p>Tại Mayxonghoi24h e đã được tư vấn nhiệt tình và đã mua được phòng xông hơi cho gia đình e cảm ơn Mayxonghoi24h
                            <3</p>
                    </blockquote>
                </div>
                <!-- End .testimonial -->

                <div class="testimonial">
                    <div class="testimonial-owner">
                        <figure>
                            <img style="height:60px" src="sauna/assets/images/g2.jpg" alt="khách hàng">
                        </figure>

                        <div>
                            <h4 class="testimonial-title">Thanh Tùng</h4>
                            <span>Quảng Nam</span>
                        </div>
                    </div>
                    <!-- End .testimonial-owner -->

                    <blockquote>
                        <p>Tại Mayxonghoi24h có rất nhiều mẫu mã tha hồ chọn sản phẩm thích hợp với doanh nghiệp của mình nhân viên rất dễ thương !</p>
                    </blockquote>
                </div>
                <!-- End .testimonial -->

            </div>
            <!-- End .testimonials-slider -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .testimonials-section -->

    <div class="counters-section">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count" data-from="0" data-to="500" data-speed="2000" data-refresh-interval="50">500</span>+
                    </div>
                    <!-- End .count-wrapper -->
                    <h4 class="count-title">PHỤC VỤ KHÁCH HÀNG</h4>
                </div>
                <!-- End .col-md-4 -->

                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count" data-from="0" data-to="50" data-speed="2000" data-refresh-interval="50">50</span>+
                    </div>
                    <!-- End .count-wrapper -->
                    <h4 class="count-title">NHÂN VIÊN</h4>
                </div>
                <!-- End .col-md-4 -->

                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count" data-from="0" data-to="24" data-speed="2000" data-refresh-interval="50">24</span><span>H</span>
                    </div>
                    <!-- End .count-wrapper -->
                    <h4 class="count-title">HỔ TRỢ 24H</h4>
                </div>
                <!-- End .col-md-4 -->

                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count" data-from="0" data-to="265" data-speed="2000" data-refresh-interval="50">265</span>+
                    </div>
                    <!-- End .count-wrapper -->
                    <h4 class="count-title">PHỤC VỤ</h4>
                </div>
                <!-- End .col-md-4 -->

                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count" data-from="0" data-to="99" data-speed="2000" data-refresh-interval="50">99</span><span>%</span>
                    </div>
                    <!-- End .count-wrapper -->
                    <h4 class="count-title">HỔ TRỢ THÀNH CÔNG</h4>
                </div>
                <!-- End .col-md-4 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .counters-section -->
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
<meta itemprop="image" content="sauna/assets/images/dt.png" />
<meta name="og:url" content="{{ route('trangchu.pages.gioithieu') }}" /> @endsection
