<!DOCTYPE html> 
<html lang="en" > 

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<meta content="width=device-width, initial-scale=1" name="viewport" />
      <link rel="stylesheet" href="/css/darpan.css">


  
</head>

<body>
    <div class="container">
      <div>
        @if(session()->has('success_message'))
          <div class="alert alert-success">
            <i>{{session()->get('success_message')}}</i>&nbsp;
            <button class="btn btn-print" onclick="JavaScript:window.print()" ><h4>Click to Print </h4></button>

          </div>

        @endif  

        @if(count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
      </div>
      <div class="row top" style="border-bottom: 2px solid #546c70;">
      <div class="logo"><img src="img/logo2.png" width="100%" height="100%" /></div>
      <div class="content-top">
        <h4 align="center"><span style="font-size: 25px;">अनुसूची-१२</span> <br/><span style="font-size: 15px;">(नियम २९ को उपनियम (१) संग सम्बन्धित)</span><br><br><span style="font-size: 20px;border-bottom: 1px solid #0a0a6f;">प्राकिर्तिक व्यक्तिको परिचय विवरण <br>Details Of Natural Person</span></h4>
      </div>
      
    </div>
  <form action="{{route('test.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
      <h2>General Details</h2>
      <div class="col-half">
        <h4>Client Type <span class="required">*</span></h4>
        <select name="client_type" class="form-control"> 
          <option value="">Please Select</option>
          <option value="ONLINE" @if(old('ONLINE')=='ONLINE') selected @endif>ONLINE</option>
          <option value="OFFLINE" @if(old('OFFLINE')=='OFFLINE') selected @endif>OFFLINE</option>
        </select>
      </div>
      <div class="col-half">
        <h4>Member Branch  <span class="required">*</span></h4>
        <select name="mem_branch" class="form-control"> 
          <option value="">Please Select</option>
          <option value="Member Branch 1" @if(old('mem_branch')=='Member Branch 1') selected @endif>KATHMANDU</option>
          <option value="Member Branch 2" @if(old('mem_branch')=='Member Branch 2') selected @endif>BANEPA</option>
          <option value="Member Branch 3" @if(old('mem_branch')=='Member Branch 3') selected @endif>BHAIRAHWA</option>
        </select>
      </div>
      <div class="col-half">
        <h4>Mobile Number  <span class="required">*</span></h4>
        <input type="text" name="mob_num" value="{{old('mob_num')}}" required="required" />
      </div>
      <div class="col-half">
        <h4>Email <span class="required">*</span></h4>
        <input type="text" name="email" value="{{old('email')}}" />
      </div>   
    </div>
    <hr>
    <div class="row">
      <h2>Details Of Client</h2>
      <div class="col-third">
        <h4>Full Name<span class="required">*</span></h4>
        <input type="text" name="full_name" value="{{old('full_name')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Date Of Birth (A.D.) <span class="required">*</span></h4>
        <div class="col-third dd">
          <select name="dob_day_ad" class="form-control" >
                <option value="">Day</option>
                <?php 
                for($i=1;$i<=31;$i++){
                ?>

                <option value="<?php echo sprintf("%'.02d",$i);?>" @if(old('dob_day_ad')==$i) selected @endif><?php echo sprintf("%'.02d",$i);?></option>
               <?php } ?>
          </select>
        </div>
        <div class="col-third mm">
          <select name="dob_month_ad" class="form-control" > 
            <option value="">Month</option>
            <option value="January" @if(old('dob_month_ad')=='January') selected @endif>January</option>
            <option value="Feburary" @if(old('dob_month_ad')=='Feburary') selected @endif>Feburary</option>
            <option value="March" @if(old('dob_month_ad')=='Feburary') selected @endif>March</option>
            <option value="April" @if(old('dob_month_ad')=='Feburary') selected @endif>April</option>
            <option value="May" @if(old('dob_month_ad')=='Feburary') selected @endif>May</option>
            <option value="June" @if(old('dob_month_ad')=='Feburary') selected @endif>June</option>
            <option value="July" @if(old('dob_month_ad')=='Feburary') selected @endif>July</option>
            <option value="August" @if(old('dob_month_ad')=='Feburary') selected @endif>August</option>
            <option value="September" @if(old('dob_month_ad')=='Feburary') selected @endif>September</option>
            <option value="October" @if(old('dob_month_ad')=='Feburary') selected @endif>October</option>
            <option value="November" @if(old('dob_month_ad')=='Feburary') selected @endif>November</option>
            <option value="December" @if(old('dob_month_ad')=='Feburary') selected @endif>December</option>
          </select>
        </div>
        <div class="col-third yy">
          <select name="dob_year_ad" class="form-control" >
                <option value="">Year</option>
                <?php 
                  $latest_year = date('Y');
                  $start_year=1940;
                  for($i=$latest_year;$i>=$start_year;$i--){
                ?>
                <option value="<?php echo $i;?>" @if(old('dob_year_ad')==$i) selected @endif><?php echo sprintf("%'.02d",$i);?></option>
               <?php 
                  } 
                ?>

            </select>
        </div>
      </div>
      <div class="col-third">
        <h4>Date Of Birth (B.S.) <span class="required">*</span></h4>
        <div class="col-third dd">
          <select name="dob_day_bs" class="form-control" >
                <option value="">Day</option>
                <?php 
                for($i=1;$i<=31;$i++){
                ?>

                <option value="<?php echo sprintf("%'.02d",$i);?>" @if(old('dob_day_bs')==$i) selected @endif><?php echo sprintf("%'.02d",$i);?></option>
               <?php } ?>
          </select>
        </div>
        <div class="col-third mm">
          <select name="dob_month_bs" class="form-control" >
            <option value="">Month</option>
            <option value="Baishak" @if(old('dob_month_bs')=='January') selected @endif>Baishak</option>
            <option value="Jestha" @if(old('dob_month_bs')=='Feburary') selected @endif>Jestha</option>
            <option value="Ashad" @if(old('dob_month_bs')=='Feburary') selected @endif>Ashad</option>
            <option value="Shrawan" @if(old('dob_month_bs')=='Feburary') selected @endif>Shrawan</option>
            <option value="Bhadra" @if(old('dob_month_bs')=='Feburary') selected @endif>Bhadra</option>
            <option value="Ashoj" @if(old('dob_month_bs')=='Feburary') selected @endif>Ashoj</option>
            <option value="Kartik" @if(old('dob_month_bs')=='Feburary') selected @endif>Kartik</option>
            <option value="Mangsir" @if(old('dob_month_bs')=='Feburary') selected @endif>Mangsir</option>
            <option value="Poush" @if(old('dob_month_bs')=='Feburary') selected @endif>Poush</option>
            <option value="Magh" @if(old('dob_month_bs')=='Feburary') selected @endif>Magh</option>
            <option value="Falgun" @if(old('dob_month_bs')=='Feburary') selected @endif>Falgun</option>
            <option value="Chaitra" @if(old('dob_month_bs')=='Feburary') selected @endif>Chaitra</option>
                
          </select>
        </div>
        <div class="col-third yy">
          <select name="dob_year_bs" class="form-control" >
                <option value="">Year</option>
                <?php 
                  $latest_year = 2076;
                  $start_year=1980;
                  for($i=$latest_year;$i>=$start_year;$i--){
                ?>
                <option value="<?php echo $i;?>" @if(old('dob_year_bs')==$i) selected @endif><?php echo sprintf("%'.02d",$i);?></option>
               <?php 
                  } 
                ?>

            </select>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-third">
        <h4>Gender <span class="required">*</span></h4>
        <select name="gender" class="form-control" required="required"> 
          <option value="">Please Select</option>
          <option value="Male" @if(old('gender')=='Male') selected @endif>Male</option>
          <option value="Female" @if(old('gender')=='Female') selected @endif>Female</option>
          <option value="Others" @if(old('gender')=='Others') selected @endif>Others</option>
        </select>
      </div>
      <div class="col-third">
        <h4>Nationality <span class="required">*</span></h4>
        <input type="text" name="nationality" value="{{old('nationality')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Citizenship Number <span class="required">*</span></h4>
        <input type="text" name="cit_num" value="{{old('cit_num')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Citizenship Issued District <span class="required">*</span></h4>
        <input type="text" name="cit_iss_district" value="{{old('cit_iss_district')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Citizenship Issued Date (A.D.)<span class="required">*</span></h4>
        <div class="col-third dd">
          <select name="cit_iss_day" class="form-control" >
                <option value="">Day</option>
                <?php 
                for($i=1;$i<=31;$i++){
                ?>
                <option value="<?php echo sprintf("%'.02d",$i);?>" @if(old('cit_iss_day')==$i) selected @endif><?php echo sprintf("%'.02d",$i);?></option>
               <?php } ?>
          </select>
        </div>
        <div class="col-third mm">
          <select name="dob_month_ad" class="form-control" > 
            <option value="">Month</option>
            <option value="January" @if(old('dob_month_ad')=='January') selected @endif>January</option>
            <option value="Feburary" @if(old('dob_month_ad')=='Feburary') selected @endif>Feburary</option>
            <option value="March" @if(old('dob_month_ad')=='Feburary') selected @endif>March</option>
            <option value="April" @if(old('dob_month_ad')=='Feburary') selected @endif>April</option>
            <option value="May" @if(old('dob_month_ad')=='Feburary') selected @endif>May</option>
            <option value="June" @if(old('dob_month_ad')=='Feburary') selected @endif>June</option>
            <option value="July" @if(old('dob_month_ad')=='Feburary') selected @endif>July</option>
            <option value="August" @if(old('dob_month_ad')=='Feburary') selected @endif>August</option>
            <option value="September" @if(old('dob_month_ad')=='Feburary') selected @endif>September</option>
            <option value="October" @if(old('dob_month_ad')=='Feburary') selected @endif>October</option>
            <option value="November" @if(old('dob_month_ad')=='Feburary') selected @endif>November</option>
            <option value="December" @if(old('dob_month_ad')=='Feburary') selected @endif>December</option>
          </select>
        </div>
        <div class="col-third yy">
          <select name="cit_iss_year" class="form-control" >
                <option value="">Year</option>
                <?php 
                  $latest_year = date('Y');
                  $start_year=1940;
                  for($i=$latest_year;$i>=$start_year;$i--){
                ?>
                <option value="<?php echo $i;?>" @if(old('cit_iss_year')==$i) selected @endif><?php echo $i;?></option>
               <?php 
                  } 
                ?>

            </select>
        </div>
      </div>
      <div class="col-third">
        <h4>Beneficiary Company Name<span class="required">*</span></h4>
        <input type="text" name="ben_comp_name" value="{{old('ben_comp_name')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Beneficiary ID Number:<span class="required">*</span></h4>
        <input type="text" name="ben_id_number" value="{{old('ben_id_number')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Permanent Account Number(PAN)<span class="required">*</span></h4>
        <input type="text" name="pan" value="{{old('pan')}}" />
      </div>
      <div class="col-third">
        <h4>Identification No. and address (incase of NRN)<span class="required">*</span></h4>
        <input type="text" name="nrn" value="{{old('nrn')}}"/>
      </div>
    </div>
    <hr>
    
    <div class="row">
      <h2>Current Address</h2>
      <div class="col-third">
        <h4>Country<span class="required">*</span></h4>
        <input type="text" name="country" value="{{old('country')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Province<span class="required">*</span></h4>
        <input type="text" name="cur_province" value="{{old('cur_province')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>District<span class="required">*</span></h4>
        <input type="text" name="cur_district" value="{{old('cur_district')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Rural/Municipality/Sub Metropolitan/Metropolitan<span class="required">*</span></h4>
        <input type="text" name="cur_municipal" value="{{old('cur_municipal')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Ward Number<span class="required">*</span></h4>
        <input type="text" name="cur_ward_num" value="{{old('cur_ward_num')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Tole<span class="required">*</span></h4>
        <input type="text" name="cur_tole" value="{{old('cur_tole')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Telephone Number<span class="required">*</span></h4>
        <input type="text" name="cur_tele" value="{{old('cur_tele')}}" />
      </div>  
      <div class="col-third">
        <h4>Email ID<span class="required">*</span></h4>
        <input type="text" name="cur_email" value="{{old('cur_email')}}" required="required"/>
      </div>  
      <div class="col-third">
        <h4>Mobile Number<span class="required">*</span></h4>
        <input type="text" name="cur_mob" value="{{old('cur_mob')}}" required="required"/>
      </div>
    </div>
    <hr>
    <div class="row">
      <h2>Permanent Address</h2>
      <div class="col-third">
        <h4>Province<span class="required">*</span></h4>
        <input type="text" name="per_province" value="{{old('per_province')}}" required="required" />
      </div>
      <div class="col-third">
        <h4>District<span class="required">*</span></h4>
        <input type="text" name="per_district" value="{{old('per_district')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Rural/Municipality/Sub Metropolitan/Metropolitan<span class="required">*</span></h4>
        <input type="text" name="per_municipal" value="{{old('per_municipal')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Ward Number<span class="required">*</span></h4>
        <input type="text" name="per_ward_num" value="{{old('per_ward_num')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Tole<span class="required">*</span></h4>
        <input type="text" name="per_tole" value="{{old('per_tole')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Telephone Number<span class="required">*</span></h4>
        <input type="text" name="per_tele" value="{{old('per_tele')}}"/>
      </div> 
    </div>
    <hr>
    <div class="row">
      <h2>Details Of Family Members</h2>
      <div class="col-third">
        <h4>Father's Name<span class="required">*</span></h4>
        <input type="text" name="father_name" value="{{old('father_name')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Grandfather's Name<span class="required">*</span></h4>
        <input type="text" name="grandfather_name" value="{{old('grandfather_name')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Mother's Name<span class="required">*</span></h4>
        <input type="text" name="mother_name" value="{{old('mother_name')}}" required="required"/>
      </div> 
      <div class="col-third">
        <h4>Spouse's Name<span class="required">*</span></h4>
        <input type="text" name="spouse_name" value="{{old('spouse_name')}}"/>
      </div>     
      <div class="col-third">
        <h4>Son's Name<span class="required">*</span></h4>
        <input type="text" name="son_name" value="{{old('son_name')}}"/>
      </div> 
      <div class="col-third">
        <h4>Daughter's Name(Unmarried)<span class="required">*</span></h4>
        <input type="text" name="daughter_name" value="{{old('daughter_name')}}"/>
      </div> 
      <div class="col-third">
        <h4>Daughter in Law's Name<span class="required">*</span></h4>
        <input type="text" name="daughter_law_name" value="{{old('daughter_law_name')}}"/>
      </div> 
      <div class="col-third">
        <h4>Father in Law's Name (Only for Married Woman)<span class="required">*</span></h4>
        <input type="text" name="father_law_name" value="{{old('father_law_name')}}"/>
      </div> 
      <div class="col-third">
        <h4>Mother in Law's Name (Only for Married Woman)<span class="required">*</span></h4>
        <input type="text" name="mother_law_name" value="{{old('mother_law_name')}}"/>
      </div> 
    </div>
    <hr>
    <div class="row">
      <h2>Bank Details</h2>
      <div class="col-third">
        <h4>Bank Account Type <span class="required">*</span></h4>
        <select name="bank_acc_type" class="form-control"> 
          <option value="" style="color: green;">Please Select</option>
          <option value="Account Type 1" @if(old('bank_acc_type')=='Account Type 1') selected @endif>Current</option>
          <option value="Account type 2" @if(old('bank_acc_type')=='Account Type 2') selected @endif>Transactional</option>
          <option value="Account Type 3" @if(old('bank_acc_type')=='Account Type 3') selected @endif>Settlement</option>
          <option value="Account Type 3" @if(old('bank_acc_type')=='Account Type 3') selected @endif>Collateral</option>
        </select>
      </div>
      <div class="col-third">
        <h4>Account Number <span class="required">*</span></h4>
        <input type="text" name="bank_acc_num" value="{{old('bank_acc_num')}}" required="required" />
      </div>  
      <div class="col-third">
        <h4>Bank Name <span class="required">*</span></h4>
        <input type="text" name="bank_name" value="{{old('bank_name')}}" required="required"/>
      </div>
      <div class="col-third">
        <h4>Bank Branch Address<span class="required">*</span></h4>
        <input type="text" name="bank_branch_address" value="{{old('bank_branch_address')}}" required="required"/>
      </div>   
    </div>
    <hr>
    <div class="row">
      <h2>Details Of Occupation</h2>
      <div class="col-third">
        <h4>Occupation <span class="required">*</span></h4>
        <select name="occupation" class="form-control"> 
          <option value="" style="color: green;">Please Select</option>
          <option value="Service" @if(old('occupation')=='Service') selected @endif>Service</option>
          <option value="Government" @if(old('occupation')=='Government') selected @endif>Government</option>
          <option value="Public/Private Sector" @if(old('occupation')=='Public/Private Sector') selected @endif>Public/Private Sector</option>
          <option value="NGO/INGO" @if(old('occupation')=='NGO/INGO') selected @endif>NGO/INGO</option>
          <option value="Expert" @if(old('occupation')=='Expert') selected @endif>Expert</option>
          <option value="Student" @if(old('occupation')=='Student') selected @endif>Student</option>
          <option value="Businessperson" @if(old('occupation')=='Businessperson') selected @endif>Businessperson</option>
          <option value="Agriculture" @if(old('occupation')=='Agriculture') selected @endif>Agriculture</option>
          <option value="Retired" @if(old('occupation')=='Retired') selected @endif>Retired</option>
          <option value="House Wife" @if(old('occupation')=='NGO/INGO') selected @endif>House Wife</option>
          <option value="Others" @if(old('occupation')=='Others') selected @endif>Others</option>
        </select>
      </div> 
      <div class="col-third">
        <h4>Business Type<span class="required">*</span></h4>
        <select name="bus_type" class="form-control"> 
          <option value="" style="color: green;">Please Select</option>
          <option value="Manufacturing" @if(old('bus_type')=='Manufacturing') selected @endif>Manufacturing</option>
          <option value="Service Oriented" @if(old('bus_type')=='Service Oriented') selected @endif>Service Oriented</option>
          <option value="Others" @if(old('bus_type')=='Others') selected @endif>Others</option>
        </select>
      </div>
      <div class="col-third">
        <h4>Organization's Name<span class="required">*</span></h4>
        <input type="text" name="org_name" value="{{old('org_name')}}" />
      </div>
      <div class="col-third">
        <h4>Organization Address<span class="required">*</span></h4>
        <input type="text" name="org_address" value="{{old('org_address')}}" />
      </div>
      <div class="col-third">
        <h4>Designation<span class="required">*</span></h4>
        <input type="text" name="designation" value="{{old('designation')}}" />
      </div>
      <div class="col-third">
        <h4>Employee ID Number<span class="required">*</span></h4>
        <input type="text" name="emp_id_num" value="{{old('emp_id_num')}}" />
      </div>
      <div class="col-third">
        <h4>Financial Annual Details<span class="required">*</span></h4>
        <select name="finan_detail" class="form-control"> 
          <option value="" style="color: green;">Please Select</option>
          <option value="Upto Rs.5,00,000" @if(old('finan_detail')=='Upto Rs.5,00,000') selected @endif>Upto Rs.5,00,000</option>
          <option value="From Rs.5,00,001 to Rs.10,00,000" @if(old('finan_detail')=='From Rs.5,00,001 to Rs.10,00,000') selected @endif>From Rs.5,00,001 to Rs.10,00,000</option>
          <option value="Above Rs.10,00,000" @if(old('finan_detail')=='Above Rs.10,00,000') selected @endif>Above Rs.10,00,000</option>
        </select>
      </div>
      <div class="col-third">
        <h4>Name of Company(If Involved in Investment Companies)<span class="required">*</span></h4>
        <input type="text" name="inv_company" value="{{old('inv_company')}}" />
      </div>
      <div class="col-third">
        <h4>Designation in Investment Company<span class="required">*</span></h4>
        <select name="desig_inv_company" class="form-control">
          <option value="" style="color: green;">Please Select</option>
          <option value="Director" @if(old('desig_inv_company')=='Director') selected @endif>Director</option>
          <option value="Executive" @if(old('desig_inv_company')=='Executive') selected @endif>Executive</option>
          <option value="Shareholder" @if(old('desig_inv_company')=='Shareholder') selected @endif>Shareholder</option>
          <option value="Employee" @if(old('desig_inv_company')=='Employee') selected @endif>Employee</option>
          <option value="Others" @if(old('desig_inv_company')=='Others') selected @endif>Others</option>
        </select>
      </div>
    </div>
    <hr>
    <div class="row">
      <h2>Guardian's Details (In case of Minor Only)</h2>
      <div class="col-third">
        <h4>Full Name<span class="required">*</span></h4>
        <input type="text" name="minor_full_name" value="{{old('minor_full_name')}}"/>
      </div>
      <div class="col-third">
        <h4>Relationship with Applicant<span class="required">*</span></h4>
        <input type="text" name="minor_relation" value="{{old('minor_relation')}}"/>
      </div> 
      <div class="col-third">
        <h4>Correspondance Address<span class="required">*</span></h4>
        <input type="text" name="minor_mail_address" value="{{old('minor_mail_address')}}"/>
      </div> 
      <div class="col-third">
        <h4>Country<span class="required">*</span></h4>
        <input type="text" name="minor_country" value="{{old('minor_country')}}"/>
      </div> 
      <div class="col-third">
        <h4>Province<span class="required">*</span></h4>
        <input type="text" name="minor_province" value="{{old('minor_province')}}"/>
      </div> 
      <div class="col-third">
        <h4>District<span class="required">*</span></h4>
        <input type="text" name="minor_district" value="{{old('minor_district')}}"/>
      </div> 
      <div class="col-third">
        <h4>Rural/Municipality/Sub Metropolitan/Metropolitan<span class="required">*</span></h4>
        <input type="text" name="minor_municipal" value="{{old('minor_municipal')}}"/>
      </div> 
      <div class="col-third">
        <h4>Ward Number<span class="required">*</span></h4>
        <input type="text" name="minor_ward_num" value="{{old('minor_ward_num')}}"/>
      </div>
      <div class="col-third">
        <h4>Telephone No.<span class="required">*</span></h4>
        <input type="text" name="minor_tele" value="{{old('minor_tele')}}"/>
      </div>
      <div class="col-third">
        <h4>Fax Number<span class="required">*</span></h4>
        <input type="text" name="minor_fax" value="{{old('minor_fax')}}"/>
      </div>
      <div class="col-third">
        <h4>Mobile Number<span class="required">*</span></h4>
        <input type="text" name="minor_mob" value="{{old('minor_mob')}}"/>
      </div>
      <div class="col-third">
        <h4>PAN Number<span class="required">*</span></h4>
        <input type="text" name="minor_pan" value="{{old('minor_pan')}}"/>
      </div>
      <div class="col-third">
        <h4>Email ID<span class="required">*</span></h4>
        <input type="text" name="minor_email"  value="{{old('minor_email')}}"/>
      </div>
    </div>
    <hr>
    <div class="row">
      <h2>Upload All Documents(Citizenship photo, Recent Passport Size photo)<span class="required" > *</span></h2><br>
        <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>&nbsp;Click to Add Image</button>
        <div class="increment col-third" >
          <input type="file" name="image[]" value="{{old('image[]')}}"  class="form-control btn-upload" >
          
        </div>
        <div class="clone hide">
          <div class="col-third control-group">
            <input type="file" name="image[]" class="form-control btn-upload">
            <div> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> &nbsp;Remove</button>
            </div>
          </div>
        </div>
       
    </div>   
        <hr>
    <div class="row">
      <button class="btn btn-submit" type="submit" ><h4>SUBMIT</h4></button>
    </div>
  </form>
    
  
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('option[value=""]').attr("disabled", "disabled").css({"background-color":"#898686","color":"white"});

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });
    });

  </script>

</body>
</html>
