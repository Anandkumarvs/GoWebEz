
<?php
require_once 'init.php';

$id=$_POST['id'];
$select_candidate_list = "SELECT * FROM registered_user WHERE id=$id";
$select_candidate_list = $db->query($select_candidate_list);
$rows = $select_candidate_list ->fetch(PDO::FETCH_OBJ);
// print_r($rows)

                     if($rows->fresher_or_experienced == "Fresher")
                     {
                        $color = "warning";
                     }
                     else if($rows->fresher_or_experienced == "Experienced"){
                        $color = "dark";
                     }
                     else{
                        $color = "info";
                     }


?>
<!-- =========================================================================== -->
<!-- ============================ profile details start ============================== -->
<section class="profile container pt-3">
   <span id='profile_close'><i class="fas fa-times-circle"></i></span>
   <div class="row">
      <div class="col-md-4 bordered pt-3">
         <div class="profileDetails">
            <div class="profileDetailsImage text-center">
               <!-- <div class="roll"><i class="fas fa-tag"></i><span>F</span></div> -->
               <img class="img-fluid" src="assets/images/img1.jpg">
               <h6 class="font-weight-bold pt-3"><?php echo $rows->name; ?></h6>

                        <div class="<?php echo $color ?> btn-sm">
                        <?php echo $rows->fresher_or_experienced ?></div>
            </div>
            <div class="profileDetailsTable py-1">
               <table class="table text-nowrap table-borderless ">
                  <tbody class="text-left">
                     <tr>
                        
                        <td class="font-weight-bold">E-mail</td>
                        <td class="pl-3"><?php echo $rows->email; ?></td>
                     </tr>
                     <tr>
                        <td class="font-weight-bold">Qualification</td>
                        <td class="pl-3"><?php echo $rows->qualification; ?></td>
                     </tr>
                     <tr>
                        <td class="font-weight-bold">Contact.no</td>
                        <td class="pl-3"><?php echo $rows->mobile; ?></td>
                     </tr>
                     <tr>
                        <td class="font-weight-bold">Location</td>
                        <td class="pl-3"><?php echo $rows->residence; ?></td>
                     </tr>
                     <tr>
                        <td colspan="2" class="text-center pt-4"><button data-resume="<?php echo $rows->fileName ?>" type="button" class="btn btn-primary font-weight-bold pdfajax">View Resume</button>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div id="statusFlags" class="selection text-center py-1" data-status = <?php echo $rows->del_flag ?> >
               <button id="acceptButton" class="btn btn-outline-success mr-3 text-md-center" name="b1" data-id="<?php echo $rows->id ?>"> Accept</button>
               <button id="rejectButton" class="btn btn-outline-danger" name="b1" data-toggle="modal" data-target="#rejectModal" data-id="<?php echo $rows->id ?>"> Reject</button>
               <!-- <img class="accept" src="assets/images/1.png">
               <img class="reject" src="assets/images/2.png"> -->
            </div>
         </div>
      </div>
      <div class="col-md-8 profileApplication">
<!-- first page start -->
         <div id="profileApplicationAnswerFirst">
            <div class="profileApplicationAnswerOne">
               <p>
                  <span>1. </span> What is your college major? Why did you select that major? If your major is not Information Technology or Computer Science, why did you shift your career to Information Technology? 
               </p>
               <textarea class="w-100"><?php echo $rows->college_major;?></textarea>
               <p>
                  <span>2. </span>Describe your learning style?
               </p>
               <textarea  class="w-100"><?php echo $rows->learning_style;?></textarea>
               <p>
                  <span>3.</span>Briefly describe your family whom you live with `                </p>
their occupations and annual income?
               <textarea class="w-100"><?php echo $rows->income; ?></textarea>
               <p>
                  <span>4. </span> Have you ever come across any challenges at work? If so, how did you face it?
               </p>
               <textarea class="w-100"><?php echo $rows->challenges; ?></textarea>
               <p>
                  <span>5. </span> What skills do you want to gain from GoWebEz? 
               </p>
               <textarea class="w-100"><?php echo $rows->gain_from_gowebez; ?></textarea>
            </div>
            <!-- pagigination start -->
            <div class="page text-right">
                  <button type="button" class="btn btn-primary font-weight-bold pageOneNextBtn"><a class="text-white text-decoration-none" href="#profileApplicationAnswerTwo">Next<i class="fas fa-angle-right pr-2"></i></a></button>
            </div>
         <!-- pagigination end -->
      </div>
<!-- first page end -->
<!-- second page start -->
         <div id="profileApplicationAnswerTwo">
            <div class="profileApplicationAnswerOne">
               <p>
                  <span>6. </span> What is your college major? Why did you select that major? If your major is not Information Technology or Computer Science, why did you shift your career to Information Technology? 
               </p>
               <textarea class="w-100"></textarea>
               <p>
                  <span>7. </span>Describe your learning style?
               </p>
               <textarea  class="w-100">
                  <?php echo $rows->learning_style; ?>
                  
               </textarea>
               <p>
                  <span>8.</span>Briefly describe your family whom you live with and their occupations and annual income?
               </p>
               <textarea class="w-100"></textarea>
               <p>
                  <span>9. </span> Have you ever come across any challenges at work? If so, how did you face it?
               </p>
               <textarea class="w-100"></textarea>
               <p>
                  <span>10. </span> What skills do you want to gain from GoWebEz? 
               </p>
               <textarea class="w-100"></textarea>
            </div>
            <!-- pagigination start -->
            <div class="page text-right">
                  <button type="button" class="btn btn-primary font-weight-bold pageTwoPreBtn"><a class="text-white text-decoration-none" href="#profileApplicationAnswerFirst"><i class="fas fa-angle-left pr-2"></i>Previous</a></button>
                  <button type="button" class="btn btn-primary font-weight-bold pageTwoNextBtn"><a class="text-white text-decoration-none" href="#profileApplicationAnswerThree">Next<i class="fas fa-angle-right pr-2"></i></a></button>
            </div>
            <!-- pagigination end -->
         </div>
<!-- second page end -->
<!-- third page start -->
         <div id="profileApplicationAnswerThree">
            <div class="profileApplicationAnswerOne">
               <p>
                  <span>11. </span> What is your college major? Why did you select that major? If your major is not Information Technology or Computer Science, why did you shift your career to Information Technology? 
               </p>
               <textarea class="w-100"></textarea>
               <p>
                  <span>12. </span>Describe your learning style?
               </p>
               <textarea  class="w-100"></textarea>
               <p>
                  <span>13.</span>Briefly describe your family whom you live with and their occupations and annual income?
               </p>
               <textarea class="w-100"></textarea>
               <p>
                  <span>14. </span> Have you ever come across any challenges at work? If so, how did you face it?
               </p>
               <textarea class="w-100"></textarea>
               <p>
                  <span>15. </span> What skills do you want to gain from GoWebEz? 
               </p>
               <textarea class="w-100"></textarea>
            </div>
            <!-- pagigination start -->
            <div class="page text-right">
                  <button type="button" class="btn btn-primary font-weight-bold pageThreePreBtn"><a class="text-white text-decoration-none" href="#profileApplicationAnswerTwo"><i class="fas fa-angle-left pr-2"></i>Previous</a></button>
            </div>
            <!-- pagigination end -->
         </div>
<!-- third page end -->
      </div>
   </div>
   <div class="modal fade" id="rejectModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" name="rejectModalLabel">Reason for rejection:</h5>
      </div>
      <div class="modal-body">
        <form id="rejectForm" name="rejectForm">
        <div class="form-group"></div>
            <input id="rejectDescription" class="form-control" name="rejectDescription" type="text" size="50">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary cancel-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" data-id="<?php echo $rows->id ?>" id="reject-btn" data-dismiss="modal">Reject</button>
      </div>
    </div>
  </div>
</div>s
   
</section>
<script type="text/javascript">
   $(document).ready(function()
   {
      if($("#statusFlags").attr("data-status") == "Rejected"){
         $("#rejectButton").removeClass("btn-outline-danger");
         $("#rejectButton").addClass("btn-danger");
         $("#acceptButton").addClass("disabled");
      }

      if($("#statusFlags").attr("data-status") == "Accepted"){
         $("#acceptButton").removeClass("btn-outline-success");
         $("#acceptButton").addClass("btn-success");
         $("#rejectButton").addClass("disabled");
      }

      $('#acceptButton').on('click',function()
      {
         var accept_id = $(this).attr('data-id');

         $.ajax({
            url: 'accept_act.php',
           type: 'POST',
           data:{accept_id:accept_id},
         
           success: function(response) {
               $('#result').html(response);
               
           }
         });
       

      });

      $('#reject-btn').on('click',function()
      {
         // Validation
         if( $("#rejectDescription").val() == "" ){
            alert("Please provide a valid reason!");
            return false;
         }

         // Reject AJAX
         var reject_id = $(this).attr('data-id');
         var reason = $("#rejectDescription").val();
         $.ajax({
            url: 'reject_act.php',
            type: 'POST',
            data:{reject_id:reject_id, reject_reason : reason},   
            success: function(response) {
               $('#result').html(response);              
            } 
         });

         // Button css change
         $("#rejectButton").removeClass("btn-outline-danger");
         $("#rejectButton").addClass("btn-danger");
         $("#acceptButton").addClass("disabled");
      });

   });
</script>
<script src="assets/js/candidate_profile.js"></script>


<!-- ============================ profile details end ============================== -->
<!-- =========================================================================== -->



   