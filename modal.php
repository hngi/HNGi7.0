<?php
if (isset($_GET['mentor_id'])) {
    require_once 'classControllers/mentor.php';
    require_once 'config/database.php';

    ?>
    <!-- Button trigger modal -->

    <div class="modal fade" id="mentor-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <?php
                                $ment = new Mentors;
                                $details = $ment->ById($_GET['mentor_id']);
                                ?>
                            <div class="col-md-6 col-8">

                                <img src="<?php echo $details['photo_url'] ?>" class="img-thumbnail img-fluid  " alt="">


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-10 table-responsive">
                                <table class="table table-hover mt-3 mb-1">
                                    <tbody>

                                        <tr>
                                            <th scope="row" class="table-primary">name</th>
                                            <td class=""><?php echo $details['name']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Area of Expertise</th>
                                            <td class="text-wrap"><?php echo $details['area_of_expertise']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Phone Number</th>
                                            <td class="text-wrap"><?php echo $details['phone_no']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td class="text-wrap"><?php echo $details['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Portfolio Link</th>
                                            <td><?php echo $details['link_to_portfolio']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Linkedin link</th>
                                            <td class="text-wrap"><?php echo $details['link_to_linkedin']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Link to Cv</th>
                                            <td class="text-wrap"><?php echo $details['link_to_cv']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Why Interested</th>
                                            <td class="text-wrap"><?php echo $details['why_interested']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Current State</th>
                                            <td class="text-wrap"><?php echo $details['current_state']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Employment Status</th>
                                            <td class="text-wrap"><?php echo $details['employment_status']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>