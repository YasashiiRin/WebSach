<style type="text/css">
.main-menu>ul.l-inline> li> a {
    color: #fff;
    padding: 10px 10px;
    line-height: 50px;
}
.header-body{
    height:1px;
    background-color:#172431;
    border-bottom: 5px solid initial #172431;

}
img.yt-img-shadow {
    display: block;
    margin-left: var(--yt-img-margin-left,auto);
    margin-right: var(--yt-img-margin-right,auto);
    max-height: var(--yt-img-max-height,none);
    max-width: var(--yt-img-max-width,100%);
    border-radius: var(--yt-img-border-radius,none);
}
#img{
	margin: 5px;
    width: 80px;
    height: 80px;
    border: solid 3px #04FBD5;
    background: #999;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
}
.btimg{
	border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
}

</style>
<div id="header">
		<div class="header-body">
			<div class="container beta-relative" >
				<div class="pull-right beta-components space-left ov">
				<div class="btimg">
	            <a href="{{ route('prf') }}">
		           <img id="img" class="style-scope yt-img-shadow" alt="Hình ảnh đại diện" height="32" width="32" src="uploads/{{Auth::user()->avatar}}">
	              </a>
	             </div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color:#172431;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
							<div class="pull-left">
					<a href="index.html" id="logo"><img src="source/assets/dest/images/logokt.png" width="80px" alt=""></a>
				</div>
						<li><a href="{{ route('trang-chu') }}">Trang chủ</a></li>
						<li><a href="#">Loại Sản phẩm</a>
							<ul class="sub-menu">
								@foreach($loai_sp as $ls)
								<li><a href="{{ route('loaisanpham',$ls->id) }}">{{$ls->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{ route('gioithieu') }}">Giới thiệu</a></li>
						<li><a href="{{ route('lienhe') }}">Liên hệ</a></li>
						@if(Auth::check())						  			   
						 <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
						  <li><a href="{{ route('prf') }}">Chào bạn {{Auth::user()->full_name}}</a></li>
						{{-- @else
						    <li><a href="{{ route('sigup') }}">Đăng ký</a></li>
                            <li><a href="{{ route('login') }}">Đăng Nhập</a></li>  --}}
                        @endif
                        <li>					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="{{ route('search') }}">
					        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>
					<div class="beta-comp" style="color: white;">
						@if(Session::has('cart'))
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (
								@if(Session::has('cart'))
								{{Session('cart')->totalQty}}
								@else Trống 
								@endif) 
								<i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								@foreach($product_cart as $pdc)
								<div class="cart-item">
									<a class="cart-item-delete" href="{{ route('xoagiohang',$pdc['item']['id']) }}"><i class="fa fa-times"></i></a>
									<div class="media">
										<a class="pull-left" href="#"><img src="source/image/product/{{$pdc['item']['image']}}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{$pdc['item']['name']}}</span>
											
											<span class="cart-item-amount"><span>{{$pdc['qty']}}*</span><span>
                                               @if($pdc['item']['promotion_price']==0)
                                                {{number_format($pdc['item']['unit_price'])}}
                                               @else
                                                {{number_format($pdc['item']['promotion_price'])}}
                                               @endif
                                              </span>
                                              </span>
										</div>
									</div>
								</div>
                                 @endforeach
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{number_format(Session('cart')->totalPrice)}} đ</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{ route('dathang') }}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
						@endif
					</div>
				</li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
		</div> <!-- #header -->