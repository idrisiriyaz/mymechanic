<style>
  .modal-header, .signin_header, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 25px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  </style>
</head>
<body>

  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="garage_signin_Modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:25px 30px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="signin_header"><span class="glyphicon glyphicon-lock"></span> Garage Login</h4>
        </div>
        <div class="modal-body" style="padding:30px 40px;">
        <form action="garage/garage_signin_code.php" method="post">
            <div class="form-group">
                <label>Garage Email</label>
                <input type="email" name="email" class="form-control" placeholder="demo@gmail.com">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" class="form-control" placeholder="password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="garage_sign_in">Login</button>
            </div>
            <?php include("garage_signin_code.php"); ?> 
        </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Don't have an account? <a data-toggle="modal" data-target="#garage_signup_Modal" data-dismiss="modal">Click here</a></p>

        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#garage_signin_Modal").modal();
  });
});
</script>

</body>
