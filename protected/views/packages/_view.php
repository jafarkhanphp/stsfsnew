<?php $checkPermission=Yii::app()->session['permissions']; ?>
<tbody>
  <tr class="odd gradeX">
   <td><?php echo CHtml::encode(Category::model()->getCategoryByID($data->category_id)); ?></td>
    <td><?php echo CHtml::encode($data->package_name); ?></td>
    <td><?php echo CHtml::encode($data->amount); ?></td>
    <td><?php echo CHtml::encode($data->bv); ?></td>
    <td id="statID<?php echo $data->id;?>">
      <?php $St=$data->status=='0' ? 'Active' :'Inactive';
			$stt=$data->status =='0' ? 'glyphicon glyphicon-ok-sign' : ' glyphicon glyphicon-remove-circle';
			$stt1=$data->status =='0' ? 'btn-green' : ' btn-red';
	 ?> <a href="#" title="<?php echo $St;?>"  class="btn btn-xs <?php echo $stt1;?> tooltips" data-placement="top" oldtitle="<?php echo $St;?>" id="statusId'<?php echo $data->id;?>" onclick="status(<?php echo $data->id;?>);"><i class="<?php echo $stt;?>"></i></a>
     </td>
    <td width="130px;"><div class="visible-md visible-lg hidden-sm hidden-xs">
        <?php 
	 
		if($checkPermission[0]['edits']==0){
			 echo CHtml::link('<i class="fa fa-edit"></i>',array('packages/edit/id/'.base64_encode($data->id)),
			  array('data-original-title'=>"Edit", 'data-placement'=>"top", 'class'=>"btn btn-xs btn-teal tooltips")); 
		}
		?>
        <?php 
		 if($checkPermission[0]['view']==0){
	 		echo CHtml::link('<i class="fa  clip-zoom-in"></i>',array('#stack1'.$data->id), 
			array('data-original-title'=>"View", 'data-toggle'=>"modal", 'data-placement'=>"top", 'class'=>"btn btn-xs btn-teal tooltips"));  
		 }
			?>
        <?php 
			if($checkPermission[0]['deletes']==0){
			echo '<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove" onclick="deleteRecord('.$data->id.');"> <i class="fa fa-times fa fa-white"></i></a>'; 
			}
		?>
        
      </div></td>
  </tr>
</tbody>
<div id="stack1<?php echo $data->id;?>" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
    <h4 class="modal-title"><?php echo CHtml::encode($data->package_name); ?></h4>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Package Name : </label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="control-label"><?php echo $data->package_name;?></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Amount : </label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="control-label"><?php echo $data->amount;?></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Status : </label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="control-label"><?php echo $data->status==0?'Active':'Inactive';?></label>
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
              <label class="control-label"><?php echo  date('d F Y', strtotime($data->created));?></label>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Photo : </label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="control-label"><img width="50%" src="<?php echo Yii::app()->request->baseUrl; ?>/upload/<?php echo $data->images  ;?>" class="" alt=""> </label>
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

