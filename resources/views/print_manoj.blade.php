<!DOCTYPE html> 
<html lang="en" > 

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="/css/darpan.css">
      <link rel="stylesheet" href="/css/print.css">


  
</head>
 
<body>
  
    <div class="container">
      <div class="row">

  <div class="container">
    <div class="row">
      <div class="content-top">
        <h4 align="center"><span style="font-size: 25px;">अनुसूची-१२</span> <br/><span style="font-size: 15px;">(नियम २९ को उपनियम (१) संग सम्बन्धित)</span><br><br><span style="font-size: 20px;border-bottom: 1px solid #0a0a6f;">प्राकिर्तिक व्यक्तिको परिचय विवरण <br>Details Of Natural Person</span></h4>
      </div>
      <div class="logo"><img src="img/logo2.png" width="100%" height="100%" /></div>
    </div>
    <td><a href="{{action('ManojController@downloadPDF',$client->id)}}" target="_blank">PDF</a></td>
    <div class="row official">
      <div class="heading">
        <h2 align="center">For Official Use Only</h2>
      </div>
      <div class="col-third">
        <h4>Client`s Tradind Id :<span class="answer">...................................</span></h4>
      </div>
      <div class="col-third">
        <h4>Reference No : <span class="answer">..........................................</span></h4>
      </div>
      <div class="col-third">
        <h4>Date : <span class="answer">..................................................</span></h4>    
      </div>
    </div>
    <div class="row">
      <div class="content-pp">
        <h4 align="left"><span>Please Complete all the details and strike out the non-applicable fields/boxes</span> <br><br/><span style="font-size: 25px;">Vision Securities (P.)Ltd.</span><br></br><span style="font-size: 20px;">.................................(Branch)</h4>
      </div>
      <div class="photo-pp"><h4 style="font-size:15px;margin-top: 40px" align="center">PP Size photo<br>(Recent)</h4></div>
    </div>  

    <div class="row">
      <div class="heading">
        <h2 align="center">Details of Client</h2>
      </div>
      <div class="col-half">
        <h4>Full Name :<span class="answer">{{$client->full_name}}</span></h4>
        
      </div>
      <div class="col-half">
        <h4>Date Of Birth (A.D.) :<span class="answer">{{$client->dob_day_ad}}-{{$client->dob_month_ad}}-{{$client->dob_year_ad}}</span></h4>
        
        </div>
      <div class="col-half">
        <h4>Date Of Birth (B.S.): <span class="answer">{{$client->dob_day_bs}}-{{$client->dob_month_bs}}-{{$client->dob_year_bs}}</span> </h4>
        </div>
    
    
      <div class="col-half">
        <h4>Gender : <span class="answer">{{$client->gender}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Nationality : <span class="answer">{{$client->nationality}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Citizenship Number : <span class="answer">{{$client->cit_num}}</span> </h4>
      </div>
      <div class="col-half">
        <h4>Citizenship Issued District : <span class="answer">{{$client->cit_iss_district}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Citizenship Issued Date (B.S.) : <span class="answer">{{$client->cit_iss_day}}-{{$client->cit_iss_month}}-{{$client->cit_iss_year}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Beneficiary Company Name : <span class="answer">{{$client->ben_comp_name}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Beneficiary ID No : <span class="answer">{{$client->ben_id_number}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Permanent Account Number(PAN) : <span class="answer">{{$client->pan}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Identification No. and address (incase of NRN) : <span class="answer">{{$client->nrn}}</span></h4>
      </div>
    </div>
    
    
    <div class="row">
      <div class="heading">
        <h2 align="center">Current Address</h2>
      </div>
      <div class="col-half">
        <h4>Country : <span class="answer">{{$client->country}}</span> </h4>
      </div>
      <div class="col-half">
        <h4>Province : <span class="answer">{{$client->cur_province}}</span></h4>
      </div>
      <div class="col-half">
        <h4>District : <span class="answer">{{$client->cur_district}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Rural/Municipality/Sub Metropolitan/Metropolitan : <span class="answer">{{$client->cur_municipal}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Ward Number : <span class="answer">{{$client->cur_ward_num}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Tole : <span class="answer">{{$client->cur_tole}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Telephone Number : <span class="answer">{{$client->cur_tele}}</span></h4>
      </div>  
      <div class="col-half">
        <h4>Email ID : <span class="answer">{{$client->cur_email}}</span></h4>
      </div>  
      <div class="col-half">
        <h4>Mobile Number : <span class="answer">{{$client->cur_mob}}</span></h4>
      </div>
    </div>
    
    <div class="row">
      <div class="heading">
        <h2 align="center">Permanent Address</h2>
      </div>
      <div class="col-half">
        <h4>Province : <span class="answer">{{$client->per_province}}</span></h4>
      </div>
      <div class="col-half">
        <h4>District : <span class="answer">{{$client->per_district}}</span></h4>
        </div>
      <div class="col-half">
        <h4>Rural/Municipality/Sub Metropolitan/Metropolitan : <span class="answer">{{$client->per_municipal}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Ward Number : <span class="answer">{{$client->per_ward_num}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Tole : <span class="answer">{{$client->per_ward_num}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Mobile Number : <span class="answer">{{$client->per_tele}}</span></h4>
      </div> 
    </div>
    
    <div class="row">
      <div class="heading">
        <h2 align="center">Details Of Family Members</h2>
      </div>
      <div class="col-half">
        <h4>Father's Name : <span class="answer">{{$client->father_name}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Grandfather's Name : <span class="answer">{{$client->grandfather_name}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Mother's Name : <span class="answer">{{$client->mother_name}}</span></h4>
      </div> 
      <div class="col-half">
        <h4>Spouse's Name : <span class="answer">{{$client->spouse_name}}</span></h4>
      </div>     
      <div class="col-half">
        <h4>Son's Name : <span class="answer">{{$client->son_name}}</span></h4>
      </div> 
      <div class="col-half">
        <h4>Daughter's Name(Unmarried) : <span class="answer">{{$client->daughter_name}}</span></h4>
      </div> 
      <div class="col-half">
        <h4>Daughter in Law's Name : <span class="answer">{{$client->daughter_law_name}}</span></h4>
      </div> 
      <div class="col-half">
        <h4>Father in Law's Name <br>(Only for Married Woman) : <span class="answer">{{$client->father_law_name}}</span></h4>
      </div> 
      <div class="col-half">
        <h4>Mother in Law's Name <br>(Only for Married Woman) : <span class="answer">{{$client->mother_law_name}}</span></h4>
      </div> 
    </div>
    
    <div class="row">
      <div class="heading">
        <h2 align="center">Bank Details</h2>
      </div>
      <div class="col-half">
        <h4>Bank Account Type : <span class="answer">{{$client->bank_acc_type}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Account Number : <span class="answer">{{$client->bank_acc_num}}</span></h4>
      </div>  
      <div class="col-half">
        <h4>Bank Name : <span class="answer">{{$client->bank_name}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Branch Name : <span class="answer">{{$client->bank_branch_address}}</span></h4>
      </div>
    </div>
    
    <div class="row">
      <div class="heading">
        <h2 align="center">Details Of Occupation</h2>
      </div>
      <div class="col-half">
        <h4>Occupation : <span class="answer">{{$client->occupation}}</span></h4>
      </div> 
      <div class="col-half">
        <h4>Business Type : <span class="answer">{{$client->bus_type}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Organization's Name : <span class="answer">{{$client->org_name}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Organization Address : <span class="answer">{{$client->org_address}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Designation : <span class="answer">{{$client->designation}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Employee ID Number : <span class="answer">{{$client->emp_id_num}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Financial Annual Details : <span class="answer">{{$client->finan_detail}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Name of Company(If Involved in Investment Companies) : <span class="answer">{{$client->inv_company}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Designation in Investment Company : <span class="answer">{{$client->desig_inv_company}}</span></h4>
      </div>
    </div>
    
    <div class="row">
      <div class="heading">
        <h2 align="center">Guardian's Details (In case of Minor Only)</h2>
      </div>
      <div class="col-half">
        <h4>Full Name : <span class="answer">{{$client->minor_full_name}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Relationship with Applicant : <span class="answer">{{$client->minor_relation}}</span></h4>
      </div> 
      <div class="col-half">
        <h4>Correspondance Address: <span class="answer">{{$client->minor_address}}</span></h4>
      </div> 
      <div class="col-half">
        <h4>Country : <span class="answer">{{$client->minor_country}}</span></h4>
      </div> 
      <div class="col-half">
        <h4>Province : <span class="answer">{{$client->minor_province}}</span></h4>
      </div> 
      <div class="col-half">
        <h4>District : <span class="answer">{{$client->minor_district}}</span></h4>
      </div> 
      <div class="col-half">
        <h4>Rural/Municipality/Sub Metropolitan/Metropolitan : <span class="answer">{{$client->minor_municipal}}</span></h4>
      </div> 
      <div class="col-half">
        <h4>Ward Number : <span class="answer">{{$client->minor_ward_num}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Telephone No.: <span class="answer">{{$client->minor_tele}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Fax Number : <span class="answer">{{$client->minor_fax}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Mobile Number : <span class="answer">{{$client->minor_mob}}</span></h4>
      </div>
      <div class="col-half">
        <h4>PAN Number : <span class="answer">{{$client->minor_pan}}</span></h4>
      </div>
      <div class="col-half">
        <h4>Email ID : <span class="answer">{{$client->minor_email}}</span></h4>
      </div>
    </div>

    <div class="row">
      <div class="photo-pp3"><h4 style="font-size:25px; margin-top: 40px" align="center">Location  and Site Map<h4 align="right" style="font-size: 22px; margin-top: 2px"><i class="fa fa-long-arrow-up" aria-hidden="true">North</i></h4>
        <h4 style="font-size: 12px; padding-top: 385px"> From main Road Street_______________the distance of the Residence is ______meters(approxmiately)</h4>
      </div>
    </div>

    <div class="row official">
      <div class="heading">
        <h2 align="center">धितोपत्र कारोवारको सम्बन्धमा तपशिल बमोजिमको स्वघोषणा गर्दछु ।</h2>
      </div>
      <div class="col-full">
        <h4>१. म/हामीले धितोपत्र खरिदका लागि प्रयोग गर्ने रकम सम्पत्ती शुद्धिकरण सम्बन्धी प्रचलित कानुन विपरित आर्जन गरेको हुने छैन ।</h4>
        <h4>२. धितोपत्रमा गरिएको लगानीमा निहित जोखिमको सम्बन्धमा जानकार छु ।</h4>
        <h4>३. म/हामीले खरिद गरेको धितोपत्रहरु वापतको भुक्तानी लिने दिने कार्य तोकिएको समय भित्र गर्ने छु।</h4>
        <h4>४. म/हामीले धितोपत्र सम्बन्धी तथा अन्य प्रचलित नियम कानूनहरुको पालना गर्नेछु ।</h4>
        <h4>५. म/हामी कर्जा सूचना केन्दको कालो सुचीमा रहेको छु/छैन ।</h4>
      </div>
    </div>

    <div class="row official">
      <div class="heading">
        <h2 align="center"style="font-size:25px">संलग्न गर्नु पर्ने कागजात</h2>
      </div>
      <div class="col-full">
        <h4>१. नेपाली नागरिकहरुको हकमा नागरिकताका प्रमाणपत्रको प्रतिलिपी ।</h4>
        <h4>२. अन्य देशको नागरिकको हकमा पासपोर्टको प्रतिलिपी ।</h4>
        <h4>३. नाबालकको हकमा संरक्षक तथा नाबालक दुवैको फोटो ।</h4>
        <h4>४. कानूनी संरक्षक भए सो सम्बन्धी कागजात ।</h4>
        <h4>५. आमा वा बाबु संरक्षक भएमा छोरा वा छोरी जन्मदर्ता प्रमाणपत्रको प्रतिलिपी ।</h4>
        <h4>६. निवेदकको हस्ताक्षर तथा औंठा छापमा संरक्षकको हस्ताक्षर तथा औंठा छाप ।</h4>
        <h4>७. कुनै संस्थाको कर्मचारी रहेको हकमा कर्मचारी परिचयपत्रको प्रतिलिपी ।</h4>
      </div>
      <hr>
      <div class="col-full">
        <h4 align="left">माथि उल्लेखित विवरण सत्य तथ्य रहेको र सो विवरणमा कुनै फरक परे कानून बमोजिम सहँला, बुझाउँला । I/We hereby acknowledge that the above disclosed details are true. I further hereby consent to bear any legal actions in case any false disclosure of information related to me/us.</h4>
      </div>
       <hr>
       <div class="photo-pp1">
        <div class="upper-box">
          <h4 style="font-size:15px;" align="center">Thumb Print<br>()</h4>
        </div>
        <div class="lower-box">
          
        </div>
        </div>
       <h4 align="right"><br></br><br></br><span style="font-size: 20px;">.....................................</span> <br><br/><span style="font-size: 25px;">Client`s Signature</span>
      </div>
    </div>
    <div class="row">
      <div class="heading">
        <h2 align="center" style="padding: 8px;">कार्यालय प्रयोजनको  लागि (For Official Use)</h2>
      </div>
      <div class="col-third">
        <h2> रुजु गर्ने:</h2>
        <h4>नाम, थर :<span class="answer">____________________________</span></h4>
        <h4>पद :<span class="answer">___________________________________</span></h4>
        <h4>हस्ताक्षर :<span class="answer">______________________________</span></h4>
        <h4>मिति :<span class="answer">__________________________________</span></h4>
      </div>
      <div class="col-third">
        <div class="photo-pp2" style="margin:15px;"></div>
        <h4>कार्यालयको नाम तथा छाप</h4>
        <h4 style="margin-top:60px;">____________________<br></h4><h4  align="center" style="margin-right: 200px;"> प्रविष्टी गर्नेको हस्ताक्षर</h4>
      </div>
      <div class="col-third">
       <h2> प्रमाणित गर्ने:</h2>
        <h4>नाम, थर :<span class="answer">______________________________</span></h4>
        <h4>पद :<span class="answer">__________________________________</span></h4>
        <h4>हस्ताक्षर :<span class="answer">_____________________________</span></h4>
        <h4>मिति :<span class="answer">_________________________________</span></h4>
      </div>
    </div>

    <h4 >सिफारिस कर्ताको नाम:<br>फोन न.:</h4>
    
</div>

      </div>
    </div>  
</body>

</html>
