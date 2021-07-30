<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Models\Car;
class OrdersController extends Controller
{

    public function postOrder(Request $request){
        
        if($request->payment_type){

        }
        $response = Order::create([
            "customer_name" => $request->names,
            "ordered_car" => $request->car,
            "pickup_date" => $request->pickup_date." ".$request->pickup_time,
            "return_date" => $request->dropoff_date." ".$request->dropoff_time,
            "phone" => $request->phone,
            "email" => $request->email,
            "suggestions" => $request->suggestions,
            "extras" => $request->extras,
            "payment_type" => $request->payment_type,
            "total_payed" => $request->total_payed,
            'location' => $request->location,
            'additionals' => $request->checkone,
			'status' => "Gözləmədə",
           ]);
		   
		   $to = $request->email;
		   $subject = "Ramrent - Yeni Sifariş Yaradıldı";
		   $txt = "Hörmətli $request->names Sizin sifarişiniz yaradıldı bura hələlik test textləri yazılır";
		   $headers = "From: ramrent.testjed.me" . "\r\n" .
		   "CC: gamepro1188@gmail.com";
		   
		   mail($to,$subject,$txt,$headers);
   
		   if($request->payment_type == 1){
			return  $this->payment(50);
		   }else{
			   return view('Front.thank-you');
		   }
  
    }
	public function getCarData(Request $request){
		$data = Car::where("id", $request->id)->first();
		return response($data);
	}
	public function getCarByCategory(Request $request){
		$data = Car::where("brand_id", $request->brand_id)->get();
		$output = [];
		foreach($data as $brand){
			$output[] = "
			<option style='color: black; text-transform:uppercase' value='$brand->id'>$brand->model $brand->year</option>
			";
		}
		return $output;
	}

	public function getCar(Request $request){
		if($request->id){
			$data = Car::where("id", $request->id)->get();
			$output = [];
		foreach($data as $brand){
			$dat = $brand->category;
			$output[] = "
			<div class='card for-rent'>
			<img
			  src='https://ramrent.az/storage/$brand->thumbnail'
			  class='card-img-top'
			  alt='...'
			/>
			<div class='card-body'>
			  <h5 class='card-title'> $dat->name $brand->model $brand->year</h5>
	
			</div>
		  </div>
			";
		}
		}
		if($request->forbrand){
			$data = Car::where("brand_id", $request->forbrand)->first();
			$dat = $data->category;
			$output[] = "
			<div class='card for-rent'>
			<img
			  src='https://ramrent.az/storage/$data->thumbnail'
			  class='card-img-top'
			  alt='...'
			/>
			<div class='card-body'>
			  <h5 class='card-title'> $dat->name $data->model $data->year</h5>
	
			</div>
		  </div>
			";
		}
		
		
		return $output;
	}

	public function payment($price){
		$input_xml='<?xml version="1.0" encoding="UTF-8"?>';
			$input_xml .="<TKKPG>";
			$input_xml .="<Request>";
			$input_xml .="<Operation>CreateOrder</Operation>";
			$input_xml .="<Language>AZ</Language>";
			$input_xml .="<Order>";
			$input_xml .="<OrderType>Purchase</OrderType>";
			$input_xml .="<Merchant>E1050031</Merchant>";
			// $input_xml .="<Merchant>E1100005</Merchant>";
			$input_xml .="<Amount>".(($price) *100)."</Amount>";
			$input_xml .="<Currency>944</Currency>";
			$input_xml .="<Description> Aciqlama </Description>"; //bura istediyiniz achiqlama yaza bilersiz Payment for user id:".$userId."  bunlarin yerine
			$input_xml .="<ApproveURL>https://ramrent.testjed.me</ApproveURL>";
			$input_xml .="<CancelURL>https://ramrent.testjed.me</CancelURL>";
			$input_xml .="<DeclineURL>https://ramrent.testjed.me</DeclineURL>";
			$input_xml .="</Order>";
			$input_xml .="</Request>";
			$input_xml .="</TKKPG>";


			$url = "https://e-commerce.kapitalbank.az:5443/Exec";
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_VERBOSE, true);
			curl_setopt($ch, CURLOPT_SSLCERT, getcwd().'/ram_merchant.crt');
			curl_setopt($ch, CURLOPT_SSLKEY, getcwd().'/ramrent.key');
			curl_setopt($ch, CURLOPT_KEYPASSWD, '');
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $input_xml);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);

			$data = curl_exec($ch);
			$err = curl_errno($ch)." ".curl_error($ch);

			curl_close($ch);

			$array_data = json_decode(json_encode(simplexml_load_string($data)), true);
			$status = $array_data['Response']['Status'];


	if ($status=="00"){

		$orderId = $array_data['Response']['Order']['OrderID'];
		$sessionId = $array_data['Response']['Order']['SessionID'];
		$url = $array_data['Response']['Order']['URL'];




		$_SESSION['orderId'] =$orderId;
		$_SESSION['sessionId']= $sessionId;
		header('Access-Control-Allow-Origin: https://site/');
		header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
		header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
		$link = 'https://e-commerce.kapitalbank.az/index.jsp?'."ORDERID=".$orderId."&SESSIONID=".$sessionId;
		$_SESSION['orderId']= $orderId;
		$_SESSION['sessionId']= $sessionId;

		$time = date("Y-m-d H:i:s");
		$myfile = fopen("saleLog.txt", "a");
		fwrite($myfile, $time." : ".$link."\n");
		fclose($myfile);



					ob_start();
			
			header('Location:'.$link);   	
			}
            else if ($status=="30"){
			echo "Məcburi sahələr doldurulmayıb!";
			header('Location: https://site/');
			}
            else{
				echo "Xeta bash verdi!".$status;
			}

			return $status;
	}
    
    public function getOrders(){
        $data = Order::orderby('id', 'desc')->get();
        return view('vendor.orders', compact('data'));
    }
}
