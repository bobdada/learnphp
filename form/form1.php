<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="form.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
     <div class="container">
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
        <h2>Contactssss</h2>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
          <form id="contact-form" class="form" action="db.php" method="POST" role="form">
              <div class="form-group">
                  <label class="form-label" for="name">Your Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1">
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="email">Your Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2">
              </div>                                                             
              <div class="text-center">
                  <button type="submit" class="btn btn-start-order">SUBMIT</button>
              </div>
          </form>
      </div>
  </div>
</div> 	
</body>
</html>



