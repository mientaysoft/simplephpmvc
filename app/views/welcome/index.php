<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Chào mừng đến với một ứng dụng MVC Đơn giản</h1>
			<h2>Cách Cấu Hình:</h2>
			<h4>Cấu hình chạy trên Heroku</h4>
			<p>Mở tập tin: <pre>public/index.php</pre></p>
			<p>- Chỉnh sữa lại giá trị của biến hằng số. <code>ENVIRONMENT là production</code>, <code>BASEURL là đường dẫn ứng </code></p>
			<p>Ví dụ:</p>
			<p><pre>&lt;?php
	define('ENVIRONMENT', 'production');
	define('BASEURL', 'https://abcxyz.herokuapp.com');
?&gt;</pre>
			</p>
			<h4>Cấu hình chạy trên local</h4>
			<p>1. Mở tập tin: <pre>public/index.php</pre></p>
			<p>- Chỉnh sữa lại giá trị của biến hằng số. <code>ENVIRONMENT là development</code>, <code>BASEURL là đường dẫn ứng </code></p>
			<p>Ví dụ:</p>
			<p><pre>&lt;?php
	define('ENVIRONMENT', 'development');
	define('BASEURL', 'https://localhost/simplephpmvc/public');
?&gt;</pre>
			</p>
			<p>1. Mở tập tin: <pre>public/.htaccess</pre></p>
			<p>- Chỉnh sữa giá trị: <code>RewriteBase /</code> thành giá trị đường dẫn gốc đến thư mục gốc của ưng dụng</p>
			<p>Ví dụ: Hiện tại thư mục chứa ứng dụng đặt tại thư mục: <strong>/xampp/htdocs/simplephpmvc</strong> Vậy giá trị RewriteBase sẽ là</p>
			<p><code>RewriteBase /simplephpmvc/public/</code></p>
			<p>3. Cấu hinh DB</p>
			<p>Mở tập tin: <pre>public/index.php</pre></p>
			<p>Tìm đến đoạn: <code>## localhost DB Config</code> và chỉnh sữa cấu hình lại cho phù hợp với cấu hình CSDL trên local</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p> Contact me: <a href="mailto:thanhluan12a14@gmail.com">Nguyễn Thành Luân</a> 2016</p>
			<p> <strong>If it helpful you can buy me a drinks. :D</strong> </p>
		</div>
	</div>
</div>