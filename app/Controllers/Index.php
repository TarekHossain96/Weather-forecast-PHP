<?php 
class Index extends Controller{
	public function __construct(){
		parent::__construct();
	}
    public function Index(){
		$this->home();
	}
	public function home(){

        if(empty($_POST['city'])) {
		$model = $this->load->model("WeatherModel");
		$data = $model->current_weather($city=null);
		$seven_day = $model->forecast_weather($city=null);
		
		$this->load->view("header");
		$this->load->view("navbar");
		$this->load->view("search");
		$this->load->view("index", $data,$seven_day);
        $this->load->view("footer");
        }else{
            
                $data['current_weather']=null;
                $seven_day['forecast_weather']=null;
            
        }
		
	}
	public function getforecasting(){	
		if(!empty($_POST['city'])) {
			
		   $model = $this->load->model("WeatherModel");
		   $data = $model->current_weather($_POST['city']);
		   $seven_day = $model->forecast_weather($_POST['city']);

		   $this->load->view("header");
		   $this->load->view("navbar");
		   $this->load->view("search");
           $this->load->view("index", $data,$seven_day);
           $this->load->view("footer");
		} else {
			$data['current_weather']=null;
			$seven_day['forecast_weather']=null;
		}
	}
}

?>