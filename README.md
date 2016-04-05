# Simple PHP MVC

Một ứng dụng PHP đơn giản được cài đặt bằng mô hình MVC.
Mọi chi tiết xin liên hệ: [Leon Nguyen](thanhluan12a14@gmail.com)

## Cài Đặt Và Sữ Dụng

```sh
$ git clone https://github.com/mientaysoft/simplephpmvc.git
$ cd simplephpmvc
$ composer install
```

## Cấu hình để chạy trên Heroku
Mở tập tin: ```public/index.php```

Chỉnh sữa lại giá trị của biến hằng số. ```ENVIRONMENT là production```, ```BASEURL là đường dẫn ứng```

Ví dụ:
```php
<?php
	define('ENVIRONMENT', 'production');
	define('BASEURL', 'https://abcxyz.herokuapp.com');
?>
```

## Cấu hình để chạy trên locahost

- **Cấu hình biến môi trường**

Mở tập tin: ```public/index.php```

Chỉnh sữa lại giá trị của biến hằng số. ```ENVIRONMENT là development```, ```BASEURL là đường dẫn ứng ```

Ví dụ:
```php
<?php
	define('ENVIRONMENT', 'development');
	define('BASEURL', 'https://localhost/simplephpmvc/public');
?>
```
- **Cấu hình thư mục gốc**

Mở tập tin: ```public/.htaccess```

Chỉnh sữa giá trị: ```RewriteBase /``` thành giá trị đường dẫn gốc đến thư mục gốc của ưng dụng

Ví dụ: Hiện tại thư mục chứa ứng dụng đặt tại thư mục: ```/xampp/htdocs/simplephpmvc``` Vậy giá trị RewriteBase sẽ là
```RewriteBase /simplephpmvc/public/```

- **Cấu hinh cơ sở dữ liệu**

Mở tập tin: ```public/index.php```

Tìm đến đoạn: ```## localhost DB Config``` và chỉnh sữa cấu hình lại cho phù hợp với cấu hình CSDL trên local

## Thankyou

Contact me: [Leon Nguyen](thanhluan12a14@gmail.com)

__If it helpful you can buy me a drinks. :D__