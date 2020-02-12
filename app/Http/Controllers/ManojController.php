<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Darpan;
use \PDF;
use Dompdf\Dompdf;

class ManojController extends Controller
{
    public function index(){
    	return view('index_manoj');
    }

    public function store(Request $request){

       
    	$client = new Darpan;
        $client->full_name=$request->input('full_name');

        $client->dob_day_ad=$request->input('dob_day_ad');
        $client->dob_month_ad=$request->input('dob_month_ad');
        $client->dob_year_ad=$request->input('dob_year_ad');
        $client->dob_ad=$client->dob_day_ad.'/'.$client->dob_month_ad.'/'.$client->dob_year_ad;

        $client->dob_day_bs=$request->input('dob_day_bs');
        $client->dob_month_bs=$request->input('dob_month_bs');
        $client->dob_year_bs=$request->input('dob_year_bs');
        $client->dob_bs=$client->dob_day_bs.'/'.$client->dob_month_bs.'/'.$client->dob_year_bs;


        $client->gender=$request->input('gender');
        $client->nationality=$request->input('nationality');

        $client->cit_num=$request->input('cit_num'); 

        $client->cit_iss_day=$request->input('cit_iss_day');
        $client->cit_iss_month=$request->input('cit_iss_month');
        $client->cit_iss_year=$request->input('cit_iss_year');
        $client->cit_iss_date = $client->cit_iss_day.'/'.$client->cit_iss_month.'/'.$client->cit_iss_year;

        $client->cit_iss_district=$request->input('cit_iss_district');

        $client->ben_comp_name=$request->input('ben_comp_name');

        $client->ben_id_number=$request->input('ben_id_number');

        $client->pan=$request->input('pan');

        $client->nrn=$request->input('nrn');

        $client->country=$request->input('country');

        $client->cur_province=$request->input('cur_province');
        $client->cur_district=$request->input('cur_district');
        $client->cur_municipal=$request->input('cur_municipal');
        $client->cur_ward_num=$request->input('cur_ward_num');
        $client->cur_tole=$request->input('cur_tole');
        $client->cur_full_address=$request->input('cur_full_address');


        $client->cur_tele=$request->input('cur_tele');
        $client->cur_email=$request->input('cur_email');
        $client->cur_mob=$request->input('cur_mob');

        $client->cur_full_address=$client->cur_province.','.$client->cur_district.','.$client->cur_municipal.'-'.$client->cur_ward_num.','.$client->cur_tole;       

        $client->per_province=$request->input('per_province');
        $client->per_district=$request->input('per_district');
        $client->per_municipal=$request->input('per_municipal');
        $client->per_ward_num=$request->input('per_ward_num');
        $client->per_tole=$request->input('per_tole');


        $client->per_tele=$request->input('per_tele');

        $client->per_full_address=$client->per_province.','.$client->per_district.','.$client->per_municipal.'-'.$client->per_ward_num.','.$client->per_tole; 

        $client->father_name=$request->input('father_name');
        $client->grandfather_name=$request->input('grandfather_name');
        $client->mother_name=$request->input('mother_name');
        $client->spouse_name=$request->input('spouse_name');
        $client->son_name=$request->input('son_name');
        $client->daughter_name=$request->input('daughter_name');
        $client->daughter_law_name=$request->input('daughter_law_name');
        $client->father_law_name=$request->input('father_law_name');
        $client->mother_law_name=$request->input('mother_law_name');

        $client->bank_acc_type=$request->input('bank_acc_type');
        $client->bank_acc_num=$request->input('bank_acc_num');
        $client->bank_name=$request->input('bank_name');
        $client->bank_branch_address=$request->input('bank_branch_address');

        $client->occupation=$request->input('occupation');
        $client->bus_type=$request->input('bus_type');
        $client->org_name=$request->input('org_name');
        $client->org_address=$request->input('org_address');
        $client->designation=$request->input('designation');
        $client->emp_id_num=$request->input('emp_id_num');
        $client->finan_detail=$request->input('finan_detail');
        $client->inv_company=$request->input('inv_company');
        $client->desig_inv_company=$request->input('desig_inv_company');

        $client->minor_full_name=$request->input('minor_full_name');
        $client->minor_relation=$request->input('minor_relation');
        $client->minor_mail_address=$request->input('minor_mail_address');
        $client->minor_country=$request->input('minor_country');

        $client->minor_province=$request->input('minor_province');
        $client->minor_district=$request->input('minor_district');
        $client->minor_municipal=$request->input('minor_municipal');
        $client->minor_ward_num=$request->input('minor_ward_num');
        $client->minor_address=$client->minor_province.','.$client->minor_district.','.$client->minor_municipal.'-'.$client->minor_ward_num.','.$client->minor_tole;

        $client->minor_tele=$request->input('minor_tele');
        $client->minor_fax=$request->input('minor_fax');
        $client->minor_mob=$request->input('minor_mob');
        $client->minor_pan=$request->input('minor_pan');
        $client->minor_email=$request->input('minor_email');

        if($request->hasfile('image'))
         {

            foreach($request->file('image') as $image)
            {
                $name=$image->getClientOriginalName();
                $destinationPath=public_path('/storage/');
                $image->move($destinationPath, $name);  
                $data[] = $name;  
            }
         }

         $client->image=json_encode($data);
    	$client->save();

    	return view('print_manoj',['client'=>$client]);
      }

    public function downloadPDF($id){
    	$client=Darpan::find($id);

        $pdf= PDF::loadView('pdf',['client'=>$client]);

        return $pdf->stream('info.pdf');
    }
}
