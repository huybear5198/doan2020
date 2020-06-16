<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        //Bất động sản
        DB::table('products')->insert([
            'id' => 1,
            'name' => "Chính chủ cần bán lô đất 75m2 phường 11 quận 11",
            'type_product' => 1,
            'description' => 'Tôi cần sang lại lô đất trên đường Bình Quới (gần Ông Ích Khiêm). Diện tích 75m2, sổ chính chủ đứng tên tôi, thổ cư 100%. Thanh toán 1 lần tôi bao sang tên. Giá 1tỷ780tr. Không nhận tin nhắn, miễn cò, môi giới.',
            'price' => 1780000000,
            'quantity' => 1,
            'id_user' => 4,
            'city' => "Hồ Chí Minh",
            'district' => "11",
            'sub_district' => "11",
            'street' => "Bình thới",
            'image' => '/products/nha1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 2,
            'name' => "Nhà 1 trệt 2 lầu 100m2 đường an phú 35 p .An Phú",
            'type_product' => 1,
            'description' => 'Bán Nhà An Phú 35 Bình Dương.
            Chách EON Chỉ 5 Phút Đi Xe Máy.
            Đi Thủ Đức Chưa Tới 15 Phút.
            Xung Quanh Là Khu Dân Cư Đông Đúc.
            Chợ Trường Học Khu Vui Chơi Bệnh Viện Trong Bán Kính 1km.',
            'price' => 2900000000,
            'quantity' => 1,
            'id_user' => 5,
            'city' => "Bình Dương",
            'district' => "Thị xã Thuận An",
            'sub_district' => "An Phú",
            'street' => "An Phú 35",
            'image' => '/products/nha2.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 3,
            'name' => "Đất Đồng Nai vuông đẹp nở hậu, đầu tư cực tốt 2020",
            'type_product' => 1,
            'description' => 'Gia đình có việc cần giải quyết gấp, bán lô đất đẹp nở hậu 23,6m.
            - Hướng Tây Nam.
            - Quốc lộ 51 đi vào 600m.
            - Đường trước nhà đường đất.
            - Gần khu dân cư và khu công nghiệp, trường học, sân banh...
            - Giữa cao tốc Long Thành - Dầu Giây, Long Thành - Bến Lức.
            - Đất hiện trạng rừng sản xuất, quy hoạch ở nông thôn.
            - Giá bán 3,6 tỷ chính chủ tiếp khách thiện chí.
            Cám ơn !!!',
            'price' => 3600000000,
            'quantity' => 1,
            'id_user' => 6,
            'city' => "Đồng Nai",
            'district' => "Huyện Long Thành",
            'sub_district' => "Xã Long Phước",
            'street' => "Đường 51",
            'image' => '/products/nha3.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 4,
            'name' => "Bán ĐẤT MẶT TIỀN (QL53) GIÁ TỐT",
            'type_product' => 1,
            'description' => 'Đất nằm ngay mặt tiền quốc lộ 53 hướng từ chợ Long Hồ về Trà Vinh nằm bên phải cách chợ Long hồ khoảng 1,5km đất cao đẹp trước đây cho thuê bán quán cafe giá 6tr/tháng nay hết hạn lấy lại bán. Diện tích lớn đẹp (ngang 11 dài 23) vì mặt tiền nên thích hợp kinh doanh mọi thứ , đất mặt tiền mà giá chỉ 6tr/m2 .Đất chính chủ đăng nên thuận tiện mua bán sang tên.
            Mình bao mọi phí sang tên công chứng !',
            'price' => 1400000000,
            'quantity' => 1,
            'id_user' => 7,
            'city' => "Vĩnh Long",
            'district' => "Huyện Long Hồ",
            'sub_district' => "Xã Long An",
            'street' => "Quốc Lộ 53",
            'image' => '/products/nha4.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 5,
            'name' => "NHÀ PHỐ HIỆN ĐẠI - TRỤC CHÍNH HẺM LỘ 4M Đ.TẦM VU",
            'type_product' => 1,
            'description' => 'NHÀ LẦU MỚI 100% THIẾT KẾ HIỆN ĐẠI - TRỤC CHÍNH HẺM 278 TẦM VU - P.HƯNG LỢI

            - Vị trí hẻm 278,vừa vào hẻm thì tới nhà liền (tương lai có thể ra mặt tiền đường, nếu đường Tầm Vu sớm mở rộng 30m)
            - Diện tích: 4 x 9,61 = 38,6m2. Dtsd= 78m2
            - Pháp lý: Thổ Cư (Gpxd chính,hoàn công được ngay)
            - Hướng: Đông Bắc
            - Lộ giới 4m
            - Kết cấu: 1 Phòng khách,2 phòng ngủ,2 toillet,ban công phơi đồ,hệ thống máy năng lượng mặt trời
            
            🎁 Tặng Nội Thất gồm: Bộ sofa,Kệ tủ bếp,tủ quần áo,bàn trang điểm,máy lạnh LG inveter,kệ rựu
            
            - Nhà vị trí rất đẹp, thuận tiện mở: tiệm tóc, tiệm nail,homestay,kinh doanh mua bán tại nhà
            
            - Giá bán: 2 tỷ 500 triệu (Thương lượng)',
            'price' => 2500000000,
            'quantity' => 1,
            'id_user' => 8,
            'city' => "Cần Thơ",
            'district' => "Ninh Kiều",
            'sub_district' => "Hưng Lợi",
            'street' => "Tầm Vu",
            'image' => '/products/nha5.jpg',
        ]);

        //Xe cộ
        DB::table('products')->insert([
            'id' => 6,
            'name' => "Bán Shark bs 72 và đc bs đẹp, lên xe chạy là ghiền",
            'type_product' => 2,
            'description' => 'Xe máy chưa qua sữa chữa bs 72 và dc bs đẹp, xe máy móc êm ru, không hú nhe, xe chạy không hao xăng , ai lên chạy là ghiền xe, giá 12tr5 còn bớt',
            'price' => 12500000,
            'quantity' => 1,
            'id_user' => 4,
            'city' => "Bà Rịa - Vũng Tàu",
            'sub_district' => "Nguyễn An Ninh",
            'image' => '/products/xe1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 7,
            'name' => "Mua xe cũ giá cao , xe đang trả góp ngân hàng",
            'type_product' => 2,
            'description' => 'Nhận cầm cố các loại xe máy lãi xuất 5% ( 24/24 )

            Cầm xe đang trả góp ngân hàng ..vv
            
            🛵 Mua các loại xe máy cũ + oto , Xe đang trả góp ngân hàng , xe không chinh chủ ... vv
            
            Đến tận nơi mua , thủ tục nhanh gọn lẹ ( 24/24 )
            🌹Có hoa hồng cho người giới thiệu
            
            Anh chị chỉ cần nhá máy hoặc nhắn tin em sẽ gọi lại.',
            'price' => 60000000,
            'quantity' => 10,
            'id_user' => 5,
            'city' => "Bà Rịa - Vũng Tàu",
            'district' => "Thị xã Phú Mỹ",
            'sub_district' => "Xã Tân Hả",
            'street' => "",
            'image' => '/products/xe2.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 8,
            'name' => "Xipo đời 2000 trắng đỏ 41 đầu xe dọn đẹp cực chất",
            'type_product' => 2,
            'description' => 'Xe chính chủ bao rút hồ sơ toàn quốc
            Xe dọn đẹp máy êm cực chất
            Dàn chân đẹp long lanh ko tì vết
            
            ❤️❤️❤️❤️❤️❤️
            
            💥 Cam kết giá tốt -xe chất lượng
            💥 Giao xe tận nơi- bảo hành miễn phí
            💥 Hỗ trợ rút hồ sơ và sang tên
            💥 Hỗ trợ trao đổi xe
            
            ĐỊA CHỈ CỬA HÀNG
            🏠👉41 Đường Nguyễn Văn Tiết-khu phố Bình Hòa-lái thiêu .Thuận An .Bình Dương —ngay cây xăng số bốn lái thiêu đi vào cổng chào thành phố thuận an 500m',
            'price' => 185000000,
            'quantity' => 1,
            'id_user' => 6,
            'city' => "Thủ Dầu Một, Bình Dương",
            'district' => "",
            'sub_district' => "Hiệp Thành",
            'street' => "",
            'image' => '/products/xe3.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 9,
            'name' => "Honda Air Blade đỏ đen đã đi 27.000km",
            'type_product' => 2,
            'description' => 'xe còn mới toanh zin 100%còn bảo hành chính chủ 100%',
            'price' => 30000000,
            'quantity' => 1,
            'id_user' => 7,
            'city' => "Bình Dương",
            'district' => "Thị xã Tân Uyên",
            'sub_district' => "Xã Tân Vĩnh Hiệp",
            'street' => "",
            'image' => '/products/xe4.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 10,
            'name' => "Cần bán exciter 2011 57zz bs93 09c",
            'type_product' => 2,
            'description' => 'Cần tiền gấp nên ra đi xe ex 135 2011
            Cấu hinh 57zz
            Đầu 150
            Lòng 150
            Bình xăng bông mai 28
            Can 5l3
            Nồi 5 lò xo lá bố light
            Ai cần call
            biển số 93 giấy tờ đầy đủ k chính chủ',
            'price' => 16500000,
            'quantity' => 1,
            'id_user' => 8,
            'city' => "Bình Dương",
            'district' => "Thị xã Dĩ An",
            'sub_district' => "	Đông Hòa",
            'street' => "",
            'image' => '/products/xe5.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 11,
            'name' => "Bán Vinaxuki 1 Tấn Đời 2010",
            'type_product' => 2,
            'description' => 'Gia đình đổi xe lớn cần bán Xe Vinaxuki 1 Tấn Thùng Lửng- Đời 2010.
            Đăng kiểm còn dài tháng 9.2020
            Xe hoạt động tốt, máy êm. Nội thất sạch sẽ
            Mua xe chạy ngay không làm gì hết
            Anh chị cần mua liên hệ em giá tốt, mua bán vui vẻ nhiệt tình.',
            'price' => 6500000,
            'quantity' => 1,
            'id_user' => 9,
            'city' => "Hồ Chí Minh",
            'district' => "12",
            'sub_district' => "Thới An",
            'street' => "",
            'image' => '/products/xe6.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 12,
            'name' => "Honda lead máy zin ngay chu",
            'type_product' => 2,
            'description' => 'Xe chính chủ xe nhà mình đi,vẫn đi lại bình thường, máy móc nguyên bản, đi rất êm, biển sài gòn hình thức như xe mới,k một vết xước,hình sao xe vậy, giá mình có bớt chút ạ.',
            'price' => 15700000,
            'quantity' => 1,
            'id_user' => 4,
            'city' => "Hồ Chí Minh",
            'district' => "3",
            'sub_district' => "",
            'street' => "",
            'image' => '/products/xe7.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 13,
            'name' => "Xipo satria thanh lý công an sóc trăng bao gốc ủy",
            'type_product' => 2,
            'description' => 'Xipo satria thanh lý công an sóc trăng bao gốc hợp pháp ủy quyền chính chủ bao chạy hợp pháp toàn quốc anh em có dài sang tên được luôn nhé',
            'price' => 46000000,
            'quantity' => 1,
            'id_user' => 5,
            'city' => "Cần Thơ",
            'district' => "Ninh Kiều",
            'sub_district' => "An Khánh",
            'street' => "",
            'image' => '/products/xe8.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 14,
            'name' => "Yamaha Nouvo lx 135 biển VIP",
            'type_product' => 2,
            'description' => 'Bán Yamaha Nouvo lx 135 biển VIP xe zin hết nguyên con từ a đến z ngoại hình leng keng máy móc ngon êm ru không hú hí mua bán tại nhà viết giấy cửa hàng bao tranh chấp',
            'price' => 8000000,
            'quantity' => 1,
            'id_user' => 6,
            'city' => "Hồ Chí Minh",
            'district' => "Gò Vấp",
            'sub_district' => "12",
            'street' => "",
            'image' => '/products/xe9.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 15,
            'name' => "Salon Đức Trí - Bán Mercedes E200 Model 2017",
            'type_product' => 2,
            'description' => 'Mercedes_Benz E200 Model 2017.
            Sản xuất cuối 2016, ĐKLD 2017.
            Màu xanh Canvansite, nội thất Kem.
            Trang bị: Cửa hít, cốp điện, đèn pha LED High Performance, đèn viền nội thất 64 màu, camera lùi, vô lăng nút cảm ứng mới, rèm che nắng,...
            Tên công ty xuất ra cá nhân, 1 chủ từ đầu. Cực kỳ chăm xe không 1 vết xước. Đã lên dàn lốp mới tinh đi siêu êm. Nội thất được chăm sóc bọc kỹ càng nên ghế da nappa gần như mới nguyên. Tổng thể xe siêu mới như lướt, vận hành ổn định không 1 lỗi nhỏ.
            Cam kết xe không đâm đụng, không ngập nước.
            Test xe, check hãng theo yêu cầu.',
            'price' => 1450000000,
            'quantity' => 1,
            'id_user' => 6,
            'city' => "Hà Nội",
            'district' => "Cầu Giấy",
            'sub_district' => "",
            'street' => "",
            'image' => '/products/xe10.jpg',
        ]);

        //Quần áo
        DB::table('products')->insert([
            'id' => 16,
            'name' => "2 LỚP VẢI KHÁNG KHUẨN",
            'type_product' => 3,
            'description' => '-VẢI ĐẠT CHUẨN QUỐC TẾ,KHÔNG CHỨA CHẤT ĐỘC HẠI,AN TOÀN CHO NGƯỜI SỬ DỤNG

            -KHÁNG KHUẨN 99.99% SAU 20 LẦN GIẶT
            
            - CHỐNG 98% TIA UV
            
            -CHỐNG Ố VÀNG,MỀM MẠI,THOÁNG MÁT,HỢP THỜI TRANG
            - 3 CÁI / BỊCH VỚI GIÁ LÀ : 36000vnd',
            'price' => 36000,
            'quantity' => 1,
            'id_user' => 7,
            'city' => "Đà Nẵng",
            'district' => "Hải Châu",
            'sub_district' => "Hải Châu I",
            'street' => "",
            'image' => '/products/thoitrang1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 17,
            'name' => "Quai đồng hồ da bò sáp nguyên tấm bền đẹp giá rẻ",
            'type_product' => 3,
            'description' => 'Quai da đồng hồ da bò sáp làm thủ công bao đẹp
            Có đủ kích thước 18 20 22
            Bảo hành 1 năm
            Tặng kèm chốt khoá các loại',
            'price' => 99000,
            'quantity' => 1,
            'id_user' => 8,
            'city' => "Đà Nẵng",
            'district' => "Cẩm Lệ",
            'sub_district' => "Khuê Trung",
            'street' => "",
            'image' => '/products/thoitrang2.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 18,
            'name' => "kính Rayban Avitor Wayfarer Clubmaster Authentic",
            'type_product' => 3,
            'description' => '- 🆗 Bên mình có về nhiều dòng Rayban như Aviator 3025, Wayfarer 2140, Clubmaster 3016, Roundly 3447, Rayban Justin...có đủ size và đủ màu cho các bạn chọn lựa nhé.
            - Luôn cập nhật các mẫu mới cho mọi người.
            - 🔑 Bên mình cam kết như sau:
            1. Tất cả mẫu đều là kính Rayban Authentic. Hàng xách tay 100%.
            2. Cam kết đền tiền 10tr/cây nếu là hàng copy. Hình còn là vẫn còn hàng nhé.
            3. Bao test, check soi rọi ở các store để mọi người an tâm.
            4. Tất cả đều là hàng fullbox ( bao da, khăn lau và catolouge ).
            5. Giá chỉ bằng 1/2 giá Store chính hãng ( mọi người xem mẫu và giá ở dưới nhé )
            
            - 🚕 Mua hàng trực tiếp tại:
            125/52 Đinh Tiên Hoàng Phường 3, quận Bình Thạnh
            Call: ( Zalo, imess, call )
            => Add ZALO để xem nhiều mẫu hơn và giá.',
            'price' => 2600000,
            'quantity' => 1,
            'id_user' => 9,
            'city' => "Hồ Chí Minh",
            'district' => "Bình Thạnh",
            'sub_district' => "3",
            'street' => "",
            'image' => '/products/thoitrang3.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 19,
            'name' => "Set quần dài đồng giá 99k",
            'type_product' => 3,
            'description' => 'Chất liệu thoải mái, lên from bao xinh, dễ mặc, cưng lém nha các tình yêu 😍giá siêu mềm..👍',
            'price' => 99000,
            'quantity' => 1,
            'id_user' => 4,
            'city' => "Phan Rang-Tháp Chàm, Ninh Thuận",
            'district' => "",
            'sub_district' => "Kinh Dinh",
            'street' => "",
            'image' => '/products/thoitrang4.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 20,
            'name' => "Cần nhượng lại quần da Dainese size 52",
            'type_product' => 3,
            'description' => 'Thanh lý quần da Dainese size 52 giá hữu nghị, phù hợp cho bạn nào cao 1m65 - 1m7',
            'price' => 3500000,
            'quantity' => 1,
            'id_user' => 5,
            'city' => "Hồ Chí Minh",
            'district' => "5",
            'sub_district' => "13",
            'street' => "",
            'image' => '/products/thoitrang5.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 21,
            'name' => "Áo phông nam hàng hiệu 2hand chuẩn hãng xịn mới",
            'type_product' => 3,
            'description' => 'Tiếp tục về thêm lô hàng hiệu chuẩn xịn, mới tinh
            ✔Áo phông hàng hiệu âu mỹ chuẩn hiệu
            ✔Form từ 67-77kg mặc vừa, chất coton vải mát mặc hè rất thoải mái
            👉👉Ai ưng nhắn tin và kết bạn da lô em có nhiều mẫu
            👉👉Nhấn theo dõi chợ thốt cập nhật thêm mẫu',
            'price' => 250000,
            'quantity' => 1,
            'id_user' => 5,
            'city' => "Hà Nội",
            'district' => "Nam Từ Liêm",
            'sub_district' => "",
            'street' => "",
            'image' => '/products/thoitrang6.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 22,
            'name' => "GIÀY PUMA SIZE 45 US 11",
            'type_product' => 3,
            'description' => 'Cần bán lại đôi Sneaker Puma vì không thích nữa
            Hàng Order. Size 45 - us 11 chính hãng
            còn mới cáu bạn nào mua liên hệ mình nhé',
            'price' => 1260000,
            'quantity' => 1,
            'id_user' => 4,
            'city' => "Hồ Chí Minh",
            'district' => "Thủ Đức",
            'sub_district' => "Trường Thọ",
            'street' => "",
            'image' => '/products/thoitrang7.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 23,
            'name' => "Sneaker , giày nữ",
            'type_product' => 3,
            'description' => 'Giày mới 100% , độn 7 phân , có thể xem hàng trước',
            'price' => 219000,
            'quantity' => 1,
            'id_user' => 4,
            'city' => "Hồ Chí Minh",
            'district' => "Tân Bình",
            'sub_district' => "2",
            'street' => "",
            'image' => '/products/thoitrang8.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 24,
            'name' => "đồng hồ technos",
            'type_product' => 3,
            'description' => 'Đồng hồ nam
            Technos sky ligt automatic
            mặt vàng chanh cực đẹp
            võ bọc vàng
            kính cứng dày
            máy tự động 1 lịch
            size 35mm
            nguyên zin',
            'price' => 2300000,
            'quantity' => 1,
            'id_user' => 6,
            'city' => "Hồ Chí Minh",
            'district' => "Tân Phú",
            'sub_district' => "Sơn Kỳ",
            'street' => "",
            'image' => '/products/thoitrang9.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 25,
            'name' => "TÚI ĐEO HÔNG",
            'type_product' => 3,
            'description' => 'Gọi trực tiếp hoặc nhắn tin chotot

            Không nhận sms
            
            Tin còn sản phẩm còn',
            'price' => 50000,
            'quantity' => 1,
            'id_user' => 7,
            'city' => "Cần Thơ",
            'district' => "Ninh Kiều",
            'sub_district' => "An Nghiệp",
            'street' => "",
            'image' => '/products/thoitrang10.jpg',
        ]);

        //Dụng cụ gia dụng
        DB::table('products')->insert([
            'id' => 26,
            'name' => "Bộ Sofa gốc L",
            'type_product' => 4,
            'description' => 'Đó chuyển qua căn hộ nhỏ nên mình cần thanh lý bộ sofa chữ L, kích thước 2.2mx1.9m, như hình. Bạn nào có nhu cầu liên hệ mình nha. Phương',
            'price' => 2500000,
            'quantity' => 1,
            'id_user' => 7,
            'city' => "Hồ Chí Minh",
            'district' => "7",
            'sub_district' => "Phú Mỹ",
            'street' => "",
            'image' => '/products/giadung1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 27,
            'name' => "Ván ốp tường",
            'type_product' => 4,
            'description' => 'NSX: Thịnh Phát
            Kích thước: mặt 100mm x dầy 16mm x dài 500mm
            Làm từ gỗ tự nhiên đã qua sấy khô, không cong vênh, không mói mọt và được sơn phủ PU 2 lớp
            Giá sản phẩm tính/m2, bao gồm keo dán tường 2 thành phần. chưa bao gồm chỉ góc
            Bản hành 2 năm',
            'price' => 570000,
            'quantity' => 1,
            'id_user' => 7,
            'city' => "Hồ Chí Minh",
            'district' => "12",
            'sub_district' => "Thạnh Xuân",
            'street' => "",
            'image' => '/products/giadung2.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 28,
            'name' => "máy xay cầm tay mini",
            'type_product' => 4,
            'description' => 'Được tặng không dùng nên bán lại, máy chạy pin có dây sạc, mới 100%',
            'price' => 110000,
            'quantity' => 1,
            'id_user' => 8,
            'city' => "Đà Nẵng",
            'district' => "Thanh Khê",
            'sub_district' => "Thanh Khê Tây",
            'street' => "",
            'image' => '/products/giadung3.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 29,
            'name' => "BÁN BỘ BÀN ĂN 8 GHẾ GỖ CĂM XE",
            'type_product' => 4,
            'description' => 'MỚI 90%
            QUÝ KHÁCH MUA HÀNG XEM TRỰC TIẾP TẠI
            CHỢ ĐỒ CŨ, VÒNG XOAY CỬA LẤP, P.12',
            'price' => 14500000,
            'quantity' => 1,
            'id_user' => 9,
            'city' => "Bà Rịa - Vũng Tàu",
            'district' => "",
            'sub_district' => "12",
            'street' => "",
            'image' => '/products/giadung4.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 30,
            'name' => "NỒI CHIÊN KHÔNG DẦU NINE SHEI-8L",
            'type_product' => 4,
            'description' => '👉👉👉 CẦN TÌM SỈ SỐ LƯỢN LỚN !
            👉NỒI CHIÊN KHÔNG DẦU NINE SHIELD- 8L
            ‼️ Giải phóng sức lao động của chị em thời hiện đại 4.0 với
            🔜 𝐍𝐎̂̀𝐈 𝐂𝐇𝐈𝐄̂𝐍 𝐊𝐇𝐎̂𝐍𝐆 𝐃𝐀̂̀𝐔 𝐍𝐈𝐍𝐄 𝐒𝐇𝐈𝐄𝐋𝐃 𝟖𝐋
            👉Gía Lẻ #1450k,Gía Sỉ Ib
            
            💯 Dung tích 8 lít.
            Chiên luôn cả 1 con gà to 😂
            ⛔️ Top sản phẩm #Nội_địa_Trung_Quốc được yêu thích 2020
            Bảo hành 6 tháng.
            💢 Đ𝐚̣̆𝐜 𝐛𝐢𝐞̣̂𝐭: Mặt kính cường lực bên trong có thể theo dõi món ăn bên trong cực xịn xò 😱😱😱
            Địa chỉ :CÔNG TY TNHH KỸ THƯƠNG VIỆT TRUNG
            Ô số 80 lô A, Nhà Vườn, KĐT mới Việt Hưng, P. Giang Biên, Q. Long Biên, TP. Hà Nội.',
            'price' => 1450000,
            'quantity' => 1,
            'id_user' => 9,
            'city' => "Hà Nội",
            'district' => "Long Biên",
            'sub_district' => "Việt Hưng",
            'street' => "",
            'image' => '/products/giadung5.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 31,
            'name' => "bộ sofa màu nâu da để cho căn hộ 4 món mới",
            'type_product' => 4,
            'description' => 'thanh lý bộ sofa màu nâu đen thích hợp để cho căn hộ mới bao đẹp sang luôn ,
            bộ này mới 100% chưa qua sử dụng xưởng đóng bao cứng cáp chắc chắn sử dụng dài lâu
            chất liệu da simili dễ dàng lau chùi không sợ dơ màu này sạch sẽ để phòng khách rất đẹp
            kích thước : ghế dài 1m8 rộng 80cm cao 95cm
            ghế nhỏ dài 75cm rộng 80cm cao 95cm
            tặng kèm 1 bàn kính mới 100%
            liên hệ mình mua hàng xem hàng nha',
            'price' => 5000000,
            'quantity' => 1,
            'id_user' => 5,
            'city' => "Hồ Chí Minh",
            'district' => "Tân Phú",
            'sub_district' => "Tân Quý",
            'street' => "",
            'image' => '/products/giadung6.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 32,
            'name' => "Tủ sắt Trung Hưng mới 99%",
            'type_product' => 4,
            'description' => 'Cần bán gấp Tủ sắt Trung Hưng mới 99% mua hơn 3 tr pass lại 1tr6 . xin ko nhận tin nhắn cứ gọi trực tiếp mình sẽ bớt .cảm ơn chợ tốt duyệt tin',
            'price' => 1600000,
            'quantity' => 1,
            'id_user' => 5,
            'city' => "Hồ Chí Minh",
            'district' => "Thủ Đức",
            'sub_district' => "Tam Bình",
            'street' => "",
            'image' => '/products/giadung7.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 33,
            'name' => "Kệ Tivi co rút được",
            'type_product' => 4,
            'description' => 'Mình chuyển nhà nên bán. Kệ mua mới gàn 2T, mới dùng đc vài tháng nên còn mới nguyên. gỗ chống ẩm rất chắc chắn, co rút dài ngắn theo ý muốn.',
            'price' => 750000,
            'quantity' => 1,
            'id_user' => 4,
            'city' => "Hà Nội",
            'district' => "Hà Đông",
            'sub_district' => "Phú Lãm",
            'street' => "",
            'image' => '/products/giadung8.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 34,
            'name' => "giường tầng sắt hộp 48, tầng trên 1m4 dưới 1m6, FS",
            'type_product' => 4,
            'description' => 'Sắt trụ đứng Hộp 48: 1,4mm. Sắt trụ vạt 1,4mm. Sắt vạt 8Jem.

            Chiều cao từ mặt đất lên vạt là 35cm
            
            Màu sắc:  màu nâu, màu kem
            
            Tầng trên rộng 1m sử dụng cho 1 người, tầng dưới rộng 1m4 thích hợp cho 2-3 người sử dụng.
            
            Ngoài ra, Shop còn cung cấp giường tầng sắt giá rẻ TPHCM với các kích thước sau:
            
            1.0m x 1.2m x 2m         GIÁ 2.690.000 VND 
            
             1.0m x 1.4m x 2m         GIÁ 2.890.000 VND
            
             1.2m x 1.4m x 2m         GIÁ 3.100.000 VND
            
             1.2m x 1.6m x 2m         GIÁ 3.200.000 VND
            
             1.4m x 1.6m x 2m         GIÁ 3.400.000 VND
            
             
            Miễn phí vận chuyển nội thành Hồ Chí Minh
            
            Giao hàng nhanh linh hoạt theo yêu cầu của khách hàng
            
            Nhận hàng kiểm tra mới thanh toán',
            'price' => 2690000,
            'quantity' => 1,
            'id_user' => 6,
            'city' => "Hồ Chí Minh",
            'district' => "Tân Bình",
            'sub_district' => "7",
            'street' => "",
            'image' => '/products/giadung9.jpg',
        ]);
        DB::table('products')->insert([
            'id' => 35,
            'name' => "Tủ nhựa 3 cánh in 3d các mẫu 1m8 x 1m25 NEW",
            'type_product' => 4,
            'description' => 'Đặc điểm nổi bật của sản phẩm:
            Kích thước: 1m8 x 1m25 x 48
            Tủ nhựa Đài Loan được thiết kế rộng rãi với 3 cánh tủ tiện lợi bên trong chứa các ngăn nhỏ rất phù hợp để cất giữ quần áo và các vật dụng cần thiết cho bé và cả gia đình.
            Tủ có màu sơn trang nhã và sang trọng sẽ góp phần trang hoàng cho căn phòng của gia đình bạn thêm hoàn mỹ hơn.
            Màu sơn của tủ được pha trộn trực tiếp khi sản xuất tấm nhựa nên rất bền màu, không bị bong tróc và an toàn đối với sức khỏe của trẻ nhỏ, trẻ sơ sinh.
            Tủ nhựa được làm từ nhựa 2 lớp nên rất bền, không bị cong vênh khi vận chuyển và do ảnh hưởng của thời tiết.
            Tủ có thiết kế thuận lợi cho nhiều nhu cầu sử dụng của người dùng: Đựng đồ quần áo của cả gia đình, đựng đồ chơi của bé khi bé không sử dụng đến hay cất gọn gàng những vật dụng chưa cần dùng đến của gia đình để lần sau tiếp tục sử dụng.
            Lý do nên chọn mua tủ nhựa Đài Loan 3 buồng 2 ngăn:
            Tủ có thiết kế thuận lợi cho nhiều nhu cầu sử dụng của người dùng.
            Nhỏ gọn, không tốn diện tích sử dụng, thích hợp cho phòng có diện tích nhỏ, hẹp.
            Có thêm thiết kế ngăn nhỏ kéo ở phía dưới để đồ lót hay vật dụng cá nhân.
            Trọng lượng nhẹ, dễ dàng tháo lắp và vận chuyển, đặc biệt phù hợp với các hộ gia đình hoặc các bạn sinh viên thường xuyên phải di chuyển phòng trọ.
            Giá thành phù hợp với nhiều đối tượng khách hàng, màu sắc và kiểu dáng trang nhã.',
            'price' => 2199000,
            'quantity' => 1,
            'id_user' => 4,
            'city' => "Hồ Chí Minh",
            'district' => "Thủ Đức",
            'sub_district' => "Hiệp Bình Chánh",
            'street' => "",
            'image' => '/products/giadung10.jpg',
        ]);
    }
}
