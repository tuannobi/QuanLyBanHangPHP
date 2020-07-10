<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('header')
    <style>
        .alert{
            position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
        }
    </style>
	<!-- favicon -->
	<link rel="icon" href="favicon.ico">
    <title>TheCosmo | Trang chủ</title>
</head>
<body>
    @if (Session::has('success'))
    <div class="alert">
        <ul>
            <li>{{Session::get('success') }}</li>
        </ul>
    </div>
@endif
    <div hidden class="makh_hidden" id="makh{{Session::get('ma_nhan_vien')}}">Mã của khách hàng đang đăng nhập.</div>
    @if (session()->has('mat_khau') && session()->has('email'))
	<!-- HEADER -->
	<header>
		<div id="header-top-wrap">
			<!-- HEADER TOP -->
			<section id="header-top" class="clearfix">
				<p class="contact">
					Liên hệ quảng cáo:
					<a href="mailto:tuantrananhit@gmail.com">tuantrananhit@gmail.com</a>
				</p>

				<!-- WESTEROS DROPDOWN CONTAINER-->
				<div class="westeros-dropdown-container small">
					<p>
						<span>Tiếng Việt</span>
						<!-- SVG ARROW -->
						<svg class="svg-arrow westeros-dropdown-control">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</p>

					<!-- WESTEROS DROPDOWN -->
					<ul class="westeros-dropdown default hide-on-click">
						<li class="selected"><a></a></li>
						<li><a>English</a></li>
						<li><a>Chinese</a></li>
						<li><a>Japanese</a></li>
					</ul>
					<!-- /WESTEROS DROPDOWN -->
				</div>
				<!-- /WESTEROS DROPDOWN CONTAINER-->

				<!-- WESTEROS DROPDOWN CONTAINER-->
				<div class="westeros-dropdown-container small">
					<p>
						<span>VND</span>
						<!-- SVG ARROW -->
						<svg class="svg-arrow westeros-dropdown-control">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</p>

					<!-- WESTEROS DROPDOWN -->
					<ul class="westeros-dropdown default hide-on-click">
						<li class="selected"><a>VND</a></li>
						<li><a>EURO</a></li>
						<li><a>PESOS</a></li>
					</ul>
					<!-- /WESTEROS DROPDOWN -->
				</div>
				<!-- /WESTEROS DROPDOWN CONTAINER-->

				<!-- WESTEROS DROPDOWN CONTAINER-->
				<div class="westeros-dropdown-container">
					<p class="login logged">
						<!-- SVG LOGGED -->
						<svg class="svg-logged">
							<use xlink:href="#svg-logged"></use>
						</svg>
						<!-- /SVG LOGGED -->
						Chào mừng
						<a href="profile.html">{{ Session::get('ho_ten')}}</a>
						<!-- SVG ARROW -->
						<svg class="svg-arrow westeros-dropdown-control">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</p>
					<!-- WESTEROS DROPDOWN -->
					<ul class="westeros-dropdown default hide-on-click">
						<li>
							<a href="profile.html">
							<!-- SVG GEAR -->
							<svg class="svg-gear">
								<use xlink:href="#svg-gear"></use>
							</svg>
							<!-- /SVG GEAR -->
							Thông tin tài khoản
							</a>
						</li>

						<li id="dangxuat">
							<a href="{{route('client.dangxuat')}}">
							<!-- SVG CART -->
							<svg class="svg-cart">
								<use xlink:href="#svg-cart"></use>
							</svg>
							<!-- /SVG CART -->
							Đăng xuất
							</a>
						</li>
					</ul>
					<!-- /WESTEROS DROPDOWN -->
                </div>

				<!-- /WESTEROS DROPDOWN CONTAINER-->
			</section>
			<!-- /HEADER TOP -->
		</div>

		<div id="header-bottom-wrap">
			<!-- HEADER BOTTOM -->
			<section id="header-bottom">
				<!-- LOGO -->
				<div class="logo-container">
					<a href="{{route('Client.Homepage')}}">
						<figure class="logo">
							<img src="{{URL::asset('client/images/logo.png')}}" alt="logo">
							<figcaption>Westeros</figcaption>
						</figure>
					</a>
				</div>
				<!-- /LOGO -->
				<form class="westeros-form">
					<label for="categories" class="select-block">
						<select name="categories" id="categories">
							<option value="0">Tất cả</option>
							<option value="1">T-Shirts</option>
							<option value="2">Pin Badges</option>
							<option value="3">Custom Sneakers</option>
							<option value="4">Phone Cases</option>
						</select>
						<!-- SVG ARROW -->
						<svg class="svg-arrow select-arrow">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</label>
					<input type="text" name="search" id="search" placeholder="Tìm kiếm...">
					<input type="image" src="{{URL::asset('client/images/icons/search-icon.png')}}" alt="search-icon">
				</form>

				<!-- WESTEROS DROPDOWN CONTAINER-->
				<div class="westeros-dropdown-container">
					<!-- CART CONTROL -->
					<div class="cart-control westeros-dropdown-control">
						<!-- SVG ORDER BOX -->
						<svg class="svg-order-box">
							<use xlink:href="#svg-order-box"></use>
						</svg>
						<!-- /SVG ORDER BOX -->

						<!-- SVG ARROW -->
						<svg class="svg-arrow select-arrow">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
						<h6>Giỏ hàng</h6>
                        <p class="cart-content-short">(3)</p>
                        <div id="thongtingiohang">
                        @if (count($listGioHang)>=1)
						<p class="cart-content-long">{{count($listGioHang)}} sản phẩm - </p>
                        <p class="highlighted">{{number_format($tienKhachHangCanThanhToan[0]->khach_can_tra)}} VND</p>
                        @endif
                        </div>
					</div>
					<!-- /CART CONTROL -->
















					<!-- CART -->
					<ul class="cart westeros-dropdown" id="cart-online">
                        @if (count($listGioHang)>=1)
                        @foreach ($listGioHang as $item)
						<!-- CART ITEM -->
						<li class="item clearfix">
							<div class="picture">
								<figure class="liquid">
									<img src="{{URL::asset($item->hinh_anh1)}}" alt="product1">
								</figure>
							</div>
							<div class="description">
								<p class="highlighted category">{{$item->ten_loai}}</p>
								<h6>{{$item->ten_san_pham}}</h6>
							</div>
							<div class="quantity">
								<h6>{{$item->so_luong}}</h6>
							</div>
							<div class="price">
								<p class="highlighted">{{number_format($item->thanh_tien+$item->so_tien_giam)}}</p>
							</div>
							<a class="button-remove" id="masanpham{{$item->ma_san_pham}}"><img src="{{URL::asset('client/images/items/remove.png')}}" alt="remove"></a>
						</li>
						<!-- /CART ITEM -->
                        @endforeach

						<!-- TOTAL -->
						<li class="total clearfix">
							<div>
                                <h6>{{number_format($tienKhachHangCanThanhToan[0]->tong_tien_hang)}}</h6>
								<h6>{{number_format($tienKhachHangCanThanhToan[0]->so_tien_giam)}}</h6>
                                <h6>0</h6>
								<p class="highlighted">{{number_format($tienKhachHangCanThanhToan[0]->khach_can_tra)}}</p>
							</div>
							<div>
                                <h6>Tạm tính</h6>
								<h6>Tiền giảm</h6>
								<h6>Phí vận chuyển</h6>
								<h6>Thành tiền</h6>
							</div>
                        </li>
                        @endif
						<!-- /TOTAL -->
						<!-- ORDER -->
						<li class="order clearfix">
							<a id="thanhtoan-client" href="{{route('client.checkout')}}" class="button">Thanh toán</a>

						</li>
                        <!-- /ORDER -->
					</ul>
					<!-- /CART -->
				</div>
				<!-- /WESTEROS DROPDOWN CONTAINER -->
			</section>
			<!-- /HEADER BOTTOM -->
		</div>

		<!-- WESTEROS SEPARATOR -->
		<ul class="westeros-separator small">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<!-- /WESTEROS SEPARATOR -->
	</header>
    <!-- /HEADER -->
    @else
      	<!-- HEADER -->
	<header>
		<div id="header-top-wrap">
			<!-- HEADER TOP -->
			<section id="header-top" class="clearfix">
				<p class="contact">
					Liên hệ quảng cáo:
					<a href="mailto:tuantrananhit@gmail.com">tuantrananhit@gmail.com</a>
				</p>

				<!-- WESTEROS DROPDOWN CONTAINER-->
				<div class="westeros-dropdown-container small">
					<p>
						<span>Tiếng Việt</span>
						<!-- SVG ARROW -->
						<svg class="svg-arrow westeros-dropdown-control">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</p>

					<!-- WESTEROS DROPDOWN -->
					<ul class="westeros-dropdown default hide-on-click">
						<li class="selected"><a></a></li>
						<li><a>English</a></li>
						<li><a>Chinese</a></li>
						<li><a>Japanese</a></li>
					</ul>
					<!-- /WESTEROS DROPDOWN -->
				</div>
				<!-- /WESTEROS DROPDOWN CONTAINER-->

				<!-- WESTEROS DROPDOWN CONTAINER-->
				<div class="westeros-dropdown-container small">
					<p>
						<span>VND</span>
						<!-- SVG ARROW -->
						<svg class="svg-arrow westeros-dropdown-control">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</p>

					<!-- WESTEROS DROPDOWN -->
					<ul class="westeros-dropdown default hide-on-click">
						<li class="selected"><a>VND</a></li>
						<li><a>EURO</a></li>
						<li><a>PESOS</a></li>
					</ul>
					<!-- /WESTEROS DROPDOWN -->
				</div>
				<!-- /WESTEROS DROPDOWN CONTAINER-->

				<p class="login">
					Chào mừng bạn đến với TheCosmo nếu đã có tài khoản vui lòng
					<a href="{{route('ClientLogin')}}">Đăng nhập</a>, hoặc
					<a href="{{route('ClientLogin')}}">Đăng ký</a>
				</p>
			</section>
			<!-- /HEADER TOP -->
		</div>

		<div id="header-bottom-wrap">
			<!-- HEADER BOTTOM -->
			<section id="header-bottom">
				<!-- LOGO -->
				<div class="logo-container">
					<a href="{{route('Client.Homepage')}}">
						<figure class="logo">
							<img src="{{URL::asset('client/images/logo.png')}}" alt="logo">
							<figcaption>Westeros</figcaption>
						</figure>
					</a>
				</div>
				<!-- /LOGO -->
				<form class="westeros-form">
					<label for="categories" class="select-block">
						<select name="categories" id="categories">
							<option value="0">Tất cả</option>
							<option value="1">T-Shirts</option>
							<option value="2">Pin Badges</option>
							<option value="3">Custom Sneakers</option>
							<option value="4">Phone Cases</option>
						</select>
						<!-- SVG ARROW -->
						<svg class="svg-arrow select-arrow">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</label>
					<input type="text" name="search" id="search" placeholder="Tìm kiếm...">
					<input type="image" src="{{URL::asset('client/images/icons/search-icon.png')}}" alt="search-icon">
				</form>

				<!-- WESTEROS DROPDOWN CONTAINER-->
				<div class="westeros-dropdown-container">
					<!-- CART CONTROL -->
					<div class="cart-control westeros-dropdown-control">
						<!-- SVG ORDER BOX -->
						<svg class="svg-order-box">
							<use xlink:href="#svg-order-box"></use>
						</svg>
						<!-- /SVG ORDER BOX -->

						<!-- SVG ARROW -->
						<svg class="svg-arrow select-arrow">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
						<h6>Giỏ hàng</h6>
						<p class="cart-content-short">(3)</p>
						<p class="cart-content-long">0 sản phẩm -</p>
						<p class="highlighted">0 VNĐ</p>
					</div>
					<!-- /CART CONTROL -->











				</div>
				<!-- /WESTEROS DROPDOWN CONTAINER -->
			</section>
			<!-- /HEADER BOTTOM -->
		</div>

		<!-- WESTEROS SEPARATOR -->
		<ul class="westeros-separator small">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<!-- /WESTEROS SEPARATOR -->
	</header>
	<!-- /HEADER -->
    @endif

	<!-- MOBILE MENU COVER -->
	<div class="mobile-menu-cover"></div>
	<!-- /MOBILE MENU COVER -->

	<!-- MOBILE MENU -->
	<nav class="mobile-menu">
		<img src="images/logo-footer.png" alt="logo">
		<!-- SVG PLUS -->
		<svg class="svg-plus pull-nav">
			<use xlink:href="#svg-plus"></use>
		</svg>
		<!-- /SVG PLUS -->

		<!-- MENU LIST -->
		<ul>
			<li>
				<a href="{{route('Client.Homepage')}}">Trang chủ</a>
			</li>
			<li>
				<a href="women-shop.html">Thời trang nữ</a>
			</li>
			<li>
				<a href="men-shop.html">Thời trang nam</a>
			</li>
			<li>
				<a href="#">Đồ uống
					<!-- SVG ARROW -->
					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
					<!-- /SVG ARROW -->
				</a>
				<!-- SUBMENU LIST -->
				<ul>
					<li>
						<a href="register-login.html">Register / Login</a>
					</li>
					<li>
						<a href="profile.html">Profile Page</a>
					</li>
					<li>
						<a href="merchandising-shop.html">Merchandising (Grid V2)</a>
					</li>
					<li>
						<a href="no-banner-shop.html">No Banner Shop</a>
					</li>
					<li>
						<a href="product-builder.html">Product Builder</a>
					</li>
					<li>
						<a href="wishlist.html">Wishlist Page</a>
					</li>
					<li>
						<a href="compare.html">Compare</a>
					</li>
					<li>
						<a href="coming-soon.html">Coming Soon</a>
					</li>
					<li>
						<a href="404.html">404 Error Page</a>
					</li>
				</ul>
				<!-- /SUBMENU LIST -->
			</li>
			<!-- <li>
				<a href="blog.html">Blog</a>
			</li> -->
			<li>
				<a href="contact.html">Liên hệ</a>
			</li>
			<li>
				<a href="#"><span>English</span>
				<!-- SVG ARROW -->
				<svg class="svg-arrow">
					<use xlink:href="#svg-arrow"></use>
				</svg>
				<!-- /SVG ARROW -->
				</a>

				<!-- SUBMENU LIST -->
				<ul class="selectable">
					<li class="selected">
						<a href="#">English</a>
					</li>
					<li>
						<a href="#">Spanish</a>
					</li>
					<li>
						<a href="#">French</a>
					</li>
					<li>
						<a href="#">German</a>
					</li>
				</ul>
				<!-- /SUBMENU LIST -->
			</li>
			<li>
				<a href="#"><span>USD</span>
				<!-- SVG ARROW -->
				<svg class="svg-arrow">
					<use xlink:href="#svg-arrow"></use>
				</svg>
				<!-- /SVG ARROW -->
				</a>

				<!-- SUBMENU LIST -->
				<ul class="selectable">
					<li class="selected">
						<a href="#">USD</a>
					</li>
					<li>
						<a href="#">EURO</a>
					</li>
					<li>
						<a href="#">PESOS</a>
					</li>
				</ul>
				<!-- /SUBMENU LIST -->
			</li>
		</ul>
		<!-- /MENU LIST -->
	</nav>
	<!-- /MOBILE MENU -->

	<!-- MAIN MENU -->
	<nav id="main-menu">
		<img class="pull-nav" src="images/icons/pull-icon.png" alt="pull-icon">
		<ul>
			<li><a href="{{route('Client.Homepage')}}">Trang chủ</a></li>
			<li>
				<a href="#" class="submenu">Vật dụng</a>
				<!-- SUBMENU MEDIUM -->
				<ul class="submenu-medium">
					<li>
						<!-- SUBMENU LIST -->
						<article class="submenu-list">
							<h6>Đồ dùng cá nhân</h6>
							<ul>
								<li>
									<a href="{{route('client.main',1)}}">Dầu gội, dầu xả
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>
								<li>
									<a href="{{route('client.main',2)}}">Sữa tắm
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>
								<li>
									<a href="{{route('client.main',3)}}">Sữa rửa mặt
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>
								<li>
									<a href="{{route('client.main',4)}}">Kem, bàn chải đánh răng
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>
								<li>
									<a href="{{route('client.main',5)}}">Băng vệ sinh
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>
								<li>
									<a href="{{route('client.main',6)}}">Khăn giấy
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>
								<li>
									<a href="{{route('client.main',7)}}">Vật dụng cá nhân khác
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>
							</ul>
						</article>
						<!-- /SUBMENU LIST -->

						<!-- SUBMENU LIST -->
						<article class="submenu-list">
							<h6>Vệ sinh nhà cửa</h6>
							<ul>
								<li>
									<a href="{{route('client.main',8)}}">Nước giặt, bột giặt
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>
								<li>
									<a href="{{route('client.main',9)}}">Nước xả vải
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>
								<li>
									<a href="{{route('client.main',10)}}">Nước rửa chén
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>
								<li>
									<a href="{{route('client.main',11)}}">Tẩy rửa bồn cầu, nhà tắm
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>
								<li>
									<a href="{{route('client.main',12)}}">Nước lau sàn
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>
								<li>
									<a href="{{route('client.main',13)}}">Vệ sinh nhà cửa khác
									<!-- SVG ARROW -->
									<svg class="svg-arrow">
										<use xlink:href="#svg-arrow"></use>
									</svg>
									<!-- /SVG ARROW -->
									</a>
								</li>

							</ul>
						</article>
						<!-- /SUBMENU LIST -->
					</li>
				</ul>
				<!-- /SUBMENU MEDIUM -->
			</li>
			<li>
				<a href="#" class="submenu">Thức ăn nhanh</a>
				<!-- SUBMENU SMALL -->
				<ul class="submenu-small">
					<li>
						<a href="{{route('client.main',14)}}">Mì ăn liền</a>
					</li>
					<li>
						<a href="{{route('client.main',15)}}">Cháo ăn liền</a>
					</li>

					<li>
						<a href="{{route('client.main',16)}}">Phở ăn liền</a>
					</li>
					<li>
						<a href="{{route('client.main',17)}}">Thực phẩm ăn liền khác</a>
					</li>


				</ul>
			</li>

			<li>
				<a href="#" class="submenu">Đồ uống</a>
				<!-- SUBMENU SMALL -->
				<ul class="submenu-small">
					<li>
						<a href="{{route('client.main',18)}}">Bia, nước uống có cồn</a>
					</li>
					<li>
						<a href="{{route('client.main',19)}}">Nước ngọt, giải khát</a>
					</li>

					<li>
						<a href="{{route('client.main',20)}}">Nước suối</a>
					</li>
					<li>
						<a href="{{route('client.main',21)}}">Nước ép trái cây</a>
					</li>
					<li>
						<a href="{{route('client.main',22)}}">Nước yến</a>
					</li>
					<li>
						<a href="{{route('client.main',23)}}">Cà phê, trà</a>
					</li>
					<li>
						<a href="{{route('client.main',24)}}">Đồ uống khác</a>
					</li>

				</ul>
			</li>
				<li>
				<a href="#" class="submenu">Phụ gia</a>
				<!-- SUBMENU SMALL -->
				<ul class="submenu-small">
					<li>
						<a href="{{route('client.main',25)}}">Dầu ăn</a>
					</li>
					<li>
						<a href="{{route('client.main',26)}}">Nước tương</a>
					</li>

					<li>
						<a href="{{route('client.main',27)}}">Nước mắm</a>
					</li>
					<li>
						<a href="{{route('client.main',28)}}">Tương ớt, tương cà, tương đen</a>
					</li>
					<li>
						<a href="{{route('client.main',29)}}">Đường, hạt nêm, bột ngọt, muối</a>
					</li>
					</ul>


				<li>
				<a href="#" class="submenu">Bánh kẹo các loại</a>
				<!-- SUBMENU SMALL -->
				<ul class="submenu-small">
					<li>
						<a href="{{route('client.main',30)}}">Snack</a>
					</li>
					<li>
						<a href="{{route('client.main',31)}}">Bánh quy, bánh trứng</a>
					</li>

					<li>
						<a href="{{route('client.main',32)}}">Bánh bông lan</a>
					</li>
					<li>
						<a href="{{route('client.main',33)}}">Bánh xốp, bánh gạo</a>
					</li>
					<li>
						<a href="{{route('client.main',34)}}">Socola, trái cây sấy</a>
					</li>
					<li>
							<a href="{{route('client.main',35)}}">Khô bò, hạt các loại</a>
					</li>
				</ul>
				<!-- SUBMENU SMALL -->
			</li>
			<!-- <li><a href="blog.html">Blog</a></li> -->
			<li><a href="contact.html">Liên hệ</a></li>
		</ul>
	</nav>
	<!-- /MAIN MENU -->

    @yield('body')

	{{-- <!-- FOOTER -->
	<footer>
		<div id="footer-top-wrap">
			<section id="footer-top" class="clearfix">
				<article>
					<h6>Về TheCosmo</h6>
					<p>Website bán quần áo</p>
					<!-- LOGO -->
					<a href="{{route('Client.Homepage')}}">
						<figure class="logo">
							<img src="images/logo-footer.png" alt="logo">
							<figcaption>Westeros</figcaption>
						</figure>
					</a>
					<!-- /LOGO -->

					<!-- CONTACT INFO -->
					<ul class="contact-info">
						<li class="address">
							<!-- SVG PIN -->
							<svg class="svg-pin">
								<use xlink:href="#svg-pin"></use>
							</svg>
							<!-- /SVG PIN -->
							<p>Thủ Đức, Hồ Chí Minh</p>
						</li>
						<li class="phone">
							<!-- SVG PHONE -->
							<svg class="svg-phone">
								<use xlink:href="#svg-phone"></use>
							</svg>
							<!-- /SVG PHONE -->
							<p>0377158365</p>
						</li>
						<li class="email">
							<!-- SVG ENVELOPE -->
							<svg class="svg-envelope">
								<use xlink:href="#svg-envelope"></use>
							</svg>
							<!-- /SVG ENVELOPE -->
							<p><a href="mailto:tuantrananhit@gmail.com">tuantrananhit@gmail.com</a></p>
						</li>
					</ul>
					<!-- /CONTACT INFO -->

					<!-- PAYMENT METHODS -->
					<ul class="payment-methods">
						<!-- METHOD -->
						<li>
							<img src="images/payment/method1.jpg" alt="method1">
						</li>
						<!-- /METHOD -->

						<!-- METHOD -->
						<li>
							<img src="images/payment/method2.jpg" alt="method2">
						</li>
						<!-- /METHOD -->

						<!-- METHOD -->
						<li>
							<img src="images/payment/method3.jpg" alt="method3">
						</li>
						<!-- /METHOD -->

						<!-- METHOD -->
						<li>
							<img src="images/payment/method4.jpg" alt="method4">
						</li>
						<!-- /METHOD -->

						<!-- METHOD -->
						<li>
							<img src="images/payment/method5.jpg" alt="method5">
						</li>
						<!-- /METHOD -->

						<!-- METHOD -->
						<li>
							<img src="images/payment/method6.jpg" alt="method6">
						</li>
						<!-- /METHOD -->
					</ul>
					<!-- /PAYMENT METHODS -->
				</article>

				<article>
					<h6>Liên kết</h6>
					<nav id="footer-menu">
						<ul>
							<li>
								<a href="{{route('Client.Homepage')}}">Trang chủ</a>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</li>
							<li>
								<a href="profile.html">Tài khoản</a>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</li>
							<li>
								<a href="cart.html">Giỏ hàng</a>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</li>
							<li>
								<a href="#">Hàng mới về</a>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</li>


							<li>
								<a href="#">Chính sách</a>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</li>
						</ul>
					</nav>
				</article>

				<article>
					<h6>Sản phẩm nổi bật</h6>
					<!-- PRODUCT PREVIEW -->
					<ul class="product-preview">
						<li>
							<a href="full-view.html">
								<figure class="liquid">
									<img src="images/items/02.png" alt="product1">
								</figure>
							</a>
							<a href="women-shop.html"><p class="highlighted category">T-Shirts</p></a>
							<a href="full-view.html"><h6>Crazy Bunny</h6></a>
							<!-- RATING -->
							<ul class="rating">
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li>
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
							<!-- /RATING -->
							<p class="highlighted current">86.00</p>
						</li>

						<li>
							<a href="full-view.html">
								<figure class="liquid">
									<img src="images/items/25.png" alt="product2">
								</figure>
							</a>
							<a href="women-shop.html"><p class="highlighted category">T-Shirts</p></a>
							<a href="full-view.html"><h6>Happy Doughnut</h6></a>
							<!-- RATING -->
							<ul class="rating">
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li>
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
							<!-- /RATING -->
							<p class="highlighted current">49.00</p>
							<p class="highlighted previous">61.25</p>
						</li>

						<li>
							<a href="full-view.html">
								<figure class="liquid">
									<img src="images/items/32.png" alt="product3">
								</figure>
							</a>
							<a href="women-shop.html"><p class="highlighted category">Custom Sneakers</p></a>
							<a href="full-view.html"><h6>The Devil Walks</h6></a>
							<!-- RATING -->
							<ul class="rating">
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li>
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
							<!-- /RATING -->
							<p class="highlighted current">43.00</p>
						</li>
					</ul>
					<!-- /PRODUCT PREVIEW -->
				</article>

				<article>
					<h6>Sản phẩm gần đây được đặt</h6>
					<!-- PRODUCT PREVIEW -->
					<ul class="product-preview">
						<li>
							<a href="full-view.html">
								<figure class="liquid">
									<img src="images/items/31.png" alt="product1">
								</figure>
							</a>
							<a href="men-shop.html"><p class="highlighted category">Custom Sneakers</p></a>
							<a href="full-view.html"><h6>Crazy-R Chucks</h6></a>
							<!-- RATING -->
							<ul class="rating">
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li>
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
							<!-- /RATING -->
							<p class="highlighted current">57.00</p>
						</li>

						<li>
							<a href="full-view.html">
								<figure class="liquid">
									<img src="images/items/16.png" alt="product1">
								</figure>
							</a>
							<a href="men-shop.html"><p class="highlighted category">T-Shirts</p></a>
							<a href="full-view.html"><h6>The Devil Pin 02</h6></a>
							<!-- RATING -->
							<ul class="rating">
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li>
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
							<!-- /RATING -->
							<p class="highlighted current">54.00</p>
						</li>

						<li>
							<a href="full-view.html">
								<figure class="liquid">
									<img src="images/items/07.png" alt="product1">
								</figure>
							</a>
							<a href="women-shop.html"><p class="highlighted category">T-Shirts</p></a>
							<a href="full-view.html"><h6>Robo Planet</h6></a>
							<!-- RATING -->
							<ul class="rating">
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="filled">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li>
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
							<!-- /RATING -->
							<p class="highlighted current">105.00</p>
						</li>
					</ul>
					<!-- /PRODUCT PREVIEW -->
				</article>
			</section>
		</div>
		<div id="footer-bottom-wrap">
			<section id="footer-bottom">
				<p><a href="{{route('Client.Homepage')}}">TheCosmo Clothing's Shop</a><br> <span>|</span> All Rights Reserved 2019</p>
				<!-- SOCIAL LINKS -->
				<ul class="social-links">
					<li class="fb"><a href="#"></a></li>
					<li class="twt"><a href="#"></a></li>
					<li class="gplus"><a href="#"></a></li>
					<li class="db"><a href="#"></a></li>
					<li class="rss"><a href="#"></a></li>
					<li class="vm"><a href="#"></a></li>
					<li class="fk"><a href="#"></a></li>
				</ul>
				<!-- /SOCIAL LINKS -->
			</section>
		</div>
	</footer>
	<!-- /FOOTER --> --}}

<!-- SVG ARROW -->
<svg style="display: none;">
	<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
		<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
			L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
	</symbol>
</svg>
<!-- /SVG ARROW -->

<!-- SVG PLUS -->
<svg style="display: none;">
	<symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
		<rect x="5" width="3" height="13"/>
		<rect y="5" width="13" height="3"/>
	</symbol>
</svg>
<!-- /SVG PLUS -->

<!-- SVG STAR -->
<svg style="display: none;">
	<symbol id="svg-star" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">
		<polygon points="4.994,0.249 6.538,3.376 9.99,3.878 7.492,6.313 8.082,9.751 4.994,8.129 1.907,9.751
	2.495,6.313 -0.002,3.878 3.45,3.376 "/>
	</symbol>
</svg>
<!-- /SVG STAR -->

<!-- SVG WISHLIST -->
<svg style="display: none;">
	<symbol id="svg-wishlist" viewBox="0 0 16 13" preserveAspectRatio="xMinYMin meet">
		<path d="M13.655,0.53C13.009,0.193,12.267,0,11.475,0c-1.396,0-2.647,0.601-3.474,1.542
			C7.172,0.601,5.922,0,4.523,0C3.733,0,2.993,0.193,2.344,0.53C0.953,1.257,0.011,2.654,0.011,4.261
			c0,0.46,0.079,0.901,0.223,1.313c0.774,3.285,7.768,7.43,7.768,7.43s6.988-4.145,7.765-7.43c0.143-0.412,0.224-0.854,0.224-1.313
			C15.989,2.655,15.047,1.257,13.655,0.53z"/>
	</symbol>
</svg>
<!-- /SVG WISHLIST -->

<!-- SVG QUICKVIEW -->
<svg style="display: none;">
	<symbol id="svg-quickview" viewBox="0 0 20 12" preserveAspectRatio="xMinYMin meet">
		<path id="svg-path-eye" d="M10.033,0C5.607,0,1.792,2.388,0.04,5.833c-0.054,0.105-0.054,0.227,0,0.333
			C1.792,9.612,5.607,12,10.033,12c4.426,0,8.241-2.388,9.994-5.834c0.053-0.104,0.053-0.226,0-0.333C18.274,2.388,14.459,0,10.033,0
			z M10.033,10.141c-2.5,0-4.523-1.854-4.523-4.14c0-2.288,2.026-4.14,4.523-4.14c2.499,0,4.522,1.854,4.522,4.14
			C14.556,8.287,12.53,10.141,10.033,10.141z"/>
		<ellipse id="svg-path-center" cx="10.033" cy="5.999" rx="2.896" ry="2.65"/>
	</symbol>
</svg>
<!-- /SVG QUICKVIEW -->




<!-- SVG COMMENT -->
<svg style="display: none;">
	<symbol id="svg-comment" viewBox="0 0 12 12" preserveAspectRatio="xMinYMin meet">
		<path d="M11,0H1C0.448,0,0,0.448,0,1v7c0,0.553,0.448,1,1,1h2v3l3-3h5c0.553,0,1-0.447,1-1V1
			C12,0.448,11.553,0,11,0z M9.5,6h-7C2.224,6,2,5.776,2,5.5S2.224,5,2.5,5h7C9.776,5,10,5.224,10,5.5S9.776,6,9.5,6z M9.5,4h-7
			C2.224,4,2,3.776,2,3.5S2.224,3,2.5,3h7C9.776,3,10,3.224,10,3.5S9.776,4,9.5,4z"/>
	</symbol>
</svg>
<!-- /SVG COMMENT -->

<!-- SVG CHECK -->
<svg style="display: none;">
	<symbol id="svg-check" viewBox="0 0 15 12" preserveAspectRatio="xMinYMin meet">
		<polygon points="12.45,0.344 5.39,7.404 2.562,4.575 0.429,6.708 3.257,9.536 3.257,9.536
			5.379,11.657 14.571,2.465 "/>
	</symbol>
</svg>
<!-- /SVG CHECK -->

<!-- SVG LIMITED -->
<svg style="display: none;">
	<symbol id="svg-limited" viewBox="0 0 17 12" preserveAspectRatio="xMinYMin meet">
		<polygon points="9.914,5.292 9.207,4.585 7.086,2.464 4.964,4.585 0.015,9.534 2.136,11.657
			7.086,6.707 7.793,7.414 9.914,9.534 12.035,7.414 16.985,2.464 14.864,0.343 "/>
	</symbol>
</svg>
<!-- /SVG LIMITED -->

<!-- SVG ORDER BOX -->
<svg style="display: none;">
	<symbol id="svg-order-box" viewBox="0 0 34 31" preserveAspectRatio="xMinYMin meet">
		<polygon id="Base" fill="#00B0FF" points="0,24 17,31 34,24 34,7 17,0 0,7 "/>
		<polygon id="Top" fill="#56CBFF" points="0,7 17,0 34,7 34,17 0,17 "/>
		<polygon id="Right" fill="#0C7BBF" points="17,31 34,24 34,7 17,14 "/>
		<polygon id="Left" fill="#00B0FF" points="17,31 0,24 0,7 17,14 "/>
		<polygon id="Tag" fill="#FFFFFF" points="11,18 5,15.51 5,13.51 11,16 "/>
		<path id="Ink" fill="#2B2B2B" d="M17,14.844c0,0,3.252-0.061,2.594,2.344c-0.719,2.625-1.313,5.469,1.25,5.438
			s2.375-3.5,1.094-5.438s-0.193-3.594,0.981-4.063c0,0,1.644-0.469,1.55,1.125s1.031,1.791,1.813,1.505s1.5-1.255,0.844-2.536
			s0.469-2.125,1.75-2.125s3.688,1.625,5.125-0.781V7l-17,7V14.844z"/>
	</symbol>
</svg>
<!-- /SVG ORDER BOX -->

<!-- SVG CHAT -->
<svg style="display: none;">
	<symbol id="svg-chat" viewBox="0 0 40 32" preserveAspectRatio="xMinYMin meet">
		<path d="M37.145,8.637h-1.094v12.026c0,1.873-1.089,3.566-3.274,3.566H11.362v0.571
			c0,1.655,1.882,3.327,3.816,3.327h16.373l6.264,3.683l-0.908-3.683h0.238c1.935,0,2.805-1.668,2.805-3.327V11.492
			C39.949,9.836,39.079,8.637,37.145,8.637z"/>
		<path d="M29.579,0.281H4.707C2.519,0.281,0,2.225,0,4.099v15.075c0,1.726,2.134,2.972,4.18,3.163
			l-1.332,5.058l8.535-5.021h18.196c2.188,0,4.208-1.328,4.208-3.199V6.978V4.099C33.787,2.225,31.767,0.281,29.579,0.281z
			 M8.501,13.006c-1.241,0-2.247-1.006-2.247-2.247c0-1.241,1.006-2.247,2.247-2.247c1.24,0,2.247,1.006,2.247,2.247
			C10.748,12,9.741,13.006,8.501,13.006z M16.894,13.006c-1.241,0-2.247-1.006-2.247-2.247c0-1.241,1.006-2.247,2.247-2.247
			s2.247,1.006,2.247,2.247C19.14,12,18.135,13.006,16.894,13.006z M25.287,13.006c-1.241,0-2.249-1.006-2.249-2.247
			c0-1.241,1.008-2.247,2.249-2.247c1.238,0,2.246,1.006,2.246,2.247C27.533,12,26.525,13.006,25.287,13.006z"/>
	</symbol>
</svg>
<!-- /SVG CHAT -->

<!-- SVG GLOBE -->
<svg style="display: none;">
	<symbol id="svg-globe" viewBox="0 0 42 41" preserveAspectRatio="xMinYMin meet">
		<path d="M41.906,19.795c0,9.587-7.072,17.554-16.272,18.958c0.078-0.426,0.1-0.865,0.047-1.313
			c0,0-0.055-0.471-0.127-1.086c3.268-0.555,6.217-2.055,8.554-4.211c-0.14-0.115-0.279-0.268-0.417-0.469
			c-0.621-0.906,0.19-1.805,0.19-2.598c0-0.775-1.566-0.713-1.624-1.227c-0.197-1.781,1.094-1.807,1.783-2.494
			c0.688-0.689-0.682-2.254-1.566-2.154c-0.89,0.096-3.396-0.41-3.168-2.329c0.28-2.336-2.976-2.13-3.441-3.22
			c-0.679-1.589,0.449-3.539,1.924-3.981c2.087-0.627,4.143-2.33,3.981-4.225c-0.183-2.146-1.152-4.082-2.753-5.231
			c-1.666-0.675-3.462-1.092-5.339-1.197C22,3.086,20.527,3.459,20.594,4.227c0.165,1.881,5.514,2.37,4.616,4.128
			c-0.469,0.916-3.98,2.21-3.324,3.574c0.427,0.887,1.476,0.126,1.084,1.83c-0.18,0.783-0.868,2.256-1.925,2.351
			c-1.08,0.101-1.979-2.762-4.921-2.856c-1.39-0.044-3.349,2.169-1.686,3.74c1.007,0.951,2.897-1.143,3.455,0.493
			c0.394,1.152-0.053,3.574,1.782,4.585c0.669,0.369,1.694,0.691,2.709,1.207C20.879,23.586,19.03,24.16,16.846,25l-1.839-0.484
			c0.771-0.641,2.022-1.092,1.707-2.494c-0.462-2.059-4.037-1.282-6.5-3.745c-0.756-0.756-2.369-3.266-2.362-6.281
			c-1.228,2.333-1.927,4.986-1.927,7.8c0,0.867,0.065,1.718,0.193,2.548c-0.029,0-0.058-0.004-0.087-0.004
			c-0.775,0-1.537,0.162-2.242,0.471c-0.155-0.982-0.239-1.989-0.239-3.015c0-10.575,8.604-19.179,19.178-19.179
			C33.302,0.617,41.906,9.221,41.906,19.795z M27.521,25.387l-4.686,2.15l0.073-1.02l3.035-1.369
			c-0.433-0.031-0.881-0.043-1.329-0.043c-1.677,0-4.509,0.85-7.643,2.092l-10.047-2.65c-0.939-0.246-1.939-0.096-2.761,0.422
			l-0.494,0.311c-0.483,0.303-0.488,1.004-0.01,1.314l6.039,3.918C8.256,31.25,6.887,32,5.681,32.715l-3.1-1.641
			c-0.506-0.268-1.105-0.299-1.636-0.088l-0.293,0.119c-0.438,0.176-0.621,0.695-0.39,1.105l1.708,3.033h0
			c-0.644,0.555-1.011,1.016-1.011,1.332c0,0.951,1.171,1.191,2.204,1.191c1.842,0,26.164-5.57,26.164-10.615
			C29.326,26.152,28.643,25.654,27.521,25.387z M17.266,35.236l5.352-1.885c0.236-0.084,0.488,0.072,0.516,0.322l0.471,4.012
			c0.116,1.002-0.422,1.967-1.338,2.393l-0.501,0.232c-0.313,0.146-0.686,0.068-0.914-0.191l-3.748-4.258
			C16.92,35.654,17.005,35.328,17.266,35.236z"/>
	</symbol>
</svg>
<!-- /SVG GLOBE -->

<!-- SVG PIGGY -->
<svg style="display: none;">
	<symbol id="svg-piggy" viewBox="0 0 36 37" preserveAspectRatio="xMinYMin meet">
		<path id="svg-path-pig" d="M31.438,11.136c-1.403-1.292-3.03-2.3-4.776-3.034c-0.227,0.343-0.487,0.666-0.781,0.961
			c-0.392,0.39-0.83,0.725-1.309,0.993c0.507,0.167,0.992,0.358,1.46,0.578c0.474,0.224,0.657,0.805,0.395,1.26l0,0
			c-0.231,0.403-0.737,0.562-1.155,0.363c-3.183-1.503-6.735-1.221-8.294-0.985c-0.458,0.068-0.896-0.223-1.005-0.674v-0.003
			c-0.124-0.511,0.219-1.017,0.738-1.097c0.284-0.044,0.626-0.088,1.009-0.123c-0.116-0.1-0.228-0.204-0.335-0.311
			c-0.55-0.551-0.985-1.193-1.288-1.91c-0.032-0.076-0.064-0.156-0.092-0.231c-0.474,0.08-0.944,0.179-1.403,0.294
			c-2.671-1.555-5.877-1.558-7.783-1.371C5.989,5.925,5.499,6.811,5.861,7.56l1.615,3.309c-1.794,1.563-3.15,3.476-3.912,5.61
			l-1.969-0.008c-0.662-0.004-1.2,0.534-1.2,1.196v4.417c0,0.446,0.248,0.854,0.642,1.061l2.556,1.333
			c1.068,2.945,3.281,5.473,6.2,7.215v3.911c0,0.771,0.626,1.396,1.396,1.396h3.58c0.554,0,1.057-0.33,1.28-0.837l0.897-2.062
			c0.774,0.097,1.559,0.145,2.364,0.145c1.269,0,2.501-0.12,3.685-0.348v1.706c0,0.771,0.626,1.396,1.395,1.396h3.564
			c0.515,0,0.989-0.283,1.232-0.737c1.898-3.563,3.959-7.141,5.481-10.872c0.77-1.89,1.049-3.895,0.882-5.853
			C35.276,16.379,33.841,13.345,31.438,11.136z M10.02,18.556c-0.993,0-1.794-0.801-1.794-1.794s0.801-1.794,1.794-1.794
			s1.794,0.802,1.794,1.794S11.012,18.556,10.02,18.556z"/>
		<path id="svg-path-coin" d="M19.862,9.291c0.548,0.215,1.146,0.335,1.771,0.335c0.308,0,0.607-0.028,0.894-0.084
			c1.22-0.227,2.276-0.917,2.982-1.878c0.586-0.797,0.933-1.782,0.933-2.851c0.005-2.659-2.153-4.812-4.809-4.812
			c-2.658,0-4.811,2.153-4.811,4.812c0,0.69,0.143,1.344,0.407,1.938C17.734,7.907,18.687,8.824,19.862,9.291z"/>
	</symbol>
</svg>
<!-- /SVG PIGGY -->

<!-- SVG RIBBON -->
<svg style="display: none;">
	<symbol id="svg-ribbon" viewBox="0 0 34 42" preserveAspectRatio="xMinYMin meet">
		<path id="svg-path-circle" d="M22.182,27.232c0.786-1.313,1.939-1.984,3.473-2.002c1.532-0.019,2.306-0.799,2.33-2.335
			c0.021-1.528,0.687-2.683,2-3.465c1.317-0.786,1.602-1.843,0.853-3.181c-0.747-1.335-0.747-2.669,0-4.008
			c0.749-1.335,0.468-2.39-0.853-3.175c-1.313-0.787-1.981-1.941-2-3.476c-0.024-1.529-0.798-2.309-2.33-2.327
			c-1.533-0.021-2.687-0.691-3.473-2.003c-0.786-1.317-1.844-1.603-3.179-0.853c-1.333,0.747-2.672,0.747-4.006,0
			C13.66-0.34,12.604-0.057,11.818,1.26c-0.784,1.314-1.941,1.983-3.472,2.003C6.818,3.282,6.041,4.062,6.02,5.591
			C5.995,7.126,5.329,8.278,4.016,9.067c-1.317,0.786-1.605,1.839-0.852,3.175c0.75,1.338,0.75,2.673,0,4.008
			c-0.753,1.338-0.467,2.397,0.852,3.181c1.313,0.782,1.981,1.937,2.004,3.465c0.021,1.535,0.798,2.316,2.326,2.335
			c1.532,0.018,2.688,0.689,3.473,2.002c0.786,1.318,1.843,1.603,3.178,0.851c1.334-0.739,2.673-0.739,4.006,0
			C20.338,28.835,21.396,28.551,22.182,27.232z M17.003,22.629c-4.631,0-8.384-3.752-8.384-8.385c0-4.628,3.753-8.381,8.384-8.381
			c4.629,0,8.381,3.753,8.381,8.381C25.384,18.876,21.632,22.629,17.003,22.629z"/>
		<path id="svg-path-left-tape" d="M8.212,26.46c-1.611,0-1.826-0.751-1.826-0.751L0.094,38.073l5.044-0.566l2.79,4.197
			c0,0,5.813-12.125,5.813-12.045C10.729,29.584,11.927,26.539,8.212,26.46z"/>
		<path id="svg-path-right-tape" d="M27.533,26.193c-4.597,0.48-3.662,1.622-4.713,2.507c-1.21,1.291-2.721,1.038-2.721,1.038
			l7.097,12.207l1.744-4.521l4.962,0.648L27.533,26.193z"/>
		<polygon id="svg-path-star" points="18.755,12.395 17.001,8.843 15.244,12.395 11.317,12.969 14.155,15.737 13.486,19.651
			17.001,17.805 20.514,19.651 19.846,15.737 22.683,12.969"/>
	</symbol>
</svg>
<!-- /SVG RIBBON -->

<!-- SVG TRUCK -->
<svg style="display: none;">
	<symbol id="svg-truck" viewBox="0 0 58 40" preserveAspectRatio="xMinYMin meet">
		<path id="svg-path-truck" d="M57.1,31.408h-1.627v-9.093c0-1.063-0.32-2.107-0.916-2.99l-4.074-6.035
			c-0.997-1.472-2.656-2.355-4.437-2.355h-6.314c-0.743,0-1.339,0.602-1.339,1.338v19.135H28.05c0.982,0.85,1.659,2.033,1.854,3.372
			h10.905c0.388-2.656,2.676-4.71,5.439-4.71c2.763,0,5.043,2.054,5.432,4.71h5.42c0.368,0,0.669-0.302,0.669-0.669v-2.034
			C57.769,31.709,57.468,31.408,57.1,31.408z M50.436,20.529H42.1c-0.368,0-0.669-0.294-0.669-0.669v-4.623
			c0-0.368,0.301-0.669,0.669-0.669h5.077c0.221,0,0.422,0.107,0.549,0.281l3.259,4.63C51.291,19.921,50.977,20.529,50.436,20.529z
			 M46.248,31.408c-2.303,0-4.162,1.866-4.162,4.167c0,2.296,1.859,4.162,4.162,4.162c2.294,0,4.16-1.866,4.16-4.162
			C50.408,33.274,48.542,31.408,46.248,31.408z M46.248,37.657c-1.151,0-2.082-0.938-2.082-2.081c0-1.15,0.931-2.081,2.082-2.081
			c1.149,0,2.08,0.931,2.08,2.081C48.328,36.72,47.397,37.657,46.248,37.657z M11.551,31.408c-0.368,0-0.669,0.301-0.669,0.669
			v2.034c0,0.367,0.301,0.669,0.669,0.669h7.479c0.194-1.339,0.87-2.522,1.847-3.372H11.551L11.551,31.408z M24.463,31.408
			c-2.294,0-4.161,1.866-4.161,4.167c0,2.296,1.867,4.162,4.161,4.162c2.301,0,4.163-1.866,4.163-4.162
			C28.625,33.274,26.764,31.408,24.463,31.408z M24.463,37.657c-1.15,0-2.081-0.938-2.081-2.081c0-1.15,0.93-2.081,2.081-2.081
			c1.151,0,2.082,0.931,2.082,2.081C26.544,36.72,25.614,37.657,24.463,37.657z M34.472,6.788h-7.754
			C27.099,7.918,27.3,9.129,27.3,10.38c0,6.315-5.138,11.455-11.454,11.455c-1.151,0-2.268-0.175-3.318-0.488v7.392
			c0,0.368,0.301,0.669,0.669,0.669h22.614c0.367,0,0.669-0.301,0.669-0.669V8.794C36.479,7.684,35.583,6.788,34.472,6.788z
			 M15.848,0.263c-5.586,0-10.115,4.529-10.115,10.115s4.529,10.116,10.115,10.116s10.116-4.529,10.116-10.116
			S21.434,0.263,15.848,0.263z M15.848,18.191c-4.315,0-7.813-3.499-7.813-7.813s3.498-7.813,7.813-7.813s7.813,3.499,7.813,7.813
			S20.163,18.191,15.848,18.191z M18.832,12.028c-0.086,0-0.174-0.011-0.262-0.034l-3.26-0.879
			c-0.438-0.118-0.742-0.516-0.742-0.969V5.128c0-0.554,0.45-1.004,1.004-1.004c0.554,0,1.003,0.45,1.003,1.004v4.249l2.518,0.679
			c0.535,0.145,0.852,0.695,0.708,1.23C19.679,11.734,19.274,12.028,18.832,12.028z"/>
		<path id="svg-path-speedline1" d="M3.232,22.5c0,0.828,0.671,1.5,1.5,1.5h5c0.829,0,1.5-0.672,1.5-1.5l0,0
			c0-0.828-0.671-1.5-1.5-1.5h-5C3.904,21,3.232,21.672,3.232,22.5L3.232,22.5z"/>
		<path id="svg-path-speedline2" d="M0.232,27.5c0,0.828,0.671,1.5,1.5,1.5h8c0.829,0,1.5-0.672,1.5-1.5l0,0
			c0-0.828-0.671-1.5-1.5-1.5h-8C0.904,26,0.232,26.672,0.232,27.5L0.232,27.5z"/>
	</symbol>
</svg>
<!-- /SVG TRUCK -->

<!-- SVG CUSTOMER SERVICE -->
<svg style="display: none;">
	<symbol id="svg-customer-service" viewBox="0 0 38 38" preserveAspectRatio="xMinYMin meet">
		<path d="M16.096,20.064c0,1.049-0.85,1.9-1.899,1.9c-1.048,0-1.899-0.852-1.899-1.9
			c0-1.048,0.851-1.897,1.899-1.897C15.246,18.167,16.096,19.016,16.096,20.064z M23.805,18.167c-1.049,0-1.898,0.849-1.898,1.897
			c0,1.049,0.85,1.9,1.898,1.9c1.05,0,1.899-0.852,1.899-1.9C25.704,19.016,24.854,18.167,23.805,18.167z M31.916,25.896V25.68
			c-0.217,0.633-0.479,1.232-0.76,1.815c0.053,0.357,0.149,0.857,0.311,1.43c0.781,1.205,2.982,2.743,4.495,3.139
			c-0.816,0.347-1.796,0.489-2.751,0.343c0.874,1.1,2.105,2.098,3.844,2.692c-4.063,3.66-10.753,3.741-15.431,0.899
			c-0.907,0.267-1.792,0.406-2.623,0.406c-0.831,0-1.717-0.14-2.623-0.406c-4.678,2.842-11.37,2.761-15.43-0.899
			c1.772-0.606,3.014-1.634,3.892-2.759c-0.775,0.029-1.545-0.112-2.205-0.392c1.106-0.291,2.584-1.194,3.604-2.132
			c0.356-0.943,0.529-1.785,0.607-2.322c-0.282-0.582-0.543-1.182-0.76-1.814v0.217H3.789c-1.812,0-3.281-1.469-3.281-3.28v-3.61
			c0-1.246,0.696-2.331,1.72-2.885c0.034-5.125,1.528-9.127,4.446-11.893C9.566,1.483,13.714,0.093,19,0.093
			c5.288,0,9.434,1.391,12.328,4.136c2.918,2.766,4.411,6.767,4.446,11.893c1.023,0.554,1.719,1.64,1.719,2.885v3.61
			c0,1.812-1.468,3.28-3.279,3.28H31.916L31.916,25.896z M30.55,20.077c0-0.845-0.042-1.636-0.106-2.405
			c-1.48-1.354-4.188-2.377-7.604-2.736c0.542,0.486,1.007,1.132,1.255,2.058c-1.984-1.451-6.146-1.901-7.528-3.456h0.001
			c-2.2-1.455-2.777-3.543-2.795-2.679c-0.09,4.141-3.024,7.369-6.283,7.824c-0.021,0.456-0.037,0.916-0.037,1.395
			c0,1.751,0.286,3.347,0.771,4.783c1.831,2.208,4.854,2.831,7.53,2.996c0.497-0.79,1.611-1.341,2.909-1.341
			c1.76,0,3.187,1.012,3.187,2.263c0,1.248-1.427,2.259-3.187,2.259c-1.354,0-2.507-0.599-2.968-1.442
			c-1.871-0.109-3.927-0.43-5.758-1.294c2.576,3.798,6.57,5.807,9.065,5.807C22.922,34.107,30.55,29.155,30.55,20.077z
			 M32.536,15.727h1.262C33.591,6.785,28.486,2.061,19,2.061c-9.484,0-14.589,4.724-14.797,13.666h1.262
			c0.461-3.016,1.437-5.494,2.918-7.399C10.744,5.292,14.316,3.751,19,3.751c4.685,0,8.257,1.54,10.619,4.576
			C31.1,10.233,32.074,12.711,32.536,15.727z"/>
	</symbol>
</svg>
<!-- /SVG CUSTOMER SERVICE -->

<!-- SVG PIN -->
<svg style="display: none;">
	<symbol id="svg-pin" viewBox="0 0 10 15" preserveAspectRatio="xMinYMin meet">
		<path d="M4.996,0.036c-2.735,0-4.959,2.224-4.959,4.959c0,1.102,0.703,2.897,2.15,5.489
			c1.023,1.834,2.03,3.362,2.072,3.427l0.737,1.118l0.737-1.118c0.042-0.064,1.048-1.593,2.072-3.427
			c1.446-2.592,2.149-4.388,2.149-5.489C9.954,2.26,7.73,0.036,4.996,0.036z M4.996,7.532c-1.42,0-2.571-1.15-2.571-2.57
			c0-1.419,1.151-2.571,2.571-2.571c1.42,0,2.571,1.152,2.571,2.571C7.566,6.382,6.416,7.532,4.996,7.532z"/>
	</symbol>
</svg>
<!-- /SVG PIN -->

<!-- SVG PHONE -->
<svg style="display: none;">
	<symbol id="svg-phone" viewBox="0 0 11 15" preserveAspectRatio="xMinYMin meet">
		<path d="M4.969,10.199C4.623,9.639,4.304,9.057,4.001,8.473C3.7,7.886,3.411,7.293,3.151,6.684
			c-0.212-0.496-0.1-1.079,0.227-1.497L1.339,1.249c-0.923,0.494-1.397,2.295-1.13,4.095c0.114,0.777,0.345,1.521,0.6,2.239
			C1.064,8.295,1.373,8.991,1.716,9.66c0.346,0.669,0.732,1.323,1.168,1.944c0.438,0.623,0.914,1.238,1.48,1.777
			c1.318,1.257,3.065,1.903,4,1.435l-2.04-3.938C5.796,10.902,5.253,10.659,4.969,10.199z"/>
		<path d="M4.292,4.557l0.609-0.315l0.654-0.338C5.787,3.785,5.877,3.5,5.76,3.271L4.212,0.28
			C4.092,0.053,3.81-0.034,3.581,0.085C3.084,0.343,2.59,0.6,2.095,0.856l1.986,3.837C4.146,4.642,4.217,4.597,4.292,4.557z"/>
		<path d="M10.813,13.026l-1.549-2.99C9.145,9.81,8.859,9.719,8.63,9.838L8.629,9.837l-0.656,0.34
			l-0.606,0.316c-0.075,0.037-0.153,0.068-0.232,0.094l1.985,3.837c0.496-0.258,0.992-0.514,1.488-0.77
			C10.839,13.536,10.932,13.256,10.813,13.026z"/>
	</symbol>
</svg>
<!-- /SVG PHONE -->

<!-- SVG ENVELOPE -->
<svg style="display: none;">
	<symbol id="svg-envelope" viewBox="0 0 13 9" preserveAspectRatio="xMinYMin meet">
		<path d="M6.5,6.304L4.94,4.939L0.48,8.762c0.162,0.151,0.381,0.245,0.623,0.245h10.795
			c0.241,0,0.458-0.094,0.62-0.245L8.06,4.939L6.5,6.304z"/>
		<path d="M12.521,0.244C12.358,0.093,12.14,0,11.897,0H1.103C0.862,0,0.644,0.093,0.482,0.246
			L6.5,5.403L12.521,0.244z"/>
		<polygon points="0.195,0.791 0.195,8.273 4.548,4.574"/>
		<polygon points="8.451,4.574 12.805,8.273 12.805,0.788"/>
	</symbol>
</svg>
<!-- SVG ENVELOPE -->

<!-- jQuery -->
<script src="{{URL::asset('client/js/vendor/jquery-1.11.1.min.js')}}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script> --}}
<script src={{URL::asset('all/js/js.cookie.min.js')}}></script>
<script src="{{URL::asset('client/js/custom.js')}}"></script>
<script src="{{URL::asset('client/js/cart.js')}}"></script>
@yield('footer')
</body>
</html>
