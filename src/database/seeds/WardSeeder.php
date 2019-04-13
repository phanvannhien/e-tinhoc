<?php

use Illuminate\Database\Seeder;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode("{
\"wards\": [
	{
		\"xaid\" : 4,
		\"name\" : \"Phường Trúc Bạch\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 6,
		\"name\" : \"Phường Vĩnh Phúc\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 7,
		\"name\" : \"Phường Cống Vị\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 8,
		\"name\" : \"Phường Liễu Giai\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 10,
		\"name\" : \"Phường Nguyễn Trung Trực\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 13,
		\"name\" : \"Phường Quán Thánh\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 16,
		\"name\" : \"Phường Ngọc Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 19,
		\"name\" : \"Phường Điện Biên\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 22,
		\"name\" : \"Phường Đội Cấn\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 25,
		\"name\" : \"Phường Ngọc Khánh\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 28,
		\"name\" : \"Phường Kim Mã\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 31,
		\"name\" : \"Phường Giảng Võ\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 34,
		\"name\" : \"Phường Thành Công\",
		\"type\" : \"Phường\",
		\"maqh\" : 1
	},
	{
		\"xaid\" : 37,
		\"name\" : \"Phường Phúc Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 40,
		\"name\" : \"Phường Đồng Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 43,
		\"name\" : \"Phường Hàng Mã\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 46,
		\"name\" : \"Phường Hàng Buồm\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 49,
		\"name\" : \"Phường Hàng Đào\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 52,
		\"name\" : \"Phường Hàng Bồ\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 55,
		\"name\" : \"Phường Cửa Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 58,
		\"name\" : \"Phường Lý Thái Tổ\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 61,
		\"name\" : \"Phường Hàng Bạc\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 64,
		\"name\" : \"Phường Hàng Gai\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 67,
		\"name\" : \"Phường Chương Dương Độ\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 70,
		\"name\" : \"Phường Hàng Trống\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 73,
		\"name\" : \"Phường Cửa Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 76,
		\"name\" : \"Phường Hàng Bông\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 79,
		\"name\" : \"Phường Tràng Tiền\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 82,
		\"name\" : \"Phường Trần Hưng Đạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 85,
		\"name\" : \"Phường Phan Chu Trinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 88,
		\"name\" : \"Phường Hàng Bài\",
		\"type\" : \"Phường\",
		\"maqh\" : 2
	},
	{
		\"xaid\" : 91,
		\"name\" : \"Phường Phú Thượng\",
		\"type\" : \"Phường\",
		\"maqh\" : 3
	},
	{
		\"xaid\" : 94,
		\"name\" : \"Phường Nhật Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 3
	},
	{
		\"xaid\" : 97,
		\"name\" : \"Phường Tứ Liên\",
		\"type\" : \"Phường\",
		\"maqh\" : 3
	},
	{
		\"xaid\" : 100,
		\"name\" : \"Phường Quảng An\",
		\"type\" : \"Phường\",
		\"maqh\" : 3
	},
	{
		\"xaid\" : 103,
		\"name\" : \"Phường Xuân La\",
		\"type\" : \"Phường\",
		\"maqh\" : 3
	},
	{
		\"xaid\" : 106,
		\"name\" : \"Phường Yên Phụ\",
		\"type\" : \"Phường\",
		\"maqh\" : 3
	},
	{
		\"xaid\" : 109,
		\"name\" : \"Phường Bưởi\",
		\"type\" : \"Phường\",
		\"maqh\" : 3
	},
	{
		\"xaid\" : 112,
		\"name\" : \"Phường Thụy Khuê\",
		\"type\" : \"Phường\",
		\"maqh\" : 3
	},
	{
		\"xaid\" : 115,
		\"name\" : \"Phường Thượng Thanh\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 118,
		\"name\" : \"Phường Ngọc Thụy\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 121,
		\"name\" : \"Phường Giang Biên\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 124,
		\"name\" : \"Phường Đức Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 127,
		\"name\" : \"Phường Việt Hưng\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 130,
		\"name\" : \"Phường Gia Thụy\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 133,
		\"name\" : \"Phường Ngọc Lâm\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 136,
		\"name\" : \"Phường Phúc Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 139,
		\"name\" : \"Phường Bồ Đề\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 142,
		\"name\" : \"Phường Sài Đồng\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 145,
		\"name\" : \"Phường Long Biên\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 148,
		\"name\" : \"Phường Thạch Bàn\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 151,
		\"name\" : \"Phường Phúc Đồng\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 154,
		\"name\" : \"Phường Cự Khối\",
		\"type\" : \"Phường\",
		\"maqh\" : 4
	},
	{
		\"xaid\" : 157,
		\"name\" : \"Phường Nghĩa Đô\",
		\"type\" : \"Phường\",
		\"maqh\" : 5
	},
	{
		\"xaid\" : 160,
		\"name\" : \"Phường Nghĩa Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 5
	},
	{
		\"xaid\" : 163,
		\"name\" : \"Phường Mai Dịch\",
		\"type\" : \"Phường\",
		\"maqh\" : 5
	},
	{
		\"xaid\" : 166,
		\"name\" : \"Phường Dịch Vọng\",
		\"type\" : \"Phường\",
		\"maqh\" : 5
	},
	{
		\"xaid\" : 167,
		\"name\" : \"Phường Dịch Vọng Hậu\",
		\"type\" : \"Phường\",
		\"maqh\" : 5
	},
	{
		\"xaid\" : 169,
		\"name\" : \"Phường Quan Hoa\",
		\"type\" : \"Phường\",
		\"maqh\" : 5
	},
	{
		\"xaid\" : 172,
		\"name\" : \"Phường Yên Hoà\",
		\"type\" : \"Phường\",
		\"maqh\" : 5
	},
	{
		\"xaid\" : 175,
		\"name\" : \"Phường Trung Hoà\",
		\"type\" : \"Phường\",
		\"maqh\" : 5
	},
	{
		\"xaid\" : 178,
		\"name\" : \"Phường Cát Linh\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 181,
		\"name\" : \"Phường Văn Miếu\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 184,
		\"name\" : \"Phường Quốc Tử Giám\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 187,
		\"name\" : \"Phường Láng Thượng\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 190,
		\"name\" : \"Phường Ô Chợ Dừa\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 193,
		\"name\" : \"Phường Văn Chương\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 196,
		\"name\" : \"Phường Hàng Bột\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 199,
		\"name\" : \"Phường Láng Hạ\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 202,
		\"name\" : \"Phường Khâm Thiên\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 205,
		\"name\" : \"Phường Thổ Quan\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 208,
		\"name\" : \"Phường Nam Đồng\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 211,
		\"name\" : \"Phường Trung Phụng\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 214,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 217,
		\"name\" : \"Phường Trung Liệt\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 220,
		\"name\" : \"Phường Phương Liên\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 223,
		\"name\" : \"Phường Thịnh Quang\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 226,
		\"name\" : \"Phường Trung Tự\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 229,
		\"name\" : \"Phường Kim Liên\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 232,
		\"name\" : \"Phường Phương Mai\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 235,
		\"name\" : \"Phường Ngã Tư Sở\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 238,
		\"name\" : \"Phường Khương Thượng\",
		\"type\" : \"Phường\",
		\"maqh\" : 6
	},
	{
		\"xaid\" : 241,
		\"name\" : \"Phường Nguyễn Du\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 244,
		\"name\" : \"Phường Bạch Đằng\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 247,
		\"name\" : \"Phường Phạm Đình Hổ\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 250,
		\"name\" : \"Phường Bùi Thị Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 253,
		\"name\" : \"Phường Ngô Thì Nhậm\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 256,
		\"name\" : \"Phường Lê Đại Hành\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 259,
		\"name\" : \"Phường Đồng Nhân\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 262,
		\"name\" : \"Phường Phố Huế\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 265,
		\"name\" : \"Phường Đống Mác\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 268,
		\"name\" : \"Phường Thanh Lương\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 271,
		\"name\" : \"Phường Thanh Nhàn\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 274,
		\"name\" : \"Phường Cầu Dền\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 277,
		\"name\" : \"Phường Bách Khoa\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 280,
		\"name\" : \"Phường Đồng Tâm\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 283,
		\"name\" : \"Phường Vĩnh Tuy\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 286,
		\"name\" : \"Phường Bạch Mai\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 289,
		\"name\" : \"Phường Quỳnh Mai\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 292,
		\"name\" : \"Phường Quỳnh Lôi\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 295,
		\"name\" : \"Phường Minh Khai\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 298,
		\"name\" : \"Phường Trương Định\",
		\"type\" : \"Phường\",
		\"maqh\" : 7
	},
	{
		\"xaid\" : 301,
		\"name\" : \"Phường Thanh Trì\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 304,
		\"name\" : \"Phường Vĩnh Hưng\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 307,
		\"name\" : \"Phường Định Công\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 310,
		\"name\" : \"Phường Mai Động\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 313,
		\"name\" : \"Phường Tương Mai\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 316,
		\"name\" : \"Phường Đại Kim\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 319,
		\"name\" : \"Phường Tân Mai\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 322,
		\"name\" : \"Phường Hoàng Văn Thụ\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 325,
		\"name\" : \"Phường Giáp Bát\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 328,
		\"name\" : \"Phường Lĩnh Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 331,
		\"name\" : \"Phường Thịnh Liệt\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 334,
		\"name\" : \"Phường Trần Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 337,
		\"name\" : \"Phường Hoàng Liệt\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 340,
		\"name\" : \"Phường Yên Sở\",
		\"type\" : \"Phường\",
		\"maqh\" : 8
	},
	{
		\"xaid\" : 343,
		\"name\" : \"Phường Nhân Chính\",
		\"type\" : \"Phường\",
		\"maqh\" : 9
	},
	{
		\"xaid\" : 346,
		\"name\" : \"Phường Thượng Đình\",
		\"type\" : \"Phường\",
		\"maqh\" : 9
	},
	{
		\"xaid\" : 349,
		\"name\" : \"Phường Khương Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 9
	},
	{
		\"xaid\" : 352,
		\"name\" : \"Phường Khương Mai\",
		\"type\" : \"Phường\",
		\"maqh\" : 9
	},
	{
		\"xaid\" : 355,
		\"name\" : \"Phường Thanh Xuân Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 9
	},
	{
		\"xaid\" : 358,
		\"name\" : \"Phường Phương Liệt\",
		\"type\" : \"Phường\",
		\"maqh\" : 9
	},
	{
		\"xaid\" : 361,
		\"name\" : \"Phường Hạ Đình\",
		\"type\" : \"Phường\",
		\"maqh\" : 9
	},
	{
		\"xaid\" : 364,
		\"name\" : \"Phường Khương Đình\",
		\"type\" : \"Phường\",
		\"maqh\" : 9
	},
	{
		\"xaid\" : 367,
		\"name\" : \"Phường Thanh Xuân Bắc\",
		\"type\" : \"Phường\",
		\"maqh\" : 9
	},
	{
		\"xaid\" : 370,
		\"name\" : \"Phường Thanh Xuân Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 9
	},
	{
		\"xaid\" : 373,
		\"name\" : \"Phường Kim Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 9
	},
	{
		\"xaid\" : 376,
		\"name\" : \"Thị trấn Sóc Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 379,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 382,
		\"name\" : \"Xã Minh Trí\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 385,
		\"name\" : \"Xã Hồng Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 388,
		\"name\" : \"Xã Nam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 391,
		\"name\" : \"Xã Trung Giã\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 394,
		\"name\" : \"Xã Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 397,
		\"name\" : \"Xã Minh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 400,
		\"name\" : \"Xã Phù Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 403,
		\"name\" : \"Xã Bắc Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 406,
		\"name\" : \"Xã Tân Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 409,
		\"name\" : \"Xã Quang Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 412,
		\"name\" : \"Xã Hiền Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 415,
		\"name\" : \"Xã Tân Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 418,
		\"name\" : \"Xã Tiên Dược\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 421,
		\"name\" : \"Xã Việt Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 424,
		\"name\" : \"Xã Xuân Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 427,
		\"name\" : \"Xã Mai Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 430,
		\"name\" : \"Xã Đức Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 433,
		\"name\" : \"Xã Thanh Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 436,
		\"name\" : \"Xã Đông Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 439,
		\"name\" : \"Xã Kim Lũ\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 442,
		\"name\" : \"Xã Phú Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 445,
		\"name\" : \"Xã Phú Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 448,
		\"name\" : \"Xã Phù Lỗ\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 451,
		\"name\" : \"Xã Xuân Thu\",
		\"type\" : \"Xã\",
		\"maqh\" : 16
	},
	{
		\"xaid\" : 454,
		\"name\" : \"Thị trấn Đông Anh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 457,
		\"name\" : \"Xã Xuân Nộn\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 460,
		\"name\" : \"Xã Thuỵ Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 463,
		\"name\" : \"Xã Bắc Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 466,
		\"name\" : \"Xã Nguyên Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 469,
		\"name\" : \"Xã Nam Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 472,
		\"name\" : \"Xã Tiên Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 475,
		\"name\" : \"Xã Vân Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 478,
		\"name\" : \"Xã Uy Nỗ\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 481,
		\"name\" : \"Xã Vân Nội\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 484,
		\"name\" : \"Xã Liên Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 487,
		\"name\" : \"Xã Việt Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 490,
		\"name\" : \"Xã Kim Nỗ\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 493,
		\"name\" : \"Xã Kim Chung\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 496,
		\"name\" : \"Xã Dục Tú\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 499,
		\"name\" : \"Xã Đại Mạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 502,
		\"name\" : \"Xã Vĩnh Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 505,
		\"name\" : \"Xã Cổ Loa\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 508,
		\"name\" : \"Xã Hải Bối\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 511,
		\"name\" : \"Xã Xuân Canh\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 514,
		\"name\" : \"Xã Võng La\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 517,
		\"name\" : \"Xã Tầm Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 520,
		\"name\" : \"Xã Mai Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 523,
		\"name\" : \"Xã Đông Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 17
	},
	{
		\"xaid\" : 526,
		\"name\" : \"Thị trấn Yên Viên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 529,
		\"name\" : \"Xã Yên Thường\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 532,
		\"name\" : \"Xã Yên Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 535,
		\"name\" : \"Xã Ninh Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 538,
		\"name\" : \"Xã Đình Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 541,
		\"name\" : \"Xã Dương Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 544,
		\"name\" : \"Xã Phù Đổng\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 547,
		\"name\" : \"Xã Trung Mầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 550,
		\"name\" : \"Xã Lệ Chi\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 553,
		\"name\" : \"Xã Cổ Bi\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 556,
		\"name\" : \"Xã Đặng Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 559,
		\"name\" : \"Xã Phú Thị\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 562,
		\"name\" : \"Xã Kim Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 565,
		\"name\" : \"Thị trấn Trâu Quỳ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 568,
		\"name\" : \"Xã Dương Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 571,
		\"name\" : \"Xã Dương Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 574,
		\"name\" : \"Xã Đông Dư\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 577,
		\"name\" : \"Xã Đa Tốn\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 580,
		\"name\" : \"Xã Kiêu Kỵ\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 583,
		\"name\" : \"Xã Bát Tràng\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 586,
		\"name\" : \"Xã Kim Lan\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 589,
		\"name\" : \"Xã Văn Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 18
	},
	{
		\"xaid\" : 592,
		\"name\" : \"Phường Cầu Diễn\",
		\"type\" : \"Phường\",
		\"maqh\" : 19
	},
	{
		\"xaid\" : 595,
		\"name\" : \"Phường Thượng Cát\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 598,
		\"name\" : \"Phường Liên Mạc\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 601,
		\"name\" : \"Phường Đông Ngạc\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 602,
		\"name\" : \"Phường Đức Thắng\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 604,
		\"name\" : \"Phường Thụy Phương\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 607,
		\"name\" : \"Phường Tây Tựu\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 610,
		\"name\" : \"Phường Xuân Đỉnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 611,
		\"name\" : \"Phường Xuân Tảo\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 613,
		\"name\" : \"Phường Minh Khai\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 616,
		\"name\" : \"Phường Cổ Nhuế 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 617,
		\"name\" : \"Phường Cổ Nhuế 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 619,
		\"name\" : \"Phường Phú Diễn\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 620,
		\"name\" : \"Phường Phúc Diễn\",
		\"type\" : \"Phường\",
		\"maqh\" : 21
	},
	{
		\"xaid\" : 622,
		\"name\" : \"Phường Xuân Phương\",
		\"type\" : \"Phường\",
		\"maqh\" : 19
	},
	{
		\"xaid\" : 623,
		\"name\" : \"Phường Phương Canh\",
		\"type\" : \"Phường\",
		\"maqh\" : 19
	},
	{
		\"xaid\" : 625,
		\"name\" : \"Phường Mỹ Đình 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 19
	},
	{
		\"xaid\" : 626,
		\"name\" : \"Phường Mỹ Đình 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 19
	},
	{
		\"xaid\" : 628,
		\"name\" : \"Phường Tây Mỗ\",
		\"type\" : \"Phường\",
		\"maqh\" : 19
	},
	{
		\"xaid\" : 631,
		\"name\" : \"Phường Mễ Trì\",
		\"type\" : \"Phường\",
		\"maqh\" : 19
	},
	{
		\"xaid\" : 632,
		\"name\" : \"Phường Phú Đô\",
		\"type\" : \"Phường\",
		\"maqh\" : 19
	},
	{
		\"xaid\" : 634,
		\"name\" : \"Phường Đại Mỗ\",
		\"type\" : \"Phường\",
		\"maqh\" : 19
	},
	{
		\"xaid\" : 637,
		\"name\" : \"Phường Trung Văn\",
		\"type\" : \"Phường\",
		\"maqh\" : 19
	},
	{
		\"xaid\" : 640,
		\"name\" : \"Thị trấn Văn Điển\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 643,
		\"name\" : \"Xã Tân Triều\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 646,
		\"name\" : \"Xã Thanh Liệt\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 649,
		\"name\" : \"Xã Tả Thanh Oai\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 652,
		\"name\" : \"Xã Hữu Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 655,
		\"name\" : \"Xã Tam Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 658,
		\"name\" : \"Xã Tứ Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 661,
		\"name\" : \"Xã Yên Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 664,
		\"name\" : \"Xã Vĩnh Quỳnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 667,
		\"name\" : \"Xã Ngũ Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 670,
		\"name\" : \"Xã Duyên Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 673,
		\"name\" : \"Xã Ngọc Hồi\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 676,
		\"name\" : \"Xã Vạn Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 679,
		\"name\" : \"Xã Đại áng\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 682,
		\"name\" : \"Xã Liên Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 685,
		\"name\" : \"Xã Đông Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 20
	},
	{
		\"xaid\" : 688,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 24
	},
	{
		\"xaid\" : 691,
		\"name\" : \"Phường Trần Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 24
	},
	{
		\"xaid\" : 692,
		\"name\" : \"Phường Ngọc Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 24
	},
	{
		\"xaid\" : 694,
		\"name\" : \"Phường Nguyễn Trãi\",
		\"type\" : \"Phường\",
		\"maqh\" : 24
	},
	{
		\"xaid\" : 697,
		\"name\" : \"Phường Minh Khai\",
		\"type\" : \"Phường\",
		\"maqh\" : 24
	},
	{
		\"xaid\" : 700,
		\"name\" : \"Xã Ngọc Đường\",
		\"type\" : \"Xã\",
		\"maqh\" : 24
	},
	{
		\"xaid\" : 703,
		\"name\" : \"Xã Kim Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 706,
		\"name\" : \"Xã Phú Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 709,
		\"name\" : \"Xã Kim Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 712,
		\"name\" : \"Thị trấn Phó Bảng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 715,
		\"name\" : \"Xã Lũng Cú\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 718,
		\"name\" : \"Xã Má Lé\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 721,
		\"name\" : \"Thị trấn Đồng Văn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 724,
		\"name\" : \"Xã Lũng Táo\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 727,
		\"name\" : \"Xã Phố Là\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 730,
		\"name\" : \"Xã Thài Phìn Tủng\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 733,
		\"name\" : \"Xã Sủng Là\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 736,
		\"name\" : \"Xã Xà Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 739,
		\"name\" : \"Xã Tả Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 742,
		\"name\" : \"Xã Tả Lủng\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 745,
		\"name\" : \"Xã Phố Cáo\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 748,
		\"name\" : \"Xã Sính Lủng\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 751,
		\"name\" : \"Xã Sảng Tủng\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 754,
		\"name\" : \"Xã Lũng Thầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 757,
		\"name\" : \"Xã Hố Quáng Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 760,
		\"name\" : \"Xã Vần Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 763,
		\"name\" : \"Xã Lũng Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 766,
		\"name\" : \"Xã Sủng Trái\",
		\"type\" : \"Xã\",
		\"maqh\" : 26
	},
	{
		\"xaid\" : 769,
		\"name\" : \"Thị trấn Mèo Vạc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 772,
		\"name\" : \"Xã Thượng Phùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 775,
		\"name\" : \"Xã Pải Lủng\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 778,
		\"name\" : \"Xã Xín Cái\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 781,
		\"name\" : \"Xã Pả Vi\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 784,
		\"name\" : \"Xã Giàng Chu Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 787,
		\"name\" : \"Xã Sủng Trà\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 790,
		\"name\" : \"Xã Sủng Máng\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 793,
		\"name\" : \"Xã Sơn Vĩ\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 796,
		\"name\" : \"Xã Tả Lủng\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 799,
		\"name\" : \"Xã Cán Chu Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 802,
		\"name\" : \"Xã Lũng Pù\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 805,
		\"name\" : \"Xã Lũng Chinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 808,
		\"name\" : \"Xã Tát Ngà\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 811,
		\"name\" : \"Xã Nậm Ban\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 814,
		\"name\" : \"Xã Khâu Vai\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 815,
		\"name\" : \"Xã Niêm Tòng\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 817,
		\"name\" : \"Xã Niêm Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 27
	},
	{
		\"xaid\" : 820,
		\"name\" : \"Thị trấn Yên Minh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 823,
		\"name\" : \"Xã Thắng Mố\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 826,
		\"name\" : \"Xã Phú Lũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 829,
		\"name\" : \"Xã Sủng Tráng\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 832,
		\"name\" : \"Xã Bạch Đích\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 835,
		\"name\" : \"Xã Na Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 838,
		\"name\" : \"Xã Sủng Thài\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 841,
		\"name\" : \"Xã Hữu Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 844,
		\"name\" : \"Xã Lao Và Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 847,
		\"name\" : \"Xã Mậu Duệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 850,
		\"name\" : \"Xã Đông Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 853,
		\"name\" : \"Xã Mậu Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 856,
		\"name\" : \"Xã Ngam La\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 859,
		\"name\" : \"Xã Ngọc Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 862,
		\"name\" : \"Xã Đường Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 865,
		\"name\" : \"Xã Lũng Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 868,
		\"name\" : \"Xã Du Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 871,
		\"name\" : \"Xã Du Già\",
		\"type\" : \"Xã\",
		\"maqh\" : 28
	},
	{
		\"xaid\" : 874,
		\"name\" : \"Thị trấn Tam Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 877,
		\"name\" : \"Xã Bát Đại Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 880,
		\"name\" : \"Xã Nghĩa Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 883,
		\"name\" : \"Xã Cán Tỷ\",
		\"type\" : \"Xã\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 886,
		\"name\" : \"Xã Cao Mã Pờ\",
		\"type\" : \"Xã\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 889,
		\"name\" : \"Xã Thanh Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 892,
		\"name\" : \"Xã Tùng Vài\",
		\"type\" : \"Xã\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 895,
		\"name\" : \"Xã Đông Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 898,
		\"name\" : \"Xã Quản Bạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 901,
		\"name\" : \"Xã Lùng Tám\",
		\"type\" : \"Xã\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 904,
		\"name\" : \"Xã Quyết Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 907,
		\"name\" : \"Xã Tả Ván\",
		\"type\" : \"Xã\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 910,
		\"name\" : \"Xã Thái An\",
		\"type\" : \"Xã\",
		\"maqh\" : 29
	},
	{
		\"xaid\" : 913,
		\"name\" : \"Thị trấn Vị Xuyên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 916,
		\"name\" : \"Thị trấn Nông Trường Việt Lâm\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 919,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 922,
		\"name\" : \"Xã Thuận Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 925,
		\"name\" : \"Xã Tùng Bá\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 928,
		\"name\" : \"Xã Thanh Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 931,
		\"name\" : \"Xã Thanh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 934,
		\"name\" : \"Xã Phong Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 937,
		\"name\" : \"Xã Xín Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 940,
		\"name\" : \"Xã Phương Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 943,
		\"name\" : \"Xã Lao Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 946,
		\"name\" : \"Xã Phương Độ\",
		\"type\" : \"Xã\",
		\"maqh\" : 24
	},
	{
		\"xaid\" : 949,
		\"name\" : \"Xã Phương Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 24
	},
	{
		\"xaid\" : 952,
		\"name\" : \"Xã Cao Bồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 955,
		\"name\" : \"Xã Đạo Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 958,
		\"name\" : \"Xã Thượng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 961,
		\"name\" : \"Xã Linh Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 964,
		\"name\" : \"Xã Quảng Ngần\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 967,
		\"name\" : \"Xã Việt Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 970,
		\"name\" : \"Xã Ngọc Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 973,
		\"name\" : \"Xã Ngọc Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 976,
		\"name\" : \"Xã Bạch Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 979,
		\"name\" : \"Xã Trung Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 30
	},
	{
		\"xaid\" : 982,
		\"name\" : \"Xã Minh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 985,
		\"name\" : \"Xã Giáp Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 988,
		\"name\" : \"Xã Yên Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 991,
		\"name\" : \"Thị trấn Yên Phú\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 994,
		\"name\" : \"Xã Minh Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 997,
		\"name\" : \"Xã Yên Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 1000,
		\"name\" : \"Xã Lạc Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 1003,
		\"name\" : \"Xã Phú Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 1006,
		\"name\" : \"Xã Yên Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 1009,
		\"name\" : \"Xã Thượng Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 1012,
		\"name\" : \"Xã Đường Âm\",
		\"type\" : \"Xã\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 1015,
		\"name\" : \"Xã Đường Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 1018,
		\"name\" : \"Xã Phiêng Luông\",
		\"type\" : \"Xã\",
		\"maqh\" : 31
	},
	{
		\"xaid\" : 1021,
		\"name\" : \"Thị trấn Vinh Quang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1024,
		\"name\" : \"Xã Bản Máy\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1027,
		\"name\" : \"Xã Thàng Tín\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1030,
		\"name\" : \"Xã Thèn Chu Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1033,
		\"name\" : \"Xã Pố Lồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1036,
		\"name\" : \"Xã Bản Phùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1039,
		\"name\" : \"Xã Túng Sán\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1042,
		\"name\" : \"Xã Chiến Phố\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1045,
		\"name\" : \"Xã Đản Ván\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1048,
		\"name\" : \"Xã Tụ Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1051,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1054,
		\"name\" : \"Xã Nàng Đôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1057,
		\"name\" : \"Xã Pờ Ly Ngài\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1060,
		\"name\" : \"Xã Sán Xả Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1063,
		\"name\" : \"Xã Bản Luốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1066,
		\"name\" : \"Xã Ngàm Đăng Vài\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1069,
		\"name\" : \"Xã Bản Nhùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1072,
		\"name\" : \"Xã Tả Sử Choóng\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1075,
		\"name\" : \"Xã Nậm Dịch\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1078,
		\"name\" : \"Xã Bản Péo\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1081,
		\"name\" : \"Xã Hồ Thầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1084,
		\"name\" : \"Xã Nam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1087,
		\"name\" : \"Xã Nậm Tỵ\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1090,
		\"name\" : \"Xã Thông Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1093,
		\"name\" : \"Xã Nậm Khòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 32
	},
	{
		\"xaid\" : 1096,
		\"name\" : \"Thị trấn Cốc Pài\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1099,
		\"name\" : \"Xã Nàn Xỉn\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1102,
		\"name\" : \"Xã Bản Díu\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1105,
		\"name\" : \"Xã Chí Cà\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1108,
		\"name\" : \"Xã Xín Mần\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1111,
		\"name\" : \"Xã Trung Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1114,
		\"name\" : \"Xã Thèn Phàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1117,
		\"name\" : \"Xã Ngán Chiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1120,
		\"name\" : \"Xã Pà Vầy Sủ\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1123,
		\"name\" : \"Xã Cốc Rế\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1126,
		\"name\" : \"Xã Thu Tà\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1129,
		\"name\" : \"Xã Nàn Ma\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1132,
		\"name\" : \"Xã Tả Nhìu\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1135,
		\"name\" : \"Xã Bản Ngò\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1138,
		\"name\" : \"Xã Chế Là\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1141,
		\"name\" : \"Xã Nấm Dẩn\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1144,
		\"name\" : \"Xã Quảng Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1147,
		\"name\" : \"Xã Nà Chì\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1150,
		\"name\" : \"Xã Khuôn Lùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 33
	},
	{
		\"xaid\" : 1153,
		\"name\" : \"Thị trấn Việt Quang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1156,
		\"name\" : \"Thị trấn Vĩnh Tuy\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1159,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1162,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1165,
		\"name\" : \"Xã Đồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1168,
		\"name\" : \"Xã Đồng Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1171,
		\"name\" : \"Xã Tân Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1174,
		\"name\" : \"Xã Thượng Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1177,
		\"name\" : \"Xã Hữu Sản\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1180,
		\"name\" : \"Xã Kim Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1183,
		\"name\" : \"Xã Việt Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1186,
		\"name\" : \"Xã Bằng Hành\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1189,
		\"name\" : \"Xã Quang Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1192,
		\"name\" : \"Xã Liên Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1195,
		\"name\" : \"Xã Vô Điếm\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1198,
		\"name\" : \"Xã Việt Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1201,
		\"name\" : \"Xã Hùng An\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1204,
		\"name\" : \"Xã Đức Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1207,
		\"name\" : \"Xã Tiên Kiều\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1210,
		\"name\" : \"Xã Vĩnh Hảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1213,
		\"name\" : \"Xã Vĩnh Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1216,
		\"name\" : \"Xã Đồng Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1219,
		\"name\" : \"Xã Đông Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 34
	},
	{
		\"xaid\" : 1222,
		\"name\" : \"Xã Xuân Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1225,
		\"name\" : \"Xã Tiên Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1228,
		\"name\" : \"Xã Tân Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1231,
		\"name\" : \"Xã Bản Rịa\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1234,
		\"name\" : \"Xã Yên Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1237,
		\"name\" : \"Thị trấn Yên Bình\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1240,
		\"name\" : \"Xã Tân Trịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1243,
		\"name\" : \"Xã Tân Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1246,
		\"name\" : \"Xã Bằng Lang\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1249,
		\"name\" : \"Xã Yên Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1252,
		\"name\" : \"Xã Hương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1255,
		\"name\" : \"Xã Xuân Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1258,
		\"name\" : \"Xã Nà Khương\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1261,
		\"name\" : \"Xã Tiên Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1264,
		\"name\" : \"Xã Vĩ Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 35
	},
	{
		\"xaid\" : 1267,
		\"name\" : \"Phường Sông Hiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 40
	},
	{
		\"xaid\" : 1270,
		\"name\" : \"Phường Sông Bằng\",
		\"type\" : \"Phường\",
		\"maqh\" : 40
	},
	{
		\"xaid\" : 1273,
		\"name\" : \"Phường Hợp Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 40
	},
	{
		\"xaid\" : 1276,
		\"name\" : \"Phường Tân Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 40
	},
	{
		\"xaid\" : 1279,
		\"name\" : \"Phường Ngọc Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 40
	},
	{
		\"xaid\" : 1282,
		\"name\" : \"Phường Đề Thám\",
		\"type\" : \"Phường\",
		\"maqh\" : 40
	},
	{
		\"xaid\" : 1285,
		\"name\" : \"Phường Hoà Chung\",
		\"type\" : \"Phường\",
		\"maqh\" : 40
	},
	{
		\"xaid\" : 1288,
		\"name\" : \"Phường Duyệt Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 40
	},
	{
		\"xaid\" : 1290,
		\"name\" : \"Thị trấn Pác Miầu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1291,
		\"name\" : \"Xã Đức Hạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1294,
		\"name\" : \"Xã Lý Bôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1296,
		\"name\" : \"Xã Nam Cao\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1297,
		\"name\" : \"Xã Nam Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1300,
		\"name\" : \"Xã Vĩnh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1303,
		\"name\" : \"Xã Quảng Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1304,
		\"name\" : \"Xã Thạch Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1306,
		\"name\" : \"Xã Tân Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1309,
		\"name\" : \"Xã Vĩnh Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1312,
		\"name\" : \"Xã Mông Ân\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1315,
		\"name\" : \"Xã Thái Học\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1316,
		\"name\" : \"Xã Thái Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1318,
		\"name\" : \"Xã Yên Thổ\",
		\"type\" : \"Xã\",
		\"maqh\" : 42
	},
	{
		\"xaid\" : 1321,
		\"name\" : \"Thị trấn Bảo Lạc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1324,
		\"name\" : \"Xã Cốc Pàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1327,
		\"name\" : \"Xã Thượng Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1330,
		\"name\" : \"Xã Cô Ba\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1333,
		\"name\" : \"Xã Bảo Toàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1336,
		\"name\" : \"Xã Khánh Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1339,
		\"name\" : \"Xã Xuân Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1342,
		\"name\" : \"Xã Hồng Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1343,
		\"name\" : \"Xã Kim Cúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1345,
		\"name\" : \"Xã Phan Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1348,
		\"name\" : \"Xã Hồng An\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1351,
		\"name\" : \"Xã Hưng Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1352,
		\"name\" : \"Xã Hưng Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1354,
		\"name\" : \"Xã Huy Giáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1357,
		\"name\" : \"Xã Đình Phùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1359,
		\"name\" : \"Xã Sơn Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1360,
		\"name\" : \"Xã Sơn Lộ\",
		\"type\" : \"Xã\",
		\"maqh\" : 43
	},
	{
		\"xaid\" : 1363,
		\"name\" : \"Thị trấn Thông Nông\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 44
	},
	{
		\"xaid\" : 1366,
		\"name\" : \"Xã Cần Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 44
	},
	{
		\"xaid\" : 1367,
		\"name\" : \"Xã Cần Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 44
	},
	{
		\"xaid\" : 1369,
		\"name\" : \"Xã Vị Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 44
	},
	{
		\"xaid\" : 1372,
		\"name\" : \"Xã Lương Thông\",
		\"type\" : \"Xã\",
		\"maqh\" : 44
	},
	{
		\"xaid\" : 1375,
		\"name\" : \"Xã Đa Thông\",
		\"type\" : \"Xã\",
		\"maqh\" : 44
	},
	{
		\"xaid\" : 1378,
		\"name\" : \"Xã Ngọc Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 44
	},
	{
		\"xaid\" : 1381,
		\"name\" : \"Xã Yên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 44
	},
	{
		\"xaid\" : 1384,
		\"name\" : \"Xã Lương Can\",
		\"type\" : \"Xã\",
		\"maqh\" : 44
	},
	{
		\"xaid\" : 1387,
		\"name\" : \"Xã Thanh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 44
	},
	{
		\"xaid\" : 1390,
		\"name\" : \"Xã Bình Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 44
	},
	{
		\"xaid\" : 1392,
		\"name\" : \"Thị trấn Xuân Hòa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1393,
		\"name\" : \"Xã Lũng Nặm\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1396,
		\"name\" : \"Xã Kéo Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1399,
		\"name\" : \"Xã Trường Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1402,
		\"name\" : \"Xã Vân An\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1405,
		\"name\" : \"Xã Cải Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1408,
		\"name\" : \"Xã Nà Sác\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1411,
		\"name\" : \"Xã Nội Thôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1414,
		\"name\" : \"Xã Tổng Cọt\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1417,
		\"name\" : \"Xã Sóc Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1420,
		\"name\" : \"Xã Thượng Thôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1423,
		\"name\" : \"Xã Vần Dính\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1426,
		\"name\" : \"Xã Hồng Sĩ\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1429,
		\"name\" : \"Xã Sĩ Hai\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1432,
		\"name\" : \"Xã Quý Quân\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1435,
		\"name\" : \"Xã Mã Ba\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1438,
		\"name\" : \"Xã Phù Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1441,
		\"name\" : \"Xã Đào Ngạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1444,
		\"name\" : \"Xã Hạ Thôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 45
	},
	{
		\"xaid\" : 1447,
		\"name\" : \"Thị trấn Hùng Quốc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 46
	},
	{
		\"xaid\" : 1450,
		\"name\" : \"Xã Cô Mười\",
		\"type\" : \"Xã\",
		\"maqh\" : 46
	},
	{
		\"xaid\" : 1453,
		\"name\" : \"Xã Tri Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 46
	},
	{
		\"xaid\" : 1456,
		\"name\" : \"Xã Quang Hán\",
		\"type\" : \"Xã\",
		\"maqh\" : 46
	},
	{
		\"xaid\" : 1459,
		\"name\" : \"Xã Quang Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 46
	},
	{
		\"xaid\" : 1462,
		\"name\" : \"Xã Xuân Nội\",
		\"type\" : \"Xã\",
		\"maqh\" : 46
	},
	{
		\"xaid\" : 1465,
		\"name\" : \"Xã Quang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 46
	},
	{
		\"xaid\" : 1468,
		\"name\" : \"Xã Lưu Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 46
	},
	{
		\"xaid\" : 1471,
		\"name\" : \"Xã Cao Chương\",
		\"type\" : \"Xã\",
		\"maqh\" : 46
	},
	{
		\"xaid\" : 1474,
		\"name\" : \"Xã Quốc Toản\",
		\"type\" : \"Xã\",
		\"maqh\" : 46
	},
	{
		\"xaid\" : 1477,
		\"name\" : \"Thị trấn Trùng Khánh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1480,
		\"name\" : \"Xã Ngọc Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1481,
		\"name\" : \"Xã Ngọc Côn\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1483,
		\"name\" : \"Xã Phong Nậm\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1486,
		\"name\" : \"Xã Ngọc Chung\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1489,
		\"name\" : \"Xã Đình Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1492,
		\"name\" : \"Xã Lăng Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1495,
		\"name\" : \"Xã Đàm Thuỷ\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1498,
		\"name\" : \"Xã Khâm Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1501,
		\"name\" : \"Xã Chí Viễn\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1504,
		\"name\" : \"Xã Lăng Hiếu\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1507,
		\"name\" : \"Xã Phong Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1510,
		\"name\" : \"Xã Đình Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1513,
		\"name\" : \"Xã Cảnh Tiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1516,
		\"name\" : \"Xã Trung Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1519,
		\"name\" : \"Xã Cao Thăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1522,
		\"name\" : \"Xã Đức Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1525,
		\"name\" : \"Xã Thông Hoè\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1528,
		\"name\" : \"Xã Thân Giáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1531,
		\"name\" : \"Xã Đoài Côn\",
		\"type\" : \"Xã\",
		\"maqh\" : 47
	},
	{
		\"xaid\" : 1534,
		\"name\" : \"Xã Minh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1537,
		\"name\" : \"Xã Lý Quốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1540,
		\"name\" : \"Xã Thắng Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1543,
		\"name\" : \"Xã Đồng Loan\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1546,
		\"name\" : \"Xã Đức Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1549,
		\"name\" : \"Xã Kim Loan\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1552,
		\"name\" : \"Xã Quang Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1555,
		\"name\" : \"Xã An Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1558,
		\"name\" : \"Thị trấn Thanh Nhật\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1561,
		\"name\" : \"Xã Vinh Quý\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1564,
		\"name\" : \"Xã Việt Chu\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1567,
		\"name\" : \"Xã Cô Ngân\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1570,
		\"name\" : \"Xã Thái Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1573,
		\"name\" : \"Xã Thị Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 48
	},
	{
		\"xaid\" : 1576,
		\"name\" : \"Thị trấn Quảng Uyên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1579,
		\"name\" : \"Xã Phi Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1582,
		\"name\" : \"Xã Quảng Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1585,
		\"name\" : \"Xã Bình Lăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1588,
		\"name\" : \"Xã Quốc Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1591,
		\"name\" : \"Xã Quốc Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1594,
		\"name\" : \"Xã Độc Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1597,
		\"name\" : \"Xã Cai Bộ\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1600,
		\"name\" : \"Xã Đoài Khôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1603,
		\"name\" : \"Xã Phúc Sen\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1606,
		\"name\" : \"Xã Chí Thảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1609,
		\"name\" : \"Xã Tự Do\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1612,
		\"name\" : \"Xã Hồng Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1615,
		\"name\" : \"Xã Hồng Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1618,
		\"name\" : \"Xã Ngọc Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1621,
		\"name\" : \"Xã Hoàng Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1624,
		\"name\" : \"Xã Hạnh Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 49
	},
	{
		\"xaid\" : 1627,
		\"name\" : \"Thị trấn Tà Lùng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 50
	},
	{
		\"xaid\" : 1630,
		\"name\" : \"Xã Triệu ẩu\",
		\"type\" : \"Xã\",
		\"maqh\" : 50
	},
	{
		\"xaid\" : 1633,
		\"name\" : \"Xã Hồng Đại\",
		\"type\" : \"Xã\",
		\"maqh\" : 50
	},
	{
		\"xaid\" : 1636,
		\"name\" : \"Xã Cách Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 50
	},
	{
		\"xaid\" : 1639,
		\"name\" : \"Xã Đại Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 50
	},
	{
		\"xaid\" : 1642,
		\"name\" : \"Xã Lương Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 50
	},
	{
		\"xaid\" : 1645,
		\"name\" : \"Xã Tiên Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 50
	},
	{
		\"xaid\" : 1648,
		\"name\" : \"Thị trấn Hoà Thuận\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 50
	},
	{
		\"xaid\" : 1651,
		\"name\" : \"Xã Mỹ Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 50
	},
	{
		\"xaid\" : 1654,
		\"name\" : \"Thị trấn Nước Hai\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1657,
		\"name\" : \"Xã Dân Chủ\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1660,
		\"name\" : \"Xã Nam Tuấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1663,
		\"name\" : \"Xã Đức Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1666,
		\"name\" : \"Xã Đại Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1669,
		\"name\" : \"Xã Đức Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1672,
		\"name\" : \"Xã Ngũ Lão\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1675,
		\"name\" : \"Xã Trương Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1678,
		\"name\" : \"Xã Bình Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1681,
		\"name\" : \"Xã Nguyễn Huệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1684,
		\"name\" : \"Xã Công Trừng\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1687,
		\"name\" : \"Xã Hồng Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1690,
		\"name\" : \"Xã Bế Triều\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1693,
		\"name\" : \"Xã Vĩnh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 40
	},
	{
		\"xaid\" : 1696,
		\"name\" : \"Xã Hoàng Tung\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1699,
		\"name\" : \"Xã Trương Vương\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1702,
		\"name\" : \"Xã Quang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1705,
		\"name\" : \"Xã Hưng Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 40
	},
	{
		\"xaid\" : 1708,
		\"name\" : \"Xã Bạch Đằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1711,
		\"name\" : \"Xã Bình Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1714,
		\"name\" : \"Xã Lê Chung\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1717,
		\"name\" : \"Xã Hà Trì\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1720,
		\"name\" : \"Xã Chu Trinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 40
	},
	{
		\"xaid\" : 1723,
		\"name\" : \"Xã Hồng Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 51
	},
	{
		\"xaid\" : 1726,
		\"name\" : \"Thị trấn Nguyên Bình\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1729,
		\"name\" : \"Thị trấn Tĩnh Túc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1732,
		\"name\" : \"Xã Yên Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1735,
		\"name\" : \"Xã Triệu Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1738,
		\"name\" : \"Xã Ca Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1741,
		\"name\" : \"Xã Thái Học\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1744,
		\"name\" : \"Xã Vũ Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1747,
		\"name\" : \"Xã Minh Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1750,
		\"name\" : \"Xã Thể Dục\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1753,
		\"name\" : \"Xã Bắc Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1756,
		\"name\" : \"Xã Mai Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1759,
		\"name\" : \"Xã Lang Môn\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1762,
		\"name\" : \"Xã Minh Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1765,
		\"name\" : \"Xã Hoa Thám\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1768,
		\"name\" : \"Xã Phan Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1771,
		\"name\" : \"Xã Quang Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1774,
		\"name\" : \"Xã Tam Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1777,
		\"name\" : \"Xã Thành Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1780,
		\"name\" : \"Xã Thịnh Vượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1783,
		\"name\" : \"Xã Hưng Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 52
	},
	{
		\"xaid\" : 1786,
		\"name\" : \"Thị trấn Đông Khê\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1789,
		\"name\" : \"Xã Canh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1792,
		\"name\" : \"Xã Kim Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1795,
		\"name\" : \"Xã Minh Khai\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1798,
		\"name\" : \"Xã Thị Ngân\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1801,
		\"name\" : \"Xã Đức Thông\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1804,
		\"name\" : \"Xã Thái Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1807,
		\"name\" : \"Xã Vân Trình\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1810,
		\"name\" : \"Xã Thụy Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1813,
		\"name\" : \"Xã Quang Trọng\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1816,
		\"name\" : \"Xã Trọng Con\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1819,
		\"name\" : \"Xã Lê Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1822,
		\"name\" : \"Xã Đức Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1825,
		\"name\" : \"Xã Danh Sỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1828,
		\"name\" : \"Xã Lê Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1831,
		\"name\" : \"Xã Đức Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 53
	},
	{
		\"xaid\" : 1834,
		\"name\" : \"Phường Nguyễn Thị Minh Khai\",
		\"type\" : \"Phường\",
		\"maqh\" : 58
	},
	{
		\"xaid\" : 1837,
		\"name\" : \"Phường Sông Cầu\",
		\"type\" : \"Phường\",
		\"maqh\" : 58
	},
	{
		\"xaid\" : 1840,
		\"name\" : \"Phường Đức Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 58
	},
	{
		\"xaid\" : 1843,
		\"name\" : \"Phường Phùng Chí Kiên\",
		\"type\" : \"Phường\",
		\"maqh\" : 58
	},
	{
		\"xaid\" : 1846,
		\"name\" : \"Phường Huyền Tụng\",
		\"type\" : \"Phường\",
		\"maqh\" : 58
	},
	{
		\"xaid\" : 1849,
		\"name\" : \"Xã Dương Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 58
	},
	{
		\"xaid\" : 1852,
		\"name\" : \"Xã Nông Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 58
	},
	{
		\"xaid\" : 1855,
		\"name\" : \"Phường Xuất Hóa\",
		\"type\" : \"Phường\",
		\"maqh\" : 58
	},
	{
		\"xaid\" : 1858,
		\"name\" : \"Xã Bằng Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 60
	},
	{
		\"xaid\" : 1861,
		\"name\" : \"Xã Nhạn Môn\",
		\"type\" : \"Xã\",
		\"maqh\" : 60
	},
	{
		\"xaid\" : 1864,
		\"name\" : \"Xã Bộc Bố\",
		\"type\" : \"Xã\",
		\"maqh\" : 60
	},
	{
		\"xaid\" : 1867,
		\"name\" : \"Xã Công Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 60
	},
	{
		\"xaid\" : 1870,
		\"name\" : \"Xã Giáo Hiệu\",
		\"type\" : \"Xã\",
		\"maqh\" : 60
	},
	{
		\"xaid\" : 1873,
		\"name\" : \"Xã Xuân La\",
		\"type\" : \"Xã\",
		\"maqh\" : 60
	},
	{
		\"xaid\" : 1876,
		\"name\" : \"Xã An Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 60
	},
	{
		\"xaid\" : 1879,
		\"name\" : \"Xã Cổ Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 60
	},
	{
		\"xaid\" : 1882,
		\"name\" : \"Xã Nghiên Loan\",
		\"type\" : \"Xã\",
		\"maqh\" : 60
	},
	{
		\"xaid\" : 1885,
		\"name\" : \"Xã Cao Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 60
	},
	{
		\"xaid\" : 1888,
		\"name\" : \"Thị trấn Chợ Rã\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1891,
		\"name\" : \"Xã Bành Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1894,
		\"name\" : \"Xã Phúc Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1897,
		\"name\" : \"Xã Hà Hiệu\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1900,
		\"name\" : \"Xã Cao Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1903,
		\"name\" : \"Xã Cao Trĩ\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1906,
		\"name\" : \"Xã Khang Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1909,
		\"name\" : \"Xã Nam Mẫu\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1912,
		\"name\" : \"Xã Thượng Giáo\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1915,
		\"name\" : \"Xã Địa Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1918,
		\"name\" : \"Xã Yến Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1921,
		\"name\" : \"Xã Chu Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1924,
		\"name\" : \"Xã Quảng Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1927,
		\"name\" : \"Xã Mỹ Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1930,
		\"name\" : \"Xã Hoàng Trĩ\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1933,
		\"name\" : \"Xã Đồng Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 61
	},
	{
		\"xaid\" : 1936,
		\"name\" : \"Thị trấn Nà Phặc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 62
	},
	{
		\"xaid\" : 1939,
		\"name\" : \"Xã Thượng Ân\",
		\"type\" : \"Xã\",
		\"maqh\" : 62
	},
	{
		\"xaid\" : 1942,
		\"name\" : \"Xã Bằng Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 62
	},
	{
		\"xaid\" : 1945,
		\"name\" : \"Xã Cốc Đán\",
		\"type\" : \"Xã\",
		\"maqh\" : 62
	},
	{
		\"xaid\" : 1948,
		\"name\" : \"Xã Trung Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 62
	},
	{
		\"xaid\" : 1951,
		\"name\" : \"Xã Đức Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 62
	},
	{
		\"xaid\" : 1954,
		\"name\" : \"Xã Vân Tùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 62
	},
	{
		\"xaid\" : 1957,
		\"name\" : \"Xã Thượng Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 62
	},
	{
		\"xaid\" : 1960,
		\"name\" : \"Xã Lãng Ngâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 62
	},
	{
		\"xaid\" : 1963,
		\"name\" : \"Xã Thuần Mang\",
		\"type\" : \"Xã\",
		\"maqh\" : 62
	},
	{
		\"xaid\" : 1966,
		\"name\" : \"Xã Hương Nê\",
		\"type\" : \"Xã\",
		\"maqh\" : 62
	},
	{
		\"xaid\" : 1969,
		\"name\" : \"Thị trấn Phủ Thông\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 1972,
		\"name\" : \"Xã Phương Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 1975,
		\"name\" : \"Xã Vi Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 1978,
		\"name\" : \"Xã Sĩ Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 1981,
		\"name\" : \"Xã Vũ Muộn\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 1984,
		\"name\" : \"Xã Đôn Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 1987,
		\"name\" : \"Xã Tú Trĩ\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 1990,
		\"name\" : \"Xã Lục Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 1993,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 1996,
		\"name\" : \"Xã Quân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 1999,
		\"name\" : \"Xã Nguyên Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 2002,
		\"name\" : \"Xã Cao Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 2005,
		\"name\" : \"Xã Hà Vị\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 2008,
		\"name\" : \"Xã Cẩm Giàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 2011,
		\"name\" : \"Xã Mỹ Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 2014,
		\"name\" : \"Xã Dương Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 2017,
		\"name\" : \"Xã Quang Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 63
	},
	{
		\"xaid\" : 2020,
		\"name\" : \"Thị trấn Bằng Lũng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2023,
		\"name\" : \"Xã Xuân Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2026,
		\"name\" : \"Xã Nam Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2029,
		\"name\" : \"Xã Đồng Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2032,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2035,
		\"name\" : \"Xã Bản Thi\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2038,
		\"name\" : \"Xã Quảng Bạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2041,
		\"name\" : \"Xã Bằng Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2044,
		\"name\" : \"Xã Yên Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2047,
		\"name\" : \"Xã Yên Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2050,
		\"name\" : \"Xã Phương Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2053,
		\"name\" : \"Xã Ngọc Phái\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2056,
		\"name\" : \"Xã Rã Bản\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2059,
		\"name\" : \"Xã Đông Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2062,
		\"name\" : \"Xã Lương Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2065,
		\"name\" : \"Xã Bằng Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2068,
		\"name\" : \"Xã Đại Sảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2071,
		\"name\" : \"Xã Nghĩa Tá\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2074,
		\"name\" : \"Xã Phong Huân\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2077,
		\"name\" : \"Xã Yên Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2080,
		\"name\" : \"Xã Bình Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2083,
		\"name\" : \"Xã Yên Nhuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 64
	},
	{
		\"xaid\" : 2086,
		\"name\" : \"Thị trấn Chợ Mới\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2089,
		\"name\" : \"Xã Tân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2092,
		\"name\" : \"Xã Thanh Vận\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2095,
		\"name\" : \"Xã Mai Lạp\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2098,
		\"name\" : \"Xã Hoà Mục\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2101,
		\"name\" : \"Xã Thanh Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2104,
		\"name\" : \"Xã Cao Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2107,
		\"name\" : \"Xã Nông Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2110,
		\"name\" : \"Xã Yên Cư\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2113,
		\"name\" : \"Xã Nông Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2116,
		\"name\" : \"Xã Yên Hân\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2119,
		\"name\" : \"Xã Thanh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2122,
		\"name\" : \"Xã Như Cố\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2125,
		\"name\" : \"Xã Bình Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2128,
		\"name\" : \"Xã Yên Đĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2131,
		\"name\" : \"Xã Quảng Chu\",
		\"type\" : \"Xã\",
		\"maqh\" : 65
	},
	{
		\"xaid\" : 2134,
		\"name\" : \"Thị trấn Yến Lạc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2137,
		\"name\" : \"Xã Vũ Loan\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2140,
		\"name\" : \"Xã Lạng San\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2143,
		\"name\" : \"Xã Lương Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2146,
		\"name\" : \"Xã Kim Hỷ\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2149,
		\"name\" : \"Xã Văn Học\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2152,
		\"name\" : \"Xã Cường Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2155,
		\"name\" : \"Xã Lương Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2158,
		\"name\" : \"Xã Kim Lư\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2161,
		\"name\" : \"Xã Lương Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2164,
		\"name\" : \"Xã Ân Tình\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2167,
		\"name\" : \"Xã Lam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2170,
		\"name\" : \"Xã Văn Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2173,
		\"name\" : \"Xã Côn Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2176,
		\"name\" : \"Xã Cư Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2179,
		\"name\" : \"Xã Hữu Thác\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2182,
		\"name\" : \"Xã Hảo Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2185,
		\"name\" : \"Xã Quang Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2188,
		\"name\" : \"Xã Dương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2191,
		\"name\" : \"Xã Xuân Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2194,
		\"name\" : \"Xã Đổng Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2197,
		\"name\" : \"Xã Liêm Thuỷ\",
		\"type\" : \"Xã\",
		\"maqh\" : 66
	},
	{
		\"xaid\" : 2200,
		\"name\" : \"Phường Phan Thiết\",
		\"type\" : \"Phường\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2203,
		\"name\" : \"Phường Minh Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2206,
		\"name\" : \"Phường Tân Quang\",
		\"type\" : \"Phường\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2209,
		\"name\" : \"Xã Tràng Đà\",
		\"type\" : \"Xã\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2212,
		\"name\" : \"Phường Nông Tiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2215,
		\"name\" : \"Phường Ỷ La\",
		\"type\" : \"Phường\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2216,
		\"name\" : \"Phường Tân Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2218,
		\"name\" : \"Phường Hưng Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2221,
		\"name\" : \"Thị trấn Nà Hang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 72
	},
	{
		\"xaid\" : 2227,
		\"name\" : \"Xã Sinh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 72
	},
	{
		\"xaid\" : 2230,
		\"name\" : \"Xã Thượng Giáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 72
	},
	{
		\"xaid\" : 2233,
		\"name\" : \"Xã Phúc Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 71
	},
	{
		\"xaid\" : 2239,
		\"name\" : \"Xã Thượng Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 72
	},
	{
		\"xaid\" : 2242,
		\"name\" : \"Xã Xuân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 71
	},
	{
		\"xaid\" : 2245,
		\"name\" : \"Xã Côn Lôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 72
	},
	{
		\"xaid\" : 2248,
		\"name\" : \"Xã Yên Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 72
	},
	{
		\"xaid\" : 2251,
		\"name\" : \"Xã Khuôn Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 71
	},
	{
		\"xaid\" : 2254,
		\"name\" : \"Xã Hồng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 72
	},
	{
		\"xaid\" : 2260,
		\"name\" : \"Xã Đà Vị\",
		\"type\" : \"Xã\",
		\"maqh\" : 72
	},
	{
		\"xaid\" : 2263,
		\"name\" : \"Xã Khau Tinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 72
	},
	{
		\"xaid\" : 2266,
		\"name\" : \"Xã Lăng Can\",
		\"type\" : \"Xã\",
		\"maqh\" : 71
	},
	{
		\"xaid\" : 2269,
		\"name\" : \"Xã Thượng Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 71
	},
	{
		\"xaid\" : 2275,
		\"name\" : \"Xã Sơn Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 72
	},
	{
		\"xaid\" : 2281,
		\"name\" : \"Xã Năng Khả\",
		\"type\" : \"Xã\",
		\"maqh\" : 72
	},
	{
		\"xaid\" : 2284,
		\"name\" : \"Xã Thanh Tương\",
		\"type\" : \"Xã\",
		\"maqh\" : 72
	},
	{
		\"xaid\" : 2287,
		\"name\" : \"Thị trấn Vĩnh Lộc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2290,
		\"name\" : \"Xã Bình An\",
		\"type\" : \"Xã\",
		\"maqh\" : 71
	},
	{
		\"xaid\" : 2293,
		\"name\" : \"Xã Hồng Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 71
	},
	{
		\"xaid\" : 2296,
		\"name\" : \"Xã Thổ Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 71
	},
	{
		\"xaid\" : 2299,
		\"name\" : \"Xã Phúc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2302,
		\"name\" : \"Xã Minh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2305,
		\"name\" : \"Xã Trung Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2308,
		\"name\" : \"Xã Tân Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2311,
		\"name\" : \"Xã Hà Lang\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2314,
		\"name\" : \"Xã Hùng Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2317,
		\"name\" : \"Xã Yên Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2320,
		\"name\" : \"Xã Tân An\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2323,
		\"name\" : \"Xã Bình Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2326,
		\"name\" : \"Xã Xuân Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2329,
		\"name\" : \"Xã Ngọc Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2332,
		\"name\" : \"Xã Phú Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2335,
		\"name\" : \"Xã Hòa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2338,
		\"name\" : \"Xã Phúc Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2341,
		\"name\" : \"Xã Kiên Đài\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2344,
		\"name\" : \"Xã Tân Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2347,
		\"name\" : \"Xã Trung Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2350,
		\"name\" : \"Xã Kim Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2353,
		\"name\" : \"Xã Hòa An\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2356,
		\"name\" : \"Xã Vinh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2359,
		\"name\" : \"Xã Tri Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2362,
		\"name\" : \"Xã Nhân Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2365,
		\"name\" : \"Xã Yên Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2368,
		\"name\" : \"Xã Linh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2371,
		\"name\" : \"Xã Bình Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 73
	},
	{
		\"xaid\" : 2374,
		\"name\" : \"Thị trấn Tân Yên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2377,
		\"name\" : \"Xã Yên Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2380,
		\"name\" : \"Xã Bạch Xa\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2383,
		\"name\" : \"Xã Minh Khương\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2386,
		\"name\" : \"Xã Yên Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2389,
		\"name\" : \"Xã Minh Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2392,
		\"name\" : \"Xã Phù Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2395,
		\"name\" : \"Xã Minh Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2398,
		\"name\" : \"Xã Yên Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2401,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2404,
		\"name\" : \"Xã Bình Xa\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2407,
		\"name\" : \"Xã Thái Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2410,
		\"name\" : \"Xã Nhân Mục\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2413,
		\"name\" : \"Xã Thành Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2416,
		\"name\" : \"Xã Bằng Cốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2419,
		\"name\" : \"Xã Thái Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2422,
		\"name\" : \"Xã Đức Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2425,
		\"name\" : \"Xã Hùng Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 74
	},
	{
		\"xaid\" : 2428,
		\"name\" : \"Thị trấn Tân Bình\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2431,
		\"name\" : \"Xã Quí Quân\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2434,
		\"name\" : \"Xã Lực Hành\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2437,
		\"name\" : \"Xã Kiến Thiết\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2440,
		\"name\" : \"Xã Trung Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2443,
		\"name\" : \"Xã Chiêu Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2446,
		\"name\" : \"Xã Trung Trực\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2449,
		\"name\" : \"Xã Xuân Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2452,
		\"name\" : \"Xã Phúc Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2455,
		\"name\" : \"Xã Hùng Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2458,
		\"name\" : \"Xã Trung Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2461,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2464,
		\"name\" : \"Xã Tứ Quận\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2467,
		\"name\" : \"Xã Đạo Viện\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2470,
		\"name\" : \"Xã Tân Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2473,
		\"name\" : \"Xã Thắng Quân\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2476,
		\"name\" : \"Xã Kim Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2479,
		\"name\" : \"Xã Lang Quán\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2482,
		\"name\" : \"Xã Phú Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2485,
		\"name\" : \"Xã Công Đa\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2488,
		\"name\" : \"Xã Trung Môn\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2491,
		\"name\" : \"Xã Chân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2494,
		\"name\" : \"Xã Thái Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2497,
		\"name\" : \"Xã Kim Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2500,
		\"name\" : \"Xã Tiến Bộ\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2503,
		\"name\" : \"Xã An Khang\",
		\"type\" : \"Xã\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2506,
		\"name\" : \"Xã Mỹ Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2509,
		\"name\" : \"Xã Phú Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2512,
		\"name\" : \"Xã An Tường\",
		\"type\" : \"Xã\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2515,
		\"name\" : \"Xã Lưỡng Vượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2518,
		\"name\" : \"Xã Hoàng Khai\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2521,
		\"name\" : \"Xã Thái Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2524,
		\"name\" : \"Xã Đội Cấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 70
	},
	{
		\"xaid\" : 2527,
		\"name\" : \"Xã Nhữ Hán\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2530,
		\"name\" : \"Xã Nhữ Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2533,
		\"name\" : \"Xã Đội Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 75
	},
	{
		\"xaid\" : 2536,
		\"name\" : \"Thị trấn Sơn Dương\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2539,
		\"name\" : \"Xã Trung Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2542,
		\"name\" : \"Xã Minh Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2545,
		\"name\" : \"Xã Tân Trào\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2548,
		\"name\" : \"Xã Vĩnh Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2551,
		\"name\" : \"Xã Thượng Ấm\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2554,
		\"name\" : \"Xã Bình Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2557,
		\"name\" : \"Xã Lương Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2560,
		\"name\" : \"Xã Tú Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2563,
		\"name\" : \"Xã Cấp Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2566,
		\"name\" : \"Xã Hợp Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2569,
		\"name\" : \"Xã Phúc Ứng\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2572,
		\"name\" : \"Xã Đông Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2575,
		\"name\" : \"Xã Kháng Nhật\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2578,
		\"name\" : \"Xã Hợp Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2581,
		\"name\" : \"Xã Thanh Phát\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2584,
		\"name\" : \"Xã Quyết Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2587,
		\"name\" : \"Xã Đồng Quý\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2590,
		\"name\" : \"Xã Tuân Lộ\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2593,
		\"name\" : \"Xã Vân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2596,
		\"name\" : \"Xã Văn Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2599,
		\"name\" : \"Xã Chi Thiết\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2602,
		\"name\" : \"Xã Đông Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2605,
		\"name\" : \"Xã Thiện Kế\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2608,
		\"name\" : \"Xã Hồng Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2611,
		\"name\" : \"Xã Phú Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2614,
		\"name\" : \"Xã Ninh Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2617,
		\"name\" : \"Xã Đại Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2620,
		\"name\" : \"Xã Sơn Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2623,
		\"name\" : \"Xã Hào Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2626,
		\"name\" : \"Xã Tam Đa\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2629,
		\"name\" : \"Xã Sầm Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2632,
		\"name\" : \"Xã Lâm Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 76
	},
	{
		\"xaid\" : 2635,
		\"name\" : \"Phường Duyên Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2638,
		\"name\" : \"Phường Lào Cai\",
		\"type\" : \"Phường\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2641,
		\"name\" : \"Phường Phố Mới\",
		\"type\" : \"Phường\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2644,
		\"name\" : \"Phường Cốc Lếu\",
		\"type\" : \"Phường\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2647,
		\"name\" : \"Phường Kim Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2650,
		\"name\" : \"Phường Bắc Lệnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2653,
		\"name\" : \"Phường Pom Hán\",
		\"type\" : \"Phường\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2656,
		\"name\" : \"Phường Xuân Tăng\",
		\"type\" : \"Phường\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2658,
		\"name\" : \"Phường Bình Minh\",
		\"type\" : \"Phường\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2659,
		\"name\" : \"Phường Thống Nhất\",
		\"type\" : \"Phường\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2662,
		\"name\" : \"Xã Đồng Tuyển\",
		\"type\" : \"Xã\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2665,
		\"name\" : \"Xã Vạn Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2668,
		\"name\" : \"Phường Bắc Cường\",
		\"type\" : \"Phường\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2671,
		\"name\" : \"Phường Nam Cường\",
		\"type\" : \"Phường\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2674,
		\"name\" : \"Xã Cam Đường\",
		\"type\" : \"Xã\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2677,
		\"name\" : \"Xã Tả Phời\",
		\"type\" : \"Xã\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2680,
		\"name\" : \"Xã Hợp Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 80
	},
	{
		\"xaid\" : 2683,
		\"name\" : \"Thị trấn Bát Xát\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2686,
		\"name\" : \"Xã A Mú Sung\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2689,
		\"name\" : \"Xã Nậm Chạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2692,
		\"name\" : \"Xã A Lù\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2695,
		\"name\" : \"Xã Trịnh Tường\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2698,
		\"name\" : \"Xã Ngải Thầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2701,
		\"name\" : \"Xã Y Tý\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2704,
		\"name\" : \"Xã Cốc Mỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2707,
		\"name\" : \"Xã Dền Sáng\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2710,
		\"name\" : \"Xã Bản Vược\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2713,
		\"name\" : \"Xã Sàng Ma Sáo\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2716,
		\"name\" : \"Xã Bản Qua\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2719,
		\"name\" : \"Xã Mường Vi\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2722,
		\"name\" : \"Xã Dền Thàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2725,
		\"name\" : \"Xã Bản Xèo\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2728,
		\"name\" : \"Xã Mường Hum\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2731,
		\"name\" : \"Xã Trung Lèng Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2734,
		\"name\" : \"Xã Quang Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2737,
		\"name\" : \"Xã Pa Cheo\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2740,
		\"name\" : \"Xã Nậm Pung\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2743,
		\"name\" : \"Xã Phìn Ngan\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2746,
		\"name\" : \"Xã Cốc San\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2749,
		\"name\" : \"Xã Tòng Sành\",
		\"type\" : \"Xã\",
		\"maqh\" : 82
	},
	{
		\"xaid\" : 2752,
		\"name\" : \"Xã Pha Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2755,
		\"name\" : \"Xã Tả Ngải Chồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2758,
		\"name\" : \"Xã Tung Chung Phố\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2761,
		\"name\" : \"Thị trấn Mường Khương\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2764,
		\"name\" : \"Xã Dìn Chin\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2767,
		\"name\" : \"Xã Tả Gia Khâu\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2770,
		\"name\" : \"Xã Nậm Chảy\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2773,
		\"name\" : \"Xã Nấm Lư\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2776,
		\"name\" : \"Xã Lùng Khấu Nhin\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2779,
		\"name\" : \"Xã Thanh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2782,
		\"name\" : \"Xã Cao Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2785,
		\"name\" : \"Xã Lùng Vai\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2788,
		\"name\" : \"Xã Bản Lầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2791,
		\"name\" : \"Xã La Pan Tẩn\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2794,
		\"name\" : \"Xã Tả Thàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2797,
		\"name\" : \"Xã Bản Sen\",
		\"type\" : \"Xã\",
		\"maqh\" : 83
	},
	{
		\"xaid\" : 2800,
		\"name\" : \"Xã Nàn Sán\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2803,
		\"name\" : \"Xã Thào Chư Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2806,
		\"name\" : \"Xã Bản Mế\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2809,
		\"name\" : \"Xã Si Ma Cai\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2812,
		\"name\" : \"Xã Sán Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2815,
		\"name\" : \"Xã Mản Thẩn\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2818,
		\"name\" : \"Xã Lùng Sui\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2821,
		\"name\" : \"Xã Cán Cấu\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2824,
		\"name\" : \"Xã Sín Chéng\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2827,
		\"name\" : \"Xã Cán Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2830,
		\"name\" : \"Xã Quan Thần Sán\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2833,
		\"name\" : \"Xã Lử Thẩn\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2836,
		\"name\" : \"Xã Nàn Xín\",
		\"type\" : \"Xã\",
		\"maqh\" : 84
	},
	{
		\"xaid\" : 2839,
		\"name\" : \"Thị trấn Bắc Hà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2842,
		\"name\" : \"Xã Lùng Cải\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2845,
		\"name\" : \"Xã Bản Già\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2848,
		\"name\" : \"Xã Lùng Phình\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2851,
		\"name\" : \"Xã Tả Van Chư\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2854,
		\"name\" : \"Xã Tả Củ Tỷ\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2857,
		\"name\" : \"Xã Thải Giàng Phố\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2860,
		\"name\" : \"Xã Lầu Thí Ngài\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2863,
		\"name\" : \"Xã Hoàng Thu Phố\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2866,
		\"name\" : \"Xã Bản Phố\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2869,
		\"name\" : \"Xã Bản Liền\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2872,
		\"name\" : \"Xã Tà Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2875,
		\"name\" : \"Xã Na Hối\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2878,
		\"name\" : \"Xã Cốc Ly\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2881,
		\"name\" : \"Xã Nậm Mòn\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2884,
		\"name\" : \"Xã Nậm Đét\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2887,
		\"name\" : \"Xã Nậm Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2890,
		\"name\" : \"Xã Bảo Nhai\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2893,
		\"name\" : \"Xã Nậm Lúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2896,
		\"name\" : \"Xã Cốc Lầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2899,
		\"name\" : \"Xã Bản Cái\",
		\"type\" : \"Xã\",
		\"maqh\" : 85
	},
	{
		\"xaid\" : 2902,
		\"name\" : \"Thị trấn N.T Phong Hải\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2905,
		\"name\" : \"Thị trấn Phố Lu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2908,
		\"name\" : \"Thị trấn Tằng Loỏng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2911,
		\"name\" : \"Xã Bản Phiệt\",
		\"type\" : \"Xã\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2914,
		\"name\" : \"Xã Bản Cầm\",
		\"type\" : \"Xã\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2917,
		\"name\" : \"Xã Thái Niên\",
		\"type\" : \"Xã\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2920,
		\"name\" : \"Xã Phong Niên\",
		\"type\" : \"Xã\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2923,
		\"name\" : \"Xã Gia Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2926,
		\"name\" : \"Xã Xuân Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2929,
		\"name\" : \"Xã Sơn Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2932,
		\"name\" : \"Xã Xuân Giao\",
		\"type\" : \"Xã\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2935,
		\"name\" : \"Xã Trì Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2938,
		\"name\" : \"Xã Sơn Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2941,
		\"name\" : \"Xã Phố Lu\",
		\"type\" : \"Xã\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2944,
		\"name\" : \"Xã Phú Nhuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 86
	},
	{
		\"xaid\" : 2947,
		\"name\" : \"Thị trấn Phố Ràng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2950,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2953,
		\"name\" : \"Xã Nghĩa Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2956,
		\"name\" : \"Xã Vĩnh Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2959,
		\"name\" : \"Xã Điện Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2962,
		\"name\" : \"Xã Xuân Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2965,
		\"name\" : \"Xã Tân Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2968,
		\"name\" : \"Xã Thượng Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2971,
		\"name\" : \"Xã Kim Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2974,
		\"name\" : \"Xã Cam Cọn\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2977,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2980,
		\"name\" : \"Xã Xuân Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2983,
		\"name\" : \"Xã Việt Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2986,
		\"name\" : \"Xã Yên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2989,
		\"name\" : \"Xã Bảo Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2992,
		\"name\" : \"Xã Lương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2995,
		\"name\" : \"Xã Long Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 2998,
		\"name\" : \"Xã Long Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 87
	},
	{
		\"xaid\" : 3001,
		\"name\" : \"Thị trấn Sa Pa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3004,
		\"name\" : \"Xã Bản Khoang\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3007,
		\"name\" : \"Xã Tả Giàng Phình\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3010,
		\"name\" : \"Xã Trung Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3013,
		\"name\" : \"Xã Tả Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3016,
		\"name\" : \"Xã Sa Pả\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3019,
		\"name\" : \"Xã San Sả Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3022,
		\"name\" : \"Xã Bản Phùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3025,
		\"name\" : \"Xã Hầu Thào\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3028,
		\"name\" : \"Xã Lao Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3031,
		\"name\" : \"Xã Thanh Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3034,
		\"name\" : \"Xã Suối Thầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3037,
		\"name\" : \"Xã Sử Pán\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3040,
		\"name\" : \"Xã Tả Van\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3043,
		\"name\" : \"Xã Thanh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3046,
		\"name\" : \"Xã Bản Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3049,
		\"name\" : \"Xã Nậm Sài\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3052,
		\"name\" : \"Xã Nậm Cang\",
		\"type\" : \"Xã\",
		\"maqh\" : 88
	},
	{
		\"xaid\" : 3055,
		\"name\" : \"Thị trấn Khánh Yên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3058,
		\"name\" : \"Xã Văn Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3061,
		\"name\" : \"Xã Võ Lao\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3064,
		\"name\" : \"Xã Sơn Thuỷ\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3067,
		\"name\" : \"Xã Nậm Mả\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3070,
		\"name\" : \"Xã Tân Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3073,
		\"name\" : \"Xã Nậm Rạng\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3076,
		\"name\" : \"Xã Nậm Chầy\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3079,
		\"name\" : \"Xã Tân An\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3082,
		\"name\" : \"Xã Khánh Yên Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3085,
		\"name\" : \"Xã Nậm Xé\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3088,
		\"name\" : \"Xã Dần Thàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3091,
		\"name\" : \"Xã Chiềng Ken\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3094,
		\"name\" : \"Xã Làng Giàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3097,
		\"name\" : \"Xã Hoà Mạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3100,
		\"name\" : \"Xã Khánh Yên Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3103,
		\"name\" : \"Xã Khánh Yên Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3106,
		\"name\" : \"Xã Dương Quỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3109,
		\"name\" : \"Xã Nậm Tha\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3112,
		\"name\" : \"Xã Minh Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3115,
		\"name\" : \"Xã Thẩm Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3118,
		\"name\" : \"Xã Liêm Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3121,
		\"name\" : \"Xã Nậm Xây\",
		\"type\" : \"Xã\",
		\"maqh\" : 89
	},
	{
		\"xaid\" : 3124,
		\"name\" : \"Phường Noong Bua\",
		\"type\" : \"Phường\",
		\"maqh\" : 94
	},
	{
		\"xaid\" : 3127,
		\"name\" : \"Phường Him Lam\",
		\"type\" : \"Phường\",
		\"maqh\" : 94
	},
	{
		\"xaid\" : 3130,
		\"name\" : \"Phường Thanh Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 94
	},
	{
		\"xaid\" : 3133,
		\"name\" : \"Phường Tân Thanh\",
		\"type\" : \"Phường\",
		\"maqh\" : 94
	},
	{
		\"xaid\" : 3136,
		\"name\" : \"Phường Mường Thanh\",
		\"type\" : \"Phường\",
		\"maqh\" : 94
	},
	{
		\"xaid\" : 3139,
		\"name\" : \"Phường Nam Thanh\",
		\"type\" : \"Phường\",
		\"maqh\" : 94
	},
	{
		\"xaid\" : 3142,
		\"name\" : \"Phường Thanh Trường\",
		\"type\" : \"Phường\",
		\"maqh\" : 94
	},
	{
		\"xaid\" : 3144,
		\"name\" : \"Xã Tà Lèng\",
		\"type\" : \"Xã\",
		\"maqh\" : 94
	},
	{
		\"xaid\" : 3145,
		\"name\" : \"Xã Thanh Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 94
	},
	{
		\"xaid\" : 3148,
		\"name\" : \"Phường Sông Đà\",
		\"type\" : \"Phường\",
		\"maqh\" : 95
	},
	{
		\"xaid\" : 3151,
		\"name\" : \"Phường Na Lay\",
		\"type\" : \"Phường\",
		\"maqh\" : 95
	},
	{
		\"xaid\" : 3154,
		\"name\" : \"Xã Sín Thầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 96
	},
	{
		\"xaid\" : 3155,
		\"name\" : \"Xã Sen Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 96
	},
	{
		\"xaid\" : 3156,
		\"name\" : \"Xã Nậm Tin\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3157,
		\"name\" : \"Xã Chung Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 96
	},
	{
		\"xaid\" : 3158,
		\"name\" : \"Xã Leng Su Sìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 96
	},
	{
		\"xaid\" : 3159,
		\"name\" : \"Xã Pá Mỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 96
	},
	{
		\"xaid\" : 3160,
		\"name\" : \"Xã Mường Nhé\",
		\"type\" : \"Xã\",
		\"maqh\" : 96
	},
	{
		\"xaid\" : 3161,
		\"name\" : \"Xã Nậm Vì\",
		\"type\" : \"Xã\",
		\"maqh\" : 96
	},
	{
		\"xaid\" : 3162,
		\"name\" : \"Xã Nậm Kè\",
		\"type\" : \"Xã\",
		\"maqh\" : 96
	},
	{
		\"xaid\" : 3163,
		\"name\" : \"Xã Mường Toong\",
		\"type\" : \"Xã\",
		\"maqh\" : 96
	},
	{
		\"xaid\" : 3164,
		\"name\" : \"Xã Quảng Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 96
	},
	{
		\"xaid\" : 3165,
		\"name\" : \"Xã Pa Tần\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3166,
		\"name\" : \"Xã Chà Cang\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3167,
		\"name\" : \"Xã Na Cô Sa\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3168,
		\"name\" : \"Xã Nà Khoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3169,
		\"name\" : \"Xã Nà Hỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3170,
		\"name\" : \"Xã Nà Bủng\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3171,
		\"name\" : \"Xã Nậm Nhừ\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3172,
		\"name\" : \"Thị Trấn Mường Chà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 97
	},
	{
		\"xaid\" : 3173,
		\"name\" : \"Xã Nậm Chua\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3174,
		\"name\" : \"Xã Nậm Khăn\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3175,
		\"name\" : \"Xã Chà Tở\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3176,
		\"name\" : \"Xã Vàng Đán\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3177,
		\"name\" : \"Xã Huổi Lếnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 96
	},
	{
		\"xaid\" : 3178,
		\"name\" : \"Xã Xá Tổng\",
		\"type\" : \"Xã\",
		\"maqh\" : 97
	},
	{
		\"xaid\" : 3181,
		\"name\" : \"Xã Mường Tùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 97
	},
	{
		\"xaid\" : 3184,
		\"name\" : \"Xã Lay Nưa\",
		\"type\" : \"Xã\",
		\"maqh\" : 95
	},
	{
		\"xaid\" : 3187,
		\"name\" : \"Xã Chà Nưa\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3190,
		\"name\" : \"Xã Hừa Ngài\",
		\"type\" : \"Xã\",
		\"maqh\" : 97
	},
	{
		\"xaid\" : 3191,
		\"name\" : \"Xã Huổi Mí\",
		\"type\" : \"Xã\",
		\"maqh\" : 97
	},
	{
		\"xaid\" : 3193,
		\"name\" : \"Xã Pa Ham\",
		\"type\" : \"Xã\",
		\"maqh\" : 97
	},
	{
		\"xaid\" : 3194,
		\"name\" : \"Xã Nậm Nèn\",
		\"type\" : \"Xã\",
		\"maqh\" : 97
	},
	{
		\"xaid\" : 3196,
		\"name\" : \"Xã Huổi Lèng\",
		\"type\" : \"Xã\",
		\"maqh\" : 97
	},
	{
		\"xaid\" : 3197,
		\"name\" : \"Xã Sa Lông\",
		\"type\" : \"Xã\",
		\"maqh\" : 97
	},
	{
		\"xaid\" : 3198,
		\"name\" : \"Xã Phìn Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3199,
		\"name\" : \"Xã Si Pa Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 103
	},
	{
		\"xaid\" : 3200,
		\"name\" : \"Xã Ma Thì Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 97
	},
	{
		\"xaid\" : 3201,
		\"name\" : \"Xã Na Sang\",
		\"type\" : \"Xã\",
		\"maqh\" : 97
	},
	{
		\"xaid\" : 3202,
		\"name\" : \"Xã Mường Mươn\",
		\"type\" : \"Xã\",
		\"maqh\" : 97
	},
	{
		\"xaid\" : 3203,
		\"name\" : \"Thị trấn Điện Biên Đông\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3205,
		\"name\" : \"Xã Na Son\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3208,
		\"name\" : \"Xã Phì Nhừ\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3211,
		\"name\" : \"Xã Chiềng Sơ\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3214,
		\"name\" : \"Xã Mường Luân\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3217,
		\"name\" : \"Thị trấn Tủa Chùa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 98
	},
	{
		\"xaid\" : 3220,
		\"name\" : \"Xã Huổi Só\",
		\"type\" : \"Xã\",
		\"maqh\" : 98
	},
	{
		\"xaid\" : 3223,
		\"name\" : \"Xã Xín Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 98
	},
	{
		\"xaid\" : 3226,
		\"name\" : \"Xã Tả Sìn Thàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 98
	},
	{
		\"xaid\" : 3229,
		\"name\" : \"Xã Lao Xả Phình\",
		\"type\" : \"Xã\",
		\"maqh\" : 98
	},
	{
		\"xaid\" : 3232,
		\"name\" : \"Xã Tả Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 98
	},
	{
		\"xaid\" : 3235,
		\"name\" : \"Xã Tủa Thàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 98
	},
	{
		\"xaid\" : 3238,
		\"name\" : \"Xã Trung Thu\",
		\"type\" : \"Xã\",
		\"maqh\" : 98
	},
	{
		\"xaid\" : 3241,
		\"name\" : \"Xã Sính Phình\",
		\"type\" : \"Xã\",
		\"maqh\" : 98
	},
	{
		\"xaid\" : 3244,
		\"name\" : \"Xã Sáng Nhè\",
		\"type\" : \"Xã\",
		\"maqh\" : 98
	},
	{
		\"xaid\" : 3247,
		\"name\" : \"Xã Mường Đun\",
		\"type\" : \"Xã\",
		\"maqh\" : 98
	},
	{
		\"xaid\" : 3250,
		\"name\" : \"Xã Mường Báng\",
		\"type\" : \"Xã\",
		\"maqh\" : 98
	},
	{
		\"xaid\" : 3253,
		\"name\" : \"Thị trấn Tuần Giáo\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3256,
		\"name\" : \"Thị trấn Mường Ảng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 102
	},
	{
		\"xaid\" : 3259,
		\"name\" : \"Xã Phình Sáng\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3260,
		\"name\" : \"Xã Rạng Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3262,
		\"name\" : \"Xã Mùn Chung\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3263,
		\"name\" : \"Xã Nà Tòng\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3265,
		\"name\" : \"Xã Ta Ma\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3268,
		\"name\" : \"Xã Mường Mùn\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3269,
		\"name\" : \"Xã Pú Xi\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3271,
		\"name\" : \"Xã Pú Nhung\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3274,
		\"name\" : \"Xã Quài Nưa\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3277,
		\"name\" : \"Xã Mường Thín\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3280,
		\"name\" : \"Xã Tỏa Tình\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3283,
		\"name\" : \"Xã Nà Sáy\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3284,
		\"name\" : \"Xã Mường Khong\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3286,
		\"name\" : \"Xã Mường Đăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 102
	},
	{
		\"xaid\" : 3287,
		\"name\" : \"Xã Ngối Cáy\",
		\"type\" : \"Xã\",
		\"maqh\" : 102
	},
	{
		\"xaid\" : 3289,
		\"name\" : \"Xã Quài Cang\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3292,
		\"name\" : \"Xã Ẳng Tở\",
		\"type\" : \"Xã\",
		\"maqh\" : 102
	},
	{
		\"xaid\" : 3295,
		\"name\" : \"Xã Quài Tở\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3298,
		\"name\" : \"Xã Chiềng Sinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3299,
		\"name\" : \"Xã Chiềng Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3301,
		\"name\" : \"Xã Búng Lao\",
		\"type\" : \"Xã\",
		\"maqh\" : 102
	},
	{
		\"xaid\" : 3302,
		\"name\" : \"Xã Xuân Lao\",
		\"type\" : \"Xã\",
		\"maqh\" : 102
	},
	{
		\"xaid\" : 3304,
		\"name\" : \"Xã Tênh Phông\",
		\"type\" : \"Xã\",
		\"maqh\" : 99
	},
	{
		\"xaid\" : 3307,
		\"name\" : \"Xã Ẳng Nưa\",
		\"type\" : \"Xã\",
		\"maqh\" : 102
	},
	{
		\"xaid\" : 3310,
		\"name\" : \"Xã Ẳng Cang\",
		\"type\" : \"Xã\",
		\"maqh\" : 102
	},
	{
		\"xaid\" : 3312,
		\"name\" : \"Xã Nặm Lịch\",
		\"type\" : \"Xã\",
		\"maqh\" : 102
	},
	{
		\"xaid\" : 3313,
		\"name\" : \"Xã Mường Lạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 102
	},
	{
		\"xaid\" : 3316,
		\"name\" : \"Xã Nà Tấu\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3317,
		\"name\" : \"Xã Nà Nhạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3319,
		\"name\" : \"Xã Mường Pồn\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3322,
		\"name\" : \"Xã Thanh Nưa\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3323,
		\"name\" : \"Xã Hua Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3325,
		\"name\" : \"Xã Mường Phăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3326,
		\"name\" : \"Xã Pá Khoang\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3328,
		\"name\" : \"Xã Thanh Luông\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3331,
		\"name\" : \"Xã Thanh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3334,
		\"name\" : \"Xã Thanh Xương\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3337,
		\"name\" : \"Xã Thanh Chăn\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3340,
		\"name\" : \"Xã Pa Thơm\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3343,
		\"name\" : \"Xã Thanh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3346,
		\"name\" : \"Xã Thanh Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3349,
		\"name\" : \"Xã Noong Luống\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3352,
		\"name\" : \"Xã Noọng Hẹt\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3355,
		\"name\" : \"Xã Sam Mứn\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3356,
		\"name\" : \"Xã Pom Lót\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3358,
		\"name\" : \"Xã Núa Ngam\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3359,
		\"name\" : \"Xã Hẹ Muông\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3361,
		\"name\" : \"Xã Na Ư\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3364,
		\"name\" : \"Xã Mường Nhà\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3365,
		\"name\" : \"Xã Na Tông\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3367,
		\"name\" : \"Xã Mường Lói\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3368,
		\"name\" : \"Xã Phu Luông\",
		\"type\" : \"Xã\",
		\"maqh\" : 100
	},
	{
		\"xaid\" : 3370,
		\"name\" : \"Xã Pú Nhi\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3371,
		\"name\" : \"Xã Nong U\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3373,
		\"name\" : \"Xã Xa Dung\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3376,
		\"name\" : \"Xã Keo Lôm\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3379,
		\"name\" : \"Xã Luân Giới\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3382,
		\"name\" : \"Xã Phình Giàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3383,
		\"name\" : \"Xã Pú Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3384,
		\"name\" : \"Xã Tìa Dình\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3385,
		\"name\" : \"Xã Háng Lìa\",
		\"type\" : \"Xã\",
		\"maqh\" : 101
	},
	{
		\"xaid\" : 3386,
		\"name\" : \"Phường Quyết Thắng\",
		\"type\" : \"Phường\",
		\"maqh\" : 105
	},
	{
		\"xaid\" : 3387,
		\"name\" : \"Phường Tân Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 105
	},
	{
		\"xaid\" : 3388,
		\"name\" : \"Phường Quyết Tiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 105
	},
	{
		\"xaid\" : 3389,
		\"name\" : \"Phường Đoàn Kết\",
		\"type\" : \"Phường\",
		\"maqh\" : 105
	},
	{
		\"xaid\" : 3390,
		\"name\" : \"Thị trấn Tam Đường\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3391,
		\"name\" : \"Xã Lả Nhì Thàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3394,
		\"name\" : \"Xã Thèn Sin\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3397,
		\"name\" : \"Xã Sùng Phài\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3400,
		\"name\" : \"Xã Tả Lèng\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3403,
		\"name\" : \"Xã Nậm Loỏng\",
		\"type\" : \"Xã\",
		\"maqh\" : 105
	},
	{
		\"xaid\" : 3405,
		\"name\" : \"Xã Giang Ma\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3406,
		\"name\" : \"Xã Hồ Thầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3408,
		\"name\" : \"Phường Đông Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 105
	},
	{
		\"xaid\" : 3409,
		\"name\" : \"Xã San Thàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 105
	},
	{
		\"xaid\" : 3412,
		\"name\" : \"Xã Bình Lư\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3413,
		\"name\" : \"Xã Sơn Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3415,
		\"name\" : \"Xã Nùng Nàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3418,
		\"name\" : \"Xã Bản Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3421,
		\"name\" : \"Xã Bản Hon\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3424,
		\"name\" : \"Xã Bản Bo\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3427,
		\"name\" : \"Xã Nà Tăm\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3430,
		\"name\" : \"Xã Khun Há\",
		\"type\" : \"Xã\",
		\"maqh\" : 106
	},
	{
		\"xaid\" : 3433,
		\"name\" : \"Thị trấn Mường Tè\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3434,
		\"name\" : \"Thị trấn Nậm Nhùn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 112
	},
	{
		\"xaid\" : 3436,
		\"name\" : \"Xã Thu Lũm\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3439,
		\"name\" : \"Xã Ka Lăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3440,
		\"name\" : \"Xã Tá Bạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3442,
		\"name\" : \"Xã Pa ủ\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3445,
		\"name\" : \"Xã Mường Tè\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3448,
		\"name\" : \"Xã Pa Vệ Sử\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3451,
		\"name\" : \"Xã Mù Cả\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3454,
		\"name\" : \"Xã Bun Tở\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3457,
		\"name\" : \"Xã Nậm Khao\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3460,
		\"name\" : \"Xã Hua Bun\",
		\"type\" : \"Xã\",
		\"maqh\" : 112
	},
	{
		\"xaid\" : 3463,
		\"name\" : \"Xã Tà Tổng\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3466,
		\"name\" : \"Xã Bun Nưa\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3467,
		\"name\" : \"Xã Vàng San\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3469,
		\"name\" : \"Xã Kan Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 107
	},
	{
		\"xaid\" : 3472,
		\"name\" : \"Xã Mường Mô\",
		\"type\" : \"Xã\",
		\"maqh\" : 112
	},
	{
		\"xaid\" : 3473,
		\"name\" : \"Xã Nậm Chà\",
		\"type\" : \"Xã\",
		\"maqh\" : 112
	},
	{
		\"xaid\" : 3474,
		\"name\" : \"Xã Nậm Manh\",
		\"type\" : \"Xã\",
		\"maqh\" : 112
	},
	{
		\"xaid\" : 3475,
		\"name\" : \"Xã Nậm Hàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 112
	},
	{
		\"xaid\" : 3478,
		\"name\" : \"Thị trấn Sìn Hồ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3481,
		\"name\" : \"Xã Lê Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 112
	},
	{
		\"xaid\" : 3484,
		\"name\" : \"Xã Pú Đao\",
		\"type\" : \"Xã\",
		\"maqh\" : 112
	},
	{
		\"xaid\" : 3487,
		\"name\" : \"Xã Chăn Nưa\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3488,
		\"name\" : \"Xã Nậm Pì\",
		\"type\" : \"Xã\",
		\"maqh\" : 112
	},
	{
		\"xaid\" : 3490,
		\"name\" : \"Xã Huổi Luông\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3493,
		\"name\" : \"Xã Pa Tần\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3496,
		\"name\" : \"Xã Phìn Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3499,
		\"name\" : \"Xã Hồng Thu\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3502,
		\"name\" : \"Xã Nậm Ban\",
		\"type\" : \"Xã\",
		\"maqh\" : 112
	},
	{
		\"xaid\" : 3503,
		\"name\" : \"Xã Trung Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 112
	},
	{
		\"xaid\" : 3505,
		\"name\" : \"Xã Phăng Sô Lin\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3508,
		\"name\" : \"Xã Ma Quai\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3509,
		\"name\" : \"Xã Lùng Thàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3511,
		\"name\" : \"Xã Tả Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3514,
		\"name\" : \"Xã Sà Dề Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3517,
		\"name\" : \"Xã Nậm Tăm\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3520,
		\"name\" : \"Xã Tả Ngảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3523,
		\"name\" : \"Xã Pu Sam Cáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3526,
		\"name\" : \"Xã Nậm Cha\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3527,
		\"name\" : \"Xã Pa Khoá\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3529,
		\"name\" : \"Xã Làng Mô\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3532,
		\"name\" : \"Xã Noong Hẻo\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3535,
		\"name\" : \"Xã Nậm Mạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3538,
		\"name\" : \"Xã Căn Co\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3541,
		\"name\" : \"Xã Tủa Sín Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3544,
		\"name\" : \"Xã Nậm Cuổi\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3547,
		\"name\" : \"Xã Nậm Hăn\",
		\"type\" : \"Xã\",
		\"maqh\" : 108
	},
	{
		\"xaid\" : 3549,
		\"name\" : \"Thị trấn Phong Thổ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3550,
		\"name\" : \"Xã Sì Lờ Lầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3553,
		\"name\" : \"Xã Mồ Sì San\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3556,
		\"name\" : \"Xã Ma Li Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3559,
		\"name\" : \"Xã Pa Vây Sử\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3562,
		\"name\" : \"Xã Vàng Ma Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3565,
		\"name\" : \"Xã Tông Qua Lìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3568,
		\"name\" : \"Xã Mù Sang\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3571,
		\"name\" : \"Xã Dào San\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3574,
		\"name\" : \"Xã Ma Ly Pho\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3577,
		\"name\" : \"Xã Bản Lang\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3580,
		\"name\" : \"Xã Hoang Thèn\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3583,
		\"name\" : \"Xã Khổng Lào\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3586,
		\"name\" : \"Xã Nậm Xe\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3589,
		\"name\" : \"Xã Mường So\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3592,
		\"name\" : \"Xã Sin Suối Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 109
	},
	{
		\"xaid\" : 3595,
		\"name\" : \"Thị trấn Than Uyên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 110
	},
	{
		\"xaid\" : 3598,
		\"name\" : \"Thị trấn Tân Uyên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 111
	},
	{
		\"xaid\" : 3601,
		\"name\" : \"Xã Mường Khoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 111
	},
	{
		\"xaid\" : 3602,
		\"name\" : \"Xã Phúc Khoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 111
	},
	{
		\"xaid\" : 3604,
		\"name\" : \"Xã Thân Thuộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 111
	},
	{
		\"xaid\" : 3605,
		\"name\" : \"Xã Trung Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 111
	},
	{
		\"xaid\" : 3607,
		\"name\" : \"Xã Hố Mít\",
		\"type\" : \"Xã\",
		\"maqh\" : 111
	},
	{
		\"xaid\" : 3610,
		\"name\" : \"Xã Nậm Cần\",
		\"type\" : \"Xã\",
		\"maqh\" : 111
	},
	{
		\"xaid\" : 3613,
		\"name\" : \"Xã Nậm Sỏ\",
		\"type\" : \"Xã\",
		\"maqh\" : 111
	},
	{
		\"xaid\" : 3616,
		\"name\" : \"Xã Pắc Ta\",
		\"type\" : \"Xã\",
		\"maqh\" : 111
	},
	{
		\"xaid\" : 3618,
		\"name\" : \"Xã Phúc Than\",
		\"type\" : \"Xã\",
		\"maqh\" : 110
	},
	{
		\"xaid\" : 3619,
		\"name\" : \"Xã Mường Than\",
		\"type\" : \"Xã\",
		\"maqh\" : 110
	},
	{
		\"xaid\" : 3622,
		\"name\" : \"Xã Tà Mít\",
		\"type\" : \"Xã\",
		\"maqh\" : 111
	},
	{
		\"xaid\" : 3625,
		\"name\" : \"Xã Mường Mít\",
		\"type\" : \"Xã\",
		\"maqh\" : 110
	},
	{
		\"xaid\" : 3628,
		\"name\" : \"Xã Pha Mu\",
		\"type\" : \"Xã\",
		\"maqh\" : 110
	},
	{
		\"xaid\" : 3631,
		\"name\" : \"Xã Mường Cang\",
		\"type\" : \"Xã\",
		\"maqh\" : 110
	},
	{
		\"xaid\" : 3632,
		\"name\" : \"Xã Hua Nà\",
		\"type\" : \"Xã\",
		\"maqh\" : 110
	},
	{
		\"xaid\" : 3634,
		\"name\" : \"Xã Tà Hừa\",
		\"type\" : \"Xã\",
		\"maqh\" : 110
	},
	{
		\"xaid\" : 3637,
		\"name\" : \"Xã Mường Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 110
	},
	{
		\"xaid\" : 3638,
		\"name\" : \"Xã Tà Mung\",
		\"type\" : \"Xã\",
		\"maqh\" : 110
	},
	{
		\"xaid\" : 3640,
		\"name\" : \"Xã Tà Gia\",
		\"type\" : \"Xã\",
		\"maqh\" : 110
	},
	{
		\"xaid\" : 3643,
		\"name\" : \"Xã Khoen On\",
		\"type\" : \"Xã\",
		\"maqh\" : 110
	},
	{
		\"xaid\" : 3646,
		\"name\" : \"Phường Chiềng Lề\",
		\"type\" : \"Phường\",
		\"maqh\" : 116
	},
	{
		\"xaid\" : 3649,
		\"name\" : \"Phường Tô Hiệu\",
		\"type\" : \"Phường\",
		\"maqh\" : 116
	},
	{
		\"xaid\" : 3652,
		\"name\" : \"Phường Quyết Thắng\",
		\"type\" : \"Phường\",
		\"maqh\" : 116
	},
	{
		\"xaid\" : 3655,
		\"name\" : \"Phường Quyết Tâm\",
		\"type\" : \"Phường\",
		\"maqh\" : 116
	},
	{
		\"xaid\" : 3658,
		\"name\" : \"Xã Chiềng Cọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 116
	},
	{
		\"xaid\" : 3661,
		\"name\" : \"Xã Chiềng Đen\",
		\"type\" : \"Xã\",
		\"maqh\" : 116
	},
	{
		\"xaid\" : 3664,
		\"name\" : \"Xã Chiềng Xôm\",
		\"type\" : \"Xã\",
		\"maqh\" : 116
	},
	{
		\"xaid\" : 3667,
		\"name\" : \"Phường Chiềng An\",
		\"type\" : \"Phường\",
		\"maqh\" : 116
	},
	{
		\"xaid\" : 3670,
		\"name\" : \"Phường Chiềng Cơi\",
		\"type\" : \"Phường\",
		\"maqh\" : 116
	},
	{
		\"xaid\" : 3673,
		\"name\" : \"Xã Chiềng Ngần\",
		\"type\" : \"Xã\",
		\"maqh\" : 116
	},
	{
		\"xaid\" : 3676,
		\"name\" : \"Xã Hua La\",
		\"type\" : \"Xã\",
		\"maqh\" : 116
	},
	{
		\"xaid\" : 3679,
		\"name\" : \"Phường Chiềng Sinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 116
	},
	{
		\"xaid\" : 3682,
		\"name\" : \"Xã Mường Chiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 118
	},
	{
		\"xaid\" : 3685,
		\"name\" : \"Xã Cà Nàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 118
	},
	{
		\"xaid\" : 3688,
		\"name\" : \"Xã Chiềng Khay\",
		\"type\" : \"Xã\",
		\"maqh\" : 118
	},
	{
		\"xaid\" : 3694,
		\"name\" : \"Xã Mường Giôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 118
	},
	{
		\"xaid\" : 3697,
		\"name\" : \"Xã Pá Ma Pha Khinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 118
	},
	{
		\"xaid\" : 3700,
		\"name\" : \"Xã Chiềng Ơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 118
	},
	{
		\"xaid\" : 3703,
		\"name\" : \"Xã Mường Giàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 118
	},
	{
		\"xaid\" : 3706,
		\"name\" : \"Xã Chiềng Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 118
	},
	{
		\"xaid\" : 3709,
		\"name\" : \"Xã Mường Sại\",
		\"type\" : \"Xã\",
		\"maqh\" : 118
	},
	{
		\"xaid\" : 3712,
		\"name\" : \"Xã Nậm ét\",
		\"type\" : \"Xã\",
		\"maqh\" : 118
	},
	{
		\"xaid\" : 3718,
		\"name\" : \"Xã Chiềng Khoang\",
		\"type\" : \"Xã\",
		\"maqh\" : 118
	},
	{
		\"xaid\" : 3721,
		\"name\" : \"Thị trấn Thuận Châu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3724,
		\"name\" : \"Xã Phỏng Lái\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3727,
		\"name\" : \"Xã Mường é\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3730,
		\"name\" : \"Xã Chiềng Pha\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3733,
		\"name\" : \"Xã Chiềng La\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3736,
		\"name\" : \"Xã Chiềng Ngàm\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3739,
		\"name\" : \"Xã Liệp Tè\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3742,
		\"name\" : \"Xã é Tòng\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3745,
		\"name\" : \"Xã Phỏng Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3748,
		\"name\" : \"Xã Chiềng Sơ\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3751,
		\"name\" : \"Xã Chiềng Ly\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3754,
		\"name\" : \"Xã Nong Lay\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3757,
		\"name\" : \"Xã Mường Khiêng\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3760,
		\"name\" : \"Xã Mường Bám\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3763,
		\"name\" : \"Xã Long Hẹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3766,
		\"name\" : \"Xã Chiềng Bôm\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3769,
		\"name\" : \"Xã Thôn Mòn\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3772,
		\"name\" : \"Xã Tòng Lệnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3775,
		\"name\" : \"Xã Tòng Cọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3778,
		\"name\" : \"Xã Bó Mười\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3781,
		\"name\" : \"Xã Co Mạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3784,
		\"name\" : \"Xã Púng Tra\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3787,
		\"name\" : \"Xã Chiềng Pấc\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3790,
		\"name\" : \"Xã Nậm Lầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3793,
		\"name\" : \"Xã Bon Phặng\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3796,
		\"name\" : \"Xã Co Tòng\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3799,
		\"name\" : \"Xã Muội Nọi\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3802,
		\"name\" : \"Xã Pá Lông\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3805,
		\"name\" : \"Xã Bản Lầm\",
		\"type\" : \"Xã\",
		\"maqh\" : 119
	},
	{
		\"xaid\" : 3808,
		\"name\" : \"Thị trấn Ít Ong\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3811,
		\"name\" : \"Xã Nậm Giôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3814,
		\"name\" : \"Xã Chiềng Lao\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3817,
		\"name\" : \"Xã Hua Trai\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3820,
		\"name\" : \"Xã Ngọc Chiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3823,
		\"name\" : \"Xã Mường Trai\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3826,
		\"name\" : \"Xã Nậm Păm\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3829,
		\"name\" : \"Xã Chiềng Muôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3832,
		\"name\" : \"Xã Chiềng Ân\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3835,
		\"name\" : \"Xã Pi Toong\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3838,
		\"name\" : \"Xã Chiềng Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3841,
		\"name\" : \"Xã Tạ Bú\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3844,
		\"name\" : \"Xã Chiềng San\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3847,
		\"name\" : \"Xã Mường Bú\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3850,
		\"name\" : \"Xã Chiềng Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3853,
		\"name\" : \"Xã Mường Chùm\",
		\"type\" : \"Xã\",
		\"maqh\" : 120
	},
	{
		\"xaid\" : 3856,
		\"name\" : \"Thị trấn Bắc Yên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3859,
		\"name\" : \"Xã Phiêng Ban\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3862,
		\"name\" : \"Xã Hang Chú\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3865,
		\"name\" : \"Xã Xín Vàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3868,
		\"name\" : \"Xã Tà Xùa\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3869,
		\"name\" : \"Xã Háng Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3871,
		\"name\" : \"Xã Bắc Ngà\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3874,
		\"name\" : \"Xã Làng Chếu\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3877,
		\"name\" : \"Xã Chim Vàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3880,
		\"name\" : \"Xã Mường Khoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3883,
		\"name\" : \"Xã Song Pe\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3886,
		\"name\" : \"Xã Hồng Ngài\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3889,
		\"name\" : \"Xã Tạ Khoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3890,
		\"name\" : \"Xã Hua Nhàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3892,
		\"name\" : \"Xã Phiêng Kôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3895,
		\"name\" : \"Xã Chiềng Sại\",
		\"type\" : \"Xã\",
		\"maqh\" : 121
	},
	{
		\"xaid\" : 3898,
		\"name\" : \"Thị trấn Phù Yên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3901,
		\"name\" : \"Xã Suối Tọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3904,
		\"name\" : \"Xã Mường Thải\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3907,
		\"name\" : \"Xã Mường Cơi\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3910,
		\"name\" : \"Xã Quang Huy\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3913,
		\"name\" : \"Xã Huy Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3916,
		\"name\" : \"Xã Huy Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3919,
		\"name\" : \"Xã Tân Lang\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3922,
		\"name\" : \"Xã Gia Phù\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3925,
		\"name\" : \"Xã Tường Phù\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3928,
		\"name\" : \"Xã Huy Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3931,
		\"name\" : \"Xã Huy Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3934,
		\"name\" : \"Xã Mường Lang\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3937,
		\"name\" : \"Xã Suối Bau\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3940,
		\"name\" : \"Xã Huy Tường\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3943,
		\"name\" : \"Xã Mường Do\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3946,
		\"name\" : \"Xã Sập Xa\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3949,
		\"name\" : \"Xã Tường Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3952,
		\"name\" : \"Xã Tường Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3955,
		\"name\" : \"Xã Tường Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3958,
		\"name\" : \"Xã Tường Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3961,
		\"name\" : \"Xã Kim Bon\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3964,
		\"name\" : \"Xã Mường Bang\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3967,
		\"name\" : \"Xã Đá Đỏ\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3970,
		\"name\" : \"Xã Tân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3973,
		\"name\" : \"Xã Nam Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3976,
		\"name\" : \"Xã Bắc Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 122
	},
	{
		\"xaid\" : 3979,
		\"name\" : \"Thị trấn Mộc Châu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 3982,
		\"name\" : \"Thị trấn NT Mộc Châu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 3985,
		\"name\" : \"Xã Chiềng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 3988,
		\"name\" : \"Xã Tân Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 3991,
		\"name\" : \"Xã Qui Hướng\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 3994,
		\"name\" : \"Xã Suối Bàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 3997,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 4000,
		\"name\" : \"Xã Nà Mường\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 4003,
		\"name\" : \"Xã Tà Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 4006,
		\"name\" : \"Xã Song Khủa\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4009,
		\"name\" : \"Xã Liên Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4012,
		\"name\" : \"Xã Chiềng Hắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 4015,
		\"name\" : \"Xã Hua Păng\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 4018,
		\"name\" : \"Xã Tô Múa\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4021,
		\"name\" : \"Xã Mường Tè\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4024,
		\"name\" : \"Xã Chiềng Khừa\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 4027,
		\"name\" : \"Xã Mường Sang\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 4030,
		\"name\" : \"Xã Đông Sang\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 4033,
		\"name\" : \"Xã Phiêng Luông\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 4036,
		\"name\" : \"Xã Chiềng Khoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4039,
		\"name\" : \"Xã Mường Men\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4042,
		\"name\" : \"Xã Quang Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4045,
		\"name\" : \"Xã Lóng Sập\",
		\"type\" : \"Xã\",
		\"maqh\" : 123
	},
	{
		\"xaid\" : 4048,
		\"name\" : \"Xã Vân Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4051,
		\"name\" : \"Xã Lóng Luông\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4054,
		\"name\" : \"Xã Chiềng Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4056,
		\"name\" : \"Xã Chiềng Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4057,
		\"name\" : \"Xã Xuân Nha\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4058,
		\"name\" : \"Xã Tân Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 128
	},
	{
		\"xaid\" : 4060,
		\"name\" : \"Thị trấn Yên Châu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4063,
		\"name\" : \"Xã Chiềng Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4066,
		\"name\" : \"Xã Sập Vạt\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4069,
		\"name\" : \"Xã Chiềng Sàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4072,
		\"name\" : \"Xã Chiềng Pằn\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4075,
		\"name\" : \"Xã Viêng Lán\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4078,
		\"name\" : \"Xã Chiềng Hặc\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4081,
		\"name\" : \"Xã Mường Lựm\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4084,
		\"name\" : \"Xã Chiềng On\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4087,
		\"name\" : \"Xã Yên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4090,
		\"name\" : \"Xã Chiềng Khoi\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4093,
		\"name\" : \"Xã Tú Nang\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4096,
		\"name\" : \"Xã Lóng Phiêng\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4099,
		\"name\" : \"Xã Phiêng Khoài\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4102,
		\"name\" : \"Xã Chiềng Tương\",
		\"type\" : \"Xã\",
		\"maqh\" : 124
	},
	{
		\"xaid\" : 4105,
		\"name\" : \"Thị trấn Hát Lót\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4108,
		\"name\" : \"Xã Chiềng Sung\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4111,
		\"name\" : \"Xã Mường Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4114,
		\"name\" : \"Xã Chiềng Chăn\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4117,
		\"name\" : \"Xã Mương Tranh\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4120,
		\"name\" : \"Xã Chiềng Ban\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4123,
		\"name\" : \"Xã Chiềng Mung\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4126,
		\"name\" : \"Xã Mường Bon\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4129,
		\"name\" : \"Xã Chiềng Chung\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4132,
		\"name\" : \"Xã Chiềng Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4135,
		\"name\" : \"Xã Hát Lót\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4136,
		\"name\" : \"Xã Nà Pó\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4138,
		\"name\" : \"Xã Cò  Nòi\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4141,
		\"name\" : \"Xã Chiềng Nơi\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4144,
		\"name\" : \"Xã Phiêng Cằm\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4147,
		\"name\" : \"Xã Chiềng Dong\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4150,
		\"name\" : \"Xã Chiềng Kheo\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4153,
		\"name\" : \"Xã Chiềng Ve\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4156,
		\"name\" : \"Xã Chiềng Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4159,
		\"name\" : \"Xã Phiêng Pằn\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4162,
		\"name\" : \"Xã Nà Ơt\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4165,
		\"name\" : \"Xã Tà Hộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 125
	},
	{
		\"xaid\" : 4168,
		\"name\" : \"Thị trấn Sông Mã\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4171,
		\"name\" : \"Xã Bó Sinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4174,
		\"name\" : \"Xã Pú Pẩu\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4177,
		\"name\" : \"Xã Chiềng Phung\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4180,
		\"name\" : \"Xã Chiềng En\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4183,
		\"name\" : \"Xã Mường Lầm\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4186,
		\"name\" : \"Xã Nậm Ty\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4189,
		\"name\" : \"Xã Đứa Mòn\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4192,
		\"name\" : \"Xã Yên Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4195,
		\"name\" : \"Xã Chiềng Sơ\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4198,
		\"name\" : \"Xã Nà Ngựu\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4201,
		\"name\" : \"Xã Nậm Mằn\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4204,
		\"name\" : \"Xã Chiềng Khoong\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4207,
		\"name\" : \"Xã Chiềng Cang\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4210,
		\"name\" : \"Xã Huổi Một\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4213,
		\"name\" : \"Xã Mường Sai\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4216,
		\"name\" : \"Xã Mường Cai\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4219,
		\"name\" : \"Xã Mường Hung\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4222,
		\"name\" : \"Xã Chiềng Khương\",
		\"type\" : \"Xã\",
		\"maqh\" : 126
	},
	{
		\"xaid\" : 4225,
		\"name\" : \"Xã Sam Kha\",
		\"type\" : \"Xã\",
		\"maqh\" : 127
	},
	{
		\"xaid\" : 4228,
		\"name\" : \"Xã Púng Bánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 127
	},
	{
		\"xaid\" : 4231,
		\"name\" : \"Xã Xốp Cộp\",
		\"type\" : \"Xã\",
		\"maqh\" : 127
	},
	{
		\"xaid\" : 4234,
		\"name\" : \"Xã Dồm Cang\",
		\"type\" : \"Xã\",
		\"maqh\" : 127
	},
	{
		\"xaid\" : 4237,
		\"name\" : \"Xã Nậm Lạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 127
	},
	{
		\"xaid\" : 4240,
		\"name\" : \"Xã Mường Lèo\",
		\"type\" : \"Xã\",
		\"maqh\" : 127
	},
	{
		\"xaid\" : 4243,
		\"name\" : \"Xã Mường Và\",
		\"type\" : \"Xã\",
		\"maqh\" : 127
	},
	{
		\"xaid\" : 4246,
		\"name\" : \"Xã Mường Lạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 127
	},
	{
		\"xaid\" : 4249,
		\"name\" : \"Phường Yên Thịnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4252,
		\"name\" : \"Phường Yên Ninh\",
		\"type\" : \"Phường\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4255,
		\"name\" : \"Phường Minh Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4258,
		\"name\" : \"Phường Nguyễn Thái Học\",
		\"type\" : \"Phường\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4261,
		\"name\" : \"Phường Đồng Tâm\",
		\"type\" : \"Phường\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4264,
		\"name\" : \"Phường Nguyễn Phúc\",
		\"type\" : \"Phường\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4267,
		\"name\" : \"Phường Hồng Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4270,
		\"name\" : \"Xã Minh Bảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4273,
		\"name\" : \"Phường Nam Cường\",
		\"type\" : \"Phường\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4276,
		\"name\" : \"Xã Tuy Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4279,
		\"name\" : \"Xã Tân Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4282,
		\"name\" : \"Phường Pú Trạng\",
		\"type\" : \"Phường\",
		\"maqh\" : 133
	},
	{
		\"xaid\" : 4285,
		\"name\" : \"Phường Trung Tâm\",
		\"type\" : \"Phường\",
		\"maqh\" : 133
	},
	{
		\"xaid\" : 4288,
		\"name\" : \"Phường Tân An\",
		\"type\" : \"Phường\",
		\"maqh\" : 133
	},
	{
		\"xaid\" : 4291,
		\"name\" : \"Phường Cầu Thia\",
		\"type\" : \"Phường\",
		\"maqh\" : 133
	},
	{
		\"xaid\" : 4294,
		\"name\" : \"Xã Nghĩa Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 133
	},
	{
		\"xaid\" : 4297,
		\"name\" : \"Xã Nghĩa Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 133
	},
	{
		\"xaid\" : 4300,
		\"name\" : \"Xã Nghĩa An\",
		\"type\" : \"Xã\",
		\"maqh\" : 133
	},
	{
		\"xaid\" : 4303,
		\"name\" : \"Thị trấn Yên Thế\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4306,
		\"name\" : \"Xã Tân Phượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4309,
		\"name\" : \"Xã Lâm Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4312,
		\"name\" : \"Xã Khánh Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4315,
		\"name\" : \"Xã Minh Chuẩn\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4318,
		\"name\" : \"Xã Mai Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4321,
		\"name\" : \"Xã Khai Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4324,
		\"name\" : \"Xã Mường Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4327,
		\"name\" : \"Xã An Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4330,
		\"name\" : \"Xã Minh Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4333,
		\"name\" : \"Xã Tô Mậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4336,
		\"name\" : \"Xã Tân Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4339,
		\"name\" : \"Xã Yên Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4342,
		\"name\" : \"Xã Khánh Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4345,
		\"name\" : \"Xã Vĩnh Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4348,
		\"name\" : \"Xã Liễu Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4351,
		\"name\" : \"Xã Động Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4354,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4357,
		\"name\" : \"Xã Minh Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4360,
		\"name\" : \"Xã Trúc Lâu\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4363,
		\"name\" : \"Xã Phúc Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4366,
		\"name\" : \"Xã Phan Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4369,
		\"name\" : \"Xã An Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4372,
		\"name\" : \"Xã Trung Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 135
	},
	{
		\"xaid\" : 4375,
		\"name\" : \"Thị trấn Mậu A\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4378,
		\"name\" : \"Xã Lang Thíp\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4381,
		\"name\" : \"Xã Lâm Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4384,
		\"name\" : \"Xã Châu Quế Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4387,
		\"name\" : \"Xã Châu Quế Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4390,
		\"name\" : \"Xã An Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4393,
		\"name\" : \"Xã Quang Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4396,
		\"name\" : \"Xã Đông An\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4399,
		\"name\" : \"Xã Đông Cuông\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4402,
		\"name\" : \"Xã Phong Dụ Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4405,
		\"name\" : \"Xã Mậu Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4408,
		\"name\" : \"Xã Ngòi A\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4411,
		\"name\" : \"Xã Xuân Tầm\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4414,
		\"name\" : \"Xã Tân Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4417,
		\"name\" : \"Xã An Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4420,
		\"name\" : \"Xã Yên Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4423,
		\"name\" : \"Xã Phong Dụ Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4426,
		\"name\" : \"Xã Yên Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4429,
		\"name\" : \"Xã Đại Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4432,
		\"name\" : \"Xã Yên Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4435,
		\"name\" : \"Xã Đại Phác\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4438,
		\"name\" : \"Xã Yên Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4441,
		\"name\" : \"Xã Xuân Ái\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4444,
		\"name\" : \"Xã Hoàng Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4447,
		\"name\" : \"Xã Viễn Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4450,
		\"name\" : \"Xã Mỏ Vàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4453,
		\"name\" : \"Xã Nà Hẩu\",
		\"type\" : \"Xã\",
		\"maqh\" : 136
	},
	{
		\"xaid\" : 4456,
		\"name\" : \"Thị trấn Mù Căng Chải\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4459,
		\"name\" : \"Xã Hồ Bốn\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4462,
		\"name\" : \"Xã Nậm Có\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4465,
		\"name\" : \"Xã Khao Mang\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4468,
		\"name\" : \"Xã Mồ Dề\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4471,
		\"name\" : \"Xã Chế Cu Nha\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4474,
		\"name\" : \"Xã Lao Chải\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4477,
		\"name\" : \"Xã Kim Nọi\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4480,
		\"name\" : \"Xã Cao Phạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4483,
		\"name\" : \"Xã La Pán Tẩn\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4486,
		\"name\" : \"Xã Dế Su Phình\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4489,
		\"name\" : \"Xã Chế Tạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4492,
		\"name\" : \"Xã Púng Luông\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4495,
		\"name\" : \"Xã Nậm Khắt\",
		\"type\" : \"Xã\",
		\"maqh\" : 137
	},
	{
		\"xaid\" : 4498,
		\"name\" : \"Thị trấn Cổ Phúc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4501,
		\"name\" : \"Xã Tân Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4504,
		\"name\" : \"Xã Báo Đáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4507,
		\"name\" : \"Xã Đào Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4510,
		\"name\" : \"Xã Việt Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4513,
		\"name\" : \"Xã Hòa Cuông\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4516,
		\"name\" : \"Xã Minh Quán\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4519,
		\"name\" : \"Xã Quy Mông\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4522,
		\"name\" : \"Xã Cường Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4525,
		\"name\" : \"Xã Kiên Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4528,
		\"name\" : \"Xã Nga Quán\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4531,
		\"name\" : \"Xã Y Can\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4534,
		\"name\" : \"Xã Minh Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4537,
		\"name\" : \"Xã Lương Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4540,
		\"name\" : \"Xã Âu Lâu\",
		\"type\" : \"Xã\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4543,
		\"name\" : \"Xã Giới Phiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4546,
		\"name\" : \"Phường Hợp Minh\",
		\"type\" : \"Phường\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4549,
		\"name\" : \"Xã Văn Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4552,
		\"name\" : \"Xã Phúc Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4555,
		\"name\" : \"Xã Văn Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4558,
		\"name\" : \"Xã Văn Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 132
	},
	{
		\"xaid\" : 4561,
		\"name\" : \"Xã Bảo Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4564,
		\"name\" : \"Xã Việt Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4567,
		\"name\" : \"Xã Minh Quân\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4570,
		\"name\" : \"Xã Hồng Ca\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4573,
		\"name\" : \"Xã Hưng Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4576,
		\"name\" : \"Xã Hưng Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4579,
		\"name\" : \"Xã Việt Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4582,
		\"name\" : \"Xã Vân Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 138
	},
	{
		\"xaid\" : 4585,
		\"name\" : \"Thị trấn Trạm Tấu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 139
	},
	{
		\"xaid\" : 4588,
		\"name\" : \"Xã Túc Đán\",
		\"type\" : \"Xã\",
		\"maqh\" : 139
	},
	{
		\"xaid\" : 4591,
		\"name\" : \"Xã Pá Lau\",
		\"type\" : \"Xã\",
		\"maqh\" : 139
	},
	{
		\"xaid\" : 4594,
		\"name\" : \"Xã Xà Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 139
	},
	{
		\"xaid\" : 4597,
		\"name\" : \"Xã Phình Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 139
	},
	{
		\"xaid\" : 4600,
		\"name\" : \"Xã Trạm Tấu\",
		\"type\" : \"Xã\",
		\"maqh\" : 139
	},
	{
		\"xaid\" : 4603,
		\"name\" : \"Xã Tà Si Láng\",
		\"type\" : \"Xã\",
		\"maqh\" : 139
	},
	{
		\"xaid\" : 4606,
		\"name\" : \"Xã Pá Hu\",
		\"type\" : \"Xã\",
		\"maqh\" : 139
	},
	{
		\"xaid\" : 4609,
		\"name\" : \"Xã Làng Nhì\",
		\"type\" : \"Xã\",
		\"maqh\" : 139
	},
	{
		\"xaid\" : 4612,
		\"name\" : \"Xã Bản Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 139
	},
	{
		\"xaid\" : 4615,
		\"name\" : \"Xã Bản Mù\",
		\"type\" : \"Xã\",
		\"maqh\" : 139
	},
	{
		\"xaid\" : 4618,
		\"name\" : \"Xã Hát Lìu\",
		\"type\" : \"Xã\",
		\"maqh\" : 139
	},
	{
		\"xaid\" : 4621,
		\"name\" : \"Thị trấn NT Liên Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4624,
		\"name\" : \"Thị trấn NT Nghĩa Lộ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4627,
		\"name\" : \"Thị trấn NT Trần Phú\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4630,
		\"name\" : \"Xã Tú Lệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4633,
		\"name\" : \"Xã Nậm Búng\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4636,
		\"name\" : \"Xã Gia Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4639,
		\"name\" : \"Xã Sùng Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4642,
		\"name\" : \"Xã Nậm Mười\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4645,
		\"name\" : \"Xã An Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4648,
		\"name\" : \"Xã Nậm Lành\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4651,
		\"name\" : \"Xã Sơn Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4654,
		\"name\" : \"Xã Suối Quyền\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4657,
		\"name\" : \"Xã Suối Giàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4660,
		\"name\" : \"Xã Sơn A\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4663,
		\"name\" : \"Xã Phù Nham\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4666,
		\"name\" : \"Xã Nghĩa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4669,
		\"name\" : \"Xã Suối Bu\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4672,
		\"name\" : \"Xã Sơn Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4675,
		\"name\" : \"Xã Thanh Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4678,
		\"name\" : \"Xã Hạnh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4681,
		\"name\" : \"Xã Phúc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4684,
		\"name\" : \"Xã Thạch Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4687,
		\"name\" : \"Xã Đại Lịch\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4690,
		\"name\" : \"Xã Đồng Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4693,
		\"name\" : \"Xã Cát Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4696,
		\"name\" : \"Xã Tân Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4699,
		\"name\" : \"Xã Chấn Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4702,
		\"name\" : \"Xã Bình Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4705,
		\"name\" : \"Xã Thượng Bằng La\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4708,
		\"name\" : \"Xã Minh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4711,
		\"name\" : \"Xã Nghĩa Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 140
	},
	{
		\"xaid\" : 4714,
		\"name\" : \"Thị trấn Yên Bình\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4717,
		\"name\" : \"Thị trấn Thác Bà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4720,
		\"name\" : \"Xã Xuân Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4723,
		\"name\" : \"Xã Tích Cốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4726,
		\"name\" : \"Xã Cảm Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4729,
		\"name\" : \"Xã Ngọc Chấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4732,
		\"name\" : \"Xã Tân Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4735,
		\"name\" : \"Xã Phúc Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4738,
		\"name\" : \"Xã Bảo Ái\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4741,
		\"name\" : \"Xã Mỹ Gia\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4744,
		\"name\" : \"Xã Xuân Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4747,
		\"name\" : \"Xã Mông Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4750,
		\"name\" : \"Xã Cảm Ân\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4753,
		\"name\" : \"Xã Yên Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4756,
		\"name\" : \"Xã Tân Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4759,
		\"name\" : \"Xã Phúc An\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4762,
		\"name\" : \"Xã Bạch Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4765,
		\"name\" : \"Xã Vũ Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4768,
		\"name\" : \"Xã Đại Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4771,
		\"name\" : \"Xã Vĩnh Kiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4774,
		\"name\" : \"Xã Yên Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4777,
		\"name\" : \"Xã Thịnh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4780,
		\"name\" : \"Xã Hán Đà\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4783,
		\"name\" : \"Xã Phú Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4786,
		\"name\" : \"Xã Đại Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 141
	},
	{
		\"xaid\" : 4789,
		\"name\" : \"Phường Thái Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4792,
		\"name\" : \"Phường Tân Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4795,
		\"name\" : \"Phường Thịnh Lang\",
		\"type\" : \"Phường\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4798,
		\"name\" : \"Phường Hữu Nghị\",
		\"type\" : \"Phường\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4801,
		\"name\" : \"Phường Tân Thịnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4804,
		\"name\" : \"Phường Đồng Tiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4807,
		\"name\" : \"Phường Phương Lâm\",
		\"type\" : \"Phường\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4810,
		\"name\" : \"Phường Chăm Mát\",
		\"type\" : \"Phường\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4813,
		\"name\" : \"Xã Yên Mông\",
		\"type\" : \"Xã\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4816,
		\"name\" : \"Xã Sủ Ngòi\",
		\"type\" : \"Xã\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4819,
		\"name\" : \"Xã Dân Chủ\",
		\"type\" : \"Xã\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4822,
		\"name\" : \"Xã Thái Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4825,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4828,
		\"name\" : \"Xã Thống Nhất\",
		\"type\" : \"Xã\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4831,
		\"name\" : \"Thị trấn Đà Bắc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4834,
		\"name\" : \"Xã Đồng Nghê\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4837,
		\"name\" : \"Xã Suối Nánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4840,
		\"name\" : \"Xã Giáp Đắt\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4843,
		\"name\" : \"Xã Mường Tuổng\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4846,
		\"name\" : \"Xã Mường Chiềng\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4849,
		\"name\" : \"Xã Tân Pheo\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4852,
		\"name\" : \"Xã Đồng Chum\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4855,
		\"name\" : \"Xã Tân Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4858,
		\"name\" : \"Xã Đoàn Kết\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4861,
		\"name\" : \"Xã Đồng Ruộng\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4864,
		\"name\" : \"Xã Hào Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4867,
		\"name\" : \"Xã Tu Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4870,
		\"name\" : \"Xã Trung Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4873,
		\"name\" : \"Xã Yên Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4876,
		\"name\" : \"Xã Cao Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4879,
		\"name\" : \"Xã Toàn Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4882,
		\"name\" : \"Xã Tân Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 4885,
		\"name\" : \"Xã Hiền Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4888,
		\"name\" : \"Xã Tiền Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4891,
		\"name\" : \"Xã Vầy Nưa\",
		\"type\" : \"Xã\",
		\"maqh\" : 150
	},
	{
		\"xaid\" : 4894,
		\"name\" : \"Thị trấn Kỳ Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 151
	},
	{
		\"xaid\" : 4897,
		\"name\" : \"Xã Hợp Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 151
	},
	{
		\"xaid\" : 4900,
		\"name\" : \"Xã Phú Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 151
	},
	{
		\"xaid\" : 4903,
		\"name\" : \"Xã Hợp Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 151
	},
	{
		\"xaid\" : 4906,
		\"name\" : \"Xã Phúc Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 151
	},
	{
		\"xaid\" : 4909,
		\"name\" : \"Xã Dân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 151
	},
	{
		\"xaid\" : 4912,
		\"name\" : \"Xã Mông Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 151
	},
	{
		\"xaid\" : 4915,
		\"name\" : \"Xã Dân Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 151
	},
	{
		\"xaid\" : 4918,
		\"name\" : \"Xã Trung Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 148
	},
	{
		\"xaid\" : 4921,
		\"name\" : \"Xã Độc Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 151
	},
	{
		\"xaid\" : 4924,
		\"name\" : \"Thị trấn Lương Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4927,
		\"name\" : \"Xã Yên Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 4930,
		\"name\" : \"Xã Yên Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 4933,
		\"name\" : \"Xã Yên Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 151
	},
	{
		\"xaid\" : 4936,
		\"name\" : \"Xã Tiến Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 4939,
		\"name\" : \"Xã Đông Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 4942,
		\"name\" : \"Xã Lâm Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4945,
		\"name\" : \"Xã Hòa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4948,
		\"name\" : \"Xã Trường Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4951,
		\"name\" : \"Xã Tân Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4954,
		\"name\" : \"Xã Nhuận Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4957,
		\"name\" : \"Xã Cao Răm\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4960,
		\"name\" : \"Xã Cư Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4963,
		\"name\" : \"Xã Hợp Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4966,
		\"name\" : \"Xã Liên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4969,
		\"name\" : \"Xã Thành Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4972,
		\"name\" : \"Xã Tiến Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4975,
		\"name\" : \"Xã Trung Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4978,
		\"name\" : \"Thị trấn Bo\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 4981,
		\"name\" : \"Thị trấn Thanh Hà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 4984,
		\"name\" : \"Xã Đú Sáng\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 4987,
		\"name\" : \"Xã  Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 4990,
		\"name\" : \"Xã Bình Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 4993,
		\"name\" : \"Xã Hùng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 4996,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 4999,
		\"name\" : \"Xã Tú Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5002,
		\"name\" : \"Xã Nật Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5005,
		\"name\" : \"Xã Vĩnh Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5008,
		\"name\" : \"Xã Cao Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 5011,
		\"name\" : \"Xã Sơn Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5014,
		\"name\" : \"Xã Đông Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5017,
		\"name\" : \"Xã Thượng Bì\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5020,
		\"name\" : \"Xã Lập Chiệng\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5023,
		\"name\" : \"Xã Hợp Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 5026,
		\"name\" : \"Xã Vĩnh Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5029,
		\"name\" : \"Xã Hạ Bì\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5032,
		\"name\" : \"Xã Trung Bì\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5035,
		\"name\" : \"Xã Kim Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5038,
		\"name\" : \"Xã Hợp Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5041,
		\"name\" : \"Xã Long Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 5044,
		\"name\" : \"Xã Thượng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5047,
		\"name\" : \"Xã Cao Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 5050,
		\"name\" : \"Xã Kim Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5053,
		\"name\" : \"Xã Kim Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5056,
		\"name\" : \"Xã Hợp Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5059,
		\"name\" : \"Xã Thanh Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 5062,
		\"name\" : \"Xã Hợp Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 152
	},
	{
		\"xaid\" : 5065,
		\"name\" : \"Xã Kim Bôi\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5068,
		\"name\" : \"Xã Nam Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5071,
		\"name\" : \"Xã Kim Truy\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5074,
		\"name\" : \"Xã Thanh Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5077,
		\"name\" : \"Xã Cuối Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5080,
		\"name\" : \"Xã Sào Báy\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5083,
		\"name\" : \"Xã Mi Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5086,
		\"name\" : \"Xã Nuông Dăm\",
		\"type\" : \"Xã\",
		\"maqh\" : 153
	},
	{
		\"xaid\" : 5089,
		\"name\" : \"Thị trấn Cao Phong\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5092,
		\"name\" : \"Xã Bình Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5095,
		\"name\" : \"Xã Thung Nai\",
		\"type\" : \"Xã\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5098,
		\"name\" : \"Xã Bắc Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5101,
		\"name\" : \"Xã Thu Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5104,
		\"name\" : \"Xã Đông Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5107,
		\"name\" : \"Xã Xuân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5110,
		\"name\" : \"Xã Tây Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5113,
		\"name\" : \"Xã Tân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5116,
		\"name\" : \"Xã Dũng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5119,
		\"name\" : \"Xã Nam Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5122,
		\"name\" : \"Xã Yên Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5125,
		\"name\" : \"Xã Yên Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 154
	},
	{
		\"xaid\" : 5128,
		\"name\" : \"Thị trấn Mường Khến\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5131,
		\"name\" : \"Xã Ngòi Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5134,
		\"name\" : \"Xã Trung Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5137,
		\"name\" : \"Xã Phú Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5140,
		\"name\" : \"Xã Phú Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5143,
		\"name\" : \"Xã Mỹ Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5146,
		\"name\" : \"Xã Quy Hậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5149,
		\"name\" : \"Xã Phong Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5152,
		\"name\" : \"Xã Quyết Chiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5155,
		\"name\" : \"Xã Mãn Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5158,
		\"name\" : \"Xã Địch Giáo\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5161,
		\"name\" : \"Xã Tuân Lộ\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5164,
		\"name\" : \"Xã Tử Nê\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5167,
		\"name\" : \"Xã Thanh Hối\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5170,
		\"name\" : \"Xã Ngọc Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5173,
		\"name\" : \"Xã Đông Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5176,
		\"name\" : \"Xã Lũng Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5179,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5182,
		\"name\" : \"Xã Quy Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5185,
		\"name\" : \"Xã Do Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5188,
		\"name\" : \"Xã Nam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5191,
		\"name\" : \"Xã Lỗ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5194,
		\"name\" : \"Xã Ngổ Luông\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5197,
		\"name\" : \"Xã Gia Mô\",
		\"type\" : \"Xã\",
		\"maqh\" : 155
	},
	{
		\"xaid\" : 5200,
		\"name\" : \"Thị trấn Mai Châu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5203,
		\"name\" : \"Xã Tân Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5206,
		\"name\" : \"Xã Phúc Sạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5209,
		\"name\" : \"Xã Pà Cò\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5212,
		\"name\" : \"Xã Hang Kia\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5215,
		\"name\" : \"Xã Ba Khan\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5218,
		\"name\" : \"Xã Tân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5221,
		\"name\" : \"Xã Đồng Bảng\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5224,
		\"name\" : \"Xã Cun Pheo\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5227,
		\"name\" : \"Xã Bao La\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5230,
		\"name\" : \"Xã Piềng Vế\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5233,
		\"name\" : \"Xã Tòng Đậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5236,
		\"name\" : \"Xã Nà Mèo\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5239,
		\"name\" : \"Xã Thung Khe\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5242,
		\"name\" : \"Xã Nà Phòn\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5245,
		\"name\" : \"Xã Săm Khóe\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5248,
		\"name\" : \"Xã Chiềng Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5251,
		\"name\" : \"Xã Mai Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5254,
		\"name\" : \"Xã Nong Luông\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5257,
		\"name\" : \"Xã Mai Hịch\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5260,
		\"name\" : \"Xã Pù Pin\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5263,
		\"name\" : \"Xã Vạn Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 156
	},
	{
		\"xaid\" : 5266,
		\"name\" : \"Thị trấn Vụ Bản\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5269,
		\"name\" : \"Xã Quý Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5272,
		\"name\" : \"Xã Miền Đồi\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5275,
		\"name\" : \"Xã Mỹ Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5278,
		\"name\" : \"Xã Tuân Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5281,
		\"name\" : \"Xã Văn Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5284,
		\"name\" : \"Xã Văn Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5287,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5290,
		\"name\" : \"Xã Nhân Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5293,
		\"name\" : \"Xã Thượng Cốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5296,
		\"name\" : \"Xã Phú Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5299,
		\"name\" : \"Xã Phúc Tuy\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5302,
		\"name\" : \"Xã Xuất Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5305,
		\"name\" : \"Xã Yên Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5308,
		\"name\" : \"Xã Bình Hẻm\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5311,
		\"name\" : \"Xã Chí Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5314,
		\"name\" : \"Xã Bình Cảng\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5317,
		\"name\" : \"Xã Bình Chân\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5320,
		\"name\" : \"Xã Định Cư\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5323,
		\"name\" : \"Xã Chí Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5326,
		\"name\" : \"Xã Liên Vũ\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5329,
		\"name\" : \"Xã Ngọc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5332,
		\"name\" : \"Xã Hương Nhượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5335,
		\"name\" : \"Xã Vũ Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5338,
		\"name\" : \"Xã Tự Do\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5341,
		\"name\" : \"Xã Yên Nghiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5344,
		\"name\" : \"Xã Tân Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5347,
		\"name\" : \"Xã Ân Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5350,
		\"name\" : \"Xã Ngọc Lâu\",
		\"type\" : \"Xã\",
		\"maqh\" : 157
	},
	{
		\"xaid\" : 5353,
		\"name\" : \"Thị trấn Hàng Trạm\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5356,
		\"name\" : \"Xã Lạc Sỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5359,
		\"name\" : \"Xã Lạc Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5362,
		\"name\" : \"Xã Lạc Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5365,
		\"name\" : \"Xã Bảo Hiệu\",
		\"type\" : \"Xã\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5368,
		\"name\" : \"Xã Đa Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5371,
		\"name\" : \"Xã Hữu Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5374,
		\"name\" : \"Xã Lạc Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5377,
		\"name\" : \"Xã Yên Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5380,
		\"name\" : \"Xã Đoàn Kết\",
		\"type\" : \"Xã\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5383,
		\"name\" : \"Xã Phú Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5386,
		\"name\" : \"Xã Yên Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5389,
		\"name\" : \"Xã Ngọc Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 158
	},
	{
		\"xaid\" : 5392,
		\"name\" : \"Thị trấn Chi Nê\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5395,
		\"name\" : \"Xã Phú Lão\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5398,
		\"name\" : \"Xã Phú Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5401,
		\"name\" : \"Xã Cố Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5404,
		\"name\" : \"Xã Hưng Thi\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5407,
		\"name\" : \"Xã Lạc Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5410,
		\"name\" : \"Xã Liên Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5413,
		\"name\" : \"Xã Khoan Dụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5416,
		\"name\" : \"Xã Đồng Môn\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5419,
		\"name\" : \"Xã Đồng Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5422,
		\"name\" : \"Xã Yên Bồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5425,
		\"name\" : \"Xã An Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5428,
		\"name\" : \"Xã An Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 159
	},
	{
		\"xaid\" : 5431,
		\"name\" : \"Phường Quán Triều\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5434,
		\"name\" : \"Phường Quang Vinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5437,
		\"name\" : \"Phường Túc Duyên\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5440,
		\"name\" : \"Phường Hoàng Văn Thụ\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5443,
		\"name\" : \"Phường Trưng Vương\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5446,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5449,
		\"name\" : \"Phường Phan Đình Phùng\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5452,
		\"name\" : \"Phường Tân Thịnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5455,
		\"name\" : \"Phường Thịnh Đán\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5458,
		\"name\" : \"Phường Đồng Quang\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5461,
		\"name\" : \"Phường Gia Sàng\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5464,
		\"name\" : \"Phường Tân Lập\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5467,
		\"name\" : \"Phường Cam Giá\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5470,
		\"name\" : \"Phường Phú Xá\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5473,
		\"name\" : \"Phường Hương Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5476,
		\"name\" : \"Phường Trung Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5479,
		\"name\" : \"Phường Tân Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5482,
		\"name\" : \"Phường Tân Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5485,
		\"name\" : \"Xã Phúc Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5488,
		\"name\" : \"Xã Phúc Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5491,
		\"name\" : \"Xã Quyết Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5494,
		\"name\" : \"Xã Phúc Trìu\",
		\"type\" : \"Xã\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5497,
		\"name\" : \"Xã Thịnh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5500,
		\"name\" : \"Phường Tích Lương\",
		\"type\" : \"Phường\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5503,
		\"name\" : \"Xã Tân Cương\",
		\"type\" : \"Xã\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5506,
		\"name\" : \"Phường Lương Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 165
	},
	{
		\"xaid\" : 5509,
		\"name\" : \"Phường Lương Châu\",
		\"type\" : \"Phường\",
		\"maqh\" : 165
	},
	{
		\"xaid\" : 5512,
		\"name\" : \"Phường Mỏ Chè\",
		\"type\" : \"Phường\",
		\"maqh\" : 165
	},
	{
		\"xaid\" : 5515,
		\"name\" : \"Phường Cải Đan\",
		\"type\" : \"Phường\",
		\"maqh\" : 165
	},
	{
		\"xaid\" : 5518,
		\"name\" : \"Phường Thắng Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 165
	},
	{
		\"xaid\" : 5521,
		\"name\" : \"Phường Phố Cò\",
		\"type\" : \"Phường\",
		\"maqh\" : 165
	},
	{
		\"xaid\" : 5524,
		\"name\" : \"Xã Vinh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 165
	},
	{
		\"xaid\" : 5527,
		\"name\" : \"Xã Tân Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 165
	},
	{
		\"xaid\" : 5528,
		\"name\" : \"Phường Bách Quang\",
		\"type\" : \"Phường\",
		\"maqh\" : 165
	},
	{
		\"xaid\" : 5530,
		\"name\" : \"Xã Bình Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 165
	},
	{
		\"xaid\" : 5533,
		\"name\" : \"Xã Bá Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 165
	},
	{
		\"xaid\" : 5536,
		\"name\" : \"Thị trấn Chợ Chu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5539,
		\"name\" : \"Xã Linh Thông\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5542,
		\"name\" : \"Xã Lam Vỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5545,
		\"name\" : \"Xã Quy Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5548,
		\"name\" : \"Xã Tân Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5551,
		\"name\" : \"Xã Kim Phượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5554,
		\"name\" : \"Xã Bảo Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5557,
		\"name\" : \"Xã Kim Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5560,
		\"name\" : \"Xã Phúc Chu\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5563,
		\"name\" : \"Xã Tân Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5566,
		\"name\" : \"Xã Phượng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5569,
		\"name\" : \"Xã Bảo Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5572,
		\"name\" : \"Xã Đồng Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5575,
		\"name\" : \"Xã Định Biên\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5578,
		\"name\" : \"Xã Thanh Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5581,
		\"name\" : \"Xã Trung Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5584,
		\"name\" : \"Xã Trung Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5587,
		\"name\" : \"Xã Bình Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5590,
		\"name\" : \"Xã Điềm Mặc\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5593,
		\"name\" : \"Xã Phú Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5596,
		\"name\" : \"Xã Bộc Nhiêu\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5599,
		\"name\" : \"Xã Sơn Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5602,
		\"name\" : \"Xã Phú Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5605,
		\"name\" : \"Xã Bình Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 167
	},
	{
		\"xaid\" : 5608,
		\"name\" : \"Thị trấn Giang Tiên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5611,
		\"name\" : \"Thị trấn Đu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5614,
		\"name\" : \"Xã Yên Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5617,
		\"name\" : \"Xã Yên Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5620,
		\"name\" : \"Xã Yên Đổ\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5623,
		\"name\" : \"Xã Yên Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5626,
		\"name\" : \"Xã Ôn Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5629,
		\"name\" : \"Xã Động Đạt\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5632,
		\"name\" : \"Xã Phủ Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5635,
		\"name\" : \"Xã Phú Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5638,
		\"name\" : \"Xã Hợp Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5641,
		\"name\" : \"Xã Tức Tranh\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5644,
		\"name\" : \"Xã Phấn Mễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5647,
		\"name\" : \"Xã Vô Tranh\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5650,
		\"name\" : \"Xã Cổ Lũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5653,
		\"name\" : \"Xã Sơn Cẩm\",
		\"type\" : \"Xã\",
		\"maqh\" : 168
	},
	{
		\"xaid\" : 5656,
		\"name\" : \"Thị trấn Sông Cầu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5659,
		\"name\" : \"Thị trấn Chùa Hang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5662,
		\"name\" : \"Thị trấn Trại Cau\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5665,
		\"name\" : \"Xã Văn Lăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5668,
		\"name\" : \"Xã Tân Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5671,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5674,
		\"name\" : \"Xã Quang Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5677,
		\"name\" : \"Xã Minh Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5680,
		\"name\" : \"Xã Văn Hán\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5683,
		\"name\" : \"Xã Hóa Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5686,
		\"name\" : \"Xã Khe Mo\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5689,
		\"name\" : \"Xã Cây Thị\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5692,
		\"name\" : \"Xã Hóa Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5695,
		\"name\" : \"Xã Cao Ngạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5698,
		\"name\" : \"Xã Hợp Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5701,
		\"name\" : \"Xã Linh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5704,
		\"name\" : \"Xã Tân Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5707,
		\"name\" : \"Xã Nam Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5710,
		\"name\" : \"Xã Đồng Bẩm\",
		\"type\" : \"Xã\",
		\"maqh\" : 164
	},
	{
		\"xaid\" : 5713,
		\"name\" : \"Xã Huống Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 169
	},
	{
		\"xaid\" : 5716,
		\"name\" : \"Thị trấn Đình Cả\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5719,
		\"name\" : \"Xã Sảng Mộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5722,
		\"name\" : \"Xã Nghinh Tường\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5725,
		\"name\" : \"Xã Thần Xa\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5728,
		\"name\" : \"Xã Vũ Chấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5731,
		\"name\" : \"Xã Thượng Nung\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5734,
		\"name\" : \"Xã Phú Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5737,
		\"name\" : \"Xã Cúc Đường\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5740,
		\"name\" : \"Xã La Hiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5743,
		\"name\" : \"Xã Lâu Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5746,
		\"name\" : \"Xã Tràng Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5749,
		\"name\" : \"Xã Phương Giao\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5752,
		\"name\" : \"Xã Liên Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5755,
		\"name\" : \"Xã Dân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5758,
		\"name\" : \"Xã Bình Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 170
	},
	{
		\"xaid\" : 5761,
		\"name\" : \"Thị trấn Hùng Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5764,
		\"name\" : \"Thị trấn Quân Chu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5767,
		\"name\" : \"Xã Phúc Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5770,
		\"name\" : \"Xã Minh Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5773,
		\"name\" : \"Xã Yên Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5776,
		\"name\" : \"Xã Đức Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5779,
		\"name\" : \"Xã Phú Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5782,
		\"name\" : \"Xã Na Mao\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5785,
		\"name\" : \"Xã Phú Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5788,
		\"name\" : \"Xã Tân Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5791,
		\"name\" : \"Xã Phú Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5794,
		\"name\" : \"Xã Phục Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5797,
		\"name\" : \"Xã Phú Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5800,
		\"name\" : \"Xã Bản Ngoại\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5803,
		\"name\" : \"Xã Tiên Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5809,
		\"name\" : \"Xã Cù Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5812,
		\"name\" : \"Xã Hà Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5815,
		\"name\" : \"Xã La Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5818,
		\"name\" : \"Xã Hoàng Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5821,
		\"name\" : \"Xã Khôi Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5824,
		\"name\" : \"Xã An Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5827,
		\"name\" : \"Xã Tân Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5830,
		\"name\" : \"Xã Bình Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5833,
		\"name\" : \"Xã Lục Ba\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5836,
		\"name\" : \"Xã Mỹ Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5839,
		\"name\" : \"Xã Vạn Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5842,
		\"name\" : \"Xã Văn Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5845,
		\"name\" : \"Xã Ký Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5848,
		\"name\" : \"Xã Cát Nê\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5851,
		\"name\" : \"Xã Quân Chu\",
		\"type\" : \"Xã\",
		\"maqh\" : 171
	},
	{
		\"xaid\" : 5854,
		\"name\" : \"Phường Bãi Bông\",
		\"type\" : \"Phường\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5857,
		\"name\" : \"Phường Bắc Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5860,
		\"name\" : \"Phường Ba Hàng\",
		\"type\" : \"Phường\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5863,
		\"name\" : \"Xã Phúc Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5866,
		\"name\" : \"Xã Phúc Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5869,
		\"name\" : \"Xã Hồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5872,
		\"name\" : \"Xã Minh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5875,
		\"name\" : \"Xã Đắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5878,
		\"name\" : \"Phường Đồng Tiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5881,
		\"name\" : \"Xã Thành Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5884,
		\"name\" : \"Xã Tiên Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5887,
		\"name\" : \"Xã Vạn Phái\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5890,
		\"name\" : \"Xã Nam Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5893,
		\"name\" : \"Xã Tân Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5896,
		\"name\" : \"Xã Đông Cao\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5899,
		\"name\" : \"Xã Trung Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5902,
		\"name\" : \"Xã Tân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5905,
		\"name\" : \"Xã Thuận Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 172
	},
	{
		\"xaid\" : 5908,
		\"name\" : \"Thị trấn Hương Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5911,
		\"name\" : \"Xã Bàn Đạt\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5914,
		\"name\" : \"Xã Đồng Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5917,
		\"name\" : \"Xã Tân Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5920,
		\"name\" : \"Xã Tân Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5923,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5926,
		\"name\" : \"Xã Đào Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5929,
		\"name\" : \"Xã Bảo Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5932,
		\"name\" : \"Xã Thượng Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5935,
		\"name\" : \"Xã Tân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5938,
		\"name\" : \"Xã Nhã Lộng\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5941,
		\"name\" : \"Xã Điềm Thụy\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5944,
		\"name\" : \"Xã Xuân Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5947,
		\"name\" : \"Xã Tân Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5950,
		\"name\" : \"Xã Úc Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5953,
		\"name\" : \"Xã Lương Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5956,
		\"name\" : \"Xã Nga My\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5959,
		\"name\" : \"Xã Kha Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5962,
		\"name\" : \"Xã Thanh Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5965,
		\"name\" : \"Xã Dương Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5968,
		\"name\" : \"Xã Hà Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 173
	},
	{
		\"xaid\" : 5971,
		\"name\" : \"Phường Hoàng Văn Thụ\",
		\"type\" : \"Phường\",
		\"maqh\" : 178
	},
	{
		\"xaid\" : 5974,
		\"name\" : \"Phường Tam Thanh\",
		\"type\" : \"Phường\",
		\"maqh\" : 178
	},
	{
		\"xaid\" : 5977,
		\"name\" : \"Phường Vĩnh Trại\",
		\"type\" : \"Phường\",
		\"maqh\" : 178
	},
	{
		\"xaid\" : 5980,
		\"name\" : \"Phường Đông Kinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 178
	},
	{
		\"xaid\" : 5983,
		\"name\" : \"Phường Chi Lăng\",
		\"type\" : \"Phường\",
		\"maqh\" : 178
	},
	{
		\"xaid\" : 5986,
		\"name\" : \"Xã Hoàng Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 178
	},
	{
		\"xaid\" : 5989,
		\"name\" : \"Xã Quảng Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 178
	},
	{
		\"xaid\" : 5992,
		\"name\" : \"Xã Mai Pha\",
		\"type\" : \"Xã\",
		\"maqh\" : 178
	},
	{
		\"xaid\" : 5995,
		\"name\" : \"Thị trấn Thất Khê\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 5998,
		\"name\" : \"Xã Khánh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6001,
		\"name\" : \"Xã Đoàn Kết\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6004,
		\"name\" : \"Xã Quốc Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6007,
		\"name\" : \"Xã Vĩnh Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6010,
		\"name\" : \"Xã Cao Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6013,
		\"name\" : \"Xã Chí Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6016,
		\"name\" : \"Xã Tri Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6019,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6022,
		\"name\" : \"Xã Tân Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6025,
		\"name\" : \"Xã Đội Cấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6028,
		\"name\" : \"Xã Tân Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6031,
		\"name\" : \"Xã Kim Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6034,
		\"name\" : \"Xã Chi Lăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6037,
		\"name\" : \"Xã Trung Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6040,
		\"name\" : \"Xã Đại Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6043,
		\"name\" : \"Xã Đào Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6046,
		\"name\" : \"Xã Đề Thám\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6049,
		\"name\" : \"Xã Kháng Chiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6052,
		\"name\" : \"Xã Bắc Ái\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6055,
		\"name\" : \"Xã Hùng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6058,
		\"name\" : \"Xã Quốc Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6061,
		\"name\" : \"Xã Hùng Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 180
	},
	{
		\"xaid\" : 6064,
		\"name\" : \"Thị trấn Bình Gia\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6067,
		\"name\" : \"Xã Hưng Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6070,
		\"name\" : \"Xã Vĩnh Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6073,
		\"name\" : \"Xã Hoa Thám\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6076,
		\"name\" : \"Xã Quý Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6079,
		\"name\" : \"Xã Hồng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6082,
		\"name\" : \"Xã Yên Lỗ\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6085,
		\"name\" : \"Xã Thiện Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6088,
		\"name\" : \"Xã Quang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6091,
		\"name\" : \"Xã Thiện Thuật\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6094,
		\"name\" : \"Xã Minh Khai\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6097,
		\"name\" : \"Xã Thiện Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6100,
		\"name\" : \"Xã Hoàng Văn Thụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6103,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6106,
		\"name\" : \"Xã Mông Ân\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6109,
		\"name\" : \"Xã Tân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6112,
		\"name\" : \"Xã Tô Hiệu\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6115,
		\"name\" : \"Xã Hồng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6118,
		\"name\" : \"Xã Bình La\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6121,
		\"name\" : \"Xã Tân Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 181
	},
	{
		\"xaid\" : 6124,
		\"name\" : \"Thị trấn Na Sầm\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6127,
		\"name\" : \"Xã Trùng Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6130,
		\"name\" : \"Xã Tân Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6133,
		\"name\" : \"Xã Bắc La\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6136,
		\"name\" : \"Xã Thụy Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6139,
		\"name\" : \"Xã Trùng Quán\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6142,
		\"name\" : \"Xã Tân Tác\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6145,
		\"name\" : \"Xã An Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6148,
		\"name\" : \"Xã Thanh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6151,
		\"name\" : \"Xã Hội Hoan\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6154,
		\"name\" : \"Xã Tân Lang\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6157,
		\"name\" : \"Xã Hoàng Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6160,
		\"name\" : \"Xã Gia Miễn\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6163,
		\"name\" : \"Xã Thành Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6166,
		\"name\" : \"Xã Tân Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6169,
		\"name\" : \"Xã Nam La\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6172,
		\"name\" : \"Xã Tân Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6175,
		\"name\" : \"Xã Hồng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6178,
		\"name\" : \"Xã  Hoàng Văn Thụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6181,
		\"name\" : \"Xã Nhạc Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 182
	},
	{
		\"xaid\" : 6184,
		\"name\" : \"Thị trấn Đồng Đăng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6187,
		\"name\" : \"Thị trấn Cao Lộc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6190,
		\"name\" : \"Xã Bảo Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6193,
		\"name\" : \"Xã Thanh Lòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6196,
		\"name\" : \"Xã Cao Lâu\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6199,
		\"name\" : \"Xã Thạch Đạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6202,
		\"name\" : \"Xã Xuất Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6205,
		\"name\" : \"Xã Hồng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6208,
		\"name\" : \"Xã Thụy Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6211,
		\"name\" : \"Xã Lộc Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6214,
		\"name\" : \"Xã Phú Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6217,
		\"name\" : \"Xã Bình Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6220,
		\"name\" : \"Xã Hải Yến\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6223,
		\"name\" : \"Xã Hòa Cư\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6226,
		\"name\" : \"Xã Hợp Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6229,
		\"name\" : \"Xã Song Giáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6232,
		\"name\" : \"Xã Công Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6235,
		\"name\" : \"Xã Gia Cát\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6238,
		\"name\" : \"Xã Mẫu Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6241,
		\"name\" : \"Xã Xuân Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6244,
		\"name\" : \"Xã Tân Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6247,
		\"name\" : \"Xã Yên Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6250,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 183
	},
	{
		\"xaid\" : 6253,
		\"name\" : \"Thị trấn Văn Quan\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6256,
		\"name\" : \"Xã Trấn Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6259,
		\"name\" : \"Xã Phú Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6262,
		\"name\" : \"Xã Việt Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6265,
		\"name\" : \"Xã Song Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6268,
		\"name\" : \"Xã Vân Mộng\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6271,
		\"name\" : \"Xã Vĩnh Lại\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6274,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6277,
		\"name\" : \"Xã Tú Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6280,
		\"name\" : \"Xã Văn An\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6283,
		\"name\" : \"Xã Đại An\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6286,
		\"name\" : \"Xã Khánh Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6289,
		\"name\" : \"Xã Chu Túc\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6292,
		\"name\" : \"Xã Lương Năng\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6295,
		\"name\" : \"Xã Đồng Giáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6298,
		\"name\" : \"Xã Xuân Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6301,
		\"name\" : \"Xã Tràng Các\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6304,
		\"name\" : \"Xã Tràng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6307,
		\"name\" : \"Xã Tân Đoàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6310,
		\"name\" : \"Xã Bình Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6313,
		\"name\" : \"Xã Tri Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6316,
		\"name\" : \"Xã Tràng Phái\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6319,
		\"name\" : \"Xã Yên Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6322,
		\"name\" : \"Xã Hữu Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 184
	},
	{
		\"xaid\" : 6325,
		\"name\" : \"Thị trấn Bắc Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6328,
		\"name\" : \"Xã Long Đống\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6331,
		\"name\" : \"Xã Vạn Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6334,
		\"name\" : \"Xã Quỳnh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6337,
		\"name\" : \"Xã Đồng ý\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6340,
		\"name\" : \"Xã Tân Tri\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6343,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6346,
		\"name\" : \"Xã Hữu Vĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6349,
		\"name\" : \"Xã Hưng Vũ\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6352,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6355,
		\"name\" : \"Xã Vũ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6358,
		\"name\" : \"Xã Chiêu Vũ\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6361,
		\"name\" : \"Xã Tân Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6364,
		\"name\" : \"Xã Chiến Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6367,
		\"name\" : \"Xã Vũ Lăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6370,
		\"name\" : \"Xã Trấn Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6373,
		\"name\" : \"Xã Vũ Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6376,
		\"name\" : \"Xã Nhất Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6379,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6382,
		\"name\" : \"Xã Nhất Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 185
	},
	{
		\"xaid\" : 6385,
		\"name\" : \"Thị trấn Hữu Lũng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6388,
		\"name\" : \"Xã Hữu Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6391,
		\"name\" : \"Xã Yên Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6394,
		\"name\" : \"Xã Quyết Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6397,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6400,
		\"name\" : \"Xã Yên Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6403,
		\"name\" : \"Xã Yên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6406,
		\"name\" : \"Xã Thiện Kỵ\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6409,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6412,
		\"name\" : \"Xã Yên Vượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6415,
		\"name\" : \"Xã Minh Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6418,
		\"name\" : \"Xã Nhật Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6421,
		\"name\" : \"Xã Thanh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6424,
		\"name\" : \"Xã Đồng Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6427,
		\"name\" : \"Xã Cai Kinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6430,
		\"name\" : \"Xã Hòa Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6433,
		\"name\" : \"Xã Vân Nham\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6436,
		\"name\" : \"Xã Đồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6439,
		\"name\" : \"Xã Đô Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6442,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6445,
		\"name\" : \"Xã Hòa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6448,
		\"name\" : \"Xã Minh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6451,
		\"name\" : \"Xã Hồ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6454,
		\"name\" : \"Xã Sơn Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6457,
		\"name\" : \"Xã Minh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6460,
		\"name\" : \"Xã Hòa Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 186
	},
	{
		\"xaid\" : 6463,
		\"name\" : \"Thị trấn Đồng Mỏ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6466,
		\"name\" : \"Thị trấn Chi Lăng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6469,
		\"name\" : \"Xã Vân An\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6472,
		\"name\" : \"Xã Vân Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6475,
		\"name\" : \"Xã Gia Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6478,
		\"name\" : \"Xã Bắc Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6481,
		\"name\" : \"Xã Chiến Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6484,
		\"name\" : \"Xã Mai Sao\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6487,
		\"name\" : \"Xã Bằng Hữu\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6490,
		\"name\" : \"Xã Thượng Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6493,
		\"name\" : \"Xã Bằng Mạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6496,
		\"name\" : \"Xã Nhân Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6499,
		\"name\" : \"Xã Lâm Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6502,
		\"name\" : \"Xã Liên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6505,
		\"name\" : \"Xã Vạn Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6508,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6511,
		\"name\" : \"Xã Quang Lang\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6514,
		\"name\" : \"Xã Hữu Kiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6517,
		\"name\" : \"Xã Quan Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6520,
		\"name\" : \"Xã Y Tịch\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6523,
		\"name\" : \"Xã Chi Lăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 187
	},
	{
		\"xaid\" : 6526,
		\"name\" : \"Thị trấn Na Dương\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6529,
		\"name\" : \"Thị trấn Lộc Bình\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6532,
		\"name\" : \"Xã Mẫu Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6535,
		\"name\" : \"Xã Bằng Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6538,
		\"name\" : \"Xã Xuân Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6541,
		\"name\" : \"Xã Yên Khoái\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6544,
		\"name\" : \"Xã Xuân Mãn\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6547,
		\"name\" : \"Xã Tú Mịch\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6550,
		\"name\" : \"Xã Hữu Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6553,
		\"name\" : \"Xã Đồng Bục\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6556,
		\"name\" : \"Xã Vân Mộng\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6559,
		\"name\" : \"Xã Tam Gia\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6562,
		\"name\" : \"Xã Tú Đoạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6565,
		\"name\" : \"Xã Khuất Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6568,
		\"name\" : \"Xã Như Khuê\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6571,
		\"name\" : \"Xã Lục Thôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6574,
		\"name\" : \"Xã Tĩnh Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6577,
		\"name\" : \"Xã Xuân Tình\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6580,
		\"name\" : \"Xã Hiệp Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6583,
		\"name\" : \"Xã Nhượng Bạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6586,
		\"name\" : \"Xã Quan Bản\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6589,
		\"name\" : \"Xã Sàn Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6592,
		\"name\" : \"Xã Đông Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6595,
		\"name\" : \"Xã Minh Phát\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6598,
		\"name\" : \"Xã Hữu Lân\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6601,
		\"name\" : \"Xã Lợi Bác\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6604,
		\"name\" : \"Xã Nam Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6607,
		\"name\" : \"Xã Xuân Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6610,
		\"name\" : \"Xã Ái Quốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 188
	},
	{
		\"xaid\" : 6613,
		\"name\" : \"Thị trấn Đình Lập\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 189
	},
	{
		\"xaid\" : 6616,
		\"name\" : \"Thị trấn NT Thái Bình\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 189
	},
	{
		\"xaid\" : 6619,
		\"name\" : \"Xã Bắc Xa\",
		\"type\" : \"Xã\",
		\"maqh\" : 189
	},
	{
		\"xaid\" : 6622,
		\"name\" : \"Xã Bính Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 189
	},
	{
		\"xaid\" : 6625,
		\"name\" : \"Xã Kiên Mộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 189
	},
	{
		\"xaid\" : 6628,
		\"name\" : \"Xã Đình Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 189
	},
	{
		\"xaid\" : 6631,
		\"name\" : \"Xã Thái Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 189
	},
	{
		\"xaid\" : 6634,
		\"name\" : \"Xã Cường Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 189
	},
	{
		\"xaid\" : 6637,
		\"name\" : \"Xã Châu Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 189
	},
	{
		\"xaid\" : 6640,
		\"name\" : \"Xã Lâm Ca\",
		\"type\" : \"Xã\",
		\"maqh\" : 189
	},
	{
		\"xaid\" : 6643,
		\"name\" : \"Xã Đồng Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 189
	},
	{
		\"xaid\" : 6646,
		\"name\" : \"Xã Bắc Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 189
	},
	{
		\"xaid\" : 6649,
		\"name\" : \"Phường Hà Khánh\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6652,
		\"name\" : \"Phường Hà Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6655,
		\"name\" : \"Phường Hà Khẩu\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6658,
		\"name\" : \"Phường Cao Xanh\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6661,
		\"name\" : \"Phường Giếng Đáy\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6664,
		\"name\" : \"Phường Hà Tu\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6667,
		\"name\" : \"Phường Hà Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6670,
		\"name\" : \"Phường Hà Lầm\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6673,
		\"name\" : \"Phường Bãi Cháy\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6676,
		\"name\" : \"Phường Cao Thắng\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6679,
		\"name\" : \"Phường Hùng Thắng\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6682,
		\"name\" : \"Phường Yết Kiêu\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6685,
		\"name\" : \"Phường Trần Hưng Đạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6688,
		\"name\" : \"Phường Hồng Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6691,
		\"name\" : \"Phường Hồng Gai\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6694,
		\"name\" : \"Phường Bạch Đằng\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6697,
		\"name\" : \"Phường Hồng Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6700,
		\"name\" : \"Phường Tuần Châu\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6703,
		\"name\" : \"Phường Việt Hưng\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6706,
		\"name\" : \"Phường Đại Yên\",
		\"type\" : \"Phường\",
		\"maqh\" : 193
	},
	{
		\"xaid\" : 6709,
		\"name\" : \"Phường Ka Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6712,
		\"name\" : \"Phường Trần Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6715,
		\"name\" : \"Phường Ninh Dương\",
		\"type\" : \"Phường\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6718,
		\"name\" : \"Phường Hoà Lạc\",
		\"type\" : \"Phường\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6721,
		\"name\" : \"Phường Trà Cổ\",
		\"type\" : \"Phường\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6724,
		\"name\" : \"Xã Hải Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6727,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6730,
		\"name\" : \"Xã Hải Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6733,
		\"name\" : \"Xã Hải Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6736,
		\"name\" : \"Phường Hải Yên\",
		\"type\" : \"Phường\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6739,
		\"name\" : \"Xã Quảng Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6742,
		\"name\" : \"Phường Hải Hoà\",
		\"type\" : \"Phường\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6745,
		\"name\" : \"Xã Hải Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6748,
		\"name\" : \"Xã Vạn Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6751,
		\"name\" : \"Phường Bình Ngọc\",
		\"type\" : \"Phường\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6754,
		\"name\" : \"Xã Vĩnh Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6757,
		\"name\" : \"Xã Vĩnh Thực\",
		\"type\" : \"Xã\",
		\"maqh\" : 194
	},
	{
		\"xaid\" : 6760,
		\"name\" : \"Phường Mông Dương\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6763,
		\"name\" : \"Phường Cửa Ông\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6766,
		\"name\" : \"Phường Cẩm Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6769,
		\"name\" : \"Phường Cẩm Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6772,
		\"name\" : \"Phường Cẩm Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6775,
		\"name\" : \"Phường Cẩm Tây\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6778,
		\"name\" : \"Phường Quang Hanh\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6781,
		\"name\" : \"Phường Cẩm Thịnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6784,
		\"name\" : \"Phường Cẩm Thủy\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6787,
		\"name\" : \"Phường Cẩm Thạch\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6790,
		\"name\" : \"Phường Cẩm Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6793,
		\"name\" : \"Phường Cẩm Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6796,
		\"name\" : \"Phường Cẩm Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6799,
		\"name\" : \"Xã Cộng Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6802,
		\"name\" : \"Xã Cẩm Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6805,
		\"name\" : \"Xã Dương Huy\",
		\"type\" : \"Xã\",
		\"maqh\" : 195
	},
	{
		\"xaid\" : 6808,
		\"name\" : \"Phường Vàng Danh\",
		\"type\" : \"Phường\",
		\"maqh\" : 196
	},
	{
		\"xaid\" : 6811,
		\"name\" : \"Phường Thanh Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 196
	},
	{
		\"xaid\" : 6814,
		\"name\" : \"Phường Bắc Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 196
	},
	{
		\"xaid\" : 6817,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 196
	},
	{
		\"xaid\" : 6820,
		\"name\" : \"Phường Trưng Vương\",
		\"type\" : \"Phường\",
		\"maqh\" : 196
	},
	{
		\"xaid\" : 6823,
		\"name\" : \"Phường Nam Khê\",
		\"type\" : \"Phường\",
		\"maqh\" : 196
	},
	{
		\"xaid\" : 6826,
		\"name\" : \"Phường Yên Thanh\",
		\"type\" : \"Phường\",
		\"maqh\" : 196
	},
	{
		\"xaid\" : 6829,
		\"name\" : \"Xã Thượng Yên Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 196
	},
	{
		\"xaid\" : 6832,
		\"name\" : \"Phường Phương Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 196
	},
	{
		\"xaid\" : 6835,
		\"name\" : \"Phường Phương Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 196
	},
	{
		\"xaid\" : 6838,
		\"name\" : \"Thị trấn Bình Liêu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 198
	},
	{
		\"xaid\" : 6841,
		\"name\" : \"Xã Hoành Mô\",
		\"type\" : \"Xã\",
		\"maqh\" : 198
	},
	{
		\"xaid\" : 6844,
		\"name\" : \"Xã Đồng Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 198
	},
	{
		\"xaid\" : 6847,
		\"name\" : \"Xã Đồng Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 198
	},
	{
		\"xaid\" : 6850,
		\"name\" : \"Xã Tình Húc\",
		\"type\" : \"Xã\",
		\"maqh\" : 198
	},
	{
		\"xaid\" : 6853,
		\"name\" : \"Xã Vô Ngại\",
		\"type\" : \"Xã\",
		\"maqh\" : 198
	},
	{
		\"xaid\" : 6856,
		\"name\" : \"Xã Lục Hồn\",
		\"type\" : \"Xã\",
		\"maqh\" : 198
	},
	{
		\"xaid\" : 6859,
		\"name\" : \"Xã Húc Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 198
	},
	{
		\"xaid\" : 6862,
		\"name\" : \"Thị trấn Tiên Yên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 199
	},
	{
		\"xaid\" : 6865,
		\"name\" : \"Xã Hà Lâu\",
		\"type\" : \"Xã\",
		\"maqh\" : 199
	},
	{
		\"xaid\" : 6868,
		\"name\" : \"Xã Đại Dực\",
		\"type\" : \"Xã\",
		\"maqh\" : 199
	},
	{
		\"xaid\" : 6869,
		\"name\" : \"Xã Đại Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 199
	},
	{
		\"xaid\" : 6871,
		\"name\" : \"Xã Phong Dụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 199
	},
	{
		\"xaid\" : 6874,
		\"name\" : \"Xã Điền Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 199
	},
	{
		\"xaid\" : 6877,
		\"name\" : \"Xã Đông Ngũ\",
		\"type\" : \"Xã\",
		\"maqh\" : 199
	},
	{
		\"xaid\" : 6880,
		\"name\" : \"Xã Yên Than\",
		\"type\" : \"Xã\",
		\"maqh\" : 199
	},
	{
		\"xaid\" : 6883,
		\"name\" : \"Xã Đông Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 199
	},
	{
		\"xaid\" : 6886,
		\"name\" : \"Xã Hải Lạng\",
		\"type\" : \"Xã\",
		\"maqh\" : 199
	},
	{
		\"xaid\" : 6889,
		\"name\" : \"Xã Tiên Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 199
	},
	{
		\"xaid\" : 6892,
		\"name\" : \"Xã Đồng Rui\",
		\"type\" : \"Xã\",
		\"maqh\" : 199
	},
	{
		\"xaid\" : 6895,
		\"name\" : \"Thị trấn Đầm Hà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 200
	},
	{
		\"xaid\" : 6898,
		\"name\" : \"Xã Quảng Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 200
	},
	{
		\"xaid\" : 6901,
		\"name\" : \"Xã Quảng An\",
		\"type\" : \"Xã\",
		\"maqh\" : 200
	},
	{
		\"xaid\" : 6904,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 200
	},
	{
		\"xaid\" : 6907,
		\"name\" : \"Xã Quảng Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 200
	},
	{
		\"xaid\" : 6910,
		\"name\" : \"Xã Dực Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 200
	},
	{
		\"xaid\" : 6913,
		\"name\" : \"Xã Quảng Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 200
	},
	{
		\"xaid\" : 6916,
		\"name\" : \"Xã Đầm Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 200
	},
	{
		\"xaid\" : 6917,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 200
	},
	{
		\"xaid\" : 6919,
		\"name\" : \"Xã Đại Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 200
	},
	{
		\"xaid\" : 6922,
		\"name\" : \"Thị trấn Quảng Hà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6925,
		\"name\" : \"Xã Quảng Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6928,
		\"name\" : \"Xã Quảng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6931,
		\"name\" : \"Xã Quảng Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6934,
		\"name\" : \"Xã Quảng Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6937,
		\"name\" : \"Xã Quảng Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6940,
		\"name\" : \"Xã Quảng Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6943,
		\"name\" : \"Xã Quảng Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6946,
		\"name\" : \"Xã Quảng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6949,
		\"name\" : \"Xã Đường Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6952,
		\"name\" : \"Xã Quảng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6955,
		\"name\" : \"Xã Quảng Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6958,
		\"name\" : \"Xã Phú Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6961,
		\"name\" : \"Xã Quảng Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6964,
		\"name\" : \"Xã Tiến Tới\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6967,
		\"name\" : \"Xã Cái Chiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 201
	},
	{
		\"xaid\" : 6970,
		\"name\" : \"Thị trấn Ba Chẽ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 202
	},
	{
		\"xaid\" : 6973,
		\"name\" : \"Xã Thanh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 202
	},
	{
		\"xaid\" : 6976,
		\"name\" : \"Xã Thanh Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 202
	},
	{
		\"xaid\" : 6979,
		\"name\" : \"Xã Đạp Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 202
	},
	{
		\"xaid\" : 6982,
		\"name\" : \"Xã Nam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 202
	},
	{
		\"xaid\" : 6985,
		\"name\" : \"Xã Lương Mông\",
		\"type\" : \"Xã\",
		\"maqh\" : 202
	},
	{
		\"xaid\" : 6988,
		\"name\" : \"Xã Đồn Đạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 202
	},
	{
		\"xaid\" : 6991,
		\"name\" : \"Xã Minh Cầm\",
		\"type\" : \"Xã\",
		\"maqh\" : 202
	},
	{
		\"xaid\" : 6994,
		\"name\" : \"Thị trấn Cái Rồng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 203
	},
	{
		\"xaid\" : 6997,
		\"name\" : \"Xã Đài Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 203
	},
	{
		\"xaid\" : 7000,
		\"name\" : \"Xã Bình Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 203
	},
	{
		\"xaid\" : 7003,
		\"name\" : \"Xã Vạn Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 203
	},
	{
		\"xaid\" : 7006,
		\"name\" : \"Xã Minh Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 203
	},
	{
		\"xaid\" : 7009,
		\"name\" : \"Xã Đoàn Kết\",
		\"type\" : \"Xã\",
		\"maqh\" : 203
	},
	{
		\"xaid\" : 7012,
		\"name\" : \"Xã Hạ Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 203
	},
	{
		\"xaid\" : 7015,
		\"name\" : \"Xã Đông Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 203
	},
	{
		\"xaid\" : 7018,
		\"name\" : \"Xã Bản Sen\",
		\"type\" : \"Xã\",
		\"maqh\" : 203
	},
	{
		\"xaid\" : 7021,
		\"name\" : \"Xã Thắng Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 203
	},
	{
		\"xaid\" : 7024,
		\"name\" : \"Xã Quan Lạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 203
	},
	{
		\"xaid\" : 7027,
		\"name\" : \"Xã Ngọc Vừng\",
		\"type\" : \"Xã\",
		\"maqh\" : 203
	},
	{
		\"xaid\" : 7030,
		\"name\" : \"Thị trấn Trới\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7033,
		\"name\" : \"Xã Kỳ Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7036,
		\"name\" : \"Xã Đồng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7039,
		\"name\" : \"Xã Tân Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7042,
		\"name\" : \"Xã Đồng Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7045,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7048,
		\"name\" : \"Xã Vũ Oai\",
		\"type\" : \"Xã\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7051,
		\"name\" : \"Xã Dân Chủ\",
		\"type\" : \"Xã\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7054,
		\"name\" : \"Xã Quảng La\",
		\"type\" : \"Xã\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7057,
		\"name\" : \"Xã Bằng Cả\",
		\"type\" : \"Xã\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7060,
		\"name\" : \"Xã Thống Nhất\",
		\"type\" : \"Xã\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7063,
		\"name\" : \"Xã Sơn Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7066,
		\"name\" : \"Xã Lê Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 204
	},
	{
		\"xaid\" : 7069,
		\"name\" : \"Phường Mạo Khê\",
		\"type\" : \"Phường\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7072,
		\"name\" : \"Phường Đông Triều\",
		\"type\" : \"Phường\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7075,
		\"name\" : \"Xã An Sinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7078,
		\"name\" : \"Xã Tràng Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7081,
		\"name\" : \"Xã Bình Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7084,
		\"name\" : \"Xã Việt Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7087,
		\"name\" : \"Xã Tân Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7090,
		\"name\" : \"Xã Bình Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7093,
		\"name\" : \"Phường Đức Chính\",
		\"type\" : \"Phường\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7096,
		\"name\" : \"Xã Tràng An\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7099,
		\"name\" : \"Xã Nguyễn Huệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7102,
		\"name\" : \"Xã Thủy An\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7105,
		\"name\" : \"Phường Xuân Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7108,
		\"name\" : \"Xã Hồng Thái Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7111,
		\"name\" : \"Xã Hồng Thái Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7114,
		\"name\" : \"Xã Hoàng Quế\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7117,
		\"name\" : \"Xã Yên Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7120,
		\"name\" : \"Xã Hồng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7123,
		\"name\" : \"Phường Kim Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7126,
		\"name\" : \"Phường Hưng Đạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7129,
		\"name\" : \"Xã Yên Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 205
	},
	{
		\"xaid\" : 7132,
		\"name\" : \"Phường Quảng Yên\",
		\"type\" : \"Phường\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7135,
		\"name\" : \"Phường Đông Mai\",
		\"type\" : \"Phường\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7138,
		\"name\" : \"Phường Minh Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7141,
		\"name\" : \"Xã Điền Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 196
	},
	{
		\"xaid\" : 7144,
		\"name\" : \"Xã Sông Khoai\",
		\"type\" : \"Xã\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7147,
		\"name\" : \"Xã Hiệp Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7150,
		\"name\" : \"Phường Cộng Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7153,
		\"name\" : \"Xã Tiền An\",
		\"type\" : \"Xã\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7156,
		\"name\" : \"Xã Hoàng Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7159,
		\"name\" : \"Phường Tân An\",
		\"type\" : \"Phường\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7162,
		\"name\" : \"Phường Yên Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7165,
		\"name\" : \"Phường Nam Hoà\",
		\"type\" : \"Phường\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7168,
		\"name\" : \"Phường Hà An\",
		\"type\" : \"Phường\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7171,
		\"name\" : \"Xã Cẩm La\",
		\"type\" : \"Xã\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7174,
		\"name\" : \"Phường Phong Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7177,
		\"name\" : \"Phường Yên Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7180,
		\"name\" : \"Xã Liên Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7183,
		\"name\" : \"Phường Phong Cốc\",
		\"type\" : \"Phường\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7186,
		\"name\" : \"Xã Liên Vị\",
		\"type\" : \"Xã\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7189,
		\"name\" : \"Xã Tiền Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 206
	},
	{
		\"xaid\" : 7192,
		\"name\" : \"Thị trấn Cô Tô\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 207
	},
	{
		\"xaid\" : 7195,
		\"name\" : \"Xã Đồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 207
	},
	{
		\"xaid\" : 7198,
		\"name\" : \"Xã Thanh Lân\",
		\"type\" : \"Xã\",
		\"maqh\" : 207
	},
	{
		\"xaid\" : 7201,
		\"name\" : \"Phường Thọ Xương\",
		\"type\" : \"Phường\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7204,
		\"name\" : \"Phường Trần Nguyên Hãn\",
		\"type\" : \"Phường\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7207,
		\"name\" : \"Phường Ngô Quyền\",
		\"type\" : \"Phường\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7210,
		\"name\" : \"Phường Hoàng Văn Thụ\",
		\"type\" : \"Phường\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7213,
		\"name\" : \"Phường Trần Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7216,
		\"name\" : \"Phường Mỹ Độ\",
		\"type\" : \"Phường\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7219,
		\"name\" : \"Phường Lê Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7222,
		\"name\" : \"Xã Song Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7225,
		\"name\" : \"Phường Xương Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7228,
		\"name\" : \"Phường Đa Mai\",
		\"type\" : \"Phường\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7231,
		\"name\" : \"Phường Dĩnh Kế\",
		\"type\" : \"Phường\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7234,
		\"name\" : \"Thị trấn Cầu Gồ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7237,
		\"name\" : \"Thị trấn Bố Hạ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7243,
		\"name\" : \"Xã Đồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7246,
		\"name\" : \"Xã Canh Nậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7249,
		\"name\" : \"Xã Xuân Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7252,
		\"name\" : \"Xã Tam Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7255,
		\"name\" : \"Xã Đồng Vương\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7258,
		\"name\" : \"Xã Đồng Hưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7260,
		\"name\" : \"Xã Đồng Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7261,
		\"name\" : \"Xã Tam Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7264,
		\"name\" : \"Xã Tiến Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7267,
		\"name\" : \"Xã Hồng Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7270,
		\"name\" : \"Xã Đồng Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7273,
		\"name\" : \"Xã Đông Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7276,
		\"name\" : \"Xã Tân Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7279,
		\"name\" : \"Xã Hương Vĩ\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7282,
		\"name\" : \"Xã Đồng Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7285,
		\"name\" : \"Xã An Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7288,
		\"name\" : \"Xã Phồn Xương\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7291,
		\"name\" : \"Xã Tân Sỏi\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7294,
		\"name\" : \"Xã Bố Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 215
	},
	{
		\"xaid\" : 7297,
		\"name\" : \"Thị trấn Cao Thượng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7300,
		\"name\" : \"Thị trấn Nhã Nam\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7303,
		\"name\" : \"Xã Lan Giới\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7306,
		\"name\" : \"Xã Nhã Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7309,
		\"name\" : \"Xã Tân Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7312,
		\"name\" : \"Xã Đại Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7315,
		\"name\" : \"Xã Quang Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7318,
		\"name\" : \"Xã Phúc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7321,
		\"name\" : \"Xã An Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7324,
		\"name\" : \"Xã Phúc Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7327,
		\"name\" : \"Xã Liên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7330,
		\"name\" : \"Xã Hợp Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7333,
		\"name\" : \"Xã Lam Cốt\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7336,
		\"name\" : \"Xã Cao Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7339,
		\"name\" : \"Xã Cao Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7342,
		\"name\" : \"Xã Việt Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7345,
		\"name\" : \"Xã Song Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7348,
		\"name\" : \"Xã Ngọc Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7351,
		\"name\" : \"Xã Ngọc Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7354,
		\"name\" : \"Xã Việt Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7357,
		\"name\" : \"Xã Liên Chung\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7360,
		\"name\" : \"Xã Ngọc Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7363,
		\"name\" : \"Xã Ngọc Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7366,
		\"name\" : \"Xã Quế Nham\",
		\"type\" : \"Xã\",
		\"maqh\" : 216
	},
	{
		\"xaid\" : 7369,
		\"name\" : \"Thị trấn Kép\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7375,
		\"name\" : \"Thị trấn Vôi\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7378,
		\"name\" : \"Xã Nghĩa Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7381,
		\"name\" : \"Xã Nghĩa Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7384,
		\"name\" : \"Xã Quang Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7387,
		\"name\" : \"Xã Hương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7390,
		\"name\" : \"Xã Đào Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7393,
		\"name\" : \"Xã Tiên Lục\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7396,
		\"name\" : \"Xã An Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7399,
		\"name\" : \"Xã Tân Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7402,
		\"name\" : \"Xã Mỹ Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7405,
		\"name\" : \"Xã Hương Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7408,
		\"name\" : \"Xã Dương Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7411,
		\"name\" : \"Xã Tân Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7414,
		\"name\" : \"Xã Yên Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7417,
		\"name\" : \"Xã Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7420,
		\"name\" : \"Xã Mỹ Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7423,
		\"name\" : \"Xã Phi Mô\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7426,
		\"name\" : \"Xã Xương Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7429,
		\"name\" : \"Xã Xuân Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7432,
		\"name\" : \"Xã Tân Dĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7435,
		\"name\" : \"Xã Đại Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7438,
		\"name\" : \"Xã Thái Đào\",
		\"type\" : \"Xã\",
		\"maqh\" : 217
	},
	{
		\"xaid\" : 7441,
		\"name\" : \"Xã Dĩnh Trì\",
		\"type\" : \"Xã\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7444,
		\"name\" : \"Thị trấn Đồi Ngô\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7447,
		\"name\" : \"Thị trấn Lục Nam\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7450,
		\"name\" : \"Xã Đông Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7453,
		\"name\" : \"Xã Đông Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7456,
		\"name\" : \"Xã Tam Dị\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7459,
		\"name\" : \"Xã Bảo Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7462,
		\"name\" : \"Xã Bảo Đài\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7465,
		\"name\" : \"Xã Thanh Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7468,
		\"name\" : \"Xã Tiên Nha\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7471,
		\"name\" : \"Xã Trường Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7474,
		\"name\" : \"Xã Tiên Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7477,
		\"name\" : \"Xã Phương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7480,
		\"name\" : \"Xã Chu Điện\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7483,
		\"name\" : \"Xã Cương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7486,
		\"name\" : \"Xã Nghĩa Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7489,
		\"name\" : \"Xã Vô Tranh\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7492,
		\"name\" : \"Xã Bình Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7495,
		\"name\" : \"Xã Lan Mẫu\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7498,
		\"name\" : \"Xã Yên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7501,
		\"name\" : \"Xã Khám Lạng\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7504,
		\"name\" : \"Xã Huyền Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7507,
		\"name\" : \"Xã Trường Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7510,
		\"name\" : \"Xã Lục Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7513,
		\"name\" : \"Xã Bắc Lũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7516,
		\"name\" : \"Xã Vũ Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7519,
		\"name\" : \"Xã Cẩm Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7522,
		\"name\" : \"Xã Đan Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 218
	},
	{
		\"xaid\" : 7525,
		\"name\" : \"Thị trấn Chũ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7528,
		\"name\" : \"Xã Cấm Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7531,
		\"name\" : \"Xã Tân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7534,
		\"name\" : \"Xã Phong Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7537,
		\"name\" : \"Xã Phong Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7540,
		\"name\" : \"Xã Xa Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7543,
		\"name\" : \"Xã Hộ Đáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7546,
		\"name\" : \"Xã Sơn Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7549,
		\"name\" : \"Xã Thanh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7552,
		\"name\" : \"Xã Kiên Lao\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7555,
		\"name\" : \"Xã Biên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7558,
		\"name\" : \"Xã Kiên Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7561,
		\"name\" : \"Xã Hồng Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7564,
		\"name\" : \"Xã Kim Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7567,
		\"name\" : \"Xã Tân Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7570,
		\"name\" : \"Xã Giáp Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7573,
		\"name\" : \"Xã Biển Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7576,
		\"name\" : \"Xã Quý Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7579,
		\"name\" : \"Xã Trù Hựu\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7582,
		\"name\" : \"Xã Phì Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7585,
		\"name\" : \"Xã Nghĩa Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7588,
		\"name\" : \"Xã Tân Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7591,
		\"name\" : \"Xã Đồng Cốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7594,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7597,
		\"name\" : \"Xã Phú Nhuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7600,
		\"name\" : \"Xã Mỹ An\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7603,
		\"name\" : \"Xã Nam Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7606,
		\"name\" : \"Xã Tân Mộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7609,
		\"name\" : \"Xã Đèo Gia\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7612,
		\"name\" : \"Xã Phượng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 219
	},
	{
		\"xaid\" : 7615,
		\"name\" : \"Thị trấn An Châu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7616,
		\"name\" : \"Thị trấn Thanh Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7618,
		\"name\" : \"Xã Thạch Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7621,
		\"name\" : \"Xã Vân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7624,
		\"name\" : \"Xã Hữu Sản\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7627,
		\"name\" : \"Xã Quế Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7630,
		\"name\" : \"Xã Phúc Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7633,
		\"name\" : \"Xã Chiên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7636,
		\"name\" : \"Xã Giáo Liêm\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7639,
		\"name\" : \"Xã Vĩnh Khương\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7642,
		\"name\" : \"Xã Cẩm Đàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7645,
		\"name\" : \"Xã An Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7648,
		\"name\" : \"Xã An Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7651,
		\"name\" : \"Xã Yên Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7654,
		\"name\" : \"Xã Lệ Viễn\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7657,
		\"name\" : \"Xã An Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7660,
		\"name\" : \"Xã An Bá\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7663,
		\"name\" : \"Xã Tuấn Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7666,
		\"name\" : \"Xã Dương Hưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7669,
		\"name\" : \"Xã Bồng Am\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7672,
		\"name\" : \"Xã Long Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7675,
		\"name\" : \"Xã Tuấn Mậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7678,
		\"name\" : \"Xã Thanh Luận\",
		\"type\" : \"Xã\",
		\"maqh\" : 220
	},
	{
		\"xaid\" : 7681,
		\"name\" : \"Thị trấn Neo\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7682,
		\"name\" : \"Thị trấn Tân Dân\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7684,
		\"name\" : \"Xã Lão Hộ\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7687,
		\"name\" : \"Xã Tân Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7690,
		\"name\" : \"Xã Hương Gián\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7693,
		\"name\" : \"Xã Tân An\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7696,
		\"name\" : \"Xã Đồng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7699,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7702,
		\"name\" : \"Xã Quỳnh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7705,
		\"name\" : \"Xã Song Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 213
	},
	{
		\"xaid\" : 7708,
		\"name\" : \"Xã Nội Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7711,
		\"name\" : \"Xã Tiền Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7714,
		\"name\" : \"Xã Xuân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7717,
		\"name\" : \"Xã Tân Liễu\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7720,
		\"name\" : \"Xã Trí Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7723,
		\"name\" : \"Xã Lãng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7726,
		\"name\" : \"Xã Yên Lư\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7729,
		\"name\" : \"Xã Tiến Dũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7732,
		\"name\" : \"Xã Nham Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7735,
		\"name\" : \"Xã Đức Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7738,
		\"name\" : \"Xã Cảnh Thụy\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7741,
		\"name\" : \"Xã Tư Mại\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7744,
		\"name\" : \"Xã Thắng Cương\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7747,
		\"name\" : \"Xã Đồng Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7750,
		\"name\" : \"Xã Đồng Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 221
	},
	{
		\"xaid\" : 7753,
		\"name\" : \"Thị trấn  Bích Động\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7756,
		\"name\" : \"Thị trấn Nếnh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7759,
		\"name\" : \"Xã Thượng Lan\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7762,
		\"name\" : \"Xã Việt Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7765,
		\"name\" : \"Xã Nghĩa Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7768,
		\"name\" : \"Xã Minh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7771,
		\"name\" : \"Xã Hương Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7774,
		\"name\" : \"Xã Tự Lạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7777,
		\"name\" : \"Xã Bích Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7780,
		\"name\" : \"Xã Trung Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7783,
		\"name\" : \"Xã Hồng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7786,
		\"name\" : \"Xã Tiên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7789,
		\"name\" : \"Xã Tăng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7792,
		\"name\" : \"Xã Quảng Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7795,
		\"name\" : \"Xã Hoàng Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7798,
		\"name\" : \"Xã Ninh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7801,
		\"name\" : \"Xã Vân Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7804,
		\"name\" : \"Xã Vân Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7807,
		\"name\" : \"Xã Quang Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 222
	},
	{
		\"xaid\" : 7810,
		\"name\" : \"Thị trấn Thắng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7813,
		\"name\" : \"Xã Đồng Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7816,
		\"name\" : \"Xã Thanh Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7819,
		\"name\" : \"Xã Hoàng Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7822,
		\"name\" : \"Xã Hoàng Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7825,
		\"name\" : \"Xã Hoàng Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7828,
		\"name\" : \"Xã Hoàng An\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7831,
		\"name\" : \"Xã Ngọc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7834,
		\"name\" : \"Xã Thái Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7837,
		\"name\" : \"Xã Hòa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7840,
		\"name\" : \"Xã Đức Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7843,
		\"name\" : \"Xã Quang Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7846,
		\"name\" : \"Xã Lương Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7849,
		\"name\" : \"Xã Hùng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7852,
		\"name\" : \"Xã Đại Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7855,
		\"name\" : \"Xã Thường Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7858,
		\"name\" : \"Xã Hợp Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7861,
		\"name\" : \"Xã Danh Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7864,
		\"name\" : \"Xã Mai Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7867,
		\"name\" : \"Xã Đoan Bái\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7870,
		\"name\" : \"Xã Bắc Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7873,
		\"name\" : \"Xã Xuân Cẩm\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7876,
		\"name\" : \"Xã Hương Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7879,
		\"name\" : \"Xã Đông Lỗ\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7882,
		\"name\" : \"Xã Châu Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7885,
		\"name\" : \"Xã Mai Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 223
	},
	{
		\"xaid\" : 7888,
		\"name\" : \"Phường Dữu Lâu\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7891,
		\"name\" : \"Phường Vân Cơ\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7894,
		\"name\" : \"Phường Nông Trang\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7897,
		\"name\" : \"Phường Tân Dân\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7900,
		\"name\" : \"Phường Gia Cẩm\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7903,
		\"name\" : \"Phường Tiên Cát\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7906,
		\"name\" : \"Phường Thọ Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7909,
		\"name\" : \"Phường Thanh Miếu\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7912,
		\"name\" : \"Phường Bạch Hạc\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7915,
		\"name\" : \"Phường Bến Gót\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7918,
		\"name\" : \"Phường Vân Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7921,
		\"name\" : \"Xã Phượng Lâu\",
		\"type\" : \"Xã\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7924,
		\"name\" : \"Xã Thụy Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7927,
		\"name\" : \"Phường Minh Phương\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7930,
		\"name\" : \"Xã Trưng Vương\",
		\"type\" : \"Xã\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7933,
		\"name\" : \"Phường Minh Nông\",
		\"type\" : \"Phường\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7936,
		\"name\" : \"Xã Sông Lô\",
		\"type\" : \"Xã\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 7939,
		\"name\" : \"Phường Trường Thịnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 228
	},
	{
		\"xaid\" : 7942,
		\"name\" : \"Phường Hùng Vương\",
		\"type\" : \"Phường\",
		\"maqh\" : 228
	},
	{
		\"xaid\" : 7945,
		\"name\" : \"Phường Phong Châu\",
		\"type\" : \"Phường\",
		\"maqh\" : 228
	},
	{
		\"xaid\" : 7948,
		\"name\" : \"Phường Âu Cơ\",
		\"type\" : \"Phường\",
		\"maqh\" : 228
	},
	{
		\"xaid\" : 7951,
		\"name\" : \"Xã Hà Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 228
	},
	{
		\"xaid\" : 7954,
		\"name\" : \"Xã Phú Hộ\",
		\"type\" : \"Xã\",
		\"maqh\" : 228
	},
	{
		\"xaid\" : 7957,
		\"name\" : \"Xã Văn Lung\",
		\"type\" : \"Xã\",
		\"maqh\" : 228
	},
	{
		\"xaid\" : 7960,
		\"name\" : \"Xã Thanh Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 228
	},
	{
		\"xaid\" : 7963,
		\"name\" : \"Xã Hà Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 228
	},
	{
		\"xaid\" : 7966,
		\"name\" : \"Phường Thanh Vinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 228
	},
	{
		\"xaid\" : 7969,
		\"name\" : \"Thị trấn Đoan Hùng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 7972,
		\"name\" : \"Xã Đông Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 7975,
		\"name\" : \"Xã Nghinh Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 7978,
		\"name\" : \"Xã Hùng Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 7981,
		\"name\" : \"Xã Bằng Luân\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 7984,
		\"name\" : \"Xã Vân Du\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 7987,
		\"name\" : \"Xã Phương Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 7990,
		\"name\" : \"Xã Quế Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 7993,
		\"name\" : \"Xã Minh Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 7996,
		\"name\" : \"Xã Bằng Doãn\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 7999,
		\"name\" : \"Xã Chí Đám\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8002,
		\"name\" : \"Xã Phong Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8005,
		\"name\" : \"Xã Phúc Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8008,
		\"name\" : \"Xã Ngọc Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8011,
		\"name\" : \"Xã Hữu Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8014,
		\"name\" : \"Xã Đại Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8017,
		\"name\" : \"Xã Sóc Đăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8020,
		\"name\" : \"Xã Phú Thứ\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8023,
		\"name\" : \"Xã Tây Cốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8026,
		\"name\" : \"Xã Yên Kiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8029,
		\"name\" : \"Xã Hùng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8032,
		\"name\" : \"Xã Vụ Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8035,
		\"name\" : \"Xã Vân Đồn\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8038,
		\"name\" : \"Xã Tiêu Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8041,
		\"name\" : \"Xã Minh Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8044,
		\"name\" : \"Xã Minh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8047,
		\"name\" : \"Xã Chân Mộng\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8050,
		\"name\" : \"Xã Ca Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 230
	},
	{
		\"xaid\" : 8053,
		\"name\" : \"Thị trấn Hạ Hoà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8056,
		\"name\" : \"Xã Đại Phạm\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8059,
		\"name\" : \"Xã Hậu Bổng\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8062,
		\"name\" : \"Xã Đan Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8065,
		\"name\" : \"Xã Hà Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8068,
		\"name\" : \"Xã Lệnh Khanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8071,
		\"name\" : \"Xã Phụ Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8074,
		\"name\" : \"Xã Liên Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8077,
		\"name\" : \"Xã Đan Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8080,
		\"name\" : \"Xã Hiền Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8083,
		\"name\" : \"Xã Động Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8086,
		\"name\" : \"Xã Lâm Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8089,
		\"name\" : \"Xã Phương Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8092,
		\"name\" : \"Xã Gia Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8095,
		\"name\" : \"Xã Ấm Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8098,
		\"name\" : \"Xã Quân Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8101,
		\"name\" : \"Xã Y Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8104,
		\"name\" : \"Xã Hương Xạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8107,
		\"name\" : \"Xã Cáo Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8110,
		\"name\" : \"Xã Xuân Áng\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8113,
		\"name\" : \"Xã Yên Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8116,
		\"name\" : \"Xã Chuế Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8119,
		\"name\" : \"Xã Minh Hạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8122,
		\"name\" : \"Xã Lang Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8125,
		\"name\" : \"Xã Bằng Giã\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8128,
		\"name\" : \"Xã Yên Luật\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8131,
		\"name\" : \"Xã Vô Tranh\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8134,
		\"name\" : \"Xã Văn Lang\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8137,
		\"name\" : \"Xã Chính Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8140,
		\"name\" : \"Xã Minh Côi\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8143,
		\"name\" : \"Xã Vĩnh Chân\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8146,
		\"name\" : \"Xã Mai Tùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8149,
		\"name\" : \"Xã Vụ Cầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 231
	},
	{
		\"xaid\" : 8152,
		\"name\" : \"Thị trấn Thanh Ba\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8155,
		\"name\" : \"Xã Thanh Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8156,
		\"name\" : \"Xã Vân Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8158,
		\"name\" : \"Xã Đông Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8161,
		\"name\" : \"Xã Đại An\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8164,
		\"name\" : \"Xã Hanh Cù\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8167,
		\"name\" : \"Xã Thái Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8170,
		\"name\" : \"Xã Đồng Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8173,
		\"name\" : \"Xã Năng Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8176,
		\"name\" : \"Xã Yển Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8179,
		\"name\" : \"Xã Ninh Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8182,
		\"name\" : \"Xã Quảng Nạp\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8185,
		\"name\" : \"Xã Vũ Yển\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8188,
		\"name\" : \"Xã Yên Nội\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8191,
		\"name\" : \"Xã Phương Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8194,
		\"name\" : \"Xã Võ Lao\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8197,
		\"name\" : \"Xã Khải Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8200,
		\"name\" : \"Xã Mạn Lạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8203,
		\"name\" : \"Xã Thanh Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8206,
		\"name\" : \"Xã Chí Tiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8209,
		\"name\" : \"Xã Đông Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8212,
		\"name\" : \"Xã Hoàng Cương\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8215,
		\"name\" : \"Xã Sơn Cương\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8218,
		\"name\" : \"Xã Thanh Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8221,
		\"name\" : \"Xã Đỗ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8224,
		\"name\" : \"Xã Đỗ Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8227,
		\"name\" : \"Xã Lương Lỗ\",
		\"type\" : \"Xã\",
		\"maqh\" : 232
	},
	{
		\"xaid\" : 8230,
		\"name\" : \"Thị trấn Phong Châu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8233,
		\"name\" : \"Xã Phú Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8234,
		\"name\" : \"Xã Lệ Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8236,
		\"name\" : \"Xã Liên Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8239,
		\"name\" : \"Xã Trạm Thản\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8242,
		\"name\" : \"Xã Trị Quận\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8245,
		\"name\" : \"Xã Trung Giáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8248,
		\"name\" : \"Xã Tiên Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8251,
		\"name\" : \"Xã Hạ Giáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8254,
		\"name\" : \"Xã Bảo Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8257,
		\"name\" : \"Xã Phú Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8260,
		\"name\" : \"Xã Gia Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8263,
		\"name\" : \"Xã Tiên Du\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8266,
		\"name\" : \"Xã Phú Nham\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8269,
		\"name\" : \"Xã Bình Bộ\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8272,
		\"name\" : \"Xã An Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8275,
		\"name\" : \"Xã Tử Đà\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8278,
		\"name\" : \"Xã Phù Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8281,
		\"name\" : \"Xã Kim Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 8284,
		\"name\" : \"Xã Vĩnh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 233
	},
	{
		\"xaid\" : 8287,
		\"name\" : \"Xã Hùng Lô\",
		\"type\" : \"Xã\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 8290,
		\"name\" : \"Thị trấn Yên Lập\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8293,
		\"name\" : \"Xã Mỹ Lung\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8296,
		\"name\" : \"Xã Mỹ Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8299,
		\"name\" : \"Xã Lương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8302,
		\"name\" : \"Xã Xuân An\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8305,
		\"name\" : \"Xã Xuân Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8308,
		\"name\" : \"Xã Xuân Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8311,
		\"name\" : \"Xã Trung Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8314,
		\"name\" : \"Xã Hưng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8317,
		\"name\" : \"Xã Nga Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8320,
		\"name\" : \"Xã Đồng Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8323,
		\"name\" : \"Xã Thượng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8326,
		\"name\" : \"Xã Đồng Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8329,
		\"name\" : \"Xã Phúc Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8332,
		\"name\" : \"Xã Minh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8335,
		\"name\" : \"Xã Ngọc Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8338,
		\"name\" : \"Xã Ngọc Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 234
	},
	{
		\"xaid\" : 8341,
		\"name\" : \"Thị trấn Sông Thao\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8344,
		\"name\" : \"Xã Tiên Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8347,
		\"name\" : \"Xã Tuy Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8350,
		\"name\" : \"Xã Ngô Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8353,
		\"name\" : \"Xã Phương Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8356,
		\"name\" : \"Xã Phượng Vĩ\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8359,
		\"name\" : \"Xã Đồng Cam\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8362,
		\"name\" : \"Xã Thụy Liễu\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8365,
		\"name\" : \"Xã Phùng Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8368,
		\"name\" : \"Xã Sơn Nga\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8371,
		\"name\" : \"Xã Sai Nga\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8374,
		\"name\" : \"Xã Tùng Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8377,
		\"name\" : \"Xã Tam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8380,
		\"name\" : \"Xã Văn Bán\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8383,
		\"name\" : \"Xã Cấp Dẫn\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8386,
		\"name\" : \"Xã Thanh Nga\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8389,
		\"name\" : \"Xã Xương Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8392,
		\"name\" : \"Xã Phú Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8395,
		\"name\" : \"Xã Sơn Tình\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8398,
		\"name\" : \"Xã Yên Tập\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8401,
		\"name\" : \"Xã Hương Lung\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8404,
		\"name\" : \"Xã Tạ Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8407,
		\"name\" : \"Xã Phú Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8410,
		\"name\" : \"Xã Tình Cương\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8413,
		\"name\" : \"Xã Chương Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8416,
		\"name\" : \"Xã Hiền Đa\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8419,
		\"name\" : \"Xã Văn Khúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8422,
		\"name\" : \"Xã Yên Dưỡng\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8425,
		\"name\" : \"Xã Cát Trù\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8428,
		\"name\" : \"Xã Điêu Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8431,
		\"name\" : \"Xã Đồng Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 235
	},
	{
		\"xaid\" : 8434,
		\"name\" : \"Thị trấn Hưng Hoá\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8437,
		\"name\" : \"Xã Vực Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8440,
		\"name\" : \"Xã Hiền Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8443,
		\"name\" : \"Xã Hương Nha\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8446,
		\"name\" : \"Xã Thanh Uyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8449,
		\"name\" : \"Xã Xuân Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8452,
		\"name\" : \"Xã Tứ Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8455,
		\"name\" : \"Xã Văn Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8458,
		\"name\" : \"Xã Hùng Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8461,
		\"name\" : \"Xã Phương Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8464,
		\"name\" : \"Xã Tam Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8467,
		\"name\" : \"Xã Cổ Tiết\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8470,
		\"name\" : \"Xã Quang Húc\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8473,
		\"name\" : \"Xã Hương Nộn\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8476,
		\"name\" : \"Xã Tề Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8479,
		\"name\" : \"Xã Thọ Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8482,
		\"name\" : \"Xã Dị Nậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8485,
		\"name\" : \"Xã Hồng Đà\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8488,
		\"name\" : \"Xã Dậu Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8491,
		\"name\" : \"Xã Thượng Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 236
	},
	{
		\"xaid\" : 8494,
		\"name\" : \"Thị trấn Lâm Thao\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8497,
		\"name\" : \"Xã Tiên Kiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8498,
		\"name\" : \"Thị trấn Hùng Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8500,
		\"name\" : \"Xã Xuân Lũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8503,
		\"name\" : \"Xã Hy Cương\",
		\"type\" : \"Xã\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 8506,
		\"name\" : \"Xã Chu Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 8509,
		\"name\" : \"Xã Xuân Huy\",
		\"type\" : \"Xã\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8512,
		\"name\" : \"Xã Thạch Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8515,
		\"name\" : \"Xã Thanh Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 8518,
		\"name\" : \"Xã Sơn Vi\",
		\"type\" : \"Xã\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8521,
		\"name\" : \"Xã Hợp Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8524,
		\"name\" : \"Xã Sơn Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8527,
		\"name\" : \"Xã Cao Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8530,
		\"name\" : \"Xã Kinh Kệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8533,
		\"name\" : \"Xã Vĩnh Lại\",
		\"type\" : \"Xã\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8536,
		\"name\" : \"Xã Tứ Xã\",
		\"type\" : \"Xã\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8539,
		\"name\" : \"Xã Bản Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 237
	},
	{
		\"xaid\" : 8542,
		\"name\" : \"Thị trấn Thanh Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8545,
		\"name\" : \"Xã Thu Cúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8548,
		\"name\" : \"Xã Thạch Kiệt\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8551,
		\"name\" : \"Xã Thu Ngạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8554,
		\"name\" : \"Xã Kiệt Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8557,
		\"name\" : \"Xã Đồng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8560,
		\"name\" : \"Xã Lai Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8563,
		\"name\" : \"Xã Sơn Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8566,
		\"name\" : \"Xã Tân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8569,
		\"name\" : \"Xã Mỹ Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8572,
		\"name\" : \"Xã Địch Quả\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8575,
		\"name\" : \"Xã Giáp Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8578,
		\"name\" : \"Xã Tân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8581,
		\"name\" : \"Xã Thục Luyện\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8584,
		\"name\" : \"Xã Võ Miếu\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8587,
		\"name\" : \"Xã Thạch Khoán\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8590,
		\"name\" : \"Xã Xuân Đài\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8593,
		\"name\" : \"Xã Minh Đài\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8596,
		\"name\" : \"Xã Văn Luông\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8599,
		\"name\" : \"Xã Xuân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8602,
		\"name\" : \"Xã Cự Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8605,
		\"name\" : \"Xã Tất Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8608,
		\"name\" : \"Xã Long Cốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8611,
		\"name\" : \"Xã Văn Miếu\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8614,
		\"name\" : \"Xã Cự Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8617,
		\"name\" : \"Xã Kim Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8620,
		\"name\" : \"Xã Tam Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8623,
		\"name\" : \"Xã Thắng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8626,
		\"name\" : \"Xã Vinh Tiền\",
		\"type\" : \"Xã\",
		\"maqh\" : 240
	},
	{
		\"xaid\" : 8629,
		\"name\" : \"Xã Tân Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8632,
		\"name\" : \"Xã Hương Cần\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8635,
		\"name\" : \"Xã Khả Cửu\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8638,
		\"name\" : \"Xã Đông Cửu\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8641,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8644,
		\"name\" : \"Xã Yên Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8647,
		\"name\" : \"Xã Yên Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8650,
		\"name\" : \"Xã Thượng Cửu\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8653,
		\"name\" : \"Xã Lương Nha\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8656,
		\"name\" : \"Xã Yên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8659,
		\"name\" : \"Xã Tinh Nhuệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 238
	},
	{
		\"xaid\" : 8662,
		\"name\" : \"Xã Đào Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8665,
		\"name\" : \"Xã Thạch Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8668,
		\"name\" : \"Xã Xuân Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8671,
		\"name\" : \"Xã Tân Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8674,
		\"name\" : \"Thị trấn Thanh Thủy\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8677,
		\"name\" : \"Xã Sơn Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8680,
		\"name\" : \"Xã Bảo Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8683,
		\"name\" : \"Xã Đoan Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8686,
		\"name\" : \"Xã Đồng Luận\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8689,
		\"name\" : \"Xã Hoàng Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8692,
		\"name\" : \"Xã Trung Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8695,
		\"name\" : \"Xã Trung Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8698,
		\"name\" : \"Xã Phượng Mao\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8701,
		\"name\" : \"Xã Yến Mao\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8704,
		\"name\" : \"Xã Tu Vũ\",
		\"type\" : \"Xã\",
		\"maqh\" : 239
	},
	{
		\"xaid\" : 8707,
		\"name\" : \"Phường Tích Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 243
	},
	{
		\"xaid\" : 8710,
		\"name\" : \"Phường Liên Bảo\",
		\"type\" : \"Phường\",
		\"maqh\" : 243
	},
	{
		\"xaid\" : 8713,
		\"name\" : \"Phường Hội Hợp\",
		\"type\" : \"Phường\",
		\"maqh\" : 243
	},
	{
		\"xaid\" : 8716,
		\"name\" : \"Phường Đống Đa\",
		\"type\" : \"Phường\",
		\"maqh\" : 243
	},
	{
		\"xaid\" : 8719,
		\"name\" : \"Phường Ngô Quyền\",
		\"type\" : \"Phường\",
		\"maqh\" : 243
	},
	{
		\"xaid\" : 8722,
		\"name\" : \"Phường Đồng Tâm\",
		\"type\" : \"Phường\",
		\"maqh\" : 243
	},
	{
		\"xaid\" : 8725,
		\"name\" : \"Xã Định Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 243
	},
	{
		\"xaid\" : 8728,
		\"name\" : \"Phường Khai Quang\",
		\"type\" : \"Phường\",
		\"maqh\" : 243
	},
	{
		\"xaid\" : 8731,
		\"name\" : \"Xã Thanh Trù\",
		\"type\" : \"Xã\",
		\"maqh\" : 243
	},
	{
		\"xaid\" : 8734,
		\"name\" : \"Phường Trưng Trắc\",
		\"type\" : \"Phường\",
		\"maqh\" : 244
	},
	{
		\"xaid\" : 8737,
		\"name\" : \"Phường Hùng Vương\",
		\"type\" : \"Phường\",
		\"maqh\" : 244
	},
	{
		\"xaid\" : 8740,
		\"name\" : \"Phường Trưng Nhị\",
		\"type\" : \"Phường\",
		\"maqh\" : 244
	},
	{
		\"xaid\" : 8743,
		\"name\" : \"Phường Phúc Thắng\",
		\"type\" : \"Phường\",
		\"maqh\" : 244
	},
	{
		\"xaid\" : 8746,
		\"name\" : \"Phường Xuân Hoà\",
		\"type\" : \"Phường\",
		\"maqh\" : 244
	},
	{
		\"xaid\" : 8747,
		\"name\" : \"Phường Đồng Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 244
	},
	{
		\"xaid\" : 8749,
		\"name\" : \"Xã Ngọc Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 244
	},
	{
		\"xaid\" : 8752,
		\"name\" : \"Xã Cao Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 244
	},
	{
		\"xaid\" : 8755,
		\"name\" : \"Xã Nam Viêm\",
		\"type\" : \"Xã\",
		\"maqh\" : 244
	},
	{
		\"xaid\" : 8758,
		\"name\" : \"Xã Tiền Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 244
	},
	{
		\"xaid\" : 8761,
		\"name\" : \"Thị trấn Lập Thạch\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8764,
		\"name\" : \"Xã Quang Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8767,
		\"name\" : \"Xã Ngọc Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8770,
		\"name\" : \"Xã Hợp Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8773,
		\"name\" : \"Xã Lãng Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8776,
		\"name\" : \"Xã Quang Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8779,
		\"name\" : \"Xã Bạch Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8782,
		\"name\" : \"Xã Hải Lựu\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8785,
		\"name\" : \"Xã Bắc Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8788,
		\"name\" : \"Xã Thái Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8789,
		\"name\" : \"Thị trấn Hoa Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8791,
		\"name\" : \"Xã Liễn Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8794,
		\"name\" : \"Xã Xuân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8797,
		\"name\" : \"Xã Vân Trục\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8800,
		\"name\" : \"Xã Đồng Quế\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8803,
		\"name\" : \"Xã Nhân Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8806,
		\"name\" : \"Xã Đôn Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8809,
		\"name\" : \"Xã Phương Khoan\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8812,
		\"name\" : \"Xã Liên Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8815,
		\"name\" : \"Xã Tử Du\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8818,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8821,
		\"name\" : \"Xã Nhạo Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8824,
		\"name\" : \"Thị trấn Tam Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8827,
		\"name\" : \"Xã Như Thụy\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8830,
		\"name\" : \"Xã Yên Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8833,
		\"name\" : \"Xã Bàn Giản\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8836,
		\"name\" : \"Xã Xuân Lôi\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8839,
		\"name\" : \"Xã Đồng Ích\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8842,
		\"name\" : \"Xã Tiên Lữ\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8845,
		\"name\" : \"Xã Văn Quán\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8848,
		\"name\" : \"Xã Đồng Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8851,
		\"name\" : \"Xã Tứ Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8854,
		\"name\" : \"Xã Đức Bác\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8857,
		\"name\" : \"Xã Đình Chu\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8860,
		\"name\" : \"Xã Cao Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 253
	},
	{
		\"xaid\" : 8863,
		\"name\" : \"Xã Triệu Đề\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8866,
		\"name\" : \"Xã Sơn Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 246
	},
	{
		\"xaid\" : 8869,
		\"name\" : \"Thị trấn Hợp Hòa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8872,
		\"name\" : \"Xã Hoàng Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8875,
		\"name\" : \"Xã Đồng Tĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8878,
		\"name\" : \"Xã Kim Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8881,
		\"name\" : \"Xã Hướng Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8884,
		\"name\" : \"Xã Đạo Tú\",
		\"type\" : \"Xã\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8887,
		\"name\" : \"Xã An Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8890,
		\"name\" : \"Xã Thanh Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8893,
		\"name\" : \"Xã Duy Phiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8896,
		\"name\" : \"Xã Hoàng Đan\",
		\"type\" : \"Xã\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8899,
		\"name\" : \"Xã Hoàng Lâu\",
		\"type\" : \"Xã\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8902,
		\"name\" : \"Xã Vân Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8905,
		\"name\" : \"Xã Hợp Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 247
	},
	{
		\"xaid\" : 8908,
		\"name\" : \"Thị trấn Tam Đảo\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 248
	},
	{
		\"xaid\" : 8911,
		\"name\" : \"Xã Hợp Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 248
	},
	{
		\"xaid\" : 8914,
		\"name\" : \"Xã Đạo Trù\",
		\"type\" : \"Xã\",
		\"maqh\" : 248
	},
	{
		\"xaid\" : 8917,
		\"name\" : \"Xã Yên Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 248
	},
	{
		\"xaid\" : 8920,
		\"name\" : \"Xã Bồ Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 248
	},
	{
		\"xaid\" : 8923,
		\"name\" : \"Xã Đại Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 248
	},
	{
		\"xaid\" : 8926,
		\"name\" : \"Xã Tam Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 248
	},
	{
		\"xaid\" : 8929,
		\"name\" : \"Xã Hồ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 248
	},
	{
		\"xaid\" : 8932,
		\"name\" : \"Xã Minh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 248
	},
	{
		\"xaid\" : 8935,
		\"name\" : \"Thị trấn Hương Canh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8936,
		\"name\" : \"Thị trấn Gia Khánh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8938,
		\"name\" : \"Xã Trung Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8944,
		\"name\" : \"Xã Bá Hiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8947,
		\"name\" : \"Xã Thiện Kế\",
		\"type\" : \"Xã\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8950,
		\"name\" : \"Xã Hương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8953,
		\"name\" : \"Xã Tam Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8956,
		\"name\" : \"Xã Quất Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8959,
		\"name\" : \"Xã Sơn Lôi\",
		\"type\" : \"Xã\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8962,
		\"name\" : \"Xã Đạo Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8965,
		\"name\" : \"Xã Tân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8968,
		\"name\" : \"Thị trấn Thanh Lãng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8971,
		\"name\" : \"Xã Phú Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 249
	},
	{
		\"xaid\" : 8973,
		\"name\" : \"Thị trấn Chi Đông\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 8974,
		\"name\" : \"Xã Đại Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 8977,
		\"name\" : \"Xã Kim Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 8980,
		\"name\" : \"Xã Thạch Đà\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 8983,
		\"name\" : \"Xã Tiến Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 8986,
		\"name\" : \"Xã Tự Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 8989,
		\"name\" : \"Thị trấn Quang Minh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 8992,
		\"name\" : \"Xã Thanh Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 8995,
		\"name\" : \"Xã Tam Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 8998,
		\"name\" : \"Xã Liên Mạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 9001,
		\"name\" : \"Xã Vạn Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 9004,
		\"name\" : \"Xã Chu Phan\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 9007,
		\"name\" : \"Xã Tiến Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 9010,
		\"name\" : \"Xã Mê Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 9013,
		\"name\" : \"Xã Văn Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 9016,
		\"name\" : \"Xã Hoàng Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 9019,
		\"name\" : \"Xã Tiền Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 9022,
		\"name\" : \"Xã Tráng Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 250
	},
	{
		\"xaid\" : 9025,
		\"name\" : \"Thị trấn Yên Lạc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9028,
		\"name\" : \"Xã Đồng Cương\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9031,
		\"name\" : \"Xã Đồng Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9034,
		\"name\" : \"Xã Bình Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9037,
		\"name\" : \"Xã Trung Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9040,
		\"name\" : \"Xã Tề Lỗ\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9043,
		\"name\" : \"Xã Tam Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9046,
		\"name\" : \"Xã Yên Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9049,
		\"name\" : \"Xã Văn Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9052,
		\"name\" : \"Xã Nguyệt Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9055,
		\"name\" : \"Xã Yên Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9058,
		\"name\" : \"Xã Hồng Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9061,
		\"name\" : \"Xã Trung Kiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9064,
		\"name\" : \"Xã Liên Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9067,
		\"name\" : \"Xã Đại Tự\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9070,
		\"name\" : \"Xã Hồng Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9073,
		\"name\" : \"Xã Trung Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 251
	},
	{
		\"xaid\" : 9076,
		\"name\" : \"Thị trấn Vĩnh Tường\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9079,
		\"name\" : \"Xã Kim Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9082,
		\"name\" : \"Xã Yên Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9085,
		\"name\" : \"Xã Chấn Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9088,
		\"name\" : \"Xã Nghĩa Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9091,
		\"name\" : \"Xã Yên Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9094,
		\"name\" : \"Xã Việt Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9097,
		\"name\" : \"Xã Bồ Sao\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9100,
		\"name\" : \"Xã Đại Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9103,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9106,
		\"name\" : \"Xã Lũng Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9109,
		\"name\" : \"Xã Cao Đại\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9112,
		\"name\" : \"Thị Trấn Thổ Tang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9115,
		\"name\" : \"Xã Vĩnh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9118,
		\"name\" : \"Xã Bình Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9121,
		\"name\" : \"Xã Tân Cương\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9124,
		\"name\" : \"Xã Phú Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9127,
		\"name\" : \"Xã Thượng Trưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9130,
		\"name\" : \"Xã Vũ Di\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9133,
		\"name\" : \"Xã Lý Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9136,
		\"name\" : \"Xã Tuân Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9139,
		\"name\" : \"Xã Vân Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9142,
		\"name\" : \"Xã Tam Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9145,
		\"name\" : \"Thị trấn Tứ Trưng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9148,
		\"name\" : \"Xã Ngũ Kiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9151,
		\"name\" : \"Xã An Tường\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9154,
		\"name\" : \"Xã Vĩnh Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9157,
		\"name\" : \"Xã Phú Đa\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9160,
		\"name\" : \"Xã Vĩnh Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 252
	},
	{
		\"xaid\" : 9163,
		\"name\" : \"Phường Vũ Ninh\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9166,
		\"name\" : \"Phường Đáp Cầu\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9169,
		\"name\" : \"Phường Thị Cầu\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9172,
		\"name\" : \"Phường Kinh Bắc\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9175,
		\"name\" : \"Phường Vệ An\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9178,
		\"name\" : \"Phường Tiền An\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9181,
		\"name\" : \"Phường Đại Phúc\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9184,
		\"name\" : \"Phường Ninh Xá\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9187,
		\"name\" : \"Phường Suối Hoa\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9190,
		\"name\" : \"Phường Võ Cường\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9193,
		\"name\" : \"Thị trấn Chờ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9196,
		\"name\" : \"Xã Dũng Liệt\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9199,
		\"name\" : \"Xã Tam Đa\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9202,
		\"name\" : \"Xã Tam Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9205,
		\"name\" : \"Xã Yên Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9208,
		\"name\" : \"Xã Thụy Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9211,
		\"name\" : \"Xã Hòa Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9214,
		\"name\" : \"Xã Hòa Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9217,
		\"name\" : \"Xã Đông Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9220,
		\"name\" : \"Xã Yên Phụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9223,
		\"name\" : \"Xã Trung Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9226,
		\"name\" : \"Phường Vạn An\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9229,
		\"name\" : \"Xã Đông Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9232,
		\"name\" : \"Xã Long Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9235,
		\"name\" : \"Phường Khúc Xuyên\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9238,
		\"name\" : \"Xã Văn Môn\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9241,
		\"name\" : \"Xã Đông Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 258
	},
	{
		\"xaid\" : 9244,
		\"name\" : \"Phường Phong Khê\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9247,
		\"name\" : \"Thị trấn Phố Mới\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9250,
		\"name\" : \"Xã Việt Thống\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9253,
		\"name\" : \"Xã Đại Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9256,
		\"name\" : \"Xã Kim Chân\",
		\"type\" : \"Xã\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9259,
		\"name\" : \"Xã Nhân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9262,
		\"name\" : \"Xã Bằng An\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9265,
		\"name\" : \"Xã Phương Liễu\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9268,
		\"name\" : \"Xã Quế Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9271,
		\"name\" : \"Phường Vân Dương\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9274,
		\"name\" : \"Xã Phù Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9277,
		\"name\" : \"Xã Phù Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9280,
		\"name\" : \"Xã Phượng Mao\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9283,
		\"name\" : \"Xã Việt Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9286,
		\"name\" : \"Xã Nam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9289,
		\"name\" : \"Xã Ngọc Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9292,
		\"name\" : \"Xã Châu Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9295,
		\"name\" : \"Xã Bồng Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9298,
		\"name\" : \"Xã Cách Bi\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9301,
		\"name\" : \"Xã Đào Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9304,
		\"name\" : \"Xã Yên Giả\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9307,
		\"name\" : \"Xã Mộ Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9310,
		\"name\" : \"Xã Đức Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9313,
		\"name\" : \"Xã Chi Lăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9316,
		\"name\" : \"Xã Hán Quảng\",
		\"type\" : \"Xã\",
		\"maqh\" : 259
	},
	{
		\"xaid\" : 9319,
		\"name\" : \"Thị trấn Lim\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9322,
		\"name\" : \"Xã Phú Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9325,
		\"name\" : \"Phường Khắc Niệm\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9328,
		\"name\" : \"Xã Nội Duệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9331,
		\"name\" : \"Phường Hạp Lĩnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 256
	},
	{
		\"xaid\" : 9334,
		\"name\" : \"Xã Liên Bão\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9337,
		\"name\" : \"Xã Hiên Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9340,
		\"name\" : \"Xã Hoàn Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9343,
		\"name\" : \"Xã Lạc Vệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9346,
		\"name\" : \"Xã Việt Đoàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9349,
		\"name\" : \"Xã Phật Tích\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9352,
		\"name\" : \"Xã Tân Chi\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9355,
		\"name\" : \"Xã Đại Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9358,
		\"name\" : \"Xã Tri Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9361,
		\"name\" : \"Xã Minh Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9364,
		\"name\" : \"Xã Cảnh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 260
	},
	{
		\"xaid\" : 9367,
		\"name\" : \"Phường Đông Ngàn\",
		\"type\" : \"Phường\",
		\"maqh\" : 261
	},
	{
		\"xaid\" : 9370,
		\"name\" : \"Xã Tam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 261
	},
	{
		\"xaid\" : 9373,
		\"name\" : \"Xã Hương Mạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 261
	},
	{
		\"xaid\" : 9376,
		\"name\" : \"Xã Tương Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 261
	},
	{
		\"xaid\" : 9379,
		\"name\" : \"Xã Phù Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 261
	},
	{
		\"xaid\" : 9382,
		\"name\" : \"Phường Đồng Kỵ\",
		\"type\" : \"Phường\",
		\"maqh\" : 261
	},
	{
		\"xaid\" : 9383,
		\"name\" : \"Phường Trang Hạ\",
		\"type\" : \"Phường\",
		\"maqh\" : 261
	},
	{
		\"xaid\" : 9385,
		\"name\" : \"Phường Đồng Nguyên\",
		\"type\" : \"Phường\",
		\"maqh\" : 261
	},
	{
		\"xaid\" : 9388,
		\"name\" : \"Phường Châu Khê\",
		\"type\" : \"Phường\",
		\"maqh\" : 261
	},
	{
		\"xaid\" : 9391,
		\"name\" : \"Phường Tân Hồng\",
		\"type\" : \"Phường\",
		\"maqh\" : 261
	},
	{
		\"xaid\" : 9394,
		\"name\" : \"Phường Đình Bảng\",
		\"type\" : \"Phường\",
		\"maqh\" : 261
	},
	{
		\"xaid\" : 9397,
		\"name\" : \"Xã Phù Chẩn\",
		\"type\" : \"Xã\",
		\"maqh\" : 261
	},
	{
		\"xaid\" : 9400,
		\"name\" : \"Thị trấn Hồ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9403,
		\"name\" : \"Xã Hoài Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9406,
		\"name\" : \"Xã Đại Đồng Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9409,
		\"name\" : \"Xã Mão Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9412,
		\"name\" : \"Xã Song Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9415,
		\"name\" : \"Xã Đình Tổ\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9418,
		\"name\" : \"Xã An Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9421,
		\"name\" : \"Xã Trí Quả\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9424,
		\"name\" : \"Xã Gia Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9427,
		\"name\" : \"Xã Thanh Khương\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9430,
		\"name\" : \"Xã Trạm Lộ\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9433,
		\"name\" : \"Xã Xuân Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9436,
		\"name\" : \"Xã Hà Mãn\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9439,
		\"name\" : \"Xã Ngũ Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9442,
		\"name\" : \"Xã Nguyệt Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9445,
		\"name\" : \"Xã Ninh Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9448,
		\"name\" : \"Xã Nghĩa Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9451,
		\"name\" : \"Xã Song Liễu\",
		\"type\" : \"Xã\",
		\"maqh\" : 262
	},
	{
		\"xaid\" : 9454,
		\"name\" : \"Thị trấn Gia Bình\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9457,
		\"name\" : \"Xã Vạn Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9460,
		\"name\" : \"Xã Thái Bảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9463,
		\"name\" : \"Xã Giang Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9466,
		\"name\" : \"Xã Cao Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9469,
		\"name\" : \"Xã Đại Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9472,
		\"name\" : \"Xã Song Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9475,
		\"name\" : \"Xã Bình Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9478,
		\"name\" : \"Xã Lãng Ngâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9481,
		\"name\" : \"Xã Nhân Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9484,
		\"name\" : \"Xã Xuân Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9487,
		\"name\" : \"Xã Đông Cứu\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9490,
		\"name\" : \"Xã Đại Bái\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9493,
		\"name\" : \"Xã Quỳnh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 263
	},
	{
		\"xaid\" : 9496,
		\"name\" : \"Thị trấn Thứa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9499,
		\"name\" : \"Xã An Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9502,
		\"name\" : \"Xã Trung Kênh\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9505,
		\"name\" : \"Xã Phú Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9508,
		\"name\" : \"Xã Mỹ Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9511,
		\"name\" : \"Xã Tân Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9514,
		\"name\" : \"Xã Quảng Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9517,
		\"name\" : \"Xã Trừng Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9520,
		\"name\" : \"Xã Lai Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9523,
		\"name\" : \"Xã Trung Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9526,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9529,
		\"name\" : \"Xã Bình Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9532,
		\"name\" : \"Xã Phú Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9535,
		\"name\" : \"Xã Lâm Thao\",
		\"type\" : \"Xã\",
		\"maqh\" : 264
	},
	{
		\"xaid\" : 9538,
		\"name\" : \"Phường Nguyễn Trãi\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9541,
		\"name\" : \"Phường Mộ Lao\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9542,
		\"name\" : \"Phường Văn Quán\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9544,
		\"name\" : \"Phường Vạn Phúc\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9547,
		\"name\" : \"Phường Yết Kiêu\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9550,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9551,
		\"name\" : \"Phường La Khê\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9552,
		\"name\" : \"Phường Phú La\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9553,
		\"name\" : \"Phường Phúc La\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9556,
		\"name\" : \"Phường Hà Cầu\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9562,
		\"name\" : \"Phường Yên Nghĩa\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9565,
		\"name\" : \"Phường Kiến Hưng\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9568,
		\"name\" : \"Phường Phú Lãm\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9571,
		\"name\" : \"Phường Phú Lương\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9574,
		\"name\" : \"Phường Lê Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9577,
		\"name\" : \"Phường Phú Thịnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9580,
		\"name\" : \"Phường Ngô Quyền\",
		\"type\" : \"Phường\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9583,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9586,
		\"name\" : \"Phường Sơn Lộc\",
		\"type\" : \"Phường\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9589,
		\"name\" : \"Phường Xuân Khanh\",
		\"type\" : \"Phường\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9592,
		\"name\" : \"Xã Đường Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9595,
		\"name\" : \"Phường Viên Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9598,
		\"name\" : \"Xã Xuân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9601,
		\"name\" : \"Phường Trung Hưng\",
		\"type\" : \"Phường\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9604,
		\"name\" : \"Xã Thanh Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9607,
		\"name\" : \"Phường Trung Sơn Trầm\",
		\"type\" : \"Phường\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9610,
		\"name\" : \"Xã Kim Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9613,
		\"name\" : \"Xã Sơn Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9616,
		\"name\" : \"Xã Cổ Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 269
	},
	{
		\"xaid\" : 9619,
		\"name\" : \"Thị trấn Tây Đằng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9622,
		\"name\" : \"Xã Tân Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 227
	},
	{
		\"xaid\" : 9625,
		\"name\" : \"Xã Phú Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9628,
		\"name\" : \"Xã Cổ Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9631,
		\"name\" : \"Xã Tản Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9634,
		\"name\" : \"Xã Vạn Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9637,
		\"name\" : \"Xã Châu Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9640,
		\"name\" : \"Xã Phong Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9643,
		\"name\" : \"Xã Phú Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9646,
		\"name\" : \"Xã Phú Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9649,
		\"name\" : \"Xã Phú Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9652,
		\"name\" : \"Xã Thái Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9655,
		\"name\" : \"Xã Đồng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9658,
		\"name\" : \"Xã Phú Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9661,
		\"name\" : \"Xã Minh Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9664,
		\"name\" : \"Xã Vật Lại\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9667,
		\"name\" : \"Xã Chu Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9670,
		\"name\" : \"Xã Tòng Bạt\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9673,
		\"name\" : \"Xã Cẩm Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9676,
		\"name\" : \"Xã Sơn Đà\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9679,
		\"name\" : \"Xã Đông Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9682,
		\"name\" : \"Xã Tiên Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9685,
		\"name\" : \"Xã Thụy An\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9688,
		\"name\" : \"Xã Cam Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9691,
		\"name\" : \"Xã Thuần Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9694,
		\"name\" : \"Xã Tản Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9697,
		\"name\" : \"Xã Ba Trại\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9700,
		\"name\" : \"Xã Minh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9703,
		\"name\" : \"Xã Ba Vì\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9706,
		\"name\" : \"Xã Vân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9709,
		\"name\" : \"Xã Yên Bài\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9712,
		\"name\" : \"Xã Khánh Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 271
	},
	{
		\"xaid\" : 9715,
		\"name\" : \"Thị trấn Phúc Thọ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9718,
		\"name\" : \"Xã Vân Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9721,
		\"name\" : \"Xã Vân Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9724,
		\"name\" : \"Xã Vân Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9727,
		\"name\" : \"Xã Xuân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9730,
		\"name\" : \"Xã Phương Độ\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9733,
		\"name\" : \"Xã Sen Chiểu\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9736,
		\"name\" : \"Xã Cẩm Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9739,
		\"name\" : \"Xã Võng Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9742,
		\"name\" : \"Xã Thọ Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9745,
		\"name\" : \"Xã Long Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9748,
		\"name\" : \"Xã Thượng Cốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9751,
		\"name\" : \"Xã Hát Môn\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9754,
		\"name\" : \"Xã Tích Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9757,
		\"name\" : \"Xã Thanh Đa\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9760,
		\"name\" : \"Xã Trạch Mỹ Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9763,
		\"name\" : \"Xã Phúc Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9766,
		\"name\" : \"Xã Ngọc Tảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9769,
		\"name\" : \"Xã Phụng Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9772,
		\"name\" : \"Xã Tam Thuấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9775,
		\"name\" : \"Xã Tam Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9778,
		\"name\" : \"Xã Hiệp Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9781,
		\"name\" : \"Xã Liên Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 272
	},
	{
		\"xaid\" : 9784,
		\"name\" : \"Thị trấn Phùng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9787,
		\"name\" : \"Xã Trung Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9790,
		\"name\" : \"Xã Thọ An\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9793,
		\"name\" : \"Xã Thọ Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9796,
		\"name\" : \"Xã Hồng Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9799,
		\"name\" : \"Xã Liên Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9802,
		\"name\" : \"Xã Liên Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9805,
		\"name\" : \"Xã Hạ Mỗ\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9808,
		\"name\" : \"Xã Liên Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9811,
		\"name\" : \"Xã Phương Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9814,
		\"name\" : \"Xã Thượng Mỗ\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9817,
		\"name\" : \"Xã Tân Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9820,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9823,
		\"name\" : \"Xã Đan Phượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9826,
		\"name\" : \"Xã Đồng Tháp\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9829,
		\"name\" : \"Xã Song Phượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 273
	},
	{
		\"xaid\" : 9832,
		\"name\" : \"Thị trấn Trạm Trôi\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9835,
		\"name\" : \"Xã Đức Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9838,
		\"name\" : \"Xã Minh Khai\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9841,
		\"name\" : \"Xã Dương Liễu\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9844,
		\"name\" : \"Xã Di Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9847,
		\"name\" : \"Xã Đức Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9850,
		\"name\" : \"Xã Cát Quế\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9853,
		\"name\" : \"Xã Kim Chung\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9856,
		\"name\" : \"Xã Yên Sở\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9859,
		\"name\" : \"Xã Sơn Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9862,
		\"name\" : \"Xã Vân Canh\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9865,
		\"name\" : \"Xã Đắc Sở\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9868,
		\"name\" : \"Xã Lại Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9871,
		\"name\" : \"Xã Tiền Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9874,
		\"name\" : \"Xã Song Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9877,
		\"name\" : \"Xã An Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9880,
		\"name\" : \"Xã An Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9883,
		\"name\" : \"Xã Vân Côn\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9886,
		\"name\" : \"Phường Dương Nội\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 9889,
		\"name\" : \"Xã La Phù\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9892,
		\"name\" : \"Xã Đông La\",
		\"type\" : \"Xã\",
		\"maqh\" : 274
	},
	{
		\"xaid\" : 9895,
		\"name\" : \"Thị trấn Quốc Oai\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9898,
		\"name\" : \"Xã Sài Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9901,
		\"name\" : \"Xã Phượng Cách\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9904,
		\"name\" : \"Xã Yên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9907,
		\"name\" : \"Xã Ngọc Liệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9910,
		\"name\" : \"Xã Ngọc Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9913,
		\"name\" : \"Xã Liệp Tuyết\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9916,
		\"name\" : \"Xã Thạch Thán\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9919,
		\"name\" : \"Xã Đồng Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9922,
		\"name\" : \"Xã Phú Cát\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9925,
		\"name\" : \"Xã Tuyết Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9928,
		\"name\" : \"Xã Nghĩa Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9931,
		\"name\" : \"Xã Cộng Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9934,
		\"name\" : \"Xã Tân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9937,
		\"name\" : \"Xã Đại Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9940,
		\"name\" : \"Xã Phú Mãn\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9943,
		\"name\" : \"Xã Cấn Hữu\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9946,
		\"name\" : \"Xã Tân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9949,
		\"name\" : \"Xã Hòa Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9952,
		\"name\" : \"Xã Đông Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 275
	},
	{
		\"xaid\" : 9955,
		\"name\" : \"Thị trấn Liên Quan\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9958,
		\"name\" : \"Xã Đại Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9961,
		\"name\" : \"Xã Cẩm Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9964,
		\"name\" : \"Xã Lại Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9967,
		\"name\" : \"Xã Phú Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9970,
		\"name\" : \"Xã Hương Ngải\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9973,
		\"name\" : \"Xã Canh Nậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9976,
		\"name\" : \"Xã Kim Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9979,
		\"name\" : \"Xã Dị Nậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9982,
		\"name\" : \"Xã Bình Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9985,
		\"name\" : \"Xã Chàng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9988,
		\"name\" : \"Xã Thạch Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9991,
		\"name\" : \"Xã Cần Kiệm\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9994,
		\"name\" : \"Xã Hữu Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 9997,
		\"name\" : \"Xã Phùng Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 10000,
		\"name\" : \"Xã Tân Xã\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 10003,
		\"name\" : \"Xã Thạch Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 10006,
		\"name\" : \"Xã Bình Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 10009,
		\"name\" : \"Xã Hạ Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 10012,
		\"name\" : \"Xã Đồng Trúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 276
	},
	{
		\"xaid\" : 10015,
		\"name\" : \"Thị trấn Chúc Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10018,
		\"name\" : \"Thị trấn Xuân Mai\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10021,
		\"name\" : \"Xã Phụng Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10024,
		\"name\" : \"Xã Tiên Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10027,
		\"name\" : \"Xã Đông Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10030,
		\"name\" : \"Xã Đông Phương Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10033,
		\"name\" : \"Xã Phú Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10039,
		\"name\" : \"Xã Trường Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10042,
		\"name\" : \"Xã Ngọc Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10045,
		\"name\" : \"Xã Thủy Xuân Tiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10048,
		\"name\" : \"Xã Thanh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10051,
		\"name\" : \"Xã Trung Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10054,
		\"name\" : \"Xã Đại Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10057,
		\"name\" : \"Xã Thụy Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10060,
		\"name\" : \"Xã Tốt Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10063,
		\"name\" : \"Xã Lam Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10066,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10069,
		\"name\" : \"Xã Nam Phương Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10072,
		\"name\" : \"Xã Hợp Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10075,
		\"name\" : \"Xã Hoàng Văn Thụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10078,
		\"name\" : \"Xã Hoàng Diệu\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10081,
		\"name\" : \"Xã Hữu Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10084,
		\"name\" : \"Xã Quảng Bị\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10087,
		\"name\" : \"Xã Mỹ Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10090,
		\"name\" : \"Xã Thượng Vực\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10093,
		\"name\" : \"Xã Hồng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10096,
		\"name\" : \"Xã Đồng Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10099,
		\"name\" : \"Xã Trần Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10102,
		\"name\" : \"Xã Văn Võ\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10105,
		\"name\" : \"Xã Đồng Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10108,
		\"name\" : \"Xã Hòa Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10111,
		\"name\" : \"Xã Phú Nam An\",
		\"type\" : \"Xã\",
		\"maqh\" : 277
	},
	{
		\"xaid\" : 10114,
		\"name\" : \"Thị trấn Kim Bài\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10117,
		\"name\" : \"Phường Đồng Mai\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 10120,
		\"name\" : \"Xã Cự Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10123,
		\"name\" : \"Phường Biên Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 268
	},
	{
		\"xaid\" : 10126,
		\"name\" : \"Xã Bích Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10129,
		\"name\" : \"Xã Mỹ Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10132,
		\"name\" : \"Xã Cao Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10135,
		\"name\" : \"Xã Bình Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10138,
		\"name\" : \"Xã Tam Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10141,
		\"name\" : \"Xã Thanh Cao\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10144,
		\"name\" : \"Xã Thanh Thùy\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10147,
		\"name\" : \"Xã Thanh Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10150,
		\"name\" : \"Xã Thanh Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10153,
		\"name\" : \"Xã Đỗ Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10156,
		\"name\" : \"Xã Kim An\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10159,
		\"name\" : \"Xã Kim Thư\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10162,
		\"name\" : \"Xã Phương Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10165,
		\"name\" : \"Xã Tân Ước\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10168,
		\"name\" : \"Xã Dân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10171,
		\"name\" : \"Xã Liên Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10174,
		\"name\" : \"Xã Cao Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10177,
		\"name\" : \"Xã Xuân Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10180,
		\"name\" : \"Xã Hồng Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 278
	},
	{
		\"xaid\" : 10183,
		\"name\" : \"Thị trấn Thường Tín\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10186,
		\"name\" : \"Xã Ninh Sở\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10189,
		\"name\" : \"Xã Nhị Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10192,
		\"name\" : \"Xã Duyên Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10195,
		\"name\" : \"Xã Khánh Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10198,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10201,
		\"name\" : \"Xã Văn Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10204,
		\"name\" : \"Xã Hiền Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10207,
		\"name\" : \"Xã Hồng Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10210,
		\"name\" : \"Xã Vân Tảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10213,
		\"name\" : \"Xã Liên Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10216,
		\"name\" : \"Xã Văn Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10219,
		\"name\" : \"Xã Tự Nhiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10222,
		\"name\" : \"Xã Tiền Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10225,
		\"name\" : \"Xã Hà Hồi\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10228,
		\"name\" : \"Xã Thư Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10231,
		\"name\" : \"Xã Nguyễn Trãi\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10234,
		\"name\" : \"Xã Quất Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10237,
		\"name\" : \"Xã Chương Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10240,
		\"name\" : \"Xã Tân Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10243,
		\"name\" : \"Xã Lê Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10246,
		\"name\" : \"Xã Thắng Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10249,
		\"name\" : \"Xã Dũng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10252,
		\"name\" : \"Xã Thống Nhất\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10255,
		\"name\" : \"Xã Nghiêm Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10258,
		\"name\" : \"Xã Tô Hiệu\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10261,
		\"name\" : \"Xã Văn Tự\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10264,
		\"name\" : \"Xã Vạn Điểm\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10267,
		\"name\" : \"Xã Minh Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 279
	},
	{
		\"xaid\" : 10270,
		\"name\" : \"Thị trấn Phú Minh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10273,
		\"name\" : \"Thị trấn Phú Xuyên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10276,
		\"name\" : \"Xã Hồng Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10279,
		\"name\" : \"Xã Phượng Dực\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10282,
		\"name\" : \"Xã Văn Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10285,
		\"name\" : \"Xã Thụy Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10288,
		\"name\" : \"Xã Tri Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10291,
		\"name\" : \"Xã Đại Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10294,
		\"name\" : \"Xã Phú Túc\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10297,
		\"name\" : \"Xã Văn Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10300,
		\"name\" : \"Xã Hồng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10303,
		\"name\" : \"Xã Hoàng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10306,
		\"name\" : \"Xã Quang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10309,
		\"name\" : \"Xã Nam Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10312,
		\"name\" : \"Xã Nam Triều\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10315,
		\"name\" : \"Xã Tân Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10318,
		\"name\" : \"Xã Sơn Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10321,
		\"name\" : \"Xã Chuyên Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10324,
		\"name\" : \"Xã Khai Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10327,
		\"name\" : \"Xã Phúc Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10330,
		\"name\" : \"Xã Vân Từ\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10333,
		\"name\" : \"Xã Tri Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10336,
		\"name\" : \"Xã Đại Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10339,
		\"name\" : \"Xã Phú Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10342,
		\"name\" : \"Xã Bạch Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10345,
		\"name\" : \"Xã Quang Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10348,
		\"name\" : \"Xã Châu Can\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10351,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 280
	},
	{
		\"xaid\" : 10354,
		\"name\" : \"Thị trấn Vân Đình\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10357,
		\"name\" : \"Xã Viên An\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10360,
		\"name\" : \"Xã Viên Nội\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10363,
		\"name\" : \"Xã Hoa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10366,
		\"name\" : \"Xã Quảng Phú Cầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10369,
		\"name\" : \"Xã Trường Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10372,
		\"name\" : \"Xã Cao Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10375,
		\"name\" : \"Xã Liên Bạt\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10378,
		\"name\" : \"Xã Sơn Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10381,
		\"name\" : \"Xã Đồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10384,
		\"name\" : \"Xã Phương Tú\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10387,
		\"name\" : \"Xã Trung Tú\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10390,
		\"name\" : \"Xã Đồng Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10393,
		\"name\" : \"Xã Tảo Dương Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10396,
		\"name\" : \"Xã Vạn Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10399,
		\"name\" : \"Xã Minh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10402,
		\"name\" : \"Xã Hòa Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10405,
		\"name\" : \"Xã Hòa Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10408,
		\"name\" : \"Xã Trầm Lộng\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10411,
		\"name\" : \"Xã Kim Đường\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10414,
		\"name\" : \"Xã Hòa Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10417,
		\"name\" : \"Xã Hòa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10420,
		\"name\" : \"Xã Đội Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10423,
		\"name\" : \"Xã Đại Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10426,
		\"name\" : \"Xã Đông Lỗ\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10429,
		\"name\" : \"Xã Phù Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10432,
		\"name\" : \"Xã Đại Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10435,
		\"name\" : \"Xã Lưu Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10438,
		\"name\" : \"Xã Hồng Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 281
	},
	{
		\"xaid\" : 10441,
		\"name\" : \"Thị trấn Đại Nghĩa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10444,
		\"name\" : \"Xã Đồng Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10447,
		\"name\" : \"Xã Thượng Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10450,
		\"name\" : \"Xã Tuy Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10453,
		\"name\" : \"Xã Phúc Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10456,
		\"name\" : \"Xã Mỹ Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10459,
		\"name\" : \"Xã Bột Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10462,
		\"name\" : \"Xã An Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10465,
		\"name\" : \"Xã Hồng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10468,
		\"name\" : \"Xã Lê Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10471,
		\"name\" : \"Xã Xuy Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10474,
		\"name\" : \"Xã Phùng Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10477,
		\"name\" : \"Xã Phù Lưu Tế\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10480,
		\"name\" : \"Xã Đại Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10483,
		\"name\" : \"Xã Vạn Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10486,
		\"name\" : \"Xã Đốc Tín\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10489,
		\"name\" : \"Xã Hương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10492,
		\"name\" : \"Xã Hùng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10495,
		\"name\" : \"Xã An Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10498,
		\"name\" : \"Xã Hợp Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10501,
		\"name\" : \"Xã Hợp Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10504,
		\"name\" : \"Xã An Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 282
	},
	{
		\"xaid\" : 10507,
		\"name\" : \"Phường Cẩm Thượng\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10510,
		\"name\" : \"Phường Bình Hàn\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10513,
		\"name\" : \"Phường Ngọc Châu\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10514,
		\"name\" : \"Phường Nhị Châu\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10516,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10519,
		\"name\" : \"Phường Nguyễn Trãi\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10522,
		\"name\" : \"Phường Phạm Ngũ Lão\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10525,
		\"name\" : \"Phường Trần Hưng Đạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10528,
		\"name\" : \"Phường Trần Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10531,
		\"name\" : \"Phường Thanh Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10532,
		\"name\" : \"Phường Tân Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10534,
		\"name\" : \"Phường Lê Thanh Nghị\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10537,
		\"name\" : \"Phường Hải Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10540,
		\"name\" : \"Phường Tứ Minh\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10543,
		\"name\" : \"Phường Việt Hoà\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10546,
		\"name\" : \"Phường Phả Lại\",
		\"type\" : \"Phường\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10549,
		\"name\" : \"Phường Sao Đỏ\",
		\"type\" : \"Phường\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10552,
		\"name\" : \"Phường Bến Tắm\",
		\"type\" : \"Phường\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10555,
		\"name\" : \"Xã Hoàng Hoa Thám\",
		\"type\" : \"Xã\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10558,
		\"name\" : \"Xã Bắc An\",
		\"type\" : \"Xã\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10561,
		\"name\" : \"Xã Hưng Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10564,
		\"name\" : \"Xã Lê Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10567,
		\"name\" : \"Xã Hoàng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10570,
		\"name\" : \"Phường Cộng Hoà\",
		\"type\" : \"Phường\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10573,
		\"name\" : \"Phường Hoàng Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10576,
		\"name\" : \"Xã Cổ Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10579,
		\"name\" : \"Phường Văn An\",
		\"type\" : \"Phường\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10582,
		\"name\" : \"Phường Chí Minh\",
		\"type\" : \"Phường\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10585,
		\"name\" : \"Xã Văn Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10588,
		\"name\" : \"Phường Thái Học\",
		\"type\" : \"Phường\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10591,
		\"name\" : \"Xã Nhân Huệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10594,
		\"name\" : \"Xã An Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10597,
		\"name\" : \"Xã Kênh Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10600,
		\"name\" : \"Xã Đồng Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10603,
		\"name\" : \"Xã Tân Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 290
	},
	{
		\"xaid\" : 10606,
		\"name\" : \"Thị trấn Nam Sách\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10609,
		\"name\" : \"Xã Nam Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10612,
		\"name\" : \"Xã Nam Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10615,
		\"name\" : \"Xã Hợp Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10618,
		\"name\" : \"Xã Hiệp Cát\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10621,
		\"name\" : \"Xã Thanh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10624,
		\"name\" : \"Xã Quốc Tuấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10627,
		\"name\" : \"Xã Nam Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10630,
		\"name\" : \"Xã An Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10633,
		\"name\" : \"Xã Nam Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10636,
		\"name\" : \"Xã An Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10639,
		\"name\" : \"Xã Cộng Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10642,
		\"name\" : \"Xã Thái Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10645,
		\"name\" : \"Xã An Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10648,
		\"name\" : \"Xã Phú Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10651,
		\"name\" : \"Xã Nam Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10654,
		\"name\" : \"Xã Hồng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10657,
		\"name\" : \"Xã Đồng Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10660,
		\"name\" : \"Phường Ái Quốc\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10663,
		\"name\" : \"Xã An Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10666,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 291
	},
	{
		\"xaid\" : 10669,
		\"name\" : \"Xã Thượng Đạt\",
		\"type\" : \"Xã\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10672,
		\"name\" : \"Xã Nam Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 10675,
		\"name\" : \"Thị trấn Kinh Môn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10678,
		\"name\" : \"Xã Bạch Đằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10681,
		\"name\" : \"Xã Thất Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10684,
		\"name\" : \"Xã Lê Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10687,
		\"name\" : \"Xã Hoành Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10690,
		\"name\" : \"Xã Phúc Thành B\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10693,
		\"name\" : \"Xã Thái Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10696,
		\"name\" : \"Xã Duy Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10699,
		\"name\" : \"Xã Tân Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10702,
		\"name\" : \"Thị trấn Minh Tân\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10705,
		\"name\" : \"Xã Quang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10708,
		\"name\" : \"Xã Hiệp Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10711,
		\"name\" : \"Xã Phạm Mệnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10714,
		\"name\" : \"Thị trấn Phú Thứ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10717,
		\"name\" : \"Xã Thăng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10720,
		\"name\" : \"Xã Lạc Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10723,
		\"name\" : \"Xã An Sinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10726,
		\"name\" : \"Xã Hiệp Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10729,
		\"name\" : \"Xã Thượng Quận\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10732,
		\"name\" : \"Xã An Phụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10735,
		\"name\" : \"Xã Hiệp An\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10738,
		\"name\" : \"Xã Long Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10741,
		\"name\" : \"Xã Thái Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10744,
		\"name\" : \"Xã Hiến Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10747,
		\"name\" : \"Xã Minh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 292
	},
	{
		\"xaid\" : 10750,
		\"name\" : \"Thị trấn Phú Thái\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10753,
		\"name\" : \"Xã Lai Vu\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10756,
		\"name\" : \"Xã Cộng Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10759,
		\"name\" : \"Xã Thượng Vũ\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10762,
		\"name\" : \"Xã Cổ Dũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10765,
		\"name\" : \"Xã Việt Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10768,
		\"name\" : \"Xã Tuấn Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10771,
		\"name\" : \"Xã Kim Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10774,
		\"name\" : \"Xã Phúc Thành A\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10777,
		\"name\" : \"Xã Ngũ Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10780,
		\"name\" : \"Xã Kim Anh\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10783,
		\"name\" : \"Xã Kim Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10786,
		\"name\" : \"Xã Kim Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10789,
		\"name\" : \"Xã Kim Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10792,
		\"name\" : \"Xã Kim Đính\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10795,
		\"name\" : \"Xã Cẩm La\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10798,
		\"name\" : \"Xã Bình Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10801,
		\"name\" : \"Xã Tam Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10804,
		\"name\" : \"Xã Đồng Gia\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10807,
		\"name\" : \"Xã Liên Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10810,
		\"name\" : \"Xã Đại Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 293
	},
	{
		\"xaid\" : 10813,
		\"name\" : \"Thị trấn Thanh Hà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10816,
		\"name\" : \"Xã Hồng Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10819,
		\"name\" : \"Xã Việt Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10822,
		\"name\" : \"Xã Quyết Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10825,
		\"name\" : \"Xã Tân Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10828,
		\"name\" : \"Xã Cẩm Chế\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10831,
		\"name\" : \"Xã Thanh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10834,
		\"name\" : \"Xã Thanh Lang\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10837,
		\"name\" : \"Xã Tiền Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10840,
		\"name\" : \"Xã Tân An\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10843,
		\"name\" : \"Xã Liên Mạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10846,
		\"name\" : \"Xã Thanh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10849,
		\"name\" : \"Xã Thanh Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10852,
		\"name\" : \"Xã Thanh Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10855,
		\"name\" : \"Xã Thanh Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10858,
		\"name\" : \"Xã An Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10861,
		\"name\" : \"Xã Thanh Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10864,
		\"name\" : \"Xã Phượng Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10867,
		\"name\" : \"Xã Thanh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10870,
		\"name\" : \"Xã Hợp Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10873,
		\"name\" : \"Xã Trường Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10876,
		\"name\" : \"Xã Thanh Bính\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10879,
		\"name\" : \"Xã Thanh Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10882,
		\"name\" : \"Xã Thanh Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10885,
		\"name\" : \"Xã Vĩnh Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 294
	},
	{
		\"xaid\" : 10888,
		\"name\" : \"Thị trấn Cẩm Giàng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10891,
		\"name\" : \"Thị trấn Lai Cách\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10894,
		\"name\" : \"Xã Cẩm Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10897,
		\"name\" : \"Xã Cẩm Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10900,
		\"name\" : \"Xã Cẩm Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10903,
		\"name\" : \"Xã Ngọc Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10906,
		\"name\" : \"Xã Thạch Lỗi\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10909,
		\"name\" : \"Xã Cẩm Vũ\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10912,
		\"name\" : \"Xã Đức Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10915,
		\"name\" : \"Xã Cẩm Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10918,
		\"name\" : \"Xã Cẩm Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10921,
		\"name\" : \"Xã Kim Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10924,
		\"name\" : \"Xã Lương Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10927,
		\"name\" : \"Xã Cao An\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10930,
		\"name\" : \"Xã Tân Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10933,
		\"name\" : \"Xã Cẩm Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10936,
		\"name\" : \"Xã Cẩm Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10939,
		\"name\" : \"Xã Cẩm Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10942,
		\"name\" : \"Xã Cẩm Đoài\",
		\"type\" : \"Xã\",
		\"maqh\" : 295
	},
	{
		\"xaid\" : 10945,
		\"name\" : \"Thị trấn Kẻ Sặt\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10948,
		\"name\" : \"Xã Hưng Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10951,
		\"name\" : \"Xã Vĩnh Tuy\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10954,
		\"name\" : \"Xã Hùng Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10957,
		\"name\" : \"Xã Tráng Liệt\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10960,
		\"name\" : \"Xã Vĩnh Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10963,
		\"name\" : \"Xã Long Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10966,
		\"name\" : \"Xã Tân Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10969,
		\"name\" : \"Xã Thúc Kháng\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10972,
		\"name\" : \"Xã Tân Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10975,
		\"name\" : \"Xã Bình Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10978,
		\"name\" : \"Xã Hồng Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10981,
		\"name\" : \"Xã Thái Học\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10984,
		\"name\" : \"Xã Cổ Bi\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10987,
		\"name\" : \"Xã Nhân Quyền\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10990,
		\"name\" : \"Xã Thái Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10993,
		\"name\" : \"Xã Thái Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10996,
		\"name\" : \"Xã Bình Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 296
	},
	{
		\"xaid\" : 10999,
		\"name\" : \"Thị trấn Gia Lộc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11002,
		\"name\" : \"Phường Thạch Khôi\",
		\"type\" : \"Phường\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 11005,
		\"name\" : \"Xã Liên Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11008,
		\"name\" : \"Xã Thống Nhất\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11011,
		\"name\" : \"Xã Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 288
	},
	{
		\"xaid\" : 11014,
		\"name\" : \"Xã Trùng Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11017,
		\"name\" : \"Xã Gia Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11020,
		\"name\" : \"Xã Yết Kiêu\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11023,
		\"name\" : \"Xã Gia Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11026,
		\"name\" : \"Xã Phương Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11029,
		\"name\" : \"Xã Gia Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11032,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11035,
		\"name\" : \"Xã Gia Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11038,
		\"name\" : \"Xã Gia Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11041,
		\"name\" : \"Xã Lê Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11044,
		\"name\" : \"Xã Toàn Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11047,
		\"name\" : \"Xã Hoàng Diệu\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11050,
		\"name\" : \"Xã Hồng Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11053,
		\"name\" : \"Xã Phạm Trấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11056,
		\"name\" : \"Xã Đoàn Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11059,
		\"name\" : \"Xã Thống Kênh\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11062,
		\"name\" : \"Xã Quang Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11065,
		\"name\" : \"Xã Đồng Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11068,
		\"name\" : \"Xã Nhật Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11071,
		\"name\" : \"Xã Đức Xương\",
		\"type\" : \"Xã\",
		\"maqh\" : 297
	},
	{
		\"xaid\" : 11074,
		\"name\" : \"Thị trấn Tứ Kỳ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11077,
		\"name\" : \"Xã Ngọc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11080,
		\"name\" : \"Xã Kỳ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11083,
		\"name\" : \"Xã Đại Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11086,
		\"name\" : \"Xã Hưng Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11089,
		\"name\" : \"Xã Ngọc Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11092,
		\"name\" : \"Xã Bình Lăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11095,
		\"name\" : \"Xã Tứ Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11098,
		\"name\" : \"Xã Tái Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11101,
		\"name\" : \"Xã Quang Phục\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11104,
		\"name\" : \"Xã Đông Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11107,
		\"name\" : \"Xã Tây Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11110,
		\"name\" : \"Xã Dân Chủ\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11113,
		\"name\" : \"Xã Tân Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11116,
		\"name\" : \"Xã Quang Khải\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11119,
		\"name\" : \"Xã Đại Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11122,
		\"name\" : \"Xã Quảng Nghiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11125,
		\"name\" : \"Xã An Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11128,
		\"name\" : \"Xã Minh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11131,
		\"name\" : \"Xã Văn Tố\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11134,
		\"name\" : \"Xã Quang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11137,
		\"name\" : \"Xã Phượng Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11140,
		\"name\" : \"Xã Cộng Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11143,
		\"name\" : \"Xã Tiên Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11146,
		\"name\" : \"Xã Nguyên Giáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11149,
		\"name\" : \"Xã Hà Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11152,
		\"name\" : \"Xã Hà Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 298
	},
	{
		\"xaid\" : 11155,
		\"name\" : \"Thị trấn Ninh Giang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11158,
		\"name\" : \"Xã Quyết Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11161,
		\"name\" : \"Xã Ứng Hoè\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11164,
		\"name\" : \"Xã Nghĩa An\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11167,
		\"name\" : \"Xã Hồng Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11170,
		\"name\" : \"Xã Ninh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11173,
		\"name\" : \"Xã An Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11176,
		\"name\" : \"Xã Vạn Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11179,
		\"name\" : \"Xã Tân Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11182,
		\"name\" : \"Xã Ninh Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11185,
		\"name\" : \"Xã Vĩnh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11188,
		\"name\" : \"Xã Đông Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11191,
		\"name\" : \"Xã Hoàng Hanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11194,
		\"name\" : \"Xã Quang Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11197,
		\"name\" : \"Xã Tân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11200,
		\"name\" : \"Xã Ninh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11203,
		\"name\" : \"Xã Đồng Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11206,
		\"name\" : \"Xã Tân Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11209,
		\"name\" : \"Xã Kiến Quốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11212,
		\"name\" : \"Xã Hồng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11215,
		\"name\" : \"Xã Hồng Dụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11218,
		\"name\" : \"Xã Văn Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11221,
		\"name\" : \"Xã Hưng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11224,
		\"name\" : \"Xã Hồng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11227,
		\"name\" : \"Xã Hiệp Lực\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11230,
		\"name\" : \"Xã Hồng Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11233,
		\"name\" : \"Xã Hưng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11236,
		\"name\" : \"Xã Văn Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 299
	},
	{
		\"xaid\" : 11239,
		\"name\" : \"Thị trấn Thanh Miện\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11242,
		\"name\" : \"Xã Thanh Tùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11245,
		\"name\" : \"Xã Phạm Kha\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11248,
		\"name\" : \"Xã Ngô Quyền\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11251,
		\"name\" : \"Xã Đoàn Tùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11254,
		\"name\" : \"Xã Hồng Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11257,
		\"name\" : \"Xã Tân Trào\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11260,
		\"name\" : \"Xã Lam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11263,
		\"name\" : \"Xã Đoàn Kết\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11266,
		\"name\" : \"Xã Lê Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11269,
		\"name\" : \"Xã Tứ Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11272,
		\"name\" : \"Xã Hùng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11275,
		\"name\" : \"Xã Ngũ Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11278,
		\"name\" : \"Xã Cao Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11281,
		\"name\" : \"Xã Chi Lăng Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11284,
		\"name\" : \"Xã Chi Lăng Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11287,
		\"name\" : \"Xã Thanh Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11290,
		\"name\" : \"Xã Diên Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11293,
		\"name\" : \"Xã Tiền Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 300
	},
	{
		\"xaid\" : 11296,
		\"name\" : \"Phường Quán Toan\",
		\"type\" : \"Phường\",
		\"maqh\" : 303
	},
	{
		\"xaid\" : 11299,
		\"name\" : \"Phường Hùng Vương\",
		\"type\" : \"Phường\",
		\"maqh\" : 303
	},
	{
		\"xaid\" : 11302,
		\"name\" : \"Phường Sở Dầu\",
		\"type\" : \"Phường\",
		\"maqh\" : 303
	},
	{
		\"xaid\" : 11305,
		\"name\" : \"Phường Thượng Lý\",
		\"type\" : \"Phường\",
		\"maqh\" : 303
	},
	{
		\"xaid\" : 11308,
		\"name\" : \"Phường Hạ Lý\",
		\"type\" : \"Phường\",
		\"maqh\" : 303
	},
	{
		\"xaid\" : 11311,
		\"name\" : \"Phường Minh Khai\",
		\"type\" : \"Phường\",
		\"maqh\" : 303
	},
	{
		\"xaid\" : 11314,
		\"name\" : \"Phường Trại Chuối\",
		\"type\" : \"Phường\",
		\"maqh\" : 303
	},
	{
		\"xaid\" : 11317,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 303
	},
	{
		\"xaid\" : 11320,
		\"name\" : \"Phường Hoàng Văn Thụ\",
		\"type\" : \"Phường\",
		\"maqh\" : 303
	},
	{
		\"xaid\" : 11323,
		\"name\" : \"Phường Phan Bội Châu\",
		\"type\" : \"Phường\",
		\"maqh\" : 303
	},
	{
		\"xaid\" : 11326,
		\"name\" : \"Phường Phạm Hồng Thái\",
		\"type\" : \"Phường\",
		\"maqh\" : 303
	},
	{
		\"xaid\" : 11329,
		\"name\" : \"Phường Máy Chai\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11332,
		\"name\" : \"Phường Máy Tơ\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11335,
		\"name\" : \"Phường Vạn Mỹ\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11338,
		\"name\" : \"Phường Cầu Tre\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11341,
		\"name\" : \"Phường Lạc Viên\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11344,
		\"name\" : \"Phường Lương Khánh Thiện\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11347,
		\"name\" : \"Phường Gia Viên\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11350,
		\"name\" : \"Phường Đông Khê\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11353,
		\"name\" : \"Phường Cầu Đất\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11356,
		\"name\" : \"Phường Lê Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11359,
		\"name\" : \"Phường Đằng Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11362,
		\"name\" : \"Phường Lạch Tray\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11365,
		\"name\" : \"Phường Đổng Quốc Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 304
	},
	{
		\"xaid\" : 11368,
		\"name\" : \"Phường Cát Dài\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11371,
		\"name\" : \"Phường An Biên\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11374,
		\"name\" : \"Phường Lam Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11377,
		\"name\" : \"Phường An Dương\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11380,
		\"name\" : \"Phường Trần Nguyên Hãn\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11383,
		\"name\" : \"Phường Hồ Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11386,
		\"name\" : \"Phường Trại Cau\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11389,
		\"name\" : \"Phường Dư Hàng\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11392,
		\"name\" : \"Phường Hàng Kênh\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11395,
		\"name\" : \"Phường Đông Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11398,
		\"name\" : \"Phường Niệm Nghĩa\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11401,
		\"name\" : \"Phường Nghĩa Xá\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11404,
		\"name\" : \"Phường Dư Hàng Kênh\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11405,
		\"name\" : \"Phường Kênh Dương\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11407,
		\"name\" : \"Phường Vĩnh Niệm\",
		\"type\" : \"Phường\",
		\"maqh\" : 305
	},
	{
		\"xaid\" : 11410,
		\"name\" : \"Phường Đông Hải 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 306
	},
	{
		\"xaid\" : 11411,
		\"name\" : \"Phường Đông Hải 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 306
	},
	{
		\"xaid\" : 11413,
		\"name\" : \"Phường Đằng Lâm\",
		\"type\" : \"Phường\",
		\"maqh\" : 306
	},
	{
		\"xaid\" : 11414,
		\"name\" : \"Phường Thành Tô\",
		\"type\" : \"Phường\",
		\"maqh\" : 306
	},
	{
		\"xaid\" : 11416,
		\"name\" : \"Phường Đằng Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 306
	},
	{
		\"xaid\" : 11419,
		\"name\" : \"Phường Nam Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 306
	},
	{
		\"xaid\" : 11422,
		\"name\" : \"Phường Cát Bi\",
		\"type\" : \"Phường\",
		\"maqh\" : 306
	},
	{
		\"xaid\" : 11425,
		\"name\" : \"Phường Tràng Cát\",
		\"type\" : \"Phường\",
		\"maqh\" : 306
	},
	{
		\"xaid\" : 11428,
		\"name\" : \"Phường Quán Trữ\",
		\"type\" : \"Phường\",
		\"maqh\" : 307
	},
	{
		\"xaid\" : 11429,
		\"name\" : \"Phường Lãm Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 307
	},
	{
		\"xaid\" : 11431,
		\"name\" : \"Phường Đồng Hoà\",
		\"type\" : \"Phường\",
		\"maqh\" : 307
	},
	{
		\"xaid\" : 11434,
		\"name\" : \"Phường Bắc Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 307
	},
	{
		\"xaid\" : 11437,
		\"name\" : \"Phường Nam Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 307
	},
	{
		\"xaid\" : 11440,
		\"name\" : \"Phường Ngọc Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 307
	},
	{
		\"xaid\" : 11443,
		\"name\" : \"Phường Trần Thành Ngọ\",
		\"type\" : \"Phường\",
		\"maqh\" : 307
	},
	{
		\"xaid\" : 11446,
		\"name\" : \"Phường Văn Đẩu\",
		\"type\" : \"Phường\",
		\"maqh\" : 307
	},
	{
		\"xaid\" : 11449,
		\"name\" : \"Phường Phù Liễn\",
		\"type\" : \"Phường\",
		\"maqh\" : 307
	},
	{
		\"xaid\" : 11452,
		\"name\" : \"Phường Tràng Minh\",
		\"type\" : \"Phường\",
		\"maqh\" : 307
	},
	{
		\"xaid\" : 11455,
		\"name\" : \"Phường Ngọc Xuyên\",
		\"type\" : \"Phường\",
		\"maqh\" : 308
	},
	{
		\"xaid\" : 11458,
		\"name\" : \"Phường Ngọc Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 308
	},
	{
		\"xaid\" : 11461,
		\"name\" : \"Phường Vạn Hương\",
		\"type\" : \"Phường\",
		\"maqh\" : 308
	},
	{
		\"xaid\" : 11464,
		\"name\" : \"Phường Vạn Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 308
	},
	{
		\"xaid\" : 11465,
		\"name\" : \"Phường Minh Đức\",
		\"type\" : \"Phường\",
		\"maqh\" : 308
	},
	{
		\"xaid\" : 11467,
		\"name\" : \"Phường Bàng La\",
		\"type\" : \"Phường\",
		\"maqh\" : 308
	},
	{
		\"xaid\" : 11470,
		\"name\" : \"Thị trấn Núi Đèo\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11473,
		\"name\" : \"Thị trấn Minh Đức\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11476,
		\"name\" : \"Xã Lại Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11479,
		\"name\" : \"Xã An Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11482,
		\"name\" : \"Xã Kỳ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11485,
		\"name\" : \"Xã Liên Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11488,
		\"name\" : \"Xã Lưu Kiếm\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11491,
		\"name\" : \"Xã Lưu Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11494,
		\"name\" : \"Xã Gia Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11497,
		\"name\" : \"Xã Gia Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11500,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11503,
		\"name\" : \"Xã Phù Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11506,
		\"name\" : \"Xã Quảng Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11509,
		\"name\" : \"Xã Chính Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11512,
		\"name\" : \"Xã Kênh Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11515,
		\"name\" : \"Xã Hợp Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11518,
		\"name\" : \"Xã Cao Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11521,
		\"name\" : \"Xã Mỹ Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11524,
		\"name\" : \"Xã Đông Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11527,
		\"name\" : \"Xã Hoà Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11530,
		\"name\" : \"Xã Trung Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11533,
		\"name\" : \"Xã An Lư\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11536,
		\"name\" : \"Xã Thuỷ Triều\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11539,
		\"name\" : \"Xã Ngũ Lão\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11542,
		\"name\" : \"Xã Phục Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11545,
		\"name\" : \"Xã Tam Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11548,
		\"name\" : \"Xã Phả Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11551,
		\"name\" : \"Xã Lập Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11554,
		\"name\" : \"Xã Kiền Bái\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11557,
		\"name\" : \"Xã Thiên Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11560,
		\"name\" : \"Xã Thuỷ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11563,
		\"name\" : \"Xã Thuỷ Đường\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11566,
		\"name\" : \"Xã Hoàng Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11569,
		\"name\" : \"Xã Lâm Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11572,
		\"name\" : \"Xã Hoa Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11575,
		\"name\" : \"Xã Tân Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11578,
		\"name\" : \"Xã Dương Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 311
	},
	{
		\"xaid\" : 11581,
		\"name\" : \"Thị trấn An Dương\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11584,
		\"name\" : \"Xã Lê Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11587,
		\"name\" : \"Xã Đại Bản\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11590,
		\"name\" : \"Xã An Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11593,
		\"name\" : \"Xã Hồng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11596,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11599,
		\"name\" : \"Xã An Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11602,
		\"name\" : \"Xã An Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11605,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11608,
		\"name\" : \"Xã Nam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11611,
		\"name\" : \"Xã Lê Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11614,
		\"name\" : \"Xã Đặng Cương\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11617,
		\"name\" : \"Xã Đồng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11620,
		\"name\" : \"Xã Quốc Tuấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11623,
		\"name\" : \"Xã An Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11626,
		\"name\" : \"Xã Hồng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 312
	},
	{
		\"xaid\" : 11629,
		\"name\" : \"Thị trấn An Lão\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11632,
		\"name\" : \"Xã Bát Trang\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11635,
		\"name\" : \"Xã Trường Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11638,
		\"name\" : \"Xã Trường Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11641,
		\"name\" : \"Xã An Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11644,
		\"name\" : \"Xã Quang Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11647,
		\"name\" : \"Xã Quang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11650,
		\"name\" : \"Xã Quốc Tuấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11653,
		\"name\" : \"Xã An Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11656,
		\"name\" : \"Thị trấn Trường Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11659,
		\"name\" : \"Xã Tân Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11662,
		\"name\" : \"Xã Thái Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11665,
		\"name\" : \"Xã Tân Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11668,
		\"name\" : \"Xã Mỹ Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11671,
		\"name\" : \"Xã Chiến Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11674,
		\"name\" : \"Xã An Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11677,
		\"name\" : \"Xã An Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 313
	},
	{
		\"xaid\" : 11680,
		\"name\" : \"Thị trấn Núi Đối\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11683,
		\"name\" : \"Phường Đa Phúc\",
		\"type\" : \"Phường\",
		\"maqh\" : 309
	},
	{
		\"xaid\" : 11686,
		\"name\" : \"Phường Hưng Đạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 309
	},
	{
		\"xaid\" : 11689,
		\"name\" : \"Phường Anh Dũng\",
		\"type\" : \"Phường\",
		\"maqh\" : 309
	},
	{
		\"xaid\" : 11692,
		\"name\" : \"Phường Hải Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 309
	},
	{
		\"xaid\" : 11695,
		\"name\" : \"Xã Đông Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11698,
		\"name\" : \"Xã Thuận Thiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11701,
		\"name\" : \"Xã Hữu Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11704,
		\"name\" : \"Xã Đại Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11707,
		\"name\" : \"Phường Hoà Nghĩa\",
		\"type\" : \"Phường\",
		\"maqh\" : 309
	},
	{
		\"xaid\" : 11710,
		\"name\" : \"Xã Ngũ Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11713,
		\"name\" : \"Xã Kiến Quốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11716,
		\"name\" : \"Xã Du Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11719,
		\"name\" : \"Xã Thuỵ Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11722,
		\"name\" : \"Xã Thanh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11725,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11728,
		\"name\" : \"Xã Đại Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11731,
		\"name\" : \"Xã Ngũ Đoan\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11734,
		\"name\" : \"Xã Tân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11737,
		\"name\" : \"Phường Hợp Đức\",
		\"type\" : \"Phường\",
		\"maqh\" : 308
	},
	{
		\"xaid\" : 11740,
		\"name\" : \"Phường Tân Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 309
	},
	{
		\"xaid\" : 11743,
		\"name\" : \"Xã Tân Trào\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11746,
		\"name\" : \"Xã Đoàn Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11749,
		\"name\" : \"Xã Tú Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11752,
		\"name\" : \"Xã Đại Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 314
	},
	{
		\"xaid\" : 11755,
		\"name\" : \"Thị trấn Tiên Lãng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11758,
		\"name\" : \"Xã Đại Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11761,
		\"name\" : \"Xã Tiên Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11764,
		\"name\" : \"Xã Tự Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11767,
		\"name\" : \"Xã Tiên Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11770,
		\"name\" : \"Xã Quyết Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11773,
		\"name\" : \"Xã Khởi Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11776,
		\"name\" : \"Xã Tiên Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11779,
		\"name\" : \"Xã Cấp Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11782,
		\"name\" : \"Xã Kiến Thiết\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11785,
		\"name\" : \"Xã Đoàn Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11788,
		\"name\" : \"Xã Bạch Đằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11791,
		\"name\" : \"Xã Quang Phục\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11794,
		\"name\" : \"Xã Toàn Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11797,
		\"name\" : \"Xã Tiên Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11800,
		\"name\" : \"Xã Tiên Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11803,
		\"name\" : \"Xã Bắc Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11806,
		\"name\" : \"Xã Nam Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11809,
		\"name\" : \"Xã Hùng Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11812,
		\"name\" : \"Xã Tây Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11815,
		\"name\" : \"Xã Đông Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11818,
		\"name\" : \"Xã Tiên Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11821,
		\"name\" : \"Xã Vinh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 315
	},
	{
		\"xaid\" : 11824,
		\"name\" : \"Thị trấn Vĩnh Bảo\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11827,
		\"name\" : \"Xã Dũng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11830,
		\"name\" : \"Xã Giang Biên\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11833,
		\"name\" : \"Xã Thắng Thuỷ\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11836,
		\"name\" : \"Xã Trung Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11839,
		\"name\" : \"Xã Việt Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11842,
		\"name\" : \"Xã Vĩnh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11845,
		\"name\" : \"Xã Vĩnh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11848,
		\"name\" : \"Xã Hiệp Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11851,
		\"name\" : \"Xã Hùng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11854,
		\"name\" : \"Xã An Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11857,
		\"name\" : \"Xã Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11860,
		\"name\" : \"Xã Tân Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11863,
		\"name\" : \"Xã Nhân Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11866,
		\"name\" : \"Xã Tam Đa\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11869,
		\"name\" : \"Xã Hưng Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11872,
		\"name\" : \"Xã Vinh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11875,
		\"name\" : \"Xã Đồng Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11878,
		\"name\" : \"Xã Thanh Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11881,
		\"name\" : \"Xã Liên Am\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11884,
		\"name\" : \"Xã Lý Học\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11887,
		\"name\" : \"Xã Tam Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11890,
		\"name\" : \"Xã Hoà Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11893,
		\"name\" : \"Xã Tiền Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11896,
		\"name\" : \"Xã Vĩnh Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11899,
		\"name\" : \"Xã Cộng Hiền\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11902,
		\"name\" : \"Xã Cao Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11905,
		\"name\" : \"Xã Cổ Am\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11908,
		\"name\" : \"Xã Vĩnh Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11911,
		\"name\" : \"Xã Trấn Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 316
	},
	{
		\"xaid\" : 11914,
		\"name\" : \"Thị trấn Cát Bà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 317
	},
	{
		\"xaid\" : 11917,
		\"name\" : \"Thị trấn Cát Hải\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 317
	},
	{
		\"xaid\" : 11920,
		\"name\" : \"Xã Nghĩa Lộ\",
		\"type\" : \"Xã\",
		\"maqh\" : 317
	},
	{
		\"xaid\" : 11923,
		\"name\" : \"Xã Đồng Bài\",
		\"type\" : \"Xã\",
		\"maqh\" : 317
	},
	{
		\"xaid\" : 11926,
		\"name\" : \"Xã Hoàng Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 317
	},
	{
		\"xaid\" : 11929,
		\"name\" : \"Xã Văn Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 317
	},
	{
		\"xaid\" : 11932,
		\"name\" : \"Xã Phù Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 317
	},
	{
		\"xaid\" : 11935,
		\"name\" : \"Xã Gia Luận\",
		\"type\" : \"Xã\",
		\"maqh\" : 317
	},
	{
		\"xaid\" : 11938,
		\"name\" : \"Xã Hiền Hào\",
		\"type\" : \"Xã\",
		\"maqh\" : 317
	},
	{
		\"xaid\" : 11941,
		\"name\" : \"Xã Trân Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 317
	},
	{
		\"xaid\" : 11944,
		\"name\" : \"Xã Việt Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 317
	},
	{
		\"xaid\" : 11947,
		\"name\" : \"Xã Xuân Đám\",
		\"type\" : \"Xã\",
		\"maqh\" : 317
	},
	{
		\"xaid\" : 11950,
		\"name\" : \"Phường Lam Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 11953,
		\"name\" : \"Phường Hiến Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 11956,
		\"name\" : \"Phường An Tảo\",
		\"type\" : \"Phường\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 11959,
		\"name\" : \"Phường Lê Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 11962,
		\"name\" : \"Phường Minh Khai\",
		\"type\" : \"Phường\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 11965,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 11968,
		\"name\" : \"Phường Hồng Châu\",
		\"type\" : \"Phường\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 11971,
		\"name\" : \"Xã Trung Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 11974,
		\"name\" : \"Xã Liên Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 11977,
		\"name\" : \"Xã Hồng Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 11980,
		\"name\" : \"Xã Quảng Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 11983,
		\"name\" : \"Xã Bảo Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 11986,
		\"name\" : \"Thị trấn Như Quỳnh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 325
	},
	{
		\"xaid\" : 11989,
		\"name\" : \"Xã Lạc Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 325
	},
	{
		\"xaid\" : 11992,
		\"name\" : \"Xã Chỉ Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 325
	},
	{
		\"xaid\" : 11995,
		\"name\" : \"Xã Đại Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 325
	},
	{
		\"xaid\" : 11998,
		\"name\" : \"Xã Việt Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 325
	},
	{
		\"xaid\" : 12001,
		\"name\" : \"Xã Tân Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 325
	},
	{
		\"xaid\" : 12004,
		\"name\" : \"Xã Đình Dù\",
		\"type\" : \"Xã\",
		\"maqh\" : 325
	},
	{
		\"xaid\" : 12007,
		\"name\" : \"Xã Minh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 325
	},
	{
		\"xaid\" : 12010,
		\"name\" : \"Xã Lương Tài\",
		\"type\" : \"Xã\",
		\"maqh\" : 325
	},
	{
		\"xaid\" : 12013,
		\"name\" : \"Xã Trưng Trắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 325
	},
	{
		\"xaid\" : 12016,
		\"name\" : \"Xã Lạc Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 325
	},
	{
		\"xaid\" : 12019,
		\"name\" : \"Thị trấn Văn Giang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 326
	},
	{
		\"xaid\" : 12022,
		\"name\" : \"Xã Xuân Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 326
	},
	{
		\"xaid\" : 12025,
		\"name\" : \"Xã Cửu Cao\",
		\"type\" : \"Xã\",
		\"maqh\" : 326
	},
	{
		\"xaid\" : 12028,
		\"name\" : \"Xã Phụng Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 326
	},
	{
		\"xaid\" : 12031,
		\"name\" : \"Xã Nghĩa Trụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 326
	},
	{
		\"xaid\" : 12034,
		\"name\" : \"Xã Long Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 326
	},
	{
		\"xaid\" : 12037,
		\"name\" : \"Xã Vĩnh Khúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 326
	},
	{
		\"xaid\" : 12040,
		\"name\" : \"Xã Liên Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 326
	},
	{
		\"xaid\" : 12043,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 326
	},
	{
		\"xaid\" : 12046,
		\"name\" : \"Xã Thắng Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 326
	},
	{
		\"xaid\" : 12049,
		\"name\" : \"Xã Mễ Sở\",
		\"type\" : \"Xã\",
		\"maqh\" : 326
	},
	{
		\"xaid\" : 12052,
		\"name\" : \"Thị trấn Yên Mỹ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12055,
		\"name\" : \"Xã Giai Phạm\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12058,
		\"name\" : \"Xã Nghĩa Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12061,
		\"name\" : \"Xã Đồng Than\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12064,
		\"name\" : \"Xã Ngọc Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12067,
		\"name\" : \"Xã Liêu Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12070,
		\"name\" : \"Xã Hoàn Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12073,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12076,
		\"name\" : \"Xã Thanh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12079,
		\"name\" : \"Xã Yên Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12082,
		\"name\" : \"Xã Việt Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12085,
		\"name\" : \"Xã Trung Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12088,
		\"name\" : \"Xã Yên Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12091,
		\"name\" : \"Xã Minh Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12094,
		\"name\" : \"Xã Trung Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12097,
		\"name\" : \"Xã Lý Thường Kiệt\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12100,
		\"name\" : \"Xã Tân Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 327
	},
	{
		\"xaid\" : 12103,
		\"name\" : \"Thị trấn Bần Yên Nhân\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12106,
		\"name\" : \"Xã Phan Đình Phùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12109,
		\"name\" : \"Xã Cẩm Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12112,
		\"name\" : \"Xã Dương Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12115,
		\"name\" : \"Xã Hòa Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12118,
		\"name\" : \"Xã Nhân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12121,
		\"name\" : \"Xã Dị Sử\",
		\"type\" : \"Xã\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12124,
		\"name\" : \"Xã Bạch Sam\",
		\"type\" : \"Xã\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12127,
		\"name\" : \"Xã Minh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12130,
		\"name\" : \"Xã Phùng Chí Kiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12133,
		\"name\" : \"Xã Xuân Dục\",
		\"type\" : \"Xã\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12136,
		\"name\" : \"Xã Ngọc Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12139,
		\"name\" : \"Xã Hưng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 328
	},
	{
		\"xaid\" : 12142,
		\"name\" : \"Thị trấn Ân Thi\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12145,
		\"name\" : \"Xã Phù Ủng\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12148,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12151,
		\"name\" : \"Xã Bãi Sậy\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12154,
		\"name\" : \"Xã Đào Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12157,
		\"name\" : \"Xã Tân Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12160,
		\"name\" : \"Xã Vân Du\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12163,
		\"name\" : \"Xã Quang Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12166,
		\"name\" : \"Xã Xuân Trúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12169,
		\"name\" : \"Xã Hoàng Hoa Thám\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12172,
		\"name\" : \"Xã Quảng Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12175,
		\"name\" : \"Xã Văn Nhuệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12178,
		\"name\" : \"Xã Đặng Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12181,
		\"name\" : \"Xã Cẩm Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12184,
		\"name\" : \"Xã Nguyễn Trãi\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12187,
		\"name\" : \"Xã Đa Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12190,
		\"name\" : \"Xã Hồ Tùng Mậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12193,
		\"name\" : \"Xã Tiền Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12196,
		\"name\" : \"Xã Hồng Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12199,
		\"name\" : \"Xã Hồng Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12202,
		\"name\" : \"Xã Hạ Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 329
	},
	{
		\"xaid\" : 12205,
		\"name\" : \"Thị trấn Khoái Châu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12208,
		\"name\" : \"Xã Đông Tảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12211,
		\"name\" : \"Xã Bình Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12214,
		\"name\" : \"Xã Dạ Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12217,
		\"name\" : \"Xã Hàm Tử\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12220,
		\"name\" : \"Xã Ông Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12223,
		\"name\" : \"Xã Tân Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12226,
		\"name\" : \"Xã Tứ Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12229,
		\"name\" : \"Xã An Vĩ\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12232,
		\"name\" : \"Xã Đông Kết\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12235,
		\"name\" : \"Xã Bình Kiều\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12238,
		\"name\" : \"Xã Dân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12241,
		\"name\" : \"Xã Đồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12244,
		\"name\" : \"Xã Hồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12247,
		\"name\" : \"Xã Tân Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12250,
		\"name\" : \"Xã Liên Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12253,
		\"name\" : \"Xã Phùng Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12256,
		\"name\" : \"Xã Việt Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12259,
		\"name\" : \"Xã Đông Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12262,
		\"name\" : \"Xã Đại Tập\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12265,
		\"name\" : \"Xã Chí Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12268,
		\"name\" : \"Xã Đại Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12271,
		\"name\" : \"Xã Thuần Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12274,
		\"name\" : \"Xã Thành Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12277,
		\"name\" : \"Xã Nhuế Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 330
	},
	{
		\"xaid\" : 12280,
		\"name\" : \"Thị trấn Lương Bằng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12283,
		\"name\" : \"Xã Nghĩa Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12286,
		\"name\" : \"Xã Toàn Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12289,
		\"name\" : \"Xã Vĩnh Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12292,
		\"name\" : \"Xã Phạm Ngũ Lão\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12295,
		\"name\" : \"Xã Thọ Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12298,
		\"name\" : \"Xã Đồng Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12301,
		\"name\" : \"Xã Song Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12304,
		\"name\" : \"Xã Chính Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12307,
		\"name\" : \"Xã Nhân La\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12310,
		\"name\" : \"Xã Phú Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12313,
		\"name\" : \"Xã Mai Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12316,
		\"name\" : \"Xã Đức Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12319,
		\"name\" : \"Xã Hùng An\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12322,
		\"name\" : \"Xã Ngọc Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12325,
		\"name\" : \"Xã Vũ Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12328,
		\"name\" : \"Xã Hiệp Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 331
	},
	{
		\"xaid\" : 12331,
		\"name\" : \"Xã Phú Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 12334,
		\"name\" : \"Xã Hùng Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 12337,
		\"name\" : \"Thị trấn Vương\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12340,
		\"name\" : \"Xã Hưng Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12343,
		\"name\" : \"Xã Ngô Quyền\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12346,
		\"name\" : \"Xã Nhật Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12349,
		\"name\" : \"Xã Dị Chế\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12352,
		\"name\" : \"Xã Lệ Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12355,
		\"name\" : \"Xã An Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12358,
		\"name\" : \"Xã Đức Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12361,
		\"name\" : \"Xã Trung Dũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12364,
		\"name\" : \"Xã Hải Triều\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12367,
		\"name\" : \"Xã Thủ Sỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12370,
		\"name\" : \"Xã Thiện Phiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12373,
		\"name\" : \"Xã Thụy Lôi\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12376,
		\"name\" : \"Xã Cương Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12379,
		\"name\" : \"Xã Minh Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 332
	},
	{
		\"xaid\" : 12382,
		\"name\" : \"Xã Phương Chiểu\",
		\"type\" : \"Xã\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 12385,
		\"name\" : \"Xã Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 12388,
		\"name\" : \"Xã Hoàng Hanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 323
	},
	{
		\"xaid\" : 12391,
		\"name\" : \"Thị trấn Trần Cao\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12394,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12397,
		\"name\" : \"Xã Phan Sào Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12400,
		\"name\" : \"Xã Quang Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12403,
		\"name\" : \"Xã Minh Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12406,
		\"name\" : \"Xã Đoàn Đào\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12409,
		\"name\" : \"Xã Tống Phan\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12412,
		\"name\" : \"Xã Đình Cao\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12415,
		\"name\" : \"Xã Nhật Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12418,
		\"name\" : \"Xã Tiền Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12421,
		\"name\" : \"Xã Tam Đa\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12424,
		\"name\" : \"Xã Minh Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12427,
		\"name\" : \"Xã Nguyên Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12430,
		\"name\" : \"Xã Tống Trân\",
		\"type\" : \"Xã\",
		\"maqh\" : 333
	},
	{
		\"xaid\" : 12433,
		\"name\" : \"Phường Lê Hồng Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12436,
		\"name\" : \"Phường Bồ Xuyên\",
		\"type\" : \"Phường\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12439,
		\"name\" : \"Phường Đề Thám\",
		\"type\" : \"Phường\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12442,
		\"name\" : \"Phường Kỳ Bá\",
		\"type\" : \"Phường\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12445,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12448,
		\"name\" : \"Phường Phú Khánh\",
		\"type\" : \"Phường\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12451,
		\"name\" : \"Phường Tiền Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12452,
		\"name\" : \"Phường Trần Hưng Đạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12454,
		\"name\" : \"Phường Trần Lãm\",
		\"type\" : \"Phường\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12457,
		\"name\" : \"Xã Đông Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12460,
		\"name\" : \"Phường Hoàng Diệu\",
		\"type\" : \"Phường\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12463,
		\"name\" : \"Xã Phú Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12466,
		\"name\" : \"Xã Vũ Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12469,
		\"name\" : \"Xã Vũ Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12472,
		\"name\" : \"Thị trấn Quỳnh Côi\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12475,
		\"name\" : \"Xã An Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12478,
		\"name\" : \"Xã An Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12481,
		\"name\" : \"Xã Quỳnh Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12484,
		\"name\" : \"Xã Quỳnh Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12487,
		\"name\" : \"Xã Quỳnh Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12490,
		\"name\" : \"Xã An Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12493,
		\"name\" : \"Xã Quỳnh Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12496,
		\"name\" : \"Xã Quỳnh Giao\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12499,
		\"name\" : \"Xã An Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12502,
		\"name\" : \"Xã An Cầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12505,
		\"name\" : \"Xã Quỳnh Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12508,
		\"name\" : \"Xã Quỳnh Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12511,
		\"name\" : \"Xã Quỳnh Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12514,
		\"name\" : \"Xã An Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12517,
		\"name\" : \"Xã Quỳnh Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12520,
		\"name\" : \"Xã Quỳnh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12523,
		\"name\" : \"Thị trấn An Bài\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12526,
		\"name\" : \"Xã An Ấp\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12529,
		\"name\" : \"Xã Quỳnh Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12532,
		\"name\" : \"Xã Quỳnh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12535,
		\"name\" : \"Xã Quỳnh Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12538,
		\"name\" : \"Xã An Quí\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12541,
		\"name\" : \"Xã An Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12544,
		\"name\" : \"Xã Quỳnh Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12547,
		\"name\" : \"Xã An Vũ\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12550,
		\"name\" : \"Xã An Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12553,
		\"name\" : \"Xã Quỳnh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12556,
		\"name\" : \"Xã Quỳnh Bảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12559,
		\"name\" : \"Xã An Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12562,
		\"name\" : \"Xã Quỳnh Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12565,
		\"name\" : \"Xã An Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12568,
		\"name\" : \"Xã Quỳnh Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12571,
		\"name\" : \"Xã An Dục\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12574,
		\"name\" : \"Xã Đông Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12577,
		\"name\" : \"Xã Quỳnh Trang\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12580,
		\"name\" : \"Xã An Tràng\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12583,
		\"name\" : \"Xã Đồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 338
	},
	{
		\"xaid\" : 12586,
		\"name\" : \"Thị trấn Hưng Hà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12589,
		\"name\" : \"Xã Điệp Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12592,
		\"name\" : \"Xã Tân Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12595,
		\"name\" : \"Xã Cộng Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12598,
		\"name\" : \"Xã Dân Chủ\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12601,
		\"name\" : \"Xã Canh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12604,
		\"name\" : \"Xã Hòa Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12607,
		\"name\" : \"Xã Hùng Dũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12610,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12613,
		\"name\" : \"Thị trấn Hưng Nhân\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12616,
		\"name\" : \"Xã Đoan Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12619,
		\"name\" : \"Xã Duyên Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12622,
		\"name\" : \"Xã Tân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12625,
		\"name\" : \"Xã Văn Cẩm\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12628,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12631,
		\"name\" : \"Xã Đông Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12634,
		\"name\" : \"Xã Phúc Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12637,
		\"name\" : \"Xã Liên Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12640,
		\"name\" : \"Xã Tây Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12643,
		\"name\" : \"Xã Thống Nhất\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12646,
		\"name\" : \"Xã Tiến Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12649,
		\"name\" : \"Xã Thái Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12652,
		\"name\" : \"Xã Thái Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12655,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12656,
		\"name\" : \"Xã Chi Lăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12658,
		\"name\" : \"Xã Minh Khai\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12661,
		\"name\" : \"Xã Hồng An\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12664,
		\"name\" : \"Xã Kim Chung\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12667,
		\"name\" : \"Xã Hồng Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12670,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12673,
		\"name\" : \"Xã Văn Lang\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12676,
		\"name\" : \"Xã Độc Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12679,
		\"name\" : \"Xã Chí Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12682,
		\"name\" : \"Xã Minh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12685,
		\"name\" : \"Xã Hồng Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 339
	},
	{
		\"xaid\" : 12688,
		\"name\" : \"Thị trấn Đông Hưng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12691,
		\"name\" : \"Xã Đô Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12694,
		\"name\" : \"Xã Đông Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12697,
		\"name\" : \"Xã Liên Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12700,
		\"name\" : \"Xã An Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12703,
		\"name\" : \"Xã Đông Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12706,
		\"name\" : \"Xã Đông Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12709,
		\"name\" : \"Xã Phú Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12712,
		\"name\" : \"Xã Mê Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12715,
		\"name\" : \"Xã Lô Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12718,
		\"name\" : \"Xã Đông La\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12721,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12724,
		\"name\" : \"Xã Đông Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12727,
		\"name\" : \"Xã Chương Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12730,
		\"name\" : \"Xã Nguyên Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12733,
		\"name\" : \"Xã Phong Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12736,
		\"name\" : \"Xã Hợp Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12739,
		\"name\" : \"Xã Hồng Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12742,
		\"name\" : \"Xã Đông Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12745,
		\"name\" : \"Xã Đông Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12748,
		\"name\" : \"Xã Đông Kinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12751,
		\"name\" : \"Xã Đông Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12754,
		\"name\" : \"Xã Thăng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12757,
		\"name\" : \"Xã Đông Các\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12760,
		\"name\" : \"Xã Phú Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12763,
		\"name\" : \"Xã Hoa Lư\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12766,
		\"name\" : \"Xã Minh Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12769,
		\"name\" : \"Xã Đông Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12772,
		\"name\" : \"Xã Đông Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12775,
		\"name\" : \"Xã Đông Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12778,
		\"name\" : \"Xã Hồng Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12781,
		\"name\" : \"Xã Bạch Đằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12784,
		\"name\" : \"Xã Trọng Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12787,
		\"name\" : \"Xã Hoa Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12790,
		\"name\" : \"Xã Hồng Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12793,
		\"name\" : \"Xã Đông Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12796,
		\"name\" : \"Xã Đông Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12799,
		\"name\" : \"Xã Đông Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12802,
		\"name\" : \"Xã Đông Á\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12805,
		\"name\" : \"Xã Đông Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12808,
		\"name\" : \"Xã Đông Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12811,
		\"name\" : \"Xã Đông Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12814,
		\"name\" : \"Xã Đông Huy\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12817,
		\"name\" : \"Xã Đông Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12820,
		\"name\" : \"Xã Đông Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 12823,
		\"name\" : \"Xã Đồng Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 340
	},
	{
		\"xaid\" : 12826,
		\"name\" : \"Thị trấn Diêm Điền\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12829,
		\"name\" : \"Xã Thụy Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12832,
		\"name\" : \"Xã Thụy Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12835,
		\"name\" : \"Xã Hồng Quỳnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12838,
		\"name\" : \"Xã Thụy Dũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12841,
		\"name\" : \"Xã Thụy Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12844,
		\"name\" : \"Xã Thụy Quỳnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12847,
		\"name\" : \"Xã Thụy An\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12850,
		\"name\" : \"Xã Thụy Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12853,
		\"name\" : \"Xã Thụy Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12856,
		\"name\" : \"Xã Thụy Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12859,
		\"name\" : \"Xã Thụy Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12862,
		\"name\" : \"Xã Thụy Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12865,
		\"name\" : \"Xã Thụy Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12868,
		\"name\" : \"Xã Thụy Trình\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12871,
		\"name\" : \"Xã Thụy Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12874,
		\"name\" : \"Xã Thụy Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12877,
		\"name\" : \"Xã Thụy Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12880,
		\"name\" : \"Xã Thụy Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12883,
		\"name\" : \"Xã Thụy Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12886,
		\"name\" : \"Xã Thụy Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12889,
		\"name\" : \"Xã Thụy Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12892,
		\"name\" : \"Xã Thụy Duyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12895,
		\"name\" : \"Xã Thụy Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12898,
		\"name\" : \"Xã Thụy Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12901,
		\"name\" : \"Xã Thụy Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12904,
		\"name\" : \"Xã Thụy Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12907,
		\"name\" : \"Xã Thái Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12910,
		\"name\" : \"Xã Thái Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12913,
		\"name\" : \"Xã Thái Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12916,
		\"name\" : \"Xã Thái Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12919,
		\"name\" : \"Xã Thái Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12922,
		\"name\" : \"Xã Thái Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12925,
		\"name\" : \"Xã Thái Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12928,
		\"name\" : \"Xã Thái Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12931,
		\"name\" : \"Xã Thái An\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12934,
		\"name\" : \"Xã Thái Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12937,
		\"name\" : \"Xã Thái Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12940,
		\"name\" : \"Xã Thái Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12943,
		\"name\" : \"Xã Thái Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12946,
		\"name\" : \"Xã Thái Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12949,
		\"name\" : \"Xã  Mỹ Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12952,
		\"name\" : \"Xã Thái Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12955,
		\"name\" : \"Xã Thái Thuần\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12958,
		\"name\" : \"Xã Thái Học\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12961,
		\"name\" : \"Xã Thái Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12964,
		\"name\" : \"Xã Thái Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12967,
		\"name\" : \"Xã Thái Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 341
	},
	{
		\"xaid\" : 12970,
		\"name\" : \"Thị trấn Tiền Hải\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 12973,
		\"name\" : \"Xã Đông Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 12976,
		\"name\" : \"Xã Đông Trà\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 12979,
		\"name\" : \"Xã Đông Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 12982,
		\"name\" : \"Xã Đông Quí\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 12985,
		\"name\" : \"Xã Vũ Lăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 12988,
		\"name\" : \"Xã Đông Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 12991,
		\"name\" : \"Xã Tây Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 12994,
		\"name\" : \"Xã Tây Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 12997,
		\"name\" : \"Xã Đông Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13000,
		\"name\" : \"Xã Đông Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13003,
		\"name\" : \"Xã Đông Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13006,
		\"name\" : \"Xã Tây An\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13009,
		\"name\" : \"Xã Đông Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13012,
		\"name\" : \"Xã An Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13015,
		\"name\" : \"Xã Tây Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13018,
		\"name\" : \"Xã Đông Cơ\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13021,
		\"name\" : \"Xã Tây Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13024,
		\"name\" : \"Xã Đông Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13027,
		\"name\" : \"Xã Phương Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13030,
		\"name\" : \"Xã Tây Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13033,
		\"name\" : \"Xã Tây Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13036,
		\"name\" : \"Xã Nam Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13039,
		\"name\" : \"Xã Vân Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13042,
		\"name\" : \"Xã Nam Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13045,
		\"name\" : \"Xã Nam Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13048,
		\"name\" : \"Xã Bắc Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13051,
		\"name\" : \"Xã Nam Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13054,
		\"name\" : \"Xã Nam Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13057,
		\"name\" : \"Xã Nam Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13060,
		\"name\" : \"Xã Nam Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13063,
		\"name\" : \"Xã Nam Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13066,
		\"name\" : \"Xã Nam Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13069,
		\"name\" : \"Xã Nam Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13072,
		\"name\" : \"Xã Nam Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 342
	},
	{
		\"xaid\" : 13075,
		\"name\" : \"Thị trấn Thanh Nê\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13078,
		\"name\" : \"Xã Trà Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13081,
		\"name\" : \"Xã Quốc Tuấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13084,
		\"name\" : \"Xã Vũ Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 13087,
		\"name\" : \"Xã An Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13090,
		\"name\" : \"Xã Vũ Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13093,
		\"name\" : \"Xã Hồng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13096,
		\"name\" : \"Xã Bình Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13099,
		\"name\" : \"Xã Vũ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13102,
		\"name\" : \"Xã Lê Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13105,
		\"name\" : \"Xã Quyết Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13108,
		\"name\" : \"Xã Vũ Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 13111,
		\"name\" : \"Xã Vũ Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13114,
		\"name\" : \"Xã Thanh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13117,
		\"name\" : \"Xã Thượng Hiền\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13120,
		\"name\" : \"Xã Nam Cao\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13123,
		\"name\" : \"Xã Đình Phùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13126,
		\"name\" : \"Xã Vũ Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13129,
		\"name\" : \"Xã Vũ An\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13132,
		\"name\" : \"Xã Quang Lịch\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13135,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13138,
		\"name\" : \"Xã Bình Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13141,
		\"name\" : \"Xã Vũ Quí\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13144,
		\"name\" : \"Xã Quang Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13147,
		\"name\" : \"Xã An Bồi\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13150,
		\"name\" : \"Xã Vũ Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13153,
		\"name\" : \"Xã Vũ Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13156,
		\"name\" : \"Xã Vũ Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13159,
		\"name\" : \"Xã Vũ Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13162,
		\"name\" : \"Xã Quang Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13165,
		\"name\" : \"Xã Quang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13168,
		\"name\" : \"Xã Minh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13171,
		\"name\" : \"Xã Quang Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13174,
		\"name\" : \"Xã Vũ Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13177,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13180,
		\"name\" : \"Xã Nam Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13183,
		\"name\" : \"Xã Bình Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13186,
		\"name\" : \"Xã Bình Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13189,
		\"name\" : \"Xã Hồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 343
	},
	{
		\"xaid\" : 13192,
		\"name\" : \"Thị trấn Vũ Thư\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13195,
		\"name\" : \"Xã Hồng Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13198,
		\"name\" : \"Xã Đồng Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13201,
		\"name\" : \"Xã Xuân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13204,
		\"name\" : \"Xã Hiệp Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13207,
		\"name\" : \"Xã Phúc Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13210,
		\"name\" : \"Xã Tân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13213,
		\"name\" : \"Xã Song Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13216,
		\"name\" : \"Xã Tân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13219,
		\"name\" : \"Xã Việt Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13222,
		\"name\" : \"Xã Minh Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13225,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 336
	},
	{
		\"xaid\" : 13228,
		\"name\" : \"Xã Minh Khai\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13231,
		\"name\" : \"Xã Dũng Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13234,
		\"name\" : \"Xã Minh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13237,
		\"name\" : \"Xã Tam Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13240,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13243,
		\"name\" : \"Xã Bách Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13246,
		\"name\" : \"Xã Tự Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13249,
		\"name\" : \"Xã Song An\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13252,
		\"name\" : \"Xã Trung An\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13255,
		\"name\" : \"Xã Vũ Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13258,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13261,
		\"name\" : \"Xã Nguyên Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13264,
		\"name\" : \"Xã Việt Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13267,
		\"name\" : \"Xã Vũ Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13270,
		\"name\" : \"Xã Vũ Đoài\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13273,
		\"name\" : \"Xã Vũ Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13276,
		\"name\" : \"Xã Vũ Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13279,
		\"name\" : \"Xã Duy Nhất\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13282,
		\"name\" : \"Xã Hồng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 344
	},
	{
		\"xaid\" : 13285,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13288,
		\"name\" : \"Phường Lương Khánh Thiện\",
		\"type\" : \"Phường\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13291,
		\"name\" : \"Phường Lê Hồng Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13294,
		\"name\" : \"Phường Minh Khai\",
		\"type\" : \"Phường\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13297,
		\"name\" : \"Phường Hai Bà Trưng\",
		\"type\" : \"Phường\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13300,
		\"name\" : \"Phường Trần Hưng Đạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13303,
		\"name\" : \"Phường Lam Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13306,
		\"name\" : \"Xã Phù Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13309,
		\"name\" : \"Phường Liêm Chính\",
		\"type\" : \"Phường\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13312,
		\"name\" : \"Xã Liêm Chung\",
		\"type\" : \"Xã\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13315,
		\"name\" : \"Phường Thanh Châu\",
		\"type\" : \"Phường\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13318,
		\"name\" : \"Phường Châu Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13321,
		\"name\" : \"Thị trấn Đồng Văn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13324,
		\"name\" : \"Thị trấn Hòa Mạc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13327,
		\"name\" : \"Xã Mộc Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13330,
		\"name\" : \"Xã Châu Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13333,
		\"name\" : \"Xã Bạch Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13336,
		\"name\" : \"Xã Duy Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13339,
		\"name\" : \"Xã Mộc Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13342,
		\"name\" : \"Xã Duy Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13345,
		\"name\" : \"Xã Chuyên Ngoại\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13348,
		\"name\" : \"Xã Yên Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13351,
		\"name\" : \"Xã Trác Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13354,
		\"name\" : \"Xã Tiên Nội\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13357,
		\"name\" : \"Xã Hoàng Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13360,
		\"name\" : \"Xã Yên Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13363,
		\"name\" : \"Xã Tiên Ngoại\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13366,
		\"name\" : \"Xã Tiên Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13369,
		\"name\" : \"Xã Đọi Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13372,
		\"name\" : \"Xã Tiên Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13375,
		\"name\" : \"Xã Châu Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13378,
		\"name\" : \"Xã Tiền Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 349
	},
	{
		\"xaid\" : 13381,
		\"name\" : \"Xã Tiên Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13384,
		\"name\" : \"Thị trấn Quế\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13387,
		\"name\" : \"Xã Nguyễn Úy\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13390,
		\"name\" : \"Xã Đại Cương\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13393,
		\"name\" : \"Xã Lê Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13396,
		\"name\" : \"Xã Tượng Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13399,
		\"name\" : \"Xã Nhật Tựu\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13402,
		\"name\" : \"Xã Nhật Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13405,
		\"name\" : \"Xã Đồng Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13408,
		\"name\" : \"Xã Hoàng Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13411,
		\"name\" : \"Xã Tân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13414,
		\"name\" : \"Xã Thụy Lôi\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13417,
		\"name\" : \"Xã Văn Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13420,
		\"name\" : \"Xã Khả Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13423,
		\"name\" : \"Xã Ngọc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13426,
		\"name\" : \"Xã Kim Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13429,
		\"name\" : \"Thị trấn Ba Sao\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13432,
		\"name\" : \"Xã Liên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13435,
		\"name\" : \"Xã Thi Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13438,
		\"name\" : \"Xã Thanh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 350
	},
	{
		\"xaid\" : 13441,
		\"name\" : \"Thị trấn Kiện Khê\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13444,
		\"name\" : \"Xã Liêm Tuyền\",
		\"type\" : \"Xã\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13447,
		\"name\" : \"Xã Liêm Tiết\",
		\"type\" : \"Xã\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13450,
		\"name\" : \"Xã Liêm Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13453,
		\"name\" : \"Xã Thanh Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13456,
		\"name\" : \"Xã Liêm Cần\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13459,
		\"name\" : \"Phường Thanh Tuyền\",
		\"type\" : \"Phường\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13462,
		\"name\" : \"Xã Thanh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13465,
		\"name\" : \"Xã Liêm Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13468,
		\"name\" : \"Xã Thanh Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13471,
		\"name\" : \"Xã Thanh Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13474,
		\"name\" : \"Xã Thanh Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13477,
		\"name\" : \"Xã Thanh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13480,
		\"name\" : \"Xã Liêm Túc\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13483,
		\"name\" : \"Xã Liêm Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13486,
		\"name\" : \"Xã Thanh Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13489,
		\"name\" : \"Xã Thanh Nghị\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13492,
		\"name\" : \"Xã Thanh Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13495,
		\"name\" : \"Xã Thanh Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13498,
		\"name\" : \"Xã Thanh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 351
	},
	{
		\"xaid\" : 13501,
		\"name\" : \"Thị trấn Bình Mỹ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13504,
		\"name\" : \"Xã Bình Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13507,
		\"name\" : \"Xã Đinh Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13510,
		\"name\" : \"Xã Tràng An\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13513,
		\"name\" : \"Xã Trịnh Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 347
	},
	{
		\"xaid\" : 13516,
		\"name\" : \"Xã Đồng Du\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13519,
		\"name\" : \"Xã Ngọc Lũ\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13522,
		\"name\" : \"Xã Hưng Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13525,
		\"name\" : \"Xã Đồn Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13528,
		\"name\" : \"Xã An Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13531,
		\"name\" : \"Xã Bồ Đề\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13534,
		\"name\" : \"Xã Bối Cầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13537,
		\"name\" : \"Xã An Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13540,
		\"name\" : \"Xã An Nội\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13543,
		\"name\" : \"Xã Vũ Bản\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13546,
		\"name\" : \"Xã Trung Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13549,
		\"name\" : \"Xã Mỹ Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13552,
		\"name\" : \"Xã An Đổ\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13555,
		\"name\" : \"Xã La Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13558,
		\"name\" : \"Xã Tiêu Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13561,
		\"name\" : \"Xã An Lão\",
		\"type\" : \"Xã\",
		\"maqh\" : 352
	},
	{
		\"xaid\" : 13564,
		\"name\" : \"Thị trấn Vĩnh Trụ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13567,
		\"name\" : \"Xã Hợp Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13570,
		\"name\" : \"Xã Nguyên Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13573,
		\"name\" : \"Xã Chính Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13576,
		\"name\" : \"Xã Chân Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13579,
		\"name\" : \"Xã Đạo Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13582,
		\"name\" : \"Xã Công Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13585,
		\"name\" : \"Xã Văn Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13588,
		\"name\" : \"Xã Bắc Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13591,
		\"name\" : \"Xã Đức Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13594,
		\"name\" : \"Xã Nhân Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13597,
		\"name\" : \"Xã Đồng Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13600,
		\"name\" : \"Xã Nhân Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13603,
		\"name\" : \"Xã Nhân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13606,
		\"name\" : \"Xã Nhân Khang\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13609,
		\"name\" : \"Xã Nhân Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13612,
		\"name\" : \"Xã Nhân Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13615,
		\"name\" : \"Xã Nhân Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13618,
		\"name\" : \"Xã Nhân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13621,
		\"name\" : \"Xã Phú Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13624,
		\"name\" : \"Xã Xuân Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13627,
		\"name\" : \"Xã Tiến Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13630,
		\"name\" : \"Xã Hòa Hậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 353
	},
	{
		\"xaid\" : 13633,
		\"name\" : \"Phường Hạ Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13636,
		\"name\" : \"Phường Trần Tế Xương\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13639,
		\"name\" : \"Phường Vị Hoàng\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13642,
		\"name\" : \"Phường Vị Xuyên\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13645,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13648,
		\"name\" : \"Phường Cửa Bắc\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13651,
		\"name\" : \"Phường Nguyễn Du\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13654,
		\"name\" : \"Phường Bà Triệu\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13657,
		\"name\" : \"Phường Trường Thi\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13660,
		\"name\" : \"Phường Phan Đình Phùng\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13663,
		\"name\" : \"Phường Ngô Quyền\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13666,
		\"name\" : \"Phường Trần Hưng Đạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13669,
		\"name\" : \"Phường Trần Đăng Ninh\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13672,
		\"name\" : \"Phường Năng Tĩnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13675,
		\"name\" : \"Phường Văn Miếu\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13678,
		\"name\" : \"Phường Trần Quang Khải\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13681,
		\"name\" : \"Phường Thống Nhất\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13684,
		\"name\" : \"Phường Lộc Hạ\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13687,
		\"name\" : \"Phường Lộc Vượng\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13690,
		\"name\" : \"Phường Cửa Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13693,
		\"name\" : \"Xã Lộc Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13696,
		\"name\" : \"Xã Nam Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13699,
		\"name\" : \"Xã Mỹ Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13702,
		\"name\" : \"Xã Lộc An\",
		\"type\" : \"Xã\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13705,
		\"name\" : \"Xã Nam Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 356
	},
	{
		\"xaid\" : 13708,
		\"name\" : \"Thị trấn Mỹ Lộc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 358
	},
	{
		\"xaid\" : 13711,
		\"name\" : \"Xã Mỹ Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 358
	},
	{
		\"xaid\" : 13714,
		\"name\" : \"Xã Mỹ Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 358
	},
	{
		\"xaid\" : 13717,
		\"name\" : \"Xã Mỹ Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 358
	},
	{
		\"xaid\" : 13720,
		\"name\" : \"Xã Mỹ Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 358
	},
	{
		\"xaid\" : 13723,
		\"name\" : \"Xã Mỹ Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 358
	},
	{
		\"xaid\" : 13726,
		\"name\" : \"Xã Mỹ Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 358
	},
	{
		\"xaid\" : 13729,
		\"name\" : \"Xã Mỹ Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 358
	},
	{
		\"xaid\" : 13732,
		\"name\" : \"Xã Mỹ Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 358
	},
	{
		\"xaid\" : 13735,
		\"name\" : \"Xã Mỹ Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 358
	},
	{
		\"xaid\" : 13738,
		\"name\" : \"Xã Mỹ Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 358
	},
	{
		\"xaid\" : 13741,
		\"name\" : \"Thị trấn Gôi\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13744,
		\"name\" : \"Xã Minh Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13747,
		\"name\" : \"Xã Hiển Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13750,
		\"name\" : \"Xã Tân Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13753,
		\"name\" : \"Xã Hợp Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13756,
		\"name\" : \"Xã Đại An\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13759,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13762,
		\"name\" : \"Xã Cộng Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13765,
		\"name\" : \"Xã Trung Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13768,
		\"name\" : \"Xã Quang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13771,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13774,
		\"name\" : \"Xã Liên Bảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13777,
		\"name\" : \"Xã Thành Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13780,
		\"name\" : \"Xã Kim Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13783,
		\"name\" : \"Xã Liên Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13786,
		\"name\" : \"Xã Đại Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13789,
		\"name\" : \"Xã Tam Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13792,
		\"name\" : \"Xã Vĩnh Hào\",
		\"type\" : \"Xã\",
		\"maqh\" : 359
	},
	{
		\"xaid\" : 13795,
		\"name\" : \"Thị trấn Lâm\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13798,
		\"name\" : \"Xã Yên Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13801,
		\"name\" : \"Xã Yên Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13804,
		\"name\" : \"Xã Yên Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13807,
		\"name\" : \"Xã Yên Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13810,
		\"name\" : \"Xã Yên Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13813,
		\"name\" : \"Xã Yên Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13816,
		\"name\" : \"Xã Yên Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13819,
		\"name\" : \"Xã Yên Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13822,
		\"name\" : \"Xã Yên Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13825,
		\"name\" : \"Xã Yên Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13828,
		\"name\" : \"Xã Yên Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13831,
		\"name\" : \"Xã Yên Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13834,
		\"name\" : \"Xã Yên Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13837,
		\"name\" : \"Xã Yên Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13840,
		\"name\" : \"Xã Yên Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13843,
		\"name\" : \"Xã Yên Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13846,
		\"name\" : \"Xã Yên Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13849,
		\"name\" : \"Xã Yên Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13852,
		\"name\" : \"Xã Yên Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13855,
		\"name\" : \"Xã Yên Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13858,
		\"name\" : \"Xã Yên Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13861,
		\"name\" : \"Xã Yên Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13864,
		\"name\" : \"Xã Yên Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13867,
		\"name\" : \"Xã Yên Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13870,
		\"name\" : \"Xã Yên Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13873,
		\"name\" : \"Xã Yên Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13876,
		\"name\" : \"Xã Yên Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13879,
		\"name\" : \"Xã Yên Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13882,
		\"name\" : \"Xã Yên Khang\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13885,
		\"name\" : \"Xã Yên Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13888,
		\"name\" : \"Xã Yên Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 360
	},
	{
		\"xaid\" : 13891,
		\"name\" : \"Thị trấn Liễu Đề\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13894,
		\"name\" : \"Thị trấn Rạng Đông\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13897,
		\"name\" : \"Xã Nghĩa Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13900,
		\"name\" : \"Xã Nghĩa Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13903,
		\"name\" : \"Xã Nghĩa Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13906,
		\"name\" : \"Xã Nghĩa Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13909,
		\"name\" : \"Xã Hoàng Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13912,
		\"name\" : \"Xã Nghĩa Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13915,
		\"name\" : \"Xã Nghĩa Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13918,
		\"name\" : \"Xã Nghĩa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13921,
		\"name\" : \"Xã Nghĩa Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13924,
		\"name\" : \"Xã Nghĩa Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13927,
		\"name\" : \"Xã Nghĩa Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13930,
		\"name\" : \"Xã Nghĩa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13933,
		\"name\" : \"Xã Nghĩa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13936,
		\"name\" : \"Thị trấn Quỹ Nhất\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13939,
		\"name\" : \"Xã Nghĩa Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13942,
		\"name\" : \"Xã Nghĩa Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13945,
		\"name\" : \"Xã Nghĩa Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13948,
		\"name\" : \"Xã Nghĩa Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13951,
		\"name\" : \"Xã Nghĩa Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13954,
		\"name\" : \"Xã Nghĩa Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13957,
		\"name\" : \"Xã Nghĩa Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13960,
		\"name\" : \"Xã Nghĩa Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13963,
		\"name\" : \"Xã Nam Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 361
	},
	{
		\"xaid\" : 13966,
		\"name\" : \"Thị trấn Nam Giang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 13969,
		\"name\" : \"Xã Nam Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 13972,
		\"name\" : \"Xã Điền Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 13975,
		\"name\" : \"Xã Nghĩa An\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 13978,
		\"name\" : \"Xã Nam Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 13981,
		\"name\" : \"Xã Nam Toàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 13984,
		\"name\" : \"Xã Hồng Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 13987,
		\"name\" : \"Xã Tân Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 13990,
		\"name\" : \"Xã Nam Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 13993,
		\"name\" : \"Xã Nam Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 13996,
		\"name\" : \"Xã Nam Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 13999,
		\"name\" : \"Xã Nam Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 14002,
		\"name\" : \"Xã Nam Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 14005,
		\"name\" : \"Xã Nam Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 14008,
		\"name\" : \"Xã Nam Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 14011,
		\"name\" : \"Xã Bình Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 14014,
		\"name\" : \"Xã Đồng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 14017,
		\"name\" : \"Xã Nam Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 14020,
		\"name\" : \"Xã Nam Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 14023,
		\"name\" : \"Xã Nam Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 362
	},
	{
		\"xaid\" : 14026,
		\"name\" : \"Thị trấn Cổ Lễ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14029,
		\"name\" : \"Xã Phương Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14032,
		\"name\" : \"Xã Trực Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14035,
		\"name\" : \"Xã Trung Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14038,
		\"name\" : \"Xã Liêm Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14041,
		\"name\" : \"Xã Trực Tuấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14044,
		\"name\" : \"Xã Việt Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14047,
		\"name\" : \"Xã Trực Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14050,
		\"name\" : \"Xã Trực Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14053,
		\"name\" : \"Xã Trực Nội\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14056,
		\"name\" : \"Thị trấn Cát Thành\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14059,
		\"name\" : \"Xã Trực Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14062,
		\"name\" : \"Xã Trực Khang\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14065,
		\"name\" : \"Xã Trực Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14068,
		\"name\" : \"Xã Trực Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14071,
		\"name\" : \"Xã Trực Đại\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14074,
		\"name\" : \"Xã Trực Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14077,
		\"name\" : \"Xã Trực Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14080,
		\"name\" : \"Xã Trực Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14083,
		\"name\" : \"Xã Trực Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14086,
		\"name\" : \"Xã Trực Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 363
	},
	{
		\"xaid\" : 14089,
		\"name\" : \"Thị trấn Xuân Trường\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14092,
		\"name\" : \"Xã Xuân Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14095,
		\"name\" : \"Xã Xuân Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14098,
		\"name\" : \"Xã Xuân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14101,
		\"name\" : \"Xã Xuân Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14104,
		\"name\" : \"Xã Xuân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14107,
		\"name\" : \"Xã Xuân Đài\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14110,
		\"name\" : \"Xã Xuân Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14113,
		\"name\" : \"Xã Xuân Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14116,
		\"name\" : \"Xã Xuân Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14119,
		\"name\" : \"Xã Xuân Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14122,
		\"name\" : \"Xã Xuân Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14125,
		\"name\" : \"Xã Thọ Nghiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14128,
		\"name\" : \"Xã Xuân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14131,
		\"name\" : \"Xã Xuân Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14134,
		\"name\" : \"Xã Xuân Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14137,
		\"name\" : \"Xã Xuân Kiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14140,
		\"name\" : \"Xã Xuân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14143,
		\"name\" : \"Xã Xuân Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14146,
		\"name\" : \"Xã Xuân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 364
	},
	{
		\"xaid\" : 14149,
		\"name\" : \"Thị trấn Ngô Đồng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14152,
		\"name\" : \"Thị trấn Quất Lâm\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14155,
		\"name\" : \"Xã Giao Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14158,
		\"name\" : \"Xã Hồng Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14161,
		\"name\" : \"Xã Giao Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14164,
		\"name\" : \"Xã Giao Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14167,
		\"name\" : \"Xã Hoành Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14170,
		\"name\" : \"Xã Bình Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14173,
		\"name\" : \"Xã Giao Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14176,
		\"name\" : \"Xã Giao Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14179,
		\"name\" : \"Xã Giao Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14182,
		\"name\" : \"Xã Giao An\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14185,
		\"name\" : \"Xã Giao Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14188,
		\"name\" : \"Xã Giao Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14191,
		\"name\" : \"Xã Giao Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14194,
		\"name\" : \"Xã Giao Yến\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14197,
		\"name\" : \"Xã Giao Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14200,
		\"name\" : \"Xã Giao Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14203,
		\"name\" : \"Xã Giao Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14206,
		\"name\" : \"Xã Bạch Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14209,
		\"name\" : \"Xã Giao Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14212,
		\"name\" : \"Xã Giao Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 365
	},
	{
		\"xaid\" : 14215,
		\"name\" : \"Thị trấn Yên Định\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14218,
		\"name\" : \"Thị trấn Cồn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14221,
		\"name\" : \"Thị trấn Thịnh Long\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14224,
		\"name\" : \"Xã Hải Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14227,
		\"name\" : \"Xã Hải Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14230,
		\"name\" : \"Xã Hải Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14233,
		\"name\" : \"Xã Hải Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14236,
		\"name\" : \"Xã Hải Anh\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14239,
		\"name\" : \"Xã Hải Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14242,
		\"name\" : \"Xã Hải Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14245,
		\"name\" : \"Xã Hải Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14248,
		\"name\" : \"Xã Hải Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14251,
		\"name\" : \"Xã Hải Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14254,
		\"name\" : \"Xã Hải Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14257,
		\"name\" : \"Xã Hải Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14260,
		\"name\" : \"Xã Hải Đường\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14263,
		\"name\" : \"Xã Hải Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14266,
		\"name\" : \"Xã Hải Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14269,
		\"name\" : \"Xã Hải Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14272,
		\"name\" : \"Xã Hải Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14275,
		\"name\" : \"Xã Hải Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14278,
		\"name\" : \"Xã Hải Toàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14281,
		\"name\" : \"Xã Hải Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14284,
		\"name\" : \"Xã Hải An\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14287,
		\"name\" : \"Xã Hải Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14290,
		\"name\" : \"Xã Hải Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14293,
		\"name\" : \"Xã Hải Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14296,
		\"name\" : \"Xã Hải Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14299,
		\"name\" : \"Xã Hải Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14302,
		\"name\" : \"Xã Hải Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14305,
		\"name\" : \"Xã Hải Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14308,
		\"name\" : \"Xã Hải Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14311,
		\"name\" : \"Xã Hải Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14314,
		\"name\" : \"Xã Hải Triều\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14317,
		\"name\" : \"Xã Hải Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 366
	},
	{
		\"xaid\" : 14320,
		\"name\" : \"Phường Đông Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14323,
		\"name\" : \"Phường Tân Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14326,
		\"name\" : \"Phường Thanh Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14329,
		\"name\" : \"Phường Vân Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14332,
		\"name\" : \"Phường Bích Đào\",
		\"type\" : \"Phường\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14335,
		\"name\" : \"Phường Phúc Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14338,
		\"name\" : \"Phường Nam Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14341,
		\"name\" : \"Phường Nam Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14344,
		\"name\" : \"Phường Ninh Khánh\",
		\"type\" : \"Phường\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14347,
		\"name\" : \"Xã Ninh Nhất\",
		\"type\" : \"Xã\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14350,
		\"name\" : \"Xã Ninh Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14353,
		\"name\" : \"Xã Ninh Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14356,
		\"name\" : \"Phường Ninh Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14359,
		\"name\" : \"Phường Ninh Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 369
	},
	{
		\"xaid\" : 14362,
		\"name\" : \"Phường Bắc Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 370
	},
	{
		\"xaid\" : 14365,
		\"name\" : \"Phường Trung Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 370
	},
	{
		\"xaid\" : 14368,
		\"name\" : \"Phường Nam Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 370
	},
	{
		\"xaid\" : 14369,
		\"name\" : \"Phường Tây Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 370
	},
	{
		\"xaid\" : 14371,
		\"name\" : \"Xã Yên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 370
	},
	{
		\"xaid\" : 14374,
		\"name\" : \"Phường Yên Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 370
	},
	{
		\"xaid\" : 14375,
		\"name\" : \"Phường Tân Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 370
	},
	{
		\"xaid\" : 14377,
		\"name\" : \"Xã Quang Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 370
	},
	{
		\"xaid\" : 14380,
		\"name\" : \"Xã Đông Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 370
	},
	{
		\"xaid\" : 14383,
		\"name\" : \"Thị trấn Nho Quan\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14386,
		\"name\" : \"Xã Xích Thổ\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14389,
		\"name\" : \"Xã Gia Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14392,
		\"name\" : \"Xã Gia Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14395,
		\"name\" : \"Xã Thạch Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14398,
		\"name\" : \"Xã Gia Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14401,
		\"name\" : \"Xã Gia Tường\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14404,
		\"name\" : \"Xã Cúc Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14407,
		\"name\" : \"Xã Phú Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14410,
		\"name\" : \"Xã Đức Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14413,
		\"name\" : \"Xã Lạc Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14416,
		\"name\" : \"Xã Đồng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14419,
		\"name\" : \"Xã Yên Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14422,
		\"name\" : \"Xã Lạng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14425,
		\"name\" : \"Xã Thượng Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14428,
		\"name\" : \"Xã Văn Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14431,
		\"name\" : \"Xã Văn Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14434,
		\"name\" : \"Xã Thanh Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14437,
		\"name\" : \"Xã Sơn Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14440,
		\"name\" : \"Xã Sơn Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14443,
		\"name\" : \"Xã Văn Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14446,
		\"name\" : \"Xã Phú Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14449,
		\"name\" : \"Xã Kỳ Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14452,
		\"name\" : \"Xã Quỳnh Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14455,
		\"name\" : \"Xã Sơn Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14458,
		\"name\" : \"Xã Phú Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14461,
		\"name\" : \"Xã Quảng Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 372
	},
	{
		\"xaid\" : 14464,
		\"name\" : \"Thị trấn Me\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14467,
		\"name\" : \"Xã Gia Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14470,
		\"name\" : \"Xã Gia Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14473,
		\"name\" : \"Xã Liên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14476,
		\"name\" : \"Xã Gia Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14479,
		\"name\" : \"Xã Gia Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14482,
		\"name\" : \"Xã Gia Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14485,
		\"name\" : \"Xã Gia Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14488,
		\"name\" : \"Xã Gia Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14491,
		\"name\" : \"Xã Gia Vượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14494,
		\"name\" : \"Xã Gia Trấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14497,
		\"name\" : \"Xã Gia Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14500,
		\"name\" : \"Xã Gia Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14503,
		\"name\" : \"Xã Gia Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14506,
		\"name\" : \"Xã Gia Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14509,
		\"name\" : \"Xã Gia Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14512,
		\"name\" : \"Xã Gia Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14515,
		\"name\" : \"Xã Gia Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14518,
		\"name\" : \"Xã Gia Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14521,
		\"name\" : \"Xã Gia Sinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14524,
		\"name\" : \"Xã Gia Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 373
	},
	{
		\"xaid\" : 14527,
		\"name\" : \"Thị trấn Thiên Tôn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 374
	},
	{
		\"xaid\" : 14530,
		\"name\" : \"Xã Ninh Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 374
	},
	{
		\"xaid\" : 14533,
		\"name\" : \"Xã Trường Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 374
	},
	{
		\"xaid\" : 14536,
		\"name\" : \"Xã Ninh Khang\",
		\"type\" : \"Xã\",
		\"maqh\" : 374
	},
	{
		\"xaid\" : 14539,
		\"name\" : \"Xã Ninh Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 374
	},
	{
		\"xaid\" : 14542,
		\"name\" : \"Xã Ninh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 374
	},
	{
		\"xaid\" : 14545,
		\"name\" : \"Xã Ninh Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 374
	},
	{
		\"xaid\" : 14548,
		\"name\" : \"Xã Ninh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 374
	},
	{
		\"xaid\" : 14551,
		\"name\" : \"Xã Ninh Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 374
	},
	{
		\"xaid\" : 14554,
		\"name\" : \"Xã Ninh Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 374
	},
	{
		\"xaid\" : 14557,
		\"name\" : \"Xã Ninh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 374
	},
	{
		\"xaid\" : 14560,
		\"name\" : \"Thị trấn Yên Ninh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14563,
		\"name\" : \"Xã Khánh Tiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14566,
		\"name\" : \"Xã Khánh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14569,
		\"name\" : \"Xã Khánh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14572,
		\"name\" : \"Xã Khánh Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14575,
		\"name\" : \"Xã Khánh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14578,
		\"name\" : \"Xã Khánh Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14581,
		\"name\" : \"Xã Khánh Cư\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14584,
		\"name\" : \"Xã Khánh Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14587,
		\"name\" : \"Xã Khánh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14590,
		\"name\" : \"Xã Khánh Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14593,
		\"name\" : \"Xã Khánh Mậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14596,
		\"name\" : \"Xã Khánh Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14599,
		\"name\" : \"Xã Khánh Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14602,
		\"name\" : \"Xã Khánh Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14608,
		\"name\" : \"Xã Khánh Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14611,
		\"name\" : \"Xã Khánh Nhạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14614,
		\"name\" : \"Xã Khánh Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14617,
		\"name\" : \"Xã Khánh Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 375
	},
	{
		\"xaid\" : 14620,
		\"name\" : \"Thị trấn Phát Diệm\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14623,
		\"name\" : \"Thị trấn Bình Minh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14626,
		\"name\" : \"Xã Xuân Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14629,
		\"name\" : \"Xã Hồi Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14632,
		\"name\" : \"Xã Chính Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14635,
		\"name\" : \"Xã Kim Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14638,
		\"name\" : \"Xã Ân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14641,
		\"name\" : \"Xã Hùng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14644,
		\"name\" : \"Xã Yên Mật\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14647,
		\"name\" : \"Xã Quang Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14650,
		\"name\" : \"Xã Như Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14653,
		\"name\" : \"Xã Chất Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14656,
		\"name\" : \"Xã Đồng Hướng\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14659,
		\"name\" : \"Xã Kim Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14662,
		\"name\" : \"Xã Thượng Kiệm\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14665,
		\"name\" : \"Xã Lưu Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14668,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14671,
		\"name\" : \"Xã Yên Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14674,
		\"name\" : \"Xã Lai Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14677,
		\"name\" : \"Xã Định Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14680,
		\"name\" : \"Xã Văn Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14683,
		\"name\" : \"Xã Kim Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14686,
		\"name\" : \"Xã Kim Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14689,
		\"name\" : \"Xã Cồn Thoi\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14692,
		\"name\" : \"Xã Kim Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14695,
		\"name\" : \"Xã Kim Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14698,
		\"name\" : \"Xã Kim Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 376
	},
	{
		\"xaid\" : 14701,
		\"name\" : \"Thị trấn Yên Thịnh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14704,
		\"name\" : \"Xã Khánh Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14707,
		\"name\" : \"Xã Khánh Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14710,
		\"name\" : \"Xã Mai Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14713,
		\"name\" : \"Xã Khánh Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14719,
		\"name\" : \"Xã Yên Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14722,
		\"name\" : \"Xã Yên Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14725,
		\"name\" : \"Xã Yên Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14728,
		\"name\" : \"Xã Yên Từ\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14731,
		\"name\" : \"Xã Yên Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14734,
		\"name\" : \"Xã Yên Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14737,
		\"name\" : \"Xã Yên Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14740,
		\"name\" : \"Xã Yên Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14743,
		\"name\" : \"Xã Yên Mạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14746,
		\"name\" : \"Xã Yên Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14749,
		\"name\" : \"Xã Yên Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14752,
		\"name\" : \"Xã Yên Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 377
	},
	{
		\"xaid\" : 14755,
		\"name\" : \"Phường Hàm Rồng\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14758,
		\"name\" : \"Phường Đông Thọ\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14761,
		\"name\" : \"Phường Nam Ngạn\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14764,
		\"name\" : \"Phường Trường Thi\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14767,
		\"name\" : \"Phường Điện Biên\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14770,
		\"name\" : \"Phường Phú Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14773,
		\"name\" : \"Phường Lam Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14776,
		\"name\" : \"Phường Ba Đình\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14779,
		\"name\" : \"Phường Ngọc Trạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14782,
		\"name\" : \"Phường Đông Vệ\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14785,
		\"name\" : \"Phường Đông Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14788,
		\"name\" : \"Phường Tân Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14791,
		\"name\" : \"Phường Đông Cương\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14794,
		\"name\" : \"Phường Đông Hương\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14797,
		\"name\" : \"Phường Đông Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14800,
		\"name\" : \"Phường Quảng Hưng\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14803,
		\"name\" : \"Phường Quảng Thắng\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14806,
		\"name\" : \"Phường Quảng Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 14809,
		\"name\" : \"Phường Bắc Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 381
	},
	{
		\"xaid\" : 14812,
		\"name\" : \"Phường Ba Đình\",
		\"type\" : \"Phường\",
		\"maqh\" : 381
	},
	{
		\"xaid\" : 14815,
		\"name\" : \"Phường Lam Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 381
	},
	{
		\"xaid\" : 14818,
		\"name\" : \"Phường Ngọc Trạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 381
	},
	{
		\"xaid\" : 14821,
		\"name\" : \"Phường Đông Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 381
	},
	{
		\"xaid\" : 14823,
		\"name\" : \"Phường Phú Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 381
	},
	{
		\"xaid\" : 14824,
		\"name\" : \"Xã Quang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 381
	},
	{
		\"xaid\" : 14827,
		\"name\" : \"Xã Hà Lan\",
		\"type\" : \"Xã\",
		\"maqh\" : 381
	},
	{
		\"xaid\" : 14830,
		\"name\" : \"Phường Trung Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 382
	},
	{
		\"xaid\" : 14833,
		\"name\" : \"Phường Bắc Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 382
	},
	{
		\"xaid\" : 14836,
		\"name\" : \"Phường Trường Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 382
	},
	{
		\"xaid\" : 14839,
		\"name\" : \"Xã Quảng Cư\",
		\"type\" : \"Xã\",
		\"maqh\" : 382
	},
	{
		\"xaid\" : 14842,
		\"name\" : \"Phường Quảng Tiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 382
	},
	{
		\"xaid\" : 14845,
		\"name\" : \"Thị trấn Mường Lát\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 384
	},
	{
		\"xaid\" : 14848,
		\"name\" : \"Xã Tam Chung\",
		\"type\" : \"Xã\",
		\"maqh\" : 384
	},
	{
		\"xaid\" : 14851,
		\"name\" : \"Xã Tén Tằn\",
		\"type\" : \"Xã\",
		\"maqh\" : 384
	},
	{
		\"xaid\" : 14854,
		\"name\" : \"Xã Mường Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 384
	},
	{
		\"xaid\" : 14857,
		\"name\" : \"Xã Trung Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 384
	},
	{
		\"xaid\" : 14860,
		\"name\" : \"Xã Quang Chiểu\",
		\"type\" : \"Xã\",
		\"maqh\" : 384
	},
	{
		\"xaid\" : 14863,
		\"name\" : \"Xã Pù Nhi\",
		\"type\" : \"Xã\",
		\"maqh\" : 384
	},
	{
		\"xaid\" : 14864,
		\"name\" : \"Xã Nhi Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 384
	},
	{
		\"xaid\" : 14866,
		\"name\" : \"Xã Mường Chanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 384
	},
	{
		\"xaid\" : 14869,
		\"name\" : \"Thị trấn Quan Hóa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14872,
		\"name\" : \"Xã Thành Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14875,
		\"name\" : \"Xã Trung Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14878,
		\"name\" : \"Xã Phú Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14881,
		\"name\" : \"Xã Trung Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14884,
		\"name\" : \"Xã Phú Lệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14887,
		\"name\" : \"Xã Phú Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14890,
		\"name\" : \"Xã Phú Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14893,
		\"name\" : \"Xã Thanh Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14896,
		\"name\" : \"Xã Hiền Chung\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14899,
		\"name\" : \"Xã Hiền Kiệt\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14902,
		\"name\" : \"Xã Nam Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14905,
		\"name\" : \"Xã Hồi Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14908,
		\"name\" : \"Xã Thiên Phủ\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14911,
		\"name\" : \"Xã Phú Nghiêm\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14914,
		\"name\" : \"Xã Nam Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14917,
		\"name\" : \"Xã Nam Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14920,
		\"name\" : \"Xã Xuân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 385
	},
	{
		\"xaid\" : 14923,
		\"name\" : \"Thị trấn Cành Nàng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14926,
		\"name\" : \"Xã Điền Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14929,
		\"name\" : \"Xã Điền Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14932,
		\"name\" : \"Xã Điền Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14935,
		\"name\" : \"Xã Điền Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14938,
		\"name\" : \"Xã Thành Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14941,
		\"name\" : \"Xã Lương Ngoại\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14944,
		\"name\" : \"Xã Ái Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14947,
		\"name\" : \"Xã Lương Nội\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14950,
		\"name\" : \"Xã Điền Lư\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14953,
		\"name\" : \"Xã Lương Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14956,
		\"name\" : \"Xã Lũng Niêm\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14959,
		\"name\" : \"Xã Lũng Cao\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14962,
		\"name\" : \"Xã Hạ Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14965,
		\"name\" : \"Xã Cổ Lũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14968,
		\"name\" : \"Xã Thành Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14971,
		\"name\" : \"Xã Ban Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14974,
		\"name\" : \"Xã Kỳ Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14977,
		\"name\" : \"Xã Văn Nho\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14980,
		\"name\" : \"Xã Thiết Ống\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14983,
		\"name\" : \"Xã Lâm Sa\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14986,
		\"name\" : \"Xã Thiết Kế\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14989,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 386
	},
	{
		\"xaid\" : 14992,
		\"name\" : \"Thị trấn Quan Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 14995,
		\"name\" : \"Xã Trung Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 14998,
		\"name\" : \"Xã Trung Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 14999,
		\"name\" : \"Xã Trung Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 15001,
		\"name\" : \"Xã Trung Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 15004,
		\"name\" : \"Xã Sơn Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 15007,
		\"name\" : \"Xã Tam Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 15010,
		\"name\" : \"Xã Sơn Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 15013,
		\"name\" : \"Xã Na Mèo\",
		\"type\" : \"Xã\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 15016,
		\"name\" : \"Xã Sơn Lư\",
		\"type\" : \"Xã\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 15019,
		\"name\" : \"Xã Tam Lư\",
		\"type\" : \"Xã\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 15022,
		\"name\" : \"Xã Sơn Điện\",
		\"type\" : \"Xã\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 15025,
		\"name\" : \"Xã Mường Mìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 387
	},
	{
		\"xaid\" : 15028,
		\"name\" : \"Thị trấn Lang Chánh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 388
	},
	{
		\"xaid\" : 15031,
		\"name\" : \"Xã Yên Khương\",
		\"type\" : \"Xã\",
		\"maqh\" : 388
	},
	{
		\"xaid\" : 15034,
		\"name\" : \"Xã Yên Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 388
	},
	{
		\"xaid\" : 15037,
		\"name\" : \"Xã Trí Nang\",
		\"type\" : \"Xã\",
		\"maqh\" : 388
	},
	{
		\"xaid\" : 15040,
		\"name\" : \"Xã Giao An\",
		\"type\" : \"Xã\",
		\"maqh\" : 388
	},
	{
		\"xaid\" : 15043,
		\"name\" : \"Xã Giao Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 388
	},
	{
		\"xaid\" : 15046,
		\"name\" : \"Xã Tân Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 388
	},
	{
		\"xaid\" : 15049,
		\"name\" : \"Xã Tam Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 388
	},
	{
		\"xaid\" : 15052,
		\"name\" : \"Xã Lâm Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 388
	},
	{
		\"xaid\" : 15055,
		\"name\" : \"Xã Quang Hiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 388
	},
	{
		\"xaid\" : 15058,
		\"name\" : \"Xã Đồng Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 388
	},
	{
		\"xaid\" : 15061,
		\"name\" : \"Thị Trấn Ngọc Lặc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15064,
		\"name\" : \"Xã Lam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15067,
		\"name\" : \"Xã Mỹ Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15070,
		\"name\" : \"Xã Thúy Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15073,
		\"name\" : \"Xã Thạch Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15076,
		\"name\" : \"Xã Vân Âm\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15079,
		\"name\" : \"Xã Cao Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15082,
		\"name\" : \"Xã Ngọc Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15085,
		\"name\" : \"Xã Quang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15088,
		\"name\" : \"Xã Đồng Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15091,
		\"name\" : \"Xã Ngọc Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15094,
		\"name\" : \"Xã Ngọc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15097,
		\"name\" : \"Xã Lộc Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15100,
		\"name\" : \"Xã Cao Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15103,
		\"name\" : \"Xã Ngọc Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15106,
		\"name\" : \"Xã Phùng Giáo\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15109,
		\"name\" : \"Xã Phùng Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15112,
		\"name\" : \"Xã Phúc Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15115,
		\"name\" : \"Xã Nguyệt Ấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15118,
		\"name\" : \"Xã Kiên Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15121,
		\"name\" : \"Xã Minh Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15124,
		\"name\" : \"Xã Minh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 389
	},
	{
		\"xaid\" : 15127,
		\"name\" : \"Thị trấn Cẩm Thủy\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15130,
		\"name\" : \"Xã Phúc Do\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15133,
		\"name\" : \"Xã Cẩm Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15136,
		\"name\" : \"Xã Cẩm Quý\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15139,
		\"name\" : \"Xã Cẩm Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15142,
		\"name\" : \"Xã Cẩm Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15145,
		\"name\" : \"Xã Cẩm Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15148,
		\"name\" : \"Xã Cẩm Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15151,
		\"name\" : \"Xã Cẩm Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15154,
		\"name\" : \"Xã Cẩm Tú\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15157,
		\"name\" : \"Xã Cẩm Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15160,
		\"name\" : \"Xã Cẩm Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15163,
		\"name\" : \"Xã Cẩm Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15166,
		\"name\" : \"Xã Cẩm Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15169,
		\"name\" : \"Xã Cẩm Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15172,
		\"name\" : \"Xã Cẩm Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15175,
		\"name\" : \"Xã Cẩm Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15178,
		\"name\" : \"Xã Cẩm Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15181,
		\"name\" : \"Xã Cẩm Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15184,
		\"name\" : \"Xã Cẩm Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 390
	},
	{
		\"xaid\" : 15187,
		\"name\" : \"Thị trấn Kim Tân\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15190,
		\"name\" : \"Thị trấn Vân Du\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15193,
		\"name\" : \"Xã Thạch Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15196,
		\"name\" : \"Xã Thạch Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15199,
		\"name\" : \"Xã Thạch Quảng\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15202,
		\"name\" : \"Xã Thạch Tượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15205,
		\"name\" : \"Xã Thạch Cẩm\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15208,
		\"name\" : \"Xã Thạch Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15211,
		\"name\" : \"Xã Thạch Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15214,
		\"name\" : \"Xã Thạch Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15217,
		\"name\" : \"Xã Thạch Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15220,
		\"name\" : \"Xã Thạch Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15223,
		\"name\" : \"Xã Thành Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15226,
		\"name\" : \"Xã Thành Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15229,
		\"name\" : \"Xã Thành Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15232,
		\"name\" : \"Xã Thành Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15235,
		\"name\" : \"Xã Thành Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15238,
		\"name\" : \"Xã Thành Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15241,
		\"name\" : \"Xã Thành Trực\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15244,
		\"name\" : \"Xã Thành Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15247,
		\"name\" : \"Xã Thành Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15250,
		\"name\" : \"Xã Thành An\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15253,
		\"name\" : \"Xã Thành Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15256,
		\"name\" : \"Xã Thành Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15259,
		\"name\" : \"Xã Thành Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15262,
		\"name\" : \"Xã Thành Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15265,
		\"name\" : \"Xã Thành Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15268,
		\"name\" : \"Xã Ngọc Trạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 391
	},
	{
		\"xaid\" : 15271,
		\"name\" : \"Thị trấn Hà Trung\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15274,
		\"name\" : \"Xã Hà Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15277,
		\"name\" : \"Xã Hà Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15280,
		\"name\" : \"Xã Hà Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15283,
		\"name\" : \"Xã Hà Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15286,
		\"name\" : \"Xã Hà Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15289,
		\"name\" : \"Xã Hà Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15292,
		\"name\" : \"Xã Hà Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15295,
		\"name\" : \"Xã Hà Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15298,
		\"name\" : \"Xã Hà Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15301,
		\"name\" : \"Xã Hà Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15304,
		\"name\" : \"Xã Hà Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15307,
		\"name\" : \"Xã Hà Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15310,
		\"name\" : \"Xã Hà Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15313,
		\"name\" : \"Xã Hà Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15316,
		\"name\" : \"Xã Hà Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15319,
		\"name\" : \"Xã Hà Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15322,
		\"name\" : \"Xã Hà Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15325,
		\"name\" : \"Xã Hà Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15328,
		\"name\" : \"Xã Hà Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15331,
		\"name\" : \"Xã Hà Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15334,
		\"name\" : \"Xã Hà Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15337,
		\"name\" : \"Xã Hà Toại\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15340,
		\"name\" : \"Xã Hà Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15343,
		\"name\" : \"Xã Hà Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 392
	},
	{
		\"xaid\" : 15346,
		\"name\" : \"Thị trấn Vĩnh Lộc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15349,
		\"name\" : \"Xã Vĩnh Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15352,
		\"name\" : \"Xã Vĩnh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15355,
		\"name\" : \"Xã Vĩnh Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15358,
		\"name\" : \"Xã Vĩnh Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15361,
		\"name\" : \"Xã Vĩnh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15364,
		\"name\" : \"Xã Vĩnh Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15367,
		\"name\" : \"Xã Vĩnh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15370,
		\"name\" : \"Xã Vĩnh Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15373,
		\"name\" : \"Xã Vĩnh Khang\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15376,
		\"name\" : \"Xã Vĩnh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15379,
		\"name\" : \"Xã Vĩnh Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15382,
		\"name\" : \"Xã Vĩnh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15385,
		\"name\" : \"Xã Vĩnh Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15388,
		\"name\" : \"Xã Vĩnh Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15391,
		\"name\" : \"Xã Vĩnh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 393
	},
	{
		\"xaid\" : 15394,
		\"name\" : \"Thị trấn Quán Lào\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15397,
		\"name\" : \"Thị trấn Thống Nhất\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15400,
		\"name\" : \"Xã Yên Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15403,
		\"name\" : \"Xã Yên Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15406,
		\"name\" : \"Xã Yên Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15409,
		\"name\" : \"Xã Yên Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15412,
		\"name\" : \"Xã Quí Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15415,
		\"name\" : \"Xã Yên Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15418,
		\"name\" : \"Xã Yên Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15421,
		\"name\" : \"Xã Yên Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15424,
		\"name\" : \"Xã Yên Bái\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15427,
		\"name\" : \"Xã Yên Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15430,
		\"name\" : \"Xã Yên Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15433,
		\"name\" : \"Xã Yên Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15436,
		\"name\" : \"Xã Yên Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15439,
		\"name\" : \"Xã Yên Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15442,
		\"name\" : \"Xã Yên Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15445,
		\"name\" : \"Xã Định Tăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15448,
		\"name\" : \"Xã Định Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15451,
		\"name\" : \"Xã Định Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15454,
		\"name\" : \"Xã Định Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15457,
		\"name\" : \"Xã Định Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15460,
		\"name\" : \"Xã Định Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15463,
		\"name\" : \"Xã Định Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15466,
		\"name\" : \"Xã Định Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15469,
		\"name\" : \"Xã Định Tường\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15472,
		\"name\" : \"Xã Định Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15475,
		\"name\" : \"Xã Định Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15478,
		\"name\" : \"Xã Định Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 394
	},
	{
		\"xaid\" : 15481,
		\"name\" : \"Thị trấn Thọ Xuân\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15484,
		\"name\" : \"Thị trấn Lam Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15487,
		\"name\" : \"Thị trấn Sao Vàng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15490,
		\"name\" : \"Xã Xuân Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15493,
		\"name\" : \"Xã Thọ Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15496,
		\"name\" : \"Xã Xuân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15499,
		\"name\" : \"Xã Hạnh Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15502,
		\"name\" : \"Xã Bắc Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15505,
		\"name\" : \"Xã Nam Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15508,
		\"name\" : \"Xã Xuân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15511,
		\"name\" : \"Xã Thọ Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15514,
		\"name\" : \"Xã Xuân Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15517,
		\"name\" : \"Xã Xuân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15520,
		\"name\" : \"Xã Thọ Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15523,
		\"name\" : \"Xã Tây Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15526,
		\"name\" : \"Xã Xuân Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15529,
		\"name\" : \"Xã Xuân Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15532,
		\"name\" : \"Xã Xuân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15535,
		\"name\" : \"Xã Xuân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15538,
		\"name\" : \"Xã Thọ Diên\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15541,
		\"name\" : \"Xã Thọ Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15544,
		\"name\" : \"Xã Thọ Xương\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15547,
		\"name\" : \"Xã Xuân Bái\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15550,
		\"name\" : \"Xã Xuân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15553,
		\"name\" : \"Xã Xuân Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15556,
		\"name\" : \"Xã Xuân Lam\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15559,
		\"name\" : \"Xã Xuân Thiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15562,
		\"name\" : \"Xã Thọ Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15565,
		\"name\" : \"Xã Xuân Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15568,
		\"name\" : \"Xã Thọ Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15571,
		\"name\" : \"Xã Quảng Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15574,
		\"name\" : \"Xã Xuân Tín\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15577,
		\"name\" : \"Xã Phú Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15580,
		\"name\" : \"Xã Xuân Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15583,
		\"name\" : \"Xã Xuân Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15586,
		\"name\" : \"Xã Xuân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15589,
		\"name\" : \"Xã Thọ Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15592,
		\"name\" : \"Xã Xuân Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15595,
		\"name\" : \"Xã Xuân Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15598,
		\"name\" : \"Xã Xuân Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15601,
		\"name\" : \"Xã Thọ Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 395
	},
	{
		\"xaid\" : 15604,
		\"name\" : \"Thị trấn Thường Xuân\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15607,
		\"name\" : \"Xã Bát Mọt\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15610,
		\"name\" : \"Xã Yên Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15619,
		\"name\" : \"Xã Xuân Lẹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15622,
		\"name\" : \"Xã Vạn Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15628,
		\"name\" : \"Xã Lương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15631,
		\"name\" : \"Xã Xuân Cao\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15634,
		\"name\" : \"Xã Luận Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15637,
		\"name\" : \"Xã Luận Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15640,
		\"name\" : \"Xã Xuân Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15643,
		\"name\" : \"Xã Xuân Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15646,
		\"name\" : \"Xã Xuân Cẩm\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15649,
		\"name\" : \"Xã Xuân Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15652,
		\"name\" : \"Xã Thọ Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15655,
		\"name\" : \"Xã Ngọc Phụng\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15658,
		\"name\" : \"Xã Xuân Chinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15661,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 396
	},
	{
		\"xaid\" : 15664,
		\"name\" : \"Thị trấn Triệu Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15667,
		\"name\" : \"Xã Thọ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15670,
		\"name\" : \"Xã Thọ Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15673,
		\"name\" : \"Xã Thọ Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15676,
		\"name\" : \"Xã Hợp Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15679,
		\"name\" : \"Xã Hợp Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15682,
		\"name\" : \"Xã Hợp Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15685,
		\"name\" : \"Xã Triệu Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15688,
		\"name\" : \"Xã Hợp Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15691,
		\"name\" : \"Xã Minh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15694,
		\"name\" : \"Xã Minh Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15697,
		\"name\" : \"Xã Minh Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15700,
		\"name\" : \"Xã Dân Lực\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15703,
		\"name\" : \"Xã Dân Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15706,
		\"name\" : \"Xã Dân Quyền\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15709,
		\"name\" : \"Xã An Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15712,
		\"name\" : \"Xã Văn Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15715,
		\"name\" : \"Xã Thái Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15718,
		\"name\" : \"Xã Tân Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15721,
		\"name\" : \"Xã Đồng Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15724,
		\"name\" : \"Xã Đồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15727,
		\"name\" : \"Xã Đồng Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15730,
		\"name\" : \"Xã Tiến Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15733,
		\"name\" : \"Xã Khuyến Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15736,
		\"name\" : \"Xã Xuân Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15739,
		\"name\" : \"Xã Xuân Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15742,
		\"name\" : \"Xã Thọ Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15745,
		\"name\" : \"Xã Xuân Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15748,
		\"name\" : \"Xã Thọ Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15751,
		\"name\" : \"Xã Thọ Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15754,
		\"name\" : \"Xã Thọ Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15757,
		\"name\" : \"Xã Thọ Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15760,
		\"name\" : \"Xã Thọ Vực\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15763,
		\"name\" : \"Xã Thọ Thế\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15766,
		\"name\" : \"Xã Nông Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15769,
		\"name\" : \"Xã Bình Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 397
	},
	{
		\"xaid\" : 15772,
		\"name\" : \"Thị trấn Vạn Hà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15775,
		\"name\" : \"Xã Thiệu Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15778,
		\"name\" : \"Xã Thiệu Vũ\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15781,
		\"name\" : \"Xã Thiệu Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15784,
		\"name\" : \"Xã Thiệu Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15787,
		\"name\" : \"Xã Thiệu Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15790,
		\"name\" : \"Xã Thiệu Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15793,
		\"name\" : \"Xã Thiệu Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15796,
		\"name\" : \"Xã Thiệu Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15799,
		\"name\" : \"Xã Thiệu Duy\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15802,
		\"name\" : \"Xã Thiệu Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15805,
		\"name\" : \"Xã Thiệu Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15808,
		\"name\" : \"Xã Thiệu Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15811,
		\"name\" : \"Xã Thiệu Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15814,
		\"name\" : \"Xã Thiệu Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15817,
		\"name\" : \"Xã Thiệu Toán\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15820,
		\"name\" : \"Xã Thiệu Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15823,
		\"name\" : \"Xã Thiệu Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15826,
		\"name\" : \"Xã Thiệu Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15829,
		\"name\" : \"Xã Thiệu Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15832,
		\"name\" : \"Xã Thiệu Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15835,
		\"name\" : \"Xã Thiệu Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15838,
		\"name\" : \"Xã Thiệu Vận\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15841,
		\"name\" : \"Xã Thiệu Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15844,
		\"name\" : \"Xã Thiệu Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15847,
		\"name\" : \"Xã Thiệu Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15850,
		\"name\" : \"Xã Thiệu Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 15853,
		\"name\" : \"Xã Thiệu Giao\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15856,
		\"name\" : \"Xã Thiệu Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 15859,
		\"name\" : \"Xã Thiệu Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 15862,
		\"name\" : \"Xã Thiệu Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 398
	},
	{
		\"xaid\" : 15865,
		\"name\" : \"Thị trấn Hoằng Hóa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15868,
		\"name\" : \"Phường Tào Xuyên\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 15871,
		\"name\" : \"Xã Hoằng Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15874,
		\"name\" : \"Xã Hoằng Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15877,
		\"name\" : \"Xã Hoằng Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15880,
		\"name\" : \"Xã Hoằng Phượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15883,
		\"name\" : \"Xã Hoằng Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15886,
		\"name\" : \"Xã Hoằng Quỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15889,
		\"name\" : \"Xã Hoằng Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15892,
		\"name\" : \"Xã Hoằng Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15895,
		\"name\" : \"Xã Hoằng Trinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15898,
		\"name\" : \"Xã Hoằng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15901,
		\"name\" : \"Xã Hoằng Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15904,
		\"name\" : \"Xã Hoằng Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15907,
		\"name\" : \"Xã Hoằng Cát\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15910,
		\"name\" : \"Xã Hoằng Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15913,
		\"name\" : \"Xã Hoằng Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 15916,
		\"name\" : \"Xã Hoằng Quý\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15919,
		\"name\" : \"Xã Hoằng Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15922,
		\"name\" : \"Xã Hoằng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 15925,
		\"name\" : \"Xã Hoằng Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 15928,
		\"name\" : \"Xã Hoằng Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15931,
		\"name\" : \"Xã Hoằng Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15934,
		\"name\" : \"Xã Hoằng Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15937,
		\"name\" : \"Xã Hoằng Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15940,
		\"name\" : \"Xã Hoằng Đạt\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15943,
		\"name\" : \"Xã Hoằng Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15946,
		\"name\" : \"Xã Hoằng Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15949,
		\"name\" : \"Xã Hoằng Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15952,
		\"name\" : \"Xã Hoằng Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15955,
		\"name\" : \"Xã Hoằng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15958,
		\"name\" : \"Xã Hoằng Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15961,
		\"name\" : \"Xã Hoằng Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15964,
		\"name\" : \"Xã Hoằng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15967,
		\"name\" : \"Xã Hoằng Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15970,
		\"name\" : \"Xã Hoằng Đại\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 15973,
		\"name\" : \"Xã Hoằng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15976,
		\"name\" : \"Xã Hoằng Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15979,
		\"name\" : \"Xã Hoằng Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15982,
		\"name\" : \"Xã Hoằng Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15985,
		\"name\" : \"Xã Hoằng Yến\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15988,
		\"name\" : \"Xã Hoằng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15991,
		\"name\" : \"Xã Hoằng Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15994,
		\"name\" : \"Xã Hoằng Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 15997,
		\"name\" : \"Xã Hoằng Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 16000,
		\"name\" : \"Xã Hoằng Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 16003,
		\"name\" : \"Xã Hoằng Phụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 16006,
		\"name\" : \"Xã Hoằng Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 399
	},
	{
		\"xaid\" : 16009,
		\"name\" : \"Xã Hoằng Anh\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 16012,
		\"name\" : \"Thị trấn Hậu Lộc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16015,
		\"name\" : \"Xã Đồng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16018,
		\"name\" : \"Xã Đại Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16021,
		\"name\" : \"Xã Triệu Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16024,
		\"name\" : \"Xã Châu Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16027,
		\"name\" : \"Xã Tiến Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16030,
		\"name\" : \"Xã Lộc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16033,
		\"name\" : \"Xã Cầu Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16036,
		\"name\" : \"Xã Thành Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16039,
		\"name\" : \"Xã Tuy Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16042,
		\"name\" : \"Xã Phong Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16045,
		\"name\" : \"Xã Mỹ Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16048,
		\"name\" : \"Xã Văn Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16051,
		\"name\" : \"Xã Thuần Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16054,
		\"name\" : \"Xã Lộc Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16057,
		\"name\" : \"Xã Xuân Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16060,
		\"name\" : \"Xã Thịnh Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16063,
		\"name\" : \"Xã Hoa Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16066,
		\"name\" : \"Xã Liên Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16069,
		\"name\" : \"Xã Quang Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16072,
		\"name\" : \"Xã Phú Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16075,
		\"name\" : \"Xã Hòa Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16078,
		\"name\" : \"Xã Minh Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16081,
		\"name\" : \"Xã Hưng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16084,
		\"name\" : \"Xã Hải Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16087,
		\"name\" : \"Xã Đa Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16090,
		\"name\" : \"Xã Ngư Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 400
	},
	{
		\"xaid\" : 16093,
		\"name\" : \"Thị trấn Nga Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16096,
		\"name\" : \"Xã Ba Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16099,
		\"name\" : \"Xã Nga Vịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16102,
		\"name\" : \"Xã Nga Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16105,
		\"name\" : \"Xã Nga Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16108,
		\"name\" : \"Xã Nga Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16111,
		\"name\" : \"Xã Nga Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16114,
		\"name\" : \"Xã Nga Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16117,
		\"name\" : \"Xã Nga Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16120,
		\"name\" : \"Xã Nga Bạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16123,
		\"name\" : \"Xã Nga Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16126,
		\"name\" : \"Xã Nga Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16129,
		\"name\" : \"Xã Nga Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16132,
		\"name\" : \"Xã Nga Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16135,
		\"name\" : \"Xã Nga Giáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16138,
		\"name\" : \"Xã Nga Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16141,
		\"name\" : \"Xã Nga Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16144,
		\"name\" : \"Xã Nga An\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16147,
		\"name\" : \"Xã Nga Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16150,
		\"name\" : \"Xã Nga Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16153,
		\"name\" : \"Xã Nga Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16156,
		\"name\" : \"Xã Nga Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16159,
		\"name\" : \"Xã Nga Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16162,
		\"name\" : \"Xã Nga Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16165,
		\"name\" : \"Xã Nga Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16168,
		\"name\" : \"Xã Nga Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16171,
		\"name\" : \"Xã Nga Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 401
	},
	{
		\"xaid\" : 16174,
		\"name\" : \"Thị trấn Yên Cát\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16177,
		\"name\" : \"Xã Bãi Trành\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16180,
		\"name\" : \"Xã Xuân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16183,
		\"name\" : \"Xã Xuân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16186,
		\"name\" : \"Xã Hóa Quỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16189,
		\"name\" : \"Xã Xuân Quỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16192,
		\"name\" : \"Xã Yên Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16195,
		\"name\" : \"Xã Cát Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16198,
		\"name\" : \"Xã Cát Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16201,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16204,
		\"name\" : \"Xã Bình Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16207,
		\"name\" : \"Xã Thanh Quân\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16210,
		\"name\" : \"Xã Thanh Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16213,
		\"name\" : \"Xã Thanh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16216,
		\"name\" : \"Xã Thanh Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16219,
		\"name\" : \"Xã Thanh Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16222,
		\"name\" : \"Xã Thanh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16225,
		\"name\" : \"Xã Thượng Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 402
	},
	{
		\"xaid\" : 16228,
		\"name\" : \"Thị trấn Bến Sung\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16231,
		\"name\" : \"Xã Cán Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16234,
		\"name\" : \"Xã Xuân Du\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16237,
		\"name\" : \"Xã Xuân Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16240,
		\"name\" : \"Xã Phượng Nghi\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16243,
		\"name\" : \"Xã Mậu Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16246,
		\"name\" : \"Xã Xuân Khang\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16249,
		\"name\" : \"Xã Phú Nhuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16252,
		\"name\" : \"Xã Hải Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16255,
		\"name\" : \"Xã Hải Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16258,
		\"name\" : \"Xã Xuân Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16261,
		\"name\" : \"Xã Xuân Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16264,
		\"name\" : \"Xã Yên Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16267,
		\"name\" : \"Xã Yên Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16270,
		\"name\" : \"Xã Phúc Đường\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16273,
		\"name\" : \"Xã Thanh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16276,
		\"name\" : \"Xã Thanh Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 403
	},
	{
		\"xaid\" : 16279,
		\"name\" : \"Thị trấn Nông Cống\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16282,
		\"name\" : \"Xã Tân Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16285,
		\"name\" : \"Xã Tân Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16288,
		\"name\" : \"Xã Hoàng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16291,
		\"name\" : \"Xã Tân Khang\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16294,
		\"name\" : \"Xã Hoàng Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16297,
		\"name\" : \"Xã Trung Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16300,
		\"name\" : \"Xã Trung Ý\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16303,
		\"name\" : \"Xã Trung Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16306,
		\"name\" : \"Xã Tế Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16309,
		\"name\" : \"Xã Tế Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16315,
		\"name\" : \"Xã Tế Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16318,
		\"name\" : \"Xã Tế Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16321,
		\"name\" : \"Xã Minh Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16324,
		\"name\" : \"Xã Minh Khôi\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16327,
		\"name\" : \"Xã Vạn Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16330,
		\"name\" : \"Xã Trường Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16333,
		\"name\" : \"Xã Vạn Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16336,
		\"name\" : \"Xã Trường Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16339,
		\"name\" : \"Xã Vạn Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16342,
		\"name\" : \"Xã Thăng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16345,
		\"name\" : \"Xã Trường Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16348,
		\"name\" : \"Xã Trường Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16351,
		\"name\" : \"Xã Thăng Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16354,
		\"name\" : \"Xã Công Liêm\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16357,
		\"name\" : \"Xã Tượng Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16360,
		\"name\" : \"Xã Thăng Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16363,
		\"name\" : \"Xã Tượng Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16366,
		\"name\" : \"Xã Tượng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16369,
		\"name\" : \"Xã Công Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16372,
		\"name\" : \"Xã Công Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16375,
		\"name\" : \"Xã Yên Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 404
	},
	{
		\"xaid\" : 16378,
		\"name\" : \"Thị trấn Rừng Thông\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16379,
		\"name\" : \"Phường An Hoạch\",
		\"type\" : \"Phường\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 16381,
		\"name\" : \"Xã Đông Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16384,
		\"name\" : \"Xã Đông Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16387,
		\"name\" : \"Xã Đông Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16390,
		\"name\" : \"Xã Đông Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16393,
		\"name\" : \"Xã Đông Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16396,
		\"name\" : \"Xã Đông Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 16399,
		\"name\" : \"Xã Đông Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16402,
		\"name\" : \"Xã Đông Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16405,
		\"name\" : \"Xã Đông Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16408,
		\"name\" : \"Xã Đông Anh\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16414,
		\"name\" : \"Xã Đông Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16417,
		\"name\" : \"Xã Đông Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16420,
		\"name\" : \"Xã Đông Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16423,
		\"name\" : \"Xã Đông Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16426,
		\"name\" : \"Xã Đông Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 405
	},
	{
		\"xaid\" : 16429,
		\"name\" : \"Xã Đông Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 16432,
		\"name\" : \"Xã Đông Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 16435,
		\"name\" : \"Xã Đông Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 16438,
		\"name\" : \"Thị trấn Quảng Xương\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16441,
		\"name\" : \"Xã Quảng Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 16444,
		\"name\" : \"Xã Quảng Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16447,
		\"name\" : \"Xã Quảng Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16450,
		\"name\" : \"Xã Quảng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16453,
		\"name\" : \"Xã Quảng Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16456,
		\"name\" : \"Xã Quảng Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16459,
		\"name\" : \"Xã Quảng Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 16462,
		\"name\" : \"Xã Quảng Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16465,
		\"name\" : \"Xã Quảng Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16468,
		\"name\" : \"Xã Quảng Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16471,
		\"name\" : \"Xã Quảng Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16474,
		\"name\" : \"Xã Quảng Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16477,
		\"name\" : \"Xã Quảng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16480,
		\"name\" : \"Xã Quảng Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16483,
		\"name\" : \"Xã Quảng Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16486,
		\"name\" : \"Xã Quảng Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16489,
		\"name\" : \"Xã Quảng Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16492,
		\"name\" : \"Xã Quảng Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16495,
		\"name\" : \"Xã Quảng Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16498,
		\"name\" : \"Xã Quảng Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16501,
		\"name\" : \"Xã Quảng Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16504,
		\"name\" : \"Xã Quảng Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16507,
		\"name\" : \"Xã Quảng Cát\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 16510,
		\"name\" : \"Xã Quảng Vọng\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16513,
		\"name\" : \"Xã Quảng Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 382
	},
	{
		\"xaid\" : 16516,
		\"name\" : \"Xã Quảng Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 382
	},
	{
		\"xaid\" : 16519,
		\"name\" : \"Xã Quảng Giao\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16522,
		\"name\" : \"Xã Quảng Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 16525,
		\"name\" : \"Xã Quảng Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 380
	},
	{
		\"xaid\" : 16528,
		\"name\" : \"Xã Quảng Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 382
	},
	{
		\"xaid\" : 16531,
		\"name\" : \"Xã Quảng Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 382
	},
	{
		\"xaid\" : 16534,
		\"name\" : \"Xã Quảng Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 382
	},
	{
		\"xaid\" : 16537,
		\"name\" : \"Xã Quảng Đại\",
		\"type\" : \"Xã\",
		\"maqh\" : 382
	},
	{
		\"xaid\" : 16540,
		\"name\" : \"Xã Quảng Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16543,
		\"name\" : \"Xã Quảng Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16546,
		\"name\" : \"Xã Quảng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16549,
		\"name\" : \"Xã Quảng Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16552,
		\"name\" : \"Xã Quảng Nham\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16555,
		\"name\" : \"Xã Quảng Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16558,
		\"name\" : \"Xã Quảng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 406
	},
	{
		\"xaid\" : 16561,
		\"name\" : \"Thị trấn Tĩnh Gia\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16564,
		\"name\" : \"Xã Hải Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16567,
		\"name\" : \"Xã Thanh Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16570,
		\"name\" : \"Xã Thanh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16573,
		\"name\" : \"Xã Triêu Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16576,
		\"name\" : \"Xã Hải Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16579,
		\"name\" : \"Xã Anh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16582,
		\"name\" : \"Xã Ngọc Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16585,
		\"name\" : \"Xã Hải An\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16588,
		\"name\" : \"Xã Hùng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16591,
		\"name\" : \"Xã Các Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16594,
		\"name\" : \"Xã Tân Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16597,
		\"name\" : \"Xã Hải Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16600,
		\"name\" : \"Xã Định Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16603,
		\"name\" : \"Xã Phú Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16606,
		\"name\" : \"Xã Ninh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16609,
		\"name\" : \"Xã Nguyên Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16612,
		\"name\" : \"Xã Hải Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16615,
		\"name\" : \"Xã Hải Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16618,
		\"name\" : \"Xã Bình Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16621,
		\"name\" : \"Xã Hải Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16624,
		\"name\" : \"Xã Phú Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16627,
		\"name\" : \"Xã Xuân Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16630,
		\"name\" : \"Xã Trúc Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16633,
		\"name\" : \"Xã Hải Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16636,
		\"name\" : \"Xã Tân Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16639,
		\"name\" : \"Xã Tùng Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16642,
		\"name\" : \"Xã Tĩnh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16645,
		\"name\" : \"Xã Mai Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16648,
		\"name\" : \"Xã Trường Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16651,
		\"name\" : \"Xã Hải Yến\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16654,
		\"name\" : \"Xã Hải Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16657,
		\"name\" : \"Xã Nghi Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16660,
		\"name\" : \"Xã Hải Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 407
	},
	{
		\"xaid\" : 16663,
		\"name\" : \"Phường Đông Vĩnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16666,
		\"name\" : \"Phường Hà Huy Tập\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16669,
		\"name\" : \"Phường Lê Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16670,
		\"name\" : \"Phường Quán Bàu\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16672,
		\"name\" : \"Phường Hưng Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16673,
		\"name\" : \"Phường Hưng Phúc\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16675,
		\"name\" : \"Phường Hưng Dũng\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16678,
		\"name\" : \"Phường Cửa Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16681,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16684,
		\"name\" : \"Phường Đội Cung\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16687,
		\"name\" : \"Phường Lê Mao\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16690,
		\"name\" : \"Phường Trường Thi\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16693,
		\"name\" : \"Phường Bến Thủy\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16696,
		\"name\" : \"Phường Hồng Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16699,
		\"name\" : \"Phường Trung Đô\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16702,
		\"name\" : \"Xã Nghi Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16705,
		\"name\" : \"Xã Hưng Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16708,
		\"name\" : \"Xã Hưng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16711,
		\"name\" : \"Xã Hưng Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16714,
		\"name\" : \"Phường Vinh Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 16717,
		\"name\" : \"Phường Nghi Thuỷ\",
		\"type\" : \"Phường\",
		\"maqh\" : 413
	},
	{
		\"xaid\" : 16720,
		\"name\" : \"Phường Nghi Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 413
	},
	{
		\"xaid\" : 16723,
		\"name\" : \"Phường Thu Thuỷ\",
		\"type\" : \"Phường\",
		\"maqh\" : 413
	},
	{
		\"xaid\" : 16726,
		\"name\" : \"Phường Nghi Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 413
	},
	{
		\"xaid\" : 16729,
		\"name\" : \"Phường Nghi Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 413
	},
	{
		\"xaid\" : 16732,
		\"name\" : \"Phường Nghi Hương\",
		\"type\" : \"Phường\",
		\"maqh\" : 413
	},
	{
		\"xaid\" : 16735,
		\"name\" : \"Phường Nghi Thu\",
		\"type\" : \"Phường\",
		\"maqh\" : 413
	},
	{
		\"xaid\" : 16738,
		\"name\" : \"Thị trấn Kim Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16741,
		\"name\" : \"Xã Thông Thụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16744,
		\"name\" : \"Xã Đồng Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16747,
		\"name\" : \"Xã Hạnh Dịch\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16750,
		\"name\" : \"Xã Tiền Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16753,
		\"name\" : \"Xã Nậm Giải\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16756,
		\"name\" : \"Xã Tri Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16759,
		\"name\" : \"Xã Châu Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16762,
		\"name\" : \"Xã Mường Nọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16763,
		\"name\" : \"Xã Quế Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16765,
		\"name\" : \"Xã Châu Thôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16768,
		\"name\" : \"Xã Nậm Nhoóng\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16771,
		\"name\" : \"Xã Quang Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16774,
		\"name\" : \"Xã Căm Muộn\",
		\"type\" : \"Xã\",
		\"maqh\" : 415
	},
	{
		\"xaid\" : 16777,
		\"name\" : \"Thị trấn Tân Lạc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 416
	},
	{
		\"xaid\" : 16780,
		\"name\" : \"Xã Châu Bính\",
		\"type\" : \"Xã\",
		\"maqh\" : 416
	},
	{
		\"xaid\" : 16783,
		\"name\" : \"Xã Châu Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 416
	},
	{
		\"xaid\" : 16786,
		\"name\" : \"Xã Châu Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 416
	},
	{
		\"xaid\" : 16789,
		\"name\" : \"Xã Châu Nga\",
		\"type\" : \"Xã\",
		\"maqh\" : 416
	},
	{
		\"xaid\" : 16792,
		\"name\" : \"Xã Châu Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 416
	},
	{
		\"xaid\" : 16795,
		\"name\" : \"Xã Châu Hạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 416
	},
	{
		\"xaid\" : 16798,
		\"name\" : \"Xã Châu Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 416
	},
	{
		\"xaid\" : 16801,
		\"name\" : \"Xã Châu Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 416
	},
	{
		\"xaid\" : 16804,
		\"name\" : \"Xã Châu Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 416
	},
	{
		\"xaid\" : 16807,
		\"name\" : \"Xã Châu Hoàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 416
	},
	{
		\"xaid\" : 16810,
		\"name\" : \"Xã Diên Lãm\",
		\"type\" : \"Xã\",
		\"maqh\" : 416
	},
	{
		\"xaid\" : 16813,
		\"name\" : \"Thị trấn Mường Xén\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16816,
		\"name\" : \"Xã Mỹ Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16819,
		\"name\" : \"Xã Bắc Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16822,
		\"name\" : \"Xã Keng Đu\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16825,
		\"name\" : \"Xã Đoọc Mạy\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16828,
		\"name\" : \"Xã Huồi Tụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16831,
		\"name\" : \"Xã Mường Lống\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16834,
		\"name\" : \"Xã Na Loi\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16837,
		\"name\" : \"Xã Nậm Cắn\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16840,
		\"name\" : \"Xã Bảo Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16843,
		\"name\" : \"Xã Phà Đánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16846,
		\"name\" : \"Xã Bảo Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16849,
		\"name\" : \"Xã Hữu Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16852,
		\"name\" : \"Xã Tà Cạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16855,
		\"name\" : \"Xã Chiêu Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16858,
		\"name\" : \"Xã Mường Típ\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16861,
		\"name\" : \"Xã Hữu Kiệm\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16864,
		\"name\" : \"Xã Tây Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16867,
		\"name\" : \"Xã Mường Ải\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16870,
		\"name\" : \"Xã Na Ngoi\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16873,
		\"name\" : \"Xã Nậm Càn\",
		\"type\" : \"Xã\",
		\"maqh\" : 417
	},
	{
		\"xaid\" : 16876,
		\"name\" : \"Thị trấn Hòa Bình\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16879,
		\"name\" : \"Xã Mai Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16882,
		\"name\" : \"Xã Nhôn Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16885,
		\"name\" : \"Xã Hữu Khuông\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16900,
		\"name\" : \"Xã Yên Tĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16903,
		\"name\" : \"Xã Nga My\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16904,
		\"name\" : \"Xã Xiêng My\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16906,
		\"name\" : \"Xã Lưỡng Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16909,
		\"name\" : \"Xã Yên Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16912,
		\"name\" : \"Xã Yên Na\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16915,
		\"name\" : \"Xã Lưu Kiền\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16918,
		\"name\" : \"Xã Thạch Giám\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16921,
		\"name\" : \"Xã Xá Lượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16924,
		\"name\" : \"Xã Tam Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16927,
		\"name\" : \"Xã Tam Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16930,
		\"name\" : \"Xã Yên Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16933,
		\"name\" : \"Xã Tam Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16936,
		\"name\" : \"Xã Tam Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 418
	},
	{
		\"xaid\" : 16939,
		\"name\" : \"Phường Hoà Hiếu\",
		\"type\" : \"Phường\",
		\"maqh\" : 414
	},
	{
		\"xaid\" : 16941,
		\"name\" : \"Thị trấn Nghĩa Đàn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16942,
		\"name\" : \"Xã Nghĩa Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16945,
		\"name\" : \"Xã Nghĩa Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16948,
		\"name\" : \"Xã Nghĩa Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16951,
		\"name\" : \"Xã Nghĩa Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16954,
		\"name\" : \"Xã Nghĩa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16957,
		\"name\" : \"Xã Nghĩa Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16960,
		\"name\" : \"Xã Nghĩa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16963,
		\"name\" : \"Xã Nghĩa Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16966,
		\"name\" : \"Xã Nghĩa Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16969,
		\"name\" : \"Xã Nghĩa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16972,
		\"name\" : \"Xã Nghĩa Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16975,
		\"name\" : \"Xã Nghĩa Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16978,
		\"name\" : \"Xã Nghĩa Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16981,
		\"name\" : \"Xã Nghĩa Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16984,
		\"name\" : \"Xã Nghĩa Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16987,
		\"name\" : \"Xã Nghĩa Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16990,
		\"name\" : \"Xã Nghĩa Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16993,
		\"name\" : \"Phường Quang Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 414
	},
	{
		\"xaid\" : 16994,
		\"name\" : \"Phường Quang Tiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 414
	},
	{
		\"xaid\" : 16996,
		\"name\" : \"Xã Nghĩa Hiếu\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 16999,
		\"name\" : \"Xã Nghĩa Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 17002,
		\"name\" : \"Xã Nghĩa Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 414
	},
	{
		\"xaid\" : 17003,
		\"name\" : \"Phường Long Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 414
	},
	{
		\"xaid\" : 17005,
		\"name\" : \"Xã Nghĩa Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 414
	},
	{
		\"xaid\" : 17008,
		\"name\" : \"Xã Nghĩa Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 414
	},
	{
		\"xaid\" : 17011,
		\"name\" : \"Xã Tây Hiếu\",
		\"type\" : \"Xã\",
		\"maqh\" : 414
	},
	{
		\"xaid\" : 17014,
		\"name\" : \"Xã Nghĩa Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 414
	},
	{
		\"xaid\" : 17017,
		\"name\" : \"Xã Đông Hiếu\",
		\"type\" : \"Xã\",
		\"maqh\" : 414
	},
	{
		\"xaid\" : 17020,
		\"name\" : \"Xã Nghĩa Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 17023,
		\"name\" : \"Xã Nghĩa An\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 17026,
		\"name\" : \"Xã Nghĩa Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 17029,
		\"name\" : \"Xã Nghĩa Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 17032,
		\"name\" : \"Xã Nghĩa Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 419
	},
	{
		\"xaid\" : 17035,
		\"name\" : \"Thị trấn Quỳ Hợp\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17038,
		\"name\" : \"Xã Yên Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17041,
		\"name\" : \"Xã Châu Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17044,
		\"name\" : \"Xã Châu Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17047,
		\"name\" : \"Xã Đồng Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17050,
		\"name\" : \"Xã Châu Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17053,
		\"name\" : \"Xã Liên Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17056,
		\"name\" : \"Xã Châu Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17059,
		\"name\" : \"Xã Tam Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17062,
		\"name\" : \"Xã Châu Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17065,
		\"name\" : \"Xã Châu Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17068,
		\"name\" : \"Xã Thọ Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17071,
		\"name\" : \"Xã Minh Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17074,
		\"name\" : \"Xã Nghĩa Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17077,
		\"name\" : \"Xã Châu Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17080,
		\"name\" : \"Xã Châu Đình\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17083,
		\"name\" : \"Xã Văn Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17086,
		\"name\" : \"Xã Nam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17089,
		\"name\" : \"Xã Châu Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17092,
		\"name\" : \"Xã Hạ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17095,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 420
	},
	{
		\"xaid\" : 17098,
		\"name\" : \"Thị trấn Cầu Giát\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17101,
		\"name\" : \"Xã Quỳnh Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17104,
		\"name\" : \"Xã Quỳnh Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 432
	},
	{
		\"xaid\" : 17107,
		\"name\" : \"Xã Quỳnh Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 432
	},
	{
		\"xaid\" : 17110,
		\"name\" : \"Phường Quỳnh Thiện\",
		\"type\" : \"Phường\",
		\"maqh\" : 432
	},
	{
		\"xaid\" : 17113,
		\"name\" : \"Xã Quỳnh Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 432
	},
	{
		\"xaid\" : 17116,
		\"name\" : \"Xã Quỳnh Trang\",
		\"type\" : \"Xã\",
		\"maqh\" : 432
	},
	{
		\"xaid\" : 17119,
		\"name\" : \"Xã Quỳnh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17122,
		\"name\" : \"Xã Quỳnh Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17125,
		\"name\" : \"Phường Mai Hùng\",
		\"type\" : \"Phường\",
		\"maqh\" : 432
	},
	{
		\"xaid\" : 17128,
		\"name\" : \"Phường Quỳnh Dị\",
		\"type\" : \"Phường\",
		\"maqh\" : 432
	},
	{
		\"xaid\" : 17131,
		\"name\" : \"Phường Quỳnh Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 432
	},
	{
		\"xaid\" : 17134,
		\"name\" : \"Phường Quỳnh Phương\",
		\"type\" : \"Phường\",
		\"maqh\" : 432
	},
	{
		\"xaid\" : 17137,
		\"name\" : \"Xã Quỳnh Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 432
	},
	{
		\"xaid\" : 17140,
		\"name\" : \"Xã Tân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17143,
		\"name\" : \"Xã Quỳnh Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17146,
		\"name\" : \"Xã Ngọc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17149,
		\"name\" : \"Xã Quỳnh Tam\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17152,
		\"name\" : \"Xã Quỳnh Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17155,
		\"name\" : \"Xã Quỳnh Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17158,
		\"name\" : \"Xã Quỳnh Bảng\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17161,
		\"name\" : \"Xã Quỳnh Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17164,
		\"name\" : \"Xã Quỳnh Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17167,
		\"name\" : \"Xã Quỳnh Hậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17170,
		\"name\" : \"Xã Quỳnh Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17173,
		\"name\" : \"Xã Quỳnh Đôi\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17176,
		\"name\" : \"Xã Quỳnh Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17179,
		\"name\" : \"Xã Quỳnh Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17182,
		\"name\" : \"Xã Quỳnh Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17185,
		\"name\" : \"Xã Quỳnh Bá\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17188,
		\"name\" : \"Xã Quỳnh Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17191,
		\"name\" : \"Xã Quỳnh Diện\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17194,
		\"name\" : \"Xã Quỳnh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17197,
		\"name\" : \"Xã Quỳnh Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17200,
		\"name\" : \"Xã Quỳnh Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17203,
		\"name\" : \"Xã Quỳnh Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17206,
		\"name\" : \"Xã An Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17209,
		\"name\" : \"Xã Tiến Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17212,
		\"name\" : \"Xã Sơn Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17215,
		\"name\" : \"Xã Quỳnh Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17218,
		\"name\" : \"Xã Quỳnh Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17221,
		\"name\" : \"Xã Quỳnh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17224,
		\"name\" : \"Xã Tân Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 421
	},
	{
		\"xaid\" : 17227,
		\"name\" : \"Thị trấn Con Cuông\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17230,
		\"name\" : \"Xã Bình Chuẩn\",
		\"type\" : \"Xã\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17233,
		\"name\" : \"Xã Lạng Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17236,
		\"name\" : \"Xã Cam Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17239,
		\"name\" : \"Xã Thạch Ngàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17242,
		\"name\" : \"Xã Đôn Phục\",
		\"type\" : \"Xã\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17245,
		\"name\" : \"Xã Mậu Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17248,
		\"name\" : \"Xã Châu Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17251,
		\"name\" : \"Xã Chi Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17254,
		\"name\" : \"Xã Bồng Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17257,
		\"name\" : \"Xã Yên Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17260,
		\"name\" : \"Xã Lục Dạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17263,
		\"name\" : \"Xã Môn Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 422
	},
	{
		\"xaid\" : 17266,
		\"name\" : \"Thị trấn Tân Kỳ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17269,
		\"name\" : \"Xã Tân Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17272,
		\"name\" : \"Xã Tân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17275,
		\"name\" : \"Xã Tân Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17278,
		\"name\" : \"Xã Giai Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17281,
		\"name\" : \"Xã Nghĩa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17284,
		\"name\" : \"Xã Nghĩa Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17287,
		\"name\" : \"Xã Đồng Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17290,
		\"name\" : \"Xã Nghĩa Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17293,
		\"name\" : \"Xã Nghĩa Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17296,
		\"name\" : \"Xã Nghĩa Hoàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17299,
		\"name\" : \"Xã Nghĩa Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17302,
		\"name\" : \"Xã Tiên Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17305,
		\"name\" : \"Xã Tân An\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17308,
		\"name\" : \"Xã Nghĩa Dũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17311,
		\"name\" : \"Xã Tân Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17314,
		\"name\" : \"Xã Kỳ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17317,
		\"name\" : \"Xã Hương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17320,
		\"name\" : \"Xã Kỳ Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17323,
		\"name\" : \"Xã Phú Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17325,
		\"name\" : \"Xã Tân Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17326,
		\"name\" : \"Xã Nghĩa Hành\",
		\"type\" : \"Xã\",
		\"maqh\" : 423
	},
	{
		\"xaid\" : 17329,
		\"name\" : \"Thị trấn Anh Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17332,
		\"name\" : \"Xã Thọ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17335,
		\"name\" : \"Xã Thành Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17338,
		\"name\" : \"Xã Bình Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17341,
		\"name\" : \"Xã Tam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17344,
		\"name\" : \"Xã Đỉnh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17347,
		\"name\" : \"Xã Hùng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17350,
		\"name\" : \"Xã Cẩm Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17353,
		\"name\" : \"Xã Đức Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17356,
		\"name\" : \"Xã Tường Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17357,
		\"name\" : \"Xã Hoa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17359,
		\"name\" : \"Xã Tào Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17362,
		\"name\" : \"Xã Vĩnh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17365,
		\"name\" : \"Xã Lạng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17368,
		\"name\" : \"Xã Hội Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17371,
		\"name\" : \"Xã Thạch Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17374,
		\"name\" : \"Xã Phúc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17377,
		\"name\" : \"Xã Long Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17380,
		\"name\" : \"Xã Khai Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17383,
		\"name\" : \"Xã Lĩnh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17386,
		\"name\" : \"Xã Cao Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 424
	},
	{
		\"xaid\" : 17389,
		\"name\" : \"Thị trấn Diễn Châu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17392,
		\"name\" : \"Xã Diễn Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17395,
		\"name\" : \"Xã Diễn Đoài\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17398,
		\"name\" : \"Xã Diễn Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17401,
		\"name\" : \"Xã Diễn Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17404,
		\"name\" : \"Xã Diễn Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17407,
		\"name\" : \"Xã Diễn Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17410,
		\"name\" : \"Xã Diễn Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17413,
		\"name\" : \"Xã Diễn Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17416,
		\"name\" : \"Xã Diễn Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17419,
		\"name\" : \"Xã Diễn Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17422,
		\"name\" : \"Xã Diễn Tháp\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17425,
		\"name\" : \"Xã Diễn Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17428,
		\"name\" : \"Xã Diễn Vạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17431,
		\"name\" : \"Xã Diễn Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17434,
		\"name\" : \"Xã Diễn Kỷ\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17437,
		\"name\" : \"Xã Diễn Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17440,
		\"name\" : \"Xã Diễn Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17443,
		\"name\" : \"Xã Diễn Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17446,
		\"name\" : \"Xã Diễn Bích\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17449,
		\"name\" : \"Xã Diễn Hạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17452,
		\"name\" : \"Xã Diễn Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17455,
		\"name\" : \"Xã Diễn Quảng\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17458,
		\"name\" : \"Xã Diễn Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17461,
		\"name\" : \"Xã Diễn Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17464,
		\"name\" : \"Xã Diễn Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17467,
		\"name\" : \"Xã Diễn Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17470,
		\"name\" : \"Xã Diễn Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17473,
		\"name\" : \"Xã Diễn Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17476,
		\"name\" : \"Xã Diễn Cát\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17479,
		\"name\" : \"Xã Diễn Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17482,
		\"name\" : \"Xã Diễn Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17485,
		\"name\" : \"Xã Diễn Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17488,
		\"name\" : \"Xã Diễn Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17491,
		\"name\" : \"Xã Diễn Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17494,
		\"name\" : \"Xã Diễn Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17497,
		\"name\" : \"Xã Diễn Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17500,
		\"name\" : \"Xã Diễn An\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17503,
		\"name\" : \"Xã Diễn Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 425
	},
	{
		\"xaid\" : 17506,
		\"name\" : \"Thị trấn Yên Thành\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17509,
		\"name\" : \"Xã Mã Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17510,
		\"name\" : \"Xã Tiến Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17512,
		\"name\" : \"Xã Lăng Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17515,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17518,
		\"name\" : \"Xã Đức Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17521,
		\"name\" : \"Xã Kim Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17524,
		\"name\" : \"Xã Hậu Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17525,
		\"name\" : \"Xã Hùng Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17527,
		\"name\" : \"Xã Đô Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17530,
		\"name\" : \"Xã Thọ Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17533,
		\"name\" : \"Xã Quang Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17536,
		\"name\" : \"Xã Tây Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17539,
		\"name\" : \"Xã Phúc Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17542,
		\"name\" : \"Xã Hồng Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17545,
		\"name\" : \"Xã Đồng Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17548,
		\"name\" : \"Xã Phú Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17551,
		\"name\" : \"Xã Hoa Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17554,
		\"name\" : \"Xã Tăng Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17557,
		\"name\" : \"Xã Văn Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17560,
		\"name\" : \"Xã Thịnh Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17563,
		\"name\" : \"Xã Hợp Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17566,
		\"name\" : \"Xã Xuân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17569,
		\"name\" : \"Xã Bắc Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17572,
		\"name\" : \"Xã Nhân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17575,
		\"name\" : \"Xã Trung Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17578,
		\"name\" : \"Xã Long Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17581,
		\"name\" : \"Xã Minh Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17584,
		\"name\" : \"Xã Nam Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17587,
		\"name\" : \"Xã Vĩnh Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17590,
		\"name\" : \"Xã Lý Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17593,
		\"name\" : \"Xã Khánh Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17596,
		\"name\" : \"Xã Viên Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17599,
		\"name\" : \"Xã Đại Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17602,
		\"name\" : \"Xã Liên Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17605,
		\"name\" : \"Xã Bảo Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17608,
		\"name\" : \"Xã Mỹ Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17611,
		\"name\" : \"Xã Công Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17614,
		\"name\" : \"Xã Sơn Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 426
	},
	{
		\"xaid\" : 17617,
		\"name\" : \"Thị trấn Đô Lương\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17619,
		\"name\" : \"Xã Giang Sơn Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17620,
		\"name\" : \"Xã Giang Sơn Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17623,
		\"name\" : \"Xã Lam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17626,
		\"name\" : \"Xã Bồi Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17629,
		\"name\" : \"Xã Hồng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17632,
		\"name\" : \"Xã Bài Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17635,
		\"name\" : \"Xã Ngọc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17638,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17641,
		\"name\" : \"Xã Tràng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17644,
		\"name\" : \"Xã Thượng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17647,
		\"name\" : \"Xã Hòa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17650,
		\"name\" : \"Xã Đặng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17653,
		\"name\" : \"Xã Đông Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17656,
		\"name\" : \"Xã Nam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17659,
		\"name\" : \"Xã Lưu Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17662,
		\"name\" : \"Xã Yên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17665,
		\"name\" : \"Xã Văn Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17668,
		\"name\" : \"Xã Đà Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17671,
		\"name\" : \"Xã Lạc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17674,
		\"name\" : \"Xã Tân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17677,
		\"name\" : \"Xã Thái Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17680,
		\"name\" : \"Xã Quang Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17683,
		\"name\" : \"Xã Thịnh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17686,
		\"name\" : \"Xã Trung Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17689,
		\"name\" : \"Xã Xuân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17692,
		\"name\" : \"Xã Minh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17695,
		\"name\" : \"Xã Thuận Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17698,
		\"name\" : \"Xã Nhân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17701,
		\"name\" : \"Xã Hiến Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17704,
		\"name\" : \"Xã Mỹ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17707,
		\"name\" : \"Xã Trù Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17710,
		\"name\" : \"Xã Đại Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 427
	},
	{
		\"xaid\" : 17713,
		\"name\" : \"Thị trấn Thanh Chương\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17716,
		\"name\" : \"Xã Cát Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17719,
		\"name\" : \"Xã Thanh Nho\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17722,
		\"name\" : \"Xã Hạnh Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17723,
		\"name\" : \"Xã Thanh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17725,
		\"name\" : \"Xã Thanh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17728,
		\"name\" : \"Xã Phong Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17731,
		\"name\" : \"Xã Thanh Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17734,
		\"name\" : \"Xã Thanh Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17737,
		\"name\" : \"Xã Thanh Tiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17740,
		\"name\" : \"Xã Thanh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17743,
		\"name\" : \"Xã Thanh Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17746,
		\"name\" : \"Xã Thanh Tường\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17749,
		\"name\" : \"Xã Thanh Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17752,
		\"name\" : \"Xã Thanh Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17755,
		\"name\" : \"Xã Thanh Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17758,
		\"name\" : \"Xã Thanh Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17759,
		\"name\" : \"Xã Ngọc Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17761,
		\"name\" : \"Xã Thanh Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17764,
		\"name\" : \"Xã Đồng Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17767,
		\"name\" : \"Xã Ngọc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17770,
		\"name\" : \"Xã Thanh Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17773,
		\"name\" : \"Xã Thanh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17776,
		\"name\" : \"Xã Thanh Chi\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17779,
		\"name\" : \"Xã Xuân Tường\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17782,
		\"name\" : \"Xã Thanh Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17785,
		\"name\" : \"Xã Thanh Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17788,
		\"name\" : \"Xã Thanh Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17791,
		\"name\" : \"Xã Võ Liệt\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17794,
		\"name\" : \"Xã Thanh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17797,
		\"name\" : \"Xã Thanh Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17800,
		\"name\" : \"Xã Thanh Khai\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17803,
		\"name\" : \"Xã Thanh Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17806,
		\"name\" : \"Xã Thanh Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17809,
		\"name\" : \"Xã Thanh Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17812,
		\"name\" : \"Xã Thanh Tùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17815,
		\"name\" : \"Xã Thanh Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17818,
		\"name\" : \"Xã Thanh Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17821,
		\"name\" : \"Xã Thanh Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17824,
		\"name\" : \"Xã Thanh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 428
	},
	{
		\"xaid\" : 17827,
		\"name\" : \"Thị trấn Quán Hành\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17830,
		\"name\" : \"Xã Nghi Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17833,
		\"name\" : \"Xã Nghi Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17836,
		\"name\" : \"Xã Nghi Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17839,
		\"name\" : \"Xã Nghi Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17842,
		\"name\" : \"Xã Nghi Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17845,
		\"name\" : \"Xã Nghi Thiết\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17848,
		\"name\" : \"Xã Nghi Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17851,
		\"name\" : \"Xã Nghi Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17854,
		\"name\" : \"Xã Nghi Kiều\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17857,
		\"name\" : \"Xã Nghi Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17860,
		\"name\" : \"Xã Nghi Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17863,
		\"name\" : \"Xã Nghi Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17866,
		\"name\" : \"Xã Nghi Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17869,
		\"name\" : \"Xã Nghi Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17872,
		\"name\" : \"Xã Nghi Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17875,
		\"name\" : \"Xã Nghi Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17878,
		\"name\" : \"Xã Nghi Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17881,
		\"name\" : \"Xã Nghi Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17884,
		\"name\" : \"Xã Nghi Công Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17887,
		\"name\" : \"Xã Nghi Công Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17890,
		\"name\" : \"Xã Nghi Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17893,
		\"name\" : \"Xã Nghi Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17896,
		\"name\" : \"Xã Nghi Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17899,
		\"name\" : \"Xã Nghi Diên\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17902,
		\"name\" : \"Xã Nghi Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17905,
		\"name\" : \"Xã Nghi Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17908,
		\"name\" : \"Xã Nghi Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 17911,
		\"name\" : \"Xã Nghi Vạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17914,
		\"name\" : \"Xã Nghi Ân\",
		\"type\" : \"Xã\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 17917,
		\"name\" : \"Xã Phúc Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17920,
		\"name\" : \"Xã Nghi Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 17923,
		\"name\" : \"Xã Nghi Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 17926,
		\"name\" : \"Xã Nghi Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 429
	},
	{
		\"xaid\" : 17929,
		\"name\" : \"Thị trấn Nam Đàn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17932,
		\"name\" : \"Xã Nam Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17935,
		\"name\" : \"Xã Nam Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17938,
		\"name\" : \"Xã Nam Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17941,
		\"name\" : \"Xã Nam Anh\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17944,
		\"name\" : \"Xã Nam Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17947,
		\"name\" : \"Xã Nam Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17950,
		\"name\" : \"Xã Vân Diên\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17953,
		\"name\" : \"Xã Nam Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17956,
		\"name\" : \"Xã Nam Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17959,
		\"name\" : \"Xã Xuân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17962,
		\"name\" : \"Xã Hùng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17965,
		\"name\" : \"Xã Nam Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17968,
		\"name\" : \"Xã Nam Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17971,
		\"name\" : \"Xã Kim Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17974,
		\"name\" : \"Xã Nam Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17977,
		\"name\" : \"Xã Hồng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17980,
		\"name\" : \"Xã Xuân Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17983,
		\"name\" : \"Xã Nam Cát\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17986,
		\"name\" : \"Xã Khánh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17989,
		\"name\" : \"Xã Nam Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17992,
		\"name\" : \"Xã Nam Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17995,
		\"name\" : \"Xã Nam Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 17998,
		\"name\" : \"Xã Nam Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 430
	},
	{
		\"xaid\" : 18001,
		\"name\" : \"Thị trấn Hưng Nguyên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18004,
		\"name\" : \"Xã Hưng Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18007,
		\"name\" : \"Xã Hưng Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18008,
		\"name\" : \"Xã Hưng Yên Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18010,
		\"name\" : \"Xã Hưng Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18013,
		\"name\" : \"Xã Hưng Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 412
	},
	{
		\"xaid\" : 18016,
		\"name\" : \"Xã Hưng Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18019,
		\"name\" : \"Xã Hưng Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18022,
		\"name\" : \"Xã Hưng Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18025,
		\"name\" : \"Xã Hưng Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18028,
		\"name\" : \"Xã Hưng Thông\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18031,
		\"name\" : \"Xã Hưng Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18034,
		\"name\" : \"Xã Hưng Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18037,
		\"name\" : \"Xã Hưng Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18040,
		\"name\" : \"Xã Hưng Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18043,
		\"name\" : \"Xã Hưng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18046,
		\"name\" : \"Xã Hưng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18049,
		\"name\" : \"Xã Hưng Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18052,
		\"name\" : \"Xã Hưng Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18055,
		\"name\" : \"Xã Hưng Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18058,
		\"name\" : \"Xã Hưng Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18061,
		\"name\" : \"Xã Hưng Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18064,
		\"name\" : \"Xã Hưng Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18067,
		\"name\" : \"Xã Hưng Lam\",
		\"type\" : \"Xã\",
		\"maqh\" : 431
	},
	{
		\"xaid\" : 18070,
		\"name\" : \"Phường Trần Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18073,
		\"name\" : \"Phường Nam Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18076,
		\"name\" : \"Phường Bắc Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18077,
		\"name\" : \"Phường Nguyễn Du\",
		\"type\" : \"Phường\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18079,
		\"name\" : \"Phường Tân Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18082,
		\"name\" : \"Phường Đại Nài\",
		\"type\" : \"Phường\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18085,
		\"name\" : \"Phường Hà Huy Tập\",
		\"type\" : \"Phường\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18088,
		\"name\" : \"Xã Thạch Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18091,
		\"name\" : \"Phường Thạch Quý\",
		\"type\" : \"Phường\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18094,
		\"name\" : \"Phường Thạch Linh\",
		\"type\" : \"Phường\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18097,
		\"name\" : \"Phường Văn Yên\",
		\"type\" : \"Phường\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18100,
		\"name\" : \"Xã Thạch Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18103,
		\"name\" : \"Xã Thạch Môn\",
		\"type\" : \"Xã\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18106,
		\"name\" : \"Xã Thạch Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18109,
		\"name\" : \"Xã Thạch Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18112,
		\"name\" : \"Xã Thạch Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 436
	},
	{
		\"xaid\" : 18115,
		\"name\" : \"Phường Bắc Hồng\",
		\"type\" : \"Phường\",
		\"maqh\" : 437
	},
	{
		\"xaid\" : 18118,
		\"name\" : \"Phường Nam Hồng\",
		\"type\" : \"Phường\",
		\"maqh\" : 437
	},
	{
		\"xaid\" : 18121,
		\"name\" : \"Phường Trung Lương\",
		\"type\" : \"Phường\",
		\"maqh\" : 437
	},
	{
		\"xaid\" : 18124,
		\"name\" : \"Phường Đức Thuận\",
		\"type\" : \"Phường\",
		\"maqh\" : 437
	},
	{
		\"xaid\" : 18127,
		\"name\" : \"Phường Đậu Liêu\",
		\"type\" : \"Phường\",
		\"maqh\" : 437
	},
	{
		\"xaid\" : 18130,
		\"name\" : \"Xã Thuận Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 437
	},
	{
		\"xaid\" : 18133,
		\"name\" : \"Thị trấn Phố Châu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18136,
		\"name\" : \"Thị trấn  Tây Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18139,
		\"name\" : \"Xã Sơn Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18142,
		\"name\" : \"Xã Sơn Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18145,
		\"name\" : \"Xã Sơn Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18148,
		\"name\" : \"Xã Sơn Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18151,
		\"name\" : \"Xã Sơn Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18154,
		\"name\" : \"Xã Sơn An\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18157,
		\"name\" : \"Xã Sơn Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18160,
		\"name\" : \"Xã Sơn Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18163,
		\"name\" : \"Xã Sơn Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18166,
		\"name\" : \"Xã Sơn Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18169,
		\"name\" : \"Xã Sơn Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18172,
		\"name\" : \"Xã Sơn Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18175,
		\"name\" : \"Xã Sơn Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18178,
		\"name\" : \"Xã Sơn Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18181,
		\"name\" : \"Xã Sơn Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18184,
		\"name\" : \"Xã Sơn Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18187,
		\"name\" : \"Xã Sơn Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18190,
		\"name\" : \"Xã Sơn Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18193,
		\"name\" : \"Xã Sơn Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18196,
		\"name\" : \"Xã Sơn Kim 1\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18199,
		\"name\" : \"Xã Sơn Kim 2\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18202,
		\"name\" : \"Xã Sơn Trà\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18205,
		\"name\" : \"Xã Sơn Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18208,
		\"name\" : \"Xã Sơn Diệm\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18211,
		\"name\" : \"Xã Sơn Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18214,
		\"name\" : \"Xã Sơn Hàm\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18217,
		\"name\" : \"Xã Sơn Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18220,
		\"name\" : \"Xã Sơn Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18223,
		\"name\" : \"Xã Sơn Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18226,
		\"name\" : \"Xã Sơn Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 439
	},
	{
		\"xaid\" : 18229,
		\"name\" : \"Thị trấn Đức Thọ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18232,
		\"name\" : \"Xã Đức Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18235,
		\"name\" : \"Xã Đức Vĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18238,
		\"name\" : \"Xã Đức Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18241,
		\"name\" : \"Xã Đức Tùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18244,
		\"name\" : \"Xã Trường Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18247,
		\"name\" : \"Xã Liên Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18250,
		\"name\" : \"Xã Đức La\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18253,
		\"name\" : \"Xã Yên Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18256,
		\"name\" : \"Xã Đức Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18259,
		\"name\" : \"Xã Tùng Ảnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18262,
		\"name\" : \"Xã Bùi Xá\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18265,
		\"name\" : \"Xã Đức Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18268,
		\"name\" : \"Xã Đức Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18271,
		\"name\" : \"Xã Đức Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18274,
		\"name\" : \"Xã Thái Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18277,
		\"name\" : \"Xã Trung Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18280,
		\"name\" : \"Xã Đức Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18283,
		\"name\" : \"Xã Đức Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18286,
		\"name\" : \"Xã Đức Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18289,
		\"name\" : \"Xã Đức Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18292,
		\"name\" : \"Xã Đức Dũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18295,
		\"name\" : \"Xã Đức Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18298,
		\"name\" : \"Xã Đức An\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18301,
		\"name\" : \"Xã Đức Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18304,
		\"name\" : \"Xã Đức Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18307,
		\"name\" : \"Xã Đức Lạng\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18310,
		\"name\" : \"Xã Tân Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 440
	},
	{
		\"xaid\" : 18313,
		\"name\" : \"Thị trấn Vũ Quang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 441
	},
	{
		\"xaid\" : 18316,
		\"name\" : \"Xã Ân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 441
	},
	{
		\"xaid\" : 18319,
		\"name\" : \"Xã Đức Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 441
	},
	{
		\"xaid\" : 18322,
		\"name\" : \"Xã Đức Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 441
	},
	{
		\"xaid\" : 18325,
		\"name\" : \"Xã Sơn Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 441
	},
	{
		\"xaid\" : 18328,
		\"name\" : \"Xã Đức Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 441
	},
	{
		\"xaid\" : 18331,
		\"name\" : \"Xã Đức Bồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 441
	},
	{
		\"xaid\" : 18334,
		\"name\" : \"Xã Đức Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 441
	},
	{
		\"xaid\" : 18337,
		\"name\" : \"Xã Hương Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 441
	},
	{
		\"xaid\" : 18340,
		\"name\" : \"Xã Hương Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 441
	},
	{
		\"xaid\" : 18343,
		\"name\" : \"Xã Hương Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 441
	},
	{
		\"xaid\" : 18346,
		\"name\" : \"Xã Hương Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 441
	},
	{
		\"xaid\" : 18349,
		\"name\" : \"Thị trấn Nghi Xuân\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18352,
		\"name\" : \"Thị trấn Xuân An\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18355,
		\"name\" : \"Xã Xuân Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18358,
		\"name\" : \"Xã Xuân Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18361,
		\"name\" : \"Xã Xuân Đan\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18364,
		\"name\" : \"Xã Xuân Phổ\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18367,
		\"name\" : \"Xã Xuân Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18370,
		\"name\" : \"Xã Xuân Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18373,
		\"name\" : \"Xã Tiên Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18376,
		\"name\" : \"Xã Xuân Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18379,
		\"name\" : \"Xã Xuân Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18382,
		\"name\" : \"Xã Xuân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18385,
		\"name\" : \"Xã Xuân Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18388,
		\"name\" : \"Xã Xuân Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18391,
		\"name\" : \"Xã Cỗ Đạm\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18394,
		\"name\" : \"Xã Xuân Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18397,
		\"name\" : \"Xã Xuân Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18400,
		\"name\" : \"Xã Xuân Lam\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18403,
		\"name\" : \"Xã Cương Gián\",
		\"type\" : \"Xã\",
		\"maqh\" : 442
	},
	{
		\"xaid\" : 18406,
		\"name\" : \"Thị trấn Nghèn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18409,
		\"name\" : \"Xã Tân Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18412,
		\"name\" : \"Xã Hồng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18415,
		\"name\" : \"Xã Thiên Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18418,
		\"name\" : \"Xã Thuần Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18421,
		\"name\" : \"Xã Thịnh Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18424,
		\"name\" : \"Xã Kim Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18427,
		\"name\" : \"Xã Vượng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18430,
		\"name\" : \"Xã An Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18433,
		\"name\" : \"Xã Thanh Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18436,
		\"name\" : \"Xã Song Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18439,
		\"name\" : \"Xã Thường Nga\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18442,
		\"name\" : \"Xã Trường Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18445,
		\"name\" : \"Xã Tùng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18448,
		\"name\" : \"Xã Bình Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18451,
		\"name\" : \"Xã Yên Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18454,
		\"name\" : \"Xã Phú Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18457,
		\"name\" : \"Xã Ích Hậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18460,
		\"name\" : \"Xã Khánh Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18463,
		\"name\" : \"Xã Gia Hanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18466,
		\"name\" : \"Xã Vĩnh Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18469,
		\"name\" : \"Xã Tiến Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18472,
		\"name\" : \"Xã Trung Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18475,
		\"name\" : \"Xã Xuân Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18478,
		\"name\" : \"Xã Thượng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18481,
		\"name\" : \"Xã Quang Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18484,
		\"name\" : \"Xã Đồng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18487,
		\"name\" : \"Xã Mỹ Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18490,
		\"name\" : \"Xã Sơn Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 443
	},
	{
		\"xaid\" : 18493,
		\"name\" : \"Xã Phù Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18496,
		\"name\" : \"Thị trấn Hương Khê\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18499,
		\"name\" : \"Xã Phương Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18502,
		\"name\" : \"Xã Hà Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18505,
		\"name\" : \"Xã Hương Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18508,
		\"name\" : \"Xã Hòa Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18511,
		\"name\" : \"Xã Phương Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18514,
		\"name\" : \"Xã Phúc Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18517,
		\"name\" : \"Xã Hương Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18520,
		\"name\" : \"Xã Lộc Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18523,
		\"name\" : \"Xã Hương Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18526,
		\"name\" : \"Xã Hương Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18529,
		\"name\" : \"Xã Phú Gia\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18532,
		\"name\" : \"Xã Gia Phố\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18535,
		\"name\" : \"Xã Phú Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18538,
		\"name\" : \"Xã Hương Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18541,
		\"name\" : \"Xã Hương Vĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18544,
		\"name\" : \"Xã Hương Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18547,
		\"name\" : \"Xã Phúc Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18550,
		\"name\" : \"Xã Hương Trà\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18553,
		\"name\" : \"Xã Hương Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18556,
		\"name\" : \"Xã Hương Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18559,
		\"name\" : \"Xã Hương Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 444
	},
	{
		\"xaid\" : 18562,
		\"name\" : \"Thị trấn Thạch Hà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18565,
		\"name\" : \"Xã Ngọc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18568,
		\"name\" : \"Xã Thạch Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18571,
		\"name\" : \"Xã Thạch Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18574,
		\"name\" : \"Xã Thạch Bàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18577,
		\"name\" : \"Xã Thạch Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18580,
		\"name\" : \"Xã Thạch Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18583,
		\"name\" : \"Xã Thạch Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18586,
		\"name\" : \"Xã Thạch Kênh\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18589,
		\"name\" : \"Xã Thạch Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18592,
		\"name\" : \"Xã Thạch Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18595,
		\"name\" : \"Xã Thạch Đỉnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18598,
		\"name\" : \"Xã Hộ Độ\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18601,
		\"name\" : \"Xã Phù Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18604,
		\"name\" : \"Xã Thạch Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18607,
		\"name\" : \"Xã Thạch Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18610,
		\"name\" : \"Xã Việt Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18613,
		\"name\" : \"Xã Thạch Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18616,
		\"name\" : \"Xã Thạch Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18619,
		\"name\" : \"Xã Thạch Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18622,
		\"name\" : \"Xã Thạch Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18625,
		\"name\" : \"Xã Thạch Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18628,
		\"name\" : \"Xã Tượng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18631,
		\"name\" : \"Xã Thạch Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18634,
		\"name\" : \"Xã Thạch Vĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18637,
		\"name\" : \"Xã Thạch Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18640,
		\"name\" : \"Xã Thạch Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18643,
		\"name\" : \"Xã Thạch Đài\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18646,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18649,
		\"name\" : \"Xã Thạch Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18652,
		\"name\" : \"Xã Thạch Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18655,
		\"name\" : \"Xã Thạch Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18658,
		\"name\" : \"Xã Thạch Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18661,
		\"name\" : \"Xã Thạch Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18664,
		\"name\" : \"Xã Nam Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18667,
		\"name\" : \"Xã Thạch Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 445
	},
	{
		\"xaid\" : 18670,
		\"name\" : \"Xã Mai Phụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 448
	},
	{
		\"xaid\" : 18673,
		\"name\" : \"Thị trấn Cẩm Xuyên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18676,
		\"name\" : \"Thị trấn Thiên Cầm\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18679,
		\"name\" : \"Xã Cẩm Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18682,
		\"name\" : \"Xã Cẩm Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18685,
		\"name\" : \"Xã Cẩm Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18688,
		\"name\" : \"Xã Cẩm Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18691,
		\"name\" : \"Xã Cẩm Vĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18694,
		\"name\" : \"Xã Cẩm Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18697,
		\"name\" : \"Xã Cẩm Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18700,
		\"name\" : \"Xã Cẩm Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18703,
		\"name\" : \"Xã Cẩm Huy\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18706,
		\"name\" : \"Xã Cẩm Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18709,
		\"name\" : \"Xã Cẩm Nhượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18712,
		\"name\" : \"Xã Cẩm Thăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18715,
		\"name\" : \"Xã Cẩm Duệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18718,
		\"name\" : \"Xã Cẩm Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18721,
		\"name\" : \"Xã Cẩm Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18724,
		\"name\" : \"Xã Cẩm Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18727,
		\"name\" : \"Xã Cẩm Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18730,
		\"name\" : \"Xã Cẩm Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18733,
		\"name\" : \"Xã Cẩm Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18736,
		\"name\" : \"Xã Cẩm Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18739,
		\"name\" : \"Xã Cẩm Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18742,
		\"name\" : \"Xã Cẩm Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18745,
		\"name\" : \"Xã Cẩm Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18748,
		\"name\" : \"Xã Cẩm Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18751,
		\"name\" : \"Xã Cẩm Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 446
	},
	{
		\"xaid\" : 18754,
		\"name\" : \"Phường Sông Trí\",
		\"type\" : \"Phường\",
		\"maqh\" : 449
	},
	{
		\"xaid\" : 18757,
		\"name\" : \"Xã Kỳ Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18760,
		\"name\" : \"Xã Kỳ Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18763,
		\"name\" : \"Xã Kỳ Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18766,
		\"name\" : \"Xã Kỳ Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18769,
		\"name\" : \"Xã Kỳ Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18772,
		\"name\" : \"Xã Kỳ Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18775,
		\"name\" : \"Xã Kỳ Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18778,
		\"name\" : \"Xã Kỳ Khang\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18781,
		\"name\" : \"Xã Kỳ Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 449
	},
	{
		\"xaid\" : 18784,
		\"name\" : \"Xã Kỳ Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18787,
		\"name\" : \"Xã Kỳ Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18790,
		\"name\" : \"Xã Kỳ Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18793,
		\"name\" : \"Xã Kỳ Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18796,
		\"name\" : \"Xã Kỳ Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 449
	},
	{
		\"xaid\" : 18799,
		\"name\" : \"Xã Kỳ Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18802,
		\"name\" : \"Xã Kỳ Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18805,
		\"name\" : \"Xã Kỳ Thư\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18808,
		\"name\" : \"Xã Kỳ Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 449
	},
	{
		\"xaid\" : 18811,
		\"name\" : \"Xã Kỳ Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18814,
		\"name\" : \"Xã Kỳ Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18817,
		\"name\" : \"Xã Kỳ Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 449
	},
	{
		\"xaid\" : 18820,
		\"name\" : \"Phường Kỳ Trinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 449
	},
	{
		\"xaid\" : 18823,
		\"name\" : \"Phường Kỳ Thịnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 449
	},
	{
		\"xaid\" : 18826,
		\"name\" : \"Xã Kỳ Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18829,
		\"name\" : \"Xã Kỳ Hoa\",
		\"type\" : \"Xã\",
		\"maqh\" : 449
	},
	{
		\"xaid\" : 18832,
		\"name\" : \"Phường Kỳ Phương\",
		\"type\" : \"Phường\",
		\"maqh\" : 449
	},
	{
		\"xaid\" : 18835,
		\"name\" : \"Phường Kỳ Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 449
	},
	{
		\"xaid\" : 18838,
		\"name\" : \"Xã Kỳ Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18841,
		\"name\" : \"Phường Kỳ Liên\",
		\"type\" : \"Phường\",
		\"maqh\" : 449
	},
	{
		\"xaid\" : 18844,
		\"name\" : \"Xã Kỳ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18847,
		\"name\" : \"Xã Kỳ Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 449
	},
	{
		\"xaid\" : 18850,
		\"name\" : \"Xã Kỳ Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 447
	},
	{
		\"xaid\" : 18853,
		\"name\" : \"Phường Hải Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18856,
		\"name\" : \"Phường Đồng Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18859,
		\"name\" : \"Phường Bắc Lý\",
		\"type\" : \"Phường\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18862,
		\"name\" : \"Phường Đồng Mỹ\",
		\"type\" : \"Phường\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18865,
		\"name\" : \"Phường Nam Lý\",
		\"type\" : \"Phường\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18868,
		\"name\" : \"Phường Hải Đình\",
		\"type\" : \"Phường\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18871,
		\"name\" : \"Phường Đồng Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18874,
		\"name\" : \"Phường Phú Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18877,
		\"name\" : \"Phường Bắc Nghĩa\",
		\"type\" : \"Phường\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18880,
		\"name\" : \"Phường Đức Ninh Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18883,
		\"name\" : \"Xã Quang Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18886,
		\"name\" : \"Xã Lộc Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18889,
		\"name\" : \"Xã Bảo Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18892,
		\"name\" : \"Xã Nghĩa Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18895,
		\"name\" : \"Xã Thuận Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18898,
		\"name\" : \"Xã Đức Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 450
	},
	{
		\"xaid\" : 18901,
		\"name\" : \"Thị trấn Quy Đạt\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18904,
		\"name\" : \"Xã Dân Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18907,
		\"name\" : \"Xã Trọng Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18910,
		\"name\" : \"Xã Hóa Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18913,
		\"name\" : \"Xã Hồng Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18916,
		\"name\" : \"Xã Hóa Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18919,
		\"name\" : \"Xã Hóa Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18922,
		\"name\" : \"Xã Hóa Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18925,
		\"name\" : \"Xã Xuân Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18928,
		\"name\" : \"Xã Yên Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18931,
		\"name\" : \"Xã Minh Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18934,
		\"name\" : \"Xã Tân Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18937,
		\"name\" : \"Xã Hóa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18940,
		\"name\" : \"Xã Quy Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18943,
		\"name\" : \"Xã Trung Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18946,
		\"name\" : \"Xã Thượng Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 452
	},
	{
		\"xaid\" : 18949,
		\"name\" : \"Thị trấn Đồng Lê\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18952,
		\"name\" : \"Xã Hương Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18955,
		\"name\" : \"Xã Kim Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18958,
		\"name\" : \"Xã Thanh Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18961,
		\"name\" : \"Xã Thanh Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18964,
		\"name\" : \"Xã Thuận Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18967,
		\"name\" : \"Xã Lâm Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18970,
		\"name\" : \"Xã Lê Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18973,
		\"name\" : \"Xã Sơn Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18976,
		\"name\" : \"Xã Đồng Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18979,
		\"name\" : \"Xã Ngư Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18982,
		\"name\" : \"Xã Nam Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18985,
		\"name\" : \"Xã Thạch Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18988,
		\"name\" : \"Xã Đức Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18991,
		\"name\" : \"Xã Phong Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18994,
		\"name\" : \"Xã Mai Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 18997,
		\"name\" : \"Xã Tiến Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 19000,
		\"name\" : \"Xã Châu Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 19003,
		\"name\" : \"Xã Cao Quảng\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 19006,
		\"name\" : \"Xã Văn Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 453
	},
	{
		\"xaid\" : 19009,
		\"name\" : \"Phường Ba Đồn\",
		\"type\" : \"Phường\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19012,
		\"name\" : \"Xã Quảng Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19015,
		\"name\" : \"Xã Quảng Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19018,
		\"name\" : \"Xã Quảng Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19021,
		\"name\" : \"Xã Quảng Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19024,
		\"name\" : \"Xã Quảng Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19027,
		\"name\" : \"Xã Quảng Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19030,
		\"name\" : \"Xã Quảng Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19033,
		\"name\" : \"Xã Quảng Tùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19036,
		\"name\" : \"Xã Cảnh Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19039,
		\"name\" : \"Xã Quảng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19042,
		\"name\" : \"Xã Quảng Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19045,
		\"name\" : \"Xã Quảng Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19048,
		\"name\" : \"Xã Cảnh Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19051,
		\"name\" : \"Xã Quảng Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19054,
		\"name\" : \"Xã Quảng Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19057,
		\"name\" : \"Xã Quảng Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19060,
		\"name\" : \"Phường Quảng Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19063,
		\"name\" : \"Xã Phù Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19066,
		\"name\" : \"Phường Quảng Thọ\",
		\"type\" : \"Phường\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19069,
		\"name\" : \"Xã Quảng Tiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19072,
		\"name\" : \"Xã Quảng Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 454
	},
	{
		\"xaid\" : 19075,
		\"name\" : \"Xã Quảng Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19078,
		\"name\" : \"Phường Quảng Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19081,
		\"name\" : \"Phường Quảng Thuận\",
		\"type\" : \"Phường\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19084,
		\"name\" : \"Xã Quảng Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19087,
		\"name\" : \"Xã Quảng Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19090,
		\"name\" : \"Xã Quảng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19093,
		\"name\" : \"Xã Quảng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19096,
		\"name\" : \"Xã Quảng Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19099,
		\"name\" : \"Xã Quảng Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19102,
		\"name\" : \"Phường Quảng Phúc\",
		\"type\" : \"Phường\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19105,
		\"name\" : \"Xã Quảng Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19108,
		\"name\" : \"Xã Quảng Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 458
	},
	{
		\"xaid\" : 19111,
		\"name\" : \"Thị trấn Hoàn Lão\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19114,
		\"name\" : \"Thị trấn NT Việt Trung\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19117,
		\"name\" : \"Xã Xuân Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19120,
		\"name\" : \"Xã Mỹ Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19123,
		\"name\" : \"Xã Hạ Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19126,
		\"name\" : \"Xã Bắc Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19129,
		\"name\" : \"Xã Lâm Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19132,
		\"name\" : \"Xã Thanh Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19135,
		\"name\" : \"Xã Liên Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19138,
		\"name\" : \"Xã Phúc Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19141,
		\"name\" : \"Xã Cự Nẫm\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19144,
		\"name\" : \"Xã Hải Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19147,
		\"name\" : \"Xã Thượng Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19150,
		\"name\" : \"Xã Sơn Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19153,
		\"name\" : \"Xã Phú Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19156,
		\"name\" : \"Xã Hưng Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19159,
		\"name\" : \"Xã Đồng Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19162,
		\"name\" : \"Xã Đức Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19165,
		\"name\" : \"Xã Sơn Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19168,
		\"name\" : \"Xã Vạn Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19171,
		\"name\" : \"Xã Hoàn Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19174,
		\"name\" : \"Xã Phú Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19177,
		\"name\" : \"Xã Trung Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19180,
		\"name\" : \"Xã Tây Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19183,
		\"name\" : \"Xã Hòa Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19186,
		\"name\" : \"Xã Đại Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19189,
		\"name\" : \"Xã Nhân Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19192,
		\"name\" : \"Xã Tân Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19195,
		\"name\" : \"Xã Nam Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19198,
		\"name\" : \"Xã Lý Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 455
	},
	{
		\"xaid\" : 19201,
		\"name\" : \"Thị trấn Quán Hàu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19204,
		\"name\" : \"Xã Trường Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19207,
		\"name\" : \"Xã Lương Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19210,
		\"name\" : \"Xã Vĩnh Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19213,
		\"name\" : \"Xã Võ Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19216,
		\"name\" : \"Xã Hải Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19219,
		\"name\" : \"Xã Hàm Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19222,
		\"name\" : \"Xã Duy Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19225,
		\"name\" : \"Xã Gia Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19228,
		\"name\" : \"Xã Trường Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19231,
		\"name\" : \"Xã Hiền Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19234,
		\"name\" : \"Xã Tân Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19237,
		\"name\" : \"Xã Xuân Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19240,
		\"name\" : \"Xã An Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19243,
		\"name\" : \"Xã Vạn Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 456
	},
	{
		\"xaid\" : 19246,
		\"name\" : \"Thị trấn NT Lệ Ninh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19249,
		\"name\" : \"Thị trấn Kiến Giang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19252,
		\"name\" : \"Xã Hồng Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19255,
		\"name\" : \"Xã Ngư Thủy Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19258,
		\"name\" : \"Xã Hoa Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19261,
		\"name\" : \"Xã Thanh Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19264,
		\"name\" : \"Xã An Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19267,
		\"name\" : \"Xã Phong Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19270,
		\"name\" : \"Xã Cam Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19273,
		\"name\" : \"Xã Ngân Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19276,
		\"name\" : \"Xã Sơn Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19279,
		\"name\" : \"Xã Lộc Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19282,
		\"name\" : \"Xã Ngư Thủy Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19285,
		\"name\" : \"Xã Liên Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19288,
		\"name\" : \"Xã Hưng Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19291,
		\"name\" : \"Xã Dương Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19294,
		\"name\" : \"Xã Tân Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19297,
		\"name\" : \"Xã Phú Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19300,
		\"name\" : \"Xã Xuân Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19303,
		\"name\" : \"Xã Mỹ Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19306,
		\"name\" : \"Xã Ngư Thủy Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19309,
		\"name\" : \"Xã Mai Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19312,
		\"name\" : \"Xã Sen Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19315,
		\"name\" : \"Xã Thái Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19318,
		\"name\" : \"Xã Kim Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19321,
		\"name\" : \"Xã Trường Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19324,
		\"name\" : \"Xã Văn Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19327,
		\"name\" : \"Xã Lâm Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 457
	},
	{
		\"xaid\" : 19330,
		\"name\" : \"Phường Đông Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 461
	},
	{
		\"xaid\" : 19333,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 461
	},
	{
		\"xaid\" : 19336,
		\"name\" : \"Phường Đông Lễ\",
		\"type\" : \"Phường\",
		\"maqh\" : 461
	},
	{
		\"xaid\" : 19339,
		\"name\" : \"Phường Đông Thanh\",
		\"type\" : \"Phường\",
		\"maqh\" : 461
	},
	{
		\"xaid\" : 19342,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 461
	},
	{
		\"xaid\" : 19345,
		\"name\" : \"Phường 4\",
		\"type\" : \"Phường\",
		\"maqh\" : 461
	},
	{
		\"xaid\" : 19348,
		\"name\" : \"Phường 5\",
		\"type\" : \"Phường\",
		\"maqh\" : 461
	},
	{
		\"xaid\" : 19351,
		\"name\" : \"Phường Đông Lương\",
		\"type\" : \"Phường\",
		\"maqh\" : 461
	},
	{
		\"xaid\" : 19354,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 461
	},
	{
		\"xaid\" : 19357,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 462
	},
	{
		\"xaid\" : 19358,
		\"name\" : \"Phường An Đôn\",
		\"type\" : \"Phường\",
		\"maqh\" : 462
	},
	{
		\"xaid\" : 19360,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 462
	},
	{
		\"xaid\" : 19361,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 462
	},
	{
		\"xaid\" : 19363,
		\"name\" : \"Thị trấn Hồ Xá\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19366,
		\"name\" : \"Thị trấn Bến Quan\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19369,
		\"name\" : \"Xã Vĩnh Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19372,
		\"name\" : \"Xã Vĩnh Tú\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19375,
		\"name\" : \"Xã Vĩnh Chấp\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19378,
		\"name\" : \"Xã Vĩnh Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19381,
		\"name\" : \"Xã Vĩnh Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19384,
		\"name\" : \"Xã Vĩnh Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19387,
		\"name\" : \"Xã Vĩnh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19390,
		\"name\" : \"Xã Vĩnh Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19393,
		\"name\" : \"Xã Vĩnh Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19396,
		\"name\" : \"Xã Vĩnh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19399,
		\"name\" : \"Xã Vĩnh Hiền\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19402,
		\"name\" : \"Xã Vĩnh Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19405,
		\"name\" : \"Xã Vĩnh Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19408,
		\"name\" : \"Xã Vĩnh Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19411,
		\"name\" : \"Xã Vĩnh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19414,
		\"name\" : \"Thị trấn Cửa Tùng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19417,
		\"name\" : \"Xã Vĩnh Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19420,
		\"name\" : \"Xã Vĩnh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19423,
		\"name\" : \"Xã Vĩnh Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19426,
		\"name\" : \"Xã Vĩnh Ô\",
		\"type\" : \"Xã\",
		\"maqh\" : 464
	},
	{
		\"xaid\" : 19429,
		\"name\" : \"Thị trấn Khe Sanh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19432,
		\"name\" : \"Thị trấn Lao Bảo\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19435,
		\"name\" : \"Xã Hướng Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19438,
		\"name\" : \"Xã Hướng Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19441,
		\"name\" : \"Xã Hướng Phùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19444,
		\"name\" : \"Xã Hướng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19447,
		\"name\" : \"Xã Hướng Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19450,
		\"name\" : \"Xã Tân Hợp\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19453,
		\"name\" : \"Xã Hướng Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19456,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19459,
		\"name\" : \"Xã Tân Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19462,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19465,
		\"name\" : \"Xã Tân Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19468,
		\"name\" : \"Xã Húc\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19471,
		\"name\" : \"Xã Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19474,
		\"name\" : \"Xã Hướng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19477,
		\"name\" : \"Xã Ba Tầng\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19480,
		\"name\" : \"Xã Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19483,
		\"name\" : \"Xã  A Dơi\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19486,
		\"name\" : \"Xã A Xing\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19489,
		\"name\" : \"Xã A Túc\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19492,
		\"name\" : \"Xã Xy\",
		\"type\" : \"Xã\",
		\"maqh\" : 465
	},
	{
		\"xaid\" : 19495,
		\"name\" : \"Thị trấn Gio Linh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19496,
		\"name\" : \"Thị trấn Cửa Việt\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19498,
		\"name\" : \"Xã Trung Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19501,
		\"name\" : \"Xã Trung Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19504,
		\"name\" : \"Xã Trung Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19507,
		\"name\" : \"Xã Gio Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19510,
		\"name\" : \"Xã Gio Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19513,
		\"name\" : \"Xã Vĩnh Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19516,
		\"name\" : \"Xã Gio Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19519,
		\"name\" : \"Xã Gio Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19522,
		\"name\" : \"Xã Gio An\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19525,
		\"name\" : \"Xã Gio Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19528,
		\"name\" : \"Xã Gio Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19531,
		\"name\" : \"Xã Gio Việt\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19534,
		\"name\" : \"Xã Linh Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19537,
		\"name\" : \"Xã Gio Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19540,
		\"name\" : \"Xã Gio Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19543,
		\"name\" : \"Xã Gio Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19546,
		\"name\" : \"Xã Hải Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19549,
		\"name\" : \"Xã Linh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19552,
		\"name\" : \"Xã Gio Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 466
	},
	{
		\"xaid\" : 19555,
		\"name\" : \"Thị trấn Krông Klang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19558,
		\"name\" : \"Xã Mò Ó\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19561,
		\"name\" : \"Xã Hướng Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19564,
		\"name\" : \"Xã Đa Krông\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19567,
		\"name\" : \"Xã Triệu Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19570,
		\"name\" : \"Xã Ba Lòng\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19573,
		\"name\" : \"Xã Hải Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19576,
		\"name\" : \"Xã Ba Nang\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19579,
		\"name\" : \"Xã Tà Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19582,
		\"name\" : \"Xã Húc Nghì\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19585,
		\"name\" : \"Xã A Vao\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19588,
		\"name\" : \"Xã Tà Rụt\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19591,
		\"name\" : \"Xã A Bung\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19594,
		\"name\" : \"Xã A Ngo\",
		\"type\" : \"Xã\",
		\"maqh\" : 467
	},
	{
		\"xaid\" : 19597,
		\"name\" : \"Thị trấn Cam Lộ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 468
	},
	{
		\"xaid\" : 19600,
		\"name\" : \"Xã Cam Tuyền\",
		\"type\" : \"Xã\",
		\"maqh\" : 468
	},
	{
		\"xaid\" : 19603,
		\"name\" : \"Xã Cam An\",
		\"type\" : \"Xã\",
		\"maqh\" : 468
	},
	{
		\"xaid\" : 19606,
		\"name\" : \"Xã Cam Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 468
	},
	{
		\"xaid\" : 19609,
		\"name\" : \"Xã Cam Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 468
	},
	{
		\"xaid\" : 19612,
		\"name\" : \"Xã Cam Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 468
	},
	{
		\"xaid\" : 19615,
		\"name\" : \"Xã Cam Hiếu\",
		\"type\" : \"Xã\",
		\"maqh\" : 468
	},
	{
		\"xaid\" : 19618,
		\"name\" : \"Xã Cam Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 468
	},
	{
		\"xaid\" : 19621,
		\"name\" : \"Xã Cam Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 468
	},
	{
		\"xaid\" : 19624,
		\"name\" : \"Thị Trấn Ái Tử\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19627,
		\"name\" : \"Xã Triệu An\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19630,
		\"name\" : \"Xã Triệu Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19633,
		\"name\" : \"Xã Triệu Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19636,
		\"name\" : \"Xã Triệu Độ\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19639,
		\"name\" : \"Xã Triệu Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19642,
		\"name\" : \"Xã Triệu Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19645,
		\"name\" : \"Xã Triệu Đại\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19648,
		\"name\" : \"Xã Triệu Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19651,
		\"name\" : \"Xã Triệu Lăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19654,
		\"name\" : \"Xã Triệu Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19657,
		\"name\" : \"Xã Triệu Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19660,
		\"name\" : \"Xã Triệu Tài\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19663,
		\"name\" : \"Xã Triệu Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19666,
		\"name\" : \"Xã Triệu Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19669,
		\"name\" : \"Xã Triệu Ái\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19672,
		\"name\" : \"Xã Triệu Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19675,
		\"name\" : \"Xã Triệu Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19678,
		\"name\" : \"Xã Triệu Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 469
	},
	{
		\"xaid\" : 19681,
		\"name\" : \"Thị trấn Hải Lăng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19684,
		\"name\" : \"Xã Hải An\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19687,
		\"name\" : \"Xã Hải Ba\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19690,
		\"name\" : \"Xã Hải Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19693,
		\"name\" : \"Xã Hải Quy\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19696,
		\"name\" : \"Xã Hải Quế\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19699,
		\"name\" : \"Xã Hải Vĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19702,
		\"name\" : \"Xã Hải Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19705,
		\"name\" : \"Xã Hải Lệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 462
	},
	{
		\"xaid\" : 19708,
		\"name\" : \"Xã Hải Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19711,
		\"name\" : \"Xã Hải Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19714,
		\"name\" : \"Xã Hải Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19717,
		\"name\" : \"Xã Hải Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19720,
		\"name\" : \"Xã Hải Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19723,
		\"name\" : \"Xã Hải Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19726,
		\"name\" : \"Xã Hải Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19729,
		\"name\" : \"Xã Hải Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19732,
		\"name\" : \"Xã Hải Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19735,
		\"name\" : \"Xã Hải Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19738,
		\"name\" : \"Xã Hải Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19741,
		\"name\" : \"Xã Hải Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 470
	},
	{
		\"xaid\" : 19744,
		\"name\" : \"Phường Phú Thuận\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19747,
		\"name\" : \"Phường Phú Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19750,
		\"name\" : \"Phường Tây Lộc\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19753,
		\"name\" : \"Phường Thuận Lộc\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19756,
		\"name\" : \"Phường Phú Hiệp\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19759,
		\"name\" : \"Phường Phú Hậu\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19762,
		\"name\" : \"Phường Thuận Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19765,
		\"name\" : \"Phường Thuận Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19768,
		\"name\" : \"Phường Phú Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19771,
		\"name\" : \"Phường Phú Cát\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19774,
		\"name\" : \"Phường Kim Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19777,
		\"name\" : \"Phường Vĩ Dạ\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19780,
		\"name\" : \"Phường Phường Đúc\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19783,
		\"name\" : \"Phường Vĩnh Ninh\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19786,
		\"name\" : \"Phường Phú Hội\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19789,
		\"name\" : \"Phường Phú Nhuận\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19792,
		\"name\" : \"Phường Xuân Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19795,
		\"name\" : \"Phường Trường An\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19798,
		\"name\" : \"Phường Phước Vĩnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19801,
		\"name\" : \"Phường An Cựu\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19803,
		\"name\" : \"Phường An Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19804,
		\"name\" : \"Phường Hương Sơ\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19807,
		\"name\" : \"Phường Thuỷ Biều\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19810,
		\"name\" : \"Phường Hương Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19813,
		\"name\" : \"Phường Thuỷ Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19815,
		\"name\" : \"Phường An Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19816,
		\"name\" : \"Phường An Tây\",
		\"type\" : \"Phường\",
		\"maqh\" : 474
	},
	{
		\"xaid\" : 19819,
		\"name\" : \"Thị trấn Phong Điền\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19822,
		\"name\" : \"Xã Điền Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19825,
		\"name\" : \"Xã Điền Môn\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19828,
		\"name\" : \"Xã Điền Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19831,
		\"name\" : \"Xã Phong Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19834,
		\"name\" : \"Xã Điền Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19837,
		\"name\" : \"Xã Phong Chương\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19840,
		\"name\" : \"Xã Phong Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19843,
		\"name\" : \"Xã Điền Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19846,
		\"name\" : \"Xã Phong Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19849,
		\"name\" : \"Xã Phong Thu\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19852,
		\"name\" : \"Xã Phong Hiền\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19855,
		\"name\" : \"Xã Phong Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19858,
		\"name\" : \"Xã Phong An\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19861,
		\"name\" : \"Xã Phong Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19864,
		\"name\" : \"Xã Phong Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 476
	},
	{
		\"xaid\" : 19867,
		\"name\" : \"Thị trấn Sịa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 477
	},
	{
		\"xaid\" : 19870,
		\"name\" : \"Xã Quảng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 477
	},
	{
		\"xaid\" : 19873,
		\"name\" : \"Xã Quảng Ngạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 477
	},
	{
		\"xaid\" : 19876,
		\"name\" : \"Xã Quảng Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 477
	},
	{
		\"xaid\" : 19879,
		\"name\" : \"Xã Quảng Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 477
	},
	{
		\"xaid\" : 19882,
		\"name\" : \"Xã Quảng Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 477
	},
	{
		\"xaid\" : 19885,
		\"name\" : \"Xã Quảng Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 477
	},
	{
		\"xaid\" : 19888,
		\"name\" : \"Xã Quảng An\",
		\"type\" : \"Xã\",
		\"maqh\" : 477
	},
	{
		\"xaid\" : 19891,
		\"name\" : \"Xã Quảng Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 477
	},
	{
		\"xaid\" : 19894,
		\"name\" : \"Xã Quảng Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 477
	},
	{
		\"xaid\" : 19897,
		\"name\" : \"Xã Quảng Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 477
	},
	{
		\"xaid\" : 19900,
		\"name\" : \"Thị trấn Thuận An\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19903,
		\"name\" : \"Xã Phú Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19906,
		\"name\" : \"Xã Phú Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19909,
		\"name\" : \"Xã Phú Mậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19912,
		\"name\" : \"Xã Phú An\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19915,
		\"name\" : \"Xã Phú Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19918,
		\"name\" : \"Xã Phú Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19921,
		\"name\" : \"Xã Phú Diên\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19924,
		\"name\" : \"Xã Phú Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19927,
		\"name\" : \"Xã Phú Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19930,
		\"name\" : \"Xã Phú Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19933,
		\"name\" : \"Xã Phú Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19936,
		\"name\" : \"Xã Vinh Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19939,
		\"name\" : \"Xã Phú Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19942,
		\"name\" : \"Thị trấn Phú Đa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19945,
		\"name\" : \"Xã Vinh Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19948,
		\"name\" : \"Xã Vinh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19951,
		\"name\" : \"Xã Vinh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19954,
		\"name\" : \"Xã Vinh Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19957,
		\"name\" : \"Xã Vinh Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 478
	},
	{
		\"xaid\" : 19960,
		\"name\" : \"Phường Phú Bài\",
		\"type\" : \"Phường\",
		\"maqh\" : 479
	},
	{
		\"xaid\" : 19963,
		\"name\" : \"Xã Thủy Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 479
	},
	{
		\"xaid\" : 19966,
		\"name\" : \"Xã Thủy Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 479
	},
	{
		\"xaid\" : 19969,
		\"name\" : \"Phường Thủy Dương\",
		\"type\" : \"Phường\",
		\"maqh\" : 479
	},
	{
		\"xaid\" : 19972,
		\"name\" : \"Phường Thủy Phương\",
		\"type\" : \"Phường\",
		\"maqh\" : 479
	},
	{
		\"xaid\" : 19975,
		\"name\" : \"Phường Thủy Châu\",
		\"type\" : \"Phường\",
		\"maqh\" : 479
	},
	{
		\"xaid\" : 19978,
		\"name\" : \"Phường Thủy Lương\",
		\"type\" : \"Phường\",
		\"maqh\" : 479
	},
	{
		\"xaid\" : 19981,
		\"name\" : \"Xã Thủy Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 479
	},
	{
		\"xaid\" : 19984,
		\"name\" : \"Xã Thủy Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 479
	},
	{
		\"xaid\" : 19987,
		\"name\" : \"Xã Thủy Phù\",
		\"type\" : \"Xã\",
		\"maqh\" : 479
	},
	{
		\"xaid\" : 19990,
		\"name\" : \"Xã Phú Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 479
	},
	{
		\"xaid\" : 19993,
		\"name\" : \"Xã Dương Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 479
	},
	{
		\"xaid\" : 19996,
		\"name\" : \"Phường Tứ Hạ\",
		\"type\" : \"Phường\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 19999,
		\"name\" : \"Xã Hải Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20002,
		\"name\" : \"Xã Hương Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20005,
		\"name\" : \"Xã Hương Toàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20008,
		\"name\" : \"Phường Hương Vân\",
		\"type\" : \"Phường\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20011,
		\"name\" : \"Phường Hương Văn\",
		\"type\" : \"Phường\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20014,
		\"name\" : \"Xã Hương Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20017,
		\"name\" : \"Phường Hương Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20020,
		\"name\" : \"Phường Hương Chữ\",
		\"type\" : \"Phường\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20023,
		\"name\" : \"Phường Hương An\",
		\"type\" : \"Phường\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20026,
		\"name\" : \"Xã Hương Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20029,
		\"name\" : \"Phường Hương Hồ\",
		\"type\" : \"Phường\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20032,
		\"name\" : \"Xã Hương Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20035,
		\"name\" : \"Xã Bình Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20038,
		\"name\" : \"Xã Hồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20041,
		\"name\" : \"Xã Bình Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 480
	},
	{
		\"xaid\" : 20044,
		\"name\" : \"Thị trấn A Lưới\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20047,
		\"name\" : \"Xã Hồng Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20050,
		\"name\" : \"Xã Hồng Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20053,
		\"name\" : \"Xã Hồng Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20056,
		\"name\" : \"Xã Hồng Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20059,
		\"name\" : \"Xã Hương Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20062,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20065,
		\"name\" : \"Xã Hồng Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20068,
		\"name\" : \"Xã A Ngo\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20071,
		\"name\" : \"Xã Sơn Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20074,
		\"name\" : \"Xã Phú Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20077,
		\"name\" : \"Xã Hồng Quảng\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20080,
		\"name\" : \"Xã Hương Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20083,
		\"name\" : \"Xã Nhâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20086,
		\"name\" : \"Xã Hồng Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20089,
		\"name\" : \"Xã Hồng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20092,
		\"name\" : \"Xã Hương Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20095,
		\"name\" : \"Xã A Roằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20098,
		\"name\" : \"Xã Đông Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20101,
		\"name\" : \"Xã A Đớt\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20104,
		\"name\" : \"Xã Hồng Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 481
	},
	{
		\"xaid\" : 20107,
		\"name\" : \"Thị trấn Phú Lộc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20110,
		\"name\" : \"Thị trấn Lăng Cô\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20113,
		\"name\" : \"Xã Vinh Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20116,
		\"name\" : \"Xã Vinh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20119,
		\"name\" : \"Xã Vinh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20122,
		\"name\" : \"Xã Vinh Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20125,
		\"name\" : \"Xã Vinh Hiền\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20128,
		\"name\" : \"Xã Lộc Bổn\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20131,
		\"name\" : \"Xã Lộc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20134,
		\"name\" : \"Xã Lộc Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20137,
		\"name\" : \"Xã Lộc Vĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20140,
		\"name\" : \"Xã Lộc An\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20143,
		\"name\" : \"Xã Lộc Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20146,
		\"name\" : \"Xã Lộc Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20149,
		\"name\" : \"Xã Lộc Trì\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20152,
		\"name\" : \"Xã Lộc Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20155,
		\"name\" : \"Xã Lộc Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20158,
		\"name\" : \"Xã Xuân Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 482
	},
	{
		\"xaid\" : 20161,
		\"name\" : \"Thị trấn Khe Tre\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 483
	},
	{
		\"xaid\" : 20164,
		\"name\" : \"Xã Hương Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 483
	},
	{
		\"xaid\" : 20167,
		\"name\" : \"Xã Hương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 483
	},
	{
		\"xaid\" : 20170,
		\"name\" : \"Xã Hương Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 483
	},
	{
		\"xaid\" : 20173,
		\"name\" : \"Xã Thượng Quảng\",
		\"type\" : \"Xã\",
		\"maqh\" : 483
	},
	{
		\"xaid\" : 20176,
		\"name\" : \"Xã Hương Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 483
	},
	{
		\"xaid\" : 20179,
		\"name\" : \"Xã Hương Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 483
	},
	{
		\"xaid\" : 20182,
		\"name\" : \"Xã Hương Hữu\",
		\"type\" : \"Xã\",
		\"maqh\" : 483
	},
	{
		\"xaid\" : 20185,
		\"name\" : \"Xã Thượng Lộ\",
		\"type\" : \"Xã\",
		\"maqh\" : 483
	},
	{
		\"xaid\" : 20188,
		\"name\" : \"Xã Thượng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 483
	},
	{
		\"xaid\" : 20191,
		\"name\" : \"Xã Thượng Nhật\",
		\"type\" : \"Xã\",
		\"maqh\" : 483
	},
	{
		\"xaid\" : 20194,
		\"name\" : \"Phường Hòa Hiệp Bắc\",
		\"type\" : \"Phường\",
		\"maqh\" : 490
	},
	{
		\"xaid\" : 20195,
		\"name\" : \"Phường Hòa Hiệp Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 490
	},
	{
		\"xaid\" : 20197,
		\"name\" : \"Phường Hòa Khánh Bắc\",
		\"type\" : \"Phường\",
		\"maqh\" : 490
	},
	{
		\"xaid\" : 20198,
		\"name\" : \"Phường Hòa Khánh Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 490
	},
	{
		\"xaid\" : 20200,
		\"name\" : \"Phường Hòa Minh\",
		\"type\" : \"Phường\",
		\"maqh\" : 490
	},
	{
		\"xaid\" : 20203,
		\"name\" : \"Phường Tam Thuận\",
		\"type\" : \"Phường\",
		\"maqh\" : 491
	},
	{
		\"xaid\" : 20206,
		\"name\" : \"Phường Thanh Khê Tây\",
		\"type\" : \"Phường\",
		\"maqh\" : 491
	},
	{
		\"xaid\" : 20207,
		\"name\" : \"Phường Thanh Khê Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 491
	},
	{
		\"xaid\" : 20209,
		\"name\" : \"Phường Xuân Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 491
	},
	{
		\"xaid\" : 20212,
		\"name\" : \"Phường Tân Chính\",
		\"type\" : \"Phường\",
		\"maqh\" : 491
	},
	{
		\"xaid\" : 20215,
		\"name\" : \"Phường Chính Gián\",
		\"type\" : \"Phường\",
		\"maqh\" : 491
	},
	{
		\"xaid\" : 20218,
		\"name\" : \"Phường Vĩnh Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 491
	},
	{
		\"xaid\" : 20221,
		\"name\" : \"Phường Thạc Gián\",
		\"type\" : \"Phường\",
		\"maqh\" : 491
	},
	{
		\"xaid\" : 20224,
		\"name\" : \"Phường An Khê\",
		\"type\" : \"Phường\",
		\"maqh\" : 491
	},
	{
		\"xaid\" : 20225,
		\"name\" : \"Phường Hòa Khê\",
		\"type\" : \"Phường\",
		\"maqh\" : 491
	},
	{
		\"xaid\" : 20227,
		\"name\" : \"Phường Thanh Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20230,
		\"name\" : \"Phường Thuận Phước\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20233,
		\"name\" : \"Phường Thạch Thang\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20236,
		\"name\" : \"Phường Hải Châu  I\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20239,
		\"name\" : \"Phường Hải Châu II\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20242,
		\"name\" : \"Phường Phước Ninh\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20245,
		\"name\" : \"Phường Hòa Thuận Tây\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20246,
		\"name\" : \"Phường Hòa Thuận Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20248,
		\"name\" : \"Phường Nam Dương\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20251,
		\"name\" : \"Phường Bình Hiên\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20254,
		\"name\" : \"Phường Bình Thuận\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20257,
		\"name\" : \"Phường Hòa Cường Bắc\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20258,
		\"name\" : \"Phường Hòa Cường Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 492
	},
	{
		\"xaid\" : 20260,
		\"name\" : \"Phường Khuê Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 495
	},
	{
		\"xaid\" : 20263,
		\"name\" : \"Phường Thọ Quang\",
		\"type\" : \"Phường\",
		\"maqh\" : 493
	},
	{
		\"xaid\" : 20266,
		\"name\" : \"Phường Nại Hiên Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 493
	},
	{
		\"xaid\" : 20269,
		\"name\" : \"Phường Mân Thái\",
		\"type\" : \"Phường\",
		\"maqh\" : 493
	},
	{
		\"xaid\" : 20272,
		\"name\" : \"Phường An Hải Bắc\",
		\"type\" : \"Phường\",
		\"maqh\" : 493
	},
	{
		\"xaid\" : 20275,
		\"name\" : \"Phường Phước Mỹ\",
		\"type\" : \"Phường\",
		\"maqh\" : 493
	},
	{
		\"xaid\" : 20278,
		\"name\" : \"Phường An Hải Tây\",
		\"type\" : \"Phường\",
		\"maqh\" : 493
	},
	{
		\"xaid\" : 20281,
		\"name\" : \"Phường An Hải Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 493
	},
	{
		\"xaid\" : 20284,
		\"name\" : \"Phường Mỹ An\",
		\"type\" : \"Phường\",
		\"maqh\" : 494
	},
	{
		\"xaid\" : 20285,
		\"name\" : \"Phường Khuê Mỹ\",
		\"type\" : \"Phường\",
		\"maqh\" : 494
	},
	{
		\"xaid\" : 20287,
		\"name\" : \"Phường Hoà Quý\",
		\"type\" : \"Phường\",
		\"maqh\" : 494
	},
	{
		\"xaid\" : 20290,
		\"name\" : \"Phường Hoà Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 494
	},
	{
		\"xaid\" : 20293,
		\"name\" : \"Xã Hòa Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 497
	},
	{
		\"xaid\" : 20296,
		\"name\" : \"Xã Hòa Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 497
	},
	{
		\"xaid\" : 20299,
		\"name\" : \"Xã Hòa Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 497
	},
	{
		\"xaid\" : 20302,
		\"name\" : \"Xã Hòa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 497
	},
	{
		\"xaid\" : 20305,
		\"name\" : \"Phường Hòa Phát\",
		\"type\" : \"Phường\",
		\"maqh\" : 495
	},
	{
		\"xaid\" : 20306,
		\"name\" : \"Phường Hòa An\",
		\"type\" : \"Phường\",
		\"maqh\" : 495
	},
	{
		\"xaid\" : 20308,
		\"name\" : \"Xã Hòa Nhơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 497
	},
	{
		\"xaid\" : 20311,
		\"name\" : \"Phường Hòa Thọ Tây\",
		\"type\" : \"Phường\",
		\"maqh\" : 495
	},
	{
		\"xaid\" : 20312,
		\"name\" : \"Phường Hòa Thọ Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 495
	},
	{
		\"xaid\" : 20314,
		\"name\" : \"Phường Hòa Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 495
	},
	{
		\"xaid\" : 20317,
		\"name\" : \"Xã Hòa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 497
	},
	{
		\"xaid\" : 20320,
		\"name\" : \"Xã Hòa Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 497
	},
	{
		\"xaid\" : 20323,
		\"name\" : \"Xã Hòa Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 497
	},
	{
		\"xaid\" : 20326,
		\"name\" : \"Xã Hòa Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 497
	},
	{
		\"xaid\" : 20329,
		\"name\" : \"Xã Hòa Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 497
	},
	{
		\"xaid\" : 20332,
		\"name\" : \"Xã Hòa Khương\",
		\"type\" : \"Xã\",
		\"maqh\" : 497
	},
	{
		\"xaid\" : 20335,
		\"name\" : \"Phường Tân Thạnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20338,
		\"name\" : \"Phường Phước Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20341,
		\"name\" : \"Phường An Mỹ\",
		\"type\" : \"Phường\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20344,
		\"name\" : \"Phường Hòa Hương\",
		\"type\" : \"Phường\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20347,
		\"name\" : \"Phường An Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20350,
		\"name\" : \"Phường An Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20353,
		\"name\" : \"Phường Trường Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20356,
		\"name\" : \"Phường An Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20359,
		\"name\" : \"Xã Tam Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20362,
		\"name\" : \"Xã Tam Thăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20364,
		\"name\" : \"Thị trấn Phú Thịnh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 518
	},
	{
		\"xaid\" : 20365,
		\"name\" : \"Xã Tam Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 518
	},
	{
		\"xaid\" : 20368,
		\"name\" : \"Xã Tam An\",
		\"type\" : \"Xã\",
		\"maqh\" : 518
	},
	{
		\"xaid\" : 20371,
		\"name\" : \"Xã Tam Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20374,
		\"name\" : \"Xã Tam Đàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 518
	},
	{
		\"xaid\" : 20375,
		\"name\" : \"Phường Hoà Thuận\",
		\"type\" : \"Phường\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20377,
		\"name\" : \"Xã Tam Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 518
	},
	{
		\"xaid\" : 20380,
		\"name\" : \"Xã Tam Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 518
	},
	{
		\"xaid\" : 20383,
		\"name\" : \"Xã Tam Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 518
	},
	{
		\"xaid\" : 20386,
		\"name\" : \"Xã Tam Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 518
	},
	{
		\"xaid\" : 20387,
		\"name\" : \"Xã Tam Đại\",
		\"type\" : \"Xã\",
		\"maqh\" : 518
	},
	{
		\"xaid\" : 20389,
		\"name\" : \"Xã Tam Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 502
	},
	{
		\"xaid\" : 20392,
		\"name\" : \"Xã Tam Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 518
	},
	{
		\"xaid\" : 20395,
		\"name\" : \"Xã Tam Lãnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 518
	},
	{
		\"xaid\" : 20398,
		\"name\" : \"Phường Minh An\",
		\"type\" : \"Phường\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20401,
		\"name\" : \"Phường Tân An\",
		\"type\" : \"Phường\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20404,
		\"name\" : \"Phường Cẩm Phô\",
		\"type\" : \"Phường\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20407,
		\"name\" : \"Phường Thanh Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20410,
		\"name\" : \"Phường Sơn Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20413,
		\"name\" : \"Phường Cẩm Châu\",
		\"type\" : \"Phường\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20416,
		\"name\" : \"Phường Cửa Đại\",
		\"type\" : \"Phường\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20419,
		\"name\" : \"Phường Cẩm An\",
		\"type\" : \"Phường\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20422,
		\"name\" : \"Xã Cẩm Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20425,
		\"name\" : \"Xã Cẩm Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20428,
		\"name\" : \"Phường Cẩm Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20431,
		\"name\" : \"Xã Cẩm Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20434,
		\"name\" : \"Xã Tân Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 503
	},
	{
		\"xaid\" : 20437,
		\"name\" : \"Xã Ch'ơm\",
		\"type\" : \"Xã\",
		\"maqh\" : 504
	},
	{
		\"xaid\" : 20440,
		\"name\" : \"Xã Ga Ri\",
		\"type\" : \"Xã\",
		\"maqh\" : 504
	},
	{
		\"xaid\" : 20443,
		\"name\" : \"Xã A Xan\",
		\"type\" : \"Xã\",
		\"maqh\" : 504
	},
	{
		\"xaid\" : 20446,
		\"name\" : \"Xã Tr'Hy\",
		\"type\" : \"Xã\",
		\"maqh\" : 504
	},
	{
		\"xaid\" : 20449,
		\"name\" : \"Xã Lăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 504
	},
	{
		\"xaid\" : 20452,
		\"name\" : \"Xã A Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 504
	},
	{
		\"xaid\" : 20455,
		\"name\" : \"Xã A Tiêng\",
		\"type\" : \"Xã\",
		\"maqh\" : 504
	},
	{
		\"xaid\" : 20458,
		\"name\" : \"Xã Bha Lê\",
		\"type\" : \"Xã\",
		\"maqh\" : 504
	},
	{
		\"xaid\" : 20461,
		\"name\" : \"Xã A Vương\",
		\"type\" : \"Xã\",
		\"maqh\" : 504
	},
	{
		\"xaid\" : 20464,
		\"name\" : \"Xã Dang\",
		\"type\" : \"Xã\",
		\"maqh\" : 504
	},
	{
		\"xaid\" : 20467,
		\"name\" : \"Thị trấn P Rao\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 505
	},
	{
		\"xaid\" : 20470,
		\"name\" : \"Xã Tà Lu\",
		\"type\" : \"Xã\",
		\"maqh\" : 505
	},
	{
		\"xaid\" : 20473,
		\"name\" : \"Xã Sông Kôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 505
	},
	{
		\"xaid\" : 20476,
		\"name\" : \"Xã Jơ Ngây\",
		\"type\" : \"Xã\",
		\"maqh\" : 505
	},
	{
		\"xaid\" : 20479,
		\"name\" : \"Xã A Ting\",
		\"type\" : \"Xã\",
		\"maqh\" : 505
	},
	{
		\"xaid\" : 20482,
		\"name\" : \"Xã  Tư\",
		\"type\" : \"Xã\",
		\"maqh\" : 505
	},
	{
		\"xaid\" : 20485,
		\"name\" : \"Xã Ba\",
		\"type\" : \"Xã\",
		\"maqh\" : 505
	},
	{
		\"xaid\" : 20488,
		\"name\" : \"Xã A Rooi\",
		\"type\" : \"Xã\",
		\"maqh\" : 505
	},
	{
		\"xaid\" : 20491,
		\"name\" : \"Xã Za Hung\",
		\"type\" : \"Xã\",
		\"maqh\" : 505
	},
	{
		\"xaid\" : 20494,
		\"name\" : \"Xã Mà Cooi\",
		\"type\" : \"Xã\",
		\"maqh\" : 505
	},
	{
		\"xaid\" : 20497,
		\"name\" : \"Xã Ka Dăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 505
	},
	{
		\"xaid\" : 20500,
		\"name\" : \"Thị Trấn Ái Nghĩa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20503,
		\"name\" : \"Xã Đại Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20506,
		\"name\" : \"Xã Đại Lãnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20509,
		\"name\" : \"Xã Đại Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20512,
		\"name\" : \"Xã Đại Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20515,
		\"name\" : \"Xã Đại Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20518,
		\"name\" : \"Xã Đại Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20521,
		\"name\" : \"Xã Đại Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20524,
		\"name\" : \"Xã Đại Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20527,
		\"name\" : \"Xã Đại Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20530,
		\"name\" : \"Xã Đại Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20533,
		\"name\" : \"Xã Đại Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20536,
		\"name\" : \"Xã Đại Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20539,
		\"name\" : \"Xã Đại Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20542,
		\"name\" : \"Xã Đại Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20545,
		\"name\" : \"Xã Đại Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20547,
		\"name\" : \"Xã Đại An\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20548,
		\"name\" : \"Xã Đại Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 506
	},
	{
		\"xaid\" : 20551,
		\"name\" : \"Phường Vĩnh Điện\",
		\"type\" : \"Phường\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20554,
		\"name\" : \"Xã Điện Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20557,
		\"name\" : \"Xã Điện Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20560,
		\"name\" : \"Xã Điện Thắng Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20561,
		\"name\" : \"Xã Điện Thắng Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20562,
		\"name\" : \"Xã Điện Thắng Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20563,
		\"name\" : \"Phường Điện Ngọc\",
		\"type\" : \"Phường\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20566,
		\"name\" : \"Xã Điện Hồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20569,
		\"name\" : \"Xã Điện Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20572,
		\"name\" : \"Xã Điện Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20575,
		\"name\" : \"Phường Điện An\",
		\"type\" : \"Phường\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20578,
		\"name\" : \"Phường Điện Nam Bắc\",
		\"type\" : \"Phường\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20579,
		\"name\" : \"Phường Điện Nam Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20580,
		\"name\" : \"Phường Điện Nam Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20581,
		\"name\" : \"Phường Điện Dương\",
		\"type\" : \"Phường\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20584,
		\"name\" : \"Xã Điện Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20587,
		\"name\" : \"Xã Điện Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20590,
		\"name\" : \"Xã Điện Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20593,
		\"name\" : \"Xã Điện Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20596,
		\"name\" : \"Xã Điện Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 507
	},
	{
		\"xaid\" : 20599,
		\"name\" : \"Thị trấn Nam Phước\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20602,
		\"name\" : \"Xã Duy Thu\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20605,
		\"name\" : \"Xã Duy Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20608,
		\"name\" : \"Xã Duy Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20611,
		\"name\" : \"Xã Duy Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20614,
		\"name\" : \"Xã Duy Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20617,
		\"name\" : \"Xã Duy Trinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20620,
		\"name\" : \"Xã Duy Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20623,
		\"name\" : \"Xã Duy Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20626,
		\"name\" : \"Xã Duy Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20629,
		\"name\" : \"Xã Duy Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20632,
		\"name\" : \"Xã Duy Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20635,
		\"name\" : \"Xã Duy Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20638,
		\"name\" : \"Xã Duy Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 508
	},
	{
		\"xaid\" : 20641,
		\"name\" : \"Thị trấn Đông Phú\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20644,
		\"name\" : \"Xã Quế Xuân 1\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20647,
		\"name\" : \"Xã Quế Xuân 2\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20650,
		\"name\" : \"Xã Quế Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20651,
		\"name\" : \"Xã Hương An\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20653,
		\"name\" : \"Xã Quế Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20656,
		\"name\" : \"Xã Quế Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 519
	},
	{
		\"xaid\" : 20659,
		\"name\" : \"Xã Quế Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20662,
		\"name\" : \"Xã Quế Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20665,
		\"name\" : \"Xã Phú Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20668,
		\"name\" : \"Xã Quế Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 519
	},
	{
		\"xaid\" : 20669,
		\"name\" : \"Xã Phước Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 519
	},
	{
		\"xaid\" : 20671,
		\"name\" : \"Xã Quế Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 519
	},
	{
		\"xaid\" : 20672,
		\"name\" : \"Xã Sơn Viên\",
		\"type\" : \"Xã\",
		\"maqh\" : 519
	},
	{
		\"xaid\" : 20674,
		\"name\" : \"Xã Quế Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 519
	},
	{
		\"xaid\" : 20677,
		\"name\" : \"Xã Quế Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20680,
		\"name\" : \"Xã Quế Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20683,
		\"name\" : \"Xã Quế Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20686,
		\"name\" : \"Xã Quế An\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20689,
		\"name\" : \"Xã Quế Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 509
	},
	{
		\"xaid\" : 20692,
		\"name\" : \"Xã Quế Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 519
	},
	{
		\"xaid\" : 20695,
		\"name\" : \"Thị trấn Thạnh Mỹ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 510
	},
	{
		\"xaid\" : 20698,
		\"name\" : \"Xã Laêê\",
		\"type\" : \"Xã\",
		\"maqh\" : 510
	},
	{
		\"xaid\" : 20699,
		\"name\" : \"Xã Chơ Chun\",
		\"type\" : \"Xã\",
		\"maqh\" : 510
	},
	{
		\"xaid\" : 20701,
		\"name\" : \"Xã Zuôich\",
		\"type\" : \"Xã\",
		\"maqh\" : 510
	},
	{
		\"xaid\" : 20702,
		\"name\" : \"Xã Tà Pơơ\",
		\"type\" : \"Xã\",
		\"maqh\" : 510
	},
	{
		\"xaid\" : 20704,
		\"name\" : \"Xã La Dêê\",
		\"type\" : \"Xã\",
		\"maqh\" : 510
	},
	{
		\"xaid\" : 20705,
		\"name\" : \"Xã Đắc Tôi\",
		\"type\" : \"Xã\",
		\"maqh\" : 510
	},
	{
		\"xaid\" : 20707,
		\"name\" : \"Xã Chà Vàl\",
		\"type\" : \"Xã\",
		\"maqh\" : 510
	},
	{
		\"xaid\" : 20710,
		\"name\" : \"Xã Tà Bhinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 510
	},
	{
		\"xaid\" : 20713,
		\"name\" : \"Xã Cà Dy\",
		\"type\" : \"Xã\",
		\"maqh\" : 510
	},
	{
		\"xaid\" : 20716,
		\"name\" : \"Xã Đắc Pre\",
		\"type\" : \"Xã\",
		\"maqh\" : 510
	},
	{
		\"xaid\" : 20719,
		\"name\" : \"Xã Đắc Pring\",
		\"type\" : \"Xã\",
		\"maqh\" : 510
	},
	{
		\"xaid\" : 20722,
		\"name\" : \"Thị trấn Khâm Đức\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 511
	},
	{
		\"xaid\" : 20725,
		\"name\" : \"Xã Phước Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 511
	},
	{
		\"xaid\" : 20728,
		\"name\" : \"Xã Phước Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 511
	},
	{
		\"xaid\" : 20729,
		\"name\" : \"Xã Phước Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 511
	},
	{
		\"xaid\" : 20731,
		\"name\" : \"Xã Phước Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 511
	},
	{
		\"xaid\" : 20734,
		\"name\" : \"Xã Phước Năng\",
		\"type\" : \"Xã\",
		\"maqh\" : 511
	},
	{
		\"xaid\" : 20737,
		\"name\" : \"Xã Phước Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 511
	},
	{
		\"xaid\" : 20740,
		\"name\" : \"Xã Phước Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 511
	},
	{
		\"xaid\" : 20743,
		\"name\" : \"Xã Phước Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 511
	},
	{
		\"xaid\" : 20746,
		\"name\" : \"Xã Phước Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 511
	},
	{
		\"xaid\" : 20749,
		\"name\" : \"Xã Phước Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 511
	},
	{
		\"xaid\" : 20752,
		\"name\" : \"Xã Phước Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 511
	},
	{
		\"xaid\" : 20755,
		\"name\" : \"Thị trấn Tân An\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 512
	},
	{
		\"xaid\" : 20758,
		\"name\" : \"Xã Hiệp Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 512
	},
	{
		\"xaid\" : 20761,
		\"name\" : \"Xã Hiệp Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 512
	},
	{
		\"xaid\" : 20764,
		\"name\" : \"Xã Quế Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 512
	},
	{
		\"xaid\" : 20767,
		\"name\" : \"Xã Bình Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 512
	},
	{
		\"xaid\" : 20770,
		\"name\" : \"Xã Sông Trà\",
		\"type\" : \"Xã\",
		\"maqh\" : 512
	},
	{
		\"xaid\" : 20773,
		\"name\" : \"Xã Phước Trà\",
		\"type\" : \"Xã\",
		\"maqh\" : 512
	},
	{
		\"xaid\" : 20776,
		\"name\" : \"Xã Phước Gia\",
		\"type\" : \"Xã\",
		\"maqh\" : 512
	},
	{
		\"xaid\" : 20779,
		\"name\" : \"Xã Quế Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 512
	},
	{
		\"xaid\" : 20782,
		\"name\" : \"Xã Quế Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 512
	},
	{
		\"xaid\" : 20785,
		\"name\" : \"Xã Thăng Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 512
	},
	{
		\"xaid\" : 20788,
		\"name\" : \"Xã Bình Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 512
	},
	{
		\"xaid\" : 20791,
		\"name\" : \"Thị trấn Hà Lam\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20794,
		\"name\" : \"Xã Bình Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20797,
		\"name\" : \"Xã Bình Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20800,
		\"name\" : \"Xã Bình Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20803,
		\"name\" : \"Xã Bình Phục\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20806,
		\"name\" : \"Xã Bình Triều\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20809,
		\"name\" : \"Xã Bình Đào\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20812,
		\"name\" : \"Xã Bình Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20815,
		\"name\" : \"Xã Bình Lãnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20818,
		\"name\" : \"Xã Bình Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20821,
		\"name\" : \"Xã Bình Định Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20822,
		\"name\" : \"Xã Bình Định Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20824,
		\"name\" : \"Xã Bình Quý\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20827,
		\"name\" : \"Xã Bình Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20830,
		\"name\" : \"Xã Bình Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20833,
		\"name\" : \"Xã Bình Tú\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20836,
		\"name\" : \"Xã Bình Sa\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20839,
		\"name\" : \"Xã Bình Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20842,
		\"name\" : \"Xã Bình Quế\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20845,
		\"name\" : \"Xã Bình An\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20848,
		\"name\" : \"Xã Bình Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20851,
		\"name\" : \"Xã Bình Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 513
	},
	{
		\"xaid\" : 20854,
		\"name\" : \"Thị trấn Tiên Kỳ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20857,
		\"name\" : \"Xã Tiên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20860,
		\"name\" : \"Xã Tiên Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20863,
		\"name\" : \"Xã Tiên Cẩm\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20866,
		\"name\" : \"Xã Tiên Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20869,
		\"name\" : \"Xã Tiên Lãnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20872,
		\"name\" : \"Xã Tiên Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20875,
		\"name\" : \"Xã Tiên Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20878,
		\"name\" : \"Xã Tiên Cảnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20881,
		\"name\" : \"Xã Tiên Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20884,
		\"name\" : \"Xã Tiên Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20887,
		\"name\" : \"Xã Tiên Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20890,
		\"name\" : \"Xã Tiên An\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20893,
		\"name\" : \"Xã Tiên Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20896,
		\"name\" : \"Xã Tiên Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 514
	},
	{
		\"xaid\" : 20899,
		\"name\" : \"Thị trấn Trà My\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20900,
		\"name\" : \"Xã Trà Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20902,
		\"name\" : \"Xã Trà Kót\",
		\"type\" : \"Xã\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20905,
		\"name\" : \"Xã Trà Nú\",
		\"type\" : \"Xã\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20908,
		\"name\" : \"Xã Trà Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20911,
		\"name\" : \"Xã Trà Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20914,
		\"name\" : \"Xã Trà Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20917,
		\"name\" : \"Xã Trà Bui\",
		\"type\" : \"Xã\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20920,
		\"name\" : \"Xã Trà Đốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20923,
		\"name\" : \"Xã Trà Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20926,
		\"name\" : \"Xã Trà Giác\",
		\"type\" : \"Xã\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20929,
		\"name\" : \"Xã Trà Giáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20932,
		\"name\" : \"Xã Trà Ka\",
		\"type\" : \"Xã\",
		\"maqh\" : 515
	},
	{
		\"xaid\" : 20935,
		\"name\" : \"Xã Trà Leng\",
		\"type\" : \"Xã\",
		\"maqh\" : 516
	},
	{
		\"xaid\" : 20938,
		\"name\" : \"Xã Trà Dơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 516
	},
	{
		\"xaid\" : 20941,
		\"name\" : \"Xã Trà Tập\",
		\"type\" : \"Xã\",
		\"maqh\" : 516
	},
	{
		\"xaid\" : 20944,
		\"name\" : \"Xã Trà Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 516
	},
	{
		\"xaid\" : 20947,
		\"name\" : \"Xã Trà Cang\",
		\"type\" : \"Xã\",
		\"maqh\" : 516
	},
	{
		\"xaid\" : 20950,
		\"name\" : \"Xã Trà Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 516
	},
	{
		\"xaid\" : 20953,
		\"name\" : \"Xã Trà Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 516
	},
	{
		\"xaid\" : 20956,
		\"name\" : \"Xã Trà Don\",
		\"type\" : \"Xã\",
		\"maqh\" : 516
	},
	{
		\"xaid\" : 20959,
		\"name\" : \"Xã Trà Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 516
	},
	{
		\"xaid\" : 20962,
		\"name\" : \"Xã Trà Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 516
	},
	{
		\"xaid\" : 20965,
		\"name\" : \"Thị trấn Núi Thành\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 20968,
		\"name\" : \"Xã Tam Xuân I\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 20971,
		\"name\" : \"Xã Tam Xuân II\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 20974,
		\"name\" : \"Xã Tam Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 20977,
		\"name\" : \"Xã Tam Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 20980,
		\"name\" : \"Xã Tam Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 20983,
		\"name\" : \"Xã Tam Anh Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 20984,
		\"name\" : \"Xã Tam Anh Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 20986,
		\"name\" : \"Xã Tam Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 20989,
		\"name\" : \"Xã Tam Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 20992,
		\"name\" : \"Xã Tam Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 20995,
		\"name\" : \"Xã Tam Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 20998,
		\"name\" : \"Xã Tam Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 21001,
		\"name\" : \"Xã Tam Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 21004,
		\"name\" : \"Xã Tam Mỹ Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 21005,
		\"name\" : \"Xã Tam Mỹ Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 21007,
		\"name\" : \"Xã Tam Trà\",
		\"type\" : \"Xã\",
		\"maqh\" : 517
	},
	{
		\"xaid\" : 21010,
		\"name\" : \"Phường Lê Hồng Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21013,
		\"name\" : \"Phường Trần Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21016,
		\"name\" : \"Phường Quảng Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21019,
		\"name\" : \"Phường Nghĩa Chánh\",
		\"type\" : \"Phường\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21022,
		\"name\" : \"Phường Trần Hưng Đạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21025,
		\"name\" : \"Phường Nguyễn Nghiêm\",
		\"type\" : \"Phường\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21028,
		\"name\" : \"Phường Nghĩa Lộ\",
		\"type\" : \"Phường\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21031,
		\"name\" : \"Phường Chánh Lộ\",
		\"type\" : \"Phường\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21034,
		\"name\" : \"Xã Nghĩa Dũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21037,
		\"name\" : \"Xã Nghĩa Dõng\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21040,
		\"name\" : \"Thị Trấn Châu Ổ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21043,
		\"name\" : \"Xã Bình Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21046,
		\"name\" : \"Xã Bình Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21049,
		\"name\" : \"Xã Bình Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21052,
		\"name\" : \"Xã Bình Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21055,
		\"name\" : \"Xã Bình Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21058,
		\"name\" : \"Xã Bình Khương\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21061,
		\"name\" : \"Xã Bình Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21064,
		\"name\" : \"Xã Bình An\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21067,
		\"name\" : \"Xã Bình Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21070,
		\"name\" : \"Xã Bình Dương\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21073,
		\"name\" : \"Xã Bình Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21076,
		\"name\" : \"Xã Bình Thới\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21079,
		\"name\" : \"Xã Bình Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21082,
		\"name\" : \"Xã Bình Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21085,
		\"name\" : \"Xã Bình Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21088,
		\"name\" : \"Xã Bình Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21091,
		\"name\" : \"Xã Bình Thanh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21094,
		\"name\" : \"Xã Bình Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21097,
		\"name\" : \"Xã Bình Thanh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21100,
		\"name\" : \"Xã Bình Chương\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21103,
		\"name\" : \"Xã Bình Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21106,
		\"name\" : \"Xã Bình Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21109,
		\"name\" : \"Xã Bình Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21112,
		\"name\" : \"Xã Bình Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 524
	},
	{
		\"xaid\" : 21115,
		\"name\" : \"Thị trấn Trà Xuân\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 525
	},
	{
		\"xaid\" : 21118,
		\"name\" : \"Xã Trà Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 525
	},
	{
		\"xaid\" : 21121,
		\"name\" : \"Xã Trà Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 525
	},
	{
		\"xaid\" : 21124,
		\"name\" : \"Xã Trà Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 525
	},
	{
		\"xaid\" : 21127,
		\"name\" : \"Xã Trà Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 525
	},
	{
		\"xaid\" : 21130,
		\"name\" : \"Xã Trà Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 525
	},
	{
		\"xaid\" : 21133,
		\"name\" : \"Xã Trà Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 525
	},
	{
		\"xaid\" : 21136,
		\"name\" : \"Xã Trà Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 525
	},
	{
		\"xaid\" : 21139,
		\"name\" : \"Xã Trà Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 525
	},
	{
		\"xaid\" : 21142,
		\"name\" : \"Xã Trà Bùi\",
		\"type\" : \"Xã\",
		\"maqh\" : 525
	},
	{
		\"xaid\" : 21145,
		\"name\" : \"Xã Trà Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 526
	},
	{
		\"xaid\" : 21148,
		\"name\" : \"Xã Trà Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 526
	},
	{
		\"xaid\" : 21151,
		\"name\" : \"Xã Trà Quân\",
		\"type\" : \"Xã\",
		\"maqh\" : 526
	},
	{
		\"xaid\" : 21154,
		\"name\" : \"Xã Trà Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 526
	},
	{
		\"xaid\" : 21157,
		\"name\" : \"Xã Trà Lãnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 526
	},
	{
		\"xaid\" : 21160,
		\"name\" : \"Xã Trà Nham\",
		\"type\" : \"Xã\",
		\"maqh\" : 526
	},
	{
		\"xaid\" : 21163,
		\"name\" : \"Xã Trà Xinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 526
	},
	{
		\"xaid\" : 21166,
		\"name\" : \"Xã Trà Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 526
	},
	{
		\"xaid\" : 21169,
		\"name\" : \"Xã Trà Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 526
	},
	{
		\"xaid\" : 21172,
		\"name\" : \"Phường Trương Quang Trọng\",
		\"type\" : \"Phường\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21175,
		\"name\" : \"Xã Tịnh Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 527
	},
	{
		\"xaid\" : 21178,
		\"name\" : \"Xã Tịnh Trà\",
		\"type\" : \"Xã\",
		\"maqh\" : 527
	},
	{
		\"xaid\" : 21181,
		\"name\" : \"Xã Tịnh Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 527
	},
	{
		\"xaid\" : 21184,
		\"name\" : \"Xã Tịnh Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 527
	},
	{
		\"xaid\" : 21187,
		\"name\" : \"Xã Tịnh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21190,
		\"name\" : \"Xã Tịnh Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21193,
		\"name\" : \"Xã Tịnh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 527
	},
	{
		\"xaid\" : 21196,
		\"name\" : \"Xã Tịnh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 527
	},
	{
		\"xaid\" : 21199,
		\"name\" : \"Xã Tịnh Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21202,
		\"name\" : \"Xã Tịnh Ấn Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21205,
		\"name\" : \"Xã Tịnh Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 527
	},
	{
		\"xaid\" : 21208,
		\"name\" : \"Xã Tịnh Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21211,
		\"name\" : \"Xã Tịnh Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21214,
		\"name\" : \"Xã Tịnh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21217,
		\"name\" : \"Xã Tịnh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 527
	},
	{
		\"xaid\" : 21220,
		\"name\" : \"Xã Tịnh Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 527
	},
	{
		\"xaid\" : 21223,
		\"name\" : \"Xã Tịnh Ấn Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21226,
		\"name\" : \"Xã Tịnh Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 527
	},
	{
		\"xaid\" : 21229,
		\"name\" : \"Xã Tịnh Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 527
	},
	{
		\"xaid\" : 21232,
		\"name\" : \"Xã Tịnh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21235,
		\"name\" : \"Thị trấn La Hà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21238,
		\"name\" : \"Thị trấn Sông Vệ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21241,
		\"name\" : \"Xã Nghĩa Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21244,
		\"name\" : \"Xã Nghĩa Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21247,
		\"name\" : \"Xã Nghĩa Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21250,
		\"name\" : \"Xã Nghĩa Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21253,
		\"name\" : \"Xã Nghĩa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21256,
		\"name\" : \"Xã Nghĩa Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21259,
		\"name\" : \"Xã Nghĩa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21262,
		\"name\" : \"Xã Nghĩa An\",
		\"type\" : \"Xã\",
		\"maqh\" : 522
	},
	{
		\"xaid\" : 21265,
		\"name\" : \"Xã Nghĩa Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21268,
		\"name\" : \"Xã Nghĩa Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21271,
		\"name\" : \"Xã Nghĩa Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21274,
		\"name\" : \"Xã Nghĩa Thương\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21277,
		\"name\" : \"Xã Nghĩa Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21280,
		\"name\" : \"Xã Nghĩa Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21283,
		\"name\" : \"Xã Nghĩa Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21286,
		\"name\" : \"Xã Nghĩa Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 528
	},
	{
		\"xaid\" : 21289,
		\"name\" : \"Thị trấn Di Lăng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21292,
		\"name\" : \"Xã Sơn Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21295,
		\"name\" : \"Xã Sơn Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21298,
		\"name\" : \"Xã Sơn Nham\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21301,
		\"name\" : \"Xã Sơn Bao\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21304,
		\"name\" : \"Xã Sơn Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21307,
		\"name\" : \"Xã Sơn Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21310,
		\"name\" : \"Xã Sơn Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21313,
		\"name\" : \"Xã Sơn Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21316,
		\"name\" : \"Xã Sơn Cao\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21319,
		\"name\" : \"Xã Sơn Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21322,
		\"name\" : \"Xã Sơn Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21325,
		\"name\" : \"Xã Sơn Kỳ\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21328,
		\"name\" : \"Xã Sơn Ba\",
		\"type\" : \"Xã\",
		\"maqh\" : 529
	},
	{
		\"xaid\" : 21331,
		\"name\" : \"Xã Sơn Bua\",
		\"type\" : \"Xã\",
		\"maqh\" : 530
	},
	{
		\"xaid\" : 21334,
		\"name\" : \"Xã Sơn Mùa\",
		\"type\" : \"Xã\",
		\"maqh\" : 530
	},
	{
		\"xaid\" : 21335,
		\"name\" : \"Xã Sơn Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 530
	},
	{
		\"xaid\" : 21337,
		\"name\" : \"Xã Sơn Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 530
	},
	{
		\"xaid\" : 21338,
		\"name\" : \"Xã Sơn Màu\",
		\"type\" : \"Xã\",
		\"maqh\" : 530
	},
	{
		\"xaid\" : 21340,
		\"name\" : \"Xã Sơn Dung\",
		\"type\" : \"Xã\",
		\"maqh\" : 530
	},
	{
		\"xaid\" : 21341,
		\"name\" : \"Xã Sơn Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 530
	},
	{
		\"xaid\" : 21343,
		\"name\" : \"Xã Sơn Tinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 530
	},
	{
		\"xaid\" : 21346,
		\"name\" : \"Xã Sơn Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 530
	},
	{
		\"xaid\" : 21349,
		\"name\" : \"Xã Long Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 531
	},
	{
		\"xaid\" : 21352,
		\"name\" : \"Xã Long Mai\",
		\"type\" : \"Xã\",
		\"maqh\" : 531
	},
	{
		\"xaid\" : 21355,
		\"name\" : \"Xã Thanh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 531
	},
	{
		\"xaid\" : 21358,
		\"name\" : \"Xã Long Môn\",
		\"type\" : \"Xã\",
		\"maqh\" : 531
	},
	{
		\"xaid\" : 21361,
		\"name\" : \"Xã Long Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 531
	},
	{
		\"xaid\" : 21364,
		\"name\" : \"Thị trấn Chợ Chùa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 532
	},
	{
		\"xaid\" : 21367,
		\"name\" : \"Xã Hành Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 532
	},
	{
		\"xaid\" : 21370,
		\"name\" : \"Xã Hành Dũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 532
	},
	{
		\"xaid\" : 21373,
		\"name\" : \"Xã Hành Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 532
	},
	{
		\"xaid\" : 21376,
		\"name\" : \"Xã Hành Nhân\",
		\"type\" : \"Xã\",
		\"maqh\" : 532
	},
	{
		\"xaid\" : 21379,
		\"name\" : \"Xã Hành Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 532
	},
	{
		\"xaid\" : 21382,
		\"name\" : \"Xã Hành Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 532
	},
	{
		\"xaid\" : 21385,
		\"name\" : \"Xã Hành Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 532
	},
	{
		\"xaid\" : 21388,
		\"name\" : \"Xã Hành Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 532
	},
	{
		\"xaid\" : 21391,
		\"name\" : \"Xã Hành Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 532
	},
	{
		\"xaid\" : 21394,
		\"name\" : \"Xã Hành Tín Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 532
	},
	{
		\"xaid\" : 21397,
		\"name\" : \"Xã Hành Tín  Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 532
	},
	{
		\"xaid\" : 21400,
		\"name\" : \"Thị trấn Mộ Đức\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21403,
		\"name\" : \"Xã Đức Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21406,
		\"name\" : \"Xã Đức Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21409,
		\"name\" : \"Xã Đức Nhuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21412,
		\"name\" : \"Xã Đức Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21415,
		\"name\" : \"Xã Đức Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21418,
		\"name\" : \"Xã Đức Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21421,
		\"name\" : \"Xã Đức Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21424,
		\"name\" : \"Xã Đức Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21427,
		\"name\" : \"Xã Đức Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21430,
		\"name\" : \"Xã Đức Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21433,
		\"name\" : \"Xã Đức Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21436,
		\"name\" : \"Xã Đức Lân\",
		\"type\" : \"Xã\",
		\"maqh\" : 533
	},
	{
		\"xaid\" : 21439,
		\"name\" : \"Thị trấn Đức Phổ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21442,
		\"name\" : \"Xã Phổ An\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21445,
		\"name\" : \"Xã Phổ Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21448,
		\"name\" : \"Xã Phổ Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21451,
		\"name\" : \"Xã Phổ Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21454,
		\"name\" : \"Xã Phổ Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21457,
		\"name\" : \"Xã Phổ Nhơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21460,
		\"name\" : \"Xã Phổ Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21463,
		\"name\" : \"Xã Phổ Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21466,
		\"name\" : \"Xã Phổ Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21469,
		\"name\" : \"Xã Phổ Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21472,
		\"name\" : \"Xã Phổ Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21475,
		\"name\" : \"Xã Phổ Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21478,
		\"name\" : \"Xã Phổ Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21481,
		\"name\" : \"Xã Phổ Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 534
	},
	{
		\"xaid\" : 21484,
		\"name\" : \"Thị trấn Ba Tơ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21487,
		\"name\" : \"Xã Ba Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21490,
		\"name\" : \"Xã Ba Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21493,
		\"name\" : \"Xã Ba Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21496,
		\"name\" : \"Xã Ba Động\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21499,
		\"name\" : \"Xã Ba Dinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21500,
		\"name\" : \"Xã Ba Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21502,
		\"name\" : \"Xã Ba Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21505,
		\"name\" : \"Xã Ba Ngạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21508,
		\"name\" : \"Xã Ba Khâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21511,
		\"name\" : \"Xã Ba Cung\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21514,
		\"name\" : \"Xã Ba Chùa\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21517,
		\"name\" : \"Xã Ba Tiêu\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21520,
		\"name\" : \"Xã Ba Trang\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21523,
		\"name\" : \"Xã Ba Tô\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21526,
		\"name\" : \"Xã Ba Bích\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21529,
		\"name\" : \"Xã Ba Vì\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21532,
		\"name\" : \"Xã Ba Lế\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21535,
		\"name\" : \"Xã Ba Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21538,
		\"name\" : \"Xã Ba Xa\",
		\"type\" : \"Xã\",
		\"maqh\" : 535
	},
	{
		\"xaid\" : 21541,
		\"name\" : \"Xã An Vĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 536
	},
	{
		\"xaid\" : 21544,
		\"name\" : \"Xã An Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 536
	},
	{
		\"xaid\" : 21547,
		\"name\" : \"Xã An Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 536
	},
	{
		\"xaid\" : 21550,
		\"name\" : \"Phường Nhơn Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21553,
		\"name\" : \"Phường Nhơn Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21556,
		\"name\" : \"Phường Đống Đa\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21559,
		\"name\" : \"Phường Trần Quang Diệu\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21562,
		\"name\" : \"Phường Hải Cảng\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21565,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21568,
		\"name\" : \"Phường Thị Nại\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21571,
		\"name\" : \"Phường Lê Hồng Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21574,
		\"name\" : \"Phường Trần Hưng Đạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21577,
		\"name\" : \"Phường Ngô Mây\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21580,
		\"name\" : \"Phường Lý Thường Kiệt\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21583,
		\"name\" : \"Phường Lê Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21586,
		\"name\" : \"Phường Trần Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21589,
		\"name\" : \"Phường Bùi Thị Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21592,
		\"name\" : \"Phường Nguyễn Văn Cừ\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21595,
		\"name\" : \"Phường Ghềnh Ráng\",
		\"type\" : \"Phường\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21598,
		\"name\" : \"Xã Nhơn Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21601,
		\"name\" : \"Xã Nhơn Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21604,
		\"name\" : \"Xã Nhơn Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21607,
		\"name\" : \"Xã Nhơn Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21609,
		\"name\" : \"Thị trấn An Lão\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 542
	},
	{
		\"xaid\" : 21610,
		\"name\" : \"Xã An Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 542
	},
	{
		\"xaid\" : 21613,
		\"name\" : \"Xã An Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 542
	},
	{
		\"xaid\" : 21616,
		\"name\" : \"Xã An Dũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 542
	},
	{
		\"xaid\" : 21619,
		\"name\" : \"Xã An Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 542
	},
	{
		\"xaid\" : 21622,
		\"name\" : \"Xã An Toàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 542
	},
	{
		\"xaid\" : 21625,
		\"name\" : \"Xã An Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 542
	},
	{
		\"xaid\" : 21628,
		\"name\" : \"Xã An Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 542
	},
	{
		\"xaid\" : 21631,
		\"name\" : \"Xã An Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 542
	},
	{
		\"xaid\" : 21634,
		\"name\" : \"Xã An Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 542
	},
	{
		\"xaid\" : 21637,
		\"name\" : \"Thị trấn  Tam Quan\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21640,
		\"name\" : \"Thị trấn Bồng Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21643,
		\"name\" : \"Xã Hoài Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21646,
		\"name\" : \"Xã Hoài Châu Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21649,
		\"name\" : \"Xã Hoài Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21652,
		\"name\" : \"Xã Hoài Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21655,
		\"name\" : \"Xã Tam Quan Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21658,
		\"name\" : \"Xã Tam Quan Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21661,
		\"name\" : \"Xã Hoài Hảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21664,
		\"name\" : \"Xã Hoài Thanh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21667,
		\"name\" : \"Xã Hoài Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21670,
		\"name\" : \"Xã Hoài Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21673,
		\"name\" : \"Xã Hoài Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21676,
		\"name\" : \"Xã Hoài Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21679,
		\"name\" : \"Xã Hoài Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21682,
		\"name\" : \"Xã Hoài Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21685,
		\"name\" : \"Xã Hoài Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 543
	},
	{
		\"xaid\" : 21688,
		\"name\" : \"Thị trấn Tăng Bạt Hổ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21690,
		\"name\" : \"Xã Ân Hảo Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21691,
		\"name\" : \"Xã Ân Hảo Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21694,
		\"name\" : \"Xã Ân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21697,
		\"name\" : \"Xã Ân Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21700,
		\"name\" : \"Xã Dak Mang\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21703,
		\"name\" : \"Xã Ân Tín\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21706,
		\"name\" : \"Xã Ân Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21709,
		\"name\" : \"Xã Ân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21712,
		\"name\" : \"Xã Ân Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21715,
		\"name\" : \"Xã Ân Hữu\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21718,
		\"name\" : \"Xã Bok Tới\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21721,
		\"name\" : \"Xã Ân Tường Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21724,
		\"name\" : \"Xã Ân Tường Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21727,
		\"name\" : \"Xã Ân Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 544
	},
	{
		\"xaid\" : 21730,
		\"name\" : \"Thị trấn Phù Mỹ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21733,
		\"name\" : \"Thị trấn Bình Dương\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21736,
		\"name\" : \"Xã Mỹ Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21739,
		\"name\" : \"Xã Mỹ Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21742,
		\"name\" : \"Xã Mỹ Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21745,
		\"name\" : \"Xã Mỹ Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21748,
		\"name\" : \"Xã Mỹ Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21751,
		\"name\" : \"Xã Mỹ An\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21754,
		\"name\" : \"Xã Mỹ Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21757,
		\"name\" : \"Xã Mỹ Trinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21760,
		\"name\" : \"Xã Mỹ Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21763,
		\"name\" : \"Xã Mỹ Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21766,
		\"name\" : \"Xã Mỹ Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21769,
		\"name\" : \"Xã Mỹ Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21772,
		\"name\" : \"Xã Mỹ Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21775,
		\"name\" : \"Xã Mỹ Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21778,
		\"name\" : \"Xã Mỹ Tài\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21781,
		\"name\" : \"Xã Mỹ Cát\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21784,
		\"name\" : \"Xã Mỹ Chánh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 545
	},
	{
		\"xaid\" : 21786,
		\"name\" : \"Thị trấn Vĩnh Thạnh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 546
	},
	{
		\"xaid\" : 21787,
		\"name\" : \"Xã Vĩnh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 546
	},
	{
		\"xaid\" : 21790,
		\"name\" : \"Xã Vĩnh Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 546
	},
	{
		\"xaid\" : 21796,
		\"name\" : \"Xã Vĩnh Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 546
	},
	{
		\"xaid\" : 21799,
		\"name\" : \"Xã Vĩnh Hảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 546
	},
	{
		\"xaid\" : 21801,
		\"name\" : \"Xã Vĩnh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 546
	},
	{
		\"xaid\" : 21802,
		\"name\" : \"Xã Vĩnh Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 546
	},
	{
		\"xaid\" : 21804,
		\"name\" : \"Xã Vĩnh Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 546
	},
	{
		\"xaid\" : 21805,
		\"name\" : \"Xã Vĩnh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 546
	},
	{
		\"xaid\" : 21808,
		\"name\" : \"Thị trấn Phú Phong\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21811,
		\"name\" : \"Xã Bình Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21814,
		\"name\" : \"Xã Tây Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21817,
		\"name\" : \"Xã Bình Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21820,
		\"name\" : \"Xã Tây Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21823,
		\"name\" : \"Xã Bình Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21826,
		\"name\" : \"Xã Tây An\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21829,
		\"name\" : \"Xã Bình Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21832,
		\"name\" : \"Xã Tây Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21835,
		\"name\" : \"Xã Bình Tường\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21838,
		\"name\" : \"Xã Tây Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21841,
		\"name\" : \"Xã Vĩnh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21844,
		\"name\" : \"Xã Tây Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21847,
		\"name\" : \"Xã Bình Nghi\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21850,
		\"name\" : \"Xã Tây Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 547
	},
	{
		\"xaid\" : 21853,
		\"name\" : \"Thị trấn Ngô Mây\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21856,
		\"name\" : \"Xã Cát Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21859,
		\"name\" : \"Xã Cát Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21862,
		\"name\" : \"Xã Cát Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21865,
		\"name\" : \"Xã Cát Tài\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21868,
		\"name\" : \"Xã Cát Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21871,
		\"name\" : \"Xã Cát Hanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21874,
		\"name\" : \"Xã Cát Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21877,
		\"name\" : \"Xã Cát Trinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21880,
		\"name\" : \"Xã Cát Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21883,
		\"name\" : \"Xã Cát Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21886,
		\"name\" : \"Xã Cát Nhơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21889,
		\"name\" : \"Xã Cát Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21892,
		\"name\" : \"Xã Cát Tường\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21895,
		\"name\" : \"Xã Cát Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21898,
		\"name\" : \"Xã Cát Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21901,
		\"name\" : \"Xã Cát Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21904,
		\"name\" : \"Xã Cát Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 548
	},
	{
		\"xaid\" : 21907,
		\"name\" : \"Phường Bình Định\",
		\"type\" : \"Phường\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21910,
		\"name\" : \"Phường Đập Đá\",
		\"type\" : \"Phường\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21913,
		\"name\" : \"Xã Nhơn Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21916,
		\"name\" : \"Phường Nhơn Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21919,
		\"name\" : \"Xã Nhơn Hạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21922,
		\"name\" : \"Xã Nhơn Hậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21925,
		\"name\" : \"Xã Nhơn Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21928,
		\"name\" : \"Xã Nhơn An\",
		\"type\" : \"Xã\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21931,
		\"name\" : \"Xã Nhơn Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21934,
		\"name\" : \"Phường Nhơn Hưng\",
		\"type\" : \"Phường\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21937,
		\"name\" : \"Xã Nhơn Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21940,
		\"name\" : \"Xã Nhơn Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21943,
		\"name\" : \"Phường Nhơn Hoà\",
		\"type\" : \"Phường\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21946,
		\"name\" : \"Xã Nhơn Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21949,
		\"name\" : \"Xã Nhơn Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 549
	},
	{
		\"xaid\" : 21952,
		\"name\" : \"Thị trấn Tuy Phước\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21955,
		\"name\" : \"Thị trấn Diêu Trì\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21958,
		\"name\" : \"Xã Phước Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21961,
		\"name\" : \"Xã Phước Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21964,
		\"name\" : \"Xã Phước Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21967,
		\"name\" : \"Xã Phước Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21970,
		\"name\" : \"Xã Phước Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21973,
		\"name\" : \"Xã Phước Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21976,
		\"name\" : \"Xã Phước Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21979,
		\"name\" : \"Xã Phước Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21982,
		\"name\" : \"Xã Phước Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21985,
		\"name\" : \"Xã Phước An\",
		\"type\" : \"Xã\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21988,
		\"name\" : \"Xã Phước Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 550
	},
	{
		\"xaid\" : 21991,
		\"name\" : \"Xã Phước Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 540
	},
	{
		\"xaid\" : 21994,
		\"name\" : \"Thị trấn Vân Canh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 551
	},
	{
		\"xaid\" : 21997,
		\"name\" : \"Xã Canh Liên\",
		\"type\" : \"Xã\",
		\"maqh\" : 551
	},
	{
		\"xaid\" : 22000,
		\"name\" : \"Xã Canh Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 551
	},
	{
		\"xaid\" : 22003,
		\"name\" : \"Xã Canh Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 551
	},
	{
		\"xaid\" : 22006,
		\"name\" : \"Xã Canh Hiển\",
		\"type\" : \"Xã\",
		\"maqh\" : 551
	},
	{
		\"xaid\" : 22009,
		\"name\" : \"Xã Canh Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 551
	},
	{
		\"xaid\" : 22012,
		\"name\" : \"Xã Canh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 551
	},
	{
		\"xaid\" : 22015,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22018,
		\"name\" : \"Phường 8\",
		\"type\" : \"Phường\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22021,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22024,
		\"name\" : \"Phường 9\",
		\"type\" : \"Phường\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22027,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22030,
		\"name\" : \"Phường 4\",
		\"type\" : \"Phường\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22033,
		\"name\" : \"Phường 5\",
		\"type\" : \"Phường\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22036,
		\"name\" : \"Phường 7\",
		\"type\" : \"Phường\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22039,
		\"name\" : \"Phường 6\",
		\"type\" : \"Phường\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22040,
		\"name\" : \"Phường Phú Thạnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22041,
		\"name\" : \"Phường Phú Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22042,
		\"name\" : \"Xã Hòa Kiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22045,
		\"name\" : \"Xã Bình Kiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22048,
		\"name\" : \"Xã Bình Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22051,
		\"name\" : \"Phường Xuân Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22052,
		\"name\" : \"Xã Xuân Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22053,
		\"name\" : \"Phường Xuân Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22054,
		\"name\" : \"Xã Xuân Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22057,
		\"name\" : \"Xã Xuân Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22060,
		\"name\" : \"Xã Xuân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22063,
		\"name\" : \"Xã Xuân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22066,
		\"name\" : \"Xã Xuân Cảnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22069,
		\"name\" : \"Xã Xuân Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22072,
		\"name\" : \"Xã Xuân Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22073,
		\"name\" : \"Phường Xuân Yên\",
		\"type\" : \"Phường\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22075,
		\"name\" : \"Xã Xuân Thọ 1\",
		\"type\" : \"Xã\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22076,
		\"name\" : \"Phường Xuân Đài\",
		\"type\" : \"Phường\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22078,
		\"name\" : \"Xã Xuân Thọ 2\",
		\"type\" : \"Xã\",
		\"maqh\" : 557
	},
	{
		\"xaid\" : 22081,
		\"name\" : \"Thị trấn La Hai\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 558
	},
	{
		\"xaid\" : 22084,
		\"name\" : \"Xã Đa Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 558
	},
	{
		\"xaid\" : 22087,
		\"name\" : \"Xã Phú Mỡ\",
		\"type\" : \"Xã\",
		\"maqh\" : 558
	},
	{
		\"xaid\" : 22090,
		\"name\" : \"Xã Xuân Lãnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 558
	},
	{
		\"xaid\" : 22093,
		\"name\" : \"Xã Xuân Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 558
	},
	{
		\"xaid\" : 22096,
		\"name\" : \"Xã Xuân Quang 1\",
		\"type\" : \"Xã\",
		\"maqh\" : 558
	},
	{
		\"xaid\" : 22099,
		\"name\" : \"Xã Xuân Sơn Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 558
	},
	{
		\"xaid\" : 22102,
		\"name\" : \"Xã Xuân Quang 2\",
		\"type\" : \"Xã\",
		\"maqh\" : 558
	},
	{
		\"xaid\" : 22105,
		\"name\" : \"Xã Xuân Sơn Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 558
	},
	{
		\"xaid\" : 22108,
		\"name\" : \"Xã Xuân Quang 3\",
		\"type\" : \"Xã\",
		\"maqh\" : 558
	},
	{
		\"xaid\" : 22111,
		\"name\" : \"Xã Xuân Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 558
	},
	{
		\"xaid\" : 22114,
		\"name\" : \"Thị trấn Chí Thạnh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22117,
		\"name\" : \"Xã An Dân\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22120,
		\"name\" : \"Xã An Ninh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22123,
		\"name\" : \"Xã An Ninh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22126,
		\"name\" : \"Xã An Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22129,
		\"name\" : \"Xã An Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22132,
		\"name\" : \"Xã An Nghiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22135,
		\"name\" : \"Xã An Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22138,
		\"name\" : \"Xã An Cư\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22141,
		\"name\" : \"Xã An Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22144,
		\"name\" : \"Xã An Lĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22147,
		\"name\" : \"Xã An Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22150,
		\"name\" : \"Xã An Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22153,
		\"name\" : \"Xã An Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22156,
		\"name\" : \"Xã An Chấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22159,
		\"name\" : \"Xã An Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 559
	},
	{
		\"xaid\" : 22162,
		\"name\" : \"Xã An Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22165,
		\"name\" : \"Thị trấn Củng Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22168,
		\"name\" : \"Xã Phước Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22171,
		\"name\" : \"Xã Sơn Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22174,
		\"name\" : \"Xã Sơn Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22177,
		\"name\" : \"Xã Sơn Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22180,
		\"name\" : \"Xã Cà Lúi\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22183,
		\"name\" : \"Xã Sơn Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22186,
		\"name\" : \"Xã Sơn Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22189,
		\"name\" : \"Xã Sơn Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22192,
		\"name\" : \"Xã Eachà Rang\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22195,
		\"name\" : \"Xã Krông Pa\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22198,
		\"name\" : \"Xã Suối Bạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22201,
		\"name\" : \"Xã Sơn Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22204,
		\"name\" : \"Xã Suối Trai\",
		\"type\" : \"Xã\",
		\"maqh\" : 560
	},
	{
		\"xaid\" : 22207,
		\"name\" : \"Thị trấn Hai Riêng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 561
	},
	{
		\"xaid\" : 22210,
		\"name\" : \"Xã Ea Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 561
	},
	{
		\"xaid\" : 22213,
		\"name\" : \"Xã Đức Bình Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 561
	},
	{
		\"xaid\" : 22216,
		\"name\" : \"Xã Ea Bá\",
		\"type\" : \"Xã\",
		\"maqh\" : 561
	},
	{
		\"xaid\" : 22219,
		\"name\" : \"Xã Sơn Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 561
	},
	{
		\"xaid\" : 22222,
		\"name\" : \"Xã Đức Bình Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 561
	},
	{
		\"xaid\" : 22225,
		\"name\" : \"Xã EaBar\",
		\"type\" : \"Xã\",
		\"maqh\" : 561
	},
	{
		\"xaid\" : 22228,
		\"name\" : \"Xã EaBia\",
		\"type\" : \"Xã\",
		\"maqh\" : 561
	},
	{
		\"xaid\" : 22231,
		\"name\" : \"Xã EaTrol\",
		\"type\" : \"Xã\",
		\"maqh\" : 561
	},
	{
		\"xaid\" : 22234,
		\"name\" : \"Xã Sông Hinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 561
	},
	{
		\"xaid\" : 22237,
		\"name\" : \"Xã Ealy\",
		\"type\" : \"Xã\",
		\"maqh\" : 561
	},
	{
		\"xaid\" : 22240,
		\"name\" : \"Phường Phú Lâm\",
		\"type\" : \"Phường\",
		\"maqh\" : 555
	},
	{
		\"xaid\" : 22243,
		\"name\" : \"Xã Hòa Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 564
	},
	{
		\"xaid\" : 22246,
		\"name\" : \"Xã Hòa Hiệp Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 564
	},
	{
		\"xaid\" : 22249,
		\"name\" : \"Xã Sơn Thành Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 562
	},
	{
		\"xaid\" : 22250,
		\"name\" : \"Xã Sơn Thành Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 562
	},
	{
		\"xaid\" : 22252,
		\"name\" : \"Xã Hòa Bình 1\",
		\"type\" : \"Xã\",
		\"maqh\" : 562
	},
	{
		\"xaid\" : 22255,
		\"name\" : \"Thị trấn Phú Thứ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 562
	},
	{
		\"xaid\" : 22258,
		\"name\" : \"Thị trấn Hoà Vinh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 564
	},
	{
		\"xaid\" : 22261,
		\"name\" : \"Thị trấn Hoà Hiệp Trung\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 564
	},
	{
		\"xaid\" : 22264,
		\"name\" : \"Xã Hòa Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 562
	},
	{
		\"xaid\" : 22267,
		\"name\" : \"Xã Hòa Tân Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 564
	},
	{
		\"xaid\" : 22270,
		\"name\" : \"Xã Hòa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 562
	},
	{
		\"xaid\" : 22273,
		\"name\" : \"Xã Hòa Tân Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 562
	},
	{
		\"xaid\" : 22276,
		\"name\" : \"Xã Hòa Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 562
	},
	{
		\"xaid\" : 22279,
		\"name\" : \"Xã Hòa Xuân Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 564
	},
	{
		\"xaid\" : 22282,
		\"name\" : \"Xã Hòa Hiệp Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 564
	},
	{
		\"xaid\" : 22285,
		\"name\" : \"Xã Hòa Mỹ Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 562
	},
	{
		\"xaid\" : 22288,
		\"name\" : \"Xã Hòa Mỹ Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 562
	},
	{
		\"xaid\" : 22291,
		\"name\" : \"Xã Hòa Xuân Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 564
	},
	{
		\"xaid\" : 22294,
		\"name\" : \"Xã Hòa Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 562
	},
	{
		\"xaid\" : 22297,
		\"name\" : \"Xã Hòa Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 564
	},
	{
		\"xaid\" : 22300,
		\"name\" : \"Xã Hòa Xuân Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 564
	},
	{
		\"xaid\" : 22303,
		\"name\" : \"Xã Hòa Quang Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 563
	},
	{
		\"xaid\" : 22306,
		\"name\" : \"Xã Hòa Quang Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 563
	},
	{
		\"xaid\" : 22309,
		\"name\" : \"Xã Hòa Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 563
	},
	{
		\"xaid\" : 22312,
		\"name\" : \"Xã Hòa Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 563
	},
	{
		\"xaid\" : 22315,
		\"name\" : \"Xã Hòa An\",
		\"type\" : \"Xã\",
		\"maqh\" : 563
	},
	{
		\"xaid\" : 22318,
		\"name\" : \"Xã Hòa Định Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 563
	},
	{
		\"xaid\" : 22319,
		\"name\" : \"Thị Trấn Phú Hoà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 563
	},
	{
		\"xaid\" : 22321,
		\"name\" : \"Xã Hòa Định Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 563
	},
	{
		\"xaid\" : 22324,
		\"name\" : \"Xã Hòa Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 563
	},
	{
		\"xaid\" : 22327,
		\"name\" : \"Phường Vĩnh Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22330,
		\"name\" : \"Phường Vĩnh Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22333,
		\"name\" : \"Phường Vĩnh Phước\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22336,
		\"name\" : \"Phường Ngọc Hiệp\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22339,
		\"name\" : \"Phường Vĩnh Thọ\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22342,
		\"name\" : \"Phường Xương Huân\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22345,
		\"name\" : \"Phường Vạn Thắng\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22348,
		\"name\" : \"Phường Vạn Thạnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22351,
		\"name\" : \"Phường Phương Sài\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22354,
		\"name\" : \"Phường Phương Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22357,
		\"name\" : \"Phường Phước Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22360,
		\"name\" : \"Phường Phước Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22363,
		\"name\" : \"Phường Lộc Thọ\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22366,
		\"name\" : \"Phường Phước Tiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22369,
		\"name\" : \"Phường Tân Lập\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22372,
		\"name\" : \"Phường Phước Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22375,
		\"name\" : \"Phường Vĩnh Nguyên\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22378,
		\"name\" : \"Phường Phước Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22381,
		\"name\" : \"Phường Vĩnh Trường\",
		\"type\" : \"Phường\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22384,
		\"name\" : \"Xã Vĩnh Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22387,
		\"name\" : \"Xã Vĩnh Phương\",
		\"type\" : \"Xã\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22390,
		\"name\" : \"Xã Vĩnh Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22393,
		\"name\" : \"Xã Vĩnh Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22396,
		\"name\" : \"Xã Vĩnh Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22399,
		\"name\" : \"Xã Vĩnh Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22402,
		\"name\" : \"Xã Vĩnh Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22405,
		\"name\" : \"Xã Phước Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 568
	},
	{
		\"xaid\" : 22408,
		\"name\" : \"Phường Cam Nghĩa\",
		\"type\" : \"Phường\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22411,
		\"name\" : \"Phường Cam Phúc Bắc\",
		\"type\" : \"Phường\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22414,
		\"name\" : \"Phường Cam Phúc Nam\",
		\"type\" : \"Phường\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22417,
		\"name\" : \"Phường Cam Lộc\",
		\"type\" : \"Phường\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22420,
		\"name\" : \"Phường Cam Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22423,
		\"name\" : \"Phường Ba Ngòi\",
		\"type\" : \"Phường\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22426,
		\"name\" : \"Phường Cam Thuận\",
		\"type\" : \"Phường\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22429,
		\"name\" : \"Phường Cam Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22432,
		\"name\" : \"Phường Cam Linh\",
		\"type\" : \"Phường\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22435,
		\"name\" : \"Xã Cam Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22438,
		\"name\" : \"Xã Cam Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22441,
		\"name\" : \"Xã Cam Hải Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22444,
		\"name\" : \"Xã Cam Hải Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22447,
		\"name\" : \"Xã Sơn Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22450,
		\"name\" : \"Xã Cam Hiệp Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22453,
		\"name\" : \"Thị trấn Cam Đức\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22456,
		\"name\" : \"Xã Cam Hiệp Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22459,
		\"name\" : \"Xã Cam Phước Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22462,
		\"name\" : \"Xã Cam Thành Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22465,
		\"name\" : \"Xã Cam An Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22468,
		\"name\" : \"Xã Cam Thành Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22471,
		\"name\" : \"Xã Cam An Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22474,
		\"name\" : \"Xã Cam Phước Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22477,
		\"name\" : \"Xã Cam Thịnh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22480,
		\"name\" : \"Xã Cam Thịnh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22483,
		\"name\" : \"Xã Cam Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22486,
		\"name\" : \"Xã Cam Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 569
	},
	{
		\"xaid\" : 22489,
		\"name\" : \"Thị trấn Vạn Giã\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22492,
		\"name\" : \"Xã Đại Lãnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22495,
		\"name\" : \"Xã Vạn Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22498,
		\"name\" : \"Xã Vạn Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22501,
		\"name\" : \"Xã Vạn Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22504,
		\"name\" : \"Xã Vạn Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22507,
		\"name\" : \"Xã Vạn Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22510,
		\"name\" : \"Xã Vạn Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22513,
		\"name\" : \"Xã Vạn Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22516,
		\"name\" : \"Xã Vạn Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22519,
		\"name\" : \"Xã Vạn Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22522,
		\"name\" : \"Xã Xuân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22525,
		\"name\" : \"Xã Vạn Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 571
	},
	{
		\"xaid\" : 22528,
		\"name\" : \"Phường Ninh Hiệp\",
		\"type\" : \"Phường\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22531,
		\"name\" : \"Xã Ninh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22534,
		\"name\" : \"Xã Ninh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22537,
		\"name\" : \"Xã Ninh Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22540,
		\"name\" : \"Xã Ninh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22543,
		\"name\" : \"Phường Ninh Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22546,
		\"name\" : \"Xã Ninh Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22549,
		\"name\" : \"Xã Ninh Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22552,
		\"name\" : \"Xã Ninh Sim\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22555,
		\"name\" : \"Xã Ninh Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22558,
		\"name\" : \"Xã Ninh Thân\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22561,
		\"name\" : \"Phường Ninh Diêm\",
		\"type\" : \"Phường\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22564,
		\"name\" : \"Xã Ninh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22567,
		\"name\" : \"Phường Ninh Thủy\",
		\"type\" : \"Phường\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22570,
		\"name\" : \"Phường Ninh Đa\",
		\"type\" : \"Phường\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22573,
		\"name\" : \"Xã Ninh Phụng\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22576,
		\"name\" : \"Xã Ninh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22579,
		\"name\" : \"Xã Ninh Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22582,
		\"name\" : \"Xã Ninh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22585,
		\"name\" : \"Xã Ninh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22588,
		\"name\" : \"Xã Ninh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22591,
		\"name\" : \"Phường Ninh Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22594,
		\"name\" : \"Phường Ninh Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22597,
		\"name\" : \"Xã Ninh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22600,
		\"name\" : \"Xã Ninh Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22603,
		\"name\" : \"Xã Ninh Ích\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22606,
		\"name\" : \"Xã Ninh Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 572
	},
	{
		\"xaid\" : 22609,
		\"name\" : \"Thị trấn Khánh Vĩnh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22612,
		\"name\" : \"Xã Khánh Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22615,
		\"name\" : \"Xã Khánh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22618,
		\"name\" : \"Xã Khánh Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22621,
		\"name\" : \"Xã Khánh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22624,
		\"name\" : \"Xã Khánh Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22627,
		\"name\" : \"Xã Khánh Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22630,
		\"name\" : \"Xã Sông Cầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22633,
		\"name\" : \"Xã Giang Ly\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22636,
		\"name\" : \"Xã Cầu Bà\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22639,
		\"name\" : \"Xã Liên Sang\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22642,
		\"name\" : \"Xã Khánh Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22645,
		\"name\" : \"Xã Khánh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22648,
		\"name\" : \"Xã Sơn Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 573
	},
	{
		\"xaid\" : 22651,
		\"name\" : \"Thị trấn Diên Khánh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22654,
		\"name\" : \"Xã Diên Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22657,
		\"name\" : \"Xã Diên Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22660,
		\"name\" : \"Xã Diên Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22663,
		\"name\" : \"Xã Diên Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22666,
		\"name\" : \"Xã Diên Đồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22669,
		\"name\" : \"Xã Diên Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22672,
		\"name\" : \"Xã Diên Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22675,
		\"name\" : \"Xã Diên Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22678,
		\"name\" : \"Xã Diên Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22681,
		\"name\" : \"Xã Diên Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22684,
		\"name\" : \"Xã Diên Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22687,
		\"name\" : \"Xã Diên Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22690,
		\"name\" : \"Xã Diên Toàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22693,
		\"name\" : \"Xã Diên An\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22696,
		\"name\" : \"Xã Diên Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22699,
		\"name\" : \"Xã Diên Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22702,
		\"name\" : \"Xã Suối Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22705,
		\"name\" : \"Xã Suối Tiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 574
	},
	{
		\"xaid\" : 22708,
		\"name\" : \"Xã Suối Cát\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22711,
		\"name\" : \"Xã Suối Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 570
	},
	{
		\"xaid\" : 22714,
		\"name\" : \"Thị trấn Tô Hạp\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 575
	},
	{
		\"xaid\" : 22717,
		\"name\" : \"Xã Thành Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 575
	},
	{
		\"xaid\" : 22720,
		\"name\" : \"Xã Sơn Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 575
	},
	{
		\"xaid\" : 22723,
		\"name\" : \"Xã Sơn Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 575
	},
	{
		\"xaid\" : 22726,
		\"name\" : \"Xã Sơn Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 575
	},
	{
		\"xaid\" : 22729,
		\"name\" : \"Xã Sơn Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 575
	},
	{
		\"xaid\" : 22732,
		\"name\" : \"Xã Ba Cụm Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 575
	},
	{
		\"xaid\" : 22735,
		\"name\" : \"Xã Ba Cụm Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 575
	},
	{
		\"xaid\" : 22736,
		\"name\" : \"Thị trấn Trường Sa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 576
	},
	{
		\"xaid\" : 22737,
		\"name\" : \"Xã Song Tử Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 576
	},
	{
		\"xaid\" : 22738,
		\"name\" : \"Phường Đô Vinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22739,
		\"name\" : \"Xã Sinh Tồn\",
		\"type\" : \"Xã\",
		\"maqh\" : 576
	},
	{
		\"xaid\" : 22741,
		\"name\" : \"Phường Phước Mỹ\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22744,
		\"name\" : \"Phường Bảo An\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22747,
		\"name\" : \"Phường Phủ Hà\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22750,
		\"name\" : \"Phường Thanh Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22753,
		\"name\" : \"Phường Mỹ Hương\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22756,
		\"name\" : \"Phường Tấn Tài\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22759,
		\"name\" : \"Phường Kinh Dinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22762,
		\"name\" : \"Phường Đạo Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22765,
		\"name\" : \"Phường Đài Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22768,
		\"name\" : \"Phường Đông Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22771,
		\"name\" : \"Phường Mỹ Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22774,
		\"name\" : \"Xã Thành Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22777,
		\"name\" : \"Phường Văn Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22779,
		\"name\" : \"Phường Mỹ Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22780,
		\"name\" : \"Phường Mỹ Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 582
	},
	{
		\"xaid\" : 22783,
		\"name\" : \"Xã Phước Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 584
	},
	{
		\"xaid\" : 22786,
		\"name\" : \"Xã Phước Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 584
	},
	{
		\"xaid\" : 22789,
		\"name\" : \"Xã Phước Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 584
	},
	{
		\"xaid\" : 22792,
		\"name\" : \"Xã Phước Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 584
	},
	{
		\"xaid\" : 22795,
		\"name\" : \"Xã Phước Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 584
	},
	{
		\"xaid\" : 22798,
		\"name\" : \"Xã Phước Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 584
	},
	{
		\"xaid\" : 22801,
		\"name\" : \"Xã Phước Đại\",
		\"type\" : \"Xã\",
		\"maqh\" : 584
	},
	{
		\"xaid\" : 22804,
		\"name\" : \"Xã Phước Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 584
	},
	{
		\"xaid\" : 22807,
		\"name\" : \"Xã Phước Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 584
	},
	{
		\"xaid\" : 22810,
		\"name\" : \"Thị trấn Tân Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 585
	},
	{
		\"xaid\" : 22813,
		\"name\" : \"Xã Lâm Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 585
	},
	{
		\"xaid\" : 22816,
		\"name\" : \"Xã Lương Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 585
	},
	{
		\"xaid\" : 22819,
		\"name\" : \"Xã Quảng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 585
	},
	{
		\"xaid\" : 22822,
		\"name\" : \"Xã Mỹ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 585
	},
	{
		\"xaid\" : 22825,
		\"name\" : \"Xã Hòa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 585
	},
	{
		\"xaid\" : 22828,
		\"name\" : \"Xã Ma Nới\",
		\"type\" : \"Xã\",
		\"maqh\" : 585
	},
	{
		\"xaid\" : 22831,
		\"name\" : \"Xã Nhơn Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 585
	},
	{
		\"xaid\" : 22834,
		\"name\" : \"Thị trấn Khánh Hải\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 586
	},
	{
		\"xaid\" : 22837,
		\"name\" : \"Xã Phước Chiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 588
	},
	{
		\"xaid\" : 22840,
		\"name\" : \"Xã Công Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 588
	},
	{
		\"xaid\" : 22843,
		\"name\" : \"Xã Phước Kháng\",
		\"type\" : \"Xã\",
		\"maqh\" : 588
	},
	{
		\"xaid\" : 22846,
		\"name\" : \"Xã Vĩnh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 586
	},
	{
		\"xaid\" : 22849,
		\"name\" : \"Xã Lợi Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 588
	},
	{
		\"xaid\" : 22852,
		\"name\" : \"Xã Phương Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 586
	},
	{
		\"xaid\" : 22853,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 588
	},
	{
		\"xaid\" : 22855,
		\"name\" : \"Xã Tân Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 586
	},
	{
		\"xaid\" : 22856,
		\"name\" : \"Xã Bắc Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 588
	},
	{
		\"xaid\" : 22858,
		\"name\" : \"Xã Xuân Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 586
	},
	{
		\"xaid\" : 22861,
		\"name\" : \"Xã Hộ Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 586
	},
	{
		\"xaid\" : 22864,
		\"name\" : \"Xã Tri Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 586
	},
	{
		\"xaid\" : 22867,
		\"name\" : \"Xã Nhơn Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 586
	},
	{
		\"xaid\" : 22868,
		\"name\" : \"Xã Thanh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 586
	},
	{
		\"xaid\" : 22870,
		\"name\" : \"Thị trấn Phước Dân\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 587
	},
	{
		\"xaid\" : 22873,
		\"name\" : \"Xã Phước Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 587
	},
	{
		\"xaid\" : 22876,
		\"name\" : \"Xã Phước Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 587
	},
	{
		\"xaid\" : 22879,
		\"name\" : \"Xã Phước Hậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 587
	},
	{
		\"xaid\" : 22882,
		\"name\" : \"Xã Phước Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 587
	},
	{
		\"xaid\" : 22885,
		\"name\" : \"Xã Phước Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 589
	},
	{
		\"xaid\" : 22888,
		\"name\" : \"Xã An Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 587
	},
	{
		\"xaid\" : 22891,
		\"name\" : \"Xã Phước Hữu\",
		\"type\" : \"Xã\",
		\"maqh\" : 587
	},
	{
		\"xaid\" : 22894,
		\"name\" : \"Xã Phước Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 587
	},
	{
		\"xaid\" : 22897,
		\"name\" : \"Xã Phước Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 589
	},
	{
		\"xaid\" : 22898,
		\"name\" : \"Xã Phước Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 589
	},
	{
		\"xaid\" : 22900,
		\"name\" : \"Xã Nhị Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 589
	},
	{
		\"xaid\" : 22903,
		\"name\" : \"Xã Phước Dinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 589
	},
	{
		\"xaid\" : 22906,
		\"name\" : \"Xã Phước Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 589
	},
	{
		\"xaid\" : 22909,
		\"name\" : \"Xã Phước Diêm\",
		\"type\" : \"Xã\",
		\"maqh\" : 589
	},
	{
		\"xaid\" : 22910,
		\"name\" : \"Xã Cà Ná\",
		\"type\" : \"Xã\",
		\"maqh\" : 589
	},
	{
		\"xaid\" : 22912,
		\"name\" : \"Xã Phước Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 587
	},
	{
		\"xaid\" : 22915,
		\"name\" : \"Phường Mũi Né\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22918,
		\"name\" : \"Phường Hàm Tiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22921,
		\"name\" : \"Phường Phú Hài\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22924,
		\"name\" : \"Phường Phú Thủy\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22927,
		\"name\" : \"Phường Phú Tài\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22930,
		\"name\" : \"Phường Phú Trinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22933,
		\"name\" : \"Phường Xuân An\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22936,
		\"name\" : \"Phường Thanh Hải\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22939,
		\"name\" : \"Phường Bình Hưng\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22942,
		\"name\" : \"Phường Đức Nghĩa\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22945,
		\"name\" : \"Phường Lạc Đạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22948,
		\"name\" : \"Phường Đức Thắng\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22951,
		\"name\" : \"Phường Hưng Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22954,
		\"name\" : \"Phường Đức Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22957,
		\"name\" : \"Xã Thiện Nghiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22960,
		\"name\" : \"Xã Phong Nẫm\",
		\"type\" : \"Xã\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22963,
		\"name\" : \"Xã Tiến Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22966,
		\"name\" : \"Xã Tiến Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 593
	},
	{
		\"xaid\" : 22969,
		\"name\" : \"Thị trấn Liên Hương\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 595
	},
	{
		\"xaid\" : 22972,
		\"name\" : \"Thị trấn Phan Rí Cửa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 595
	},
	{
		\"xaid\" : 22975,
		\"name\" : \"Xã Phan Dũng\",
		\"type\" : \"Xã\",
		\"maqh\" : 595
	},
	{
		\"xaid\" : 22978,
		\"name\" : \"Xã Phong Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 595
	},
	{
		\"xaid\" : 22981,
		\"name\" : \"Xã Vĩnh Hảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 595
	},
	{
		\"xaid\" : 22984,
		\"name\" : \"Xã Vĩnh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 595
	},
	{
		\"xaid\" : 22987,
		\"name\" : \"Xã Phú Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 595
	},
	{
		\"xaid\" : 22990,
		\"name\" : \"Xã Phước Thể\",
		\"type\" : \"Xã\",
		\"maqh\" : 595
	},
	{
		\"xaid\" : 22993,
		\"name\" : \"Xã Hòa Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 595
	},
	{
		\"xaid\" : 22996,
		\"name\" : \"Xã Chí Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 595
	},
	{
		\"xaid\" : 22999,
		\"name\" : \"Xã Bình Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 595
	},
	{
		\"xaid\" : 23002,
		\"name\" : \"Xã Hòa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 595
	},
	{
		\"xaid\" : 23005,
		\"name\" : \"Thị trấn Chợ Lầu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23008,
		\"name\" : \"Xã Phan Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23011,
		\"name\" : \"Xã Phan Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23014,
		\"name\" : \"Xã Bình An\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23017,
		\"name\" : \"Xã Phan Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23020,
		\"name\" : \"Xã Hải Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23023,
		\"name\" : \"Xã Sông Lũy\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23026,
		\"name\" : \"Xã Phan Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23029,
		\"name\" : \"Xã Sông Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23032,
		\"name\" : \"Thị trấn Lương Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23035,
		\"name\" : \"Xã Phan Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23038,
		\"name\" : \"Xã Phan Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23041,
		\"name\" : \"Xã Hồng Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23044,
		\"name\" : \"Xã Phan Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23047,
		\"name\" : \"Xã Bình Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23050,
		\"name\" : \"Xã Phan Rí Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23053,
		\"name\" : \"Xã Hòa Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23056,
		\"name\" : \"Xã Hồng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 596
	},
	{
		\"xaid\" : 23059,
		\"name\" : \"Thị trấn Ma Lâm\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23062,
		\"name\" : \"Thị trấn Phú Long\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23065,
		\"name\" : \"Xã La Dạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23068,
		\"name\" : \"Xã Đông Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23071,
		\"name\" : \"Xã Thuận Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23074,
		\"name\" : \"Xã Đông Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23077,
		\"name\" : \"Xã Hàm Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23080,
		\"name\" : \"Xã Hồng Liêm\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23083,
		\"name\" : \"Xã Thuận Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23086,
		\"name\" : \"Xã Hồng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23089,
		\"name\" : \"Xã Hàm Trí\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23092,
		\"name\" : \"Xã Hàm Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23095,
		\"name\" : \"Xã Hàm Liêm\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23098,
		\"name\" : \"Xã Hàm Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23101,
		\"name\" : \"Xã Hàm Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23104,
		\"name\" : \"Xã Hàm Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23107,
		\"name\" : \"Xã Đa Mi\",
		\"type\" : \"Xã\",
		\"maqh\" : 597
	},
	{
		\"xaid\" : 23110,
		\"name\" : \"Thị trấn Thuận Nam\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23113,
		\"name\" : \"Xã Mỹ Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23116,
		\"name\" : \"Xã Hàm Cần\",
		\"type\" : \"Xã\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23119,
		\"name\" : \"Xã Mương Mán\",
		\"type\" : \"Xã\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23122,
		\"name\" : \"Xã Hàm Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23125,
		\"name\" : \"Xã Hàm Kiệm\",
		\"type\" : \"Xã\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23128,
		\"name\" : \"Xã Hàm Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23131,
		\"name\" : \"Xã Hàm Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23134,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23137,
		\"name\" : \"Xã Hàm Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23140,
		\"name\" : \"Xã Thuận Quí\",
		\"type\" : \"Xã\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23143,
		\"name\" : \"Xã Tân Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23146,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 598
	},
	{
		\"xaid\" : 23149,
		\"name\" : \"Thị trấn Lạc Tánh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23152,
		\"name\" : \"Xã Bắc Ruộng\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23155,
		\"name\" : \"Xã Măng Tố\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23158,
		\"name\" : \"Xã Nghị Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23161,
		\"name\" : \"Xã La Ngâu\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23164,
		\"name\" : \"Xã Huy Khiêm\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23167,
		\"name\" : \"Xã Đức Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23170,
		\"name\" : \"Xã Đức Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23173,
		\"name\" : \"Xã Đồng Kho\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23176,
		\"name\" : \"Xã Gia An\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23179,
		\"name\" : \"Xã Đức Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23182,
		\"name\" : \"Xã Gia Huynh\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23185,
		\"name\" : \"Xã Đức Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23188,
		\"name\" : \"Xã Suối Kiết\",
		\"type\" : \"Xã\",
		\"maqh\" : 599
	},
	{
		\"xaid\" : 23191,
		\"name\" : \"Thị trấn Võ Xu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23194,
		\"name\" : \"Thị trấn Đức Tài\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23197,
		\"name\" : \"Xã Đa Kai\",
		\"type\" : \"Xã\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23200,
		\"name\" : \"Xã Sùng Nhơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23203,
		\"name\" : \"Xã Mê Pu\",
		\"type\" : \"Xã\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23206,
		\"name\" : \"Xã Nam Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23209,
		\"name\" : \"Xã Đức Chính\",
		\"type\" : \"Xã\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23212,
		\"name\" : \"Xã Đức Hạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23215,
		\"name\" : \"Xã Đức Tín\",
		\"type\" : \"Xã\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23218,
		\"name\" : \"Xã Vũ Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23221,
		\"name\" : \"Xã Tân Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23224,
		\"name\" : \"Xã Đông Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23227,
		\"name\" : \"Xã Trà Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 600
	},
	{
		\"xaid\" : 23230,
		\"name\" : \"Thị trấn Tân Minh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 601
	},
	{
		\"xaid\" : 23231,
		\"name\" : \"Phường Phước Hội\",
		\"type\" : \"Phường\",
		\"maqh\" : 594
	},
	{
		\"xaid\" : 23232,
		\"name\" : \"Phường Phước Lộc\",
		\"type\" : \"Phường\",
		\"maqh\" : 594
	},
	{
		\"xaid\" : 23234,
		\"name\" : \"Phường Tân Thiện\",
		\"type\" : \"Phường\",
		\"maqh\" : 594
	},
	{
		\"xaid\" : 23235,
		\"name\" : \"Phường Tân An\",
		\"type\" : \"Phường\",
		\"maqh\" : 594
	},
	{
		\"xaid\" : 23236,
		\"name\" : \"Thị trấn Tân Nghĩa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 601
	},
	{
		\"xaid\" : 23237,
		\"name\" : \"Phường Bình Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 594
	},
	{
		\"xaid\" : 23239,
		\"name\" : \"Xã Sông Phan\",
		\"type\" : \"Xã\",
		\"maqh\" : 601
	},
	{
		\"xaid\" : 23242,
		\"name\" : \"Xã Tân Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 601
	},
	{
		\"xaid\" : 23245,
		\"name\" : \"Xã Tân Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 594
	},
	{
		\"xaid\" : 23246,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 594
	},
	{
		\"xaid\" : 23248,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 594
	},
	{
		\"xaid\" : 23251,
		\"name\" : \"Xã Tân Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 601
	},
	{
		\"xaid\" : 23254,
		\"name\" : \"Xã Tân Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 601
	},
	{
		\"xaid\" : 23255,
		\"name\" : \"Xã Thắng Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 601
	},
	{
		\"xaid\" : 23257,
		\"name\" : \"Xã Tân Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 601
	},
	{
		\"xaid\" : 23260,
		\"name\" : \"Xã Tân Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 601
	},
	{
		\"xaid\" : 23266,
		\"name\" : \"Xã Sơn Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 601
	},
	{
		\"xaid\" : 23268,
		\"name\" : \"Xã Tân Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 594
	},
	{
		\"xaid\" : 23272,
		\"name\" : \"Xã Ngũ Phụng\",
		\"type\" : \"Xã\",
		\"maqh\" : 602
	},
	{
		\"xaid\" : 23275,
		\"name\" : \"Xã Long Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 602
	},
	{
		\"xaid\" : 23278,
		\"name\" : \"Xã Tam Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 602
	},
	{
		\"xaid\" : 23281,
		\"name\" : \"Phường Quang Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23284,
		\"name\" : \"Phường Duy Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23287,
		\"name\" : \"Phường Quyết Thắng\",
		\"type\" : \"Phường\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23290,
		\"name\" : \"Phường Trường Chinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23293,
		\"name\" : \"Phường Thắng Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23296,
		\"name\" : \"Phường Ngô Mây\",
		\"type\" : \"Phường\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23299,
		\"name\" : \"Phường Thống Nhất\",
		\"type\" : \"Phường\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23302,
		\"name\" : \"Phường Lê Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23305,
		\"name\" : \"Phường Nguyễn Trãi\",
		\"type\" : \"Phường\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23308,
		\"name\" : \"Phường Trần Hưng Đạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23311,
		\"name\" : \"Xã Đắk Cấm\",
		\"type\" : \"Xã\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23314,
		\"name\" : \"Xã Kroong\",
		\"type\" : \"Xã\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23317,
		\"name\" : \"Xã Ngọk Bay\",
		\"type\" : \"Xã\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23320,
		\"name\" : \"Xã Vinh Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23323,
		\"name\" : \"Xã Đắk Blà\",
		\"type\" : \"Xã\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23326,
		\"name\" : \"Xã Ia Chim\",
		\"type\" : \"Xã\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23327,
		\"name\" : \"Xã Đăk Năng\",
		\"type\" : \"Xã\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23329,
		\"name\" : \"Xã Đoàn Kết\",
		\"type\" : \"Xã\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23332,
		\"name\" : \"Xã Chư Hreng\",
		\"type\" : \"Xã\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23335,
		\"name\" : \"Xã Đắk Rơ Wa\",
		\"type\" : \"Xã\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23338,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 608
	},
	{
		\"xaid\" : 23341,
		\"name\" : \"Thị trấn Đắk Glei\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 610
	},
	{
		\"xaid\" : 23344,
		\"name\" : \"Xã Đắk Plô\",
		\"type\" : \"Xã\",
		\"maqh\" : 610
	},
	{
		\"xaid\" : 23347,
		\"name\" : \"Xã Đắk Man\",
		\"type\" : \"Xã\",
		\"maqh\" : 610
	},
	{
		\"xaid\" : 23350,
		\"name\" : \"Xã Đắk Nhoong\",
		\"type\" : \"Xã\",
		\"maqh\" : 610
	},
	{
		\"xaid\" : 23353,
		\"name\" : \"Xã Đắk Pék\",
		\"type\" : \"Xã\",
		\"maqh\" : 610
	},
	{
		\"xaid\" : 23356,
		\"name\" : \"Xã Đắk Choong\",
		\"type\" : \"Xã\",
		\"maqh\" : 610
	},
	{
		\"xaid\" : 23359,
		\"name\" : \"Xã Xốp\",
		\"type\" : \"Xã\",
		\"maqh\" : 610
	},
	{
		\"xaid\" : 23362,
		\"name\" : \"Xã Mường Hoong\",
		\"type\" : \"Xã\",
		\"maqh\" : 610
	},
	{
		\"xaid\" : 23365,
		\"name\" : \"Xã Ngọc Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 610
	},
	{
		\"xaid\" : 23368,
		\"name\" : \"Xã Đắk Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 610
	},
	{
		\"xaid\" : 23371,
		\"name\" : \"Xã Đắk KRoong\",
		\"type\" : \"Xã\",
		\"maqh\" : 610
	},
	{
		\"xaid\" : 23374,
		\"name\" : \"Xã Đắk Môn\",
		\"type\" : \"Xã\",
		\"maqh\" : 610
	},
	{
		\"xaid\" : 23377,
		\"name\" : \"Thị trấn Plei Cần\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 611
	},
	{
		\"xaid\" : 23380,
		\"name\" : \"Xã Đắk Ang\",
		\"type\" : \"Xã\",
		\"maqh\" : 611
	},
	{
		\"xaid\" : 23383,
		\"name\" : \"Xã Đắk Dục\",
		\"type\" : \"Xã\",
		\"maqh\" : 611
	},
	{
		\"xaid\" : 23386,
		\"name\" : \"Xã Đắk Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 611
	},
	{
		\"xaid\" : 23389,
		\"name\" : \"Xã Đắk Xú\",
		\"type\" : \"Xã\",
		\"maqh\" : 611
	},
	{
		\"xaid\" : 23392,
		\"name\" : \"Xã Đắk Kan\",
		\"type\" : \"Xã\",
		\"maqh\" : 611
	},
	{
		\"xaid\" : 23395,
		\"name\" : \"Xã Pờ Y\",
		\"type\" : \"Xã\",
		\"maqh\" : 611
	},
	{
		\"xaid\" : 23398,
		\"name\" : \"Xã Sa Loong\",
		\"type\" : \"Xã\",
		\"maqh\" : 611
	},
	{
		\"xaid\" : 23401,
		\"name\" : \"Thị trấn Đắk Tô\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 612
	},
	{
		\"xaid\" : 23404,
		\"name\" : \"Xã Ngọk Lây\",
		\"type\" : \"Xã\",
		\"maqh\" : 617
	},
	{
		\"xaid\" : 23407,
		\"name\" : \"Xã Đắk Na\",
		\"type\" : \"Xã\",
		\"maqh\" : 617
	},
	{
		\"xaid\" : 23410,
		\"name\" : \"Xã Măng Ri\",
		\"type\" : \"Xã\",
		\"maqh\" : 617
	},
	{
		\"xaid\" : 23413,
		\"name\" : \"Xã Ngok Yêu\",
		\"type\" : \"Xã\",
		\"maqh\" : 617
	},
	{
		\"xaid\" : 23416,
		\"name\" : \"Xã Đắk Sao\",
		\"type\" : \"Xã\",
		\"maqh\" : 617
	},
	{
		\"xaid\" : 23417,
		\"name\" : \"Xã Đắk Rơ Ông\",
		\"type\" : \"Xã\",
		\"maqh\" : 617
	},
	{
		\"xaid\" : 23419,
		\"name\" : \"Xã Đắk Tơ Kan\",
		\"type\" : \"Xã\",
		\"maqh\" : 617
	},
	{
		\"xaid\" : 23422,
		\"name\" : \"Xã Tu Mơ Rông\",
		\"type\" : \"Xã\",
		\"maqh\" : 617
	},
	{
		\"xaid\" : 23425,
		\"name\" : \"Xã Đắk Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 617
	},
	{
		\"xaid\" : 23427,
		\"name\" : \"Xã Đắk Rơ Nga\",
		\"type\" : \"Xã\",
		\"maqh\" : 612
	},
	{
		\"xaid\" : 23428,
		\"name\" : \"Xã Ngọk Tụ\",
		\"type\" : \"Xã\",
		\"maqh\" : 612
	},
	{
		\"xaid\" : 23430,
		\"name\" : \"Xã Đắk Trăm\",
		\"type\" : \"Xã\",
		\"maqh\" : 612
	},
	{
		\"xaid\" : 23431,
		\"name\" : \"Xã Văn Lem\",
		\"type\" : \"Xã\",
		\"maqh\" : 612
	},
	{
		\"xaid\" : 23434,
		\"name\" : \"Xã Kon Đào\",
		\"type\" : \"Xã\",
		\"maqh\" : 612
	},
	{
		\"xaid\" : 23437,
		\"name\" : \"Xã Tân Cảnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 612
	},
	{
		\"xaid\" : 23440,
		\"name\" : \"Xã Diên Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 612
	},
	{
		\"xaid\" : 23443,
		\"name\" : \"Xã Pô Kô\",
		\"type\" : \"Xã\",
		\"maqh\" : 612
	},
	{
		\"xaid\" : 23446,
		\"name\" : \"Xã Tê Xăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 617
	},
	{
		\"xaid\" : 23449,
		\"name\" : \"Xã Văn Xuôi\",
		\"type\" : \"Xã\",
		\"maqh\" : 617
	},
	{
		\"xaid\" : 23452,
		\"name\" : \"Xã Đắk Nên\",
		\"type\" : \"Xã\",
		\"maqh\" : 613
	},
	{
		\"xaid\" : 23455,
		\"name\" : \"Xã Đắk Ring\",
		\"type\" : \"Xã\",
		\"maqh\" : 613
	},
	{
		\"xaid\" : 23458,
		\"name\" : \"Xã Măng Buk\",
		\"type\" : \"Xã\",
		\"maqh\" : 613
	},
	{
		\"xaid\" : 23461,
		\"name\" : \"Xã Đắk Tăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 613
	},
	{
		\"xaid\" : 23464,
		\"name\" : \"Xã Ngok Tem\",
		\"type\" : \"Xã\",
		\"maqh\" : 613
	},
	{
		\"xaid\" : 23467,
		\"name\" : \"Xã Pờ Ê\",
		\"type\" : \"Xã\",
		\"maqh\" : 613
	},
	{
		\"xaid\" : 23470,
		\"name\" : \"Xã Măng Cành\",
		\"type\" : \"Xã\",
		\"maqh\" : 613
	},
	{
		\"xaid\" : 23473,
		\"name\" : \"Xã Đắk Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 613
	},
	{
		\"xaid\" : 23476,
		\"name\" : \"Xã Hiếu\",
		\"type\" : \"Xã\",
		\"maqh\" : 613
	},
	{
		\"xaid\" : 23479,
		\"name\" : \"Thị trấn Đắk Rve\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 614
	},
	{
		\"xaid\" : 23482,
		\"name\" : \"Xã Đắk Kôi\",
		\"type\" : \"Xã\",
		\"maqh\" : 614
	},
	{
		\"xaid\" : 23485,
		\"name\" : \"Xã Đắk Tơ Lung\",
		\"type\" : \"Xã\",
		\"maqh\" : 614
	},
	{
		\"xaid\" : 23488,
		\"name\" : \"Xã Đắk Ruồng\",
		\"type\" : \"Xã\",
		\"maqh\" : 614
	},
	{
		\"xaid\" : 23491,
		\"name\" : \"Xã Đắk Pne\",
		\"type\" : \"Xã\",
		\"maqh\" : 614
	},
	{
		\"xaid\" : 23494,
		\"name\" : \"Xã Đắk Tờ Re\",
		\"type\" : \"Xã\",
		\"maqh\" : 614
	},
	{
		\"xaid\" : 23497,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 614
	},
	{
		\"xaid\" : 23500,
		\"name\" : \"Thị trấn Đắk Hà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 615
	},
	{
		\"xaid\" : 23503,
		\"name\" : \"Xã Đắk PXi\",
		\"type\" : \"Xã\",
		\"maqh\" : 615
	},
	{
		\"xaid\" : 23504,
		\"name\" : \"Xã Đăk Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 615
	},
	{
		\"xaid\" : 23506,
		\"name\" : \"Xã Đắk HRing\",
		\"type\" : \"Xã\",
		\"maqh\" : 615
	},
	{
		\"xaid\" : 23509,
		\"name\" : \"Xã Đắk Ui\",
		\"type\" : \"Xã\",
		\"maqh\" : 615
	},
	{
		\"xaid\" : 23510,
		\"name\" : \"Xã Đăk Ngọk\",
		\"type\" : \"Xã\",
		\"maqh\" : 615
	},
	{
		\"xaid\" : 23512,
		\"name\" : \"Xã Đắk Mar\",
		\"type\" : \"Xã\",
		\"maqh\" : 615
	},
	{
		\"xaid\" : 23515,
		\"name\" : \"Xã Ngok Wang\",
		\"type\" : \"Xã\",
		\"maqh\" : 615
	},
	{
		\"xaid\" : 23518,
		\"name\" : \"Xã Ngok Réo\",
		\"type\" : \"Xã\",
		\"maqh\" : 615
	},
	{
		\"xaid\" : 23521,
		\"name\" : \"Xã Hà Mòn\",
		\"type\" : \"Xã\",
		\"maqh\" : 615
	},
	{
		\"xaid\" : 23524,
		\"name\" : \"Xã Đắk La\",
		\"type\" : \"Xã\",
		\"maqh\" : 615
	},
	{
		\"xaid\" : 23527,
		\"name\" : \"Thị trấn Sa Thầy\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 616
	},
	{
		\"xaid\" : 23530,
		\"name\" : \"Xã Rơ Kơi\",
		\"type\" : \"Xã\",
		\"maqh\" : 616
	},
	{
		\"xaid\" : 23533,
		\"name\" : \"Xã Sa Nhơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 616
	},
	{
		\"xaid\" : 23534,
		\"name\" : \"Xã Hơ Moong\",
		\"type\" : \"Xã\",
		\"maqh\" : 616
	},
	{
		\"xaid\" : 23535,
		\"name\" : \"Xã Ia Dal\",
		\"type\" : \"Xã\",
		\"maqh\" : 618
	},
	{
		\"xaid\" : 23536,
		\"name\" : \"Xã Mô Rai\",
		\"type\" : \"Xã\",
		\"maqh\" : 616
	},
	{
		\"xaid\" : 23537,
		\"name\" : \"Xã Ia Dom\",
		\"type\" : \"Xã\",
		\"maqh\" : 618
	},
	{
		\"xaid\" : 23538,
		\"name\" : \"Xã Ia Tơi\",
		\"type\" : \"Xã\",
		\"maqh\" : 618
	},
	{
		\"xaid\" : 23539,
		\"name\" : \"Xã Sa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 616
	},
	{
		\"xaid\" : 23542,
		\"name\" : \"Xã Sa Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 616
	},
	{
		\"xaid\" : 23545,
		\"name\" : \"Xã Sa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 616
	},
	{
		\"xaid\" : 23548,
		\"name\" : \"Xã Ya Xiêr\",
		\"type\" : \"Xã\",
		\"maqh\" : 616
	},
	{
		\"xaid\" : 23551,
		\"name\" : \"Xã Ya Tăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 616
	},
	{
		\"xaid\" : 23554,
		\"name\" : \"Xã Ya ly\",
		\"type\" : \"Xã\",
		\"maqh\" : 616
	},
	{
		\"xaid\" : 23557,
		\"name\" : \"Phường Yên Đỗ\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23560,
		\"name\" : \"Phường Diên Hồng\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23563,
		\"name\" : \"Phường Ia Kring\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23566,
		\"name\" : \"Phường Hội Thương\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23569,
		\"name\" : \"Phường Hội Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23570,
		\"name\" : \"Phường Phù Đổng\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23572,
		\"name\" : \"Phường Hoa Lư\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23575,
		\"name\" : \"Phường Tây Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23578,
		\"name\" : \"Phường Thống Nhất\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23579,
		\"name\" : \"Phường Đống Đa\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23581,
		\"name\" : \"Phường Trà Bá\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23582,
		\"name\" : \"Phường Thắng Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23584,
		\"name\" : \"Phường Yên Thế\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23586,
		\"name\" : \"Phường Chi Lăng\",
		\"type\" : \"Phường\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23587,
		\"name\" : \"Xã Chư HDrông\",
		\"type\" : \"Xã\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23590,
		\"name\" : \"Xã Biển Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23593,
		\"name\" : \"Xã Tân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23596,
		\"name\" : \"Xã Trà Đa\",
		\"type\" : \"Xã\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23599,
		\"name\" : \"Xã Chư Á\",
		\"type\" : \"Xã\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23602,
		\"name\" : \"Xã An Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23605,
		\"name\" : \"Xã Diên Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23608,
		\"name\" : \"Xã Ia Kênh\",
		\"type\" : \"Xã\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23611,
		\"name\" : \"Xã Gào\",
		\"type\" : \"Xã\",
		\"maqh\" : 622
	},
	{
		\"xaid\" : 23614,
		\"name\" : \"Phường An Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 623
	},
	{
		\"xaid\" : 23617,
		\"name\" : \"Phường Tây Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 623
	},
	{
		\"xaid\" : 23620,
		\"name\" : \"Phường An Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 623
	},
	{
		\"xaid\" : 23623,
		\"name\" : \"Phường An Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 623
	},
	{
		\"xaid\" : 23626,
		\"name\" : \"Xã Tú An\",
		\"type\" : \"Xã\",
		\"maqh\" : 623
	},
	{
		\"xaid\" : 23627,
		\"name\" : \"Xã Xuân An\",
		\"type\" : \"Xã\",
		\"maqh\" : 623
	},
	{
		\"xaid\" : 23629,
		\"name\" : \"Xã Cửu An\",
		\"type\" : \"Xã\",
		\"maqh\" : 623
	},
	{
		\"xaid\" : 23630,
		\"name\" : \"Phường An Phước\",
		\"type\" : \"Phường\",
		\"maqh\" : 623
	},
	{
		\"xaid\" : 23632,
		\"name\" : \"Xã Song An\",
		\"type\" : \"Xã\",
		\"maqh\" : 623
	},
	{
		\"xaid\" : 23633,
		\"name\" : \"Phường Ngô Mây\",
		\"type\" : \"Phường\",
		\"maqh\" : 623
	},
	{
		\"xaid\" : 23635,
		\"name\" : \"Xã Thành An\",
		\"type\" : \"Xã\",
		\"maqh\" : 623
	},
	{
		\"xaid\" : 23638,
		\"name\" : \"Thị trấn KBang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23641,
		\"name\" : \"Xã Kon Pne\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23644,
		\"name\" : \"Xã Đăk Roong\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23647,
		\"name\" : \"Xã Sơn Lang\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23650,
		\"name\" : \"Xã KRong\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23653,
		\"name\" : \"Xã Sơ Pai\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23656,
		\"name\" : \"Xã Lơ Ku\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23659,
		\"name\" : \"Xã Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23660,
		\"name\" : \"Xã Đak SMar\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23662,
		\"name\" : \"Xã Nghĩa An\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23665,
		\"name\" : \"Xã Tơ Tung\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23668,
		\"name\" : \"Xã Kông Lơng Khơng\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23671,
		\"name\" : \"Xã Kông Pla\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23674,
		\"name\" : \"Xã Đăk HLơ\",
		\"type\" : \"Xã\",
		\"maqh\" : 625
	},
	{
		\"xaid\" : 23677,
		\"name\" : \"Thị trấn Đăk Đoa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23680,
		\"name\" : \"Xã Hà Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23683,
		\"name\" : \"Xã Đăk Sơmei\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23684,
		\"name\" : \"Xã Đăk Krong\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23686,
		\"name\" : \"Xã Hải Yang\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23689,
		\"name\" : \"Xã Kon Gang\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23692,
		\"name\" : \"Xã Hà Bầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23695,
		\"name\" : \"Xã Nam Yang\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23698,
		\"name\" : \"Xã K' Dang\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23701,
		\"name\" : \"Xã H' Neng\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23704,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23707,
		\"name\" : \"Xã Glar\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23710,
		\"name\" : \"Xã A Dơk\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23713,
		\"name\" : \"Xã Trang\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23714,
		\"name\" : \"Xã HNol\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23716,
		\"name\" : \"Xã Ia Pết\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23719,
		\"name\" : \"Xã Ia Băng\",
		\"type\" : \"Xã\",
		\"maqh\" : 626
	},
	{
		\"xaid\" : 23722,
		\"name\" : \"Thị trấn Phú Hòa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23725,
		\"name\" : \"Xã Hà Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23728,
		\"name\" : \"Xã Ia Khươl\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23731,
		\"name\" : \"Xã Ia Phí\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23734,
		\"name\" : \"Thị trấn Ia Ly\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23737,
		\"name\" : \"Xã Ia Mơ Nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23738,
		\"name\" : \"Xã Ia Kreng\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23740,
		\"name\" : \"Xã Đăk Tơ Ver\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23743,
		\"name\" : \"Xã Hòa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23746,
		\"name\" : \"Xã Chư Đăng Ya\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23749,
		\"name\" : \"Xã Ia Ka\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23752,
		\"name\" : \"Xã Ia Nhin\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23755,
		\"name\" : \"Xã Nghĩa Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23758,
		\"name\" : \"Xã Chư Jôr\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23761,
		\"name\" : \"Xã Nghĩa Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 627
	},
	{
		\"xaid\" : 23764,
		\"name\" : \"Thị trấn Ia Kha\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23767,
		\"name\" : \"Xã Ia Sao\",
		\"type\" : \"Xã\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23768,
		\"name\" : \"Xã Ia Yok\",
		\"type\" : \"Xã\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23770,
		\"name\" : \"Xã Ia Hrung\",
		\"type\" : \"Xã\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23771,
		\"name\" : \"Xã Ia Bă\",
		\"type\" : \"Xã\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23773,
		\"name\" : \"Xã Ia Khai\",
		\"type\" : \"Xã\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23776,
		\"name\" : \"Xã Ia KRai\",
		\"type\" : \"Xã\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23778,
		\"name\" : \"Xã Ia Grăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23779,
		\"name\" : \"Xã Ia Tô\",
		\"type\" : \"Xã\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23782,
		\"name\" : \"Xã Ia O\",
		\"type\" : \"Xã\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23785,
		\"name\" : \"Xã Ia Dêr\",
		\"type\" : \"Xã\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23788,
		\"name\" : \"Xã Ia Chia\",
		\"type\" : \"Xã\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23791,
		\"name\" : \"Xã Ia Pếch\",
		\"type\" : \"Xã\",
		\"maqh\" : 628
	},
	{
		\"xaid\" : 23794,
		\"name\" : \"Thị trấn Kon Dơng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 629
	},
	{
		\"xaid\" : 23797,
		\"name\" : \"Xã Ayun\",
		\"type\" : \"Xã\",
		\"maqh\" : 629
	},
	{
		\"xaid\" : 23798,
		\"name\" : \"Xã Đak Jơ Ta\",
		\"type\" : \"Xã\",
		\"maqh\" : 629
	},
	{
		\"xaid\" : 23799,
		\"name\" : \"Xã Đak Ta Ley\",
		\"type\" : \"Xã\",
		\"maqh\" : 629
	},
	{
		\"xaid\" : 23800,
		\"name\" : \"Xã Hà Ra\",
		\"type\" : \"Xã\",
		\"maqh\" : 629
	},
	{
		\"xaid\" : 23803,
		\"name\" : \"Xã Đăk Yă\",
		\"type\" : \"Xã\",
		\"maqh\" : 629
	},
	{
		\"xaid\" : 23806,
		\"name\" : \"Xã Đăk Djrăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 629
	},
	{
		\"xaid\" : 23809,
		\"name\" : \"Xã Lơ Pang\",
		\"type\" : \"Xã\",
		\"maqh\" : 629
	},
	{
		\"xaid\" : 23812,
		\"name\" : \"Xã Kon Thụp\",
		\"type\" : \"Xã\",
		\"maqh\" : 629
	},
	{
		\"xaid\" : 23815,
		\"name\" : \"Xã Đê Ar\",
		\"type\" : \"Xã\",
		\"maqh\" : 629
	},
	{
		\"xaid\" : 23818,
		\"name\" : \"Xã Kon Chiêng\",
		\"type\" : \"Xã\",
		\"maqh\" : 629
	},
	{
		\"xaid\" : 23821,
		\"name\" : \"Xã Đăk Trôi\",
		\"type\" : \"Xã\",
		\"maqh\" : 629
	},
	{
		\"xaid\" : 23824,
		\"name\" : \"Thị trấn Kông Chro\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23827,
		\"name\" : \"Xã Chư Krêy\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23830,
		\"name\" : \"Xã An Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23833,
		\"name\" : \"Xã Kông Yang\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23836,
		\"name\" : \"Xã Đăk Tơ Pang\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23839,
		\"name\" : \"Xã SRó\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23840,
		\"name\" : \"Xã Đắk Kơ Ning\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23842,
		\"name\" : \"Xã Đăk Song\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23843,
		\"name\" : \"Xã Đăk Pling\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23845,
		\"name\" : \"Xã Yang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23846,
		\"name\" : \"Xã Đăk Pơ Pho\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23848,
		\"name\" : \"Xã Ya Ma\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23851,
		\"name\" : \"Xã Chơ Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23854,
		\"name\" : \"Xã Yang Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 630
	},
	{
		\"xaid\" : 23857,
		\"name\" : \"Thị trấn Chư Ty\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 631
	},
	{
		\"xaid\" : 23860,
		\"name\" : \"Xã Ia Dơk\",
		\"type\" : \"Xã\",
		\"maqh\" : 631
	},
	{
		\"xaid\" : 23863,
		\"name\" : \"Xã Ia Krêl\",
		\"type\" : \"Xã\",
		\"maqh\" : 631
	},
	{
		\"xaid\" : 23866,
		\"name\" : \"Xã Ia Din\",
		\"type\" : \"Xã\",
		\"maqh\" : 631
	},
	{
		\"xaid\" : 23869,
		\"name\" : \"Xã Ia Kla\",
		\"type\" : \"Xã\",
		\"maqh\" : 631
	},
	{
		\"xaid\" : 23872,
		\"name\" : \"Xã Ia Dom\",
		\"type\" : \"Xã\",
		\"maqh\" : 631
	},
	{
		\"xaid\" : 23875,
		\"name\" : \"Xã Ia Lang\",
		\"type\" : \"Xã\",
		\"maqh\" : 631
	},
	{
		\"xaid\" : 23878,
		\"name\" : \"Xã Ia Kriêng\",
		\"type\" : \"Xã\",
		\"maqh\" : 631
	},
	{
		\"xaid\" : 23881,
		\"name\" : \"Xã Ia Pnôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 631
	},
	{
		\"xaid\" : 23884,
		\"name\" : \"Xã Ia Nan\",
		\"type\" : \"Xã\",
		\"maqh\" : 631
	},
	{
		\"xaid\" : 23887,
		\"name\" : \"Thị trấn Chư Prông\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23888,
		\"name\" : \"Xã Ia Kly\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23890,
		\"name\" : \"Xã Bình Giáo\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23893,
		\"name\" : \"Xã Ia Drăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23896,
		\"name\" : \"Xã Thăng Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23899,
		\"name\" : \"Xã Bàu Cạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23902,
		\"name\" : \"Xã Ia Phìn\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23905,
		\"name\" : \"Xã Ia Băng\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23908,
		\"name\" : \"Xã Ia Tôr\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23911,
		\"name\" : \"Xã Ia Boòng\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23914,
		\"name\" : \"Xã Ia O\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23917,
		\"name\" : \"Xã Ia Púch\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23920,
		\"name\" : \"Xã Ia Me\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23923,
		\"name\" : \"Xã Ia Vê\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23924,
		\"name\" : \"Xã Ia Bang\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23926,
		\"name\" : \"Xã Ia Pia\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23929,
		\"name\" : \"Xã Ia Ga\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23932,
		\"name\" : \"Xã Ia Lâu\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23935,
		\"name\" : \"Xã Ia Piơr\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23938,
		\"name\" : \"Xã Ia Mơ\",
		\"type\" : \"Xã\",
		\"maqh\" : 632
	},
	{
		\"xaid\" : 23941,
		\"name\" : \"Thị trấn Chư Sê\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23942,
		\"name\" : \"Thị trấn Nhơn Hoà\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 639
	},
	{
		\"xaid\" : 23944,
		\"name\" : \"Xã Ia Tiêm\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23945,
		\"name\" : \"Xã Chư Pơng\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23946,
		\"name\" : \"Xã Bar Măih\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23947,
		\"name\" : \"Xã Bờ Ngoong\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23950,
		\"name\" : \"Xã Ia Glai\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23953,
		\"name\" : \"Xã AL Bá\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23954,
		\"name\" : \"Xã Kông HTok\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23956,
		\"name\" : \"Xã AYun\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23959,
		\"name\" : \"Xã Ia HLốp\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23962,
		\"name\" : \"Xã Ia Blang\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23965,
		\"name\" : \"Xã Dun\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23966,
		\"name\" : \"Xã Ia Pal\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23968,
		\"name\" : \"Xã H Bông\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23971,
		\"name\" : \"Xã Ia Hrú\",
		\"type\" : \"Xã\",
		\"maqh\" : 639
	},
	{
		\"xaid\" : 23972,
		\"name\" : \"Xã Ia Rong\",
		\"type\" : \"Xã\",
		\"maqh\" : 639
	},
	{
		\"xaid\" : 23974,
		\"name\" : \"Xã Ia Dreng\",
		\"type\" : \"Xã\",
		\"maqh\" : 639
	},
	{
		\"xaid\" : 23977,
		\"name\" : \"Xã Ia Ko\",
		\"type\" : \"Xã\",
		\"maqh\" : 633
	},
	{
		\"xaid\" : 23978,
		\"name\" : \"Xã Ia Hla\",
		\"type\" : \"Xã\",
		\"maqh\" : 639
	},
	{
		\"xaid\" : 23980,
		\"name\" : \"Xã Chư Don\",
		\"type\" : \"Xã\",
		\"maqh\" : 639
	},
	{
		\"xaid\" : 23983,
		\"name\" : \"Xã Ia Phang\",
		\"type\" : \"Xã\",
		\"maqh\" : 639
	},
	{
		\"xaid\" : 23986,
		\"name\" : \"Xã Ia Le\",
		\"type\" : \"Xã\",
		\"maqh\" : 639
	},
	{
		\"xaid\" : 23987,
		\"name\" : \"Xã Ia BLứ\",
		\"type\" : \"Xã\",
		\"maqh\" : 639
	},
	{
		\"xaid\" : 23989,
		\"name\" : \"Xã Hà Tam\",
		\"type\" : \"Xã\",
		\"maqh\" : 634
	},
	{
		\"xaid\" : 23992,
		\"name\" : \"Xã An Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 634
	},
	{
		\"xaid\" : 23995,
		\"name\" : \"Thị trấn Đak Pơ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 634
	},
	{
		\"xaid\" : 23998,
		\"name\" : \"Xã Yang Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 634
	},
	{
		\"xaid\" : 24001,
		\"name\" : \"Xã Cư An\",
		\"type\" : \"Xã\",
		\"maqh\" : 634
	},
	{
		\"xaid\" : 24004,
		\"name\" : \"Xã Tân An\",
		\"type\" : \"Xã\",
		\"maqh\" : 634
	},
	{
		\"xaid\" : 24007,
		\"name\" : \"Xã Phú An\",
		\"type\" : \"Xã\",
		\"maqh\" : 634
	},
	{
		\"xaid\" : 24010,
		\"name\" : \"Xã Ya Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 634
	},
	{
		\"xaid\" : 24013,
		\"name\" : \"Xã Pờ Tó\",
		\"type\" : \"Xã\",
		\"maqh\" : 635
	},
	{
		\"xaid\" : 24016,
		\"name\" : \"Xã Chư Răng\",
		\"type\" : \"Xã\",
		\"maqh\" : 635
	},
	{
		\"xaid\" : 24019,
		\"name\" : \"Xã Ia KDăm\",
		\"type\" : \"Xã\",
		\"maqh\" : 635
	},
	{
		\"xaid\" : 24022,
		\"name\" : \"Xã Kim Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 635
	},
	{
		\"xaid\" : 24025,
		\"name\" : \"Xã Chư Mố\",
		\"type\" : \"Xã\",
		\"maqh\" : 635
	},
	{
		\"xaid\" : 24028,
		\"name\" : \"Xã Ia Tul\",
		\"type\" : \"Xã\",
		\"maqh\" : 635
	},
	{
		\"xaid\" : 24031,
		\"name\" : \"Xã Ia Ma Rơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 635
	},
	{
		\"xaid\" : 24034,
		\"name\" : \"Xã Ia Broăi\",
		\"type\" : \"Xã\",
		\"maqh\" : 635
	},
	{
		\"xaid\" : 24037,
		\"name\" : \"Xã Ia Trok\",
		\"type\" : \"Xã\",
		\"maqh\" : 635
	},
	{
		\"xaid\" : 24041,
		\"name\" : \"Phường Cheo Reo\",
		\"type\" : \"Phường\",
		\"maqh\" : 624
	},
	{
		\"xaid\" : 24042,
		\"name\" : \"Phường Hòa Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 624
	},
	{
		\"xaid\" : 24043,
		\"name\" : \"Thị trấn Phú Thiện\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 638
	},
	{
		\"xaid\" : 24044,
		\"name\" : \"Phường Đoàn Kết\",
		\"type\" : \"Phường\",
		\"maqh\" : 624
	},
	{
		\"xaid\" : 24045,
		\"name\" : \"Phường Sông Bờ\",
		\"type\" : \"Phường\",
		\"maqh\" : 624
	},
	{
		\"xaid\" : 24046,
		\"name\" : \"Xã Chư A Thai\",
		\"type\" : \"Xã\",
		\"maqh\" : 638
	},
	{
		\"xaid\" : 24048,
		\"name\" : \"Xã Ayun Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 638
	},
	{
		\"xaid\" : 24049,
		\"name\" : \"Xã Ia Ake\",
		\"type\" : \"Xã\",
		\"maqh\" : 638
	},
	{
		\"xaid\" : 24052,
		\"name\" : \"Xã Ia Sol\",
		\"type\" : \"Xã\",
		\"maqh\" : 638
	},
	{
		\"xaid\" : 24055,
		\"name\" : \"Xã Ia Piar\",
		\"type\" : \"Xã\",
		\"maqh\" : 638
	},
	{
		\"xaid\" : 24058,
		\"name\" : \"Xã Ia Peng\",
		\"type\" : \"Xã\",
		\"maqh\" : 638
	},
	{
		\"xaid\" : 24060,
		\"name\" : \"Xã Chrôh Pơnan\",
		\"type\" : \"Xã\",
		\"maqh\" : 638
	},
	{
		\"xaid\" : 24061,
		\"name\" : \"Xã Ia Hiao\",
		\"type\" : \"Xã\",
		\"maqh\" : 638
	},
	{
		\"xaid\" : 24064,
		\"name\" : \"Xã Ia RBol\",
		\"type\" : \"Xã\",
		\"maqh\" : 624
	},
	{
		\"xaid\" : 24065,
		\"name\" : \"Xã Chư Băh\",
		\"type\" : \"Xã\",
		\"maqh\" : 624
	},
	{
		\"xaid\" : 24067,
		\"name\" : \"Xã Ia Yeng\",
		\"type\" : \"Xã\",
		\"maqh\" : 638
	},
	{
		\"xaid\" : 24070,
		\"name\" : \"Xã Ia RTô\",
		\"type\" : \"Xã\",
		\"maqh\" : 624
	},
	{
		\"xaid\" : 24073,
		\"name\" : \"Xã Ia Sao\",
		\"type\" : \"Xã\",
		\"maqh\" : 624
	},
	{
		\"xaid\" : 24076,
		\"name\" : \"Thị trấn Phú Túc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24079,
		\"name\" : \"Xã Ia RSai\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24082,
		\"name\" : \"Xã Ia RSươm\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24085,
		\"name\" : \"Xã Chư Gu\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24088,
		\"name\" : \"Xã Đất Bằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24091,
		\"name\" : \"Xã Ia Mláh\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24094,
		\"name\" : \"Xã Chư Drăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24097,
		\"name\" : \"Xã Phú Cần\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24100,
		\"name\" : \"Xã Ia HDreh\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24103,
		\"name\" : \"Xã Ia RMok\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24106,
		\"name\" : \"Xã Chư Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24109,
		\"name\" : \"Xã Uar\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24112,
		\"name\" : \"Xã Chư Rcăm\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24115,
		\"name\" : \"Xã Krông Năng\",
		\"type\" : \"Xã\",
		\"maqh\" : 637
	},
	{
		\"xaid\" : 24118,
		\"name\" : \"Phường Tân Lập\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24121,
		\"name\" : \"Phường Tân Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24124,
		\"name\" : \"Phường Tân An\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24127,
		\"name\" : \"Phường Thống Nhất\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24130,
		\"name\" : \"Phường Thành Nhất\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24133,
		\"name\" : \"Phường Thắng Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24136,
		\"name\" : \"Phường Tân Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24139,
		\"name\" : \"Phường Thành Công\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24142,
		\"name\" : \"Phường Tân Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24145,
		\"name\" : \"Phường Tân Tiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24148,
		\"name\" : \"Phường Tự An\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24151,
		\"name\" : \"Phường Ea Tam\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24154,
		\"name\" : \"Phường Khánh Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24157,
		\"name\" : \"Xã Hòa Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24160,
		\"name\" : \"Xã Cư ÊBur\",
		\"type\" : \"Xã\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24163,
		\"name\" : \"Xã Ea Tu\",
		\"type\" : \"Xã\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24166,
		\"name\" : \"Xã Hòa Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24169,
		\"name\" : \"Xã Ea Kao\",
		\"type\" : \"Xã\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24172,
		\"name\" : \"Xã Hòa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24175,
		\"name\" : \"Xã Hòa Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24178,
		\"name\" : \"Xã Hòa Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 643
	},
	{
		\"xaid\" : 24181,
		\"name\" : \"Thị trấn Ea Drăng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 645
	},
	{
		\"xaid\" : 24184,
		\"name\" : \"Xã Ea H'leo\",
		\"type\" : \"Xã\",
		\"maqh\" : 645
	},
	{
		\"xaid\" : 24187,
		\"name\" : \"Xã Ea Sol\",
		\"type\" : \"Xã\",
		\"maqh\" : 645
	},
	{
		\"xaid\" : 24190,
		\"name\" : \"Xã Ea Ral\",
		\"type\" : \"Xã\",
		\"maqh\" : 645
	},
	{
		\"xaid\" : 24193,
		\"name\" : \"Xã Ea Wy\",
		\"type\" : \"Xã\",
		\"maqh\" : 645
	},
	{
		\"xaid\" : 24194,
		\"name\" : \"Xã Cư A Mung\",
		\"type\" : \"Xã\",
		\"maqh\" : 645
	},
	{
		\"xaid\" : 24196,
		\"name\" : \"Xã Cư Mốt\",
		\"type\" : \"Xã\",
		\"maqh\" : 645
	},
	{
		\"xaid\" : 24199,
		\"name\" : \"Xã Ea Hiao\",
		\"type\" : \"Xã\",
		\"maqh\" : 645
	},
	{
		\"xaid\" : 24202,
		\"name\" : \"Xã Ea Khal\",
		\"type\" : \"Xã\",
		\"maqh\" : 645
	},
	{
		\"xaid\" : 24205,
		\"name\" : \"Xã Dlê Yang\",
		\"type\" : \"Xã\",
		\"maqh\" : 645
	},
	{
		\"xaid\" : 24207,
		\"name\" : \"Xã Ea Tir\",
		\"type\" : \"Xã\",
		\"maqh\" : 645
	},
	{
		\"xaid\" : 24208,
		\"name\" : \"Xã Ea Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 645
	},
	{
		\"xaid\" : 24211,
		\"name\" : \"Thị trấn Ea Súp\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 646
	},
	{
		\"xaid\" : 24214,
		\"name\" : \"Xã Ia Lốp\",
		\"type\" : \"Xã\",
		\"maqh\" : 646
	},
	{
		\"xaid\" : 24215,
		\"name\" : \"Xã Ia JLơi\",
		\"type\" : \"Xã\",
		\"maqh\" : 646
	},
	{
		\"xaid\" : 24217,
		\"name\" : \"Xã Ea Rốk\",
		\"type\" : \"Xã\",
		\"maqh\" : 646
	},
	{
		\"xaid\" : 24220,
		\"name\" : \"Xã Ya Tờ Mốt\",
		\"type\" : \"Xã\",
		\"maqh\" : 646
	},
	{
		\"xaid\" : 24221,
		\"name\" : \"Xã Ia RVê\",
		\"type\" : \"Xã\",
		\"maqh\" : 646
	},
	{
		\"xaid\" : 24223,
		\"name\" : \"Xã Ea Lê\",
		\"type\" : \"Xã\",
		\"maqh\" : 646
	},
	{
		\"xaid\" : 24226,
		\"name\" : \"Xã Cư KBang\",
		\"type\" : \"Xã\",
		\"maqh\" : 646
	},
	{
		\"xaid\" : 24229,
		\"name\" : \"Xã Ea Bung\",
		\"type\" : \"Xã\",
		\"maqh\" : 646
	},
	{
		\"xaid\" : 24232,
		\"name\" : \"Xã Cư M'Lan\",
		\"type\" : \"Xã\",
		\"maqh\" : 646
	},
	{
		\"xaid\" : 24235,
		\"name\" : \"Xã Krông Na\",
		\"type\" : \"Xã\",
		\"maqh\" : 647
	},
	{
		\"xaid\" : 24238,
		\"name\" : \"Xã Ea Huar\",
		\"type\" : \"Xã\",
		\"maqh\" : 647
	},
	{
		\"xaid\" : 24241,
		\"name\" : \"Xã Ea Wer\",
		\"type\" : \"Xã\",
		\"maqh\" : 647
	},
	{
		\"xaid\" : 24244,
		\"name\" : \"Xã Tân Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 647
	},
	{
		\"xaid\" : 24247,
		\"name\" : \"Xã Cuôr KNia\",
		\"type\" : \"Xã\",
		\"maqh\" : 647
	},
	{
		\"xaid\" : 24250,
		\"name\" : \"Xã Ea Bar\",
		\"type\" : \"Xã\",
		\"maqh\" : 647
	},
	{
		\"xaid\" : 24253,
		\"name\" : \"Xã Ea Nuôl\",
		\"type\" : \"Xã\",
		\"maqh\" : 647
	},
	{
		\"xaid\" : 24256,
		\"name\" : \"Thị trấn Ea Pốk\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24259,
		\"name\" : \"Thị trấn Quảng Phú\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24262,
		\"name\" : \"Xã Quảng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24264,
		\"name\" : \"Xã Ea Kuêh\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24265,
		\"name\" : \"Xã Ea Kiết\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24268,
		\"name\" : \"Xã Ea Tar\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24271,
		\"name\" : \"Xã Cư Dliê M'nông\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24274,
		\"name\" : \"Xã Ea H'đinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24277,
		\"name\" : \"Xã Ea Tul\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24280,
		\"name\" : \"Xã Ea KPam\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24283,
		\"name\" : \"Xã Ea M'DRóh\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24286,
		\"name\" : \"Xã Quảng Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24289,
		\"name\" : \"Xã Cư M'gar\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24292,
		\"name\" : \"Xã Ea D'Rơng\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24295,
		\"name\" : \"Xã Ea M'nang\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24298,
		\"name\" : \"Xã Cư Suê\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24301,
		\"name\" : \"Xã Cuor Đăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 648
	},
	{
		\"xaid\" : 24305,
		\"name\" : \"Phường An Lạc\",
		\"type\" : \"Phường\",
		\"maqh\" : 644
	},
	{
		\"xaid\" : 24307,
		\"name\" : \"Xã Cư Né\",
		\"type\" : \"Xã\",
		\"maqh\" : 649
	},
	{
		\"xaid\" : 24308,
		\"name\" : \"Phường An Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 644
	},
	{
		\"xaid\" : 24310,
		\"name\" : \"Xã Chư KBô\",
		\"type\" : \"Xã\",
		\"maqh\" : 649
	},
	{
		\"xaid\" : 24311,
		\"name\" : \"Phường Thiện An\",
		\"type\" : \"Phường\",
		\"maqh\" : 644
	},
	{
		\"xaid\" : 24313,
		\"name\" : \"Xã Cư Pơng\",
		\"type\" : \"Xã\",
		\"maqh\" : 649
	},
	{
		\"xaid\" : 24314,
		\"name\" : \"Xã Ea Sin\",
		\"type\" : \"Xã\",
		\"maqh\" : 649
	},
	{
		\"xaid\" : 24316,
		\"name\" : \"Xã Pơng Drang\",
		\"type\" : \"Xã\",
		\"maqh\" : 649
	},
	{
		\"xaid\" : 24317,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 649
	},
	{
		\"xaid\" : 24318,
		\"name\" : \"Phường Đạt Hiếu\",
		\"type\" : \"Phường\",
		\"maqh\" : 644
	},
	{
		\"xaid\" : 24319,
		\"name\" : \"Xã Ea Ngai\",
		\"type\" : \"Xã\",
		\"maqh\" : 649
	},
	{
		\"xaid\" : 24322,
		\"name\" : \"Phường Đoàn Kết\",
		\"type\" : \"Phường\",
		\"maqh\" : 644
	},
	{
		\"xaid\" : 24325,
		\"name\" : \"Xã Ea Blang\",
		\"type\" : \"Xã\",
		\"maqh\" : 644
	},
	{
		\"xaid\" : 24328,
		\"name\" : \"Xã Ea Drông\",
		\"type\" : \"Xã\",
		\"maqh\" : 644
	},
	{
		\"xaid\" : 24331,
		\"name\" : \"Phường Thống Nhất\",
		\"type\" : \"Phường\",
		\"maqh\" : 644
	},
	{
		\"xaid\" : 24332,
		\"name\" : \"Phường Bình Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 644
	},
	{
		\"xaid\" : 24334,
		\"name\" : \"Xã Ea Siên\",
		\"type\" : \"Xã\",
		\"maqh\" : 644
	},
	{
		\"xaid\" : 24337,
		\"name\" : \"Xã Bình Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 644
	},
	{
		\"xaid\" : 24340,
		\"name\" : \"Xã Cư Bao\",
		\"type\" : \"Xã\",
		\"maqh\" : 644
	},
	{
		\"xaid\" : 24343,
		\"name\" : \"Thị trấn Krông Năng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 650
	},
	{
		\"xaid\" : 24346,
		\"name\" : \"Xã ĐLiê Ya\",
		\"type\" : \"Xã\",
		\"maqh\" : 650
	},
	{
		\"xaid\" : 24349,
		\"name\" : \"Xã Ea Tóh\",
		\"type\" : \"Xã\",
		\"maqh\" : 650
	},
	{
		\"xaid\" : 24352,
		\"name\" : \"Xã Ea Tam\",
		\"type\" : \"Xã\",
		\"maqh\" : 650
	},
	{
		\"xaid\" : 24355,
		\"name\" : \"Xã Phú Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 650
	},
	{
		\"xaid\" : 24358,
		\"name\" : \"Xã Tam Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 650
	},
	{
		\"xaid\" : 24359,
		\"name\" : \"Xã Ea Puk\",
		\"type\" : \"Xã\",
		\"maqh\" : 650
	},
	{
		\"xaid\" : 24360,
		\"name\" : \"Xã Ea Dăh\",
		\"type\" : \"Xã\",
		\"maqh\" : 650
	},
	{
		\"xaid\" : 24361,
		\"name\" : \"Xã Ea Hồ\",
		\"type\" : \"Xã\",
		\"maqh\" : 650
	},
	{
		\"xaid\" : 24364,
		\"name\" : \"Xã Phú Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 650
	},
	{
		\"xaid\" : 24367,
		\"name\" : \"Xã Cư Klông\",
		\"type\" : \"Xã\",
		\"maqh\" : 650
	},
	{
		\"xaid\" : 24370,
		\"name\" : \"Xã Ea Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 650
	},
	{
		\"xaid\" : 24373,
		\"name\" : \"Thị trấn Ea Kar\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24376,
		\"name\" : \"Thị trấn Ea Knốp\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24379,
		\"name\" : \"Xã Ea Sô\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24380,
		\"name\" : \"Xã Ea Sar\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24382,
		\"name\" : \"Xã Xuân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24385,
		\"name\" : \"Xã Cư Huê\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24388,
		\"name\" : \"Xã Ea Tih\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24391,
		\"name\" : \"Xã Ea Đar\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24394,
		\"name\" : \"Xã Ea Kmút\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24397,
		\"name\" : \"Xã Cư Ni\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24400,
		\"name\" : \"Xã Ea Păl\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24401,
		\"name\" : \"Xã Cư Prông\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24403,
		\"name\" : \"Xã Ea Ô\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24404,
		\"name\" : \"Xã Cư ELang\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24406,
		\"name\" : \"Xã Cư Bông\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24409,
		\"name\" : \"Xã Cư Jang\",
		\"type\" : \"Xã\",
		\"maqh\" : 651
	},
	{
		\"xaid\" : 24412,
		\"name\" : \"Thị trấn M'Đrắk\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24415,
		\"name\" : \"Xã Cư Prao\",
		\"type\" : \"Xã\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24418,
		\"name\" : \"Xã Ea Pil\",
		\"type\" : \"Xã\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24421,
		\"name\" : \"Xã Ea Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24424,
		\"name\" : \"Xã Ea H'MLay\",
		\"type\" : \"Xã\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24427,
		\"name\" : \"Xã Krông Jing\",
		\"type\" : \"Xã\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24430,
		\"name\" : \"Xã Ea M' Doal\",
		\"type\" : \"Xã\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24433,
		\"name\" : \"Xã Ea Riêng\",
		\"type\" : \"Xã\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24436,
		\"name\" : \"Xã Cư M'ta\",
		\"type\" : \"Xã\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24439,
		\"name\" : \"Xã Cư K Róa\",
		\"type\" : \"Xã\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24442,
		\"name\" : \"Xã Krông Á\",
		\"type\" : \"Xã\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24444,
		\"name\" : \"Xã Cư San\",
		\"type\" : \"Xã\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24445,
		\"name\" : \"Xã Ea Trang\",
		\"type\" : \"Xã\",
		\"maqh\" : 652
	},
	{
		\"xaid\" : 24448,
		\"name\" : \"Thị trấn Krông Kmar\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24451,
		\"name\" : \"Xã Dang Kang\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24454,
		\"name\" : \"Xã Cư KTy\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24457,
		\"name\" : \"Xã Hòa Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24460,
		\"name\" : \"Xã Hòa Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24463,
		\"name\" : \"Xã Hòa Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24466,
		\"name\" : \"Xã Hòa Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24469,
		\"name\" : \"Xã Yang Reh\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24472,
		\"name\" : \"Xã Ea Trul\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24475,
		\"name\" : \"Xã Khuê Ngọc Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24478,
		\"name\" : \"Xã Cư Pui\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24481,
		\"name\" : \"Xã Hòa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24484,
		\"name\" : \"Xã Cư Drăm\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24487,
		\"name\" : \"Xã Yang Mao\",
		\"type\" : \"Xã\",
		\"maqh\" : 653
	},
	{
		\"xaid\" : 24490,
		\"name\" : \"Thị trấn Phước An\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24493,
		\"name\" : \"Xã KRông Búk\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24496,
		\"name\" : \"Xã Ea Kly\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24499,
		\"name\" : \"Xã Ea Kênh\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24502,
		\"name\" : \"Xã Ea Phê\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24505,
		\"name\" : \"Xã Ea KNuec\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24508,
		\"name\" : \"Xã Ea Yông\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24511,
		\"name\" : \"Xã Hòa An\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24514,
		\"name\" : \"Xã Ea Kuăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24517,
		\"name\" : \"Xã Hòa Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24520,
		\"name\" : \"Xã Ea Hiu\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24523,
		\"name\" : \"Xã Hòa Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24526,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24529,
		\"name\" : \"Xã Vụ Bổn\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24532,
		\"name\" : \"Xã Ea Uy\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24535,
		\"name\" : \"Xã Ea Yiêng\",
		\"type\" : \"Xã\",
		\"maqh\" : 654
	},
	{
		\"xaid\" : 24538,
		\"name\" : \"Thị trấn Buôn Trấp\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 655
	},
	{
		\"xaid\" : 24540,
		\"name\" : \"Xã Ea Ning\",
		\"type\" : \"Xã\",
		\"maqh\" : 657
	},
	{
		\"xaid\" : 24541,
		\"name\" : \"Xã Cư Ê Wi\",
		\"type\" : \"Xã\",
		\"maqh\" : 657
	},
	{
		\"xaid\" : 24544,
		\"name\" : \"Xã Ea Ktur\",
		\"type\" : \"Xã\",
		\"maqh\" : 657
	},
	{
		\"xaid\" : 24547,
		\"name\" : \"Xã Ea Tiêu\",
		\"type\" : \"Xã\",
		\"maqh\" : 657
	},
	{
		\"xaid\" : 24550,
		\"name\" : \"Xã Ea BHốk\",
		\"type\" : \"Xã\",
		\"maqh\" : 657
	},
	{
		\"xaid\" : 24553,
		\"name\" : \"Xã Ea Hu\",
		\"type\" : \"Xã\",
		\"maqh\" : 657
	},
	{
		\"xaid\" : 24556,
		\"name\" : \"Xã Dray Sáp\",
		\"type\" : \"Xã\",
		\"maqh\" : 655
	},
	{
		\"xaid\" : 24559,
		\"name\" : \"Xã Ea Na\",
		\"type\" : \"Xã\",
		\"maqh\" : 655
	},
	{
		\"xaid\" : 24561,
		\"name\" : \"Xã Dray Bhăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 657
	},
	{
		\"xaid\" : 24562,
		\"name\" : \"Xã Hòa Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 657
	},
	{
		\"xaid\" : 24565,
		\"name\" : \"Xã Ea Bông\",
		\"type\" : \"Xã\",
		\"maqh\" : 655
	},
	{
		\"xaid\" : 24568,
		\"name\" : \"Xã Băng A Drênh\",
		\"type\" : \"Xã\",
		\"maqh\" : 655
	},
	{
		\"xaid\" : 24571,
		\"name\" : \"Xã Dur KMăl\",
		\"type\" : \"Xã\",
		\"maqh\" : 655
	},
	{
		\"xaid\" : 24574,
		\"name\" : \"Xã Bình Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 655
	},
	{
		\"xaid\" : 24577,
		\"name\" : \"Xã Quảng Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 655
	},
	{
		\"xaid\" : 24580,
		\"name\" : \"Thị trấn Liên Sơn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 656
	},
	{
		\"xaid\" : 24583,
		\"name\" : \"Xã Yang Tao\",
		\"type\" : \"Xã\",
		\"maqh\" : 656
	},
	{
		\"xaid\" : 24586,
		\"name\" : \"Xã Bông Krang\",
		\"type\" : \"Xã\",
		\"maqh\" : 656
	},
	{
		\"xaid\" : 24589,
		\"name\" : \"Xã Đắk Liêng\",
		\"type\" : \"Xã\",
		\"maqh\" : 656
	},
	{
		\"xaid\" : 24592,
		\"name\" : \"Xã Buôn Triết\",
		\"type\" : \"Xã\",
		\"maqh\" : 656
	},
	{
		\"xaid\" : 24595,
		\"name\" : \"Xã Buôn Tría\",
		\"type\" : \"Xã\",
		\"maqh\" : 656
	},
	{
		\"xaid\" : 24598,
		\"name\" : \"Xã Đắk Phơi\",
		\"type\" : \"Xã\",
		\"maqh\" : 656
	},
	{
		\"xaid\" : 24601,
		\"name\" : \"Xã Đắk Nuê\",
		\"type\" : \"Xã\",
		\"maqh\" : 656
	},
	{
		\"xaid\" : 24604,
		\"name\" : \"Xã Krông Nô\",
		\"type\" : \"Xã\",
		\"maqh\" : 656
	},
	{
		\"xaid\" : 24607,
		\"name\" : \"Xã Nam Ka\",
		\"type\" : \"Xã\",
		\"maqh\" : 656
	},
	{
		\"xaid\" : 24610,
		\"name\" : \"Xã Ea R'Bin\",
		\"type\" : \"Xã\",
		\"maqh\" : 656
	},
	{
		\"xaid\" : 24611,
		\"name\" : \"Phường Nghĩa Đức\",
		\"type\" : \"Phường\",
		\"maqh\" : 660
	},
	{
		\"xaid\" : 24612,
		\"name\" : \"Phường Nghĩa Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 660
	},
	{
		\"xaid\" : 24614,
		\"name\" : \"Phường Nghĩa Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 660
	},
	{
		\"xaid\" : 24615,
		\"name\" : \"Phường Nghĩa Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 660
	},
	{
		\"xaid\" : 24616,
		\"name\" : \"Xã Quảng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 661
	},
	{
		\"xaid\" : 24617,
		\"name\" : \"Phường Nghĩa Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 660
	},
	{
		\"xaid\" : 24618,
		\"name\" : \"Xã Đăk R'Moan\",
		\"type\" : \"Xã\",
		\"maqh\" : 660
	},
	{
		\"xaid\" : 24619,
		\"name\" : \"Xã Quảng Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 660
	},
	{
		\"xaid\" : 24620,
		\"name\" : \"Xã Quảng Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 661
	},
	{
		\"xaid\" : 24622,
		\"name\" : \"Xã Đắk Ha\",
		\"type\" : \"Xã\",
		\"maqh\" : 661
	},
	{
		\"xaid\" : 24625,
		\"name\" : \"Xã Đắk R'Măng\",
		\"type\" : \"Xã\",
		\"maqh\" : 661
	},
	{
		\"xaid\" : 24628,
		\"name\" : \"Xã Đắk Nia\",
		\"type\" : \"Xã\",
		\"maqh\" : 660
	},
	{
		\"xaid\" : 24631,
		\"name\" : \"Xã Quảng Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 661
	},
	{
		\"xaid\" : 24634,
		\"name\" : \"Xã Đắk Plao\",
		\"type\" : \"Xã\",
		\"maqh\" : 661
	},
	{
		\"xaid\" : 24637,
		\"name\" : \"Xã Đắk Som\",
		\"type\" : \"Xã\",
		\"maqh\" : 661
	},
	{
		\"xaid\" : 24640,
		\"name\" : \"Thị trấn Ea T'Ling\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 662
	},
	{
		\"xaid\" : 24643,
		\"name\" : \"Xã Đắk Wil\",
		\"type\" : \"Xã\",
		\"maqh\" : 662
	},
	{
		\"xaid\" : 24646,
		\"name\" : \"Xã Ea Pô\",
		\"type\" : \"Xã\",
		\"maqh\" : 662
	},
	{
		\"xaid\" : 24649,
		\"name\" : \"Xã Nam Dong\",
		\"type\" : \"Xã\",
		\"maqh\" : 662
	},
	{
		\"xaid\" : 24652,
		\"name\" : \"Xã Đắk DRông\",
		\"type\" : \"Xã\",
		\"maqh\" : 662
	},
	{
		\"xaid\" : 24655,
		\"name\" : \"Xã Tâm Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 662
	},
	{
		\"xaid\" : 24658,
		\"name\" : \"Xã Cư Knia\",
		\"type\" : \"Xã\",
		\"maqh\" : 662
	},
	{
		\"xaid\" : 24661,
		\"name\" : \"Xã Trúc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 662
	},
	{
		\"xaid\" : 24664,
		\"name\" : \"Thị trấn Đắk Mil\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 663
	},
	{
		\"xaid\" : 24667,
		\"name\" : \"Xã  Đắk Lao\",
		\"type\" : \"Xã\",
		\"maqh\" : 663
	},
	{
		\"xaid\" : 24670,
		\"name\" : \"Xã Đắk R'La\",
		\"type\" : \"Xã\",
		\"maqh\" : 663
	},
	{
		\"xaid\" : 24673,
		\"name\" : \"Xã Đắk Gằn\",
		\"type\" : \"Xã\",
		\"maqh\" : 663
	},
	{
		\"xaid\" : 24676,
		\"name\" : \"Xã Đức Mạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 663
	},
	{
		\"xaid\" : 24677,
		\"name\" : \"Xã Đắk N'Drót\",
		\"type\" : \"Xã\",
		\"maqh\" : 663
	},
	{
		\"xaid\" : 24678,
		\"name\" : \"Xã Long Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 663
	},
	{
		\"xaid\" : 24679,
		\"name\" : \"Xã Đắk Sắk\",
		\"type\" : \"Xã\",
		\"maqh\" : 663
	},
	{
		\"xaid\" : 24682,
		\"name\" : \"Xã Thuận An\",
		\"type\" : \"Xã\",
		\"maqh\" : 663
	},
	{
		\"xaid\" : 24685,
		\"name\" : \"Xã Đức Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 663
	},
	{
		\"xaid\" : 24688,
		\"name\" : \"Thị trấn Đắk Mâm\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 664
	},
	{
		\"xaid\" : 24691,
		\"name\" : \"Xã Đắk Sôr\",
		\"type\" : \"Xã\",
		\"maqh\" : 664
	},
	{
		\"xaid\" : 24692,
		\"name\" : \"Xã Nam Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 664
	},
	{
		\"xaid\" : 24694,
		\"name\" : \"Xã Buôn Choah\",
		\"type\" : \"Xã\",
		\"maqh\" : 664
	},
	{
		\"xaid\" : 24697,
		\"name\" : \"Xã Nam Đà\",
		\"type\" : \"Xã\",
		\"maqh\" : 664
	},
	{
		\"xaid\" : 24699,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 664
	},
	{
		\"xaid\" : 24700,
		\"name\" : \"Xã Đắk Drô\",
		\"type\" : \"Xã\",
		\"maqh\" : 664
	},
	{
		\"xaid\" : 24703,
		\"name\" : \"Xã Nâm Nung\",
		\"type\" : \"Xã\",
		\"maqh\" : 664
	},
	{
		\"xaid\" : 24706,
		\"name\" : \"Xã Đức Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 664
	},
	{
		\"xaid\" : 24709,
		\"name\" : \"Xã Đắk Nang\",
		\"type\" : \"Xã\",
		\"maqh\" : 664
	},
	{
		\"xaid\" : 24712,
		\"name\" : \"Xã Quảng Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 664
	},
	{
		\"xaid\" : 24715,
		\"name\" : \"Xã Nâm N'Đir\",
		\"type\" : \"Xã\",
		\"maqh\" : 664
	},
	{
		\"xaid\" : 24717,
		\"name\" : \"Thị trấn Đức An\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 665
	},
	{
		\"xaid\" : 24718,
		\"name\" : \"Xã Đắk Môl\",
		\"type\" : \"Xã\",
		\"maqh\" : 665
	},
	{
		\"xaid\" : 24719,
		\"name\" : \"Xã Đắk Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 665
	},
	{
		\"xaid\" : 24721,
		\"name\" : \"Xã Nam Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 665
	},
	{
		\"xaid\" : 24722,
		\"name\" : \"Xã Thuận Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 665
	},
	{
		\"xaid\" : 24724,
		\"name\" : \"Xã Thuận Hạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 665
	},
	{
		\"xaid\" : 24727,
		\"name\" : \"Xã Đắk N'Dung\",
		\"type\" : \"Xã\",
		\"maqh\" : 665
	},
	{
		\"xaid\" : 24728,
		\"name\" : \"Xã Nâm N'Jang\",
		\"type\" : \"Xã\",
		\"maqh\" : 665
	},
	{
		\"xaid\" : 24730,
		\"name\" : \"Xã Trường Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 665
	},
	{
		\"xaid\" : 24733,
		\"name\" : \"Thị trấn Kiến Đức\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 666
	},
	{
		\"xaid\" : 24736,
		\"name\" : \"Xã Quảng Trực\",
		\"type\" : \"Xã\",
		\"maqh\" : 667
	},
	{
		\"xaid\" : 24739,
		\"name\" : \"Xã Đắk Búk So\",
		\"type\" : \"Xã\",
		\"maqh\" : 667
	},
	{
		\"xaid\" : 24740,
		\"name\" : \"Xã Quảng Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 667
	},
	{
		\"xaid\" : 24742,
		\"name\" : \"Xã Đắk R'Tíh\",
		\"type\" : \"Xã\",
		\"maqh\" : 667
	},
	{
		\"xaid\" : 24745,
		\"name\" : \"Xã Quảng Tín\",
		\"type\" : \"Xã\",
		\"maqh\" : 666
	},
	{
		\"xaid\" : 24746,
		\"name\" : \"Xã Đắk Ngo\",
		\"type\" : \"Xã\",
		\"maqh\" : 667
	},
	{
		\"xaid\" : 24748,
		\"name\" : \"Xã Quảng Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 667
	},
	{
		\"xaid\" : 24750,
		\"name\" : \"Xã Đắk Wer\",
		\"type\" : \"Xã\",
		\"maqh\" : 666
	},
	{
		\"xaid\" : 24751,
		\"name\" : \"Xã Nhân Cơ\",
		\"type\" : \"Xã\",
		\"maqh\" : 666
	},
	{
		\"xaid\" : 24754,
		\"name\" : \"Xã Kiến Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 666
	},
	{
		\"xaid\" : 24756,
		\"name\" : \"Xã Nghĩa Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 666
	},
	{
		\"xaid\" : 24757,
		\"name\" : \"Xã Đạo Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 666
	},
	{
		\"xaid\" : 24760,
		\"name\" : \"Xã Đắk Sin\",
		\"type\" : \"Xã\",
		\"maqh\" : 666
	},
	{
		\"xaid\" : 24761,
		\"name\" : \"Xã Hưng Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 666
	},
	{
		\"xaid\" : 24763,
		\"name\" : \"Xã Đắk Ru\",
		\"type\" : \"Xã\",
		\"maqh\" : 666
	},
	{
		\"xaid\" : 24766,
		\"name\" : \"Xã Nhân Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 666
	},
	{
		\"xaid\" : 24769,
		\"name\" : \"Phường 7\",
		\"type\" : \"Phường\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24772,
		\"name\" : \"Phường 8\",
		\"type\" : \"Phường\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24775,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24778,
		\"name\" : \"Phường 9\",
		\"type\" : \"Phường\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24781,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24784,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24787,
		\"name\" : \"Phường 6\",
		\"type\" : \"Phường\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24790,
		\"name\" : \"Phường 5\",
		\"type\" : \"Phường\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24793,
		\"name\" : \"Phường 4\",
		\"type\" : \"Phường\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24796,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24799,
		\"name\" : \"Phường 11\",
		\"type\" : \"Phường\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24802,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24805,
		\"name\" : \"Xã Xuân Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24808,
		\"name\" : \"Xã Tà Nung\",
		\"type\" : \"Xã\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24810,
		\"name\" : \"Xã Trạm Hành\",
		\"type\" : \"Xã\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24811,
		\"name\" : \"Xã Xuân Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 672
	},
	{
		\"xaid\" : 24814,
		\"name\" : \"Phường Lộc Phát\",
		\"type\" : \"Phường\",
		\"maqh\" : 673
	},
	{
		\"xaid\" : 24817,
		\"name\" : \"Phường Lộc Tiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 673
	},
	{
		\"xaid\" : 24820,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 673
	},
	{
		\"xaid\" : 24823,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 673
	},
	{
		\"xaid\" : 24826,
		\"name\" : \"Phường B'lao\",
		\"type\" : \"Phường\",
		\"maqh\" : 673
	},
	{
		\"xaid\" : 24829,
		\"name\" : \"Phường Lộc Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 673
	},
	{
		\"xaid\" : 24832,
		\"name\" : \"Xã Đạm Bri\",
		\"type\" : \"Xã\",
		\"maqh\" : 673
	},
	{
		\"xaid\" : 24835,
		\"name\" : \"Xã Lộc Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 673
	},
	{
		\"xaid\" : 24838,
		\"name\" : \"Xã Lộc Nga\",
		\"type\" : \"Xã\",
		\"maqh\" : 673
	},
	{
		\"xaid\" : 24841,
		\"name\" : \"Xã Lộc Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 673
	},
	{
		\"xaid\" : 24844,
		\"name\" : \"Xã Đại Lào\",
		\"type\" : \"Xã\",
		\"maqh\" : 673
	},
	{
		\"xaid\" : 24846,
		\"name\" : \"Thị trấn Lạc Dương\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 675
	},
	{
		\"xaid\" : 24847,
		\"name\" : \"Xã Đạ Chais\",
		\"type\" : \"Xã\",
		\"maqh\" : 675
	},
	{
		\"xaid\" : 24848,
		\"name\" : \"Xã Đạ Nhim\",
		\"type\" : \"Xã\",
		\"maqh\" : 675
	},
	{
		\"xaid\" : 24850,
		\"name\" : \"Xã Đưng KNớ\",
		\"type\" : \"Xã\",
		\"maqh\" : 675
	},
	{
		\"xaid\" : 24853,
		\"name\" : \"Xã Đạ Tông\",
		\"type\" : \"Xã\",
		\"maqh\" : 674
	},
	{
		\"xaid\" : 24856,
		\"name\" : \"Xã Đạ Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 674
	},
	{
		\"xaid\" : 24859,
		\"name\" : \"Xã Đạ M' Rong\",
		\"type\" : \"Xã\",
		\"maqh\" : 674
	},
	{
		\"xaid\" : 24862,
		\"name\" : \"Xã Lát\",
		\"type\" : \"Xã\",
		\"maqh\" : 675
	},
	{
		\"xaid\" : 24865,
		\"name\" : \"Xã Đạ Sar\",
		\"type\" : \"Xã\",
		\"maqh\" : 675
	},
	{
		\"xaid\" : 24868,
		\"name\" : \"Thị trấn Nam Ban\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24871,
		\"name\" : \"Thị trấn Đinh Văn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24874,
		\"name\" : \"Xã Liêng Srônh\",
		\"type\" : \"Xã\",
		\"maqh\" : 674
	},
	{
		\"xaid\" : 24875,
		\"name\" : \"Xã Đạ Rsal\",
		\"type\" : \"Xã\",
		\"maqh\" : 674
	},
	{
		\"xaid\" : 24877,
		\"name\" : \"Xã Rô Men\",
		\"type\" : \"Xã\",
		\"maqh\" : 674
	},
	{
		\"xaid\" : 24880,
		\"name\" : \"Xã Phú Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24883,
		\"name\" : \"Xã Phi Tô\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24886,
		\"name\" : \"Xã Phi Liêng\",
		\"type\" : \"Xã\",
		\"maqh\" : 674
	},
	{
		\"xaid\" : 24889,
		\"name\" : \"Xã Đạ K' Nàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 674
	},
	{
		\"xaid\" : 24892,
		\"name\" : \"Xã Mê Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24895,
		\"name\" : \"Xã Đạ Đờn\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24898,
		\"name\" : \"Xã Phúc Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24901,
		\"name\" : \"Xã Đông Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24904,
		\"name\" : \"Xã Gia Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24907,
		\"name\" : \"Xã Tân Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24910,
		\"name\" : \"Xã Tân Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24913,
		\"name\" : \"Xã Hoài Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24916,
		\"name\" : \"Xã Tân Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24919,
		\"name\" : \"Xã Liên Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24922,
		\"name\" : \"Xã Đan Phượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24925,
		\"name\" : \"Xã Nam Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 676
	},
	{
		\"xaid\" : 24928,
		\"name\" : \"Thị trấn D'Ran\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 677
	},
	{
		\"xaid\" : 24931,
		\"name\" : \"Thị trấn Thạnh Mỹ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 677
	},
	{
		\"xaid\" : 24934,
		\"name\" : \"Xã Lạc Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 677
	},
	{
		\"xaid\" : 24937,
		\"name\" : \"Xã Đạ Ròn\",
		\"type\" : \"Xã\",
		\"maqh\" : 677
	},
	{
		\"xaid\" : 24940,
		\"name\" : \"Xã Lạc Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 677
	},
	{
		\"xaid\" : 24943,
		\"name\" : \"Xã Ka Đô\",
		\"type\" : \"Xã\",
		\"maqh\" : 677
	},
	{
		\"xaid\" : 24946,
		\"name\" : \"Xã Quảng Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 677
	},
	{
		\"xaid\" : 24949,
		\"name\" : \"Xã Ka Đơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 677
	},
	{
		\"xaid\" : 24952,
		\"name\" : \"Xã Tu Tra\",
		\"type\" : \"Xã\",
		\"maqh\" : 677
	},
	{
		\"xaid\" : 24955,
		\"name\" : \"Xã Pró\",
		\"type\" : \"Xã\",
		\"maqh\" : 677
	},
	{
		\"xaid\" : 24958,
		\"name\" : \"Thị trấn Liên Nghĩa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24961,
		\"name\" : \"Xã Hiệp An\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24964,
		\"name\" : \"Xã Liên Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24967,
		\"name\" : \"Xã Hiệp Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24970,
		\"name\" : \"Xã Bình Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24973,
		\"name\" : \"Xã N'Thol Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24976,
		\"name\" : \"Xã Tân Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24979,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24982,
		\"name\" : \"Xã Phú Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24985,
		\"name\" : \"Xã Ninh Gia\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24988,
		\"name\" : \"Xã Tà Năng\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24989,
		\"name\" : \"Xã Đa Quyn\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24991,
		\"name\" : \"Xã Tà Hine\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24994,
		\"name\" : \"Xã Đà Loan\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 24997,
		\"name\" : \"Xã Ninh Loan\",
		\"type\" : \"Xã\",
		\"maqh\" : 678
	},
	{
		\"xaid\" : 25000,
		\"name\" : \"Thị trấn Di Linh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25003,
		\"name\" : \"Xã Đinh Trang Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25006,
		\"name\" : \"Xã Tân Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25007,
		\"name\" : \"Xã Tân Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25009,
		\"name\" : \"Xã Tân Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25012,
		\"name\" : \"Xã Tân Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25015,
		\"name\" : \"Xã Gia Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25018,
		\"name\" : \"Xã Đinh Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25021,
		\"name\" : \"Xã Tam Bố\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25024,
		\"name\" : \"Xã Đinh Trang Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25027,
		\"name\" : \"Xã Liên Đầm\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25030,
		\"name\" : \"Xã Gung Ré\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25033,
		\"name\" : \"Xã Bảo Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25036,
		\"name\" : \"Xã Hòa Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25039,
		\"name\" : \"Xã Hòa Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25042,
		\"name\" : \"Xã Hòa Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25045,
		\"name\" : \"Xã Hòa Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25048,
		\"name\" : \"Xã Sơn Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25051,
		\"name\" : \"Xã Gia Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 679
	},
	{
		\"xaid\" : 25054,
		\"name\" : \"Thị trấn Lộc Thắng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25057,
		\"name\" : \"Xã Lộc Bảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25060,
		\"name\" : \"Xã Lộc Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25063,
		\"name\" : \"Xã Lộc Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25066,
		\"name\" : \"Xã Lộc Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25069,
		\"name\" : \"Xã B' Lá\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25072,
		\"name\" : \"Xã Lộc Ngãi\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25075,
		\"name\" : \"Xã Lộc Quảng\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25078,
		\"name\" : \"Xã Lộc Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25081,
		\"name\" : \"Xã Lộc Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25084,
		\"name\" : \"Xã Lộc An\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25087,
		\"name\" : \"Xã Tân Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25090,
		\"name\" : \"Xã Lộc Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25093,
		\"name\" : \"Xã Lộc Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 680
	},
	{
		\"xaid\" : 25096,
		\"name\" : \"Thị trấn Đạ M'ri\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 681
	},
	{
		\"xaid\" : 25099,
		\"name\" : \"Thị trấn Ma Đa Guôi\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 681
	},
	{
		\"xaid\" : 25102,
		\"name\" : \"Xã Đạ M'ri\",
		\"type\" : \"Xã\",
		\"maqh\" : 681
	},
	{
		\"xaid\" : 25105,
		\"name\" : \"Xã Hà Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 681
	},
	{
		\"xaid\" : 25108,
		\"name\" : \"Xã Đạ Tồn\",
		\"type\" : \"Xã\",
		\"maqh\" : 681
	},
	{
		\"xaid\" : 25111,
		\"name\" : \"Xã Đạ Oai\",
		\"type\" : \"Xã\",
		\"maqh\" : 681
	},
	{
		\"xaid\" : 25114,
		\"name\" : \"Xã Đạ Ploa\",
		\"type\" : \"Xã\",
		\"maqh\" : 681
	},
	{
		\"xaid\" : 25117,
		\"name\" : \"Xã Ma Đa Guôi\",
		\"type\" : \"Xã\",
		\"maqh\" : 681
	},
	{
		\"xaid\" : 25120,
		\"name\" : \"Xã Đoàn Kết\",
		\"type\" : \"Xã\",
		\"maqh\" : 681
	},
	{
		\"xaid\" : 25123,
		\"name\" : \"Xã Phước Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 681
	},
	{
		\"xaid\" : 25126,
		\"name\" : \"Thị trấn Đạ Tẻh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 682
	},
	{
		\"xaid\" : 25129,
		\"name\" : \"Xã An Nhơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 682
	},
	{
		\"xaid\" : 25132,
		\"name\" : \"Xã Quốc Oai\",
		\"type\" : \"Xã\",
		\"maqh\" : 682
	},
	{
		\"xaid\" : 25135,
		\"name\" : \"Xã Mỹ Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 682
	},
	{
		\"xaid\" : 25138,
		\"name\" : \"Xã Quảng Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 682
	},
	{
		\"xaid\" : 25141,
		\"name\" : \"Xã Đạ Lây\",
		\"type\" : \"Xã\",
		\"maqh\" : 682
	},
	{
		\"xaid\" : 25144,
		\"name\" : \"Xã Hương Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 682
	},
	{
		\"xaid\" : 25147,
		\"name\" : \"Xã Triệu Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 682
	},
	{
		\"xaid\" : 25150,
		\"name\" : \"Xã Hà Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 682
	},
	{
		\"xaid\" : 25153,
		\"name\" : \"Xã Đạ Kho\",
		\"type\" : \"Xã\",
		\"maqh\" : 682
	},
	{
		\"xaid\" : 25156,
		\"name\" : \"Xã Đạ Pal\",
		\"type\" : \"Xã\",
		\"maqh\" : 682
	},
	{
		\"xaid\" : 25159,
		\"name\" : \"Thị trấn Cát Tiên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 683
	},
	{
		\"xaid\" : 25162,
		\"name\" : \"Xã Tiên Hoàng\",
		\"type\" : \"Xã\",
		\"maqh\" : 683
	},
	{
		\"xaid\" : 25165,
		\"name\" : \"Xã Phước Cát 2\",
		\"type\" : \"Xã\",
		\"maqh\" : 683
	},
	{
		\"xaid\" : 25168,
		\"name\" : \"Xã Gia Viễn\",
		\"type\" : \"Xã\",
		\"maqh\" : 683
	},
	{
		\"xaid\" : 25171,
		\"name\" : \"Xã Nam Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 683
	},
	{
		\"xaid\" : 25174,
		\"name\" : \"Xã Mỹ Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 683
	},
	{
		\"xaid\" : 25177,
		\"name\" : \"Xã Tư Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 683
	},
	{
		\"xaid\" : 25180,
		\"name\" : \"Xã Phước Cát 1\",
		\"type\" : \"Xã\",
		\"maqh\" : 683
	},
	{
		\"xaid\" : 25183,
		\"name\" : \"Xã Đức Phổ\",
		\"type\" : \"Xã\",
		\"maqh\" : 683
	},
	{
		\"xaid\" : 25189,
		\"name\" : \"Xã Quảng Ngãi\",
		\"type\" : \"Xã\",
		\"maqh\" : 683
	},
	{
		\"xaid\" : 25192,
		\"name\" : \"Xã Đồng Nai Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 683
	},
	{
		\"xaid\" : 25195,
		\"name\" : \"Phường Tân Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 689
	},
	{
		\"xaid\" : 25198,
		\"name\" : \"Phường Tân Đồng\",
		\"type\" : \"Phường\",
		\"maqh\" : 689
	},
	{
		\"xaid\" : 25201,
		\"name\" : \"Phường Tân Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 689
	},
	{
		\"xaid\" : 25204,
		\"name\" : \"Phường Tân Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 689
	},
	{
		\"xaid\" : 25205,
		\"name\" : \"Phường Tân Thiện\",
		\"type\" : \"Phường\",
		\"maqh\" : 689
	},
	{
		\"xaid\" : 25207,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 689
	},
	{
		\"xaid\" : 25210,
		\"name\" : \"Xã Tiến Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 689
	},
	{
		\"xaid\" : 25213,
		\"name\" : \"Xã Tiến Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 689
	},
	{
		\"xaid\" : 25216,
		\"name\" : \"Phường Thác Mơ\",
		\"type\" : \"Phường\",
		\"maqh\" : 688
	},
	{
		\"xaid\" : 25217,
		\"name\" : \"Phường Long Thủy\",
		\"type\" : \"Phường\",
		\"maqh\" : 688
	},
	{
		\"xaid\" : 25219,
		\"name\" : \"Phường Phước Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 688
	},
	{
		\"xaid\" : 25220,
		\"name\" : \"Phường Long Phước\",
		\"type\" : \"Phường\",
		\"maqh\" : 688
	},
	{
		\"xaid\" : 25222,
		\"name\" : \"Xã Bù Gia Mập\",
		\"type\" : \"Xã\",
		\"maqh\" : 691
	},
	{
		\"xaid\" : 25225,
		\"name\" : \"Xã Đak Ơ\",
		\"type\" : \"Xã\",
		\"maqh\" : 691
	},
	{
		\"xaid\" : 25228,
		\"name\" : \"Xã Đức Hạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 691
	},
	{
		\"xaid\" : 25229,
		\"name\" : \"Xã Phú Văn\",
		\"type\" : \"Xã\",
		\"maqh\" : 691
	},
	{
		\"xaid\" : 25231,
		\"name\" : \"Xã Đa Kia\",
		\"type\" : \"Xã\",
		\"maqh\" : 691
	},
	{
		\"xaid\" : 25232,
		\"name\" : \"Xã Phước Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 691
	},
	{
		\"xaid\" : 25234,
		\"name\" : \"Xã Bình Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 691
	},
	{
		\"xaid\" : 25237,
		\"name\" : \"Phường Sơn Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 688
	},
	{
		\"xaid\" : 25240,
		\"name\" : \"Xã Long Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 698
	},
	{
		\"xaid\" : 25243,
		\"name\" : \"Xã Bình Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 698
	},
	{
		\"xaid\" : 25244,
		\"name\" : \"Xã Bình Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 698
	},
	{
		\"xaid\" : 25245,
		\"name\" : \"Xã Long Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 688
	},
	{
		\"xaid\" : 25246,
		\"name\" : \"Xã Long Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 698
	},
	{
		\"xaid\" : 25249,
		\"name\" : \"Xã Phước Tín\",
		\"type\" : \"Xã\",
		\"maqh\" : 688
	},
	{
		\"xaid\" : 25250,
		\"name\" : \"Xã Phước Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 698
	},
	{
		\"xaid\" : 25252,
		\"name\" : \"Xã Bù Nho\",
		\"type\" : \"Xã\",
		\"maqh\" : 698
	},
	{
		\"xaid\" : 25255,
		\"name\" : \"Xã Long Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 698
	},
	{
		\"xaid\" : 25258,
		\"name\" : \"Xã Long Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 698
	},
	{
		\"xaid\" : 25261,
		\"name\" : \"Xã Phú Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 698
	},
	{
		\"xaid\" : 25264,
		\"name\" : \"Xã Phú Riềng\",
		\"type\" : \"Xã\",
		\"maqh\" : 698
	},
	{
		\"xaid\" : 25267,
		\"name\" : \"Xã Phú Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 691
	},
	{
		\"xaid\" : 25270,
		\"name\" : \"Thị trấn Lộc Ninh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25273,
		\"name\" : \"Xã Lộc Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25276,
		\"name\" : \"Xã Lộc An\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25279,
		\"name\" : \"Xã Lộc Tấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25280,
		\"name\" : \"Xã Lộc Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25282,
		\"name\" : \"Xã Lộc Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25285,
		\"name\" : \"Xã Lộc Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25288,
		\"name\" : \"Xã Lộc Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25291,
		\"name\" : \"Xã Lộc Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25292,
		\"name\" : \"Xã Lộc Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25294,
		\"name\" : \"Xã Lộc Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25297,
		\"name\" : \"Xã Lộc Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25300,
		\"name\" : \"Xã Lộc Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25303,
		\"name\" : \"Xã Lộc Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25305,
		\"name\" : \"Xã Lộc Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25306,
		\"name\" : \"Xã Lộc Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 692
	},
	{
		\"xaid\" : 25308,
		\"name\" : \"Thị trấn Thanh Bình\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 693
	},
	{
		\"xaid\" : 25309,
		\"name\" : \"Xã Hưng Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 693
	},
	{
		\"xaid\" : 25310,
		\"name\" : \"Xã Phước Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 693
	},
	{
		\"xaid\" : 25312,
		\"name\" : \"Xã Thiện Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 693
	},
	{
		\"xaid\" : 25315,
		\"name\" : \"Xã Thanh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 693
	},
	{
		\"xaid\" : 25318,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 693
	},
	{
		\"xaid\" : 25320,
		\"name\" : \"Phường Hưng Chiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 690
	},
	{
		\"xaid\" : 25321,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 693
	},
	{
		\"xaid\" : 25324,
		\"name\" : \"Phường An Lộc\",
		\"type\" : \"Phường\",
		\"maqh\" : 690
	},
	{
		\"xaid\" : 25325,
		\"name\" : \"Phường Phú Thịnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 690
	},
	{
		\"xaid\" : 25326,
		\"name\" : \"Phường Phú Đức\",
		\"type\" : \"Phường\",
		\"maqh\" : 690
	},
	{
		\"xaid\" : 25327,
		\"name\" : \"Xã Thanh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25330,
		\"name\" : \"Xã An Khương\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25333,
		\"name\" : \"Xã Thanh Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 690
	},
	{
		\"xaid\" : 25336,
		\"name\" : \"Xã Thanh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 690
	},
	{
		\"xaid\" : 25339,
		\"name\" : \"Xã An Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25342,
		\"name\" : \"Xã Tân Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25345,
		\"name\" : \"Xã Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25348,
		\"name\" : \"Xã Minh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25349,
		\"name\" : \"Xã Minh Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25351,
		\"name\" : \"Xã Phước An\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25354,
		\"name\" : \"Xã Thanh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25357,
		\"name\" : \"Xã Tân Khai\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25360,
		\"name\" : \"Xã Đồng Nơ\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25361,
		\"name\" : \"Xã Tân Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25363,
		\"name\" : \"Thị trấn Tân Phú\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 695
	},
	{
		\"xaid\" : 25366,
		\"name\" : \"Xã Thuận Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 695
	},
	{
		\"xaid\" : 25369,
		\"name\" : \"Xã Đồng Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 695
	},
	{
		\"xaid\" : 25372,
		\"name\" : \"Xã Tân Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 695
	},
	{
		\"xaid\" : 25375,
		\"name\" : \"Xã Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 695
	},
	{
		\"xaid\" : 25378,
		\"name\" : \"Xã Tân Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 695
	},
	{
		\"xaid\" : 25381,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 695
	},
	{
		\"xaid\" : 25384,
		\"name\" : \"Xã Tân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 695
	},
	{
		\"xaid\" : 25387,
		\"name\" : \"Xã Thuận Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 695
	},
	{
		\"xaid\" : 25390,
		\"name\" : \"Xã Đồng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 695
	},
	{
		\"xaid\" : 25393,
		\"name\" : \"Xã Tân Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 695
	},
	{
		\"xaid\" : 25396,
		\"name\" : \"Thị trấn Đức Phong\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25398,
		\"name\" : \"Xã Đường 10\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25399,
		\"name\" : \"Xã Đak Nhau\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25400,
		\"name\" : \"Xã Phú Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25402,
		\"name\" : \"Xã Thọ Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25404,
		\"name\" : \"Xã Bình Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25405,
		\"name\" : \"Xã Bom Bo\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25408,
		\"name\" : \"Xã Minh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25411,
		\"name\" : \"Xã Đoàn Kết\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25414,
		\"name\" : \"Xã Đồng Nai\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25417,
		\"name\" : \"Xã Đức Liễu\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25420,
		\"name\" : \"Xã Thống Nhất\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25423,
		\"name\" : \"Xã Nghĩa Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25424,
		\"name\" : \"Xã Nghĩa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25426,
		\"name\" : \"Xã Đăng Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25429,
		\"name\" : \"Xã Phước Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 696
	},
	{
		\"xaid\" : 25432,
		\"name\" : \"Thị trấn Chơn Thành\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 697
	},
	{
		\"xaid\" : 25433,
		\"name\" : \"Xã Thành Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 697
	},
	{
		\"xaid\" : 25435,
		\"name\" : \"Xã Minh Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 697
	},
	{
		\"xaid\" : 25438,
		\"name\" : \"Xã Tân Quan\",
		\"type\" : \"Xã\",
		\"maqh\" : 694
	},
	{
		\"xaid\" : 25439,
		\"name\" : \"Xã Quang Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 697
	},
	{
		\"xaid\" : 25441,
		\"name\" : \"Xã Minh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 697
	},
	{
		\"xaid\" : 25444,
		\"name\" : \"Xã Minh Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 697
	},
	{
		\"xaid\" : 25447,
		\"name\" : \"Xã Minh Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 697
	},
	{
		\"xaid\" : 25450,
		\"name\" : \"Xã Nha Bích\",
		\"type\" : \"Xã\",
		\"maqh\" : 697
	},
	{
		\"xaid\" : 25453,
		\"name\" : \"Xã Minh Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 697
	},
	{
		\"xaid\" : 25456,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 703
	},
	{
		\"xaid\" : 25459,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 703
	},
	{
		\"xaid\" : 25462,
		\"name\" : \"Phường 4\",
		\"type\" : \"Phường\",
		\"maqh\" : 703
	},
	{
		\"xaid\" : 25465,
		\"name\" : \"Phường Hiệp Ninh\",
		\"type\" : \"Phường\",
		\"maqh\" : 703
	},
	{
		\"xaid\" : 25468,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 703
	},
	{
		\"xaid\" : 25471,
		\"name\" : \"Xã Thạnh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 703
	},
	{
		\"xaid\" : 25474,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 703
	},
	{
		\"xaid\" : 25477,
		\"name\" : \"Xã Bình Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 703
	},
	{
		\"xaid\" : 25480,
		\"name\" : \"Phường Ninh Sơn\",
		\"type\" : \"Phường\",
		\"maqh\" : 703
	},
	{
		\"xaid\" : 25483,
		\"name\" : \"Phường Ninh Thạnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 703
	},
	{
		\"xaid\" : 25486,
		\"name\" : \"Thị trấn Tân Biên\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 705
	},
	{
		\"xaid\" : 25489,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 705
	},
	{
		\"xaid\" : 25492,
		\"name\" : \"Xã Thạnh Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 705
	},
	{
		\"xaid\" : 25495,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 705
	},
	{
		\"xaid\" : 25498,
		\"name\" : \"Xã Thạnh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 705
	},
	{
		\"xaid\" : 25501,
		\"name\" : \"Xã Thạnh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 705
	},
	{
		\"xaid\" : 25504,
		\"name\" : \"Xã Hòa Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 705
	},
	{
		\"xaid\" : 25507,
		\"name\" : \"Xã Tân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 705
	},
	{
		\"xaid\" : 25510,
		\"name\" : \"Xã Mỏ Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 705
	},
	{
		\"xaid\" : 25513,
		\"name\" : \"Xã Trà Vong\",
		\"type\" : \"Xã\",
		\"maqh\" : 705
	},
	{
		\"xaid\" : 25516,
		\"name\" : \"Thị trấn Tân Châu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 706
	},
	{
		\"xaid\" : 25519,
		\"name\" : \"Xã Tân Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 706
	},
	{
		\"xaid\" : 25522,
		\"name\" : \"Xã Tân Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 706
	},
	{
		\"xaid\" : 25525,
		\"name\" : \"Xã Tân Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 706
	},
	{
		\"xaid\" : 25528,
		\"name\" : \"Xã Tân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 706
	},
	{
		\"xaid\" : 25531,
		\"name\" : \"Xã Suối Ngô\",
		\"type\" : \"Xã\",
		\"maqh\" : 706
	},
	{
		\"xaid\" : 25534,
		\"name\" : \"Xã Suối Dây\",
		\"type\" : \"Xã\",
		\"maqh\" : 706
	},
	{
		\"xaid\" : 25537,
		\"name\" : \"Xã Tân Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 706
	},
	{
		\"xaid\" : 25540,
		\"name\" : \"Xã Thạnh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 706
	},
	{
		\"xaid\" : 25543,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 706
	},
	{
		\"xaid\" : 25546,
		\"name\" : \"Xã Tân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 706
	},
	{
		\"xaid\" : 25549,
		\"name\" : \"Xã Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 706
	},
	{
		\"xaid\" : 25552,
		\"name\" : \"Thị trấn Dương Minh Châu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 707
	},
	{
		\"xaid\" : 25555,
		\"name\" : \"Xã Suối Đá\",
		\"type\" : \"Xã\",
		\"maqh\" : 707
	},
	{
		\"xaid\" : 25558,
		\"name\" : \"Xã Phan\",
		\"type\" : \"Xã\",
		\"maqh\" : 707
	},
	{
		\"xaid\" : 25561,
		\"name\" : \"Xã Phước Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 707
	},
	{
		\"xaid\" : 25564,
		\"name\" : \"Xã Phước Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 707
	},
	{
		\"xaid\" : 25567,
		\"name\" : \"Xã Bàu Năng\",
		\"type\" : \"Xã\",
		\"maqh\" : 707
	},
	{
		\"xaid\" : 25570,
		\"name\" : \"Xã Chà Là\",
		\"type\" : \"Xã\",
		\"maqh\" : 707
	},
	{
		\"xaid\" : 25573,
		\"name\" : \"Xã Cầu Khởi\",
		\"type\" : \"Xã\",
		\"maqh\" : 707
	},
	{
		\"xaid\" : 25576,
		\"name\" : \"Xã Bến Củi\",
		\"type\" : \"Xã\",
		\"maqh\" : 707
	},
	{
		\"xaid\" : 25579,
		\"name\" : \"Xã Lộc Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 707
	},
	{
		\"xaid\" : 25582,
		\"name\" : \"Xã Truông Mít\",
		\"type\" : \"Xã\",
		\"maqh\" : 707
	},
	{
		\"xaid\" : 25585,
		\"name\" : \"Thị trấn Châu Thành\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25588,
		\"name\" : \"Xã Hảo Đước\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25591,
		\"name\" : \"Xã Phước Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25594,
		\"name\" : \"Xã Đồng Khởi\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25597,
		\"name\" : \"Xã Thái Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25600,
		\"name\" : \"Xã An Cơ\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25603,
		\"name\" : \"Xã Biên Giới\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25606,
		\"name\" : \"Xã Hòa Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25609,
		\"name\" : \"Xã Trí Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25612,
		\"name\" : \"Xã Hòa Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25615,
		\"name\" : \"Xã An Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25618,
		\"name\" : \"Xã Thanh Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25621,
		\"name\" : \"Xã Thành Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25624,
		\"name\" : \"Xã Ninh Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25627,
		\"name\" : \"Xã Long Vĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 708
	},
	{
		\"xaid\" : 25630,
		\"name\" : \"Thị trấn Hòa Thành\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 709
	},
	{
		\"xaid\" : 25633,
		\"name\" : \"Xã Hiệp Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 709
	},
	{
		\"xaid\" : 25636,
		\"name\" : \"Xã Long Thành Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 709
	},
	{
		\"xaid\" : 25639,
		\"name\" : \"Xã Trường Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 709
	},
	{
		\"xaid\" : 25642,
		\"name\" : \"Xã Trường Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 709
	},
	{
		\"xaid\" : 25645,
		\"name\" : \"Xã Long Thành Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 709
	},
	{
		\"xaid\" : 25648,
		\"name\" : \"Xã Trường Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 709
	},
	{
		\"xaid\" : 25651,
		\"name\" : \"Xã Long Thành Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 709
	},
	{
		\"xaid\" : 25654,
		\"name\" : \"Thị trấn Gò Dầu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 710
	},
	{
		\"xaid\" : 25657,
		\"name\" : \"Xã Thạnh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 710
	},
	{
		\"xaid\" : 25660,
		\"name\" : \"Xã Cẩm Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 710
	},
	{
		\"xaid\" : 25663,
		\"name\" : \"Xã Hiệp Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 710
	},
	{
		\"xaid\" : 25666,
		\"name\" : \"Xã Bàu Đồn\",
		\"type\" : \"Xã\",
		\"maqh\" : 710
	},
	{
		\"xaid\" : 25669,
		\"name\" : \"Xã Phước Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 710
	},
	{
		\"xaid\" : 25672,
		\"name\" : \"Xã Phước Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 710
	},
	{
		\"xaid\" : 25675,
		\"name\" : \"Xã Phước Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 710
	},
	{
		\"xaid\" : 25678,
		\"name\" : \"Xã Thanh Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 710
	},
	{
		\"xaid\" : 25681,
		\"name\" : \"Thị trấn Bến Cầu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 711
	},
	{
		\"xaid\" : 25684,
		\"name\" : \"Xã Long Chữ\",
		\"type\" : \"Xã\",
		\"maqh\" : 711
	},
	{
		\"xaid\" : 25687,
		\"name\" : \"Xã Long Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 711
	},
	{
		\"xaid\" : 25690,
		\"name\" : \"Xã Long Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 711
	},
	{
		\"xaid\" : 25693,
		\"name\" : \"Xã Tiên Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 711
	},
	{
		\"xaid\" : 25696,
		\"name\" : \"Xã Long Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 711
	},
	{
		\"xaid\" : 25699,
		\"name\" : \"Xã Lợi Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 711
	},
	{
		\"xaid\" : 25702,
		\"name\" : \"Xã Long Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 711
	},
	{
		\"xaid\" : 25705,
		\"name\" : \"Xã An Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 711
	},
	{
		\"xaid\" : 25708,
		\"name\" : \"Thị trấn Trảng Bàng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 712
	},
	{
		\"xaid\" : 25711,
		\"name\" : \"Xã Đôn Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 712
	},
	{
		\"xaid\" : 25714,
		\"name\" : \"Xã Hưng Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 712
	},
	{
		\"xaid\" : 25717,
		\"name\" : \"Xã Lộc Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 712
	},
	{
		\"xaid\" : 25720,
		\"name\" : \"Xã Gia Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 712
	},
	{
		\"xaid\" : 25723,
		\"name\" : \"Xã Gia Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 712
	},
	{
		\"xaid\" : 25726,
		\"name\" : \"Xã Phước Lưu\",
		\"type\" : \"Xã\",
		\"maqh\" : 712
	},
	{
		\"xaid\" : 25729,
		\"name\" : \"Xã Bình Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 712
	},
	{
		\"xaid\" : 25732,
		\"name\" : \"Xã An Tịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 712
	},
	{
		\"xaid\" : 25735,
		\"name\" : \"Xã An Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 712
	},
	{
		\"xaid\" : 25738,
		\"name\" : \"Xã Phước Chỉ\",
		\"type\" : \"Xã\",
		\"maqh\" : 712
	},
	{
		\"xaid\" : 25741,
		\"name\" : \"Phường Hiệp Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25744,
		\"name\" : \"Phường Phú Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25747,
		\"name\" : \"Phường Phú Cường\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25750,
		\"name\" : \"Phường Phú Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25753,
		\"name\" : \"Phường Phú Thọ\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25756,
		\"name\" : \"Phường Chánh Nghĩa\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25759,
		\"name\" : \"Phường Định Hoà\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25760,
		\"name\" : \"Phường Hoà Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25762,
		\"name\" : \"Phường Phú Mỹ\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25763,
		\"name\" : \"Phường Phú Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25765,
		\"name\" : \"Phường Tân An\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25768,
		\"name\" : \"Phường Hiệp An\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25771,
		\"name\" : \"Phường Tương Bình Hiệp\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25774,
		\"name\" : \"Phường Chánh Mỹ\",
		\"type\" : \"Phường\",
		\"maqh\" : 718
	},
	{
		\"xaid\" : 25777,
		\"name\" : \"Thị trấn Dầu Tiếng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 720
	},
	{
		\"xaid\" : 25780,
		\"name\" : \"Xã Minh Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 720
	},
	{
		\"xaid\" : 25783,
		\"name\" : \"Xã Minh Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 720
	},
	{
		\"xaid\" : 25786,
		\"name\" : \"Xã Minh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 720
	},
	{
		\"xaid\" : 25789,
		\"name\" : \"Xã Định An\",
		\"type\" : \"Xã\",
		\"maqh\" : 720
	},
	{
		\"xaid\" : 25792,
		\"name\" : \"Xã Long Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 720
	},
	{
		\"xaid\" : 25795,
		\"name\" : \"Xã Định Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 720
	},
	{
		\"xaid\" : 25798,
		\"name\" : \"Xã Định Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 720
	},
	{
		\"xaid\" : 25801,
		\"name\" : \"Xã An Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 720
	},
	{
		\"xaid\" : 25804,
		\"name\" : \"Xã Long Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 720
	},
	{
		\"xaid\" : 25807,
		\"name\" : \"Xã Thanh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 720
	},
	{
		\"xaid\" : 25810,
		\"name\" : \"Xã Thanh Tuyền\",
		\"type\" : \"Xã\",
		\"maqh\" : 720
	},
	{
		\"xaid\" : 25813,
		\"name\" : \"Phường Mỹ Phước\",
		\"type\" : \"Phường\",
		\"maqh\" : 721
	},
	{
		\"xaid\" : 25816,
		\"name\" : \"Xã Trừ Văn Thố\",
		\"type\" : \"Xã\",
		\"maqh\" : 719
	},
	{
		\"xaid\" : 25819,
		\"name\" : \"Xã Cây Trường II\",
		\"type\" : \"Xã\",
		\"maqh\" : 719
	},
	{
		\"xaid\" : 25822,
		\"name\" : \"Xã Lai Uyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 719
	},
	{
		\"xaid\" : 25825,
		\"name\" : \"Xã Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 719
	},
	{
		\"xaid\" : 25828,
		\"name\" : \"Xã Long Nguyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 719
	},
	{
		\"xaid\" : 25831,
		\"name\" : \"Xã Hưng Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 719
	},
	{
		\"xaid\" : 25834,
		\"name\" : \"Xã Lai Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 719
	},
	{
		\"xaid\" : 25837,
		\"name\" : \"Phường Chánh Phú Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 721
	},
	{
		\"xaid\" : 25840,
		\"name\" : \"Xã An Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 721
	},
	{
		\"xaid\" : 25843,
		\"name\" : \"Xã An Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 721
	},
	{
		\"xaid\" : 25846,
		\"name\" : \"Phường Thới Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 721
	},
	{
		\"xaid\" : 25849,
		\"name\" : \"Phường Hòa Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 721
	},
	{
		\"xaid\" : 25852,
		\"name\" : \"Phường Tân Định\",
		\"type\" : \"Phường\",
		\"maqh\" : 721
	},
	{
		\"xaid\" : 25855,
		\"name\" : \"Xã Phú An\",
		\"type\" : \"Xã\",
		\"maqh\" : 721
	},
	{
		\"xaid\" : 25858,
		\"name\" : \"Thị trấn Phước Vĩnh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 722
	},
	{
		\"xaid\" : 25861,
		\"name\" : \"Xã An Linh\",
		\"type\" : \"Xã\",
		\"maqh\" : 722
	},
	{
		\"xaid\" : 25864,
		\"name\" : \"Xã Phước Sang\",
		\"type\" : \"Xã\",
		\"maqh\" : 722
	},
	{
		\"xaid\" : 25865,
		\"name\" : \"Xã An Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 722
	},
	{
		\"xaid\" : 25867,
		\"name\" : \"Xã An Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 722
	},
	{
		\"xaid\" : 25870,
		\"name\" : \"Xã An Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 722
	},
	{
		\"xaid\" : 25873,
		\"name\" : \"Xã Tân Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 722
	},
	{
		\"xaid\" : 25876,
		\"name\" : \"Xã Tam Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 722
	},
	{
		\"xaid\" : 25879,
		\"name\" : \"Xã Tân Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 722
	},
	{
		\"xaid\" : 25882,
		\"name\" : \"Xã Vĩnh Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 722
	},
	{
		\"xaid\" : 25885,
		\"name\" : \"Xã Phước Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 722
	},
	{
		\"xaid\" : 25888,
		\"name\" : \"Phường Uyên Hưng\",
		\"type\" : \"Phường\",
		\"maqh\" : 723
	},
	{
		\"xaid\" : 25891,
		\"name\" : \"Phường Tân Phước Khánh\",
		\"type\" : \"Phường\",
		\"maqh\" : 723
	},
	{
		\"xaid\" : 25894,
		\"name\" : \"Xã Tân Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 726
	},
	{
		\"xaid\" : 25897,
		\"name\" : \"Xã Bình Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 726
	},
	{
		\"xaid\" : 25900,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 726
	},
	{
		\"xaid\" : 25903,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 726
	},
	{
		\"xaid\" : 25906,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 726
	},
	{
		\"xaid\" : 25907,
		\"name\" : \"Xã Đất Cuốc\",
		\"type\" : \"Xã\",
		\"maqh\" : 726
	},
	{
		\"xaid\" : 25908,
		\"name\" : \"Xã Hiếu Liêm\",
		\"type\" : \"Xã\",
		\"maqh\" : 726
	},
	{
		\"xaid\" : 25909,
		\"name\" : \"Xã Lạc An\",
		\"type\" : \"Xã\",
		\"maqh\" : 726
	},
	{
		\"xaid\" : 25912,
		\"name\" : \"Xã Vĩnh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 723
	},
	{
		\"xaid\" : 25915,
		\"name\" : \"Xã Hội Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 723
	},
	{
		\"xaid\" : 25918,
		\"name\" : \"Xã Tân Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 726
	},
	{
		\"xaid\" : 25920,
		\"name\" : \"Phường Tân Hiệp\",
		\"type\" : \"Phường\",
		\"maqh\" : 723
	},
	{
		\"xaid\" : 25921,
		\"name\" : \"Phường Khánh Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 723
	},
	{
		\"xaid\" : 25924,
		\"name\" : \"Xã Phú Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 723
	},
	{
		\"xaid\" : 25927,
		\"name\" : \"Xã Thường Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 726
	},
	{
		\"xaid\" : 25930,
		\"name\" : \"Xã Bạch Đằng\",
		\"type\" : \"Xã\",
		\"maqh\" : 723
	},
	{
		\"xaid\" : 25933,
		\"name\" : \"Xã Tân Vĩnh Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 723
	},
	{
		\"xaid\" : 25936,
		\"name\" : \"Phường Thạnh Phước\",
		\"type\" : \"Phường\",
		\"maqh\" : 723
	},
	{
		\"xaid\" : 25937,
		\"name\" : \"Xã Thạnh Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 723
	},
	{
		\"xaid\" : 25939,
		\"name\" : \"Phường Thái Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 723
	},
	{
		\"xaid\" : 25942,
		\"name\" : \"Phường Dĩ An\",
		\"type\" : \"Phường\",
		\"maqh\" : 724
	},
	{
		\"xaid\" : 25945,
		\"name\" : \"Phường Tân Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 724
	},
	{
		\"xaid\" : 25948,
		\"name\" : \"Phường Tân Đông Hiệp\",
		\"type\" : \"Phường\",
		\"maqh\" : 724
	},
	{
		\"xaid\" : 25951,
		\"name\" : \"Phường Bình An\",
		\"type\" : \"Phường\",
		\"maqh\" : 724
	},
	{
		\"xaid\" : 25954,
		\"name\" : \"Phường Bình Thắng\",
		\"type\" : \"Phường\",
		\"maqh\" : 724
	},
	{
		\"xaid\" : 25957,
		\"name\" : \"Phường Đông Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 724
	},
	{
		\"xaid\" : 25960,
		\"name\" : \"Phường An Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 724
	},
	{
		\"xaid\" : 25963,
		\"name\" : \"Phường An Thạnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 725
	},
	{
		\"xaid\" : 25966,
		\"name\" : \"Phường Lái Thiêu\",
		\"type\" : \"Phường\",
		\"maqh\" : 725
	},
	{
		\"xaid\" : 25969,
		\"name\" : \"Phường Bình Chuẩn\",
		\"type\" : \"Phường\",
		\"maqh\" : 725
	},
	{
		\"xaid\" : 25972,
		\"name\" : \"Phường Thuận Giao\",
		\"type\" : \"Phường\",
		\"maqh\" : 725
	},
	{
		\"xaid\" : 25975,
		\"name\" : \"Phường An Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 725
	},
	{
		\"xaid\" : 25978,
		\"name\" : \"Phường Hưng Định\",
		\"type\" : \"Phường\",
		\"maqh\" : 725
	},
	{
		\"xaid\" : 25981,
		\"name\" : \"Xã An Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 725
	},
	{
		\"xaid\" : 25984,
		\"name\" : \"Phường Bình Nhâm\",
		\"type\" : \"Phường\",
		\"maqh\" : 725
	},
	{
		\"xaid\" : 25987,
		\"name\" : \"Phường Bình Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 725
	},
	{
		\"xaid\" : 25990,
		\"name\" : \"Phường Vĩnh Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 725
	},
	{
		\"xaid\" : 25993,
		\"name\" : \"Phường Trảng Dài\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 25996,
		\"name\" : \"Phường Tân Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 25999,
		\"name\" : \"Phường Tân Biên\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26002,
		\"name\" : \"Phường Hố Nai\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26005,
		\"name\" : \"Phường Tân Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26008,
		\"name\" : \"Phường Tân Hiệp\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26011,
		\"name\" : \"Phường Bửu Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26014,
		\"name\" : \"Phường Tân Tiến\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26017,
		\"name\" : \"Phường Tam Hiệp\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26020,
		\"name\" : \"Phường Long Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26023,
		\"name\" : \"Phường Quang Vinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26026,
		\"name\" : \"Phường Tân Mai\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26029,
		\"name\" : \"Phường Thống Nhất\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26032,
		\"name\" : \"Phường Trung Dũng\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26035,
		\"name\" : \"Phường Tam Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26038,
		\"name\" : \"Phường Hòa Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26041,
		\"name\" : \"Phường Quyết Thắng\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26044,
		\"name\" : \"Phường Thanh Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26047,
		\"name\" : \"Phường Bình Đa\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26050,
		\"name\" : \"Phường An Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26053,
		\"name\" : \"Phường Bửu Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26056,
		\"name\" : \"Phường Long Bình Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26059,
		\"name\" : \"Phường Tân Vạn\",
		\"type\" : \"Phường\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26062,
		\"name\" : \"Xã Tân Hạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26065,
		\"name\" : \"Xã Hiệp Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26068,
		\"name\" : \"Xã Hóa An\",
		\"type\" : \"Xã\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26071,
		\"name\" : \"Phường Xuân Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26074,
		\"name\" : \"Phường Xuân Thanh\",
		\"type\" : \"Phường\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26077,
		\"name\" : \"Phường Xuân Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26080,
		\"name\" : \"Phường Xuân An\",
		\"type\" : \"Phường\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26083,
		\"name\" : \"Phường Xuân Hoà\",
		\"type\" : \"Phường\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26086,
		\"name\" : \"Phường Phú Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26089,
		\"name\" : \"Xã Bình Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26092,
		\"name\" : \"Xã Bảo Quang\",
		\"type\" : \"Xã\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26095,
		\"name\" : \"Xã Suối Tre\",
		\"type\" : \"Xã\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26098,
		\"name\" : \"Xã Bảo Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26101,
		\"name\" : \"Xã Xuân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26104,
		\"name\" : \"Xã Bàu Sen\",
		\"type\" : \"Xã\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26107,
		\"name\" : \"Xã Bàu Trâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26110,
		\"name\" : \"Xã Xuân Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26113,
		\"name\" : \"Xã Hàng Gòn\",
		\"type\" : \"Xã\",
		\"maqh\" : 732
	},
	{
		\"xaid\" : 26116,
		\"name\" : \"Thị trấn Tân Phú\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26119,
		\"name\" : \"Xã Dak Lua\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26122,
		\"name\" : \"Xã Nam Cát Tiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26125,
		\"name\" : \"Xã Phú An\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26128,
		\"name\" : \"Xã Núi Tượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26131,
		\"name\" : \"Xã Tà Lài\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26134,
		\"name\" : \"Xã Phú Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26137,
		\"name\" : \"Xã Phú Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26140,
		\"name\" : \"Xã Phú Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26143,
		\"name\" : \"Xã Thanh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26146,
		\"name\" : \"Xã Phú Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26149,
		\"name\" : \"Xã Phú Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26152,
		\"name\" : \"Xã Phú Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26155,
		\"name\" : \"Xã Phú Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26158,
		\"name\" : \"Xã Phú Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26161,
		\"name\" : \"Xã Phú Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26164,
		\"name\" : \"Xã Trà Cổ\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26167,
		\"name\" : \"Xã Phú Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 734
	},
	{
		\"xaid\" : 26170,
		\"name\" : \"Thị trấn Vĩnh An\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 735
	},
	{
		\"xaid\" : 26173,
		\"name\" : \"Xã Phú Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 735
	},
	{
		\"xaid\" : 26176,
		\"name\" : \"Xã Trị An\",
		\"type\" : \"Xã\",
		\"maqh\" : 735
	},
	{
		\"xaid\" : 26179,
		\"name\" : \"Xã Tân An\",
		\"type\" : \"Xã\",
		\"maqh\" : 735
	},
	{
		\"xaid\" : 26182,
		\"name\" : \"Xã Vĩnh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 735
	},
	{
		\"xaid\" : 26185,
		\"name\" : \"Xã Bình Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 735
	},
	{
		\"xaid\" : 26188,
		\"name\" : \"Xã Thạnh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 735
	},
	{
		\"xaid\" : 26191,
		\"name\" : \"Xã Thiện Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 735
	},
	{
		\"xaid\" : 26194,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 735
	},
	{
		\"xaid\" : 26197,
		\"name\" : \"Xã Bình Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 735
	},
	{
		\"xaid\" : 26200,
		\"name\" : \"Xã Mã Đà\",
		\"type\" : \"Xã\",
		\"maqh\" : 735
	},
	{
		\"xaid\" : 26203,
		\"name\" : \"Xã Hiếu Liêm\",
		\"type\" : \"Xã\",
		\"maqh\" : 735
	},
	{
		\"xaid\" : 26206,
		\"name\" : \"Thị trấn Định Quán\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26209,
		\"name\" : \"Xã Thanh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26212,
		\"name\" : \"Xã Phú Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26215,
		\"name\" : \"Xã Phú Vinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26218,
		\"name\" : \"Xã Phú Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26221,
		\"name\" : \"Xã Phú Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26224,
		\"name\" : \"Xã Ngọc Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26227,
		\"name\" : \"Xã La Ngà\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26230,
		\"name\" : \"Xã Gia Canh\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26233,
		\"name\" : \"Xã Phú Ngọc\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26236,
		\"name\" : \"Xã Phú Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26239,
		\"name\" : \"Xã Túc Trưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26242,
		\"name\" : \"Xã Phú Túc\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26245,
		\"name\" : \"Xã Suối Nho\",
		\"type\" : \"Xã\",
		\"maqh\" : 736
	},
	{
		\"xaid\" : 26248,
		\"name\" : \"Thị trấn Trảng Bom\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26251,
		\"name\" : \"Xã Thanh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26254,
		\"name\" : \"Xã Cây Gáo\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26257,
		\"name\" : \"Xã Bàu Hàm\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26260,
		\"name\" : \"Xã Sông Thao\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26263,
		\"name\" : \"Xã Sông Trầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26266,
		\"name\" : \"Xã Đông Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26269,
		\"name\" : \"Xã Bắc Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26272,
		\"name\" : \"Xã Hố Nai 3\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26275,
		\"name\" : \"Xã Tây Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26278,
		\"name\" : \"Xã Bình Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26281,
		\"name\" : \"Xã Trung Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26284,
		\"name\" : \"Xã Đồi 61\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26287,
		\"name\" : \"Xã Hưng Thịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26290,
		\"name\" : \"Xã Quảng Tiến\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26293,
		\"name\" : \"Xã Giang Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26296,
		\"name\" : \"Xã An Viễn\",
		\"type\" : \"Xã\",
		\"maqh\" : 737
	},
	{
		\"xaid\" : 26299,
		\"name\" : \"Xã Gia Tân 1\",
		\"type\" : \"Xã\",
		\"maqh\" : 738
	},
	{
		\"xaid\" : 26302,
		\"name\" : \"Xã Gia Tân 2\",
		\"type\" : \"Xã\",
		\"maqh\" : 738
	},
	{
		\"xaid\" : 26305,
		\"name\" : \"Xã Gia Tân 3\",
		\"type\" : \"Xã\",
		\"maqh\" : 738
	},
	{
		\"xaid\" : 26308,
		\"name\" : \"Xã Gia Kiệm\",
		\"type\" : \"Xã\",
		\"maqh\" : 738
	},
	{
		\"xaid\" : 26311,
		\"name\" : \"Xã Quang Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 738
	},
	{
		\"xaid\" : 26314,
		\"name\" : \"Xã Bàu Hàm 2\",
		\"type\" : \"Xã\",
		\"maqh\" : 738
	},
	{
		\"xaid\" : 26317,
		\"name\" : \"Xã Hưng Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 738
	},
	{
		\"xaid\" : 26320,
		\"name\" : \"Xã Lộ 25\",
		\"type\" : \"Xã\",
		\"maqh\" : 738
	},
	{
		\"xaid\" : 26323,
		\"name\" : \"Xã Xuân Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 738
	},
	{
		\"xaid\" : 26326,
		\"name\" : \"Xã Xuân Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 738
	},
	{
		\"xaid\" : 26329,
		\"name\" : \"Xã Sông Nhạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26332,
		\"name\" : \"Xã Xuân Quế\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26335,
		\"name\" : \"Xã Nhân Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26338,
		\"name\" : \"Xã Xuân Đường\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26341,
		\"name\" : \"Xã Long Giao\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26344,
		\"name\" : \"Xã Xuân Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26347,
		\"name\" : \"Xã Thừa Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26350,
		\"name\" : \"Xã Bảo Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26353,
		\"name\" : \"Xã Xuân Bảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26356,
		\"name\" : \"Xã Xuân Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26359,
		\"name\" : \"Xã Xuân Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26362,
		\"name\" : \"Xã Sông Ray\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26365,
		\"name\" : \"Xã Lâm San\",
		\"type\" : \"Xã\",
		\"maqh\" : 739
	},
	{
		\"xaid\" : 26368,
		\"name\" : \"Thị trấn Long Thành\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26371,
		\"name\" : \"Xã An Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26374,
		\"name\" : \"Xã Tam Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26377,
		\"name\" : \"Xã Phước Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26380,
		\"name\" : \"Xã Long Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 731
	},
	{
		\"xaid\" : 26383,
		\"name\" : \"Xã An Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26386,
		\"name\" : \"Xã Bình An\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26389,
		\"name\" : \"Xã Long Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26392,
		\"name\" : \"Xã Lộc An\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26395,
		\"name\" : \"Xã Bình Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26398,
		\"name\" : \"Xã Tam An\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26401,
		\"name\" : \"Xã Cẩm Đường\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26404,
		\"name\" : \"Xã Long An\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26407,
		\"name\" : \"Xã Suối Trầu\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26410,
		\"name\" : \"Xã Bàu Cạn\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26413,
		\"name\" : \"Xã Long Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26416,
		\"name\" : \"Xã Phước Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26419,
		\"name\" : \"Xã Tân Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26422,
		\"name\" : \"Xã Phước Thái\",
		\"type\" : \"Xã\",
		\"maqh\" : 740
	},
	{
		\"xaid\" : 26425,
		\"name\" : \"Thị trấn Gia Ray\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26428,
		\"name\" : \"Xã Xuân Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26431,
		\"name\" : \"Xã Suối Cao\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26434,
		\"name\" : \"Xã Xuân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26437,
		\"name\" : \"Xã Xuân Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26440,
		\"name\" : \"Xã Xuân Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26443,
		\"name\" : \"Xã Xuân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26446,
		\"name\" : \"Xã Xuân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26449,
		\"name\" : \"Xã Xuân Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26452,
		\"name\" : \"Xã Suối Cát\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26455,
		\"name\" : \"Xã Xuân Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26458,
		\"name\" : \"Xã Xuân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26461,
		\"name\" : \"Xã Xuân Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26464,
		\"name\" : \"Xã Bảo Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26467,
		\"name\" : \"Xã Lang Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 741
	},
	{
		\"xaid\" : 26470,
		\"name\" : \"Xã Phước Thiền\",
		\"type\" : \"Xã\",
		\"maqh\" : 742
	},
	{
		\"xaid\" : 26473,
		\"name\" : \"Xã Long Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 742
	},
	{
		\"xaid\" : 26476,
		\"name\" : \"Xã Đại Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 742
	},
	{
		\"xaid\" : 26479,
		\"name\" : \"Xã Hiệp Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 742
	},
	{
		\"xaid\" : 26482,
		\"name\" : \"Xã Phú Hữu\",
		\"type\" : \"Xã\",
		\"maqh\" : 742
	},
	{
		\"xaid\" : 26485,
		\"name\" : \"Xã Phú Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 742
	},
	{
		\"xaid\" : 26488,
		\"name\" : \"Xã Phú Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 742
	},
	{
		\"xaid\" : 26491,
		\"name\" : \"Xã Phú Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 742
	},
	{
		\"xaid\" : 26494,
		\"name\" : \"Xã Long Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 742
	},
	{
		\"xaid\" : 26497,
		\"name\" : \"Xã Vĩnh Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 742
	},
	{
		\"xaid\" : 26500,
		\"name\" : \"Xã Phước Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 742
	},
	{
		\"xaid\" : 26503,
		\"name\" : \"Xã Phước An\",
		\"type\" : \"Xã\",
		\"maqh\" : 742
	},
	{
		\"xaid\" : 26506,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26508,
		\"name\" : \"Phường Thắng Tam\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26509,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26512,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26515,
		\"name\" : \"Phường 4\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26518,
		\"name\" : \"Phường 5\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26521,
		\"name\" : \"Phường Thắng Nhì\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26524,
		\"name\" : \"Phường 7\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26526,
		\"name\" : \"Phường Nguyễn An Ninh\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26527,
		\"name\" : \"Phường 8\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26530,
		\"name\" : \"Phường 9\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26533,
		\"name\" : \"Phường Thắng Nhất\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26535,
		\"name\" : \"Phường Rạch Dừa\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26536,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26539,
		\"name\" : \"Phường 11\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26542,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26545,
		\"name\" : \"Xã Long Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 747
	},
	{
		\"xaid\" : 26548,
		\"name\" : \"Phường Phước Hưng\",
		\"type\" : \"Phường\",
		\"maqh\" : 748
	},
	{
		\"xaid\" : 26551,
		\"name\" : \"Phường Phước Hiệp\",
		\"type\" : \"Phường\",
		\"maqh\" : 748
	},
	{
		\"xaid\" : 26554,
		\"name\" : \"Phường Phước Nguyên\",
		\"type\" : \"Phường\",
		\"maqh\" : 748
	},
	{
		\"xaid\" : 26557,
		\"name\" : \"Phường Long Toàn\",
		\"type\" : \"Phường\",
		\"maqh\" : 748
	},
	{
		\"xaid\" : 26558,
		\"name\" : \"Phường Long Tâm\",
		\"type\" : \"Phường\",
		\"maqh\" : 748
	},
	{
		\"xaid\" : 26560,
		\"name\" : \"Phường Phước Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 748
	},
	{
		\"xaid\" : 26563,
		\"name\" : \"Phường Long Hương\",
		\"type\" : \"Phường\",
		\"maqh\" : 748
	},
	{
		\"xaid\" : 26566,
		\"name\" : \"Phường Kim Dinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 748
	},
	{
		\"xaid\" : 26567,
		\"name\" : \"Xã Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 748
	},
	{
		\"xaid\" : 26569,
		\"name\" : \"Xã Long Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 748
	},
	{
		\"xaid\" : 26572,
		\"name\" : \"Xã Hoà Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 748
	},
	{
		\"xaid\" : 26574,
		\"name\" : \"Xã Bàu Chinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26575,
		\"name\" : \"Thị trấn Ngãi Giao\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26578,
		\"name\" : \"Xã Bình Ba\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26581,
		\"name\" : \"Xã Suối Nghệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26584,
		\"name\" : \"Xã Xuân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26587,
		\"name\" : \"Xã Sơn Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26590,
		\"name\" : \"Xã Bình Giã\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26593,
		\"name\" : \"Xã Bình Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26596,
		\"name\" : \"Xã Xà Bang\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26599,
		\"name\" : \"Xã Cù Bị\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26602,
		\"name\" : \"Xã Láng Lớn\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26605,
		\"name\" : \"Xã Quảng Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26608,
		\"name\" : \"Xã Kim Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26611,
		\"name\" : \"Xã Suối Rao\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26614,
		\"name\" : \"Xã Đá Bạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26617,
		\"name\" : \"Xã Nghĩa Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 750
	},
	{
		\"xaid\" : 26620,
		\"name\" : \"Thị trấn Phước Bửu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26623,
		\"name\" : \"Xã Phước Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26626,
		\"name\" : \"Xã Phước Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26629,
		\"name\" : \"Xã Xuyên Mộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26632,
		\"name\" : \"Xã Bông Trang\",
		\"type\" : \"Xã\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26635,
		\"name\" : \"Xã Tân Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26638,
		\"name\" : \"Xã Bàu Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26641,
		\"name\" : \"Xã Hòa Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26644,
		\"name\" : \"Xã Hòa Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26647,
		\"name\" : \"Xã Hòa Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26650,
		\"name\" : \"Xã Hòa Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26653,
		\"name\" : \"Xã Bưng Riềng\",
		\"type\" : \"Xã\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26656,
		\"name\" : \"Xã Bình Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 751
	},
	{
		\"xaid\" : 26659,
		\"name\" : \"Thị trấn Long Điền\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 752
	},
	{
		\"xaid\" : 26662,
		\"name\" : \"Thị trấn Long Hải\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 752
	},
	{
		\"xaid\" : 26665,
		\"name\" : \"Xã An Ngãi\",
		\"type\" : \"Xã\",
		\"maqh\" : 752
	},
	{
		\"xaid\" : 26668,
		\"name\" : \"Xã Tam Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 752
	},
	{
		\"xaid\" : 26671,
		\"name\" : \"Xã An Nhứt\",
		\"type\" : \"Xã\",
		\"maqh\" : 752
	},
	{
		\"xaid\" : 26674,
		\"name\" : \"Xã Phước Tỉnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 752
	},
	{
		\"xaid\" : 26677,
		\"name\" : \"Xã Phước Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 752
	},
	{
		\"xaid\" : 26680,
		\"name\" : \"Thị trấn Đất Đỏ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 753
	},
	{
		\"xaid\" : 26683,
		\"name\" : \"Xã Phước Long Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 753
	},
	{
		\"xaid\" : 26686,
		\"name\" : \"Xã Phước Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 753
	},
	{
		\"xaid\" : 26689,
		\"name\" : \"Xã Long Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 753
	},
	{
		\"xaid\" : 26692,
		\"name\" : \"Thị trấn Phước Hải\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 753
	},
	{
		\"xaid\" : 26695,
		\"name\" : \"Xã Long Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 753
	},
	{
		\"xaid\" : 26698,
		\"name\" : \"Xã Láng Dài\",
		\"type\" : \"Xã\",
		\"maqh\" : 753
	},
	{
		\"xaid\" : 26701,
		\"name\" : \"Xã Lộc An\",
		\"type\" : \"Xã\",
		\"maqh\" : 753
	},
	{
		\"xaid\" : 26704,
		\"name\" : \"Thị trấn Phú Mỹ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 754
	},
	{
		\"xaid\" : 26707,
		\"name\" : \"Xã Tân Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 754
	},
	{
		\"xaid\" : 26710,
		\"name\" : \"Xã Tân Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 754
	},
	{
		\"xaid\" : 26713,
		\"name\" : \"Xã Phước Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 754
	},
	{
		\"xaid\" : 26716,
		\"name\" : \"Xã Tân Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 754
	},
	{
		\"xaid\" : 26719,
		\"name\" : \"Xã Mỹ Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 754
	},
	{
		\"xaid\" : 26722,
		\"name\" : \"Xã Sông Xoài\",
		\"type\" : \"Xã\",
		\"maqh\" : 754
	},
	{
		\"xaid\" : 26725,
		\"name\" : \"Xã Hắc Dịch\",
		\"type\" : \"Xã\",
		\"maqh\" : 754
	},
	{
		\"xaid\" : 26728,
		\"name\" : \"Xã Châu Pha\",
		\"type\" : \"Xã\",
		\"maqh\" : 754
	},
	{
		\"xaid\" : 26731,
		\"name\" : \"Xã Tóc Tiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 754
	},
	{
		\"xaid\" : 26734,
		\"name\" : \"Phường Tân Định\",
		\"type\" : \"Phường\",
		\"maqh\" : 760
	},
	{
		\"xaid\" : 26737,
		\"name\" : \"Phường Đa Kao\",
		\"type\" : \"Phường\",
		\"maqh\" : 760
	},
	{
		\"xaid\" : 26740,
		\"name\" : \"Phường Bến Nghé\",
		\"type\" : \"Phường\",
		\"maqh\" : 760
	},
	{
		\"xaid\" : 26743,
		\"name\" : \"Phường Bến Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 760
	},
	{
		\"xaid\" : 26746,
		\"name\" : \"Phường Nguyễn Thái Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 760
	},
	{
		\"xaid\" : 26749,
		\"name\" : \"Phường Phạm Ngũ Lão\",
		\"type\" : \"Phường\",
		\"maqh\" : 760
	},
	{
		\"xaid\" : 26752,
		\"name\" : \"Phường Cầu Ông Lãnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 760
	},
	{
		\"xaid\" : 26755,
		\"name\" : \"Phường Cô Giang\",
		\"type\" : \"Phường\",
		\"maqh\" : 760
	},
	{
		\"xaid\" : 26758,
		\"name\" : \"Phường Nguyễn Cư Trinh\",
		\"type\" : \"Phường\",
		\"maqh\" : 760
	},
	{
		\"xaid\" : 26761,
		\"name\" : \"Phường Cầu Kho\",
		\"type\" : \"Phường\",
		\"maqh\" : 760
	},
	{
		\"xaid\" : 26764,
		\"name\" : \"Phường Thạnh Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 761
	},
	{
		\"xaid\" : 26767,
		\"name\" : \"Phường Thạnh Lộc\",
		\"type\" : \"Phường\",
		\"maqh\" : 761
	},
	{
		\"xaid\" : 26770,
		\"name\" : \"Phường Hiệp Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 761
	},
	{
		\"xaid\" : 26773,
		\"name\" : \"Phường Thới An\",
		\"type\" : \"Phường\",
		\"maqh\" : 761
	},
	{
		\"xaid\" : 26776,
		\"name\" : \"Phường Tân Chánh Hiệp\",
		\"type\" : \"Phường\",
		\"maqh\" : 761
	},
	{
		\"xaid\" : 26779,
		\"name\" : \"Phường An Phú Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 761
	},
	{
		\"xaid\" : 26782,
		\"name\" : \"Phường Tân Thới Hiệp\",
		\"type\" : \"Phường\",
		\"maqh\" : 761
	},
	{
		\"xaid\" : 26785,
		\"name\" : \"Phường Trung Mỹ Tây\",
		\"type\" : \"Phường\",
		\"maqh\" : 761
	},
	{
		\"xaid\" : 26787,
		\"name\" : \"Phường Tân Hưng Thuận\",
		\"type\" : \"Phường\",
		\"maqh\" : 761
	},
	{
		\"xaid\" : 26788,
		\"name\" : \"Phường Đông Hưng Thuận\",
		\"type\" : \"Phường\",
		\"maqh\" : 761
	},
	{
		\"xaid\" : 26791,
		\"name\" : \"Phường Tân Thới Nhất\",
		\"type\" : \"Phường\",
		\"maqh\" : 761
	},
	{
		\"xaid\" : 26794,
		\"name\" : \"Phường Linh Xuân\",
		\"type\" : \"Phường\",
		\"maqh\" : 762
	},
	{
		\"xaid\" : 26797,
		\"name\" : \"Phường Bình Chiểu\",
		\"type\" : \"Phường\",
		\"maqh\" : 762
	},
	{
		\"xaid\" : 26800,
		\"name\" : \"Phường Linh Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 762
	},
	{
		\"xaid\" : 26803,
		\"name\" : \"Phường Tam Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 762
	},
	{
		\"xaid\" : 26806,
		\"name\" : \"Phường Tam Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 762
	},
	{
		\"xaid\" : 26809,
		\"name\" : \"Phường Hiệp Bình Phước\",
		\"type\" : \"Phường\",
		\"maqh\" : 762
	},
	{
		\"xaid\" : 26812,
		\"name\" : \"Phường Hiệp Bình Chánh\",
		\"type\" : \"Phường\",
		\"maqh\" : 762
	},
	{
		\"xaid\" : 26815,
		\"name\" : \"Phường Linh Chiểu\",
		\"type\" : \"Phường\",
		\"maqh\" : 762
	},
	{
		\"xaid\" : 26818,
		\"name\" : \"Phường Linh Tây\",
		\"type\" : \"Phường\",
		\"maqh\" : 762
	},
	{
		\"xaid\" : 26821,
		\"name\" : \"Phường Linh Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 762
	},
	{
		\"xaid\" : 26824,
		\"name\" : \"Phường Bình Thọ\",
		\"type\" : \"Phường\",
		\"maqh\" : 762
	},
	{
		\"xaid\" : 26827,
		\"name\" : \"Phường Trường Thọ\",
		\"type\" : \"Phường\",
		\"maqh\" : 762
	},
	{
		\"xaid\" : 26830,
		\"name\" : \"Phường Long Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26833,
		\"name\" : \"Phường Long Thạnh Mỹ\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26836,
		\"name\" : \"Phường Tân Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26839,
		\"name\" : \"Phường Hiệp Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26842,
		\"name\" : \"Phường Tăng Nhơn Phú A\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26845,
		\"name\" : \"Phường Tăng Nhơn Phú B\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26848,
		\"name\" : \"Phường Phước Long B\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26851,
		\"name\" : \"Phường Phước Long A\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26854,
		\"name\" : \"Phường Trường Thạnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26857,
		\"name\" : \"Phường Long Phước\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26860,
		\"name\" : \"Phường Long Trường\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26863,
		\"name\" : \"Phường Phước Bình\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26866,
		\"name\" : \"Phường Phú Hữu\",
		\"type\" : \"Phường\",
		\"maqh\" : 763
	},
	{
		\"xaid\" : 26869,
		\"name\" : \"Phường 15\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26872,
		\"name\" : \"Phường 13\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26875,
		\"name\" : \"Phường 17\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26876,
		\"name\" : \"Phường 6\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26878,
		\"name\" : \"Phường 16\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26881,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26882,
		\"name\" : \"Phường 14\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26884,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26887,
		\"name\" : \"Phường 05\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26890,
		\"name\" : \"Phường 07\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26893,
		\"name\" : \"Phường 04\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26896,
		\"name\" : \"Phường 01\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26897,
		\"name\" : \"Phường 9\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26898,
		\"name\" : \"Phường 8\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26899,
		\"name\" : \"Phường 11\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26902,
		\"name\" : \"Phường 03\",
		\"type\" : \"Phường\",
		\"maqh\" : 764
	},
	{
		\"xaid\" : 26905,
		\"name\" : \"Phường 13\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26908,
		\"name\" : \"Phường 11\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26911,
		\"name\" : \"Phường 27\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26914,
		\"name\" : \"Phường 26\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26917,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26920,
		\"name\" : \"Phường 25\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26923,
		\"name\" : \"Phường 05\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26926,
		\"name\" : \"Phường 07\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26929,
		\"name\" : \"Phường 24\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26932,
		\"name\" : \"Phường 06\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26935,
		\"name\" : \"Phường 14\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26938,
		\"name\" : \"Phường 15\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26941,
		\"name\" : \"Phường 02\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26944,
		\"name\" : \"Phường 01\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26947,
		\"name\" : \"Phường 03\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26950,
		\"name\" : \"Phường 17\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26953,
		\"name\" : \"Phường 21\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26956,
		\"name\" : \"Phường 22\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26959,
		\"name\" : \"Phường 19\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26962,
		\"name\" : \"Phường 28\",
		\"type\" : \"Phường\",
		\"maqh\" : 765
	},
	{
		\"xaid\" : 26965,
		\"name\" : \"Phường 02\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 26968,
		\"name\" : \"Phường 04\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 26971,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 26974,
		\"name\" : \"Phường 13\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 26977,
		\"name\" : \"Phường 01\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 26980,
		\"name\" : \"Phường 03\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 26983,
		\"name\" : \"Phường 11\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 26986,
		\"name\" : \"Phường 07\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 26989,
		\"name\" : \"Phường 05\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 26992,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 26995,
		\"name\" : \"Phường 06\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 26998,
		\"name\" : \"Phường 08\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 27001,
		\"name\" : \"Phường 09\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 27004,
		\"name\" : \"Phường 14\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 27007,
		\"name\" : \"Phường 15\",
		\"type\" : \"Phường\",
		\"maqh\" : 766
	},
	{
		\"xaid\" : 27010,
		\"name\" : \"Phường Tân Sơn Nhì\",
		\"type\" : \"Phường\",
		\"maqh\" : 767
	},
	{
		\"xaid\" : 27013,
		\"name\" : \"Phường Tây Thạnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 767
	},
	{
		\"xaid\" : 27016,
		\"name\" : \"Phường Sơn Kỳ\",
		\"type\" : \"Phường\",
		\"maqh\" : 767
	},
	{
		\"xaid\" : 27019,
		\"name\" : \"Phường Tân Quý\",
		\"type\" : \"Phường\",
		\"maqh\" : 767
	},
	{
		\"xaid\" : 27022,
		\"name\" : \"Phường Tân Thành\",
		\"type\" : \"Phường\",
		\"maqh\" : 767
	},
	{
		\"xaid\" : 27025,
		\"name\" : \"Phường Phú Thọ Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 767
	},
	{
		\"xaid\" : 27028,
		\"name\" : \"Phường Phú Thạnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 767
	},
	{
		\"xaid\" : 27031,
		\"name\" : \"Phường Phú Trung\",
		\"type\" : \"Phường\",
		\"maqh\" : 767
	},
	{
		\"xaid\" : 27034,
		\"name\" : \"Phường Hòa Thạnh\",
		\"type\" : \"Phường\",
		\"maqh\" : 767
	},
	{
		\"xaid\" : 27037,
		\"name\" : \"Phường Hiệp Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 767
	},
	{
		\"xaid\" : 27040,
		\"name\" : \"Phường Tân Thới Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 767
	},
	{
		\"xaid\" : 27043,
		\"name\" : \"Phường 04\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27046,
		\"name\" : \"Phường 05\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27049,
		\"name\" : \"Phường 09\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27052,
		\"name\" : \"Phường 07\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27055,
		\"name\" : \"Phường 03\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27058,
		\"name\" : \"Phường 01\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27061,
		\"name\" : \"Phường 02\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27064,
		\"name\" : \"Phường 08\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27067,
		\"name\" : \"Phường 15\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27070,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27073,
		\"name\" : \"Phường 11\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27076,
		\"name\" : \"Phường 17\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27079,
		\"name\" : \"Phường 14\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27082,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27085,
		\"name\" : \"Phường 13\",
		\"type\" : \"Phường\",
		\"maqh\" : 768
	},
	{
		\"xaid\" : 27088,
		\"name\" : \"Phường Thảo Điền\",
		\"type\" : \"Phường\",
		\"maqh\" : 769
	},
	{
		\"xaid\" : 27091,
		\"name\" : \"Phường An Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 769
	},
	{
		\"xaid\" : 27094,
		\"name\" : \"Phường Bình An\",
		\"type\" : \"Phường\",
		\"maqh\" : 769
	},
	{
		\"xaid\" : 27097,
		\"name\" : \"Phường Bình Trưng Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 769
	},
	{
		\"xaid\" : 27100,
		\"name\" : \"Phường Bình Trưng Tây\",
		\"type\" : \"Phường\",
		\"maqh\" : 769
	},
	{
		\"xaid\" : 27103,
		\"name\" : \"Phường Bình Khánh\",
		\"type\" : \"Phường\",
		\"maqh\" : 769
	},
	{
		\"xaid\" : 27106,
		\"name\" : \"Phường An Khánh\",
		\"type\" : \"Phường\",
		\"maqh\" : 769
	},
	{
		\"xaid\" : 27109,
		\"name\" : \"Phường Cát Lái\",
		\"type\" : \"Phường\",
		\"maqh\" : 769
	},
	{
		\"xaid\" : 27112,
		\"name\" : \"Phường Thạnh Mỹ Lợi\",
		\"type\" : \"Phường\",
		\"maqh\" : 769
	},
	{
		\"xaid\" : 27115,
		\"name\" : \"Phường An Lợi Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 769
	},
	{
		\"xaid\" : 27118,
		\"name\" : \"Phường Thủ Thiêm\",
		\"type\" : \"Phường\",
		\"maqh\" : 769
	},
	{
		\"xaid\" : 27121,
		\"name\" : \"Phường 08\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27124,
		\"name\" : \"Phường 07\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27127,
		\"name\" : \"Phường 14\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27130,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27133,
		\"name\" : \"Phường 11\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27136,
		\"name\" : \"Phường 13\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27139,
		\"name\" : \"Phường 06\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27142,
		\"name\" : \"Phường 09\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27145,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27148,
		\"name\" : \"Phường 04\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27151,
		\"name\" : \"Phường 05\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27154,
		\"name\" : \"Phường 03\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27157,
		\"name\" : \"Phường 02\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27160,
		\"name\" : \"Phường 01\",
		\"type\" : \"Phường\",
		\"maqh\" : 770
	},
	{
		\"xaid\" : 27163,
		\"name\" : \"Phường 15\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27166,
		\"name\" : \"Phường 13\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27169,
		\"name\" : \"Phường 14\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27172,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27175,
		\"name\" : \"Phường 11\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27178,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27181,
		\"name\" : \"Phường 09\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27184,
		\"name\" : \"Phường 01\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27187,
		\"name\" : \"Phường 08\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27190,
		\"name\" : \"Phường 02\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27193,
		\"name\" : \"Phường 04\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27196,
		\"name\" : \"Phường 07\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27199,
		\"name\" : \"Phường 05\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27202,
		\"name\" : \"Phường 06\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27205,
		\"name\" : \"Phường 03\",
		\"type\" : \"Phường\",
		\"maqh\" : 771
	},
	{
		\"xaid\" : 27208,
		\"name\" : \"Phường 15\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27211,
		\"name\" : \"Phường 05\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27214,
		\"name\" : \"Phường 14\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27217,
		\"name\" : \"Phường 11\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27220,
		\"name\" : \"Phường 03\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27223,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27226,
		\"name\" : \"Phường 13\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27229,
		\"name\" : \"Phường 08\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27232,
		\"name\" : \"Phường 09\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27235,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27238,
		\"name\" : \"Phường 07\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27241,
		\"name\" : \"Phường 06\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27244,
		\"name\" : \"Phường 04\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27247,
		\"name\" : \"Phường 01\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27250,
		\"name\" : \"Phường 02\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27253,
		\"name\" : \"Phường 16\",
		\"type\" : \"Phường\",
		\"maqh\" : 772
	},
	{
		\"xaid\" : 27256,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27259,
		\"name\" : \"Phường 13\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27262,
		\"name\" : \"Phường 09\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27265,
		\"name\" : \"Phường 06\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27268,
		\"name\" : \"Phường 08\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27271,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27274,
		\"name\" : \"Phường 05\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27277,
		\"name\" : \"Phường 18\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27280,
		\"name\" : \"Phường 14\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27283,
		\"name\" : \"Phường 04\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27286,
		\"name\" : \"Phường 03\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27289,
		\"name\" : \"Phường 16\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27292,
		\"name\" : \"Phường 02\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27295,
		\"name\" : \"Phường 15\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27298,
		\"name\" : \"Phường 01\",
		\"type\" : \"Phường\",
		\"maqh\" : 773
	},
	{
		\"xaid\" : 27301,
		\"name\" : \"Phường 04\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27304,
		\"name\" : \"Phường 09\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27307,
		\"name\" : \"Phường 03\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27310,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27313,
		\"name\" : \"Phường 02\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27316,
		\"name\" : \"Phường 08\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27319,
		\"name\" : \"Phường 15\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27322,
		\"name\" : \"Phường 07\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27325,
		\"name\" : \"Phường 01\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27328,
		\"name\" : \"Phường 11\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27331,
		\"name\" : \"Phường 14\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27334,
		\"name\" : \"Phường 05\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27337,
		\"name\" : \"Phường 06\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27340,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27343,
		\"name\" : \"Phường 13\",
		\"type\" : \"Phường\",
		\"maqh\" : 774
	},
	{
		\"xaid\" : 27346,
		\"name\" : \"Phường 14\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27349,
		\"name\" : \"Phường 13\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27352,
		\"name\" : \"Phường 09\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27355,
		\"name\" : \"Phường 06\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27358,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27361,
		\"name\" : \"Phường 05\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27364,
		\"name\" : \"Phường 11\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27367,
		\"name\" : \"Phường 02\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27370,
		\"name\" : \"Phường 01\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27373,
		\"name\" : \"Phường 04\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27376,
		\"name\" : \"Phường 08\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27379,
		\"name\" : \"Phường 03\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27382,
		\"name\" : \"Phường 07\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27385,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 775
	},
	{
		\"xaid\" : 27388,
		\"name\" : \"Phường 08\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27391,
		\"name\" : \"Phường 02\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27394,
		\"name\" : \"Phường 01\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27397,
		\"name\" : \"Phường 03\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27400,
		\"name\" : \"Phường 11\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27403,
		\"name\" : \"Phường 09\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27406,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27409,
		\"name\" : \"Phường 04\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27412,
		\"name\" : \"Phường 13\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27415,
		\"name\" : \"Phường 12\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27418,
		\"name\" : \"Phường 05\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27421,
		\"name\" : \"Phường 14\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27424,
		\"name\" : \"Phường 06\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27427,
		\"name\" : \"Phường 15\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27430,
		\"name\" : \"Phường 16\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27433,
		\"name\" : \"Phường 07\",
		\"type\" : \"Phường\",
		\"maqh\" : 776
	},
	{
		\"xaid\" : 27436,
		\"name\" : \"Phường Bình Hưng Hòa\",
		\"type\" : \"Phường\",
		\"maqh\" : 777
	},
	{
		\"xaid\" : 27439,
		\"name\" : \"Phường Bình Hưng Hoà A\",
		\"type\" : \"Phường\",
		\"maqh\" : 777
	},
	{
		\"xaid\" : 27442,
		\"name\" : \"Phường Bình Hưng Hoà B\",
		\"type\" : \"Phường\",
		\"maqh\" : 777
	},
	{
		\"xaid\" : 27445,
		\"name\" : \"Phường Bình Trị Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 777
	},
	{
		\"xaid\" : 27448,
		\"name\" : \"Phường Bình Trị Đông A\",
		\"type\" : \"Phường\",
		\"maqh\" : 777
	},
	{
		\"xaid\" : 27451,
		\"name\" : \"Phường Bình Trị Đông B\",
		\"type\" : \"Phường\",
		\"maqh\" : 777
	},
	{
		\"xaid\" : 27454,
		\"name\" : \"Phường Tân Tạo\",
		\"type\" : \"Phường\",
		\"maqh\" : 777
	},
	{
		\"xaid\" : 27457,
		\"name\" : \"Phường Tân Tạo A\",
		\"type\" : \"Phường\",
		\"maqh\" : 777
	},
	{
		\"xaid\" : 27460,
		\"name\" : \"Phường  An Lạc\",
		\"type\" : \"Phường\",
		\"maqh\" : 777
	},
	{
		\"xaid\" : 27463,
		\"name\" : \"Phường An Lạc A\",
		\"type\" : \"Phường\",
		\"maqh\" : 777
	},
	{
		\"xaid\" : 27466,
		\"name\" : \"Phường Tân Thuận Đông\",
		\"type\" : \"Phường\",
		\"maqh\" : 778
	},
	{
		\"xaid\" : 27469,
		\"name\" : \"Phường Tân Thuận Tây\",
		\"type\" : \"Phường\",
		\"maqh\" : 778
	},
	{
		\"xaid\" : 27472,
		\"name\" : \"Phường Tân Kiểng\",
		\"type\" : \"Phường\",
		\"maqh\" : 778
	},
	{
		\"xaid\" : 27475,
		\"name\" : \"Phường Tân Hưng\",
		\"type\" : \"Phường\",
		\"maqh\" : 778
	},
	{
		\"xaid\" : 27478,
		\"name\" : \"Phường Bình Thuận\",
		\"type\" : \"Phường\",
		\"maqh\" : 778
	},
	{
		\"xaid\" : 27481,
		\"name\" : \"Phường Tân Quy\",
		\"type\" : \"Phường\",
		\"maqh\" : 778
	},
	{
		\"xaid\" : 27484,
		\"name\" : \"Phường Phú Thuận\",
		\"type\" : \"Phường\",
		\"maqh\" : 778
	},
	{
		\"xaid\" : 27487,
		\"name\" : \"Phường Tân Phú\",
		\"type\" : \"Phường\",
		\"maqh\" : 778
	},
	{
		\"xaid\" : 27490,
		\"name\" : \"Phường Tân Phong\",
		\"type\" : \"Phường\",
		\"maqh\" : 778
	},
	{
		\"xaid\" : 27493,
		\"name\" : \"Phường Phú Mỹ\",
		\"type\" : \"Phường\",
		\"maqh\" : 778
	},
	{
		\"xaid\" : 27496,
		\"name\" : \"Thị trấn Củ Chi\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27499,
		\"name\" : \"Xã Phú Mỹ Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27502,
		\"name\" : \"Xã An Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27505,
		\"name\" : \"Xã Trung Lập Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27508,
		\"name\" : \"Xã An Nhơn Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27511,
		\"name\" : \"Xã Nhuận Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27514,
		\"name\" : \"Xã Phạm Văn Cội\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27517,
		\"name\" : \"Xã Phú Hòa Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27520,
		\"name\" : \"Xã Trung Lập Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27523,
		\"name\" : \"Xã Trung An\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27526,
		\"name\" : \"Xã Phước Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27529,
		\"name\" : \"Xã Phước Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27532,
		\"name\" : \"Xã Tân An Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27535,
		\"name\" : \"Xã Phước Vĩnh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27538,
		\"name\" : \"Xã Thái Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27541,
		\"name\" : \"Xã Tân Thạnh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27544,
		\"name\" : \"Xã Hòa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27547,
		\"name\" : \"Xã Tân Thạnh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27550,
		\"name\" : \"Xã Bình Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27553,
		\"name\" : \"Xã Tân Phú Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27556,
		\"name\" : \"Xã Tân Thông Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 783
	},
	{
		\"xaid\" : 27559,
		\"name\" : \"Thị trấn Hóc Môn\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 784
	},
	{
		\"xaid\" : 27562,
		\"name\" : \"Xã Tân Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 784
	},
	{
		\"xaid\" : 27565,
		\"name\" : \"Xã Nhị Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 784
	},
	{
		\"xaid\" : 27568,
		\"name\" : \"Xã Đông Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 784
	},
	{
		\"xaid\" : 27571,
		\"name\" : \"Xã Tân Thới Nhì\",
		\"type\" : \"Xã\",
		\"maqh\" : 784
	},
	{
		\"xaid\" : 27574,
		\"name\" : \"Xã Thới Tam Thôn\",
		\"type\" : \"Xã\",
		\"maqh\" : 784
	},
	{
		\"xaid\" : 27577,
		\"name\" : \"Xã Xuân Thới Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 784
	},
	{
		\"xaid\" : 27580,
		\"name\" : \"Xã Tân Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 784
	},
	{
		\"xaid\" : 27583,
		\"name\" : \"Xã Xuân Thới Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 784
	},
	{
		\"xaid\" : 27586,
		\"name\" : \"Xã Trung Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 784
	},
	{
		\"xaid\" : 27589,
		\"name\" : \"Xã Xuân Thới Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 784
	},
	{
		\"xaid\" : 27592,
		\"name\" : \"Xã Bà Điểm\",
		\"type\" : \"Xã\",
		\"maqh\" : 784
	},
	{
		\"xaid\" : 27595,
		\"name\" : \"Thị trấn Tân Túc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27598,
		\"name\" : \"Xã Phạm Văn Hai\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27601,
		\"name\" : \"Xã Vĩnh Lộc A\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27604,
		\"name\" : \"Xã Vĩnh Lộc B\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27607,
		\"name\" : \"Xã Bình Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27610,
		\"name\" : \"Xã Lê Minh Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27613,
		\"name\" : \"Xã Tân Nhựt\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27616,
		\"name\" : \"Xã Tân Kiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27619,
		\"name\" : \"Xã Bình Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27622,
		\"name\" : \"Xã Phong Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27625,
		\"name\" : \"Xã An Phú Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27628,
		\"name\" : \"Xã Hưng Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27631,
		\"name\" : \"Xã Đa Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27634,
		\"name\" : \"Xã Tân Quý Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27637,
		\"name\" : \"Xã Bình Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27640,
		\"name\" : \"Xã Quy Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 785
	},
	{
		\"xaid\" : 27643,
		\"name\" : \"Thị trấn Nhà Bè\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 786
	},
	{
		\"xaid\" : 27646,
		\"name\" : \"Xã Phước Kiển\",
		\"type\" : \"Xã\",
		\"maqh\" : 786
	},
	{
		\"xaid\" : 27649,
		\"name\" : \"Xã Phước Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 786
	},
	{
		\"xaid\" : 27652,
		\"name\" : \"Xã Nhơn Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 786
	},
	{
		\"xaid\" : 27655,
		\"name\" : \"Xã Phú Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 786
	},
	{
		\"xaid\" : 27658,
		\"name\" : \"Xã Long Thới\",
		\"type\" : \"Xã\",
		\"maqh\" : 786
	},
	{
		\"xaid\" : 27661,
		\"name\" : \"Xã Hiệp Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 786
	},
	{
		\"xaid\" : 27664,
		\"name\" : \"Thị trấn Cần Thạnh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 787
	},
	{
		\"xaid\" : 27667,
		\"name\" : \"Xã Bình Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 787
	},
	{
		\"xaid\" : 27670,
		\"name\" : \"Xã Tam Thôn Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 787
	},
	{
		\"xaid\" : 27673,
		\"name\" : \"Xã An Thới Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 787
	},
	{
		\"xaid\" : 27676,
		\"name\" : \"Xã Thạnh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 787
	},
	{
		\"xaid\" : 27679,
		\"name\" : \"Xã Long Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 787
	},
	{
		\"xaid\" : 27682,
		\"name\" : \"Xã Lý Nhơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 787
	},
	{
		\"xaid\" : 27685,
		\"name\" : \"Phường 5\",
		\"type\" : \"Phường\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27688,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27691,
		\"name\" : \"Phường 4\",
		\"type\" : \"Phường\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27692,
		\"name\" : \"Phường Tân Khánh\",
		\"type\" : \"Phường\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27694,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27697,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27698,
		\"name\" : \"Phường 7\",
		\"type\" : \"Phường\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27700,
		\"name\" : \"Phường 6\",
		\"type\" : \"Phường\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27703,
		\"name\" : \"Xã Hướng Thọ Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27706,
		\"name\" : \"Xã Nhơn Thạnh Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27709,
		\"name\" : \"Xã Lợi Bình Nhơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27712,
		\"name\" : \"Xã Bình Tâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27715,
		\"name\" : \"Phường Khánh Hậu\",
		\"type\" : \"Phường\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27718,
		\"name\" : \"Xã An Vĩnh Ngãi\",
		\"type\" : \"Xã\",
		\"maqh\" : 794
	},
	{
		\"xaid\" : 27721,
		\"name\" : \"Thị trấn Tân Hưng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 796
	},
	{
		\"xaid\" : 27724,
		\"name\" : \"Xã Hưng Hà\",
		\"type\" : \"Xã\",
		\"maqh\" : 796
	},
	{
		\"xaid\" : 27727,
		\"name\" : \"Xã Hưng Điền B\",
		\"type\" : \"Xã\",
		\"maqh\" : 796
	},
	{
		\"xaid\" : 27730,
		\"name\" : \"Xã Hưng Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 796
	},
	{
		\"xaid\" : 27733,
		\"name\" : \"Xã Thạnh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 796
	},
	{
		\"xaid\" : 27736,
		\"name\" : \"Xã Hưng Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 796
	},
	{
		\"xaid\" : 27739,
		\"name\" : \"Xã Vĩnh Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 796
	},
	{
		\"xaid\" : 27742,
		\"name\" : \"Xã Vĩnh Châu B\",
		\"type\" : \"Xã\",
		\"maqh\" : 796
	},
	{
		\"xaid\" : 27745,
		\"name\" : \"Xã Vĩnh Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 796
	},
	{
		\"xaid\" : 27748,
		\"name\" : \"Xã Vĩnh Đại\",
		\"type\" : \"Xã\",
		\"maqh\" : 796
	},
	{
		\"xaid\" : 27751,
		\"name\" : \"Xã Vĩnh Châu A\",
		\"type\" : \"Xã\",
		\"maqh\" : 796
	},
	{
		\"xaid\" : 27754,
		\"name\" : \"Xã Vĩnh Bửu\",
		\"type\" : \"Xã\",
		\"maqh\" : 796
	},
	{
		\"xaid\" : 27757,
		\"name\" : \"Thị trấn Vĩnh Hưng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 797
	},
	{
		\"xaid\" : 27760,
		\"name\" : \"Xã Hưng Điền A\",
		\"type\" : \"Xã\",
		\"maqh\" : 797
	},
	{
		\"xaid\" : 27763,
		\"name\" : \"Xã Khánh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 797
	},
	{
		\"xaid\" : 27766,
		\"name\" : \"Xã Thái Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 797
	},
	{
		\"xaid\" : 27769,
		\"name\" : \"Xã Vĩnh Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 797
	},
	{
		\"xaid\" : 27772,
		\"name\" : \"Xã Thái Bình Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 797
	},
	{
		\"xaid\" : 27775,
		\"name\" : \"Xã Vĩnh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 797
	},
	{
		\"xaid\" : 27778,
		\"name\" : \"Xã Vĩnh Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 797
	},
	{
		\"xaid\" : 27781,
		\"name\" : \"Xã Tuyên Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 797
	},
	{
		\"xaid\" : 27784,
		\"name\" : \"Xã Tuyên Bình Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 797
	},
	{
		\"xaid\" : 27787,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 795
	},
	{
		\"xaid\" : 27788,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 795
	},
	{
		\"xaid\" : 27790,
		\"name\" : \"Xã Thạnh Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 795
	},
	{
		\"xaid\" : 27793,
		\"name\" : \"Xã Bình Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 795
	},
	{
		\"xaid\" : 27796,
		\"name\" : \"Xã Bình Hòa Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 798
	},
	{
		\"xaid\" : 27799,
		\"name\" : \"Xã Bình Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 795
	},
	{
		\"xaid\" : 27802,
		\"name\" : \"Xã Bình Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 798
	},
	{
		\"xaid\" : 27805,
		\"name\" : \"Xã Tuyên Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 795
	},
	{
		\"xaid\" : 27806,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 795
	},
	{
		\"xaid\" : 27808,
		\"name\" : \"Xã Bình Hòa Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 798
	},
	{
		\"xaid\" : 27811,
		\"name\" : \"Xã Bình Hòa Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 798
	},
	{
		\"xaid\" : 27814,
		\"name\" : \"Xã Bình Phong Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 798
	},
	{
		\"xaid\" : 27817,
		\"name\" : \"Xã Thạnh Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 795
	},
	{
		\"xaid\" : 27820,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 798
	},
	{
		\"xaid\" : 27823,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 798
	},
	{
		\"xaid\" : 27826,
		\"name\" : \"Thị trấn Tân Thạnh\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27829,
		\"name\" : \"Xã Bắc Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27832,
		\"name\" : \"Xã Hậu Thạnh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27835,
		\"name\" : \"Xã Nhơn Hòa Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27838,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27841,
		\"name\" : \"Xã Hậu Thạnh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27844,
		\"name\" : \"Xã Nhơn Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27847,
		\"name\" : \"Xã Kiến Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27850,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27853,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27856,
		\"name\" : \"Xã Tân Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27859,
		\"name\" : \"Xã Nhơn Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27862,
		\"name\" : \"Xã Tân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 799
	},
	{
		\"xaid\" : 27865,
		\"name\" : \"Thị trấn Thạnh Hóa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 800
	},
	{
		\"xaid\" : 27868,
		\"name\" : \"Xã Tân Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 800
	},
	{
		\"xaid\" : 27871,
		\"name\" : \"Xã Thuận Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 800
	},
	{
		\"xaid\" : 27874,
		\"name\" : \"Xã Thạnh Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 800
	},
	{
		\"xaid\" : 27877,
		\"name\" : \"Xã Thạnh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 800
	},
	{
		\"xaid\" : 27880,
		\"name\" : \"Xã Thuận Nghĩa Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 800
	},
	{
		\"xaid\" : 27883,
		\"name\" : \"Xã Thủy Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 800
	},
	{
		\"xaid\" : 27886,
		\"name\" : \"Xã Thủy Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 800
	},
	{
		\"xaid\" : 27889,
		\"name\" : \"Xã Tân Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 800
	},
	{
		\"xaid\" : 27892,
		\"name\" : \"Xã Tân Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 800
	},
	{
		\"xaid\" : 27895,
		\"name\" : \"Xã Thạnh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 800
	},
	{
		\"xaid\" : 27898,
		\"name\" : \"Thị trấn Đông Thành\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 801
	},
	{
		\"xaid\" : 27901,
		\"name\" : \"Xã Mỹ Quý Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 801
	},
	{
		\"xaid\" : 27904,
		\"name\" : \"Xã Mỹ Thạnh Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 801
	},
	{
		\"xaid\" : 27907,
		\"name\" : \"Xã Mỹ Quý Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 801
	},
	{
		\"xaid\" : 27910,
		\"name\" : \"Xã Mỹ Thạnh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 801
	},
	{
		\"xaid\" : 27913,
		\"name\" : \"Xã Mỹ Thạnh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 801
	},
	{
		\"xaid\" : 27916,
		\"name\" : \"Xã Bình Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 801
	},
	{
		\"xaid\" : 27919,
		\"name\" : \"Xã Bình Hòa Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 801
	},
	{
		\"xaid\" : 27922,
		\"name\" : \"Xã Bình Hòa Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 801
	},
	{
		\"xaid\" : 27925,
		\"name\" : \"Xã Bình Hòa Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 801
	},
	{
		\"xaid\" : 27928,
		\"name\" : \"Xã Mỹ Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 801
	},
	{
		\"xaid\" : 27931,
		\"name\" : \"Thị trấn Hậu Nghĩa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27934,
		\"name\" : \"Thị trấn Hiệp Hòa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27937,
		\"name\" : \"Thị trấn Đức Hòa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27940,
		\"name\" : \"Xã Lộc Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27943,
		\"name\" : \"Xã An Ninh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27946,
		\"name\" : \"Xã An Ninh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27949,
		\"name\" : \"Xã Tân Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27952,
		\"name\" : \"Xã Hiệp Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27955,
		\"name\" : \"Xã Đức Lập Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27958,
		\"name\" : \"Xã Đức Lập Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27961,
		\"name\" : \"Xã Tân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27964,
		\"name\" : \"Xã Mỹ Hạnh Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27967,
		\"name\" : \"Xã Đức Hòa Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27970,
		\"name\" : \"Xã Hòa Khánh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27973,
		\"name\" : \"Xã Hòa Khánh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27976,
		\"name\" : \"Xã Mỹ Hạnh Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27979,
		\"name\" : \"Xã Hòa Khánh Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27982,
		\"name\" : \"Xã Đức Hòa Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27985,
		\"name\" : \"Xã Đức Hòa Hạ\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27988,
		\"name\" : \"Xã Hựu Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 802
	},
	{
		\"xaid\" : 27991,
		\"name\" : \"Thị trấn Bến Lức\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 27994,
		\"name\" : \"Xã Thạnh Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 27997,
		\"name\" : \"Xã Lương Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28000,
		\"name\" : \"Xã Thạnh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28003,
		\"name\" : \"Xã Lương Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28006,
		\"name\" : \"Xã Tân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28009,
		\"name\" : \"Xã Tân Bửu\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28012,
		\"name\" : \"Xã An Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28015,
		\"name\" : \"Xã Bình Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28018,
		\"name\" : \"Xã Mỹ Yên\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28021,
		\"name\" : \"Xã Thanh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28024,
		\"name\" : \"Xã Long Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28027,
		\"name\" : \"Xã Thạnh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28030,
		\"name\" : \"Xã Phước Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28033,
		\"name\" : \"Xã Nhựt Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 803
	},
	{
		\"xaid\" : 28036,
		\"name\" : \"Thị trấn Thủ Thừa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28039,
		\"name\" : \"Xã Long Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28042,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28045,
		\"name\" : \"Xã Long Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28048,
		\"name\" : \"Xã Mỹ Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28051,
		\"name\" : \"Xã Mỹ Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28054,
		\"name\" : \"Xã Bình An\",
		\"type\" : \"Xã\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28057,
		\"name\" : \"Xã Nhị Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28060,
		\"name\" : \"Xã Mỹ An\",
		\"type\" : \"Xã\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28063,
		\"name\" : \"Xã Bình Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28066,
		\"name\" : \"Xã Mỹ Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28069,
		\"name\" : \"Xã Long Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28072,
		\"name\" : \"Xã Tân Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 804
	},
	{
		\"xaid\" : 28075,
		\"name\" : \"Thị trấn Tân Trụ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 805
	},
	{
		\"xaid\" : 28078,
		\"name\" : \"Xã Mỹ Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 805
	},
	{
		\"xaid\" : 28081,
		\"name\" : \"Xã An Nhựt Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 805
	},
	{
		\"xaid\" : 28084,
		\"name\" : \"Xã Quê Mỹ Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 805
	},
	{
		\"xaid\" : 28087,
		\"name\" : \"Xã Lạc Tấn\",
		\"type\" : \"Xã\",
		\"maqh\" : 805
	},
	{
		\"xaid\" : 28090,
		\"name\" : \"Xã Bình Trinh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 805
	},
	{
		\"xaid\" : 28093,
		\"name\" : \"Xã Tân Phước Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 805
	},
	{
		\"xaid\" : 28096,
		\"name\" : \"Xã Bình Lãng\",
		\"type\" : \"Xã\",
		\"maqh\" : 805
	},
	{
		\"xaid\" : 28099,
		\"name\" : \"Xã Bình Tịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 805
	},
	{
		\"xaid\" : 28102,
		\"name\" : \"Xã Đức Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 805
	},
	{
		\"xaid\" : 28105,
		\"name\" : \"Xã Nhựt Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 805
	},
	{
		\"xaid\" : 28108,
		\"name\" : \"Thị trấn Cần Đước\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28111,
		\"name\" : \"Xã Long Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28114,
		\"name\" : \"Xã Long Khê\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28117,
		\"name\" : \"Xã Long Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28120,
		\"name\" : \"Xã Phước Vân\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28123,
		\"name\" : \"Xã Long Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28126,
		\"name\" : \"Xã Long Cang\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28129,
		\"name\" : \"Xã Long Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28132,
		\"name\" : \"Xã Tân Trạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28135,
		\"name\" : \"Xã Mỹ Lệ\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28138,
		\"name\" : \"Xã Tân Lân\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28141,
		\"name\" : \"Xã Phước Tuy\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28144,
		\"name\" : \"Xã Long Hựu Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28147,
		\"name\" : \"Xã Tân Ân\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28150,
		\"name\" : \"Xã Phước Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28153,
		\"name\" : \"Xã Long Hựu Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28156,
		\"name\" : \"Xã Tân Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 806
	},
	{
		\"xaid\" : 28159,
		\"name\" : \"Thị trấn Cần Giuộc\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28162,
		\"name\" : \"Xã Phước Lý\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28165,
		\"name\" : \"Xã Long Thượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28168,
		\"name\" : \"Xã Long Hậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28171,
		\"name\" : \"Xã Tân Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28174,
		\"name\" : \"Xã Phước Hậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28177,
		\"name\" : \"Xã Mỹ Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28180,
		\"name\" : \"Xã Phước Lại\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28183,
		\"name\" : \"Xã Phước Lâm\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28186,
		\"name\" : \"Xã Trường Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28189,
		\"name\" : \"Xã Thuận Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28192,
		\"name\" : \"Xã Phước Vĩnh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28195,
		\"name\" : \"Xã Phước Vĩnh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28198,
		\"name\" : \"Xã Long An\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28201,
		\"name\" : \"Xã Long Phụng\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28204,
		\"name\" : \"Xã Đông Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28207,
		\"name\" : \"Xã Tân Tập\",
		\"type\" : \"Xã\",
		\"maqh\" : 807
	},
	{
		\"xaid\" : 28210,
		\"name\" : \"Thị trấn Tầm Vu\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28213,
		\"name\" : \"Xã Bình Quới\",
		\"type\" : \"Xã\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28216,
		\"name\" : \"Xã Hòa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28219,
		\"name\" : \"Xã Phú Ngãi Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28222,
		\"name\" : \"Xã Vĩnh Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28225,
		\"name\" : \"Xã Thuận Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28228,
		\"name\" : \"Xã Hiệp Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28231,
		\"name\" : \"Xã Phước Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28234,
		\"name\" : \"Xã Thanh Phú Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28237,
		\"name\" : \"Xã Dương Xuân Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28240,
		\"name\" : \"Xã An Lục Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28243,
		\"name\" : \"Xã Long Trì\",
		\"type\" : \"Xã\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28246,
		\"name\" : \"Xã Thanh Vĩnh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 808
	},
	{
		\"xaid\" : 28249,
		\"name\" : \"Phường 5\",
		\"type\" : \"Phường\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28252,
		\"name\" : \"Phường 4\",
		\"type\" : \"Phường\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28255,
		\"name\" : \"Phường 7\",
		\"type\" : \"Phường\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28258,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28261,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28264,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28267,
		\"name\" : \"Phường 8\",
		\"type\" : \"Phường\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28270,
		\"name\" : \"Phường 6\",
		\"type\" : \"Phường\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28273,
		\"name\" : \"Phường 9\",
		\"type\" : \"Phường\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28276,
		\"name\" : \"Phường 10\",
		\"type\" : \"Phường\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28279,
		\"name\" : \"Phường Tân Long\",
		\"type\" : \"Phường\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28282,
		\"name\" : \"Xã Đạo Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28285,
		\"name\" : \"Xã Trung An\",
		\"type\" : \"Xã\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28288,
		\"name\" : \"Xã Mỹ Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28291,
		\"name\" : \"Xã Tân Mỹ Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28294,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 816
	},
	{
		\"xaid\" : 28297,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 816
	},
	{
		\"xaid\" : 28300,
		\"name\" : \"Phường 4\",
		\"type\" : \"Phường\",
		\"maqh\" : 816
	},
	{
		\"xaid\" : 28303,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 816
	},
	{
		\"xaid\" : 28306,
		\"name\" : \"Phường 5\",
		\"type\" : \"Phường\",
		\"maqh\" : 816
	},
	{
		\"xaid\" : 28309,
		\"name\" : \"Xã Long Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 816
	},
	{
		\"xaid\" : 28312,
		\"name\" : \"Xã Long Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 816
	},
	{
		\"xaid\" : 28315,
		\"name\" : \"Xã Long Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 816
	},
	{
		\"xaid\" : 28318,
		\"name\" : \"Xã Long Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 816
	},
	{
		\"xaid\" : 28321,
		\"name\" : \"Thị trấn Mỹ Phước\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28324,
		\"name\" : \"Xã Tân Hòa Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28327,
		\"name\" : \"Xã Thạnh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28330,
		\"name\" : \"Xã Thạnh Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28333,
		\"name\" : \"Xã Thạnh Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28336,
		\"name\" : \"Xã Phú Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28339,
		\"name\" : \"Xã Tân Hòa Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28342,
		\"name\" : \"Xã Hưng Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28345,
		\"name\" : \"Xã Tân Lập 1\",
		\"type\" : \"Xã\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28348,
		\"name\" : \"Xã Tân Hòa Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28351,
		\"name\" : \"Xã Mỹ Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28354,
		\"name\" : \"Xã Tân Lập 2\",
		\"type\" : \"Xã\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28357,
		\"name\" : \"Xã Phước Lập\",
		\"type\" : \"Xã\",
		\"maqh\" : 818
	},
	{
		\"xaid\" : 28360,
		\"name\" : \"Thị trấn Cái Bè\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28363,
		\"name\" : \"Xã Hậu Mỹ Bắc B\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28366,
		\"name\" : \"Xã Hậu Mỹ Bắc A\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28369,
		\"name\" : \"Xã Mỹ Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28372,
		\"name\" : \"Xã Hậu Mỹ Trinh\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28375,
		\"name\" : \"Xã Hậu Mỹ Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28378,
		\"name\" : \"Xã Mỹ Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28381,
		\"name\" : \"Xã Mỹ Lợi B\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28384,
		\"name\" : \"Xã Thiện Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28387,
		\"name\" : \"Xã Mỹ Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28390,
		\"name\" : \"Xã An Cư\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28393,
		\"name\" : \"Xã Hậu Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28396,
		\"name\" : \"Xã Mỹ Lợi A\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28399,
		\"name\" : \"Xã Hòa Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28402,
		\"name\" : \"Xã Thiện Trí\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28405,
		\"name\" : \"Xã Mỹ Đức Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28408,
		\"name\" : \"Xã Mỹ Đức Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28411,
		\"name\" : \"Xã Đông Hòa Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28414,
		\"name\" : \"Xã An Thái Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28417,
		\"name\" : \"Xã Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28420,
		\"name\" : \"Xã Mỹ Lương\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28423,
		\"name\" : \"Xã Tân Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28426,
		\"name\" : \"Xã An Thái Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28429,
		\"name\" : \"Xã An Hữu\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28432,
		\"name\" : \"Xã Hòa Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 819
	},
	{
		\"xaid\" : 28435,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28436,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28437,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28438,
		\"name\" : \"Xã Thạnh Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28439,
		\"name\" : \"Phường 4\",
		\"type\" : \"Phường\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28440,
		\"name\" : \"Phường 5\",
		\"type\" : \"Phường\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28441,
		\"name\" : \"Xã Mỹ Thành Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28444,
		\"name\" : \"Xã Phú Cường\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28447,
		\"name\" : \"Xã Mỹ Phước Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28450,
		\"name\" : \"Xã Mỹ Hạnh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28453,
		\"name\" : \"Xã Mỹ Hạnh Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28456,
		\"name\" : \"Xã Mỹ Thành Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28459,
		\"name\" : \"Xã Tân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28462,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28465,
		\"name\" : \"Xã Phú Nhuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28468,
		\"name\" : \"Xã Tân Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28471,
		\"name\" : \"Xã Bình Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28474,
		\"name\" : \"Phường Nhị Mỹ\",
		\"type\" : \"Phường\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28477,
		\"name\" : \"Xã Nhị Quý\",
		\"type\" : \"Xã\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28480,
		\"name\" : \"Xã Thanh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28483,
		\"name\" : \"Xã Phú Quý\",
		\"type\" : \"Xã\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28486,
		\"name\" : \"Xã Long Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 817
	},
	{
		\"xaid\" : 28489,
		\"name\" : \"Xã Cẩm Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28492,
		\"name\" : \"Xã Phú An\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28495,
		\"name\" : \"Xã Mỹ Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28498,
		\"name\" : \"Xã Long Tiên\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28501,
		\"name\" : \"Xã Hiệp Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28504,
		\"name\" : \"Xã Long Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28507,
		\"name\" : \"Xã Hội Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28510,
		\"name\" : \"Xã Tân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28513,
		\"name\" : \"Xã Tam Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28516,
		\"name\" : \"Xã Ngũ Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 820
	},
	{
		\"xaid\" : 28519,
		\"name\" : \"Thị trấn Tân Hiệp\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28522,
		\"name\" : \"Xã Tân Hội Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28525,
		\"name\" : \"Xã Tân Hương\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28528,
		\"name\" : \"Xã Tân Lý Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28531,
		\"name\" : \"Xã Tân Lý Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28534,
		\"name\" : \"Xã Thân Cửu Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28537,
		\"name\" : \"Xã Tam Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28540,
		\"name\" : \"Xã Điềm Hy\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28543,
		\"name\" : \"Xã Nhị Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28546,
		\"name\" : \"Xã Dưỡng Điềm\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28549,
		\"name\" : \"Xã Đông Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28552,
		\"name\" : \"Xã Long Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28555,
		\"name\" : \"Xã Hữu Đạo\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28558,
		\"name\" : \"Xã Long An\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28561,
		\"name\" : \"Xã Long Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28564,
		\"name\" : \"Xã Bình Trưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28567,
		\"name\" : \"Xã Phước Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28570,
		\"name\" : \"Xã Thạnh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28573,
		\"name\" : \"Xã Bàn Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28576,
		\"name\" : \"Xã Vĩnh Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28579,
		\"name\" : \"Xã Bình Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28582,
		\"name\" : \"Xã Song Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28585,
		\"name\" : \"Xã Kim Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28588,
		\"name\" : \"Xã Phú Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 821
	},
	{
		\"xaid\" : 28591,
		\"name\" : \"Xã Thới Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 815
	},
	{
		\"xaid\" : 28594,
		\"name\" : \"Thị trấn Chợ Gạo\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28597,
		\"name\" : \"Xã Trung Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28600,
		\"name\" : \"Xã Hòa Tịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28603,
		\"name\" : \"Xã Mỹ Tịnh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28606,
		\"name\" : \"Xã Tân Bình Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28609,
		\"name\" : \"Xã Phú Kiết\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28612,
		\"name\" : \"Xã Lương Hòa Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28615,
		\"name\" : \"Xã Thanh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28618,
		\"name\" : \"Xã Quơn Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28621,
		\"name\" : \"Xã Bình Phục Nhứt\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28624,
		\"name\" : \"Xã Đăng Hưng Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28627,
		\"name\" : \"Xã Tân Thuận Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28630,
		\"name\" : \"Xã Song Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28633,
		\"name\" : \"Xã Bình Phan\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28636,
		\"name\" : \"Xã Long Bình Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28639,
		\"name\" : \"Xã An Thạnh Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28642,
		\"name\" : \"Xã Xuân Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28645,
		\"name\" : \"Xã Hòa Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28648,
		\"name\" : \"Xã Bình Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 822
	},
	{
		\"xaid\" : 28651,
		\"name\" : \"Thị trấn Vĩnh Bình\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28654,
		\"name\" : \"Xã Đồng Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28657,
		\"name\" : \"Xã Bình Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28660,
		\"name\" : \"Xã Đồng Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28663,
		\"name\" : \"Xã Thành Công\",
		\"type\" : \"Xã\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28666,
		\"name\" : \"Xã Bình Nhì\",
		\"type\" : \"Xã\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28669,
		\"name\" : \"Xã Yên Luông\",
		\"type\" : \"Xã\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28672,
		\"name\" : \"Xã Thạnh Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28675,
		\"name\" : \"Xã Thạnh Nhựt\",
		\"type\" : \"Xã\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28678,
		\"name\" : \"Xã Long Vĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28681,
		\"name\" : \"Xã Bình Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28684,
		\"name\" : \"Xã Vĩnh Hựu\",
		\"type\" : \"Xã\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28687,
		\"name\" : \"Xã Long Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 823
	},
	{
		\"xaid\" : 28690,
		\"name\" : \"Xã Tân Thới\",
		\"type\" : \"Xã\",
		\"maqh\" : 825
	},
	{
		\"xaid\" : 28693,
		\"name\" : \"Xã Tân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 825
	},
	{
		\"xaid\" : 28696,
		\"name\" : \"Xã Phú Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 825
	},
	{
		\"xaid\" : 28699,
		\"name\" : \"Xã Tân Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 825
	},
	{
		\"xaid\" : 28702,
		\"name\" : \"Thị trấn Tân Hòa\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28705,
		\"name\" : \"Xã Tăng Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28708,
		\"name\" : \"Xã Bình Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 816
	},
	{
		\"xaid\" : 28711,
		\"name\" : \"Xã Tân Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28714,
		\"name\" : \"Xã Gia Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28717,
		\"name\" : \"Xã Bình Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 816
	},
	{
		\"xaid\" : 28720,
		\"name\" : \"Thị trấn Vàm Láng\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28723,
		\"name\" : \"Xã Tân Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28726,
		\"name\" : \"Xã Kiểng Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28729,
		\"name\" : \"Xã Tân Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 816
	},
	{
		\"xaid\" : 28732,
		\"name\" : \"Xã Tân Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28735,
		\"name\" : \"Xã Bình Ân\",
		\"type\" : \"Xã\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28738,
		\"name\" : \"Xã Tân Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28741,
		\"name\" : \"Xã Bình Nghị\",
		\"type\" : \"Xã\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28744,
		\"name\" : \"Xã Phước Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28747,
		\"name\" : \"Xã Tân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 824
	},
	{
		\"xaid\" : 28750,
		\"name\" : \"Xã Phú Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 825
	},
	{
		\"xaid\" : 28753,
		\"name\" : \"Xã Phú Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 825
	},
	{
		\"xaid\" : 28756,
		\"name\" : \"Phường Phú Khương\",
		\"type\" : \"Phường\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28757,
		\"name\" : \"Phường Phú Tân\",
		\"type\" : \"Phường\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28759,
		\"name\" : \"Phường 8\",
		\"type\" : \"Phường\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28762,
		\"name\" : \"Phường 6\",
		\"type\" : \"Phường\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28765,
		\"name\" : \"Phường 4\",
		\"type\" : \"Phường\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28768,
		\"name\" : \"Phường 5\",
		\"type\" : \"Phường\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28771,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28774,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28777,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28780,
		\"name\" : \"Phường 7\",
		\"type\" : \"Phường\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28783,
		\"name\" : \"Xã Sơn Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28786,
		\"name\" : \"Xã Phú Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28789,
		\"name\" : \"Xã Bình Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28792,
		\"name\" : \"Xã Mỹ Thạnh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28795,
		\"name\" : \"Xã Nhơn Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28798,
		\"name\" : \"Xã Phú Nhuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28801,
		\"name\" : \"Thị trấn Châu Thành\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28804,
		\"name\" : \"Xã Tân Thạch\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28807,
		\"name\" : \"Xã Qưới Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28810,
		\"name\" : \"Xã An Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28813,
		\"name\" : \"Xã Giao Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28816,
		\"name\" : \"Xã Giao Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28819,
		\"name\" : \"Xã Phú Túc\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28822,
		\"name\" : \"Xã Phú Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28825,
		\"name\" : \"Xã Phú An Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28828,
		\"name\" : \"Xã An Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28831,
		\"name\" : \"Xã Tam Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28834,
		\"name\" : \"Xã Thành Triệu\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28837,
		\"name\" : \"Xã Tường Đa\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28840,
		\"name\" : \"Xã Tân Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28843,
		\"name\" : \"Xã Quới Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28846,
		\"name\" : \"Xã Phước Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28849,
		\"name\" : \"Xã An Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28852,
		\"name\" : \"Xã Tiên Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28855,
		\"name\" : \"Xã An Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28858,
		\"name\" : \"Xã Hữu Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28861,
		\"name\" : \"Xã Tiên Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28864,
		\"name\" : \"Xã Sơn Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 831
	},
	{
		\"xaid\" : 28867,
		\"name\" : \"Xã Mỹ Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 829
	},
	{
		\"xaid\" : 28870,
		\"name\" : \"Thị trấn Chợ Lách\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 832
	},
	{
		\"xaid\" : 28873,
		\"name\" : \"Xã Phú Phụng\",
		\"type\" : \"Xã\",
		\"maqh\" : 832
	},
	{
		\"xaid\" : 28876,
		\"name\" : \"Xã Sơn Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 832
	},
	{
		\"xaid\" : 28879,
		\"name\" : \"Xã Vĩnh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 832
	},
	{
		\"xaid\" : 28882,
		\"name\" : \"Xã Hòa Nghĩa\",
		\"type\" : \"Xã\",
		\"maqh\" : 832
	},
	{
		\"xaid\" : 28885,
		\"name\" : \"Xã Long Thới\",
		\"type\" : \"Xã\",
		\"maqh\" : 832
	},
	{
		\"xaid\" : 28888,
		\"name\" : \"Xã Phú Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 832
	},
	{
		\"xaid\" : 28889,
		\"name\" : \"Xã Phú Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28891,
		\"name\" : \"Xã Tân Thiềng\",
		\"type\" : \"Xã\",
		\"maqh\" : 832
	},
	{
		\"xaid\" : 28894,
		\"name\" : \"Xã Vĩnh Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 832
	},
	{
		\"xaid\" : 28897,
		\"name\" : \"Xã Vĩnh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 832
	},
	{
		\"xaid\" : 28900,
		\"name\" : \"Xã Hưng Khánh Trung B\",
		\"type\" : \"Xã\",
		\"maqh\" : 832
	},
	{
		\"xaid\" : 28901,
		\"name\" : \"Xã Hưng Khánh Trung A\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28903,
		\"name\" : \"Thị trấn Mỏ Cày\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28906,
		\"name\" : \"Xã Thanh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28909,
		\"name\" : \"Xã Thạnh Ngãi\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28912,
		\"name\" : \"Xã Tân Phú Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28915,
		\"name\" : \"Xã Phước Mỹ Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28918,
		\"name\" : \"Xã Tân Thành Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28921,
		\"name\" : \"Xã Thành An\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28924,
		\"name\" : \"Xã Hòa Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28927,
		\"name\" : \"Xã Tân Thanh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28930,
		\"name\" : \"Xã Định Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28933,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28936,
		\"name\" : \"Xã Nhuận Phú Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28939,
		\"name\" : \"Xã Đa Phước Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28940,
		\"name\" : \"Xã Tân Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28942,
		\"name\" : \"Xã Phước Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28945,
		\"name\" : \"Xã Bình Khánh Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28948,
		\"name\" : \"Xã Khánh Thạnh Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 838
	},
	{
		\"xaid\" : 28951,
		\"name\" : \"Xã An Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28954,
		\"name\" : \"Xã Bình Khánh Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28957,
		\"name\" : \"Xã An Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28960,
		\"name\" : \"Xã Thành Thới B\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28963,
		\"name\" : \"Xã Tân Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28966,
		\"name\" : \"Xã An Thới\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28969,
		\"name\" : \"Xã Thành Thới A\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28972,
		\"name\" : \"Xã Minh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28975,
		\"name\" : \"Xã Ngãi Đăng\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28978,
		\"name\" : \"Xã Cẩm Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28981,
		\"name\" : \"Xã Hương Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 833
	},
	{
		\"xaid\" : 28984,
		\"name\" : \"Thị trấn Giồng Trôm\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 28987,
		\"name\" : \"Xã Phong Nẫm\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 28990,
		\"name\" : \"Xã Phong Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 28993,
		\"name\" : \"Xã Mỹ Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 28996,
		\"name\" : \"Xã Châu Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 28999,
		\"name\" : \"Xã Lương Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29002,
		\"name\" : \"Xã Lương Quới\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29005,
		\"name\" : \"Xã Lương Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29008,
		\"name\" : \"Xã Châu Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29011,
		\"name\" : \"Xã Thuận Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29014,
		\"name\" : \"Xã Sơn Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29017,
		\"name\" : \"Xã Bình Hoà\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29020,
		\"name\" : \"Xã Phước Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29023,
		\"name\" : \"Xã Hưng Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29026,
		\"name\" : \"Xã Long Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29029,
		\"name\" : \"Xã Tân Hào\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29032,
		\"name\" : \"Xã Bình Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29035,
		\"name\" : \"Xã Tân Thanh\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29038,
		\"name\" : \"Xã Tân Lợi Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29041,
		\"name\" : \"Xã Thạnh Phú Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29044,
		\"name\" : \"Xã Hưng Nhượng\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29047,
		\"name\" : \"Xã Hưng Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 834
	},
	{
		\"xaid\" : 29050,
		\"name\" : \"Thị trấn Bình Đại\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29053,
		\"name\" : \"Xã Tam Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29056,
		\"name\" : \"Xã Long Định\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29059,
		\"name\" : \"Xã Long Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29062,
		\"name\" : \"Xã Phú Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29065,
		\"name\" : \"Xã Vang Quới Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29068,
		\"name\" : \"Xã Vang Quới Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29071,
		\"name\" : \"Xã Châu Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29074,
		\"name\" : \"Xã Phú Vang\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29077,
		\"name\" : \"Xã Lộc Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29080,
		\"name\" : \"Xã Định Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29083,
		\"name\" : \"Xã Thới Lai\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29086,
		\"name\" : \"Xã Bình Thới\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29089,
		\"name\" : \"Xã Phú Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29092,
		\"name\" : \"Xã Bình Thắng\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29095,
		\"name\" : \"Xã Thạnh Trị\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29098,
		\"name\" : \"Xã Đại Hòa Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29101,
		\"name\" : \"Xã Thừa Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29104,
		\"name\" : \"Xã Thạnh Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29107,
		\"name\" : \"Xã Thới Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 835
	},
	{
		\"xaid\" : 29110,
		\"name\" : \"Thị trấn Ba Tri\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29113,
		\"name\" : \"Xã Tân Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29116,
		\"name\" : \"Xã Mỹ Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29119,
		\"name\" : \"Xã Tân Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29122,
		\"name\" : \"Xã Mỹ Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29125,
		\"name\" : \"Xã Bảo Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29128,
		\"name\" : \"Xã An Phú Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29131,
		\"name\" : \"Xã Mỹ Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29134,
		\"name\" : \"Xã Mỹ Nhơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29137,
		\"name\" : \"Xã Phước Tuy\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29140,
		\"name\" : \"Xã Phú Ngãi\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29143,
		\"name\" : \"Xã An Ngãi Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29146,
		\"name\" : \"Xã Phú Lễ\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29149,
		\"name\" : \"Xã An Bình Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29152,
		\"name\" : \"Xã Bảo Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29155,
		\"name\" : \"Xã Tân Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29158,
		\"name\" : \"Xã An Ngãi Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29161,
		\"name\" : \"Xã An Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29164,
		\"name\" : \"Xã Vĩnh Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29167,
		\"name\" : \"Xã Tân Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29170,
		\"name\" : \"Xã Vĩnh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29173,
		\"name\" : \"Xã An Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29176,
		\"name\" : \"Xã An Hòa Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29179,
		\"name\" : \"Xã An Thủy\",
		\"type\" : \"Xã\",
		\"maqh\" : 836
	},
	{
		\"xaid\" : 29182,
		\"name\" : \"Thị trấn Thạnh Phú\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29185,
		\"name\" : \"Xã Phú Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29188,
		\"name\" : \"Xã Đại Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29191,
		\"name\" : \"Xã Quới Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29194,
		\"name\" : \"Xã Tân Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29197,
		\"name\" : \"Xã Mỹ Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29200,
		\"name\" : \"Xã An Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29203,
		\"name\" : \"Xã Thới Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29206,
		\"name\" : \"Xã Hòa Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29209,
		\"name\" : \"Xã An Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29212,
		\"name\" : \"Xã Bình Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29215,
		\"name\" : \"Xã An Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29218,
		\"name\" : \"Xã An Quy\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29221,
		\"name\" : \"Xã Thạnh Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29224,
		\"name\" : \"Xã An Nhơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29227,
		\"name\" : \"Xã Giao Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29230,
		\"name\" : \"Xã Thạnh Phong\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29233,
		\"name\" : \"Xã Mỹ An\",
		\"type\" : \"Xã\",
		\"maqh\" : 837
	},
	{
		\"xaid\" : 29236,
		\"name\" : \"Phường 4\",
		\"type\" : \"Phường\",
		\"maqh\" : 842
	},
	{
		\"xaid\" : 29239,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 842
	},
	{
		\"xaid\" : 29242,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 842
	},
	{
		\"xaid\" : 29245,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 842
	},
	{
		\"xaid\" : 29248,
		\"name\" : \"Phường 5\",
		\"type\" : \"Phường\",
		\"maqh\" : 842
	},
	{
		\"xaid\" : 29251,
		\"name\" : \"Phường 6\",
		\"type\" : \"Phường\",
		\"maqh\" : 842
	},
	{
		\"xaid\" : 29254,
		\"name\" : \"Phường 7\",
		\"type\" : \"Phường\",
		\"maqh\" : 842
	},
	{
		\"xaid\" : 29257,
		\"name\" : \"Phường 8\",
		\"type\" : \"Phường\",
		\"maqh\" : 842
	},
	{
		\"xaid\" : 29260,
		\"name\" : \"Phường 9\",
		\"type\" : \"Phường\",
		\"maqh\" : 842
	},
	{
		\"xaid\" : 29263,
		\"name\" : \"Xã Long Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 842
	},
	{
		\"xaid\" : 29266,
		\"name\" : \"Thị trấn Càng Long\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29269,
		\"name\" : \"Xã Mỹ Cẩm\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29272,
		\"name\" : \"Xã An Trường A\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29275,
		\"name\" : \"Xã An Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29278,
		\"name\" : \"Xã Huyền Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29281,
		\"name\" : \"Xã Tân An\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29284,
		\"name\" : \"Xã Tân Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29287,
		\"name\" : \"Xã Bình Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29290,
		\"name\" : \"Xã Phương Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29293,
		\"name\" : \"Xã Đại Phúc\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29296,
		\"name\" : \"Xã Đại Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29299,
		\"name\" : \"Xã Nhị Long Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29302,
		\"name\" : \"Xã Nhị Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29305,
		\"name\" : \"Xã Đức Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 844
	},
	{
		\"xaid\" : 29308,
		\"name\" : \"Thị trấn Cầu Kè\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 845
	},
	{
		\"xaid\" : 29311,
		\"name\" : \"Xã Hòa Ân\",
		\"type\" : \"Xã\",
		\"maqh\" : 845
	},
	{
		\"xaid\" : 29314,
		\"name\" : \"Xã Châu Điền\",
		\"type\" : \"Xã\",
		\"maqh\" : 845
	},
	{
		\"xaid\" : 29317,
		\"name\" : \"Xã An Phú Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 845
	},
	{
		\"xaid\" : 29320,
		\"name\" : \"Xã Hoà Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 845
	},
	{
		\"xaid\" : 29323,
		\"name\" : \"Xã Ninh Thới\",
		\"type\" : \"Xã\",
		\"maqh\" : 845
	},
	{
		\"xaid\" : 29326,
		\"name\" : \"Xã Phong Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 845
	},
	{
		\"xaid\" : 29329,
		\"name\" : \"Xã Phong Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 845
	},
	{
		\"xaid\" : 29332,
		\"name\" : \"Xã Tam Ngãi\",
		\"type\" : \"Xã\",
		\"maqh\" : 845
	},
	{
		\"xaid\" : 29335,
		\"name\" : \"Xã Thông Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 845
	},
	{
		\"xaid\" : 29338,
		\"name\" : \"Xã Thạnh Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 845
	},
	{
		\"xaid\" : 29341,
		\"name\" : \"Thị trấn Tiểu Cần\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 846
	},
	{
		\"xaid\" : 29344,
		\"name\" : \"Thị trấn Cầu Quan\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 846
	},
	{
		\"xaid\" : 29347,
		\"name\" : \"Xã Phú Cần\",
		\"type\" : \"Xã\",
		\"maqh\" : 846
	},
	{
		\"xaid\" : 29350,
		\"name\" : \"Xã Hiếu Tử\",
		\"type\" : \"Xã\",
		\"maqh\" : 846
	},
	{
		\"xaid\" : 29353,
		\"name\" : \"Xã Hiếu Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 846
	},
	{
		\"xaid\" : 29356,
		\"name\" : \"Xã Long Thới\",
		\"type\" : \"Xã\",
		\"maqh\" : 846
	},
	{
		\"xaid\" : 29359,
		\"name\" : \"Xã Hùng Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 846
	},
	{
		\"xaid\" : 29362,
		\"name\" : \"Xã Tân Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 846
	},
	{
		\"xaid\" : 29365,
		\"name\" : \"Xã Tập Ngãi\",
		\"type\" : \"Xã\",
		\"maqh\" : 846
	},
	{
		\"xaid\" : 29368,
		\"name\" : \"Xã Ngãi Hùng\",
		\"type\" : \"Xã\",
		\"maqh\" : 846
	},
	{
		\"xaid\" : 29371,
		\"name\" : \"Xã Tân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 846
	},
	{
		\"xaid\" : 29374,
		\"name\" : \"Thị trấn Châu Thành\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29377,
		\"name\" : \"Xã Đa Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29380,
		\"name\" : \"Xã Mỹ Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29383,
		\"name\" : \"Xã Thanh Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29386,
		\"name\" : \"Xã Lương Hoà A\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29389,
		\"name\" : \"Xã Lương Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29392,
		\"name\" : \"Xã Song Lộc\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29395,
		\"name\" : \"Xã Nguyệt Hóa\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29398,
		\"name\" : \"Xã Hòa Thuận\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29401,
		\"name\" : \"Xã Hòa Lợi\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29404,
		\"name\" : \"Xã Phước Hảo\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29407,
		\"name\" : \"Xã Hưng Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29410,
		\"name\" : \"Xã Hòa Minh\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29413,
		\"name\" : \"Xã Long Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 847
	},
	{
		\"xaid\" : 29416,
		\"name\" : \"Thị trấn Cầu Ngang\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29419,
		\"name\" : \"Thị trấn Mỹ Long\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29422,
		\"name\" : \"Xã Mỹ Long Bắc\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29425,
		\"name\" : \"Xã Mỹ Long Nam\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29428,
		\"name\" : \"Xã Mỹ Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29431,
		\"name\" : \"Xã Vĩnh Kim\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29434,
		\"name\" : \"Xã Kim Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29437,
		\"name\" : \"Xã Hiệp Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29440,
		\"name\" : \"Xã Thuận Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29443,
		\"name\" : \"Xã Long Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29446,
		\"name\" : \"Xã Nhị Trường\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29449,
		\"name\" : \"Xã Trường Thọ\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29452,
		\"name\" : \"Xã Hiệp Mỹ Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29455,
		\"name\" : \"Xã Hiệp Mỹ Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29458,
		\"name\" : \"Xã Thạnh Hòa Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 848
	},
	{
		\"xaid\" : 29461,
		\"name\" : \"Thị trấn Trà Cú\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29462,
		\"name\" : \"Thị trấn Định An\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29464,
		\"name\" : \"Xã Phước Hưng\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29467,
		\"name\" : \"Xã Tập Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29470,
		\"name\" : \"Xã Tân Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29473,
		\"name\" : \"Xã An Quảng Hữu\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29476,
		\"name\" : \"Xã Lưu Nghiệp Anh\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29479,
		\"name\" : \"Xã Ngãi Xuyên\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29482,
		\"name\" : \"Xã Kim Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29485,
		\"name\" : \"Xã Thanh Sơn\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29488,
		\"name\" : \"Xã Hàm Giang\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29489,
		\"name\" : \"Xã Hàm Tân\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29491,
		\"name\" : \"Xã Đại An\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29494,
		\"name\" : \"Xã Định An\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29497,
		\"name\" : \"Xã Đôn Xuân\",
		\"type\" : \"Xã\",
		\"maqh\" : 850
	},
	{
		\"xaid\" : 29500,
		\"name\" : \"Xã Đôn Châu\",
		\"type\" : \"Xã\",
		\"maqh\" : 850
	},
	{
		\"xaid\" : 29503,
		\"name\" : \"Xã Ngọc Biên\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29506,
		\"name\" : \"Xã Long Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29509,
		\"name\" : \"Xã Tân Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 849
	},
	{
		\"xaid\" : 29512,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 851
	},
	{
		\"xaid\" : 29513,
		\"name\" : \"Thị trấn Long Thành\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 850
	},
	{
		\"xaid\" : 29515,
		\"name\" : \"Xã Long Toàn\",
		\"type\" : \"Xã\",
		\"maqh\" : 851
	},
	{
		\"xaid\" : 29516,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 851
	},
	{
		\"xaid\" : 29518,
		\"name\" : \"Xã Long Hữu\",
		\"type\" : \"Xã\",
		\"maqh\" : 851
	},
	{
		\"xaid\" : 29521,
		\"name\" : \"Xã Long Khánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 850
	},
	{
		\"xaid\" : 29524,
		\"name\" : \"Xã Dân Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 851
	},
	{
		\"xaid\" : 29527,
		\"name\" : \"Xã Trường Long Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 851
	},
	{
		\"xaid\" : 29530,
		\"name\" : \"Xã Ngũ Lạc\",
		\"type\" : \"Xã\",
		\"maqh\" : 850
	},
	{
		\"xaid\" : 29533,
		\"name\" : \"Xã Long Vĩnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 850
	},
	{
		\"xaid\" : 29536,
		\"name\" : \"Xã Đông Hải\",
		\"type\" : \"Xã\",
		\"maqh\" : 850
	},
	{
		\"xaid\" : 29539,
		\"name\" : \"Xã Hiệp Thạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 851
	},
	{
		\"xaid\" : 29542,
		\"name\" : \"Phường 9\",
		\"type\" : \"Phường\",
		\"maqh\" : 855
	},
	{
		\"xaid\" : 29545,
		\"name\" : \"Phường 5\",
		\"type\" : \"Phường\",
		\"maqh\" : 855
	},
	{
		\"xaid\" : 29548,
		\"name\" : \"Phường 1\",
		\"type\" : \"Phường\",
		\"maqh\" : 855
	},
	{
		\"xaid\" : 29551,
		\"name\" : \"Phường 2\",
		\"type\" : \"Phường\",
		\"maqh\" : 855
	},
	{
		\"xaid\" : 29554,
		\"name\" : \"Phường 4\",
		\"type\" : \"Phường\",
		\"maqh\" : 855
	},
	{
		\"xaid\" : 29557,
		\"name\" : \"Phường 3\",
		\"type\" : \"Phường\",
		\"maqh\" : 855
	},
	{
		\"xaid\" : 29560,
		\"name\" : \"Phường 8\",
		\"type\" : \"Phường\",
		\"maqh\" : 855
	},
	{
		\"xaid\" : 29563,
		\"name\" : \"Xã Tân Ngãi\",
		\"type\" : \"Xã\",
		\"maqh\" : 855
	},
	{
		\"xaid\" : 29566,
		\"name\" : \"Xã Tân Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 855
	},
	{
		\"xaid\" : 29569,
		\"name\" : \"Xã Tân Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 855
	},
	{
		\"xaid\" : 29572,
		\"name\" : \"Xã Trường An\",
		\"type\" : \"Xã\",
		\"maqh\" : 855
	},
	{
		\"xaid\" : 29575,
		\"name\" : \"Thị trấn Long Hồ\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29578,
		\"name\" : \"Xã Đồng Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29581,
		\"name\" : \"Xã Bình Hòa Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29584,
		\"name\" : \"Xã Hòa Ninh\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29587,
		\"name\" : \"Xã An Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29590,
		\"name\" : \"Xã Thanh Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29593,
		\"name\" : \"Xã Tân Hạnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29596,
		\"name\" : \"Xã Phước Hậu\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29599,
		\"name\" : \"Xã Long Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29602,
		\"name\" : \"Xã Phú Đức\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29605,
		\"name\" : \"Xã Lộc Hòa\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29608,
		\"name\" : \"Xã Long An\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29611,
		\"name\" : \"Xã Phú Quới\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29614,
		\"name\" : \"Xã Thạnh Quới\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29617,
		\"name\" : \"Xã Hòa Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 857
	},
	{
		\"xaid\" : 29620,
		\"name\" : \"Thị trấn Cái Nhum\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29623,
		\"name\" : \"Xã Mỹ An\",
		\"type\" : \"Xã\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29626,
		\"name\" : \"Xã Mỹ Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29629,
		\"name\" : \"Xã An Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29632,
		\"name\" : \"Xã Nhơn Phú\",
		\"type\" : \"Xã\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29635,
		\"name\" : \"Xã Long Mỹ\",
		\"type\" : \"Xã\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29638,
		\"name\" : \"Xã Hòa Tịnh\",
		\"type\" : \"Xã\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29641,
		\"name\" : \"Xã Chánh Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29644,
		\"name\" : \"Xã Bình Phước\",
		\"type\" : \"Xã\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29647,
		\"name\" : \"Xã Chánh An\",
		\"type\" : \"Xã\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29650,
		\"name\" : \"Xã Tân An Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29653,
		\"name\" : \"Xã Tân Long\",
		\"type\" : \"Xã\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29656,
		\"name\" : \"Xã Tân Long Hội\",
		\"type\" : \"Xã\",
		\"maqh\" : 858
	},
	{
		\"xaid\" : 29659,
		\"name\" : \"Thị trấn Vũng Liêm\",
		\"type\" : \"Thị trấn\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29662,
		\"name\" : \"Xã Tân Quới Trung\",
		\"type\" : \"Xã\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29665,
		\"name\" : \"Xã Quới Thiện\",
		\"type\" : \"Xã\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29668,
		\"name\" : \"Xã Quới An\",
		\"type\" : \"Xã\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29671,
		\"name\" : \"Xã Trung Chánh\",
		\"type\" : \"Xã\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29674,
		\"name\" : \"Xã Tân An Luông\",
		\"type\" : \"Xã\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29677,
		\"name\" : \"Xã Thanh Bình\",
		\"type\" : \"Xã\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29680,
		\"name\" : \"Xã Trung Thành Tây\",
		\"type\" : \"Xã\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29683,
		\"name\" : \"Xã Trung Hiệp\",
		\"type\" : \"Xã\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29686,
		\"name\" : \"Xã Hiếu Phụng\",
		\"type\" : \"Xã\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29689,
		\"name\" : \"Xã Trung Thành Đông\",
		\"type\" : \"Xã\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29692,
		\"name\" : \"Xã Trung Thành\",
		\"type\" : \"Xã\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29695,
		\"name\" : \"Xã Trung Hiếu\",
		\"type\" : \"Xã\",
		\"maqh\" : 859
	},
	{
		\"xaid\" : 29698,
