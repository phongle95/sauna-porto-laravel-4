@extends('admin.menu.master')
@section('noidung')
<div class="row">
   <div class="col-md-12">
      <!-- DATA TABLE -->
      <div class="table-data__tool">
         <div class="table-data__tool-left">
            @if (session('thongbao'))
            <div style="color:green;font-weight: 400; text-align:center">
               {{ session('thongbao') }}
            </div>
            @endif @if (session('xoa'))
            <div style="color:red;font-weight: 400; text-align:center">
               {{ session('xoa') }}
            </div>
            @endif
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Danh Sách Sản Phẩm</h4>
                  <p class="card-description">
                     <a href="{{ route('admin.pages.sanpham.them') }}" class="btn btn-inverse-info btn-fw">
                     Thêm Sản Phẩm</a>
                  </p>
                  <table class="table table-hover">
                     <thead>
                        <tr>
                           <th>Tên Sản Phẩm</th>
                           <th>Hình</th>
                           <th>Giá</th>
                           <th>Loại Sản Phẩm</th>
                           <th>Loại Mặt Hàng</th>
                           <th>Sửa</th>
                           <th>Xóa</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($sanpham as $item)
                        <tr class="tr-shadow">
                           <td>{{ $item->tenSP }}</td>
                           <td>
                              <img style="height:150px;width:150px" src="/upload/{{ $item->img }}" alt="lý sơn"/>
                           </td>
                           <td style="color:red;">{{ number_format($item->gia) }} vnđ</td>
                           <td>
                                @foreach ($loaisanpham as $lsp)
                                    @if ($lsp->id == $item->maLoaiSanPham)
                                        {{ $lsp->tenLoaiSanPham }}
                                    @endif
                                @endforeach
                            </td>
                           <td>
                                @foreach ($mathang as $mh)
                                    @if ($mh->id == $item->maSanPham)
                                        {{ $mh->tenMatHang }}
                                    @endif
                                @endforeach
                           </td>
                           <td>
                              <a href="{{ route('admin.pages.sanpham.sua',$item->id) }}" class="btn btn-outline-success btn-fw"> Sửa</a>
                           </td>
                           <td>
                              <a href="{{ route('admin.pages.sanpham.xoa',$item->id) }}" class="btn btn-outline-danger btn-fw"> Xóa</a>
                           </td>
                        </tr>
                        <tr class="spacer"></tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- END DATA TABLE -->
   </div>
</div>
@endsection
