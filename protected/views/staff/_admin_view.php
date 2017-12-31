<?php $checkPermission=Yii::app()->session['permissions']; ?>
<tbody>
  <tr id="<?php echo $data->id; ?>">
    <td ><?php  echo CHtml::encode($data->name); ?></td>
    <td ><?php echo CHtml::encode($data->mobile); ?></td>
    <td ><?php if($data->user_type==0){
					echo 'Admin';
				} else if($data->user_type==1){
					echo 'Branch Manager';
				} else if($data->user_type==2){
				   echo 'Staff';
				}
	
	?></td>
    <td ><?php echo CHtml::encode(User::model()->getUsernameByUserCode($data->id)); ?></td>
    <td >xxxxxxxx<?php //echo CHtml::encode(User::model()->getPasswordByUserCode($data->id)); ?></td>
    <td id="statID<?php echo $data->id;?>"><?php if($checkPermission[0]['view']==0){?>
    	<?php $St=$data->status=='0' ? 'Active' :'Inactive';
			$stt=$data->status =='0' ? 'glyphicon glyphicon-ok-sign' : ' glyphicon glyphicon-remove-circle';
			$stt1=$data->status =='0' ? 'btn-green' : ' btn-red';
			if($data->user_type!=0){
				echo '<a  title="'.$St.'"  class="btn btn-xs '.$stt1.'  tooltips" data-placement="top" oldtitle="'.$St.' " id="statusId'.$data->id.'" onclick="status('.$data->id.');"><i class="'.$stt.'"></i></a>';
			}
		
	} ?>
    </td>
    <td><div class="visible-md visible-lg hidden-sm hidden-xs">
        <?php 
	 if($data->user_type!=0){
			if($checkPermission[0]['edits']==0){
				 echo CHtml::link('<i class="fa fa-edit"></i>',array('staff/edit/id/'.base64_encode($data->id)),
				  array('data-original-title'=>"Edit", 'data-placement'=>"top", 'class'=>"btn btn-xs btn-teal tooltips")); 
			}
	 }
		?>
        <?php 
		if($data->user_type!=0){
			 if($checkPermission[0]['view']==0){
				echo CHtml::link('<i class="fa  clip-zoom-in"></i>',array('#stack1'.$data->id), 
				array('data-original-title'=>"View", 'data-toggle'=>"modal", 'data-placement'=>"top", 'class'=>"btn btn-xs btn-teal tooltips"));  
			 }
		}
			?>
        <?php 
		if($data->user_type!=0){
			if($checkPermission[0]['deletes']==0){
			echo '<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove" onclick="deleteRecord('.$data->id.');"> <i class="fa fa-times fa fa-white"></i></a>'; 
			}
		}
		?>
         <?php 
		 	if($data->user_type!=0){
	 			echo CHtml::link('<i class="fa clip-settings"></i>',array('permission/permission/id/'.base64_encode($data->id)),
			 	array('data-original-title'=>"Set User Permission", 'data-placement'=>"top", 'class'=>"btn btn-xs btn-teal tooltips")); 
			}
		?>
        
        <?php 
		 	if($data->user_type!=0){
	 			echo CHtml::link('Reset Password',array('user/staff_reset_password/id/'.base64_encode($data->id)),
			 	array('data-original-title'=>"Set User Permission", 'data-placement'=>"top", 'class'=>"btn btn-xs btn-teal tooltips")); 
			}
		?>
      </div></td>
  </tr>
</tbody>
<div id="stack1<?php echo $data->id;?>" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
    <h4 class="modal-title"><?php echo CHtml::encode($data->name); ?></h4>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Name : </label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="control-label"><?php echo $data->name;?></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Email :  </label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="control-label"><?php echo $data->email;?></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Mobile : </label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="control-label"><?php echo  $data->mobile;?></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">address : </label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="control-label"><?php echo  $data->address;?></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Basic Sallery : </label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="control-label"><?php echo  $data->basic_sallery;?></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Joining Date : </label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="control-label"><?php echo  $data->joining_date=='0000-00-00'?'':date('d F Y',strtotime($data->joining_date))  ;?></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Qualification : </label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="control-label"><?php echo  $data->qualification;?></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Created : </label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="control-label"><?php echo  date('d F Y',strtotime($data->created)) ;?></label>
            </div>
          </div>
        </div>
        
     
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-default"> Close </button>
  </div>
</div>
