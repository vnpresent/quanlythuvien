# Nguyen Viet Phuong + 
Web được viết theo mô hình MVC

//Cách thức hoạt động của mô hình MVC:

+từ index.php,nhận các 'controller' và 'action' trên url,sau đó include file 'controller' ở thư mục controllers,sau đó gọi function 'action'.
+function 'action' sẽ là nơi xử lý logic,hành động.
+các 'controller' sẽ lấy dữ liệu từ database thông qua các 'model'.
+các 'model' gồm các hàm trả về dữ liệu cần thiết,thêm,sửa,xóa xóa dữ liệu.
+sau khi 'controller' xử lý thành công có thể cần hiển thị dữ liệu,khi đó 'controller' sẽ gọi 'view'.
+'view' là các file đa phần là html để xử lý hiển thị dữ liệu.
