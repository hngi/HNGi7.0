<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 10/29/2019
 * Time: 9:53 AM
 */

?>


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
                            <button class="btn btn-info" role="button">
                                <i class="fa fa-check"></i> Subscribe
                            </button>
                        </div>
                    </form>
                </section>
                <section id="subscribe-feedback"></section>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
