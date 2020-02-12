<?php 
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Darpan;

use  Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Support\Facades\Session;

use \PDF;



class DarpanController extends Controller
{
    public function index(){
    	return view('index_darpan');
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

       $request->session()->put([
        'full_name'=>$request->input('full_name'),
        'dob_day_ad'=>$request->input('dob_day_ad'),
        'dob_month_ad'=>$request->input('dob_month_ad'),
        'dob_year_ad'=>$request->input('dob_year_ad'),
        'dob_ad'=>$request->input('dob_ad'),
        'dob_day_bs'=>$request->input('dob_day_bs'),
        'dob_month_bs'=>$request->input('dob_month_bs'),
        'dob_year_bs'=>$request->input('dob_year_bs'),
        'dob_bs'=>$request->input('dob_bs'),
        'gender'=>$request->input('gender'),
        'nationality'=>$request->input('nationality'),
        'cit_num'=>$request->input('cit_num'),
        'cit_iss_day'=>$request->input('cit_iss_day'),
        'cit_iss_month'=>$request->input('cit_iss_month'),
        'cit_iss_year'=>$request->input('cit_iss_year'),
        'cit_iss_district'=>$request->input('cit_iss_district'),
        
        'ben_comp_name'=>$request->input('ben_comp_name'),
        'ben_id_number'=>$request->input('ben_id_number'),
        'pan'=>$request->input('pan'),
        'nrn'=>$request->input('nrn'),
        'country'=>$request->input('country'),
        'cur_province'=>$request->input('cur_province'),
        'cur_district'=>$request->input('cur_district'),
        'cur_municipal'=>$request->input('cur_municipal'),
        'cur_ward_num'=>$request->input('cur_ward_num'),
        'cur_tole'=>$request->input('cur_tole'),
        'cur_full_address'=>$request->input('cur_full_address'),
        'cur_tele'=>$request->input('cur_tele'),
        'cur_email'=>$request->input('cur_email'),
        'cur_mob'=>$request->input('cur_mob'),
        'cur_full_address'=>$request->input('cur_full_address'),
        'per_province'=>$request->input('per_province'),
        'per_district'=>$request->input('per_district'),
        'per_municipal'=>$request->input('per_municipal'),
        'per_ward_num'=>$request->input('per_ward_num'),
        'per_tole'=>$request->input('per_tole'),
        'per_tele'=>$request->input('per_tele'),
        'per_full_address'=>$request->input('per_full_address'),
        'father_name'=>$request->input('father_name'),
        'grandfather_name'=>$request->input('grandfather_name'),
        'mother_name'=>$request->input('mother_name'),
        'spouse_name'=>$request->input('spouse_name'),
        'son_name'=>$request->input('son_name'),
        'daughter_name'=>$request->input('daughter_name'),
        'daughter_law_name'=>$request->input('daughter_law_name'),
        'father_law_name'=>$request->input('father_law_name'),
        'mother_law_name'=>$request->input('mother_law_name'),
        'bank_acc_type'=>$request->input('bank_acc_type'),
        'bank_acc_num'=>$request->input('bank_acc_num'),
        'bank_name'=>$request->input('bank_name'),
        'bank_branch_address'=>$request->input('bank_branch_address'),
        'occupation'=>$request->input('occupation'),
        'bus_type'=>$request->input('bus_type'),
        'org_name'=>$request->input('org_name'),
        'org_address'=>$request->input('org_address'),
        'designation'=>$request->input('designation'),
        'emp_id_num'=>$request->input('emp_id_num'),
        'finan_detail'=>$request->input('finan_detail'),
        'inv_company'=>$request->input('inv_company'),
        'desig_inv_company'=>$request->input('desig_inv_company'),
        'minor_full_name'=>$request->input('minor_full_name'),
        'minor_relation'=>$request->input('minor_relation'),
        'minor_mail_address'=>$request->input('minor_mail_address'),
        'minor_country'=>$request->input('minor_country'),

        'minor_province'=>$request->input('minor_province'),
        'minor_district'=>$request->input('minor_district'),
        'minor_municipal'=>$request->input('minor_municipal'),
        'minor_ward_num'=>$request->input('minor_ward_num'),
        'minor_address'=>$request->input('minor_address'),

        'minor_tele'=>$request->input('minor_tele'),
        'minor_fax'=>$request->input('minor_fax'),
        'minor_mob'=>$request->input('minor_mob'),
        'minor_pan'=>$request->input('minor_pan'),
        'minor_email'=>$request->input('minor_email')
        



    ]);

    	return redirect()->route('form.printForm')->withInput($request->input());
      }

    public function printForm(){
        return view('print_darpan')
            ->with('full_name',session()->get('full_name'))
            ->with('dob_day_ad',session()->get('dob_day_ad'))
            ->with('dob_month_ad',session()->get('dob_month_ad'))
            ->with('dob_year_ad',session()->get('dob_year_ad'))
           
            ->with('dob_day_bs',session()->get('dob_day_bs'))
            ->with('dob_month_bs',session()->get('dob_month_bs'))
            ->with('dob_year_bs',session()->get('dob_year_bs'))
            
            ->with('gender',session()->get('gender'))
            ->with('nationality',session()->get('nationality'))
            ->with('cit_num',session()->get('cit_num'))
            ->with('cit_iss_day',session()->get('cit_iss_day'))
            ->with('cit_iss_month',session()->get('cit_iss_month'))
            ->with('cit_iss_year',session()->get('cit_iss_year'))
            ->with('cit_iss_district',session()->get('cit_iss_district'))
    
            ->with('ben_comp_name',session()->get('ben_comp_name'))
            ->with('ben_id_number',session()->get('ben_id_number'))
            ->with('pan',session()->get('pan'))
            ->with('nrn',session()->get('nrn'))
            ->with('country',session()->get('country'))
            ->with('cur_province',session()->get('cur_province'))
            ->with('cur_district',session()->get('cur_district'))
            ->with('cur_municipal',session()->get('cur_municipal'))
            ->with('cur_ward_num',session()->get('cur_ward_num'))
            ->with('cur_tole',session()->get('cur_tole'))
            ->with('cur_full_address',session()->get('cur_full_address'))
            ->with('cur_tele',session()->get('cur_tele'))
            ->with('cur_email',session()->get('cur_email'))
            ->with('cur_mob',session()->get('cur_mob'))
            ->with('cur_full_address',session()->get('cur_full_address'))
            ->with('per_province',session()->get('per_province'))
            ->with('per_district',session()->get('per_district'))
            ->with('per_municipal',session()->get('per_municipal'))
            ->with('per_ward_num',session()->get('per_ward_num'))
            ->with('per_tole',session()->get('per_tole'))

            ->with('per_tele',session()->get('per_tele'))
            ->with('per_full_address',session()->get('per_full_address'))
            ->with('grandfather_name',session()->get('grandfather_name'))
            ->with('father_name',session()->get('father_name'))
            ->with('spouse_name',session()->get('spouse_name'))
            ->with('mother_name',session()->get('mother_name'))
            ->with('son_name',session()->get('son_name'))
            ->with('daughter_law_name',session()->get('daughter_law_name'))
            ->with('daughter_name',session()->get('daughter_name'))
            ->with('father_law_name',session()->get('father_law_name'))
            ->with('mother_law_name',session()->get('mother_law_name'))
            ->with('bank_name',session()->get('bank_name'))
            ->with('bank_branch_address',session()->get('bank_branch_address'))
            ->with('bank_acc_type',session()->get('bank_acc_type'))
            ->with('bank_acc_num',session()->get('bank_acc_num'))
            ->with('occupation',session()->get('occupation'))
            ->with('bus_type',session()->get('bus_type'))
            ->with('org_name',session()->get('org_name'))
            ->with('org_address',session()->get('org_address'))
            ->with('designation',session()->get('designation'))
            ->with('emp_id_num',session()->get('emp_id_num'))
            ->with('finan_detail',session()->get('finan_detail'))
            ->with('inv_company',session()->get('inv_company'))
            ->with('desig_inv_company',session()->get('desig_inv_company'))
            ->with('minor_full_name',session()->get('minor_full_name'))
            ->with('minor_relation',session()->get('minor_relation'))
            ->with('minor_mail_address',session()->get('minor_mail_address'))
            ->with('minor_country',session()->get('minor_country'))
            ->with('minor_province',session()->get('minor_province'))
            ->with('minor_district',session()->get('minor_district'))
            ->with('minor_municipal',session()->get('minor_municipal'))
            ->with('minor_ward_num',session()->get('minor_ward_num'))
            ->with('minor_address',session()->get('minor_address'))
            ->with('minor_tele',session()->get('minor_tele'))
            ->with('minor_mob',session()->get('minor_mob'))
            ->with('minor_fax',session()->get('minor_fax'))
            ->with('minor_pan',session()->get('minor_pan'))
            ->with('minor_email',session()->get('minor_email'));

    }

    public function downloadPDF(){

        $pdf= PDF::loadView('pdf');

        return $pdf->download('info.pdf')->with('full_name',session()->get('full_name'));
    }

   }