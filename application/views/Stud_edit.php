<!DOCTYPE html>
<html lang = "en">

   <head>
      <meta charset = "utf-8">
      <title>Students Example</title>
   </head>

   <body>

         <?php
            echo form_open('Stud_controller/update_student');
            echo form_hidden('old_roll_no',$old_roll_no);
            echo form_label('Roll No.');

          $useridData=array(
          'id'=>'roll_no',
          'name'=>'roll_no',
          'value'=>$records[0]->roll_no
          );
       echo form_input($useridData);

            echo "
            ";

            echo form_label('Name');
            $usernamaData=array(
            'id'=>'name',
            'name'=>'name',
            'value'=>$records[0]->name
            );

            echo form_input($usernamaData);
          //  echo form_input(array('id'⇒'name','name'⇒'name','value'⇒$records[0]→name));

      //     echo "
        //    ";

          //  echo form_submit(array('id'⇒'submit','value'⇒'Edit'));
            $userbtnData=array(
            'id'=>'submit',
            'name'=>'submit', //you are missing this attribute
            'value'=>'Edit'
            );

            echo form_submit($userbtnData);
            echo form_close();
         ?>


   </body>

</html>
