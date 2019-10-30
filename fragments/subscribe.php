<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 10/29/2019
 * Time: 9:53 AM
 */

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<a class="btn btn-primary" data-toggle="modal" href="#modal-subscribe">Subscribe</a>

<div class="modal fade" id="modal-subscribe">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Subscribe Now to get latest update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <section class="one">
                    <div class="logos text-center">
                        <img src="https://image.flaticon.com/icons/svg/143/143361.svg" class="img-responsive" width="200">
                    </div>
                    <h2 class="heading text-center">
                        Please subscribe to get updates
                    </h2>
                    </p>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type='email' class="form-control" required placeholder="enter your email" id="subscribe-form">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" role="button" id="subscribe">
                                <i class="fa fa-check"></i> Subscribe
                            </button>
                        </div>
                    </form>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#subscribe").on("click",function (e) {
            e.preventDefault();
           let email = $("#subscribe-form").val();
           if(email == ""){
               swal('Error!',"Kindly enter your email",{icon: 'error',  timer: 2500});
           }


           $.ajax({
              url: 'subscribe_ajax.php',
              dataType: 'json',
               type: 'post',
              timeout: 45000,
              data: {
                  'add': '1',
                  'email': email
              },
               success: function (f) {
                   let status = f.status;

                   if(status == true){
                       swal('Great',f.message,{icon: 'success',  timer: 25000});
                   }else{
                       swal('Error!',f.message,{icon: 'error',  timer: 25000});
                   }
               },
               error: function (e) {
                   swal('Error!',"Network error, please try again",{icon: 'error',  timer: 2500});
               }
           });
        });
    });
</script>