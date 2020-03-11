<div class="post-section post-information">
    <div class="post-ad-title">
        <i class="fa fa-folder-open"></i>
        <h3 class="item-title">Product Information</h3>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Price [रू]
                <span>*</span>
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <?php echo form_input(array('type'=>"text",'class'=>"form-control",'name'=>"price",'placeholder'=>'Price ...'));?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Price Type
                <span>*</span>
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <?php $price_type=array('Select Price Type','Fixed','Negotiable','On Call'); ?>
                <?php echo form_dropdown('priceType',$price_type,'',array('class'=>'form-control select-box')); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Used For (year or month)
                <span>*</span>
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <?php echo form_input(array('type'=>"text",'class'=>"form-control",'name'=>"usedDuration",'placeholder'=>'User For (eg: 3 months or 2 years) ...'));?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Type
                <span>*</span>
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                    <?php $type=array('Select Your Car Type','Sedan','Hatchback','MPV/minivan','SUV/4X4','CUV/Crossover','Pickup','Convertible/spyder/cabriolet','Station wagon/estate'); ?>
                    <?php echo form_dropdown('type',$type,'',array('class'=>'form-control select-box
                    ')) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Year
                <span>*</span>
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'year','placeholder'=>'Manufactured Year ...')) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Kilometers
                <span>*</span>
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'kilometer','placeholder'=>'Runned Kilometer ...')) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Colour
                <span>*</span>
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'colour','placeholder'=>'Vehical Colour ...')) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Engine(CC)
                <span>*</span>
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'engine','placeholder'=>'Engine Capacity (CC) ...')) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Fuel
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group d-flex">
                <?php $fuels=array('Petrol','Diesel','Electric','Hybrid') ?>
                <?php foreach ($fuels as $key => $value):?>
                    <div class="form-check form-radio-btn">
                        <input class="form-check-input" type="radio" id="fuels<?php echo $key;?>" name="fuel">
                        <label class="form-check-label" for="fuels<?php echo $key;?>">
                            <?php echo $value; ?>
                        </label>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Condition
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group d-flex">
                <?php $condition= array('Brand New','Like New','Excellent','Good/Fair','Not Working'); ?>
                <?php foreach($condition as $key =>$value): ?>
                    <div class="form-check form-radio-btn">
                        <input class="form-check-input" type="radio" id="condition<?php echo $key;?>" name="condition">
                        <label class="form-check-label" for="condition<?php echo $key;?>">
                             <?php echo $value; ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Brand
                <span>*</span>
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'brand','placeholder'=>'Vehical Brand Name ...')) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Model
                <span>*</span>
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'model','placeholder'=>'Vehical Model ...')) ?>
            </div>
        </div>
    </div>
</div>
<div class="post-section post-features">
    <div class="post-ad-title">
        <i class="fa fa-list-ul"></i>
        <h3 class="item-title">Features</h3>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label class="control-label">
                Features
                <span>*</span>
            </label>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <?php $features=array('Power Window','Power Steering','Central Lock','Alloy Wheels','Keyless Remote Entry','Tubeless Tyres','Air Bags','Anti-lock Braking (ABS)','Air Conditioner - Manual','Air Conditioner - Automatic','Rear AC Vent','Steering Mounted Controls','Projected Headlight','Fog Lights','Electric Side Mirror (ORVM)','Push Engine Start Button','LCD Touchscreen Entertainment');?>
                <?php foreach ($features as $key =>$value):?>
                    <div class="form-check form-check-box">
                        <input class="form-check-input" type="checkbox" id="features-list<?php echo $key;?>" name="features[]">
                        <label class="form-check-label" for="features-list<?php echo $key;?>"><?php echo $value;?></label>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>    
</div>
