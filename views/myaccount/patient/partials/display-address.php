<div class="row pb-2 single-address" data-id="<?php echo $address->getId();?>" id="row-address-<?php echo $address->getId();?>" style="padding: .5em 0;">
    <div class="col-md-8 pr-0"><?php echo $address;?></div>
    <div class="col-md-4 text-right">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-secondary btn-sm edit" data-for="address" title="Edit Details"><i class="fa fa-fw fa-edit"></i></button>
            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-for="address" data-target="#deleteConfirmationModal" title="Delete"><i class="fa fa-fw fa-trash"></i></button>
        </div>
    </div>
</div>