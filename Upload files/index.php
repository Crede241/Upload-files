<html lang="en">
<head>
  <title>Upload image without using Form submit button in jQuery AJAX PHP MYSQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h2><b>Upload image without using Form submit button in jQuery AJAX PHP MYSQL</b></h2>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6">
       <form id="submitForm">
        <div class="form-group">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" name="image" id="image">
            <label class="custom-file-label" for="image">Choose Image to Upload</label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- view of uploaded images -->
<div class="row">
   <div class="col-md-4"></div>  
      <div class="card col-md-4" id="preview" style="display: none;">
      <div class="card-body" id="imageView">
               
      </div>
   </div>    
</div>
<script type="text/javascript">
$(document).ready(function(){
   $("#submitForm").on("change", function(){
      var formData = new FormData(this);
      $.ajax({
         url  : "upload.php",
         type : "POST",
         cache: false,
         contentType : false, // you can also use multipart/form-data replace of false
         processData: false,
         data: formData,
         success:function(response){
          $("#preview").show();
          $("#imageView").html(response);
          $("#image").val('');
          alert("Image uploaded Successfully");
         }
      });
   });
});
</script>

</body>
</html>