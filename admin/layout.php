<html> <head><meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Tiêu đề website </title>
 <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css"/>
 </head>
 <style>
 	body { background-color:khaki!important}
 header.row{ height: 120px}
 nav.row {height: 40px; line-height: 40px }
 footer.row { height: 60px;}
 div.noidung { min-height: 500px}
 div.noidung >main  { } 
 </style>
 <body>

<div class="container" style="margin-left: 15px;">
     <header class="row bg-info mt-1">Đầu trang</header>
     <div class="row noidung">       
         <aside class="col-3 bg-light"> 
         	<div class="accordion" id="accordionExample">
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingOne">
				      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				        Quanr lý nhà sản xuất
				      </button>
				    </h2>
				    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				      <div class="accordion-body">
				       
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingTwo">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				        Quản lý loại sản phẩm
				      </button>
				    </h2>
				    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
				      <div class="accordion-body">
				        <p><a href="#">Danh sách nhà sản xuất</a></p>
						<p><a href="#">Thêm nhà sản xuất</a></p>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingThree">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				        Quản lý sản phẩm
				      </button>
				    </h2>
				    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
				      <div class="accordion-body">
				        <p><a href="#">Danh sách thành viên</a></p>
						<p><a href="#">Thêm thêm thành viên</a></p>
				      </div>
				    </div>
				  </div>
				</div>
          </aside>
         <main class="col-9 bg-white mx-n2">
             <h1 class="h5 py-2 border-bottom text-danger"> trang quan tri </h1>
           
         </main>
     </div>
     <footer class="row bg-dark mt-1 mb-2 text-warning text-center">Chân trang</footer>
 </div> 
 </body>
 

 <script  src="../bootstrap/js/bootstrap.bundle.min.js"> </script> 
 </html>