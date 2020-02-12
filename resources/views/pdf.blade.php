<!DOCTYPE html> 
<html lang="en" > 

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <style type="text/css" media="all">
        *,
*:before,
*:after {
  box-sizing: border-box;
}
body {
  padding: 1em;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 15px;
  color: #b9b9b9;
  background-color: #e3e3e3;
}
h2 {
  color: #7ed321;
  font-style: italic;
}

h4 {
  color: #546c70;
  font-family: Montserrat, Arial, sans-serif;
  margin:5px;
}

input,
input[type="radio"] + label,
input[type="checkbox"] + label:before,
select option,
select {
  width: 85%;
  padding: 0.75em;
  line-height: 1.4;
  background-color: #f9f9f9;
  border: 1px solid #e5e5e5;
  border-radius: 3px;
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
input:focus {
  outline: 0;
  border-color: #64ac15;
}
input:focus + .input-icon i {
  color: #7ed321;
}
input:focus + .input-icon:after {
  border-right-color: #7ed321;
}
input[type="radio"] {
  display: none;
}
input[type="radio"] + label,
select {
  display: inline-block;
  width: 85%;
  text-align: center;
  float: left;
  border-radius: 0;
}
input[type="radio"] + label:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
input[type="radio"] + label:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
input[type="radio"] + label i {
  padding-right: 0.4em;
}
input[type="radio"]:checked + label,
input:checked + label:before,
select:focus,
select:active {
 
  color:#546c70;
  
}
input[type="checkbox"] {
  display: none;
}
input[type="checkbox"] + label {
  position: relative;
  display: block;
  padding-left: 1.6em;
}
input[type="checkbox"] + label:before {
  position: absolute;
  top: 0.2em;
  left: 0;
  display: block;
  width: 1em;
  height: 1em;
  padding: 0;
  content: "";
}
input[type="checkbox"] + label:after {
  position: absolute;
  top: 0.45em;
  left: 0.2em;
  font-size: 0.8em;
  color: #fff;
  opacity: 0;
  font-family: FontAwesome;
  content: "\f00c";
}
input:checked + label:after {
  opacity: 1;
}
select {
  line-height: 2;
}
select:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
select:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
select:focus,
select:active {
  outline: 0;
}
select option {
  background-color: #e1fad3;
  color:#546c70;
}
.input-group {
  margin-bottom: 1em;
  zoom: 1;
}
.input-group:before,
.input-group:after {
  content: "";
  display: table;
}
.input-group:after {
  clear: both;
}
.input-group-icon {
  position: relative;
}
.input-group-icon input {
  padding-left: 4.4em;
}
.input-group-icon .input-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 3.4em;
  height: 3.4em;
  line-height: 3.4em;
  text-align: center;
  pointer-events: none;
}
.input-group-icon .input-icon:after {
  position: absolute;
  top: 0.6em;
  bottom: 0.6em;
  left: 3.4em;
  display: block;
  border-right: 1px solid #e5e5e5;
  content: "";
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.input-group-icon .input-icon i {
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.container {
  margin: 0em auto;
  background-color: #fff;
  border-radius: 4.2px;
  box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
}
.row {
  zoom: 1;
}
.row:before,
.row:after {
  content: "";
  display: table;
}
.row:after {
  clear: both;
}
.col-half {
  padding-right: 10px;
  float: left;
  width: 50%;
  padding-bottom: 1.4em;
}
.col-half:last-of-type {
  padding-right: 0;
}
.col-third {
  padding-right: 10px;
  float: left;
  width: 33.33333333%;
  padding-bottom: 1.4em;
}
.col-third:last-of-type {
  padding-right: 0;
}

.col-large {
    padding-right: 10px;
    float: left;
    width: 66%;
}
.col-large:last-of-type {
  padding-right: 0;
}

.dd{width: 25%;}
.mm{width: 25%;}

.btn-upload{
  color: rgb(255, 255, 255);
  background-color: rgb(53, 70, 85);
  padding: 7px;
}

.btn-submit{
  margin-left:45%;
  padding: 10px 25px;
  font-size: 20px;
  border-radius: 4px;
  background-color: rgb(16, 111, 219);
}
.btn-submit h4{
  color: white;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.citizenship{
  padding-bottom: 0em;
}

.date{
  padding-bottom: 0em;
}

.date select{
  width: 100%;

}

.required{
  color: red;
}

.alert {
    padding: 8px 35px 8px 14px;
    margin-bottom: 20px;
    color: #c09853;
    text-shadow: 0 1px 0 rgba(255,255,255,0.5);
    background-color: #fcf8e3;
    border: 1px solid #fbeed5;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}

.alert-success {
    color: #194ecb;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.alert-success {
    color: white;
    background-color: #0badc3;
    border-color: #d6e9c6;
}
.alert-danger {
    color: white;
    background-color: #d30f2d;
    border-color: #d6e9c6;
}
.address input{
  width: 19%;
}
.per_address{
  padding-bottom: 1.4em;
}

/*image*/

.hide{
  display: none;
}
.btn-success{
    float: right;
    margin-top: -35px;
    background-color: #31caa5;
    color: white;
    padding: 4px;
}
.btn-danger{
      background-color: #ed2a2a;
      color: white;
}

.dd,.mm,.yy{
  padding-bottom:0em;
  padding-right:0px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media only screen and (max-width: 540px) {
  .col-half {
    width: 100%;
    padding-right: 0;
  }
}

 
h4{
  display: block;
    font-size: 1em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
  color:#0a0a6f;
}

.answer{
  margin-left:10px;
  color: #0c0c0c;
  font-size: 12px;
}

.col-half{
  max-height:45px;
}

.logo{
  max-width:200px; 
  min-height: 100px;
  margin:10px;
}

.content-top{
  float: right;
}

.heading{background: #0a0a6f;margin: 5px; font-size: 10px;}
.heading h2{color: white;}
.official{border: 1px solid #0a0a6f}

.content-pp{float: left;}
.photo-pp{float:right;border: 2px solid #0a0a6f;height: 140px;width: 120px;margin: 5px;}
.photo-pp1{float:left;border: 2px solid #0a0a6f;height: 180px;width: 220px;margin: 8px;}

.upper-box{height: 28%;border-bottom:2px solid #0a0a6f;}
.lower-box{width:50%;border-right: 2px solid #0a0a6f;height: 65%;}
.zhs  {font-family: SimSum-18030, SimHei,serif;}
      </style>


  
</head>
 
<body>
  <img src="img/heading.png" width="100%" height="350px" />
  <div class="container">
    <div class="row">
      <div class="heading">
        <h2 align="center">Details of Client</h2>
      </div>
      
        <h4>Full Name :<span class="answer">{{$client->full_name}}</span></h4>
        
      
        <h4>Date Of Birth (A.D.) :<span class="answer">{{$client->dob_day_ad}}-{{$client->dob_month_ad}}-{{$client->dob_year_ad}}</span></h4>
        
        
        <h4>Date Of Birth (B.S.): <span class="answer">{{$client->dob_day_bs}}-{{$client->dob_month_bs}}-{{$client->dob_year_bs}}</span> </h4>
        
        <h4>Gender : <span class="answer">{{$client->gender}}</span></h4>
      
        <h4>Nationality : <span class="answer">{{$client->nationality}}</span></h4>
      
        <h4>Citizenship Number : <span class="answer">{{$client->cit_num}}</span> </h4>
      
        <h4>Citizenship Issued District : <span class="answer">{{$client->cit_iss_district}}</span></h4>
      
        <h4>Citizenship Issued Date (B.S.) : <span class="answer">{{$client->cit_iss_day}}-{{$client->cit_iss_month}}-{{$client->cit_iss_year}}</span></h4>
      
        <h4>Beneficiary Company Name : <span class="answer">{{$client->ben_comp_name}}</span></h4>
      
        <h4>Beneficiary ID No : <span class="answer">{{$client->ben_id_number}}</span></h4>
      
        <h4>Permanent Account Number(PAN) : <span class="answer">{{$client->pan}}</span></h4>
      
        <h4>Identification No. and address (incase of NRN) : <span class="answer">{{$client->nrn}}</span></h4>
    
    </div>
    
    
    <div class="row">
      <div class="heading"   style="font-size: 0.6em;">
        <h2 align="center">Current Address</h2>
      </div>
        <h4>Country : <span class="answer">{{$client->country}}</span> </h4>
      
        <h4>Province : <span class="answer">{{$client->cur_province}}</span></h4>
      
        <h4>District : <span class="answer">{{$client->cur_district}}</span></h4>
      
        <h4>Rural/Municipality/Sub Metropolitan/Metropolitan : <span class="answer">{{$client->cur_municipal}}</span></h4>
      
        <h4>Ward Number : <span class="answer">{{$client->cur_ward_num}}</span></h4>
      
        <h4>Tole : <span class="answer">{{$client->cur_tole}}</span></h4>
      
      
        <h4>Telephone Number : <span class="answer">{{$client->cur_tele}}</span></h4>
        
      
        <h4>Email ID : <span class="answer">{{$client->cur_email}}</span></h4>
      
      
        <h4>Mobile Number : <span class="answer">{{$client->cur_mob}}</span></h4>
      
    </div>
    
    <div class="row">
      <div class="heading">
        <h2 align="center">Permanent Address</h2>
      </div>
        <h4>Province : <span class="answer">{{$client->per_province}}</span></h4>
      
        <h4>District : <span class="answer">{{$client->per_district}}</span></h4>
        
        <h4>Rural/Municipality/Sub Metropolitan/Metropolitan : <span class="answer">{{$client->per_municipal}}</span></h4>
      
        <h4>Ward Number : <span class="answer">{{$client->per_ward_num}}</span></h4>
      
        <h4>Tole : <span class="answer">{{$client->per_ward_num}}</span></h4>
      
        <h4>Mobile Number : <span class="answer">{{$client->per_tele}}</span></h4>
      
    </div>
    
    <div class="row">
      <div class="heading">
        <h2 align="center">Details Of Family Members</h2>
      </div>
        <h4>Father's Name : <span class="answer">{{$client->father_name}}</span></h4>
      
        <h4>Grandfather's Name : <span class="answer">{{$client->grandfather_name}}</span></h4>
      
        <h4>Mother's Name : <span class="answer">{{$client->mother_name}}</span></h4>
      
        <h4>Spouse's Name : <span class="answer">{{$client->spouse_name}}</span></h4>
  
        <h4>Son's Name : <span class="answer">{{$client->son_name}}</span></h4>
      
        <h4>Daughter's Name(Unmarried) : <span class="answer">{{$client->daughter_name}}</span></h4>
      
        <h4>Daughter in Law's Name : <span class="answer">{{$client->daughter_law_name}}</span></h4>
      
        <h4>Father in Law's Name <br>(Only for Married Woman) : <span class="answer">{{$client->father_law_name}}</span></h4>
      
        <h4>Mother in Law's Name <br>(Only for Married Woman) : <span class="answer">{{$client->mother_law_name}}</span></h4>
      
    </div>
    
    <div class="row">
      <div class="heading">
        <h2 align="center">Bank Details</h2>
      </div>
        <h4>Bank Account Type : <span class="answer">{{$client->bank_acc_type}}</span></h4>
      
        <h4>Account Number : <span class="answer">{{$client->bank_acc_num}}</span></h4>
     
        <h4>Bank Name : <span class="answer">{{$client->bank_name}}</span></h4>
      
        <h4>Branch Name : <span class="answer">{{$client->bank_branch_address}}</span></h4>
      
    </div>
    
    <div class="row">
      <div class="heading">
        <h2 align="center">Details Of Occupation</h2>
      </div>
        <h4>Occupation : <span class="answer">{{$client->occupation}}</span></h4>
      
        <h4>Business Type : <span class="answer">{{$client->bus_type}}</span></h4>
      
        <h4>Organization's Name : <span class="answer">{{$client->org_name}}</span></h4>
      
        <h4>Organization Address : <span class="answer">{{$client->org_address}}</span></h4>
      
        <h4>Designation : <span class="answer">{{$client->designation}}</span></h4>
      
        <h4>Employee ID Number : <span class="answer">{{$client->emp_id_num}}</span></h4>
      
        <h4>Financial Annual Details : <span class="answer">{{$client->finan_detail}}</span></h4>
      
        <h4>Name of Company(If Involved in Investment Companies) : <span class="answer">{{$client->inv_company}}</span></h4>
      
        <h4>Designation in Investment Company : <span class="answer">{{$client->desig_inv_company}}</span></h4>
      
    </div>
    
    <div class="row" style="margin-top:15px;">
      <div class="heading">
        <h2 align="center">Guardian's Details (In case of Minor Only)</h2>
      </div>
        <h4>Full Name : <span class="answer">{{$client->minor_full_name}}</span></h4>
      
        <h4>Relationship with Applicant : <span class="answer">{{$client->minor_relation}}</span></h4>
      
        <h4>Correspondance Address : <span class="answer">{{$client->minor_address}}</span></h4>
      
        <h4>Country : <span class="answer">{{$client->minor_country}}</span></h4>
      
        <h4>Province : <span class="answer">{{$client->minor_province}}</span></h4>
      
        <h4>District : <span class="answer">{{$client->minor_district}}</span></h4>
      
        <h4>Rural/Municipality/Sub Metropolitan/Metropolitan : <span class="answer">{{$client->minor_municipal}}</span></h4>
      
        <h4>Ward Number : <span class="answer">{{$client->minor_ward_num}}</span></h4>
      
        <h4>Telephone No.: <span class="answer">{{$client->minor_tele}}</span></h4>
      
        <h4>Fax Number : <span class="answer">{{$client->minor_fax}}</span></h4>
      
        <h4>Mobile Number : <span class="answer">{{$client->minor_mob}}</span></h4>
      
        <h4>PAN Number : <span class="answer">{{$client->minor_pan}}</span></h4>
      
        <h4>Email ID : <span class="answer">{{$client->minor_email}}</span></h4>
      
    </div>

    <img src="img/map.png" width="100%" height="350px" />
    <img src="img/dhitopatra1.png" width="100%" height="200px" />
    <img src="img/dhitopatra4.png" width="100%" height="320px" style="margin-top:15px;" />
    <img src="img/thumb.png" width="100%" height="200px" />
    <img src="img/lastofficial.png" width="100%" height="300px" />
</div>  
</body>

</html>
