
	<div class='col-md-15 ad_filter_col top15 m-50 m-top15'>
		{{ Form::checkbox('negotiable', true, (Input::has('negotiable') &&  Input::get('negotiable') ? true : null), array('id'=>'negotiable')) }} 
		<label for="{{'negotiable'}}">{{ TransWord::getArabic('Negotiable',false) }} &nbsp; <span></span></label>&nbsp;&nbsp;
	</div>


<div class='col-md-25 ad_filter_col m-50'>
	<div class='ad_filter_col_total_border'>
		{{ Form::checkbox('urgent', true, (Input::has('urgent') &&  Input::get('urgent') ? true : null), array('id'=>'Urgent')) }} 
		<label for="{{'Urgent'}}">{{ TransWord::getArabic('Urgent',false) }} &nbsp; <span></span></label> 
		{{ Form::checkbox('hot_deal', true, (Input::has('hot_deal') &&  Input::get('hot_deal') ? true : null), array('id'=>'Hotdeal')) }}
		<label for="{{'Hotdeal'}}">{{ TransWord::getArabic('Hot deal',false) }} &nbsp; <span></span></label>   
	</div>
</div>