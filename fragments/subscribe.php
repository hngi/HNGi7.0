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
                <h4 class="modal-title">Modal title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <section class="one">
                    <div class="logo">
                        <img src="https://image.flaticon.com/icons/svg/143/143361.svg">
                    </div>
                    <h2 class="heading">
                        please subscribe to get updates
                    </h2>
                    <p> signup with your email to get latest updates
                    </p>
                    <form>
                        <input type='text' placeholder="enter your email"><br/>
                        <button class="btn" role="button">
                            subscribe
                        </button>
                    </form>
                </section>
                <section class="two">
                    <h3>
                        thank you for subscribing !
                    </h3>
                    <div class="close">
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
