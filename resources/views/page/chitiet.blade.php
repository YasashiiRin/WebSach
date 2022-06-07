@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$sanpham->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{ route('trang-chu')}}">Home</a> / <span>Product</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="source/image/product/{{$sanpham->image}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$sanpham->image}}</p>
								<p class="single-item-price">
                                                @if($sanpham->promotion_price==0)
                                                  <span class="flash-sale">{{number_format($sanpham->unit_price)}}đồng</span>
                                                @else
                                                    <span class="flash-del">{{number_format($sanpham->unit_price)}}đồng</span>
                                                    <span class="flash-sale">{{number_format($sanpham->promotion_price)}}đồng</span>
                                                @endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$sanpham->description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Options:</p>
							<div class="single-item-options">
								<select class="wc-select" name="size">
									<option>Số lượng</option>
									<option value="XL">...</option>
								</select>
								<select class="wc-select" name="color">
									<option>Sách</option>
									<option value="Red">Bản thường</option>
									<option value="Green">Bản limited</option>
								</select>
								<select class="wc-select" name="color">
									<option>Lựa chọn</option>
									<option value="1">Không bọc bìa</option>
									<option value="2">Có bọc</option>
								</select>
								<a class="add-to-cart" href="{{ route('trang-chu') }}"><i class="fa fa-shopping-cart"></i></a>
				<script type="text/javascript">  	/*nhấn ok thì sẽ chuyển tiếp đến trang đăng nhập */
					var list = document.getElementsByClassName('add-to-cart');
					for(var i = 0; i < list.length; i++)
					{
						list[i].onclick = function()
						{
							alert("Liên hệ admin để mua hàng");
						}
					}
				</script>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p> 5 Centimet Trên Giây: Không chỉ là vận tốc của cánh hoa rơi
            </h2>
            <p>
                Cảnh Thiên là tác giả của cuốn sách “Đừng lựa chọn an nhàn khi còn trẻ”, thông tin của tác cũng không được tiết lộ nhiều, các độc giả chỉ biết đây là một tác giả người Trung Quốc, từng nhiều năm làm vị trí biên tập và truyền thông, cung Sư Tử, thích văn chương, mỹ thực và những niềm hạnh phúc nhỏ bé trong cuộc sống. Sách tiêu biểu của tác giả Cảnh Thiên: Phụ nữ cần độc lập về tài chính, Đừng an nhàn khi còn trẻ,…
            </p>
            <h2>
                 Giới thiệu tác giả
            </h2>
            <p>
            Shinkai Makoto – “cha đẻ” của hàng loạt tiểu thuyết lãng mạn Nhật Bản. Ông được biết đến là một tiểu thuyết gia, nhà làm phim, đạo diễn, nhà thiết kế đồ họa, họa sĩ.
Ông sinh ngày 9/2 năm 1973 tại thị trấn Komi, quận Minamisaku, Nagano, Nhật Bản. Makoto có cảm hứng nghệ thuật ngay từ những năm cấp 2. Năm 2001, ông chính thức lên vai trò đạo diễn với bộ phim Tiếng Gọi Từ Các Vì Sao. Bộ phim đã đưa tên tuổi của Shinkai Makoto lên một tầm mới trong đại chúng Nhật Bản, khởi đầu cho hàng loạt các bộ Anime thành công vang dội như: 5cm/s, Khu Vườn Ngôn Từ, Your Name, Đứa Con Của Thời Tiết,… Trong đó, “Your Name” chính là bộ phim Anime có doanh thu toàn cầu cao nhất mọi thời đại.
Bên cạnh làm phim, Shinkai Makoto cũng viết những tác phẩm của mình thành những bộ tiểu thuyết lãng mạn. Và không ngoài dự đoán đó cũng là những siêu phẩm “Best Seller” toàn Châu Á.
Ông có hàng loạt các giải thưởng nổi tiếng, trong đó phải kể đến Đạo diễn xuất sắc nhất, Đạo diễn của năm, Đạo diễn hoạt hình xuất sắc nhất.
            </p>
            <div class="picture">
                <img src="https://bloganchoi.com/wp-content/uploads/2020/02/review-5-centimet-tren-giay-0.jpg" width="600" height="400">
            </div>
            <h2>
                 Nội dung chính của cuốn sách 5 Centimet Trên Giây
            </h2>
            <p>
            5 Centimet Trên Giây là câu chuyện về Tono Takaki và Shinohara Akari. Họ biết nhau từ thuở còn học tiểu học, thân thiết như hình với bóng. Giống những đứa trẻ con vô lo vô nghĩ, họ kể cho nhau nghe mọi chuyện từ chân trời dưới bể. Dường như không có chuyện gì có thể giấu kín, ngoại trừ cảm xúc tình cảm đang dần nảy nở trong cả hai. 
            </p>
            <p>
            Lên trung học, Akari chuyển đi, đến một nơi rất xa cậu bạn thân. Ít gặp mặt, ít thư từ, mối liên hệ dần chìm vào quên lãng. Cho đến ngày Takaki quyết định thực hiện chuyến đi gian nan một mình để đến gặp cô.
            </p>
            <div class="picture">
                <img src="https://www.dungplus.com/wp-content/uploads/2019/09/5-centimet-tren-giay.jpg" width="600" height="400">
            </div>
            <p>
            Takaki thay đổi chuyến tàu liên tục vì bão tuyết, quãng đường dài khiến cậu đến sân ga cuối cùng vào lúc nửa đêm. Cũng trong đêm vắng vẻ, không còn một hành khách, cô bé Akari vẫn ngồi đợi bạn mình với hộp cơm đã dần nguội lạnh.
            </p>
            <p>
            Câu chuyện tiếp đó là quá trình các nhân vật lớn lên với dần những thay đổi trưởng thành. Nhưng cảm xúc về tình đầu vẫn còn mãi, chưa bao giờ nguôi ngoai trong sâu thẳm trái tim mỗi người. Giờ đây, khi Takaki biết đáp án mà năm xưa cô bé Akari hỏi: “Cậu có biết 5cm/s là gì không?”, thì điều đó chẳng còn ý nghĩa gì nữa.
            </p>
            <p>
            Nếu đã từng yêu, trái tim bạn hẳn sẽ rung động vì những giây phút nhẹ nhàng trong truyện. Lời khuyên là nếu đọc truyện xong thì hãy xem phim, vì bộ phim sẽ khiến cảm xúc bạn được trọn vẹn hơn với những thước phim sâu lắng và cả một khung trời anh hoa đào lãng đãng nơi “Xứ sở Mặt Trời mọc”.
            </p>
            
            <h2>Cảm nhận từ độc giả về tiểu thuyết 5 Centimet Trên Giây</h2>
            <p>Gấp cuốn sách lại, hẳn bạn đọc sẽ có những suy nghĩ khác nhau: tiếc nuối có, mãn nguyện có, và rồi nhận ra rằng chính mình đã từng có thời lạc lối và đắm chìm đến thế. Cuốn sách như dội chiếu tâm can của những ai đã và đang ngóng chờ tình yêu rồi 5 Centimet Trên Giây khiến cho họ ngộ ra một điều: trong tình yêu phải có chữ duyên, vì nếu lỡ lạc nhau một giây thôi thì đó là cả một đời mong mỏi, ngóng trông và nuối tiếc.
</p>
            </div>
        </div>
    </p>
						</div>
						{{-- <div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div> --}}
					</div>
					{{-- <div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Related Products</h4>

						<div class="row">
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="source/assets/dest/images/products/4.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span>$34.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="source/assets/dest/images/products/5.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span>$34.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-item">
									<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

									<div class="single-item-header">
										<a href="#"><img src="source/assets/dest/images/products/6.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span class="flash-del">$34.55</span>
											<span class="flash-sale">$33.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="#">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- .beta-products-list --> --}}
				</div>
			{{-- 	<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Best Sellers</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget --> --}}
					{{-- <div class="widget">
						<h3 class="widget-title">New Products</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget --> --}}
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection	