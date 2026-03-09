<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Cbt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CBTController extends Controller
{


    function index(Request $request){

        $data['id'] = "";
        $data['automatic_thought'] = "";
        $data['challenge_thought'] = "";
        $data['alternative_thought'] = "";
        $data['thought_details'] = array();  
        if(isMobile()){
            return view("mobile.services.cbt.index",compact('data'));
        }
        return view('services.cbt.index',compact('data'));
    }

    function store(Request $request){
        $user = Auth::user();
        $input = $request->all();
        unset($input['_token']);
        if( !empty($input['thought_details']) ){
            $input['thought_details'] = json_encode($input['thought_details']);
        }
        $cbt = ( new Cbt());
        $msg = 'save';
        if( isset($input['id']) ){
            $id = $input['id'];
            unset($input['id']);
            $cbt->where(['user_id' => $user->id,'id' => $id  ])->update($input);
            $msg = 'update';
        }else{
            $input['user_id'] = $user->id;
            $cbt->insert($input);
        }

        $request->session()->flash('success', "Cognitive behavioural successfully {$msg}");
        if(isMobile()) {
            return true;
        }
        return redirect('cbt-therapy-list');
    }

    function list(Request $request){
        $user = Auth::user();
        $dataArray = [];
        $data = Cbt::where('user_id',$user->id)->orderBy('created_at','desc')->get();
        if( $data ){
            foreach($data as $key => $value){
                $label = date("D M d Y",strtotime($value->created_at));
                if( date('Y-m-d',strtotime($value->created_at)) == date('Y-m-d') ){
                    $label = "Today";
                }
                $dataArray[date('Y-m-d',strtotime($value->created_at))]['header'] = $label;
                $dataArray[date('Y-m-d',strtotime($value->created_at))]['list'][] = $value;
            }
        }
        if(isMobile()){
            return view("mobile.services.cbt.list",compact('dataArray'));
        }
        return view('services.cbt.list',compact('dataArray'));
    }

    function edit(Request $request){

        $id = $request->id;
        $user = Auth::user();
        $datas = Cbt::where(['user_id' => $user->id,'id' => $id])->first();
        $data['id'] = $datas['id'];
        $data['thought_details'] = $datas['thought_details'];
        $data['automatic_thought'] = $datas['automatic_thought'];
        $data['challenge_thought'] = $datas['challenge_thought'];
        $data['alternative_thought'] = $datas['alternative_thought'];
        if(isMobile()){
            return view("mobile.services.cbt.index",compact('data'));
        }
        return view("services.cbt.index",compact('data'));
    }

    function delete(Request $request){
        $user = Auth::user();
        $input = $request->all();
        Cbt::where(['user_id' => $user->id,'id' => $input['id'] ])->delete();
    }

    function cbtView(Request $request){
        $user = Auth::user();
        $input = $request->all();
        $data = Cbt::where(['user_id' => $user->id,'id' => $input['id'] ])->first();
        $html = "Hi";
        $html = view("mobile.services.cbt.view",compact('data'))->render();
		return response()->json(['data' => $html]);
    }
}
