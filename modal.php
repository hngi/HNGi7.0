<?php
if (isset($_GET['mentor_id'])) {
    require_once 'classControllers/mentor.php';
    require_once 'config/database.php';

    ?>
    <!-- Button trigger modal -->

    <div class="modal fade" id="mentor-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center">Mentor Details</h3>
                </div>
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
if (isset($_GET['id'])) {
    require_once 'classControllers/Interns.php';
    require_once 'config/database.php';
    $interns = new Intern;
    $internDetails = $interns->view();
    ?>
    <?php ob_start(); ?>
    <!-- Modal to display each Intern -->
    <div class="modal fade" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center">Intern Details</h3>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-10 table-responsive">
                                <table class="table table-hover mt-3 mb-1">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Intern ID:</th>
                                            <td class=""><?= $internDetails['intern_id']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Name:</th>
                                            <td class=""><?= $internDetails['name']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email:</th>
                                            <td class=""><?= $internDetails['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Phone No:</th>
                                            <td class=""><?= $internDetails['phone_no']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Link To Portfolio:</th>
                                            <td class=""><?= $internDetails['link_to_portfolio']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Link To CV:</th>
                                            <td class=""><?= $internDetails['link_to_cv']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Interest:</th>
                                            <td class=""><?= $internDetails['interest']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Current Location:</th>
                                            <td class=""><?= $internDetails['current_location']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Employment Status:</th>
                                            <td class=""><?= $internDetails['employment_status']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">About:</th>
                                            <td class=""><?= $internDetails['about']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tmie Registered:</th>
                                            <td class=""><?= $internDetails['timestamp']; ?></td>
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
    <?php echo ob_get_clean(); ?>

<?php
}
?>