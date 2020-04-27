<?php 


namespace App\Controllers;

/**
 * 
 */
class Helpers extends BaseController
{
	
	public function index()
	{
		
	}

	public function formHelper()
	{
		//echo "hello";
		 helper('form');/*loading the Helper*/
		  $attributes = ['class' => 'email','id' => 'myform'];/*Passing Attributes*/
		  
		 echo form_open('email/send',$attributes);/*form action*/
		 form_hidden('username','johndoe');
		 /*$data=[
		 	'name' => 'Gayatri',
		 	'email' =>'789@gmail.com',
		 	'url' => 'http://example.com'*/
		 	$d = [
        'name'      => 'username',  /*data for form_hidden*/
        'id'        => 'username',
        'value'     => 'Chinu',
        'maxlength' => '100',
        'size'      => '50',
        'style'     => 'width:50%'
];
		$options = [
        'small'  => 'Small Shirt',
        'med'    => 'Medium Shirt', /*data for dropdown*/
        'large'  => 'Large Shirt',
        'xlarge' => 'Extra Large Shirt',
];
	$attributes = [
        'id'    => 'address_info',
        'class' => 'address_info'
];
$chckbox = [
        'name'    => 'newsletter',
        'id'      => 'newsletter',
        'value'   => 'accept',    /*data for checkbox*/
        'checked' => TRUE,
        'style'   => 'margin:10px'
];



		 echo form_hidden($d);
		 echo form_input($d);
		 echo form_password();
		$shirts_on_sale = ['small', 'large'];
echo form_dropdown('shirts', $options, 'large'); /*for the display on console*/
echo form_fieldset('Address Information',$attributes);
echo "<p>fieldset content here</p>\n";
echo form_fieldset_close();
echo form_checkbox($chckbox);
echo form_submit('mysubmit', 'Submit Post!');
echo form_close();
 
		
	}
}




 ?>